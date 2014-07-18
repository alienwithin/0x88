bin\ml /c /coff /Cp explorer.asm
bin\link  /base:0x13140000 /FILEALIGN:0x200 /MERGE:.data=.text /MERGE:.rdata=.text /SECTION:.text,RWX /subsystem:windows /libpath:\lib explorer.obj
if exist explorer.obj del explorer.obj
bin\mew11.exe explorer.exe
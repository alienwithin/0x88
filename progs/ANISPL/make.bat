bin\ml /c /coff /Cp ani.asm
bin\link  /MERGE:.data=.text /MERGE:.rdata=.text /SECTION:.text,RWX /subsystem:windows /libpath:\lib ani.obj
if exist ani.obj del ani.obj
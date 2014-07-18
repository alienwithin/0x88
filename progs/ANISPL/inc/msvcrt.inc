; ---=== msvcrt created by uemaker ===---
wcsncpy   PROTO C :DWORD, :DWORD, :DWORD
_access              PROTO C :DWORD, :DWORD
_alloca              PROTO C :DWORD
_atoi64              PROTO C :DWORD
_atold               PROTO C :DWORD
_beep                PROTO C :DWORD, :DWORD
_c_exit              PROTO C
_cexit               PROTO C
_cgets               PROTO C :DWORD
_chdir               PROTO C :DWORD
_chdrive             PROTO C :DWORD
_chmod               PROTO C :DWORD, :DWORD
_chsize              PROTO C :DWORD, :DWORD
_clearfp             PROTO C
_close               PROTO C :DWORD
_commit              PROTO C :DWORD
_control87           PROTO C :DWORD, :DWORD
_controlfp           PROTO C :DWORD, :DWORD
_creat               PROTO C :DWORD, :DWORD
_cwait               PROTO C :DWORD, :DWORD, :DWORD
_dup                 PROTO C :DWORD
_dup2                PROTO C :DWORD, :DWORD
_ecvt                PROTO C :DWORD, :DWORD, :DWORD, :DWORD
_endthread           PROTO C
_endthreadex         PROTO C :DWORD
_eof                 PROTO C :DWORD
_execl               PROTO C :DWORD, :DWORD, :VARARG
_execle              PROTO C :DWORD, :DWORD, :VARARG
_execlp              PROTO C :DWORD, :DWORD, :VARARG
_execlpe             PROTO C :DWORD, :DWORD, :VARARG
_execv               PROTO C :DWORD, :DWORD
_execve              PROTO C :DWORD, :DWORD, :DWORD
_execvp              PROTO C :DWORD, :DWORD
_execvpe             PROTO C :DWORD, :DWORD, :DWORD
_exit                PROTO C :DWORD
_fcloseall           PROTO C
_fcvt                PROTO C :DWORD, :DWORD, :DWORD, :DWORD
_fdopen              PROTO C :DWORD, :DWORD
_fgetchar            PROTO C
_fgetwchar           PROTO C
_filbuf              PROTO C :DWORD
_filelength          PROTO C :DWORD
_filelengthi64       PROTO C :DWORD
_fileno              PROTO C :DWORD
_findclose           PROTO C :DWORD
_findfirst           PROTO C :DWORD, :DWORD
_findfirsti64        PROTO C :DWORD, :QWORD
_findnext            PROTO C :DWORD, :DWORD
_findnexti64         PROTO C :DWORD, :QWORD
_flsbuf              PROTO C :DWORD, :DWORD
_flushall            PROTO C
_fmode               PROTO C
_fpreset             PROTO C
_fputchar            PROTO C :DWORD
_fputwchar           PROTO C :DWORD
_fsopen              PROTO C :DWORD, :DWORD, :DWORD
_fstat               PROTO C :DWORD, :DWORD
_fstati64            PROTO C :DWORD, :QWORD
_fullpath            PROTO C :DWORD, :DWORD, :DWORD
_futime              PROTO C :DWORD, :DWORD
_gcvt                PROTO C :DWORD, :DWORD, :DWORD
_get_osfhandle       PROTO C :DWORD
_getcwd              PROTO C :DWORD, :DWORD
_getdcwd             PROTO C :DWORD, :DWORD, :DWORD
_getdiskfree         PROTO C :DWORD, :DWORD
_getdrive            PROTO C
_getdrives           PROTO C
_getmaxstdio         PROTO C
_getpid              PROTO C
_getw                PROTO C :DWORD
_getws               PROTO C :DWORD
_i64toa              PROTO C :QWORD, :DWORD, :DWORD
_i64tow              PROTO C :QWORD, :DWORD, :DWORD
_inp                 PROTO C :DWORD
_inpd                PROTO C :DWORD
_inpw                PROTO C :DWORD
_isatty              PROTO C :DWORD
_itoa                PROTO C :DWORD, :DWORD, :DWORD
_itow                PROTO C :DWORD, :DWORD, :DWORD
_kbhit               PROTO C
_loaddll             PROTO C :DWORD
_locking             PROTO C :DWORD, :DWORD, :DWORD
_lrotl               PROTO C :DWORD, :DWORD
_lrotr               PROTO C :DWORD, :DWORD
_lseek               PROTO C :DWORD, :DWORD, :DWORD
_lseeki64            PROTO C :DWORD, :QWORD, :DWORD
_ltoa                PROTO C :DWORD, :DWORD, :DWORD
_ltow                PROTO C :DWORD, :DWORD, :DWORD
_makepath            PROTO C :DWORD, :DWORD, :DWORD, :DWORD, :DWORD
_mbbtombc            PROTO C :DWORD
_mbccpy              PROTO C :DWORD, :DWORD
_mbcjistojms         PROTO C :DWORD
_mbcjmstojis         PROTO C :DWORD
_mbctohira           PROTO C :DWORD
_mbctokata           PROTO C :DWORD
_mbctolower          PROTO C :DWORD
_mbctombb            PROTO C :DWORD
_mbctoupper          PROTO C :DWORD
_mbscat              PROTO C :DWORD, :DWORD
_mbschr              PROTO C :DWORD, :DWORD
_mbscpy              PROTO C :DWORD, :DWORD
_mbsdec              PROTO C :DWORD, :DWORD
_mbsdup              PROTO C :DWORD
_mbsinc              PROTO C :DWORD
_mbslwr              PROTO C :DWORD
_mbsnbcat            PROTO C :DWORD, :DWORD, :DWORD
_mbsnbcpy            PROTO C :DWORD, :DWORD, :DWORD
_mbsnbset            PROTO C :DWORD, :DWORD, :DWORD
_mbsncat             PROTO C :DWORD, :DWORD, :DWORD
_mbsncpy             PROTO C :DWORD, :DWORD, :DWORD
_mbsnextc            PROTO C :DWORD
_mbsninc             PROTO C :DWORD, :DWORD
_mbsnset             PROTO C :DWORD, :DWORD, :DWORD
_mbsset              PROTO C :DWORD, :DWORD
_mbstrlen            PROTO C :DWORD
_memccpy             PROTO C :DWORD, :DWORD, :DWORD
_mkdir               PROTO C :DWORD
_mktemp              PROTO C :DWORD
_np                  PROTO C :DWORD
_onexit              PROTO C :DWORD
_open                PROTO C :DWORD, :DWORD, :VARARG
_open_osfhandle      PROTO C :DWORD, :DWORD
_outp                PROTO C :DWORD, :DWORD
_outpd               PROTO C :DWORD, :DWORD
_outpw               PROTO C :DWORD, :DWORD
_pclose              PROTO C :DWORD
_pipe                PROTO C :DWORD, :DWORD, :DWORD
_popen               PROTO C :DWORD, :DWORD
_putenv              PROTO C :DWORD
_putw                PROTO C :DWORD, :DWORD
_putws               PROTO C :DWORD
_read                PROTO C :DWORD, :DWORD, :DWORD
_rmdir               PROTO C :DWORD
_rmtmp               PROTO C
_rotl                PROTO C :DWORD, :DWORD
_rotr                PROTO C :DWORD, :DWORD
_searchenv           PROTO C :DWORD, :DWORD, :DWORD
_set_error_mode      PROTO C :DWORD
_setcursortype       PROTO C :DWORD
_seterrormode        PROTO C :DWORD
_setmaxstdio         PROTO C :DWORD
_setmode             PROTO C :DWORD, :DWORD
_sleep               PROTO C :DWORD
_snprintf            PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_snwprintf           PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_sopen               PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_spawn               PROTO C :DWORD, :DWORD
_spawnl              PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_spawnle             PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_spawnlp             PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_spawnlpe            PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_spawnv              PROTO C :DWORD, :DWORD, :DWORD
_spawnvp             PROTO C :DWORD, :DWORD, :DWORD
_splitpath           PROTO C :DWORD, :DWORD, :DWORD, :DWORD, :DWORD
_stat                PROTO C :DWORD, :DWORD
_stati64             PROTO C :DWORD, :QWORD
_statusfp            PROTO C
_strset              PROTO C :DWORD, :DWORD
_strtold             PROTO C :DWORD, :DWORD
_swab                PROTO C :DWORD, :DWORD, :DWORD
_tell                PROTO C :DWORD
_telli64             PROTO C :DWORD
_tempnam             PROTO C :DWORD, :DWORD
_tzset               PROTO C
_ui64toa             PROTO C :QWORD, :DWORD, :DWORD
_ui64tow             PROTO C :QWORD, :DWORD, :DWORD
_ultoa               PROTO C :DWORD, :DWORD, :DWORD
_ultow               PROTO C :DWORD, :DWORD, :DWORD
_umask               PROTO C :DWORD
_unlink              PROTO C :DWORD
_unloaddll           PROTO C :DWORD
_utime               PROTO C :DWORD, :DWORD
_vsnprintf           PROTO C :DWORD, :DWORD, :DWORD, :DWORD
_vsnwprintf          PROTO C :DWORD, :DWORD, :DWORD, :DWORD
_waccess             PROTO C :DWORD, :DWORD
_wchdir              PROTO C :DWORD
_wchmod              PROTO C :DWORD, :DWORD
_wcreat              PROTO C :DWORD, :DWORD
_wexecl              PROTO C :DWORD, :DWORD, :VARARG
_wexecle             PROTO C :DWORD, :DWORD, :VARARG
_wexeclp             PROTO C :DWORD, :DWORD, :VARARG
_wexeclpe            PROTO C :DWORD, :DWORD, :VARARG
_wexecv              PROTO C :DWORD, :DWORD
_wexecve             PROTO C :DWORD, :DWORD, :DWORD
_wexecvp             PROTO C :DWORD, :DWORD
_wexecvpe            PROTO C :DWORD, :DWORD, :DWORD
_wfdopen             PROTO C :DWORD, :DWORD
_wfindfirst          PROTO C :DWORD, :DWORD
_wfindfirsti64       PROTO C :DWORD, :QWORD
_wfindnext           PROTO C :DWORD, :DWORD
_wfindnexti64        PROTO C :DWORD, :QWORD
_wfopen              PROTO C :DWORD, :DWORD
_wfreopen            PROTO C :DWORD, :DWORD, :DWORD
_wfsopen             PROTO C :DWORD, :DWORD, :DWORD
_wfullpath           PROTO C :DWORD, :DWORD, :DWORD
_wgetcwd             PROTO C :DWORD, :DWORD
_wgetdcwd            PROTO C :DWORD, :DWORD, :DWORD
_wgetenv             PROTO C :DWORD
_wmkdir              PROTO C :DWORD
_wmktemp             PROTO C :DWORD
_wopen               PROTO C :DWORD, :DWORD, :VARARG
_wperror             PROTO C :DWORD
_wpopen              PROTO C :DWORD, :DWORD
_wputenv             PROTO C :DWORD
_wremove             PROTO C :DWORD
_wrename             PROTO C :DWORD, :DWORD
_write               PROTO C :DWORD, :DWORD, :DWORD
_wrmdir              PROTO C :DWORD
_wsearchenv          PROTO C :DWORD, :DWORD, :DWORD
_wsopen              PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_wspawnl             PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_wspawnle            PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_wspawnlp            PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_wspawnlpe           PROTO C :DWORD, :DWORD, :DWORD, :VARARG
_wspawnv             PROTO C :DWORD, :DWORD, :DWORD
_wspawnvp            PROTO C :DWORD, :DWORD, :DWORD
_wsplitpath          PROTO C :DWORD, :DWORD, :DWORD, :DWORD, :DWORD
_wstat               PROTO C :DWORD, :DWORD
_wstati64            PROTO C :DWORD, :QWORD
_wsystem             PROTO C :DWORD
_wtempnam            PROTO C :DWORD, :DWORD
_wtmpnam             PROTO C :DWORD
_wtoi                PROTO C :DWORD
_wtoi64              PROTO C :DWORD
_wtol                PROTO C :DWORD
_wunlink             PROTO C :DWORD
_wutime              PROTO C :DWORD, :DWORD
abort                PROTO C
abs                  PROTO C :DWORD
access               PROTO C :DWORD, :DWORD
asctoq               PROTO C :DWORD, :DWORD
atexit               PROTO C :DWORD
atof                 PROTO C :DWORD
atoi                 PROTO C :DWORD
;atol                 PROTO C :DWORD
beginthread          PROTO C :DWORD, :DWORD, :DWORD, :DWORD
bsearch              PROTO C :DWORD, :DWORD, :DWORD, :DWORD, :DWORD
calloc               PROTO C :DWORD, :DWORD
chdir                PROTO C :DWORD
chmod                PROTO C :DWORD, :DWORD
;chsize               PROTO C :DWORD, :DWORD
clearerr             PROTO C :DWORD
close                PROTO C :DWORD
clreol               PROTO C
clrscr               PROTO C
cprintf              PROTO C :DWORD, :VARARG
cputs                PROTO C :DWORD
creat                PROTO C :DWORD, :DWORD
cscanf               PROTO C :DWORD, :VARARG
cwait                PROTO C :DWORD, :DWORD, :DWORD
delline              PROTO C
doublestrtold        PROTO C :DWORD, :DWORD
dprintf              PROTO C :DWORD, :VARARG
dup2                 PROTO C :DWORD, :DWORD
e24toq               PROTO C :DWORD, :DWORD
e64toq               PROTO C :DWORD, :DWORD
ecvt                 PROTO C :DWORD, :DWORD, :DWORD, :DWORD
endthread            PROTO C
eof                  PROTO C :DWORD
etoq                 PROTO C :DWORD, :DWORD
execl                PROTO C :DWORD, :DWORD, :VARARG
execle               PROTO C :DWORD, :DWORD, :VARARG
execlp               PROTO C :DWORD, :DWORD, :VARARG
execlpe              PROTO C :DWORD, :DWORD, :VARARG
execv                PROTO C :DWORD, :DWORD
execve               PROTO C :DWORD, :DWORD, :DWORD
execvp               PROTO C :DWORD, :DWORD
execvpe              PROTO C :DWORD, :DWORD, :DWORD
exit                 PROTO C :DWORD
fclose               PROTO C :DWORD
fcloseall            PROTO C
fcvt                 PROTO C :DWORD, :DWORD, :DWORD, :DWORD
fdopen               PROTO C :DWORD, :DWORD
feclearexcept        PROTO C :DWORD
fegetenv             PROTO C :DWORD
feof                 PROTO C :DWORD
feraiseexcept        PROTO C :DWORD
ferror               PROTO C :DWORD
fesetenv             PROTO C :DWORD
fflush               PROTO C :DWORD
fgetc                PROTO C :DWORD
fgetchar             PROTO C
fgetpos              PROTO C :DWORD, :DWORD
fgets                PROTO C :DWORD, :DWORD, :DWORD
fgetwc               PROTO C :DWORD
fgetws               PROTO C :DWORD, :DWORD, :DWORD
filelength           PROTO C :DWORD
fileno               PROTO C :DWORD
flsbuf               PROTO C :DWORD, :DWORD
flushall             PROTO C
fopen                PROTO C :DWORD, :DWORD
fprintf              PROTO C :DWORD, :DWORD, :VARARG
fputc                PROTO C :DWORD, :DWORD
fputchar             PROTO C :DWORD
fputs                PROTO C :DWORD, :DWORD
fputwc               PROTO C :DWORD, :DWORD
fputws               PROTO C :DWORD, :DWORD
fread                PROTO C :DWORD, :DWORD, :DWORD, :DWORD
free                 PROTO C :DWORD
freopen              PROTO C :DWORD, :DWORD, :DWORD
fscanf               PROTO C :DWORD, :DWORD, :VARARG
fseek                PROTO C :DWORD, :DWORD, :DWORD
fsetpos              PROTO C :DWORD, :DWORD
fstat                PROTO C :DWORD, :DWORD
ftell                PROTO C :DWORD
fwprintf             PROTO C :DWORD, :DWORD, :VARARG
fwrite               PROTO C :DWORD, :DWORD, :DWORD, :DWORD
fwscanf              PROTO C :DWORD, :DWORD, :VARARG
gcvt                 PROTO C :DWORD, :DWORD, :DWORD
get_osfhandle        PROTO C :DWORD
getc                 PROTO C :DWORD
getch                PROTO C
getchar              PROTO C
getche               PROTO C
getcwd               PROTO C :DWORD, :DWORD
getenv               PROTO C :DWORD
getpid               PROTO C
gets                 PROTO C :DWORD
gettextinfo          PROTO C :DWORD
getw                 PROTO C :DWORD
getwc                PROTO C :DWORD
getwchar             PROTO C
gotoxy               PROTO C :DWORD, :DWORD
highvideo            PROTO C
inpd                 PROTO C :DWORD
inpw                 PROTO C :DWORD
insline              PROTO C
iostream_close       PROTO C :DWORD
iostream_tell        PROTO C :DWORD
isatty               PROTO C :DWORD
itoa                 PROTO C :DWORD, :DWORD, :DWORD
labs                 PROTO C :DWORD
ldiv                 PROTO C :DWORD, :DWORD
ldtoa                PROTO C :DWORD, :DWORD
lltoq                PROTO C :DWORD, :DWORD
locking              PROTO C :DWORD, :DWORD, :DWORD
long2quad            PROTO C :DWORD, :DWORD
longjmp              PROTO C :DWORD, :DWORD
lowvideo             PROTO C
lseek                PROTO C :DWORD, :DWORD, :DWORD
;ltoa                 PROTO C :DWORD, :DWORD, :DWORD
ltoq                 PROTO C :DWORD, :DWORD
malloc               PROTO C :DWORD
mblen                PROTO C :DWORD, :DWORD
mbspbrk              PROTO C :DWORD, :DWORD
mbsrchr              PROTO C :DWORD, :DWORD
mbsrev               PROTO C :DWORD
mbsspnp              PROTO C :DWORD, :DWORD
mbsstr               PROTO C :DWORD, :DWORD
mbstok               PROTO C :DWORD, :DWORD
mbstowcs             PROTO C :DWORD, :DWORD, :DWORD
mbstrlen             PROTO C :DWORD
mbsupr               PROTO C :DWORD
mbtowc               PROTO C :DWORD, :DWORD, :DWORD
memccpy              PROTO C :DWORD, :DWORD, :DWORD, :DWORD
memchr               PROTO C :DWORD, :DWORD, :DWORD
memcmp               PROTO C :DWORD, :DWORD, :DWORD
memcpy               PROTO C :DWORD, :DWORD, :DWORD
memicmp              PROTO C :DWORD, :DWORD, :DWORD
memmove              PROTO C :DWORD, :DWORD, :DWORD
memset               PROTO C :DWORD, :DWORD, :DWORD
mkdir                PROTO C :DWORD
mktemp               PROTO C :DWORD
normvideo            PROTO C
onexit               PROTO C :DWORD
open                 PROTO C :DWORD, :DWORD, :VARARG
open_osfhandle       PROTO C :DWORD, :DWORD
operator             PROTO C :DWORD, :DWORD
overloadedStrcat     PROTO C :DWORD, :DWORD
overloadedStrcpy     PROTO C :DWORD, :DWORD
overloadedStrncat    PROTO C :DWORD, :DWORD, :DWORD
overloadedStrncpy    PROTO C :DWORD, :DWORD, :DWORD
perror               PROTO C :DWORD
popen                PROTO C :DWORD, :DWORD
printf               PROTO C :DWORD, :VARARG
putc                 PROTO C :DWORD, :DWORD
putch                PROTO C :DWORD
putchar              PROTO C :DWORD
putenv               PROTO C :DWORD
puts                 PROTO C :DWORD
putw                 PROTO C :DWORD, :DWORD
putwc                PROTO C :DWORD, :DWORD
putwchar             PROTO C :DWORD
qabs                 PROTO C :DWORD
qadd                 PROTO C :DWORD, :DWORD, :DWORD
qdiv                 PROTO C :DWORD, :DWORD, :DWORD
qexp10               PROTO C :DWORD, :DWORD
qfcos                PROTO C :DWORD, :DWORD
qfexp                PROTO C :DWORD, :DWORD
qfloor               PROTO C :DWORD, :DWORD
qfpow                PROTO C :DWORD, :DWORD, :DWORD
qfsin                PROTO C :DWORD, :DWORD
qfsqrt               PROTO C :DWORD, :DWORD
qftan                PROTO C :DWORD, :DWORD
qifrac               PROTO C :DWORD, :DWORD, :DWORD
qmul                 PROTO C :DWORD, :DWORD, :DWORD
qneg                 PROTO C :DWORD
qprint               PROTO C :DWORD, :DWORD, :DWORD, :DWORD
qremain              PROTO C :DWORD, :DWORD, :DWORD
qsort                PROTO C :DWORD, :DWORD, :DWORD, :DWORD, :DWORD, :DWORD, :DWORD
qsub                 PROTO C :DWORD, :DWORD, :DWORD
qtoasc               PROTO C :DWORD, :DWORD, :DWORD
qtoe                 PROTO C :DWORD, :DWORD
qtoe113              PROTO C :DWORD, :DWORD
qtoe24               PROTO C :DWORD, :DWORD
qtoe64               PROTO C :DWORD, :DWORD
quadcopy             PROTO C :DWORD, :DWORD
quaddiv              PROTO C :DWORD, :DWORD, :DWORD
quadexpformat        PROTO C :DWORD, :DWORD, :DWORD, :DWORD
quadformat           PROTO C :DWORD, :DWORD
quadincr             PROTO C :DWORD
quadmult             PROTO C :DWORD, :DWORD, :DWORD
quadsub              PROTO C :DWORD, :DWORD, :DWORD
quadsum              PROTO C :DWORD, :DWORD, :DWORD
quadtoa              PROTO C :DWORD, :DWORD
rand                 PROTO C
read                 PROTO C :DWORD, :DWORD, :DWORD
realloc              PROTO C :DWORD, :DWORD
regerror             PROTO C :DWORD
regsub               PROTO C :DWORD, :DWORD, :DWORD
remove               PROTO C :DWORD
rename               PROTO C :DWORD, :DWORD
rewind               PROTO C :DWORD
rmdir                PROTO C :DWORD
rmtmp                PROTO C
scanf                PROTO C :DWORD, :VARARG
setbuf               PROTO C :DWORD, :DWORD
setenv               PROTO C :DWORD, :DWORD, :DWORD
setmode              PROTO C :DWORD, :DWORD
setvbuf              PROTO C :DWORD, :DWORD, :DWORD, :DWORD
snprintf             PROTO C :DWORD, :DWORD, :DWORD, :VARARG
sopen                PROTO C :DWORD, :DWORD, :DWORD, :VARARG
spawnl               PROTO C :DWORD, :DWORD, :DWORD, :VARARG
spawnle              PROTO C :DWORD, :DWORD, :DWORD, :VARARG
spawnlp              PROTO C :DWORD, :DWORD, :DWORD, :VARARG
spawnlpe             PROTO C :DWORD, :DWORD, :DWORD, :VARARG
spawnv               PROTO C :DWORD, :DWORD, :DWORD
spawnvp              PROTO C :DWORD, :DWORD, :DWORD
sprintf              PROTO C :DWORD, :DWORD, :VARARG
srand                PROTO C :DWORD
sscanf               PROTO C :DWORD, :DWORD, :VARARG
stat                 PROTO C :DWORD, :DWORD
strcat               PROTO C :DWORD, :DWORD
strchr               PROTO C :DWORD, :DWORD
strcmp               PROTO C :DWORD, :DWORD
strcmpi              PROTO C :DWORD, :DWORD
strcoll              PROTO C :DWORD, :DWORD
strcpy               PROTO C :DWORD, :DWORD
strcspn              PROTO C :DWORD, :DWORD
strdup               PROTO C :DWORD
strerror             PROTO C :DWORD
stricmp              PROTO C :DWORD, :DWORD
stristr              PROTO C :DWORD, :DWORD
strlcat              PROTO C :DWORD, :DWORD, :DWORD
strlcpy              PROTO C :DWORD, :DWORD, :DWORD
strlen               PROTO C :DWORD
strlwr               PROTO C :DWORD
strncat              PROTO C :DWORD, :DWORD, :DWORD
strncmp              PROTO C :DWORD, :DWORD, :DWORD
strncpy              PROTO C :DWORD, :DWORD, :DWORD
strnicmp             PROTO C :DWORD, :DWORD, :DWORD
strpbrk              PROTO C :DWORD, :DWORD
strrchr              PROTO C :DWORD, :DWORD
strrepl              PROTO C :DWORD, :DWORD, :DWORD, :DWORD
strrev               PROTO C :DWORD
strspn               PROTO C :DWORD, :DWORD
strstr               PROTO C :DWORD, :DWORD
strtod               PROTO C :DWORD, :DWORD
strtok               PROTO C :DWORD, :DWORD
strtol               PROTO C :DWORD, :DWORD, :DWORD
strtoll              PROTO C :DWORD, :DWORD, :DWORD
strtoul              PROTO C :DWORD, :DWORD, :DWORD
strtrim              PROTO C :DWORD
strupr               PROTO C :DWORD
swab                 PROTO C :DWORD, :DWORD, :DWORD
swprintf             PROTO C :DWORD, :DWORD, :VARARG
swscanf              PROTO C :DWORD, :DWORD, :VARARG
system               PROTO C :DWORD
tell                 PROTO C :DWORD
tempnam              PROTO C :DWORD, :DWORD
textattr             PROTO C :DWORD
textbackground       PROTO C :DWORD
textcolor            PROTO C :DWORD
textmode             PROTO C :DWORD
tmpfile              PROTO C
tmpnam               PROTO C :DWORD
tolower              PROTO C :DWORD
toupper              PROTO C :DWORD
towctrans            PROTO C :DWORD, :DWORD
towlower             PROTO C :DWORD
towupper             PROTO C :DWORD
ultoa                PROTO C :DWORD, :DWORD, :DWORD
umask                PROTO C :DWORD
ungetc               PROTO C :DWORD, :DWORD
ungetch              PROTO C :DWORD
ungetwc              PROTO C :DWORD, :DWORD
unlink               PROTO C :DWORD
utime                PROTO C :DWORD, :DWORD
vfprintf             PROTO C :DWORD, :DWORD, :DWORD
vfwprintf            PROTO C :DWORD, :DWORD, :DWORD
vprintf              PROTO C :DWORD, :DWORD
vsnprintf            PROTO C :DWORD, :DWORD, :DWORD, :DWORD
vsprintf             PROTO C :DWORD, :DWORD, :DWORD
vswprintf            PROTO C :DWORD, :DWORD, :DWORD
vwprintf             PROTO C :DWORD, :DWORD
wcstod               PROTO C :DWORD, :DWORD
wcstol               PROTO C :DWORD, :DWORD, :DWORD
wcstombs             PROTO C :DWORD, :DWORD, :DWORD
wcstoul              PROTO C :DWORD, :DWORD, :DWORD
wctomb               PROTO C :DWORD, :DWORD
wctrans              PROTO C :DWORD
wctype               PROTO C :DWORD
window               PROTO C :DWORD, :DWORD, :DWORD, :DWORD
wprintf              PROTO C :DWORD, :VARARG
write                PROTO C :DWORD, :DWORD, :DWORD
wscanf               PROTO C :DWORD, :VARARG
xfprintf             PROTO C :DWORD, :DWORD, :VARARG
xprintf              PROTO C :DWORD, :VARARG
xsnprintf            PROTO C :DWORD, :DWORD, :DWORD, :VARARG
xsprintf             PROTO C :DWORD, :DWORD, :VARARG
xsscanf              PROTO C :DWORD, :DWORD, :VARARG
xvsnprintf           PROTO C :DWORD, :DWORD, :DWORD, :DWORD
xvsprintf            PROTO C :DWORD, :DWORD, :DWORD

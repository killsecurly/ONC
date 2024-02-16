# SecurlyONC
__CURRENT BUGS__<br/>
Currently, the ONC network config blocks these SSO (Single-Sign-On) Applications:<br/>
Clever, CPM Educational Program, Writable<br/>
Turn off by using `revive.onc` when you have to turn on SSO.<br/>
<br/>
__Beta for Chrome__<br/>
Network config ONC file to completely disable extensions such as GoGuardian and Securly.<br/>
<br/>
** EXPERIMENTAL ** This may work or not work. If it doesn't, please make an Issue in GitHub Issues.<br/>
** I DO NOT TAKE ANY RESPONSIBILITY ** Any inconvenience or problems caused by SecurlyONC is your responsibilty.<br/>
<br/>
** HOW TO ENABLE **<br/>
Go to main page at `https://killsecurly.github.io/ONC` and paste all network config files from:<br/>
  `chrome://network#state` then plus under wifi network under Favorite Networks<br/>
Paste all text popped up into textbox<br/>
Download and Unzip<br/>
Unzip kill.onc<br/>
Go to `chrome://network` and upload under Import ONC File<br/>
<br/>
** HOW TO DISABLE **<br/>
Upload `revive.onc` onto Import ONC File. You can find `revive.onc` in the ZIP you downloaded.<br/>
<br/>
** TURN ON WHEN CLASSROOM IS DISABLED **<br/>
If you start ONC with Securly Classroom on, the device will never get the signal to turn Classroom off, which causes the flitering to stay active forever.<br/>
<br/>
Works with Securly, GoGuardian, CKAuth, and more!<br/>
Credit to omadaDNS, caub, and killsecurly.<br/>

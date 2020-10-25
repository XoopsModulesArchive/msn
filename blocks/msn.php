<?php

function b_msn_show()
{
    global $xoopsDB, $xoopsConfig, $xoopsTheme, $xoopsUser;

    $block = [];

    $block['title'] = _MB_MSN_TITLE1;

    $block['content'] .= '<TABLE border="0" cellspacing="0" cellpadding="0">
<IMG id="mctrack" height="1" alt="" width="1">
<SCRIPT language="VBScript">
Dim A_
A_ = False
Dim B_,C_,D_
B_ = False
C_ = False
D_ = False 
Dim E_,F_,G_
E_ = False
F_ = False
G_ = 3000
Dim H_(),I_
I_ = 0
Dim J_,K_,L_,M_,N_,O_,P_,OffL
J_ = "<OBJECT classid="""&"clsid:FB7199AB-79BF-11d2-8D94-0000F875C541"""&" codeType=application/x-oleobject id=MsgrApp width=0 height=0></OBJECT>"
M_ = "<img align=absbottom width=16 height=17 border=0 src="
L_ = "<a href=""vbscript:op(-1)"">"&"Ingresar al MSN Messenger"&"</a>"
N_ = M_&"' . $xoopsConfig['xoops_url'] . '/modules/msn/images/online1.gif"&" ALT="""&"Online"&""">"
O_ = M_&"' . $xoopsConfig['xoops_url'] . '/modules/msn/images/busy1.gif"&" ALT="""&"Busy"&""">"
P_ = M_&"' . $xoopsConfig['xoops_url'] . '/modules/msn/images/idle1.gif"&" ALT="""&"Away"&""">"
OffL = M_&"' . $xoopsConfig['xoops_url'] . '/modules/msn/images/offline1.gif"&" ALT="""&"Offline"&""">"
M_ = "<img align=absbottom width=16 height=17 border=0 src="
Dim Q_
Q_=False
Dim MSG1_,MSG2_,MSG3_,MSG4_
MSG1_ = "' . _MB_MSN_NONE . '"
MSG2_ = "' . _MB_MSN_LISTISEMPTY . ' <br><a href=vbscript:op(-2)>' . _MB_MSN_ADDCONTACTS . '</a>"
MSG3_ = "' . _MB_MSN_SIGNIN . '"
MSG4_ = "' . _MB_MSN_SIGNOUT . '"
</SCRIPT>
<SCRIPT language="VBScript" id="mcvbs" src="' . $xoopsConfig['xoops_url'] . '/modules/msn/include/mc.vbs"></SCRIPT>
<OBJECT id="MsgrObj" height="0" codeType="application/x-oleobject" width="0" classid="clsid:F3A614DC-ABE0-11d2-A441-00C04F795683"></OBJECT> 
<SCRIPT language="VBScript" event="onReadyStateChange" for="mcvbs">
If mcvbs.readyState="complete" And Not isDrawn_ Then
isDrawn_ = True
DrawInitialState
End If
</SCRIPT>
<SCRIPT language="VBScript" event="onload" for="window">
If Not isDrawn_ Then
isDrawn_ = True
DrawInitialState
End If
</SCRIPT>
<TBODY>
<TR>
<TD>
<DIV id="getmsgr" style="DISPLAY: none">' . _MB_MSN_TOACTIVATE . '</DIV>
<DIV id="msgrlogon" style="DISPLAY: none"><FONT face="verdana,sans-serif" size="1"> 
<DIV id="status"></DIV>
</FONT></DIV>
<DIV id="Online" style="DISPLAY: none"></DIV>
<DIV id="noneol" style="DISPLAY: none">' . _MB_MSN_NOBODY . '</DIV>
<DIV id="mUser" style="DISPLAY: none"></DIV>
</TD>
</TR>
<!---
<TR bgColor="#fafad2"> 
<TD> 
<DIV id="notOnline" style="DISPLAY: none">' . _MB_MSN_OFFLINE . '</DIV>
<DIV id="mOff" style="DISPLAY: none"></DIV>
</TD>
</TR>
--->
<SPAN id="appload" style="DISPLAY: none"></SPAN>
</TBODY>
</TABLE>
';

    return $block;
}

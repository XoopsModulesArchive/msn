<?php

$modversion['name'] = _MI_MSN_NAME;
$modversion['version'] = 1.10;
$modversion['description'] = _MI_MSN_DESC;
$modversion['author'] = 'Arjen van Efferen<br>( <a href="http://xoops.mediacom4.net">http://xoops.mediacom4.net</a> )';
$modversion['credits'] = 'The XOOPS Project';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 1;
$modversion['image'] = 'msn_slogo.jpg';
$modversion['dirname'] = 'msn';
// Admin things
$modversion['hasAdmin'] = 0;
$modversion['adminpath'] = '';
// Blocks
$modversion['blocks'][1]['file'] = 'msn.php';
$modversion['blocks'][1]['name'] = _MI_MSN_BNAME1;
$modversion['blocks'][1]['description'] = 'Shows users that are currently online on MSN Messenger';
$modversion['blocks'][1]['show_func'] = 'b_msn_show';
// Menu
$modversion['hasMain'] = 0;

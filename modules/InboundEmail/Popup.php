<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

/*********************************************************************************

 * Description:
 ********************************************************************************/
// cn: bug 6078: zlib breaks test-settings
$iniError = '';
if(ini_get('zlib.output_compression') == 1) { // ini_get() returns 1/0, not value
	if(!ini_set('zlib.output_compression', 'Off')) { // returns False on failure
		$iniError = $mod_strings['ERR_INI_ZLIB'];
	}
}

// hack to allow "&", "%" and "+" through a $_GET var
// set by ie_test_open_popup() javascript call
foreach($_REQUEST as $k => $v) {
	$v = str_replace('::amp::', '&', $v);
	$v = str_replace('::plus::', '+', $v);
	$v = str_replace('::percent::', '%', $v);
	$_REQUEST[$k] = $v;
}

if(ob_get_level() > 0) {
	ob_end_clean();
}

if(ob_get_level() < 1) {
	ob_start();
}


require_once('modules/InboundEmail/language/'.$current_language.'.lang.php');
global $theme;

$title				= '';
$msg				= '';
$tls				= '';
$cert				= '';
$ssl				= '';
$notls				= '';
$novalidate_cert	= '';
$useSsl				= false;

///////////////////////////////////////////////////////////////////////////////
////	TITLES

$popupBoolean = false;
if (isset($_REQUEST['target']) && $_REQUEST['target'] == 'Popup') {
	$popupBoolean = true;
}
if (isset($_REQUEST['target1']) && $_REQUEST['target1'] == 'Popup') {
	$popupBoolean = true;
}

if($popupBoolean) {
	$title = '';
	$msg = $mod_strings['LBL_TEST_WAIT_MESSAGE'];
}

if(isset($_REQUEST['ssl']) && ($_REQUEST['ssl'] == "true" || $_REQUEST['ssl'] == 1)) {
	$msg .= $mod_strings['LBL_FIND_SSL_WARN'];
	$useSsl = true;
}


$ie                 = new InboundEmail();
if(!empty($_REQUEST['ie_id'])) {
    $ie->retrieve($_REQUEST['ie_id']);
}
$ie->email_user     = $_REQUEST['email_user'];
$ie->server_url     = $_REQUEST['server_url'];
$ie->port           = $_REQUEST['port'];
$ie->protocol       = $_REQUEST['protocol'];
//Bug 23083.Special characters in email password results in IMAP authentication failure
if(!empty($_REQUEST['email_password'])) {
    $ie->email_password = html_entity_decode($_REQUEST['email_password'], ENT_QUOTES);
    $ie->email_password = str_rot13($ie->email_password);
}
$ie->mailbox        = 'INBOX';

if($popupBoolean) {
    $msg = $ie->connectMailserver(true);
}

////	END TITLES
///////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
////	COMMON CODE
echo /*'
<HTML>
	<HEAD>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>SugarCRM - Commercial Open Source CRM</title>
		'.SugarThemeRegistry::current()->getCSS().'
		<script type="text/javascript">
				function setMailbox(box) {
					var mb = opener.document.getElementById("mailbox");
					mb.value = box;
				}
		</script>

	</HEAD>
	<body style="margin: 10px">*/'
	<p>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td>
					'.SugarThemeRegistry::current()->getImage('h3Arrow', 'border="0"', 11, 11, ".gif", $mod_strings['LBL_POPUP_TITLE']).'
				</td>
				<td>
					<h3>&nbsp;'.$title.'</h3>
				</td>
			</tr>
			<tr>
				<td></td>
				<td valign="top">
					<div id="testSettingsMsg">
					'.$msg.'
					</div>
					<div id="testSettingsTic"></div>
					<div id="testSettingsErr">'.$iniError.'</div>
				</td>
			</tr>';

if($popupBoolean) {
/*	echo '	<tr><td>&nbsp;</td><td>&nbsp;</td></tr><tr>
				<td></td>
				<td>
					<form name="form">
					<input name="close" type="button" title="'.$mod_strings['LBL_CLOSE_POPUP'].'"  value="    '.$mod_strings['LBL_CLOSE_POPUP'].'    " onClick="window.close()">
					</form>
				</td>
			</tr>';*/
}

echo '	</table>';


////	END COMMON CODE
///////////////////////////////////////////////////////////////////////////////

?>
<?php
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

global $current_user,$admin_group_header;

//users and security.
$admin_option_defs=array();
$admin_option_defs['Users']['user_management']= array('Users','LBL_MANAGE_USERS_TITLE','LBL_MANAGE_USERS','./index.php?module=Users&action=index');
$admin_option_defs['Users']['roles_management']= array('Roles','LBL_MANAGE_ROLES_TITLE','LBL_MANAGE_ROLES','./index.php?module=ACLRoles&action=index');
$admin_option_defs['Users']['teams_management']= array('Teams','LBL_MANAGE_TEAMS_TITLE','LBL_MANAGE_TEAMS','./index.php?module=Teams&action=index');
$admin_option_defs['Administration']['password_management']= array('Password','LBL_MANAGE_PASSWORD_TITLE','LBL_MANAGE_PASSWORD','./index.php?module=Administration&action=PasswordManager');
$admin_group_header[]= array('LBL_USERS_TITLE','',false,$admin_option_defs, 'LBL_USERS_DESC');
$license_management = false;
    if (!isset($GLOBALS['sugar_config']['hide_admin_licensing']) || !$GLOBALS['sugar_config']['hide_admin_licensing']) {
        $license_management = array('License','LBL_MANAGE_LICENSE_TITLE','LBL_MANAGE_LICENSE','./index.php?module=Administration&action=LicenseSettings');
    }
//Customized - OnlineCRM
/*
//Sugar Connect
$admin_option_defs=array();
$license_key = 'no_key';

$admin_option_defs['Administration']['license_management']= $license_management;
$focus = new Administration();
$focus->retrieveSettings();
$license_key = $focus->settings['license_key'];
$admin_option_defs['Administration']['support']= array('Support','LBL_SUPPORT_TITLE','LBL_SUPPORT','./index.php?module=Administration&action=SupportPortal&view=support_portal');
//$admin_option_defs['documentation']= array('OnlineDocumentation','LBL_DOCUMENTATION_TITLE','LBL_DOCUMENTATION','./index.php?module=Administration&action=SupportPortal&view=documentation&help_module=Administration&edition='.$sugar_flavor.'&key='.$server_unique_key.'&language='.$current_language);


$admin_option_defs['Administration']['update'] = array('sugarupdate','LBL_SUGAR_UPDATE_TITLE','LBL_SUGAR_UPDATE','./index.php?module=Administration&action=Updater');
$admin_option_defs['Administration']['documentation']= array('OnlineDocumentation','LBL_DOCUMENTATION_TITLE','LBL_DOCUMENTATION',
        'javascript:void window.open("index.php?module=Administration&action=SupportPortal&view=documentation&help_module=Administration&edition='.$sugar_flavor.'&key='.$server_unique_key.'&language='.$current_language.'", "helpwin","width=600,height=600,status=0,resizable=1,scrollbars=1,toolbar=0,location=0")');
if(!empty($license->settings['license_latest_versions'])){
	$encodedVersions = $license->settings['license_latest_versions'];
	$versions = unserialize(base64_decode( $encodedVersions));
	include('sugar_version.php');
	if(!empty($versions)){
		foreach($versions as $version){
			if(compareVersions($version['version'], $sugar_version))
			{
				$admin_option_defs['Administration']['update'][] ='red';
				if(!isset($admin_option_defs['Administration']['update']['additional_label']))$admin_option_defs['Administration']['update']['additional_label']= '('.$version['version'].')';

			}
		}
	}
}



$admin_group_header[]= array('LBL_SUGAR_NETWORK_TITLE','',false,$admin_option_defs, 'LBL_SUGAR_NETWORK_DESC');

*/
//system.
$admin_option_defs=array();
$admin_option_defs['Administration']['configphp_settings']= array('Administration','LBL_CONFIGURE_SETTINGS_TITLE','LBL_CONFIGURE_SETTINGS','./index.php?module=Configurator&action=EditView');
$admin_option_defs['Administration']['import']= array('Import','LBL_IMPORT_WIZARD','LBL_IMPORT_WIZARD_DESC','./index.php?module=Import&action=step1&import_module=Administration');
$admin_option_defs['Administration']['locale']= array('Currencies','LBL_MANAGE_LOCALE','LBL_LOCALE','./index.php?module=Administration&action=Locale&view=default');

if(!defined('TEMPLATE_URL')){
//	$admin_option_defs['Administration']['upgrade_wizard']= array('Upgrade','LBL_UPGRADE_WIZARD_TITLE','LBL_UPGRADE_WIZARD','./index.php?module=UpgradeWizard&action=index');
}

$admin_option_defs['Administration']['currencies_management']= array('Currencies','LBL_MANAGE_CURRENCIES','LBL_CURRENCY','./index.php?module=Currencies&action=index');

if (!isset($GLOBALS['sugar_config']['hide_admin_backup']) || !$GLOBALS['sugar_config']['hide_admin_backup'])
{
    $admin_option_defs['Administration']['backup_management']= array('Backups','LBL_BACKUPS_TITLE','LBL_BACKUPS','./index.php?module=Administration&action=Backups');
}

$admin_option_defs['Administration']['languages']= array('Currencies','LBL_MANAGE_LANGUAGES','LBL_LANGUAGES','./index.php?module=Administration&action=Languages&view=default');

$admin_option_defs['Administration']['repair']= array('Repair','LBL_UPGRADE_TITLE','LBL_UPGRADE','./index.php?module=Administration&action=Upgrade');

$admin_option_defs['Administration']['global_search']=array('icon_SearchForm','LBL_GLOBAL_SEARCH_SETTINGS','LBL_GLOBAL_SEARCH_SETTINGS_DESC','./index.php?module=Administration&action=GlobalSearchSettings');

if (!isset($GLOBALS['sugar_config']['hide_admin_diagnostics']) || !$GLOBALS['sugar_config']['hide_admin_diagnostics'])
{
//    $admin_option_defs['Administration']['diagnostic']= array('Diagnostic','LBL_DIAGNOSTIC_TITLE','LBL_DIAGNOSTIC_DESC','./index.php?module=Administration&action=Diagnostic');
}

// Connector Integration
$admin_option_defs['Administration']['connector_settings']=array('icon_Connectors','LBL_CONNECTOR_SETTINGS','LBL_CONNECTOR_SETTINGS_DESC','./index.php?module=Connectors&action=ConnectorSettings');

$admin_option_defs['Administration']['tracker_settings']=array('Trackers','LBL_TRACKER_SETTINGS','LBL_TRACKER_SETTINGS_DESC','./index.php?module=Trackers&action=TrackerSettings');

// Theme Enable/Disable
$admin_option_defs['Administration']['theme_settings']=array('icon_AdminThemes','LBL_THEME_SETTINGS','LBL_THEME_SETTINGS_DESC','./index.php?module=Administration&action=ThemeSettings');

$admin_option_defs['Administration']['scheduler'] = array('Schedulers','LBL_SUGAR_SCHEDULER_TITLE','LBL_SUGAR_SCHEDULER','./index.php?module=Schedulers&action=index');

$admin_option_defs['Administration']['feed_settings']=array('icon_SugarFeed','LBL_SUGARFEED_SETTINGS','LBL_SUGARFEED_SETTINGS_DESC','./index.php?module=SugarFeed&action=AdminSettings');

//$admin_option_defs['Administration']['pdfmanager']= array('icon_PdfManager','LBL_PDFMANAGER_SETTINGS','LBL_PDFMANAGER_SETTINGS_DESC','./index.php?module=PdfManager&action=index');

//$admin_option_defs['Administration']['offline_client']= array('OfflineClient','LBL_MANAGE_OFFLINE_CLIENT','LBL_OFFLINE_CLIENT','./index.php?module=Administration&action=ViewOfflineClients');

// Enable/Disable wireless modules
//$admin_option_defs['Administration']['enable_wireless_modules']=array('icon_AdminMobile','LBL_WIRELESS_MODULES_ENABLE','LBL_WIRELESS_MODULES_ENABLE_DESC','./index.php?module=Administration&action=EnableWirelessModules');


require_once 'include/SugarOAuthServer.php';
if(SugarOAuthServer::enabled()) {
    $admin_option_defs['Administration']['oauth']= array('Password','LBL_OAUTH_TITLE','LBL_OAUTH','./index.php?module=OAuthKeys&action=index');
}
$admin_option_defs['Administration']['holidays']=array('Schedulers','Public Holiday','Set Public Holiday','./index.php?module=Holidays&action=EditView&return_module=Holidays&return_action=DetailView');

$admin_group_header[]= array('LBL_ADMINISTRATION_HOME_TITLE','',false,$admin_option_defs, 'LBL_ADMINISTRATION_HOME_DESC');


//email manager.
$admin_option_defs=array();
$admin_option_defs['Emails']['mass_Email_config']= array('EmailMan','LBL_MASS_EMAIL_CONFIG_TITLE','LBL_MASS_EMAIL_CONFIG_DESC','./index.php?module=EmailMan&action=config');

$admin_option_defs['Campaigns']['campaignconfig']= array('Campaigns','LBL_CAMPAIGN_CONFIG_TITLE','LBL_CAMPAIGN_CONFIG_DESC','./index.php?module=EmailMan&action=campaignconfig');

$admin_option_defs['Emails']['mailboxes']= array('InboundEmail','LBL_MANAGE_MAILBOX','LBL_MAILBOX_DESC','./index.php?module=InboundEmail&action=index');
$admin_option_defs['Campaigns']['mass_Email']= array('EmailMan','LBL_MASS_EMAIL_MANAGER_TITLE','LBL_MASS_EMAIL_MANAGER_DESC','./index.php?module=EmailMan&action=index');

$admin_option_defs['Campaigns']['register_snip']=array('icon_AdminThemes','LBL_CONFIGURE_SNIP','LBL_CONFIGURE_SNIP_DESC','./index.php?module=SNIP&action=ConfigureSnip');

$admin_group_header[]= array('LBL_EMAIL_TITLE','',false,$admin_option_defs, 'LBL_EMAIL_DESC');




//studio.
$admin_option_defs=array();
$admin_option_defs['studio']['studio']= array('Studio','LBL_STUDIO','LBL_STUDIO_DESC','./index.php?module=ModuleBuilder&action=index&type=studio');
if(isset($GLOBALS['beanFiles']['iFrame'])) {
	$admin_option_defs['Administration']['portal']= array('iFrames','LBL_IFRAME','DESC_IFRAME','./index.php?module=iFrames&action=index');
}
$admin_option_defs['Administration']['rename_tabs']= array('RenameTabs','LBL_RENAME_TABS','LBL_CHANGE_NAME_MODULES',"./index.php?action=wizard&module=Studio&wizard=StudioWizard&option=RenameTabs");
$admin_option_defs['Administration']['moduleBuilder']= array('ModuleBuilder','LBL_MODULEBUILDER','LBL_MODULEBUILDER_DESC','./index.php?module=ModuleBuilder&action=index&type=mb');
$admin_option_defs['Administration']['history_contacts_emails'] = array('ConfigureTabs', 'LBL_HISTORY_CONTACTS_EMAILS', 'LBL_HISTORY_CONTACTS_EMAILS_DESC', './index.php?module=Configurator&action=historyContactsEmails');
$admin_option_defs['Administration']['configure_tabs']= array('ConfigureTabs','LBL_CONFIGURE_TABS_AND_SUBPANELS','LBL_CONFIGURE_TABS_AND_SUBPANELS_DESC','./index.php?module=Administration&action=ConfigureTabs');
$admin_option_defs['Administration']['module_loader'] = array('ModuleLoader','LBL_MODULE_LOADER_TITLE','LBL_MODULE_LOADER','./index.php?module=Administration&action=UpgradeWizard&view=module');


$admin_option_defs['Administration']['config_prod_bar']=array('icon_ShortcutBar','LBL_CONFIGURE_SHORTCUT_BAR','LBL_CONFIGURE_SHORTCUT_BAR_DESC','./index.php?module=Administration&action=ConfigureShortcutBar');
$admin_option_defs['Administration']['configure_group_tabs']= array('ConfigureTabs','LBL_CONFIGURE_GROUP_TABS','LBL_CONFIGURE_GROUP_TABS_DESC','./index.php?action=wizard&module=Studio&wizard=StudioWizard&option=ConfigureGroupTabs');

$admin_option_defs['any']['dropdowneditor']= array('Dropdown','LBL_DROPDOWN_EDITOR','DESC_DROPDOWN_EDITOR','./index.php?module=ModuleBuilder&action=index&type=dropdowns');

//$admin_option_defs['Administration']['sugarportal']= array('SugarPortal','LBL_SUGARPORTAL','LBL_SUGARPORTAL_DESC','./index.php?module=ModuleBuilder&action=index&type=sugarportal');

//$admin_option_defs['migrate_custom_fields']= array('MigrateFields','LBL_EXTERNAL_DEV_TITLE','LBL_EXTERNAL_DEV_DESC','./index.php?module=Administration&action=Development');

$admin_option_defs['any']['workflow_management']= array('WorkFlow','LBL_MANAGE_WORKFLOW','LBL_WORKFLOW_DESC','./index.php?module=WorkFlow&action=ListView');

$admin_group_header[]= array('LBL_STUDIO_TITLE','',false,$admin_option_defs, 'LBL_TOOLS_DESC');

// fetch "Contracts" module name from localization data (bug #46740)
//$admin_group_header[]= array($app_list_strings['moduleList']['Contracts'],'',false,$admin_option_defs, 'LBL_CONTRACT_DESC');





if(SugarAutoLoader::existing('custom/modules/Administration/Ext/Administration/administration.ext.php')){
	include('custom/modules/Administration/Ext/Administration/administration.ext.php');
}

//For users with MLA access we need to find which entries need to be shown.
//lets process the $admin_group_header and apply all the access control rules.
$access = $current_user->getDeveloperModules();
foreach ($admin_group_header as $key=>$values) {
	$module_index = array_keys($values[3]);  //get the actual links..
	foreach ($module_index as $mod_key=>$mod_val) {
		if (is_admin($current_user) ||
			in_array($mod_val, $access) ||
		    $mod_val=='studio'||
		    ($mod_val=='Forecasts' && in_array('ForecastSchedule', $access)) ||
		    ($mod_val =='any')
		   ) {
		   	    if(!is_admin($current_user)&& isset($values[3]['Administration'])){
                    unset($values[3]['Administration']);
                }
                if(displayStudioForCurrentUser() == false) {
                    unset($values[3]['studio']);
                }

                if(displayWorkflowForCurrentUser() == false) {
                    unset($values[3]['any']['workflow_management']);
                }

                // Need this check because Quotes and Products share the header group
                if(!in_array('Quotes', $access)&& isset($values[3]['Quotes'])){
                    unset($values[3]['Quotes']);
                }
                if(!in_array('Products', $access)&& isset($values[3]['Products'])){
                    unset($values[3]['Products']);
                }

                // Need this check because Emails and Campaigns share the header group
                if(!in_array('Campaigns', $access)&& isset($values[3]['Campaigns'])){
                    unset($values[3]['Campaigns']);
                }

                //////////////////

        } else {
        	//hide the link
        	unset($admin_group_header[$key][3][$mod_val]);
        }

	}
}
?>

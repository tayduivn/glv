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

$dictionary['Account'] = array('table' => 'accounts', 'audited'=>true, 'unified_search' => true, 'full_text_search' => true, 'unified_search_default_enabled' => true, 'duplicate_merge'=>true,
    'comment' => 'Accounts are organizations or entities that are the target of selling, support, and marketing activities, or have already purchased products or services',
    'fields' => array (

        'parent_id' =>
        array (
            'name' => 'parent_id',
            'vname' => 'LBL_PARENT_ACCOUNT_ID',
            'type' => 'id',
            'required'=>false,
            'reportable'=>false,
            'audited'=>true,
            'comment' => 'Account ID of the parent of this account',
        ),

        'sic_code' =>
        array (
            'name' => 'sic_code',
            'vname' => 'LBL_SIC_CODE',
            'type' => 'varchar',
            'len' => 10,
            'comment' => 'SIC code of the account',
            'merge_filter' => 'enabled',
        ),
        //BTC - Field
        'common_text' =>
        array (
            'name' => 'common_text',
            'type' => 'text',
            'studio' => 'visible',
            'vname'=> 'LBL_COMMON_TEXT',
        ),
        'detail_text' =>
        array (
            'name' => 'detail_text',
            'type' => 'text',
            'studio' => 'visible',
            'vname'=> 'LBL_DETAIL_TEXT',
        ),
        'prefer_product_text' =>
        array (
            'name' => 'prefer_product_text',
            'type' => 'text',
            'studio' => 'visible',
            'vname'=> 'LBL_PREFER_PRODUCT_TEXT',
        ),
        'history_text' =>
        array (
            'name' => 'history_text',
            'type' => 'text',
            'studio' => 'visible',
            'vname'=> 'LBL_HISTORY_TEXT',
        ),
        'short_name' =>
        array (
            'required'=>true,
            'name' => 'short_name',
            'vname' => 'LBL_SHORT_NAME',
            'type' => 'varchar',
            'len' => 100,
            'audited' => true,
        ),

        'ceo_name' =>
        array (
            'required'=>false,
            'name' => 'ceo_name',
            'vname' => 'LBL_CEO_NAME',
            'type' => 'varchar',
            'len' => 250,
            'audited' => true,
        ),
        'hr_manager_name' =>
        array (
            'required'=>false,
            'name' => 'hr_manager_name',
            'vname' => 'LBL_HR_MANAGER_NAME',
            'type' => 'varchar',
            'len' => 250,
        ),
        'sale_manager_name' =>
        array (
            'required'=>false,
            'name' => 'sale_manager_name',
            'vname' => 'LBL_SALE_MANAGER_NAME',
            'type' => 'varchar',
            'len' => 250,
        ),
        'sale_contact_name' =>
        array (
            'required'=>false,
            'name' => 'sale_contact_name',
            'vname' => 'LBL_SALE_CONTACT_NAME',
            'type' => 'varchar',
            'len' => 250,
        ),
        'full_name' =>
        array (
            'required'=>true,
            'audited' => true,
            'name' => 'full_name',
            'vname' => 'LBL_FULL_NAME',
            'type' => 'varchar',
            'len' => 255,
        ),
        //END - BTC Field

        'parent_name' =>
        array (
            'name' => 'parent_name',
            'rname' => 'name',
            'id_name' => 'parent_id',
            'vname' => 'LBL_MEMBER_OF',
            'type' => 'relate',
            'isnull' => 'true',
            'module' => 'Accounts',
            'table' => 'accounts',
            'massupdate' => false,
            'source'=>'non-db',
            'len' => 36,
            'link'=>'member_of',
            'unified_search' => true,
            'importable' => 'true',
        ),


        'members' =>
        array (
            'name' => 'members',
            'type' => 'link',
            'relationship' => 'member_accounts',
            'module'=>'Accounts',
            'bean_name'=>'Account',
            'source'=>'non-db',
            'vname'=>'LBL_MEMBERS',
        ),
        'member_of' =>
        array (
            'name' => 'member_of',
            'type' => 'link',
            'relationship' => 'member_accounts',
            'module'=>'Accounts',
            'bean_name'=>'Account',
            'link_type'=>'one',
            'source'=>'non-db',
            'vname'=>'LBL_MEMBER_OF',
            'side'=>'right',
        ),
        'email_opt_out' =>
        array(
            'name'		=> 'email_opt_out',
            'vname'     => 'LBL_EMAIL_OPT_OUT',
            'source'	=> 'non-db',
            'type'		=> 'bool',
            'massupdate' => false,
            'studio'=>'false',
        ),
        'invalid_email' =>
        array(
            'name'		=> 'invalid_email',
            'vname'     => 'LBL_INVALID_EMAIL',
            'source'	=> 'non-db',
            'type'		=> 'bool',
            'massupdate' => false,
            'studio'=>'false',
        ),
        'cases' =>
        array (
            'name' => 'cases',
            'type' => 'link',
            'relationship' => 'account_cases',
            'module'=>'Cases',
            'bean_name'=>'aCase',
            'source'=>'non-db',
            'vname'=>'LBL_CASES',
        ),
        //bug 42902
        'email'=> array(
            'name' => 'email',
            'type' => 'email',
            'query_type' => 'default',
            'source' => 'non-db',
            'operator' => 'subquery',
            'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
            'db_field' => array(
                'id',
            ),
            'vname' =>'LBL_ANY_EMAIL',
            'studio' => array('visible'=>false, 'searchview'=>true),
        ),
        'tasks' =>
        array (
            'name' => 'tasks',
            'type' => 'link',
            'relationship' => 'account_tasks',
            'module'=>'Tasks',
            'bean_name'=>'Task',
            'source'=>'non-db',
            'vname'=>'LBL_TASKS',
        ),
        'notes' =>
        array (
            'name' => 'notes',
            'type' => 'link',
            'relationship' => 'account_notes',
            'module'=>'Notes',
            'bean_name'=>'Note',
            'source'=>'non-db',
            'vname'=>'LBL_NOTES',
        ),
        'meetings' =>
        array (
            'name' => 'meetings',
            'type' => 'link',
            'relationship' => 'account_meetings',
            'module'=>'Meetings',
            'bean_name'=>'Meeting',
            'source'=>'non-db',
            'vname'=>'LBL_MEETINGS',
        ),
        'calls' =>
        array (
            'name' => 'calls',
            'type' => 'link',
            'relationship' => 'account_calls',
            'module'=>'Calls',
            'bean_name'=>'Call',
            'source'=>'non-db',
            'vname'=>'LBL_CALLS',
        ),

        'emails' =>
        array (
            'name' => 'emails',
            'type' => 'link',
            'relationship' => 'emails_accounts_rel', /* reldef in emails */
            'module'=>'Emails',
            'bean_name'=>'Email',
            'source'=>'non-db',
            'vname'=>'LBL_EMAILS',
            'studio' => array("formula" => false),
        ),
        'documents'=>
        array (
            'name' => 'documents',
            'type' => 'link',
            'relationship' => 'documents_accounts',
            'source' => 'non-db',
            'vname' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
        ),
        'bugs' =>
        array (
            'name' => 'bugs',
            'type' => 'link',
            'relationship' => 'accounts_bugs',
            'module'=>'Bugs',
            'bean_name'=>'Bug',
            'source'=>'non-db',
            'vname'=>'LBL_BUGS',
        ),
        'contacts' =>
        array (
            'name' => 'contacts',
            'type' => 'link',
            'relationship' => 'accounts_contacts',
            'module'=>'Contacts',
            'bean_name'=>'Contact',
            'source'=>'non-db',
            'vname'=>'LBL_CONTACTS',
        ),
        'email_addresses' =>
        array (
            'name' => 'email_addresses',
            'type' => 'link',
            'relationship' => 'accounts_email_addresses',
            'source' => 'non-db',
            'vname' => 'LBL_EMAIL_ADDRESSES',
            'reportable'=>false,
            'unified_search' => true,
            'rel_fields' => array('primary_address' => array('type'=>'bool')),
            'studio' => array("formula" => false),
        ),
        'email_addresses_primary' =>
        array (
            'name' => 'email_addresses_primary',
            'type' => 'link',
            'relationship' => 'accounts_email_addresses_primary',
            'source' => 'non-db',
            'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
            'duplicate_merge'=> 'disabled',
            'studio' => array("formula" => false),
        ),
        'opportunities' =>
        array (
            'name' => 'opportunities',
            'type' => 'link',
            'relationship' => 'accounts_opportunities',
            'module'=>'Opportunities',
            'bean_name'=>'Opportunity',
            'source'=>'non-db',
            'vname'=>'LBL_OPPORTUNITY',
        ),
        'quotes' =>
        array (
            'name' => 'quotes',
            'type' => 'link',
            'relationship' => 'quotes_billto_accounts',
            'source'=>'non-db',
            'module'=>'Quotes',
            'bean_name'=>'Quote',
            'ignore_role'=>true,
            'vname'=>'LBL_QUOTES',
        ),
        'quotes_shipto' =>
        array (
            'name' => 'quotes_shipto',
            'type' => 'link',
            'relationship' => 'quotes_shipto_accounts',
            'module'=>'Quotes',
            'bean_name'=>'Quote',
            'source'=>'non-db',
            'vname'=>'LBL_QUOTES_SHIP_TO',
        ),



        'project' =>
        array (
            'name' => 'project',
            'type' => 'link',
            'relationship' => 'projects_accounts',
            'module'=>'Project',
            'bean_name'=>'Project',
            'source'=>'non-db',
            'vname'=>'LBL_PROJECTS',
        ),
        'leads' =>
        array (
            'name' => 'leads',
            'type' => 'link',
            'relationship' => 'account_leads',
            'module'=>'Leads',
            'bean_name'=>'Lead',
            'source'=>'non-db',
            'vname'=>'LBL_LEADS',
        ),
        'campaigns' =>
        array (
            'name' => 'campaigns',
            'type' => 'link',
            'relationship' => 'account_campaign_log',
            'module'=>'CampaignLog',
            'bean_name'=>'CampaignLog',
            'source'=>'non-db',
            'vname'=>'LBL_CAMPAIGNLOG',
            'studio' => array("formula" => false),
        ),
        'campaign_accounts' =>
        array (
            'name' => 'campaign_accounts',
            'type' => 'link',
            'vname' => 'LBL_CAMPAIGNS',
            'relationship' => 'campaign_accounts',
            'source' => 'non-db',
        ),

        'created_by_link' =>
        array (
            'name' => 'created_by_link',
            'type' => 'link',
            'relationship' => 'accounts_created_by',
            'vname' => 'LBL_CREATED_BY_USER',
            'link_type' => 'one',
            'module'=>'Users',
            'bean_name'=>'User',
            'source'=>'non-db',
        ),
        'modified_user_link' =>
        array (
            'name' => 'modified_user_link',
            'type' => 'link',
            'relationship' => 'accounts_modified_user',
            'vname' => 'LBL_MODIFIED_BY_USER',
            'link_type' => 'one',
            'module'=>'Users',
            'bean_name'=>'User',
            'source'=>'non-db',
        ),
        'assigned_user_link' =>
        array (
            'name' => 'assigned_user_link',
            'type' => 'link',
            'relationship' => 'accounts_assigned_user',
            'vname' => 'LBL_ASSIGNED_TO_USER',
            'link_type' => 'one',
            'module'=>'Users',
            'bean_name'=>'User',
            'source'=>'non-db',
            'duplicate_merge'=>'enabled',
            'rname' => 'user_name',
            'id_name' => 'assigned_user_id',
            'table' => 'users',
        ),

        'products' => array(
            'name' => 'products',
            'type' => 'link',
            'link_file' => 'modules/Products/AccountLink.php',
            'link_class' => 'AccountLink',
            'relationship' => 'products_accounts',
            'source' => 'non-db',
            'vname' => 'LBL_PRODUCTS',
        ),
        'contracts' => array (
            'name' => 'contracts',
            'type' => 'link',
            'relationship' => 'account_contracts',
            'source' => 'non-db',
            'vname' => 'LBL_CONTRACTS',
        ),


        'campaign_id' =>
        array (
            'name' => 'campaign_id',
            'comment' => 'Campaign that generated Account',
            'vname'=>'LBL_CAMPAIGN_ID',
            'rname' => 'id',
            'id_name' => 'campaign_id',
            'type' => 'id',
            'table' => 'campaigns',
            'isnull' => 'true',
            'module' => 'Campaigns',
            'reportable'=>false,
            'massupdate' => false,
            'duplicate_merge'=> 'disabled',
        ),

        'campaign_name' =>
        array (
            'name'=>'campaign_name',
            'rname'=>'name',
            'vname' => 'LBL_CAMPAIGN',
            'type' => 'relate',
            'reportable'=>false,
            'source'=>'non-db',
            'table' => 'campaigns',
            'id_name' => 'campaign_id',
            'link' => 'campaign_accounts',
            'module'=>'Campaigns',
            'duplicate_merge'=>'disabled',
            'comment' => 'The first campaign name for Account (Meta-data only)',
        ),

        'prospect_lists' =>
        array (
            'name' => 'prospect_lists',
            'type' => 'link',
            'relationship' => 'prospect_list_accounts',
            'module'=>'ProspectLists',
            'source'=>'non-db',
            'vname'=>'LBL_PROSPECT_LIST',
        ),
    )
    ,
    'name_format_map' => array(
        'l' => 'name',
    ),
    'indices' => array (
        array('name' =>'idx_accnt_id_del', 'type' =>'index', 'fields'=>array('id', 'deleted')),
        array('name' =>'idx_accnt_name_del', 'type' => 'index', 'fields'=>array('name', 'deleted')),//bug #5530
        array('name' =>'idx_accnt_assigned_del', 'type' =>'index', 'fields'=>array( 'deleted', 'assigned_user_id')),
        array('name' =>'idx_accnt_parent_id', 'type' =>'index', 'fields'=>array( 'parent_id')),
    )

    , 'relationships' => array (
        'member_accounts' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
            'rhs_module'=> 'Accounts', 'rhs_table'=> 'accounts', 'rhs_key' => 'parent_id',
            'relationship_type'=>'one-to-many')

        ,'account_cases' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
            'rhs_module'=> 'Cases', 'rhs_table'=> 'cases', 'rhs_key' => 'account_id',
            'relationship_type'=>'one-to-many')

        ,'account_tasks' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
            'rhs_module'=> 'Tasks', 'rhs_table'=> 'tasks', 'rhs_key' => 'parent_id',
            'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
            'relationship_role_column_value'=>'Accounts')

        ,'account_notes' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
            'rhs_module'=> 'Notes', 'rhs_table'=> 'notes', 'rhs_key' => 'parent_id',
            'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
            'relationship_role_column_value'=>'Accounts')

        ,'account_meetings' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
            'rhs_module'=> 'Meetings', 'rhs_table'=> 'meetings', 'rhs_key' => 'parent_id',
            'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
            'relationship_role_column_value'=>'Accounts')

        ,'account_calls' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
            'rhs_module'=> 'Calls', 'rhs_table'=> 'calls', 'rhs_key' => 'parent_id',
            'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
            'relationship_role_column_value'=>'Accounts')

        /*,'accounts_emails' => array(
        'rhs_module'        => 'Emails',
        'rhs_table'         => 'emails',
        'rhs_key'           => 'id',
        'lhs_module'        => 'Accounts',
        'lhs_table'         => 'accounts',
        'lhs_key'           => 'id',
        'relationship_type' => 'many-to-many',
        'join_table'        => 'emails_accounts',
        'join_key_rhs'      => 'email_id',
        'join_key_lhs'      => 'account_id'
        )
        */
        ,'account_emails' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
            'rhs_module'=> 'Emails', 'rhs_table'=> 'emails', 'rhs_key' => 'parent_id',
            'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
            'relationship_role_column_value'=>'Accounts')

        ,'account_leads' => array('lhs_module'=> 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key' => 'id',
            'rhs_module'=> 'Leads', 'rhs_table'=> 'leads', 'rhs_key' => 'account_id',
            'relationship_type'=>'one-to-many')
        ,

        'accounts_assigned_user' =>
        array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
            'rhs_module'=> 'Accounts', 'rhs_table'=> 'accounts', 'rhs_key' => 'assigned_user_id',
            'relationship_type'=>'one-to-many'),

        'accounts_modified_user' =>
        array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
            'rhs_module'=> 'Accounts', 'rhs_table'=> 'accounts', 'rhs_key' => 'modified_user_id',
            'relationship_type'=>'one-to-many'),

        'accounts_created_by' =>
        array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
            'rhs_module'=> 'Accounts', 'rhs_table'=> 'accounts', 'rhs_key' => 'created_by',
            'relationship_type'=>'one-to-many'),

        'account_campaign_log' => array('lhs_module' => 'Accounts', 'lhs_table'=> 'accounts', 'lhs_key'=> 'id',
            'rhs_module'=> 'CampaignLog','rhs_table'=>'campaign_log', 'rhs_key'=> 'target_id',
            'relationship_type'	=>'one-to-many',
            'relationship_role_column' => 'target_type', 'relationship_role_column_value'=>'Accounts'),

    ),
    //This enables optimistic locking for Saves From EditView
    'optimistic_locking'=>true,
);

VardefManager::createVardef('Accounts','Account', array('default', 'assignable',
    'team_security',
    'company',
));

//jc - adding for refactor for import to not use the required_fields array
//defined in the field_arrays.php file
$dictionary['Account']['fields']['name']['importable'] = 'required';

?>

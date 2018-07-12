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

$dictionary['J_Discount'] = array(
    'table'=>'j_discount',
    'audited'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
        'start_date' =>
        array (
            'required' => false,
            'name' => 'start_date',
            'vname' => 'LBL_START_DATE',
            'type' => 'date',
            'massupdate' => 1,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'enable_range_search' => false,
            'validation' => array('type' => 'isbefore', 'compareto' => 'end_date', 'blank' => false),
        ),
        'end_date' =>
        array (
            'required' => false,
            'name' => 'end_date',
            'vname' => 'LBL_END_DATE',
            'type' => 'date',
            'massupdate' => 1,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'enable_range_search' => false,
        ),
        'status' =>
        array (
            'required' => false,
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'enum',
            'massupdate' => 1,
            'default' => 'Active',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => 'status_discount_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'category' =>
        array (
            'required' => true,
            'name' => 'category',
            'vname' => 'LBL_CATEGORY',
            'type' => 'enum',
            'massupdate' => 1,
            'default' => 'Standard Discount',       
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 255,
            'size' => '20',
            'options' => 'category_discount_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'type' =>
        array (
            'required' => false,
            'name' => 'type',
            'vname' => 'LBL_TYPE',
            'type' => 'enum',
            'massupdate' => 0,
            'default' => 'Other',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => 'type_discount_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'apply_for' =>
        array (
            'required' => false,
            'name' => 'apply_for',
            'vname' => 'LBL_APPLY_FOR',
            'type' => 'enum',
            'massupdate' => 1,
            'default' => 'Current Student',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 100,
            'size' => '20',
            'options' => 'applyfor_discount_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'policy' =>
        array (
            'required' => false,
            'name' => 'policy',
            'vname' => 'LBL_POLICY',
            'type' => 'text',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'studio' => 'visible',
            'rows' => '4',
            'cols' => '20',
        ),
        'discount_percent' =>
        array (
            'required' => false,
            'name' => 'discount_percent',
            'vname' => 'LBL_DISCOUNT_PERCENT',
            'type' => 'decimal',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '5',
            'size' => '20',
            'enable_range_search' => false,
            'precision' => '2',
        ),
        'discount_days' =>
        array (
            'required' => false,
            'name' => 'discount_days',
            'vname' => 'LBL_DISCOUNT_DAYS',
            'type' => 'int',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'enable_range_search' => false,
        ),
        'maximum_discount_percent' =>
        array (
            'required' => false,
            'name' => 'maximum_discount_percent',
            'vname' => 'LBL_MAXIMUM_DISCOUNT_PERCENT',
            'type' => 'decimal',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '5',
            'size' => '5',
            'enable_range_search' => false,
            'precision' => '2',
        ),
        'discount_amount' =>
        array (
            'required' => false,
            'name' => 'discount_amount',
            'vname' => 'LBL_DISCOUNT_AMOUNT',
            'type' => 'decimal',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '26',
            'size' => '20',
            'enable_range_search' => false,
            'precision' => '2',
        ),
        'content' =>
        array (
            'required' => false,
            'name' => 'content',
            'vname' => 'LBL_CONTENT',
            'type' => 'text',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'studio' => 'visible',
            'rows' => '4',
            'cols' => '20',
        ),
        'course' =>
        array (
            'required' => false,
            'name' => 'course',
            'vname' => 'LBL_COURSE',
            'type' => 'enum',
            'massupdate' => 0,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 10,
            'size' => '20',
            'options' => 'course_discount_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'order_no' =>
        array (
            'required'  => false,
            'name'      => 'order_no',
            'vname'     => 'LBL_ORDER',
            'type'      => 'int',
            'no_default' => false,
            'len'       => '10',
        ),
        'partnership' =>
        array (
            'required' => false,
            'name' => 'partnership',
            'vname' => 'LBL_PARTNERSHIP',
            'type' => 'text',
            'studio' => 'visible',
            'source' => 'non-db',
        ),
        'disable_list' =>
        array (
            'name' => 'disable_list',
            'vname' => 'LBL_DISABLE_LIST',
            'type' => 'text',
        ),
        'is_ratio' =>
        array (
            'name' => 'is_ratio',
            'vname' => 'Is Ratio',
            'type' => 'bool',
            'default' => '1',
        ),
        'is_catch_limit' =>
        array (
            'name' => 'is_catch_limit',
            'vname' => 'Is Catch Limit',
            'type' => 'bool',
            'default' => '1',
        ),
        'is_auto_set' =>
        array (
            'name' => 'is_auto_set',
            'vname' => 'Is Auto Set', //Discount tu dong tinh toan
            'type' => 'bool',
            'default' => '0',
        ),
        'is_discount_on_top' =>
        array (
            'name' => 'is_discount_on_top',
            'vname' => 'Is Discount on Top', //Áp dụng chain discount
            'type' => 'bool',
            'default' => '0',
        ),
        'is_chain_discount' =>
        array (
            'name' => 'is_chain_discount',
            'vname' => 'Is Chain Discount', //Áp dụng chain discount
            'type' => 'bool',
            'default' => '0',
        ),
        //Custom Relationship JUNIOR. J_Sponsor - Discount  By Lap Nguyen
        'j_sponsor'=>array(
            'name' => 'j_sponsor',
            'type' => 'link',
            'relationship' => 'j_sponsor_j_discounts',
            'module' => 'J_Discount',
            'bean_name' => 'J_Discount',
            'source' => 'non-db',
            'vname' => 'LBL_SPONSOR_NAME',
        ),
    ),
    'relationships'=>array (
      //Custom Relationship JUNIOR. J_Sponsor - Discount  By Lap Nguyen
        'j_sponsor_j_discounts' => array(
            'lhs_module'        => 'J_Discount',
            'lhs_table'            => 'j_discount',
            'lhs_key'            => 'id',
            'rhs_module'        => 'J_Sponsor',
            'rhs_table'            => 'j_sponsor',
            'rhs_key'            => 'discount_id',
            'relationship_type'    => 'one-to-many',
        ),
    ),
    'optimistic_locking'=>true,
    'unified_search'=>true,
);
if (!class_exists('VardefManager')){
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('J_Discount','J_Discount', array('basic','team_security','assignable'));
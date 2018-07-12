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

$dictionary['J_PaymentDetail'] = array(
    'table'=>'j_paymentdetail',
    'audited'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
        'payment_amount' =>
        array (
            'required' => false,
            'name' => 'payment_amount',
            'vname' => 'LBL_PAYMENT_AMOUNT',
            'type' => 'currency',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => 'Payment Amount',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 13,
            'min' => 1,
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'numeric_range_search_dom',
            'precision' => 2,
            'default' => '',
        ),
        'sale_type' =>
        array (
            'required' => false,
            'name' => 'sale_type',
            'vname' => 'LBL_SALE_TYPE',
            'type' => 'enum',
            'massupdate' => 0,
            'default' => 'Not set',
            'no_default' => false,
            'comments' => '',
            'help' => 'Sale Type',
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
            'options' => 'sale_type_payment_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'sale_type_date' =>
        array (
            'required' => true,
            'name' => 'sale_type_date',
            'vname' => 'LBL_SALE_TYPE_DATE',
            'type' => 'date',
            'massupdate' => 0,
            'no_default' => false,
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
        ),
        'payment_method_fee' =>
        array (
            'required' => false,
            'name' => 'payment_method_fee',
            'vname' => 'LBL_METHOD_FEE',
            'type' => 'currency',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => 'Payment Amount',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 13,
            'min' => 1,
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'numeric_range_search_dom',
            'precision' => 2,
            'default' => '',
        ),
        'payment_date' =>
        array (
            'name' => 'payment_date',
            'vname' => 'LBL_PAYMENT_DATE',
            'type' => 'date',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
        ),

        'before_discount' =>
        array (
            'name' => 'before_discount',
            'vname' => 'LBL_BEFORE_DISCOUNT',
            'type' => 'currency',
            'len' => 13,
            'precision' => 2,
        ),
        'is_first' =>
        array (
            'name' => 'is_first',
            'vname' => 'LBL_IS_FIRST',
            'type' => 'bool',
            'default' => '0',
        ),
        'discount_amount' =>
        array (
            'name' => 'discount_amount',
            'vname' => 'LBL_DISCOUNT_AMOUNT',
            'type' => 'currency',
            'len' => 13,
            'precision' => 2,
        ),
        'sponsor_amount' =>
        array (
            'name' => 'sponsor_amount',
            'vname' => 'LBL_SPONSOR_AMOUNT',
            'type' => 'currency',
            'len' => 13,
            'precision' => 2,
        ),
        'loyalty_amount' =>
        array (
            'name' => 'loyalty_amount',
            'vname' => 'LBL_LOYALTY_AMOUNT',
            'type' => 'currency',
            'len' => 13,
            'precision' => 2,
        ),
        'payment_method' =>
        array (
            'required' => false,
            'name' => 'payment_method',
            'vname' => 'LBL_PAYMENT_METHOD',
            'type' => 'enum',
            'massupdate' => 0,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => 'Payment Method',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 50,
            'size' => '20',
            'options' => 'payment_method_junior_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'content_vat_invoice' =>
        array (
            'name' => 'content_vat_invoice',
            'vname' => 'LBL_CONTENT_VAT_INVOICE',
            'type' => 'varchar',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => 'Method Note',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '255',
            'size' => '20',
        ),
        'method_note' =>
        array (
            'required' => false,
            'name' => 'method_note',
            'vname' => 'LBL_METHOD_NOTE',
            'type' => 'varchar',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => 'Method Note',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '255',
            'size' => '20',
        ),
        'card_type' =>
        array (
            'required' => false,
            'name' => 'card_type',
            'vname' => 'LBL_CARD_TYPE',
            'type' => 'varchar',
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
            'len' => 100,
            'size' => '20',
            //           'options' => 'card_type_payments_list',
            'studio' => 'visible',
            'dependency' => false,
        ),
        'invoice_number' =>
        array (
            'required' => false,
            'name' => 'invoice_number',
            'vname' => 'LBL_INVOICE_NUMBER',
            'type' => 'varchar',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => 'Invoice Number',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '20',
            'size' => '20',
        ),
        'serial_no' =>
        array (
            'required' => false,
            'name' => 'serial_no',
            'vname' => 'LBL_SERIAL_NO',
            'type' => 'varchar',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => 'Serial No',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '20',
            'size' => '20',
        ),
        'custom_button' =>
        array (
            'name' => 'custom_button',
            'vname' => 'Button',
            'type' => 'varchar',
            'len' => '1',
            'studio' => 'visible',
            'source' => 'non-db',
        ),
        'is_discount' =>
        array (
            'name' => 'is_discount',
            'vname' => 'LBL_IS_DISCOUNT',
            'type' => 'bool',
            'comments' => 'comment',
            'help' => 'help',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'reportable' => true,
        ),
        'receipt_printed' =>
        array (
            'name' => 'receipt_printed',
            'vname' => 'LBL_RECEIPT_PRINT',
            'type' => 'bool',
            'default' => 0,
        ),
        'printed_date' =>
        array (
            'required' => true,
            'name' => 'printed_date',
            'vname' => 'LBL_PRINTED_DATE',
            'type' => 'date',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'date_range_search_dom',
        ),
        'status' =>
        array (
            'required' => false,
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'enum',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 10,
            'size' => '20',
            'options' => 'status_paymentdetail_list',
            'studio' => 'visible',
            'dependency' => false,
        ),

        'payment_no' =>
        array (
            'required' => false,
            'name' => 'payment_no',
            'vname' => 'LBL_PAYMENT_NO',
            'type' => 'int',
            'massupdate' => 0,
            'default' => '',
            'no_default' => false,
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '10',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        //Add Relationship Payment - Payment Detail (Split Payment)
        'payment_id' => array(
            'name' => 'payment_id',
            'vname' => 'LBL_PAYMENT_ID',
            'type' => 'id',
            'required'=>false,
            'reportable'=>false,
            'comment' => ''
        ),

        'payment_name' => array(
            'name' => 'payment_name',
            'rname' => 'name',
            'id_name' => 'payment_id',
            'vname' => 'LBL_PAYMENT_NAME',
            'type' => 'relate',
            'link' => 'payment_link',
            'table' => 'j_payment',
            'isnull' => 'true',
            'module' => 'J_Payment',
            'dbType' => 'varchar',
            'len' => 'id',
            'reportable'=>true,
            'source' => 'non-db',
        ),

        'payment_link' => array(
            'name' => 'payment_link',
            'type' => 'link',
            'relationship' => 'payment_paymentdetails',
            'link_type' => 'one',
            'side' => 'right',
            'source' => 'non-db',
            'vname' => 'LBL_PAYMENT_NAME',
        ),
        //Contract - Payment
        'contract_id' => array(
            'name' => 'contract_id',
            'vname' => 'LBL_CONTRACT_ID',
            'type' => 'id',
            'required'=>false,
            'reportable'=>false,
            'comment' => ''
        ),

        'contract_name' => array(
            'name' => 'contract_name',
            'rname' => 'name',
            'id_name' => 'contract_id',
            'vname' => 'LBL_CONTRACT_NAME',
            'type' => 'relate',
            'link' => 'contract_link',
            'table' => 'contracts',
            'isnull' => 'true',
            'module' => 'Contracts',
            'dbType' => 'varchar',
            'len' => 'id',
            'reportable'=>true,
            'source' => 'non-db',
        ),

        'contract_link' => array(
            'name' => 'contract_link',
            'type' => 'link',
            'relationship' => 'contract_paymentdetails',
            'link_type' => 'one',
            'side' => 'right',
            'source' => 'non-db',
            'vname' => 'LBL_CONTRACT_NAME',
        ),

        'type' =>
        array (
            'required' => false,
            'name' => 'type',
            'vname' => 'LBL_TYPE',
            'type' => 'enum',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => 50,
            'size' => '20',
            'options' => 'payment_detail_type_options',
            'studio' => 'visible',
            'dependency' => false,
        ),

        'numeric_vat_no' =>
        array (
            'required' => true,
            'name' => 'numeric_vat_no',
            'vname' => 'LBL_INVOICE_NUMBER_INT',
            'type' => 'int',
            'massupdate' => 0,
            'no_default' => false,
            'default' => 'NULL',
            'comments' => '',
            'help' => 'VAT No Int',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '10',
            'size' => '20',
            'enable_range_search' => true,
            'options' => 'numeric_range_search_dom',
        ),

        'is_release' =>
        array (
            'name' => 'is_release',
            'vname' => 'LBL_IS_RELEASE',
            'type' => 'bool',
            'help' => 'help',
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'duplicate_merge_dom_value' => '1',
            'audited' => false,
            'reportable' => true,
            'default' => '0',
        ),
        //Add Relationship Payment - Loyalty
        'loyalty_link'=>array(
            'name' => 'loyalty_link',
            'type' => 'link',
            'relationship' => 'paymentdetail_loyaltys',
            'module' => 'J_Loyalty',
            'bean_name' => 'J_Loyalty',
            'source' => 'non-db',
            'vname' => 'LBL_LOYALTY',
        ),
        //Custom Relationship JUNIOR. Student  - Payment Detail (1-n)  By Lap Nguyen
        'student_name' => array(
            'required'  => true,
            'source'    => 'non-db',
            'name'      => 'student_name',
            'vname'     => 'LBL_STUDENT_NAME',
            'type'      => 'relate',
            'rname'     => 'name',
            'id_name'   => 'student_id',
            'join_name' => 'contacts',
            'link'      => 'ju_contacts',
            'table'     => 'contacts',
            'isnull'    => 'true',
            'module'    => 'Contacts',
        ),

        'student_id' => array(
            'name'              => 'student_id',
            'rname'             => 'id',
            'vname'             => 'LBL_STUDENT_ID',
            'type'              => 'id',
            'table'             => 'contacts',
            'isnull'            => 'true',
            'module'            => 'Contacts',
            'dbType'            => 'id',
            'reportable'        => false,
            'massupdate'        => false,
            'duplicate_merge'   => 'disabled',
        ),

        'ju_student' => array(
            'name'          => 'ju_student',
            'type'          => 'link',
            'relationship'  => 'student_paymentdetail',
            'module'        => 'Contacts',
            'bean_name'     => 'Contact',
            'source'        => 'non-db',
            'vname'         => 'LBL_STUDENT_NAME',
        ),

        //Add Relationship Invoice - Payment Detail
        'invoice_id' => array(
            'name' => 'invoice_id',
            'vname' => 'LBL_INVOICE_ID',
            'type' => 'id',
            'required'=>false,
            'reportable'=>false,
            'comment' => ''
        ),

        'invoice_name' => array(
            'name' => 'invoice_name',
            'rname' => 'name',
            'id_name' => 'invoice_id',
            'vname' => 'LBL_INVOICE_NUMBER',
            'type' => 'relate',
            'link' => 'invoice_link',
            'table' => 'j_invoice',
            'isnull' => 'true',
            'module' => 'J_Invoice',
            'dbType' => 'varchar',
            'len' => 'id',
            'reportable'=>true,
            'source' => 'non-db',
        ),

        'invoice_link' => array(
            'name' => 'invoice_link',
            'type' => 'link',
            'relationship' => 'invoice_paymentdetail',
            'link_type' => 'one',
            'side' => 'right',
            'source' => 'non-db',
            'vname' => 'LBL_INVOICE_NUMBER',
        ),
        //  Invoice - Payment Detail

    ),
    'indices' => array (
        array(
            'name' => 'idx_payment_id',
            'type' => 'index',
            'fields'=> array('payment_id'),
        ),
    ),
    'relationships'=>array (
        //Add Relationship Payment Detail - Loyalty
        'paymentdetail_loyaltys' => array(
            'lhs_module' => 'J_PaymentDetail',
            'lhs_table' => 'j_paymentdetail',
            'lhs_key' => 'id',
            'rhs_module' => 'J_Loyalty',
            'rhs_table' => 'j_loyalty',
            'rhs_key' => 'paymentdetail_id',
            'relationship_type' => 'one-to-many'
        ),
    ),
    'optimistic_locking'=>true,
    'unified_search'=>true,
);
if (!class_exists('VardefManager')){
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('J_PaymentDetail','J_PaymentDetail', array('basic','team_security','assignable'));
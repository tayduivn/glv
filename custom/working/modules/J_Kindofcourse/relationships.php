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

$relationships = array (
  'j_kindofcourse_modified_user' => 
  array (
    'id' => '213ce284-8993-2bce-2959-5b18e8a25d5f',
    'relationship_name' => 'j_kindofcourse_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'J_Kindofcourse',
    'rhs_table' => 'j_kindofcourse',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'j_kindofcourse_created_by' => 
  array (
    'id' => '2169df33-b6ca-124b-2a9c-5b18e80e4c71',
    'relationship_name' => 'j_kindofcourse_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'J_Kindofcourse',
    'rhs_table' => 'j_kindofcourse',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'j_kindofcourse_assigned_user' => 
  array (
    'id' => '21ff18a1-05eb-11b0-5454-5b18e8adb075',
    'relationship_name' => 'j_kindofcourse_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'J_Kindofcourse',
    'rhs_table' => 'j_kindofcourse',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'kindofcourse_class' => 
  array (
    'id' => '221e5449-4adc-7b7a-f246-5b18e8fca1f5',
    'relationship_name' => 'kindofcourse_class',
    'lhs_module' => 'J_Kindofcourse',
    'lhs_table' => 'j_kindofcourse',
    'lhs_key' => 'id',
    'rhs_module' => 'J_Class',
    'rhs_table' => 'j_class',
    'rhs_key' => 'koc_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'kindofcourse_gradeconfig' => 
  array (
    'id' => '223ac563-1455-6235-205f-5b18e820b569',
    'relationship_name' => 'kindofcourse_gradeconfig',
    'lhs_module' => 'J_Kindofcourse',
    'lhs_table' => 'j_kindofcourse',
    'lhs_key' => 'id',
    'rhs_module' => 'J_GradebookConfig',
    'rhs_table' => 'j_gradebookconfig',
    'rhs_key' => 'koc_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'j_kindofcourse_j_coursefee_1' => 
  array (
    'rhs_label' => 'Course Fee',
    'lhs_label' => 'Kind of Course',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'J_Kindofcourse',
    'rhs_module' => 'J_Coursefee',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'j_kindofcourse_j_coursefee_1',
  ),
);
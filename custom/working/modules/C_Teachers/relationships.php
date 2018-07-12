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
  'c_teachers_modified_user' => 
  array (
    'id' => 'e1f98f0e-5002-6ed4-5ed2-57971579000d',
    'relationship_name' => 'c_teachers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'C_Teachers',
    'rhs_table' => 'c_teachers',
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
  'c_teachers_created_by' => 
  array (
    'id' => 'e24b8a89-64a4-ac86-2f30-579715bcee2c',
    'relationship_name' => 'c_teachers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'C_Teachers',
    'rhs_table' => 'c_teachers',
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
  'c_teachers_assigned_user' => 
  array (
    'id' => 'e3af4de9-cfba-2e35-dbc5-579715550c45',
    'relationship_name' => 'c_teachers_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'C_Teachers',
    'rhs_table' => 'c_teachers',
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
  'teachers_meetings' => 
  array (
    'id' => 'e4e09c06-aa02-06f2-2f5d-57971531d8b8',
    'relationship_name' => 'teachers_meetings',
    'lhs_module' => 'C_Teachers',
    'lhs_table' => 'c_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'teacher_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'teachers_cover_meetings' => 
  array (
    'id' => 'e5296e79-9f04-c25e-7798-5797150d4a38',
    'relationship_name' => 'teachers_cover_meetings',
    'lhs_module' => 'C_Teachers',
    'lhs_table' => 'c_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'teacher_cover_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'timesheet_teacher' => 
  array (
    'id' => 'e5721d32-5a1a-bf41-d408-579715bdb4e7',
    'relationship_name' => 'timesheet_teacher',
    'lhs_module' => 'C_Teachers',
    'lhs_table' => 'c_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'C_Timesheet',
    'rhs_table' => 'c_timesheet',
    'rhs_key' => 'teacher_id',
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
  'teacher_timekeeping' => 
  array (
    'id' => 'e5bc7ffe-e0d4-587d-e615-57971576366b',
    'relationship_name' => 'teacher_timekeeping',
    'lhs_module' => 'C_Teachers',
    'lhs_table' => 'c_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'c_Timekeeping',
    'rhs_table' => 'c_timekeeping',
    'rhs_key' => 'teacher_id',
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
  'teacher_j_inventory' => 
  array (
    'id' => 'e6052091-d4ae-6ceb-7932-579715db2a72',
    'relationship_name' => 'teacher_j_inventory',
    'lhs_module' => 'C_Teachers',
    'lhs_table' => 'c_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'J_Inventory',
    'rhs_table' => 'j_inventory',
    'rhs_key' => 'to_teacher_id',
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
  'c_classes_c_teachers_1' => 
  array (
    'id' => '120039a1-b3b6-bd38-8e61-5797150bfb87',
    'relationship_name' => 'c_classes_c_teachers_1',
    'lhs_module' => 'C_Classes',
    'lhs_table' => 'c_classes',
    'lhs_key' => 'id',
    'rhs_module' => 'C_Teachers',
    'rhs_table' => 'c_teachers',
    'rhs_key' => 'id',
    'join_table' => 'c_classes_c_teachers_1_c',
    'join_key_lhs' => 'c_classes_c_teachers_1c_classes_ida',
    'join_key_rhs' => 'c_classes_c_teachers_1c_teachers_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'c_teachers_c_sms' => 
  array (
    'id' => '168235e4-177a-0033-7d57-579715f0254b',
    'relationship_name' => 'c_teachers_c_sms',
    'lhs_module' => 'C_Teachers',
    'lhs_table' => 'c_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'C_SMS',
    'rhs_table' => 'c_sms',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'C_Teachers',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'c_teachers_j_class_1' => 
  array (
    'id' => '18555b7f-003c-d908-0c22-579715fe8cd0',
    'relationship_name' => 'c_teachers_j_class_1',
    'lhs_module' => 'C_Teachers',
    'lhs_table' => 'c_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'J_Class',
    'rhs_table' => 'j_class',
    'rhs_key' => 'id',
    'join_table' => 'c_teachers_j_class_1_c',
    'join_key_lhs' => 'c_teachers_j_class_1c_teachers_ida',
    'join_key_rhs' => 'c_teachers_j_class_1j_class_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'c_teachers_j_teachercontract_1' => 
  array (
    'id' => '18aac1c7-b23f-8739-dfa0-579715295e32',
    'relationship_name' => 'c_teachers_j_teachercontract_1',
    'lhs_module' => 'C_Teachers',
    'lhs_table' => 'c_teachers',
    'lhs_key' => 'id',
    'rhs_module' => 'J_Teachercontract',
    'rhs_table' => 'j_teachercontract',
    'rhs_key' => 'id',
    'join_table' => 'c_teachers_j_teachercontract_1_c',
    'join_key_lhs' => 'c_teachers_j_teachercontract_1c_teachers_ida',
    'join_key_rhs' => 'c_teachers_j_teachercontract_1j_teachercontract_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'j_class_c_teachers_1' => 
  array (
    'id' => '19598490-4792-b103-cbcd-579715a5bf4a',
    'relationship_name' => 'j_class_c_teachers_1',
    'lhs_module' => 'J_Class',
    'lhs_table' => 'j_class',
    'lhs_key' => 'id',
    'rhs_module' => 'C_Teachers',
    'rhs_table' => 'c_teachers',
    'rhs_key' => 'id',
    'join_table' => 'j_class_c_teachers_1_c',
    'join_key_lhs' => 'j_class_c_teachers_1j_class_ida',
    'join_key_rhs' => 'j_class_c_teachers_1c_teachers_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'c_teachers_j_gradebook_1' => 
  array (
    'rhs_label' => 'Gradebook',
    'lhs_label' => 'Teachers',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'C_Teachers',
    'rhs_module' => 'J_Gradebook',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'c_teachers_j_gradebook_1',
  ),
);
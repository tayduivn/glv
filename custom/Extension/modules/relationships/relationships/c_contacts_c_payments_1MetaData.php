<?php
// created: 2015-06-18 09:44:26
$dictionary["c_contacts_c_payments_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'c_contacts_c_payments_1' => 
    array (
      'lhs_module' => 'C_Contacts',
      'lhs_table' => 'c_contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'C_Payments',
      'rhs_table' => 'c_payments',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'c_contacts_c_payments_1_c',
      'join_key_lhs' => 'c_contacts_c_payments_1c_contacts_ida',
      'join_key_rhs' => 'c_contacts_c_payments_1c_payments_idb',
    ),
  ),
  'table' => 'c_contacts_c_payments_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'c_contacts_c_payments_1c_contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'c_contacts_c_payments_1c_payments_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'c_contacts_c_payments_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'c_contacts_c_payments_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'c_contacts_c_payments_1c_contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'c_contacts_c_payments_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'c_contacts_c_payments_1c_payments_idb',
      ),
    ),
  ),
);
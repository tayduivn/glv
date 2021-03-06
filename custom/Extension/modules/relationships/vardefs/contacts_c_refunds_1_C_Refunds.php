<?php
// created: 2014-04-18 09:33:01
$dictionary["C_Refunds"]["fields"]["contacts_c_refunds_1"] = array (
  'name' => 'contacts_c_refunds_1',
  'type' => 'link',
  'relationship' => 'contacts_c_refunds_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_C_REFUNDS_1_FROM_C_REFUNDS_TITLE',
  'id_name' => 'contacts_c_refunds_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["C_Refunds"]["fields"]["contacts_c_refunds_1_name"] = array (
  'name' => 'contacts_c_refunds_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_C_REFUNDS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_c_refunds_1contacts_ida',
  'link' => 'contacts_c_refunds_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["C_Refunds"]["fields"]["contacts_c_refunds_1contacts_ida"] = array (
  'name' => 'contacts_c_refunds_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_C_REFUNDS_1_FROM_C_REFUNDS_TITLE_ID',
  'id_name' => 'contacts_c_refunds_1contacts_ida',
  'link' => 'contacts_c_refunds_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

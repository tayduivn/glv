<?PHP
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

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN J_School
 */


class J_School_sugar extends Basic {
	var $new_schema = true;
	var $module_dir = 'J_School';
	var $object_name = 'J_School';
	var $table_name = 'j_school';
	var $importable = true;
		var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;
		var $team_id;
		var $team_set_id;
		var $team_count;
		var $team_name;
		var $team_link;
		var $team_count_link;
		var $teams;
		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;
		var $school_id;
		var $level;
		var $address_street;
		var $address_city;
		var $address_state;
		var $address_postalcode;
		var $address_country;

	/**
	 * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
	 */
	function J_School_sugar(){
		self::__construct();
	}

	public function __construct(){
		parent::__construct();
	}

	public function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
}

}
?>
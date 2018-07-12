<?php
$popupMeta = array (
    'moduleMain' => 'Meetings',
    'varName' => 'Meeting',
    'orderBy' => 'meetings.name',
    'whereClauses' => array (
  'name' => 'meetings.name',
  'meeting_type' => 'meetings.meeting_type',
  'assigned_user_name' => 'meetings.assigned_user_name',
  'description' => 'meetings.description',
  'date_start' => 'meetings.date_start',
  'team_name' => 'meetings.team_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'meeting_type',
  6 => 'assigned_user_name',
  7 => 'description',
  8 => 'date_start',
  9 => 'team_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'meeting_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_MEETING_TYPE',
    'width' => '10%',
    'name' => 'meeting_type',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
  'date_start' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '10%',
    'name' => 'date_start',
  ),
  'team_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'studio' => 
    array (
      'portallistview' => false,
      'portaldetailview' => false,
      'portaleditview' => false,
    ),
    'label' => 'LBL_TEAMS',
    'id' => 'TEAM_ID',
    'width' => '10%',
    'name' => 'team_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '17%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'MEETING_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_MEETING_TYPE',
    'width' => '10%',
    'name' => 'meeting_type',
  ),
  'WEEK_DATE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WEEK_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'week_date',
  ),
  'DATE_START' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'date_start',
  ),
  'NUMBER_OF_STUDENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMBER_OF_STUDENT',
    'width' => '10%',
    'default' => true,
    'name' => 'number_of_student',
  ),
  'ATTENDED' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ATTENDEDD',
    'width' => '10%',
    'default' => true,
    'name' => 'attended',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);

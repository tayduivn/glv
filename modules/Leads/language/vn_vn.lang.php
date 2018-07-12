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

/*********************************************************************************

* Description:  Defines the English language pack for the base application.
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'en_us A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Mô tả',
    'LBL_ACCOUNT_ID'=>'ID công ty',
    'LBL_ACCOUNT_NAME' => 'Công ty:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Hoạt động',
    'LBL_ADD_BUSINESSCARD' => 'Thêm danh thiếp',
    'LBL_ADDRESS_INFORMATION' => 'Thông tin địa chỉ',
    'LBL_ALT_ADDRESS_CITY' => 'Thành phố khác',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Quốc gia khác',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Mã bưu điện khác',
    'LBL_ALT_ADDRESS_STATE' => 'Quận huyện khác',
    'LBL_ALT_ADDRESS_STREET_2' => 'Địa chỉ khác 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Địa chỉ khác 3',
    'LBL_ALT_ADDRESS_STREET' => 'Địa chỉ khác',
    'LBL_ALTERNATE_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ALT_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ANY_ADDRESS' => 'Địa chỉ bất kỳ:',
    'LBL_ANY_EMAIL' => 'Email bất kỳ:',
    'LBL_ANY_PHONE' => 'Số điện thoại bất kỳ:',
    'LBL_ASSIGNED_TO_NAME' => 'Người phụ trách',
    'LBL_ASSIGNED_TO_ID' => 'Người phụ trách:',
    'LBL_BACKTOLEADS' => 'Back To Leads',
    'LBL_BUSINESSCARD' => 'Convert Lead',
    'LBL_CITY' => 'Thành phố:',
    'LBL_CONTACT_ID' => 'ID học viên',
    'LBL_CONTACT_INFORMATION' => 'Thông tin chung',
    'LBL_CONTACT_NAME' => 'Lead Name:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-Opportunity:',
    'LBL_CONTACT_ROLE' => 'Phân quyền:',
    'LBL_CONTACT' => 'Lead:',
    'LBL_CONVERTED_ACCOUNT'=>'Đã được chuyển đổi:',
    'LBL_CONVERTED_CONTACT' => 'Đã được chuyển đổi thành HV:',
    'LBL_CONVERTED_OPP'=>'Converted Opportunity:',
    'LBL_CONVERTED'=> 'Chuyển đổi',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convert Lead',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Possible Contact: ',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_CREATED_NEW' => 'Tạo mới',
	'LBL_CREATED_ACCOUNT' => 'Tạo mới công ty',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Tạo HV',
    'LBL_CREATED_MEETING' => 'Tạo lịch hẹn',
    'LBL_CREATED_OPPORTUNITY' => 'Tạo cơ hội',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'HV Tiềm năng',
    'LBL_DEPARTMENT' => 'Phòng ban:',
    'LBL_DESCRIPTION_INFORMATION' => 'Thông tin mô tả',
    'LBL_DESCRIPTION' => 'Mô tả thêm:',
    'LBL_DO_NOT_CALL' => 'Không nhận cuộc gọi/SMS:',
    'LBL_DUPLICATE' => 'Đầu mối tương quan',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Công ty đã tồn tại',
    'LBL_EXISTING_CONTACT' => 'Học viên đã tồn tại',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Tên:',
    'LBL_FULL_NAME' => 'Họ tên',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Lịch sử chăm sóc',
    'LBL_HOME_PHONE' => 'Điện thoại nhà riêng:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Tự động tạo khách hàng tiềm năng mới bằng cách nhập vCard từ hệ thống tệp của bạn.',
    'LBL_INVALID_EMAIL'=>'Email không hợp lệ:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Họ:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Mô tả:',
    'LBL_LEAD_SOURCE' => 'Nguồn khách hàng:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Công ty',
    'LBL_LIST_CONTACT_NAME' => 'Danh sách HV Tiềm năng',
    'LBL_LIST_CONTACT_ROLE' => 'Phân quyền',
    'LBL_LIST_DATE_ENTERED' => 'Ngày tạo',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Tên',
    'LBL_VIEW_FORM_TITLE' => 'Xem chi tiết',
    'LBL_LIST_FORM_TITLE' => 'Danh sách',
    'LBL_LIST_LAST_NAME' => 'Họ',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Ghi chú nguồn',
    'LBL_LIST_LEAD_SOURCE' => 'Nguồn khách hàng',
    'LBL_LIST_MY_LEADS' => 'My Leads',
    'LBL_LIST_NAME' => 'Họ tên',
    'LBL_LIST_PHONE' => 'Số điện thoại',
    'LBL_LIST_REFERED_BY' => 'Referred By',
    'LBL_LIST_STATUS' => 'Trạng thái',
    'LBL_LIST_TITLE' => 'Chức danh',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Lead',
    'LBL_MODULE_NAME_SINGULAR' => 'Lead',
    'LBL_MODULE_TITLE' => 'HV Tiềm năng: Trang chủ',
    'LBL_NAME' => 'Họ tên:',
    'LBL_NEW_FORM_TITLE' => 'Tạo mới',
    'LBL_NEW_PORTAL_PASSWORD' => 'New Portal Password:',
    'LBL_OFFICE_PHONE' => 'Điện thoại văn phòng:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Số lượng cơ hội:',
    'LBL_OPPORTUNITY_ID'=>'ID cơ hội',
    'LBL_OPPORTUNITY_NAME' => 'Tên cơ hội:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email khác:',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_PHONE' => 'Số điện thoại:',
    'LBL_PORTAL_ACTIVE' => 'Portal Active:',
    'LBL_PORTAL_APP'=> 'Portal Application',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portal Password Is Set:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_STREET' => 'Đường',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Thành phố chính',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Quốc gia chính',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Mã bưu điện',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Quận/ huyện chính',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Địa chỉ 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Địa chỉ 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Địa chỉ',
    'LBL_PRIMARY_ADDRESS' => 'Địa chỉ:',
    'LBL_REFERED_BY' => 'Referred By:',
    'LBL_REPORTS_TO_ID'=>'Reports To ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_REPORTS_FROM' => 'Reports From:',
    'LBL_SALUTATION' => 'Chức danh',
    'LBL_MODIFIED'=>'Sửa bởi',
	'LBL_MODIFIED_ID'=>'ID người sửa',
	'LBL_CREATED'=>'Tạo bởi',
	'LBL_CREATED_ID'=>'ID người tạo',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Leads',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'Quận/Huyện:',
    'LBL_STATUS_DESCRIPTION' => 'Mô tả trạng thái:',
    'LBL_STATUS' => 'Trạng thái:',
    'LBL_TITLE' => 'Chức danh:',
    'LNK_IMPORT_VCARD' => 'Create Lead From vCard',
    'LNK_LEAD_LIST' => 'Xem danh sách',
    'LNK_NEW_ACCOUNT' => 'Tạo mới Công ty',
    'LNK_NEW_APPOINTMENT' => 'Tạo lịch hẹn',
    'LNK_NEW_CONTACT' => 'Tạo HV',
    'LNK_NEW_LEAD' => 'Tạo HV Tiềm năng',
    'LNK_NEW_NOTE' => 'Tạo mới ghi chú',
    'LNK_NEW_TASK' => 'Tạo mới tác vụ',
    'LNK_NEW_CASE' => 'Tạo mới vụ việc',
    'LNK_NEW_CALL' => 'Ghi chú cuộc gọi',
    'LNK_NEW_MEETING' => 'Tạo lịch hẹn',
    'LNK_NEW_OPPORTUNITY' => 'Tạo cơ hội',
	'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Chọn công ty',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Chọn HV',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Sao chép địa chỉ thay thế vào địa chỉ chính',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Sao chép địa chỉ chính đến địa chỉ thay thế',
    'NTC_DELETE_CONFIRMATION' => 'Bạn có chắc chắn muốn xóa bản ghi này không?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Tạo cơ hội yêu cầu một tài khoản. \n Vui lòng tạo một tài khoản mới hoặc chọn một tài khoản hiện có.',
    'NTC_REMOVE_CONFIRMATION' => 'Bạn có chắc chắn muốn xóa khách hàng tiềm năng này khỏi trường hợp này không?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Bạn có chắc chắn muốn xóa bản ghi này dưới dạng báo cáo trực tiếp không?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Chiến dịch',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Chiến dịch thành công :',
    'LBL_TARGET_BUTTON_LABEL'=>'Targeted',
    'LBL_TARGET_BUTTON_TITLE'=>'Targeted',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN_ID'=>'ID Chiến dịch',
    'LBL_CAMPAIGN' => 'Chiến dịch',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Người phụ trách',
    'LBL_PROSPECT_LIST' => 'Danh sách HV Tiềm năng',
    'LBL_CAMPAIGN_LEAD' => 'Chiến dịch',
	'LNK_LEAD_REPORTS' => 'Xem báo cáo HV Tiềm năng',
    'LBL_BIRTHDATE' => 'Ngày sinh:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Thank You For Your Submission.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Rất tiếc, máy chủ hiện không khả dụng, vui lòng thử lại sau.',
    'LBL_ASSISTANT_PHONE' => 'Điện thoại trợ lý',
    'LBL_ASSISTANT' => 'Tên không dấu',
    'LBL_REGISTRATION' => 'Đăng ký',
    'LBL_MESSAGE' => 'Vui lòng nhập thông tin của bạn bên dưới. Thông tin tài khoản của bạn đang chờ phê duyệt.',
    'LBL_SAVED' => 'Cảm ơn bạn đã đăng ký. Tài khoản của bạn sẽ được tạo và sẽ sớm có người liên hệ với bạn.',
    'LBL_CLICK_TO_RETURN' => 'Return to Portal',
    'LBL_CREATED_USER' => 'Tạo bởi',
    'LBL_MODIFIED_USER' => 'Sửa bởi',
    'LBL_CAMPAIGNS' => 'Chiến dịch',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Chiến dịch',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'Cho phép lựa chọn',
    'LBL_CONVERT_COPY' => 'Copy Data',
    'LBL_CONVERT_EDIT' => 'Sửa',
    'LBL_CONVERT_DELETE' => 'Xóa',
    'LBL_CONVERT_ADD_MODULE' => 'Thêm Module',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Chỉnh sửa bố cục',
    'LBL_CREATE' => 'Tạo',
    'LBL_SELECT' => ' <b>OR</b> Select',
	'LBL_WEBSITE' => 'Website',
	'LNK_IMPORT_LEADS' => 'Import từ file Excel',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Notice: The current Convert Lead screen contains custom fields. When you customize the Convert Lead screen in Studio for the first time, you will need to add custom fields to the layout, as necessary. The custom fields will not automatically appear in the layout, as they did previously.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'The module to create a new record in.',
	'LBL_REQUIRED_TIP' 	=> 'Required modules must be created or selected before the lead can be converted.',
	'LBL_COPY_TIP'		=> 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
	'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
	'LBL_EDIT_TIP'		=> 'Modify the convert layout for this module.',
	'LBL_DELETE_TIP'	=> 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE'   => 'Move Activities to',
    'LBL_ACTIVITIES_COPY'   => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP'   => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_PHONE_HOME' => 'Điện thoại nhà riêng',
    'LBL_AIMS_ID' => 'AIMS ID',
    'LBL_PHONE_MOBILE' => 'Mobile',
    'LBL_PHONE_WORK' => 'Điện thoại văn phòng',
    'LBL_PHONE_OTHER' => 'Điện thoại khác',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_CAMPAIGN_ID' => 'ID chiến dịch',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Người phụ trách',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Người phụ trách',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'ID người sửa',
    'LBL_EXPORT_CREATED_BY' => 'ID người tạo',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobile',
    'LBL_EXPORT_EMAIL2'=>'Địa chỉ email khác',
	'LBL_EDITLAYOUT' => 'Sửa bố cục' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Nhập ngày' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Đang tải' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Sửa',
    'LBL_JOB_CATEGORY' => 'Ngành nghề',
    'LBL_UTM_SOURCE' => 'Nguồn UTM',
    'LBL_UTM_MEDIUM' => 'UTM Medium',
    'LBL_BIRTH_MONTH' => 'Tháng sinh',
    'LBL_CATEGORY' => 'Phân loại',
    'LBL_ACTIVITY' => 'Hoạt động',
    'LBL_OCCUPATION' => 'Nghề nghiệp',
    'LBL_STOPPED_DATE' => 'Ngày kết thúc',
    'LBL_STOPPED' => 'Đã kết thúc',
    'LBL_INDENTITY_NUMBER' => 'Số CMND',
    'LBL_INDENTITY_DATE' => 'Ngày cấp',
    'LBL_INDENTITY_LOCATION' => 'Nơi cấp',
    'LBL_PLACE_OF_BIRTH' => 'Nơi sinh',


    //BTCI
    'LBL_GRADUATED_YEAR' => 'Năm tốt nghiệp',
    'LBL_GRADUATED_RATE' => 'Tốt nghiệp loại',
    'LBL_GRADUATED_MAJOR' => 'Chuyên ngành',
    'LBL_EXPERIENCE_YEAR' => 'Số năm kinh nghiệm',
    'LBL_POSITION' => 'Chức vụ',
    'LBL_FACEBOOK' => 'Facebook',
    'LBL_BRANCH' => 'Chi nhánh công ty',
    'LBL_TYPE' => 'Loại học viên',
    'LBL_HEIGHT' => 'Chiều cao',
    'LBL_WEIGHT' => 'Cân nặng',
    'LBL_PT_SCORE' => 'Điểm PT',
        'LBL_EMAIL_PARENT_1' => 'Email Mẹ',
    'LBL_EMAIL_PARENT_2' => 'Email Bố',
    'LBL_LAST_PT_RESULT' => 'Kết quả PT sau cùng',
    'LBL_REASON_NOT_INTERESTED' => 'Lý do không quan tâm',
    'LBL_REASON_DESCRIPTION' => 'Mô tả lý do',
);
?>

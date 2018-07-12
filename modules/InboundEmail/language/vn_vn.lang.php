<?php
/* modules/InboundEmail/language/vn_vn.lang.php */
if(!defined('sugarEntry'))define('sugarEntry', true);
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * Contributor: Lampada CRM
 * David O'Keefe
 * info@lampadacrm.com.br
 *
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.;
 * All Rights Reserved.
 ********************************************************************************/$mod_strings=array(
  'LBL_RE' => 'Trả lời:',
  'ERR_BAD_LOGIN_PASSWORD' => 'Tên tài khoản hoặc Mật khẩu không đúng',
  'ERR_BODY_TOO_LONG' => 'Nội dung Email quá dài. Đã cắt bớt.',
  'ERR_INI_ZLIB' => 'Không thể tạm ngắt trình nén Zlib. "Kiểm tra thiết lập" có thể thất bại.',
  'ERR_MAILBOX_FAIL' => 'Không thể lấy về tài khoản Email nào',
  'ERR_NO_IMAP' => 'Không tìm thấy thư viện IMAP. Vui lòng sửa vấn đề này trước khi tiếp tục với Email nội bộ',
  'ERR_NO_OPTS_SAVED' => 'Không tìm thấy thiết lập tốt cho tài khoản Email nội bộ. Vui lòng xem lại các thiết lập',
  'ERR_TEST_MAILBOX' => 'Vui lòng kiểm tra các thiết lập và thử lại',
  'LBL_APPLY_OPTIMUMS' => 'Áp dụng Thiết lập tốt nhất',
  'LBL_ASSIGN_TO_USER' => 'Giao cho',
  'LBL_AUTOREPLY_OPTIONS' => 'Tùy chọn trả lời tự động',
  'LBL_AUTOREPLY' => 'Mẫu trả lời tự động',
  'LBL_AUTOREPLY_HELP' => 'Chọn 1 thông điệp trả lời tự động cho người gửi Email rằng phản hồi của họ đã được nhận',
  'LBL_BASIC' => 'Thiết lập cơ bản',
  'LBL_CASE_MACRO' => 'Macro vụ việc',
  'LBL_CASE_MACRO_DESC' => 'Chọn macro sẽ được chạy để liên kết các Email nhập vào mỗi Tình huống',
  'LBL_CASE_MACRO_DESC2' => 'Gán giá trị bất kỳ, nhưng nhớ giữa lại <b>"%1"</b>.',
  'LBL_CERT_DESC' => 'Bỏ qua kiểm tra chứng thực bảo mật - không dùng nếu tự ký',
  'LBL_CERT' => 'Xác thực Chứng thực',
  'LBL_CLOSE_POPUP' => 'Đóng cửa sổ',
  'LBL_CREATE_NEW_GROUP' => '--Tạo nhóm khi lưu--',
  'LBL_CREATE_TEMPLATE' => 'Tạo',
  'LBL_SUBSCRIBE_FOLDERS' => 'Thư mục Đăng ký',
  'LBL_DEFAULT_FROM_ADDR' => 'Mặc định:',
  'LBL_DEFAULT_FROM_NAME' => 'Mặc định:',
  'LBL_DELETE_SEEN' => 'Xóa các Email đã đọc sau khi nhập',
  'LBL_EDIT_TEMPLATE' => 'Sửa',
  'LBL_EMAIL_OPTIONS' => 'Tùy chọn Quản lý Email',
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'Tùy chọn quản lý Email bị trả về',
  'LBL_FILTER_DOMAIN_DESC' => 'Không trả lời tự động tên miền này',
  'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Gán tài khoản Email cho 1 nhóm sẽ giúp tự động nhập Email vào',
  'LBL_POSSIBLE_ACTION_DESC' => 'Tùy chọn Tạo Tình huống yêu cầu bạn phải chọn ít nhất một Nhóm Thư mục',
  'LBL_FILTER_DOMAIN' => 'Không trả lời tự động domain',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Tìm kết nối tốt nhất.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Tìm thiết lập tốt nhất',
  'LBL_FIND_SSL_WARN' => '<br> Có thể tốn nhiều thời gian để kiểm tra SSL. Vui lòng chờ đợi.<br>',
  'LBL_FORCE_DESC' => 'Vài máy chủ IMAP/POP3 yêu cầu  đặc biệt. Chọn để bỏ qua các rào cản này khi kết nối',
  'LBL_FORCE' => 'Bỏ qua các rào cản',
  'LBL_FOUND_MAILBOXES' => 'Tìm thấy thư mục có thể dùng.<br>Nhấn để chọn:',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Tìm thấy thiết lập tốt nhất.  Hãy nhấn vào nút dưới đây để áp dụng cho tài khoản Email của bạn',
  'LBL_FROM_ADDR' => 'Địa chỉ "Gởi"',
  'LBL_FROM_ADDR_DESC' => 'Các địa chỉ Email xuất hiện ở đây có thể không xuất hiện trong phần "From" của địa chỉ Email gởi vì những áp đặt từ nhà cung cấp dịch vụ Email. Trong trường hợp này, địa chỉ Email được quy định trong phần máy chủ email gửi đi sẽ được sử dụng.',
  'LBL_FROM_NAME_ADDR' => 'Tên/Email gởi đi',
  'LBL_FROM_NAME' => 'Tên gởi đi',
  'LBL_GROUP_QUEUE' => 'Gán cho nhóm',
  'LBL_HOME' => 'Trang chủ',
  'LBL_LIST_MAILBOX_TYPE' => 'Dùng Tài khoản Email',
  'LBL_LIST_NAME' => 'Tên:',
  'LBL_LIST_GLOBAL_PERSONAL' => 'Nhóm/Cá nhân',
  'LBL_LIST_SERVER_URL' => 'Máy chủ Email:',
  'LBL_LIST_STATUS' => 'Trạng thái:',
  'LBL_LOGIN' => 'Người dùng',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_SSL_DESC' => 'Dùng SSL khi  kết nối. Nếu nó không hoạt động, kiểm tra cài đặt PHP để chác rằng có thiết lập "--with-imap-ssl".',
  'LBL_MAILBOX_SSL' => 'Dùng SSL',
  'LBL_MAILBOX_TYPE' => 'Các điều khiển',
  'LBL_DISTRIBUTION_METHOD' => 'Phương thức phân phối',
  'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Tạo  mẫuTình huống trả lời',
  'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => '',
  'LBL_MAILBOX' => 'Thư mục được Theo dõi',
  'LBL_TRASH_FOLDER' => 'Thư mục Rác',
  'LBL_GET_TRASH_FOLDER' => 'Lấy thư mục Rác',
  'LBL_SENT_FOLDER' => 'Thư mục Đã gởi',
  'LBL_GET_SENT_FOLDER' => 'Lấy thư mục Đã gởi',
  'LBL_SELECT' => 'Chọn',
  'LBL_MARK_READ_DESC' => 'Đánh dấu tin đã đọc trên máy chủ Email, không xóa nó',
  'LBL_MARK_READ_NO' => 'Xóa Email đánh dấu sau khi nhập',
  'LBL_MARK_READ_YES' => 'Để lại Email trên máy chủ sau khi nhập',
  'LBL_MARK_READ' => 'Để lại tin trên máy chủ',
  'LBL_MAX_AUTO_REPLIES' => 'Số lần trả lời tự động',
  'LBL_MAX_AUTO_REPLIES_DESC' => 'Gán số lần trả lời tự động tối đa tới 1 địa chỉ Email trong khoảng thời gian 24 giờ',
  'LBL_PERSONAL_MODULE_NAME' => 'Tài khoản Email cá nhân',
  'LBL_CREATE_CASE' => 'Tạo vụ việc từ Email',
  'LBL_CREATE_CASE_HELP' => 'Chọn để tự động tạo 1 vụ việc trong hệ thống từ Email trả về',
  'LBL_MODULE_NAME' => 'Thiết lập cho Email trả về',
  'LBL_BOUNCE_MODULE_NAME' => 'Quản lý Email trả về',
  'LBL_MODULE_TITLE' => 'Email trả về',
  'LBL_NAME' => 'Tên',
  'LBL_NONE' => 'Không',
  'LBL_NO_OPTIMUMS' => 'Không tìm thấy các thiết lập tốt nhất. Vui lòng kiểm tra thiết lập và thử lại',
  'LBL_ONLY_SINCE_DESC' => 'Khi dùng POP3, PHP không thể lọc các tin mới/chưa đọc. Bật nó để yêu cầu kiểm tra các tin mới so với lần lấy về trước. Nó giúp nâng hiệu suất nếu máy chủ Email của bạn không hỗ trợ IMAP.',
  'LBL_ONLY_SINCE_NO' => 'Không. Kiểm tra lại toàn bộ Email trên máy chủ',
  'LBL_ONLY_SINCE_YES' => 'Đồng ý',
  'LBL_ONLY_SINCE' => 'Chỉ nhập từ lần kiểm tra trước:',
  'LBL_OUTBOUND_SERVER' => 'Máy chủ Email gửi đi',
  'LBL_PASSWORD_CHECK' => 'Kiểm tra mật khẩu',
  'LBL_PASSWORD' => 'Mật khẩu',
  'LBL_POP3_SUCCESS' => 'Kiểm tra kết nối POP3 thành công',
  'LBL_POPUP_FAILURE' => 'Thất bại khi kết nối. Lỗi trả về là:',
  'LBL_POPUP_SUCCESS' => 'Kết nối thành công. Các thiết lập của bạn là đúng',
  'LBL_POPUP_TITLE' => 'Kiểm tra thiết lập',
  'LBL_GETTING_FOLDERS_LIST' => 'Lấy danh sách thư mục',
  'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Chọn thư mục Đã đăng ký',
  'LBL_SELECT_TRASH_FOLDERS' => 'Chọn thư mục Rác',
  'LBL_SELECT_SENT_FOLDERS' => 'Chọn thư mục Đã gởi',
  'LBL_DELETED_FOLDERS_LIST' => 'Thư mục %s không tồn tại hoặc đã bị xóa khỏi máy chủ',
  'LBL_PORT' => 'Cổng của máy chủ Email',
  'LBL_QUEUE' => 'Mail Account Queue',
  'LBL_REPLY_NAME_ADDR' => 'Tên/Email Trả lời',
  'LBL_REPLY_TO_NAME' => '"Trả lời" Tên',
  'LBL_REPLY_TO_ADDR' => '"Trả lời" Địa chỉ',
  'LBL_SAME_AS_ABOVE' => 'Sử dụng từ Tên/Địa chỉ',
  'LBL_SAVE_RAW' => 'Lưu nguồn thô',
  'LBL_SAVE_RAW_DESC_1' => 'Chọn "Đồng ý" nếu bạn muốn giữ lại nguồn thô cho mỗi Email được nhập',
  'LBL_SAVE_RAW_DESC_2' => 'Các file đính kèm quá lớn có thể gây lỗi cơ sở dữ liệu được thiết lập chưa đúng',
  'LBL_SERVER_OPTIONS' => 'Các thiết lập nâng cao',
  'LBL_SERVER_TYPE' => 'Giao thức máy chủ Email',
  'LBL_SERVER_URL' => 'Địa chỉ máy chủ Email',
  'LBL_SSL_DESC' => 'Nếu máy chủ Email của bạn hỗ trợ kết nối Secure Socket, hãy bật nó để dùng SSL khi nhập email',
  'LBL_ASSIGN_TO_TEAM_DESC' => 'Nhóm được chọn có thể truy cập vào tài khoản Email. Nếu Nhóm thư mục được chọn, nhóm gán cho Nhóm thư mục cũng sẽ được truy cập',
  'LBL_SSL' => 'Sử dụng SSL',
  'LBL_STATUS' => 'Trạng thái',
  'LBL_SYSTEM_DEFAULT' => 'Thiết lập mặc định',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Kiểm tra [Alt+T]',
  'LBL_TEST_SETTINGS' => 'Kiểm tra thiết lập',
  'LBL_TEST_SUCCESSFUL' => 'Kết nối thành công.',
  'LBL_TEST_WAIT_MESSAGE' => 'Vui lòng đợi trong giây lát...',
  'LBL_TLS_DESC' => 'Sử dụngTransport Layer Security khi kết nối tới máy chủ Email - chỉ dùng khi máy chủ Email của bạn hỗ trợ giao thức này',
  'LBL_TLS' => 'Dùng TLS',
  'LBL_WARN_IMAP_TITLE' => 'Email nội bộ bị ngắt',
  'LBL_WARN_IMAP' => 'Cảnh báo:',
  'LBL_WARN_NO_IMAP' => 'Email nội bộ <b>không thể</b> hoạt động nếu thiếu thư viện IMAP c-client trong PHP. Liên hệ với nhà quản trị để giải quyết vấn đề này.',
  'LNK_CREATE_GROUP' => 'Tạo nhóm mới',
  'LNK_LIST_CREATE_NEW_GROUP' => 'Nhóm tài khoản Mail mới',
  'LNK_LIST_CREATE_NEW_BOUNCE' => 'Tạo mới tài khoản xử lý Email trả về',
  'LNK_LIST_MAILBOXES' => 'Tòan bộ tài khoản Email',
  'LNK_LIST_QUEUES' => 'Toàn bộ hằng đợi',
  'LNK_LIST_SCHEDULER' => 'Lập lịch',
  'LNK_LIST_TEST_IMPORT' => 'Kiểm tra nhập liệu Email',
  'LNK_NEW_QUEUES' => 'Tạo hằng đợi mới',
  'LNK_SEED_QUEUES' => 'Seed Queues From Teams',
  'LBL_IS_PERSONAL' => 'Tài khoản Email cá nhân',
  'LBL_GROUPFOLDER_ID' => 'Id nhóm thư mục',
  'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Gán cho nhóm thư mục',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Cho phép người dung gửi Email sử dụng "Từ" Tên và Địa chỉ giống địa chỉ trả lời',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Khi chọn tùy chọn này Tên người gửi và địa chỉ gửi liên quan với nhóm tài khoản Email sẽ xuất hiện như 1 tùy chọn cho Trường From khi soạn Email cho người dùng truy cập đến nhóm tài khoản Email',
  'LBL_STATUS_ACTIVE' => 'Hoạt động',
  'LBL_STATUS_INACTIVE' => 'Ngắt',
  'LBL_IS_GROUP' => 'nhóm',
  'LBL_ENABLE_AUTO_IMPORT' => 'Tự động nhập Email',
  'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Cảnh báo: Bạn đang chỉnh sửa ',
  'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Cảnh báo: Tự động nhập phải kích hoạt khi tự động tạo một vụ việc.',
  'LBL_EDIT_LAYOUT' => 'Chỉnh sửa giao diện',
);

?>

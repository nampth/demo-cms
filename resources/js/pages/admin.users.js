require('datatables');

var UserManagement = function () {
    var initTableUser = function () {
        $('#m_user_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": baseUrl + "/admin/user/listing"
        });
    }
    return {
        init: function () {
            initTableUser();
        }
    }
}


$(document).ready(function () {
    UserManagement().init();
})
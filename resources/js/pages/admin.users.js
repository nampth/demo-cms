require('datatables');

// import Vue from 'vue';
// window.Vue = require('vue');

import {baseUrl, SUCCESS_CODE, USER_ACTIVE_STATUS} from "../app.constants";

Vue.component('user-modal', require('../components/backend/UserModal.vue'));
var app = new Vue({
    el: '#app',
    data: function () {
        return {
            roles: [],
            userTable: null,
            editingUser: {
                username: null,
                password: null,
                re_password: null
            },
            isEditing: false,
            selectedRole: null
        }
    },
    mounted() {
        // alert(this.test);
        this.initTableUser();
        this.initListRoles();
        this.handleTableActionClick();
    },
    methods: {
        resetUser() {
            this.editingUser = {
                username: null,
                password: null,
                re_password: null
            };
            this.isEditing = false;
            this.selectedRole = null;
        },
        showModal() {
            $('#user-modal').modal('show');
        },
        setDefaultRole() {
            this.selectedRole = this.roles ? this.roles[0].id : null;
        },
        initTableUser: function () {
            var vm = this;
            if (vm.userTable != null) {
                vm.userTable.ajax.reload();
            } else {
                vm.userTable = $('#m_user_table').DataTable(
                    {
                        "dom": "<'row'<'col-sm-6'l><'col-sm-12 col-md-6'f >><'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-7'p>>",
                        "processing": true,
                        "serverSide": true,
                        "ajax": {
                            "url": baseUrl + "/admin/user/listing",
                            "type": "POST"
                        },
                        "filterInput": "form-control",
                        "lengthSelect": "form-control",
                        "language": {
                            "lengthMenu": "Hiển thị _MENU_ bản ghi",
                            "zeroRecords": "Không có bản ghi nào",
                            "info": "Hiển thị _START_ đến _END_ của _TOTAL_ bản ghi",
                            "infoEmpty": "Không có bản ghi nào thỏa mãn",
                            "infoFiltered": "(lọc từ tổng số _MAX_ bản ghi)",
                            "processing": "Đang tải dữ liệu...",
                            "search": "Tìm kiếm:",
                            "paginate": {
                                "first": "Đầu",
                                "last": "Cuối",
                                "next": "Tiếp",
                                "previous": "Trước"
                            },
                        },
                        "columns": [
                            {
                                data: null,
                                className: 'text-center tb-no-sort',
                                orderable: true,
                            },
                            {
                                data: "username",
                                orderable: true,
                            },
                            {
                                data: null,
                                orderable: true,
                                render: function (data, type, row) {
                                    return data['role']['0'] ? data['role']['0']['description'] : '';
                                }
                            },
                            {
                                data: "status",
                                orderable: false,
                                className: 'text-center',
                                render: function (data, type, row) {
                                    var html = '';
                                    html += '<label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">';
                                    html += Number.parseInt(data) == 0 ? '<input type="checkbox" value="" name="status" class="m-checkable change-user-status" checked="checked">'
                                        : '<input type="checkbox" value="" name="status" class="m-checkable change-user-status">';
                                    html += '<span></span>';
                                    html += '</label>';
                                    return html;
                                }
                            },
                            {
                                data: "created_at",
                                orderable: true,
                            },
                            {
                                data: "updated_at",
                                orderable: true,
                            },
                            {
                                data: null,
                                orderable: false,
                                className: 'text-center',
                                render: function (data, type, row) {
                                    return '<a href="javascript:;" class="table-action-icon text-primary edit-user" data-id="' + row['id'] + '"><i class="fa fa-pencil-alt"></i></a>'
                                        + '<a href="javascript:;" class="table-action-icon text-danger delete-user" data-id="' + row['id'] + '"><i class="fa fa-trash-alt"></i></a>';
                                }
                            },
                        ]
                    }
                );
            }
            vm.userTable.on('draw.dt search.dt order.dt', function () {
                vm.userTable.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
                $('#m_user_table_filter input').addClass('form-control m-input m-input--square');
            });
            $('select').select2({
                width: '60px',
                minimumResultsForSearch: -1
            });
        },
        initListRoles() {
            var vm = this;
            $.ajax({
                "url": baseUrl + "/admin/role/listingAll",
                "method": "POST",
                "success": function (response) {
                    if (response && response.data) {
                        vm.roles = response.data;
                    } else {
                        vm.roles = [];
                    }
                },
                "error": function () {
                    vm.roles = [];
                }
            })
        },
        handleTableActionClick() {
            var vm = this;
            $(document).on('click', '.delete-user', function () {
                var userId = $(this).attr('data-id');
                var rowData = vm.userTable.row($(this).parents('tr')).data();

                bootbox.confirm('Bạn có chắc chắn muốn xóa tài khoản <span class="text-danger">' + rowData.username + '</span>', function (result) {
                    if (result) {
                        $.ajax({
                            "url": baseUrl + "/admin/user/" + userId + "/delete",
                            "method": "POST",
                            "success": function (response) {
                                if (response && response.code == SUCCESS_CODE) {
                                    toastr.success('Xóa người dùng thành công.');
                                    vm.userTable.ajax.reload();
                                } else {
                                    toastr.error('Có lỗi xảy ra, vui lòng thử lại sau.');
                                }
                            },
                            "error": function () {
                                toastr.error('Có lỗi xảy ra, vui lòng thử lại sau.');
                            }
                        })
                    }
                });
            })


            $(document).on('change', '.change-user-status', function () {
                var rowData = vm.userTable.row($(this).parents('tr')).data();
                var msg = rowData.status == USER_ACTIVE_STATUS ? 'Bạn có chắc chắn muốn khóa tài khoản <span class="text-danger">' + rowData.username + '</span>'
                    : 'Bạn có chắc chắn muốn kích hoạt lại tài khoản <span class="text-danger">' + rowData.username + '</span>'
                bootbox.confirm(msg, function (result) {
                    if (result) {
                        $.ajax({
                            "url": baseUrl + "/admin/user/" + rowData.id + "/status",
                            "method": "POST",
                            "success": function (response) {
                                if (response && response.code == SUCCESS_CODE) {
                                    toastr.success('Cập nhật người dùng thành công.');
                                    vm.userTable.ajax.reload();
                                } else {
                                    toastr.error('Có lỗi xảy ra, vui lòng thử lại sau.');
                                }
                            },
                            "error": function () {
                                toastr.error('Có lỗi xảy ra, vui lòng thử lại sau.');
                            }
                        })
                    } else {
                        vm.userTable.ajax.reload();
                    }
                });
            })

            $(document).on('click', '.edit-user', function () {
                var rowData = vm.userTable.row($(this).parents('tr')).data();
                vm.editingUser = rowData;
                vm.selectedRole = rowData.role['0']['id'];
                vm.isEditing = true;
                $('#user-modal').modal('show');
            })
        }
    },
});
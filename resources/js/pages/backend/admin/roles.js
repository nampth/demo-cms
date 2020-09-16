require('datatables');

import {baseUrl, SUCCESS_CODE, USER_ACTIVE_STATUS} from "../../../app.constants";

Vue.component('role-modal', require('../../../components/backend/RoleModal.vue'));
var app = new Vue({
    el: '#app',
    data: function () {
        return {
            permissions: [],
            roleTable: null,
            isEditing: false,
            editingRole: {
                name: null,
                description: null,
                permissions: []
            }
        }
    },
    mounted() {
        this.initTableRole();
        this.initListPermissions();
        this.handleTableActionClick();
    },
    methods: {
        showModal() {
            this.initListPermissions();
            $('#role-modal').modal('show');
        },
        initTableRole: function () {
            var vm = this;
            if (vm.roleTable != null) {
                vm.roleTable.ajax.reload();
            } else {
                vm.roleTable = $('#m_role_table').DataTable(
                    {
                        "dom": "<'row'<'col-sm-6'l><'col-sm-12 col-md-6'f >><'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-7'p>>",
                        "processing": true,
                        "serverSide": true,
                        "ajax": {
                            "url": baseUrl + "/admin/role/listing",
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
                            "processing": "<div class='m-loader  m-loader--primary m-loader--lg'></div><br/>Đang tải dữ liệu...",
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
                                data: "name",
                                orderable: true,
                            },
                            {
                                data: 'description',
                                orderable: false,
                            },
                            {
                                data: 'default_redirect',
                                orderable: false,
                            },
                            {
                                data: null,
                                orderable: false,
                                className: 'text-center',
                                render: function (data, type, row) {
                                    return '<a href="javascript:;" class="table-action-icon text-primary edit-role" data-id="' + row['id'] + '"><i class="fa fa-pencil-alt"></i></a>'
                                        + '<a href="javascript:;" class="table-action-icon text-danger delete-role" data-id="' + row['id'] + '"><i class="fa fa-trash-alt"></i></a>';
                                }
                            },
                        ]
                    }
                );
            }
            vm.roleTable.on('draw.dt search.dt order.dt', function () {
                var info = vm.roleTable.page.info();
                vm.roleTable.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                    cell.innerHTML = info.start + i + 1;
                });
                $('#m_role_table_filter input').addClass('form-control m-input m-input--square');
            });
            $('select').select2({
                width: '60px',
                minimumResultsForSearch: -1
            });
        },
        initListPermissions() {
            var vm = this;
            $.ajax({
                "url": baseUrl + "/admin/permission/listingAll",
                "method": "POST",
                "success": function (response) {
                    if (response && response.data) {
                        vm.permissions = response.data;
                    } else {
                        vm.permissions = [];
                    }
                },
                "error": function () {
                    vm.permissions = [];
                }
            })
        },
        resetModal() {
            this.editingRole = {
                name: null,
                description: null,
                redirect: null,
                permissions: null
            };
            this.isEditing = false;
        },
        handleTableActionClick() {
            var vm = this;
            $(document).on('click', '.delete-role', function () {
                var userId = $(this).attr('data-id');
                var rowData = vm.roleTable.row($(this).parents('tr')).data();

                bootbox.confirm('Bạn có chắc chắn muốn xóa nhóm tài khoản <span class="text-danger">' + rowData.name + '</span>', function (result) {
                    if (result) {
                        $.ajax({
                            "url": baseUrl + "/admin/role/" + userId + "/delete",
                            "method": "POST",
                            "success": function (response) {
                                if (response && response.code == SUCCESS_CODE) {
                                    toastr.success('Xóa nhóm người dùng thành công.');
                                    vm.roleTable.ajax.reload();
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

            $(document).on('click', '.edit-role', function () {
                var rowData = vm.roleTable.row($(this).parents('tr')).data();
                vm.editingRole = rowData;
                vm.isEditing = true;
                $('#role-modal').modal('show');
            })
        }
    },
});
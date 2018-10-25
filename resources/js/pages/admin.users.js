import {baseUrl} from "../app.constants";

// Vue.component('user-modal', "../components/backend/UserModal.vue");

require('datatables');

var app = new Vue({
    data: {
        roles: [],
        userTable: null,
        baseUrl: baseUrl
    },
    components: {
        'user-modal': UserModal
    },
    mounted() {
        this.initTableUser();
        this.initListRoles();
    },
    methods: {
        initTableUser: function () {
            var vm = this;
            if (vm.userTable != null) {
                vm.userTable.ajax.reload();
            } else {
                vm.userTable = $('#m_user_table').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-7'p>>",
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url": vm.baseUrl + "/admin/user/listing",
                        "type": "POST"
                    },
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
                                return data['role']['0']['description'];
                            }
                        },
                        {
                            data: "status",
                            orderable: false,
                            className: 'text-center',
                            render: function (data, type, row) {
                                return Number.parseInt(data) == 0 ? '<input type="checkbox" class="change-user-status" name="status" checked="checked">' : '<input class="change-user-status" type="checkbox" name="status">';
                            }
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
                });
            }
            vm.userTable.on('draw.dt search.dt order.dt', function () {
                vm.userTable.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            });
        },
        initListRoles: function () {
            this.roles = [];
        }
    }
});
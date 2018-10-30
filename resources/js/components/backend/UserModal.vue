<template>
    <div class="modal fade" :id="id" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" v-html="editing ? 'Sửa người dùng' : 'Thêm người dùng'"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label">Tên người dùng:</label>
                            <input type="text" class="form-control" id="username" v-if="!editing">
                            <input type="text" class="form-control" id="username" readonly="readonly" v-else>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Mật khẩu:</label>
                            <input type="text" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nhập lại mật khẩu:</label>
                            <input type="text" class="form-control" id="re_password">
                        </div>
                        <div class="form-group" v-if="roles && roles.length">
                            <label class="form-control-label">Nhóm người dùng:</label>
                            <select>
                                <option v-for="role in roles" :value="role.id" v-html="role.name"></option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" v-html="editing ? 'Cập nhật' : 'Thêm'"></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        // name: 'user-modal',
        props: {
            id: {
                type: String,
                default: ''
            },
            editing: {
                type: Boolean,
                default: false
            },
            roles: {
                type: Array,
                default: () => []
            }
        },
        data: {},
        mounted() {

        },
        watch: {
            roles: function (val) {
                console.log(val);
            }
        }
    }
</script>

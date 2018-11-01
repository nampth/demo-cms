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
                            <input type="text" class="form-control" id="username" v-if="!editing"
                                   v-validate="'required|min:6|max:32'" name="username"
                                   data-vv-as="Tên đăng nhập"
                                   v-model="user.username">
                            <input type="text" class="form-control" id="username" readonly="readonly" name="username"
                                   v-model="user.username" v-else data-vv-as="Tên đăng nhập">
                            <span v-show="!editing && errors.has('username')" class="text-danger">{{ errors.first('username') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Mật khẩu:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   v-validate="'required|min:8|max:100'" v-model="user.password">
                            <span v-show="!editing && errors.has('password')" class="text-danger">{{ errors.first('password') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nhập lại mật khẩu:</label>
                            <input type="password" class="form-control" id="re_password" name="re_password"
                                   v-validate="'required|min:8|max:100|confirmed:password'" v-model="user.re_password">
                            <span v-show="!editing && errors.has('re_password')" class="text-danger">{{ errors.first('re_password') }}</span>
                        </div>
                        <div class="form-group" v-if="roles && roles.length">
                            <label class="form-control-label">Nhóm người dùng:</label>
                            <select v-model="selectedRole">
                                <option v-for="role in roles" :value="role.id" v-html="role.name"></option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" v-html="editing ? 'Cập nhật' : 'Thêm'"
                            @click="submitForm()"></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Vue from 'vue';
    import {baseUrl} from "../../app.constants";
    import VeeValidate, {Validator} from 'vee-validate';

    Validator.localize({
        en: {
            custom: {
                username: {
                    required: 'Vui lòng nhập đủ thông tin',
                    min: 'Tên đăng nhập tối thiểu 6 ký tự',
                    max: 'Tên đăng nhập tối đa 32 ký tự',
                    regex: 'Tên đăng nhập chỉ gồm ký tự số, chữ thường, chữ hoa và @ hoặc _',
                },
                password: {
                    required: 'Vui lòng nhập đủ thông tin',
                    min: 'Mật khẩu tối thiểu 8 ký tự',
                    max: 'Mật khẩu tối đa 100 ký tự',
                },
                re_password: {
                    required: 'Vui lòng nhập đủ thông tin',
                    min: 'Mật khẩu tối thiểu 8 ký tự',
                    max: 'Mật khẩu tối đa 100 ký tự',
                    confirmed: 'Mật khẩu không trùng khớp',
                },
            }
        }
    })

    Vue.use(VeeValidate);

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
            },
            user: {
                type: Object,
                default: {}
            }
        },
        data: {
            selectedRole: null
        },
        mounted() {

        },
        methods: {
            submitForm() {
                var vm = this;
                vm.$validator.validateAll().then(res => {
                    if (res) {
                        var url = baseUrl + '/users/add';
                        if (vm.editing) {
                            url = baseUrl + '/users/edit';
                        }
                        var data = vm.user;
                        data.role = vm.selectedRole;
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: data, // serializes the form's elements.
                            success: function (data) {
                                if (data && data.status) {
                                    toastr.success('Thêm người dùng thành công')
                                } else {
                                    toastr.error("Có lỗi xảy ra, vui lòng thử lại sau.");
                                }
                                $('#' + vm.id).modal('hide');

                            },
                            error: function (error) {
                                if (error && error.responseJSON) {
                                    error = error.responseJSON;
                                    $.each(error.errors, function (key, value) {
                                        toastr.error(decodeURI(value));
                                    });
                                } else {
                                    toastr.error("Có lỗi xảy ra, vui lòng thử lại sau.");
                                }
                                $('#' + vm.id).modal('hide');
                            }
                        });
                    } else {
                        toastr.error("Vui lòng nhập đầy đủ thông tin.");
                    }
                })

            }
        },
        watch: {
            roles: function (val) {
                if (val && val.length) {
                    console.log(val);
                    this.selectedRole = val[0];
                }
            }
        }
    }
</script>

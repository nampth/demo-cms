<template>
    <div class="modal fade" :id="id" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true"
         ref="userModal">
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
                        <div class="form-group" v-if="editing">
                            <label class="form-control-label">Giữ nguyên mật khẩu</label>
                            <label class="m--margin-bottom-0 m--margin-left-5 m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                <input type="checkbox" value="" name="status" class="m-checkable" checked="checked"
                                       @change="keepPassword = !keepPassword">
                                <span></span>
                            </label>
                        </div>
                        <div class="form-group" v-if="!editing || !keepPassword">
                            <label class="form-control-label">Mật khẩu:</label>
                            <input type="password" class="form-control" id="password" name="password" ref="password"
                                   data-vv-as="Mật khẩu" v-validate="'required|min:8|max:100'" v-model="user.password">
                            <span v-show="errors.has('password')"
                                  class="text-danger">{{ errors.first('password') }}</span>
                        </div>
                        <div class="form-group" v-if="!editing || !keepPassword">
                            <label class="form-control-label">Nhập lại mật khẩu:</label>
                            <input type="password" class="form-control" id="re_password" name="re_password"
                                   data-vv-as="Nhập lại mật khẩu"
                                   v-validate="'required|min:8|max:100|confirmed:password'" v-model="user.re_password">
                            <span v-show="errors.has('re_password')" class="text-danger">{{ errors.first('re_password') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tên người dùng:</label>
                            <input type="text" class="form-control" id="fullname"
                                   v-validate="'min:6|max:100'" name="fullname"
                                   data-vv-as="Tên đầy đủ"
                                   v-model="user.fullname">
                            <span v-show="!editing && errors.has('fullname')" class="text-danger">{{ errors.first('fullname') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email:</label>
                            <input type="text" class="form-control" id="email"
                                   v-validate="'email:true|min:6|max:100'" name="email"
                                   data-vv-as="Email"
                                   v-model="user.email">
                            <span v-show="!editing && errors.has('email')" class="text-danger">{{ errors.first('email') }}</span>
                        </div>
                        <div class="form-group m--margin-bottom-0" v-if="roles && roles.length">
                            <label class="form-control-label">Nhóm người dùng:</label>
                            <select name="role" v-validate="'required'" ref="slRole"
                                    id="slRole">
                                <option v-for="role in roles" :value="role.id" v-html="role.description"></option>
                            </select>
                        </div>
                        <span v-if="submiting && !selectedRole"
                              class="text-danger">Vui lòng chọn nhóm người dùng</span>
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
    import {baseUrl, SUCCESS_CODE} from "../../app.constants";
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
                fullname: {
                    min: 'Tên thiểu 6 ký tự',
                    max: 'Tên tối đa 100 ký tự',
                },
                email: {
                    email: 'Định dạng email không phù hợp',
                    min: 'Mật khẩu tối thiểu 6 ký tự',
                    max: 'Mật khẩu tối đa 100 ký tự',
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
            },

        },
        data: function () {
            return {
                submiting: false,
                keepPassword: true,
                selectedRole: null
            }
        },
        mounted() {
            this.handleHideModal();
            this.handleShowModal();
        },
        methods: {
            submitForm() {
                var vm = this;
                vm.submiting = true;

                vm.$validator.validateAll().then(res => {
                    if (res && vm.selectedRole) {
                        vm.submiting = false;
                        var url = baseUrl + '/admin/user/add';
                        if (vm.editing) {
                            url = baseUrl + '/admin/user/update';
                        }
                        var data = vm.user;
                        data.role = vm.selectedRole;
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: data, // serializes the form's elements.
                            success: function (data) {
                                if (data && data.code == SUCCESS_CODE) {
                                    toastr.success(vm.editing ? 'Cập nhật người dùng thành công' : 'Thêm người dùng thành công');
                                    vm.$emit('reload');
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

            },
            handleHideModal() {
                var vm = this;
                $(vm.$refs.userModal).on('hidden.bs.modal', function () {
                    vm.submiting = false;
                    vm.$emit('hide');
                    setTimeout(function () {
                        vm.errors.clear();
                    }, 100);

                })
            },
            handleShowModal() {
                var vm = this;
                $(vm.$refs.userModal).on('show.bs.modal', function () {
                    if ($('#slRole').select2()) {
                        $('#slRole').select2('destroy');
                    }
                    $('#slRole').select2({
                        width: '100%',
                        minimumResultsForSearch: -1
                    }).change(function () {
                        vm.selectedRole = $(this).val();
                    })
                })

            }
        },
        watch: {
            user: function (obj) {
                if (obj && obj.role && obj.role[0]) {
                    $('#slRole').val(obj.role[0].id).trigger('change');
                }
            }
        }
    }
</script>

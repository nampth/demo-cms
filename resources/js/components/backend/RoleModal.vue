<template>
    <div class="modal fade" :id="id" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true"
         ref="roleModal">
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
                            <label class="form-control-label">Tên nhóm người dùng:</label>
                            <input type="text" class="form-control" id="name"
                                   v-validate="'required|min:4|max:32'" name="name"
                                   data-vv-as="Tên nhóm người dùng"
                                   v-model="role.name">
                            <span v-show="!editing && errors.has('name')"
                                  class="text-danger">{{ errors.first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Mô tả:</label>
                            <input type="text" class="form-control" id="description" name="description"
                                   ref="description"
                                   data-vv-as="Mô tả" v-validate="'max:256'" v-model="role.description">
                            <span v-show="errors.has('description')"
                                  class="text-danger">{{ errors.first('description') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Trang mặc định:</label>
                            <input type="text" class="form-control" id="redirect" name="redirect"
                                   ref="redirect"
                                   data-vv-as="Trang mặc định" v-validate="'required|max:256'"
                                   v-model="role.default_redirect">
                            <span v-show="errors.has('redirect')"
                                  class="text-danger">{{ errors.first('redirect') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Quyền người dùng:</label>
                            <div class="row m--padding-left-15 m--padding-right-15">
                                <label class="m-checkbox col-6" v-for="(value,key) in permissions">
                                    <input type="checkbox" name="permissions" :value="value.id">&nbsp; &nbsp;{{
                                    value.description }}
                                    <span></span>
                                    <p class="m--padding-left-10">
                                        <small>{{ value.name}}</small>
                                    </p>
                                </label>

                            </div>
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
    import {baseUrl, SUCCESS_CODE} from "../../app.constants";
    import VeeValidate, {Validator} from 'vee-validate';

    Validator.localize({
        en: {
            custom: {
                name: {
                    required: 'Vui lòng nhập đủ thông tin',
                    min: 'Tên đăng nhập tối thiểu 4 ký tự',
                    max: 'Tên đăng nhập tối đa 100 ký tự',
                    // regex: 'Tên nhóm người dùng chỉ gồm ký tự thường, ký tự hoa và số',
                },
                description: {
                    max: 'Mật khẩu tối đa 256 ký tự',
                },
                redirect: {
                    required: 'Vui lòng nhập đủ thông tin',
                    max: 'Trang mặc định tối đa 256 ký tự',
                    // regex: 'Tên nhóm người dùng chỉ gồm ký tự thường, ký tự hoa và số',
                },
            }
        }
    })

    Vue.use(VeeValidate);
    export default {
        props: {
            id: {
                type: String,
                default: ''
            },
            editing: {
                type: Boolean,
                default: false
            },
            permissions: {
                type: Array,
                default: () => []
            },
            role: {
                type: Object,
                default: {}
            },
        },
        data: function () {
            return {
                keepPermission: true
            }
        },
        mounted() {
            this.handleHideModal();
            // this.handleShowModal();
        },
        methods: {
            submitForm() {
                var vm = this;
                vm.submiting = true;

                vm.$validator.validateAll().then(res => {
                    if (res) {
                        var url = baseUrl + '/admin/role/add';
                        if (vm.editing) {
                            url = baseUrl + '/admin/role/update';
                        }
                        var checkedVals = $('input[type="checkbox"][name="permissions"]:checked').map(function () {
                            return this.value;
                        }).get();
                        vm.role.permissions = checkedVals;
                        var data = vm.role;
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: data, // serializes the form's elements.
                            success: function (data) {
                                if (data && data.code == SUCCESS_CODE) {
                                    toastr.success(vm.editing ? 'Cập nhật nhóm người dùng thành công' : 'Thêm nhóm người dùng thành công');
                                } else {
                                    toastr.error("Có lỗi xảy ra, vui lòng thử lại sau.");
                                }
                                $('#' + vm.id).modal('hide');
                                vm.$emit('reload');

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
                $(vm.$refs.roleModal).on('hidden.bs.modal', function () {
                    vm.submiting = false;
                    $('input[type="checkbox"][name="permissions"]:checked').removeAttr('checked');
                    $('input[type="checkbox"][name="permissions"]:checked').prop('checked', false);
                    vm.$emit('hide');
                    setTimeout(function () {
                        vm.errors.clear();
                    }, 100);

                })
            },
        },
        watch: {
            role: function (val) {
                if (val && val.permissions) {
                    _.each(val.permissions, function (item) {
                        $('input[type="checkbox"][name="permissions"][value="' + item.id + '"]').prop('checked', true);
                    });
                }
            }
        }
    }
</script>

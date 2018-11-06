<template>
    <div class="modal fade" :id="id" tabindex="-1" permission="dialog" style="display: none;" aria-hidden="true"
         ref="permissionModal">
        <div class="modal-dialog modal-lg" permission="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" v-html="editing ? 'Sửa quyền người dùng' : 'Thêm quyền người dùng'"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label">Tên quyền người dùng:</label>
                            <input type="text" class="form-control" id="name"
                                   v-validate="'required|min:4|max:32'" name="name"
                                   data-vv-as="Tên quyền người dùng"
                                   v-model="permission.name">
                            <span v-show="!editing && errors.has('name')"
                                  class="text-danger">{{ errors.first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Mô tả:</label>
                            <input type="text" class="form-control" id="description" name="description"
                                   ref="description"
                                   data-vv-as="Mô tả" v-validate="'max:256'" v-model="permission.description">
                            <span v-show="errors.has('description')"
                                  class="text-danger">{{ errors.first('description') }}</span>
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
            permission: {
                type: Object,
                default: {}
            },
        },
        data: function () {
            return {

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
                        var url = baseUrl + '/admin/permission/add';
                        if (vm.editing) {
                            url = baseUrl + '/admin/permission/update';
                        }

                        var data = vm.permission;
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: data, // serializes the form's elements.
                            success: function (data) {
                                if (data && data.code == SUCCESS_CODE) {
                                    toastr.success(vm.editing ? 'Cập nhật quyền người dùng thành công' : 'Thêm quyền người dùng thành công');
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
                $(vm.$refs.permissionModal).on('hidden.bs.modal', function () {
                    vm.submiting = false;
                    vm.$emit('hide');
                    setTimeout(function () {
                        vm.errors.clear();
                    }, 100);

                })
            },
        },
        watch: {

        }
    }
</script>

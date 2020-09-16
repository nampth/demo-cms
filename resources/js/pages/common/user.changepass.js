import VeeValidate, {Validator} from 'vee-validate';
import {baseUrl, SUCCESS_CODE} from '../../app.constants';

Validator.localize({
    en: {
        custom: {
            old_pass: {
                required: 'Vui lòng nhập đủ thông tin',
                min: 'Mật khẩu tối thiểu 8 ký tự',
                max: 'Mật khẩu tối đa 100 ký tự',
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

var app = new Vue({
    el: '#app',
    data: function () {
        return {
            user: {
                'old_pass': '',
                'password': '',
                're_password': ''
            }
        }
    },
    mounted() {

    },
    methods: {
        submitForm() {
            var vm = this;
            vm.$validator.validateAll().then(res => {
                if (res) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + '/user/changepass',
                        data: vm.user, // serializes the form's elements.
                        success: function (data) {
                            if (data && data.code == SUCCESS_CODE) {
                                toastr.success('Đổi mật khẩu thành công.');
                            } else {
                                if (data.message) {
                                    toastr.error(data.message);
                                } else {
                                    toastr.error("Có lỗi xảy ra, vui lòng thử lại sau.");
                                }
                            }
                            vm.user = {
                                'old_pass': '',
                                'password': '',
                                're_password': ''
                            }

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
                            vm.user = {
                                'old_pass': '',
                                'password': '',
                                're_password': ''
                            }
                        }
                    });
                } else {
                    toastr.error("Vui lòng nhập đầy đủ thông tin.");
                }
            })

        },
    },
});
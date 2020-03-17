@extends('backend.templates.index')

@section('asset_header')
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="m-portlet m-portlet--full-height  ">
                <div class="m-portlet__body">
                    <div class="m-card-profile">
                        <div class="m-card-profile__title m--hide">
                            Your Profile
                        </div>
                        <div class="m-card-profile__pic">
                            <div class="m-card-profile__pic-wrapper">
                                <img src="{{ asset('assets/app/media/img/users/user4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="m-card-profile__details">
                            <span class="m-card-profile__name">{{ \Illuminate\Support\Facades\Auth::user()->fullname ? \Illuminate\Support\Facades\Auth::user()->fullname :  \Illuminate\Support\Facades\Auth::user()->username }}</span>
                            <a href=""
                               class="m-card-profile__email m-link">{{ \Illuminate\Support\Facades\Auth::user()->email }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"
                            role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="m-tabs__link active" data-toggle="tab" href="javascript:;"
                                   role="tab">
                                    <i class="flaticon-share m--hide"></i>
                                    Đổi mật khẩu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="m_user_profile_tab_1">
                        <form class="m-form m-form--fit m-form--label-align-right">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <div class="col-10 ml-auto">
                                        <h3 class="m-form__section">Thông tin cá nhân</h3>
                                    </div>
                                </div>

                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Tên đầy đủ</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" readonly=""
                                               value="{{ \Illuminate\Support\Facades\Auth::user()->fullname }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Email</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" type="text" readonly
                                               value="{{ \Illuminate\Support\Facades\Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input"
                                           class="col-2 col-form-label">Mật khẩu cũ</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" id="old_pass" name="old_pass" ref="old_pass"
                                               type="password" v-model="user.old_pass"
                                               data-vv-as="Mật khẩu" v-validate="'required|min:8|max:100'" value="">
                                        <span v-show="errors.has('old_pass')" class="text-danger">@{{ errors.first('old_pass') }}</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input"
                                           class="col-2 col-form-label">Mật khẩu mới</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" id="password" name="password" ref="password"
                                               type="password" v-model="user.password"
                                               data-vv-as="Mật khẩu" v-validate="'required|min:8|max:100'" value="">
                                        {{--<span class="m-form__help">Mật khẩu cần có tối thiểu 8 ký tự, tối đa 100 ký tự.</span><br>--}}
                                        <span v-show="errors.has('password')" class="text-danger">@{{ errors.first('password') }}</span>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <label for="example-text-input"
                                           class="col-2 col-form-label">Xác nhận mật khẩu</label>
                                    <div class="col-7">
                                        <input class="form-control m-input" id="re_password" name="re_password"
                                               type="password"
                                               data-vv-as="Nhập lại mật khẩu" ref="re_password"
                                               v-validate="'required|min:8|max:100|confirmed:password'"
                                               v-model="user.re_password" value="">
                                        <span v-show="errors.has('re_password')" class="text-danger">@{{ errors.first('re_password') }}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-7">
                                            <button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom"
                                                    @click="submitForm">
                                                Áp dụng
                                            </button>&nbsp;&nbsp;
                                            <button type="reset"
                                                    class="btn btn-dark m-btn m-btn--air m-btn--custom">Hủy bỏ
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('asset_footer')
    <script src="{{ asset('/js/user.changepass.js') }}" type="text/javascript"></script>
@endsection

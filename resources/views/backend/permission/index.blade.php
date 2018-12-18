@extends('backend.templates.index')

@section('asset_header')
@endsection

@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Quản lý quyền người dùng
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="javascript:;"
                           class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air"
                           @click="showModal">
						<span>
							<i class="la la-plus"></i>
							<span>Thêm quyền người dùng</span>
						</span>
                        </a>
                    </li>
                    <li class="m-portlet__nav-item"></li>
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            @include('backend.permission.partials.table')
        </div>
    </div>
    <permission-modal :id="'permission-modal'" :editing="isEditing" :permission="editingPermission"
                      @hide="resetModal"
                      @reload="initTablePermission"></permission-modal>
@endsection

@section('asset_footer')
    <script src="{{ asset('/js/admin.permissions.js') }}" type="text/javascript"></script>
@endsection

@extends('backend.templates.index')

@section('asset_header')
@endsection

@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Quản lý nhóm người dùng
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
							<span>Thêm nhóm người dùng</span>
						</span>
                        </a>
                    </li>
                    <li class="m-portlet__nav-item"></li>
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            @include('backend.role.partitals.table')
        </div>
    </div>
    <role-modal :id="'role-modal'" :permissions="permissions" :editing="isEditing" :role="editingRole"
                @hide="resetModal"
                @reload="initTableRole"></role-modal>
@endsection

@section('asset_footer')
    <script src="{{ asset('/js/admin.roles.js') }}" type="text/javascript"></script>
@endsection

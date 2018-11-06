<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
            class="la la-close"></i></button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
    <!-- BEGIN: Aside Menu -->
    <div
            id="m_ver_menu"
            class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
            m-menu-vertical="1"
            m-menu-scrollable="1" m-menu-dropdown-timeout="500"
            style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            @if(checkSidebar(ADMIN_DASHBOARD))
                <li class="m-menu__item  {{ setActiveMenu(route('admin.dashboard.index')) }}" aria-haspopup="true">
                    <a href="{{ route('admin.dashboard.index') }}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-line-graph"></i>
                        <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">Dashboard</span>
                        </span>
                    </span>
                    </a>
                </li>
            @endif
            @if(checkSidebar(ADMIN_USER_MANAGEMENT))
                <li class="m-menu__item  {{ setActiveMenu(route('admin.user.index')) }}" aria-haspopup="true">
                    <a href="{{ route('admin.user.index') }}" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-users-1"></i>
                        <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">Quản trị người dùng</span>
                        </span>
                    </span>
                    </a>
                </li>
            @endif
            @if(checkSidebar(ADMIN_ROLE_MANAGEMENT))
                <li class="m-menu__item  {{ setActiveMenu(route('admin.role.index')) }}" aria-haspopup="true">
                    <a href="{{ route('admin.role.index') }}" class="m-menu__link ">
                        <i class="m-menu__link-icon la la-sitemap"></i>
                        <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">Quản trị nhóm người dùng</span>
                        </span>
                    </span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
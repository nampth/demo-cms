<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>

    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="../../../ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico"/>
    @section('asset_header')
</head>

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">


<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    @include('templates.header')
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
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
                    <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a
                                href="index9bfb.html?page=index&amp;demo=default" class="m-menu__link "><i
                                    class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title">  <span
                                        class="m-menu__link-wrap">      <span class="m-menu__link-text">Dashboard</span>      <span
                                            class="m-menu__link-badge"><span
                                                class="m-badge m-badge--danger">2</span></span>  </span></span></a></li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">Components</h4>
                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-layers"></i><span
                                    class="m-menu__link-text">Base</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Base</span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexd68c.html?page=components/base/state&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">State Colors</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4b55.html?page=components/base/typography&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Typography</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index762e.html?page=components/base/stack&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Stack</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index70fa.html?page=components/base/tables&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tables</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index9c73.html?page=components/base/progress&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Progress</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4c34.html?page=components/base/modal&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Modal</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexd2bb.html?page=components/base/alerts&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Alerts</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexd729.html?page=components/base/popover&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Popover</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index5e77.html?page=components/base/tooltip&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tooltip</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb2f8.html?page=components/base/blockui&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Block UI</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index68d9.html?page=components/base/spinners&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Spinners</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexbc58.html?page=components/base/scrollable&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Scrollable</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexbd9f.html?page=components/base/dropdown&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Dropdown</span></a></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tabs</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index1f9d.html?page=components/base/tabs/bootstrap&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Bootstrap Tabs</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index64cb.html?page=components/base/tabs/line&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Line Tabs</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index6e4a.html?page=components/base/accordions&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Accordions</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index363a.html?page=components/base/navs&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Navs</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index8d6b.html?page=components/base/lists&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Lists</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4452.html?page=components/base/treeview&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tree View</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index78ac.html?page=components/base/bootstrap-notify&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Bootstrap Notify</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexad9a.html?page=components/base/toastr&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Toastr</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index0dbd.html?page=components/base/sweetalert2&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">SweetAlert2</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-share"></i><span
                                    class="m-menu__link-text">Icons</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb4bb.html?page=components/icons/flaticon&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Flaticon</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexfb20.html?page=components/icons/fontawesome5&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Fontawesome 5</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index9b69.html?page=components/icons/lineawesome&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Lineawesome</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexa2ac.html?page=components/icons/socicons&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Socicons</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-web"></i><span
                                    class="m-menu__link-text">Buttons</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Buttons</span></span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Base</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index8f18.html?page=components/buttons/base/default&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Default Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexbcd9.html?page=components/buttons/base/square&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Square Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index6c27.html?page=components/buttons/base/pill&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Pill Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index57af.html?page=components/buttons/base/air&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Air Style</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexea05.html?page=components/buttons/group&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Group</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4259.html?page=components/buttons/dropdown&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Dropdown</span></a></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Icon</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa96d.html?page=components/buttons/icon/lineawesome&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Lineawesome Icons</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index8e01.html?page=components/buttons/icon/fontawesome&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Fontawesome Icons</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb319.html?page=components/buttons/icon/flaticon&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Flaticon Icons</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">Portlets</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Portlets</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index7cd6.html?page=components/portlets/base&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Base Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index3417.html?page=components/portlets/advanced&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Advanced Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index5e78.html?page=components/portlets/creative&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Creative Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexc614.html?page=components/portlets/tabbed&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Tabbed Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index8f4f.html?page=components/portlets/draggable&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Draggable Portlets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4a4c.html?page=components/portlets/tools&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Portlet Tools</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4963.html?page=components/portlets/sticky-head&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Sticky Head</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-interface-6"></i><span class="m-menu__link-text">Timeline</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Timeline</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexd43d.html?page=components/timeline/timeline-1&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Timeline 1</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index5be0.html?page=components/timeline/timeline-2&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Timeline 2</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Widgets</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Widgets</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index9e5e.html?page=components/widgets/general&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">General Widgets</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexadf5.html?page=components/widgets/chart&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Chart Widgets</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-calendar"></i><span class="m-menu__link-text">Calendar</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Calendar</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexa631.html?page=components/calendar/basic&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Basic Calendar</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexa3d2.html?page=components/calendar/list-view&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">List Views</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index63b8.html?page=components/calendar/google&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Google Calendar</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexf25d.html?page=components/calendar/external-events&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">External Events</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index80c1.html?page=components/calendar/background-events&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Background Events</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-text">Charts</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Charts</span></span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">amCharts</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa0f1.html?page=components/charts/amcharts/charts&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">amCharts Charts</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index11c8.html?page=components/charts/amcharts/stock-charts&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">amCharts Stock Charts</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index4d61.html?page=components/charts/amcharts/maps&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">amCharts Maps</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index4252.html?page=components/charts/flotcharts&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Flot Charts</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index2649.html?page=components/charts/google-charts&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Google Charts</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index3c90.html?page=components/charts/morris-charts&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Morris Charts</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-placeholder-1"></i><span
                                    class="m-menu__link-text">Maps</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Maps</span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index3924.html?page=components/maps/google-maps&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Google Maps</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index0bec.html?page=components/maps/jqvmap&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">JQVMap</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-signs-2"></i><span
                                    class="m-menu__link-text">Utils</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Utils</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb3f2.html?page=components/utils/session-timeout&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Session Timeout</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexe4cb.html?page=components/utils/idle-timer&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Idle Timer</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">CRUD</h4>
                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-interface-7"></i><span class="m-menu__link-text">Forms & Controls</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Forms & Controls</span></span>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Controls</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index2eec.html?page=crud/forms/controls/base&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Base Inputs</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index5448.html?page=crud/forms/controls/checkbox-radio&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Checkbox & Radio</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa8ed.html?page=crud/forms/controls/input-group&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Input Groups</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0c64.html?page=crud/forms/controls/switch&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Switch</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexba1d.html?page=crud/forms/controls/option&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Mega Options</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Widgets</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index314a.html?page=crud/forms/widgets/bootstrap-datepicker&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Datepicker</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index1253.html?page=crud/forms/widgets/bootstrap-datetimepicker&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Datetimepicker</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index428a.html?page=crud/forms/widgets/bootstrap-timepicker&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Timepicker</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexffa0.html?page=crud/forms/widgets/bootstrap-daterangepicker&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Daterangepicker</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexd2f9.html?page=crud/forms/widgets/bootstrap-touchspin&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Touchspin</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexf6ad.html?page=crud/forms/widgets/bootstrap-maxlength&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Maxlength</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index42b7.html?page=crud/forms/widgets/bootstrap-switch&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Switch</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index5dff.html?page=crud/forms/widgets/bootstrap-multipleselectsplitter&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Multiple Select Splitter</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexd287.html?page=crud/forms/widgets/bootstrap-select&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Bootstrap Select</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index94e9.html?page=crud/forms/widgets/select2&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Select2</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index207d.html?page=crud/forms/widgets/typeahead&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Typeahead</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index012e.html?page=crud/forms/widgets/nouislider&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">noUiSlider</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index37a1.html?page=crud/forms/widgets/form-repeater&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Repeater</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index9d3c.html?page=crud/forms/widgets/ion-range-slider&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Ion Range Slider</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexff8e.html?page=crud/forms/widgets/input-mask&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Input Masks</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexd848.html?page=crud/forms/widgets/summernote&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Summernote WYSIWYG</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb08d.html?page=crud/forms/widgets/bootstrap-markdown&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Markdown Editor</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexf281.html?page=crud/forms/widgets/autosize&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Autosize</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index6e0f.html?page=crud/forms/widgets/clipboard&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Clipboard</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index7222.html?page=crud/forms/widgets/dropzone&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Dropzone</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index95ad.html?page=crud/forms/widgets/recaptcha&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Google reCaptcha</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Layouts</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexd326.html?page=crud/forms/layouts/default-forms&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Default Forms</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index4e49.html?page=crud/forms/layouts/multi-column-forms&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Multi Column Forms</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index78e8.html?page=crud/forms/layouts/action-bars&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Basic Action Bars</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexe076.html?page=crud/forms/layouts/sticky-action-bar&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Sticky Action Bar</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Validation</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexbba2.html?page=crud/forms/validation/states&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Validation States</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0c5f.html?page=crud/forms/validation/form-controls&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Controls</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index1cc3.html?page=crud/forms/validation/form-widgets&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Form Widgets</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-interface-8"></i><span class="m-menu__link-text">Metronic Wizard</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index888f.html?page=crud/wizard/wizard-1&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Wizard 1</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb891.html?page=crud/wizard/wizard-2&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Wizard 2</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index9ea3.html?page=crud/wizard/wizard-3&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Wizard 3</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index48c3.html?page=crud/wizard/wizard-4&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Wizard 4</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexeaf0.html?page=crud/wizard/wizard-5&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Form Wizard 5</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-tabs"></i><span class="m-menu__link-text">Metronic Datatable</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span
                                                class="m-menu__link-text">Metronic Datatable</span></span></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Base</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index418e.html?page=crud/metronic-datatable/base/data-local&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Local Data</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index69ab.html?page=crud/metronic-datatable/base/data-json&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">JSON Data</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index9fdf.html?page=crud/metronic-datatable/base/data-ajax&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Ajax Data</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index7da1.html?page=crud/metronic-datatable/base/html-table&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">HTML Table</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index286e.html?page=crud/metronic-datatable/base/record-selection&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Record Selection</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index4a54.html?page=crud/metronic-datatable/base/local-sort&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Local Sort</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index8f2d.html?page=crud/metronic-datatable/base/row-details&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Row Details</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index60c2.html?page=crud/metronic-datatable/base/column-rendering&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Column Rendering</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index3a07.html?page=crud/metronic-datatable/base/column-width&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Column Width</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexbdf5.html?page=crud/metronic-datatable/base/responsive-columns&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Responsive Columns</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index9606.html?page=crud/metronic-datatable/base/translation&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Translation</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Scrolling</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0924.html?page=crud/metronic-datatable/scrolling/vertical&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Vertical Scrolling</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexff71.html?page=crud/metronic-datatable/scrolling/horizontal&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Horizontal Scrolling</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index795a.html?page=crud/metronic-datatable/scrolling/both&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Both Scrolling</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Locked Columns</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index7dee.html?page=crud/metronic-datatable/locked/left&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Left Locked Columns</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index35f4.html?page=crud/metronic-datatable/locked/right&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Right Locked Columns</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexc5b9.html?page=crud/metronic-datatable/locked/both&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Both Locked Columns</span></a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexcf4e.html?page=crud/metronic-datatable/locked/html-table&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">HTML Table</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Child Datatables</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexecfa.html?page=crud/metronic-datatable/child/data-local&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Local Data</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index794d.html?page=crud/metronic-datatable/child/data-ajax&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Remote Data</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">API</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexe7cf.html?page=crud/metronic-datatable/api/methods&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">API Methods</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexdfd9.html?page=crud/metronic-datatable/api/events&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Events</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-list-3"></i><span class="m-menu__link-text">DataTables</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span
                                                class="m-menu__link-text">DataTables</span></span></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Basic</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0342.html?page=crud/datatables/basic/basic&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Basic Tables</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index58e8.html?page=crud/datatables/basic/scrollable&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Scrollable Tables</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexfd51.html?page=crud/datatables/basic/headers&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Complex Headers</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0443.html?page=crud/datatables/basic/paginations&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Pagination Options</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Advanced</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa838.html?page=crud/datatables/advanced/column-rendering&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Column Rendering</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index5335.html?page=crud/datatables/advanced/multiple-controls&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Multiple Controls</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexec8c.html?page=crud/datatables/advanced/column-visibility&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Column Visibility</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index2c21.html?page=crud/datatables/advanced/row-callback&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Row Callback</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index1b9f.html?page=crud/datatables/advanced/row-grouping&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Row Grouping</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index47be.html?page=crud/datatables/advanced/footer-callback&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Footer Callback</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Data sources</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index0c25.html?page=crud/datatables/data-sources/html&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">HTML</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb73f.html?page=crud/datatables/data-sources/javascript&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Javascript</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexb906.html?page=crud/datatables/data-sources/ajax-client-side&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Ajax Client-side</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index3839.html?page=crud/datatables/data-sources/ajax-server-side&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Ajax Server-side</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Search Options</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index49c0.html?page=crud/datatables/search-options/column-search&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Column Search</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexeafe.html?page=crud/datatables/search-options/advanced-search&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Advanced Search</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Extensions</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexafa9.html?page=crud/datatables/extensions/buttons&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Buttons</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index3f0d.html?page=crud/datatables/extensions/colreorder&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">ColReorder</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexc9b5.html?page=crud/datatables/extensions/keytable&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">KeyTable</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa5aa.html?page=crud/datatables/extensions/responsive&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Responsive</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexa67e.html?page=crud/datatables/extensions/rowgroup&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">RowGroup</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexc5e5.html?page=crud/datatables/extensions/rowreorder&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">RowReorder</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="indexdf21.html?page=crud/datatables/extensions/scroller&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Scroller</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a
                                                        href="index54b5.html?page=crud/datatables/extensions/select&amp;demo=default"
                                                        class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Select</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">Tools</h4>
                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true"><a
                                href="index2b54.html?page=builder&amp;demo=default" class="m-menu__link "><i
                                    class="m-menu__link-icon flaticon-settings"></i><span class="m-menu__link-text">Layout Builder</span></a>
                    </li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text">Snippets</h4>
                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-interface-9"></i><span class="m-menu__link-text">Pricing Tables</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span
                                                class="m-menu__link-text">Pricing Tables</span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexc13e.html?page=snippets/general/pricing-tables/pricing-table-1&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Pricing Tables v1</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexc559.html?page=snippets/general/pricing-tables/pricing-table-2&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Pricing Tables v2</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index58f3.html?page=snippets/general/pricing-tables/pricing-table-3&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Pricing Tables v3</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb425.html?page=snippets/general/pricing-tables/pricing-table-4&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Pricing Tables v4</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-piggy-bank"></i><span class="m-menu__link-text">Invoices</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">Invoices</span></span>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexb44a.html?page=snippets/invoices/invoice-1&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Invoice v1</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="index9535.html?page=snippets/invoices/invoice-2&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Invoice v2</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-exclamation"></i><span class="m-menu__link-text">FAQS</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span class="m-menu__link-text">FAQS</span></span></li>
                                <li class="m-menu__item " aria-haspopup="true"><a
                                            href="indexf37a.html?page=snippets/faq/faq-1&amp;demo=default"
                                            class="m-menu__link "><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">FAQ v1</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i
                                    class="m-menu__link-icon flaticon-suitcase"></i><span class="m-menu__link-text">Custom Pages</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span
                                            class="m-menu__link"><span
                                                class="m-menu__link-text">Custom Pages</span></span></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">User Pages</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="indexb101.html?page=snippets/pages/user/login-1&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Login - 1</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="index9f82.html?page=snippets/pages/user/login-2&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Login - 2</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="indexdc3f.html?page=snippets/pages/user/login-3&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Login - 3</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="index88c1.html?page=snippets/pages/user/login-4&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Login - 4</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="index19fc.html?page=snippets/pages/user/login-5&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Login - 5</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="index3cd9.html?page=snippets/pages/user/login-6&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Login - 6</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"
                                    m-menu-submenu-toggle="hover"><a href="javascript:;"
                                                                     class="m-menu__link m-menu__toggle"><i
                                                class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Error Pages</span><i
                                                class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="indexeae8.html?page=snippets/pages/errors/error-1&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Error 1</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="index6346.html?page=snippets/pages/errors/error-2&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Error 2</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="index4fef.html?page=snippets/pages/errors/error-3&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Error 3</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="indexd268.html?page=snippets/pages/errors/error-4&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Error 4</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="index710c.html?page=snippets/pages/errors/error-5&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Error 5</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a target="_blank"
                                                                                              href="index3860.html?page=snippets/pages/errors/error-6&amp;demo=default"
                                                                                              class="m-menu__link "><i
                                                            class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                            class="m-menu__link-text">Error 6</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">Dashboard</h3>
                    </div>
                    <div>
  							<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
					<span class="m-subheader__daterange-label">
						<span class="m-subheader__daterange-title"></span>
						<span class="m-subheader__daterange-date m--font-brand"></span>
					</span>
					<a href="#"
                       class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
						<i class="la la-angle-down"></i>
					</a>
				</span>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Top Products-->
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Trends
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                All
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                                      style="left: auto; right: 36.5px;"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Activity</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Support</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin::Widget5-->
                                <div class="m-widget4">
                                    <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-10 m--margin-top-20"
                                         style="height:260px;">
                                        <canvas id="m_chart_trends_stats"></canvas>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="assets/app/media/img/client-logos/logo3.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
					<span class="m-widget4__title">
					Phyton
					</span><br>
                                            <span class="m-widget4__sub">
					A Programming Language
					</span>
                                        </div>
                                        <span class="m-widget4__ext">
					<span class="m-widget4__number m--font-danger">+$17</span>
				</span>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="assets/app/media/img/client-logos/logo1.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
					<span class="m-widget4__title">
					FlyThemes
					</span><br>
                                            <span class="m-widget4__sub">
					A Let's Fly Fast Again Language
					</span>
                                        </div>
                                        <span class="m-widget4__ext">
					<span class="m-widget4__number m--font-danger">+$300</span>
				</span>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="assets/app/media/img/client-logos/logo2.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
					<span class="m-widget4__title">
					AirApp
					</span><br>
                                            <span class="m-widget4__sub">
					Awesome App For Project Management
					</span>
                                        </div>
                                        <span class="m-widget4__ext">
					<span class="m-widget4__number m--font-danger">+$6700</span>
				</span>
                                    </div>
                                </div>
                                <!--end::Widget 5-->
                            </div>
                        </div>
                        <!--end:: Widgets/Top Products-->    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Activity-->
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light  m-portlet--rounded-force">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            Activity
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover">
                                            <a href="#"
                                               class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                                <i class="fa fa-genderless m--font-light"></i>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Activity</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Support</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit">
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#"
                                                                       class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget17">
                                    <div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger">
                                        <div class="m-widget17__chart" style="height:320px;">
                                            <canvas id="m_chart_activities"></canvas>
                                        </div>
                                    </div>
                                    <div class="m-widget17__stats">
                                        <div class="m-widget17__items m-widget17__items-col1">
                                            <div class="m-widget17__item">
						<span class="m-widget17__icon">
							<i class="flaticon-truck m--font-brand"></i>
						</span>
                                                <span class="m-widget17__subtitle">
							Delivered
						</span>
                                                <span class="m-widget17__desc">
							15 New Paskages
						</span>
                                            </div>
                                            <div class="m-widget17__item">
						<span class="m-widget17__icon">
							<i class="flaticon-paper-plane m--font-info"></i>
						</span>
                                                <span class="m-widget17__subtitle">
							Reporeted
						</span>
                                                <span class="m-widget17__desc">
							72 Support Cases
						</span>
                                            </div>
                                        </div>
                                        <div class="m-widget17__items m-widget17__items-col2">
                                            <div class="m-widget17__item">
						<span class="m-widget17__icon">
							<i class="flaticon-pie-chart m--font-success"></i>
						</span>
                                                <span class="m-widget17__subtitle">
							Ordered
						</span>
                                                <span class="m-widget17__desc">
							72 New Items
						</span>
                                            </div>
                                            <div class="m-widget17__item">
						<span class="m-widget17__icon">
							<i class="flaticon-time m--font-danger"></i>
						</span>
                                                <span class="m-widget17__subtitle">
							Arrived
						</span>
                                                <span class="m-widget17__desc">
							34 Upgraded Boxes
						</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Activity-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Blog-->
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
                            <div class="m-portlet__head m-portlet__head--fit">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-action">
                                        <button type="button" class="btn btn-sm m-btn--pill  btn-brand">Blog</button>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget19">
                                    <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides"
                                         style="min-height-: 286px">
                                        <img src="assets/app/media/img/blog/blog1.jpg" alt="">
                                        <h3 class="m-widget19__title m--font-light">
                                            Introducing New Feature
                                        </h3>
                                        <div class="m-widget19__shadow"></div>
                                    </div>
                                    <div class="m-widget19__content">
                                        <div class="m-widget19__header">
                                            <div class="m-widget19__user-img">
                                                <img class="m-widget19__img" src="assets/app/media/img/users/user1.jpg"
                                                     alt="">
                                            </div>
                                            <div class="m-widget19__info">
						<span class="m-widget19__username">
						Anna Krox
						</span><br>
                                                <span class="m-widget19__time">
						UX/UI Designer, Google
						</span>
                                            </div>
                                            <div class="m-widget19__stats">
						<span class="m-widget19__number m--font-brand">
						18
						</span>
                                                <span class="m-widget19__comment">
						Comments
						</span>
                                            </div>
                                        </div>
                                        <div class="m-widget19__body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            scrambled it to make text of the printing and typesetting industry scrambled
                                            a type specimen book text of the dummy text of the printing printing and
                                            typesetting industry scrambled dummy text of the printing.
                                        </div>
                                    </div>
                                    <div class="m-widget19__action">
                                        <button type="button"
                                                class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                            Read More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Blog-->    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="m-portlet">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Stats2-1 -->
                                <div class="m-widget1">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">Member Profit</h3>
                                                <span class="m-widget1__desc">Awerage Weekly Profit</span>
                                            </div>
                                            <div class="col m--align-right">
                                                <span class="m-widget1__number m--font-brand">+$17,800</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">Orders</h3>
                                                <span class="m-widget1__desc">Weekly Customer Orders</span>
                                            </div>
                                            <div class="col m--align-right">
                                                <span class="m-widget1__number m--font-danger">+1,800</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">Issue Reports</h3>
                                                <span class="m-widget1__desc">System bugs and issues</span>
                                            </div>
                                            <div class="col m--align-right">
                                                <span class="m-widget1__number m--font-success">-27,49%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Stats2-1 -->            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Daily Sales-->
                                <div class="m-widget14">
                                    <div class="m-widget14__header m--margin-bottom-30">
                                        <h3 class="m-widget14__title">
                                            Daily Sales
                                        </h3>
                                        <span class="m-widget14__desc">
		Check out each collumn for more details
		</span>
                                    </div>
                                    <div class="m-widget14__chart" style="height:120px;">
                                        <canvas id="m_chart_daily_sales"></canvas>
                                    </div>
                                </div>
                                <!--end:: Widgets/Daily Sales-->            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Profit Share-->
                                <div class="m-widget14">
                                    <div class="m-widget14__header">
                                        <h3 class="m-widget14__title">
                                            Profit Share
                                        </h3>
                                        <span class="m-widget14__desc">
		Profit Share between customers
		</span>
                                    </div>
                                    <div class="row  align-items-center">
                                        <div class="col">
                                            <div id="m_chart_profit_share" class="m-widget14__chart"
                                                 style="height: 160px">
                                                <div class="m-widget14__stat">45</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="m-widget14__legends">
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                    <span class="m-widget14__legend-text">37% Sport Tickets</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                    <span class="m-widget14__legend-text">47% Business Events</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                                    <span class="m-widget14__legend-text">19% Others</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Profit Share-->            </div>
                        </div>
                    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Blog-->
                        <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
                            <div class="m-portlet__head m-portlet__head--fit-">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            Personal Income
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
                                                2018
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Orders</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Pending</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Delivered</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">Canceled</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Approved</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget27 m-portlet-fit--sides">
                                    <div class="m-widget27__pic">
                                        <img src="assets/app/media/img/bg/bg-4.jpg" alt="">
                                        <h3 class="m-widget27__title m--font-light">
                                            <span><span>$</span>256,100</span>
                                        </h3>
                                        <div class="m-widget27__btn">
                                            <button type="button"
                                                    class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder">
                                                Inclusive All Earnings
                                            </button>
                                        </div>
                                    </div>
                                    <div class="m-widget27__container">
                                        <!-- begin::Nav pills -->
                                        <ul class="m-widget27__nav-items nav nav-pills nav-fill" role="tablist">
                                            <li class="m-widget27__nav-item nav-item">
                                                <a class="nav-link active" data-toggle="pill"
                                                   href="#m_personal_income_quater_1">Quater 1</a>
                                            </li>
                                            <li class="m-widget27__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill"
                                                   href="#m_personal_income_quater_2">Quater 2</a>
                                            </li>
                                            <li class="m-widget27__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill"
                                                   href="#m_personal_income_quater_3">Quater 3</a>
                                            </li>
                                            <li class="m-widget27__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill"
                                                   href="#m_personal_income_quater_4">Quater 4</a>
                                            </li>
                                        </ul>
                                        <!-- end::Nav pills -->

                                        <!-- begin::Tab Content -->
                                        <div class="m-widget27__tab tab-content m-widget27--no-padding">
                                            <div id="m_personal_income_quater_1" class="tab-pane active">
                                                <div class="row  align-items-center">
                                                    <div class="col">
                                                        <div id="m_chart_personal_income_quater_1"
                                                             class="m-widget27__chart" style="height: 160px">
                                                            <div class="m-widget27__stat">37</div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-widget27__legends">
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-accent"></span>
                                                                <span class="m-widget27__legend-text">37% Case</span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-warning"></span>
                                                                <span class="m-widget27__legend-text">42% Events</span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                                                <span class="m-widget27__legend-text">19% Others</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="m_personal_income_quater_2" class="tab-pane fade">
                                                <div class="row  align-items-center">
                                                    <div class="col">
                                                        <div id="m_chart_personal_income_quater_2"
                                                             class="m-widget27__chart" style="height: 160px">
                                                            <div class="m-widget27__stat">70</div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-widget27__legends">
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-focus"></span>
                                                                <span class="m-widget27__legend-text">57% Case</span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-success"></span>
                                                                <span class="m-widget27__legend-text">20% Events</span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                                                <span class="m-widget27__legend-text">19% Others</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="m_personal_income_quater_3" class="tab-pane fade">
                                                <div class="row  align-items-center">
                                                    <div class="col">
                                                        <div id="m_chart_personal_income_quater_3"
                                                             class="m-widget27__chart" style="height: 160px">
                                                            <div class="m-widget27__stat">67</div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-widget27__legends">
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-info"></span>
                                                                <span class="m-widget27__legend-text">47% Case</span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                                                <span class="m-widget27__legend-text">55% Events</span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-brand"></span>
                                                                <span class="m-widget27__legend-text">27% Others</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="m_personal_income_quater_4" class="tab-pane fade">
                                                <div class="row  align-items-center">
                                                    <div class="col">
                                                        <div id="m_chart_personal_income_quater_4"
                                                             class="m-widget27__chart" style="height: 160px">
                                                            <div class="m-widget27__stat">77</div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-widget27__legends">
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-warning"></span>
                                                                <span class="m-widget27__legend-text">37% Case</span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-primary"></span>
                                                                <span class="m-widget27__legend-text">65% Events</span>
                                                            </div>
                                                            <div class="m-widget27__legend">
                                                                <span class="m-widget27__legend-bullet m--bg-danger"></span>
                                                                <span class="m-widget27__legend-text">33% Others</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end::Tab Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Blog-->


                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Blog-->
                        <div class="m-portlet m-portlet--head-overlay m-portlet--full-height   m-portlet--rounded-force">
                            <div class="m-portlet__head m-portlet__head--fit">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            Finance Stats
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
                                                2018
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Reports</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Activity</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Support</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget28">
                                    <div class="m-widget28__pic m-portlet-fit--sides"></div>
                                    <div class="m-widget28__container">
                                        <!-- begin::Nav pills -->
                                        <ul class="m-widget28__nav-items nav nav-pills nav-fill" role="tablist">
                                            <li class="m-widget28__nav-item nav-item">
                                                <a class="nav-link active" data-toggle="pill" href="#menu11"><span><i
                                                                class="fa flaticon-pie-chart"></i></span><span>GMI Taxes</span></a>
                                            </li>
                                            <li class="m-widget28__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#menu21"><span><i
                                                                class="fa flaticon-file-1"></i></span><span>IMT Invoice</span></a>
                                            </li>
                                            <li class="m-widget28__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#menu31"><span><i
                                                                class="fa flaticon-clipboard"></i></span><span>Main Notes</span></a>
                                            </li>
                                        </ul>
                                        <!-- end::Nav pills -->

                                        <!-- begin::Tab Content -->
                                        <div class="m-widget28__tab tab-content">
                                            <div id="menu11" class="m-widget28__tab-container tab-pane active">
                                                <div class="m-widget28__tab-items">
                                                    <div class="m-widget28__tab-item">
                                                        <span>Company Name</span>
                                                        <span>SLT Back-end Solutions</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>INE Number</span>
                                                        <span>D330-1234562546</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>Total Charges</span>
                                                        <span>USD 1,250.000</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>Project Description</span>
                                                        <span>Creating Back-end Components</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu21" class="m-widget28__tab-container tab-pane fade">
                                                <div class="m-widget28__tab-items">
                                                    <div class="m-widget28__tab-item">
                                                        <span>Project Description</span>
                                                        <span>Back-End Web Architecture</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>Total Charges</span>
                                                        <span>USD 2,170.000</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>INE Number</span>
                                                        <span>D110-1234562546</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>Company Name</span>
                                                        <span>SLT Back-end Solutions</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu31" class="m-widget28__tab-container tab-pane fade">
                                                <div class="m-widget28__tab-items">
                                                    <div class="m-widget28__tab-item">
                                                        <span>Total Charges</span>
                                                        <span>USD 3,450.000</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>Project Description</span>
                                                        <span>Creating Back-end Components</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>Company Name</span>
                                                        <span>SLT Back-end Solutions</span>
                                                    </div>
                                                    <div class="m-widget28__tab-item">
                                                        <span>INE Number</span>
                                                        <span>D510-7431562548</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end::Tab Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Blog-->


                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Packages-->
                        <div class="m-portlet m--bg-warning m-portlet--bordered-semi m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            Packages
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
                                                2018
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Reports</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Activity</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Export</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">PDF</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Excel</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">CSV</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin::Widget 29-->
                                <div class="m-widget29">
                                    <div class="m-widget_content">
                                        <h3 class="m-widget_content-title">Monthly Income</h3>
                                        <div class="m-widget_content-items">
                                            <div class="m-widget_content-item">
                                                <span>Total</span>
                                                <span class="m--font-accent">$680</span>
                                            </div>
                                            <div class="m-widget_content-item">
                                                <span>Change</span>
                                                <span class="m--font-brand">+15%</span>
                                            </div>
                                            <div class="m-widget_content-item">
                                                <span>Licenses</span>
                                                <span>29</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget_content">
                                        <h3 class="m-widget_content-title">Taxes info</h3>
                                        <div class="m-widget_content-items">
                                            <div class="m-widget_content-item">
                                                <span>Total</span>
                                                <span class="m--font-accent">22.50</span>
                                            </div>
                                            <div class="m-widget_content-item">
                                                <span>Change</span>
                                                <span class="m--font-brand">+15%</span>
                                            </div>
                                            <div class="m-widget_content-item">
                                                <span>Count</span>
                                                <span>701</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget_content">
                                        <h3 class="m-widget_content-title">Partners Sale</h3>
                                        <div class="m-widget_content-items">
                                            <div class="m-widget_content-item">
                                                <span>Total</span>
                                                <span class="m--font-accent">$680</span>
                                            </div>
                                            <div class="m-widget_content-item">
                                                <span>Change</span>
                                                <span class="m--font-brand">+15%</span>
                                            </div>
                                            <div class="m-widget_content-item">
                                                <span>Licenses</span>
                                                <span>29</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Widget 29-->
                            </div>
                        </div>
                        <!--end:: Packages-->


                    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-6">
                        <!--begin:: Widgets/Tasks -->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Tasks
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                        role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_widget2_tab1_content" role="tab">
                                                Today
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget2_tab2_content1" role="tab">
                                                Week
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget2_tab3_content1" role="tab">
                                                Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget2_tab1_content">
                                        <div class="m-widget2">
                                            <div class="m-widget2__item m-widget2__item--primary">
                                                <div class="m-widget2__checkbox">
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="m-widget2__desc">
							<span class="m-widget2__text">
							Make Metronic Great  Again.Lorem Ipsum Amet
							</span><br>
                                                    <span class="m-widget2__user-name">
							<a href="#" class="m-widget2__link">
							By Bob
							</a>
							</span>
                                                </div>
                                                <div class="m-widget2__actions">
                                                    <div class="m-widget2__actions-nav">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             m-dropdown-toggle="hover">
                                                            <a href="#" class="m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                        <span class="m-nav__link-text">Activity</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                        <span class="m-nav__link-text">Messages</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                        <span class="m-nav__link-text">Support</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget2__item m-widget2__item--warning">
                                                <div class="m-widget2__checkbox">
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="m-widget2__desc">
							<span class="m-widget2__text">
							Prepare Docs For Metting On Monday
							</span><br>
                                                    <span class="m-widget2__user-name">
							<a href="#" class="m-widget2__link">
							By Sean
							</a>
							</span>
                                                </div>
                                                <div class="m-widget2__actions">
                                                    <div class="m-widget2__actions-nav">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             m-dropdown-toggle="hover">
                                                            <a href="#" class="m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                        <span class="m-nav__link-text">Activity</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                        <span class="m-nav__link-text">Messages</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                        <span class="m-nav__link-text">Support</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget2__item m-widget2__item--brand">
                                                <div class="m-widget2__checkbox">
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="m-widget2__desc">
							<span class="m-widget2__text">
							Make Widgets Great Again.Estudiat Communy Elit
							</span><br>
                                                    <span class="m-widget2__user-name">
							<a href="#" class="m-widget2__link">
							By Aziko
							</a>
							</span>
                                                </div>
                                                <div class="m-widget2__actions">
                                                    <div class="m-widget2__actions-nav">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             m-dropdown-toggle="hover">
                                                            <a href="#" class="m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                        <span class="m-nav__link-text">Activity</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                        <span class="m-nav__link-text">Messages</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                        <span class="m-nav__link-text">Support</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget2__item m-widget2__item--success">
                                                <div class="m-widget2__checkbox">
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="m-widget2__desc">
							<span class="m-widget2__text">
							Make Metronic Great Again.Lorem Ipsum
							</span><br>
                                                    <span class="m-widget2__user-name">
							<a href="#" class="m-widget2__link">
							By James
							</a>
							</span>
                                                </div>
                                                <div class="m-widget2__actions">
                                                    <div class="m-widget2__actions-nav">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             m-dropdown-toggle="hover">
                                                            <a href="#" class="m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                        <span class="m-nav__link-text">Activity</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                        <span class="m-nav__link-text">Messages</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                        <span class="m-nav__link-text">Support</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget2__item m-widget2__item--danger">
                                                <div class="m-widget2__checkbox">
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="m-widget2__desc">
							<span class="m-widget2__text">
							Completa Financial Report For Emirates Airlines
							</span><br>
                                                    <span class="m-widget2__user-name">
							<a href="#" class="m-widget2__link">
							By Bob
							</a>
							</span>
                                                </div>
                                                <div class="m-widget2__actions">
                                                    <div class="m-widget2__actions-nav">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             m-dropdown-toggle="hover">
                                                            <a href="#" class="m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                        <span class="m-nav__link-text">Activity</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                        <span class="m-nav__link-text">Messages</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                        <span class="m-nav__link-text">Support</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget2__item m-widget2__item--info">
                                                <div class="m-widget2__checkbox">
                                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                        <input type="checkbox">
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="m-widget2__desc">
							<span class="m-widget2__text">
							Completa Financial Report For Emirates Airlines
							</span><br>
                                                    <span class="m-widget2__user-name">
							<a href="#" class="m-widget2__link">
							By Sean
							</a>
							</span>
                                                </div>
                                                <div class="m-widget2__actions">
                                                    <div class="m-widget2__actions-nav">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                             m-dropdown-toggle="hover">
                                                            <a href="#" class="m-dropdown__toggle">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="m-dropdown__wrapper">
                                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                                <div class="m-dropdown__inner">
                                                                    <div class="m-dropdown__body">
                                                                        <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                                        <span class="m-nav__link-text">Activity</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                        <span class="m-nav__link-text">Messages</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="m-nav__item">
                                                                                    <a href="#" class="m-nav__link">
                                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                        <span class="m-nav__link-text">Support</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="m_widget2_tab2_content">

                                    </div>
                                    <div class="tab-pane" id="m_widget2_tab3_content">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Tasks -->
                    </div>
                    <div class="col-xl-6">
                        <!--begin:: Widgets/Support Tickets -->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Support Tickets
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#"
                                               class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                <i class="la la-ellipsis-h m--font-brand"></i>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Activity</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Support</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget3">
                                    <div class="m-widget3__item">
                                        <div class="m-widget3__header">
                                            <div class="m-widget3__user-img">
                                                <img class="m-widget3__img" src="assets/app/media/img/users/user1.jpg"
                                                     alt="">
                                            </div>
                                            <div class="m-widget3__info">
						<span class="m-widget3__username">
						Melania Trump
						</span><br>
                                                <span class="m-widget3__time">
						2 day ago
						</span>
                                            </div>
                                            <span class="m-widget3__status m--font-info">
					Pending
					</span>
                                        </div>
                                        <div class="m-widget3__body">
                                            <p class="m-widget3__text">
                                                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy
                                                nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="m-widget3__item">
                                        <div class="m-widget3__header">
                                            <div class="m-widget3__user-img">
                                                <img class="m-widget3__img" src="assets/app/media/img/users/user4.jpg"
                                                     alt="">
                                            </div>
                                            <div class="m-widget3__info">
						<span class="m-widget3__username">
						Lebron King James
						</span><br>
                                                <span class="m-widget3__time">
						1 day ago
						</span>
                                            </div>
                                            <span class="m-widget3__status m--font-brand">
					Open
					</span>
                                        </div>
                                        <div class="m-widget3__body">
                                            <p class="m-widget3__text">
                                                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy
                                                nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut
                                                wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="m-widget3__item">
                                        <div class="m-widget3__header">
                                            <div class="m-widget3__user-img">
                                                <img class="m-widget3__img" src="assets/app/media/img/users/user5.jpg"
                                                     alt="">
                                            </div>
                                            <div class="m-widget3__info">
						<span class="m-widget3__username">
						Deb Gibson
						</span><br>
                                                <span class="m-widget3__time">
						3 weeks ago
						</span>
                                            </div>
                                            <span class="m-widget3__status m--font-success">
					Closed
					</span>
                                        </div>
                                        <div class="m-widget3__body">
                                            <p class="m-widget3__text">
                                                Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy
                                                nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Support Tickets -->  </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <!--Begin::Portlet-->
                        <div class="m-portlet  m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Recent Activities
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#"
                                               class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                <i class="la la-ellipsis-h m--font-brand"></i>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Activity</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Support</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit">
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#"
                                                                       class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-scrollable" data-scrollable="true" data-height="380"
                                     data-mobile-height="300">
                                    <!--Begin::Timeline 2 -->
                                    <div class="m-timeline-2">
                                        <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                                            <div class="m-timeline-2__item">
                                                <span class="m-timeline-2__item-time">10:00</span>
                                                <div class="m-timeline-2__item-cricle">
                                                    <i class="fa fa-genderless m--font-danger"></i>
                                                </div>
                                                <div class="m-timeline-2__item-text  m--padding-top-5">
                                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                    incididunt ut labore et dolore magna
                                                </div>
                                            </div>
                                            <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time">12:45</span>
                                                <div class="m-timeline-2__item-cricle">
                                                    <i class="fa fa-genderless m--font-success"></i>
                                                </div>
                                                <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                                                    AEOL Meeting With
                                                </div>
                                                <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                                                    <a href="#"><img src="assets/app/media/img/users/100_4.jpg"
                                                                     title=""></a>
                                                    <a href="#"><img src="assets/app/media/img/users/100_13.jpg"
                                                                     title=""></a>
                                                    <a href="#"><img src="assets/app/media/img/users/100_11.jpg"
                                                                     title=""></a>
                                                    <a href="#"><img src="assets/app/media/img/users/100_14.jpg"
                                                                     title=""></a>
                                                </div>
                                            </div>
                                            <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time">14:00</span>
                                                <div class="m-timeline-2__item-cricle">
                                                    <i class="fa fa-genderless m--font-brand"></i>
                                                </div>
                                                <div class="m-timeline-2__item-text m--padding-top-5">
                                                    Make Deposit <a href="#"
                                                                    class="m-link m-link--brand m--font-bolder">USD
                                                        700</a> To ESL.
                                                </div>
                                            </div>
                                            <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time">16:00</span>
                                                <div class="m-timeline-2__item-cricle">
                                                    <i class="fa fa-genderless m--font-warning"></i>
                                                </div>
                                                <div class="m-timeline-2__item-text m--padding-top-5">
                                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                    incididunt ut labore et dolore magna elit enim at minim<br>
                                                    veniam quis nostrud
                                                </div>
                                            </div>
                                            <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time">17:00</span>
                                                <div class="m-timeline-2__item-cricle">
                                                    <i class="fa fa-genderless m--font-info"></i>
                                                </div>
                                                <div class="m-timeline-2__item-text m--padding-top-5">
                                                    Placed a new order in <a href="#"
                                                                             class="m-link m-link--brand m--font-bolder">SIGNATURE
                                                        MOBILE</a> marketplace.
                                                </div>
                                            </div>
                                            <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time">16:00</span>
                                                <div class="m-timeline-2__item-cricle">
                                                    <i class="fa fa-genderless m--font-brand"></i>
                                                </div>
                                                <div class="m-timeline-2__item-text m--padding-top-5">
                                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                                    incididunt ut labore et dolore magna elit enim at minim<br>
                                                    veniam quis nostrud
                                                </div>
                                            </div>
                                            <div class="m-timeline-2__item m--margin-top-30">
                                                <span class="m-timeline-2__item-time">17:00</span>
                                                <div class="m-timeline-2__item-cricle">
                                                    <i class="fa fa-genderless m--font-danger"></i>
                                                </div>
                                                <div class="m-timeline-2__item-text m--padding-top-5">
                                                    Received a new feedback on <a href="#"
                                                                                  class="m-link m-link--brand m--font-bolder">FinancePro
                                                        App</a> product.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End::Timeline 2 -->
                                </div>
                            </div>
                        </div>
                        <!--End::Portlet-->    </div>
                    <div class="col-xl-6 col-lg-12">
                        <!--Begin::Portlet-->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Recent Notifications
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                        role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_widget2_tab1_content" role="tab">
                                                Today
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget2_tab2_content" role="tab">
                                                Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget2_tab1_content">
                                        <!--Begin::Timeline 3 -->
                                        <div class="m-timeline-3">
                                            <div class="m-timeline-3__items">
                                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                                    <span class="m-timeline-3__item-time">09:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Bob
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--warning">
                                                    <span class="m-timeline-3__item-time">10:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Lorem ipsum dolor sit amit
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Sean
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                    <span class="m-timeline-3__item-time">11:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Lorem ipsum dolor sit amit eiusmdd tempor
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By James
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--success">
                                                    <span class="m-timeline-3__item-time">12:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Lorem ipsum dolor
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By James
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                    <span class="m-timeline-3__item-time">14:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Lorem ipsum dolor sit amit,consectetur eiusmdd
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Derrick
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                                    <span class="m-timeline-3__item-time">15:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Lorem ipsum dolor sit amit,consectetur
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Iman
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                    <span class="m-timeline-3__item-time">17:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Lorem ipsum dolor sit consectetur eiusmdd tempor
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Aziko
								</a>
								</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End::Timeline 3 -->
                                    </div>
                                    <div class="tab-pane" id="m_widget2_tab2_content">
                                        <!--Begin::Timeline 3 -->
                                        <div class="m-timeline-3">
                                            <div class="m-timeline-3__items">
                                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                                    <span class="m-timeline-3__item-time m--font-focus">09:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Contrary to popular belief, Lorem Ipsum is not simply random text.
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Bob
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--warning">
                                                    <span class="m-timeline-3__item-time m--font-warning">10:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								There are many variations of passages of Lorem Ipsum available.
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Sean
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                    <span class="m-timeline-3__item-time m--font-primary">11:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Contrary to popular belief, Lorem Ipsum is not simply random text.
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By James
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--success">
                                                    <span class="m-timeline-3__item-time m--font-success">12:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By James
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                                    <span class="m-timeline-3__item-time m--font-warning">14:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Latin words, combined with a handful of model sentence structures.
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Derrick
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                                    <span class="m-timeline-3__item-time m--font-info">15:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Contrary to popular belief, Lorem Ipsum is not simply random text.
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Iman
								</a>
								</span>
                                                    </div>
                                                </div>
                                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                                    <span class="m-timeline-3__item-time m--font-danger">17:00</span>
                                                    <div class="m-timeline-3__item-desc">
								<span class="m-timeline-3__item-text">
								Lorem Ipsum is therefore always free from repetition, injected humour.
								</span><br>
                                                        <span class="m-timeline-3__item-user-name">
								<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
								By Aziko
								</a>
								</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End::Timeline 3 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::Portlet-->    </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="m-portlet m-portlet--mobile ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Exclusive Datatable Plugin
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item">
                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                 m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="#"
                                                   class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
                                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                                            <span class="m-nav__link-text">Create Post</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                            <span class="m-nav__link-text">Send Messages</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                            <span class="m-nav__link-text">Upload File</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__section">
                                                                        <span class="m-nav__section-text">Useful Links</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                                            <span class="m-nav__link-text">FAQ</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="#" class="m-nav__link">
                                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                            <span class="m-nav__link-text">Support</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                                    </li>
                                                                    <li class="m-nav__item m--hide">
                                                                        <a href="#"
                                                                           class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin: Datatable -->
                                <div class="m_datatable" id="m_datatable_latest_orders"></div>
                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Audit Log-->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Audit Log
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                        role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_widget4_tab1_content" role="tab">
                                                Today
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget4_tab2_content" role="tab">
                                                Week
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget4_tab3_content" role="tab">
                                                Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget4_tab1_content">
                                        <div class="m-scrollable" data-scrollable="true" data-height="400"
                                             style="height: 400px; overflow: hidden;">
                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                <div class="m-list-timeline__items">
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span class="m-list-timeline__text">12 new users registered</span>
                                                        <span class="m-list-timeline__time">Just now</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                        <span class="m-list-timeline__text">System shutdown <span
                                                                    class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                                        <span class="m-list-timeline__time">14 mins</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                        <span class="m-list-timeline__text">New invoice received</span>
                                                        <span class="m-list-timeline__time">20 mins</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                        <span class="m-list-timeline__text">DB overloaded 80% <span
                                                                    class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                                        <span class="m-list-timeline__time">1 hr</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                                        <span class="m-list-timeline__text">System error - <a href="#"
                                                                                                              class="m-link">Check</a></span>
                                                        <span class="m-list-timeline__time">2 hrs</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                                        <span class="m-list-timeline__text">Production server down</span>
                                                        <span class="m-list-timeline__time">3 hrs</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                        <span class="m-list-timeline__text">Production server up</span>
                                                        <span class="m-list-timeline__time">5 hrs</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span href="#" class="m-list-timeline__text">New order received <span
                                                                    class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                                        <span class="m-list-timeline__time">7 hrs</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span class="m-list-timeline__text">12 new users registered</span>
                                                        <span class="m-list-timeline__time">Just now</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                        <span class="m-list-timeline__text">System shutdown <span
                                                                    class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                                        <span class="m-list-timeline__time">14 mins</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                        <span class="m-list-timeline__text">New invoice received</span>
                                                        <span class="m-list-timeline__time">20 mins</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                        <span class="m-list-timeline__text">DB overloaded 80% <span
                                                                    class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                                        <span class="m-list-timeline__time">1 hr</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                        <span class="m-list-timeline__text">New invoice received</span>
                                                        <span class="m-list-timeline__time">20 mins</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                                        <span class="m-list-timeline__text">DB overloaded 80% <span
                                                                    class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                                        <span class="m-list-timeline__time">1 hr</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                                        <span class="m-list-timeline__text">System error - <a href="#"
                                                                                                              class="m-link">Check</a></span>
                                                        <span class="m-list-timeline__time">2 hrs</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                                        <span class="m-list-timeline__text">Production server down</span>
                                                        <span class="m-list-timeline__time">3 hrs</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                                        <span class="m-list-timeline__text">Production server up</span>
                                                        <span class="m-list-timeline__time">5 hrs</span>
                                                    </div>
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span href="#" class="m-list-timeline__text">New order received <span
                                                                    class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                                        <span class="m-list-timeline__time">7 hrs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="m_widget4_tab2_content">
                                    </div>
                                    <div class="tab-pane" id="m_widget4_tab3_content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Audit Log-->  </div>
                </div>
                <!--End::Section-->

                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-8">
                        <!--begin:: Widgets/Best Sellers-->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Best Sellers
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                                        role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                               href="#m_widget5_tab1_content" role="tab">
                                                Last Month
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget5_tab2_content" role="tab">
                                                last Year
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                               href="#m_widget5_tab3_content" role="tab">
                                                All time
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin::Content-->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget5_tab1_content" aria-expanded="true">
                                        <!--begin::m-widget5-->
                                        <div class="m-widget5">
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product6.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Great Logo Designn
                                                        </h4>
                                                        <span class="m-widget5__desc">
									Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-label">
									author:
									</span>
                                                            <span class="m-widget5__info-author-name">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">19,200</span><br>
                                                        <span class="m-widget5__sales">sales</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">1046</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product10.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Branding Mockup
                                                        </h4>
                                                        <span class="m-widget5__desc">
								Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-author m--font-info">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">24,583</span><br>
                                                        <span class="m-widget5__sales">sales</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">3809</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product11.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Awesome Mobile App
                                                        </h4>
                                                        <span class="m-widget5__desc">
								Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-author m--font-info">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">10,054</span><br>
                                                        <span class="m-widget5__sales">sales</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">1103</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::m-widget5-->
                                    </div>
                                    <div class="tab-pane" id="m_widget5_tab2_content" aria-expanded="false">
                                        <!--begin::m-widget5-->
                                        <div class="m-widget5">
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product11.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Branding Mockup
                                                        </h4>
                                                        <span class="m-widget5__desc">
								Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-author m--font-info">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">24,583</span><br>
                                                        <span class="m-widget5__sales">sales</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">3809</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product6.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Great Logo Designn
                                                        </h4>
                                                        <span class="m-widget5__desc">
								Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-author m--font-info">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">19,200</span><br>
                                                        <span class="m-widget5__sales">sales</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">1046</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product10.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Awesome Mobile App
                                                        </h4>
                                                        <span class="m-widget5__desc">
								Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-author m--font-info">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">10,054</span><br>
                                                        <span class="m-widget5__sales">sales</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">1103</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::m-widget5-->
                                    </div>
                                    <div class="tab-pane" id="m_widget5_tab3_content" aria-expanded="false">
                                        <!--begin::m-widget5-->
                                        <div class="m-widget5">
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product10.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Branding Mockup
                                                        </h4>
                                                        <span class="m-widget5__desc">
								Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-author m--font-info">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">10.054</span><br>
                                                        <span class="m-widget5__sales">sales</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">1103</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product11.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Great Logo Designn
                                                        </h4>
                                                        <span class="m-widget5__desc">
								Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-author m--font-info">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">24,583</span><br>
                                                        <span class="m-widget5__sales">sales</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">3809</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-widget5__item">
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img"
                                                             src="assets/app/media/img/products/product6.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__section">
                                                        <h4 class="m-widget5__title">
                                                            Awesome Mobile App
                                                        </h4>
                                                        <span class="m-widget5__desc">
								Make Metronic Great  Again.Lorem Ipsum Amet
								</span>
                                                        <div class="m-widget5__info">
									<span class="m-widget5__author">
									Author:
									</span>
                                                            <span class="m-widget5__info-author m--font-info">
									Fly themes
									</span>
                                                            <span class="m-widget5__info-label">
									Released:
									</span>
                                                            <span class="m-widget5__info-date m--font-info">
									23.08.17
									</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget5__content">
                                                    <div class="m-widget5__stats1">
                                                        <span class="m-widget5__number">19,200</span><br>
                                                        <span class="m-widget5__sales">1046</span>
                                                    </div>
                                                    <div class="m-widget5__stats2">
                                                        <span class="m-widget5__number">1046</span><br>
                                                        <span class="m-widget5__votes">votes</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::m-widget5-->
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                        </div>
                        <!--end:: Widgets/Best Sellers-->  </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Authors Profit-->
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Authors Profit
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover">
                                            <a href="#"
                                               class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                                All
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">Activity</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">Messages</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">FAQ</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">Support</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit">
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="#"
                                                                       class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget4">
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="assets/app/media/img/client-logos/logo5.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
					<span class="m-widget4__title">
					Trump Themes
					</span><br>
                                            <span class="m-widget4__sub">
					Make Metronic Great Again
					</span>
                                        </div>
                                        <span class="m-widget4__ext">
					<span class="m-widget4__number m--font-brand">+$2500</span>
				</span>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="assets/app/media/img/client-logos/logo4.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
					<span class="m-widget4__title">
					StarBucks
					</span><br>
                                            <span class="m-widget4__sub">
					Good Coffee & Snacks
					</span>
                                        </div>
                                        <span class="m-widget4__ext">
				    <span class="m-widget4__number m--font-brand">-$290</span>
				</span>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="assets/app/media/img/client-logos/logo3.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
					<span class="m-widget4__title">
					Phyton
					</span><br>
                                            <span class="m-widget4__sub">
					A Programming Language
					</span>
                                        </div>
                                        <span class="m-widget4__ext">
					<span class="m-widget4__number m--font-brand">+$17</span>
				</span>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="assets/app/media/img/client-logos/logo2.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
					<span class="m-widget4__title">
					GreenMakers
					</span><br>
                                            <span class="m-widget4__sub">
					Make Green Great Again
					</span>
                                        </div>
                                        <span class="m-widget4__ext">
				    <span class="m-widget4__number m--font-brand">-$2.50</span>
				</span>
                                    </div>
                                    <div class="m-widget4__item">
                                        <div class="m-widget4__img m-widget4__img--logo">
                                            <img src="assets/app/media/img/client-logos/logo1.png" alt="">
                                        </div>
                                        <div class="m-widget4__info">
					<span class="m-widget4__title">
					FlyThemes
					</span><br>
                                            <span class="m-widget4__sub">
					A Let's Fly Fast Again Language
					</span>
                                        </div>
                                        <span class="m-widget4__ext">
				    <span class="m-widget4__number m--font-brand">+$200</span>
				</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Authors Profit-->  </div>
                </div>
                <!--End::Section-->                </div>
        </div>


    </div>
    <!-- end:: Body -->


    <!-- begin::Footer -->
    @include('templates.footer')
    <!-- end::Footer -->


</div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->
@include('templates.sidebar')
<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->            <!-- begin::Quick Nav -->
<ul class="m-nav-sticky" style="margin-top: 30px;">
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Layout Builder" data-placement="left">
        <a href="index2b54.html?page=builder&amp;demo=default"><i class="la la-cog"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
           target="_blank"><i class="la la-cart-arrow-down"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
    </li>
</ul>
<!-- begin::Quick Nav -->
<!--begin::Global Theme Bundle -->
<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="assets/app/js/dashboard.js" type="text/javascript"></script>
<!--end::Page Scripts -->

</body>
<!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:05:23 GMT -->
</html>
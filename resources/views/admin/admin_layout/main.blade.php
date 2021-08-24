@include('admin.admin_layout.header')


<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Sidebar-->
@include('admin.admin_layout.topbar')
<!-- END: Sidebar-->

<!-- BEGIN: Main Menu-->
@include('admin.admin_layout.sidebar')
<!-- END: Main Menu-->


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    @yield('content')

</div>
<!-- END: Content-->
@include('admin.admin_layout.footer')

@include('admin.admin_layouts.header')


<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Sidebar-->
@include('admin.admin_layouts.topbar')
<!-- END: Sidebar-->

<!-- BEGIN: Main Menu-->
@include('admin.admin_layouts.sidebar')
<!-- END: Main Menu-->


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">@yield('page-title')</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            {{--                            <li class="breadcrumb-item"><a href="#"></a>--}}
                            {{--                            </li>--}}
                            {{--                            <li class="breadcrumb-item"><a href="#">Form Layouts</a>--}}
                            {{--                            </li>--}}
                            <li class="breadcrumb-item active">@yield('breadcrumb-title')
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">

                    @yield('create-btn')
                    {{--                    <button class="btn btn-info dropdown-toggle mb-1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create Category</button>--}}
                    {{--                    <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar-check mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>--}}
                    {{--                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="content-body">
            @yield('content')
        </div>


    </div>

</div>
<!-- END: Content-->
@include('admin.admin_layouts.footer')

@include('layouts.header')

<body>
<!-- push menu-->
@include('layouts.push')


@include('layouts.navigation')
<!-- End Header Box -->
<!-- Content Box -->
<div class="relative clearfix full-width">


    @yield('content')


</div>
<!-- End Content Box -->

<!-- Footer Box -->
@include('layouts.footer')

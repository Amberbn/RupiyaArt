<!DOCTYPE html>
<html lang="en">

@include('templates.partials._head')

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        @include('templates.partials._nav-top')
        <!-- Left navbar-header -->
        @include('templates.partials._nav-left')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                @include('templates.partials._alert')

                @yield('content')
                <!-- .right-sidebar -->
                @include('templates.partials._sidebar-right')
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Rupiya Art </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!--Script-->
    @include('templates.partials._script')

</body>

</html>

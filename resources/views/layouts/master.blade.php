<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="user-id" content="{{ Auth::id() }}">

    <title> @yield('title')| Website</title>
    <meta content="Management system" name="description" />
    <meta content="Levan J" name="author" />
        
    <!-- Favicons -->
    <link href="{{ URL::asset('assets/images/favicon.ico')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    @include('layouts.head')
</head>
<body data-layout="horizontal" data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layouts.header')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <!-- Start content -->
                <div class="container-fluid">
                    @yield('content')
                </div> <!-- content -->
            </div>
            @include('layouts.footer')
              <a href="javascript:void(0)" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    {{-- right sidebar file here  --}}
    @include('layouts.right-sidebar')

    @include('layouts.vendor-script')
   <script>
      function toggleDraggable() {
        const elements = document.querySelectorAll('.dragbox');
        const button = document.getElementById('toggleBtn');
        const currentDraggableState = elements[0].getAttribute('draggable');

        if (currentDraggableState === 'true') {
            elements.forEach(el => el.setAttribute('draggable', 'false'));
        } else {
            elements.forEach(el => el.setAttribute('draggable', 'true'));
        }

    }

    // Notification Listener function
    function listenForNotifications() {

window.Pusher = require('pusher-js');
window.Echo = require('laravel-echo');

let userId = document.head.querySelector('meta[name="user-id"]').content;
window.Echo = new window.Echo({
    broadcaster: 'pusher',
    key: 'local',
    cluster: 'mt1',
    forceTLS: true
});

window.Echo.private(`App.Models.User.${userId}`)
    .notification((notification) => {
        alert(notification.message);
    });
}
   </script>
</body>

</html>

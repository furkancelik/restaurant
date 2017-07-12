<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="/admin" />

    <title>Restaurant Admin Paneli</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/backend/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/backend/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Restoran Admin Paneli</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <li>
                          <a href="{{ route('admin.order.index') }}"><i class="fa fa-shopping-cart fa-fw"></i> Siparişler</a>
                      </li>
                      <li>
                          <a href="{{ route('admin.config.index') }}"><i class="fa fa-cogs fa-fw"></i> Ayarlar</a>
                      </li>

                      <li>
                          <a href="{{ route('admin.menu-category.index') }}"><i class="fa fa-list-alt fa-fw"></i> Menü Kategorileri</a>
                      </li>

                      <li>
                          <a href="{{ route('admin.menu-detail.index') }}"><i class="fa fa-file-o fa-fw"></i> Menü Detayları</a>
                      </li>

                      <li>
                          <a href="{{ route('admin.our-special.index') }}"><i class="fa fa-cutlery fa-fw"></i> Özel Spesiyaller</a>
                      </li>

                      <li>
                          <a href="{{ route('admin.user.index') }}"><i class="fa fa-users fa-fw"></i> Yöneticiler</a>
                      </li>

                      <li>
                          <a href="{{ route('admin.index') }}"><i class="fa fa-power-off fa-fw"></i> Çıkış Yap</a>
                      </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_title')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @include('backend._error')
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/backend/vendor/metisMenu/metisMenu.min.js"></script>


    <script src="assets/backend/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/backend/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/backend/vendor/datatables-responsive/dataTables.responsive.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="assets/backend/dist/js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
        $(".dataTables_filter").addClass('pull-right');
        $(".dataTables_paginate").addClass('pull-right');

        $("a[data-method='delete']").click(function(){
           var d = confirm("Silmek İstediğinize Eminmisiniz?");
           if (d == false) {
               return false;
           }
           method($(this).attr("href"), {_method: 'DELETE',_token: $('meta[name="csrf-token"]').attr('content') });
           return false;
       });
    });
    function method(path, params, method) {
        method = method || "post"; // Set method to post by default if not specified.

        // The rest of this code assumes you are not using a library.
        // It can be made less wordy if you use one.
        var form = document.createElement("form");
        form.setAttribute("method", method);
        form.setAttribute("action", path);

        for(var key in params) {
            if(params.hasOwnProperty(key)) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);

                form.appendChild(hiddenField);
            }
        }

        document.body.appendChild(form);
        form.submit();
    }
    </script>

</body>

</html>

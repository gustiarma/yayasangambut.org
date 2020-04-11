<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch" id="app">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="/web-admin" class="logo">YG <span>YayasanGambut</span></a></h1>
                <Navbar></Navbar>
                <div class="footer">


                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <router-view></router-view>
        </div>
    </div>

    <script src="{{ mix('js/admin.js') }}"></script>

</body>

</html>

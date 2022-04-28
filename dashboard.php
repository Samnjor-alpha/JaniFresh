<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<title>Dashboard</title>
<?php include 'styles/css.php' ?>
</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <?php include 'navbars/topbar.php' ?>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5">
          <?php include 'navbars/asidebar.php'?>
        </aside>

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white">
                                    <i class="fas fa-hiking"></i>
                                </h1>
                                <h4 class="text-white">Farmers</h4>
                                <h6 class="text-white">100</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white">
                                    <i class="fas fa-user-tag"></i>
                                </h1>
                                <h4 class="text-white">Suppliers</h4>
                                <h6 class="text-white">44</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white">
                                    <i class="fas fa-file-invoice"></i>
                                </h1>
                                <h4 class="text-white">Purchases</h4>
                                <h6 class="text-white">4,484</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white">
                                    <i class="fas fa-user-tie"></i>
                                </h1>
                                <h4 class="text-white">Customers</h4>
                                <h6 class="text-white">7</h6>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

   <?php include 'styles/scripts.php' ?>

</body>

</html>
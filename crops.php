<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Crops</title>
    <?php include 'styles/css.php' ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#addcrop').on('click', function() {

                $("#addcropform").show();
                $("#cancebtn").show();
                $("#croplist").hide();
                $("#addbtn").hide();



            });
            $('#cancelcrop').on('click', function() {

                $("#addcropform").hide();
                $("#cancebtn").hide();
                $("#croplist").show();
                $("#addbtn").show();




            });
            $('#insertcrop').on('click', function() {

                $("#addcropform").hide();
                $("#cancebtn").hide();
                $("#croplist").show();
                $("#addbtn").show();




            });
            $('#add_new').on('click', function() {

                $("#addcropform").show();
                $("#cancebtn").show();
                $("#croplist").hide();
                $("#addbtn").hide();



            });
        });
    </script>
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

        <div class="page-breadcrumb mt-1">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Crops</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Crops</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <div class="float-right" id="addbtn">
                        <button id="addcrop" class="btn btn-success text-white">Add Crops</button>
                    </div>
                    <div class="float-right" id="cancebtn" style="display:none;">
                        <button  id="cancelcrop" class="btn btn-danger text-white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="card" id="croplist">
                <div class="card-body">
                    <h5 class="card-title">All Crops</h5>

                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Crop</th>
                                <th>Category</th>
                                <th>Season</th>
                                <th>Remarks</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>French Beans</td>
                                <td>Quartely</td>
                                <td>All year</td>
                                <td>No remarks</td>
                                <td>2011/04/25</td>
                                <td><span><i class="far fa-edit text-success"></i></span> | <span><i class="fas fa-minus-circle text-danger"></i></span></td>
                            </tr>


                        </table>
                    </div>

                </div>
            </div>
            <div class="card" id="addcropform" style="display:none">
                <div class="card-body">
                    <h5 class="card-title">Add Crops</h5>
                    <form class="">
                        <div class="row">
                            <div class="col-6">
                                <label for="fname">Crop Name</label>
                                <input id="fname" type="text" class="form-control" placeholder="Crop Name">

                            </div>
                            <div class="col-6">
                                <label for="lname">Category</label>

                                <select id="farm" class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option disabled selected>Select</option>

                                    <option value="AK">Quartely</option>
                                    <option value="HI">Semi-Annual</option>
                                    <option value="HI">Biennial</option>


                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-6">
                                <label for="fsize">Duration to harvest (in Months)</label>
                                <div class="input-group">

                                    <input  id="fsize" type="text" class="form-control" placeholder="2"
                                            aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Months</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row align-center">
                                <div class="col-6">
                                    <label for="editor">Remarks</label>
                                    <textarea id="editor" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <input id="insertcrop" class="btn btn-outline-primary" type="submit" value="Add Crop">
                                </div>
                                <div class="col-6">
                                    <input id="add_new" class="btn btn-primary"  value="Save & New">
                                </div>
                            </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

</div>

<?php include 'styles/scripts.php' ?>

</body>

</html>
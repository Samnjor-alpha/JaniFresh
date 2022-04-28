<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Farmers</title>
    <?php include 'styles/css.php' ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#addfarmer').on('click', function() {

                    $("#addfarmerform").show();
                $("#cancebtn").show();
                    $("#farmerlist").hide();
                $("#addbtn").hide();



            });
            $('#cancelfarmer').on('click', function() {

                $("#addfarmerform").hide();
                $("#cancebtn").hide();
                $("#farmerlist").show();
                $("#addbtn").show();




            });
            $('#insertfarmer').on('click', function() {

                $("#addfarmerform").hide();
                $("#cancebtn").hide();
                $("#farmerlist").show();
                $("#addbtn").show();




            });
            $('#add_new').on('click', function() {

                $("#addfarmerform").show();
                $("#cancebtn").show();
                $("#farmerlist").hide();
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
                    <h4 class="page-title">Farmers</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Farmers</li>
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
                     <button id="addfarmer" class="btn btn-success text-white">Add Farmer</button>
                    </div>
                    <div class="float-right" id="cancebtn" style="display:none;">
                        <button  id="cancelfarmer" class="btn btn-danger text-white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="card" id="farmerlist">
                <div class="card-body">
                    <h5 class="card-title">All Farmers</h5>

                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Region/Farm</th>
                                <th>Code</th>
                                <th>Farmer</th>
                                <th>Farm size</th>
                                <th>Date Registered</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tana River</td>
                                <td>WM-001</td>
                                <td>Billy Daniel</td>
                                <td>0.5 Ha</td>
                                <td>2011/04/25</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td><span><i class="far fa-edit text-success"></i></span> | <span><i class="fas fa-minus-circle text-danger"></i></span></td>
                            </tr>


                        </table>
                    </div>

                </div>
            </div>
            <div class="card" id="addfarmerform" style="display:none">
                <div class="card-body">
                    <h5 class="card-title">Add Farmer</h5>
                    <form class="">
<div class="row">
    <div class="col-6">
        <label for="fname">First Name</label>
            <input id="fname" type="text" class="form-control" placeholder="First Name">

    </div>
    <div class="col-6">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Last Name">
    </div>
</div>
                        <div class="row">
                            <div class="col-6">
                                <label for="farm">Farm/Region</label>
                                <select id="farm" class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option disabled selected>Select</option>

                                        <option value="AK">Machakos</option>
                                        <option value="HI">Kibwezi</option>


                                </select>

                            </div>
                            <div class="col-6">
                                <label for="fsize">Farm Size (in Hectares)</label>
                                <div class="input-group">

                                    <input  id="fsize" type="text" class="form-control" placeholder="5.000"
                                           aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Ha</span>
                                    </div>
                                </div>
                        </div>
                            <div class="row">
                                <div class="col-6">
                                <label for="dateregistred">Date registered</label>
                                <div class="input-group">
                                    <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                                <div class="col-6">
                                    <label for="lname">Code ID</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Code ID">
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
                                    <input id="insertfarmer" class="btn btn-outline-primary" type="submit" value="Add Farmer">
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
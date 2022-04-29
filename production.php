<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Production</title>
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
                    <h4 class="page-title">Production</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Production</li>
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
                        <button id="addfarmer" class="btn btn-success text-white">New Planting</button>
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
                    <form id="example-form" action="#" class="mt-5">
                        <div>
                            <h3>Planting</h3>
                            <section>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="farm">Farmer</label>
                                        <select id="farm" class="form-control   form-select shadow-none"
                                                style="width: 100%; height:36px;">
                                            <option disabled selected>Select</option>

                                            <option>Farmer 1</option>
                                            <option>Farmer 2    </option>


                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Lot Number</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Block No</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Block Size</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="farm">Crop</label>
                                        <select id="farm" class="form-control   form-select shadow-none"
                                                style="width: 100%; height:36px;">
                                            <option disabled selected>Select</option>

                                            <option>Crop 1</option>
                                            <option>Crop 2    </option>


                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Crop Variety</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Seed quality</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Seed Rate</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">

                                            <label for="dateregistred">Planting Date</label>
                                            <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-3">

                                            <label for="dateregistred">Expected Harvest</label>
                                            <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Weather Condition</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Previous Crop</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                </div>

                            </section>
                            <h3>Fertilizer</h3>
                            <section>
                                <div class="row">
                                    <div class="col-3">

                                        <label for="dateregistred">Planting Date</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-3">

                                        <label for="dateregistred">Fertilizer</label>
                                        <input id="dateregistred" type="text" class="form-control mydatepicker">


                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Composition</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Rate per Ha</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">

                                        <label for="dateregistred">Recommended</label>
                                        <input id="dateregistred" type="text" class="form-control mydatepicker" >


                                    </div>
                                    <div class="col-3">

                                        <label for="dateregistred">Quantity</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker">


                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Method</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Tool</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">

                                        <label for="dateregistred">Operator</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-4">

                                        <label for="dateregistred">Technician</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-4">
                                        <label for="userName">Remarks</label>
                                        <textarea id="userName" name="userName" type="text" class="form-control"></textarea>
                                    </div>

                                </div>
                            </section>
                            <h3>Pesticides</h3>
                            <section>
                                <div class="row">
                                    <div class="col-3">

                                        <label for="dateregistred">Planting Date</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-3">

                                        <label for="dateregistred">Pesticide</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Justification</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Active ingredient</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">

                                        <label for="dateregistred">Dose per Ha</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker">


                                    </div>
                                    <div class="col-3">

                                        <label for="dateregistred">Application  rate</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker">


                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Recommended quantiy</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Quantity</label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">

                                        <label for="dateregistred">Water</label>
                                        <input id="dateregistred" type="text" class="form-control mydatepicker" >


                                    </div>
                                    <div class="col-3">

                                        <label for="dateregistred">Equipment</label>
                                        <input id="dateregistred" type="text" class="form-control mydatepicker">


                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Start time</label>
                                        <input id="userName" name="userName" type="time" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">End time</label>
                                        <input id="userName" name="userName" type="time" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">

                                        <label for="dateregistred">Operator</label>
                                        <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-3">

                                        <label for="dateregistred">REI</label>
                                        <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-3">
                                        <label for="userName">Weather </label>
                                        <input id="userName" name="userName" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label for="userName">PHI</label>
                                        <input id="userName" name="userName" type="week" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">

                                        <label for="dateregistred">clear Date</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-4">

                                        <label for="dateregistred">Technician</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-4">
                                        <label for="userName">Remarks</label>
                                        <textarea id="userName" name="userName" type="text" class="form-control"></textarea>
                                    </div>

                                </div>
                            </section>
                            <h3>Scouting</h3>
                            <section>
                                <div class="row">
                                    <div class="col-6">

                                        <label for="dateregistred">Date</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-6">

                                        <label for="dateregistred">Scouting By</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-4">

                                        <label for="dateregistred">Recommended date</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-4">

                                        <label for="dateregistred">Active ingredient</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-4">
                                        <label for="userName">Remarks</label>
                                        <textarea id="userName" name="userName" type="text" class="form-control"></textarea>
                                    </div>

                                </div>
                            </section>
                            <h3>Harvesting</h3>
                            <section>
                                <div class="row">
                                    <div class="col-6">

                                        <label for="dateregistred">Date</label>
                                        <input id="dateregistred" type="date" class="form-control mydatepicker" placeholder="mm/dd/yyyy">


                                    </div>
                                    <div class="col-6">

                                        <label for="dateregistred">Quantity</label>
                                        <input id="dateregistred" type="text" class="form-control mydatepicker">


                                    </div>


                                </div>
                            </section>

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
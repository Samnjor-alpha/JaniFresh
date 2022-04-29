<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Farms</title>
    <?php include 'styles/css.php' ?>
<!--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#addfarm').on('click', function() {

                $("#addfarmform").show();
                $("#cancebtn").show();
                $("#farmlist").hide();
                $("#addbtn").hide();



            });
            $('#cancelfarm').on('click', function() {

                $("#addfarmform").hide();
                $("#cancebtn").hide();
                $("#farmlist").show();
                $("#addbtn").show();




            });
            $('#insertfarm').on('click', function() {

                $("#addfarmform").hide();
                $("#cancebtn").hide();
                $("#farmlist").show();
                $("#addbtn").show();




            });
            $('#add_new').on('click', function() {

                $("#addfarmform").show();
                $("#cancebtn").show();
                $("#farmlist").hide();
                $("#addbtn").hide();



            });
        });

        $('#vehicle').css('display','block'); // Hide the text input box in default
        function myFunction() {
            if($('#owned').prop('checked')) {
                $('#leaser').css('display','none');
            } else {
                $('#leasebtn').show();
                $('#ownedbtn').hide();
                $('#leaser').show();
            }
        }
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
                    <h4 class="page-title">Farms</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Farms</li>
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
                        <button id="addfarm" class="btn btn-success text-white">Add Farm</button>
                    </div>
                    <div class="float-right" id="cancebtn" style="display:none;">
                        <button  id="cancelfarm" class="btn btn-danger text-white">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="card" id="farmlist">
                <div class="card-body">
                    <h5 class="card-title">All Farms</h5>
                    <div id="map_canvas" style="width:100%; height:400px"></div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table-responsive">
                                           <tbody>
                            <tr>
                                <td  width="20%">
                                    <img src="https://via.placeholder.com/125x100">

                                </td>
                                <td  width="40%">
                                    <h5>Company Farm: Machakos</h5>
                                    <p>Size: 1 Hectare</p>


                                </td>

                                <td width="30%">
                                    <h5>Company Farm: Machakos</h5>
                                    <p>Size: 1 Hectare</p>


                                </td>
                                <td>
                                    <button class="btn btn-success text-white">Edit Farm</button>
                                </td>
                            </tr>


                        </table>
                    </div>

                </div>
            </div>
            <div class="card" id="addfarmform" style="display:none">
                <div class="card-body">
                    <h5 class="card-title">Add Farm</h5>
                    <form class="">
                        <div class="row">

                        <div class="form-group" id="ownedbtn">
                            <input  type="checkbox" value="owned"  checked onchange="myFunction()" name="general" class="form-check-input"    id="owned">
                            <label for="owned">Own Land</label>
                        </div>


                        <div class="form-group" id="leasebtn" style="display: none">
                            LEASE LAND
                        </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="fname">Farm Name</label>
                                <input id="fname" type="text" class="form-control" placeholder="Farm Name">

                            </div>
                            <div class="col-4">
                                <label for="fname">Farm Size (Acres)</label>
                                <input id="fname" type="text" class="form-control" placeholder="Farm size">

                            </div>
                            <div class="col-4">
                                <label for="fname">Arable Acres</label>
                                <input id="fname" type="text" class="form-control" placeholder="Arable Acres">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="fname">Location</label>
                                <input id="fname" type="text" class="form-control" placeholder="Location">

                            </div>
                            <div class="col-4">
                                <label for="fname">Latitude</label>
                                <input id="fname" type="text" class="form-control" placeholder="Latitude">

                            </div>
                            <div class="col-4">
                                <label for="fname">Longitude</label>
                                <input id="fname" type="text" class="form-control" placeholder="Longitude">

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="fname">Climate</label>
                                <select class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option selected disabled>Select climate</option>

                                        <option value="AK">Hot & Dry</option>
                                        <option value="HI">Cool & Wet</option>


                                </select>

                            </div>
                            <div class="col-4">
                                <label for="fname">Terrain</label>
                                <select class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option selected disabled>Select Terrain</option>

                                    <option value="AK">Flat</option>
                                    <option value="HI">Hilly</option>


                                </select>

                            </div>
                            <div class="col-4">
                                <label for="fname">Soil Type</label>
                                <select class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option selected disabled>Select Soil</option>

                                    <option value="AK">Loam</option>
                                    <option value="HI">Black Cotton</option>


                                </select>
                            </div>

                        </div>

                        <div id="leaser" style="display: none">
                        <div class="row">
                            <div class="col-4">
                                <label for="fname">Leaser</label>
                                <select class="select2 form-select shadow-none"
                                        style="width: 100%; height:36px;">
                                    <option selected disabled>Select Land Leaser</option>

                                    <option value="AK">Leaser 1</option>
                                    <option value="HI">Leaser 2</option>


                                </select>

                            </div>
                            <div class="col-4">
                                <label for="dateregistred">Start Date</label>
                                <div class="input-group">
                                    <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-4">
                                <label for="dateregistred">End Date</label>
                                <div class="input-group">
                                    <input id="dateregistred" type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
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
                                    <input id="insertfarm" class="btn btn-outline-primary" type="submit" value="Add Farm">
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
<script src="assets/map.js"></script>
<script>
    lat = "-1.518430"
    lon = "37.266900"
    var mapOptions = {
        center: new google.maps.LatLng(lat,lon),
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
</script>
</body>

</html>
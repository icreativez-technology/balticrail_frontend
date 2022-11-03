<?php
$pg = 'Inventory Management';
$title = "Inventory Management Edit";
include('header.php');
include('sidebar.php');
?>


<div class="app-content content dashboard">
    <div class="content-wrapper content-wrapper-2">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <h1 class="ml-1 main-heading">Store</h1>

                            </div>
                            <div class="col-lg-6">
                                <h2 class="sub-heading mt-2 ml-1">Inventory Edit</h2>
                            </div>
                            <div class="col-lg-6 text-left text-lg-right">
                                <h2 class="sub-heading mt-2 ml-1">Product ID: B8272</h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="white-div p-3 p-xl-5 border-20">
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label class="custom-label mb-2">Base Image<span class="red-star">*</span>:</label>
                        </div>
                        <div class="offset-lg-1 col-lg-11 offset-xl-2 col-xl-10">
                            <div class="sales-person mb-2 mb-md-0">
                                <div class="img-box">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                </div>
                                <div class="icon-box mt-1 ">
                                    <div class="file">
                                        <input type="file" name="">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    </div>


                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label class="custom-label mb-2">Secondary Images0<span class="red-star">*</span>:</label>
                        </div>
                        <div class="offset-lg-1 col-lg-11 offset-xl-2 col-xl-10">
                            <div class="multi-element">
                                <div class="sales-person mr-1 mb-2 mb-md-0">
                                    <div class="img-box">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="icon-box mt-1">
                                        <div class="file">
                                            <input type="file" name="">
                                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        </div>


                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="sales-person mr-1 mb-2 mb-md-0">
                                    <div class="img-box">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="icon-box mt-1">
                                        <div class="file">
                                            <input type="file" name="">
                                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        </div>


                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="sales-person mb-2 mb-md-0">
                                    <div class="img-box">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="icon-box mt-1">
                                        <div class="file">
                                            <input type="file" name="">
                                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        </div>


                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label class="custom-label mb-2">Select Category<span class="red-star">*</span>:</label>
                        </div>
                        <div class="offset-lg-1 col-lg-11 offset-xl-2 col-xl-10 inventory-filter-box">
                            <select name="" id="" class="general-select box-shadow-select">
                                <option value="">All Categories</option>
                                <option value="">abc</option>
                                <option value="">abc</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label class="custom-label mb-2">Specifications<span class="red-star">*</span>:</label>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="" id="" rows="5" class="general-textarea" placeholder="Enter Description Here"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label class="custom-label mb-2">Stock Availability<span class="red-star">*</span>:</label>
                        </div>
                        <div class="offset-lg-1 col-lg-11 offset-xl-2 col-xl-10 inventory-filter-box">
                            <select name="" id="" class="general-select box-shadow-select">
                                <option value="">In-Stock</option>
                                <option value="">Out of Stock</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label class="custom-label mb-4">Enter Title & Price<span class="red-star">*</span>:</label>
                        </div>
                        <div class="col-md-6 inventory-filter-box mb-2 mb-md-0">
                            <label class="custom-label mb-1 ml-2 d-block">Name<span class="red-star">*</span>:</label>
                            <input type="text" name="" class="general-input" id="" placeholder="Enter Title">
                        </div>
                        <div class="col-md-6 inventory-filter-box mb-3">
                            <label class="custom-label mb-1 ml-2 d-block">Price<span class="red-star">*</span>:</label>
                            <input type="text" name="" class="general-input" id="" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="white-div p-2 p-xl-5 border-20 box-shadow-select">
                        <div class="row mb-4">
                            <div class="col-lg-12 mb-3">
                                <h2 class="sub-heading">Set Variation</h2>
                            </div>
                            <div class="col-md-6 inventory-filter-box mb-2 mb-md-0">
                                <label class="custom-label mb-1 ml-2 d-block">Name<span class="red-star">*</span>:</label>
                                <input type="text" name="" class="general-input" id="" placeholder="Enter Title">
                            </div>
                            <div class="col-md-6 inventory-filter-box mb-3">
                                <label class="custom-label mb-1 ml-2 d-block">Price<span class="red-star">*</span>:</label>
                                <input type="text" name="" class="general-input" id="" placeholder="Enter Price">
                            </div>
                            <div class="col-md-6 inventory-filter-box mb-3">
                                <input type="text" name="" class="general-input" id="" placeholder="Enter Label">
                            </div>
                            <div class="col-md-12 inventory-filter-box">
                                <div class="store-desp">
                                    <a href="#_" class="profile-general-btn d-block d-sm-inline-block">Add New Row</a>
                                    <a href="#_" class="general-btn-brown mt-2 mt-sm-0 ml-0 ml-sm-2 d-block d-sm-inline-block">Add New Option</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <label class="custom-label mb-2">Status</label>
                            </div>
                            <div class="col-xl-12 inventory-filter-box">
                                <select name="" id="" class="general-select box-shadow-select">
                                    <option value="">In Active</option>
                                    <option value="">In-active</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 inventory-filter-box">
                                <div class="store-desp">
                                    <a href="#_" class="profile-general-btn d-inline-block">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <a href="#_" class="profile-general-btn d-inline-block ml-2 ml-xl-5" data-target="#Updated" data-toggle="modal">Update</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<div class="modal fade" id="Updated" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="fa fa-times-circle close" data-dismiss="modal" aria-label="Close"></i>
            <div class="svg-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="85.094" height="85.094" viewBox="0 0 85.094 85.094">
                    <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M85.657,43.11A42.547,42.547,0,1,1,43.11.563,42.547,42.547,0,0,1,85.657,43.11ZM38.188,65.638,69.756,34.071a2.745,2.745,0,0,0,0-3.882l-3.882-3.882a2.745,2.745,0,0,0-3.882,0L36.247,52.051,24.228,40.032a2.745,2.745,0,0,0-3.882,0l-3.882,3.882a2.745,2.745,0,0,0,0,3.882L34.306,65.638A2.745,2.745,0,0,0,38.188,65.638Z" transform="translate(-0.563 -0.563)" fill="#10b10a" />
                </svg>
            </div>
            <h5 class="mt-1 mb-3">Product Has Been Updated Successfully</h5>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
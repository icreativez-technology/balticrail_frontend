<?php
$pg = 'Category Management';
$title = "Category Management Add";
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
                        <div class="row mb-2 align-items-center">
                            <div class="col-12">
                                <h1 class="main-heading">Store</h1>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <h2 class="sub-heading">Category Management</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="white-div border-20 p-3 p-lg-5">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-lg-6 col-xl-4">
                                            <label class="custom-label mb-2 mb-lg-0">Category Name<span class="red-star">*</span>:</label>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="form-group form-group-sale-person position-relative">
                                                <input type="text" class="form-control custom-input w-90" placeholder="Enter Category Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-4">
                                        <div class="col-lg-6 col-xl-4">
                                            <label class="custom-label mb-2 mb-lg-0">Category Name<span class="red-star">*</span>:</label>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="category-select">
                                                <select type="text" class="general-select box-shadow-select w-100">
                                                    <option>Active</option>
                                                    <option>In-Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <a href="#_" class="profile-general-btn d-inline-block" data-target="#Updated" data-toggle="modal">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
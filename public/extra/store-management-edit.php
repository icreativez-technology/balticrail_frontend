<?php
$pg = 'Store';
$title = "Store Management Edit";
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
                                <h2 class="sub-heading mt-2 ml-1">Rogers Store</h2>
                            </div>
                            <div class="col-lg-6 text-left text-lg-right">
                                <h2 class="sub-heading mt-2 ml-1">Vendor Id: 8wy6</h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="white-div p-3 p-xl-5 border-20">
                    <div class="row">
                        <div class="col-md-12 pl-xl-5">
                            <div class="roger-store-image">
                                <img src="images/user-profile.png" alt="" class="user-proffile">
                                <h2 class="sub-heading mt-2 ml-1">Joshua Kimic</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 pl-xl-5">
                            <div class="roger-upload-file-image">
                                <img src="./images/roger-upload-image.png" alt="">
                                <span><i class="fa fa-times-circle"></i></span>
                            </div>
                            <div class="roger-upload-file my-3">
                                <input type="file" name="" id="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36.021" height="30.002" viewBox="0 0 36.021 30.002">
                                    <g id="Icon_feather-upload-cloud" data-name="Icon feather-upload-cloud" transform="translate(0.014 -2.998)">
                                        <path id="Path_2771" data-name="Path 2771" d="M24,24l-6-6-6,6" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        <path id="Path_2772" data-name="Path 2772" d="M18,18V31.5" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        <path id="Path_2773" data-name="Path 2773" d="M30.585,27.585A7.5,7.5,0,0,0,27,13.5H25.11A12,12,0,1,0,4.5,24.45" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        <path id="Path_2774" data-name="Path 2774" d="M24,24l-6-6-6,6" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                    </g>
                                </svg>

                                <span class="">Select File</span>
                            </div>
                        </div>
                        <div class="col-lg-10 pl-xl-5 my-2">
                            <div class="store-desp">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et </p>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-xl-5 my-2">
                            <div class="store-desp">
                                <a href="#_" class="profile-general-btn d-inline-block" data-toggle="modal" data-target="#SuccessfullyApprove">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<div class="modal fade" id="SuccessfullyApprove" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="fa fa-times-circle close" data-dismiss="modal" aria-label="Close"></i>
            <div class="svg-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="85.094" height="85.094" viewBox="0 0 85.094 85.094">
                    <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M85.657,43.11A42.547,42.547,0,1,1,43.11.563,42.547,42.547,0,0,1,85.657,43.11ZM38.188,65.638,69.756,34.071a2.745,2.745,0,0,0,0-3.882l-3.882-3.882a2.745,2.745,0,0,0-3.882,0L36.247,52.051,24.228,40.032a2.745,2.745,0,0,0-3.882,0l-3.882,3.882a2.745,2.745,0,0,0,0,3.882L34.306,65.638A2.745,2.745,0,0,0,38.188,65.638Z" transform="translate(-0.563 -0.563)" fill="#10b10a" />
                </svg>
            </div>
            <h5 class="mt-1 mb-3">Signup Request Has Been Approved Successfully</h5>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
<?php
$pg = 'Store';
$title = "Store Management View";
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
                        <div class="col-lg-10 pl-xl-5">
                            <div class="roger-upload-image">
                                <img src="./images/store-img.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 pl-xl-5 my-2">
                            <div class="store-desp">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et </p>
                            </div>
                        </div>
                        <div class="col-lg-12 pl-xl-5 my-2">
                            <div class="store-desp">
                                <a href="store-management-edit.php" class="profile-general-btn d-inline-block">Edit Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="block" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <img src="images/question.png" alt="">
                <p class="modal-heading">System Message</p>
                <p class="modal-text">Are you sure you want to block this user ?</p>
                <div class="modal-btn-div">
                    <a class="general-btn d-inline-block px-3 mr-1" href="#_" data-toggle="modal" data-target="#userblocked" data-dismiss="modal" aria-label="Close">Yes</a>
                    <a class="general-btn d-inline-block px-3 ml-1" data-dismiss="modal" aria-label="Close">No</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="userblocked" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="fas fa-times close modal-close" data-dismiss="modal" aria-label="Close"></i>
            <div class="text-center">
                <img src="images/tick.png" alt="">
                <p class="modal-heading">System Message</p>
                <p class="modal-text">This user has been blocked</p>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<?php include('footer.php') ?>
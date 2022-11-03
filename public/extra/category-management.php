<?php
$pg = 'Category Management';
$title = "Category Management";
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
                            <div class="col-lg-7 col-xl-8 ">
                                <h1 class="main-heading">Store</h1>
                            </div>
                            <div class="col-lg-5 col-xl-4 text-left text-lg-right">
                                <a href="category-management-add.php" class="general-btn d-inline-block">Add</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="sub-heading">Category Management</h2>
                            </div>
                        </div>
                        <div class="dataTables_wrapper">
                            <div class="user-listing-top">
                            <div class="row align-items-end d-flex mb-2">
                                    <div class="col-lg-6 mt-2 sort-datepicker">
                                        <div class="d-sm-flex align-items-center">
                                            <label class="">Sort by:</label>
                                            <div class="input-wrap mr-0 mr-sm-2 mb-2 mb-sm-0">
                                                <input type="date" placeholder="From" class="form-control" />
                                            </div>
                                            <div class="input-wrap">
                                                <input type="date" placeholder="To" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-2 text-left text-lg-right">
                                        <a href="#_" class="general-btn d-inline-block">Apply/Clear</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
                                        <div class="dataTables_length">
                                            <label class="d-inline-block">Show</label>
                                            <select class="form-control d-inline-block table-entry">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            <label class="d-inline-block ml-1">Entries</label>

                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mt-2 mt-md-0 d-md-flex d-block justify-content-start justify-content-md-end align-items-center">
                                        <div class="dataTables_filter">
                                            <div class="search-wrap">
                                                <input type="search" class="form-control" placeholder="Search" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-table">
                                <div class="main-tabble table-responsive">
                                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-borderless dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th class="sorting_asc">S. No.</th>
                                                            <th class="sorting">Category</th>
                                                            <th class="sorting">No Of Projects</th>
                                                            <th class="sorting">Status</th>
                                                            <th class="sorting_asc">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="">01</td>
                                                            <td>ABC Category</td>
                                                            <td>00</td>
                                                            <td>
                                                                <div class="btn-group ml-1">
                                                                    <button type="button" class="btn dropdown-toggle actve-btn" data-toggle="dropdown">
                                                                        Active <i class="fas fa-sort-down"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <p class="dropdown-item mb-0" data-toggle="modal" data-target="#InActive">In-Active</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="btn-group ml-1">
                                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="category-management-edit.php"><i class="fa fa-edit"></i>Edit</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="">01</td>
                                                            <td>ABC Category</td>
                                                            <td>00</td>
                                                            <td>
                                                                <div class="btn-group ml-1">
                                                                    <button type="button" class="btn dropdown-toggle inactve-btn" data-toggle="dropdown">
                                                                        In-Active <i class="fas fa-sort-down"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <p class="dropdown-item mb-0" data-toggle="modal" data-target="#active">Active</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="btn-group ml-1">
                                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                        <i class="fa fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="category-management-edit.php"><i class="fa fa-edit"></i>Edit</a>
                                                                    </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="showing-result" id="DataTables_Table_0_info">
                                                    Showing 1 to 3 of 3 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="DataTables_Table_0_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled">
                                                            <a href="#" class="page-link">Previous</a>
                                                        </li>
                                                        <li class="paginate_button page-item active">
                                                            <a href="#" class="page-link">01</a>
                                                        </li>
                                                        <li class="paginate_button page-item">
                                                            <a href="#" class="page-link">02</a>
                                                        </li>
                                                        <li class="paginate_button page-item">
                                                            <a href="#" class="page-link">03</a>
                                                        </li>
                                                        <li class="paginate_button page-item next disabled" i="">
                                                            <a href="#" class="page-link">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
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



<div class="modal fade" id="InActive" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content site-modal">
            <i class="fa fa-times-circle close" data-dismiss="modal" aria-label="Close"></i>
            <div class="svg-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="89.53" height="89.53" viewBox="0 0 89.53 89.53">
                    <path id="Icon_awesome-question-circle" data-name="Icon awesome-question-circle" d="M90.092,45.327A44.765,44.765,0,1,1,45.327.563,44.762,44.762,0,0,1,90.092,45.327ZM46.529,15.364c-9.837,0-16.111,4.144-21.038,11.509a2.169,2.169,0,0,0,.49,2.935l6.263,4.749a2.165,2.165,0,0,0,3.008-.383c3.225-4.09,5.436-6.461,10.343-6.461,3.688,0,8.249,2.373,8.249,5.949,0,2.7-2.232,4.091-5.873,6.133-4.246,2.38-9.865,5.343-9.865,12.754v.722a2.166,2.166,0,0,0,2.166,2.166H50.381a2.166,2.166,0,0,0,2.166-2.166v-.241c0-5.137,15.015-5.351,15.015-19.254C67.563,23.306,56.7,15.364,46.529,15.364Zm-1.2,44.765a8.3,8.3,0,1,0,8.3,8.3A8.312,8.312,0,0,0,45.327,60.129Z" transform="translate(-0.563 -0.563)" fill="#644193" />
                </svg>
            </div>
            <h5 class="mt-1">Are You Sure You Want To In-Active This Category ?</h5>
            <div class="modal-btn-div text-center mt-1">
                <a class="general-btn-brown d-inline-block mr-2" data-dismiss="modal" data-target="#Updated" data-toggle="modal">Yes</a>
                <a class="general-btn-purple d-inline-block" data-dismiss="modal" aria-label="Close">No</a>
            </div>
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
            <h5 class="mt-1 mb-3">Category Has Been In-Activated Successfully</h5>
        </div>
    </div>
</div>


<?php include('footer.php') ?>
<?php
require 'views/admin/partials/header.view.php';
require 'utils/utils.php';
?>

<body class="left-side-menu-dark topbar-light">

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <?php
    require 'views/admin/partials/topbar.view.php'
    ?>
    <!-- end Topbar -->


    <!-- ========== Left Sidebar Start ========== -->
    <?php
    include 'views/admin/partials/sidebar.view.php';
    ?>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Rooms</a></li>
                                    <li class="breadcrumb-item active">List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">List Rooms</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <p class="sub-header">
                                <a href="admin.php?controller=users&action=create"
                                   class="float-right font-weight-bold mb-2"><i class="mdi mdi-plus"></i>Add Room
                                </a>
                            </p>
                            <table class="table table-striped mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    while ($row = $rooms->fetch_assoc()) {
                                        $count+=1;
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count ?></th>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['type'] ?></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td><?php echo strLimit($row['description']) ?></td>
                                        <td>
                                            <?php
                                            if ($row['status'] == 1) {
                                                ?>
                                                <span class="badge badge-success mr-1">Available</span>
                                                <?php
                                            } else {
                                                ?>
                                                <span class="badge badge-secondary mr-1">Unavailable</span>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo formatDate($row['created_at']) ?></td>
                                        <td>
                                            <a href="admin.php?controller=rooms&action=view&id=<?php echo $row['id'] ?>"
                                            class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="admin.php?controller=rooms&action=edit&id=<?php echo $row['id'] ?>"
                                            class="btn btn-success waves-effect waves-light"><i class="mdi mdi-lead-pencil"></i>
                                            </a>
                                            <a href="admin.php?controller=rooms&action=delete&id=<?php echo $row['id'] ?>"
                                            class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>

                    </div>

                </div>




            </div>

        </div> <!-- end content -->


        <?php include 'views/admin/partials/footer.view.php'; ?>

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->


<!-- Vendor js -->
<script src="assets/admin/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/admin/js/app.min.js"></script>

</body>
</html>

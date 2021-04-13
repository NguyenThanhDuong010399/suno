<?php 
    session_start();
    if(!isset($_SESSION['email'])) {
        echo 
        "
            <script type='text/javascript'>
                window.alert('Bạn không có quyền truy cập!');
            </script>
        ";

        // Chuyển người dùng vào trang đăng nhập
        echo 
        "
            <script type='text/javascript'>
                window.location.href = '/btl/admin/dang_nhap.php'
            </script>
        ";
    }

?>
<!DOCTYPE html>
<html>

<head>
    <?php include( 'includes/head.php') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include( 'includes/header.php') ?>

        <?php include( 'includes/sidebar.php') ?>

        <?php include( 'includes/ket_noi.php') ?>
         
        <?php
            $sql_san_pham = mysqli_query($ket_noi, "select * from tbl_san_pham");
            $so_san_pham = mysqli_num_rows($sql_san_pham);

            $sql_don_hang = mysqli_query($ket_noi, "select * from tbl_bill");
            $so_don_hang = mysqli_num_rows($sql_don_hang);

            // $sql_lien_he = mysqli_query($ket_noi, "select * from tbl_bo_suu_tap");
            // $so_lien_he = mysqli_num_rows($sql_lien_he);
            
            $sql_khach_hang = mysqli_query($ket_noi, "select * from tbl_customer");
            $so_khach_hang = mysqli_num_rows($sql_khach_hang);
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo $so_don_hang ?></h3>

                                    <p>Đơn hàng</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="/btl/admin/don_hang/danh_sach.php" class="small-box-footer"> Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <!-- <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <!-- <div class="small-box bg-success">
                                <div class="inner">
                                     <h3><?php echo $so_lien_he ?></h3> 

                                    <p>Blog</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/btl/admin/bo_su_tap/danh_sach.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div> -->
                        <!-- </div> -->
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?php echo $so_khach_hang ?></h3>

                                    <p>Khách hàng</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/btl/admin/khach_hang/danh_sach.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php echo $so_san_pham ?></h3>

                                    <p>Sản phẩm</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="/btl/admin/san_pham/danh_sach.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Line Series</h3>
                        </div>
                        <div class="panel-body">
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
                

            </div>
            
        </div>
    </div>
    <!-- ./wrapper -->

    <?php include( 'includes/footer.php') ?>
</body>
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
        var data2 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
        var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
        var data4 = [13, 19, 112, 114, 212, 332, 435, 132, 67, 45, 55, 7];
            
        $("#chart1").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: ""
                }
            },
            dataSeries: [{
                seriesType: "line",
                data: data1
            }]
        });
    });
</script>
</html>

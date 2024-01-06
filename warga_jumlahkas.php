<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iuran Kas RT | Kelompok 11</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="admin_dashboard.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/wallpaper.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-5" style="opacity: .8">
                <span class="brand-text font-weight-light">RT FINANCEHUB</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/warga.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="warga_dashboard.php" class="d-block">WARGA</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item">
                                    <a href="warga_dashboard.php" class="nav-link">
                                        <i class="nav-icon fas fa-home"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="warga_jumlahkas.php" class="nav-link">
                                        <i class="nav-icon fas fa-cash-register"></i>
                                        <p>
                                            Jumlah Kas
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            Logout
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard Warga</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Iuran Perumahan Kwangya</h3>
                    </div>
                    <div>
                        <form action="warga_jumlahkas.php" method="GET" enctype="multipart/form-data">
                            <div class="row justify-content-start mx-3 mt-3">

                                <div class="col-4">
                                    <select class="form-select btn-block" style="border-radius: 10px;" name="tahun" aria-label="Default select example">
                                        <option selected>Pilih Tahun</option>
                                        <?php
                                        include "koneksi.php";
                                        $query = mysqli_query($conn, "SELECT DATE_FORMAT(tanggal, '%Y') as tahun FROM iuran GROUP BY tahun");
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $data['tahun']; ?>"><?php echo $data['tahun']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-1">
                                    <button type="submit" id="submit" class="btn btn-light text-primary fw-semibold" name="submit"><i class="fa fa-search"></i></button>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>Bulan</th>
                                    <th>Uang Kas</th>
                                    <th>Uang Sampah</th>
                                    <th>Sumbangan</th>
                                    <th>Total</th>
                                </tr>
                                <?php
                                $tahun = NULL;
                                if (isset($_GET['tahun'])) {
                                    $tahun = $_GET['tahun'];
                                    $sql = "SELECT DATE_FORMAT(tanggal, '%Y-%m') AS tahun_bulan, nominal, jenis_iuran ";
                                    $sql .= "FROM iuran ";
                                    $sql .= "WHERE DATE_FORMAT(tanggal, '%Y') = '{$tahun}' ";
                                    $sql .= "GROUP BY tahun_bulan";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                ?>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td><?php echo $row['tahun_bulan']; ?></td>
                                    <td>
                                        <?php
                                        $sql = "SELECT SUM(nominal) AS jumlah_nominal FROM iuran WHERE DATE_FORMAT(tanggal, '%Y-%m') = '{$row['tahun_bulan']}' AND jenis_iuran = 1";
                                        $result2 = mysqli_query($conn, $sql);
                                        $data = mysqli_fetch_assoc($result2);
                                        ?>
                                        Rp.<?php echo number_format($data['jumlah_nominal'], 2, ",", "."); ?>,-
                                    </td>
                                    <td>
                                        <?php
                                        $sql = "SELECT SUM(nominal) AS jumlah_nominal FROM iuran WHERE DATE_FORMAT(tanggal, '%Y-%m') = '{$row['tahun_bulan']}' AND jenis_iuran = 2";
                                        $result2 = mysqli_query($conn, $sql);
                                        $data = mysqli_fetch_assoc($result2);
                                        ?>
                                        Rp.<?php echo number_format($data['jumlah_nominal'], 2, ",", "."); ?>,-
                                    </td>
                                    <td>
                                        <?php
                                        $sql = "SELECT SUM(nominal) AS jumlah_nominal FROM iuran WHERE DATE_FORMAT(tanggal, '%Y-%m') = '{$row['tahun_bulan']}' AND jenis_iuran = 3";
                                        $result2 = mysqli_query($conn, $sql);
                                        $data = mysqli_fetch_assoc($result2);
                                        ?>
                                        Rp.<?php echo number_format($data['jumlah_nominal'], 2, ",", "."); ?>,-
                                    </td>
                                    <td>
                                        <?php
                                        $sql = "SELECT SUM(nominal) AS total_nominal FROM iuran WHERE DATE_FORMAT(tanggal, '%Y-%m') = '{$row['tahun_bulan']}' AND (jenis_iuran = 1 OR jenis_iuran = 2 OR jenis_iuran = 3)";
                                        $result2 = mysqli_query($conn, $sql);
                                        $data = mysqli_fetch_assoc($result2);
                                        ?>
                                        Rp.<?php echo number_format($data['total_nominal'], 2, ",", "."); ?>,-
                                    </td>
                                </tr>
                            </tbody>
                    <?php
                                    }
                                }
                    ?>
                    <tfoot>
                        <tr class="text-center fw-bolder">
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <?php
                                $sql = "SELECT SUM(nominal) AS total_nominal FROM iuran WHERE DATE_FORMAT(tanggal, '%Y') = '{$tahun}' AND (jenis_iuran = 1 OR jenis_iuran = 2 OR jenis_iuran = 3)";
                                $result = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($result);
                                ?>
                                Rp.<?php echo number_format($data['total_nominal'], 2, ",", "."); ?>,-
                            </td>
                        </tr>
                    </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2024 Kelompok 11.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
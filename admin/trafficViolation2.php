<?php
session_start();
include_once('../DBCon.php');
include_once('../query/trafficViolationQuery.php');
$scan = $_SESSION["scan"];
$_SESSION["user_id"];
$_SESSION["username"];


$query = "SELECT * FROM penalty";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UMPVi - Traffic Violation</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="report.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UMPVi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="merit.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

       <li class="nav-item">
        <a class="nav-link" href="report.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Merit</span></a>
      </li>

  <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="trafficViolation.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Traffic Violation</span></a>
      </li>

       <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="viewStickerApplication.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Sticker Application</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="event.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Event</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="report.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>



            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["username"]; ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Traffic Violation</h1>

            <table>
              
            </table>
           
          </div> 

      <!-- End of Main Content -->

       <!-- QRScan Library-->
      <script type="text/javascript" src="../QrScan/js/filereader.js"></script>
      <script type="text/javascript" src="../QrScan/js/qrcodelib.js"></script>
      <script type="text/javascript" src="../QrScan/js/webcodecamjs.js"></script>
      <script type="text/javascript" src="../QrScan/js/main.js"></script>

      <form action="" method="POST" enctype="multipart/form-data">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">User ID: </th>
            <td><input style="width: 500px;" type="text" name="userID" value="<?php echo $scan; ?>" required="required"></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Violation </th>
            <td>
              <select style="width: 500px;" name="penaltyID">
                <?php
                $query = "SELECT * FROM penalty";
                $result = mysqli_query($conn,$query);
                 while($row = mysqli_fetch_assoc($result)){
                  ?>
                  <option name="detail" value=<?php echo $row['penaltyID']; ?> ><?php echo $row['penaltyPosition']; ?></option>
                <?php } ?>
              </select>
            </td>
          </tr>
            <th scope="row" colspan="2">
              <button type="submit" name="penalty" class="btn btn-primary">Penalised</button>

            </th>
          </tr>
        </tbody>
      </table>
    </form>
    <div id="piechart"></div>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

 



<!-- Pie Chart Script -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
  // Load google charts
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

<?php 

  $result=mysqli_query($conn,"SELECT count(*) as total from trafficviolation WHERE penaltyID = '1'");
  $data=mysqli_fetch_assoc($result);
  $accident = $data['total'];

  $result=mysqli_query($conn,"SELECT count(*) as total from trafficviolation WHERE penaltyID = '2'");
  $data=mysqli_fetch_assoc($result);
  $parking = $data['total'];

  $result=mysqli_query($conn,"SELECT count(*) as total from trafficviolation WHERE penaltyID = '3'");
  $data=mysqli_fetch_assoc($result);
  $sticker = $data['total'];

  $result=mysqli_query($conn,"SELECT count(*) as total from trafficviolation WHERE penaltyID = '4'");
  $data=mysqli_fetch_assoc($result);
  $helmet = $data['total'];

?>
  // Draw the chart and set the chart values
  function drawChart() {
    var accident = <?php echo $accident; ?>;
      var parking = <?php echo $parking; ?>;
      var sticker = <?php echo $sticker; ?>;
      var helmet = <?php echo $helmet; ?>;
      var data = google.visualization.arrayToDataTable([
      ['Violation', 'Total'],
      ['Cause Accident', accident],
      ['Parking Violation', parking],
      ['No Sticker Display', sticker],
      ['Not Wearing Seat Belt or Helmet', helmet]
  ]);

    // Optional; add a title and set the width and height of the chart
    var options = {'title':'My Average Day', 'width':550, 'height':400};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
  </script>

</body>

</html>

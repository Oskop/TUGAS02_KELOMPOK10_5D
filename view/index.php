<!doctype html>
<html lang="en">
<?php $base_url = $_SERVER['DOCUMENT_ROOT'] . '/wepeak/';
// var_dump($base_url);die();
 ?>
<head>
  <?php require_once 'partials/head.php'; ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
      <!-- Header Section -->
      <?php require_once 'partials/header.php'; ?>
      <!-- End of Header Section -->
            <div class="app-main">
              <!-- Sidebar Section -->
              <?php require_once 'partials/sidebar.php'; ?>
              <!-- End of Sidebar Section -->
                <div class="app-main__outer">
                  <div class="app-main__inner">
                    <!-- Content Section -->
                    <!-- <?php require_once 'partials/content.php'; ?> -->
                    <!-- <?php require_once 'contents/jenis_air.php'; ?> -->
                    <?php require_once 'contents/form_jenis_air.php'; ?>
                    <!-- End of Content Section -->
                  </div>
                    <!-- Footer Section -->
                    <?php require_once 'partials/footer.php'; ?>
                    <!-- End of Footer Section -->
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.datatable').DataTable();
  } );
</script>
</body>
</html>

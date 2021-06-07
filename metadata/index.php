<?php
include_once('get_metadata.php');
?>
<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Images</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="../assets/css/foundation.css">
            <link rel="stylesheet" href="../assets/css/app.css">
    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">Advanced PHP: Images</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    <div class="row">
      <div class="medium-6 large-6 columns">
        <h4>MetaData</h4>
        <img src="./open_image.php" width="2000" />
      </div>
      <div class="medium-6 large-6 columns">
        <h4>MetaData</h4>
        <ul>
          <li>Name: <?php echo $meta_data['FileName'] ?></li>
          <li>Size:  <?php echo $meta_data['FileSize'] ?></li>
          <li>Type: <?php echo $meta_data['MimeType'] ?></li>
          <li>Company: <?php echo $meta_data['Company'] ?></li>
          <li>Height: <?php echo $meta_data['COMPUTED']['Height'] ?></li>
          <li>Width: <?php echo $meta_data['COMPUTED']['Width'] ?></li>
        </ul>
      </div>
      <div class="medium-12 large-12 columns">
        <h4>MetaData</h4>
        <pre><?php echo $var_dump($meta_data) ?></pre>
      </div>
    </div>

    

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright Footer</li>
      </ul>
    </div>

        <script src="../assets/js/vendor/jquery.js"></script>
        <script src="../assets/js/vendor/what-input.js"></script>
        <script src="../assets/js/vendor/foundation.js"></script>
        <script src="../assets/js/app.js"></script>
    </body>
</html>
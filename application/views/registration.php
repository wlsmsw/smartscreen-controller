<?php defined('BASEPATH') OR exit('No direct script access allowed.'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  	
  	<!-- Tell the browser to be responsive to screen width -->
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url('assets/img/msw-logo.png')?>" type="image/x-icon">
    <link rel="icon" href="<?=base_url('assets/img/msw-logo.png')?>" type="image/x-icon">

	<title>Smartscreen Controller</title>

	<!-- font family -->
	<link rel="preconnect" href="//fonts.gstatic.com">
	<link href="//fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<!-- font awesome -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>


<body class="register">
    
    <form class="frmRegisterPC">
        <div>
            <label>PC Name <input type="text" name="pcname" required></label>
        </div>
        
        <div>
            <label>Outlet <input type="text" name="outlet" required></label>
        </div>
        
        <div>
            <button>Click button to register unit</button>
        </div>
    </form>
    

    <footer>
    	<p style="color: #f1f1f1;">Copyright &copy; 2024 | Megasportsworld | All Rights Reserved</p>
    </footer>


	<!-- scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">var base_url = "<?=base_url()?>";</script>
	<script src="<?=base_url('assets/js/rty-modal-1.2.5.min.js')?>"></script>
	<script src="<?=base_url('assets/js/registration.js')?>"></script>


</body>
</html>




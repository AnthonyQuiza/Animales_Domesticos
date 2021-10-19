<?php
$titulo = "Home";
$menu = array("menu1"=>"Home", "menu2"=>"Sobre ellos", "menu3"=>"Galeria de mascotas");
$name_menu = "Menu";
$titulotexto = "Animales Domesticos";
$texto1 =  "Los animales domésticos son aquellos que viven con el ser humano y están domesticados. El primer animal doméstico fue el perro,
pero ahora hay una gran variedad de animales domésticos.";
$num = "01";
$textocopy = "2021 All Rights Reserved.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title><?php echo $titulo; ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!-- section banner start -->
	<div class="header_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div><a href="index_html.php"><img src="images/Logo de Animales Domesticos Recor.jpg" alt="" width="100" height="100"></a></div>
				</div>
				<div class="col-md-8">
					<div class="menu_text">
						<ul>
							<li class="active">
							 <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                             <div class="overlay-content">
                             	<a href="index.php"><?php echo "$menu[menu1]"; ?></a>
                                <a href="about.php"><?php echo "$menu[menu2]"; ?></a>
                                <a href="gallery.php"><?php echo "$menu[menu3]"; ?></a>
                              </div>
                            </div>
                             <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <?php echo $name_menu;?></span>
                            </div>	
                            </li>
						</ul>
					</div>
			</div>
		</div>
		<div class="banner_main">
			<div class="container">
				<div class="ram">
					<div class="row">
					    <div class="col-sm-12">
						    <h1 class="taital"><?php echo $titulotexto; ?></h1>
						    <p class="consectetur_text"><?php echo $texto1; ?></p>
						    <div class="banner_bt">
						    </div>
					    </div>
				    </div>
				</div>
				<div class="box">
					<h1 class="numbar_text"><?php echo $num; ?></h1>
				</div>
			</div>
		</div>
	</div>
	<!-- section banner end -->
	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container"> 
	            <div class="copyright"><?php echo $textocopy; ?></div>
	        </div>
    	</div>
    </div>
	<!-- section footer end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 


   <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>
     
</body>
</html>
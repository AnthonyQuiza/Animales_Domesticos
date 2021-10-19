<?php
$titulo = "Galeria";
$menu = array("menu1"=>"Home", "menu2"=>"Sobre ellos", "menu3"=>"Galeria de mascotas");
$name_menu = "Menu";
$titulopag = "Tipos de ";
$titulopag1 = " mascotas";
$descripcion = "Entre los animales domesticos más comunes son: Los perros, gatos, hámsters, pájaros y peces.";
$galeriamascotas = (object)["mascota1"=>"Perro","mascota2"=>"Gato","mascota3"=>"Hamster","mascota4"=>"Pajaro","mascota5"=>"Peces"];
$titulosalvaje = "Diferencia entre animales domesticos y salvajes";
$salvajes = "Si bien los animales domésticos están adaptados a vivir junto a nosotros, en algunos casos 
incluso dentro de nuestras casas, y por ende formando con nosotros un vinculo estrecho, como si fueramos en 
algunos casos mienmbros de una misma manada, esto no siempre fue asi. Antes de ser domesticados, los 
animales vivian en su habitat natural, sometidos a las leyes naturales, osea, en estado salvaje."; 
$url = "https://adopcionanimal.es/";
$num = "03";
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
	<div class="header-main">
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
                                <a href="index_html.php"><?php echo "$menu[menu1]"; ?></a>
                                <a href="about_html.php"><?php echo "$menu[menu2]"; ?></a>
                                <a href="gallery_html.php"><?php echo "$menu[menu3]"; ?></a>
                            </div>
                            </div>
                            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <?php echo $name_menu;?></span>
                           </div>	
                           </li>
						</ul>
					</div>
			</div>
		</div>
    </div>
  <!-- section gallery start -->
    <div class="gallery_main layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="about_taital"><strong><span style="color: #ffffff;"><?php echo $titulopag; ?></span> <?php echo $titulopag1; ?></strong></h1>
            <p class="sed_text"><?php echo $descripcion; ?></p>

          </div>
        </div>
        <div class="gallery_images">
          <div class="row">
            <div class="col-sm-7">
            <div class="gallery_blog">
                           <img src="images/Animal-Perro 1.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong><?php echo $galeriamascotas->mascota1;?></strong></div>
                        </div>
              </div>
            </div>
            <div class="col-sm-5">
            <div class="gallery_blog">
                           <img src="images/Animal-Gato 2.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong><?php echo $galeriamascotas->mascota2;?></strong></div>
                        </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gallery_images">
          <div class="row">
            <div class="col-sm-5">
            <div class="gallery_blog">
                           <img src="images/Animal-Hamster 3.jpg" style="max-width: 100%; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong><?php echo $galeriamascotas->mascota3;?></strong></div>
                        </div>
              </div>
            </div>
            <div class="col-sm-7">
            <div class="gallery_blog">
                           <img src="images/Animal-Pajaro 4.jpg" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong><?php echo $galeriamascotas->mascota4;?></strong></div>
                        </div>
              </div>
            <div class="gallery_blog">
                           <img src="images/Animal-Peces 5.jpg" style="max-width: 100%; height: 297px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong><?php echo $galeriamascotas->mascota5;?></strong></div>
                        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="gallery_section_2">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <h1 class="pet_taital"><?php echo $titulosalvaje; ?></h1>
            <p class="lorem_text"><?php echo $salvajes; ?></p>
            <button onclick="location.href='<?php echo $url;?>'">Adopta un animal</button> 
          <div class="banner_bt">
        </div>
        <div class="box_3">
          <h1 class="numbar"><?php echo $num; ?></h1>
        </div>
          </div>
          <div class="col-sm-4">
            <div class="dog_img"><img src="images/dog-img.png" style="max-width: 100%;"></div>
          </div>
        </div>
      </div>
    </div>
  <!-- section gallery end -->
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


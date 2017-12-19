<?php
    $allPetitesAnnonces = $daoInstance->getPetitesAnnonces();

    $descriptifAnnonce  = 'Description sommaire de la petite annonce' ;
    $designEtPrixAnnonce  = 'relatant nom du matériel prix' ;
    $quantitEtEtat  = 'quantité (nombre) et Etat.' ;
?>

<script>
    function updateDescriptor(idDiv, descriptifAnnonce, designEtPrixAnnonce, quantitEtEtat) {
      setInterval(function(){  
        if(descriptifAnnonce.length >= 32){
          descriptifAnnonce = descriptifAnnonce.substring(0,32)+'...'  ;
        }
        if( document.getElementById(idDiv).className.split(" ").indexOf('active')!=-1 ){
            document.getElementById("descriptptteannonce").innerHTML ='<br><div class="row"><span style="padding:0px;margin:0px;text-overflow:ellipsis" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+ designEtPrixAnnonce+'</span> </div><div class="row"><span style="padding:0px;margin:0px;text-overflow:ellipsis" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+quantitEtEtat+' </span></div>';
            
           <!-- document.getElementById("descriptptteannonce").innerHTML ='<br><span class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+ designEtPrixAnnonce+'</span>  <br><span class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+quantitEtEtat+' </span>';
           -->
        }
      }, 1000);
    }
</script>


 <!-- slider start -->
<div class="row container slideperso">

	<div  id="myCarousel" class="col-sm-8 col-md-8 col-lg-8 col-xs-12 carousel slide w3-content w3-display-container" data-ride="carousel">
		<!--
		    slide 1
		--> 
       <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <a href="#"><img class="carouselImg" src="./index_files/1518.jpg" alt="Los Angeles"></a>
			</div>

			<div class="item">
			  <a href="#"><img class="carouselImg" src="./index_files/1519.jpg" alt="Chicago"></a>
			</div>

			<div class="item">
			  <a href="#"><img class="carouselImg" src="./index_files/1521.jpg" alt="New York"></a>
			</div>


		  </div>

		  <!-- Left and right controls -->
		  <a class="w3-button w3-black w3-display-left" href="#myCarousel" data-slide="prev">
			<i class="fa fa-chevron-left" aria-hidden="true"></i>
		  </a>
		  <a class="w3-button w3-black w3-display-right" href="#myCarousel" data-slide="next">
			<i class="fa fa-chevron-right" aria-hidden="true"></i>
		  </a>
	</div>
  
		<img src="./index_files/surlefil.png" alt="Sur le fil" id="ptteannonce">
	  <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
		<div class="row">
		<p style="padding-left:0px;margin-left:0px;text-overflow:ellipsis" id="descriptptteannonce" class="col-sm-12 col-md-12 col-lg-12 col-xs-12"></p>
		<!--<p id="descriptptteannonce" class="col-sm-12 col-md-12 col-lg-12 col-xs-12"><div class="row"><span class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php //echo $descriptifAnnonce ?> </span></div><br><div class="row"><span class="col-lg-12 col-md-12 col-sm-12 col-xs-12" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $designEtPrixAnnonce ?></span></div> <br><div class="row"><span class="col-lg-12 col-md-12 col-sm-12 col-xs-12" > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php //echo $quantitEtEtat ?></span></div> </p>
         -->
          
		<div id="mySecondCarousel" class="col-sm-12 col-md-12 col-lg-12 col-xs-12 slide w3-content  mySecondCarousel " data-ride="carousel">
			   <!-- Wrapper for slides -->
			 <div class="carousel-inner">

		  <?php 

			  $i = 0 ;
			  foreach ($allPetitesAnnonces as $petiteAnnonce) {
				  $descriptifAnnonce  = '"'.$petiteAnnonce["description"].'"' ;
				  $designEtPrixAnnonce  =  '"'.$petiteAnnonce["designation"].' à '.strval($petiteAnnonce["prix"]).'"';
				  $quantitEtEtat  =  '"Stock : '.strval($petiteAnnonce["stock"]).' Etat NEUF!"';

				  if ($i == 0)
					echo '<div class="item active row" id="'.$petiteAnnonce["id"].'"><a class="col-lg-12 col-md-12 col-sm-12 col-xs-12" href="#"><img style="height:200px;width:250px"  src="http://51.254.200.129/backendprod/EsquisseBackEnd/server-backend-upload/uploads/'.$petiteAnnonce["img_link"].'" alt="'.$petiteAnnonce["designation"].'"></a> <script>updateDescriptor("'.$petiteAnnonce["id"].'", '.$descriptifAnnonce.','.$designEtPrixAnnonce.', '.$quantitEtEtat.')</script> </div>' ;
				  else
					echo '<div class="item row" id="'.$petiteAnnonce["id"].'"><a class="col-lg-12 col-md-12 col-sm-12 col-xs-12" href="#"><img style="height:200px;width:250px" src="http://51.254.200.129/backendprod/EsquisseBackEnd/server-backend-upload/uploads/'.$petiteAnnonce["img_link"].'" alt="'.$petiteAnnonce["designation"].'"></a> <script>updateDescriptor("'.$petiteAnnonce["id"].'",'.$descriptifAnnonce.','.$designEtPrixAnnonce.', '.$quantitEtEtat.')</script> </div>' ;
				$i++ ;
			  }

		  ?>
		  </div>
		  </div>
         </div>
		  <a class="w3-button w3-black w3-display-bottomleft" id="pasliderbtn" href="#mySecondCarousel" data-slide="next">
			<i class="fa fa-chevron-left" aria-hidden="true"></i>
		  </a>
		</div>
</div>


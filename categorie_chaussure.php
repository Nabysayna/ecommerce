<?php 
	include 'header.php' ;
    $image= $daoInstance->getchaussure();

	//include 'sliders.php' ;
	//include 'underSliders.php' ;
	?>
   <!-- <div class="container" style="margin-top: 20px">
            <div class=" col-lg-offset-3 row">
                <select id="region" class="col-lg-3" style="margin-right: 5px;">
                    <option>Region</option>
                    <option value="dakar">Dakar</option>
                    <option value="thies">Thies</option>
                    <option value="sant-louis">Saint-Louis</option>
                    <option value="ziguinchor">Ziguinchor</option>
                </select>
                <select id="zone" class="col-lg-3" style="margin-right: 5px;">
                    <option>Zone</option>
                    <option value="dakar">dakar</option>
                    <option value="thies">thies</option>
                    <option value="almadie">almadie</option>
                    <option value="guediawaye">guediawaye</option>
                    <option value="rufisque">rufisque</option>
                </select>
                <select id="szone" class="col-lg-3">
                    <option>Sous Zone</option>
                    <option value="dakar">dakar</option>
                    <option value="thies">thies</option>
                    <option value="almadie">almadie</option>
                </select>
            </div>
    </div>-->
    <div class="arrival-area clearfix pt-90">
    <div class="container">
        <div class="row">
        	<?php include("region.php"); ?>
            <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">
                <div class="section-tab row" style="margin-left: 10px" id="ids" >
                   <!-- <div class="section-tab-menu text-center mb-45">
                        <ul role="tablist">
                            <li role="presentation" class="active text-uppercase"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">Nouveautés</a></li>
                            <li role="presentation" class="text-uppercase"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">En Vedette</a></li>
                            <li role="presentation" class="text-uppercase"><a href="#best" aria-controls="best" role="tab" data-toggle="tab" class="bestSellUnderTrendy">Meilleures Ventes</a></li>
                        </ul>
                    </div>-->
                    <!--<div class="clearfix"></div>
                    <div id="ids" class="tab-content row">
                       <div id="new" role="tabpanel" class="active section-tab-item">
                            <div class="tab-item-slider owl-carousel owl-theme owl-loaded">
                              <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;"><div class="owl-stage" style="transition-duration: 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div  class="col-xs-12 col-width">  -->
                            <?php  
                              
                            foreach($image as $img){ 
                            echo("
                                   <img style='height:200px;width:200px' src='".$img['img_link']."' />
                                ");   
                           /* echo('
                                    <div class="single-product" class="col-lg-2 col-xs-2 col-sm-2">
                                        <div class="single-product-item clearfix">
                                            <div class="single-product-img clearfix">
                                                <a href="#">
                                                    <img style="height:200px" class="primary-image" src="'.$img['img_link'].'" alt="product">
                                                </a>
                                                <div class="wish-icon-hover text-center clearfix">
                                                    <div class="hover-text">
                                                        <p>tres jolie tres jolie </p>
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="single-product-info clearfix">
                                                <div class="pro-rating">  
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>  
                                                </div> 
                                                <div class="pro-price">
                                                    <span class="new-price">'.$img['prix'].' cfa</span>
                                                    <span class="old-price">30 000 cfa</span>
                                                </div> 
                                                <h3><a href="#">'.$img['description'].'</a></h3>  
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-xs-12 col-width">  ');*/
							}
                                ?> 
                                  
                                 
                           <!--  </div>
                          </div>
                      </div>
                    </div>
                 </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
<script src="./js/categorie_chaussure.js"></script>
<?php
	/*include 'vitrine1.php' ;
	include 'vitrine2.php' ;
	include 'baniereReductions.php' ;
	include 'vitrine3.php' ;
	include 'baniereoffre.php' ;
	include 'vitrine4.php' ;
	
	include 'newsletter.php' ;
	include 'baniereblogs.php' ;
	include 'testimoniaux.php' ;
	include 'zoneclient.php' ;
	include 'zoneservices.php' ;
	include 'zonecontact.php' ;*/
	include 'footer.php' ;
	

?>


<!-- arrival start-->
<?php
      $image= $daoInstance->getNouveute();
      $imagefeatured= $daoInstance->getEnvedette();
      //$img=$image[];
?>
<div class="arrival-area clearfix pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu text-center mb-45">
                        <ul role="tablist">
                            <li role="presentation" class="active text-uppercase"><a href="#new" id="newvitrine1" onclick="nouveaute()" aria-controls="new" role="tab" data-toggle="tab">Nouveautés</a></li>
                            <li role="presentation" class="text-uppercase"><a href="#featured" id="featuredvitrine1" onclick="vedette()" aria-controls="featured" role="tab" data-toggle="tab">En Vedette</a></li>
                            <li role="presentation" class="text-uppercase"><a href="#best" id="bestvitrine1" aria-controls="best" role="tab" data-toggle="tab" class="bestSellUnderTrendy">Meilleures Ventes</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content row">
                       <div id="new" role="tabpanel" class="active section-tab-item">
                            <div class="tab-item-slider owl-carousel owl-theme owl-loaded">
                              <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;"><div class="owl-stage" style="width: 1856px; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-xs-12 col-width">  
                            <?php  
                              
                            foreach($image as $img){ 
                            $link=$img['img_link'];   
                            echo('
                                    <div class="single-product">
                                        <div class="single-product-item clearfix">
                                            <div class="single-product-img clearfix">
                                                <a href="#" >
                                                    <img style="height:200px" class="primary-image"  src="'.$img['img_link'].'" alt="product" />
                                                </a>
                                                <div class="wish-icon-hover text-center clearfix">
                                                    <div class="hover-text">
                                                        <p>tres jolie tres jolie </p>
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view link" href="#" desk="'.$img['description']."/".$img['prix'].'" links="'.$link.'"  data-toggle="modal" data-target="#bbsModal"><i class="fa fa-eye"></i></a></li>
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
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-xs-12 col-width">  ');
							}
                                ?> 
                                  
                                 
                           </div>
                       </div>
                  </div>
                </div>
            </div>
        </div>
                
    
                  <div id="featured" role="tabpanel" class="section-tab-item">
                       <div class="tab-item-slider owl-carousel owl-theme owl-loaded">
                            <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;">
                                <div class="owl-stage" style="width: 1856px; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item active" style="width: 232px; margin-right: 0px;">
                                        <div class="col-xs-12 col-width">  
                                            <?php  
                              
                            foreach($imagefeatured as $img){  
                            $link=$img['img_link'];  
                            echo('
                                    <div class="single-product">
                                        <div class="single-product-item clearfix">
                                            <div class="single-product-img clearfix">
                                                <a href="#">
                                                    <img style="height:200px" class="primary-image" src="'.$img['img_link'].'" alt="product">
                                                </a>
                                                <div class="wish-icon-hover text-center clearfix">
                                                    <div class="hover-text">
                                                        <p>jolie jolie jolie </p>
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view link" desk="'.$img['description']."/".$img['prix'].'" links="'.$link.'" href="#" data-toggle="modal" data-target="#bbsModal"><i class="fa fa-eye"></i></a></li>
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
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-xs-12 col-width"> ');
                            }
                                ?> 
                                            
                                        </div>
                                    </div>
                                </div>
                             </div>
        
                        </div>
                </div>
                <div id="best" role="tabpanel" class="section-tab-item">
                       <div class="tab-item-slider owl-carousel owl-theme owl-loaded">
                            <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;">
                                <div class="owl-stage" style="width: 1856px; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item active" style="width: 232px; margin-right: 0px;">
                                        <div class="col-xs-12 col-width">  
                                            rasta
                                             
                                        </div>
                                    </div>
                                </div>
                             </div>
        
                        </div>
                </div>

            </div>
         </div>
          <center><input class="btn btn-warning" onclick="afficherv1(nombre)" type="button" value="voir plus" name=""></center>
     </div>

   </div>
       
  </div>
 </div>
 <?php include("modal_zoom.php") ?>

 

<!-- women area start -->
<?php
      $imagesac= $daoInstance->getSac();
      $imagefeatured= $daoInstance->getEnvedette();
      $imagetops= $daoInstance->getNouveute();
      //$img=$image[];
?>
<div class="women-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <li role="presentation" class="active text-uppercase"><a href="#dress" aria-controls="dress" role="tab" data-toggle="tab">habits</a></li>
                            <li role="presentation" class="text-uppercase"><a href="#tops" aria-controls="tops" role="tab" data-toggle="tab">tops</a></li>
                            <li role="presentation" class="text-uppercase"><a href="#handbags" aria-controls="handbags" role="tab" data-toggle="tab">Sacs à main</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-7">                      
                <div class="clearfix"></div>
                    <div class="tab-content row">
                        <div id="dress" role="tabpanel" class="active section-tab-item">
                            <div class="feature-slider owl-carousel owl-theme owl-loaded">
							  <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;">
                                 <div class="owl-stage" style="width: 1856px; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item active" style="width: 232px; margin-right: 0px;">
                                        <div class="col-xs-12 col-lg-12">  
                                 <?php  
                                    $nb=0;
                            foreach($imagefeatured as $img){  
                              $link=$img['img_link']; 
								              if($nb>2){
									                 break;
									              }  
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
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-lg-12"> ');
                                $nb++;
                                  }
                                 
                                ?> 
                                 
                                
                              </div>
                             </div>
                            </div> 
                           </div>
                          </div>
                        </div>
                        <div id="tops" role="tabpanel" class="section-tab-item">
                            <div class="feature-slider owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;">
                                 <div class="owl-stage" style="width: 1856px; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item active" style="width: 232px; margin-right: 0px;">
                                        <div class="col-xs-12 col-lg-12">  
                                 <?php  
                                    $nb=0;
                            foreach($imagetops as $img){  
                              $link=$img['img_link']; 
                              if($nb>2){
                                   break;
                                }  
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
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-lg-12"> ');
                                $nb++;
                                  }
                                 
                                ?> 
                                 
                                
                              </div>
                             </div>
                            </div> 
                           </div>
                          </div>
                        </div>
                        <div id="handbags" role="tabpanel" class="section-tab-item">
                            <div class="feature-slider owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;">
                                 <div class="owl-stage" style="width: 1856px; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item active" style="width: 232px; margin-right: 0px;">
                                        <div class="col-xs-12 col-lg-12">  
                                 <?php  
                                    $nb=0;
                            foreach($imagesac as $img){  
                              $link=$img['img_link']; 
                              if($nb>2){
                                   break;
                                }  
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
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-lg-12"> ');
                                $nb++;
                                  }
                                 
                                ?> 
                                 
                                
                              </div>
                             </div>
                            </div> 
                           </div>
                          </div>
                        </div>
                            <div class="arrival-button text-center mt-30">
                               <a href="afficher_plus_vitrine3_nouveaute.php" class="section-button">Afficher Plus</a>
                            </div>
                      </div> 
                    </div>
                      <div class="col-lg-5 featured-left mt-2 pull-right">
                                  <a href="#">
                                    <img src="./index_files/1518.jpg" alt="">
                                      <div class="feature-info text-right">
                                        <h2 class="text-uppercase">women's</h2>
                                        <h3 class="text-uppercase">collection</h3>  
                                      </div>
                                 </a>
                       </div>  
                  </div>  
                  
                </div>
              </div>
              

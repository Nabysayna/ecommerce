<!-- featured start -->
<?php
      $image= $daoInstance->getNouveute();
      $imagefeatured= $daoInstance->getHabitHomme();
      $imagecri= $daoInstance->getNouveute();
      //$img=$image[];
?>
<div class="featured-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-tab">
                    <div class="section-tab-menu mb-45 text-center">
                        <ul role="tablist">
                            <li role="presentation" class="active text-uppercase"><a href="#featured2" aria-controls="featured2" role="tab" data-toggle="tab">En vedette</a></li>
                            <li role="presentation" class="text-uppercase"><a href="#cri" aria-controls="cri" role="tab" data-toggle="tab">Dernier cri</a></li>
                            <li role="presentation" class="text-uppercase"><a class="bestSellUnderTrendy" href="#best2" aria-controls="best1" role="tab" data-toggle="tab">Meilleures Ventes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 hidden-sm hidden-xs">
                <div class="featured-left mt-2">
                    <a href="#">
                        <img src="./index_files/1QUW9E2MG.jpg" alt="">
                    </a>
                    <span class="red hidden-sm" style="margin-left: 35px">hot</span>
                </div>
                <div class="single-product-info clearfix">
                    <div class="pro-title">  
                    <h3><a href="#">Electria Ostma</a></h3>  
                    </div> 
                    <div class="pro-price">
                        <span class="new-price">25000 cfa</span>
                        <span class="old-price">18000 cfa</span>
                    </div>  
                </div>
            </div>
                    <div id="featured2" role="tabpanel" class="active section-tab-item">
                       <div class="tab-item-slider owl-carousel owl-theme owl-loaded">
                            <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;">
                                <div class="owl-stage" style="width: 1856px; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item active" style="width: 232px; margin-right: 0px;">
                                        <div class="col-xs-12 col-lg-12">  
                                            <?php  
                              
                            foreach($imagecri as $img){ 
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
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-xs-12 "> ');
                            }
                                ?> 
                                            
                                        </div>
                                    </div>
                                </div>
                             </div>
        
                        </div>
                   </div>
                   <div id="cri" role="tabpanel" class="section-tab-item">
                       <div class="tab-item-slider owl-carousel owl-theme owl-loaded">
                            <div class="owl-stage-outer" style="padding-left: 0px; padding-right: 0px;">
                                <div class="owl-stage" style="width: 1856px; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item active" style="width: 232px; margin-right: 0px;">
                                        <div class="col-xs-12 col-lg-12">  
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
                                </div></div><div class="owl-item active" style="width: 232px; margin-right: 0px;"><div class="col-xs-12 "> ');
                            }
                                ?> 
                                            
                                        </div>
                                    </div>
                                </div>
                             </div>
        
                        </div>
                   </div>
                <div class="arrival-button text-left">
                    <a href="afficher_plus_vitrine4.php" class="section-button mt-30">Afficher Plus</a>
                </div>    
            </div>
        </div>
    </div>

<!-- featured end -->

 <!-- hero-section -->

<?php  

//echo $this->session->usuario('nome');

//echo $_SESSION['user_data']['usuario']->nome;

?>

    <div class="hero-section" style="background-image: url('<?php echo base_url() ?>public/img/decoracao-de-casamento-1-Susana-e-Fernando-foto-Danilo-Maximo.jpg'); max-height: 200px;">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head">
                            <h1 class="search-head-title">Find Local Wedding Vendors</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse the best wedding vendors in your area — from venues and photographers, to wedding planners, caterers, florists and more.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <div class="search-form">
                            <form class="form-row">
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide" name="evento">
                                        <option value="Venue Type">Evento</option>
                                        <option value="Venue">Casamento</option>
                                        <option value="Florist">Florist</option>
                                        <option value="Cake">Cake</option>
                                        <option value="Photographer">Photographer</option>
                                        <option value="Catering">Catering</option>
                                        <option value="Dress">Dress</option>
                                    </select>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide" name="cidade">
                                        <option value="Ahmedabad"  data-display="Ahmedabad">Cidade</option>
                                        <option value="Surat">parobe</option>
                                        <option value="Rajkot">Rajkot</option>
                                        <option value="Vadodara">Vadodara</option>
                                        <option value="Vapi">Vapi</option>
                                        <option value="Bhavnagar">Bhavnagar</option>
                                    </select>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <input type="date" name="data">
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide" name="pessoas">
                                        <option value="Ahmedabad"  data-display="Ahmedabad">Pessoas</option>
                                        <option value="Surat">1-100</option>
                                        <option value="Rajkot">100-200</option>
                                        <option value="Vadodara">200-300</option>
                                        <option value="Vapi">300-400</option>
                                        <option value="Bhavnagar">400-500</option>
                                    </select>
                                </div>
                                <!-- button -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <button class="btn btn-default btn-block" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->
    <!-- feature-section -->
    <div class="bg-white space-large">
        <div class="container">
            <div class="row">
                <!-- feature-1 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-051-wedding-arch"></i></div>
                    <h3>180+Wedding Venues & Vendors</h3>
                    <p>Fusce sed erat libasellus id orci quis ligula pretium modo lect sodales eu.</p>
                </div>
                <!-- /.feature-1 -->
                <!-- feature-2 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-051-love-birds"></i></div>
                    <h3>350+ Real Wedding Success</h3>
                    <p>Quisque ut ligula nec est pretium pharetra atmetus mattis volutpat invel elit.</p>
                </div>
                <!-- /.feature-2 -->
                <!-- feature-3 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-017-location"></i></div>
                    <h3>31+Cities Available</h3>
                    <p>Vestibulum elementum pellaliquet dui in massa arius et ornare augue feugiat.</p>
                </div>
                <!-- /.feature-3 -->
            </div>
        </div>
    </div>
    <!-- /.feature-section -->
    <div class="space-medium pdb0">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Latest Wedding Venue</h2>
                        <p>A short description for showcase of latest wedding venue. </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="venue-thumbnail-carousel">
                <div class="owl-carousel owl-theme owl-venue-thumb-second">
                    <div class="item">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img zoomimg">
                                    <!-- Vendor img -->
                                    <a href="#"><img src="images/vendor-img-1.jpg" alt=""  class="img-fluid"></a>
                                    <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="#" class="title">Wedding Venue Title Name</a></h2>
                                    <p class="vendor-address">Ahmedabad, Gujarat.</p>
                                </div>
                                <!-- /.Vendor Content -->
                                <div class="vendor-meta">
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-price">
                                    $150
                                </span>
                                        <span class="vendor-text">Start From</span></div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest">
                                    120+
                                </span>
                                        <span class="vendor-text">Guest</span>
                                    </div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                        <span class="rating-count vendor-text">(20)</span></div>
                                </div>
                            </div>
                            <!-- /.Vendor thumbnail -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img zoomimg">
                                    <!-- Vendor img -->
                                    <a href="#"><img src="images/vendor-img-2.jpg" alt="" class="img-fluid"></a>
                                    <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="#" class="title">Wedding Venue Title Name</a></h2>
                                    <p class="vendor-address">Baroda, Gujarat.</p>
                                </div>
                                <!-- /.Vendor Content -->
                                <div class="vendor-meta">
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-price">
                                    $150
                                </span>
                                        <span class="vendor-text">Start From</span></div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest">
                                    120+
                                </span>
                                        <span class="vendor-text">Guest</span>
                                    </div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                        <span class="rating-count vendor-text">(20)</span></div>
                                </div>
                            </div>
                            <!-- /.Vendor thumbnail -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img zoomimg">
                                    <!-- Vendor img -->
                                    <a href="#"><img src="images/vendor-img-3.jpg" alt="" class="img-fluid"></a>
                                    <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="#" class="title">Wedding Venue Title Name</a></h2>
                                    <p class="vendor-address">Bharuch, Gujarat.</p>
                                </div>
                                <!-- /.Vendor Content -->
                                <div class="vendor-meta">
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-price">
                                    $150
                                </span>
                                        <span class="vendor-text">Start From</span></div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest">
                                    120+
                                </span>
                                        <span class="vendor-text">Guest</span>
                                    </div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                        <span class="rating-count vendor-text">(20)</span></div>
                                </div>
                            </div>
                            <!-- /.Vendor thumbnail -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img zoomimg">
                                    <!-- Vendor img -->
                                    <a href="#"><img src="images/vendor-img-2.jpg" alt="" class="img-fluid"></a>
                                    <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="#" class="title">Wedding Venue Title Name</a></h2>
                                    <p class="vendor-address">Morbi, Gujarat.</p>
                                </div>
                                <!-- /.Vendor Content -->
                                <div class="vendor-meta">
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-price">
                                    $150
                                </span>
                                        <span class="vendor-text">Start From</span></div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest">
                                    120+
                                </span>
                                        <span class="vendor-text">Guest</span>
                                    </div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                        <span class="rating-count vendor-text">(20)</span></div>
                                </div>
                            </div>
                            <!-- /.Vendor thumbnail -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. venue-thumbnail-section-->
    <!-- venue-categoris-section-->
    <div class="space-small">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Venues by Category</h2>
                        <p>You can browse all venues by category with thumbnail image and category name.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- venue-categoris-block-->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img"> <a href="#"><img src="./images/venue_categories_img_1.jpg" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Castles (20)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="./images/venue_categories_img_2.jpg" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Stately Homes (10)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="./images/venue_categories_img_3.jpg" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Barns (12)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block ">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="./images/venue_categories_img_4.jpg" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Outdoors (18)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block ">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="./images/venue_categories_img_5.jpg" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Landmarks(12)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg "> <a href="#"><img src="./images/venue_categories_img_6.jpg" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Restaurant (11)</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
            </div>
            <!-- venue-categoris-btn -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt60"><a href="#" class="btn btn-default btn-lg">View All category</a></div>
            </div>
            <!-- /.venue-categoris-btn -->
        </div>
        <!-- /.venue-categoris-section-->
        <!-- real-wedding-section-->
        <div class="space-small">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb40">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2 class="mb10">Real Weddings</h2>
                            <p>Real inspiration from the real wedding couple. Get ideas for grooms and brides.</p>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="row">
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="real-wedding-block">
                        <!-- real wedding block -->
                        <div class="real-wedding-img zoomimg">
                            <!-- real wedding img -->
                            <a href="#"><img src="images/real-wedding-img-1.jpg" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                        </div>
                        <!-- /.real wedding img -->
                        <div class="real-wedding-content ">
                            <!-- real wedding content -->
                            <h3 class="real-wedding-title"><a href="#" class="title">Vanessa & Ryan</a></h3>
                            <div class="real-wedding-meta"><span class="real-wedding-date">07 May, 2018</span> 
                            <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Surat</span>
                            </div>
                        </div>
                        <!-- /.real wedding img -->
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="real-wedding-block">
                        <!-- real wedding block -->
                        <div class="real-wedding-img zoomimg">
                            <!-- real wedding img -->
                            <a href="#"><img src="images/real-wedding-img-4.jpg" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                        </div>
                        <!-- /.real wedding img -->
                        <div class="real-wedding-content">
                            <!-- real wedding content -->
                            <h3 class="real-wedding-title"><a href="#" class="title">Rahul & Pooja</a></h3>
                           <div class="real-wedding-meta"><span class="real-wedding-date">10 May, 2018</span> 
                            <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Ahmedabad</span>
                           </div>
                        </div>
                        <!-- /.real wedding img -->
                    </div>
                    <!-- /.real wedding block -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="real-wedding-block">
                        <!-- real wedding block -->
                        <div class="real-wedding-img zoomimg">
                            <!-- real wedding img -->
                            <a href="#"><img src="images/real-wedding-img-2.jpg" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                        </div>
                        <!-- /.real wedding img -->
                        <div class="real-wedding-content">
                            <!-- real wedding content -->
                            <h3 class="real-wedding-title"><a href="#" class="title">Shreena & Dhanesh</a></h3>
                         <div class="real-wedding-meta"><span class="real-wedding-date">12 May, 2018</span> 
                            <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Pune</span>
                        
                         </div>
                        </div>
                        <!-- /.real wedding img -->
                    </div>
                    <!-- /.real wedding block -->
                </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <a href="#" class="btn btn-default btn-lg">See more Real Weddings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.real-wedding-section-->
    <!-- feature-section-->
    <div class="bg-white space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">How it Works</h2>
                        <p>Simple and easy step to get started your wedding planning.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-017-location icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Search Supplier</h3>
                            <p>Sed scelerisque mauris eget erat sodales, sed aliquet elit commodo. Pellentesque ultrices pel malesuada. </p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"> <i class="icon icon-004-chat icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Book Perfect Vendor</h3>
                            <p>Proin sollicitudin quis risus ut mattis. Interdum et malesuada fames arbi nulla lacus, pretium at losum dolro. </p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-025-groom icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Celebrate Wedding Day</h3>
                            <p>Nam euismod magna et neque consectetur imperdie traesent ut arcu sit amet nunc sollicitudin fringilla.</p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
            </div>
        </div>
    </div>
    <!-- /.feature-section-->
    <!-- Testimonial-section -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Testimonials from Real Brides</h2>
                        <p>Find out what about real couple have to say about related.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Barbara J. Gonzalez</h3>
                        <p class="testimonial-text">“Cras non maximus velit. Nam eleifend nibh eget erat gravida, ac fermentum turpis iaculis. Aliquam hendrerit ornare dui, rutrum luctus ipsum aliquam non. Cras non maximus velit.”</p>
                        <div class="testimonial-pic"><img src="images/testimonial-1.jpg" class="rounded-circle" alt=""></div>
                        <div class="testimonial-meta">
                            <h5 class="mb0">Venue Vendor</h5>
                            <p class="testimonial-small-text mb0">Ahmedabad </p>
                            <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i> 
                                    </span>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Katrina Masterpole</h3>
                        <p class="testimonial-text">“Nam eleifend nibh eget erat gravida, ac fermentum turpis iaculis. Aliquam hendrerit ornare dui, rutrum luctus ipsum aliquam stibulum ut dignissim sem. Cras non maximus velit. ”</p>
                        <div class="testimonial-pic"><img src="images/testimonial-2.jpg" class="rounded-circle" alt=""></div>
                        <div class="testimonial-meta">
                            <h5 class="mb0">Photography Vendor</h5>
                            <p class="testimonial-small-text mb0">Baroda </p>
                            <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i> 
                                    </span>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Amanda Tibma</h3>
                        <p class="testimonial-text">“Vestibulum ut dignissim sem. Cras non maximus velit. Nam eleifend nibh eget erat gravida, ac fermentum turpis iaculis. Aliquam hendrerit lorem ispuimi, um aliquam non.”</p>
                        <div class="testimonial-pic"><img src="images/testimonial-3.jpg" class="rounded-circle" alt=""></div>
                        <div class="testimonial-meta">
                            <h5 class="mb0">Florist Vendor</h5>
                            <p class="testimonial-small-text mb0">Bhavnagar </p>
                            <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i> 
                                    </span>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Testimonial-section -->
    <!-- blog-post-section -->
    <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Wedding Tips and News</h2>
                        <p> The ultimate wedding guide and tips for wedding couples.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg rounded">
                            <a href="#"><img src="./images/post-img-1.jpg" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Top 10 Wedding Tips for Groom & Bride</a></h4>
                        <!-- post block -->
                        <div class="meta">
                            <span class="meta-category">Photography</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 rounded">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg rounded">
                            <a href="#"><img src="./images/post-img-2.jpg" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Top 10 Wedding Dress Expert Collections</a></h4>
                        <!-- post block -->
                        <div class="meta">
                            <span class="meta-category">Wedding Planning</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg  rounded">
                            <a href="#"><img src="./images/post-img-3.jpg" alt="" class="img-fluid  "></a>
                        </div>
                        <h4><a href="#" class="title">Best Wedding Destination & Venues 2019</a></h4>
                        <!-- post block -->
                        <div class="meta">
                            <span class="meta-category">Flowers</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg  rounded">
                            <a href="#"><img src="./images/post-img-4.jpg" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Happy Wedding Couple  Smile Enjoying  Wine</a></h4>
                        <!-- post block -->
                        <div class="meta">
                            <span class="meta-category">Catering</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.blog-post-section -->
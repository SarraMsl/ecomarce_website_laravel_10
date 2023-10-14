
<style>
    /* تقسيم العناصر إلى صفين في كل سطر */
    /* تقسيم العناصر إلى صفين في كل سطر باستخدام Flexbox */
    .categori-dropdown-inner {
        display: flex;
        flex-wrap: wrap;
    }

    .more_slide_open {
        flex: 0 0 50%; /* تقسيم العناصر إلى نصفين (50%) من العرض */
        padding: 10px; /* هذا لتوفير مسافة بين العناصر إذا كنت بحاجة إليها */
    }

</style>

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{asset('visituer/assets/imgs/shop/product-16-2.jpg')}}"  alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('visituer/assets/imgs/shop/product-16-1.jpg')}}"  alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('visituer/assets/imgs/shop/product-16-3.jpg')}}"  alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('visituer/assets/imgs/shop/product-16-4.jpg')}}"  alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('visituer/assets/imgs/shop/product-16-5.jpg')}}"  alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('visituer/assets/imgs/shop/product-16-6.jpg')}}"  alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('visituer/assets/imgs/shop/product-16-7.jpg')}}"  alt="product image" />
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="{{asset('visituer/assets/imgs/shop/thumbnail-3.jpg')}}"  alt="product image" /></div>
                                    <div><img src="{{asset('visituer/assets/imgs/shop/thumbnail-4.jpg')}}"  alt="product image" /></div>
                                    <div><img src="{{asset('visituer/assets/imgs/shop/thumbnail-5.jpg')}}"  alt="product image" /></div>
                                    <div><img src="{{asset('visituer/assets/imgs/shop/thumbnail-6.jpg')}}"  alt="product image" /></div>
                                    <div><img src="{{asset('visituer/assets/imgs/shop/thumbnail-7.jpg')}}"  alt="product image" /></div>
                                    <div><img src="{{asset('visituer/assets/imgs/shop/thumbnail-8.jpg')}}"  alt="product image" /></div>
                                    <div><img src="{{asset('visituer/assets/imgs/shop/thumbnail-9.jpg')}}"  alt="product image" /></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">Seeds of Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">$38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">$52</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header  -->
    <header class="header-area header-style-1 header-height-2">
     
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                
                      
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Pierres Dècoratives </li>
                                    <li>Intérieures </li>
                                    <li>& Extérieures</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                               
                                <li>
                                    <a class="language-dropdown-active" href="#">English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="#"><img src="{{asset('visituer/assets/imgs/theme/flag-fr.png')}}"  alt="" />Français</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{asset('visituer/assets/imgs/theme/flag-dt.png')}}"  alt="" />Arabic</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{asset('visituer/assets/imgs/theme/flag-ru.png')}}"  alt="" />English</a>
                                        </li>
                                    </ul>
                                </li>

                                 <li>Need help? Call Us: <strong class="text-brand"> +213549927773</strong></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <img src="{{asset('admin/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon" style="width: 80px; height: auto;">

                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#"  style="    border: 2px solid #c3a082;
                            ">
                                <select class="select-active">
                                    <option>Toutes Catégories</option>
                               
                                </select>
                                <input type="text"  placeholder="Search for items..." />
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                           
                            
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Nest" src="{{asset('visituer/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <a href="shop-cart.html"><span class="lable">Cart</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest" src="{{asset('visituer/assets/imgs/shop/thumbnail-3.jpg')}}"  /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest" src="{{asset('visituer/assets/imgs/shop/thumbnail-2.jpg')}}"  /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-action-icon-2">
                           
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                     
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                            </div>
                                            <div class="shopping-cart-button">
                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <img src="{{asset('admin/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon" style="width: 80px; height: auto;">
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categories-button-active" href="#" style="    background: #c3a082;">
                                <span class="fi-rs-apps"></span>  Toutes Catégories
                                <i class="fi-rs-angle-down"></i>
                            </a>    
                            <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading ">
                                <div class="d-flex categori-dropdown-inner ">                          

                                    <ul class="more_slide_open
                                    ">
                                        <li>
                                            <a href="shop-grid-right.html"> <img src="{{asset('visituer/assets/imgs/theme/icons/category-1.svg')}}" alt="" />Milks and Dairies</a>
                                        </li>
                                     
                                    </ul>
                                  
                                </div>
                            
                                <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                            <nav>
                                <ul>
                                    
                                    <li>
                                        <a class="active" href="#home">Accueil  </a>
                                        
                                    </li>
                                    <li>
                                        <a href="#shop">Achats <i></i></a>

                                    </li>
                                    <li>
                                        <a href="#About">À propos du</a>

                                    </li>
                             
                                
                                    
                                   
                                    <li>
                                        <a    href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <div class="hotline d-none d-lg-flex">
                        <img src="{{asset('visituer/assets/imgs/theme/icons/icon-headphone.svg')}}" alt="hotline" />
                        <p>+213549927773<span>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 24/7 Support Center</span></p>
                    </div>
                    <div class="header-action-icon-2 d-block d-lg-none">
                        <div class="burger-icon burger-icon-white">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                      
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="#">
                                    <img alt="Nest" src="{{asset('visituer/assets/imgs/theme/icons/icon-cart.svg')}}" />
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest" src="{{asset('visituer/assets/imgs/shop/thumbnail-3.jpg')}}"  /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest" src="{{asset('visituer/assets/imgs/shop/thumbnail-4.jpg')}}"  /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

   <!-- End Header  -->




    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <img src="{{asset('admin/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon" style="width: 80px; height: auto;">
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href="#home">Accueil</a>
                                 
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#shop">Achats</a>
                          
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#About">À propos du</a>
                          
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#Contact">Contact</a>
                          
                            </li>
                         
                            <li class="menu-item-has-children">
                                <a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <ul class="contact-infor">
                            <li><img src="{{asset('visituer/assets/imgs/theme/icons/icon-location.svg')}}" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                            <li><img src="{{asset('visituer/assets/imgs/theme/icons/icon-contact.svg')}}" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                            <li><img src="{{asset('visituer/assets/imgs/theme/icons/icon-email-2.svg')}}" alt="" /><strong>Email:</strong><span>sale@Nest.com</span></li>
                            <li><img src="{{asset('visituer/assets/imgs/theme/icons/icon-clock.svg')}}" alt="" /><strong>Hours:</strong><span>10:00 - 18:00, Mon - Sat</span></li>
                            <!-- إضافة "Contact Us" بجانب المعلومات الحالية -->
                        </ul>
                                            </div>
               
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-facebook-white.svg')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-twitter-white.svg')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-instagram-white.svg')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-pinterest-white.svg')}}" alt="" /></a>
                    <a href="#"><img src="{{asset('visituer/assets/imgs/theme/icons/icon-youtube-white.svg')}}" alt="" /></a>
                </div>
                <div class="site-copyright">Copyright 2023 © Deca Brica. All rights reserved. Powered by Sarra mousselmal.</div>
            </div>
        </div>
    </div>
    <!--End header-->














    
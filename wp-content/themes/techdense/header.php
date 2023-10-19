
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

    <!--Poppoins Font Family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!--Fontawesome-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/all.min.css">
    
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.min.css">
</head>
<body <?php body_class();?>>
    <header>
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-main">
					<?php if(get_field('header_logo','options')):?>
                    <a href="<?php echo home_url();?>">
                        <img src="<?php the_field('header_logo','options');?>" alt="Techdense Logo" srcset="" class="img-fluid">
                    </a>
					<?php endif;?>
                </div>
                <div class="menu-wrapper">
					<?php wp_nav_menu(array(
						'menu' => 'Main Menu',
						'menu_class' => 'menu-list-wrapper',
						'container'=>''
					))?>
                    <!-- <ul class="menu-list-wrapper">
                        <li class="menu-item-has-children"><a href="javascript:void(0)" class="body-r16">Services <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.52944 0H4.86444C6.51944 0 7.19944 1.175 6.36944 2.61L5.69944 3.765L5.02944 4.92C4.19944 6.355 2.84444 6.355 2.01444 4.92L1.34444 3.765L0.674444 2.61C-0.140556 1.175 0.534444 0 2.19444 0H3.52944Z" fill="#575E8D"/>
                            </svg>
                            </a>
                            <ul class="sub-menu">
                                <li class="submenu-wrapper">
                                    <label>SERVICES</label>
                                    <div class="submenu-col-wrapper">
                                        <div class="submenu-col">
                                            <ul>
                                                <li>
                                                    <div class="submenu-item-wrapper">
                                                      <div class="-submenu-icon-wrapper">
                                                        <img src="<?php echo get_template_directory_uri()?>/images/software-develope-submenu-icon.svg" alt="" srcset="" class="img-fluid">
                                                      </div>
                                                      <div class="submenu-link-wrapper">
                                                        <a href="">Software Development & Research</a>
                                                        <span>Tech & Research Solutions</span>
                                                      </div>  
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="submenu-item-wrapper">
                                                        <div class="-submenu-icon-wrapper">
                                                          <img src="images/software-develope-submenu-icon.svg" alt="" srcset="" class="img-fluid">
                                                        </div>
                                                        <div class="submenu-link-wrapper">
                                                          <a href="">Software Development & Research</a>
                                                          <span>Tech & Research Solutions</span>
                                                        </div>  
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="submenu-item-wrapper">
                                                        <div class="-submenu-icon-wrapper">
                                                          <img src="images/software-develope-submenu-icon.svg" alt="" srcset="" class="img-fluid">
                                                        </div>
                                                        <div class="submenu-link-wrapper">
                                                          <a href="">Software Development & Research</a>
                                                          <span>Tech & Research Solutions</span>
                                                        </div>  
                                                      </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="submenu-col">
                                            <ul>
                                                <li>
                                                    <div class="submenu-item-wrapper">
                                                      <div class="-submenu-icon-wrapper">
                                                        <img src="images/software-develope-submenu-icon.svg" alt="" srcset="" class="img-fluid">
                                                      </div>
                                                      <div class="submenu-link-wrapper">
                                                        <a href="">Software Development & Research</a>
                                                        <span>Tech & Research Solutions</span>
                                                      </div>  
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="submenu-item-wrapper">
                                                        <div class="-submenu-icon-wrapper">
                                                          <img src="images/software-develope-submenu-icon.svg" alt="" srcset="" class="img-fluid">
                                                        </div>
                                                        <div class="submenu-link-wrapper">
                                                          <a href="">Software Development & Research</a>
                                                          <span>Tech & Research Solutions</span>
                                                        </div>  
                                                      </div>
                                                </li>
                                                <li>
                                                    <div class="submenu-item-wrapper">
                                                        <div class="-submenu-icon-wrapper">
                                                          <img src="images/software-develope-submenu-icon.svg" alt="" srcset="" class="img-fluid">
                                                        </div>
                                                        <div class="submenu-link-wrapper">
                                                          <a href="">Software Development & Research</a>
                                                          <span>Tech & Research Solutions</span>
                                                        </div>  
                                                      </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="see-all-services-wrapper">
                                        <a href="">See All Services <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.9999 9L15.2928 5.70711C15.6834 5.31658 15.6834 4.68342 15.2928 4.29289L11.9999 1M14.9999 5L0.999939 5" stroke="#0E0E2F" stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="" class="body-r16">Case Studies</a></li>
                        <li class="menu-item-has-children"><a href="" class="body-r16">About Us
                        </li>
                        <li><a href="" class="body-r16">Blog</a></li>
                    </ul> -->
                    <div class="toggle-btn-wrapper">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
                <div class="pricing-wrapper">
					<?php if(get_field('get_pricing','options')): 
						$getPricingLink = get_field('get_pricing','option');?>
                    	<a href="<?php echo $getPricingLink['url']; ?>" class="filled-btn">
						<?php if(get_field('pricing_icon','options')):?> <img src="<?php the_field('pricing_icon','options');?>" alt="" srcset="" class="img-fluid"> <?php endif;?>
						<?php echo $getPricingLink['title']; ?></a>
					<?php endif;?>
                </div>
            </div>
        </div>
    </header>
	<?php if(is_page(16)) {?>
	<section class="breadcrumbs-sec">
        <div class="container">
            <div class="bread-crumbs-wrapper">
                <ul>
                    <li><a href=""><i class="fa-solid fa-house"></i></a> <i class="fa-solid fa-chevron-right"></i> </li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
    </section>
	<?php }?>
	<main>
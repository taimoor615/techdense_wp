
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
                    <a href="index.html">
                        <img src="<?php echo get_template_directory_uri()?>/images/logo-img.svg" alt="Techdense Logo" srcset="" class="img-fluid">
                    </a>
                </div>
                <div class="menu-wrapper">
                    <ul class="menu-list-wrapper">
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
                        <li class="menu-item-has-children"><a href="" class="body-r16">About Us <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.52944 0H4.86444C6.51944 0 7.19944 1.175 6.36944 2.61L5.69944 3.765L5.02944 4.92C4.19944 6.355 2.84444 6.355 2.01444 4.92L1.34444 3.765L0.674444 2.61C-0.140556 1.175 0.534444 0 2.19444 0H3.52944Z" fill="#575E8D"/>
                            </svg></a>
                            <!-- <ul class="sub-menu">
                                <li><a href="" class="body-r16">Dropdown 1</a></li>
                                <li><a href="" class="body-r16">Dropdown 2</a></li>
                                <li><a href="" class="body-r16">Dropdown 3</a></li>
                                <li><a href="" class="body-r16">Dropdown 4</a></li>
                            </ul> -->
                        </li>
                        <li><a href="" class="body-r16">Blog</a></li>
                    </ul>
                    <div class="toggle-btn-wrapper">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
                <div class="pricing-wrapper">
                    <a href="" class="filled-btn"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M3.1152 4.88854L3.11521 4.88855L3.11676 4.88459C3.3139 4.38355 3.62875 3.91456 4.0835 3.48555L4.0893 3.48008L4.09498 3.47449C4.62177 2.95593 5.14071 2.75 5.64884 2.75C5.82381 2.75 5.99198 2.78783 6.13429 2.85614L6.13425 2.85622L6.14454 2.86097C6.29313 2.92955 6.41465 3.02601 6.51219 3.16691L6.51215 3.16694L6.51715 3.17398L8.83715 6.44398L8.83714 6.44399L8.84019 6.44823C8.99302 6.66049 9.09129 6.83904 9.15468 6.99398L9.15458 6.99401L9.15948 7.00544C9.22024 7.14722 9.23884 7.25575 9.23884 7.32C9.23884 7.40903 9.21398 7.51553 9.13819 7.64004L9.13188 7.6504L9.12592 7.66096C9.0378 7.81685 8.89452 8.00365 8.68851 8.20967L8.68338 8.2148L8.67834 8.22003L7.92243 9.00579C7.66443 9.26699 7.54884 9.59078 7.54884 9.93C7.54884 10.0811 7.56892 10.2127 7.60123 10.3419L7.61159 10.3833L7.62659 10.4233C7.64619 10.4756 7.66587 10.522 7.67833 10.5514C7.67958 10.5543 7.68076 10.5571 7.68186 10.5597C7.69485 10.5904 7.69741 10.5975 7.69742 10.5975L7.71844 10.6605L7.75042 10.7191C7.96586 11.1141 8.31303 11.5888 8.7663 12.1245L8.76626 12.1245L8.77171 12.1308C9.22934 12.6596 9.72007 13.2016 10.2535 13.7453L10.2597 13.7516L10.266 13.7577L10.2682 13.7598C10.4308 13.918 10.5957 14.0783 10.7622 14.236L8.55597 16.4422C8.38844 16.2842 8.22328 16.1238 8.06049 15.961C7.05714 14.9478 6.15272 13.8875 5.34647 12.7804C4.5537 11.678 3.92392 10.5871 3.46959 9.51784C3.02149 8.45326 2.80884 7.46267 2.80884 6.54C2.80884 5.94888 2.91298 5.39408 3.1152 4.88854Z" fill="white" stroke="white" stroke-width="1.5"/>
                        <path d="M21.1042 19.0922L21.108 19.0846C21.1272 19.0462 21.1439 19.0037 21.1743 18.9226C21.2449 18.7232 21.2788 18.5203 21.2788 18.33C21.2788 18.169 21.2467 18.0176 21.1777 17.8418C21.1308 17.7401 21.0501 17.6362 20.8919 17.5267L20.8846 17.5216L20.8846 17.5216L17.581 15.1761C17.3616 15.0273 17.1804 14.9279 17.0248 14.8642C16.8826 14.806 16.7789 14.79 16.6988 14.79C16.6026 14.79 16.506 14.8133 16.3788 14.8907L16.3577 14.9035L16.3357 14.915C16.1977 14.987 16.0188 15.1207 15.7991 15.3404L15.7956 15.3439L15.7956 15.3439L15.0371 16.0925C14.7944 16.3342 14.4773 16.48 14.0988 16.48C13.9507 16.48 13.7751 16.4634 13.5855 16.3923L13.5693 16.3862L13.5534 16.3794C13.5121 16.3617 13.4738 16.3441 13.4466 16.3317C13.4439 16.3304 13.4413 16.3292 13.4388 16.3281C13.4064 16.3132 13.3954 16.3084 13.3903 16.3064L13.3547 16.2922L13.3208 16.2744C13.2241 16.2238 13.1231 16.1658 13.0185 16.101L10.7845 18.335C10.9373 18.4509 11.0936 18.5672 11.2533 18.6859C12.3514 19.4851 13.4513 20.115 14.5428 20.5801C15.6175 21.038 16.6074 21.25 17.5088 21.25C18.1022 21.25 18.6462 21.1387 19.1462 20.9353L19.2751 20.8829C19.7305 20.6789 20.1481 20.3715 20.5431 19.9364L21.1042 19.0922ZM21.1042 19.0922L21.1006 19.0998M21.1042 19.0922L21.1006 19.0998M21.1006 19.0998C20.9604 19.3967 20.7808 19.6741 20.5432 19.9362L21.1006 19.0998ZM19.1084 20.9542C19.1074 20.9547 19.1089 20.954 19.1108 20.953L19.1084 20.9542Z" fill="white" stroke="white" stroke-width="1.5"/>
                        </svg> Schedule a Call</a>
                </div>
            </div>
        </div>
    </header>

	<main>
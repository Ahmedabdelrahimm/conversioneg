<?php include('config/language.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo getCurrentLanguage(); ?>" dir="<?php echo getLanguageDirection(); ?>">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="dev_raj">
      <title><?php _e('page_title_home', 'Conversion EG | Convert to comfort'); ?></title>
      <link rel="icon" href="assets/img/logos/cropped-Logo-32x32.png" sizes="32x32" />
      <link rel="icon" href="assets/img/logos/cropped-Logo-192x192.png" sizes="192x192" />
      <link rel="apple-touch-icon" href="assets/img/logos/cropped-Logo-180x180.png" />
      <meta name="msapplication-TileImage" content="assets/img/logos/cropped-Logo-270x270.png" />
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/icons.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/fancybox.min.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <style>
         /* Floating Contact Icons */
         .floating-contact {
            position: fixed;
            left: 20px;
            bottom: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 10px;
         }
         
         .floating-contact a {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            font-size: 24px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            animation: pulse 2s infinite;
         }
         
         .floating-contact a:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0,0,0,0.25);
         }
         
         .floating-contact .whatsapp {
            background: #25D366;
         }
         
         .floating-contact .phone {
            background: #007bff;
         }
         
         @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
         }
         
         /* Mobile responsive */
         @media (max-width: 768px) {
            .floating-contact {
               left: 15px;
               bottom: 15px;
            }
            
            .floating-contact a {
               width: 50px;
               height: 50px;
               font-size: 20px;
            }
         }
         
         /* Services Page Custom Styles */
         .about-wrapper {
            padding: 80px 0;
         }
         
         .about-content {
            padding: 30px 0;
         }
         
         .about-title {
            font-size: 28px;
            font-weight: 600;
            color: var(--tj-heading-primary);
            margin-bottom: 20px;
            font-family: var(--tj-ff-heading);
         }
         
         .about-text {
            font-size: 16px;
            line-height: 1.8;
            color: var(--tj-text-body);
            margin-bottom: 15px;
         }
         
         .about-features {
            margin-top: 25px;
         }
         
         .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 15px;
            color: var(--tj-text-body);
         }
         
         .feature-item i {
            color: var(--tj-theme-primary);
            margin-right: 12px;
            font-size: 16px;
            min-width: 20px;
         }
         
         .about-thumb {
            text-align: center;
         }
         
         .about-thumb img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
         }
         
         .bg-light {
            background-color: var(--tj-grey-7) !important;
         }
         
         .flex-row-reverse {
            flex-direction: row-reverse;
         }
         
         @media (max-width: 991px) {
            .about-content {
               padding: 20px 0;
            }
            
            .about-title {
               font-size: 24px;
            }
            
            .about-thumb {
               margin-top: 30px;
            }
         }
         
         /* Gallery Styles */
         .project-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
         }
         
         .project-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
         }
         
         .project-thumb {
            position: relative;
            overflow: hidden;
         }
         
         .project-thumb img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
         }
         
         .project-item:hover .project-thumb img {
            transform: scale(1.1);
         }
         
         .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(234, 24, 38, 0.9), rgba(16, 32, 57, 0.9));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
         }
         
         .project-item:hover .project-overlay {
            opacity: 1;
         }
         
         .project-content {
            text-align: center;
            color: white;
            padding: 20px;
         }
         
         .project-content h4 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
            font-family: var(--tj-ff-heading);
         }
         
         .project-content p {
            font-size: 14px;
            margin: 0;
            opacity: 0.9;
         }
         
                                                 /* Language Switcher Styles - Simple Click */
           .language-switcher {
              position: relative;
              display: inline-block;
              margin-right: 15px;
              z-index: 99999;
           }
          
          .language-switcher .current-lang {
             padding: 10px 15px;
             background: transparent;
             border: none;
             cursor: pointer;
             display: flex;
             align-items: center;
             gap: 8px;
             font-size: 14px;
             color: white;
             transition: all 0.4s ease-out 0s;
             font-family: var(--tj-ff-body);
             font-weight: 500;
             border-radius: 4px;
          }
          
          .language-switcher .current-lang:hover {
             color: var(--tj-heading-secondary);
             background: rgba(255, 255, 255, 0.1);
          }
          
          .language-switcher .lang-option {
             padding: 8px 12px;
             margin: 0 5px;
             color: white;
             text-decoration: none;
             transition: all 0.4s ease-out 0s;
             font-family: var(--tj-ff-body);
             font-size: 14px;
             font-weight: 500;
             border-radius: 4px;
             background: transparent;
          }
          
          .language-switcher .lang-option:hover {
             color: var(--tj-heading-secondary);
             background: rgba(255, 255, 255, 0.1);
          }
          
          .language-switcher .lang-option.active {
             color: var(--tj-heading-secondary);
             background: rgba(255, 255, 255, 0.2);
          }
         
                   /* RTL Support */
          [dir="rtl"] .language-switcher .lang-dropdown {
             right: auto;
             left: 0;
          }
          
          [dir="rtl"] .language-switcher .lang-option:hover {
             padding-left: 25px !important;
             padding-right: 30px !important;
          }
          
          [dir="rtl"] .floating-contact {
             left: auto;
             right: 20px;
          }
          
          [dir="rtl"] .floating-contact a {
             transform: scaleX(-1);
          }
          
          /* Keep top navbar orientation fixed */
          .header__top {
             direction: ltr !important;
          }
          
          .header__top_widget {
             direction: ltr !important;
          }
          
          .top-left {
             direction: ltr !important;
          }
          
          .top-right {
             direction: ltr !important;
          }
         
                   @media (max-width: 768px) {
             [dir="rtl"] .floating-contact {
                right: 15px;
             }
          }
          
          /* Center align project images */
          .project-single .project-thumb {
              display: flex;
              justify-content: center;
              align-items: center;
              text-align: center;
          }
          
          .project-single .project-thumb img {
              max-width: 100%;
              height: auto;
              display: block;
              margin: 0 auto;
          }
          
          .project-single-inner {
              text-align: center;
          }
          
          /* Additional centering for MEP projects grid */
          .projects.grid {
              text-align: center;
          }
          
          .project-single {
              text-align: center;
          }
          
          .project-single .project-thumb {
              display: flex;
              justify-content: center;
              align-items: center;
              width: 100%;
          }
          
          .project-single .project-thumb img {
              max-width: 100%;
              height: auto;
              display: block;
              margin: 0 auto;
              object-fit: cover;
          }
          
          /* Center the grid items */
          .grid-item {
              text-align: center;
          }
          
          /* Ensure the project container is centered */
          .project-wrapper .container {
              text-align: center;
          }
          
      </style>
   </head>
   <body class="<?php echo getLanguageClass(); ?>">
      <!-- Floating Contact Icons -->
      <div class="floating-contact">
         <a href="https://wa.me/201001420402" class="whatsapp" target="_blank" title="<?php _e('whatsapp'); ?>">
            <i class="fa-brands fa-whatsapp"></i>
         </a>
         <a href="tel:+201001420402" class="phone" title="<?php _e('call_us'); ?>">
            <i class="fa-solid fa-phone"></i>
         </a>
      </div>
      
      <div class="body-overlay"></div>
      <div class="hamburger-area">
         <div class="hamburger_bg"></div>
         <div class="hamburger_wrapper">
            <div class="hamburger_top d-flex align-items-center justify-content-between">
               <div class="hamburger_close">
                  <button class="hamburger_close_btn"><i class="fa-thin fa-times"></i></button>
               </div>
            </div>
            <div class="hamburger_menu">
               <div class="mobile_menu"></div>
            </div>
            <div class="hamburger_bottom">
               <div class="contact_info">
                  <h4 class="title"><?php _e('contact_info'); ?></h4>
                  <ul class="info_list">
                     <li class="info_item">
                        <div class="item_inner d-flex align-items-center gap-2">
                           <div class="icon">
                              <a target="_blank" href="tel:+201001420402">
                              <i class="fal fa-phone"></i>
                              </a>
                           </div>
                           <div class="text">
                              <a target="_blank" href="tel:+201001420402"><?php _e('phone'); ?></a>
                           </div>
                        </div>
                     </li>
                     <li class="info_item">
                        <div class="item_inner d-flex align-items-center gap-2">
                           <div class="icon">
                              <a target="_blank" href="mailto:<?php _e('email'); ?>">
                              <i class="fal fa-envelope"></i>
                              </a>
                           </div>
                           <div class="text">
                              <a target="_blank" href="mailto:<?php _e('email'); ?>"><?php _e('email'); ?></a>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="socials">
                  <ul>
                     <li><a target="_blank" href="https://www.facebook.com/conversionegypt"><i class="fa-brands fa-facebook-f"></i></a></li>
                     <li><a target="_blank" href="https://www.instagram.com/conversion.eg"><i class="fa-brands fa-instagram"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <header class="header-3 is-sticky">
         <div class="header__top d-none d-xl-block">
            <div class="container">
               <div class="header__top_widget">
                  <div class="top-left">
                     <p><a href="tel:+201001420402"><?php _e('phone'); ?></a> | <a href="mailto:<?php _e('email'); ?>"><?php _e('email'); ?></a></p>
                  </div>
                  <div class="top-right">
                     <div class="top__ social">
                        <a target="_blank" href="https://www.facebook.com/conversionegypt"><i class="fa-brands fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.instagram.com/conversion.eg"><i class="fa-brands fa-instagram"></i></a>
                     </div>
                                                                                       <!-- Language Switcher -->
                        <div class="language-switcher">
                           <a href="<?php echo getLanguageUrl('en'); ?>" class="lang-option <?php echo getCurrentLanguage() === 'en' ? 'active' : ''; ?>">
                              EN
                           </a>
                           <span style="color: white; margin: 0 5px;">|</span>
                           <a href="<?php echo getLanguageUrl('ar'); ?>" class="lang-option <?php echo getCurrentLanguage() === 'ar' ? 'active' : ''; ?>">
                              عربي
                           </a>
                        </div>
                     <a href="contact.php" class="tj-btn-primary style-3"><?php _e('contact_us'); ?></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="main__header">
            <div class="container">
               <div class="row  align-items-center">
                  <div class=" col-lg-2 col-md-4 col-5">
                     <div class="logo">
                        <a href="index.php">
                        <img src="assets/img/logos/logo.png" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-10 col-md-8 col-7 text-end">
                     <div class="main-menu">
                        <nav id="mobile-menu">
                           <ul class=" d-none d-lg-block">
                              <li><a href="index.php"><?php _e('home'); ?></a></li>
                              <li><a href="about.php"><?php _e('about_us'); ?></a></li>
                              <li class="has-dropdown">
                                 <a href="services.php"><?php _e('services_products'); ?></a>
                                 <ul class="sub-menu">
                                    <li><a href="mep-projects.php"><?php _e('mep_projects'); ?></a></li>
                                    <li><a href="central-heating.php"><?php _e('central_heating'); ?></a></li>
                                    <li><a href="central-domestic-hot-water.php"><?php _e('central_domestic_hot_water'); ?></a></li>
                                    <li><a href="swimming-pools-heating.php"><?php _e('swimming_pools_heating'); ?></a></li>
                                    <li><a href="heating-products.php"><?php _e('heating_products'); ?></a></li>
                                 </ul>
                              </li>
                              <li><a href="gallery.php"><?php _e('gallery'); ?></a></li>
                              <li><a href="contact.php"><?php _e('contact_us'); ?></a></li>
                           </ul>
                        </nav>
                        <div class="header-contact d-flex justify-content-start align-items-center">
                           <div id="hamburger" class="d-lg-none">
                              <i class="fa-light fa-bars-sort"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                             </header>
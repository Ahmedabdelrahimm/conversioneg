<?php include('header.php'); ?>
<section class="breadcrumb-wrapper hero-page overflow-hidden bg-cover" data-bg-image="assets/img/breadcrumb.png">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb-content">
               <div class="breadcrumb__link">
                  <ul>
                     <li><a href="index.php"><?php _e('home'); ?></a></li>
                     <li><a href="services.php"><?php _e('services_products'); ?></a></li>
                     <li><?php _e('swimming_pools_heating'); ?></li>
                  </ul>
               </div>
               <h2 class="title wow fadeInUp " data-wow-delay="300ms"><?php _e('swimming_pools_heating'); ?></h2>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="project-wrapper overflow-hidden section-padding">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 offset-xl-3">
            <div class="section__heading text-center wow fadeInUp " data-wow-delay="300ms">
               <h2 class="section_title"><?php _e('swimming_pools_heating'); ?></h2>
               <div class="sec_dec">
                  <p><?php _e('swimming_pools_heating_desc'); ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-xl-4">
            <div class="row">
               <div class="col-lg-12 col-md-6 mb-4">
                  <div class="gallery-card wow fadeInUp" data-wow-delay="0.2s">
                     <div class="gallery-image">
                        <img src="assets/img/swimming-pools-heating/1.jpg" alt="<?php _e('swimming_pools_1_alt'); ?>" class="img-fluid">
                        <div class="gallery-overlay">
                           <div class="overlay-content">
                              <h4 style="color: white !important; text-align: center;"><?php _e('swimming_pools_1_title'); ?></h4>
                              <p style="color: white !important; text-align: center;"><?php _e('swimming_pools_1_desc'); ?></p>
                              <a href="assets/img/swimming-pools-heating/1.jpg" class="gallery-link" data-fancybox="swimming-gallery">
                                 <i class="fa-light fa-search-plus"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="col-lg-12 col-md-6 mb-4">
                  <div class="gallery-card wow fadeInUp" data-wow-delay="0.3s">
                     <div class="gallery-image">
                        <img src="assets/img/swimming-pools-heating/2.jpg" alt="<?php _e('swimming_pools_2_alt'); ?>" class="img-fluid">
                        <div class="gallery-overlay">
                           <div class="overlay-content">
                              <h4 style="color: white !important; text-align: center;"><?php _e('swimming_pools_2_title'); ?></h4>
                              <p style="color: white !important; text-align: center;"><?php _e('swimming_pools_2_desc'); ?></p>
                              <a href="assets/img/swimming-pools-heating/2.jpg" class="gallery-link" data-fancybox="swimming-gallery">
                                 <i class="fa-light fa-search-plus"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<style>
/* Gallery Styles for Swimming Pools Heating */
.gallery-card {
   position: relative;
   border-radius: 12px;
   overflow: hidden;
   box-shadow: 0 4px 20px rgba(0,0,0,0.1);
   transition: all 0.3s ease;
}

.gallery-card:hover {
   transform: translateY(-5px);
   box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.gallery-image {
   position: relative;
   overflow: hidden;
}

.gallery-image img {
   width: 100%;
   height: 300px;
   object-fit: cover;
   transition: transform 0.3s ease;
}

.gallery-card:hover .gallery-image img {
   transform: scale(1.1);
}

.gallery-overlay {
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background: rgba(0,0,0,0.8);
   display: flex;
   align-items: center;
   justify-content: center;
   opacity: 0;
   transition: opacity 0.3s ease;
}

.gallery-card:hover .gallery-overlay {
   opacity: 1;
}

.overlay-content {
   text-align: center;
   color: white;
   padding: 20px;
}

.overlay-content h4 {
   font-size: 20px;
   font-weight: 600;
   margin-bottom: 10px;
   font-family: var(--tj-ff-heading);
}

.overlay-content p {
   font-size: 14px;
   margin-bottom: 15px;
   opacity: 0.9;
}

.gallery-link {
   display: inline-block;
   width: 50px;
   height: 50px;
   background: var(--tj-heading-primary);
   color: white;
   border-radius: 50%;
   display: flex;
   align-items: center;
   justify-content: center;
   text-decoration: none;
   transition: all 0.3s ease;
}

.gallery-link:hover {
   background: white;
   color: var(--tj-heading-primary);
   transform: scale(1.1);
}

/* Force section heading to be centered in both LTR and RTL */
.section__heading {
   text-align: center !important;
}

.section__heading .section_title {
   text-align: center !important;
}

.section__heading .sec_dec p {
   text-align: center !important;
}

/* Specific RTL overrides to ensure centering in Arabic */
[dir="rtl"] .section__heading {
   text-align: center !important;
}

[dir="rtl"] .section__heading .section_title {
   text-align: center !important;
}

[dir="rtl"] .section__heading .sec_dec p {
   text-align: center !important;
}

/* Additional specificity for RTL */
html[dir="rtl"] .section__heading {
   text-align: center !important;
}

html[dir="rtl"] .section__heading .section_title {
   text-align: center !important;
}

html[dir="rtl"] .section__heading .sec_dec p {
   text-align: center !important;
}

/* Responsive */
@media (max-width: 768px) {
   .gallery-image img {
       height: 250px;
   }
}
</style>

<?php include('footer.php'); ?>
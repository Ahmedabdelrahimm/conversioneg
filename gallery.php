<?php include('header.php'); ?>
<section class="breadcrumb-wrapper hero-page bg-cover" data-bg-image="assets/img/breadcrumb.png">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb-content">
               <div class="breadcrumb__link">
                  <ul>
                     <li><a href="index.php"><?php _e('home'); ?></a></li>
                     <li><?php _e('gallery'); ?></li>
                  </ul>
               </div>
               <h2 class="title wow fadeInUp" data-wow-delay="300ms"><?php _e('gallery_hero_title'); ?></h2>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="gallery-wrapper section-padding">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 offset-xl-3 wow fadeInUp" data-wow-delay="300ms">
            <div class="section__heading text-center">
               <h2 class="section_title"><?php _e('gallery_section_title'); ?></h2>
               <p class="sec_dec"><?php _e('gallery_section_desc'); ?></p>
            </div>
         </div>
      </div>
      
      <!-- Gallery Filters -->
      <div class="row">
         <div class="col-12">
            <div class="gallery-filter text-center mb-5">
               <button class="filter-btn active" data-filter="all"><?php _e('gallery_filter_all'); ?></button>
               <button class="filter-btn" data-filter="heating"><?php _e('gallery_filter_heating'); ?></button>
               <button class="filter-btn" data-filter="mep"><?php _e('gallery_filter_mep'); ?></button>
               <button class="filter-btn" data-filter="products"><?php _e('gallery_filter_products'); ?></button>
               <button class="filter-btn" data-filter="towel-warmers"><?php _e('gallery_filter_towel_warmers'); ?></button>
            </div>
         </div>
      </div>
      
      <!-- Gallery Grid -->
      <div class="row gallery-grid">
         <!-- Heating Systems -->
         <div class="col-lg-6 col-md-6 mb-4 gallery-item heating" data-category="heating">
            <div class="gallery-card wow fadeInUp" data-wow-delay="0.2s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Radiators/R1.jpg'; ?>" alt="Modern Radiator System" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Central Heating Systems</h4>
                        <p style="color: white !important;">Professional heating solutions for optimal comfort and energy efficiency</p>
                        <a href="<?php echo 'assets/new img/Radiators/R1.jpg'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="col-lg-6 col-md-6 mb-4 gallery-item heating" data-category="heating">
            <div class="gallery-card wow fadeInUp" data-wow-delay="0.3s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Under Floor/Educational U1.webp'; ?>" alt="Underfloor Heating System" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Underfloor Heating</h4>
                        <p style="color: white !important;">Efficient and comfortable heating solutions for modern homes</p>
                        <a href="<?php echo 'assets/new img/Under Floor/Educational U1.webp'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="col-lg-6 col-md-6 mb-4 gallery-item heating" data-category="heating">
            <div class="gallery-card wow fadeInUp" data-wow-delay="0.4s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Heat Pump/Heat Pump 1.jpg'; ?>" alt="Heat Pump System" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Heat Pump Systems</h4>
                        <p style="color: white !important;">Energy-efficient heating and cooling solutions for year-round comfort</p>
                        <a href="<?php echo 'assets/new img/Heat Pump/Heat Pump 1.jpg'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="col-lg-6 col-md-6 mb-4 gallery-item heating" data-category="heating">
            <div class="gallery-card wow fadeInUp" data-wow-delay="0.5s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Domestic Hot Water/Boiler 1.webp'; ?>" alt="Hot Water Systems" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Hot Water Systems</h4>
                        <p style="color: white !important;">Reliable and efficient hot water solutions for your home</p>
                        <a href="<?php echo 'assets/new img/Domestic Hot Water/Boiler 1.webp'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- MEP Projects -->
         <div class="col-lg-6 col-md-6 mb-4 gallery-item mep" data-category="mep">
            <div class="gallery-card wow fadeInUp" data-wow-delay="0.6s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/MEP/MEP 1.webp'; ?>" alt="MEP Engineering Systems" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">MEP Engineering</h4>
                        <p style="color: white !important;">Complete MEP solutions for modern buildings</p>
                        <a href="<?php echo 'assets/new img/MEP/MEP 1.webp'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="col-lg-6 col-md-6 mb-4 gallery-item mep" data-category="mep">
            <div class="gallery-card wow fadeInUp" data-wow-delay="0.7s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/MEP/MEP 2.webp'; ?>" alt="MEP Installation" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">MEP Installation</h4>
                        <p style="color: white !important;">Professional MEP system installation and maintenance</p>
                        <a href="<?php echo 'assets/new img/MEP/MEP 2.webp'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- Heating Products -->
         <div class="col-lg-6 col-md-6 mb-4 gallery-item products" data-category="products">
            <div class="gallery-card wow fadeInUp" data-wow-delay="0.8s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Products/Radiator 1.jpg'; ?>" alt="Premium Heating Products" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Premium Radiators</h4>
                        <p style="color: white !important;">High-quality radiators for efficient heating</p>
                        <a href="<?php echo 'assets/new img/Products/Radiator 1.jpg'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="col-lg-6 col-md-6 mb-4 gallery-item products" data-category="products">
            <div class="gallery-card wow fadeInUp" data-wow-delay="0.9s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Products/Fireplace 1.jpg'; ?>" alt="Modern Fireplaces" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Modern Fireplaces</h4>
                        <p style="color: white !important;">Stylish and efficient fireplace solutions</p>
                        <a href="<?php echo 'assets/new img/Products/Fireplace 1.jpg'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- Towel Warmers -->
         <div class="col-lg-6 col-md-6 mb-4 gallery-item towel-warmers" data-category="towel-warmers">
            <div class="gallery-card wow fadeInUp" data-wow-delay="1.0s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Towel Warmers/T1.jpg'; ?>" alt="Premium Towel Warmers" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Premium Towel Warmers</h4>
                        <p style="color: white !important;">Luxury towel warmers for ultimate comfort</p>
                        <a href="<?php echo 'assets/new img/Towel Warmers/T1.jpg'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="col-lg-6 col-md-6 mb-4 gallery-item towel-warmers" data-category="towel-warmers">
            <div class="gallery-card wow fadeInUp" data-wow-delay="1.1s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Towel Warmers/T2.jpg'; ?>" alt="Modern Towel Warmers" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Modern Towel Warmers</h4>
                        <p style="color: white !important;">Contemporary design meets functionality</p>
                        <a href="<?php echo 'assets/new img/Towel Warmers/T2.jpg'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         
         
         <!-- Swimming Pools & Jacuzzi -->
         <div class="col-lg-6 col-md-6 mb-4 gallery-item pools" data-category="pools">
            <div class="gallery-card wow fadeInUp" data-wow-delay="1.4s">
               <div class="gallery-image">
                  <img src="<?php echo 'assets/new img/Pools & Jacuzzi/Pool 1.jpg'; ?>" alt="Swimming Pool Heating" class="img-fluid">
                  <div class="gallery-overlay">
                     <div class="overlay-content">
                        <h4 style="color: white !important;">Swimming Pool Heating</h4>
                        <p style="color: white !important;">Year-round pool comfort with efficient heating</p>
                        <a href="<?php echo 'assets/new img/Pools & Jacuzzi/Pool 1.jpg'; ?>" class="gallery-link" data-fancybox="gallery">
                           <i class="fa-light fa-search-plus"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<!-- Gallery Stats Section -->
<section class="stats-wrapper section-padding bg-light">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 offset-xl-3 wow fadeInUp" data-wow-delay="300ms">
            <div class="section__heading text-center">
               <h2 class="section_title"><?php _e('gallery_stats_title'); ?></h2>
               <p class="sec_dec"><?php _e('gallery_stats_desc'); ?></p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card text-center wow fadeInUp" data-wow-delay="0.2s">
               <div class="stat-icon">
                  <i class="fa-solid fa-home" style="font-size: 48px; color: var(--tj-heading-primary);"></i>
               </div>
               <h3 class="stat-number"><span class="counter">1377</span>+</h3>
               <p class="stat-label"><?php _e('gallery_stats_projects'); ?></p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card text-center wow fadeInUp" data-wow-delay="0.3s">
               <div class="stat-icon">
                  <i class="fa-solid fa-users" style="font-size: 48px; color: var(--tj-heading-primary);"></i>
               </div>
               <h3 class="stat-number"><span class="counter">850</span>+</h3>
               <p class="stat-label"><?php _e('gallery_stats_clients'); ?></p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card text-center wow fadeInUp" data-wow-delay="0.4s">
               <div class="stat-icon">
                  <i class="fa-solid fa-clock" style="font-size: 48px; color: var(--tj-heading-primary);"></i>
               </div>
               <h3 class="stat-number"><span class="counter">15</span>+</h3>
               <p class="stat-label"><?php _e('gallery_stats_experience'); ?></p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card text-center wow fadeInUp" data-wow-delay="0.5s">
               <div class="stat-icon">
                  <i class="fa-solid fa-award" style="font-size: 48px; color: var(--tj-heading-primary);"></i>
               </div>
               <h3 class="stat-number"><span class="counter">99.99</span>%</h3>
               <p class="stat-label"><?php _e('gallery_stats_satisfaction'); ?></p>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="cta-wrapper cta-1 bg-cover overflow-hidden" data-bg-image="assets/img/cta.png">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.6s">
            <div class="single-text text-center text-md-start">
               <h2 class="section_title"><?php _e('gallery_cta_title'); ?></h2>
            </div>
         </div>
         <div class="col-md-4 text-center text-md-end wow fadeInRight mt-4 mt-lg-0" data-wow-delay="0.6s">
            <div class="cta-btn">
               <a href="contact.php" class="tj-btn-primary style-2"><?php _e('get_quote'); ?><i class="fa-light fa-arrow-right-long"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>

<style>
/* Gallery Styles */
.gallery-wrapper {
   padding: 80px 0;
}

.gallery-filter {
   margin-bottom: 40px;
}

.filter-btn {
   background: transparent;
   border: 2px solid var(--tj-heading-primary);
   color: var(--tj-heading-primary);
   padding: 12px 24px;
   margin: 0 8px 8px 0;
   border-radius: 30px;
   font-weight: 500;
   transition: all 0.3s ease;
   cursor: pointer;
}

.filter-btn:hover,
.filter-btn.active {
   background: var(--tj-heading-primary);
   color: white;
}

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

/* Stats Section */
.stats-wrapper {
   padding: 80px 0;
}

.stat-card {
   padding: 30px 20px;
   background: white;
   border-radius: 12px;
   box-shadow: 0 4px 20px rgba(0,0,0,0.08);
   transition: all 0.3s ease;
}

.stat-card:hover {
   transform: translateY(-5px);
   box-shadow: 0 8px 30px rgba(0,0,0,0.12);
}

.stat-icon {
   margin-bottom: 20px;
}

.stat-number {
   font-size: 36px;
   font-weight: 700;
   color: var(--tj-heading-primary);
   margin-bottom: 10px;
   font-family: var(--tj-ff-heading);
}

.stat-label {
   font-size: 16px;
   color: var(--tj-text-body);
   margin: 0;
   font-weight: 500;
}

/* Responsive */
@media (max-width: 768px) {
   .gallery-image img {
       height: 250px;
   }
   
   .filter-btn {
       margin: 0 4px 8px 0;
       padding: 10px 20px;
       font-size: 14px;
   }
   
   .stat-number {
       font-size: 28px;
   }
   
   .stat-label {
       font-size: 14px;
   }
}

/* Hide gallery items by default for filtering */
.gallery-item {
   display: block;
}

.gallery-item.hidden {
   display: none;
}
</style>

<script>
// Gallery Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
   const filterBtns = document.querySelectorAll('.filter-btn');
   const galleryItems = document.querySelectorAll('.gallery-item');
   
   filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
         // Remove active class from all buttons
         filterBtns.forEach(b => b.classList.remove('active'));
         // Add active class to clicked button
         this.classList.add('active');
         
         const filter = this.getAttribute('data-filter');
         
         galleryItems.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
               item.classList.remove('hidden');
            } else {
               item.classList.add('hidden');
            }
         });
      });
   });
});
</script>

<?php include('footer.php'); ?>
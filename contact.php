<?php include('header.php'); ?>
<section class="breadcrumb-wrapper hero-page overflow-hidden bg-cover" data-bg-image="assets/img/breadcrumb.png">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb-content">
               <div class="breadcrumb__link">
                  <ul>
                     <li><a href="index.php">Home </a></li>
                     <li>Contact</li>
                  </ul>
               </div>
               <h2 class="title wow fadeInUp " data-wow-delay="300ms">Contact Us</h2>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="contact_info-wrapper section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="tj-single-info wow fadeInUp " data-wow-delay="300ms">
               <div class="tj-info-head"></div>
               <div class="tj-body">
                  <div class="icon-thumb">
                     <div class="icons"><i class="fa-light fa-phone-volume"></i></div>
                  </div>
                  <div class="content text-center">
                     <h4 class="title">Any Questions</h4>
                     <a href="tel:+20226720008">(+202) 26720008</a>
                     <a href="tel:+20226720007">(+202) 26720007</a>
                     <a href="tel:+201001420402">(+2) 01001420402</a>
                     <a href="tel:+201206977333">(+2) 01206977333</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="tj-single-info wow fadeInUp " data-wow-delay="500ms">
               <div class="tj-info-head"></div>
               <div class="tj-body">
                  <div class="icon-thumb">
                     <div class="icons"><i class="fa-light fa-envelope-open"></i></div>
                  </div>
                  <div class="content text-center">
                     <h4 class="title">Email Address</h4>
                     <a href="mailto:info@conversion-eg.com">info@conversion-eg.com</a>
                     <a href="mailto:contactus@conversion-eg.com">contactus@conversion-eg.com</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="tj-single-info wow fadeInUp " data-wow-delay="700ms">
               <div class="tj-info-head"></div>
               <div class="tj-body">
                  <div class="icon-thumb">
                     <div class="icons"><i class="fa-light fa-map-marked-alt"></i></div>
                  </div>
                  <div class="content text-center">
                     <h4 class="title">Office Location</h4>
                     <p>52 Makram Ebeid Street, Nasr City, Cairo, Egypt</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="contact-wrapper section-bottom">
   <div class="contact-map" style="height:150px;"></div>
   <div class="container">
      <div class="contact-widget">
         <div class="row">
            <div class="col-xl-6 offset-xl-3">
               <div class="section__heading text-center">
                  <h2 class="section_title">GET IN TOUCH!</h2>
               </div>
            </div>
         </div>
         <form id="contact-form" class="contact-form">
            <div class="row">
               <div class="col-sm-6">
                  <div class="from-group">
                     <input type="text" class="form-control" name="confname" placeholder="First Name">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="from-group">
                     <input type="text" class="form-control" name="conlname" placeholder="Last Name">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="from-group">
                     <input type="text" class="form-control" name="conPhone" placeholder="Phone">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="from-group">
                     <input type="email" class="form-control" name="conEmail" placeholder="Email Address">
                  </div>
               </div>
               <div class="col-sm-12 my-2">
                  <div class="from-group">
                     <textarea name="conMessage" class="form-control" cols="30" rows="10"
                        placeholder="Message"></textarea>
                  </div>
               </div>
               <div class="col-sm-12 text-center">
                  <div class="from-group">
                     <button type="submit" class="tj-btn-primary">Send <i class="fa-light fa-arrow-right-long"></i></button>
                     <div class="alert con_message"></div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>
<?php include('footer.php'); ?>
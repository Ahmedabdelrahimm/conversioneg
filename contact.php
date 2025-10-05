<?php include('header.php'); ?>
<section class="breadcrumb-wrapper hero-page overflow-hidden bg-cover" data-bg-image="assets/img/breadcrumb.png">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="breadcrumb-content">
               <div class="breadcrumb__link">
                  <ul>
                     <li><a href="index.php"><?php _e('home'); ?> </a></li>
                     <li><?php _e('contact_us'); ?></li>
                  </ul>
               </div>
               <h2 class="title wow fadeInUp " data-wow-delay="300ms"><?php _e('contact_us'); ?></h2>
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
               <div class="tj-body">
                  <div class="icon-thumb">
                     <div class="icons"><i class="fa-light fa-phone-volume"></i></div>
                  </div>
                  <div class="content text-center">
                     <h4 class="title"><?php _e('contact_any_questions'); ?></h4>
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
               <div class="tj-body">
                  <div class="icon-thumb">
                     <div class="icons"><i class="fa-light fa-envelope-open"></i></div>
                  </div>
                  <div class="content text-center">
                     <h4 class="title"><?php _e('contact_email_address'); ?></h4>
                     <a href="mailto:info@conversion-eg.com">info@conversion-eg.com</a>
                     <a href="mailto:contactus@conversion-eg.com">contactus@conversion-eg.com</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="tj-single-info wow fadeInUp " data-wow-delay="700ms">
               <div class="tj-body">
                  <div class="icon-thumb">
                     <div class="icons"><i class="fa-light fa-map-marked-alt"></i></div>
                  </div>
                  <div class="content text-center">
                     <h4 class="title"><?php _e('contact_office_location'); ?></h4>
                     <p><?php _e('footer_address_value'); ?></p>
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
                  <h2 class="section_title"><?php _e('contact_get_in_touch'); ?></h2>
               </div>
            </div>
         </div>
         <form id="contact-form" class="contact-form" method="post" action="assets/mail/contact-form-hostinger-smtp.php" data-ajax="false" novalidate>
            <div class="row">
               <div class="col-sm-6">
                  <div class="from-group">
                     <input type="text" class="form-control" name="confname" placeholder="<?php _e('contact_first_name'); ?>" required>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="from-group">
                     <input type="text" class="form-control" name="conlname" placeholder="<?php _e('contact_last_name'); ?>" required>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="from-group">
                     <input type="text" class="form-control" name="conPhone" placeholder="<?php _e('contact_phone'); ?>" required>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="from-group">
                     <input type="email" class="form-control" name="conEmail" placeholder="<?php _e('contact_email_address_placeholder'); ?>" required>
                  </div>
               </div>
               <div class="col-sm-12 my-2">
                   <div class="from-group">
                      <textarea name="conMessage" class="form-control" cols="30" rows="10"
                         placeholder="<?php _e('contact_message'); ?>" required></textarea>
                   </div>
                </div>
                <input type="hidden" name="conSubject" value="Contact Form Submission">
               <div class="col-sm-12 text-center">
                  <div class="from-group">
                     <button type="submit" class="tj-btn-primary"><?php _e('contact_send'); ?> <i class="fa-light fa-arrow-right-long"></i></button>
                     <div class="alert con_message"></div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>

<!-- Success Modal -->
<div class="modal fade" id="message_sent" tabindex="-1" role="dialog" aria-labelledby="messageSentLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="messageSentLabel"><?php _e('contact_success_title'); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="text-center">
               <i class="fa-solid fa-check-circle text-success" style="font-size: 48px; margin-bottom: 20px;"></i>
               <p><?php _e('contact_success_message'); ?></p>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><?php _e('contact_success_ok'); ?></button>
         </div>
      </div>
   </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="message_fail" tabindex="-1" role="dialog" aria-labelledby="messageFailLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="messageFailLabel"><?php _e('contact_error_title'); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="text-center">
               <i class="fa-solid fa-exclamation-triangle text-danger" style="font-size: 48px; margin-bottom: 20px;"></i>
               <p><?php _e('contact_error_message'); ?></p>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php _e('contact_error_ok'); ?></button>
         </div>
      </div>
   </div>
</div>

<script>
// Our custom form handler (no jQuery dependency)
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    if (!contactForm) return;
    
    // Remove any existing validation or event listeners
    contactForm.removeAttribute('data-validate');
    contactForm.setAttribute('novalidate', 'true');
    
    // Remove any jQuery validation if it exists
    if (typeof $ !== 'undefined' && $.fn.validate) {
        try {
            $(contactForm).off('.validate');
            $(contactForm).removeData('validator');
        } catch(e) {
            console.log('jQuery validation cleanup failed:', e);
        }
    }
    
    contactForm.addEventListener('submit', function(e) {
    console.log('Custom form handler triggered');
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    
    let form = this;
    let submitButton = form.querySelector('button[type="submit"]');
    
    // Prevent double submission
    if (submitButton.disabled) {
        return false;
    }
    
    // Disable submit button
    submitButton.disabled = true;
    submitButton.innerHTML = 'Sending... <i class="fa-light fa-spinner fa-spin"></i>';
    
    let formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(res => {
        console.log('Response status:', res.status);
        console.log('Response headers:', res.headers);
        return res.text(); // Get as text first to debug
    })
    .then(text => {
        console.log('Raw response:', text);
        console.log('Response length:', text.length);
        console.log('Response type:', typeof text);
        console.log('First 100 chars:', text.substring(0, 100));
        console.log('Last 100 chars:', text.substring(Math.max(0, text.length - 100)));
        
        try {
            const data = JSON.parse(text);
            console.log('Parsed JSON:', data);
            console.log('Status value:', data.status);
            console.log('Status type:', typeof data.status);
            console.log('Status === "success":', data.status === "success");
            
            if (data.status === "success") {
                console.log('Showing success modal');
                const successModal = new bootstrap.Modal(document.getElementById('message_sent'));
                successModal.show();
                form.reset();
            } else {
                console.log('Showing error modal - status was:', data.status);
                const errorModal = new bootstrap.Modal(document.getElementById('message_fail'));
                errorModal.show();
            }
        } catch (e) {
            console.log('JSON parse error:', e);
            console.log('Response was not JSON:', text);
            console.log('Character codes:', Array.from(text).map(c => c.charCodeAt(0)).slice(0, 50));
            new bootstrap.Modal(document.getElementById('message_fail')).show();
        }
    })
    .catch(error => {
        console.log('Fetch error:', error);
        new bootstrap.Modal(document.getElementById('message_fail')).show();
    })
    .finally(() => {
        // Re-enable submit button
        submitButton.disabled = false;
        submitButton.innerHTML = '<?php _e('contact_send'); ?> <i class="fa-light fa-arrow-right-long"></i>';
    });
    
    return false; // Prevent any other form handlers
    });
});
</script>

<?php include('footer.php'); ?>

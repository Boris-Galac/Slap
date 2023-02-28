<?php get_header(); ?>

<main class="contact-main">
  <!-- page indicator component -->
   <?php get_template_part('template-parts/content', 'page-indicator') ?>
  <!----------------------->
      <div class="container">
        <div class="contact-wrapper d-grid">
          <!-- contact info section -->
          <section class="contact-info-section">
            <div class="contact-info d-flex p-3">
              <div
                class="contact-info__card grid-center"
                role="region"
                aria-label="Adress Location"
              >
                <img
                  src="<?php echo get_theme_file_uri('/assets/icons/contact-location.svg') ?>"
                  alt="contact location"
                />
                <h2 class="contact-info__label">adresa</h2>
                <address class="contact-info__sublabel">
                  ulica otokara keršovanija 31, osijek
                </address>
              </div>
              <div
                class="contact-info__card grid-center"
                role="region"
                aria-label="Phone"
              >
                <img
                  src="<?php echo get_theme_file_uri('/assets/icons/contact-phone.svg') ?>"
                  alt="contact phone"
                />
                <h2 class="contact-info__label">phone</h2>
                <p class="contact-info__sublabel">+38531 213 556</p>
              </div>
              <div
                class="contact-info__card grid-center"
                role="region"
                aria-label="Mail"
              >
                <img
                  src="<?php echo get_theme_file_uri('/assets/icons/contact-mail.svg') ?>"
                  alt="contact location"
                />
                <h2 class="contact-info__label">mail</h2>
                <p class="contact-info__sublabel">udruga.slap@gmail.com</p>
              </div>
            </div>
          </section>
          <!----------------------->
          <!-- contact section -->
          <section class="contact d-grid">
            <div class="contact__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.7569212536255!2d18.688124916198095!3d45.555215235385674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7b0eebda6fb%3A0x2abd179167701c45!2sUl.%20Otokara%20Ker%C5%A1ovanija%2031%2C%2031000%2C%20Osijek!5e0!3m2!1sen!2shr!4v1677069719471!5m2!1sen!2shr"
                style="border: 0"
                class="contact__map-iframe"
                allowfullscreen="true"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
            <div class="contact__form d-grid">
                <!------- contact form ----->
              <?php get_template_part('template-parts/content', 'contact-form') ?>
              <!------------------->
            </div>
          </section>
          <!----------------------->
          <!-- contact-socials section -->
          <section class="contact-socials-section">
            <div class="contact-socials text-center">
              <h2 class="contact-socials__heading h2--heading">pratite nas</h2>
              <div class="contact-socials__wrapper d-flex">
                <div class="contact-socials__figure">
                  <img
                    src="<?php echo get_theme_file_uri('/assets/icons/figure-icon-2.svg') ?>"
                    alt="facebook icon"
                  />
                  <a
                    href="https://www.facebook.com/udrugaslap"
                    aria-label="Link to facebook"
                    target="_blank"
                    >www.facebook.com/udrugaslap</a
                  >
                </div>
                <div class="contact-socials__figure">
                  <img
                    src="<?php echo get_theme_file_uri('/assets/icons/figure-icon.svg') ?>"
                    alt="mail icon"
                  />
                  <a
                    href="mailto:udruga.slap@gmail.com"
                    aria-label="Link to gmail"
                    >udruga.slap@gmail.com</a
                  >
                </div>
                <div class="contact-socials__figure">
                  <img
                    src="<?php echo get_theme_file_uri('/assets/icons/figure-icon-1.svg') ?>"
                    alt="youtube icon"
                  />
                  <a
                    href="https://www.youtube.com/@UdrugaSlap"
                    target="_blank"
                    aria-label="Link to youtube chanel"
                    >www.youtube.com/@UdrugaSlap</a
                  >
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </main>
<?php get_footer(); ?>

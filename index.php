<?php get_header(); ?>

<main class="main">
  <section class="main__about wrapper" id="about" style="background-image: url(<?php echo get_theme_file_uri(
                                                                                  "/img/Animated-Shape-Background.svg"
                                                                                ) ?>)">
    <div class="main__about--inner">
      <h2 class="main__about--title">About Me</h2>
      <img src="<?php echo get_theme_file_uri("/img/undraw_programmer_imem.svg") ?>" alt="A Developer Woman" class="main__about--img" />
      <div class="main__about--description">
        <?php echo the_content(); ?>
      </div>
    </div>
  </section>

  <section class="main__skills wrapper" id="skills">
    <div class="main__skills--inner">
      <h2>Skills</h2>
      <div class="main__skills--container">
        <div class="main__skills--item">
          <img src="<?php echo get_theme_file_uri("/img/icon-html5_pyatol.svg") ?>" alt="CSS3 Logo" />
          <p>HTML5</p>
        </div>
        <div class="main__skills--item">
          <img src="<?php echo get_theme_file_uri("/img/icon-css3_hhizng.svg") ?>" alt="CSS3 Logo" />
          <p>CSS3</p>
        </div>
        <div class="main__skills--item">
          <img src="<?php echo get_theme_file_uri("/img/icon-javascript_vxwryl.svg") ?>" alt="JavaScript Logo" />
          <p>JavaScript</p>
        </div>
        <div class="main__skills--item">
          <img src="<?php echo get_theme_file_uri("/img/sass_icon.svg") ?>" alt="Sass Logo" />
          <p>Sass</p>
        </div>
        <div class="main__skills--item">
          <img src="<?php echo get_theme_file_uri("/img/icons8-wordpress.svg") ?>" alt="WordPress Logo" />
          <p>WordPress</p>
        </div>
      </div>
    </div>
  </section>

  <section class="main__portfolio" id="portfolio">
    <h2 class="main__portfolio--title">Portfolio</h2>

    <?php if (pll_current_language() == 'en') : ?>

      <div class="main__portfolio--container">

        <a href="<?php echo site_url('/crowdfunding-page') ?>" aria-label="View Crowdfunding Page Project" class="main__portfolio--item">
          <img src="<?php echo get_theme_file_uri("/img/crowdfunding_project_trimmed.png") ?>" alt="Crowdfunding Website" aria-label="View Blog Platform Page Project" />
          <span>Crowdfunding Website</span>
        </a>

        <a href="<?php echo site_url('/blogr-page') ?>" aria-label="View Blog Platform Page Project" class="main__portfolio--item">
          <img src="<?php echo get_theme_file_uri("/img/Blogr_project_trimmed.png") ?>" alt="Blog Platform Website" />
          <span>Blog Platform Landing Page</span>
        </a>

        <a href="<?php echo site_url('/base-apparel-page') ?>" class="main__portfolio--item">
          <img src="<?php echo get_theme_file_uri("/img/baseapparel-desktop.png") ?>" alt="Blog Platform Website" />
          <span>"Base Apparel" Coming Soon</span>
        </a>
      </div>
    <?php else : ?>
      <div class="main__portfolio--container">

        <a href="<?php echo site_url('/home-jp/crowdfunding-page') ?>" aria-label="View Crowdfunding Page Project" class="main__portfolio--item">
          <img src="<?php echo get_theme_file_uri("/img/crowdfunding_project_trimmed.png") ?>" alt="Crowdfunding Website" aria-label="View Blog Platform Page Project" />
          <span>Crowdfunding Website</span>
        </a>

        <a href="<?php echo site_url('/home-jp/blogr-page') ?>" aria-label="View Blog Platform Page Project" class="main__portfolio--item">
          <img src="<?php echo get_theme_file_uri("/img/Blogr_project_trimmed.png") ?>" alt="Blog Platform Website" />
          <span>Blog Platform Landing Page</span>
        </a>

        <a href="<?php echo site_url('/home-jp/base-apparel-page') ?>" class="main__portfolio--item">
          <img src="<?php echo get_theme_file_uri("/img/baseapparel-desktop.png") ?>" alt="Blog Platform Website" />
          <span>"Base Apparel" Coming Soon</span>
        </a>
      </div>
    <?php endif; ?>

  </section>
</main>

<footer class="footer" id="contact" style="background-image: url(<?php echo get_theme_file_uri("/img/World\ Map\ Background.svg") ?>)">
  <div class="footer__inner">
    <h2 class="footer__title">Contact</h2>
    <a href="mailto:xxxx@outlook.com" class="footer__item">
      <i class="fas fa-envelope footer__item--img-email"></i><span>yukohorita@outlook.com</span>
    </a>
    <a href="https://www.linkedin.com/in/yuko-horita-5b597a21b" class="footer__item" target="blank">
      <img src="<?php echo get_theme_file_uri("/img/LI-In-Bug.png") ?>" alt="" class="footer__item--img-linkedin" /><span>LinkedIn</span></a>
  </div>



  <?php get_footer(); ?>

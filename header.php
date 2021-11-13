<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YUKO HORITA | Home</title>

    <?php wp_head(  );?>
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jura:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <header class="header">
      <nav class="header__nav wrapper">
        <h1 class="header__nav--logo" aria-label="Yuko Horita">
          <a href="<?php echo site_url('/home')?>">Yuko Horita</a>
        </h1>
        <div class="header__nav--menu-container">
          <div class="header__icon-container">
            <button
              class="header__nav--language-icon"
              aria-label="Select Language"
              aria-expanded="false"
              aria-controls="language-menu"
            >
              <i
                class="fas fa-globe header__nav--language-img"
                aria-hidden="true"
              ></i>
            </button>

            <button
              class="hamburger-mobile-icon"
              aria-label="Open Mobile Menu"
              aria-expanded="false"
              aria-controls="mobile-menu"
            >
              <span aria-hidden="true"></span>
            </button>
            <ul class="header__nav--language-modal" id="language-menu">
            <?php pll_the_languages(array('dropdown' =>0));?>  
            </ul>
          </div>

          <ul class="header__nav--menus" id="mobile-menu">
            <li class="header__nav--about">
              <a href="#about" class="header__nav--link">About Me</a>
            </li>
            <li class="header__nav--skills">
              <a href="#skills" class="header__nav--link">Skills</a>
            </li>
            <li class="header__nav--portfolio">
              <a href="#portfolio" class="header__nav--link">Portfolio</a>
            </li>
            <li class="header__nav--contact">
              <a href="#contact" class="header__nav--link">Contact</a>
            </li>
          </ul>
        </div>
        <div class="nav-overlay"></div>
      </nav>
    </header>
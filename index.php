<? 
  require "assets/getID3/getid3/getid3.php";
  require "core/doctype.php";
?>
<style>
  .b-main-header-menu-button {
    position: fixed;
    align-items: center;
    right: 15px;
    top: 15px;
    margin: 0;
    background: rgba(255, 255, 255, 0);
    opacity: 1;
    display: flex;
    padding: 10px 15px;
    font-size: 15px;
    font-weight: bold;
    line-height: 0.6;
    letter-spacing: 0.8px;
    border-radius: 17px;
    transition: opacity 0.4s ease-in-out;
}
.b-main-header-menu-button .icofont-navigation-menu {
    flex-shrink: 0;
    display: block;
    position: relative;
    width: 18px;
    height: 3px;
    margin: 6px 0 6px 9px;
}
.b-main-header-menu-button .menu-label {
    color:  #000;
}
.b-main-header-menu-button .divider-menu {
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    width: 56%;
    height: 70%;
    background: #000;
}
.b-main-header-menu-button .icofont-navigation-menu::before {
    width: 100%;
    top: -6px;
    display: block;
    content: '';
    position: absolute;
    right: 0;
    height: 2px;
    background: #000;
  }
  .b-main-header-menu-button .icofont-navigation-menu::after {
    width: 78%;
    bottom: -6px;
    display: block;
    content: '';
    position: absolute;
    right: 0;
    height: 2px;
    background: #000;
  }
  .b-main-header-menu-button:hover .divider-menu {
    width: 100%;
  }
  .b-main-header-menu-button:hover .icofont-navigation-menu::after {
    width: 100%;
  }

  .mobile-nav-active .b-main-header-menu-button i {
    color: #000;
    font-size: 18px;
  }

  .b-main-header-menu-button-primary {
    position: fixed;
    align-items: center;
    right: 15px;
    top: 15px;
    margin: 0;
    background: #0563bb;
    opacity: 1;
    display: flex;
    padding: 10px 15px;
    font-size: 15px;
    font-weight: bold;
    line-height: 0.6;
    letter-spacing: 0.8px;
    border-radius: 17px;
    transition: opacity 0.4s ease-in-out;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
}
.b-main-header-menu-button-primary .icofont-navigation-menu {
    flex-shrink: 0;
    display: block;
    position: relative;
    width: 18px;
    height: 3px;
    margin: 6px 0 6px 9px;
}
.b-main-header-menu-button-primary .menu-label {
    color:  #fff;
}
.b-main-header-menu-button-primary .divider-menu {
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    width: 56%;
    height: 70%;
    background: #fff;
}
.b-main-header-menu-button-primary .icofont-navigation-menu::before {
    width: 100%;
    top: -6px;
    display: block;
    content: '';
    position: absolute;
    right: 0;
    height: 2px;
    background: #fff;
  }
  .b-main-header-menu-button-primary .icofont-navigation-menu::after {
    width: 78%;
    bottom: -6px;
    display: block;
    content: '';
    position: absolute;
    right: 0;
    height: 2px;
    background: #fff;
  }
  .b-main-header-menu-button-primary:hover .divider-menu {
    width: 100%;
  }
  .b-main-header-menu-button-primary:hover .icofont-navigation-menu::after {
    width: 100%;
  }
  .mobile-nav-active .b-main-header-menu-button-primary i {
    color: #fff;
    font-size: 18px;
  }
  .mobile-nav-active .mobile-nav-toggle span {
    display: none;
  }
</style>
  <button type="button" class="mobile-nav-toggle d-xl-none d-lg-none b-main-header-menu-button"><span class="menu-label">Меню</span><i class="icofont-navigation-menu"><span class="divider-menu"></span></i></button>
  <header id="header" class="d-flex flex-column justify-content-center">
    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Головна</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>Біографія</span></a></li>
        <li><a href="#portfolio"><i class="bx bx-images"></i> <span>Мої роботи</span></a></li>
        <!-- <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Контакти</span></a></li> -->
      </ul>
    </nav>
  </header>  
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Roman Kupchak</h1>
      <p><span class="typed" data-typed-items="PHP Developer & Web Developer"></span></p>
      <div class="social-links">
        <a href="https://github.com/romankupchak93/" class="youtube" target="_blank"><i class="bx bxl-github"></i></a>
        <a href="https://www.linkedin.com/in/roman-kupchak-164b07156/" target="_blank" class="soundcloud"><i class="bx bxl-linkedin"></i></a>
        <a href="https://www.facebook.com/romankupchak93" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/kupchak_roma/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </section>
  <main id="main">
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Біографія</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/i-am.jpg" class="img-fluid" alt="" style="border-radius: 10%;">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>PHP Developer &amp; Web Developer</h3>
            <!-- <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>День народження:</strong> 09 вересня 1993</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Місце проживання:</strong> Богородчани, Івано-Франківська обл.</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Телефон:</strong> +38 (050) 072-42-57</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> romankupchak93@gmail.com</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Місце роботи:</strong> ТОВ Техноінфософт</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Ступінь:</strong> Junior</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Досвід роботи:</strong> 2 роки</li>
                </ul>
              </div>
            </div>
            <p>
              Обожнюю свою сім'ю, роботу, баскетбол.
              
              <!-- Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores. -->
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Мої роботи</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Всі</li>
              <li data-filter=".portal">Портали</li>
              <li data-filter=".portfolio">Візитка</li>
              <!-- <li data-filter=".forte">Вокальна студія «FORTE»</li> -->
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?
            $getID3 = new getID3;
            $count = 0;
            if ($handle = opendir('gallery/portal/')) {
                  while (false !== ($file = readdir($handle))) {
                // while (false !== ($file = readdir($handle)) && $count < 10) {
                  // $count++;
                    if ($file != "." && $file != "..") {
                        $ThisFileInfo = $getID3->analyze("gallery/portal/".$file);  
                        echo '<div class="col-lg-4 col-md-6 portfolio-item portal">
                                <div class="portfolio-wrap">
                                  <img src="gallery/portal/'.$file.'" class="img-fluid" alt="Портали">
                                      <a href="gallery/portal/'.$file.'" data-gall="portfolioGallery" class="venobox" title="Портали">
                                        <div class="portfolio-info"></div>
                                      </a>
                                </div>
                              </div>';
                            }
                        }
                    }
            ?>
            <?
            $getID3 = new getID3;
            if ($handle = opendir('gallery/portfolio/')) {
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                        $ThisFileInfo = $getID3->analyze("gallery/portfolio/".$file);
                        echo '<div class="col-lg-4 col-md-6 portfolio-item portfolio">
                                <div class="portfolio-wrap">
                                  <img src="gallery/portfolio/'.$file.'" class="img-fluid" alt="Студія «Forte»">
                                      <a href="gallery/portfolio/'.$file.'" data-gall="portfolioGallery" class="venobox" title="Студія «Forte»">
                                        <div class="portfolio-info"></div>
                                      </a>
                                </div>
                              </div>';
                            }
                        }
                    }
            ?>
        </div>
      </div>
    </section>
    <style>
      .shadow-content {
          width: 100%;
          display: inline-block;
      }
      #main-news {
          width: 100%;
          column-count: 2;
          column-gap: 1%;
      }
      #news img {
        max-width: 100%
      }
      </style>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Контакти</h2>
        </div>
        <div class="row mt-1">
          <div class="col-lg-6">
            <div class="info">
              <a href="mailto: romankupchak93@gmail.com">
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>romankupchak93@gmail.com</p>
              </div>
              </a>
              <a href="tel: +380500724257">
              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+38 (050) 072-42-57</p>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?
  require 'core/footer.php';
?>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          GreenAudioPlayer.init({
              selector: '.player',
              stopOthersOnPlay: true
          });
          GreenAudioPlayer.init({
              selector: '.player-with-download',
              stopOthersOnPlay: true,
              showDownloadButton: true,
              enableKeystrokes: true
          });
          GreenAudioPlayer.init({
              selector: '.player-with-accessibility',
              stopOthersOnPlay: true,
              enableKeystrokes: true
          });
      });
  </script>
  </body>
</html>
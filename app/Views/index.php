<!DOCTYPE html>
<html lang="en">

<head>

     <title>Soft Landing Page by Tooplate</title>
     <!--

    Template 2106 Soft Landing

	http://www.tooplate.com/view/2106-soft-landing

    -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="/assets/css/owl.carousel.css">
     <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
     <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="/assets/css/tooplate-style.css">

</head>

<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Soft Landing</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">Features</a></li>
                         <li><a href="#about" class="smoothScroll">About us</a></li>
                         <li><a href="#pricing" class="smoothScroll">Pricing</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Say hello - <span>info@soft.co</span></a></li>
                    </ul>
               </div>

          </div>
     </section>


     <?php if (isset($hero) && is_array($hero)) : ?>
          <!-- FEATURE -->
          <section id="home" data-stellar-background-ratio="0.5">
               <div class="overlay"></div>
               <div class="container">
                    <div class="row">
                         <div class="col-md-offset-3 col-md-6 col-sm-12">
                              <div class="home-info">
                                   <?= implode('', $hero['text'] ?? []) ?>
                                   <form action="<?= $hero['form']['action'] ?? '' ?>" method="get" class="online-form">
                                        <?php implode('', $hero['form']['input'] ?? []) ?>
                                        <button type="submit" class="form-control"><?= $hero['form']['button'] ?? '' ?></button>
                                   </form>
                              </div>
                         </div>

                    </div>
               </div>
          </section>
     <?php endif; ?>

     <?php if (isset($features) && is_array($features)) : ?>
          <!-- FEATURE -->
          <section id="feature" data-stellar-background-ratio="0.5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title">
                                   <h1><?= $features['title'] ?? '' ?></h1>
                              </div>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <?php if (isset($features['tab']) && is_array($features['tab'])) : ?>
                                   <ul class="nav nav-tabs" role="tablist">
                                        <?php
                                        foreach ($features['tab'] as $key => $value) {
                                             $active = '';
                                             if ($key == 0) {
                                                  $active = 'active';
                                             }
                                             echo '<li class="' . ($active ?? '') . '">' . $value . '</li>';
                                        }
                                        ?>
                                   </ul>
                              <?php endif; ?>

                              <div class="tab-content">
                                   <?php if (isset($features['items']) && is_array($features['items'])) : ?>
                                        <?php foreach ($features['items'] as $key => $item) : $id = $key + 1; ?>
                                             <div class="tab-pane <?= $id == 1 ? 'active' : '' ?>" id="tab0<?= $id ?>" role="tabpanel">
                                                  <?php foreach ($item as $content) : ?>
                                                       <div class="tab-pane-item">
                                                            <?= implode('', $content) ?>
                                                       </div>
                                                  <?php endforeach; ?>
                                             </div>
                                        <?php endforeach; ?>
                                   <?php endif; ?>
                              </div>

                         </div>

                         <div class="col-md-6 col-sm-6">
                              <div class="feature-image">
                                   <img src="<?= $features['image'] ?? '' ?>" class="img-responsive" alt="Thin Laptop">
                              </div>
                         </div>

                    </div>
               </div>
          </section>
     <?php endif; ?>

     <?php if (isset($about) && is_array($about)) : ?>
          <!-- ABOUT -->
          <section id="about" data-stellar-background-ratio="0.5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-offset-3 col-md-6 col-sm-12">
                              <div class="section-title">
                                   <h1><?= $about['title'] ?? '' ?></h1>
                              </div>
                         </div>

                         <?php if (isset($about['teams']) && is_array($about['teams'])) : ?>
                              <?php foreach ($about['teams'] as $team) : ?>
                                   <div class="col-md-4 col-sm-4">
                                        <div class="team-thumb">
                                             <img src="<?= $team['image'] ?? '' ?>" class="img-responsive" alt="Andrew Orange">
                                             <div class="team-info team-thumb-up">
                                                  <?= implode('', $team['summary'] ?? []) ?>
                                             </div>
                                        </div>
                                   </div>
                              <?php endforeach; ?>
                         <?php endif; ?>

                    </div>
               </div>
          </section>
     <?php endif; ?>

     <?php if (isset($testimonial) && is_array($testimonial)) : ?>
          <!-- TESTIMONIAL -->
          <section id="testimonial" data-stellar-background-ratio="0.5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-6 col-sm-12">
                              <div class="testimonial-image"></div>
                         </div>

                         <div class="col-md-6 col-sm-12">
                              <div class="testimonial-info">

                                   <div class="section-title">
                                        <h1><?= $testimonial['title'] ?? '' ?></h1>
                                   </div>
                                   <?php if (isset($testimonial['comments']) && is_array($testimonial['comments'])) : ?>
                                        <div class="owl-carousel owl-theme">
                                             <?php foreach ($testimonial['comments'] as $comment) : ?>
                                                  <div class="item">
                                                       <h3><?= $comment['text'] ?? '' ?></h3>
                                                       <div class="testimonial-item">
                                                            <img src="<?= $comment['image'] ?? '' ?>" class="img-responsive" alt="Michael">
                                                            <h4><?= $comment['name'] ?? '' ?></h4>
                                                       </div>
                                                  </div>
                                             <?php endforeach; ?>
                                        </div>
                                   <?php endif; ?>
                              </div>
                         </div>

                    </div>
               </div>
          </section>
     <?php endif; ?>

     <?php if (isset($pricing) && is_array($pricing)) : ?>
          <!-- PRICING -->
          <section id="pricing" data-stellar-background-ratio="0.5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title">
                                   <h1><?= $pricing['title'] ?? '' ?></h1>
                              </div>
                         </div>

                         <?php if (isset($pricing['table']) && is_array($pricing['table'])) : ?>
                              <?php foreach ($pricing['table'] as $price) : ?>
                                   <div class="col-md-4 col-sm-6">
                                        <div class="pricing-thumb">
                                             <div class="pricing-title">
                                                  <h2><?= $price['label'] ?? '' ?></h2>
                                             </div>
                                             <?php
                                             if (isset($price['features']) && is_array($price['features'])) {
                                                  echo '<div class="pricing-info">';
                                                  foreach ($price['features'] as $feature) {
                                                       echo "<p>$feature</p>";
                                                  }
                                                  echo '</div>';
                                             }
                                             ?>
                                             <div class="pricing-bottom">
                                                  <span class="pricing-dollar"><?= $price['price'] ?? '' ?></span>
                                                  <?= $price['action'] ?? '' ?>
                                             </div>
                                        </div>
                                   </div>
                              <?php endforeach; ?>
                         <?php endif; ?>
                    </div>
               </div>
          </section>
     <?php endif; ?>

     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <form id="contact-form" role="form" action="/contact" method="post">
                              <div class="section-title">
                                   <h1>Say hello to us</h1>
                              </div>
                              <?php if (isset($message) && $message) {
                                   echo '<div class="alert alert-info">' . ($message) . '</div>';
                              } ?>

                              <div class="col-md-4 col-sm-4">
                                   <input type="text" class="form-control" placeholder="Full name" name="name" required="">
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="email" class="form-control" placeholder="Email address" name="email" required="">
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="8" placeholder="Your message" name="message" required=""></textarea>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2018 Company Name - Design:
                                   <a rel="nofollow" href="http://tooplate.com">Tooplate</a>
                              </p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="/assets/js/jquery.js"></script>
     <script src="/assets/js/bootstrap.min.js"></script>
     <script src="/assets/js/jquery.stellar.min.js"></script>
     <script src="/assets/js/owl.carousel.min.js"></script>
     <script src="/assets/js/smoothscroll.js"></script>
     <script src="/assets/js/custom.js"></script>

</body>

</html>
<?php get_header(); ?>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="index.php" class="logo">
              <h4>Suraj <br> <span>Online Works</span></h4>
            </a>
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>
              <!-- <li class="scroll-to-section"><div class="main-red-button"><a href="#track-work">Track Work</a></div></li>  -->
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <!-- <h2>Welcome to <em><span>Suraj </span>Online Works</em></h2> -->
                <h2>Welcome to <em><span><?php echo get_bloginfo('title'); ?></span></em></h2>
                <p>We provide all online services under one roof. Quality work and customer satisfaction is our topmost priority. Contact us now to get your work done at pocket-friendly costs.
                </p>
                <br>
                <div id="track-work">
                  <h4>Track Your Work:</h4>
                  <form id="search" action="#" method="GET" class="mt-3">
                    <fieldset>
                      <input type="text" id="tracking_id" name="tracking_id" style="border-radius:0;" placeholder="Enter Your Tracking ID..." autocomplete="on" required>
                    </fieldset>
                    <fieldset>
                      <button type="submit" class="main-button track-now">Search</button>
                    </fieldset>
                  </form>
                  <div class="tracking-info"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo get_theme_file_uri('assets/images/banner-right-image.png') ?>" alt="banner image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="features" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="<?php echo get_theme_file_uri('assets/images/about-left-image.png') ?>" alt="features image">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="<?php echo get_theme_file_uri('assets/images/service-icon-01.png')?>" alt="better customer service">
                  </div>
                  <div class="right-text">
                    <h4>Better Customer Service</h4>
                    <p>We never stop until our customer's issues are fixed. 24*7 Support.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="<?php echo get_theme_file_uri('assets/images/service-icon-02.png')?>" alt="quality work">
                  </div>
                  <div class="right-text">
                    <h4>Quality Work</h4>
                    <p>Quality of work is something we never compromise with.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="<?php echo get_theme_file_uri('assets/images/service-icon-03.png') ?>" alt="on-time delivery">
                  </div>
                  <div class="right-text">
                    <h4>On-Time Delivery</h4>
                    <p>People trust us because we always deliver work on time.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="<?php echo get_theme_file_uri('assets/images/service-icon-04.png') ?>" alt="work tracking">
                  </div>
                  <div class="right-text">
                    <h4>Work Tracking</h4>
                    <p>You can anytime track status of your work from our website.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="<?php echo get_theme_file_uri('assets/images/services-left-image.png') ?>" alt="about us image">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading">
            <h2>Who we are?</h2>
            <p>
              We at Suraj Online Works help people with all kinds of online services, 
              whether it is about booking online tickets, paying bills, filling a form, 
              or applying for government identities such as Aadhar Card, PAN Card, and 
              other certificates including - e-shram card, income certificate, 
              caste certificate and much more.
              <br>
              Our service cost is kept minimal to help as many people as we can.
            </p>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="second-bar progress-skill-bar">
                <h4>Ticket Booking</h4>
                <!-- <span>90%</span> -->
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="third-bar progress-skill-bar">
                <h4>Online Form Filling</h4>
                <!-- <span>95%</span> -->
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="second-bar progress-skill-bar">
                <h4>Other Online Works</h4>
                <!-- <span>92%</span> -->
                <div class="filled-bar"></div>
                <div class="full-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2 class="mb-5">What Our Shop <em>Offers</em> &amp; What We <span>Provide</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4 pt-4">
              <div class="card bg-transparent border">
                  <div class="card-body">
                      <img class="border-0 rounded" src="<?php echo get_theme_file_uri('assets/images/services/aadhar.jpg') ?>" alt="aadhar card">
                      <div class="content p-2 pt-3">
                          <h4 class="mb-2">Aadhar Card</h4>
                          <p>
                              Aadhar Card Creation, Correction & Updation, Aadhar Card Printing, etc.
                          </p>
                          <div class="text-left row p-2">
                            <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                                <a href="https://wa.me/919651885051" target="_blank" class="btn btn-success btn-block py-1" style="display:block;">
                                  <i class="fa fa-whatsapp"></i>  
                                  Whatsapp
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                                <a href="tel:+919651885051" class="btn btn-primary btn-block py-1" style="display:block;">
                                  <i class="fa fa-phone"></i>
                                  Call
                                </a>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4 pt-4">
            <div class="card bg-transparent border">
                <div class="card-body">
                    <img class="border-0 rounded" src="<?php echo get_theme_file_uri('assets/images/services/pan.jpg') ?>" alt="PAN Card">
                    <div class="content p-2 pt-3">
                        <h4 class="mb-2">PAN Card</h4>
                        <p>
                            Applying Online For PAN Card (Permanent Account Number)
                        </p>
                        <div class="text-left row p-2">
                          <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                              <a href="https://wa.me/919651885051" target="_blank" class="btn btn-success btn-block py-1" style="display:block;">
                                <i class="fa fa-whatsapp"></i>  
                                Whatsapp
                              </a>
                          </div>
                          <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                              <a href="tel:+919651885051" class="btn btn-primary btn-block py-1" style="display:block;">
                                <i class="fa fa-phone"></i>
                                Call
                              </a>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 pt-4">
            <div class="card bg-transparent border">
                <div class="card-body">
                    <img class="border-0 rounded" src="<?php echo get_theme_file_uri('assets/images/services/railway.jpg') ?>" alt="railway ticket">
                    <div class="content p-2 pt-3">
                        <h4 class="mb-2">Railway Ticket</h4>
                        <p>
                            Booking of Normal and Tatkal Ticket to any station(India) online.
                        </p>
                        <div class="text-left row p-2">
                          <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                              <a href="https://wa.me/919651885051" target="_blank" class="btn btn-success btn-block py-1" style="display:block;">
                                <i class="fa fa-whatsapp"></i>  
                                Whatsapp
                              </a>
                          </div>
                          <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                              <a href="tel:+919651885051" class="btn btn-primary btn-block py-1" style="display:block;">
                                <i class="fa fa-phone"></i>
                                Call
                              </a>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 pt-4">
            <div class="card bg-transparent border">
                <div class="card-body">
                    <img class="border-0 rounded" src="<?php echo get_theme_file_uri('assets/images/services/flight.jpg') ?>" alt="flight tickets">
                    <div class="content p-2 pt-3">
                        <h4 class="mb-2">Flight/Airplane Ticket</h4>
                        <p>
                            Booking of domestic and international Flight Tickets.
                        </p>
                        <div class="text-left row p-2">
                          <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                              <a href="https://wa.me/919651885051" target="_blank" class="btn btn-success btn-block py-1" style="display:block;">
                                <i class="fa fa-whatsapp"></i>  
                                Whatsapp
                              </a>
                          </div>
                          <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                              <a href="tel:+919651885051" class="btn btn-primary btn-block py-1" style="display:block;">
                                <i class="fa fa-phone"></i>
                                Call
                              </a>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 pt-4">
            <div class="card bg-transparent border">
                <div class="card-body">
                    <img class="border-0 rounded" src="<?php echo get_theme_file_uri('assets/images/services/electric.jpg') ?>" alt="electricity bill">
                    <div class="content p-2 pt-3">
                        <h4 class="mb-2">Electricity Bill</h4>
                        <p>
                            Get your Electricity Bill payment done online with us.
                        </p>
                        <div class="text-left row p-2">
                          <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                              <a href="https://wa.me/919651885051" target="_blank" class="btn btn-success btn-block py-1" style="display:block;">
                                <i class="fa fa-whatsapp"></i>  
                                Whatsapp
                              </a>
                          </div>
                          <div class="col-lg-6 col-md-12 col-6 pt-2 px-1">
                              <a href="tel:+919651885051" class="btn btn-primary btn-block py-1" style="display:block;">
                                <i class="fa fa-phone"></i>
                                Call
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
  
  <div id="our-team" class="our-team">
    <div class="container">
      <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="section-heading text-center mb-5">
          <h2>Meet our <span>Leadership</span></h2>
          <p>Our leadership team is responsible for defining our values and developing a global workforce that’s inclusive, unified, and empowered to solve our clients' greatest challenges.</p>
        </div>
      </div>
      <div class="row pb-2">
        <div class="col-lg-4 col-md-6 pt-3">
          <div class="card team-card">
              <img src="<?php echo get_theme_file_uri('assets/images/team/deepak.jpg') ?>" class="w-100" alt="deepak bharti">
              <div class="bg-light text-dark text-center py-2 team-info-single">
                <div>
                    <h5>Deepak Bharti</h5>
                    <p>Manager</p>
                    <div>
                      <a href="https://www.facebook.com/deepak.goyal.73594479" class="team-social-icon" target="_blank">
                        <i class="fa fa-facebook"></i>
                      </a>
                      <a href="https://www.instagram.com/deepak.goyal.73594479/" class="team-social-icon" target="_blank">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pt-3">
          <div class="card team-card">
            <img src="<?php echo get_theme_file_uri('assets/images/team/suraj.jpg') ?>" class="w-100" alt="suraj bharti">
            <div class="bg-light text-dark text-center py-2 team-info-single">
              <div>
                  <h5>Suraj Bharti</h5>
                  <p>Manager</p>
                  <div>
                    <a href="https://www.facebook.com/profile.php?id=100012422042902" class="team-social-icon" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/suraj32s/" class="team-social-icon" target="_blank">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pt-3">
          <div class="card team-card">
            <img src="<?php echo get_theme_file_uri('assets/images/team/abhishek.jpg') ?>" class="w-100" alt="abhishek bharti">
            <div class="bg-light text-dark text-center py-2 team-info-single">
              <div>
                  <h5>Abhishek Bharti</h5>
                  <p>Manager</p>
                  <div>
                    <a href="https://www.instagram.com/abhishekrao136/" class="team-social-icon" target="_blank">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="testimonials" style="padding:100px0px;">
    <div class="container">
      <div class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="section-heading text-center mb-5">
          <h2>What our <span>customers</span> say?</h2>
          <p>Here are some of the experiences shared by our customers!!</p>
        </div>
      </div>
      <div class="owl-carousel">
        <div>
          <div aria-hidden="true" tabindex="-1">
            <div class="single-testimonial text-center">
                <div class="inner-content">
                    <div class="qote-icon">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="text">
                        They helped me with my passport application. They were always 
                        available whenever I needed any help.
                    </p>
                    <div class="author mt-4">
                        <h4 class="name">
                            Suresh Kumar
                        </h4>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div>
          <div aria-hidden="true" tabindex="-1">
            <div class="single-testimonial text-center">
                <div class="inner-content">
                    <div class="qote-icon">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="text">
                        They were very speedier and booked my tatkal ticket on time. It was a great relief.
                    </p>
                    <div class="author mt-4">
                        <h4 class="name">
                            Reena Yadav
                        </h4>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div> 
          <div aria-hidden="true" tabindex="-1">
            <div class="single-testimonial text-center">
                <div class="inner-content">
                    <div class="qote-icon">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="text">
                        I never need to worry about my electricity bill now. 
                        I can get it done very easily by them.
                    </p>
                    <div class="author mt-4">
                        <h4 class="name">
                            Mukul Gupta
                        </h4>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div>
          <div aria-hidden="true" tabindex="-1">
            <div class="single-testimonial text-center">
                <div class="inner-content">
                    <div class="qote-icon">
                        <i class="fa fa-quote-left"></i>
                    </div>
                    <p class="text">
                       They are expert in online works. I always give all my 
                       online works to them and they deliver it on time. 
                    </p>
                    <div class="author mt-4">
                        <h4 class="name">
                            Vijay Diwedi
                        </h4>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="newsletter" class="subscribe-section">
    <div class="">
      <div class="subscribe-wrapper img-bg">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-7 px-4">
            <div class="section-title">
              <h2 class="text-white">Subscribe To Our Newsletter</h2>
              <p class="text-white pr-5">
                  Please Subscribe to our newsletter here to keep track of our services and updates related to them.
              </p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-5 px-4">
            <form action="#" class="subscribe-form">
              <input type="email" name="subs-email" id="subs-email" placeholder="Your Email" />
              <button type="submit" class="main-btn btn-hover">
                Subscribe
              </button>
              <span class="subscription-wait text-white"></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="<?php echo get_theme_file_uri('assets/images/blog-dec.png') ?>" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <img src="<?php echo get_theme_file_uri('assets/images/big-blog-thumb.jpg') ?>" alt="Workspace Desktop">
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i> 01 Jan 2022</li>
                  <li><i class="fa fa-user"></i> Suraj</li>
                  <li><i class="fa fa-folder"></i> Jan Seva Kendra</li>
                </ul>
                <h4>Helping people with online services</h4>
                <p>
                  We at Suraj Online Works help people with all kinds of online services 
                  whether it is about booking online tickets, paying bills, filling form or applying for 
                  government identities such as Aadhar, PAN and other certificates.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 02 Jan 2022</span>
                  <h4>Purpose of Aadhaar Card</h4>
                  <p>
                    Aadhaar system provides single source offline/online identity verification across 
                    the country for the residents. Once residents enroll, they can use their Aadhaar 
                    number to authenticate & establish their identity multiple times using 
                    electronic means or through offline verification.
                  </p>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 09 Jan 2022</span>
                  <h4>What is Tatkal ticket booking opening time?</h4>
                  <p>
                    Tatkal booking opens for the selected trains at 10:00 am for AC classes and 
                    for non-AC classes at 11:00 am , one day in advance of the date of journey.
                  </p>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 16 Jan 2022</span>
                  <h4>5 benefits of online bill payment service</h4>
                  <p>
                      1. Easy and convenient <br>
                      2. Secure and saves you money <br>
                      3. You get to stay organised without a fuss <br>
                      4. Rewards you <br>
                      5. Helps Your Credit Score
                    </ol>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Feel Free To Send Us a Message About Your Online Works</h2>
            <p>Usually, we call people back on the same day of inquiry. If you have an urgent need, you can call us or visit our shop directly.</p>
            <div class="phone-info">
              <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="tel:+919651885051">+91 96518 85051</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" class="contact-form" action="#" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="number" name="contact_number" id="contact_number" placeholder="Contact Number" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
              <span class="contact-wait"></span>
            </div>
            <div class="contact-dec">
              <img src="<?php echo get_theme_file_uri('assets/images/contact-decoration.png') ?>" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="scroll-top btn-danger color-white p-3">
    <i class="fa fa-long-arrow-up"></i>
  </a>

<?php get_footer(); ?>
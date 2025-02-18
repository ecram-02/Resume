
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "ecrammnthali9@gmail.com";
    
    // Proper email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ecram Mnthali | personal Blog</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <style>
            img{
                margin-top: 20px;
                border-radius: 10px;
                height: 150px;
            }
            #box{
                margin-bottom: 20px;
           }
        </style>
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 sticky-lg-top vh-100" id="box">
                    <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
                        <img class="w-100 img-fluid mb-4" src="img/profil.jpg" alt="Image" style=" border radius: 10px;">
                        <h1 class="text-primary mt-2">Ecram Mnthali</h1>
                        <div class="mb-4" style="height: 22px;">
                            <h4 class="typed-text-output d-inline-block text-light"></h4>
                            <div class="typed-text d-none">Website Designer, Website Developer, Front End Developer, Data visualisor, Database Administrator</div>
                        </div>
                        <div class="d-flex justify-content-center mt-auto mb-3">
                                <a class="btn btn-dark btn-square mx-1" href="https://www.facebook.com/profile.php?id=100088168096468"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-square mx-1" href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="d-flex align-items-end justify-content-between border-top">
                        <a href="https://wa.me/265990862654?text=Hello%2C%20I%20am%20interested%20in%20hiring%20you!" class="btn w-50 border-end" target="_blank">Hire me</a>
                        <a href="#contact" class="btn w-50 btn-scroll">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- About Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">About Me</h1>
                        <p>
                        Hi, my name is Ecram Mnthali. I am currently studying for a degree in Computer Systems and Security. 
                        I have 2 years of experience in web development and data visualization. I enjoy working with 
                        technology to create websites, analyze data, and improve digital solutions.
                        </p>
                        <div class="row mb-4">
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Name:</span> Ecram Mnthali
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Birthday:</span> 09 October 2002
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Degree:</span> Studying BSc in Computer Systems and Security
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Experience:</span> 2 years
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Phone:</span> +265884329097
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Email:</span> ecrammnthali9@gmail.com
                        </div>
                        <div class="col-sm-6 py-1">
                            <span class="fw-medium text-primary">Address:</span> Blantyre, Malawi
                        </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">2</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Years of</p>
                                        <h5 class="mb-0">Experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Happy</p>
                                        <h5 class="mb-0">Clients</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">7</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Complete</p>
                                        <h5 class="mb-0">Projects</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- About End -->

                    <!-- Skills Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Skills</h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">HTML</p>
                                        <p class="mb-2">95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">CSS</p>
                                        <p class="mb-2">60%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Power Bi</p>
                                        <p class="mb-2">40%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Javascript</p>
                                        <p class="mb-2">60%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">SQL</p>
                                        <p class="mb-2">65%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </section>

                    <!-- Services Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Services</h1>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                                    <h5 class="mb-2">Website Design & Development</h5>
                                    <p class="mb-0">I design and build websites that look great and work well on all devices.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fa-chart-bar mx-auto mb-4"></i> 
                                    <h5 class="mb-2">Data Visualization (Power BI)</h5>
                                    <p class="mb-0">I create clear and interactive reports using Power BI to help businesses understand their data.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                     <!-- Services End -->

                    <!-- Portfolio Start 
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Portfolio</h1>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 text-center mb-2">
                                        <ul class="list-inline mb-4" id="portfolio-flters">
                                            <li class="btn btn-secondary active"  data-filter="*"><i class="fa fa-star me-2"></i>All</li>
                                            <li class="btn btn-secondary" data-filter=".first"><i class="fa fa-laptop-code me-2"></i>Design</li>
                                            <li class="btn btn-secondary" data-filter=".second"><i class="fa fa-mobile-alt me-2"></i>Development</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row portfolio-container">
                                    <div class="col-md-6 mb-4 portfolio-item first">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                                    <i class="bi bi-plus text-light"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item second">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                                    <i class="bi bi-plus text-light"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item first">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                                    <i class="bi bi-plus text-light"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item second">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                            <div class="portfolio-btn d-flex align-items-center justify-content-center">
                                                <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                                    <i class="bi bi-plus text-light"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    Portfolio End 

                    Testimonial Start 
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Testimonial</h1>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">Client Name</p>
                                        <i>Profession</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Testimonial End -->

                   <!-- Contact Start -->
                    <section class="py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact">
                        <h1 class="title pb-3 mb-5">Contact Me</h1>
                        <form id="contact-form" action="contact.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-secondary" id="name" name="name" required placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-secondary" id="email" name="email" required placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-secondary" id="subject" name="subject" required placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" id="message" name="message" required style="height: 200px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <div id="form-message" class="mt-3"></div>
                    </section>
                    <!-- Contact End -->
                    <!-- Footer Start -->
                    <section class="wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary text-light text-center p-5">
                            <div class="d-flex justify-content-center mb-4">
                        
                                <a class="btn btn-dark btn-square mx-1" href="https://www.facebook.com/profile.php?id=100088168096468"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-square mx-1" href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-dark btn-square mx-1" href="https://wa.me/265990862654?text=Hello%2C%20I%20am%20interested%20in%20hiring%20you!" target="_blank"> <i class="fab fa-whatsapp"></i></a>
                            
                            </div>
                            <div class="d-flex justify-content-center mb-3">
                                <a class="text-light px-3 border-end" href="#">Privacy</a>
                                <a class="text-light px-3 border-end" href="#">Terms</a>
                                <a class="text-light px-3" href="#">Help</a>
                            </div>
							

							<p class="m-0">&copy; All Rights Reserved. Designed by <a href="#">E|Mnthali</a></p>
                        </div>
                    </section>
                    <!-- Footer End -->
                </div>
            </div>
        </div>

        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        
    </body>
</html>

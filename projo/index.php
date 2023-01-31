<?php
session_start();
include_once 'header.php';
?>
<style>
    #image{
        height:50px;
    }
</style>
<!--- Image Slider -->
<section class="showcase">
    <div class="container-fluid p-0">
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slide" data-slide-to="0" class="active"></li>
                <li data-target="#slide" data-slide-to="1"></li>
                <li data-target="#slide" data-slide-to="2"></li>
                <li data-target="#slide" data-slide-to="3"></li>
                <li data-target="#slide" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-0">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/students 4.jpg')"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>EDUCATION IS KEY TO SUCEESS</h2>
                            <p class="lead mb-0">Enjoy quality Services from Hiseps Board </p>
                        </div>
                    </div>
                    <!-- <img src="assets/students 4.jpg" alt=""> -->
                    <!-- <div class="carousel-caption">
                    <h3 class="display-2">EDUCATION IS KEY TO SUCCESS </h3>
                    <h4>Enjoy quality services from HISEPS BOARD</h4>
                    <button type="button" class="btn btn-outline-light btn-lg" id="btn-view">MORE DETAILS</button> -->

                    <!-- </div> -->
                </div>
                <div class="carousel-item ">

                    <div class="row g-0">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/student 3.jfif')"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>EDUCATION IS KEY TO SUCEESS</h2>
                            <p class="lead mb-0">Enjoy quality Services from Hiseps Board </p>
                        </div>
                    </div>
                    <!-- <h3 class="display-2">EDUCATION IS KEY TO SUCCESS </h3>
                    <h4>Enjoy quality services from HISEPS BOARD</h4> -->
                    <!-- <button type="button" class="btn btn-primary btn-lg" id="btn-order">MORE DETAILS</button> -->
                </div>

                <div class="carousel-item ">
                    <div class="row g-0">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/student 2.jpg')"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>EDUCATION IS KEY TO SUCEESS</h2>
                            <p class="lead mb-0">Enjoy quality Services from Hiseps Board </p>
                        </div>
                    </div>
                    <!-- <img src="assets/student 2.jpg" alt="">
                    <div class="carousel-caption">
                        <h3 class="display-2">EDUCATION IS KEY TO SUCCESS </h3>
                    <h4>Enjoy quality services from HISEPS BOARD</h4>
                    <button type="button" class="btn btn-outline-light btn-lg" id="btn-view">MORE DETAILS</button> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<!--- Meet the team -->

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4"></h1>
        </div>
    </div>
</div>
<hr>
<!--- Cards -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                    <h2>Easy to select school</h2>
                    <p class="lead mb-0">Select a high school of your choice. we offer you a list of all high schools within the country.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                    <h2>Education is power</h2>
                    <p class="lead mb-0">Education is key to sucess ,,,get empowered by acquiring knowledge.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                    <h2>Easy to Use</h2>
                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcases-->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/key.jpg')"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>The key to success</h2>
                <p class="lead mb-0">As the english saying depicts, "education is key to success".</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/book3.jfif')" id="image"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Love For Books</h2>
                <p class="lead mb-0">Books are a wealthy source of knowledge...we encourage all students to love reading variety of books so as to boost their intellect.</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/selection.jpg')"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Be selected and placed easily</h2>
                <p class="lead mb-0">At Hisebs we select students to join various high schools and place them according to their scores in their KCPE exams.</p>
            </div>
        </div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h2 class="section-subheading text-muted">reach us on:.</h2>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
        </form>
    </div>
</section>

<!-- Footer-->
<footer class="footer bg-light">
    <div class="container">
    <p class="text-muted small mb-4 mb-lg-0">&copy; HISEPS@ 2022. All Rights Reserved.</p>
    </div>
</footer>

</body>
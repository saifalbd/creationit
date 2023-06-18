<x-frontend-layout>
<!-- Breadcrumb -->
<div class="breadcrumbs" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        <ul>
                            <li><a href="{{route('frontend')}}">Home</a></li>
                            <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                        </ul>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<!-- Contact Us -->
<section class="contact-us section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <!-- Contact Form -->
                <div class="contact-form-area m-top-30">
                    <h4>Get In Touch</h4>
                    <form class="form" method="post" action="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="first_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <input type="text" name="last_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" name="email" placeholder="Type Subjects">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="icon"><i class="fa fa-tag"></i></div>
                                    <input type="text" name="subject" placeholder="Type Subjects">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group textarea">
                                    <div class="icon"><i class="fa fa-pencil"></i></div>
                                    <textarea type="textarea" name="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group button">
                                    <button type="submit" name="submit" class="bizwheel-btn theme-2">Send Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ End contact Form -->
            </div>
            <div class="col-lg-5 col-md-5 col-12">
                <div class="contact-box-main m-top-30">
                    <div class="contact-title">
                        <h2>Contact with us</h2>
                        <p>Use the media below to contact us or visit our office directly during office hours.</p>
                    </div>
                    <!-- Single Contact -->
                    <div class="single-contact-box">
                        <div class="c-icon"><i class="fa fa-map"></i></div>
                        <div class="c-text">
                            <h4>Address</h4>
                            <p>Shamshernagar Road, Beside of Shah Mostafa college, Moulvibazar</p>
                        </div>
                    </div>
                    <!--/ End Single Contact -->
                    <!-- Single Contact -->
                    <div class="single-contact-box">
                        <div class="c-icon"><i class="fa fa-phone"></i></div>
                        <div class="c-text">
                            <h4>Call Us Now</h4>
                            <p>  Mob.: 01777560463</p>
                        </div>
                    </div>
                    <!--/ End Single Contact -->
                    <!-- Single Contact -->
                    <div class="single-contact-box">
                        <div class="c-icon"><i class="fa fa-envelope-o"></i></div>
                        <div class="c-text">
                            <h4>Email Us</h4>
                            <p>creationit2020@gmail.com</p>
                        </div>
                    </div>
                    <!--/ End Single Contact -->
                 
                </div>
            </div>
        </div>
    </div>
</section>	
</x-frontend-layout>
    
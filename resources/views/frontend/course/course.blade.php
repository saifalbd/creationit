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
                                <li><a href="{{route('frontend')}}">Home <i class="fas fa-angle-right"></i></a> </li>
                                <li><a href="{{route('frontend.course')}}"> Course</a></li>
                            </ul>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / End Breadcrumb -->
    
    
    <section class="services section-bg section-space">
        <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="section-title  style2 text-center">
                        <div class="section-top">
                            <h1><span>Coruse</span><b>Details Course List</b></h1><h4> Following Course are available now</h4>
                        </div>
                        <div class="section-bottom">
                            <div class="text-style-two">
                                <p>Below is a list of our courses. You can get the details of the course of your choice from here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-main">
                        <div id="portfolio-item" class="portfolio-item-active">
                            
                            <div class="cbp-item business animation">
                                <!-- Single Portfolio -->
                                <div class="single-portfolio">
                                    <div class="portfolio-head overlay">
                                        <img src="/frontend/img/graphic.png" style="height: 220px;" alt="#">
                                        <a class="more" href="course_details.php?id=1"><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                    <div class="portfolio-content">
                                        <h4><a href="course_details.php?id=1">Diploma In Graphic Design</a></h4>
                                        <li>Duration: 4 Months</li>
                                        <li>Coruse Fee: 10000/-</li>
                                        <a class="btn btn-success btn-sm bizwheel-btn" style="margin-top: 9px; " href="{{route('frontend.admission')}}"><i class="fa fa-long-arrow-right"></i> Apply Now</a>
                                    </div>
                                </div>
                                <!--/ End Single Portfolio -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!--/ End Portfolio -->
        <!-- end content section	 -->
    
    </x-frontend-layout>
    
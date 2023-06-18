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
                                <li><a href="{{route('frontend.syllabus')}}"> Syllabus</a></li>
                            </ul>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / End Breadcrumb -->
    
    
    <section class="call-action">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title  style2 text-center">
                    <div class="section-top">
                        <h1><span>Academic</span><b>Syllabus</b></h1><h4></h4>
                    </div>
                     
                </div>
            </div>
        </div>
        <div class="table-responsive">

            <table id="example" class="table table-striped dt-responsive table-hover nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th> Course Name</th>
                            <th>Duration </th>
                            <th>Instructor </th>
                            <th>Action </th>
                        </tr>
                        <tr>
                            <td>Diploma in Graphic DESIGN</td>
                            <td>Arpa Paul</td>
                            <td>6 month</td>
                            <td>
                                <a href="" class="btn btn-outline-primary text-dark"> <i class="fas fa-file"></i> Read</a>
                                <a href="" class="btn btn-outline-warning text-dark"> <i class="fas fa-file-pdf"></i> PDF</a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>

            </table>
        </div>
    </div>
</section> 
    
    
    
    </x-frontend-layout>
    
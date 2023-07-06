<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap4.min.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>


<section class="myform-area">
    
           
    <div style="box-shadow: 0px 0px 5px rgb(120 125 129 / 30%); background: #2a095f;">
        <header class="header">
            <img src="/assets/img/logo.png" height="80" alt="" />
            <h4 style="margin-bottom: 0;"> eTCMS </h4>
        </header>
        <div class="form-area login-form">
            <form action="{{route('login.store')}}" method="post">
                @csrf
                <div class="form-input">
                  
                      
                    <div class="form-group ">
                        <label> USER ID</label>
                        <input type="text" value="creation@gmail.com" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required>
                        <span class="help-block"></span>
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
       
                    </div>
                    <div class="form-group ">
                        <label>PASSWORD</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" value="123456" name="password" required>
                        <span class="help-block"></span>
                        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
       
                    </div>
                    <div class="myform-button">
                        <button type="submit" class="myform-btn">LOGIN</button>
                    </div>
                    <div class="container pt-2">
                        {{-- <a class="btn btn-sm btn-rounded btn-info mt-2">
                            Admin Login
                        </a>
                        <a class="btn btn-sm btn-rounded btn-info mt-2">
                            Student Login
                        </a>
                        <a class="btn btn-sm btn-rounded btn-info mt-2">
                            Instractor Login
                        </a> --}}
                    </div>
            </form>
         </form>
        </div>
    </div>
    </div>
   


    <br>
    <p class="copyright-text text-center text-secondary"> &copy; 2021
        <a rel="nofollow" href="https://iqrasoft.net">Iqra Software Solutions</a> All right reserved
    </p>

</div>
</div>
</section>


<script src="/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
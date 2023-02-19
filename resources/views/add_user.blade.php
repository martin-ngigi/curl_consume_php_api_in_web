<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>cURL consume API</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style>
        form{
            margin-left: 20%;
            margin-right: 20%;
        }
      </style>
   </head>
   <body>
      <div class="hero_area">

         <!-- header section strats -->
         @include('includes.header')
         <!-- end header section -->

        <!-- start of message -->
        @if(session()->has('message'))
            <div class="alert alert-success">
                <!-- show dismiss button. -->
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <!-- show message -->
                {{session()->get('message')}}
            </div>
        @endif
        <!-- end of message -->


         <center>
            <form action="{{url('add_user_data')}}" method="post"  enctype="multipart/form-data" >
                @csrf
                <input name="first_name" type="text" placeholder="First Name" required>
                <input name="last_name" type="text" placeholder="Last Name" required>
                <input name="age" type="number" placeholder="Age" required>
                <input type="submit" class="btn btn-success" value="Add"/>
             </form>
         </center>


      </div>


      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="#">Martin Wainaina</a><br>

            Distributed By <a href="https://github.com/martin-ngigi" target="_blank">Sowftware developer</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>

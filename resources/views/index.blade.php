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
        table, th, td{
            border: 1px solid grey;
        }

        .th_deg {
            font-size: 15px;
            padding: 5px;
            background: greenyellow;
        }
        .img_deg{
            height: 200px;
            width: 200px;
        }
        .td_deg{
            padding: 5px;
            font-size: 10px;
        }
      </style>
   </head>
   <body>
      <div class="hero_area">

         <!-- header section strats -->
         @include('includes.header')
         <!-- end header section -->

         {{-- {{var_dump($user_data->users)}} --}}
         <center>
            <table>
                <tr>
                    <th class="th_deg">ID</th>
                    <th class="th_deg">First Name</th>
                    <th class="th_deg">Maiden Name</th>
                    <th class="th_deg">Last Name</th>
                    <th class="th_deg">Age</th>
                    <th class="th_deg">Gender</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Username</th>
                    <th class="th_deg">Birth Date</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Blood Group</th>
                    <th class="th_deg">City</th>
                    <th class="th_deg">University</th>
                </tr>
                @foreach ($user_data->users as $item)
                    <tr>
                        <td class="td_deg">{{$item->id}}</td>
                        <td class="td_deg">{{$item->firstName}}</td>
                        <td class="td_deg">{{$item->lastName}}</td>
                        <td class="td_deg">{{$item->maidenName}}</td>
                        <td class="td_deg">{{$item->age}}</td>
                        <td class="td_deg">{{$item->gender}}</td>
                        <td class="td_deg">{{$item->email}}</td>
                        <td class="td_deg">{{$item->phone}}</td>
                        <td class="td_deg">{{$item->username}}</td>
                        <td class="td_deg">{{$item->birthDate}}</td>
                        <td class="td_deg">{{$item->image}}</td>
                        <td class="td_deg">{{$item->bloodGroup}}</td>
                        <td class="td_deg">{{$item->address->city}}</td>
                        <td class="td_deg">{{$item->university}}</td>

                    </tr>
                @endforeach

            </table>
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

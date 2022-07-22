<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  

    <style>
     @import url('https://font.googleapis.com/css2?family=Poppins:wgth@200;300;400;500;600&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;

    }
    body{
      position: relative;
      min-height: 100vh;
      width: 100%;
      overflow: hidden;

    }
    .sidebar{
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 240px;
      background: #383375;
      padding: 6px 14px;
      transition: all 0.5s;



    }
    .sidebar .active{
      width: 240px;

    }
    .sidebar .logo_content .logo{
      color: #fff;
      display: flex;
      height: 50px;
      width: 100%;
      align-items: center;

    }
    .logo_content .logo i{
      font-size: 28px;
      margin-right: 5px;

    }
    .logo_content .logo .logo_name{
      font-size: 16px;
      font-weight: 500;

    }
    .sidebar #btn{
      position: absolute;
      color: #fff;
      left: 90%;
      top: 6px;
      font-size: 30px;
      height: 50px;
      width: 50px;
      text-align: center;
      line-height: 50px;
      transform: translate(-50%);

    }
    .sidebar ul{
      margin-top: 20px;

    }
    .sidebar ul li{
      position: relative;
      height: 50px;
      width: 100%;
      margin: 0 5px;
      list-style: none;
      line-height: 25px;
      border-radius: 12px;

    }
    .sidebar ul li .tooltip{
      position: absolute;
      left: 122px;
      top: 50%;
      transform: translate(-5%);
      border-radius: 6px;
      height: 35px;
      width: 150px;
      background: #fff;
      line-height: 35px;
      text-align: center;
      box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      transition: 0s;
      opacity: 0;
      pointer-events: none;



    }
    .sidebar ul li:hover .tooltip{
      transition: all 0.5s ease;
      opacity: 1;
      top: 50%;

    }
    .sidebar ul li input{
      position: absolute;
      height: 90%;
      width: 100%;
      left: 0;
      top: 0;
      border-radius: 12px;
      outline: none;
      border: none;
      background: #1d1b31;
      padding-left: 50px;
      font-size: 18px;
      color: #fff;


    }
    .sidebar ul li .bx-search-alt-2{
      position: absolute;
      z-index: 99;
      color: #fff;
      font-size: 30px;
      height: 100px;
      width: 50px;


    }
    .sidebar ul li a{
      color: #fff;
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: all o.4s ease;
      border-radius: 12px;



      

    }
    .sidebar ul li a:hover{
      color: #383375;
      background: #fff
    }
    .sidebar ul li i{
      height: 50px;
      min-width: 50px;
      border-radius: 12px;
      line-height: 50px;
    }
    .sidebar .content{
      position: absolute;
      color: #fff;
      bottom: 0;
      left: 0;
      width: 100%;
      background: #1d1b31;

    }
    .sidebar .content .name_job{
      margin-left: 10px;

    }
    .sidebar .content .name{
      font-size: 15px;
      font-weight: 400;
    }
    .sidebar .content .job{
      font-size: 22px;
 
    }
    .sidebar .content .logout{
      position: absolute;
      left: 99%;
      bottom: 5px;
      transform: translate(-70%);
      min-width: 50px;
      line-height: 50px;
      font-size: 30px;
      border-radius: 12px;

    }
  </style>
  </head>
<body>
    
<div class="sidebar">
  <div class="logo_content">
    <div class="logo">
      <i class='bx bxs-color'></i>
      <div class="log_name">Kothlawala College</div>

      <i class='bx bx-menu' id="btn"></i>
     </div>
     <ul class="nav_list">
        <li>
          
        
           <input type="text" placeholder="Search">
           <i class='bx bx-search-alt-2'></i>
           <span class="tooltip">Search</span>
        </li>
        <li>
          <a href="">
            <i class='bx bxs-grid'></i>
            <span class="link_name">Dashboard</span>
          </a>
          <span class="tooltip">dashboard</span>
        </li>
        <li>
          <a href="/newStudent">
            <i class='bx bx-user-plus'></i>
            <span class="link_name">New Student</span>
          </a>
          <span class="tooltip">New Student</span>
        </li>
        <li>
          <a href="/displaytheRecord">
            <i class='bx bx-desktop'></i>
            <span class="link_name">Display the Record</span>
          </a>
          <span class="tooltip">Display the Record</span>
        </li>

        <li>
          <a href="addtheResalt">
            <i class='bx bxs-file-plus'></i>
            <span class="link_name">Add the Resalt</span>
          </a>
          <span class="tooltip">Add the Resalt</span>
        </li>
        <li>
          <a href="displaytheResalt">
            <i class='bx bx-desktop'></i>
            <span class="link_name">Display the Resalt</span>
          </a>
          <span class="tooltip">Display the Resalt</span>
        </li>
       
        <li>
          <a href="timeTable">
            <i class='bx bx-time-five'></i>
            <span class="link_name">Time Table</span>
          </a>
          <span class="tooltip">Time Table</span>
        </li>
        <li>
          <a href="setteing">
            <i class='bx bx-cog'></i>
            <span class="link_name">Setteing</span>
          </a>
          <span class="tooltip">Setteing</span>
        </li>
        <li>
          <a href="about">
            <i class='bx bx-cog'></i>
            <span class="link_name">About</span>
          </a>
          <span class="tooltip">About</span>
        </li>
      </ul>
      <div class="content">
        <div class="name_job">
          <div class="name">lakshitha udayanga</div>
          <div class="name">Web Developer</div>
          <div class="logout">
          <i class='bx bx-log-out' id="log_out"> </i>
        
          </div>
        </div>
      </div>
        
    </div>
 </div>

    <script>
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");
      let searchBtn = document.querySelector(" bx-search-alt-2");

      btn.onclick =function(){
         sidebar.classlist.toggle("active");
      }
      btn.onclick =function(){
        searchBtn .classlist.toggle("active");
      }

    </script>
  
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@yield('content')
</body>
</html>
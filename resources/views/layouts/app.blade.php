<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Attendance_track_App </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
 @livewireStyles
  <style>
    /* Google Font Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body{
      background: #e9e9e9;
    }

    .sidebar {
      position: fixed;
      left: 0;
      top: 0;
      height: 100%;
      width: 78px;
      background: #e9e9e9;
      padding: 6px 14px;
      z-index: 99;
      transition: all 0.5s ease;
    }

    .sidebar.open {
      width: 250px;
    }

    .sidebar .logo-details {
      height: 60px;
      display: flex;
      align-items: center;
      position: relative;
    }

    .sidebar .logo-details .icon {
      opacity: 0;
      transition: all 0.5s ease;
    }

    .sidebar .logo-details .logo_name {
      color: #119f64;
      font-size: 20px;
      font-weight: 600;
      opacity: 0;
      transition: all 0.5s ease;
    }

    .sidebar.open .logo-details .icon,
    .sidebar.open .logo-details .logo_name {
      opacity: 1;
    }

    .sidebar .logo-details #btn {
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      font-size: 22px;
      transition: all 0.4s ease;
      font-size: 23px;
      text-align: center;
      cursor: pointer;
      transition: all 0.5s ease;
    }

    .sidebar.open .logo-details #btn {
      text-align: right;
    }

    .sidebar i {
      color: #119f64;
      height: 60px;
      min-width: 50px;
      font-size: 28px;
      text-align: center;
      line-height: 60px;
    }

    .sidebar .nav-list {
      margin-top: 20px;
      height: 100%;
    }

    .sidebar li {
      position: relative;
      margin: 8px 0;
      list-style: none;
    }

    .sidebar li .tooltip {
      position: absolute;
      top: -20px;
      left: calc(100% + 15px);
      z-index: 3;
      background: #119f64;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
      padding: 6px 12px;
      border-radius: 4px;
      font-size: 15px;
      font-weight: 400;
      opacity: 0;
      white-space: nowrap;
      pointer-events: none;
      transition: 0s;
      color: #fff;
    }

    .sidebar li:hover .tooltip {
      opacity: 1;
      pointer-events: auto;
      transition: all 0.4s ease;
      top: 50%;
      transform: translateY(-50%);
    }

    .sidebar.open li .tooltip {
      display: none;
    }

    .sidebar input {
      font-size: 15px;
      color: #119f64;
      font-weight: 400;
      outline: none;
      height: 50px;
      width: 100%;
      width: 50px;
      border: none;
      border-radius: 12px;
      transition: all 0.5s ease;
      background: #e9e9e9;
    }

    .sidebar.open input {
      padding: 0 20px 0 50px;
      width: 100%;
    }

    .sidebar .bx-search {
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      font-size: 22px;
      background: #1d1b31;
      color: #119f64;
    }

    .sidebar.open .bx-search:hover {
      background: #1d1b31;
      color: #119f64;
    }

    .sidebar .bx-search:hover {
      background: #119f64;
      color: #e9e9e9;
    }

    .sidebar li a {
      display: flex;
      height: 100%;
      width: 100%;
      border-radius: 12px;
      align-items: center;
      text-decoration: none;
      transition: all 0.4s ease;
      background: #e9e9e9;
    }

    .sidebar li a:hover {
      background: #fff;
    }

    .sidebar li a .links_name {
      color: #119f64;
      font-size: 15px;
      font-weight: 400;
      white-space: nowrap;
      opacity: 0;
      pointer-events: none;
      transition: 0.4s;
    }

    .sidebar.open li a .links_name {
      opacity: 1;
      pointer-events: auto;
    }

    .sidebar li a:hover .links_name,
    .sidebar li a:hover i {
      transition: all 0.5s ease;
      color: #11101D;
    }

    .sidebar li i {
      height: 50px;
      line-height: 50px;
      font-size: 18px;
      border-radius: 12px;
    }

    .sidebar li.profile {
      position: fixed;
      height: 60px;
      width: 78px;
      left: 0;
      bottom: -8px;
      padding: 10px 14px;
      background:#e9e9e9 ;
      transition: all 0.5s ease;
      overflow: hidden;
    }

    .sidebar.open li.profile {
      width: 250px;
    }

    .sidebar li .profile-details {
      display: flex;
      align-items: center;
      flex-wrap: nowrap;
    }

    .sidebar li img {
      height: 45px;
      width: 45px;
      object-fit: cover;
      border-radius: 6px;
      margin-right: 10px;
    }

    .sidebar li.profile .name,
    .sidebar li.profile .job {
      font-size: 15px;
      font-weight: 400;
      color: #119f64;
      white-space: nowrap;
    }

    .sidebar li.profile .job {
      font-size: 12px;
    }

    .sidebar .profile #log_out {
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      background: #e9e9e9;
      width: 100%;
      height: 60px;
      line-height: 60px;
      border-radius: 0px;
      transition: all 0.5s ease;
    }

    .sidebar.open .profile #log_out {
      width: 50px;
      background: none;
    }

    .home-section {
      position: relative;
      background: white;
      min-height: 100vh;
      top: 0;
      left: 78px;
      width: calc(100%);
      transition: all 0.5s ease;
      z-index: 2;
      overflow-x: hidden;
    }

    

    .sidebar.open~.home-section {
      left: 250px;
      width: calc(100% - 250px);
    }

    .home-section .text {
      display: inline-block;
      color: #11101d;
      font-size: 25px;
      font-weight: 500;
      margin: 18px
    }

    @media (max-width: 420px) {
      .sidebar li .tooltip {
        display: none;
      }
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name">Admin </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      
      <li>
        <a href="{{ route('home') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="{{ route('patients.all')}}">
          <i class='bx bx-user'></i>
          <span class="links_name">Patients</span>
        </a>
        <span class="tooltip">Patients</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="links_name">Health Workers</span>
        </a>
        <span class="tooltip">Health Workers</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-bible'></i>
          <span class="links_name">Appointements</span>
        </a>
        <span class="tooltip">Appointements</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-folder'></i>
          <span class="links_name">Reports</span>
        </a>
        <span class="tooltip">Reports</span>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Settings</span>
        </a>
        <span class="tooltip">Settings</span>
      </li>
    <li class="profile">
    <div class="profile-details">
        <div class="name_job">
            <div class="name">Logout</div>
        </div>
    </div>
    <i class='bx bx-log-out' id="log_out"></i>
</li>

<form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>



    </ul>
  </div>
  <section class="home-section bg-gray-200 ">

   <nav class="navbar navbar-expand-lg fixed top-0 w-full z-50 px-10 navbar-light bg-white border-b-2 border-green-500">
      <div class="container flex justify-between items-center">
        <span class="navbar-brand mb-0 h1 ">Attendance Tracking System  Dashboard</span>
        <div class="flex items-center">
          @auth

           <span class="mr-4 ">Welcome {{ Auth::user()->name }}!  </span>
          <a href="{{ route('upload-profile-image') }}">
            <div class="w-8 h-8 rounded-full overflow-hidden">
              <img src="{{ Auth::user()->profile_image_url }}" alt="{{ Auth::user()->name }}">
            </div>
          </a>
         
          @endauth
        </div>
      </div>
    </nav>






    @yield('content')


    <footer class="" style="margin-top: 20px;">
      <div class="container mx-auto py-4 px-6">
        <div class="text-center text-gray-600">
          <p class="mb-2">Attendance Tracking System</p>
          <p>Powered by <span class="font-bold">Omni Brand</span> &copy;2024</p>
        </div>
      </div>
    </footer>

  </section>

    @livewireScripts
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
      }
    }
  </script>

  <script>
    document.getElementById('log_out').addEventListener('click', function() {
        document.getElementById('logoutForm').submit();
    });
</script>

</body>

</html>
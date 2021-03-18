
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/ustyle.css') }}" />
  <script src="{{asset('js/uscript.js')}}"></script>

  <title>Dashboard</title>
</head>
<body>

  <section class="dashboard_main">
    <div class="left_menu">    
        <!-- logo -->
        <div class="left_head">

          <div class="brand">
            <img src="/resources/imgs/logo.PNG" alt="brand" />
          </div>

          <div class="btnMenu">
            <i class="fas fa-bars" id="ham_burger" onclick="menu_toggle()"></i>
          </div>

        </div>
        
        <!-- menu -->
        <nav>
          <ul>
            <li><a href="dashboard.html"><i class="fas fa-home"></i></a> <a href="dashboard.html" id="menu">Home</a></li>
            <li><a href="vehicles.html"><i class="fas fa-car"></i></a> <a href="vehicles.html" id="menu">Vehicals</a></li>
            <li><a href="services.html"><i class="fas fa-tools"></i></a> <a href="services.html" id="menu">Services</a></li>
            <li><a href="bookings.html"><i class="fas fa-calendar-day"></i></i></a> <a href="bookings.html" id="menu">Bookings</a></li>
            <li><a href="help.html"><i class="far fa-question-circle"></i></a> <a href="help.html" id="menu">Need Help?</a></li>
          </ul>
        </nav>
    </div>

    <div class="content">
      <div class="right_head">

        <div class="left">
          <h2>SA Car Service Station</h2>
        </div>

        <div class="right">
          <div class="notification">
            <i class="fas fa-bell"></i>
            <div class="list">
              <ul>
                <li>
                  <div class="list_box">
                    <p>Mehran Tip Sensor Cleaning has been confirmed from Service Station</p>
                    <span><i class="fas fa-envelope" onclick="btnNotificationMessage()"></i></span>
                  </div>
                </li>
                <li>
                  <div class="list_box">
                    <p>Mehran Teppet Adjustment has been Complete.</p>
                    <span><i class="fas fa-envelope" onclick="btnNotificationMessage()"></i></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          
          <div class="user">
            <div class="img">
              <img src="/resources/imgs/user.png" alt="user">
            </div>
            <div class="logout">
              <div class="logout_head">
                <div class="img">
                  <img src="/resources/imgs/user.png" alt="user" id="user_popup">
                </div>
                <div class="username">
                  Saif Ullah
                </div>
              </div>
              <div class="logout_body">
                <ul>
                  <li><a href="#">My Profile</a></li>
                  <li><a href="#">Change Password</a></li>
                  <li><a href="#">Logout?</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/b576703715.js" crossorigin="anonymous"></script>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script src="script.js"></script>

</body>
</html>
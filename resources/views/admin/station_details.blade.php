<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/astyle.css') }}" />
  <script src="{{asset('js/ascript.js')}}"></script>

  <title>Station details</title>
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
            <li><a href="station_details.html"><i class="fas fa-car"></i></a> <a href="station_details.html" id="menu">Service Station</a></li>
            <li><a href="services.html"><i class="fas fa-tools"></i></a> <a href="services.html" id="menu">Services</a></li>
            <li><a href="bookings.html"><i class="fas fa-calendar-day"></i></i></a> <a href="bookings.html" id="menu">Bookings</a></li>
            <li><a href="staff_management.html"><i class="fas fa-user-cog"></i></a> <a href="staff_management.html" id="menu">Staff Management</a></li>
          </ul>
        </nav>
    </div>

    <div class="content">
      <div class="right_head">

        <div class="left">
          <h2>Service Station Details</h2>
        </div>

        <div class="right">
          
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

      <div class="right_station_details">
        <div class="form">
          <form action="" name="form">

            <div>
              <div class="station_name">
                <label for="station_name">Service Station Name:</label>
                <input type="text" name="station_name" id="station_name" value="SA Car Service Station">
              </div>

            </div>

            <div>
              <div class="station_phone">
                <label for="station_phone">Service Station Phone Number:</label>
                <input type="tel" name="station_phone" id="station_phone"  value="+92 300 000000">
              </div>

              <div class="alternative_station_phone">
                <label for="alternative_station_phone">Service Station Phone Number:</label>
                <input type="tel" name="alternative_station_phone" id="alternative_station_phone"  value="+42 300 000000">
              </div>
            </div>

            <div>
              <div class="station_email">
                <label for="station_email">Service Station Email Address:</label>
                <input type="email" name="station_email" id="station_email" value="query@sacarservicestation.com">
              </div>

              <div class="statio_physical_add">
                <label for="physical_add">Service Station Physical Address:</label>
                <input type="text" name="physical_add" id="physical_add" value="41-D Lawrence Road, Lahore">
              </div>
            </div>

            <div>
              <div class="station_opening_time">
                <label for="station_opening_time">Station Opening Time:</label>
                <input type="time" name="station_opening_time" id="station_opening_time" value="09:30">
              </div>

              <div class="station_closing_time">
                <label for="station_closing_time">Station Closing Time:</label>
                <input type="time" name="station_closing_time" id="station_closing_time" value="18:30">
              </div>
            </div>

            <div class="buttons">
              <button type="button" onclick="window.location.replace('dashboard.html')">Back</button>
              <button type="button" onclick="window.location.replace('dashboard.html')">Save Changes</button>
            </div>
          </form>
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
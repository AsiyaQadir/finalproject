<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/astyle.css') }}" />
  <script src="{{asset('js/ascript.js')}}"></script>

  <title>Bookings</title>
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
          <h2>Bookings</h2>
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
                <div class="u sername">
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

      <div class="right_bookings_body">
        <div class="table">
          <table>
            <tr>
              <th>No.</th>
              <th>Booking</th>
              <th>Date</th>
              <th>Status</th>
              <th>View</th>
            </tr>

            <tr>
              <td>1</td>
              <td>Mehran Tip Sensor Cleaning</td>
              <td>18/12/2021</td>
              <td>Pending</td>
              <td><a href="view_pending_booking.html"><i class="fas fa-eye"></i></a></td>
            </tr>

            <tr>
              <td>2</td>
              <td>Mehran Teppet Adjustment</td>
              <td>18/12/2020</td>
              <td>Complete</td>
              <td><a href="view_complete_booking.html"><i class="fas fa-eye"></i></a></td>
            </tr>
          </table>
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
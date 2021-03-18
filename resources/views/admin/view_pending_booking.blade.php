<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/astyle.css') }}" />
  <script src="{{asset('js/ascript.js')}}"></script>

  <title>Pending Bookings</title>
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
          <h2>View Booking</h2>
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

      <div class="right_view_pending_booking_body">

        <div class="booking_details">
          <table>
            <caption>Mehran Tip Sensor Cleaning</caption>
            <tr>
              <th>Booking Status:</th>
              <td>Pending</td>
              <th>Date:</th>
              <td>18/01/2021</td>
            </tr>
            <tr>
              <th>Vehical Name:</th>
              <td>Mehran VXR</td>
              <th>Model:</th>
              <td>2007</td>
            </tr>
            <tr>
              <th>Service:</th>
              <td>Tip Sensor Cleaning</td>
              <th>Service Price:</th>
              <td>RS: 1200.00</td>
            </tr>
          </table>
        </div>

<hr>

        <div class="assign_to">
          <div>
            <label for="assigning">Assigin it to?</label>
            <select name="assigning_task" id="assigning">
              <option value="Shehroz Altar">Shehroz Altar</option>
              <option value="Habib Raza">Habib Raza</option>
              <option value="M. Zubair">M. Zubair</option>
            </select>
          </div>

          <div>
            <label for="schedule_time">When to Go</label>
            <input type="time" name="time" id="schedule_time">
          </div>

        </div>

        <div class="buttons">
          <button type="button" onclick="window.location.replace('bookings.html')">Cancel Booking</button>
          <button type="button" onclick="window.location.replace('bookings.html')">Confirm Booking</button>
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
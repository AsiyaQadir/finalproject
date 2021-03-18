<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/astyle.css') }}" />
  <script src="{{asset('js/ascript.js')}}"></script>

  <title>Add Staff</title>
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
          <h2>Staff Management</h2>
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


      <div class="right_add_staff_body">
            
        <div class="form">
          <form action="">

            <div>
              <div class="name">
                <label for="person_name">Person Name:</label><br>
                <input type="text" name="person_name" id="person_name" placeholder="Enter Person Name">
              </div>

              <div class="dob">
                <label for="dateofbirth">Date of Birth:</label>
                <input type="date" name="dateofbirth" id="dateofbirth" >
              </div>
            </div>

            <div>
              <div class="phone">
                <label for="person_phone_number">Person Phone Number:</label><br>
                <input type="text" name="person_phone_number" id="person_phone_number" placeholder="Enter Person Phone Number">
              </div>

              <div class="cnic">
                <label for="person_cnic">Date of Birth:</label>
                <input type="number" name="person_cnic" id="person_cnic" maxlength="13" placeholder="Enter Person Cnic">
              </div>
            </div>

            <div>
              <div class="joining_date">
                <label for="joining_date">Joining Date:</label><br>
                <input type="date" name="joining_date" id="joining_date">
              </div>

              <div class="salary">
                <label for="salary">Person Salary:</label>
                <input type="number" name="salary" id="salary" placeholder="Enter Person Salary">
              </div>
            </div>


              <button type="button" onclick="window.location.replace('staff_management.html')">Add Person</button>
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
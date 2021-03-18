<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
  rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="{{ url('/css/ustyle.css') }}" />
  <script src="{{asset('js/uscript.js')}}"></script>

  <title>Services</title>
</head>
<body>

  <section class="dashboard_main">
    <div class="left_menu">    
        <!-- logo -->
        <div class="left_head">

          <div class="brand">
            <img src="/resources/imgs/logo.png" alt="brand">
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
          <h2>Services</h2>
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


      <div class="right_services_body">
        <div class="form">
          <form action="">

            <div>
              <div class="contact_person_name">
                <label for="contact_person_name">Contact Person Name:</label>
                <input type="text" name="contact_person_name" id="contact_person_name" placeholder="Enter Contact Person Full Name">
              </div>

              <div class="service_date">
                <label for="service_date">Schedule Date:</label>
                <input type="date" name="service_date" id="service_date" placeholder="" value="Date()">
              </div>
            </div>

            <div>
              <div class="phone_number">
                <label for="phone_number">Contact Person Phone Number:</label>
                <input type="tel" name="phone_number" id="phone_number" placeholder="Enter Contact Person Phone Number">
              </div>

              <div class="alternative_number">
                <label for="alternative_number">Alternative Phone Number:</label>
                <input type="tel" name="alternative_number" id="alternative_number" placeholder="Enter Alternative Phone Number">
              </div>
            </div>

            <div>
              <div class="addresss">
                <label for="servcies_address">Service Address</label>
                <input type="text" name="servcies_address" id="servcies_address" placeholder="Enter your Complete Address">
              </div>

              <div class="city">
                <label for="servcies_city">Service Address</label>
                <select name="servcies_city" id="servcies_city">
                  <option value="Lahore">Lahore</option>
                </select>
              </div>
            </div>

            <div>
              <div class="vehical_name">
                <label for="vehical_name">Vehical Name:</label>
                <input type="text" name="vehical_name" id="vehical_name" placeholder="Enter your vehical Name">
              </div>

              <div class="vehical_power">
                <label for="power_radio">Vehical Power( CC ):</label>
                <div class="power_radio" name="power_radio" id="power_radio">

                  <div>
                    <input type="radio" name="vehical_power" id="vehical_power_500_1000" value="500-1000" checked>
                    <label for="vehical_power_500_1000">500-1000</label>
                  </div>

                  <div>
                    <input type="radio" name="vehical_power" id="vehical_power_1000_1500" value="1000-1500">
                    <label for="vehical_power_1000_1500">1000-1500</label>
                  </div>

                  <div>
                    <input type="radio" name="vehical_power" id="vehical_power_1500_2000" value="1500-2000">
                    <label for="vehical_power_1500_2000">1500-2000</label>
                  </div>

                  <div>
                    <input type="radio" name="vehical_power" id="vehical_power_2000_3000" value="2000-3000">
                    <label for="vehical_power_2000_3000">2000-3000</label>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="vehical_model">
                <label for="vehical_model">Vehical Model:</label>
                <input type="text" name="vehical_model" id="vehical_model" placeholder="Enter your vehical Model">
              </div>
              <div class="vehical_number">
                <label for="vehical_number">Vehical Number:</label>
                <input type="text" name="vehical_number" id="vehical_number" placeholder="Enter you vehical Number">
              </div>
            </div>

            <div>
              <div class="services_list">
                <label for="services_list">Services List:</label>
                <select name="services_list" id="services_list">
                  <option value="Tappet Adjustment">Tappet Adjustment</option>
                  <option value="Oil Replacement">Oil Replacement</option>
                  <option value="Filter Replacement">Filter Replacement</option>
                  <option value="Carburetor Settings(for Non-EFI Vehicals)">Carburetor Settings(for Non-EFI Vehicals)</option>
                  <option value="Tip Sensor Cleaning">Tip Sensor Cleaning</option>
                  <option value="Throttle Body Cleaning(for EFI Vehicals)">Throttle Body Cleaning(for EFI Vehicals)</option>
                  <option value="Spark Plugs Servicing">Spark Plugs Servicing</option>
                  <option value="Plugs Wire Cleaning or Replacement">Plugs Wire Cleaning or Replacement</option>
                  <option value="RPM Settings">RPM Settings</option>
                  <option value="Petrol Mixer adjustment">Petrol Mixer adjustment</option>
                  <option value="CNG Mixer adjustment">CNG Mixer adjustment</option>
                  <option value="Distributer Cleaning or Replacement">Distributer Cleaning or Replacement</option>
                  <option value="Point Cleaning and Replacement">Point Cleaning and Replacement</option>
                  <option value="Overall Performance Survey">Overall Performance Survey</option>
                </select>
              </div>

              <div class="service_price">
                <label for="service_price">Services Price:</label>
                <input type="text" name="service_price" id="service_price" disabled value="RS: 1200.00">
              </div>
            </div>






              <button type="button">Submit Request</button>
          </form>
        </div>
        
      </div>






      <!-- <span class="material-icons">
        favorite
        </span> -->

    </div>
  </section>

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/b576703715.js" crossorigin="anonymous"></script>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script src="script.js"></script>

</body>
</html>
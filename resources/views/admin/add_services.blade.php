<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/astyle.css') }}" />
  <script src="{{asset('js/ascript.js')}}"></script>
  <title>Add services</title>
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
          
    </div>

    <div class="content">
      <div class="right_head">

        <div class="left">
          <h2>Add Service</h2>
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

      <div class="right_add_services_body">
        <div class="form">
          <form action="">

            <div>
              <div class="name">
                <label for="service_name">Service Name:</label><br>
                <input type="text" name="service_name" id="service_name" placeholder="Enter Service Name">
              </div>

              <div class="price">
                <label for="serice_price">Service Price:</label>
                <input type="text" name="serice_price" id="serice_price" placeholder="Enter Price of Service">
              </div>
            </div>

            <div class="avail">
              <label for="available_for">Availble for ( Horse Power CC ):</label>
              <div id="available_for">
                <div class="checkbox">
                  <input type="checkbox" name="power" id="500-1000">
                  <label for="500-1000">500-1000</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" name="power" id="1000-1500">
                  <label for="1000-1500">1000-1500</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" name="power" id="1500-2000">
                  <label for="1500-2000">1500-2000</label>
                </div>

                <div class="checkbox">
                  <input type="checkbox" name="power" id="2000-3000">
                  <label for="2000-3000">2000-3000</label>
                </div>

              </div>
            </div>



              <button type="button" onclick="window.location.replace('services.html')">Save Details</button>
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
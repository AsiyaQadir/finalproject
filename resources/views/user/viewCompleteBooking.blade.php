<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/ustyle.css') }}" />
  <script src="{{asset('js/uscript.js')}}"></script>

  <title>View Bookings</title>
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
          <h2>View Booking</h2>
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

      <div class="right_viewCompleteBooking_body">
        <div class="booking_details">
          <table>
            <caption>Mehran Tip Sensor Cleaning</caption>
            <tr>
              <th>Booking Status:</th>
              <td>Complete</td>
              <th>Date:</th>
              <td>18/12/2020</td>
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
            <tr>
              <th></th>
              <td></td>
            </tr>
          </table>
        </div>

        <div class="mechanic_details">
          <h4>Mechanic Details</h4>
          <div>
            <div class="img">
              <img src="/resources/imgs/user.png" alt="avatar">
            </div>
            <div class="details">
              <span class="name"><b>Name: </b> Shehroz Altaf </span>
              <span class="phone"><b>Phone Number: </b> +92 001 4580000</span>
              <span class="rating"><b>Rating: </b><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
            </div>
          </div>
        </div>
    <hr>

        <div class="feedback">
          <h3>Give us Feedback about our Services</h3>
          <form action="">
            <div>
              <label for="service_station_rating">How much are you Satisfied with our Services?</label>
              <div class="service_station_rating" name="service_station_rating" id="service_station_rating">

                <div class="rating_box">
                  <input type="radio" name="station_rating" id="station_rating_1" value="1" checked>
                  <label for="station_rating_1">Happy <i class="fas fa-grin-beam"></i></label>
                </div>

                <div class="rating_box">
                  <input type="radio" name="station_rating" id="station_rating_2" value="1000-1500">
                  <label for="station_rating_2">Normal <i class="fas fa-smile"></i></label>
                </div>

                <div class="rating_box">
                  <input type="radio" name="station_rating" id="station_rating_3" value="1500-2000">
                  <label for="station_rating_3">Not Good <i class="fas fa-grimace"></i></label>
                </div>

                <div class="rating_box">
                  <input type="radio" name="station_rating" id="station_rating_4" value="2000-3000">
                  <label for="station_rating_4">UnSatisfied <i class="fas fa-frown"></i></label>
                </div>
              </div>

              <div class="text_review">  
                <label for="mechanic_text_review">Anything you want to say?</label>
                <textarea name="mechanic_text_review" id="mechanic_text_review" placeholder="Experience was good" cols="30" rows="5"></textarea>
              </div>

            </div>

            <div>
              <label for="mechanic_station_rating">How much are you Satisfied with Mechanic?</label>
              <div class="mechanic_station_rating" name="mechanic_station_rating" id="mechanic_station_rating">

                <div class="rating_box">
                  <input type="radio" name="mechanic_rating" id="mechanic_rating_1" value="1" checked>
                  <label for="mechanic_rating_1">Happy <i class="fas fa-grin-beam"></i></label>
                </div>

                <div class="rating_box">
                  <input type="radio" name="mechanic_rating" id="mechanic_rating_2" value="1000-1500">
                  <label for="mechanic_rating_2">Normal <i class="fas fa-smile"></i></label>
                </div>

                <div class="rating_box">
                  <input type="radio" name="mechanic_rating" id="mechanic_rating_3" value="1500-2000">
                  <label for="mechanic_rating_3">Not Good <i class="fas fa-grimace"></i></label>
                </div>

                <div class="rating_box">
                  <input type="radio" name="mechanic_rating" id="mechanic_rating_4" value="2000-3000">
                  <label for="mechanic_rating_4">UnSatisfied <i class="fas fa-frown"></i></label>
                </div>
              </div>

              <div class="text_review">  
                <label for="mechanic_text_review">Anything you want to say?</label>
                <textarea name="mechanic_text_review" id="mechanic_text_review" placeholder="Experience was good" cols="30" rows="5"></textarea>
              </div>

            </div>
          </form>
        </div>


        <div class="buttons">
          <button type="button" onclick="window.location.replace('bookings.html')">Back</button>
          <button type="button" onclick="window.location.replace('bookings.html')">Submit</button>
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
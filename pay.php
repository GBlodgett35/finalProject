<!-- IS 270 Final Project
Greg Blodgett, Ethan Bond, Joe Faith, HyeJin Moon, & David Taylor -->


<!--For when the user submits the form for the payment. 
This form will thank them for their order and have a button to return to the main page
-->

<!DOCTYPE html>
<html lang='en'>
<head>
  <link rel='stylesheet' type='text/css' href='css/airportStyles.css'>
  <link rel='stylesheet' href='css/animateHamburger.css'>
  <link rel='icon' href='images/logo.png'>
  <title>BWA</title>
  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1' name='viewport' />
</head>
<body>
  <header>
    <div class='center'>
      <a href='index.html'><h1>Buffalo Wings Airport</h1></a>
    </div>
  </header>
  <nav class='bg-light'>  
    <div class='mobile'>
      <button class='navbar-toggler first-button' type='button' data-toggle='collapse' onclick=toggleNav()>
        <div class='animated-icon1'>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <div id='collapse' style='display: none;'>
        <ul>
          <li class='full-width'>
            <a class='nav-link' href='index.html'>Home</a>
          </li>
          <li class='full-width'>
            <a class='nav-link' href='flightBooking.html'>Flight and Booking</a>
          </li>
          <li class='full-width'>
            <a class='nav-link' href='airportGuide.html'>Airport Guide</a>
          </li>
          <li class='full-width'>
            <a class='nav-link' href='parking.html'>Parking and Trasportation</a>
          </li>
          <li class='full-width'>
            <a class='nav-link' href='about.html'>About Buffalo Wings</a>
          </li>
        </ul>
      </div>
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script>
        $(document).ready(function () {
          $('.first-button').on('click', function () {
              $('.animated-icon1').toggleClass('open');
          });
          $('.second-button').on('click', function () {
            $('.animated-icon2').toggleClass('open');
          });
          $('.third-button').on('click', function () {
            $('.animated-icon3').toggleClass('open');
          });
        });        
        function toggleNav() {
          if(document.getElementById('collapse').style.display === 'none') {
            document.getElementById('collapse').style.display = 'block';
          } else {
            document.getElementById('collapse').style.display = 'none';
          }
        }
      </script>
    </div>
    <div class='desktop'>
      <ul>
          <li><a href='index.html'>Home</a></li>
          <li><a href='flightBooking.html'>Flight and Booking</a></li>
          <li><a href='airportGuide.html'>Airport Guide</a></li>
          <li><a href='parking.html'>Parking and Trasportation </a></li>
          <li><a href='about.html'>About Buffalo Wings</a></li>
      </ul>
    </div>
  </nav>
<main>
<div class="center">
<h4>Thank you <?php echo $_POST["fName"]; ?> for your order!</h4><br />
An email has been sent to <?php echo $_POST["email"]; ?> confirming your order.<br />
Your order number is <?php echo(rand(1000,10000000)); ?> <br /><br />
<a href="index.html">Return to home</a>
      </div>
    </main>
</html>
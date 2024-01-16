<?php
include('mail.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>services</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <section class="con-header">
    <div class="header-nav">
      <div class="logo">
        <a href="index.php"><img src="image2\glogo.png" alt="logo"></a>
      </div>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="ser"><a href="services.php">Services<i class="fa fa-caret-down"></i></a>
              <div class="sub-ser">
                <ul>
                  <li class="ser1"><a href="cgd.php">CASINO GAME DEVELOP</a>
                    <!-- <div class="sub-ser1">
                      <ul>
                        <li><a href="design.php">Design</a></li>
                        <li><a href="techno.php">Technology</a></li>
                        <li><a href="test.php">Test Lab</a></li>
                      </ul>
                    </div> -->
                  </li>
                  <li class="ser1"><a href="mgs.php">MANAGED GAMES STUDIO</a>
                    <!-- <div class="sub-ser1">
                      <ul>
                        <li><a href="design.php">Design</a></li>
                        <li><a href="techno.php">Technology</a></li>
                        <li><a href="test.php">Test Lab</a></li>
                      </ul>
                    </div> -->
                  </li>
                  <li class="ser1"><a href="sport.php">SPORTSBOOK</a>
                    <!-- <div class="sub-ser1">
                      <ul>
                        <li><a href="design.php">Design</a></li>
                        <li><a href="techno.php">Technology</a></li>
                        <li><a href="test.php">Test Lab</a></li>
                      </ul>
                    </div> -->
                  </li>
                  <li class="ser1"><a href="qtc.php">QA TEST & COMPLIANCE</a>
                    <!-- <div class="sub-ser1">
                      <ul>
                        <li><a href="design.php">Design</a></li>
                        <li><a href="techno.php">Technology</a></li>
                        <li><a href="test.php">Test Lab</a></li>
                      </ul>
                    </div> -->
                  </li>
                  <li class="ser1"><a href="rms.php">RGS MANAGED SERVICE</a>
                    <!-- <div class="sub-ser1">
                      <ul>
                        <li><a href="design.php">Design</a></li>
                        <li><a href="techno.php">Technology</a></li>
                        <li><a href="test.php">Test Lab</a></li>
                      </ul>
                    </div> -->
                  </li>
                  <li class="ser1"><a href="iad.php">IOS APP DEVELOPMENT</a>
                    <!-- <div class="sub-ser1">
                      <ul>
                        <li><a href="design.php">Design</a></li>
                        <li><a href="techno.php">Technology</a></li>
                        <li><a href="test.php">Test Lab</a></li>
                      </ul>
                    </div> -->
                  </li>
                </ul>
              </div>
            </li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="re" style="margin-top : 17px;"><a href="#"><i class="fa-solid fa-user"></i></a>
              <div class="sub-ser re">
                <ul>
                  <li><a href="login.php">LogIn</a></li>
                  <li><a href="signup.php">SignUp</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </div>

    <div class="text-box">
      <h1>Contact</h1>
    </div>
  </section>

  <section class="contact-us">
    <div class="loc">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.979680608154!2d77.37646777395881!3d28.630371084181633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x604c3c4160741f7b%3A0x5be6bb2f97663c66!2sPSS%20Techno%20Service%20Digital%20Marketing!5e0!3m2!1sen!2sin!4v1697524431935!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="row1">
      <div class="map col" >
        <h4><i class="fa fa-location-arrow" aria-hidden="true"></i>
          Location:</h4>
        <p>H-15 305 BSI Business Park Noida,203010,India</p>
        <h4><i class="fa fa-envelope" aria-hidden="true"></i> Email:</h4>
        <p>kashyapaarti007@gmail.com</p>
        <h4><i class="fa fa-mobile" aria-hidden="true"></i> Call:</h4>
        <p>+91-8595616499</p>
        <!-- <h4><i class="fa fa-map-marker" aria-hidden="true"></i>  Map:</h4>
     <a href="https://www.google.com/maps/@28.6303235,77.3772852,17z?entry=ttu" style="margin-left: 75px; color: white;">https://www.google.com</a> -->
      </div>

      <div class="container1 col">
        <form id="contactForm" action="#" method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter Your Name..." required></br>

          <label for="mobile">Mobile Number:</label>

          <input type="tel" id="mobile" name="mobile" placeholder="Enter Your No.." required
            onkeypress="return validateNumber(event)" maxlength="10"></br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter Your Email..." required></br>

          <!-- <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="india">India</option>
        </select></br></br> -->

          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="4" placeholder="Enter Your Messages..."
            style="padding-left: 10px;"></textarea>

          <button type="submit" value="Submit" name="submit">Submit</button>
          <span style="color:red;">
            <?php echo $msg ?>
          </span>
        </form>
      </div>
    </div>
  </section>

  <section class="clients">
    <h1><b><u>Our Partners</u></b></h1>
    <div class="marquee">
      <ul class="marquee-content">
        <li><img src="image2/pss-removebg-preview.png" style=" height:130px; padding-left: 30px;"></li>
        <li><img src="image2/obicule.png" style=" height:100px;  padding-left: 30px; margin-top:7px;"></li>
        <li> <img src="image2/gnk-removebg-preview.png" style=" height:100px;  padding-left: 30px;"></li>
        <li><img src="image2/glogo.png" style=" height:90px;  padding-left: 30px; margin-top:10px;"></li>
        <!-- <li><img src="image2/webkul.png" style=" height:100px;  padding-left: 30px; margin-top:10px;"></li> -->
      </ul>
    </div>
  </section>

  <!-- Footer -->

  <section class="footer">
    <footer class="text-center text-white" style="background-color: #0a4275;">
      <div class="container p-4 pb-0">
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Register for free</span>
            <button type="button" class="btn btn-outline-light btn-rounded">
              <a href="signup.php">Sign up!</a>
            </button>
          </p>
        </section>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © Ingenuity Gaming 2023 | India - Isle of Man - Malta - UK - USA | All Right Reserved
        <!-- <a class="text-white" href="#">Ingunity.com</a> -->
        <div class="icons">
          <i class="fa-brands fa-facebook" style="padding-left: 10px;"></i>
          <i class="fa-brands fa-twitter" style="padding-left: 10px;"></i>
          <i class="fa-brands fa-instagram" style="padding-left: 10px;"></i>
          <i class="fa-brands fa-linkedin" style="padding-left: 10px;"></i>
        </div>
      </div>
    </footer>
  </section>

  <script>
    var show = document.getElementById("navLinks");

    function showMenu() {
      show.style.right = "0";
    }
    function hideMenu() {
      show.style.right = "-150px";
    }
  </script>

  <script>
    function validateNumber(e) {
      const pattern = /^[0-9]$/;

      return pattern.test(e.key)
    }
  </script>
  <script>
    const root = document.documentElement;
    const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
    const marqueeContent = document.querySelector("ul.marquee-content");

    root.style.setProperty("--marquee-elements", marqueeContent.children.length);

    for (let i = 0; i < marqueeElementsDisplayed; i++) {
      marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
  </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IT Website</title>
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
  <section class="sub-header">
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
      <h1>About Us</h1>
    </div>
  </section>

  <section class="about-us">
    <div class="about-col">
      <h1><b>Our Business</b></h1>
      <p>Over the last 8 years we have mastered the art and the process of building fixed odd betting games for the
        global gaming industry (Online and Landbased). We work with industry leading Mathematicians. We have a strong
        Art team, Build Engines/Services for most gaming platforms in the Industry, Have a well-established framework
        for building games (Quest), cover all online regulations and a large no. of Landbased regulations and physically
        test games on our large library of devices in-house.
        We support some of our customers with all the above, meaning we help them build bespoke/life time exclusive
        games and for some we simply help them with any of the elements of the games (Art, math, Engines, Services, Game
        Clients, QA & Compliance). In addition we have also expanded our services to working more closely on Platform
        Development, Maintenance, Dev Ops, RGS integrations and QA Services (For both Online and Landbased businesses).
        We don’t build games for ourselves (To eliminate any possible conflict of interest with our customers) and there
        is no revenue share for any of our services. This has allowed us the opportunity to work with many of the gaming
        industry's leading companies (Operators, Software Suppliers and Content Businesses).</p>
      <img src="image2/about.jpg">
    </div>
  </section>

  <section class="MVV">
    <div class="row2">
      <div class="m col-8">
        <h2><b>Our Mission</b></h2>
        <p>Our mission in gaming is clear to create a thriving, inclusive, and immersive gaming ecosystem that connects
          players worldwide. We're dedicated to providing a platform where gamers of all levels can find their passion,
          improve their skills, and enjoy the best gaming experience. We strive to foster a sense of community, offering
          forums for engagement, information sharing, and friendly competition. Our commitment extends to supporting the
          growth of esports and championing innovation in gaming technology. We aim to be your trusted source for gaming
          news, insights, and entertainment, ensuring that every player, from casual enthusiasts to aspiring pros, feels
          at home in our gaming world.</p>
      </div>
      <div class="mp col-sm-4">
        <img src="image2/Mission.jpeg">
      </div>
    </div>

    <div class="row2">
      <div class="vp col-sm-4" id="box-4">
        <img src="image2/vision.jpg">
      </div>
      <div class="v col-8" id="box-3">
        <h2><b>Our Vision</b></h2>
        <p>Our vision in gaming is to shape the future of interactive entertainment. We see a world where gaming is a
          global cultural phenomenon, transcending boundaries and uniting players from all walks of life. We aim to
          pioneer innovative technologies and experiences that push the boundaries of what's possible. By fostering
          inclusivity, diversity, and collaboration, we aspire to create an ecosystem where everyone can find their
          place, make their mark, and build lasting connections. We envision a gaming landscape where players are not
          just consumers but active contributors to the ever-evolving tapestry of this dynamic industry, ensuring that
          gaming remains a vibrant and integral part of modern culture.</p>
      </div>
    </div>

    <div class="row2">
      <div class="m col-8" >
        <h2><b>Our Value</b></h2>
        <p>Our mission in gaming is clear: to create a thriving, inclusive, and immersive gaming ecosystem that connects
          players worldwide. We're dedicated to providing a platform where gamers of all levels can find their passion,
          improve their skills, and enjoy the best gaming experience. We strive to foster a sense of community, offering
          forums for engagement, information sharing, and friendly competition. Our commitment extends to supporting the
          growth of esports and championing innovation in gaming technology. We aim to be your trusted source for gaming
          news, insights, and entertainment, ensuring that every player, from casual enthusiasts to aspiring pros, feels
          at home in our gaming world.</p>
      </div>
      <div class="mp col-sm-4">
        <img src="image2/value.jpg">
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
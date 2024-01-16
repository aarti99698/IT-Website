<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IT Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="responsive.css">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  <header>
    <div class="header-nav">
      <div class="logo">
        <a href="index.php"><img src="image2\glogo.png" alt="logo"></a>
      </div>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <nav>
          <ul>
            <li><a href="Index.php">Home</a></li>
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

    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image2/home7.webp" class="d-block w-100" alt="...">
          <div class="text-box">
            <h1>Welcome to Ingenuity Gaming Pvt Ltd</h1>
            <p>Our mandate is to help our clients reduce time to market for games and scale up while remaining cost and
              operationally efficient. We deliver over 250 games annually with predictability. </p>
            <a href="about.php" class="hero-btn">Read More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image2/home10.gif" class="d-block w-100" alt="...">
          <!-- <div class="text-box">
            <h1>Welcome to Ingenuity Gaming Pvt Ltd</h1>
            <p>Our mandate is to help our clients reduce time to market for games and scale up while remaining cost and
              operationally efficient. We deliver over 250 games annually with predictability. </p>
            <a href="about.html" class="hero-btn">Read More</a>
          </div> -->
        </div>
        <div class="carousel-item">
          <img src="image2/home9.avif" class="d-block w-100" alt="...">
          <!-- <div class="text-box">
            <h1>Welcome to Ingenuity Gaming Pvt Ltd</h1>
            <p>Our mandate is to help our clients reduce time to market for games and scale up while remaining cost and
              operationally efficient. We deliver over 250 games annually with predictability. </p>
            <a href="about.html" class="hero-btn">Read More</a>
          </div> -->
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
    </div>
    <!-- carousel end -->
  </header>

  <section class="sservices">
    <h1><b><u>Welcome</u></b></h1>
    <div class="row">
      <div class="col-sm-7">
        <p>Welcome to the captivating realm of gaming, a vast universe where technology and entertainment seamlessly
          merge to transport you into worlds of adventure, challenge, and creativity. Gaming has evolved far beyond a
          simple pastime; it's a dynamic medium that caters to an extensive array of preferences and experiences.
          In this multifaceted landscape, you'll discover an endless array of genres, each offering a unique journey.
          Engage in epic quests, forge alliances, and become a hero in role-playing games. Experience adrenaline-pumping
          action and precision in first-person shooters. Solve intricate puzzles, uncover mysteries, and indulge in
          storytelling in adventure games. Strategy games will test your wits, while sports simulations provide a taste
          of the thrill of competition. <br /><br />

          Gaming isn't just about playing; it's also about watching. Esports has taken the world by storm, with
          professional players showcasing their skills in global tournaments. You can join in the excitement by
          spectating, learning from the best, or even aspiring to become a pro gamer yourself.<br /><br />

          As technology continues to advance, virtual reality has emerged, offering an entirely new level of immersion.
          Step into otherworldly landscapes, interact with characters in ways previously unimaginable, and feel as
          though you're inside the game itself.</p>
      </div>
      <div class="col-sm-5">
        <img src="image2/wel.avif" margin-top="10px" height="90%" width="100%">
      </div>
    </div>
  </section>

  <section class="sservices1">
    <div class="ss-col">
      <h1><b><u>About</u></h1></b></h1>
      <p>Welcome to our gaming site, your ultimate destination for all things gaming. Explore a treasure trove of
        content, from in-depth game reviews and recommendations to the latest industry news and trends. Discover expert
        tips, walkthroughs, and strategies to elevate your gameplay. Dive into the world of esports with coverage of
        major tournaments and the profiles of top gamers. Engage with our gaming community, exchange ideas, and stay
        updated on upcoming releases and technological advancements. Whether you're a casual player, a hardcore gamer,
        or just curious about this dynamic universe, our site offers a rich gaming experience designed to keep you
        informed and entertained.</p>
      <img src="image2/banner2.jpg" alt="" style="width: 100%">
    </div>
  </section>

  <section class="services">
    <h1><b><u>Services</u></b></h1>

    <div class="row">
      <div class="service-col">
        <h3>CASINO GAME DEVELOP</h3>
        <p style="text-align: left;">Casino game development is the intricate process of crafting gambling games for
          both online and traditional casinos. This multifaceted endeavor incorporates programming, graphics, sound
          design, and rigorous testing to ensure fair and engaging gameplay. Developers create a wide range of games,
          from slot machines and table games to poker and roulette. It's a fusion of advanced technology, mathematical
          algorithms, and user-centric design to deliver gaming ideas to life.</p>

        <img src="image2/CASINO.jpg" alt="">

      </div>

      <div class="service-col">
        <h3>MANAGED GAMES STUDIO</h3>
        <p style="text-align: left;" id="m">A managed games studio is a specialized creative hub where professional teams
          handle all aspects of game development. This encompasses project management, design, coding, graphics, sound,
          and quality assurance. Such studios are responsible for the end-to-end production process, ensuring seamless
          game creation and often operate under established industry standards. They offer a one-stop solution for
          clients looking to bring their gaming ideas to life.</p>

        <img src="image2/MANAGED.jpg" alt="">

      </div>

      <div class="service-col">
        <h3>SPORTSBOOK</h3>
        <p style="text-align: left;" id="s">A sportsbook is a platform, often part of a casino or online betting site, where
          individuals can wager on various sports events. It offers a wide range of betting options, from traditional
          moneyline bets to more complex propositions. Sportsbooks provide odds and lines for sporting events, allowing
          bettors to stake money on their predictions. These platforms are central to sports betting, offering a legal
          and regulated way to engage in sports gambling and are integral to the betting industry.</p>

        <img src="image2/SPORTS.jpg" alt="">

      </div>

      <div class="service-col">
        <h3>QA TEST & COMPLIANCE</h3>
        <p style="text-align: left;">QA Test & Compliance refers to the critical processes of quality assurance and
          regulatory adherence in product development. It involves systematic testing to identify and rectify issues,
          ensuring a product functions as intended. In addition, compliance ensures that a product complies with
          industry-specific rules and regulations, safeguarding against legal and operational risks. These processes are
          crucial in sectors like healthcare, finance, and technology, where product reliability and adherence.</p>
        <img src="image2/QA TEST.jpg" alt="">
      </div>

      <div class="service-col">
        <h3>RGS MANAGED SERVICE</h3>
        <p style="text-align: left;" id="g">An RGS (Remote Gaming Server) Managed Service is a comprehensive solution for
          online casino and gaming operators. It involves outsourcing the management of the RGS, which hosts and
          delivers games to players. This service offers expertise in game deployment, maintenance, compliance, and
          scaling infrastructure. It allows gaming operators to focus on their core business while benefiting from a
          secure and efficient gaming server managed by experts, ensuring a seamless gaming.</p>
        <img src="image2/RGS.jpg" alt="">
      </div>

      <div class="service-col">
        <h3>IOS APP DEVELOPMENT</h3>
        <p style="text-align: left;" id="i">iOS app development is the creation of mobile applications specifically designed
          for Apple's iOS operating system, used in iPhones, iPads, and other Apple devices. It involves coding, design,
          and testing to build user-friendly and functional apps. Developers often use programming languages like Swift
          or Objective-C. iOS app development is critical for businesses and individuals looking to reach the vast iOS
          user base, offering solutions for various needs, from productivity to entertainment.</p>
        <img src="image2/IOS APP.jpg" alt="">
      </div>
    </div>

  </section>

  <section class="services">
    <h1><b><u>What We Do</u></b></h1>
    <div class="row">
      <div class="service2-col" data-aos="zoom-in">

        <h3>Design</h3>
        <p style="text-align: left;">We have a highly trained Art Studio that helps build bespoke content for the top
          gaming Operators and Content Suppliers globally. It’s a team that been involved with games for the last 15
          years and have gained experience which they have used to successfully build from of the most successful games
          in the industry. We build games optimized for mobile/desktop or landbased requirements along with game
          marketing packages as needed.</p>
        <img src="image2/des.jpeg" alt="" style="width: 100%; height: 200px;">
      </div>

      <div class="service2-col" data-aos="zoom-in">
        <h3>Technology</h3>
        <p style="text-align: left;" id="t">Quest is our engine of growth. With a team of experienced engineers who also
          have tremendous gaming exposure, we have over the years crafted a game development framework that is robust,
          expansive and highly efficient at building all kinds of fixed odd betting games (Slots, Table Games, Scratch
          card games, Bingo and Keno) for both online and land based gaming. In addition we have further expanded our
          services.</p>
        <img src="image2/tech.jpeg" alt="" style="width: 100%; height: 200px;">
      </div>

      <div class="service2-col" data-aos="zoom-in">
        <h3>Test Lab</h3>
        <p style="text-align: left;">The Test Lab at Ingenuity has been built with the highest standards for quality
          assurance and quality control. They are involved right through the game development life cycle, have strong
          compliance knowledge, maintain a large database of devices for physical game testing, cover all languages and
          have experience testing thousands of games for the industry. They have been trained to target one cycle game
          approvals with the platforms. </p>
        <img src="image2/test.jpeg" alt="" style="width: 100%; height: 200px;">
      </div>
    </div>
  </section>



  <section class="clients">
    <h1><b><u>Our Partners</u></b></h1>
    <div class="marquee">
      <ul class="marquee-content">
        <li id="p"><img src="image2/pss-removebg-preview.png" style=" height:125px; "></li>
        <li id="o"><img src="image2/obicule.png" style=" height:100px;"></li>
        <li id="g"> <img src="image2/gnk-removebg-preview.png" style=" height:100px;  "></li>
        <li id="gl"><img src="image2/glogo.png" style=" height:90px;"></li>
        <li id="g"> <img src="image2/gnk-removebg-preview.png" style=" height:100px;  "></li>
    
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

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 200,
      duration: 1500,
    });
  </script>

  <script>
    const root = document.documentElement;
    const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
    const marqueeContent = document.querySelector(".marquee-content");

    root.style.setProperty("--marquee-elements", marqueeContent.children.length);

    for (let i = 0; i < marqueeElementsDisplayed; i++) {
      marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
  </script>

</body>

</html>
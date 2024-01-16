<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IT Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="index.css">
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
  <section class="test-header">
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
    <!-- <div class="text-box">
      <h1>About Us</h1>
    </div> -->
  </section>

  <section class="test">
    <div class="test-col">
   <h1><b><u>Test Lab</u></b></h1>
   <p>A gaming test lab is a crucial component in the gaming industry's quality assurance process. It's a dedicated space or team responsible for thoroughly evaluating and testing video games and gaming equipment, ensuring they meet the highest standards of performance, playability, and reliability. Here's an in-depth look at the role and importance of gaming test labs:<br/><br/>

   <b> 1. Quality Assurance:</b> Test labs serve as the final line of defense against game-breaking bugs and glitches. They rigorously test games for issues like crashes, graphical errors, and gameplay imbalances, ensuring a smooth and enjoyable player experience.<br/><br/>
    
    <b>2. Compatibility Testing:</b> Gaming test labs assess compatibility across various platforms, including PC, console, and mobile devices. This ensures that the game runs seamlessly on different hardware and operating systems.<br/><br/>
    
    <b>3. Functionality and Gameplay Testing:</b> Testers evaluate the game's core functionalities, from character movements and AI behavior to in-game physics and mechanics. They assess if the gameplay aligns with the developer's vision.<br/><br/>
    
    <B>4. Performance and Load Testing:</B> This involves determining how well the game performs under various conditions, including high player loads. It's essential for online multiplayer games to prevent server crashes and lag.<br/><br/>
    
    <b>5. User Experience Testing:</b> Test labs evaluate the overall user experience, including user interfaces, tutorials, and onboarding processes to ensure they are intuitive and user-friendly.<br/><br/>
    
    <B>6. Compliance and Regulatory Testing:</B> Games must adhere to various legal and industry standards. Test labs verify that games meet these requirements, which can include age ratings, privacy regulations, and accessibility standards.<br/><br/>
    
   <b> 7. Multiplayer and Network Testing:</b> For online multiplayer games, ensuring stable server connections, low latency, and fair matchmaking is paramount. Test labs simulate various network conditions to assess the game's performance.<br/><br/>
    
   <b> 8. Security Testing:</b> Protecting against cheating, hacking, and data breaches is vital. Test labs look for vulnerabilities and ensure that the game's security measures are robust.<br/><br/>
    
   <B> 9. Localization Testing:</B> In the global gaming market, localization is crucial. Test labs check translations, cultural adaptations, and regional content to ensure the game is suitable for different markets.<br/><br/>
    
    <b>10. VR/AR and Emerging Technologies:</b> With the advent of virtual reality (VR) and augmented reality (AR) gaming, test labs play a pivotal role in assessing hardware compatibility, motion sickness prevention, and immersive experiences.<br/><br/>
    
    A well-established gaming test lab is an integral part of the development process, working closely with developers to identify and rectify issues, ultimately delivering a polished, high-quality game to players. Their meticulous work ensures that gamers can enjoy their chosen titles without frustrating bugs or technical hiccups, contributing to the overall success of the gaming industry.</p>
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

    function showMenu(){
      show.style.right = "0";
    }
    function hideMenu(){
      show.style.right = "-150px";
    }
  </script>
  <script>
    const root = document.documentElement;
const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
const marqueeContent = document.querySelector("ul.marquee-content");

root.style.setProperty("--marquee-elements", marqueeContent.children.length);

for(let i=0; i<marqueeElementsDisplayed; i++) {
  marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
}
    </script>

</body>

</html>
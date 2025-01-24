<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Help Link</title>
  <script src="/swiper-bundle.min.js"></script>
  <meta name="description" content="Your $6,275 Is Pending. Call today and have more to spend on rent, bills, and groceries. Cover your medical expenses. Claim what’s rightfully yours." />
  <meta name="robots" content="noindex" />
  <link rel="stylesheet" href="/swiper-bundle.main.css"
    referrerpolicy="no-referrer" />
  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #e6edf7;
    }
    .full-page {
      min-height: 100vh;
      padding: 13px;
      background-image: url("/bg-image.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
    .content-container {
      background-color: rgba(255, 255, 255, 0.85);
      border-radius: 15px 15px 0px 0px;
      min-height: 80vh;
    }
    .blue-header {
      background: linear-gradient(180deg, #4fb5ff 0%, #004170 100%);
      color: #e8e8e8;
      display: flex;
      align-items: center;
      padding: 6px 10px;
      align-items: center;
      border-radius: 15px 15px 0 0;
      font-size: 14px;
      font-weight: bold;
    }
    .us-flag {
      flex-shrink: 0;
    }
    .center-text {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .persistent-headline {
      font-size: 29px;
      font-weight: bold;
      padding: 30px 20px 0px;
      text-align: center;
      color: #4fb5ff;
    }
    .brands {
      text-align: center;
      padding-top:20px
    }
    .brands img {
      width: 300px;
    }
    .checked {
      color: #F5C900;
    }
    /** Button Styles */
    .button-positive {
      background-color: #004170;
      color: white;
      padding: 30px 10px;
      border-radius: 5px;
      text-align: center;
      margin: 10px;
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 20px;
      cursor: pointer;
    }
    .button-negative {
      border: 3px solid #004170;
      color: #004170;
      padding: 10px 10px;
      border-radius: 5px;
      text-align: center;
      margin: 10px;
      font-size: 30px;
      font-weight: bold;
      background-color: rgba(255, 255, 255, 0.4);
      cursor: pointer;
    }
    /** Form **/
    .form-container {
      padding: 20px;
      font-size: 20px;
      text-align: center;
      /* background-color: red; */
    }
    .question {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .page-number {
      font-size: 15px;
      margin-bottom: 10px;
    }
    /** Bottom Bar **/
    .bottom-bar {
      background-color: #525252;
      padding: 5px;
      text-align: center;
      border-radius: 0px 0px 15px 15px;
      color: #fff;
    }
    @keyframes throb {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.2);
      }
      100% {
        transform: scale(1);
      }
    }
    .throbbing {
      display: inline-block;
      color: red;
      animation: throb 1.5s infinite;
    }
    .congrats {
      border-radius: 15px 15px 0 0;
      background: linear-gradient(180deg, #00dd25 0%, #007814 100%);
      color: #fff;
      font-weight: bold;
      padding: 5px;
      border-top: 1px solid #000;
      border-left: 1px solid #000;
      border-right: 1px solid #000;
    }
    .last-page-card {
      background-color: #fff;
      padding: 13px;
      border-radius: 0 0 15px 15px;
      border-bottom: 1px solid #000;
      border-left: 1px solid #000;
      border-right: 1px solid #000;
    }
    .footer {
      background-color: #1c1c1c;
      color: #a4a4a4;
      padding: 10px;
      font-size: 13px;
    }
    /** desktop breakpoint **/
    @media (min-width: 768px) {
      .content-container {
        width: 50%;
        margin: 0 auto;
        border-radius: 15px;
      }
      .bottom-bar {
        display: none;
      }
      .hide-on-desktop {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="full-page">
    <div class="content-container">
      <!-- Green Header -->
      <div class="blue-header">
        <div class="center-text" style="padding: 5px">
        <div class="rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span
            ><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <strong>American Help Fund</strong>
          </div>
        </div>
      </div>
      <!-- Persistent Headline -->
      <div class="persistent-headline">Your $6,275 Is Pending</div>
      <!-- Form Container-->
      <div class="form-container">
        <!-- Page 1-->
        <div id="page-1">
          <div style="margin-bottom: 55px; padding: 0px 20px;">
            Call today and have more to spend on rent, bills, and groceries. Cover your medical expenses. Claim what’s rightfully yours.
          </div>
          <div style="font-weight: bold">Click below to start</div>
          <div class="button-positive next-button">Start Here</div>
          <div class="hide-on-desktop next-button" style="
                position: absolute;
                width: 65px;
                right: 0;
                margin-top: -72px;
                margin-right: 55px;
              ">
            <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
          </div>
        </div>
        <!-- Page 2-->
        <div id="page-2" style="display: none">
          <div>
            <hr style="border: 0.5px solid #b8b8b8; margin: 20px 0" />
          </div>
          <div class="page-number">Question 1 of 3</div>
          <div class="question">Do you earn less than $50,000 per year?</div>
          <div class="button-positive next-button"
          onclick="earns_less_than_50k_per_year = 'yes';"
          >Yes</div>
          <div class="hide-on-desktop next-button" style="
                position: absolute;
                width: 65px;
                right: 0;
                margin-top: -80px;
                margin-right: 55px;
              "
              onclick="earns_less_than_50k_per_year = 'yes';"
              >
            <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
          </div>
          <div class="button-negative next-button"
          onclick="earns_less_than_50k_per_year = 'no';"
          >No</div>
        </div>
        <!-- Page 3-->
        <div id="page-3" style="display: none">
          <div>
            <hr style="border: 0.5px solid #b8b8b8; margin: 20px 0" />
          </div>
          <div class="page-number">Question 2 of 3</div>
          <div class="question">Are you on Medicare or Medicaid?</div>
          <div class="button-positive next-button"
          onclick="has_medicaid_or_medicare = 'no';"
          >No</div>
          <div class="hide-on-desktop next-button" style="
                position: absolute;
                width: 65px;
                right: 0;
                margin-top: -80px;
                margin-right: 55px;
              "
              onclick="has_medicaid_or_medicare = 'no';"
              >
            <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
          </div>
          <div class="button-negative next-button"
          onclick="has_medicaid_or_medicare = 'yes';"
          >Yes</div>
        </div>
        <!-- Page 4-->
        <div id="page-4" style="display: none">
          <div>
            <hr style="border: 0.5px solid #b8b8b8; margin: 20px 0" />
          </div>
          <div class="page-number">Last question!</div>
          <div class="question">How old are you?</div>
          <div class="button-positive next-button"
          onclick="age_range = '18-to-64';"
          >18 to 64</div>
          <div class="hide-on-desktop next-button" style="
                position: absolute;
                width: 65px;
                right: 0;
                margin-top: -80px;
                margin-right: 55px;
              "
              onclick="age_range = '18-to-64';"
              >
            <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
          </div>
          <div class="button-negative next-button"
          onclick="age_range = 'over-65';"
          >Over 65</div>
        </div>
        <!-- Page 4 (LAST PAGE!!!)-->
        <div id="page-5" style="display: none">
          <div>
            <hr style="border: 0.5px solid #b8b8b8; margin: 20px 0" />
          </div>
          <div class="congrats"><i class="fa-solid fa-hand-holding-dollar" style="padding-right:10px;"></i>Congratulations!</div>
          <!-- last page card-->
          <div class="last-page-card">
            <div style="font-size: 18px;">Call immediately to claim your <span
                style="font-weight: bold; text-decoration: underline;">$6,275</span> Relief Fund & <span>$0</span>
              Health Plan</div>
            <div class="call-button-override">
            <a
                    href="tel:+18334610344"
                    style="text-decoration: none"
                    onclick="callButtonClicked()"
                    aria-label="Click to Call Now"
                  >
              <div class="button-positive next-button"
                style="display:flex; font-size: 22px; justify-content: space-around; align-items: center;">
                <div>
                  <img style="width: 29px" src="/phone.png" alt="Call Now" />
                </div>
                <div>Click to Call Now</div>
              </div>
      </a>
      <a
                    href="tel:+18334610344"
                    style="text-decoration: none"
                    onclick="callButtonClicked()"
                    aria-label="Click to Call Now"
                  >
              <div class="hide-on-desktop next-button" style="
                  position: absolute;
                  width: 65px;
                  right: 0;
                  margin-top: -80px;
                  margin-right: 25px;
                " class="next-button">
                <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
              </div>
      </a>
            </div>
            <a
                      href="tel:+18334610344"
                      onclick="callButtonClicked()"
                      aria-label="Call Now"
                    >
            <div style="font-weight: bold; text-decoration: underline; color: #4fb5ff;">
              Call Now: (833) 461-0344            </div>
      </a>
            <div style="font-size: 14px; margin-top: 10px;">
              Live Wait Time: <span class="throbbing" style=" font-weight: bold;">0</span> Minutes
            </div>
            <div style="font-size: 14px; margin-top: 5px;">
              Available Agents: <span class="throbbing" style="color: #09674c; font-weight: bold;">4</span>
            </div>
          </div>
          <div style="width: 100%; margin-top: 20px">
            <picture>
              <source type="image/webp" srcset="call/get/family.webp">
              <img src="/family.webp" alt="Happy Family " style="width: 65%" />
            </picture>
          </div>
        </div>
        <div class="brands">
          <div style="padding-bottom:25px">
            <strong>As Seen On:</strong>
          </div>
          <img src="/brands.png" alt="brands" />
        </div>
      </div>
    </div>
    <!-- Expiry Message-->
    <div class="bottom-bar" style="margin-bottom: 20px;">Today Is The Last Chance</div>
  </div>
  <!-- Footer section-->
  <div class="footer">
    <div style="text-align: center;"><a href="https://fastersubsidy.com/terms-of-use/" style="color: #a4a4a4;">Terms</a> | <a href="https://fastersubsidy.com/privacy-policy/" style="color: #a4a4a4;">Privacy</a> | <a href="https://fastersubsidy.com/contact-us/" style="color: #a4a4a4;">Contact</a></div>
  </div>
  <!-- FOOTER SCRIPTS -->
  <script>
    var ringbaAdded = false;
    function addRingba() {
        console.log("Adding Ringba...");
        // Create a new script element
        var script = document.createElement("script");
        // Set the src attribute of the script
        script.src = "//b-js.ringba.com/CA4074ac1b01a24162bb789f2b7a86a0f0?account=89u48214y1287441";
        // Set the async attribute to ensure the script loads asynchronously
        script.async = true;
        // Append the script to the head of the document
        document.head.appendChild(script);
      }
    $(document).ready(function () {
      console.log("Document Ready");
    });
    // Helper function to stop all audios
    function stopAllAudio() {
      audio1.pause();
      audio1.currentTime = 0;
      audio2.pause();
      audio2.currentTime = 0;
      audio3.pause();
      audio3.currentTime = 0;
      audio4.pause();
      audio4.currentTime = 0;
    }
    // fade to next page using jquery
    function fadeToNextPage(page) {
      console.log("Fading to next page", page);
      $(page).fadeOut(300, function () {
        $(page).next().fadeIn(300);
      });
    }
    // Special behavior for page 1: play audio
    var audio1 = new Audio("/audio-1.mp3");
    var page1buttons = document.querySelectorAll("#page-1 .next-button");
    page1buttons.forEach(function (button) {
      button.addEventListener("click", function () {
        stopAllAudio();
        audio1.play();
        fadeToNextPage("#page-1");
      });
    });
    // Special behavior for page 2: play audio
    var audio2 = new Audio("/audio-2.mp3");
    var page2buttons = document.querySelectorAll("#page-2 .next-button");
    page2buttons.forEach(function (button) {
      button.addEventListener("click", function () {
        stopAllAudio();
        audio2.play();
        fadeToNextPage("#page-2");
      });
    });
    // Special behavior for page 3: play audio
    var audio3 = new Audio("/audio-3.mp3");
    var page3buttons = document.querySelectorAll("#page-3 .next-button");
    page3buttons.forEach(function (button) {
      button.addEventListener("click", function () {
        stopAllAudio();
        audio3.play();
        fadeToNextPage("#page-3");
          if (!ringbaAdded) {
            ringbaAdded = true;
            addRingba();
          }
      });
    });
    // Special behavior for page 4: play audio
    var audio4 = new Audio("/audio-4.mp3");
    var page4buttons = document.querySelectorAll("#page-4 .next-button");
    page4buttons.forEach(function (button) {
      button.addEventListener("click", function () {
        stopAllAudio();
        audio4.play();
        fadeToNextPage("#page-4");
        startCountdown(180000);
      });
    });
  </script>
  <!-- Bottom Bar-->
  <style>
    .sticky-bottom-bar {
      position: fixed;
      bottom: -100px;
      /* Starts hidden below the screen */
      left: 0;
      /* Aligns it to the left */
      width: 100%;
      /* Ensures it stretches across the screen */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black background with 90% transparency */
      color: #39FF14;
      /* Neon green text color */
      font-weight: bold;
      /* Bold text */
      text-align: center;
      padding: 20px 0;
      /* Adds some padding for spacing */
      z-index: 1000;
      /* Ensures it stays on top of other content */
      transition: bottom 0.5s ease-in-out;
      /* Smooth transition for sliding up */
    }
  </style>
  <div id="sticky-bottom-bar" class="sticky-bottom-bar">
    Your Spot Is Reserved For: <span id="countdown-timer">02:59.99</span>
  </div>
  <script>
    function startCountdown(duration) {
      document.getElementById('sticky-bottom-bar').style.bottom = '0';
      let timerInterval;
      let endTime = Date.now() + duration;
      function updateTimer() {
        let now = Date.now();
        let remaining = endTime - now;
        if (remaining >= 0) {
          let minutes = Math.floor(remaining / 60000).toString().padStart(2, '0');
          let seconds = Math.floor((remaining % 60000) / 1000).toString().padStart(2, '0');
          let milliseconds = Math.floor((remaining % 1000) / 10).toString().padStart(2, '0');
          let formattedTime = `${minutes}:${seconds}.${milliseconds}`;
          // remove leading 0
          if (formattedTime.startsWith('0')) {
            formattedTime = formattedTime.substring(1);
          }
          document.getElementById('countdown-timer').textContent = formattedTime;
        } else {
          clearInterval(timerInterval);
          document.getElementById('countdown-timer').textContent = "0:00.00";
        }
      }
      timerInterval = setInterval(updateTimer, 10); // Update every 10ms
    }
  </script>
  </body>
</html>
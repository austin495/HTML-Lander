<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subsidy Site</title>

    <link
      rel="stylesheet"
      href="/swiper-bundle.main.css"
    />

    <link rel="preload" as="image" href="/wp-content/uploads/2024/03/check-6400.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="/swiper-bundle.min.js"></script>

    <meta name="robots" content="noindex" />

    <meta
      name="description"
      content="Congress Announces $6,401 Subsidy Available To All Americans"
    />
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <style>
      body,
      html {
        min-height: 100%;
        margin: 0;
        background-color: #fff;
        font-family:  "Roboto", Arial, Helvetica, sans-serif;
        overflow-x: hidden;
      }
      .swiper-slide {
      	height: 500px;
      }

      .form-wrapper {
        background-color: white;
        min-height: auto;
        border-radius: 38px;
        box-shadow: 0px 6px 40px 0px rgba(0, 0, 0, 0.35);
    	  transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        max-width: 100vw;
        box-sizing: border-box; /* Added this line */
        padding-bottom: 10vh;
      }

      /* BUTTONS */
      .button-positive {
        background-color: #004b75;
        color: white;
        border-radius: 5px;
        padding: 18px;
        text-align: center;
        font-weight: medium;
        font-size: 29px;
        cursor: pointer;
      }

      .button-positive:hover {
        background-color: #003452;
      }

      /** Button positive large **/
      .button-positive-large {
        display: flex;
        align-items: center;
        width: 100%;
        box-sizing: border-box;
        padding: 20px 30px;
        background-color: #004b75;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        cursor: pointer;
      }

      .button-positive-large:hover {
        background-color: #003452;
      }

      .button-positive-large div:first-child {
        font-size: 33px;
        margin-right: 10px;
      }

      .button-positive-large div:last-child {
        font-size: 30px;
        font-weight: bold;
        flex-grow: 1;
        text-align: center;
      }

      /** Button positive call **/
      .button-positive-call {
        display: flex;
        align-items: center;
        width: 60%;
        box-sizing: border-box;
        padding: 23px 30px;
        background-color: #004b75;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
        cursor: pointer;
        margin: 10px auto !important;
      }

      .button-positive-call:hover {
        background-color: #003452;
      }

      .button-positive-call div:first-child {
        font-size: 30px;
        margin-right: 10px;
      }

      .button-positive-call div:last-child {
        font-size: 23px;
        font-weight: bold;
        flex-grow: 1;
        text-align: center;
      }

      /** Button negative **/
      .button-negative {
        display: flex;
        align-items: center;
        width: 100%;
        box-sizing: border-box;
        padding: 10px 30px;
        background-color: #fff;
        border: 2px solid #004b75;
        color: #004b75;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        cursor: pointer;
      }

      .button-negative:hover {
        background-color: #003452;
        color: white;
      }

      .button-negative div:first-child {
        font-size: 33px;
        margin-right: 10px;
      }

      .button-negative div:last-child {
        font-size: 30px;
        font-weight: bold;
        flex-grow: 1;
        text-align: center;
      }

      /** other styles **/
      .min-full-height {
        min-height: 89vh;
      }

      .content {
        /* Fallback: old browsers */
        text-align: center;
        font-size: 22px;
        max-width: 1140px;
        margin: 0 auto;
      }


      .title {
        margin: 140px 0;
        font-weight: 900;
        text-align: center;
        color: #d83933;
        font-family: "PT Serif";
        position: relative;
    	display: block;
      }

      .title h1 {
        font-size: 60px;
        padding: 10px 60px;
        margin: 0;
      }

      .breaking-and-live {
        display: flex;
        justify-content: space-between;
      }

      .persistent-header {
        padding: 20px 20px 0px;
      }

      .swiper-padding {
        padding: 10px;
      }

      .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .slide-content {
        width: calc(100% - 20px); /* subtracting 20px padding from each side */
        padding: 20px;
        box-sizing: border-box;
      }

      .count {
        font-size: 15px;
        margin-bottom: 20px;
        margin-top: 10px;
      }
      .question {
        font-size: 26px;
        font-weight: bold;
        margin-top: 0px;
        margin-bottom: 35px;
        list-style: 28px;
      }

      .explainer {
          font-size: 22px;
          text-transform: uppercase;
          margin-bottom: 40px;
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

      /** Desktop styling for slider **/
      @media (min-width: 600px) {

        .footer {
          padding-top: 20px;
        }

        .title {
          padding-bottom: 20px;
          padding-top: 20px;
        }

        .swiper-container {
          height: auto;
        }

        .swiper-slide {
          height: 450px;
        }

        .swiper-padding {
          padding: 0px;
        }

        .swiper-slide {
          visibility: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
        }

        .swiper-slide-active {
          visibility: visible;
        }

        .slide-content {
          width: calc(
            100% - 30px
          ); /* subtracting 20px padding from each side */
          padding: 25px;
          box-sizing: border-box;
        }

        .count {
          font-size: 20px;
          margin-bottom: 10px;
        }
        .question {
          font-size: 36px;
          font-weight: 700;
          margin-bottom: 10px;
          font-family: 'Helvetica';
          line-height: 1.3em;
        }
      }
      .popup {
            position: fixed;
            bottom: -100%;
            left: 0;
            transform: translateX(0);
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            transition: bottom 0.5s ease-in-out;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            align-items: center;
            margin: 20px;
            border-radius: 10px;
        }

        .popup.show {
            bottom: 0;
        }

        .popup img {
            width: 60px;
            height: 60px;
            margin-right: 10px;
        }

        .text-container {
            display: flex;
            flex-direction: column;

        }

        .text-container h2 {
            padding: 0;
            margin: 0;
            font-size: 16px;
            font-weight: 600;
            padding-bottom: 5px;
						color: #000
        }

        .text-container h3 {
            padding: 0;
            margin: 0;
            font-size: 12px !important;
            font-weight: 400;
            color: #aece10;
            padding-bottom: 5px;
        }

        .text-container p {
            padding: 0;
            margin: 0;
            font-size: 12px;
            font-weight: 400;
            color: #707070;
        }
        .main-content {
            background-image: url("/frame_8-2.webp");
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: top;
        }
        .form {
            max-width: 850px;
            margin: 0 auto;
        }
        #foo {
          margin-top: 170px;
          padding-bottom: 40px
        }
        .G2 {
          font-family: 'Poppins';
          font-size: 14px;
          font-weight: 400;
          color: #fff;
        }
        .G2 a {
          font-family: 'Poppins';
          font-size: 14px;
          font-weight: 400;
          color: #fff;
          line-height: 5em;
        }
			@media only screen and (max-width: 600px) {
				
				.popup {
					    width: 52%;
							margin-bottom: 10px;
/*     					position: sticky;
      					margin-top: 15px;
							margin-left: 0px; */
			}
				.popup img {
					width: 30px;
					height: 50px;
				}
				.text-container h3 {
            padding: 0;
            margin: 0;
            font-size: 13px;
            font-weight: 400;
            color: #aece10;
            padding-bottom: 3px;
        }
				.text-container h2 {
            padding: 0;
            margin: 0;
            font-size: 16px;
            font-weight: 500;
            padding-bottom: 3px;
						color: #000;
        }
				.text-container {
            width: 100%
        }
        .title {
        	font-size: 32px;
      	}
        #congrats {
        	font-size: 28px !important;
            letter-spacing: 0px !important;
            margin: 10px -20px !important;
        }
        #annou {
        	font-size: 26px !important;
        }
        #pre-qualify {
        	font-size: 22px !important;
            margin: 10px 0px !important;
            padding: 10px 0px !important;
        }
        .question {
            font-size: 22px;
            font-weight: 700;
            line-height: 1.3em;
            margin-bottom: 10px;
        }
        #live {
            height: 24px !important;
        }
        .title {
            margin: 40px 0;
        }
        .title h1 {
            font-size: 24px;
            padding: 10px 15px;
        }
        #foo {
          margin-top: 30px;
        }
        .swiper-slide {
          height: 450px;
        }
        .swiper-padding {
          margin: 0;
        }
        .explainer {
          font-size: 18px;
        }
        .button-positive-call {
          width: 100%;
        }
        #call-tap {
          right: 20px !important;
        }
		}
    </style>
    
  </head>
  <body>
    <!-- Min 100vh -->
    <div class="main-content">
      <div class="min-full-height content">
        <div class="persistent-header">
          <div class="breaking-and-live">
  
            <div>
              <!-- <picture>
                <source type="image/webp" srcset="/wp-content/uploads/2024/03/group_45.webp">
                <img src="/wp-content/uploads/2024/03/group_45.webp" alt="Breaking news" style="height: 36px"/>
              </picture> -->
            </div>
  
            <div style="background-color: transparent;">
              <picture>
                <source type="image/webp" srcset="/Live-Gif.gif">
                <img id="live" src="/Live-Gif.gif" alt="Breaking news" style="height: 50px; border-radius: 8px;"/>
              </picture>
            </div>
  
  
          </div>
  
          <div class="title">
            <picture>
              <source type="image/webp" srcset="/untitled_1_3-1.webp">
              <img src="/untitled_1_3-1.webp" alt="Breaking news" style="height: 50px; border-radius: 8px;"/>
            </picture>
            <h1>Americans Qualify For Up To $6,388 To Pay For Medical Expenses, Giving You Peace Of Mind For Rent, Bills, And Groceries.</h1>
          </div>
        </div>
  
        <!-- Form Area-->
  
        <div class="form">
          <div class="swiper-padding">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <!-- Page 1-->
                <div class="swiper-slide">
                  <div class="form-wrapper slide-content" id="page-1">
                    <div class="question" style="margin-bottom: 10px">
                      Claim your support fund now, which pays for your healthcare expenses, allowing you to spend more on groceries, fuel, housing, and other bills, including $0 health coverage.
                    </div>
                    <div style="margin: 16px 0; color: #d83933; font-family: 'Poppins';">Click Below To Claim</div>
  
                    <div
                      class="button-positive-large next-button"
                      style="margin-bottom: 20px"
                    >
                      <div>Claim Now</div>
                    </div>
  
                    <div
                      style="
                        position: absolute;
                        width: 65px;
                        right: 0;
                        margin-top: -86px;
                        margin-right: 26px;
                      "
                      class="next-button"
                    >
                      <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
                    </div>
  
                    <div>
                    <p>Trusted and secure:</p>
                      <picture>
                        <source type="image/webp" srcset="/brands.png">
                        <img src="/brands.png" alt="Check" style="width: 50%; max-width:100%;" width="336px" height="auto" />
                      </picture>
                    </div>
                  </div>
                </div>
  
                <span></span>
  
                <!-- Page 2-->
                <div class="swiper-slide">
                  <div class="form-wrapper slide-content" id="page-2">
                    <div class="count">1 of 3</div>
                    <div class="question">
                      Do you earn less than $50,000 per year?
                    </div>
                    <div class="explainer">
                      You must earn less than $50,000 per year to qualify.
                    </div>
  
                    <div
                      class="button-positive-large next-button"
                      style="margin-bottom: 20px"
                    >
                      <!-- Check Icon -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="4.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        width="33px"
                        height="33px"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M4.5 12.75l6 6 9-13.5"
                        />
                      </svg>
                      <!-- / Check Icon -->
  
                      <div>Yes</div>
                    </div>
  
                    <div
                      style="
                        position: absolute;
                        width: 65px;
                        right: 0;
                        margin-top: -86px;
                        margin-right: 26px;
                      "
                      class="next-button"
                    >
                      <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
                    </div>
  
                    <div
                      class="button-negative next-button"
                      style="margin-bottom: 20px"
                    >
                      <!-- X Icon -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="4.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        width="33px"
                        height="33px"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12"
                        />
                      </svg>
                      <!-- / X Icon -->
  
                      <div>No</div>
                    </div>
  
                    
                  </div>
                </div>
  
                <!-- Page 3-->
                <div class="swiper-slide">
                  <div class="form-wrapper slide-content" id="page-3">
                    <div class="count">2 of 3</div>
                    <div class="question">Are you on Medicare or Medicaid?</div>
                    <div class="explainer">
                      To qualify, you must not be on Medicare or Medicaid.
                    </div>
  
                    <div
                      class="button-positive-large next-button"
                      style="margin-bottom: 20px"
                    >
                      <!-- Check Icon -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="4.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        width="33px"
                        height="33px"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M4.5 12.75l6 6 9-13.5"
                        />
                      </svg>
                      <!-- / Check Icon -->
                      <div>No</div>
                    </div>
  
                    <div
                      style="
                        position: absolute;
                        width: 65px;
                        right: 0;
                        margin-top: -86px;
                        margin-right: 26px;
                      "
                      class="next-button"
                    >
                      <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
                    </div>
  
                    <div
                      class="button-negative next-button"
                      style="margin-bottom: 20px"
                    >
                      <!-- X Icon -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="4.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        width="33px"
                        height="33px"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12"
                        />
                      </svg>
                      <!-- / X Icon -->
                      <div>Yes</div>
                    </div>
  
                    
                  </div>
                </div>
  
                <!-- Page 4-->
                <div class="swiper-slide">
                  <div class="form-wrapper slide-content" id="page-4">
                    <div class="count">Last question!</div>
                    <div class="question" style="margin-bottom: 5px">
                      How old are you?
                    </div>
                    <div class="explainer">
                      You must be between 18 to 64 years old to qualify.
                    </div>
  
                    <div
                      class="button-positive-large next-button"
                      style="margin-bottom: 20px"
                    >
                      <!-- Check Icon -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="4.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        width="33px"
                        height="33px"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M4.5 12.75l6 6 9-13.5"
                        />
                      </svg>
                      <!-- / Check Icon -->
                      <div>18 to 64</div>
                    </div>
  
                    <div
                      style="
                        position: absolute;
                        width: 65px;
                        right: 0;
                        margin-top: -86px;
                        margin-right: 26px;
                      "
                      class="next-button"
                    >
                      <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
                    </div>
  
                    <div
                      class="button-negative next-button"
                      style="margin-bottom: 20px"
                    >
                      <!-- X Icon -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="4.5"
                        stroke="currentColor"
                        class="w-6 h-6"
                        width="33px"
                        height="33px"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12"
                        />
                      </svg>
                      <!-- / X Icon -->
                      <div>Over 65</div>
                    </div>
  
                    
                  </div>
                </div>
  
                <!-- Page 5 (Last page)-->
                <div class="swiper-slide">
                  <div class="form-wrapper slide-content" id="page-5">
                    <div style="width: 100%">
                    <span id="annou" style="font-family: 'Poppins';font-weight: 700;font-size: 58px;line-height: 1.3em;color: #112f4e;padding: 10px;">Congress Announces $6,400 Subsidy Available To All Americans</span>
                      <span id="congrats" style="text-align: center;background-color: #d83933;color: #fff;font-size: 65px;letter-spacing: -4px;font-weight: bold;font-family: 'PT Serif';margin: 10px -35px;display: block;padding: 8px 0;">★ CONGRATULATIONS ★</span>
                    </div>
  
                    <div id="pre-qualify" style="font-size: 30px; padding: 10px 28px; font-family: 'Poppins'; color: #112f4e;">
                      You pre-qualify! Call immediately to claim your
                      <strong style="text-decoration: underline">$6,400</strong>
                      Subsidy & <strong>$0</strong> Health Plan.
                    </div>
  
                    <!-- C2C Button-->
                    <a
                      href="tel:+18883230086"
                      style="text-decoration: none"
                      aria-label="Click to Call Now"
                    >
                      <div
                        class="button-positive-call"
                        style="margin: 10px 0"
                      >
                        <div>Click to Call Now</div>
                      </div></a
                    >
  
                    <a
                      href="tel:+18883230086"
                      style="text-decoration: none"
                      aria-label="(888) 323-0086"
                    >
                      <div id="call-tap"
                        style="
                          position: absolute;
                          width: 65px;
                          right: 180px;
                          margin-top: -68px;
                          margin-right: 14px;
                        "
                        class="next-button"
                      >
                        <img style="width: 100%" src="/tap.gif" alt="Tap Here!" />
                      </div>
                    </a>
  
                    <div style="margin-bottom: 20px">
                      <a
                        href="tel:+18883230086"
                        style="color: #d83933;font-size: 28px;"
                        aria-label="Call Now"
                      >
                        Call Now: (888) 323-0086                    </a>
                    </div>
  
                    <!-- congrats page footer content-->
                    <div style="font-size: 25px; color: #4e4e4e;line-height: 1.5em;">
                      Live Wait Time:
                      <strong class="throbbing" style="color: green">0</strong>
                      minutes
                      <br />
                      Available Agents: <strong class="throbbing">4</strong>
                    </div>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- / Form Area -->
      </div>
      <!-- Footer -->
    <div id="foo">
      <div style="max-width: 1140px; background-color: #d83933; margin: 0 auto; border-radius: 60px; color: #fff;">
        <div style="padding: 0px; text-align: center">
          <div class="footer">
            <div
              class="disclaimer"
              style="font-size: 10px; padding: 15px 30px 0px"
            >
              <div style="font-size: 16px;"><strong>TERMS OF SERVICE:</strong></div>
              <p>
                mybenefitsprime.org is a referral source that provides information
                and access to a helpline to match consumers with companies that
                may provide certain insurance coverage to them. mybenefitsprime.org                does not act as an insurance broker and does not make decisions
                about insurance coverage that may be available to you.
                mybenefitsprime.org doesn't promise a specific outcome or the results
                you may achieve by calling the helpline. The helpline is free to
                call but the services or programs that you pursue may have costs
                associated with them. Neither mybenefitsprime.org nor any of the
                supplemental insurance plans to which you may be connected are
                endorsed by the U.S. or the Medicare program.
              </p>
              <br />
              <p style="margin: 0;">
                Our goal is to provide exceptional service. One of our agents
                may reach out to you to discuss your order, ask for feedback,
                and/or see if you need any assistance with your products,
                services, or plans, at the phone number you provided regardless
                of your do-not-call list status. You may opt-out of further
                contact at any time by simply telling our customer service team
                that you would no longer like to be contacted. In the event that
                our team is unable to reach you by phone, they may send you a
                text message letting you know that we called. Both our text
                messages and phone calls may be sent or connected utilizing
                automated software. Carrier charges may apply. You may opt-out
                of any future contact via text message by replying anytime with
                "STOP".
              </p>
              <span class="G2"><a href="https://www.g2llc.com/approved-health-insurance-provider/?pdb=309" target="_blank">Benefit Link Inc. | G2</a></span>
            </div>
            
            <div>
              <a
                href="/privacy.html"
                style="color: #fff"
                aria-label="Privacy Policy"
                >Privacy Policy</a
              >
              |
              <a href="/terms.html" style="color: #fff"
              aria-label="Terms of Service"
                >Terms of Service</a
              >
              |
              <a
                href="/contact.html"
                style="color: #fff"
                aria-label="Contact Us"
                >Contact Us</a
              >
            </div>
            <br />
            <div style="text-align: center; font-size: 15px">
              Copyright 2024 mybenefitsprime.org
              <br /><br />
              <br /><br />
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    <!-- / Min 100vh -->

    
    
    <div id="popupContainer"></div>
    <script>
        // Array of 30 offers
        var offers = [
            {
                heading: "Benjamin Thompson",
                subheading: "just got approved for $6,213.53",
                time: "few minutes ago",
								image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Ryan Anderson",
                subheading: "just got approved for $5,726.89",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Ethan Walker",
                subheading: "just got approved for $2,776.89",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Nathan Parker",
                subheading: "just got approved for $4,582.47",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Jason Mitchell",
                subheading: "just got approved for $3,867.92",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Marcus Turner",
                subheading: "just got approved for $4,423.36",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Alex Reynolds",
                subheading: "just got approved for $6,291.18",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Derek Evans",
                subheading: "just got approved for $2,945.73",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Wesley Harper",
                subheading: "just got approved for $5,545.67",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Brandon Carter",
                subheading: "just got approved for $4,890.12",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Liam Foster",
                subheading: "just got approved for $6,176.54",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Kyle Mitchell",
                subheading: "just got approved for $4,123.45",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Carter Johnson",
                subheading: "just got approved for $3,765.43",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Trevor Hayes",
                subheading: "just got approved for $5,901.23",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Jordan Foster",
                subheading: "just got approved for $6,543.21",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Mason Turner",
                subheading: "just got approved for $2,234.56",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Caleb Mitchell",
                subheading: "just got approved for $5,567.89",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Oscar Martinez",
                subheading: "just got approved for $3,345.67",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Gavin Wilson",
                subheading: "just got approved for $4,901.23",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Justin Thompson",
                subheading: "just got approved for $5,432.10",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Tyler Harris",
                subheading: "just got approved for $3,456.78",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Zachary Turner",
                subheading: "just got approved for $2,890.12",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Adrian Nelson",
                subheading: "just got approved for $3,987.65",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Connor Baker",
                subheading: "just got approved for $5,123.45",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Bradley Wright",
                subheading: "just got approved for $6,154.32",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Keith Mitchell",
                subheading: "just got approved for $3,234.56",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Harrison Turner",
                subheading: "just got approved for $4,876.54",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Dominic Scott",
                subheading: "just got approved for $5,789.01",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Nolan Carter",
                subheading: "just got approved for $4,901.23",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Benjamin Thompson",
                subheading: "just got approved for $2,543.21",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Ryan Anderson",
                subheading: "just got approved for $3,109.87",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Benjamin Thompson",
                subheading: "just got approved for $4,678.90",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Ryan Anderson",
                subheading: "just got approved for $6,234.56",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Ethan Walker",
                subheading: "just got approved for $2,345.67",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Nathan Parker",
                subheading: "just got approved for $3,456.78",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Jason Mitchell",
                subheading: "just got approved for $2,012.34",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Marcus Turner",
                subheading: "just got approved for $5,210.98",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Alex Reynolds",
                subheading: "just got approved for $4,123.45",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Derek Evans",
                subheading: "just got approved for $3,567.89",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Wesley Harper",
                subheading: "just got approved for $5,321.09",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Brandon Carter",
                subheading: "just got approved for $3,678.90",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Liam Foster",
                subheading: "just got approved for $2,987.65",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Kyle Mitchell",
                subheading: "just got approved for $5,234.56",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Carter Johnson",
                subheading: "just got approved for $3,456.78",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Trevor Hayes",
                subheading: "just got approved for $5,890.12",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Jordan Foster",
                subheading: "just got approved for $2,345.67",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Mason Turner",
                subheading: "just got approved for $6,789.01",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Caleb Mitchell",
                subheading: "just got approved for $5,678.90",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/02/Group-128.webp"
            },
            {
                heading: "Oscar Martinez",
                subheading: "just got approved for $6,234.56",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Gavin Wilson",
                subheading: "just got approved for $3,789.01",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Justin Thompson",
                subheading: "just got approved for $2,901.23",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Tyler Harris",
                subheading: "just got approved for $6,199.01",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Zachary Turner",
                subheading: "just got approved for $3,012.34",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Adrian Nelson",
                subheading: "just got approved for $5,432.10",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Connor Baker",
                subheading: "just got approved for $2,223.10",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Bradley Wright",
                subheading: "just got approved for $4,567.89",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Keith Mitchell",
                subheading: "just got approved for $3,210.98",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Harrison Turner",
                subheading: "just got approved for $3,890.12",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Dominic Scott",
                subheading: "just got approved for $4,789.01",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
            {
                heading: "Nolan Carter",
                subheading: "just got approved for $5,890.12",
                time: "few minutes ago",
                image: "/wp-content/uploads/2024/03/fi_4879994.svg"
            },
        ];
        // Function to display the popup
        function displayPopup(index) {
            // Create a new popup element
            var popup = document.createElement("div");
            popup.className = "popup";
//             // Create the image element
//             var image = document.createElement("img");
//             image.src = offers[index].image;
//             popup.appendChild(image);
//             Create the text element
            var textContainer = document.createElement("div");
            textContainer.className = "text-container";

            var heading = document.createElement("h2");
            heading.textContent = offers[index].heading;
            textContainer.appendChild(heading);

            var subheading = document.createElement("h3");
            subheading.textContent = offers[index].subheading;
            textContainer.appendChild(subheading);

            var time = document.createElement("p");
            time.textContent = offers[index].time;
            textContainer.appendChild(time);

            popup.appendChild(textContainer);
            document.getElementById("popupContainer").appendChild(popup);
            // Trigger the animation by adding the "show" class after a short delay
            setTimeout(function () {
                popup.classList.add("show");
            }, 100);
            // Remove the popup after 3 seconds
            setTimeout(function () {
                popup.classList.remove("show");
                // Remove the popup from the DOM after the animation completes
                setTimeout(function () {
                    popup.remove();
                    // Display the next popup (loop back to the first offer if necessary)
                    var nextIndex = (index + 1) % offers.length;
                    displayPopup(nextIndex);
                }, 500); // Adjust this duration to match the CSS transition time
            }, 5000);
        }
        // Start displaying the popups
        displayPopup(0);
    </script>
    <!-- / Footer-->

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".swiper-container", {
          direction: "horizontal",
          loop: false,
          allowSlideNext: false,
          allowSlidePrev: false,
        });

        function addNextButtonListener(pageSelector) {
          var buttons = document.querySelectorAll(
            pageSelector + " .next-button"
          );
          buttons.forEach(function (button) {
            button.addEventListener("click", function () {
              swiper.allowSlideNext = true;
              swiper.slideNext();
              swiper.allowSlideNext = false;
            });
          });
        }

        // Add event listeners for each page
        addNextButtonListener("#page-1");
        addNextButtonListener("#page-2");
        addNextButtonListener("#page-3");
        addNextButtonListener("#page-4");

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

        // Special behavior for page 1: play audio
        var audio = new Audio("/cash-register-fake-88639.mp3");
        var audio1 = new Audio("/First.mp3");
        var page1buttons = document.querySelectorAll("#page-1 .next-button");
        page1buttons.forEach(function (button) {
          button.addEventListener("click", function () {
          audio.play();
          setTimeout(function() {
          	stopAllAudio();
            audio1.play();
          }, 300);
          });
        });

        // Special behavior for page 2: play audio
        var audio2 = new Audio("/Second.mp3");
        var page2buttons = document.querySelectorAll("#page-2 .next-button");
        page2buttons.forEach(function (button) {
          button.addEventListener("click", function () {
            stopAllAudio();
            audio2.play();
          });
        });

        // Special behavior for page 3: play audio
        var audio3 = new Audio("/DOB-1.mp3");
        var page3buttons = document.querySelectorAll("#page-3 .next-button");
        page3buttons.forEach(function (button) {
          button.addEventListener("click", function () {
            stopAllAudio();
            audio3.play();
          });
        });

        // Special behavior for page 4: play audio
        var audio4 = new Audio("/Last.mp3");
        var page4buttons = document.querySelectorAll("#page-4 .next-button");
        page4buttons.forEach(function (button) {
          button.addEventListener("click", function () {
            
            stopAllAudio();
            audio4.play();
          });
        });
      });
    </script>
    <script>
    jQuery(document).ready(function($) {

      $('#page-1 .next-button').on('click', function() {
        	$('.swiper-slide').css('height', '400px');
          $('.swiper-padding').css('margin-top', '-120px');
          $('.swiper-padding').css('margin-bottom', '-90px');
      });

    	$('#page-4 .next-button').on('click', function() {
        	$('.swiper-slide').css('height', '500px');
          $('.swiper-padding').css('margin-top', '0px');
          $('.swiper-padding').css('margin-bottom', '0px');
      });

      function responsive(maxWidth) {
        if (maxWidth.matches) { 
          $('#page-4 .next-button').on('click', function() {
              $('.swiper-slide').css('height', '600px');
              $('#foo').css('margin-top', '50px');
          });

          $('#page-1 .next-button').on('click', function() {
              $('.swiper-padding').css('margin-top', '0px');
              $('.swiper-padding').css('margin-bottom', '0px');
              $('#foo').css('margin-top', '-50px');
          });
          
        }
      }
      var maxWidth = window.matchMedia("(max-width: 600px)");
      
      responsive(maxWidth);
      maxWidth.addListener(responsive);
    });
	</script>
  </body>
</html>
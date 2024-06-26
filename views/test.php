<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      html,
      body {
        position: relative;
        height: 100%;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      }

      section {
        position: relative;
        display: flex;
        justify-content: center;
        width: 100%;
        height: 100vh;
      }

      .hero {
        position: absolute;
        bottom: 0;
        z-index: 5;
        max-width: 550px;
        filter: contrast(90%);
        pointer-events: none;
      }

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        position: relative;
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .title {
        position: absolute;
        top: 18%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 5rem;
        letter-spacing: 0.3rem;
        z-index: 5;
        color: transparent;
        background-position: 0 0;
        animation: animated-text 20s linear infinite;
      }

      @keyframes animated-text {
        100% {
          background-position: 200% 0;
        }
      }

      .one,
      .five {
        -webkit-text-stroke: 1px rgba(16, 104, 31, 0.8);
        background: url(https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e9d06cb6-2844-49ed-9bde-23d3364b9fa4);
        background-clip: text;
        -webkit-background-clip: text;
      }

      .two,
      .three,
      .four,
      .six {
        -webkit-text-stroke: 1px #fff;
        background: url(https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/ba4edde6-822d-437a-88c2-f54392d7a56f);
        background-clip: text;
        -webkit-background-clip: text;
      }

      .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
      }

    </style>
</head>

    <body>
        <section>
        
        <div class="swiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <h1 class="title one">Bienvenue</h1>
                <img src="assets/images/pub2.jpg" width="auto" height="300" class="d-block w-100" alt="...">
            </div>

            <div class="swiper-slide">
                <h1 class="title two">Stockholm</h1>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/62411bbf-dde9-4654-9298-1fe3e7da2d64" alt="" />
            </div>

            <div class="swiper-slide">
                <h1 class="title three">Paris</h1>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/b49c729f-65b0-4a2a-baf7-1d9f180df0a6" alt="" />
            </div>

            <div class="swiper-slide">
                <h1 class="title four">Brugge</h1>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c9a61071-c74d-4e8b-966a-6948cdbd9665" alt="" />
            </div>

            <div class="swiper-slide">
                <h1 class="title five">Bavaria</h1>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/25ab6cb7-9251-4aa5-9993-32ebd8542616" alt="" />
            </div>

            <div class="swiper-slide">
                <h1 class="title six">Copenhagen</h1>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/365656bc-24bc-4d95-92da-7f34faa616cf" alt="" />
            </div>
            </div>
        </div>
        </section>
    </body>
    <script src="assets/js/script.js"></script>
</html>
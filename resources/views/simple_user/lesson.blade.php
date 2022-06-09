<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="language" content="english" />
    <meta name="author" content="Udemy" />
    <meta name="designer" content="Udemy" />
    <meta name="publisher" content="Udemy" />

    <!--Search Engine Optimization Meta Tags-->
    <meta name="description" content="Udemy" />
    <meta
      name="keywords"
      content="Software Engineer, Product Manager, Project Manager, Udemy, Udemy.mn"
    />

    <!--Optional Meta Tags-->
    <meta name="distribution" content="web" />
    <meta name="web_author" content="Udemy" />
    <meta name="title" content="Udemy" />
    <meta name="copyright" content="Copyright 2020" />
    <meta name="reply-to" content="udemy_mongol@gmail.com" />
    <meta name="abstract" content="Web technology - Udemy" />
    <meta name="city" content="Ulaanbaatar" />
    <meta name="country" content="Mongolia" />
    <meta name="distribution" content="global" />
    <meta name="classification" content="Udemy" />

    <!--Meta Tags for HTML pages on Mobile-->
    <meta name="format-detection" content="telephone=yes" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Udemy</title>
    <!-- favicon started -->
    <link
      rel="icon"
      type="image/png"
      href="{{asset('assets/favicon/favicon-196x196.png')}}"
      sizes="196x196"
    />
    <link
      rel="icon"
      type="image/png"
      href="{{asset('assets/favicon/favicon-96x96.png')}}"
      sizes="96x96"
    />
    <link
      rel="icon"
      type="image/png"
      href="{{asset('assets/favicon/favicon-32x32.png')}}"
      sizes="32x32"
    />
    <link
      rel="icon"
      type="image/png"
      href="{{asset('assets/favicon/favicon-16x16.png')}}"
      sizes="16x16"
    />
    <link
      rel="icon"
      type="image/png"
      href="{{asset('assets/favicon/favicon-128.png')}}"
      sizes="128x128"
    />
    <!-- favicon end -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/lesson.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <!-- Header Starting -->
    @extends('layouts.master')
    <!-- Header End -->
    @section('lesson')
    <main>
      
      <h1>{{$lecture->title}}</h1>
      <div class="main-bottom">
        <div class="video-container">
          <video controls>
            <source src="{{asset('assets/Videos/Sales Training_ Practical Sales Techniques.mp4')}}" />
          </video>
          <div class="description-btn-ul">
            <button class="description-li-btn li-active">
              Сургалтын талаар
            </button>
            <button class="description-li-btn">Багшийн талаар</button>
          </div>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
              vitae, vero et ipsam id, esse sequi natus quo nesciunt impedit
              soluta. Laudantium voluptatibus aperiam sit nisi ipsam fuga
              dolorum sunt! Lorem ipsum, dolor sit amet consectetur adipisicing
              elit. Delectus perferendis quasi, animi aperiam libero ipsa neque
              deleniti voluptatem laboriosam enim illo nam ratione cum
              consectetur fugit placeat quo corporis aliquam. Lorem ipsum dolor
              sit, amet consectetur adipisicing elit. Illum voluptate quos qui
              veritatis et explicabo voluptas ipsum, eveniet facere porro amet
              quibusdam quasi temporibus aliquid rerum eos ex. Excepturi,
              suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Quisquam, amet perspiciatis nesciunt, quaerat modi quas sint
              veniam maiores facere architecto esse, voluptatum sit explicabo
              quod dolorem itaque! Sunt, voluptate laudantium.
            </p>
          </div>
        </div>
        <section class="content-container">
          <h2 class="content-title">Агуулга</h2>
          <a href="" class="content-list-btn content-active">
            <i class="far fa-play-circle"></i>
            <p class="lesson-title">1. Хичээлийн танилцуулга</p>
            <p class="lesson-time">5:03</p>
          </a>
          <a href="" class="content-list-btn">
            <i class="fas fa-lock"></i>
            <p class="lesson-title">2. Хичээлийн танилцуулга</p>
            <p class="lesson-time">15:03</p>
          </a>
          <a href="" class="content-list-btn">
            <i class="fas fa-lock"></i>
            <p class="lesson-title">3. Хичээлийн танилцуулга</p>
            <p class="lesson-time">5:03</p>
          </a>
          <a href="" class="content-list-btn">
            <i class="fas fa-lock"></i>
            <p class="lesson-title">4. Хичээлийн танилцуулга</p>
            <p class="lesson-time">5:03</p>
          </a>
          <a href="" class="content-list-btn">
            <i class="fas fa-lock"></i>
            <p class="lesson-title">5. Хичээлийн танилцуулга</p>
            <p class="lesson-time">5:03</p>
          </a>
          <a href="" class="content-list-btn">
            <i class="fas fa-lock"></i>
            <p class="lesson-title">6. Хичээлийн танилцуулга</p>
            <p class="lesson-time">5:03</p>
          </a>
          <a href="" class="content-list-btn">
            <i class="fas fa-lock"></i>
            <p class="lesson-title">7. Хичээлийн танилцуулга</p>
            <p class="lesson-time">5:03</p>
          </a>
          <a href="" class="content-list-btn">
            <i class="fas fa-lock"></i>
            <p class="lesson-title">8. Хичээлийн танилцуулга</p>
            <p class="lesson-time">5:03</p>
          </a>
        </section>
      </div>
    </main>
    @endsection
  </body>
</html>

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
      href="assets/favicon/favicon-196x196.png"
      sizes="196x196"
    />
    <link
      rel="icon"
      type="image/png"
      href="assets/favicon/favicon-96x96.png"
      sizes="96x96"
    />
    <link
      rel="icon"
      type="image/png"
      href="assets/favicon/favicon-32x32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      type="image/png"
      href="assets/favicon/favicon-16x16.png"
      sizes="16x16"
    />
    <link
      rel="icon"
      type="image/png"
      href="assets/favicon/favicon-128.png"
      sizes="128x128"
    />
    <!-- favicon end -->
    <link rel="stylesheet" href="{{asset('assets/css/panel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/admin-panel.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/teacher-panel.css')}}" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <button class="nav-btn nav-active">
        <i class="fas fa-tachometer-alt"></i>
        Үндсэн
      </button>
      <button class="nav-btn">
        <i class="fas fa-hand-holding-usd"></i>
        Гүйлгээ
      </button>
      <button class="nav-btn">
        <i class="fas fa-chart-line"></i>
        Сэтгэгдлүүд
      </button>
      <button class="nav-btn">
        <i class="fas fa-user-graduate"></i>
        Сурагчид
      </button>
      <button class="nav-btn">
        <i class="fas fa-cog"></i>
        Тохиргоо
      </button>
      <a href="{{route('index')}}">
        <button class="nav-btn">
          <i class="fas fa-sign-out-alt"></i>
          Гарах
      </button></a>
    </nav>
    <main>
      <section class="header-container fit">
        <button class="nav-icon-btn bars-container" aria-label="menu">
          <i class="fas fa-bars nav-icon"></i>
        </button>
        <div class="header-left">
          <h1 class="panel-nav-title">Хяналтын самбар</h1>
          <p class="welcome-text">Тавтай морил, Наранбат</p>
        </div>
        <div class="header-right">
          <img src="assets/man1.png" alt="profile" />
          <p class="username-text">Наранбат М.</p>
        </div>
      </section>
      <section class="fit cards-container">
        <div class="card-container">
          <a href="#">
            <img
              src="assets/Course/Sales_Training.jpg"
              srcset="
                assets/Course/Sales_Training.jpg 1x,
                assets/Course/Sales_Training.jpg 2x
              "
              alt="Course"
              class="card-image"
            />
            <h2 class="card-title">
              Sales Training: Practical Sales Techniques
            </h2>
            <small class="card-teacher">Chris Croft</small>
            <div class="card-rating-container">
              <span>&#11088; 4.5</span>
              <span>(12,072)</span>
            </div>
            <div class="card-price">
              <span>₮29,900</span><small>₮49,900</small>
            </div>
            <small class="card-best">Best seller</small>
          </a>
        </div>
        <div class="card-container">
          <a href="lesson.html">
            <img
              src="assets/Course/Beginning_Project_Management.jpg"
              srcset="
                assets/Course/Beginning_Project_Management.jpg 1x,
                assets/Course/Beginning_Project_Management.jpg 2x
              "
              alt="Course"
              class="card-image"
            />
            <h2 class="card-title">
              Beginning Project Management: Project Management Level One
            </h2>
            <small class="card-teacher">Joseph Phillips</small>
            <div class="card-rating-container">
              <span>&#11088; 4.5</span>
              <span>(15,734)</span>
            </div>
            <div class="card-price">
              <span>₮29,900</span><small>₮49,900</small>
            </div>
          </a>
        </div>
        <div class="card-container">
          <a href="lesson.html">
            <img
              src="assets/Course/Management_Skills.jpg"
              srcset="
                assets/Course/Management_Skills.jpg 1x,
                assets/Course/Management_Skills.jpg 2x
              "
              alt="Course"
              class="card-image"
            />
            <h2 class="card-title">
              Management Skills - Team Leadership Skills Masterclass...
            </h2>
            <small class="card-teacher">Mark Timberlake, Spethen Mather</small>
            <div class="card-rating-container">
              <span>&#11088; 4.5</span>
              <span>(4,566)</span>
            </div>
            <div class="card-price">
              <span>₮29,900</span><small>₮49,900</small>
            </div>
            <small class="card-best">Best seller</small>
          </a>
        </div>
        <div class="card-container add-course-container">
          <a href="lesson.html" class="add-course">
            <h2 class="add-course-title">Сургалт нэмэх</h2>
          </a>
        </div>
      </section>
      <section class="teachers-container half-fit">
        <div class="teachers-header">
          <h2 class="teachers-title">Сэтгэгдлүүд</h2>
          <button class="teachers-more-text">Бүгдийг үзэх</button>
        </div>
        <div class="teachers-list-container">
          <div class="comments-item shadow-25-3">
            <p class="comments-list-name">Гантөмөр ОЮУНБАТ</p>
            <p class="comments-line">-</p>
            <p class="comments-list-comment">
              Lorem, ipsum dolor sit amet consectetur...
            </p>
          </div>
          <div class="comments-item shadow-25-3">
            <p class="comments-list-name">Гантөмөр ОЮУНБАТ</p>
            <p class="comments-line">-</p>
            <p class="comments-list-comment">
              Lorem, ipsum dolor sit amet consectetur...
            </p>
          </div>
          <div class="comments-item shadow-25-3">
            <p class="comments-list-name">Гантөмөр ОЮУНБАТ</p>
            <p class="comments-line">-</p>
            <p class="comments-list-comment">
              Lorem, ipsum dolor sit amet consectetur...
            </p>
          </div>
          <div class="comments-item shadow-25-3">
            <p class="comments-list-name">Гантөмөр ОЮУНБАТ</p>
            <p class="comments-line">-</p>
            <p class="comments-list-comment">
              Lorem, ipsum dolor sit amet consectetur...
            </p>
          </div>
        </div>
      </section>
      <section class="teachers-container half-fit">
        <div class="teachers-header">
          <h2 class="teachers-title">Орлого</h2>
          <button class="teachers-more-text">Бүгдийг үзэх</button>
        </div>
        <div class="teachers-list-container shadow-25-3 mg-20">
          <div class="income-item">
            <p class="income-number">₮504'270 <i class="fas fa-sort-up"></i></p>
            <p class="income-desc">12 сурагчийн орлого</p>
            <p class="income-date">2020/11/01 10:25:04</p>
          </div>
          <div class="income-item">
            <p class="income-number">₮504'270 <i class="fas fa-sort-up"></i></p>
            <p class="income-desc">12 сурагчийн орлого</p>
            <p class="income-date">2020/11/01 10:25:04</p>
          </div>
          <div class="income-item">
            <p class="income-number">₮504'270 <i class="fas fa-sort-up"></i></p>
            <p class="income-desc">12 сурагчийн орлого</p>
            <p class="income-date">2020/11/01 10:25:04</p>
          </div>
          <div class="income-item">
            <p class="income-number">₮504'270 <i class="fas fa-sort-up"></i></p>
            <p class="income-desc">12 сурагчийн орлого</p>
            <p class="income-date">2020/11/01 10:25:04</p>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>

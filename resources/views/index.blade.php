@extends('layouts.master')
@section('content')
<main>
    <div class="poster">
        <img style="width: 100%" src="assets/home-bg-desktop.jpg" srcset="
        assets/home-bg-tablet.jpg 770w,
        assets/home-bg-mobile.jpg 360w
      " sizes="(max-width: 1000px) 770px, (max-width: 769px) 360px" alt="background-image" />
        <form class="poster-search-container">
            <label>
                <h3 class="poster-search-title">Ирээдүйгээ гэрэлтүүл</h3>
                <p class="poster-search-alert">Бүх сургалтууд 10/29 дуустал 29,900₮ хямдралтай байна</p>
                <div class="poster-input-search-container">
                    <button class="poster-icon-btn" aria-label="search-bottom">
                        <i class="fas fa-search nav-icon"></i>
                    </button>
                    <input type="text" placeholder="Хайх..." class="poster-search-input" />
                </div>
            </label>
        </form>
    </div>
    <div class="main-title-container">
        <button class="main-title">Таны авсан сургалтууд</button>
        <button class="main-title">Дизайн</button>
        <button class="main-title">IT & Software</button>
        <button class="main-title">Хувь хүний хөгжил</button>
        <button class="main-title">Photograph & Video</button>
    </div>
    <hr />
    <div class="cards-container">
        <div class="card-container">
            <a href="lesson.html">
                <img src="assets/Course/Sales_Training.jpg" srcset="assets/Course/Sales_Training.jpg 1x, assets/Course/Sales_Training.jpg 2x" alt="Course" class="card-image" />
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
            <a href="{{route('lesson')}}">
                <img src="assets/Course/Beginning_Project_Management.jpg" srcset="assets/Course/Beginning_Project_Management.jpg 1x, assets/Course/Beginning_Project_Management.jpg 2x" alt="Course" class="card-image" />
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
                <img src="assets/Course/Management_Skills.jpg" srcset="assets/Course/Management_Skills.jpg 1x, assets/Course/Management_Skills.jpg 2x" alt="Course" class="card-image" />
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
        <div class="card-container">
            <a href="lesson.html">
                <img src="assets/Course/The_Essential_Guide.jpg" srcset="assets/Course/The_Essential_Guide.jpg 1x, assets/Course/The_Essential_Guide.jpg 2x" alt="Course" class="card-image" />
                <h2 class="card-title">
                    The essential Guide to Entrepreneurship by Guy Kaw...
                </h2>
                <small class="card-teacher">Guy Kawasaki</small>
                <div class="card-rating-container">
                    <span>&#11088; 4.5</span>
                    <span>(2,940)</span>
                </div>
                <div class="card-price">
                    <span>₮29,900</span><small>₮49,900</small>
                </div>
                <small class="card-best">Best seller</small>
            </a>
        </div>
        <div class="card-container">
            <a href="lesson.html">
                <img src="assets/Course/The_Real_Estate_Financial.jpg" srcset="assets/Course/The_Real_Estate_Financial.jpg 1x, assets/Course/The_Real_Estate_Financial.jpg 2x" alt="Course" class="card-image" />
                <h2 class="card-title">
                    The Real Estate Financial Modeling Bootcamp
                </h2>
                <small class="card-teacher">Justin Kivel</small>
                <div class="card-rating-container">
                    <span>&#11088; 4.5</span>
                    <span>(3,575)</span>
                </div>
                <div class="card-price">
                    <span>₮29,900</span><small>₮49,900</small>
                </div>
            </a>
        </div>
        <div class="card-container">
            <a href="lesson.html">
                <img src="assets/Course/The_Complete_Splunk.jpg" srcset="assets/Course/The_Complete_Splunk.jpg 1x, assets/Course/The_Complete_Splunk.jpg 2x" alt="Course" class="card-image" />
                <h2 class="card-title">The complete Splunk Beginner Course</h2>
                <small class="card-teacher">Adam Frisbee</small>
                <div class="card-rating-container">
                    <span>&#11088; 4.5</span>
                    <span>(7,819)</span>
                </div>
                <div class="card-price">
                    <span>₮29,900</span>
                    <small>₮49,900</small>
                </div>
                <small class="card-best">Best seller</small>
            </a>
        </div>
        <div class="card-container">
            <a href="lesson.html">
                <img src="assets/Course/UiPath.jpg" srcset="assets/Course/UiPath.jpg 1x, assets/Course/UiPath.jpg 2x" alt="Course" class="card-image" />
                <h2 class="card-title">
                    UiPath - Level 1 Robotic Process Automation
                </h2>
                <small class="card-teacher">Bryan Lamb</small>
                <div class="card-rating-container">
                    <span>&#11088; 4.5</span>
                    <span>(7,949)</span>
                </div>
                <div class="card-price">
                    <span>₮29,900</span>
                    <small>₮49,900</small>
                </div>
                <small class="card-best">Best seller</small>
            </a>
        </div>
        <div class="card-container">
            <a href="lesson.html">
                <img src="assets/Course/The_Complete_Project.jpg" srcset="assets/Course/The_Complete_Project.jpg 1x, assets/Course/The_Complete_Project.jpg 2x" alt="Course" class="card-image" />
                <h2 class="card-title">
                    The complate Project Management Fundementals
                </h2>
                <small class="card-teacher">Mauricio Rubio - Agille Guru & Founder of...</small>
                <div class="card-rating-container">
                    <span>&#11088; 4.5</span>
                    <span>(4,983)</span>
                </div>
                <div class="card-price">
                    <span>₮29,900</span>
                    <small>₮49,900</small>
                </div>
            </a>
        </div>
    </div>
</main>
@yield('content')

@endsection
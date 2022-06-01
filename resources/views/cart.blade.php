@extends('layouts.master')
@section('purchase')
<main class="flex-start">
  <h2>Таны авсан сургалтууд</h2>
  <hr />
  <div class="cards-container">
    <div class="card-container">
      <a href="lesson.html">
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
    <div class="card-container">
      <a href="lesson.html">
        <img
          src="assets/Course/The_Essential_Guide.jpg"
          srcset="
            assets/Course/The_Essential_Guide.jpg 1x,
            assets/Course/The_Essential_Guide.jpg 2x
          "
          alt="Course"
          class="card-image"
        />
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
        <img
          src="assets/Course/The_Real_Estate_Financial.jpg"
          srcset="
            assets/Course/The_Real_Estate_Financial.jpg 1x,
            assets/Course/The_Real_Estate_Financial.jpg 2x
          "
          alt="Course"
          class="card-image"
        />
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
  </div>
</main>
@endsection

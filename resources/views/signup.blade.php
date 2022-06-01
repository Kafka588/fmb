@extends('layouts.master')
@section('sign')
<main>
  <form >
    <label class="signup-container">
      <h2 class="signup-title">Udemy account бүртгүүлэх</h2>
    <hr />
    <button class="login-facebook">
      <i class="fab fa-facebook-f"></i>Фейсбүүкээр үргэлжлүүлэх
    </button>
    <button class="login-google">
      <i class="fab fa-google"></i>Гооглээр үргэлжлүүлэх
    </button>
    <div class="login-input-container">
      <button class="login-icon-btn" aria-label="name">
        <i class="fas fa-user"></i>
      </button>
      <input type="name" placeholder="Овог нэр" class="login-input" />
    </div>
    <div class="login-input-container">
      <button class="login-icon-btn" aria-label="email">
        <i class="far fa-envelope"></i>
      </button>
      <input type="email" placeholder="Цахим шуудан" class="login-input" />
    </div>
    <div class="login-input-container">
      <button class="login-icon-btn" aria-label="password">
        <i class="fas fa-lock"></i>
      </button>
      <input type="password" placeholder="Нууц үг" class="login-input" />
    </div>
    <div class="signup-pattern">
      <hr />
      <hr />
      <hr />
      <hr />
    </div>
    <a href="teacher-panel.html" class="login-button">Бүртгүүлэх</a>
  </form>
</label>
</main>
@endsection
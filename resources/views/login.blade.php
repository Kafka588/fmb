@extends('layouts.master')
@section('log')
<main>
  <from class="login-container">
    <label class="login-container">
    <h2 class="login-title">Udemy account -руугаа нэвтрэх</h2>
    <hr />
    <button class="login-facebook">
      <i class="fab fa-facebook-f"></i>Фейсбүүкээр үргэлжлүүлэх
    </button>
    <button class="login-google">
      <i class="fab fa-google"></i>Гооглээр үргэлжлүүлэх
    </button>
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
    <a href="admin-panel.html" class="login-button">Нэвтрэх</a>
  </label>
  </from>
</main>
@endsection
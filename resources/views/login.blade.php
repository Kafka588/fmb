@extends('layouts.master')
@section('log')
<main>
  <from action="user" class="login-container" method="POST">
    @csrf
    <label class="login-container">
    <h2 class="login-title">Udemy account -руугаа нэвтрэх</h2>
    <hr />
    <div class="login-input-container">
      <button class="login-icon-btn" aria-label="email">
        <i class="far fa-envelope"></i>
      </button>
      <input type="text" placeholder="Цахим шуудан" class="login-input" name="user" />
    </div>
    <div class="login-input-container">
      <button class="login-icon-btn" aria-label="password">
        <i class="fas fa-lock"></i>
      </button>
      <input type="password" placeholder="Нууц үг" class="login-input" name="password" />
    </div>
    <a href="admin-panel.html" class="login-button">Нэвтрэх</a>
  </label>
  <button type="submit">login</button>
  </from>
</main>
@endsection
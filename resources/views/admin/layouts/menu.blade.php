<nav id="active">
        <button class="nav-btn">
            <a href="{{route('panel')}}">
            <i class="fas fa-tachometer-alt"></i>
            Hello,{{session('user')}}
            </a>
        </button>
        <a href="{{route('cat_create')}}" class="">
        <button class="nav-btn">
            <i class="fas fa-hand-holding-usd"></i>
            Категори
        </button>
        </a>
        <a href="{{route('course')}}">
        <button class="nav-btn">
            <i class="fas fa-chart-line"></i>
            Сургалт
        </button>
        </a>
        <button class="nav-btn">
            <i class="fas fa-user-graduate"></i>
            Сурагчид
        </button>
        <a href="{{route('index')}}">
        <button class="nav-btn">
            <i class="fas fa-sign-out-alt"></i>
            Гарах
        </button></a>
  </nav>
  <script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("active");
    var btns = header.getElementsByClassName("nav-btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("nav-active");
      current[0].className = current[0].className.replace(" nav-active", "");
      this.className += " nav-active";
      });
    }
</script>
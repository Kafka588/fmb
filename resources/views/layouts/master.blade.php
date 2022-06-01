<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
    <!-- Header Starting -->
    @include('layouts.top-bar')
    <!-- Header End -->
    <!-- Body starting -->
    @yield('content')
    <!-- Body ending -->

    @yield('log')

    @yield('sign')

    @yield('purchase')

    @yield('lesson')
    <!-- Footer starting -->
    @include('layouts.footer')
    <!-- Footer end -->
    
    
</body>

</html>
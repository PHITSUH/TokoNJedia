<link rel="stylesheet" href={{asset("css/navbar.css")}}>
<header class="navbar-container">
    <div class="logo"><a href={{route('home')}}>TokoNJedia</a></div>
    <div class="search-bar-container">
        <input type="text" class="search-bar" placeholder="Search...">
        <div class="cart-container">
            <img src={{asset("assets/cart.webp")}} alt="">
            <img src={{asset("assets/chat-icon.webp")}} alt="">
        </div>
    </div>

    <div class="merchant-button-container">
        <button class="merchant-button">DK Store</button>
    </div>

    <div class="user-button-container">
        @if (Auth::guard('UserData')->user() != null)
        <form action={{route('profilePage')}} method="GET">
            @csrf
            <button class="user-button">{{Auth::guard('UserData')->user()->username}}</button>
        </form>

        @else
        <form action="">
            @csrf
            <button class="login-button" >Login</button>
        </form>

        @endif
    </div>

</header>

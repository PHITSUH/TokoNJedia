<link rel="stylesheet" href="{{asset('css/loginStyle.css')}}">
<header class="logo"><h1 class="logo-text">TokoNJedia</h1></header>
    <img src="{{asset('assets/backgrounds/login-bg.png')}}" class="login-bg">
    <div class="parent">
        <div class="form-container">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <h3>Welcome Back!</h3>
                <div class="to-register">
                <span>Don't have an account?</span>
                <a href={{route('registerPage')}}>Register</a>
                </div>
                <div class="email-input-container input">
                <label>Email</label>
                <br>
                <input type="text" name="email" placeholder="Example: email@tokoNJedia.com">
                </div>
                <div class="password-input-container input">
                    <label>Password</label>
                    <br>
                    <input type="password" name="password" placeholder="Input Password">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

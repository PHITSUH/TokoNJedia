<link rel="stylesheet" href="{{asset('css/loginStyle.css')}}">
<header class="logo"><h1 class="logo-text">TokoNJedia</h1></header>
<img src="{{asset('assets/backgrounds/login-bg.png')}}" class="login-bg">
<div class="parent">
    <div class="form-container" style="margin-top: 5vh">
        <form id="form" action={{route('register')}}
        method="POST">
            @csrf
            <h3>Welcome Back!</h3>
            <div class="to-register">
            <span>Already have an account?</span>
            <a href={{route('loginPage')}}>Login</a>
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
            <div class="username-input-container input">
                <label>Username</label>
                <br>
                <input type="text" name="username" placeholder="Input Username">
            </div>
            <div class="phone-input-container input">
                <label>Phone Number</label>
                <br>
                <input type="text" name="phone" placeholder="Input Phone Number">
            </div>
            <div class="gender-input-container input">
                <label>Gender</label>
                <br>
                <input type="text" name="gender" placeholder="Male/Female">
            </div>
            <div class="dob-input-container input">
                <label>Date of Birth</label>
                <input type="text" name="DOB" placeholder="yyyy-mm-dd">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</div>

<script>
    function toggleCheck(checkbox) {
        // Uncheck all checkboxes with the same name
        document.querySelectorAll('input[name="' + checkbox.name + '"]').forEach(function (el) {
            if (el !== checkbox) {
                el.checked = false;
            }
        });
    }
</script>

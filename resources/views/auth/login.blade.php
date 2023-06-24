<!DOCTYPE html>
<html lang="en">
@include('layouts.header' , ['page_title' => 'Login Page'])
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="POST" action="{{ route('login') }}" class="box">
                        @csrf
                        <h1>Login</h1>
                        <p class="text-muted"> Please enter your login and password!</p>
                        <input type="email"  id="email" name="email" placeholder="Username" required>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <a class="forgot text-muted" href="#">Forgot
                            password?</a>
                        <input type="submit" name="" value="Login" href="#">

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

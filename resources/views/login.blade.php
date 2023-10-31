<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

     <!-- Web page CSS -->
     <link rel="stylesheet" href="/css/logreg.css" >

 
    <title>Login</title>
</head>
 
<body>
    <div class="row justify-content-center" >
        <div class="col-lg-6">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form">
                        <input type="email" class="form-control " name="email" id="email" required
                            value="{{ old('email') }}" placeholder="Email">
                    </div>
                    <div class="form">
                        <input type="password" class="form-control rounded-bottom" name="password" id="password" required
                            placeholder="Password">
                    </div>
                    <br>
                    <button class="btn" type="submit">Login</button>
                </form>
                <br>
                <small class="reg">Doesn't have an account? <a class="text-danger" href="/register"> Register Now!</a></small>
            </main>
        </div>
    </div>
 
</body>
 
</html> 
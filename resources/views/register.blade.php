<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <!-- Web page CSS -->
 <link rel="stylesheet" href="/css/logreg.css" />
 
    <title>Register</title>
</head>
 
<body>
    <div class="row justify-content-center" >
        <div class="col-lg-6">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" name="name" id="name" required
                            value="{{ old('name') }}" placeholder="Name">
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control " name="email" id="email" required
                            value="{{ old('email') }}" placeholder="Email">
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" name="password" id="password" required
                            placeholder="Password">
                    </div>
                    <br>
                    <button class="btn" type="submit">Register</button>
                </form>
                <br>
                <small class="log">Have an account? <a class="text-danger" href="/login"> Login
                        Here</a></small>
            </main>
        </div>
    </div>
 
</body>
 
</html>
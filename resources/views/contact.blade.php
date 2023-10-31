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
    <link rel="stylesheet" href="/css/contact.css">

    <title>Contact Us</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <main class="form-contact">
                <h1 class="h3 mb-3 fw-normal text-center">Contact Us</h1>
                <form action="/contact" method="POST">
                    @csrf
                    <div class="form">
                        <input type="text" class="form-control" name="name" id="name" required placeholder="Your Name">
                    </div>
                    <div class="form">
                        <input type="email" class="form-control" name="email" id="email" required placeholder="Your Email">
                    </div>
                    <div class="form">
                        <textarea class="form-message" name="message" id="message" required
                            placeholder="Your Message"></textarea>
                    </div>
                    <br>
                    <button class="btn" type="submit">Send</button>
                </form>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

            </main>
        </div>
    </div>
</body>

</html>

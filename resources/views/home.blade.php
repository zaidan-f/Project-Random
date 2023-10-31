<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Homepage</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <header>
        <nav>
            <div class="navbar-logo">
                <img src="fiya.png" alt="Logo">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li>
                    <a href="#">Services</a>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">App Developmet</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Design </a>
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">App Design</a></li>
                                <li><a href="#">Graphic Design</a></li>
                            </ul>
                    </li>
                        
                    </ul> 
                </li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="text-wrapper">
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
      <h1>Welcome 🤙</h1>
    </div>

    <section id="hero" class="hero">
        <div class="hero-content">
            <h1>Welcome to My Homepage</h1>
            <p>This is the first section of my homepage.</p>
            <a href="#"><button class="glow-on-hover" type="button">Learn More</button></a>
        </div>
    </section>

      <section id="section2">
        <div id="wrapper2" class="wrapper2">
          <h1>Discover Our Services 🧐</h1>
          <h1>Discover Our Services 🧐</h1>
          <h1>Discover Our Services 🧐</h1>
          <h1>Discover Our Services 🧐</h1>
          <h1>Discover Our Services 🧐</h1>
          <h1>Discover Our Services 🧐</h1>
          <h1>Discover Our Services 🧐</h1>
          <h1>Discover Our Services 🧐</h1>
        </div>
        <h2>Services</h2>
        <p>Explore a world of possibilities with our top-notch services. We are dedicated to providing you with the best experiences in:</p>
        <ul>
            <li>Web Development</li>
            <li>App Development</li>
            <li>Digital Marketing</li>
            <li>Web Design</li>
            <li>App Design</li>
            <li>Graphic Design</li>
        </ul>
        <p>Our team of experts is here to bring your ideas to life. Whether you need a stunning website, a user-friendly mobile app, or a powerful digital marketing strategy, we've got you covered.</p>
        <a href="#section3"><button class="glow-on-hover" type="button">Get Started</button></a>
      </section>

      <section id="section3">
        <div id="wrapper3" class="wrapper3">
          <h1>Discover Our Features 😎</h1>
          <h1>Discover Our Features 😎</h1>
          <h1>Discover Our Features 😎</h1>
          <h1>Discover Our Features 😎</h1>
          <h1>Discover Our Features 😎</h1>
          <h1>Discover Our Features 😎</h1>
          <h1>Discover Our Features 😎</h1>
          <h1>Discover Our Features 😎</h1>
        </div>
        <h2><strong>Features</strong></h2>
        <p>Explore what makes us unique</p>
        
        <div class="feature">
            <i class="fas fa-cogs"></i>
            <h3>Customizable</h3>
            <p>Tailor our services to your needs.</p>
        </div>
    
        <div class="feature">
            <i class="fas fa-lightbulb"></i>
            <h3>Innovative Solutions</h3>
            <p>We provide cutting-edge solutions.</p>
        </div>
    
        <div class="feature">
            <i class="fas fa-users"></i>
            <h3>User-Centric</h3>
            <p>Our focus is on your satisfaction.</p>
        </div>
    
        <a href="#contact"><button class="glow-on-hover" type="button">Get Started</button></a>
    </section>
    

    <footer class="footer">
        <div class="bubbles">
           <script src="/js/app.js"></script>
        </div>
      <div class="footer-content">
          <div class="about-logo">
            <img src="fiya.png" alt="Your Logo">
          </div>
          <div class="footer-section about">
              <h1>About Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="footer-section links">
              <h1>Quick Links</h1>
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#section3">Services</a></li>
                  <li><a href="#section1">About</a></li>
                  <li><a href="#contact">Contact</a></li>
              </ul>
          </div>
          <div class="footer-section contact-form">
              <h1>Contact Us</h1>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf 
                    <input type="text" name="name" class="text-input contact-input" placeholder="Your Name">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your Email">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
          </div>
      </div>
      <div class="footer-bottom">
          &copy; 2023 Your Website | Designed by You
      </div>
  </footer>
  <svg style="position: fixed; top: 100vh;">
    <defs>
        <filter id="blob">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"/>
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"/>
        </filter>
    </defs>
</svg>

  
</body>
</html>

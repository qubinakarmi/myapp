<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Name - Laravel Developer Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>

    /* Base Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  line-height: 1.6;
  color: #333;
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
  overflow-x: hidden;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Navigation */
.navbar {
  background: rgba(0, 123, 255, 0.95);
  backdrop-filter: blur(10px);
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 1000;
  padding: 1rem 0;
  transition: all 0.3s;
}

.navbar .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.5rem;
  font-weight: 700;
  color: white;
  text-decoration: none;
}

.nav-links {
  display: flex;
  list-style: none;
  gap: 2rem;
}

.nav-links a {
  color: white;
  text-decoration: none;
  transition: color 0.3s;
}

.nav-links a:hover {
  color: #ffd700;
}

.hamburger {
  display: none;
  flex-direction: column;
  cursor: pointer;
}

.hamburger span {
  width: 25px;
  height: 3px;
  background: white;
  margin: 3px 0;
  transition: 0.3s;
}

/* Hero Section - 3D Cube */
.hero {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(45deg, #007bff, #0056b3);
  color: white;
  position: relative;
  padding-top: 60px;
}

.hero-content {
  display: flex;
  align-items: center;
  gap: 4rem;
  max-width: 1000px;
  flex-wrap: wrap;
  justify-content: center;
}

.cube-container {
  perspective: 1000px;
  width: 200px;
  height: 200px;
}

.cube {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  animation: rotate 20s infinite linear;
}

.face {
  position: absolute;
  width: 200px;
  height: 200px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  text-align: center;
}

.front { transform: rotateY(0deg) translateZ(100px); }
.back { transform: rotateY(180deg) translateZ(100px); }
.right { transform: rotateY(90deg) translateZ(100px); }
.left { transform: rotateY(-90deg) translateZ(100px); }
.top { transform: rotateX(90deg) translateZ(100px); }
.bottom { transform: rotateX(-90deg) translateZ(100px); }

@keyframes rotate {
  0% { transform: rotateX(0) rotateY(0); }
  100% { transform: rotateX(360deg) rotateY(360deg); }
}

.hero-text h2 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.hero-text p {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  max-width: 500px;
}

.btn {
  display: inline-block;
  padding: 1rem 2rem;
  background: #ffd700;
  color: #007bff;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  transition: transform 0.3s, box-shadow 0.3s;
}

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

/* About Section - Flip Card */
.about {
  padding: 5rem 0;
  background: white;
}

.about h2 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 3rem;
  color: #007bff;
}

.flip-card-container {
  display: flex;
  align-items: center;
  gap: 3rem;
  flex-wrap: wrap;
  justify-content: center;
}

.flip-card {
  perspective: 1000px;
  width: 300px;
  height: 200px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  background: linear-gradient(135deg, #007bff, #0056b3);
  color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  padding: 1rem;
}

.flip-card-back {
  transform: rotateY(180deg);
}

.bio {
  flex: 1;
  min-width: 300px;
}

.bio p {
  font-size: 1.1rem;
  margin-bottom: 2rem;
}

.stats {
  display: flex;
  gap: 2rem;
  justify-content: center;
}

.stat {
  text-align: center;
}

.stat h4 {
  font-size: 2rem;
  color: #007bff;
}

/* Skills Section */
.skills {
  padding: 5rem 0;
  background: #f8f9fa;
}

.skills h2 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 3rem;
  color: #007bff;
}

.skills-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
}

.skill-card {
  background: white;
  border-radius: 10px;
  padding: 2rem;
  text-align: center;
  transition: transform 0.3s, box-shadow 0.3s;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.skill-card:hover {
  transform: translateY(-8px) rotateX(5deg) rotateY(5deg);
  box-shadow: 0 15px 25px rgba(0,0,0,0.2);
}

.skill-card i {
  font-size: 3rem;
  margin-bottom: 1rem;
  color: #007bff;
}

/* Projects Section */
.projects {
  padding: 5rem 0;
  background: white;
}

.projects h2 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 3rem;
  color: #007bff;
}

.projects-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
}

.project-card {
  background: #f8f9fa;
  border-radius: 10px;
  overflow: hidden;
  transition: transform 0.3s, box-shadow 0.3s;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.project-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 15px 25px rgba(0,0,0,0.2);
}

.project-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.project-info {
  padding: 1rem;
}

.project-links {
  margin-top: 1rem;
  display: flex;
  gap: 1rem;
}

.project-links a {
  text-decoration: none;
  color: #007bff;
  font-weight: 600;
  transition: color 0.3s;
}

.project-links a:hover {
  color: #ffd700;
}

/* Contact Section */
.contact {
  padding: 5rem 0;
  background: #f8f9fa;
}

.contact h2 {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 2rem;
  color: #007bff;
}

.contact-form {
  max-width: 600px;
  margin: 0 auto 2rem;
}

.form-group {
  margin-bottom: 1rem;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 0.8rem;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 1rem;
}

.contact-form button {
  width: 100%;
  padding: 1rem;
  border: none;
  border-radius: 50px;
  background: #007bff;
  color: white;
  font-weight: 600;
  transition: background 0.3s;
}

.contact-form button:hover {
  background: #0056b3;
}

.contact-info {
  text-align: center;
  font-size: 1.1rem;
  color: #555;
}

.contact-info p {
  margin-bottom: 0.5rem;
}

/* Footer */
footer {
  background: #007bff;
  color: white;
  text-align: center;
  padding: 1.5rem 0;
  margin-top: 2rem;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-content {
    flex-direction: column;
    text-align: center;
  }
  .nav-links {
    display: none;
    flex-direction: column;
    background: #0056b3;
    position: absolute;
    top: 60px;
    right: 0;
    width: 200px;
    padding: 1rem;
  }
  .nav-links.active {
    display: flex;
  }
  .hamburger {
    display: flex;
  }
}

</style>
<body>
  <!-- Navigation -->
  <nav class="navbar">
    <div class="container">
      <a href="#" class="logo">YourName</a>
      <ul class="nav-links">
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>

  <!-- Hero Section with 3D Rotating Cube -->
  <section id="hero" class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="cube-container">
          <div class="cube">
            <div class="face front">
              <h1>Your Name</h1>
              <p>Laravel Developer</p>
            </div>
            <div class="face back">
              <i class="fas fa-code"></i>
              <p>Building Robust Web Apps</p>
            </div>
            <div class="face right">
              <i class="fas fa-database"></i>
              <p>Full-Stack Expertise</p>
            </div>
            <div class="face left">
              <i class="fas fa-rocket"></i>
              <p>Innovative Solutions</p>
            </div>
            <div class="face top">
              <i class="fas fa-star"></i>
            </div>
            <div class="face bottom">
              <i class="fas fa-globe"></i>
            </div>
          </div>
        </div>
        <div class="hero-text">
          <h2>Passionate Laravel Developer</h2>
          <p>Crafting scalable, secure web applications with Laravel, PHP, and modern frontend technologies. Let's build something amazing together!</p>
          <a href="#contact" class="btn">Get In Touch</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section with 3D Flip Card -->
  <section id="about" class="about">
    <div class="container">
      <h2>About Me</h2>
      <div class="flip-card-container">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <i class="fas fa-user"></i>
              <h3>Frontend</h3>
              <p>Creative side of development</p>
            </div>
            <div class="flip-card-back">
              <i class="fas fa-user"></i>
              <h3>Backend</h3>
              <p>Robust Laravel architecture</p>
            </div>
          </div>
        </div>
        <div class="bio">
          <p>I'm a dedicated Laravel developer with 3+ years of experience building e-commerce platforms, APIs, and CMS systems. Proficient in Laravel's ecosystem (Eloquent, Blade, Artisan), PHP 8+, MySQL, and integrating with Vue.js/React for dynamic UIs. I love optimizing code for performance and security.</p>
          <div class="stats">
            <div class="stat">
              <h4>50+</h4>
              <p>Projects Completed</p>
            </div>
            <div class="stat">
              <h4>3+</h4>
              <p>Years Experience</p>
            </div>
            <div class="stat">
              <h4>100%</h4>
              <p>Client Satisfaction</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section with 3D Hover Cards -->
  <section id="skills" class="skills">
    <div class="container">
      <h2>Skills</h2>
      <div class="skills-grid">
        <div class="skill-card" data-skill="Laravel">
          <i class="fab fa-laravel"></i>
          <h3>Laravel</h3>
          <p>Expert in MVC, Routing, Middleware</p>
        </div>
        <div class="skill-card" data-skill="PHP">
          <i class="fab fa-php"></i>
          <h3>PHP</h3>
          <p>OOP, Composer, Laravel Integration</p>
        </div>
        <div class="skill-card" data-skill="MySQL">
          <i class="fas fa-database"></i>
          <h3>MySQL</h3>
          <p>Eloquent ORM, Migrations</p>
        </div>
        <div class="skill-card" data-skill="Vue.js">
          <i class="fab fa-vuejs"></i>
          <h3>Vue.js</h3>
          <p>SPA with Laravel API</p>
        </div>
        <div class="skill-card" data-skill="Git">
          <i class="fab fa-git-alt"></i>
          <h3>Git</h3>
          <p>Version Control & Collaboration</p>
        </div>
        <div class="skill-card" data-skill="AWS">
          <i class="fab fa-aws"></i>
          <h3>AWS</h3>
          <p>Deployment & Scaling</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section with 3D Tilt Cards -->
  <section id="projects" class="projects">
    <div class="container">
      <h2>Featured Projects</h2>
      <div class="projects-grid">
        <div class="project-card" data-tilt>
          <img src="https://picsum.photos/400/250?random=1" alt="E-Commerce Site">
          <div class="project-info">
            <h3>Laravel E-Commerce Platform</h3>
            <p>Full-stack e-commerce site with user auth, payments (Stripe), and admin dashboard using Laravel 10.</p>
            <div class="project-links">
              <a href="#"><i class="fab fa-github"></i> GitHub</a>
              <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
            </div>
          </div>
        </div>
        <div class="project-card" data-tilt>
          <img src="https://picsum.photos/400/250?random=2" alt="Blog CMS">
          <div class="project-info">
            <h3>Blog CMS with Laravel</h3>
            <p>Content management system with CRUD operations, SEO optimization, and Vue.js frontend.</p>
            <div class="project-links">
              <a href="#"><i class="fab fa-github"></i> GitHub</a>
              <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
            </div>
          </div>
        </div>
        <div class="project-card" data-tilt>
          <img src="https://picsum.photos/400/250?random=3" alt="API Backend">
          <div class="project-info">
            <h3>RESTful API for Mobile App</h3>
            <p>Secure API built with Laravel Sanctum, JWT auth, and real-time features via Laravel Echo.</p>
            <div class="project-links">
              <a href="#"><i class="fab fa-github"></i> GitHub</a>
              <a href="#"><i class="fas fa-external-link-alt"></i> Live Demo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section with 3D Form -->
  <section id="contact" class="contact">
    <div class="container">
      <h2>Contact Me</h2>
      <form class="contact-form">
        <div class="form-group">
          <input type="text" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <input type="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <textarea placeholder="Your Message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn">Send Message</button>
      </form>
      <div class="contact-info">
        <p><i class="fas fa-envelope"></i> your.email@example.com</p>
        <p><i class="fas fa-phone"></i> +1 (123) 456-7890</p>
        <p><i class="fab fa-linkedin"></i> linkedin.com/in/yourname</p>
        <p><i class="fab fa-github"></i> github.com/yourusername</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2024 Your Name. All rights reserved. | Built with Laravel & 3D Magic</p>
    </div>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>
<?php
require_once('../app/config.php');
session_start();

// Generate CSRF token if it doesn't exist
if (!isset($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Validate CSRF token
if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    // Show error message and redirect to login page
    echo '<script>alert("Error: Invalid CSRF token."); window.location.href = "login.php";</script>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section id="home" class="section">
    <h1>Welcome to My Portfolio</h1>
    <p>Hi, I'm Abu Zharr Luqman, a web developer.</p>
    <img src="../asset/gambar_abu.jpg" alt="Abu Zharr Luqman">
  </section>

  <section id="about" class="section">
    <h2>About Me</h2>
    <p>I have a passion for creating responsive and user-friendly websites.</p>
  </section>

  <section id="projects" class="section">
    <h2>Projects</h2>
    <ul>
      <li>
        <h3>Project 1</h3>
        <p>Description of project 1.</p>
      </li>
      <li>
        <h3>Project 2</h3>
        <p>Description of project 2.</p>
      </li>
      <li>
        <h3>Project 3</h3>
        <p>Description of project 3.</p>
      </li>
    </ul>
  </section>

  <section id="contact" class="section">
    <h2>Contact Me</h2>
    <form id="contact-form" action="contact_me.php" method="POST" onsubmit="return validateForm()">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Send</button>

      <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

    </form>
  </section>

  <script>
    function validateForm() {
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var message = document.getElementById('message').value;

      // Name validation
      if (name.trim() === '') {
        alert('Please enter your name.');
        return false;
      }

      // Email validation
      if (email.trim() === '') {
        alert('Please enter your email.');
        return false;
      }

      // Email format validation using a regular expression
      var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return false;
      }

      // Message validation
      if (message.trim() === '') {
        alert('Please enter a message.');
        return false;
      }

      return true;
    }
  </script>
</body>

</html>

//CSP: 
//Header always set X-Frame-Options "SAMEORIGIN"
//Header always set Content-Security-Policy "default-src 'self'; style-src 'self' 'unsafe-inline'; font-src 'self'; media-src 'self'"



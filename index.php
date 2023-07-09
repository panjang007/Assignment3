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
    <p>Hi, I'm John Doe, a web developer.</p>
    <img src="your-image.jpg" alt="Your Name">
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
    <form id="contact-form">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Send</button>
    </form>
  </section>

  <script src="script.js"></script>
</body>

</html>

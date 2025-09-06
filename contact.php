<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
      <div class="container">
        <nav class="nav-container">
          <div class="logo">Web Task</div>
          <ul class="nav-links">
            <li><a href="Home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="medsos.php">MEdia Sosial</a></li>
            <li><a href="perhitungan.php">Kubus</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="contact" class="contact">
      <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <form class="contact-form" action="#" method="POST">
          <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="subject">Subjek</label>
            <input type="text" id="subject" name="subject" required />
          </div>
          <div class="form-group">
            <label for="message">Pesan</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <div class="form-submit">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
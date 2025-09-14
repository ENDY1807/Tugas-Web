<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <style>
    .hero-text h1 {
      font-size: 2rem;
      font-weight: 900;
      margin-bottom: 1.5rem;
      line-height: 1.1;
      background: linear-gradient(45deg, #64ffda, #ffffff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
    .hero-text h4 {
      font-size: 1rem;
      font-weight: 900;
      margin-bottom: 1.5rem;
      line-height: 1.1;
      background: linear-gradient(45deg, #64ffda, #ffffff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
    .hero-text p {
      font-size: 1.2rem;
      color: #ffffff;
      line-height: 1.8;
      font-weight: 400;
    }
    select {
      padding: 8px 12px;
      border-radius: 8px;
      border: 2px solid #00ffcc;
      background-color: #0b2d39;
      color: white;
      font-size: 14px;
      font-family: Arial, sans-serif;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    select:hover {
      border-color: #1abc9c;
      background-color: #123c4a;
    }
    
    select:focus {
      outline: none;
      border-color: #16f1c9;
      box-shadow: 0 0 8px rgba(22, 241, 201, 0.6);
    }

    </style>
</head>
<body>
    <header>
      <div class="container">
        <nav class="nav-container">
          <div class="logo">Web Task</div>
          <ul class="nav-links">
            <li><a href="Home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="medsos.php">Media Sosial</a></li>
            <li><a href="perhitungan.php">Hitung</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="profile" class="hero">
      <div class="container">
        <div class="hero-content">
          <div class="hero-text">
            <h3>XI PPLG 2</h3>
            <h1>Muhammad Nazril Putra Natrabu</h1>
            <h4>Endy Mahavira</h4>
            <p><i class="fa-solid fa-calendar"></i> TTL: 24 Juli 2009</p>
            <p><i class="fa-solid fa-house"></i> Alamat: Rancaekek, Samsat, BPA</p>
            <h2><i class="fa-solid fa-lightbulb"></i> Hobi:
            <select>
              <option>Coding <i class="fa-solid fa-code"></i></li>
              <option>Menulis Novel <i class="fa-solid fa-book"></i></li>
              <option>Makan <i class="fa-solid fa-utensils"></i></li>
              <option>Mendengarkan Lagu <i class="fa-solid fa-headphones"></i></li>
            </select>
            </h2>
          </div>
          <div class="hero-image">
            <img src="Endy_Keren.jpg" alt="Profile" class="profile-img"/>
          </div>
        </div>
      </div>
    </section>

    <section id="skills" class="skills">
      <div class="container">
        <h2 class="section-title">My Skills</h2>
        <div class="skills-grid">
          <div class="skill-column">
            <div class="skill-item">
              <h4>HTML</h4>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 90%"></div>
              </div>
            </div>
            <div class="skill-item">
              <h4>JavaScript</h4>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 40%"></div>
              </div>
            </div>
            <div class="skill-item">
              <h4>CSS</h4>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 80%"></div>
              </div>
            </div>
            <div class="skill-item">
              <h4>PHP</h4>
              <div class="skill-bar">
                <div class="skill-progress" style="width: 10%"></div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <script src="script.js"></script>
</body>
</html>

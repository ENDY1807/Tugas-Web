<?php
$TTL = "24 Juli 2009";
$Alamat = "Rancaekek, Samsat, Bumi Pesona Asri";
$hobi = "Menulis Novel, Mendengarkan Lagu, Menyanyi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
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
            <p>TTL: <?= $TTL?></p>
            <p>Alamat: <?= $Alamat?></p>
            <p>Hobi: <?= $hobi?></p>
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
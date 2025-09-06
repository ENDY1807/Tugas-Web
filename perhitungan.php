<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luas Segitiga</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
</head>
<body>
  <header>
    <div class="container">
      <nav class="nav-container">
        <div class="logo">Web Task</div>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="medsos.php">Media Sosial</a></li>
          <li><a href="perhitungan.php">Hitung</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="segitiga" class="triangle-section">
    <div class="container">
      <div class="triangle-content">
        <div class="triangle-text">
          <h2>Hitung Luas Segitiga</h2>
          <p>Rumus: ½ × alas × tinggi</p>
          <input type="number" id="alas" placeholder="Masukkan alas (cm)">
          <input type="number" id="tinggi" placeholder="Masukkan tinggi (cm)">
          <button class="triangle-btn" onclick="hitungSegitiga()">Hitung</button>
          <div class="triangle-result" id="hasil"></div>
        </div>
        <div class="triangle-image">
          <img src="segitiga.png" alt="Ilustrasi Segitiga"/>
        </div>
      </div>
    </div>
  </section>

<script src="script.js"></script>
</body>
</html>


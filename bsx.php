<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BSX - Rent your favourite car</title>

    <!-- CSS link -->
    <link rel="stylesheet" href="./bsx.css" />

    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php
      // Veritabanı bağlantısı
      require_once "database.php";

      // Blog yazılarını çekme
      $sql = "SELECT topic_title, topic_date, image_filename, topic_para, Author FROM blog_table ORDER BY topic_date DESC LIMIT 10";
      $result = $conn->query($sql);

      // Blog yazılarını diziye aktar
      $blogs = [];
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $blogs[] = $row;
          }
      }
      $conn->close();
    ?>

    <!-- Header -->
    <header class="header" data-header>
      <div class="container">
        <!-- BSX Logo -->
        <a href="#" class="logo">
          <img src="./images/logo.png" alt="BSX Logo" />
        </a>

        <!-- Navbar -->
        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
            <li>
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li>
              <a href="#featured-car" class="navbar-link" data-nav-link>Explore cars</a>
            </li>
            <li>
              <a href="about.php" class="navbar-link" data-nav-link>About us</a>
            </li>
            <li>
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>
          </ul>
        </nav>

        <!-- Header Actions -->
        <div class="header-actions">
          <div class="header-contact">
            <a href="tel:+90 539 846 94 34" class="contact-link">+90 539 846 94 34</a>
            <span class="contact-time">Mon - Sat: 9:00 am - 6:00 pm</span>
          </div>
          <a href="login.php" class="btn user-btn" aria-label="Profile">
            <ion-icon name="person-outline"></ion-icon>
          </a>
        </div>
      </div>
    </header>

    <main>
      <article>
        <!-- Hero Bölümü -->
        <section class="section hero" id="home">
          <div class="container">
            <div class="hero-content">
              <h2 class="h1 hero-title">
                The easiest and most efficient method to assume a lease.
              </h2>
              <p class="hero-text">Live in Istanbul, Ankara and Izmir!</p>
            </div>
            <div class="hero-banner"></div>
          </div>
        </section>

        <!-- Featured Car Bölümü -->
        <section class="section featured-car" id="featured-car">
          <div class="container">
            <div class="title-wrapper">
              <h2 class="h2 section-title">Featured Cars</h2>
            </div>
            <ul class="featured-car-list">
              <!-- Araç 1 -->
              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img src="./images/car-1.jpg" alt="MC20 Cielo" loading="lazy" width="440" height="300" class="w-100" />
                  </figure>
                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title"><a href="#">MC20 Cielo</a></h3>
                      <data class="year" value="2022">2022</data>
                    </div>
                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>
                        <span class="card-item-text">4 People</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>
                        <span class="card-item-text">Hybrid</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        <span class="card-item-text">8.2km / 1-litre</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>
                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>
                    <div class="card-price-wrapper">
                      <p class="card-price"><strong>$70</strong> / day</p>
                      <a href="rent.php" class="btn" data-nav-link>Rent now</a>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Araç 2 -->
              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img src="./images/car-2.jpg" alt="MC20 2022" loading="lazy" width="440" height="300" class="w-100" />
                  </figure>
                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title"><a href="#">MC20</a></h3>
                      <data class="year" value="2022">2022</data>
                    </div>
                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>
                        <span class="card-item-text">4 People</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>
                        <span class="card-item-text">Gasoline</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        <span class="card-item-text">8.4km / 1-litre</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>
                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>
                    <div class="card-price-wrapper">
                      <p class="card-price"><strong>$68</strong> / day</p>
                      <a href="rent.php" class="btn" data-nav-link>Rent now</a>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Araç 3 -->
              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img src="./images/car-3.jpg" alt="Levante 2020" loading="lazy" width="440" height="300" class="w-100" />
                  </figure>
                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title"><a href="#">Levante</a></h3>
                      <data class="year" value="2020">2020</data>
                    </div>
                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>
                        <span class="card-item-text">4 People</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>
                        <span class="card-item-text">Gasoline</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        <span class="card-item-text">9.1km / 1-litre</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>
                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>
                    <div class="card-price-wrapper">
                      <p class="card-price"><strong>$75</strong> / day</p>
                      <a href="rent.php" class="btn" data-nav-link>Rent now</a>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Araç 4 -->
              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img src="./images/car-4.jpg" alt="718 Cayman 2021" loading="lazy" width="440" height="300" class="w-100" />
                  </figure>
                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title"><a href="#">718 Cayman</a></h3>
                      <data class="year" value="2021">2021</data>
                    </div>
                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>
                        <span class="card-item-text">4 People</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>
                        <span class="card-item-text">Gasoline</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        <span class="card-item-text">7.7km / 1-litre</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>
                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>
                    <div class="card-price-wrapper">
                      <p class="card-price"><strong>$62</strong> / day</p>
                      <a href="rent.php" class="btn" data-nav-link>Rent now</a>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Araç 5 -->
              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img src="./images/car-5.jpg" alt="911 Turbo 2021" loading="lazy" width="440" height="300" class="w-100" />
                  </figure>
                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title"><a href="#">911 Turbo GTI</a></h3>
                      <data class="year" value="2021">2021</data>
                    </div>
                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>
                        <span class="card-item-text">4 People</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>
                        <span class="card-item-text">Gasoline</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        <span class="card-item-text">7.6km / 1-litre</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>
                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>
                    <div class="card-price-wrapper">
                      <p class="card-price"><strong>$65</strong> / day</p>
                      <a href="rent.php" class="btn" data-nav-link>Rent now</a>
                    </div>
                  </div>
                </div>
              </li>
              <!-- Araç 6 -->
              <li>
                <div class="featured-car-card">
                  <figure class="card-banner">
                    <img src="./images/car-6.jpg" alt="911 GT3 Touring Paket 2019" loading="lazy" width="440" height="300" class="w-100" />
                  </figure>
                  <div class="card-content">
                    <div class="card-title-wrapper">
                      <h3 class="h3 card-title"><a href="#">911 GT3 Touring Paket</a></h3>
                      <data class="year" value="2019">2019</data>
                    </div>
                    <ul class="card-list">
                      <li class="card-list-item">
                        <ion-icon name="people-outline"></ion-icon>
                        <span class="card-item-text">4 People</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="flash-outline"></ion-icon>
                        <span class="card-item-text">Gasoline</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        <span class="card-item-text">7.9km / 1-litre</span>
                      </li>
                      <li class="card-list-item">
                        <ion-icon name="hardware-chip-outline"></ion-icon>
                        <span class="card-item-text">Automatic</span>
                      </li>
                    </ul>
                    <div class="card-price-wrapper">
                      <p class="card-price"><strong>$70</strong> / day</p>
                      <a href="rent.php" class="btn" data-nav-link>Rent now</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- Blog Bölümü -->
        <section class="section blog" id="blog">
          <div class="container">
            <h2 class="h2 section-title">Latest Blogs</h2>
            <ul class="blog-list">
              <?php foreach ($blogs as $blog): ?>
                <li class="blog-item">
                  <div class="blog-card">
                    <figure class="blog-banner">
                      <img src="./images/<?php echo htmlspecialchars($blog['image_filename']); ?>" alt="<?php echo htmlspecialchars($blog['topic_title']); ?>" loading="lazy" class="w-100" />
                    </figure>
                    <div class="blog-content">
                      <h3 class="h3 blog-title"><?php echo htmlspecialchars($blog['topic_title']); ?></h3>
                      <p class="blog-text"><?php echo htmlspecialchars($blog['topic_para']); ?></p>
                      <div class="blog-meta">
                        <span class="blog-date"><?php echo htmlspecialchars(date("F j, Y", strtotime($blog['topic_date']))); ?></span>
                        <span class="blog-author">by <?php echo htmlspecialchars($blog['Author']); ?></span>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </section>
      </article>
    </main>

    <!-- JavaScript -->
    <script src="./js/script.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>

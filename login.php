<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Araba Kiralama Web Sitesi</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php
    require_once "database.php";

    // Register işlemi
    if (isset($_POST["register-btn"])) {
      $user = trim($_POST['RegisterUsername']);
      $email = trim($_POST['RegisterEmail']);
      $pass = trim($_POST['RegisterPassword']);
      $errors = array();
  
      if (empty($user) || empty($email) || empty($pass)) {
          array_push($errors, "All fields are required.");
      }
      if (strlen($user) < 3) {
          array_push($errors, "Username must be at least 3 characters long.");
      } 
      //Burada HATA iputu olması lazım


      if (strlen($pass) < 5) {
          array_push($errors, "Password must be at least 5 characters long.");
      }//Burada HATA iputu olması lazım


      $sql = "SELECT * FROM signup WHERE Email = ?";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
  
      if (mysqli_stmt_num_rows($stmt) > 0) {
          $errors[] = "Email already exists.";
      }
      mysqli_stmt_close($stmt);
  
      if (empty($errors)) {
        $sql = "INSERT INTO signup (Username, Email, Password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $user, $email, $pass);
    
        if (mysqli_stmt_execute($stmt)) {
            echo "<div class='alert alert-success'>Account successfully created. Please login.</div>";
        } else {
            echo "<div class='alert alert-danger'>Something went wrong. Please try again.</div>";
        }
        mysqli_stmt_close($stmt);
    } else {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
    
  }
  

    // Login işlemi
    if (isset($_POST["login"])) {
        $user = trim($_POST["LoginUsername"]);
        $pass = trim($_POST["LoginPassword"]);

        $sql = "SELECT * FROM signup WHERE Username = ? AND Password = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $userData = mysqli_fetch_assoc($result);

        if ($userData) {
            session_start();
            $_SESSION["user"] = $userData["Username"];
            header("Location: bsx.php");
            exit();
        } else {
            echo "<p style='color: red; font-size: 16px;'>Invalid username or password.</p>;";
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
    ?>

    <div class="form-container">
      <div class="col col-1">
        <div class="image-layer">
          <img src="img/ferrari.png" class="form-image-ferrari" />
          <img src="img/smoke.png" class="form-image-smoke" />
          <img src="img/star.png" class="form-image-star" />
          <img src="img/star2.png" class="form-image-star2" />
        </div>
        <p class="featured-words">The Quick And Easy Way To Rent A Car</p>
      </div>
      <div class="col col-2">
        <div class="btn-box">
          <button class="btn btn-1" id="login-btn">Sign In</button>
          <button class="btn btn-2" id="register-btn">Sign Up</button>
        </div>
        <!-- LOG IN FORM -->
        <div class="login-form active">
          <form method="POST" action="">
            <div class="form-title">
              <span>Sign In</span>
            </div>
            <div class="form-inputs">
              <div class="input-box">
                <input
                  type="text"
                  class="input-field"
                  name="LoginUsername"
                  placeholder="Username"
                  required
                />
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="input-box">
                <input
                  type="password"
                  class="input-field"
                  name="LoginPassword"
                  placeholder="Password"
                  required
                />
                <i class="fa-solid fa-unlock-keyhole"></i>
              </div>
              <div class="forgot-pass">
                <a href="#">Forgot Password?</a>
              </div>
              <div class="input-box">
                <button class="input-submit" type="submit" name="login">
                  <span>Sign In</span>
                  <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <!-- REGISTER FORM -->
        <div class="register-form hidden">
          <form method="POST" action="">
            <div class="form-title">
              <span>Create Account</span>
            </div>
            <div class="form-inputs">
              <div class="input-box">
                <input
                  type="text"
                  class="input-field"
                  name="RegisterUsername"
                  placeholder="Username"
                  required
                />
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="input-box">
                <input
                  type="email"
                  class="input-field"
                  name="RegisterEmail"
                  placeholder="E-mail"
                  required
                />
                <i class="fa-solid fa-envelope-open"></i>
              </div>
              <div class="input-box">
                <input
                  type="password"
                  class="input-field"
                  name="RegisterPassword"
                  placeholder="Password"
                  required
                />
                <i class="fa-solid fa-unlock-keyhole"></i>
              </div>
              <div class="input-box">
                <button class="input-submit" type="submit" name="register-btn">
                  <span>Sign Up</span>
                  <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
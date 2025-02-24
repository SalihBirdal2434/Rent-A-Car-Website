<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rent a Car</title>
    <link rel="stylesheet" href="rent.css" />
  </head>
  <body>
  <?php
require_once "database.php";

if (isset($_POST["confirmbutton"])) {
    $cardname = $_POST['name'];
    $cardnumber = $_POST['cardnumber'];
    $cardcvv = $_POST['adress'];
    $errors = array();

    // Validation
    if (empty($cardname) || empty($cardnumber) || empty($cardcvv)) {
        $errors[] = "All fields are required.";
    }

    // Check if card number already exists
    $sql = "SELECT * FROM rent WHERE cardnumber=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $cardnumber);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        $errors[] = "This card number is already registered.";
    }
    mysqli_stmt_close($stmt);

    // Insert data if no errors
    if (empty($errors)) {
      $sql = "INSERT INTO rent (cardname, cardnumber, cardcvv) VALUES (?, ?, ?)";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "sss", $cardname, $cardnumber, $cardcvv);

        if (mysqli_stmt_execute($stmt)) {
            echo "<div class='alert alert-success'>You have rented successfully.</div>";
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
?>

    <header class="header">
      <div class="container">
        <a href="bsx.php" class="logo">BSX</a>
        <nav class="nav">
          <a href="bsx.php" class="btn">Home</a>
          <a href="rent.php" class="btn active">Rent Now</a>
        </nav>
      </div>
    </header>

    <main class="main">
      <section class="rent-section">
        <h1>Rent a Car</h1>

        <!-- Calendar -->
        <div class="calendar">
          <label for="rental-date">Select Rental Date:</label>
          <input type="date" id="rental-date" class="input-field" required />
        </div>

        <!-- Payment Information -->
        <div class="payment">
          <h2>Contact Information</h2>
          <form id="rent-form" method="POST" action="">
            <label for="card-name">Name and Surname:</label>
            <input
              type="text"
              id="name"
              name="name"
              class="input-field"
              placeholder="John Doe"
              required
            />

            <label for="cardnumber">Contact Number:</label>
            <input
              type="text"
              id="cardnumber"
              name="cardnumber"
              class="input-field"
              placeholder="+90 123 456 78 99"
              maxlength="16"
              required
            />

            
            <label for="Adress">Adress:</label>
            <input
              type="text"
              id="adress"
              name="adress"
              class="input-field"
              placeholder="Yayla mah. Çınar Sok. No:9, Daire:7"
              maxlength="300"
              required
            />

          <button type="submit" class="btn rent-btn" name="confirmbutton">Confirm Booking</button>

          </form>
        </div>
      </section>
    </main>

    <footer class="footer">
      <p>© 2024 BSX Rent a Car. All Rights Reserved.</p>
    </footer>



</html>
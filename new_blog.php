<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Blog Post</title>
    <link rel="stylesheet" href="./new_blog.css">
</head>

<body>

<?php
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST["title"]);
    $date = $conn->real_escape_string($_POST["date"]);
    $content = $conn->real_escape_string($_POST["content"]);
    $Author = $conn->real_escape_string($_POST["Author"]);
    // Image upload
    $image = $_FILES["image"];
    $imageName = basename($image["name"]);
    $targetDir = "./images/";
    $targetFile = $targetDir . $imageName;

    if (move_uploaded_file($image["tmp_name"], $targetFile)) {
        $sql = "INSERT INTO blog_table (topic_title, topic_date, image_filename, topic_para, Author) VALUES ('$title', '$date', '$imageName', '$content','$Author')";

        if ($conn->query($sql) === TRUE) {
            echo "<center><p>New blog post created successfully.</p></center>";
            echo "<center><a href='bsx.php'>View All Posts</a></center>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<center><p>Error uploading image.</p></center>";
    }
}

$conn->close();
?>


    <div class="top-bar">
        <span id="topBarTitle">Blog | New Post</span>
    </div>

    <br>

    <div class="form-container">
        <form action="new_blog.php" method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" required><br><br>

            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" required><br><br>

            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image" accept="image/*" required><br><br>

            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="10" required></textarea><br><br>

            <label for="Author">Author:</label><br>
            <textarea id="Author" name="Author" rows="10" required></textarea><br><br>

            <button type="submit">Publish</button>
        </form>
    </div>

</body>

</html>
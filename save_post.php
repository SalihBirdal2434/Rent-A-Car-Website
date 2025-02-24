<section class="section blog" id="blog">
         
            <h2 class="h2 section-title">Our Blog</h2>

      <ul class="blog-list has-scrollbar">
              <li><section class="section blog" id="blog">
      <div class="container">
        <h2 class="h2 section-title">Our Blog</h2>
        <ul class="blog-list has-scrollbar">
            <?php
            require_once "database.php";

            // Blog yazılarını çekme
            $sql = "SELECT topic_title, topic_date, image_filename, topic_para FROM blog_table ORDER BY topic_date DESC LIMIT 5";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li class='blog-item'>";
                    echo "<div class='blog-card'>";
                    echo "<figure class='card-banner'>";
                    echo "<img src='images/" . $row['image_filename'] . "' alt='" . $row['topic_title'] . "' class='card-img'>";
                    echo "</figure>";
                    echo "<div class='card-content'>";
                    echo "<h3 class='h3 card-title'>" . $row['topic_title'] . "</h3>";
                    echo "<time class='card-date'>" . $row['topic_date'] . "</time>";
                    echo "<p class='card-text'>" . substr($row['topic_para'], 0, 100) . "...</p>";
                    echo "<a href='blog_detail.php?title=" . urlencode($row['topic_title']) . "' class='card-link'>Read More</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</li>";
                }
            } else {
                echo "<p>No blog posts found.</p>";
            }

            $conn->close();
            ?>
        </ul>
   </div>
</section>
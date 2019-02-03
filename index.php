<?php require 'header.php'; ?>

  <main>
    <div class="container">
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<p>Du er logged ind!</p>';
      } else {
        echo '<p>Du er logged ud!</p>';
      }
    ?>
    </div>
  </main>

<?php require 'footer.php' ?>

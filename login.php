<?php require 'header.php'; ?>

  <main>
    <div class="container">
      <h1>Log ind</h1>
      <form action="includes/login.inc.php" method="post">
        <input class="form-control" type="text" name="uid" placeholder="Brugernavn"><br>
        <input class="form-control" type="password" name="pwd" placeholder="Password"><br>
        <button class="btn btn-primary" type="submit" name="login-submit">Opret</button>
      </form>
    </div>
  </main>

<?php require 'footer.php' ?>

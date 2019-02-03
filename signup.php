<?php require 'header.php'; ?>

  <main>
    <div class="container">
      <h1>Opret bruger</h1>



      <form action="includes/signup.inc.php" method="post">
        <input class="form-control" type="text" name="uid" placeholder="Brugernavn"><br>
        <input class="form-control" type="text" name="mail" placeholder="E-mail"><br>
        <input class="form-control" type="password" name="pwd" placeholder="Password"><br>
        <input class="form-control" type="password" name="pwd-repeat" placeholder="Gentag password"><br>

        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyFields") {
              echo '<p style="color:red"> Udfyld alle felter. </p>';
            } elseif ($_GET['error'] == "invaliduid") {
              echo '<p style="color:red"> Brug normale bogstaver i dit brugernavn. </p>';
            }
          } elseif ($_GET['signup'] == "success") {
            echo '<p style="color:green"> Du har nu oprettet en bruger. </p>';
          }
        ?>

        <button class="btn btn-primary" type="submit" name="signup-submit">Opret</button>
      </form>


    </div>
  </main>

<?php require 'footer.php' ?>

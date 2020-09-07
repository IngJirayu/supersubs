<?php
require "header.php";
?>
<main>
  <div class="form-holder">
    <div class="login-signup-form">
      <div class="input-field">
        <h1 class="Signup-login-text">Login</h1>
        <form action="includes/login.inc.php" method="post">
          Username/Email<input type="text" name="mailuid" placeholder="Username/Email">
          Password<input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Singup</a>
        <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php
require "footer.php"
?>

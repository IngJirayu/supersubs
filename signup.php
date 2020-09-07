<?php
require "header.php";
?>

<main>
    <div class="form-holder">
        <div class="login-signup-form">
            <div class="input-field">
                <h1 class="signup-login-text">Sign up</h1>
                <form action="includes/signup.inc.php" method="post">
                    Username:<input type="text" name="uid" placeholder="Username">
                    Email:<input type="text" name="mail" placeholder="Email">
                    เพศ:ชาย<input type="radio" name="gender" value="Male" checked>
                    หญิง<input type="radio" name="gender" value="Female">
                    อื่นๆ<input type="radio" name="gender" value="Other">
                    <input type="Password" name="pwd" placeholder="Password">
                    <input type="Password" name="pwd-repeat" placeholder="Confirm Password">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include('public/includes/social.php'); ?>
<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <form action="register" method="POST">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="John@gmail.com" maxlength="255" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" minlength="8" maxlength="255" required><br>
            <label for="confirmPassword">Confirm password:</label><br>
            <input type="password" id="confirmPassword" name="confirmPassword" minlength="8" maxlength="255" required><br>
            <div class="error">
                <?php
                if(isset($error)){
                    echo $error;
                }
                ?>
            </div>
            <div class="success">
                <?php
                if(isset($message)){
                    echo $message;
                }
                ?>
            </div>
            <p>Already have account? <a href="login">Sign in</a>.</p>
            <button type="submit" class="action-button app-text">
                SIGN UP
            </button>
        </form>
    </div>

</div>

<style>
    <?php
        include 'public/css/variables.css';
        include 'public/css/main.css';
    ?>
</style>

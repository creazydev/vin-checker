<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <form action="login" method="POST">
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value="admin@gmail.com"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" value="adminhaslo"><br>
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
            <p>Does not have account? <a href="register">Sign up</a>.</p>
            <button type="submit" class="action-button app-text">
                SIGN IN
            </button>
        </form>
    </div>

</div>

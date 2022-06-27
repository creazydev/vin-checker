<div class="social">
    <i class="fa-brands fa-facebook-f"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-tiktok"></i>
    <?php
        if (Routing::isAuthenticated()) {
            echo '<a href="logout"><i id="logout" class="fas fa-sign-out-alt"></i></a>';
        }
    ?>
</div>

<script src="https://kit.fontawesome.com/e0f8847c22.js" crossorigin="anonymous"></script>

<style>
    <?php
        include 'public/css/social.css';
    ?>
</style>

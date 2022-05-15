<?php include('public/includes/social.php'); ?>
<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <div>
            <img src="public/img/processing.png" />
            <p>Processing...</p>
        </div>
    </div>

</div>

<style>
    <?php
        include 'public/css/variables.css';
        include 'public/css/main.css';
    ?>

    .wrapper {
        padding-top: 0;
        padding-bottom: 110px;
    }

    .wrapper div {
        height: 100%;
    }

    .wrapper p {
        color: var(--secondary-color);
    }

</style>
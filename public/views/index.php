<?php include('public/includes/social.php'); ?>
<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <div>
            <div class="field">
                <div class="label">
                <span>
                    VIN
                    <?php
                    print "env is: ".$_ENV["DATABASE_PORT"]."\n";
                    ?>
                </span>
                </div>
                <input type="text" class="input" />
            </div>
        </div>
        <div>
            <a href="processing">
                <button class="action-button app-text">
                    GENERATE REPORT
                </button>
            </a>
        </div>
    </div>

</div>

<style>
    <?php
        include 'public/css/variables.css';
        include 'public/css/main.css';
    ?>
</style>

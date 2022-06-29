<?php include('public/includes/social.php'); ?>
<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <div>
            <?php
            require_once 'src/utils/SessionMediator.php';

            $sm = new SessionMediator();

            if ($sm->isAdmin()) {
                echo '<p><a href="usersRequests">Users requests</a></p>';
            }
            ?>
            <p><a href="requests">My requests</a></p>
        </div>
        <form action="processing" method="POST">
            <div>
                <div class="field">
                    <div class="label">
                    <span>
                        VIN
                    </span>
                    </div>

                    <input type="text" id="vin" name="vin" value="" class="input"
                           minlength="16"
                           maxlength="18"
                           pattern="[A-HJ-NPR-Z\\d]{8}[\\dX][A-HJ-NPR-Z\\d]{2}\\d{6}"/>
                </div>
            </div>
            <div>
                <button id="generate" type="submit" class="action-button app-text">
                    GENERATE REPORT
                </button>
            </div>
        </form>
    </div>

</div>

<style>
    <?php
        include 'public/css/variables.css';
        include 'public/css/main.css';
    ?>
</style>

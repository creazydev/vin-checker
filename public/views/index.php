<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
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
                    />
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

<?php include('public/includes/social.php'); ?>
<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <div>
            <img src="public/img/processing.png"/>
            <p>
                Processing...
                <?php
                if (isset($vin)) {
                    echo $vin;
                }
                ?>
            </p>
        </div>
    </div>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script defer>
    const apiKey = "ZrQEPSkKbWxvZHl2MTExQGdtYWlsLmNvbQ==";
    const vin = "<?php echo $vin; ?>";

    function requestDetails(vin) {
        console.log('requesting for vin')
        $.ajax({
            url: `https://auto.dev/api/vin/${vin}?apikey=${apiKey}`,
            type: "get",
            dataType: 'json',
            success: function (result) {
                console.log('success', result);
            },
            error: function (result) {
                console.log('error', result);
            }
        });
    }
    requestDetails(vin);
</script>
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

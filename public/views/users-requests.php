<?php include('public/includes/social.php'); ?>
<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <div>
            <div>
                <?php  foreach($requests as $row): ?>
                    <tr>
                        <td><?=$row['request_id'];?></td>
                        <td><?=$row['user.email'];?></td>
                        <td><?=$row['vin'];?></td>
                        <td><?=$row['timestamp'];?></td>
                    </tr>
                <?php endforeach;?>
            </div>
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

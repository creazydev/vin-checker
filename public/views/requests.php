<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <div>
            <div>
                <?php
                if (!isset($requests)) {
                    $requests = [];
                }
                ?>

                <table>
                    <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>VIN</th>
                        <th>Requested at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($requests as $row): ?>
                        <tr>
                            <td><?= $row->getRequestId(); ?></td>
                            <td><?= $row->getVin(); ?></td>
                            <td><?= gmdate("D M j G:i:s T Y", $row->getTimestamp()); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<style>
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

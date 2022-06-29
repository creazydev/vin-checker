<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <div class="row">
            <div class="col w-100 top" style="width: 100%; ">
                <?php
                if (!isset($requests)) {
                    $requests = [];
                }
                ?>

                <table class="w-100">
                    <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>User</th>
                        <th>Role</th>
                        <th>VIN</th>
                        <th>Requested at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($requests as $row): ?>
                        <tr>
                            <td><?= $row->getRequestId(); ?></td>
                            <td><?= $row->getUser()->getEmail(); ?></td>
                            <td><?= $row->getUser()->getRole(); ?></td>
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
        display: block;
        padding-top: 0px !important;
        padding-bottom: 110px;
    }

    .wrapper div {
        height: 100%;
    }

    .wrapper p {
        color: var(--secondary-color);
    }

</style>

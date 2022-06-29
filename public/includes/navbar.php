<nav class="navbar navbar-expand-lg navbar-light navbar-dark"
     style="background-color: var(--primary-color); position: fixed; top:0; width: 100%">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index">Home</a>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Requests
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="requests">My requests</a>

                    <?php
                    include_once 'src/utils/SessionMediator.php';

                    $sm = new SessionMediator();

                    if ($sm->isAdmin()) {
                        echo '<div class="dropdown-divider"></div><a class="dropdown-item" href="usersRequests">Users requests</a>';
                    }
                    ?>
                </div>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <a href="logout"><i id="logout" class="fas fa-sign-out-alt " style="font-size: x-large; color: white"></i></a>
        </div>
    </div>
</nav>
<style>
    <?php
        include 'public/css/variables.css';
    ?>
</style>



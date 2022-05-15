<?php include('public/includes/social.php'); ?>
<div class="content app-text">
    <?php include('public/includes/logo.php'); ?>

    <div class="wrapper">
        <div class="row">
            <div class="col" style="width: 100%">
                <span class="section header" style="width: 100%; border-bottom: 2px solid black">VOLKSWAGEN, 3C, PASSAT</span>
                <p>samochód osoboy kombi</p>
                <p>1968 cm3, olej napędowy</p>
                <div class="row">
                    <div class="col">Rok produkcji</div>
                    <div class="col">2009</div>
                </div>
                <div class="row">
                    <div class="col">Rok produkcji</div>
                    <div class="col">2009</div>
                </div>
                <div class="row">
                    <div class="col">Rok produkcji</div>
                    <div class="col">2009</div>
                </div>
                <div class="row">
                    <div class="col">Rok produkcji</div>
                    <div class="col">2009</div>
                </div>
                <div class="row">
                    <div class="col">Rok produkcji</div>
                    <div class="col">2009</div>
                </div>
                <div class="row">
                    <div class="col">Rok produkcji</div>
                    <div class="col">2009</div>
                </div>
            </div>
            <div class="col">
                <span class="section header">1.Dane techniczne</span>
                <div class="row">
                    <div class="col">Moc silnika (kW)</div>
                    <div class="col">81</div>
                </div>
                <div class="row">
                    <div class="col">Paliwo</div>
                    <div class="col">olej napędowy</div>
                </div>
                <div class="row">
                    <div class="col">Emisja C02</div>
                    <div class="col">146</div>
                </div>

                <span class="section header">2.Dokumenty</span>
                <div class="row">
                    <div class="col">Moc silnika (kW)</div>
                    <div class="col">81</div>
                </div>
                <div class="row">
                    <div class="col">Paliwo</div>
                    <div class="col">olej napędowy</div>
                </div>
                <div class="row">
                    <div class="col">Emisja C02</div>
                    <div class="col">146</div>
                </div>
            </div>
        </div>
        <div class="row">
            <span class="section header">3.Historia pojazdu</span>

            <div class="card-body">
                <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">

                    <?php for ($x = 0; $x <= 10; $x++) { ?>
                        <div class="vertical-timeline-item vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in">
                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                </span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Meeting with client</h4>
                                    <p>Meeting with USA Client, today at <a href="javascript:void(0);" data-abc="true">12:00
                                            PM</a></p>
                                    <span class="vertical-timeline-element-date"><?php echo $x; ?>9:30 AM</span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                <span class="vertical-timeline-element-icon bounce-in">
                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">Meeting with client</h4>
                                <p>Meeting with USA Client, today at <a href="javascript:void(0);" data-abc="true">12:00
                                        PM</a></p>
                                <span class="vertical-timeline-element-date">9:30 AM</span>
                            </div>
                        </div>
                    </div>


                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                <span class="vertical-timeline-element-icon bounce-in">
                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">Meeting with client</h4>
                                <p>Meeting with USA Client, today at <a href="javascript:void(0);" data-abc="true">12:00
                                        PM</a></p>
                                <span class="vertical-timeline-element-date">9:30 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                <p>Yet another one, at <span class="text-success">5:00 PM</span></p>
                                <span class="vertical-timeline-element-date">12:25 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                <p>meeting with team mates about the launch of new product. and tell them about new
                                    features</p>
                                <span class="vertical-timeline-element-date">6:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                <p>Discussion with marketing team about the popularity of last product</p>
                                <span class="vertical-timeline-element-date">9:00 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">Purchase new hosting plan</h4>
                                <p>Purchase new hosting plan as discussed with development team, today at <a
                                            href="javascript:void(0);" data-abc="true">10:00 AM</a></p>
                                <span class="vertical-timeline-element-date">10:30 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                <p>Yet another one, at <span class="text-success">1:00 PM</span></p>
                                <span class="vertical-timeline-element-date">12:25 PM</span>
                            </div>
                        </div>
                    </div>


                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                                <p>Yet another one, at <span class="text-success">5:00 PM</span></p>
                                <span class="vertical-timeline-element-date">12:25 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">Discussion with team about new product launch</h4>
                                <p>meeting with team mates about the launch of new product. and tell them about new
                                    features</p>
                                <span class="vertical-timeline-element-date">6:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title text-success">Discussion with marketing team</h4>
                                <p>Discussion with marketing team about the popularity of last product</p>
                                <span class="vertical-timeline-element-date">9:00 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <h4 class="timeline-title">Purchase new hosting plan</h4>
                                <p>Purchase new hosting plan as discussed with development team, today at <a
                                            href="javascript:void(0);" data-abc="true">10:00 AM</a></p>
                                <span class="vertical-timeline-element-date">10:30 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="vertical-timeline-item vertical-timeline-element">
                        <div>
                                                        <span class="vertical-timeline-element-icon bounce-in">
                                                            <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                        </span>
                            <div class="vertical-timeline-element-content bounce-in">
                                <p>Another conference call today, at <b class="text-danger">11:00 AM</b></p>
                                <p>Yet another one, at <span class="text-success">1:00 PM</span></p>
                                <span class="vertical-timeline-element-date">12:25 PM</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<style>
    <?php
        include 'public/css/variables.css';
        include 'public/css/main.css';
    ?>

    .wrapper {
        display: block;
        color: var(--secondary-color);
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .vertical-timeline {
        width: 100%;
        position: relative;
        padding: 1.5rem 0 1rem;
    }

    .vertical-timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 67px;
        height: 100%;
        width: 3px;
        background: #4f6c86;
        border-radius: .25rem;
    }

    .vertical-timeline-element {
        position: relative;
        margin: 0 0 1rem;
    }

    .vertical-timeline--animate .vertical-timeline-element-icon.bounce-in {
        visibility: visible;
        animation: cd-bounce-1 .8s;
    }

    .vertical-timeline-element-icon {
        position: absolute;
        top: 0;
        left: 60px;
    }

    .vertical-timeline-element-icon .badge-dot-xl {
        box-shadow: 0 0 0 5px #fff;
    }

    .badge-dot-xl {
        width: 18px;
        height: 18px;
        position: relative;
    }

    .badge:empty {
        display: none;
    }


    .badge-dot-xl::before {
        content: '';
        width: 10px;
        height: 10px;
        border-radius: .25rem;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -5px 0 0 -5px;
        background: #fff;
    }

    .vertical-timeline-element-content {
        position: relative;
        margin-left: 90px;
        font-size: .8rem;
    }

    .vertical-timeline-element-content .timeline-title {
        font-size: .8rem;
        text-transform: uppercase;
        margin: 0 0 .5rem;
        padding: 2px 0 0;
        font-weight: bold;
    }

    .vertical-timeline-element-content .vertical-timeline-element-date {
        display: block;
        position: absolute;
        left: -90px;
        top: 0;
        padding-right: 10px;
        text-align: right;
        color: #adb5bd;
        font-size: .7619rem;
        white-space: nowrap;
    }

    .vertical-timeline-element-content:after {
        content: "";
        display: table;
        clear: both;
    }

</style>
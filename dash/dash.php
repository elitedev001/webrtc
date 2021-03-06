<?php
include_once 'header.php';
?>


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Visitors</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="visitorsCount">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a class="text-xs font-weight-bold text-success text-uppercase mb-1" href="rooms.php">Rooms</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800" id="roomsCount"></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-video fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col mr-1">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a class="text-xs font-weight-bold text-success text-uppercase mb-1" href="room.php">Room Management</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($_SESSION["tenant"] == 'lsv_mastertenant') { ?>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a class="text-xs font-weight-bold text-info text-uppercase mb-1" href="agents.php">Doctors</a></div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="agentsCount"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a class="text-xs font-weight-bold text-info text-uppercase mb-1" href="agent.php">Add New Doctor</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a class="text-xs font-weight-bold text-warning text-uppercase mb-1" href="users.php">Clients</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="usersCount"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a class="text-xs font-weight-bold text-warning text-uppercase mb-1" href="user.php">Add New Client</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php } ?>
<!-- Content Row -->
</div>
<hr>
<?php if ($_SESSION["tenant"] == 'lsv_mastertenant') { ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Doctors History.</h1>
    </div>
<div class="row" id="history_entry">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a class="text-xs font-weight-bold text-info text-uppercase mb-1" href="history.php">Doctors</a></div>
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Add New Doctor</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Add New Doctor</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php }?>
<hr>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Visit your clients.</h1>

    </div>

        <div class="row" id="visitors">

            <div class="card shadow h-100 py-2">

            </div>

        </div>

<hr>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enter a room.</h1>

    </div>


    <!-- Content Row -->
    <div class="row" id="room_entry">


    <div class="col-xl-3 col-md-6 mb-4">


    </div>


        </div>
    <!-- Content Row -->

<?php
include_once 'footer.php';
?>
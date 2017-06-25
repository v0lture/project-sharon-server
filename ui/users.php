<!DOCTYPE html>
<html>

    <head>
        <?php require_once "layout/head.php"; ?>
    </head>

    <body>
        <?php require_once "layout/nav.php"; ?>

        <div class="row">
            <div class="col s4">

                <div class="fullheight sidebar">

                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab"><a href="#all" class="waves-effect waves-light">All</a></li>
                                <li class="tab"><a href="#active" class="waves-effect waves-light">Active</a></li>
                                <li class="tab"><a href="#suspended" class="waves-effect waves-light">Suspended</a></li>
                                <li class="tab"><a href="#groups" class="waves-effect waves-light">Groups</a></li>
                            </ul>
                        </div>
                        <div id="all" class="col s12">
                            <h4 class="center-align"><i class="material-icons accent-text">person_outline</i></h4>
                            <p class="center-align">There aren't any users on the server.<br /><small>Add a user by pressing the plus in the bottom right corner.</small></p>
                        </div>
                        <div id="active" class="col s12">
                            <h4 class="center-align"><i class="material-icons accent-text">person_outline</i></h4>
                            <p class="center-align">There aren't any recently active users.<br /><small>User activeness is determined by the most recent interaction with the server.</small></p>
                        </div>
                        <div id="suspended" class="col s12">
                            <h4 class="center-align"><i class="material-icons accent-text">person_outline</i></h4>
                            <p class="center-align">There aren't any suspended users.<br /><small>Suspend a user via the user info pane.</small></p>
                        </div>
                        <div id="groups" class="col s12">
                            <h4 class="center-align"><i class="material-icons accent-text">build</i></h4>
                            <p class="center-align">Groups will be available in a later release. Hang tight!</p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col s8">



            </div>
        </div>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large accent">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </body>

</html>
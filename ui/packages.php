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
                                <li class="tab"><a href="#apps" class="waves-effect waves-light">Apps</a></li>
                                <li class="tab"><a href="#files" class="waves-effect waves-light">Files</a></li>
                                <li class="tab"><a href="#updates" class="waves-effect waves-light">Updates</a></li>
                                <li class="tab"><a href="#categories" class="waves-effect waves-light">Categories</a></li>
                            </ul>
                        </div>
                        <div id="apps" class="col s12">
                            <h4 class="center-align"><i class="material-icons accent-text">person_outline</i></h4>
                            <p class="center-align">There aren't any users on the server.<br /><small>Add a user by pressing the plus in the bottom right corner.</small></p>
                        </div>
                        <div id="files" class="col s12">
                            <h4 class="center-align"><i class="material-icons accent-text">person_outline</i></h4>
                            <p class="center-align">There aren't any recently active users.<br /><small>User activeness is determined by the most recent interaction with the server.</small></p>
                        </div>
                        <div id="categories" class="col s12">
                            <h4 class="center-align"><i class="material-icons accent-text">filter_list</i></h4>
                            <p class="center-align">No categories created.<br /><small>The default categories are not shown here. Create categories when creating a package.</small></p>
                        </div>
                        <div id="updates" class="col s12">
                            <h4 class="center-align"><i class="material-icons accent-text">check</i></h4>
                            <p class="center-align">No published updates across the company.<br /><small>Add updates via the plus in the bottom right corner.</small></p>
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
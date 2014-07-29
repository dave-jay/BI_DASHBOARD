<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php print _U; ?>" style="color:#ADDFFF;">
           Xero API
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('users') ?>">Users List</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Manage Asana Keys  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('asana') ?>">Asana Keys</a></li>
                </ul>
            </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Manage Xero Keys  <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('xero') ?>">Xero Keys </a></li>
                </ul>
            </li>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> OAuth Credentials <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php l('oauth_key') ?>"> Keys </a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php l('login?logout=1') ?>">Logout <i class="glyphicon glyphicon-off"></i></a></li>

        </ul>
    </div>
</nav>



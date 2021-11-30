<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College Management System</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="im<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="/admin/images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Dashboard Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="/admin/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="/admin/css/application.min.css">
    <!-- endinject -->

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <!-- Search-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>

                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search"/>
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div>

            <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification"
                 data-badge="23">
                notifications_none
            </div>
            <!-- Notifications dropdown-->
            <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown"
                for="notification">
                <li class="mdl-list__item">
                    You have 23 new notifications!
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">plus_one</i>
                        </span>
                        <span>You have 3 new orders.</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">just now</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--secondary">
                            <i class="material-icons">error_outline</i>
                        </span>
                      <span>Database error</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">1 min</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">new_releases</i>
                        </span>
                      <span>The Death Star is built!</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">2 hours</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item list__item--border-top">
                    <span class="mdl-list__item-primary-content">
                        <span class="mdl-list__item-avatar background-color--primary">
                            <i class="material-icons">mail_outline</i>
                        </span>
                      <span>You have 4 new mails.</span>
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label">5 days</span>
                    </span>
                </li>
                <li class="mdl-list__item list__item--border-top">
                    <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">ALL NOTIFICATIONS</button>
                </li>
            </ul>

            <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon message" id="inbox" data-badge="4">
                mail_outline
            </div>
            <!-- Messages dropdown-->
            <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp messages-dropdown"
                for="inbox">
                <li class="mdl-list__item">
                    You have 4 new messages!
                </li>
            </ul>

            <div class="avatar-dropdown" id="icon">
                <span>Luke</span>
                <img src="images/Icon_header.png">
            </div>
            <!-- Account dropdawn-->
            <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                for="icon">
                <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content">
                        <span class="material-icons mdl-list__item-avatar"></span>
                        <span>Luke</span>
                        <span class="mdl-list__item-sub-title">Luke@skywalker.com</span>
                    </span>
                </li>
                <li class="list__item--border-top"></li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">account_circle</i>
                        My account
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">check_box</i>
                        My tasks
                    </span>
                    <span class="mdl-list__item-secondary-content">
                      <span class="label background-color--primary">3 new</span>
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">perm_contact_calendar</i>
                        My events
                    </span>
                </li>
                <li class="list__item--border-top"></li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">settings</i>
                        Settings
                    </span>
                </li>
                <a href="login.html">
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                            Log out
                        </span>
                    </li>
                </a>
            </ul>

            <button id="more"
                    class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
                for="more">
                <li class="mdl-menu__item">
                    Settings
                </li>
                <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                    Support
                </a>
                <li class="mdl-menu__item">
                    F.A.Q.
                </li>
            </ul>
        </div>
    </header>

    <div class="mdl-layout__drawer">
        <header>ADMIN</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="/adminhome">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Home
                        </a>
                        <div class="sub-navigation">
                            <a class="mdl-navigation__link"  >
                                <i class="material-icons">view_comfy</i>
                                APPROVE 
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="/approveteacher">
                                    Approve Teacher
                                </a>
                                <a class="mdl-navigation__link" href="/approvesyllabus">
                                Approve Syllabus
                                </a>
                                <a class="mdl-navigation__link" href="/approvetimetable">
                                   Approve Timetable
                                </a>
                                <a class="mdl-navigation__link" href="/approveresult">
                                   Approve Result
                                </a>
                                </div> 
                        </div>
                        <a class="mdl-navigation__link" href="/adminfeedback">
                            <i class="material-icons">developer_board</i>
                            View feedback
                        </a>
                        <a class="mdl-navigation__link" href="/alogout">
                            <i class="material-icons">person</i>
                           Logout
                        </a>
                        <a class="mdl-navigation__link" href="maps.html">
                            <i class="material-icons" role="presentation">map</i>
                            Maps
                        </a>
                        <a class="mdl-navigation__link" href="charts.html">
                            <i class="material-icons">multiline_chart</i>
                            Charts
                        </a>
                        <div class="sub-navigation">
                            <a class="mdl-navigation__link">
                                <i class="material-icons">pages</i>
                                Pages
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="login.html">
                                    Sign in
                                </a>
                                <a class="mdl-navigation__link" href="sign-up.html">
                                    Sign up
                                </a>
                                <a class="mdl-navigation__link" href="forgot-password.html">
                                    Forgot password
                                </a>
                                <a class="mdl-navigation__link" href="404.html">
                                    404
                                </a>
                            </div>
                        </div>
                        <div class="mdl-layout-spacer"></div>
                        <hr>
                        <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                            <i class="material-icons" role="presentation">link</i>
                            GitHub
                        </a>
                    </nav>
                </div>
            </div>
            <div class='scroller__bar' id="scroller__bar"></div>
        </div>
    </div>




<!--     
    <main class="mdl-layout__content">

        <div class="mdl-grid mdl-grid--no-spacing dashboard">

            <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top"> -->
            <h1>Timetable</h1>
            <div class="mdl-card__supporting-text no-padding">
                <table class="mdl-data-table mdl-js-data-table stripped-table">
                    <thead>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">id</td>
                            <td class="mdl-data-table__cell--non-numeric">course</td>
                            <td class="mdl-data-table__cell--non-numeric">semester</td>
                            <td class="mdl-data-table__cell--non-numeric">subject</td>
                            <td class="mdl-data-table__cell--non-numeric">date</td>
                            <td class="mdl-data-table__cell--non-numeric">time</td>
                            <td class="mdl-data-table__cell--non-numeric">Status</td>
                        </tr>
                    </thead>
                    <tbody>            
                             @foreach($result as $value)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{$value->id}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$value->course}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$value->semester}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$value->subject}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$value->date}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$value->time}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{$value->status}}</td>
                            <td class="mdl-data-table__cell--non-numeric"><a href="/aprovet/{{$value->id}}">aprove</a></td>
                            <td class="mdl-data-table__cell--non-numeric"><a href="/declinet/{{$value->id}}">decline</a></td>
                        </tr>
                    </tbody>
                            @endforeach
                    </table>
            </div>
        <!-- </div>  -->

    <!-- </min> --> 

</div>

<!-- inject:js -->
<script src="admin/js/d3.min.js"></script>
<script src="admin/js/getmdl-select.min.js"></script>
<script src="admin/js/material.min.js"></script>
<script src="admin/js/nv.d3.min.js"></script>
<script src="admin/js/layout/layout.min.js"></script>
<script src="admin/js/scroll/scroll.min.js"></script>
<script src="admin/js/widgets/charts/discreteBarChart.min.js"></script>
<script src="admin/js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="admin/js/widgets/charts/stackedBarChart.min.js"></script>
<script src="admin/js/widgets/employer-form/employer-form.min.js"></script>
<script src="admin/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="admin/js/widgets/map/maps.min.js"></script>
<script src="admin/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="admin/js/widgets/table/table.min.js"></script>
<script src="admin/js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

</body>
</html>


  
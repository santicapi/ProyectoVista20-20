<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-sub-hidden show-spinner no-footer">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>

            <a class="btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block"
                href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a>
        </div>


        <a class="navbar-logo" href="Dashboard.Default.html">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" 
                        data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-file d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/profiles/l-2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/1.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="img/notifications/3.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="#dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="#layouts">
                            <i class="iconsminds-digital-drawing"></i> Pages
                        </a>
                    </li>
                    <li class="active">
                        <a href="#applications">
                            <i class="iconsminds-air-balloon-1"></i> Applications
                        </a>
                    </li>
                    <li>
                        <a href="#ui">
                            <i class="iconsminds-pantone"></i> UI
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="iconsminds-three-arrow-fork"></i> Menu
                        </a>
                    </li>
                    <li>
                        <a href="Blank.Page.html">
                            <i class="iconsminds-bucket"></i> Blank Page
                        </a>
                    </li>
                    <li>
                        <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                            <i class="iconsminds-library"></i> Docs
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li>
                        <a href="Dashboard.Default.html">
                            <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Analytics.html">
                            <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Ecommerce.html">
                            <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Content.html">
                            <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Authorization</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Auth.Login.html">
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.Register.html">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.ForgotPassword.html">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Forgot
                                            Password</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"
                            aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Product</span>
                        </a>
                        <div id="collapseProduct" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Product.List.html">
                                        <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Data
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Thumbs.html">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Thumb
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Images.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Image
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Detail.html">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="true"
                            aria-controls="collapseProfile" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Profile</span>
                        </a>
                        <div id="collapseProfile" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Profile.Social.html">
                                        <i class="simple-icon-share"></i> <span class="d-inline-block">Social</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Profile.Portfolio.html">
                                        <i class="simple-icon-link"></i> <span class="d-inline-block">Portfolio</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
                            aria-controls="collapseBlog" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Blog</span>
                        </a>
                        <div id="collapseBlog" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Blog.html">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.html">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.Alt.html">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Detail
                                            Alt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMisc" aria-expanded="true"
                            aria-controls="collapseMisc" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Miscellaneous</span>
                        </a>
                        <div id="collapseMisc" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Misc.Coming.Soon.html">
                                        <i class="simple-icon-hourglass"></i> <span class="d-inline-block">Coming
                                            Soon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Error.html">
                                        <i class="simple-icon-exclamation"></i> <span
                                            class="d-inline-block">Error</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Faq.html">
                                        <i class="simple-icon-question"></i> <span class="d-inline-block">Faq</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Invoice.html">
                                        <i class="simple-icon-bag"></i> <span class="d-inline-block">Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Knowledge.Base.html">
                                        <i class="simple-icon-graduation"></i> <span class="d-inline-block">Knowledge
                                            Base</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Mailing.html">
                                        <i class="simple-icon-envelope-open"></i> <span
                                            class="d-inline-block">Mailing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Pricing.html">
                                        <i class="simple-icon-diamond"></i> <span class="d-inline-block">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Search.html">
                                        <i class="simple-icon-magnifier"></i> <span class="d-inline-block">Search</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="applications">
                    <li>
                        <a href="Apps.MediaLibrary.html">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Todo.List.html">
                            <i class="simple-icon-check"></i> <span class="d-inline-block">Todo</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Survey.List.html">
                            <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="Apps.Chat.html">
                            <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="ui">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
                            aria-controls="collapseForms" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Forms</span>
                        </a>
                        <div id="collapseForms" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Forms.Components.html">
                                        <i class="simple-icon-event"></i> <span class="d-inline-block">Components</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Layouts.html">
                                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Layouts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Validation.html">
                                        <i class="simple-icon-check"></i> <span class="d-inline-block">Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Wizard.html">
                                        <i class="simple-icon-magic-wand"></i> <span
                                            class="d-inline-block">Wizard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseDataTables" aria-expanded="true"
                            aria-controls="collapseDataTables" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Datatables</span>
                        </a>
                        <div id="collapseDataTables" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Datatables.Rows.html">
                                        <i class="simple-icon-screen-desktop"></i> <span class="d-inline-block">Full
                                            Page UI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Scroll.html">
                                        <i class="simple-icon-mouse"></i> <span class="d-inline-block">Scrollable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Pagination.html">
                                        <i class="simple-icon-notebook"></i> <span
                                            class="d-inline-block">Pagination</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Default.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Default</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="true"
                            aria-controls="collapseComponents" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Components</span>
                        </a>
                        <div id="collapseComponents" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Components.Alerts.html">
                                        <i class="simple-icon-bell"></i> <span class="d-inline-block">Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Badges.html">
                                        <i class="simple-icon-badge"></i> <span class="d-inline-block">Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Buttons.html">
                                        <i class="simple-icon-control-play"></i> <span
                                            class="d-inline-block">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Cards.html">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Cards</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.Carousel.html">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Carousel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Charts.html">
                                        <i class="simple-icon-chart"></i> <span class="d-inline-block">Charts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Collapse.html">
                                        <i class="simple-icon-arrow-up"></i> <span
                                            class="d-inline-block">Collapse</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Dropdowns.html">
                                        <i class="simple-icon-arrow-down"></i> <span
                                            class="d-inline-block">Dropdowns</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Editors.html">
                                        <i class="simple-icon-book-open"></i> <span
                                            class="d-inline-block">Editors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Icons.html">
                                        <i class="simple-icon-star"></i> <span class="d-inline-block">Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.InputGroups.html">
                                        <i class="simple-icon-note"></i> <span class="d-inline-block">Input
                                            Groups</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Jumbotron.html">
                                        <i class="simple-icon-screen-desktop"></i> <span
                                            class="d-inline-block">Jumbotron</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Modal.html">
                                        <i class="simple-icon-docs"></i> <span class="d-inline-block">Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Navigation.html">
                                        <i class="simple-icon-cursor"></i> <span
                                            class="d-inline-block">Navigation</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.PopoverandTooltip.html">
                                        <i class="simple-icon-pin"></i> <span class="d-inline-block">Popover &
                                            Tooltip</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Sortable.html">
                                        <i class="simple-icon-shuffle"></i> <span class="d-inline-block">Sortable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Tables.html">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

                <ul class="list-unstyled" data-link="menu" id="menuTypes">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                            aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                        </a>
                        <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Menu.Default.html">
                                        <i class="simple-icon-control-pause"></i> <span
                                            class="d-inline-block">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Subhidden.html">
                                        <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                            class="d-inline-block">Subhidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Hidden.html">
                                        <i class="simple-icon-control-start mi-hidden"></i> <span
                                            class="d-inline-block">Hidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Mainhidden.html">
                                        <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                            class="d-inline-block">Mainhidden</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                            aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                        </a>
                        <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                        aria-expanded="true" aria-controls="collapseMenuLevel2"
                                        class="rotate-arrow-icon collapsed">
                                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                    </a>
                                    <div id="collapseMenuLevel2" class="collapse">
                                        <ul class="list-unstyled inner-level-menu">
                                            <li>
                                                <a href="#">
                                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                            aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                        </a>
                        <div id="collapseMenuDetached" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid">
            <div class="row app-row">
                <div class="col-12 chat-app">
                    <div class="d-flex flex-row justify-content-between mb-3 chat-heading-container">
                        <div class="d-flex flex-row chat-heading">
                            <a class="d-flex" href="#">
                                <img alt="Profile Picture" src="img/profiles/l-1.jpg"
                                    class="img-thumbnail border-0 rounded-circle ml-0 mr-4 list-thumbnail align-self-center small">
                            </a>
                            <div class=" d-flex min-width-zero">
                                <div
                                    class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                    <div class="min-width-zero">
                                        <a href="#">
                                            <p class="list-item-heading mb-1 truncate ">Sarah Kortney</p>
                                        </a>
                                        <p class="mb-0 text-muted text-small">Last seen today 01:24</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="separator mb-5"></div>

                    <div class="scroll">
                        <div class="scroll-content">
                            <div class="card d-inline-block mb-3 float-left mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:25</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="img/profiles/l-1.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 truncate list-item-heading">Sarah Kortney</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            What do you think about our plans for this product launch?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-left mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:28</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="img/profiles/l-1.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class=" d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 truncate list-item-heading">Sarah Kortney</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            It looks to me like you have a lot planned before your deadline. I would
                                            suggest you push your deadline back so you have
                                            time to run a successful advertising campaign.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-left mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:30</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="img/profiles/l-1.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 truncate list-item-heading">Sarah Kortney</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            How do you think we should move forward with this project? As you know, we
                                            are
                                            expected to present it to our clients next
                                            week. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right  mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I would suggest you discuss this further with the advertising team.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right  mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I am very busy at the moment and on top of everything, I forgot my umbrella
                                            today.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card d-inline-block mb-3 float-right mr-2">
                                <div class="position-absolute pt-1 pr-2 r-0">
                                    <span class="text-extra-small text-muted">09:41</span>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row pb-2">
                                        <a class="d-flex" href="#">
                                            <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                                class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                        </a>
                                        <div class="d-flex flex-grow-1 min-width-zero">
                                            <div
                                                class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                <div class="min-width-zero">
                                                    <p class="mb-0 list-item-heading truncate">Mimi Carreira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="chat-text-left">
                                        <p class="mb-0 text-semi-muted">
                                            I am very busy at the moment and on top of everything, I forgot my umbrella
                                            today.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="app-menu">
            <ul class="nav nav-tabs card-header-tabs ml-0 mr-0 mb-1" role="tablist">
                <li class="nav-item w-50 text-center">
                    <a class="nav-link active" id="first-tab" data-toggle="tab" href="#firstFull" role="tab"
                        aria-selected="true">Messages</a>
                </li>
                <li class="nav-item w-50 text-center">
                    <a class="nav-link" id="second-tab" data-toggle="tab" href="#secondFull" role="tab"
                        aria-selected="false">Contacts</a>
                </li>
            </ul>

            <div class="p-4 h-100">
                <div class="form-group">
                    <input type="text" class="form-control rounded" placeholder="Search">
                </div>
                <div class="tab-content h-100">
                    <div class="tab-pane fade show active  h-100" id="firstFull" role="tabpanel"
                        aria-labelledby="first-tab">

                        <div class="scroll">

                            <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-1.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class=" mb-0 truncate">Sarah Kortney</p>
                                            </a>
                                            <p class="mb-1 text-muted text-small">14:20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-2.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class=" mb-0 truncate">Rasheeda Vaquera</p>
                                            </a>
                                            <p class="mb-1 text-muted text-small">11:10</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-1 border-bottom pb-3 mb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-3.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class=" mb-0 truncate">Shelia Otterson</p>
                                            </a>
                                            <p class="mb-1 text-muted text-small">09:50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-1  pb-3 mb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class=" mb-0 truncate">Latarsha Gama</p>
                                            </a>
                                            <p class="mb-1 text-muted text-small">09:10</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade  h-100" id="secondFull" role="tabpanel" aria-labelledby="second-tab">
                        <div class="scroll">

                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-1.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Sarah Kortney</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-2.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Williemae Lagasse</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-3.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Tommy Nash</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Mayra Sibley</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-5.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Kathryn Mengel</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-2.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Williemae Lagasse</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-3.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Tommy Nash</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Mayra Sibley</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-3.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Tommy Nash</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Mayra Sibley</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-5.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Kathryn Mengel</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-2.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Williemae Lagasse</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 border-bottom pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-3.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Tommy Nash</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3">
                                <a class="d-flex" href="#">
                                    <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                        class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                </a>
                                <div class="d-flex flex-grow-1 min-width-zero">
                                    <div
                                        class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                        <div class="min-width-zero">
                                            <a href="#">
                                                <p class="mb-0 truncate">Mayra Sibley</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-options"></i>
            </a>
        </div>

        <div class="chat-input-container d-flex justify-content-between align-items-center">
            <input class="form-control flex-grow-1" type="text" placeholder="Say something...">
            <div>
                <button type="button" class="btn btn-outline-primary icon-button large">
                    <i class="simple-icon-paper-clip"></i>
                </button>
                <button type="button" class="btn btn-primary icon-button large">
                    <i class="simple-icon-arrow-right"></i>
                </button>

            </div>
        </div>
    </main>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
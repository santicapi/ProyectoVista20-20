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
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
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
                    <li>
                        <a href="#applications">
                            <i class="iconsminds-air-balloon-1"></i> Applications
                        </a>
                    </li>
                    <li class="active">
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
                    <li>
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
                                <li class="active">
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
            <div class="row">
                <div class="col-12">

                    <h1>Modal</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Basic</h5>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                Launch Demo Modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Scrolling Long Content
                            </h5>

                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Launch Demo Modal
                            </button>

                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in ex
                                            imperdiet magna dignissim porta in vel ipsum. Cras et
                                            lectus vel magna eleifend faucibus. Proin aliquam fermentum lacus, sit amet
                                            molestie
                                            ante aliquet nec. Nunc interdum, ante non lobortis feugiat, quam quam
                                            ornare
                                            nunc, tempus dictum neque odio sed augue. Suspendisse tincidunt tristique
                                            laoreet.
                                            Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                            ridiculus
                                            mus. Aenean condimentum est sit amet justo semper molestie. Integer
                                            placerat
                                            nulla id tortor molestie, sed laoreet est ornare. Morbi non velit nec purus
                                            accumsan
                                            commodo et sed nisi. Maecenas sit amet purus scelerisque neque luctus
                                            congue.
                                            <br> Nam consequat nunc neque, nec bibendum ante mollis nec. Cras porta
                                            ante a ex
                                            condimentum imperdiet. Cras vehicula velit in erat semper, sed bibendum
                                            ligula
                                            vehicula. Fusce hendrerit orci arcu, ut posuere dui volutpat at. Vivamus
                                            condimentum
                                            porttitor ultricies. Quisque at metus sit amet ipsum convallis lacinia.
                                            Nulla
                                            elementum ligula eget velit viverra condimentum. Vestibulum pulvinar enim
                                            mattis
                                            pharetra tristique. Donec hendrerit vitae lorem at malesuada. Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit. Nulla a diam eu sem gravida
                                            ultrices.
                                            <br> Nam quis semper est. Vestibulum sodales tortor eget arcu varius, id
                                            venenatis
                                            leo sollicitudin. Suspendisse potenti. Duis elementum nibh eget felis
                                            elementum
                                            condimentum. Donec vestibulum augue dapibus, eleifend risus quis, placerat
                                            sapien.
                                            Maecenas eu gravida quam. Cras in faucibus nibh, quis pellentesque sapien.
                                            Aliquam
                                            congue venenatis dui, ut lobortis sem pulvinar pellentesque. Maecenas est
                                            ante,
                                            lacinia quis ultrices nec, varius sed leo. Maecenas ultrices erat tincidunt
                                            neque
                                            faucibus, eget auctor elit facilisis. Etiam mi diam, pretium non tincidunt
                                            in,
                                            sagittis in purus. Aliquam iaculis nunc mi, vel elementum elit feugiat a.
                                            Morbi
                                            euismod diam elit, ac maximus nibh mattis sit amet.
                                            <br> Praesent eu tellus nunc. Fusce id gravida massa, nec mattis magna.
                                            Mauris in
                                            libero ut dui efficitur pretium sed nec purus. Aenean vel rutrum massa, vel
                                            blandit
                                            lectus. Vestibulum vitae vehicula felis. Aliquam ut quam dictum, vulputate
                                            felis
                                            id, iaculis augue. Fusce finibus quam arcu, eget laoreet nibh pharetra ac.
                                            Duis
                                            euismod lorem quis massa condimentum, ac suscipit enim accumsan. Aenean
                                            rhoncus
                                            nec ipsum eu malesuada. Nunc nec vehicula eros, ac aliquam felis.
                                            <br> Nunc elementum justo odio, at porta lacus facilisis non. Quisque
                                            placerat lacinia
                                            nibh, laoreet pretium tortor porta vel. Maecenas quis lacinia augue. In
                                            porttitor
                                            neque bibendum consequat sagittis. Nunc consectetur erat quis nulla
                                            fermentum,
                                            malesuada tristique felis viverra. Mauris vehicula et ex sit amet dapibus.
                                            Mauris
                                            sit amet tellus vel quam volutpat condimentum at vel risus. Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit. Maecenas eu ornare massa. Sed vel
                                            aliquam
                                            tortor. Sed interdum suscipit venenatis. Quisque sit amet fringilla diam.
                                            Donec
                                            tincidunt ante sit amet arcu fermentum pulvinar.
                                            <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in ex
                                            imperdiet
                                            magna dignissim porta in vel ipsum. Cras et lectus vel magna eleifend
                                            faucibus.
                                            Proin aliquam fermentum lacus, sit amet molestie ante aliquet nec. Nunc
                                            interdum,
                                            ante non lobortis feugiat, quam quam ornare nunc, tempus dictum neque odio
                                            sed
                                            augue. Suspendisse tincidunt tristique laoreet. Orci varius natoque
                                            penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Aenean condimentum
                                            est
                                            sit amet justo semper molestie. Integer placerat nulla id tortor molestie,
                                            sed
                                            laoreet est ornare. Morbi non velit nec purus accumsan commodo et sed nisi.
                                            Maecenas
                                            sit amet purus scelerisque neque luctus congue.
                                            <br> Nam consequat nunc neque, nec bibendum ante mollis nec. Cras porta
                                            ante a ex
                                            condimentum imperdiet. Cras vehicula velit in erat semper, sed bibendum
                                            ligula
                                            vehicula. Fusce hendrerit orci arcu, ut posuere dui volutpat at. Vivamus
                                            condimentum
                                            porttitor ultricies. Quisque at metus sit amet ipsum convallis lacinia.
                                            Nulla
                                            elementum ligula eget velit viverra condimentum. Vestibulum pulvinar enim
                                            mattis
                                            pharetra tristique. Donec hendrerit vitae lorem at malesuada. Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit. Nulla a diam eu sem gravida
                                            ultrices.
                                            <br> Nam quis semper est. Vestibulum sodales tortor eget arcu varius, id
                                            venenatis
                                            leo sollicitudin. Suspendisse potenti. Duis elementum nibh eget felis
                                            elementum
                                            condimentum. Donec vestibulum augue dapibus, eleifend risus quis, placerat
                                            sapien.
                                            Maecenas eu gravida quam. Cras in faucibus nibh, quis pellentesque sapien.
                                            Aliquam
                                            congue venenatis dui, ut lobortis sem pulvinar pellentesque. Maecenas est
                                            ante,
                                            lacinia quis ultrices nec, varius sed leo. Maecenas ultrices erat tincidunt
                                            neque
                                            faucibus, eget auctor elit facilisis. Etiam mi diam, pretium non tincidunt
                                            in,
                                            sagittis in purus. Aliquam iaculis nunc mi, vel elementum elit feugiat a.
                                            Morbi
                                            euismod diam elit, ac maximus nibh mattis sit amet.
                                            <br> Praesent eu tellus nunc. Fusce id gravida massa, nec mattis magna.
                                            Mauris in
                                            libero ut dui efficitur pretium sed nec purus. Aenean vel rutrum massa, vel
                                            blandit
                                            lectus. Vestibulum vitae vehicula felis. Aliquam ut quam dictum, vulputate
                                            felis
                                            id, iaculis augue. Fusce finibus quam arcu, eget laoreet nibh pharetra ac.
                                            Duis
                                            euismod lorem quis massa condimentum, ac suscipit enim accumsan. Aenean
                                            rhoncus
                                            nec ipsum eu malesuada. Nunc nec vehicula eros, ac aliquam felis.
                                            <br> Nunc elementum justo odio, at porta lacus facilisis non. Quisque
                                            placerat lacinia
                                            nibh, laoreet pretium tortor porta vel. Maecenas quis lacinia augue. In
                                            porttitor
                                            neque bibendum consequat sagittis. Nunc consectetur erat quis nulla
                                            fermentum,
                                            malesuada tristique felis viverra. Mauris vehicula et ex sit amet dapibus.
                                            Mauris
                                            sit amet tellus vel quam volutpat condimentum at vel risus. Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit. Maecenas eu ornare massa. Sed vel
                                            aliquam
                                            tortor. Sed interdum suscipit venenatis. Quisque sit amet fringilla diam.
                                            Donec
                                            tincidunt ante sit amet arcu fermentum pulvinar.
                                            <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in ex
                                            imperdiet
                                            magna dignissim porta in vel ipsum. Cras et lectus vel magna eleifend
                                            faucibus.
                                            Proin aliquam fermentum lacus, sit amet molestie ante aliquet nec. Nunc
                                            interdum,
                                            ante non lobortis feugiat, quam quam ornare nunc, tempus dictum neque odio
                                            sed
                                            augue. Suspendisse tincidunt tristique laoreet. Orci varius natoque
                                            penatibus
                                            et magnis dis parturient montes, nascetur ridiculus mus. Aenean condimentum
                                            est
                                            sit amet justo semper molestie. Integer placerat nulla id tortor molestie,
                                            sed
                                            laoreet est ornare. Morbi non velit nec purus accumsan commodo et sed nisi.
                                            Maecenas
                                            sit amet purus scelerisque neque luctus congue.
                                            <br> Nam consequat nunc neque, nec bibendum ante mollis nec. Cras porta
                                            ante a ex
                                            condimentum imperdiet. Cras vehicula velit in erat semper, sed bibendum
                                            ligula
                                            vehicula. Fusce hendrerit orci arcu, ut posuere dui volutpat at. Vivamus
                                            condimentum
                                            porttitor ultricies. Quisque at metus sit amet ipsum convallis lacinia.
                                            Nulla
                                            elementum ligula eget velit viverra condimentum. Vestibulum pulvinar enim
                                            mattis
                                            pharetra tristique. Donec hendrerit vitae lorem at malesuada. Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit. Nulla a diam eu sem gravida
                                            ultrices.
                                            <br> Nam quis semper est. Vestibulum sodales tortor eget arcu varius, id
                                            venenatis
                                            leo sollicitudin. Suspendisse potenti. Duis elementum nibh eget felis
                                            elementum
                                            condimentum. Donec vestibulum augue dapibus, eleifend risus quis, placerat
                                            sapien.
                                            Maecenas eu gravida quam. Cras in faucibus nibh, quis pellentesque sapien.
                                            Aliquam
                                            congue venenatis dui, ut lobortis sem pulvinar pellentesque. Maecenas est
                                            ante,
                                            lacinia quis ultrices nec, varius sed leo. Maecenas ultrices erat tincidunt
                                            neque
                                            faucibus, eget auctor elit facilisis. Etiam mi diam, pretium non tincidunt
                                            in,
                                            sagittis in purus. Aliquam iaculis nunc mi, vel elementum elit feugiat a.
                                            Morbi
                                            euismod diam elit, ac maximus nibh mattis sit amet.
                                            <br> Praesent eu tellus nunc. Fusce id gravida massa, nec mattis magna.
                                            Mauris in
                                            libero ut dui efficitur pretium sed nec purus. Aenean vel rutrum massa, vel
                                            blandit
                                            lectus. Vestibulum vitae vehicula felis. Aliquam ut quam dictum, vulputate
                                            felis
                                            id, iaculis augue. Fusce finibus quam arcu, eget laoreet nibh pharetra ac.
                                            Duis
                                            euismod lorem quis massa condimentum, ac suscipit enim accumsan. Aenean
                                            rhoncus
                                            nec ipsum eu malesuada. Nunc nec vehicula eros, ac aliquam felis.
                                            <br> Nunc elementum justo odio, at porta lacus facilisis non. Quisque
                                            placerat lacinia
                                            nibh, laoreet pretium tortor porta vel. Maecenas quis lacinia augue. In
                                            porttitor
                                            neque bibendum consequat sagittis. Nunc consectetur erat quis nulla
                                            fermentum,
                                            malesuada tristique felis viverra. Mauris vehicula et ex sit amet dapibus.
                                            Mauris
                                            sit amet tellus vel quam volutpat condimentum at vel risus. Lorem ipsum
                                            dolor
                                            sit amet, consectetur adipiscing elit. Maecenas eu ornare massa. Sed vel
                                            aliquam
                                            tortor. Sed interdum suscipit venenatis. Quisque sit amet fringilla diam.
                                            Donec
                                            tincidunt ante sit amet arcu fermentum pulvinar.
                                            <br>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Tooltips and Popovers</h5>

                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#exampleModalPopovers">
                                Launch Demo Modal
                            </button>


                            <div id="exampleModalPopovers" class="modal fade show" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Popover in a modal</h5>
                                            <p>This
                                                <a href="#" role="button" data-toggle="popover"
                                                    class="btn btn-secondary btn-sm popover-test" title=""
                                                    data-content="Popover body content is set in this attribute."
                                                    data-container="#exampleModalPopovers"
                                                    data-original-title="Popover title">button</a>
                                                triggers a popover on click.</p>
                                            <hr>
                                            <h5>Tooltips in a modal</h5>
                                            <p>
                                                <a href="#" class="tooltip-test" title="" data-toggle="tooltip"
                                                    data-container="#exampleModalPopovers"
                                                    data-original-title="Tooltip">This
                                                    link</a> and
                                                <a href="#" class="tooltip-test" title="" data-toggle="tooltip"
                                                    data-container="#exampleModalPopovers"
                                                    data-original-title="Tooltip">that
                                                    link</a> have tooltips on hover.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>












                        </div>
                    </div>




                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Using the Grid</h5>

                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#exampleModalGrid">
                                Launch Demo Modal
                            </button>

                            <div id="exampleModalGrid" class="modal fade show" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalGridLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-4 border">.col-md-4</div>
                                                    <div class="col-md-4 ml-auto border">.col-md-4 .ml-auto</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 ml-auto  border">.col-md-3 .ml-auto</div>
                                                    <div class="col-md-2 ml-auto  border">.col-md-2 .ml-auto</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 ml-auto  border">.col-md-6 .ml-auto</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-9  border">
                                                        Level 1: .col-sm-9
                                                        <div class="row">
                                                            <div class="col-8 col-sm-6  border">
                                                                Level 2: .col-8 .col-sm-6
                                                            </div>
                                                            <div class="col-4 col-sm-6  border">
                                                                Level 2: .col-4 .col-sm-6
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>





                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Varying Modal Content</h5>

                            <button type="button" class="btn btn-outline-primary mb-2" data-toggle="modal"
                                data-target="#exampleModalContent" data-whatever="@mdo">Open modal for @mdo</button>
                            <button type="button" class="btn btn-outline-primary mb-2" data-toggle="modal"
                                data-target="#exampleModalContent" data-whatever="@fat">Open modal for @fat</button>
                            <button type="button" class="btn btn-outline-primary mb-2" data-toggle="modal"
                                data-target="#exampleModalContent" data-whatever="@getbootstrap">Open modal for
                                @getbootstrap</button>

                            <div class="modal fade" id="exampleModalContent" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalContentLabel">New message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Recipient:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Size</h5>

                            <button type="button" class="btn btn-outline-primary mb-2" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Large
                                modal</button>

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-outline-primary mb-2" data-toggle="modal"
                                data-target=".bd-example-modal-sm">Small
                                modal</button>

                            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Right Modal</h5>

                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-backdrop="static" data-target="#exampleModalRight">Right Modal</button>

                            <div class="modal fade modal-right" id="exampleModalRight" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalRight" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Details</label>
                                                    <textarea placeholder="" class="form-control" rows="2"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control">
                                                        <option label="&nbsp;">&nbsp;</option>
                                                        <option value="Flexbox">Flexbox</option>
                                                        <option value="Sass">Sass</option>
                                                        <option value="React">React</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck1">
                                                        <label class="custom-control-label"
                                                            for="customCheck1">Completed</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-primary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Left Modal</h5>

                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-backdrop="static" data-target="#exampleModalLeft">Left Modal</button>

                            <div class="modal fade modal-left" id="exampleModalLeft" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLeft" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add New</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form>
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Details</label>
                                                    <textarea placeholder="" class="form-control" rows="2"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select class="form-control">
                                                        <option label="&nbsp;">&nbsp;</option>
                                                        <option value="Flexbox">Flexbox</option>
                                                        <option value="Sass">Sass</option>
                                                        <option value="React">React</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck1">
                                                        <label class="custom-control-label"
                                                            for="customCheck1">Completed</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-primary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>
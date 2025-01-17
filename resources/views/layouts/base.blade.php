<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    
<!-- Mirrored from learnplus.demo.frontendmatter.com/fixed-student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 12:54:52 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @yield('title')

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{asset('dashboard/assets/vendor/perfect-scrollbar.css')}}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{asset('dashboard/assets/css/material-icons.css')}}"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="{{asset('dashboard/assets/css/fontawesome.css')}}"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{asset('dashboard/assets/vendor/spinkit.css')}}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{asset('dashboard/assets/css/app.css')}}"
              rel="stylesheet">

    </head>

    <body class=" fixed-layout">

        <div class="preloader bg-danger">
            <div class="sk-chase bg-danger">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>


            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header bg-dark js-mdk-header m-0"
                 data-fixed
                 data-effects="waterfall">
                <div class="mdk-header__content">

                    <!-- Navbar -->
                    <nav id="default-navbar"
                         class="navbar navbar-expand navbar-danger bg-white m-0">
                        <div class="container">
                            <!-- Toggle sidebar -->
                            <button class="navbar-toggler d-block"
                                    data-toggle="sidebar"
                                    type="button">
                                <span class="material-icons">menu</span>
                            </button>

                            <!-- Brand -->
                            <a href="{{route('dashboard')}}"
                               class="navbar-brand">
                               <img width="8%" style="border-radius: 50%;margin:0.5%;" src="{{asset('assets/images/logo/maisha1.png')}}"
                               class="mr-2"
                               alt="Hello" />
                                
                            </a>

                    

                            <div class="flex"></div>

                            <!-- Menu -->
                            <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex">
                                <li class="nav-item">
                                    <a class="nav-link text-danger"
                                       href="{{route('forums')}}">Forum</a>
                                </li>
                            </ul>

                            <!-- Menu -->
                            <ul class="nav navbar-nav flex-nowrap">

                             

                                <!-- Notifications dropdown -->
                                <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                                    <button class="nav-link btn-flush dropdown-toggle text-black"
                                            type="button"
                                            data-toggle="dropdown"
                                            data-dropdown-disable-document-scroll
                                            data-caret="false">
                                        <i class="material-icons">notifications</i>
                                        <span class="badge badge-notifications badge-danger">2</span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div data-perfect-scrollbar
                                             class="position-relative">
                                            <div class="dropdown-header"><strong>Messages</strong></div>
                                            <div class="list-group list-group-flush mb-0">

                                                <a href="fixed-student-messages.html"
                                                   class="list-group-item list-group-item-action unread">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 minutes ago</small>

                                                        <span class="ml-auto unread-indicator bg-primary"></span>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Michelle</strong>
                                                            <span class="text-black-70">Clients loved the new design.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="fixed-student-messages.html"
                                                   class="list-group-item list-group-item-action unread">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 minutes ago</small>

                                                        <span class="ml-auto unread-indicator bg-primary"></span>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <img src="assets/images/people/110/woman-5.jpg"
                                                                 alt="people"
                                                                 class="avatar-img rounded-circle">
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Michelle</strong>
                                                            <span class="text-black-70">🔥 Superb job..</span>
                                                        </span>
                                                    </span>
                                                </a>

                                            </div>

                                            <div class="dropdown-header"><strong>System notifications</strong></div>
                                            <div class="list-group list-group-flush mb-0">

                                                <a href="fixed-student-messages.html"
                                                   class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">3 minutes ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="fixed-student-messages.html"
                                                   class="list-group-item list-group-item-action">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">5 hours ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-success">group_add</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">
                                                            <strong>Adrian. D</strong>
                                                            <span class="text-black-70">Wants to join your private group.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                                <a href="fixed-student-messages.html"
                                                   class="list-group-item list-group-item-action">
                                                    <span class="d-flex align-items-center mb-1">
                                                        <small class="text-muted">1 day ago</small>

                                                    </span>
                                                    <span class="d-flex">
                                                        <span class="avatar avatar-xs mr-2">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <i class="material-icons font-size-16pt text-warning">storage</i>
                                                            </span>
                                                        </span>
                                                        <span class="flex d-flex flex-column">

                                                            <span class="text-black-70">Your deploy was successful.</span>
                                                        </span>
                                                    </span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- // END Notifications dropdown -->
                                <!-- User dropdown -->
                                <li class="nav-item dropdown ml-1 ml-md-3">
                                    <a class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       href="#"
                                       role="button"><img src="{{asset('dashboard/assets/images/people/50/guy-6.jpg')}}"
                                             alt="Avatar"
                                             class="rounded-circle"
                                             width="40"></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"
                                           href="fixed-student-account-edit.html">
                                            <i class="material-icons">edit</i> Edit Account
                                        </a>
                                        <a class="dropdown-item"
                                           href="fixed-student-profile.html">
                                            <i class="material-icons">person</i> Public Profile
                                        </a>
                                        <a class="dropdown-item"
                                           href="guest-login.html">
                                            <i class="material-icons">lock</i> Logout
                                        </a>
                                    </div>
                                </li>
                                <!-- // END User dropdown -->

                            </ul>
                            <!-- // END Menu -->
                        </div>
                    </nav>
                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content d-flex flex-column">


                <div class="page ">
                    @yield('content')
                  
                </div>
            </div>
            <!-- // END Header Layout Content -->

        </div>
        <!-- // END Header Layout -->

        <div class="mdk-drawer js-mdk-drawer"
             id="default-drawer">
            <div class="mdk-drawer__content ">
                {{-- <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
                     data-perfect-scrollbar>
                    <div class="sidebar-p-y">
                        <div class="sidebar-heading">APPLICATIONS</div>
                        <ul class="sidebar-menu sm-active-button-bg">
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-dashboard.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Student
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="fixed-instructor-dashboard.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Instructor
                                </a>
                            </li>
                        </ul>
                        <!-- Account menu -->
                        <div class="sidebar-heading">Account</div>
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button sidebar-js-collapse"
                                   data-toggle="collapse"
                                   href="#account_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                    Account
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu sm-indent collapse"
                                    id="account_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="guest-login.html">
                                            <span class="sidebar-menu-text">Login</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="guest-signup.html">
                                            <span class="sidebar-menu-text">Sign Up</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="guest-forgot-password.html">
                                            <span class="sidebar-menu-text">Forgot Password</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-account-edit.html">
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-account-edit-basic.html">
                                            <span class="sidebar-menu-text">Basic Information</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-account-edit-profile.html">
                                            <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-account-billing-subscription.html">
                                            <span class="sidebar-menu-text">Subscription</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-account-billing-upgrade.html">
                                            <span class="sidebar-menu-text">Upgrade Account</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-account-billing-payment-information.html">
                                            <span class="sidebar-menu-text">Payment Information</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-billing.html">
                                            <span class="sidebar-menu-text">Payment History</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-invoice.html">
                                            <span class="sidebar-menu-text">Student Invoice</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-instructor-invoice.html">
                                            <span class="sidebar-menu-text">Instructor Invoice</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-instructor-edit-invoice.html">
                                            <span class="sidebar-menu-text">Edit Invoice</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#messages_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i> Messages
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu sm-indent collapse"
                                    id="messages_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-messages.html">
                                            <span class="sidebar-menu-text">Conversation</span>
                                            <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-messages-2.html">
                                            <span class="sidebar-menu-text">Conversation - 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="sidebar-heading">Student</div>
                        <ul class="sidebar-menu sm-active-button-bg">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-browse-courses.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i> Browse Courses
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-view-course.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> View Course
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-take-course.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">class</i> Take Course
                                    <span class="sidebar-menu-badge badge badge-primary ml-auto">PRO</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-take-quiz.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Take a Quiz
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-quiz-results.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">poll</i> Quiz Results
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-my-courses.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> My Courses
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   data-toggle="collapse"
                                   href="#forum_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                    Community
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu sm-indent collapse"
                                    id="forum_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-forum.html">
                                            <span class="sidebar-menu-text">Forum</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-forum-thread.html">
                                            <span class="sidebar-menu-text">Discussion</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-forum-ask.html">
                                            <span class="sidebar-menu-text">Ask Question</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-profile.html">
                                            <span class="sidebar-menu-text">Student Profile - Courses</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-student-profile-posts.html">
                                            <span class="sidebar-menu-text">Student Profile - Posts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-instructor-profile.html">
                                            <span class="sidebar-menu-text">Instructor Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-help-center.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Get Help
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="guest-login.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                                </a>
                            </li>
                        </ul>
                        <!-- Components menu -->
                        <div class="sidebar-heading">Components</div>
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button sidebar-js-collapse"
                                   data-toggle="collapse"
                                   href="#components_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                    Components
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu sm-indent collapse"
                                    id="components_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-avatars.html">
                                            <span class="sidebar-menu-text">Avatars</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-forms.html">
                                            <span class="sidebar-menu-text">Forms</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-loaders.html">
                                            <span class="sidebar-menu-text">Loaders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-tables.html">
                                            <span class="sidebar-menu-text">Tables</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-cards.html">
                                            <span class="sidebar-menu-text">Cards</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-tabs.html">
                                            <span class="sidebar-menu-text">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-icons.html">
                                            <span class="sidebar-menu-text">Icons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-buttons.html">
                                            <span class="sidebar-menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-alerts.html">
                                            <span class="sidebar-menu-text">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-badges.html">
                                            <span class="sidebar-menu-text">Badges</span>
                                        </a>
                                    </li>
                                    <!-- <li class="sidebar-menu-item">
        
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-progress.html">
                                            <span class="sidebar-menu-text">Progress Bars</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-pagination.html">
                                            <span class="sidebar-menu-text">Pagination</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button sidebar-js-collapse"
                                   data-toggle="collapse"
                                   href="#plugins_menu">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder</i>
                                    Plugins
                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                </a>
                                <ul class="sidebar-submenu sm-indent collapse"
                                    id="plugins_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-charts.html">
                                            <span class="sidebar-menu-text">Charts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-drag.html">
                                            <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-calendar.html">
                                            <span class="sidebar-menu-text">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-nestable.html">
                                            <span class="sidebar-menu-text">Nestable</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-tree.html">
                                            <span class="sidebar-menu-text">Tree</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-maps-vector.html">
                                            <span class="sidebar-menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="fixed-ui-sweet-alert.html">
                                            <span class="sidebar-menu-text">Sweet Alert</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- // END Components Menu -->

                        <div class="sidebar-heading">Layout</div>
                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="student-dashboard.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                </a>
                            </li>
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button"
                                   href="fixed-student-dashboard.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fixed Layout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
                data-perfect-scrollbar>
               <div class="sidebar-p-y">
                   @if (Auth::user()->role_id==1)
                   <div class="sidebar-heading">User</div>
                   <ul class="sidebar-menu sm-active-button-bg">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="{{route('courses')}}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i> Browse Courses
                        </a>
                    </li>
                   </ul>
                   <!-- Account menu -->
                   
                   <div class="sidebar-heading">Courses</div>
                   <ul class="sidebar-menu sm-active-button-bg">
                       
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                              href="{{route('mycourses')}}">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">important_devices</i> My Videos
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                              href="{{route('quizresults')}}">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">poll</i> Quiz Results
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                        href="{{route('forums')}}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">message</i> Forum
                        </a>
                    </li>
                       
                   </ul>
                   <!-- Components menu -->
                   <div class="sidebar-heading">Actions</div>
                   <ul class="sidebar-menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                           </a>
                       
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                       </li>
                   </ul>
                   @elseif(Auth::user()->role_id==2)
                   <div class="sidebar-heading">User</div>
                   <ul class="sidebar-menu sm-active-button-bg">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button"
                           href="{{route('coursemanager')}}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Course Manager
                        </a>
                    </li>
                   </ul>
                   <!-- Account menu -->
                   
                   <div class="sidebar-heading">Courses</div>
                   <ul class="sidebar-menu sm-active-button-bg">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                              href="{{route('categories')}}">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">list</i> Categories
                           </a>
                       </li>
                       
                      
                   </ul>
                   <!-- Components menu -->
                   <div class="sidebar-heading">Actions</div>
                   <ul class="sidebar-menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                           </a>
                       
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                       </li>
                   </ul>
                   @elseif(Auth::user()->role_id==0)
                   <div class="sidebar-heading">User</div>
                   <ul class="sidebar-menu sm-active-button-bg">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                              href="{{route('dashboard')}}">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Admin
                           </a>
                       </li>
                   </ul>
                   <!-- Account menu -->
                   
                   <div class="sidebar-heading">Courses</div>
                   <ul class="sidebar-menu sm-active-button-bg">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                              href="{{route('coursemanager')}}">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> Course Manager
                           </a>
                       </li>
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                              href="{{route('categories')}}">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">list</i>Users
                           </a>
                       </li>
                       
                      
                   </ul>
                   <!-- Components menu -->
                   <div class="sidebar-heading">Actions</div>
                   <ul class="sidebar-menu">
                       <li class="sidebar-menu-item">
                           <a class="sidebar-menu-button"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                               <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                           </a>
                       
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                       </li>
                   </ul>
                   @endif
                   
               </div>
           </div>
            </div>
        </div>

        <!-- App Settings FAB -->
        
        <!-- jQuery -->
        <script src="{{asset('dashboard/assets/vendor/jquery.min.js')}}"></script>

        <!-- Bootstrap -->
        <script src="{{asset('dashboard/assets/vendor/popper.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/vendor/bootstrap.min.js')}}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{asset('dashboard/assets/vendor/perfect-scrollbar.min.js')}}"></script>

        <!-- MDK -->
        <script src="{{asset('dashboard/assets/vendor/dom-factory.js')}}"></script>
        <script src="{{asset('dashboard/assets/vendor/material-design-kit.js')}}"></script>

        <!-- App JS -->
        <script src="{{asset('dashboard/assets/js/app.js')}}"></script>

        <!-- Highlight.js -->
        <script src="{{asset('dashboard/assets/js/hljs.js')}}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{asset('dashboard/assets/js/app-settings.js')}}"></script>

        <!-- Global Settings -->
        <script src="{{asset('dashboard/assets/js/settings.js')}}"></script>

        <!-- Moment.js -->
        <script src="{{asset('dashboard/assets/vendor/moment.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/vendor/moment-range.js')}}"></script>

        <!-- Chart.js -->
        <script src="{{asset('dashboard/assets/vendor/Chart.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/chartjs.js')}}"></script>

        <!-- Student Dashboard Page JS -->
        <!-- <script src="'dashboard/assets/js/chartjs-rounded-bar.js')}}"></script> -->
        <script src="{{asset('dashboard/assets/js/page.student-dashboard.js')}}"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/fixed-student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 12:54:52 GMT -->
</html>
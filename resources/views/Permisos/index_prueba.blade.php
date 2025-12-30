<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accordion - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="./dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="./dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="./dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="./dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <div class="page">
        <!-- Navbar -->
        <header class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item d-none d-md-flex me-3">
                        <div class="btn-list">
                            <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                </svg>
                                Source code
                            </a>
                            <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>
                    <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                                <span class="badge bg-red"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Last updates</h3>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 1</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">
                                                        Change deprecated html tags to text decoration classes (#29604)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot d-block"></span></div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 2</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">
                                                        justify-content:between ⇒ justify-content:space-between (#29734)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions show">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot d-block"></span></div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 3</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">
                                                        Update change-version.js (#29736)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 4</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">
                                                        Regenerate package-lock.json (#29730)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Paweł Kuna</div>
                                <div class="mt-1 small text-secondary">UI Designer</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="#" class="dropdown-item">Status</a>
                            <a href="./profile.html" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="./settings.html" class="dropdown-item">Settings</a>
                            <a href="./sign-in.html" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar">
                    <div class="container-xl">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Home
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                            <path d="M12 12l8 -4.5" />
                                            <path d="M12 12l0 9" />
                                            <path d="M12 12l-8 -4.5" />
                                            <path d="M16 5.25l-8 4.5" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Interface
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./alerts.html">
                                                Alerts
                                            </a>
                                            <a class="dropdown-item active" href="./accordion.html">
                                                Accordion
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    Authentication
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./sign-in.html" class="dropdown-item">
                                                        Sign in
                                                    </a>
                                                    <a href="./sign-in-link.html" class="dropdown-item">
                                                        Sign in link
                                                    </a>
                                                    <a href="./sign-in-illustration.html" class="dropdown-item">
                                                        Sign in with illustration
                                                    </a>
                                                    <a href="./sign-in-cover.html" class="dropdown-item">
                                                        Sign in with cover
                                                    </a>
                                                    <a href="./sign-up.html" class="dropdown-item">
                                                        Sign up
                                                    </a>
                                                    <a href="./forgot-password.html" class="dropdown-item">
                                                        Forgot password
                                                    </a>
                                                    <a href="./terms-of-service.html" class="dropdown-item">
                                                        Terms of service
                                                    </a>
                                                    <a href="./auth-lock.html" class="dropdown-item">
                                                        Lock screen
                                                    </a>
                                                    <a href="./2-step-verification.html" class="dropdown-item">
                                                        2 step verification
                                                    </a>
                                                    <a href="./2-step-verification-code.html" class="dropdown-item">
                                                        2 step verification code
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="./blank.html">
                                                Blank page
                                            </a>
                                            <a class="dropdown-item" href="./badges.html">
                                                Badges
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./buttons.html">
                                                Buttons
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    Cards
                                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./cards.html" class="dropdown-item">
                                                        Sample cards
                                                    </a>
                                                    <a href="./card-actions.html" class="dropdown-item">
                                                        Card actions
                                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                                    </a>
                                                    <a href="./cards-masonry.html" class="dropdown-item">
                                                        Cards Masonry
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="./carousel.html">
                                                Carousel
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./charts.html">
                                                Charts
                                            </a>
                                            <a class="dropdown-item" href="./colors.html">
                                                Colors
                                            </a>
                                            <a class="dropdown-item" href="./colorpicker.html">
                                                Color picker
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./datagrid.html">
                                                Data grid
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./datatables.html">
                                                Datatables
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./dropdowns.html">
                                                Dropdowns
                                            </a>
                                            <a class="dropdown-item" href="./dropzone.html">
                                                Dropzone
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    Error pages
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./error-404.html" class="dropdown-item">
                                                        404 page
                                                    </a>
                                                    <a href="./error-500.html" class="dropdown-item">
                                                        500 page
                                                    </a>
                                                    <a href="./error-maintenance.html" class="dropdown-item">
                                                        Maintenance page
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="./flags.html">
                                                Flags
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./inline-player.html">
                                                Inline player
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./lightbox.html">
                                                Lightbox
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./lists.html">
                                                Lists
                                            </a>
                                            <a class="dropdown-item" href="./modals.html">
                                                Modal
                                            </a>
                                            <a class="dropdown-item" href="./maps.html">
                                                Map
                                            </a>
                                            <a class="dropdown-item" href="./map-fullsize.html">
                                                Map fullsize
                                            </a>
                                            <a class="dropdown-item" href="./maps-vector.html">
                                                Map vector
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./markdown.html">
                                                Markdown
                                            </a>
                                            <a class="dropdown-item" href="./navigation.html">
                                                Navigation
                                            </a>
                                            <a class="dropdown-item" href="./offcanvas.html">
                                                Offcanvas
                                            </a>
                                            <a class="dropdown-item" href="./pagination.html">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                                Pagination
                                            </a>
                                            <a class="dropdown-item" href="./placeholder.html">
                                                Placeholder
                                            </a>
                                            <a class="dropdown-item" href="./steps.html">
                                                Steps
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./stars-rating.html">
                                                Stars rating
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./tabs.html">
                                                Tabs
                                            </a>
                                            <a class="dropdown-item" href="./tags.html">
                                                Tags
                                            </a>
                                            <a class="dropdown-item" href="./tables.html">
                                                Tables
                                            </a>
                                            <a class="dropdown-item" href="./typography.html">
                                                Typography
                                            </a>
                                            <a class="dropdown-item" href="./tinymce.html">
                                                TinyMCE
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./form-elements.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 11l3 3l8 -8" />
                                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Form elements
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Extra
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./empty.html">
                                                Empty page
                                            </a>
                                            <a class="dropdown-item" href="./cookie-banner.html">
                                                Cookie banner
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./chat.html">
                                                Chat
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./activity.html">
                                                Activity
                                            </a>
                                            <a class="dropdown-item" href="./gallery.html">
                                                Gallery
                                            </a>
                                            <a class="dropdown-item" href="./invoice.html">
                                                Invoice
                                            </a>
                                            <a class="dropdown-item" href="./search-results.html">
                                                Search results
                                            </a>
                                            <a class="dropdown-item" href="./pricing.html">
                                                Pricing cards
                                            </a>
                                            <a class="dropdown-item" href="./pricing-table.html">
                                                Pricing table
                                            </a>
                                            <a class="dropdown-item" href="./faq.html">
                                                FAQ
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./users.html">
                                                Users
                                            </a>
                                            <a class="dropdown-item" href="./license.html">
                                                License
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./logs.html">
                                                Logs
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./music.html">
                                                Music
                                            </a>
                                            <a class="dropdown-item" href="./photogrid.html">
                                                Photogrid
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./tasks.html">
                                                Tasks
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./uptime.html">
                                                Uptime monitor
                                            </a>
                                            <a class="dropdown-item" href="./widgets.html">
                                                Widgets
                                            </a>
                                            <a class="dropdown-item" href="./wizard.html">
                                                Wizard
                                            </a>
                                            <a class="dropdown-item" href="./settings.html">
                                                Settings
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./trial-ended.html">
                                                Trial ended
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./job-listing.html">
                                                Job listing
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./page-loader.html">
                                                Page loader
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                            <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                            <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                            <path d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Layout
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-horizontal.html">
                                                Horizontal
                                            </a>
                                            <a class="dropdown-item" href="./layout-boxed.html">
                                                Boxed
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical.html">
                                                Vertical
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                                Vertical transparent
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical-right.html">
                                                Right vertical
                                            </a>
                                            <a class="dropdown-item" href="./layout-condensed.html">
                                                Condensed
                                            </a>
                                            <a class="dropdown-item" href="./layout-combo.html">
                                                Combined
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-navbar-dark.html">
                                                Navbar dark
                                            </a>
                                            <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                                Navbar sticky
                                            </a>
                                            <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                                Navbar overlap
                                            </a>
                                            <a class="dropdown-item" href="./layout-rtl.html">
                                                RTL mode
                                            </a>
                                            <a class="dropdown-item" href="./layout-fluid.html">
                                                Fluid
                                            </a>
                                            <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                                Fluid vertical
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./icons.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                            <path d="M10 10l.01 0" />
                                            <path d="M14 10l.01 0" />
                                            <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        4637 icons
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./emails.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/mail-opened -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                            <path d="M3 19l6 -6" />
                                            <path d="M15 13l6 6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Email templates
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                            <path d="M15 15l3.35 3.35" />
                                            <path d="M9 15l-3.35 3.35" />
                                            <path d="M5.65 5.65l3.35 3.35" />
                                            <path d="M18.35 5.65l-3.35 3.35" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Help
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                                        Documentation
                                    </a>
                                    <a class="dropdown-item" href="./changelog.html">
                                        Changelog
                                    </a>
                                    <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">
                                        Source code
                                    </a>
                                    <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm" target="_blank" rel="noopener">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        Sponsor project!
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                            <form action="./" method="get" autocomplete="off" novalidate>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </span>
                                    <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Solicitud de permiso
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" id="a_permisos" value="{{ $permisos }}">
                                <div class="mb-3">
                                    <label class="form-label">Empleado:</label>
                                    <div class="form-control-plaintext">{{ Session::get('nombres') }}
                                        {{ Session::get('apellidos') }}
                                    </div>
                                    <input type="hidden" value="{{ Session::get('cedula') }}" id="et_cedula_s">
                                    <input type="hidden" value="{{ $intervalMesesf }}" id="et_meses_servicio">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tipo de permiso <span class="r_obl">(*)</span>:</label>
                                    <select id="sel_tipo_permiso" onchange="conf_permiso(this)" class="form-select">
                                        <option value="0">Seleccione un tipo de permiso</option>
                                        @foreach ($permisos as $p)
                                        <option value="{{ $p->id }}">{{ $p->tipo_permiso }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label">Desde<span class="r_obl">(*)</span>:</label>
                                            <input type="date" id="et_desde" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Hasta<span class="r_obl">(*)</span>:</label>
                                            <input type="date" id="et_hasta" class="form-control" onchange="validad_dias()">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3" id="c_p_hora" style="display: none;">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label">Hora inicio<span class="r_obl">(*)</span>:</label>
                                            <input type="time" id="et_h_inicio" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Hora fin:<span class="r_obl">(*)</span></label>
                                            <input type="time" id="et_h_final" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3" id="c_p_enfermedad" style="display: none;">
                                    <div class="form-label">Diagnóstico: <span class="r_obl">(*)</span></div>
                                    <input type="text" id="tipo_enfermedad" data-label='Diagnóstico' class="form-control" placeholder="DÍGITE EL CODIGO CIE10 O SU ENFERMEDAD">
                                    <span class="badge bg-danger" id="badge_tipo_enfermedad" data-for="tipo_enfermedad"></span>
                                </div>
                                <div class="mb-3" id="c_p_documento" style="display: none;">
                                    <div class="form-label">Subir un justificativo (documento pdf): <span class="r_obl">(*)</span></div>
                                    <input type="file" id="document" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Observación: <span class="form-label-description"><span id="num">0</span>/100</span></label>
                                    <textarea class="form-control" id="et_observacion" rows="6" onkeyup="contar_caracteres(this)" placeholder="detalle información de su permiso ().."></textarea>
                                </div>
                                <div id="span_documento_firmado" style="display: none;" class="alert alert-success" role="alert">
                                    <div class="d-flex">
                                        <div>
                                            <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l5 5l10 -10"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            El permiso está firmado <span id="permiso_doc"></span>

                                        </div>
                                        <input type="hidden" value="" id="ip_url_formulario">

                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <button onclick="vistaprevia()" id="btn_vista_previa" class="btn btn-flickr w-100">
                                        <i class="fa-solid fa-eye"></i>
                                        <span class="m-l1">Vista Previa</span>
                                    </button>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <button onclick="firmar_documento()" id="btn_firmar_permiso" class="btn btn-flickr w-100" disabled>
                                        <i class="fa-solid fa-pencil"></i>
                                        <span class="m-l1">Firmar Permiso</span>
                                    </button>
                                </div>
                                <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                                    <button onclick="enviar_permiso()" id="btn_enviar_permiso" class="btn btn-flickr w-100" disabled>
                                        <i class="fa-regular fa-paper-plane"></i>
                                        <span class="m-l1">Enviar solicitud</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
                                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a>
                                </li>
                                <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        Sponsor
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2023
                                    <a href="." class="link-secondary">Tabler</a>.
                                    All rights reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                                        v1.0.0-beta20
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="./dist/js/tabler.min.js?1692870487" defer></script>
    <script src="./dist/js/demo.min.js?1692870487" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="emoji/lib/js/config.min.js"></script>
    <script src="emoji/lib/js/util.min.js"></script>
    <script src="emoji/lib/js/jquery.emojiarea.min.js"></script>
    <script src="emoji/lib/js/emoji-picker.min.js"></script>
    <!-- End emoji-picker JavaScript -->
    <!--Internal  Notify js -->
    <script src="valex/assets/plugins/notify/js/notifIt.js"></script>
    <script src="valex/assets/plugins/notify/js/notifit-custom.js"></script>
    <script src="{{ asset('js/demo.js?v=1.0.0') }}" defer></script>

    <script src="/valex/assets/js/datatable/datatables.min.js"></script>
    <!-- Custom libs -->
    <script src="/valex/assets/js/custom/input-search-custom.js"></script>
    <script src="/valex/assets/js/custom/input-validation.js"></script>
    <script>
    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js" 
      integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+"
      crossorigin="anonymous">
    </script>
    document.addEventListener("DOMContentLoaded", function() {
        window.Litepicker && (new Litepicker({
            element: document.getElementById('datepicker-inline'),
            buttonText: {
                previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M15 6l-6 6l6 6" />
</svg>`,
                nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M9 6l6 6l-6 6" />
</svg>`,
            },
            inlineMode: true,
        }));
    });
    $(window).on("load", function() {


        "use strict";
        // view_calendar()

        // --------------------------------------------- //
        // Loader Start
        // --------------------------------------------- //
        /*setTimeout(function() {
        $(".loader-logo").removeClass('slideInDown').addClass('fadeOutUp');
        $(".loader-caption").removeClass('slideInUp').addClass('fadeOutDown');
        }, 1200);*/
        // --------------------------------------------- //
        // Loader End
        // --------------------------------------------- //

        // --------------------------------------------- //
        // Main Section Loading Animation Start
        // --------------------------------------------- //
        setTimeout(function() {
            //$(".loader").addClass('loaded');
            $("#cont_preload").hide();
            $("#cont_calendar").show();
        }, 1200);
        // --------------------------------------------- //
        // Main Section Loading Animation End
        // --------------------------------------------- //

        let ajaxPrevDiagnostico = null;
        custom_search_input('tipo_enfermedad', {
            formatResult: function(item) {
                return {
                    value: item.dm_id,
                    text: `${item.dm_cie10.trim() != "" ? `[${item.dm_cie10.trim()}]` : ''} ${item.dm_descripcion}`,
                    html: `${item.dm_cie10.trim() != "" ? `[${item.dm_cie10.trim()}]` : ''} ${item.dm_descripcion}`
                }
            },
            datasets: function(item) {
                return {
                    cie10: item.dm_cie10,
                    requierecie10: item.dm_requiere_cie10
                }
            },
            search: function(text, callback) {
                if (ajaxPrevDiagnostico != null)
                    ajaxPrevDiagnostico.abort();

                let ajax = $.ajax(
                    `/get_search_diagnostico_consulta_medica/1/300/${text}`
                ).done(function(res) {
                    callback(res.respuesta ? res.data : []);
                });

                ajaxPrevDiagnostico = ajax;
            }
        });

        setInputValidations('tipo_enfermedad', ['notEmpty'], [{
            function: function(item) {
                return item.value.trim() != "" && (item.dataset.value == undefined || item
                    .dataset.value.trim() == "");
            },
            message: "Debe buscar y seleccionar un diagnóstico médico"
        }]);

        $('#badge_tipo_enfermedad').fadeOut();

    });
    let file_name_, file_type_, file_size_, fileURL_;

    function enviar_permiso() {
        offload_send();
        let estado_documento = $("#et_estado_documento").val();
        let estado_permxhora = $("#et_estado_permisoxhora").val();
        let estado_enfermedad = $("#et_estado_enfermedad").val();
        let cedula_solicitante = $("#et_cedula_s").val();
        let tipo_solicitud = $("#sel_tipo_permiso").val();
        let fecha_inicial = $("#et_desde").val();
        let fecha_final = $("#et_hasta").val();
        let hora_inicial = 0;
        let hora_final = 0;
        let total_horas = '0';
        let observacion = $("#et_observacion").val();
        let fecha_solicitud = formatDate(new Date());
        let estado = 'INGRESADO'
        let token = $("#csrf-token").val();
        let url_formulario = $("#ip_url_formulario").val();
        if (tipo_solicitud == "") {
            alert("Por favor seleccione un tipo de archivo");
            onload_send();
            return;
        }

            if (estado_documento == 1) {
                if (fileURL_ == "" || fileURL_ === undefined) {
                    alert("Por favor debe subir un archivo");
                    onload_send();
                    return;
                }

                //fileURL_ = fileURL_.substring(28);
                console.log(fileURL_);
                //return;
            }
            if (fecha_inicial == "") {
                alert("Por favor seleccione una fecha de inicio");
                onload_send();
                $("#et_desde").focus();
                return;
            }

            if (fecha_final == "") {
                alert("Por favor seleccione una fecha final ");
                onload_send();
                $("#et_hasta").focus();
                return;
            }

            if (estado_permxhora == 1) {
                hora_inicial = $("#et_h_inicio").val();
                hora_final = $("#et_h_final").val();
                if (hora_inicial == "" || hora_inicial === undefined) {
                    alert("Por favor debe ingresar una hora inicial");
                    onload_send();
                    $("#et_h_inicio").focus();
                    return;
                } else if (hora_final == "" || hora_final === undefined) {
                    alert("Por favor debe ingresar una hora final");
                    onload_send();
                    $("#et_h_final").focus();
                    return;
                }

                total_horas = get_horas(hora_inicial, hora_final);
            } else {
                hora_inicial = 0;
                hora_final = 0;
            }

            fecha_inicial__ = new Date(fecha_inicial);
            fecha_final__ = new Date(fecha_final);
            if (fecha_final__ < fecha_inicial__) {
                alert("No puede selecionar una fecha final menor a la fecha de inicio");
                onload_send();
                $("#et_hasta").focus();
                return;
            }
            let diferencia = fecha_final__.getTime() - fecha_inicial__.getTime();
            let diasDeDiferencia = (diferencia / 1000 / 60 / 60 / 24) + 1;
            console.log(diasDeDiferencia);

            if (url_formulario == "") {
                alert("No se ha firmado el permiso!");
                onload_send();
                return;
            }
            let tipo_enfermedad = ""
            let dm_id = 0;
            if (estado_enfermedad == 1) {
                tipo_enfermedad = $("#tipo_enfermedad").val();
                dm_id = document.getElementById('tipo_enfermedad').dataset.value;
            }

            let txtDiagnostico = document.getElementById('tipo_enfermedad');
            $('#badge_tipo_enfermedad').fadeOut();
            if (tipo_solicitud == 4 && txtDiagnostico.validateInput() != "") {
                $('#badge_tipo_enfermedad').fadeIn();
                return;
            }

            let datos = {
                cedula_solicitante,
                tipo_solicitud,
                fecha_inicial,
                fecha_final,
                hora_inicial,
                hora_final,
                observacion,
                fecha_solicitud,
                estado,
                estado_documento,
                fileURL_,
                file_name_,
                file_type_,
                file_size_,
                diasDeDiferencia,
                total_horas,
                url_formulario,
                tipo_enfermedad,
                dm_id
            };
            _AJAX_("/guardar_solicitud", "POST", token, datos, 0);

        }

        const validad_dias = () => {
            let meses_servicio = $("#et_meses_servicio").val();

        }
        const vistaprevia = () => {

            offload_vista_previa();
            let sel_tipo_permiso = $("#sel_tipo_permiso").val();
            let desde = $("#et_desde").val();
            let hasta = $("#et_hasta").val();
            let hora_inicial = 0;
            let hora_final = 0;
            let total_horas = '0';
            let observacion = $("#et_observacion").val();
            let estado_documento = $("#et_estado_documento").val();
            let estado_permxhora = $("#et_estado_permisoxhora").val();
            let estado_enfermedad = $("#et_estado_enfermedad").val();
            let cedula_solicitante = $("#et_cedula_s").val();
            let tipo_enfermedad = "";

            if (sel_tipo_permiso == 0) {
                alert("Debe seleccionar un tipo de permiso!");
                on_load_vista_previa();
                return;
            }

            if (desde == "" && hasta == "") {
                alert("Debe ingresar la fecha desde y hasta de su permiso");
                on_load_vista_previa();

                return;
            } else if (desde == "") {
                alert("Debe ingresar la fecha de inicio de su permiso");
                on_load_vista_previa();
                return;
            } else if (hasta == "") {
                alert("Debe ingresar la fecha fin de su permiso");
                on_load_vista_previa();
                return;
            }
            if (estado_permxhora == 1) {
                hora_inicial = $("#et_h_inicio").val();
                hora_final = $("#et_h_final").val();
                if (hora_inicial == "" || hora_inicial === undefined) {
                    alert("Por favor debe ingresar una hora inicial");
                    on_load_vista_previa();
                    $("#et_h_inicio").focus();
                    return;
                } else if (hora_final == "" || hora_final === undefined) {
                    alert("Por favor debe ingresar una hora final");
                    on_load_vista_previa();
                    $("#et_h_final").focus();
                    return;
                } else if (hora_final < hora_inicial) {
                    alert("La hora final que quiere ingresar es menor a la hora inicial del permiso");
                    on_load_vista_previa();
                    $("#et_h_final").focus();
                    return;
                }

                total_horas = get_horas(hora_inicial, hora_final);
                console.log(total_horas);
            } else {
                hora_inicial = 0;
                hora_final = 0;
            }



            if (observacion == "") {
                alert("Por favor debe detallar su permiso al menos 50 caracteres");
                on_load_vista_previa();
                return;
            }



            fecha_inicial__ = new Date(desde);
            fecha_final__ = new Date(hasta);

            let diasDeDiferencia = "";
            if (fecha_final__ < fecha_inicial__) {
                alert("No puede selecionar una fecha final menor a la fecha de inicio");
                onload_send();
                $("#et_hasta").focus();
                return;
            }

            let diferencia = fecha_final__.getTime() - fecha_inicial__.getTime();
            diasDeDiferencia = (diferencia / 1000 / 60 / 60 / 24) + 1;

            if (estado_enfermedad == 1) {
                tipo_enfermedad = $("#tipo_enfermedad").val();
            }

            let datos = {
                sel_tipo_permiso,
                desde,
                hasta,
                hora_inicial,
                hora_final,
                observacion,
                cedula_solicitante,
                diasDeDiferencia,
                tipo_enfermedad,
                total_horas
            };
            let token = $("#csrf-token").val();
            _AJAX_("/vista_previa", "POST", token, datos, 1);
        }

        $('#modal_vista_previa').on('hidden.bs.modal', function() {
            // do something…
            document.querySelector("#vistaPrevia").removeAttribute("src");

        })
        const firmar_documento = () => {
            //offload_firma()
            let sel_tipo_permiso = $("#sel_tipo_permiso").val();
            let desde = $("#et_desde").val();
            let hasta = $("#et_hasta").val();

            let h_ini = $("#et_h_inicio").val();
            let h_fin = $("#et_h_final").val();
            let observacion = $("#et_observacion").val();
            let estado_documento = $("#et_estado_documento").val();
            let estado_permxhora = $("#et_estado_permisoxhora").val();
            let estado_enfermedad = $("#et_estado_enfermedad").val();
            let cedula_solicitante = $("#et_cedula_s").val();
            let total_horas = '0';
            let fecha_actual = new Date();
            fecha_inicial__ = new Date(desde);
            fecha_final__ = new Date(hasta);

            var diff = fecha_inicial__ - fecha_actual;
            var total_dias_soli = (diff / 1000 / 60 / 60 / 24) + 1;
            // alert('total de dias' + total_dias_soli)

            var diff_desde_hasta = fecha_final__ - fecha_inicial__;
            var total_dias_desde_hasta = (diff_desde_hasta / 1000 / 60 / 60 / 24) + 1;

            if (sel_tipo_permiso == 0) {
                alert("Debe seleccionar un tipo de permiso!");
                onload_firma()
                onload_send()
                return
            } else if (desde == "" && hasta == "") {
                alert("Debe ingresar la fecha desde y hasta de su permiso");
                return;
            } else if (desde == "") {
                alert("Debe ingresar la fecha de inicio de su permiso");
                return;
            } else if (hasta == "") {
                alert("Debe ingresar la fecha fin de su permiso");
                return;
            } else if (fecha_final__ < fecha_inicial__) {
                alert("No puede selecionar una fecha final menor a la fecha de inicio");
                onload_send();
                $("#et_hasta").focus();
                return;
            } else if (observacion == "") {
                alert("Por favor debe detallar su permiso al menos 50 caracteres");
            }

            if (estado_permxhora == 1) {
                if (h_ini == "" && h_fin == "") {
                    alert("Debe ingresar la hora de inicio y de retorno de su permiso");
                    return;
                } else if (h_ini == "") {
                    alert("Debe ingresar la hora de salida de su permiso");
                    return;
                } else if (h_fin == "") {
                    alert("Debe ingresar la hora de retorno de su permiso");
                    return;
                }
                total_horas = parseInt(get_horas_(h_ini, h_fin));
                if (total_dias_desde_hasta > 1) {
                    alert(
                        'Art. 33 LOSEP. - Tiene PERMISO para salir de la oficina por hora dentro del mismo dia'
                    )
                    onload_firma()
                    onload_send()
                } else if (total_horas > "41") {
                    alert('entro')
                    alert(
                        'Art. 33 LOSEP. - Tiene PERMISO para salir de la oficina, por el tiempo de hasta dos horas del miso dia'
                    )
                    onload_firma()
                    onload_send()
                }
            }

            let txtDiagnostico = document.getElementById('tipo_enfermedad');
            $('#badge_tipo_enfermedad').fadeOut();
            if (sel_tipo_permiso == 4 && txtDiagnostico.validateInput() != "") {
                $('#badge_tipo_enfermedad').fadeIn();
                return;
            }

            let datos = {
                cedula_solicitante,
            };

            let token = $("#csrf-token").val();
            _AJAX_("/enviar_code_qr", "POST", token, datos, 2);

        }

        const aprobar_firma = () => {
            offload_apfirma();
            let sel_tipo_permiso = $("#sel_tipo_permiso").val();
            let desde = $("#et_desde").val();
            let hasta = $("#et_hasta").val();
            let hora_inicial = $("#et_h_inicio").val();
            let hora_final = $("#et_h_final").val();
            let observacion = $("#et_observacion").val();
            let estado_documento = $("#et_estado_documento").val();
            let estado_permxhora = $("#et_estado_permisoxhora").val();
            let estado_enfermedad = $("#et_estado_enfermedad").val();
            let cedula_solicitante = $("#et_cedula_s").val();
            let total_horas = '0';
            if (sel_tipo_permiso == 0) {
                alert("Debe seleccionar un tipo de permiso!");
                return;
            }

            if (desde == "" && hasta == "") {
                alert("Debe ingresar la fecha desde y hasta de su permiso");
                return;
            } else if (desde == "") {
                alert("Debe ingresar la fecha de inicio de su permiso");
                return;
            } else if (hasta == "") {
                alert("Debe ingresar la fecha fin de su permiso");
                return;
            }
            if (estado_permxhora == 1) {
                hora_inicial = $("#et_h_inicio").val();
                hora_final = $("#et_h_final").val();
                if (hora_inicial == "" || hora_inicial === undefined) {
                    alert("Por favor debe ingresar una hora inicial");
                    onload_send();
                    $("#et_h_inicio").focus();
                    return;
                } else if (hora_final == "" || hora_final === undefined) {
                    alert("Por favor debe ingresar una hora final");
                    onload_send();
                    $("#et_h_final").focus();
                    return;
                }
                total_horas = get_horas(hora_inicial, hora_final);
            } else {
                hora_inicial = 0;
                hora_final = 0;
            }

            if (observacion == "") {
                alert("Por favor debe detallar su permiso al menos 50 caracteres");
            }
            fecha_inicial__ = new Date(desde);
            fecha_final__ = new Date(hasta);


            if (fecha_final__ < fecha_inicial__) {
                alert("No puede selecionar una fecha final menor a la fecha de inicio");
                onload_send();
                $("#et_hasta").focus();
                return;
            }
            let diferencia = fecha_final__.getTime() - fecha_inicial__.getTime();
            let diasDeDiferencia = (diferencia / 1000 / 60 / 60 / 24) + 1;

            let codigo = $("#ip_codigo_a").val();
            let token = $("#csrf-token").val();

            let tipo_enfermedad = "";
            if (estado_enfermedad == 1) {
                tipo_enfermedad = $("#tipo_enfermedad").val();
            }

            let datos = {
                sel_tipo_permiso,
                desde,
                hasta,
                hora_inicial,
                hora_final,
                observacion,
                cedula_solicitante,
                diasDeDiferencia,
                codigo,
                tipo_enfermedad,
                total_horas
            };
            _AJAX_("/estampar_codigo", "POST", token, datos, 3);
        }

        const contar_caracteres = (e) => {
            var maxLength = 30;
            var strLength = e.value.length;
            let sel_tipo = $("#sel_tipo_permiso").val();

            $("#num").html(strLength)
            if (strLength > maxLength) {
                if (sel_tipo != 0) {
                    $("#btn_enviar_permiso").removeAttr('disabled');
                }
                $("#btn_firmar_permiso").removeAttr('disabled');
                $("#btn_vista_previa").removeAttr('disabled');
            } else {
                $("#btn_enviar_permiso").attr('disabled', 'true');
                $("#btn_firmar_permiso").attr('disabled', 'true');
                //$("#btn_vista_previa").attr('disabled', 'true');
            }
        }

        function padTo2Digits(num) {
            return num.toString().padStart(2, '0');
        }

        function formatDate(date) {
            return [
                padTo2Digits(date.getDate()),
                padTo2Digits(date.getMonth() + 1),
                date.getFullYear(),
            ].join('/');
        }

        function get_horas_(horaF, horaI) {
            var hora1 = (horaI).split(":"),
                hora2 = (horaF).split(":"),
                t1 = new Date(),
                t2 = new Date();
            t1.setHours(hora1[0], hora1[1], '00');
            t2.setHours(hora2[0], hora2[1], '00');
            t1.setHours(t1.getHours() - t2.getHours(),
                t1.getMinutes() - t2.getMinutes(),
                t1.getSeconds() - t2.getSeconds()
            );

            return (t1.getHours() ? t1.getHours() + (t1.getHours() > 1 ? "" : " hora") : "") + (t1.getMinutes() ?
                "" + t1.getMinutes() + "" : "");
        }

        function get_horas(horaF, horaI) {
            var hora1 = (horaI).split(":"),
                hora2 = (horaF).split(":"),
                t1 = new Date(),
                t2 = new Date();
            t1.setHours(hora1[0], hora1[1], '00');
            t2.setHours(hora2[0], hora2[1], '00');
            t1.setHours(t1.getHours() - t2.getHours(),
                t1.getMinutes() - t2.getMinutes(),
                t1.getSeconds() - t2.getSeconds()
            );

            return (t1.getHours() ? t1.getHours() + (t1.getHours() > 1 ? " horas" : " hora") : "") + (t1.getMinutes() ?
                ", " + t1.getMinutes() + " minutos" : "") + (t1.getSeconds() ? (t1.getHours() || t1.getMinutes() ?
                " y " : "") + t1.getSeconds() + " segundos" : "");
        }
        $("#document").on("change", function(e) {
            const file = e.target.files[0];
            const reader = new FileReader();
            file_name_ = file.name;
            file_type_ = file.type;
            file_size_ = file.size;
            reader.onloadend = () => {
                fileURL_ = reader.result;
                console.log(fileURL_);
            };
            reader.readAsDataURL(file);
        });

        function enviar_file(e) {
            const file = e.target.files[0];
            const reader = new FileReader();
            file_name_ = file.name;
            file_type_ = file.type;
            file_size_ = file.size;
            reader.onloadend = () => {
                fileURL_ = reader.result;
                console.log(fileURL_);
            };
            reader.readAsDataURL(file);
        }

        function offload_send() {
            $("#btn_enviar_permiso").attr('disabled', true);
            let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Enviando solicitud</span>'
            $("#btn_enviar_permiso").html(html);
        }

        function onload_send() {
            let html = ' <i class="fa-regular fa-paper-plane"></i><span class="m-l1">Enviar solicitud</span>'
            $("#btn_enviar_permiso").html(html);
            $("#btn_enviar_permiso").removeAttr('disabled');
        }

        const on_load_vista_previa = () => {
            let html = ' <i class="fa-solid fa-eye"></i><span class="m-l1">Vista Previa</span>'
            $("#btn_vista_previa").html(html);
            $("#btn_vista_previa").removeAttr('disabled');
        }

        function offload_vista_previa() {
            $("#btn_vista_previa").attr('disabled', true);
            let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Generando vista previa</span>'
            $("#btn_vista_previa").html(html);
        }


        /**LOAD FIRMAR DOCUMENTO*/
        function offload_firma() {
            $("#btn_firmar_permiso").attr('disabled', true);
            let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Generando código</span>'
            $("#btn_firmar_permiso").html(html);
        }

        function onload_firma() {
            let html = ' <i class="fa-solid fa-pencil"></i><span class="m-l1">Firmar Permiso</span>'
            $("#btn_firmar_permiso").html(html);
            $("#btn_firmar_permiso").removeAttr('disabled');
        }
        /**LOAD ESTAMPAR FIRMAR DOCUMENTO*/
        function offload_apfirma() {
            $("#btn_ap_firma").attr('disabled', true);
            let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Firmando Documento</span>'
            $("#btn_ap_firma").html(html);
        }

        function onload_apfirma() {
            let html = '<span class="m-l1">Estampar código</span>'
            $("#btn_ap_firma").html(html);
            $("#btn_ap_firma").removeAttr('disabled');
        }



        function conf_permiso(sel) {
            let permiso_sel = sel.value
            console.log("Permiso seleccionado" + permiso_sel)
            if (permiso_sel == "") {
                $("#c_p_nota").hide();
            } else {
                let permisos = $("#a_permisos").val();
                alert(permisos)
                console.log('Permisos' + permisos)

                permisos = (JSON.parse(permisos))
                permisos.map(jsd => {
                    if (jsd.id == permiso_sel) {
                        if (jsd.estado_permisoxhora == 1) {
                            $("#c_p_hora").show()
                        } else if (jsd.estado_permisoxhora == 2) {
                            let meses = $("#et_meses_servicio").val();
                            if (meses <= 11) {
                                alert('No puede solicitar vacaciones por que tiene ' + meses +
                                    ' meses de servicios');
                                $("#sel_tipo_permiso").val('0')
                                return;
                            }
                        } else {
                            $("#c_p_hora").hide()
                        }

                        if (jsd.estado_documento == 1) {
                            $("#c_p_documento").show()
                        } else {
                            $("#c_p_documento").hide()
                        }

                        if (jsd.estado_enfermedad == 1) {
                            $("#c_p_enfermedad").show()
                        } else {
                            $("#c_p_enfermedad").hide()
                        }

                        $("#c_p_nota").show();
                        $("#p_nota").html(jsd.notas);
                        $("#et_estado_documento").val(jsd.estado_documento);
                        $("#et_estado_permisoxhora").val(jsd.estado_permisoxhora);
                        $("#et_estado_enfermedad").val(jsd.estado_enfermedad);

                    }
                })
            }
        }



        function _AJAX_(ruta, tipo, token, datos, p) {
            if (tipo == "POST") {
                $.ajax({
                    url: ruta,
                    type: tipo,
                    dataType: "json",
                    headers: {
                        "X-CSRF-TOKEN": token
                    },
                    data: datos,
                    success: function(res) {
                        if (p == 0) {
                            onload_send();
                            if (res.respuesta) {
                                $("#aprobador").html(res.aprobador);
                                $("#modal_permiso_ok").modal("show");

                            } else {
                                if (res.sms == 'sinjefe') {
                                    $("#sms").html(
                                        "Estimado por favor comuniquese al departamento de Talento Humano y comunique que no tiene Jefe asignado"
                                    );
                                    $("#modal-error").modal("show");
                                }

                            }
                        } else if (p == 1) {
                            on_load_vista_previa();
                            // $("#aprobador").html(res.aprobador);
                            document.querySelector("#vistaPrevia").setAttribute("src", "/storage/" + res.url +
                                "#toolbar=0&navpanes=0&scrollbar=0");
                            $("#modal_vista_previa").modal("show");
                        } else if (p == 2) {
                            onload_firma()
                            if (res.res) {
                                let codigo = res.Code
                                $("#modal_aprobar_code").modal("show");
                            }
                        } else if (p == 3) {
                            if (res.res) {
                                onload_apfirma();
                                $("#modal_aprobar_code").modal("hide");
                                $("#permiso_doc").html(res.u);
                                $("#ip_url_formulario").val(res.u);
                                $("#span_documento_firmado").show();
                            } else {
                                alert("el codigo de autorizacion es incorrecto")
                            }
                        }
                    },
                }).fail(function(jqXHR, textStatus, errorthrown) {
                    if (jqXHR.status === 0) {
                        alert("Not connect: Verify Network.");
                    } else if (jqXHR.status == 404) {
                        alert("Requested page not found [404]");
                    } else if (jqXHR.status == 500) {
                        alert("Internal Server Error [500].");
                    } else if (textStatus === "parsererror") {
                        alert("Requested JSON parse failed.");
                    } else if (textStatus === "timeout") {
                        alert("Time out error.");
                    } else if (textStatus === "abort") {
                        alert("Ajax request aborted.");
                    } else {
                        alert("Uncaught Error: " + jqXHR.responseText);
                    }
                });
            } else if (tipo == "GET") {
                $.ajax({
                    url: ruta,
                    type: tipo,
                    dataType: "json",
                    success: function(res) {
                        let html_ = "";
                        if (p == 0) {
                            if (res.respuesta == true) {
                                var ht = "";
                                ht +=
                                    '  <table id="table-proyectos" border="2" class="table dataTable no-footer">';
                                ht += '	    <thead class="background-thead">';
                                ht += '		    <tr align="center">';
                                ht +=
                                    '				<th align="center" class="border-bottom-0 color-th">#</th>';
                                ht +=
                                    '			    <th align="center" class="border-bottom-0 color-th">PROYECTO</th>';
                                ht +=
                                    '			    <th align="center" class="border-bottom-0 color-th">ESTADO</th>';
                                ht +=
                                    '			    <th align="center" class="border-bottom-0 color-th">FECHA</th>';
                                ht +=
                                    '				<th align="center" class="border-bottom-0 color-th">Opciones</th>';
                                ht += "			</tr>";
                                ht += "		</thead>";
                                ht += "		<tbody>";
                                $(res.data).each(function(i, data) {
                                    let proyecto = "'" + data.pro_nombre + "'";
                                    ht += "			<tr>";
                                    ht +=
                                        '			    <td class="color-td" align="center">' +
                                        data.pro_id +
                                        "</td>";
                                    ht +=
                                        '				<td class="color-td" align="center">' +
                                        data.pro_nombre +
                                        "</td>";
                                    if (data.pro_estado == 1) {
                                        ht +=
                                            '<td class="color-td" align="center"><span class="badge bg-success me-1">Activo</span></td>';
                                    } else {
                                        ht +=
                                            '<td class="color-td" align="center"><span class="badge bg-danger me-1">Inactivo</span></td>';
                                    }
                                    ht +=
                                        '<td class="color-td" align="center">' +
                                        data.pro_fecha +
                                        "</td>";
                                    ht += '<td class="color-td" align="center">';
                                    ht +=
                                        '<button type="button" onclick="modal_editar(' +
                                        data.pro_id +
                                        "," +
                                        proyecto +
                                        "," +
                                        data.pro_estado +
                                        ')" class="tam-btn btn btn-warning btn-modal-editar"><i class="fa fa-edit tam-icono"></i></button>';
                                    ht +=
                                        '              <button type="button" onclick="modal_delete(' +
                                        data.pro_id +
                                        ')" class="tam-btn btn btn-danger btn-modal-eliminar"><i class="fa fa-trash tam-icono"></i></button>';
                                    ht += "			</td></tr>";
                                });
                                ht += "		</tbody>";
                                ht += "  </table>";
                                $("#div-table-proyectos").html(ht);
                            }
                            $("#table-proyectos").DataTable();
                            $("#global-loader").removeClass("block");
                            $("#global-loader").addClass("none");
                        }
                    },
                }).fail(function(jqXHR, textStatus, errorthrown) {
                    if (jqXHR.status === 0) {
                        alert("Not connect: Verify Network.");
                    } else if (jqXHR.status == 404) {
                        alert("Requested page not found [404]");
                    } else if (jqXHR.status == 500) {
                        alert("Internal Server Error [500].");
                    } else if (textStatus === "parsererror") {
                        alert("Requested JSON parse failed.");
                    } else if (textStatus === "timeout") {
                        alert("Time out error.");
                    } else if (textStatus === "abort") {
                        alert("Ajax request aborted.");
                    } else {
                        alert("Uncaught Error: " + jqXHR.responseText);
                    }
                });
            }
        }

        function cerrar_modal_per() {
            $("#et_estado_documento").val("");
            $("#et_estado_permisoxhora").val("");
            $("#et_estado_enfermedad").val("");
            $("#et_cedula_s").val("");
            $("#sel_tipo_permiso").val("");
            $("#et_desde").val("");
            $("#et_hasta").val("");
            $("#et_observacion").val("");
            $("#et_h_inicio").val("");
            $("#et_h_final").val("");
            $("#modal_permiso_ok").modal("hide");
            location.href = "/permisos"
        }

        function firmar_() {
            offload_firma()
            let sel_tipo_permiso = $("#sel_tipo_permiso").val();
            let desde = $("#et_desde").val();
            let hasta = $("#et_hasta").val();

            let h_ini = $("#et_h_inicio").val();
            let h_fin = $("#et_h_final").val();
            let observacion = $("#et_observacion").val();
            let estado_documento = $("#et_estado_documento").val();
            let estado_permxhora = $("#et_estado_permisoxhora").val();
            let estado_enfermedad = $("#et_estado_enfermedad").val();
            let cedula_solicitante = $("#et_cedula_s").val();
            let total_horas = '0';
            if (sel_tipo_permiso == 0) {
                alert("Debe seleccionar un tipo de permiso!");
                return;
            }

            if (desde == "" && hasta == "") {
                alert("Debe ingresar la fecha desde y hasta de su permiso");
                return;
            } else if (desde == "") {
                alert("Debe ingresar la fecha de inicio de su permiso");
                return;
            } else if (hasta == "") {
                alert("Debe ingresar la fecha fin de su permiso");
                return;
            }
            if (estado_permxhora == 1) {

                if (h_ini == "" && h_fin == "") {
                    alert("Debe ingresar la hora de inicio y de retorno de su permiso");
                    return;
                } else if (h_ini == "") {
                    alert("Debe ingresar la hora de salida de su permiso");
                    return;
                } else if (h_fin == "") {
                    alert("Debe ingresar la hora de retorno de su permiso");
                    return;
                }
                total_horas = get_horas(h_ini, h_fin);

            } else {

            }

            if (observacion == "") {
                alert("Por favor debe detallar su permiso al menos 50 caracteres");
            }

            fecha_inicial__ = new Date(desde);
            fecha_final__ = new Date(hasta);


            if (fecha_final__ < fecha_inicial__) {
                alert("No puede selecionar una fecha final menor a la fecha de inicio");
                onload_send();
                $("#et_hasta").focus();
                return;
            }

            let fecha_actual = new Date();
            /*let diferencia = fecha_final__.getTime() - fecha_inicial__.getTime();
            let diasDeDiferencia = (diferencia / 1000 / 60 / 60 / 24) + 1;*/

            var diff = fecha_inicial__ - fecha_actual;
            var total_dias_soli = (parseInt(diff) / (1000 * 60 * 60 * 24)) + 1;

            if (parseInt(total_dias_soli) < 15) {
                alert(
                    'Toda solicitud de vacaciones deberá ser presentada a la Dirección Administrativa de Talento Humano con un mínimo de quince (15) días de anticipación.'
                )
                $("#et_desde").focus();
                onload_send();
                return;
            }

            let datos = {
                cedula_solicitante,
            };

            let token = $("#csrf-token").val();
            _AJAX_("/enviar_code_qr", "POST", token, datos, 2);
        }
    </script>
</body>

</html>
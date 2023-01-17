<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
     <!-- preload head styles -->
        <link rel="preload" href="https://unistudio.co/html/renox/assets/fonts/brand-icons/brand-icons.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('assets/css/swiper-bundle.min.css') }}" as="style">
        <link rel="preload" href="{{ asset('assets/css/uikit.min.css') }}" as="style">
        <link rel="preload" href="{{ asset('assets/css/main.min.css') }}" as="style">

        <!-- preload footer scripts -->
        <link rel="preload" href="{{ asset('assets/js/uikit.min.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/uikit-components.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/jquery.min.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/swiper-bundle.min.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/feather.min.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/typed.min.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/anime.min.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/app.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/swiper-helper.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/typed-helper.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/anime-helper.js') }}" as="script">
        <link rel="preload" href="{{ asset('assets/js/anime-helper-defined-timelines.js') }}" as="script">

        <!-- include styles -->
        <script src="{{ asset('assets/js/app-head.js') }}"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

        <style type="text/css">
            .swiper-container.swiper-match .swiper-slide {
  height: auto !important;
  display: inline-block;
}

/* top-collection-area css start */

.top-collect-wrapper ul {
    margin: 17px 0px;
}
.top-collect-wrapper ul li {
    display: inline-block;
}
.top-collect-wrapper ul li span {
    display: inline-block;
    font-size: 20px;
    font-weight: 700;
    position: relative;
    top: -17px;
    margin-right: 6px;
}
.top-collect-wrapper ul li h3 {
    font-size: 20px;
    font-weight: 600;
    color: #04091E;
    font-family: Urbanist;
    transition: .3s;
}
.top-collect-wrapper ul li h3:hover {
    color: #f84026;
}
.top-collect-wrapper ul li h4 {
    font-size: 14px;
    font-weight: 600;
    font-family: Urbanist;
    color: #747681;
}
.top-collect-wrapper ul li {
    display: inline-block;
}
.top-collect-wrapper ul li img {
    margin-top: -48px;
    margin-right: 4px;
}
/* top-collection-area css send */
        </style>
        <!-- include scripts -->
        <script src="{{ asset('assets/js/uikit.min.js') }}"></script>
        <script src="{{ asset('assets/js/uikit-components.js') }}"></script>
                <link rel="stylesheet" href="{{ asset('assets/css/theme/main.min.css') }}">

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-B5JJP7FY91"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-B5JJP7FY91');
        </script>
        <script async type="module">
            import { getCLS, getFCP, getFID, getLCP, getTTFB } from 'https://cdn.jsdelivr.net/npm/web-vitals@2.1.2/dist/web-vitals.js';
            function sendToGoogleAnalytics({ name, delta, id }) {
                gtag('event', name, {
                    event_category: 'Web Vitals',
                    event_label: id,
                    value: Math.round(name === 'CLS' ? delta * 1000 : delta),
                    non_interaction: true,
                });
            }
            /* CLS FCP FID LCP TTFB */
            getCLS(sendToGoogleAnalytics);
            getFCP(sendToGoogleAnalytics);
            getFID(sendToGoogleAnalytics);
            getLCP(sendToGoogleAnalytics);
            getTTFB(sendToGoogleAnalytics);
        </script>
    <!-- Scripts -->
</head>
<body class="uni-body">
        <!-- Circles -->
        <div class="uni-circles">
            <div></div>
            <div></div>
        </div>


      <!-- Menu modal -->
        <div id="uni_mobile_menu" class="uni-mobile-menu uk-offcanvas" data-uk-offcanvas="mode: push; overlay: true; flip: true; selPanel: .uk-offcanvas-bar-panel;">
            <div class="uk-offcanvas-bar-panel uk-panel dark:uk-background-gray-100">
                <div class="uni-mobile-menu-wrap uk-flex-column uk-flex-between" data-uk-height-viewport="offset-bottom: true;">
                    <div class="uni-mobile-menu-content">
                        <header class="uk-card uk-card-2xsmall uk-flex-middle uk-flex-between">
                            <div class="uk-flex-1">
                                <button aria-label="Close Menu" class="uk-offcanvas-close uk-button uk-button-small uk-button-icon uk-button-default uk-button-outline uk-radius-circle" type="button">
                                    <i class="uk-icon-small" data-feather="arrow-left"></i>
                                </button>
                            </div>
                            <div>
                                <h5 class="uk-h5 uk-margin-remove">Navigation</h5>
                            </div>
                            <div class="uk-flex-1"></div>
                        </header>
                        <hr class="uk-margin-remove">
                        <div class="uk-card uk-card-small">
                            <div class="uk-panel uk-margin">
                                <form class="search-form uk-inline uk-width-1-1@m" action="https://unistudio.co/html/renox/main/search-ajax.html" method="get">
                                    <span class="uk-form-icon">
                                        <i class="uk-icon-small" data-feather="search"></i>
                                    </span>
                                    <input type="search" name="s" autocomplete="off" class="uk-input uk-form-small" placeholder="Search item or artist..">
                                    <button aria-label="Clear Search Input" type="button" class="search-clear uk-form-icon uk-form-icon-flip uk-hidden">
                                        <i class="uk-icon-xsmall" data-feather="x"></i>
                                    </button>
                                    <div class="search-results uk-card uk-card-small uk-card-default uk-width-medium@m uk-height-large@m uk-margin-small-top uk-overflow-auto uk-position-absolute uk-position-z-index uk-radius uk-hidden dark:uk-background-gray-90">
                                        <div class="search-results-content uk-panel uk-hidden"></div>
                                        <div class="search-results-loading uk-flex-center uk-flex-middle uk-height-1-1">
                                            <span class="uk-flex-center uk-flex-middle" data-uk-spinner="ratio: .8"></span>
                                        </div>
                                    </div>
                                    <noscript>
                                        <button aria-label="Submit" type="submit" class="uk-form-icon uk-form-icon-flip">
                                            <i class="uk-icon-xsmall" data-feather="search"></i>
                                        </button>
                                    </noscript>
                                </form>
                            </div>
                            <div class="uk-panel">
                                <ul class="uk-nav uk-nav-default">
                                    <li class="uk-nav-header">Main pages</li>
                                    <li>
                                        <a href="index-2.html"><i class="uk-icon-xsmall" data-feather="home"></i> Home</a>
                                    </li>
                                    <li>
                                        <a href="explore.html"><i class="uk-icon-xsmall" data-feather="compass"></i> Explore</a>
                                    </li>
                                    <li>
                                        <a href="activity.html"><i class="uk-icon-xsmall" data-feather="activity"></i> Actvity</a>
                                    </li>
                                    <li class="uk-nav-header">Community</li>
                                    <li>
                                        <a href="blog.html"><i class="uk-icon-xsmall" data-feather="book-open"></i> Blog</a>
                                    </li>
                                    <li>
                                        <a href="help-center.html"><i class="uk-icon-xsmall" data-feather="help-circle"></i> Help center</a>
                                    </li>
                                    <li>
                                        <a href="contact.html"><i class="uk-icon-xsmall" data-feather="send"></i> Contact</a>
                                    </li>
                                    <li class="uk-nav-header">Inner pages</li>
                                    <li>
                                        <a href="create.html"><i class="uk-icon-xsmall" data-feather="plus-circle"></i> Create</a>
                                    </li>
                                    <li>
                                        <a href="author.html"><i class="uk-icon-xsmall" data-feather="user"></i> Author</a>
                                    </li>
                                    <li>
                                        <a href="authors.html"><i class="uk-icon-xsmall" data-feather="users"></i> Authors</a>
                                    </li>
                                    <li>
                                        <a href="collections.html"><i class="uk-icon-xsmall" data-feather="layers"></i> Collection</a>
                                    </li>
                                    <li>
                                        <a href="base.html"><i class="uk-icon-xsmall" data-feather="box"></i> Base components</a>
                                    </li>
                                    <li>
                                        <a href="404.html"><i class="uk-icon-xsmall" data-feather="x-circle"></i> 404 page</a>
                                    </li>
                                    <li class="uk-nav-header">Account</li>
                                    <li>
                                        <a href="sign-in.html"><i class="uk-icon-xsmall" data-feather="log-in"></i> Sign in</a>
                                    </li>
                                    <li>
                                        <a href="sign-up.html"><i class="uk-icon-xsmall" data-feather="user"></i> Sign up</a>
                                    </li>
                                    <li>
                                        <a href="reset-password.html"><i class="uk-icon-xsmall" data-feather="lock"></i> Reset password</a>
                                    </li>
                                    <li class="uk-nav-header">Content &amp; Privacy</li>
                                    <li>
                                        <a href="#"><i class="uk-icon-xsmall" data-feather="file-text"></i> Terms of use</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="uk-icon-xsmall" data-feather="file-text"></i> Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share modal -->
        <div id="share_this" class="uk-modal" data-uk-modal>
            <div class="uk-modal-dialog uk-card-xsmall uk-card-small@m uk-padding-medium-horizontal uk-margin-auto-vertical uk-width-medium@m uk-text-center uk-radius-large">
                <button aria-label="Close" class="uk-modal-close-outside" type="button" data-uk-close></button>
                <h3 class="uk-h4">Share this!</h3>
                <div class="uni-modal-share-icons uk-grid uk-child-width-expand uk-flex-center" data-uk-grid>
                    <div>
                        <a href="https://twitter.com/intent/tweet?url=#link&text=title" rel="noopener" target="_blank">
                            <div><i class="uk-icon-small brand-twitter"></i></div>
                            <span>Twitter</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=#link" rel="noopener" target="_blank">
                            <div><i class="uk-icon-small brand-facebook"></i></div>
                            <span>Facebook</span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=#link" rel="noopener" target="_blank">
                            <div><i class="uk-icon-small brand-linkedin"></i></div>
                            <span>Linkedin</span>
                        </a>
                    </div>
                    <div>
                        <a href="mailto:someone@yoursite.com?subject=title">
                            <div><i class="uk-icon-small material-icons">mail</i></div>
                            <span>E-mail</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Send Report modal -->
        <div id="send_report" class="uk-modal" data-uk-modal>
            <div class="uk-modal-dialog uk-card-xsmall uk-card-small@m uk-margin-auto-vertical uk-width-medium@m uk-radius-large">
                <button aria-label="Close" class="uk-modal-close-outside" type="button" data-uk-close></button>
                <div class="uk-panel uk-flex-center uk-flex-middle uk-height-1-1">
                    <ul hidden class="uk-subnav uk-subnav-pill" data-uk-switcher="animation: uk-animation-fade; duration: 150;">
                        <li><a href="#report">Report</a></li>
                        <li><a href="#report_feedback">Feedback</a></li>
                    </ul>
                    <ul class="uk-switcher">
                        <li>
                            <div class="uk-panel">
                                <h3 class="uk-h4">Why are you reporting?</h3>
                                <p class="uk-text-muted">Describe why you think this item should be removed from marketplace.</p>
                                <div class="uk-form-stack uk-grid-xsmall uk-child-width-1-1 uk-grid" data-uk-grid>
                                    <div class="uk-form-group">
                                        <span class="uk-text-bold">Your message:</span>
                                        <textarea class="uk-input uk-height-xsmall uk-margin-xsmall-top" placeholder="Tell us some details.."></textarea>
                                    </div>
                                    <div class="uk-form-group">
                                        <button type="button" class="uk-button uk-button-medium uk-button-danger uk-width-1-1" data-uk-switcher-item="next">Send report</button>
                                        <button type="button" class="uk-button uk-button-medium uk-button-default uk-button-alt uk-width-1-1 uk-margin-xsmall-top uk-modal-close">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel uk-text-center uk-flex-column uk-flex-middle">
                                <i class="uk-icon-large uk-text-success material-icons">check_circle</i>
                                <p class="uk-text-lead">We have received your report!</p>
                                <button type="button" class="uk-button uk-button-small uk-button-default uk-button-outline uk-margin-xsmall-top" data-uk-switcher-item="previous">Submit another report</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Place a bid modal -->
        <div id="place_bid" class="uk-modal" data-uk-modal>
            <div class="uk-modal-dialog uk-card-xsmall uk-card-small@m uk-padding-medium-horizontal uk-margin-auto-vertical uk-width-medium@m uk-radius-large">
                <button aria-label="Close" class="uk-modal-close-outside" type="button" data-uk-close></button>
                <div class="uk-panel uk-flex-center uk-flex-middle uk-height-1-1">
                    <ul hidden class="uk-subnav uk-subnav-pill" data-uk-switcher="animation: uk-animation-fade; duration: 150;">
                        <li><a href="#switcher_wallet">Connect wallet</a></li>
                        <li><a href="#switcher_place_bid">Place a bid</a></li>
                        <li><a href="#switcher_feedback">Feedback</a></li>
                    </ul>
                    <ul class="uk-switcher">
                        <li>
                            <div class="uk-panel">
                                <h3 class="uk-h4 uk-h3@m">Sign in with your wallet</h3>
                                <p class="uk-text-muted">Sign in with one of available wallet providers or create a new wallet.</p>
                                <div data-uk-margin="margin: uk-margin-xsmall-top">
                                    <a href="#wallet" class="uk-button uk-button-medium uk-button-default uk-button-outline uk-width-expand" data-uk-switcher-item="next">
                                        <span class="uk-position-center-left uk-position-small"> <img class="uk-icon-small" src="https://unistudio.co/html/renox/assets/images/other/torus.svg" alt="torus" data-uk-svg loading="lazy"> </span>
                                        <b>Torus</b>
                                    </a>
                                    <a href="#wallet" class="uk-button uk-button-medium uk-button-default uk-button-outline uk-width-expand" data-uk-switcher-item="next">
                                        <span class="uk-position-center-left uk-position-small"> <img class="uk-icon-small" src="https://unistudio.co/html/renox/assets/images/other/metamask.svg" alt="metamask" data-uk-svg loading="lazy"> </span>
                                        <b>Metamask</b>
                                    </a>
                                    <a href="#wallet" class="uk-button uk-button-medium uk-button-default uk-button-outline uk-width-expand" data-uk-switcher-item="next">
                                        <span class="uk-position-center-left uk-position-small"> <img class="uk-icon-small" src="https://unistudio.co/html/renox/assets/images/other/coinbase.svg" alt="coinbase" data-uk-svg loading="lazy"> </span>
                                        <b>Coinbase</b>
                                    </a>
                                    <a href="#wallet" class="uk-button uk-button-medium uk-button-default uk-button-outline uk-width-expand" data-uk-switcher-item="next">
                                        <span class="uk-position-center-left uk-position-small"> <img class="uk-icon-small" src="https://unistudio.co/html/renox/assets/images/other/walletconnect.svg" alt="walletconnect" data-uk-svg loading="lazy"> </span>
                                        <b>Mobile Wallet</b>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <h3 class="uk-h4 uk-h3@m uk-flex-middle">
                                    <a href="#wallet" class="uk-button uk-button-xsmall uk-button-default uk-button-outline uk-button-icon uk-radius-circle uk-margin-small-right" data-uk-switcher-item="previous"><i class="uk-icon-small material-icons">arrow_backward</i></a>
                                    <span>Place a bid</span>
                                </h3>
                                <p class="uk-text-muted">
                                    You are about to purchase <b class="uk-text-gray-100 dark:uk-text-white">Metaverse Game</b> from <b class="uk-text-gray-100 dark:uk-text-white"> <a class="uni-user-link uk-link-reset" href="author.html">@TheSalvare</a> </b>
                                </p>
                                <div data-uk-margin>
                                    <div class="uk-form-group">
                                        <div class="uk-grid-small uk-flex-middle uk-grid" data-uk-grid>
                                            <div class="uk-width-expand">Enter your bid</div>
                                            <div><input type="text" class="uk-form-blank uk-width-2xsmall uk-text-medium uk-text-right dark:uk-text-white" value="1.62"> ETH</div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="uk-form-group">
                                        <div data-uk-margin="margin: uk-margin-2xsmall-top">
                                            <div>
                                                <div class="uk-grid-small uk-flex-middle uk-grid" data-uk-grid>
                                                    <div class="uk-width-expand">Your balance</div>
                                                    <div>2.75 ETH</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-grid-small uk-flex-middle uk-grid" data-uk-grid>
                                                    <div class="uk-width-expand">Service fee</div>
                                                    <div>0.05 ETH</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="uk-grid-small uk-flex-middle uk-text-bold uk-grid" data-uk-grid>
                                                    <div class="uk-width-expand">Total bid amount</div>
                                                    <div>1.67 ETH</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-form-group uk-margin-medium-top">
                                    <button type="button" class="uk-button uk-button-medium uk-button-gradient uk-width-1-1" data-uk-switcher-item="next">Place a bid</button>
                                    <button type="button" class="uk-button uk-button-medium uk-button-default uk-button-alt uk-width-1-1 uk-margin-xsmall-top uk-modal-close">Cancel</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel uk-text-center uk-flex-column uk-flex-middle">
                                <i class="uk-icon-large uk-text-success material-icons">check_circle</i>
                                <p class="uk-text-xlarge">Your bid has been successfully placed!</p>
                                <button type="button" class="uk-button uk-button-small uk-button-default uk-button-outline" data-uk-switcher-item="previous">Place another bid</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Connect wallet modal -->
        <div id="connect_wallet" class="uk-modal" data-uk-modal>
            <div class="uk-modal-dialog uk-card-xsmall uk-card-small@m uk-padding-medium-horizontal uk-margin-auto-vertical uk-width-medium@m uk-radius-large">
                <button aria-label="Close" class="uk-modal-close-outside" type="button" data-uk-close></button>
                <div class="uk-panel uk-flex-center uk-flex-middle uk-height-1-1">
                    <ul hidden class="uk-subnav uk-subnav-pill" data-uk-switcher="animation: uk-animation-fade; duration: 150;">
                        <li><a href="#switcher_wallet">Connect wallet</a></li>
                        <li><a href="#wallet_feedback">Feedback</a></li>
                    </ul>
                    <ul class="uk-switcher">
                        <li>
                            <div class="uk-panel">
                                <h3 class="uk-h4 uk-h3@m">Sign in with your wallet</h3>
                                <div data-uk-margin="margin: uk-margin-xsmall-top">
                                    <a href="#wallet" class="uk-button uk-button-medium uk-button-default uk-button-outline uk-width-expand" data-uk-switcher-item="next">
                                        <span class="uk-position-center-left uk-position-small"> <img class="uk-icon-small" src="https://unistudio.co/html/renox/assets/images/other/torus.svg" alt="torus" data-uk-svg loading="lazy"> </span>
                                        <b>Torus</b>
                                    </a>
                                    <a href="#wallet" class="uk-button uk-button-medium uk-button-default uk-button-outline uk-width-expand" data-uk-switcher-item="next">
                                        <span class="uk-position-center-left uk-position-small"> <img class="uk-icon-small" src="https://unistudio.co/html/renox/assets/images/other/metamask.svg" alt="metamask" data-uk-svg loading="lazy"> </span>
                                        <b>Metamask</b>
                                    </a>
                                    <a href="#wallet" class="uk-button uk-button-medium uk-button-default uk-button-outline uk-width-expand" data-uk-switcher-item="next">
                                        <span class="uk-position-center-left uk-position-small"> <img class="uk-icon-small" src="https://unistudio.co/html/renox/assets/images/other/coinbase.svg" alt="coinbase" data-uk-svg loading="lazy"> </span>
                                        <b>Coinbase</b>
                                    </a>
                                    <a href="#wallet" class="uk-button uk-button-medium uk-button-default uk-button-outline uk-width-expand" data-uk-switcher-item="next">
                                        <span class="uk-position-center-left uk-position-small"> <img class="uk-icon-small" src="https://unistudio.co/html/renox/assets/images/other/walletconnect.svg" alt="walletconnect" data-uk-svg loading="lazy"> </span>
                                        <b>Mobile Wallet</b>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel uk-text-center uk-flex-column uk-flex-middle">
                                <i class="uk-icon-large uk-text-success material-icons">check_circle</i>
                                <p class="uk-text-xlarge">Your purchase has been completed!</p>
                                <button type="button" class="uk-button uk-button-small uk-button-default uk-button-outline uk-modal-close">Close</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- User login modal -->
        <div id="uni_user_login_modal" class="uk-modal-full uk-modal" data-uk-modal>
            <div class="uk-modal-dialog dark:uk-background-gray-100 dark:uk-text-gray-30">
                <div class="uk-modal-close-full uk-position-small">
                    <button aria-label="Close" class="uk-button uk-button-small uk-button-icon uk-button-danger uk-button-outline uk-radius-circle" type="button">
                        <i class="uk-icon-small uk-text-unset" data-feather="x"></i>
                    </button>
                </div>
                <div class="uk-container uk-container-xsmall">
                    <div class="uk-section uk-width-medium@m uk-margin-auto uk-flex-column uk-flex-center" data-uk-height-viewport="">
                        <div class="uk-card uk-panel">
                            <ul class="uk-subnav uk-h2" data-uk-switcher="animation: uk-animation-slide-bottom-small, uk-animation-slide-top-small" hidden>
                                <li><a href="#login">Log in</a></li>
                                <li><a href="#register">Register</a></li>
                                <li><a href="#forgot_password">Forgot Password</a></li>
                            </ul>
                            <ul class="uk-switcher uk-margin">
                                <li>
                                    <form class="uni-login-form uk-form-stacked uk-panel uk-width-1-1" action="https://unistudio.co/html/renox/main/?" method="post">
                                        <h3 class="uk-h3 uk-text-center uk-margin-large-bottom@m">Sign in</h3>
                                        <div class="uk-margin">
                                            <label for="email-login" class="uk-form-label">Your email: <span class="uk-text-danger">*</span></label>
                                            <input id="email-login" type="email" name="email" autocomplete="email" class="uk-input" value="user@example.com" required>
                                        </div>
                                        <div class="uk-margin">
                                            <label for="password-login" class="uk-form-label">Your password: <span class="uk-text-danger">*</span></label>
                                            <input id="password-login" type="password" name="current-password" autocomplete="current-password" class="uk-input" value="12345678" required>
                                        </div>
                                        <div class="uk-margin uk-grid uk-flex-between uk-flex-middle" data-uk-grid>
                                            <div class="uk-flex uk-flex-middle">
                                                <input id="remember-login" type="checkbox" name="remember" class="uk-checkbox" checked>
                                                <label for="remember-login" class="uk-form-label uk-margin-xsmall-left">Remember me?</label>
                                            </div>
                                            <div>
                                                <a href="#user_reset_password" class="uk-link-line uk-text-small uk-text-bold" data-uk-switcher-item="2">
                                                    <span>Forgot password</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="uk-margin-medium">
                                            <button type="submit" class="uk-button uk-button-primary uk-button-large@m uk-width-expand">Log in</button>
                                        </div>
                                        <div class="uk-grid uk-grid-xsmall uk-flex-center uk-text-xlarge uk-margin-medium-top@m" data-uk-grid>
                                            <a aria-label="facebook" href="#facebook"><i class="brand-facebook-alt"></i></a>
                                            <a aria-label="google" href="#google"><i class="brand-google"></i></a>
                                            <a aria-label="twitter" href="#twitter"><i class="brand-twitter"></i></a>
                                        </div>
                                    </form>
                                    <p class="uk-text-small uk-text-bold uk-text-center uk-margin-large-top@m">
                                        Don't have an account? <a href="#user_sign_up" class="uk-link-line" data-uk-switcher-item="1"><span>Sign up</span></a>.
                                    </p>
                                </li>
                                <li>
                                    <form class="uni-signup-form uk-form-stacked uk-panel uk-width-1-1" action="https://unistudio.co/html/renox/main/?" method="post">
                                        <h3 class="uk-h3 uk-text-center uk-margin-large-bottom@m">Create an account</h3>
                                        <div class="uk-margin">
                                            <label for="name-signup" class="uk-form-label">Your name:</label>
                                            <input id="name-signup" type="text" name="name" autocomplete="name" class="uk-input" value="thesalvare">
                                        </div>
                                        <div class="uk-margin-medium">
                                            <label for="email-signup" class="uk-form-label">Your email: <span class="uk-text-danger">*</span></label>
                                            <input id="email-signup" type="email" name="email" autocomplete="email" class="uk-input" value="user@example.com" required>
                                        </div>
                                        <div class="uk-margin">
                                            <label for="password-signup" class="uk-form-label">Your password: <span class="uk-text-danger">*</span></label>
                                            <input id="password-signup" type="password" name="new-password" autocomplete="new-password" class="uk-input" value="12345678" required>
                                        </div>
                                        <div class="uk-margin-medium">
                                            <button type="submit" class="uk-button uk-button-primary uk-button-large@m uk-width-expand">Sign up</button>
                                        </div>
                                        <div class="uk-grid uk-grid-xsmall uk-flex-center uk-text-xlarge uk-margin-medium-top@m" data-uk-grid>
                                            <a aria-label="facebook" href="#facebook"><i class="brand-facebook-alt"></i></a>
                                            <a aria-label="google" href="#google"><i class="brand-google"></i></a>
                                            <a aria-label="twitter" href="#twitter"><i class="brand-twitter"></i></a>
                                        </div>
                                    </form>
                                    <p class="uk-text-small uk-text-bold uk-text-center uk-margin-large-top@m">
                                        You already have an account? <a href="#user_login" class="uk-link-line" data-uk-switcher-item="0"><span>Log in</span></a>.
                                    </p>
                                </li>
                                <li>
                                    <form class="uk-form-stacked uk-panel uk-width-1-1" action="https://unistudio.co/html/renox/main/?" method="post">
                                        <h3 class="uk-h3 uk-text-center uk-margin-large-bottom@m">Forgot password?</h3>
                                        <div class="uk-margin">
                                            <label for="email-reset" class="uk-form-label">Your email: <span class="uk-text-danger">*</span></label>
                                            <input id="email-reset" type="email" name="email" class="uk-input" required>
                                        </div>
                                        <div class="uk-margin-top">
                                            <button type="submit" class="uk-button uk-button-primary uk-button-large@m uk-width-expand">Reset my password</button>
                                        </div>
                                    </form>
                                    <p class="uk-text-small uk-text-bold uk-text-center uk-margin-large-top@m">
                                        Did you remember your password? <a href="#user_login" class="uk-link-line" data-uk-switcher-item="0"><span>Log in</span></a>.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap">

         

                    @include('templates/header')






    <div id="app">
    

        <main class="py-4">
            @yield('content')
        </main>
    </div>


        @include('templates/footer')

        <!-- include scripts -->
        <script defer src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/typed.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/anime.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/app.js') }}"></script>
        <script defer src="{{ asset('assets/js/swiper-helper.js') }}"></script>
        <script defer src="{{ asset('assets/js/typed-helper.js') }}"></script>
        <script defer src="{{ asset('assets/js/anime-helper.js') }}"></script>
        <script defer src="{{ asset('assets/js/anime-helper-defined-timelines.js') }}"></script>
      


</body>
</html>

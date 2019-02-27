<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from colorlib.com//polygon/adminty/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Feb 2019 14:51:38 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <title>Adminty - Premium Admin Template by Colorlib </title>
        <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="#">
        <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="#">
        <link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/v1/files/bower_components/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/v1/files/assets/icon/themify-icons/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/v1/files/assets/icon/icofont/css/icofont.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/v1/files/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/v1/files/assets/pages/notification/notification.css">
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/jquery/js/jquery.min.js"></script>
    </head>
    <body class="fix-menu">
        <div class="theme-loader">
            <div class="ball-scale">
                <div class='contain'>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>
        <section class="login-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="md-float-material form-material" method="POST" action="{{route('postLoginAdmin')}}">
                            {{ csrf_field() }}
                            <div class="text-center">
                                <img src="{{url('')}}/assets/admin/v1/files/assets/images/logo.png" alt="logo.png">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center txt-primary">{{__('general.signIn')}}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="txtUsername" class="form-control" required="" placeholder="{{__('placeholder.username')}}">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="txtPassword" class="form-control" required="" placeholder="{{__('placeholder.password')}}">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label>
                                                <input name="remember" type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">{{__('general.rememberMe')}}</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                <a href="auth-reset-password.html" class="text-right f-w-600"> {{__('general.forgotPassword')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{__('general.LOGIN')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--[if lt IE 10]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="{{url('')}}/assets/admin/v1/files/assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="{{url('')}}/assets/admin/v1/files/assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="{{url('')}}/assets/admin/v1/files/assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="{{url('')}}/assets/admin/v1/files/assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="{{url('')}}/assets/admin/v1/files/assets/images/browser/ie.png" alt="">
                            <div>IE (9 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
        <![endif]-->
        <button class="btn btn-danger waves-effect" data-type="danger" data-from="top" data-align="right">Danger</button>
        
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/popper.js/js/popper.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/modernizr/js/modernizr.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/modernizr/js/css-scrollbars.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/i18next/js/i18next.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/assets/js/common-pages.js"></script>
        <script type="text/javascript" src="{{url('')}}/assets/admin/v1/files/assets/pages/notification/notification.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        
    </body>
    <!-- Mirrored from colorlib.com//polygon/adminty/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Feb 2019 14:51:38 GMT -->
</html>
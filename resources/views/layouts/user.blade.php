<!doctype html>
<html lang="en">
<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!--Font Links-->
    <!--Plugin Links-->
    <!--CSS Links-->
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/')}}/css/media.css">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/bbb5971462.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- start wrapper -->
<div id="wrapper">
    <!-- main section start -->
    <section class="main">
        <div class="container-fluid">
            <!-- top section start -->
            <div class="top_section black_border">
                <div class="gold_border w-100">
                    <div class="overflow-hidden p-3">
                        <!-- left -->
                        <div class="float-left">
                            <table class="table table-sm table-borderless text-white">
                                <thead>
                                <tr>
                                    <th>STATUS</th>
                                    <th></th>
                                    <th>USD</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div><img src="{{asset('assets/frontend/')}}/images/green.png" class="img-fluid mr-2" alt="dollar">Deposit</div>
                                    </td>
                                    <td>:</td>
                                    <td style="color: #8cc63f;">$11.45</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div><img src="{{asset('assets/frontend/')}}/images/yellow.png" class="img-fluid mr-2" alt="dollar">Stake in Bet</div>
                                    </td>
                                    <td>:</td>
                                    <td style="color: #f7941e;">$0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div><img src="{{asset('assets/frontend/')}}/images/red.png" class="img-fluid mr-2" alt="dollar">Remaining</div>
                                    </td>
                                    <td>:</td>
                                    <td style="color: #ed1c24;">$11.45</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- right -->
                        <div class="float-right">
                            <table class="table table-sm table-borderless text-white">
                                <thead>
                                <tr>
                                    <th id="today"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="text-info"><img src="{{asset('assets/frontend/')}}/images/user.png" class="img-fluid mr-2" alt="ID">ID</div>
                                    </td>
                                    <td>:</td>
                                    <td>1124</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-info"><img src="{{asset('assets/frontend/')}}/images/user.png" class="img-fluid mr-2" alt="dollar">NAME</div>
                                    </td>
                                    <td>:</td>
                                    <td>hello</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="text-info"><img src="{{asset('assets/frontend/')}}/images/user.png" class="img-fluid mr-2" alt="dollar">STATUS</div>
                                    </td>
                                    <td>:</td>
                                    <td>gold</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- logo -->
                <div class="logo">
                    <img src="{{asset('assets/frontend/')}}/images/logo.png" class="img-fluid" alt="logo">
                </div>
            </div>
            <!-- top section end -->
            <div class="black_border">
                <div class="gold_border">
                    <!-- navigation -->
                    <nav class="navbar navbar-expand navbar-dark justify-content-center" id="main_nav">
                        <ul class="navbar-nav text-center menubar">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('dashboard')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="myaccount.html">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="message.html">Message</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="transaction.html">Transaction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="myprofile.html">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="help.html">Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signin.html">Log Out</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- marquee -->
                    <section class="message">
                        <div>Latest News</div>
                    </section>
                    <!-- content -->
                    @yield('user')
                    <!-- footer -->
                    <div class="footer">
                        <div class="overflow-hidden">
                            <div class="float-left">
                                &copy; websitename.com
                            </div>
                            <div class="float-right">
                                <a href="termCondition.html">Term & Condition | </a>
                                <a href="privacyPolicy.html">Privacy Policy | </a>
                                <a href="rulesRegulation.html">Rules & Regulation | </a>
                                <a href="contactUs.html">Contact Us</a>
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <div class="align-self-center">
                                <p>BetBox777 is Committed to Supporting Responsible Gambling. Under Age Gambling is an Offence.</p>
                            </div>
                            <div class="ml-auto">
                                <img src="{{asset('assets/frontend/')}}/images/payment.png" class="img-fluid" alt="payment" style="width: 150px;">
                            </div>
                        </div>
                        <div>
                            <p class="text-muted m-0">By accessing, continuing to use, or navigating throughout this site you accept that we will utilise certain browser cookies to improve the experience which you receive with us. Our Website do not use any cookies which interfere with your privacy, but only ones which will improve your experience whilst using our site, please refer to our FAQs for further information on our use of cookies and how you prevent their use should you wish.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main section end -->
</div>
<!-- end wrapper -->
<!-- Create New Offer modal -->

<!--jQuery Links-->
<script src="{{asset('assets/frontend/')}}/js/jquery-1.12.4.min.js"></script>
<!--Plugin Links -->
<!--BS Links -->
<script src="{{asset('assets/frontend/')}}/js/popper.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets/frontend/')}}/js/script.js"></script>


@yield('js')

<script>
    var d = new Date();
    document.getElementById("today").innerHTML = d.toDateString();
</script>
<script>
    // MARQUEE/
    var runAnimation = null;
    var windowWidth = $(window).width();
    var $targetDomElement = $('.message div');
    var textOuterWidth = $targetDomElement.outerWidth();
    var windowAndElementWidth = Math.round($(window).width() + textOuterWidth);
    var offsetFromLeft = Math.round($targetDomElement.offset().left);
    var speed = 100;
    var animation;
    $targetDomElement.css({
        'right': -(textOuterWidth)
    });
    function marquee(animation) {
        windowAndElementWidth = Math.round($(window).width() + $targetDomElement.outerWidth());
        var duration = speed;
        var time = Math.round(windowAndElementWidth / speed * 1000);
        animation = $targetDomElement.animate({
            'right': windowAndElementWidth + 'px'
        }, time, "linear", function() {
            $targetDomElement.css({
                'right': -(textOuterWidth)
            });
        });
        console.log(animation);
        runAnimation = setTimeout(marquee, time);
    }
    runAnimation = setTimeout(marquee, 100, function() {});
    $(window).on('resize', function() {
        var win = $(this); //this = window
        if (win.height() >= 820) {
            /* ... */
        }
        if (win.width() >= 1280) {
            /* ... */
        }
        $targetDomElement.stop();
        clearTimeout(runAnimation);
        runAnimation = setTimeout(marquee);
    });
</script>
</body>
</html>

<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" manifest=""> <!--<![endif]-->

<!-- Mirrored from www.winuall.com/ by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 03 Dec 2016 00:46:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Home - Winuall</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!--Description-->
    <meta name='description'
          content='Get answer to all your doubts at Winuall by the Experts. We have Experts for you to solve your problems, whether it be a small one or a tough one! .'>

    <!--Google Verify Meta Tag-->
    <meta name="google-site-verification" content="RDM-XpLX5ahFvewrrcOMHdb3AZgJmSBY4UcIIe6rbAY"/>


    <meta name="keywords" content="iit,jee,mains,advanced,online coaching,winuall,preparation,doubts,solve,kota">


    <!--csrf-token-->
    <meta name="csrf-token" content="v5SpkhcQTjMCjMv3osxyONG1swEj27zIcXsumZfm"/>

    <meta name="logged-user"
          content="">
    <!-- Main Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Skins -->
    <link rel="stylesheet" href="css/skins/skins.css">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="css/responsive.css">



    <link rel="manifest" href="manifest.json">

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#01579b">
    <meta name="msapplication-TileColor" content="#0c7ad1">
    <meta name="msapplication-TileImage" content="mstile-144x144.png">
    <meta name="theme-color" content="#01579B">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <!--End favicons-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css"
          integrity="sha256-e47xOkXs1JXFbjjpoRr1/LhVcqSzRmGmPqsrUQeVs+g=" crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"
            integrity="sha256-p2l8VeL3iL1J0NxcXbEVtoyYSC+VbEbre5KHbzq1fq8=" crossorigin="anonymous"></script>

    <script type="text/javascript" href="js/jquery.imageareaselect.min.html"></script>
    <script type="text/javascript" href="js/fileuploader.min.js"></script>
    <!--Icons-->

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="html_css/scripts/modernizr.js"></script>

    <!-- pizza pie chart
        <link href="stylesheets/pizza.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
    -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet"/>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>

    <!--font awesome loaded-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


    <style>
        #notification_count {
            padding: 3px 7px 3px 7px;
            background: #cc0000;
            color: #ffffff;
            font-weight: bold;
            margin-left: 18px;
            border-radius: 9px;
            position: absolute;
            margin-top: 0px;
            font-size: 11px;
        }
    </style>


</head>
<body><!--
<div class="loader">
    <div class="loader_html"></div>
</div> -->
@yield('show')
<div id="wrap" class="grid_1200">
    <header id="header">
        <section class="container clearfix">
            <div class="logo"><a href="index.html"><img alt=""
                                                        src="images/logo.png"></a>
            </div>

            <div class="header-search">
                <i class="fa fa-1x fa-search search-icon-2" style="top: 14px;position: absolute;color:#fff;"></i>
                <input id="search" type="text" placeholder="Search Here" style="width: 90%;line-height: 14px">
                <button type="submit" class="icon-remove" style="display: none; color: white;"></button>
                <a type="submit" class="submit-2"><i class="fa fa-arrow-right"></i></a>
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li></li>
                    <li>
                        <a id="login" href="auth/login.html">Login / Register</a>
                    </li>


                </ul>
            </nav>


        </section><!-- End container -->

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "http://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1627396500917650";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


        <!-- FACEBOOK PIXEL CODE -->
        <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                    document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '27239920976106'); // Insert your pixel ID here.
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=27239920976106&amp;ev=PageView&amp;noscript=1"
            /></noscript>

    </header><!-- End header -->


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</div>
</body>

<!-- Mirrored from www.winuall.com/ by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 03 Dec 2016 00:46:31 GMT -->
</html>
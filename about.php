<html>
<head>
    <title>Meme generator app</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <!-- NEW CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content="http://webthemez.com"/>
    <!-- css -->
    <style></style>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="colorpicker/spectrum.js"></script>
    <script type="text/javascript" src="jquery.memegenerator.min.js"></script>
    <!-- 		<script type="text/javascript" src="jquery.memegenerator.pl.js"></script> -->

    <link rel="stylesheet" type="text/css" href="jquery.memegenerator.min.css">
    <link rel="stylesheet" type="text/css" href="colorpicker/spectrum.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.css">

    <link rel="stylesheet" href="css/gh-buttons.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen" charset="utf-8">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <!--    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">-->
    <link href="css/flexslider.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>


    <script type="text/javascript" src="lib/jquery-easing-1.3.0.js"></script>
    <script type="text/javascript" src="lib/modernizr.mediaqueries.transforms3d.js"></script>
    <script type="text/javascript" src="lib/responsive-hub.js"></script>
    <script type="text/javascript" src="src/jquery.silver_track.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.navigator.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.bullet_navigator.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.remote_content.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.responsive_hub_connector.js"
            charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.css3_animation.js" charset="utf-8"></script>
    <script type="text/javascript" src="src/plugins/jquery.silver_track.circular_navigator.js" charset="utf-8"></script>

    <script type="text/javascript" src="js/script.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/example1.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/example2_and_3.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/example4.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/example5.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/example6.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/example7.js" charset="utf-8"></script>

    <script>
        $(function () {
            $.responsiveHub({
                layouts: {
                    480: "phone",
                    481: "small-tablet",
                    731: "tablet",
                    981: "web"
                },
                defaultLayout: "web"
            });
        });
    </script>


    <script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript">
        $(document).ready(function () {
            /*
            *   Examples - images
            */

            $("a#example1").fancybox();

            $("a#example2").fancybox({
                'overlayShow': false,
                'transitionIn': 'elastic',
                'transitionOut': 'elastic'
            });

            $("a#example3").fancybox({
                'transitionIn': 'none',
                'transitionOut': 'none'
            });

            $("a#example4").fancybox({
                'opacity': true,
                'overlayShow': false,
                'transitionIn': 'elastic',
                'transitionOut': 'none'
            });

            $("a#example5").fancybox();

            $("a#example6").fancybox({
                'titlePosition': 'outside',
                'overlayColor': '#000',
                'overlayOpacity': 0.9
            });

            $("a#example7").fancybox({
                'titlePosition': 'inside'
            });

            $("a#example8").fancybox({
                'titlePosition': 'over'
            });

            $("a[rel=example_group]").fancybox({
                'transitionIn': 'none',
                'transitionOut': 'none',
                'titlePosition': 'over',
                'titleFormat': function (title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                }
            });

            /*
            *   Examples - various
            */

            $("#various1").fancybox({
                'titlePosition': 'inside',
                'transitionIn': 'none',
                'transitionOut': 'none'
            });

            $("#various2").fancybox();

            $("#various3").fancybox({
                'width': '75%',
                'height': '75%',
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'type': 'iframe'
            });

            $("#various4").fancybox({
                'padding': 0,
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none'
            });
        });
    </script>


    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-102315848-4', 'auto');
        ga('send', 'pageview');

    </script>


    <style>
        h2 {
            display: block;
            text-align: center;
        }

        .example {
            margin: 0 0 10% 0;
        }

        .bootstrap {
            width: 600px;
            margin-right: auto;
            margin-left: auto;
        }

        .save button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            font-size: 24px;
        }

        #preview {
            min-height: 200px;
            background-color: #EFEFEF;
            font-family: monospace;
            overflow-y: auto;
        }

        #preview img {
            max-width: 100%;
        }

        body {

            font-family: arial;

        }

    </style>
</head>
<body>

<div id="wrapper" class="home-page">


    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="background: white!important;" href="index.php"><img src="images/mainLogo.png" alt="logo"/></a>
                    <!--                    <a class="navbar-brand nav-logo" href="index.php"><img src="images/memeLogo.png" alt="logo"/></a>-->
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="waves-effect waves-dark" href="index.php">Home</a></li>
                        <li id="anchorCreate"><a  class="waves-effect waves-dark" href="#creating">Create meme</a></li>
                        <li><a  class="waves-effect waves-dark" href="about.php">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <section class="content">
    <div class="row">

        <div class="row">
            <div class="col-md-5">
                <br>

                <center>
                    <h1>Meme generator app</h1>
                </center>

                <br>

                <center><img src="meme.jpg" alt="Meme Generator App"/></center>
            </div>


            <div class="col-md-6">

                <b>Main features:</b>
                <br><br>

                <ul>

                    <li>✓ Choose templates from Multiple meme categories.</li>
                    <li>✓ 1000+ high quality memes with lots of example captions to choose from.</li>
                    <li>✓ Quickly save memes and Share @ your favorite social media.</li>
                    <li>✓ Custom memes supported, so you can use any picture from your gallery!</li>
                    <li>✓ You can also Add stickers to memes - a huge collection of stickers is available!</li>
                    <li>✓ Adjust text font family, color & size.</li>
                    <li>✓ Create complex memes with unlimited captions</li>
                    <li>✓ Move captions anywhere you want and add your own</li>
                    <li>✓ Smart Image Cropping tool available.</li>
                    <li>✓ Quick scroll and optional grid view for individual categories.</li>
                    <li>✓ Add borders to any image you want.</li>
                    <li>✓ SEARCH and find you favorite meme in seconds.</li>
                    <li>✓ Create your own list of favorite memes!</li>
                    <li>✓ Regularly updated memes to work with!</li>
                    <li>✓ Watermark free images. Claim what you created :)</li>
                    <li>✓ The app DOES NOT automatically upload any meme you create – your privacy is our top
                        priority!
                    </li>
                    <li>✓ Make funny pictures, cover photos, profile pictures quickly for your social media profile.
                    </li>

                </ul>

            </div>

        </div>
    </div>
    </section>

    <footer>
        <div class="container">

            <center>

                With <b>Meme generator app</b> you can create the funniest memes and share them with your friends via
                Facebook,<br>
                Twitter, Instagram, WhatsApp, Messenger, Google+, E-mail, Dropbox, Drive, Snapchat etc.<br><br>


                <h3>What is the Meme Generator App?</h3><br>

                It's a free online <i>Meme generator app</i> that allows you to add custom resizable text to images. you
                can
                make
                images instantly. Most commonly, people use the app tp make meme but you can create any graphics like
                facebook
                cover
                photo,<br> Profile picturs or even business cards. you can also upload your own images as templates.
                <br><br>


                <br>
                A <a href="https://en.wikipedia.org/wiki/Meme">meme</a> is an idea, behavior, or style that spreads from
                person
                to
                person within a culture.[1] A meme acts as a unit for carrying cultural ideas, symbols,<br>
                or practices that can be transmitted from one mind to another through writing, speech, gestures,
                rituals, or
                other
                imitable phenomena with a mimicked theme.<br>
                Supporters of the concept regard memes as cultural analogues to genes in that they self-replicate,
                mutate, and
                respond to selective pressures.<br><br>

                <h4>Thanks for using <u>Meme maker app</u></h4>
            </center>
        </div>
    </footer>
</div>

<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="js/jquery.js"></script>-->
<!--<script src="js/jquery.easing.1.3.js"></script>-->
<!--<script src="materialize/js/materialize.min.js"></script>-->
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/jquery.fancybox.pack.js"></script>-->
<!--<script src="js/jquery.fancybox-media.js"></script>-->
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>


</body>
</html>

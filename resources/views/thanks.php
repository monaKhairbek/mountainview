

<!DOCTYPE html>


<html >
<head>

    <style>
        body {
            background: #fff;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
            position: relative;
            background-image: url(../../mountainview/theme/Images/backSectwo.png);
            background-repeat: no-repeat;
        }

        .jumbotron > hr {
            border-top-color: #d5d5d5;
            border: none;
        }
    </style>
    <!-- //  Arabic numbers support for any web browser by Unicode. added by Mahmoud


    // alMubarmij [at] gmail [dot] com
    // Don't forget to add: onload="replaceDigits()" in <body> tag.  -->
    <script type="text/javascript">
        //var map =
        //                [
        //                "&\#1632;","&\#1633;","&\#1634;","&\#1635;","&\#1636;",
        //                "&\#1637;","&\#1638;","&\#1639;","&\#1640;","&\#1641;"
        //                ]

        //var replaceDigits = function () {
        //    //alert("from window.onload");
        //    document.body.innerHTML =
        //        document.body.innerHTML.replace(
        //            /\d(?=[^<>]*(<|$))/g,
        //            function($0) { return map[$0] }
        //        );
        //}
        function replaceDigits(id) {


            var el, text;
            var arabicCharCodes = {
                '0': '1632',
                '1': '1633',
                '2': '1634',
                '3': '1635',
                '4': '1636',
                '5': '1637',
                '6': '1638',
                '7': '1639',
                '8': '1640',
                '9': '1641'
            }

            // Do not process script elements, add others that have content but
            // shouldn't be processed, e.g. maybe object
            var elementsToIgnore = { script: 'script' };

            // If passed a string, expect ID so get element
            el = typeof id == 'string' ? document.getElementById(id) : id;

            // If no element, return
            if (!el) return;

            var node, childNodes = el.childNodes;

            for (var i = 0, iLen = childNodes.length; i < iLen; i++) {
                node = childNodes[i];

                // Recurse over all nodes and only replace the content of text nodes
                // in elements that are not in the ignore list
                if (node.nodeType == 1 && node.tagName && !(node.tagName in elementsToIgnore)) {
                    replaceDigits(node);

                } else if (node.nodeType == 3) {
                    text = node.data.split('');

                    for (var j = 0, jLen = text.length; j < jLen; j++) {

                        if (text[j] in arabicCharCodes) {
                            text[j] = String.fromCharCode(arabicCharCodes[text[j]]);
                        }
                    }
                    node.data = text.join('');
                }
            }
        }

        window.onload = replaceDigits("bdy");
    </script>

    <script>
(function (w, d, s, l, i) {
w[l] = w[l] || []; w[l].push({
'gtm.start':
new Date().getTime(), event: 'gtm.js'
}); var f = d.getElementsByTagName(s)[0],
j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-NXXDWZR');
    </script>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content=" Website" />
    <title>iApartment Landing page</title>
    <!--browser icon-->
    <link rel="shortcut icon" href="/Images/favicon.ico" type="image/x-icon" />
    <link href="mountainview/css/reset.css" rel="stylesheet" />
    <link href="mountainview/css/bootstrap.min.css" rel="stylesheet" />
    <link href="mountainview/css/font-awesome.css" rel="stylesheet" />
    <link href="mountainview/css/animate.min.css" rel="stylesheet" />
    <link href="mountainview/css/material-design-iconic-font.css" rel="stylesheet" />
    <link href="mountainview/css/Swiper.css" rel="stylesheet" />
    <!-- fancybox -->
    <link href="mountainview/css/jquery.fancybox.css" rel="stylesheet" />

    <link href="mountainview/css/style.css" rel="stylesheet" />
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <script type="text/javascript">
        function RunReplaceDigits(bLanguage) {
            // run only in rabic version
            if (!bLanguage) {
                // alert("RunReplaceDigits");
                replaceDigits("bdy");
                replaceDigits("footer");
            }
        }
    </script>

</head>
<body onload="RunReplaceDigits(onload)"  id="bdy">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXXDWZR"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--------------------------------------------------  header  ----------------------------------------------------->




    <!--------------------------------------------------  header  ----------------------------------------------------->

    <div>
        


<style>
    body {
       background: #fff;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
    position: relative;
    background-image: url(../../theme/Images/backSectwo.png);
    background-repeat: no-repeat;
    }
    .jumbotron > hr {
    border-top-color: #d5d5d5;
    border: none;
}

</style>
<div class="ThanksPage">
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Please check your email</strong> for further instructions.</p>
        <hr>
        <p>
            Having trouble? <a href="/?source=#Contactus">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="/" role="button">Back to homepage</a>
        </p>
    </div>
</div>

    </div>

    <!--------------------------------------------------   Footer   ----------------------------------------------------->

    
   

    <!--------------------------------------------------   Footer   ----------------------------------------------------->
    <!-- child of the body tag -->
    <!-- /top-link-block -->
    <!-- jquery -->
    <script src="/js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- sliders -->
    <script src="/js/swiper.jquery.min.js"></script>
    <!-- fancybox -->
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/jquery.touchSwipe.min.js"></script>

    <!-- parsley -->
    <script src="/js/parsley.min.js"></script>
    <script src="/js/jquery.nicescroll.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/reflection.js"></script>
    <!-- My scripts -->
    <script src="/js/scripts.js"></script>

    
   


</body>
</html>

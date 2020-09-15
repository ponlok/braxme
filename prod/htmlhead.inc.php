<?php
require_once("config.php");
$randomid = uniqid();


echo "<!DOCTYPE html>\r\n";
echo "<html>\r\n";
echo "<head>\r\n";
echo "<meta charset='utf-8'>";

//echo "<META HTTP-EQUIV='Pragma' CONTENT='private'>";
//echo "<META HTTP-EQUIV='Expires' CONTENT='-1'>";
echo "<META HTTP-EQUIV='CACHE-CONTROL' CONTENT='private'>";
echo "<meta name='description' content='$enterpriseapp - Building Private Communities'>";
echo "<meta property='og:title' content='$appname - $enterpriseapp' />";
echo "<meta property='og:url' content='$rootserver/index.php' />";
echo "<meta property='og:image' content='$rootserver/img/bigstock-mobile-phone-mobility-wireless.jpg' />";        

//echo "<meta name='ROBOTS' content='NOINDEX, NOFOLLOW'>";
echo "<meta name='viewport' content='width=device-width, height=device-height, initial-scale=1,maximum-scale=1'>";
//echo "<meta name='apple-mobile-web-app-capable' content='yes'>";
echo "<meta name='mobile-web-app-capable' content='yes'>";
echo "<link rel='manifest' href='$rootserver/$installfolder/manifest.json'>";
        
if(!$customsite)
{
echo "<link rel='apple-touch-startup-image' href='$rootserver/img/logo-b1a.png'>";
echo "<link rel='icon' href='$rootserver/img/logo-b1a.png'>";
echo "<link id=favicon rel='shortcut icon' href='$rootserver/img/logo-b1a.ico'>";
echo "<link rel='apple-touch-icon' href='$rootserver/img/logo-b1a.png'>";
echo "<link rel='apple-touch-icon-precomposed' href='$rootserver/img/logo-b1a.png'>";
echo "<link rel='apple-touch-startup-image' href='$rootserver/img/logo-b1a.png' />";
}
else
{
echo "<link rel='apple-touch-startup-image' href='$rootserver/img/logo-powa-transparent-1024.png'>";
echo "<link rel='icon' href='$rootserver/img/logo-powa-transparent-1024.png'>";
echo "<link id=favicon rel='shortcut icon' href='$rootserver/img/logo-powa.ico'>";
echo "<link rel='apple-touch-icon' href='$rootserver/img/logo-powa-transparent-1024.png'>";
echo "<link rel='apple-touch-icon-precomposed' href='$rootserver/img/logo-powa-transparent-1024.png'>";
echo "<link rel='apple-touch-startup-image' href='$rootserver/img/logo-powa-transparent-1024.png' />";
}    


echo "<link href='$rootserver/fonts/font-raleway.css' rel='stylesheet'>";

echo "<link rel='stylesheet' href='$rootserver/libs/alertify.js-0.3.10/themes/alertify.core.css' />\r\n";
echo "<link rel='stylesheet' href='$rootserver/libs/alertify.js-0.3.10/themes/alertify.default.css' />\r\n";
echo "<script src='$rootserver/libs/alertify.js-0.3.10/src/alertify.js'></script>\r\n";


//echo "<link rel='stylesheet' href='$rootserver/libs/AlertifyJS-master/build/css/alertify.min.css' />\r\n";
//echo "<link rel='stylesheet' href='$rootserver/libs/AlertifyJS-master/build/css/themes/semantic.css' />\r\n";
//echo "<script src='$rootserver/libs/AlertifyJS-master/build/alertify-min.js'></script>\r\n";

//echo "<script src='https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js'></script>\r\n";

echo "<script src='$rootserver/$installfolder/passwordcheck.js?$randomid'></script>\r\n";


echo "<link rel='stylesheet' href='$rootserver/libs/jquery-1.11.1/jquery-ui.css'>";
echo "<script src='$rootserver/libs/jquery-1.11.1/jquery.min.js' ></script>";
echo "<script src='$rootserver/libs/jquery-1.11.1/jquery-ui.js' ></script>";


//echo "<link rel='styleSheet' href='$rootserver/$installfolder/app.css' type='text/css'/>\r\n";
echo "<link rel='styleSheet' href='$rootserver/$installfolder/app.css?$randomid' type='text/css'/>\r\n";
echo "<link rel='styleSheet' href='$rootserver/$installfolder/animate.css' type='text/css'/>\r\n";
echo "\r\n";
echo "\r\n";
echo "<script type='text/javascript' src='$rootserver/$installfolder/base64v1_0.js'></script>\r\n";
echo "<script type='text/javascript' src='$rootserver/libs/jquery-touch-swipe/jquery.touchSwipe.min.js'></script>\r\n";

echo "<link rel='styleSheet' href='$rootserver/$installfolder/jquery.simple-dtpicker.css' type='text/css'/>\r\n";
echo "<script type='text/javascript' src='$rootserver/$installfolder/jquery.simple-dtpicker.js'></script>\r\n";
echo "<script type='text/javascript' src='$rootserver/libs/jquery.visible/jquery.visible.js'></script>\r\n";
echo "<script type='text/javascript' src='$rootserver/libs/audio/audiojs/audio.js?$randomid'></script>\r\n";
echo "<script type='text/javascript' src='$rootserver/libs/Mediabuffer-master/mediabuffer.js'></script>\r\n";

echo "<script src='$rootserver/libs/twitch/v1.js'  ></script>\r\n";

//echo "<script type='text/javascript' src='$rootserver/libs/qtip/jquery.qtip.min.js'></script>\r\n";
//echo "<link rel='styleSheet' href='$rootserver/libs/qtip/jquery.qtip.min.css' type='text/css'/>\r\n";

echo "<script type='text/javascript' src='$rootserver/libs/fastclick/fastclick.js'></script>\r\n";

echo "<script type='text/javascript' src='$rootserver/libs/bgrins-spectrum/spectrum.js'></script>\r\n";
echo "<link rel='styleSheet' href='$rootserver/libs/bgrins-spectrum/spectrum.css' type='text/css'/>\r\n";

echo "<script type='text/javascript' src='$rootserver/libs/imagesloaded-master/imagesloaded.pkgd.min.js?$randomid'></script>\r\n";

echo "<script type='text/javascript' src='$rootserver/$installfolder/notify.js'></script>\r\n";


//		<link rel='stylesheet' href='$rootserver/$installfolder/animation/css/normalize.min.css'>
echo "
		<link rel='stylesheet' href='$rootserver/$installfolder/animation/css/main.css?$randomid'>
		<link rel='stylesheet' href='$rootserver/$installfolder/animation/css/font-awesome.min.css'>
";

//echo "<script type='text/javascript' src='$rootserver/$installfolder/animation/js/main.js'></script>\r\n";
echo "<script type='text/javascript' src='$rootserver/$installfolder/animation/js/prefixfree.min.js'></script>\r\n";
//echo "<script type='text/javascript' src='https://cdnjs.com/libraries/pdf.js'></script>\r\n";





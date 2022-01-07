<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>image steganography</title>
<meta name="keywords" content="steganografie online,steganography decoder freeware,how to decode steganography image,steganography detection online,steganography encoder,steganography decrypt jpg,steganography text decoder" />
<meta name="description" content="The image Steganographic Decoder tool allows you to extract data from Steganographic image." />
<link rel="shortcut icon" href="/img/favicon.ico" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/cerulean/bootstrap.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/steganography.css" media="all" />
</head>
<body background="i.png">
<script data-ad-client="ca-pub-4718784509543957" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<div class="navbar navbar-default navbar-static-top">
<div class="container-fluid">
<div class="nav_bar">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

</div></div>
</div> <div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center">
<h1>Steganographic Decoder</h1>
</div>
</div>
<div class="row">
<div class="col-md-8 col-md-offset-2">
<p class="text-center">The image Steganographic Decoder tool allows you to extract data from Steganographic image. You could hide text data from <a href="image-steganography.php">Image steganography tool</a>.</p>
<div class="well well-sm">
<fieldset>

<div class="form-group">
<label>Select a picture:</label>
 <input type="file" accept="image/*" id="decode_image" onchange="javascript:selectEncodeImage()">
</div>
<div class="form-group">
<label>Password or leave a blank:</label>
<textarea class="form-control" placeholder="Enter the password, if there is no password, leave it blank." id="decode_pwd"></textarea>
</div>

<div class="form-group text-center">
<button class="btn btn-primary small" onclick="javascript:decode()" type="button">Decode</button> <button id="clear" name="clear" class="btn btn-danger">Clear</button>
</div>
</div>

<div class="form-group alert alert-success" id="res" style="display:none">
<canvas id="decode_result_image" class="hidden"></canvas>
<div class="strong" id="messageDecoded"></div>
</div>
</fieldset>
</div>
</div>
<link rel="stylesheet" type="text/css" href="css/footer.css" media="all" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.15/css/share.min.css" media="all" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/social-share.js/1.0.15/js/social-share.min.js"></script>
<div class="row">
<div class="col-md-12 text-center">
<div class="social-share" data-disabled="qzone,qq,weibo,wechat,douban,diandian,tencent" data-description="Share tool on google twitter facebook">Share on:</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" left="80%" bottom="20%" text=" TOP" src="./js/x-return-top.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script src="./js/steganography.js"></script>
</body>
</html>
<?php include('contact_secrets.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="levi, nobre, bitcoin, crypto, cypherpunk" />
<meta name="Robots" content="index,follow" />
<title>Levi Nobre :: Contact</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Overpass+Mono:300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.hashcash.io.min.css" media="all" />
<script src="js/jquery.hashcash.io.min.js"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
function MM_swapImgRestore() {
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() {
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) {
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() {
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<script type="text/javascript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//--></script>

</head>

<body onLoad="MM_preloadImages('images/pgp-roll.gif','images/twitter-roll.gif','images/github-roll.gif','images/earn-roll.gif','images/keybase-roll.gif','images/instagram-roll.gif')">
<nav class="navbar navbar-default col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-0 col-lg-12">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">Levi Nobre</a> </div>
    <div class="collapse navbar-collapse" id="myDefaultNavbar1">
      <ul class="nav navbar-nav">
      <li><a href="articles.html">Articles</a></li>
      <li><a href="bitcoin.html">Bitcoin Resources</a></li>
      <li><a href="lightning.html">Lightning Resources</a></li>
      <li class="active"><a href="#">Contact<span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<section class="inner-background">
<div class="container">
    <div class="row">
      <div class="col-xs-12 text-left col-lg-offset-0 col-lg-12"> <br>
      </div>
    </div>
  </div>
  <div class="container" style="background-color: #ffffff">
    <div class="row">
      <div class="col-xs-12 text-left col-lg-offset-1 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
        <h1>Contact</h1>
        <p>Levi's goal is to spread knowledge of crypto systems and liberating technologies. If you can offer an opportunity to reach a large audience, please use the form below. If you're seeking specific answers for your own understanding, please check the <a href="bitcoin.html">educational resources page.</a> For business opportunities or other requests, please use the contact form hosted at <a href="https://earn.com/levinobre/" target="_blank">earn.com</a></p>
        <br>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-left col-lg-offset-0 col-lg-12"> <br><br>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="container">
    <div class="row">
      <div class="col-xs-12 text-left col-lg-offset-0 col-lg-12"> <br><br>
      </div>
      <div class="col-xs-12 col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-10 col-sm-offset-1">
        <h3>Presentation/Interview Request Form</h3>
        <p><span class="error">Please do not contact me inquiring about paid promotions / press releases / reviews / social media marketing. My reputation is not for sale. Messages sent via this form are heavily filtered and may not be read, much less responded to - use the earn.com link if you want a guaranteed response.</span></p>

        <form action="" method="post">
           <label for="name">Name </label><span class="error"> <?= $nameErr; ?></span>

            <input type="text" id="name" name="name" placeholder="Your name..." value="<?=$_POST["name"]?>">

            <label for="email">Email</label><span class="error"> <?= $emailErr; ?></span>
            <input type="text" id="email" name="email" placeholder="Your email..." value="<?=$_POST["email"]?>">

            <label for="subject">Subject</label><span class="error"> <?= $subjectErr; ?></span>
            <input type="text" id="subject" name="subject" placeholder="Subject..." value="<?=$_POST["subject"]?>">

            <label for="message">Message</label><span class="error"> <?= $messageErr; ?></span>
            <textarea id="emailBody" name="emailBody" placeholder="Write something..." style="height:200px"><?=$_POST["emailBody"]?></textarea>

            <input type="submit" name="submit" value="Submit"><span class="error"> <?= $captchaErr; ?></span>
            <script>
              $("form input[type=submit]").hashcash({
                key: "ff030c4d-804a-40d6-8ece-035f363a6bb7",
                complexity: 0.1
              });
            </script>
        </form>
        <br>
        <br>
        </div>
        </div>
        <div class="row">
          <div class="col-lg-offset-0 col-lg-4">

          </div>
          <div class="col-lg-4">&nbsp;</div>
        </div>
        <div class="row">
          <div class="text-left col-lg-offset-1 col-lg-5 col-md-5 col-md-offset-1 col-sm-offset-1 col-sm-6 col-xs-12">
            <h3>Open Source Projects</h3>
            <h4><a href="https://github.com/levinobre/BitGo" target="_blank">BitGo</a></h4>
            <h4><a href="https://github.com/DecPayments/WHMCS" target="_blank">WHMCS</a></h4>
            <h4><a href="https://github.com/btcbrdev" target="_blank">Bitcoin Brazil Developers</a></h4>
            <h4><a href="https://github.com/levinobre/cashaddress.github.io" target="_blank">Payment Protocol Decoder</a></h4>
            <h4><a href="https://github.com/levinobre/xpub-converter" target="_blank">Bitcoin xpub Converter</a></h4>
            <h4><a href="https://github.com/btcbrdev/PoS-php" target="_blank">Bitcoin Point of Sale</a></h4>
            <h4><a href="https://github.com/levinobre/igdm" target="_blank">Desktop Application for Instagram DMs</a></h4>
            <h4><a href="https://github.com/levinobre/UFAL" target="_blank">UFAL</a></h4>
            <br>
            <br>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
            <h3>Want a Guaranteed Response?</h3>
            <p data_temp_dwid="1">
              <a href="https://earn.com/levinobre/" target="_blank">
                <button type="button" class="btn btn-success">Get in touch on earn.com</button>
              </a>
            </p>
            <br>
            <br>
          </div>
        </div>
  </div>
</section>
<section>
  <div class="container"> </div>
</section>
<hr>
<div class="section well">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-10 col-lg-10 col-xs-offset-0 col-xs-12">
        <p class="text-right">
          <a href="pgpkey.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('PGP','','images/pgp-roll.gif',1)" target="_blank"><img src="images/pgp.gif" alt="PGP" width="20" height="20" id="PGP"></a>
          <a href="https://twitter.com/levi_nobre?ref_src=twsrc%5Etfw&ref_url=https%3A%2F%2Flevinobre.com%2F" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Twitter','','images/twitter-roll.gif',1)" target="_blank"><img src="images/twitter.gif" alt="Twitter" width="20" height="17" id="Twitter"></a>
          <a href="https://github.com/levinobre" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Github','','images/github-roll.gif',1)" target="_blank"><img src="images/github.gif" alt="Github" width="24" height="20" id="Github"></a>
          <a href="https://earn.com/levinobre/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Earn','','images/earn-roll.gif',1)" target="_blank"><img src="images/earn.gif" alt="Earn" width="20" height="20" id="Earn"></a>
          <a href="https://keybase.io/levi_nobre" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Keybase','','images/keybase-roll.gif',1)" target="_blank"><img src="images/keybase.gif" alt="Keybase" width="24" height="20" id="Keybase"></a>
          <a href="https://instagram.com/levi_nobre" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Instagram','','images/instagram-roll.gif',1)" target="_blank"><img src="images/instagram.gif" alt="Instagram" width="20" height="20" id="Instagram"></a>
        </p>
      </div>
    </div>
  </div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p class="footer">No copyright ever. No rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

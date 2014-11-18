<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" content="ppandp">
<meta name="Description" content="MY FOLIO – Responsive Retina-Ready HTML5" />
<title>MY FOLIO – Responsive Retina-Ready HTML5</title>
<link href="Public/css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="Public/css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="Public/css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="Public/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="Public/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if gt IE 8]><!--><link href="Public/css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /><!--<![endif]-->
<!--[if !IE]> <link href="Public/css/retina-responsive.css" rel="stylesheet" type="text/css" media="screen" /> <![endif]-->
<!--[if lt IE 9]> <link href="Public/css/styles-ie8.css" rel="stylesheet" type="text/css" media="screen" /> <![endif]-->
<link href="Public/css/print.css" rel="stylesheet" type="text/css" media="print" />
<script src="Public/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="Public/js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="Public/js/modernizr.js" type="text/javascript"></script>
<script src="Public/js/retina.js" type="text/javascript"></script>
<!--<script src="Public/js/jquery.gomap-1.3.2.min.js" type="text/javascript"></script>-->
<script src="Public/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="Public/js/jquery.ba-bbq.min.js" type="text/javascript"></script>
<script src="Public/js/jquery.isotope.load_home.js" type="text/javascript"></script>
<script src="Public/js/jquery.form.js" type="text/javascript"></script>
<script src="Public/js/input.fields.js" type="text/javascript"></script>
<script src="Public/js/responsive-nav.js" type="text/javascript"></script>
<script defer src="Public/js/jquery.flexslider-min.js"></script>
<script src="Public/js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="Public/js/image-hover.js" type="text/javascript"></script>
<script src="Public/js/scrollup.js" type="text/javascript"></script>
<script src="Public/js/preloader.js" type="text/javascript"></script>
<script src="Public/js/mousewheel.js" type="text/javascript"></script>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<header id="wrapper">
  <div class="container clearfix">
    <h1 id="logo"><a href="index.html">MY FOLIO</a></h1>
    <!-- start navi -->
    <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
    <div id="options" class="clearfix">
      <ul id="filters" class="option-set clearfix" data-option-key="filter">
        <li><a href="#filter=.home" class="selected">Home</a></li>
        <li><a href="#filter=.services">Services</a></li>
        <li><a href="#filter=.portfolio">Portfolio</a></li>
        <li><a href="#filter=.about">About</a></li>
        <li><a href="#filter=.blog">Blog</a></li>
        <li><a href="#filter=.contact">Contact</a></li>
      </ul>
    </div>
    <!-- end nav -->
  </div>
</header>
<!-- end header -->
<div class="container">
  <div id="container" class="clearfix">
    <div class="element  clearfix col1-1 home">
      <div class="col2-3">
        <div class="flexslider">
          <div class="images">
            <ul class="slides">
              <li><img src="Public/images/pic1.jpg" alt="" /></li>
              <li><img src="Public/images/pic1b.jpg" alt="" /></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col1-3 white-right">
        <h2>Taking pictures</h2>
        <p>Is my passion sapien massa, a imperdiet diam. Aliquam erat volutpat. Sed consectetur suscipit nunc et rutrum. </p>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet utpisci. </p>
        <p class="small bottom"><a href="#filter=.blog">Visit my blog <span class="arrow">→</span></a></p>
      </div>
      <div class="clear"></div>
    </div>
    <div class="element clearfix col1-3 portfolio menu">
      <div class="images"><img src="Public/images/pic6.jpg" alt="" /></div>
      <div class="white-bottom">
        <h2>Featured Works</h2>
        <p>Browse the whole portfolio:</p>
        <p class="small"><a href="#filter=.poland,+.menu">Made in Poland <span class="arrow">→</span></a><br />
          <a href="#filter=.denmark,+.menu">Taken in Denmark <span class="arrow">→</span></a><br />
          <a href="#filter=.germany,+.menu">My Trip to Germany <span class="arrow">→</span></a><br />
          <a href="#filter=.all,+.menu">View all <span class="arrow">→</span></a></p>
      </div>
    </div>
    <div class="element  clearfix col1-3 home poland all overflow"> <a href="Public/images/pic2.jpg" title="" rel="group">
      <div class="images"><img src="Public/images/pic2.jpg" alt="" />
        <div class="title">
          <div class="title-wrap">
            <h3> <span>Proud Woman</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Poland, 2012</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
    <div class="element clearfix col1-3 services">
      <div class="images"><img src="Public/images/pic7.jpg" alt="" /></div>
      <div class="white-bottom">
        <h2>My Services</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros.</p>
      </div>
    </div>
    <div class="element  clearfix col2-3 services">
      <div class="col1-3 connect">
        <div class="images"><img src="Public/images/pic11.jpg" alt="" /></div>
      </div>
      <div class="col1-3 white-right2">
        <h2>What I Offer</h2>
        <h4>Option A</h4>
        <p>Is my passion sapien massa, a imperdiet diam. Aliquam erat volutpat. </p>
        <h4>Option B</h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <p class="small bottom"><a href="#filter=.contact">Book me!</a></p>
      </div>
      <div class="clear"></div>
    </div>
    <div class="element  clearfix col1-3 all portfolio germany overflow"> <a href="Public/images/pic15.jpg" title="" rel="group">
      <div class="images"><img src="Public/images/pic15.jpg" alt="" />
        <div class="title">
          <div class="title-wrap">
            <h3> <span>Ambitions</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Germany, 2012</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
    <div class="element  clearfix col1-3 home">
      <div class="images"><img src="Public/images/pic3.jpg" alt="" />
        <div class="icons twitter"></div>
      </div>
      <div class="white-bottom">
        <h2>My Tweets</h2>
        <div id="twitter_update_list"></div>
      </div>
    </div>
    <div class="element clearfix col1-3 auto all portfolio germany"> <a href="Public/images/pic1.jpg" title="" rel="group">
      <div class="images"><img src="Public/images/pic12.jpg" alt="" />
        <div class="title">
          <div class="title-wrap">
            <h3> <span>What a Picture</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Germany, 2013</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
    <div class="element clearfix col1-3 auto all portfolio germany"> <a href="Public/images/pic13.jpg" title="" rel="group">
      <div class="images"><img src="Public/images/pic13.jpg" alt="" />
        <div class="title">
          <div class="title-wrap">
            <h3> <span>Posing Musician</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Germany, 2013</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
    <div class="element clearfix col1-3 all denmark home"> <a href="Public/images/pic4.jpg" title="" rel="group">
      <div class="images"><img src="Public/images/pic4.jpg" alt="" />
        <div class="title">
          <div class="title-wrap">
            <h3> <span>Dark Outlook</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Denmark, 2012</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
    <div class="element home clearfix col1-3 all portfolio germany"> <a href="Public/images/pic5.jpg" title="" rel="group">
      <div class="images"><img src="Public/images/pic5.jpg" alt="" />
        <div class="title">
          <div class="title-wrap">
            <h3> <span>Chilling Summer</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Germany, 2013</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
    <div class="element home clearfix col1-3 all poland"> <a href="Public/images/pic9.jpg" title="" class="popup">
      <div class="images"><img src="Public/images/pic9.jpg" alt="" />
        <div class="title">
          <div class="title-wrap">
            <h3> <span>Just Married</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Poland, 2013</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
    <div class="element  clearfix col1-3 all denmark"> <a href="Public/images/pic14.jpg" title="" class="popup">
      <div class="images"><img src="Public/images/pic14.jpg" alt="" />
        <div class="title">
          <div class="title-wrap">
            <h3> <span>Working in the Field</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Denmark, 2012</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
    <div class="element home clearfix col1-3 about">
      <div class="images"><img src="Public/images/pic7.jpg" alt="" /></div>
      <div class="white-bottom">
        <h2>About me</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Vivamus gravida aliquet eros.</p>
      </div>
    </div>
    <div class="element home clearfix col1-3 blog blog1"> <a href="#filter=.blog%3Anot(.blog1),+.post1">
      <div class="images"><img src="Public/images/pic8.jpg" alt="" />
        <div class="icons aside"></div>
      </div>
      <div class="white-bottom">
        <h2>Ok, One Last Link</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris.</p>
      </div>
      </a> </div>
    <div class="element home clearfix col2-3 post post1">
      <div class="images"><img src="Public/images/blog-post.jpg" alt="" /><a href="#filter=.blog">
        <div class="icons close"></div>
        </a></div>
      <div class="white-bottom">
        <h2>Blog Post Heading</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. Sed sollicitudin aliquam scelerisque. Phasellus elit diam, scelerisque at lobortis vitae, commodo et neque. Sed lobortis porta metus nec bibendum. Nunc tristique placerat elementum. </p>
        <p> Maecenas est lorem, imperdiet sed adipiscing et, fringilla eget justo. Etiam accumsan, elit ac tempus tincidunt, neque diam egestas nibh, a laoreet libero ante sed magna. Sed dictum, dui sed ultricies sollicitudin, arcu dui gravida velit, eu egestas nunc eros sed massa. </p>
        <p class="blockquote">" Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. "<span>– Johnathan Doe</span></p>
        <p>Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. </p>
      </div>
    </div>
    <div class="element  clearfix col1-3 blog blog2"> <a href="#filter=.blog%3Anot(.blog2),+.post2">
      <div class="images"><img src="Public/images/pic3.jpg" alt="" />
        <div class="icons aside"></div>
      </div>
      <div class="white-bottom">
        <h2>Post with a Slideshow</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris.</p>
      </div>
      </a> </div>
    <div class="element  clearfix col2-3 post post2">
      <div class="images"><img src="Public/images/blog-post.jpg" alt="" /><a href="#filter=.blog">
        <div class="icons close"></div>
        </a></div>
      <div class="white-bottom">
        <h2>Blog Post Heading</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. Sed sollicitudin aliquam scelerisque. Phasellus elit diam, scelerisque at lobortis vitae, commodo et neque. Sed lobortis porta metus nec bibendum. Nunc tristique placerat elementum. </p>
        <p> Maecenas est lorem, imperdiet sed adipiscing et, fringilla eget justo. Etiam accumsan, elit ac tempus tincidunt, neque diam egestas nibh, a laoreet libero ante sed magna. Sed dictum, dui sed ultricies sollicitudin, arcu dui gravida velit, eu egestas nunc eros sed massa. </p>
        <p class="blockquote">" Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. "</p>
        <p>Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. </p>
      </div>
    </div>
    <div class="element  clearfix col1-3 blog blog3"> <a href="#filter=.blog%3Anot(.blog3),+.post3">
      <div class="images"><img src="Public/images/pic7.jpg" alt="" />
        <div class="icons aside"></div>
      </div>
      <div class="white-bottom">
        <h2>Post with a Quote</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris.</p>
      </div>
      </a> </div>
    <div class="element  clearfix col2-3 post post3">
      <div class="images"><img src="Public/images/blog-post.jpg" alt="" /><a href="#filter=.blog">
        <div class="icons close"></div>
        </a></div>
      <div class="white-bottom">
        <h2>Blog Post Heading</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. Sed sollicitudin aliquam scelerisque. Phasellus elit diam, scelerisque at lobortis vitae, commodo et neque. Sed lobortis porta metus nec bibendum. Nunc tristique placerat elementum. </p>
        <p> Maecenas est lorem, imperdiet sed adipiscing et, fringilla eget justo. Etiam accumsan, elit ac tempus tincidunt, neque diam egestas nibh, a laoreet libero ante sed magna. Sed dictum, dui sed ultricies sollicitudin, arcu dui gravida velit, eu egestas nunc eros sed massa. </p>
        <p class="blockquote">" Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. "</p>
        <p>Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. </p>
      </div>
    </div>
    <div class="element  clearfix col1-3 blog blog4"> <a href="#filter=.blog%3Anot(.blog4),+.post4">
      <div class="images"><img src="Public/images/pic3.jpg" alt="" />
        <div class="icons aside"></div>
      </div>
      <div class="white-bottom">
        <h2>We Appreciate Any Kind of Feedback</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris.</p>
      </div>
      </a> </div>
    <div class="element  clearfix col2-3 post post4">
      <div class="images"><img src="Public/images/blog-post.jpg" alt="" /><a href="#filter=.blog">
        <div class="icons close"></div>
        </a></div>
      <div class="white-bottom">
        <h2>Blog Post Heading</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. Sed sollicitudin aliquam scelerisque. Phasellus elit diam, scelerisque at lobortis vitae, commodo et neque. Sed lobortis porta metus nec bibendum. Nunc tristique placerat elementum. </p>
        <p> Maecenas est lorem, imperdiet sed adipiscing et, fringilla eget justo. Etiam accumsan, elit ac tempus tincidunt, neque diam egestas nibh, a laoreet libero ante sed magna. Sed dictum, dui sed ultricies sollicitudin, arcu dui gravida velit, eu egestas nunc eros sed massa. </p>
        <p class="blockquote">" Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. "</p>
        <p>Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. </p>
      </div>
    </div>
    <div class="element  clearfix col1-3 blog blog5"> <a href="#filter=.blog%3Anot(.blog5),+.post5">
      <div class="images"><img src="Public/images/pic7.jpg" alt="" />
        <div class="icons aside"></div>
      </div>
      <div class="white-bottom">
        <h2>Aside Post Format</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris.</p>
      </div>
      </a> </div>
    <div class="element  clearfix col2-3 post post5">
      <div class="images"><img src="Public/images/blog-post.jpg" alt="" /><a href="#filter=.blog">
        <div class="icons close"></div>
        </a></div>
      <div class="white-bottom">
        <h2>Blog Post Heading</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. Sed sollicitudin aliquam scelerisque. Phasellus elit diam, scelerisque at lobortis vitae, commodo et neque. Sed lobortis porta metus nec bibendum. Nunc tristique placerat elementum. </p>
        <p> Maecenas est lorem, imperdiet sed adipiscing et, fringilla eget justo. Etiam accumsan, elit ac tempus tincidunt, neque diam egestas nibh, a laoreet libero ante sed magna. Sed dictum, dui sed ultricies sollicitudin, arcu dui gravida velit, eu egestas nunc eros sed massa. </p>
        <p class="blockquote">" Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. "</p>
        <p>Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. </p>
      </div>
    </div>
    <div class="element  clearfix col1-3 blog blog6"> <a href="#filter=.blog%3Anot(.blog6),+.post6">
      <div class="images"><img src="Public/images/pic8.jpg" alt="" />
        <div class="icons aside"></div>
      </div>
      <div class="white-bottom">
        <h2>We Boost Sales</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris.</p>
      </div>
      </a> </div>
    <div class="element  clearfix col2-3 post post6">
      <div class="images"><img src="Public/images/blog-post.jpg" alt="" /><a href="#filter=.blog">
        <div class="icons close"></div>
        </a></div>
      <div class="white-bottom">
        <h2>Blog Post Heading</h2>
        <p>Phasellus leo ante, posuere in fringilla vitae, pretium at dui. Fusce et neque quis odio gravida auctor vel non mauris. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. Sed sollicitudin aliquam scelerisque. Phasellus elit diam, scelerisque at lobortis vitae, commodo et neque. Sed lobortis porta metus nec bibendum. Nunc tristique placerat elementum. </p>
        <p> Maecenas est lorem, imperdiet sed adipiscing et, fringilla eget justo. Etiam accumsan, elit ac tempus tincidunt, neque diam egestas nibh, a laoreet libero ante sed magna. Sed dictum, dui sed ultricies sollicitudin, arcu dui gravida velit, eu egestas nunc eros sed massa. </p>
        <p class="blockquote">" Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. "</p>
        <p>Mauris pellentesque, elit at interdum adipiscing, sapien urna sagittis nisi, in placerat orci quam varius sapien. Suspendisse auctor nulla id augue mollis tempor. Morbi auctor, sem ac tristique mollis, enim sapien molestie velit, in dignissim diam tellus ac turpis. </p>
      </div>
    </div>
    <div class="element home clearfix col1-3 contact">
      <div class="images"><img src="Public/images/pic8.jpg" alt="" />
        <div class="icons bubble"></div>
      </div>
      <div class="white-bottom">
        <h2>Contact me</h2>
        <p>22 Miron Drive<br />
          New York City, 12603 NY</p>
        <p> E-Mail: <a href="mailto:hello@domain.com" title="send email">hello@domain.com</a><br />
          Phone: 845- 123 4567</p>
      </div>
    </div>
    <div class="element  clearfix col2-3 contact">
      <div class="col1-3 connect">
        <div class="images"><img src="Public/images/pic11.jpg" alt="" /></div>
      </div>
      <div class="col1-3 white-right2">
        <h2>Drop me a Line</h2>
        <div id="contact">
          <div id="message"></div>
          <form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="off">
            <fieldset>
            <div class="alignleft padding-right">
              <label for="name" accesskey="U"><span class="required">Name</span></label>
              <input name="name" type="text" id="name" size="30" title="Name *" />
              <label for="email" accesskey="E"><span class="required">Email</span></label>
              <input name="email" type="text" id="email" size="30" title="Email *" />
            </div>
            <label for="comments" accesskey="C"><span class="required">Comments</span></label>
            <textarea name="comments" cols="40" rows="3" id="comments" title="Comment *"></textarea>
            <input type="submit" class="submit" id="submit" value="» Submit" />
            </fieldset>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="element home clearfix col2-3 all portfolio denmark about"> <a class="video-popup tippy" href="http://player.vimeo.com/video/48792900?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff">
      <div class="images"><img src="Public/images/pic10.jpg" alt="" />
        <div class="icons video"></div>
        <div class="title">
          <div class="title-wrap">
            <h3> <span>Quiet Village</span></h3>
          </div>
        </div>
        <div class="subtitle">
          <div class="subtitle-wrap">
            <p> <span>Denmark, 2013</span> </p>
          </div>
        </div>
      </div>
      </a> </div>
  </div>
</div>
<!-- end header -->
<footer>
  <div class="container">
    <div class="centered">
      <ul class="social clearfix">
        <li class="tweat"><a href="#" onClick="return false">Visit our twitter Account</a></li>
        <li class="facebook"><a href="#" onClick="return false">Visit our facebook Account</a></li>
        <li class="dribble"><a href="#" onClick="return false">Visit our dribble Account</a></li>
        <li class="vimeo"><a href="#" onClick="return false">Visit our vimeo Account</a></li>
        <li class="google"><a href="#" onClick="return false">Visit our googleplus Account</a></li>
      </ul>
      <p class="small"> © 2013, MY FOLIO</p>
    </div>
  </div>
</footer>
<!-- BACK TO TOP BUTTON -->
<div id="backtotop">
  <ul>
    <li><a id="toTop" href="#" onClick="return false">Back to Top</a></li>
  </ul>
</div>
</body>
</html>
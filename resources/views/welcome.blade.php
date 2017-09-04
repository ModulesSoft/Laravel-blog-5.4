<?php use App\Post; ?>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Majhool!!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" id="camera-css" href="css/camera.css" type="text/css" media="all">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css"/>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<!--header-->
<div class="header">
    <div class="wrap">
        <div class="navbar navbar_ clearfix">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="logo"><a href="index.html"><img src="img/logo.png" alt=""/></a></div>
                    </div>
                    <div class="span8">
                        <div class="follow_us">
                            <ul>
                                <li><a href="#" class="facebook">Facebook</a></li>
                                <li><a href="#" class="vimeo">Vimeo</a></li>
                                <li><a href="#" class="tumbrl">Tumbrl</a></li>
                                <li><a href="#" class="twitter">Twitter</a></li>
                                <li><a href="#" class="delicious">Delicious</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <nav id="main_menu">
                            <div class="menu_wrap">
                                <ul class="nav sf-menu">
                                    <li class="current"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="sub-menu"><a href="javascript:{}">Features</a>
                                        <ul>
                                            <li><a href="scaffolding.html"><span>-</span>Scaffolding</a></li>
                                            <li><a href="typography.html"><span>-</span>Typography</a></li>
                                            <li><a href="shortcodes.html"><span>-</span>Shortcodes</a></li>
                                            <li><a href="tables.html"><span>-</span>Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu"><a href="javascript:{}">Portfolio</a>
                                        <ul>
                                            <li><a href="portfolio_2columns.html"><span>-</span>2 Columns</a></li>
                                            <li><a href="portfolio_3columns.html"><span>-</span>3 Columns</a></li>
                                            <li><a href="portfolio_4columns.html"><span>-</span>4 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu"><a href="javascript:{}">Blog</a>
                                        <ul>
                                            <li><a href="blog.html"><span>-</span>Blog with right sidebar</a></li>
                                            <li><a href="blog_post.html"><span>-</span>Blog post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//header-->

<!--page_container-->
<div class="page_container">
    <!--slider-->
    <div id="main_slider">
        <div class="camera_wrap" id="camera_wrap_1">
            <div data-src="img/slider/1.jpg"></div>
            <div data-src="img/slider/2.jpg"></div>
            <div data-src="img/slider/3.jpg"></div>
        </div><!-- #camera_wrap_1 -->
        <div class="clear"></div>
    </div>
    <!--//slider-->

    <!--planning-->
    <div class="wrap planning">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <a href="{!! Post::getData('planning-a',0); !!}">
                        <span class="img_icon icon1"></span>
                        <span class="link_title">{!! Post::getData('planning-a',1); !!}</span>
                        <div class="planning_body">{!! Post::getData('planning-a',2); !!} </div>
                    </a>
                </div>
                <div class="span3">
                    <a href="{!! Post::getData('planning-b',0); !!}">
                        <span class="img_icon icon2"></span>
                        <span class="link_title">{!! Post::getData('planning-b',1); !!}</span>
                        <div class="planning_body">{!! Post::getData('planning-b',2); !!} </div>
                    </a>
                </div>
                <div class="span3">
                    <a href="{!! Post::getData('planning-c',0); !!}">
                        <span class="img_icon icon3"></span>
                        <span class="link_title">{!! Post::getData('planning-c',1); !!}</span>
                        <div class="planning_body">{!! Post::getData('planning-c',2); !!} </div>
                    </a>
                </div>
                <div class="span3">
                    <a href="{!! Post::getData('planning-d',0); !!}">
                        <span class="img_icon icon4"></span>
                        <span class="link_title">{!! Post::getData('planning-d',1); !!}</span>
                        <div class="planning_body">{!! Post::getData('planning-d',2); !!} </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--//planning-->

    <!--Welcome-->
    <div class="wrap block">
        <div class="container welcome_block">
            <div class="welcome_line welcome_t"></div>
            {!! Post::getData('welcome-a',2); !!}<span>{!! Post::getData('welcome-b',2); !!}</span>
            <div class="welcome_line welcome_b"></div>
        </div>
    </div>
    <!--//Welcome-->

    <!--featured works-->
    <div class="wrap block carousel_block">
        <div class="container">
            <h2 class="upper">Gallery</h2>
            <div class="row">
                <div class="span12">
                    <ul id="mycarousel" class="jcarousel-skin-tango">
                        <li>
                            <div class="hover_img">
                                <a href="img/featured_works/1.jpg" rel="prettyPhoto[portfolio1]"><img
                                            src="img/featured_works/1.jpg" alt=""/><span class="portfolio_zoom1"></span></a>
                            </div>
                        </li>
                        <li>
                            <div class="hover_img">
                                <a href="img/featured_works/2.jpg" rel="prettyPhoto[portfolio1]"><img
                                            src="img/featured_works/2.jpg" alt=""/><span class="portfolio_zoom1"></span></a>
                            </div>
                        </li>
                        <li>
                            <div class="hover_img">
                                <a href="img/featured_works/3.jpg" rel="prettyPhoto[portfolio1]"><img
                                            src="img/featured_works/3.jpg" alt=""/><span class="portfolio_zoom1"></span></a>
                            </div>
                        </li>
                        <li>
                            <div class="hover_img">
                                <a href="img/featured_works/4.jpg" rel="prettyPhoto[portfolio1]"><img
                                            src="img/featured_works/4.jpg" alt=""/><span class="portfolio_zoom1"></span></a>
                            </div>
                        </li>
                        <li>
                            <div class="hover_img">
                                <a href="img/featured_works/1.jpg" rel="prettyPhoto[portfolio1]"><img
                                            src="img/featured_works/1.jpg" alt=""/><span class="portfolio_zoom1"></span></a>
                            </div>
                        </li>
                        <li>
                            <div class="hover_img">
                                <a href="img/featured_works/2.jpg" rel="prettyPhoto[portfolio1]"><img
                                            src="img/featured_works/2.jpg" alt=""/><span class="portfolio_zoom1"></span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--//featured works-->
    {{--Text and Latest News--}}
    <div class="wrap block">
        <div class="container">
            <div class="row news_block">
                {{--Text--}}
                <div class="span6">
                    <h2 class="title">{!! Post::getData('text',1); !!}</h2>
                    {!! Post::getData('text',2); !!}
                </div>
                {{--//Text--}}
                <div class="span6">
                    <!--Latest news-->
                    <h2 class="title">Latest news</h2>
                    <ul id="newscarousel" class="jcarousel-skin-tango">
                        @if(isset(Post::getData('latest-news-a',1)[0]))
                            <li>
                                <div class="news_date"><strong>{!! Post::getData('latest-news-a',4); !!}</strong></span>
                                </div>
                                <div class="news_t"><a href="#">{!! Post::getData('latest-news-a',1); !!}</a></div>
                                <div class="news">Posted by <a href="#">Anna Smith</a> / In <a href="#">City</a><br/>Tags:
                                    <a href="#">eget</a>, <a href="#">mauris</a></div>
                                <div class="news_info"
                                     style="overflow: hidden;height: 100px">{!! Post::getData('latest-news-a',2); !!}</div>
                                <div align="right"><a href="{!! Post::getData('latest-news-a',0); !!}">Read more...</a>
                                </div>
                                <div class="clear"></div>
                            </li>
                        @endif
                        @if(isset(Post::getData('latest-news-b',1)[0]))
                            <li>
                                <div class="news_date"><strong>{!! Post::getData('latest-news-b',4); !!}</strong></span>
                                </div>
                                <div class="news_t"><a href="#">{!! Post::getData('latest-news-b',1); !!}</a></div>
                                <div class="news">Posted by <a href="#">Anna Smith</a> / In <a href="#">City</a><br/>Tags:
                                    <a href="#">eget</a>, <a href="#">mauris</a></div>
                                <div class="news_info"
                                     style="overflow: hidden;height: 100px">{!! Post::getData('latest-news-b',2); !!}</div>
                                <div align="right"><a href="{!! Post::getData('latest-news-b',0); !!}">Read more...</a>
                                </div>
                                <div class="clear"></div>
                            </li>
                        @endif
                        @if(isset(Post::getData('latest-news-c',1)[0]))
                            <li>
                                <div class="news_date"><strong>{!! Post::getData('latest-news-c',4); !!}</strong></span>
                                </div>
                                <div class="news_t"><a href="#">{!! Post::getData('latest-news-c',1); !!}</a></div>
                                <div class="news">Posted by <a href="#">Anna Smith</a> / In <a href="#">City</a><br/>Tags:
                                    <a href="#">eget</a>, <a href="#">mauris</a></div>
                                <div class="news_info"
                                     style="overflow: hidden;height: 100px">{!! Post::getData('latest-news-c',2); !!}</div>
                                <div align="right"><a href="{!! Post::getData('latest-news-c',0); !!}">Read more...</a>
                                </div>
                                <div class="clear"></div>
                            </li>
                        @endif
                        @if(isset(Post::getData('latest-news-d',1)[0]))
                            <li>
                                <div class="news_date"><strong>{!! Post::getData('latest-news-d',4); !!}</strong></span>
                                </div>
                                <div class="news_t"><a href="#">{!! Post::getData('latest-news-d',1); !!}</a></div>
                                <div class="news">Posted by <a href="#">Anna Smith</a> / In <a href="#">City</a><br/>Tags:
                                    <a href="#">eget</a>, <a href="#">mauris</a></div>
                                <div class="news_info"
                                     style="overflow: hidden;height: 100px">{!! Post::getData('latest-news-d',2); !!}</div>
                                <div align="right"><a href="{!! Post::getData('latest-news-d',0); !!}">Read more...</a>
                                </div>
                                <div class="clear"></div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Latest news-->

    <!--latest posts-->
    <div class="wrap block carousel_block">
        <div class="container">
            <h2 class="upper">latest posts</h2>
            <div class="row">
                <div class="span12">
                    <ul id="mycarousel2" class="jcarousel-skin-tango">
                        <li>
                            <div class="post_carousel">
                                <img src="{!! Post::getData('latest-posts-a',3); !!}" alt=""/>
                                <div class="title_t"><a
                                            href="{!! Post::getData('latest-posts-a',0); !!}">{!! Post::getData('latest-posts-a',1); !!}</a>
                                </div>
                                <div class="post_meta">
                                </div>
                                <div style="overflow: hidden;height: 70px">{!! Post::getData('latest-posts-a',2); !!}</div>
                                <a href="{!! Post::getData('latest-posts-a',0); !!}" class="arrow_link">Read
                                    more...</a>
                            </div>
                        </li>
                        <li>
                            <div class="post_carousel">
                                <img src="{!! Post::getData('latest-posts-b',3); !!}" alt=""/>
                                <div class="title_t"><a
                                            href="{!! Post::getData('latest-posts-b',0); !!}">{!! Post::getData('latest-posts-b',1); !!}</a>
                                </div>
                                <div class="post_meta">
                                </div>
                                <div style="overflow: hidden;height: 70px">{!! Post::getData('latest-posts-b',2); !!}</div>
                                <a href="{!! Post::getData('latest-posts-b',0); !!}" class="arrow_link">Read
                                    more...</a>
                            </div>
                        </li>
                        <li>
                            <div class="post_carousel">
                                <img src="{!! Post::getData('latest-posts-c',3); !!}" alt=""/>
                                <div class="title_t"><a
                                            href="{!! Post::getData('latest-posts-c',0); !!}">{!! Post::getData('latest-posts-c',1); !!}</a>
                                </div>
                                <div class="post_meta">
                                </div>
                                <div style="overflow: hidden;height: 70px">{!! Post::getData('latest-posts-c',2); !!}</div>
                                <a href="{!! Post::getData('latest-posts-c',0); !!}" class="arrow_link">Read
                                    more...</a>
                            </div>
                        </li>
                        <li>
                            <div class="post_carousel">
                                <img src="{!! Post::getData('latest-posts-d',3); !!}" alt=""/>
                                <div class="title_t"><a
                                            href="{!! Post::getData('latest-posts-d',0); !!}">{!! Post::getData('latest-posts-d',1); !!}</a>
                                </div>
                                <div class="post_meta">
                                </div>
                                <div style="overflow: hidden;height: 70px">{!! Post::getData('latest-posts-d',2); !!}</div>
                                <a href="{!! Post::getData('latest-posts-d',0); !!}" class="arrow_link">Read
                                    more...</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--//latest posts-->
</div>
<!--//page_container-->

<!--footer-->
<div id="footer">
    {{--footer top--}}
    <div class="footer_top">
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <h2 class="title_footer_top">{!! Post::getData('footer-top-a',1); !!}</h2>
                        <div class="body_footer_top">
                            {!! Post::getData('footer-top-a',2); !!}
                        </div>
                    </div>
                    <div class="span3">
                        <h2 class="title_footer_top">{!! Post::getData('footer-top-b',1); !!}</h2>
                        <div class="body_footer_top">
                            {!! Post::getData('footer-top-b',2); !!}
                        </div>
                    </div>
                    <div class="span3">
                        <h2 class="title_footer_top">{!! Post::getData('footer-top-c',1); !!}</h2>
                        <div class="body_footer_top">
                            {!! Post::getData('footer-top-c',2); !!}
                        </div>
                    </div>
                    <div class="span3">
                        <h2 class="title_footer_top">{!! Post::getData('footer-top-d',1); !!}</h2>
                        <div class="flickrs">
                            <div class="FlickrImages">
                                <div class="body_footer_top">
                                    {!! Post::getData('footer-top-d',2); !!}
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--//footer top--}}
    {{--footer bottom--}}
    <div class="footer_bottom">
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="span5">
                        <div class="foot_logo"><a href="index.html"><img src="img/foot_logo.png" alt=""/></a></div>
                        <div class="copyright" style="color:silver;">
                            {!! Post::getData('copywrite',2); !!}
                        </div>
                    </div>
                    <div class="span7">
                        <div class="foot_right_block">
                            <div class="fright">
                                <form action="#" method="post">
                                    {{--<input class="inp_search" name="name" type="text" value="Search the Site"--}}
                                    {{--onfocus="if (this.value == 'Search the Site') this.value = '';"--}}
                                    {{--onblur="if (this.value == '') this.value = 'Search the Site';"/>--}}
                                </form>
                            </div>
                            <div class="follow_us">
                                <ul>
                                    <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                    <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                    <li><a rel="tooltip" href="#" title="Tumbrl" class="tumbrl">Tumbrl</a></li>
                                    <li><a rel="tooltip" href="#" title="Vimeo" class="vimeo">Vimeo</a></li>
                                    <li><a rel="tooltip" href="#" title="Delicious" class="delicious">Delicious</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>

                            <div class="clear"></div>
                            <div class="foot_menu">
                                <ul>
                                    <li><a href="index.html" class="current">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="scaffolding.html">features</a></li>
                                    <li><a href="portfolio_2columns.html">Portfolio</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--//footer bottom--}}
<!--//footer-->

{{--@endforeach--}}


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        //Slider
        $('#camera_wrap_1').camera();

        //Featured works & latest posts
        $('#mycarousel, #mycarousel2, #newscarousel').jcarousel();
    });
</script>
</body>
</html>

{{--@endphp--}}
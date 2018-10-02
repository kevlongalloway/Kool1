<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content='Welcome to Koolriculum'>
        <link rel="canonical" href="http://koolriculum.com/home/" />
<title>Home</title>    <meta property="og:type" content="website">
    <meta property="og:title" content="Home - KOOLriculum" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="http://koolriculum.com/home/" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="KOOLriculum" />

 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Koolriculum') }} | Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../../public/css/style.css">

    <!-- STYLESHEETS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
	
    <!-- INTERNAL STYLES -->
        <style>
            * {
                box-sizing: border-box;
                transition: all ease-in-out 250ms;
            }
        .img-responsive{
            max-width: 100%;
            position:relative;
            z-index: 0;
        }
            
        .main{
            position:absolute;
            z-index: 333;
        }
        
        .top-toggle{
            background-color:#979797;
            color:#fff;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            padding:1em;
            }
        .fixed-right{
            position:fixed;
            top:75%;
            right:0;
            transform: translateX(5em);
            transition: transform ease-in-out 250ms;
            
            }
            .top-active{
                transform: translate(0);
            }
        .hero-container{
            font-family: 'Work Sans', sans-serif;
            color: #fff;
            display: block;
            position:absolute;
            top:40%;
            left: 0;
            right: 0;
            z-index: 999;
            width:80%;
            margin: auto;
            text-align: center;
            text-shadow: horizontal-offset vertical-offset blur color;
            text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
        }
        .hero-main{ 
            font-weight: 800;
            margin:auto;
        }
            .hero-container p{
                width: 80%;
                margin:auto;
                font-size: 1.2rem;
            }
            
            .nav-item{
                font-size: 1.05rem;
                margin-left:.5em;
            }
            
            .nav-link{
                border:0;
                border-radius:5px;
                
            }
            .testimonials{
                margin: auto;
                text-align: center;
                display: inline-grid;
                 grid-template-columns:auto auto auto;
                grid-gap: 3em;
            }
           
            
            
            
    </style>


</head>

<body class="advanced-page">

<!-- SITE -->
<div id="site">
    
    <!-- HEADER -->
    <header>
	<div class="container">
		
	



				<!-- SITE SEARCH -->
					<div class="site_search col-md-3 col-sm-2 col-xs-12">
		
	</div>


				<!--// SITE SEARCH -->

			</div>



   

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/images/logo.png') }} "> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/our-team') }}">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/the-proof') }}">The Proof</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/course-songs') }}">Course Songs</a>
                            </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/subscriptions') }}">Subscriptions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-primary" style="color:#fff; margin-left:.5em;" href="{{ route('register') }}">Join Now</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href=" {{ url('/home') }}">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif    
                    </ul>
                </div>
            </div>
        </nav>

    </div>

				
	
    <!--// HEADER -->
	
    <!-- BREADCRUMB -->
    
    <!--// BREADCRUMB -->
    							
    


    <!-- COMPONENT ANCHOR -->
    <a href="#app" id="top" class="top-toggle fixed-right" style="">Top</a>
    <!--// COMPONENT ANCHOR -->
        <section class="content advanced-component banner">
            <div class="slides">
                <div class="hero-container" >
                    <h1 class="hero-main">The Future of Education</h1>     
                        <p><span class="intro">KOOLriculum<sup>TM</sup> provides a conduit in which youth are able to utilize items that are of interest to them in popular culture: technology and Hip Hop music</span></p>
                </div>
                <div class="">
                    <div class="image back" id="header-image" >
                                <img class="img-responsive" src="{{ asset('/images/b1.jpg') }}" alt="The Future of Education" >
                    </div>
                            <!-- ROW -->                  
                </div>
                <div class="item short primary_colour_2-bg">
                    <!--div class="hp-over" style="background:#fff; width:100%; height:30em; opacity:1; border-top:solid 2px #021aee;"-->
                        <h1 style="text-align:center; margin-top:1em; margin-bottom:1.5em;">Testimonials</h1>
                        <div class="testimonials">
                            <div class="endor1">
                                <h2>The ultimate teaching supplemental tool!</h2>
                                <h1>- David Grant</h1>
                                <p>Father/Customer</p>
                            </div>
                            <div class="endor2">
                                <h2>School House Rock on Steroids!!!</h2>
                                <h1>- Dr. Jason Willis</h1>
                                <p>Professor</p>
                            </div>
                            <div class="endor3">
                                <h2>Through music, memory skills can quickly be improved!</h2>
                                <h1>- Sarah Jefferson</h1>
                                <p>Teacherr</p>
                            </div>
                        </div>
                </div>
        </section>


    <!-- COMPONENT ANCHOR -->
    <a id="pos_1164"></a>
    <!--// COMPONENT ANCHOR -->
        <section class="content advanced-component promo_pods secondary_colour_2-bg">
            <div class="container">

                <!-- ROW - OVERVIEW -->
                <div class="row overview os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
<p class="heading main primary_colour_1-text">Introduction heading</p>                                                    <div class="text ">
                                <p><span>Mauris ante augue, fringilla non accumsan at, imperdiet vel ipsum. </span></p>
                            </div>
                    </div>
                </div>
                <!--// ROW - OVERVIEW -->
                
                <!-- ROW -->
                <div class="row">
                        <div class="item col-md-4 col-sm-6 col-xs-12  os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                            <div class="inner primary_colour_1-bg">
<a href="/listing/"  >                                                                    <div class="image">
                                        <img src="/media/1015/360x270.png?anchor=center&amp;mode=crop&amp;width=345&amp;height=260&amp;rnd=131027652780000000" alt="360x270 Demo Image">
                                    </div>
                                                                    <p class="heading secondary_colour_3-text">This is a promo pod</p>
                                </a>                                                                    <div class="info">
                                        <div class="text secondary_colour_3-text"><p>Mauris ante augue, fringilla non accumsan at, imperdiet vel ipsum. Nunc hendrerit, felis nec hendrerit varius, lacus leo euismod mi, a pulvinar sapien libero.</p></div>
                                    </div>
                                                                    <p class="link"><a role="button" class="btn secondary_colour_3-bg primary_colour_1-text" href="/listing/"  >Listing</a></p>
                            </div>
                        </div>
                        <div class="item col-md-4 col-sm-6 col-xs-12  os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                            <div class="inner primary_colour_2-bg">
<a href="/layouts/"  >                                                                    <div class="image">
                                        <img src="/media/1015/360x270.png?anchor=center&amp;mode=crop&amp;width=345&amp;height=260&amp;rnd=131027652780000000" alt="360x270 Demo Image">
                                    </div>
                                                                    <p class="heading secondary_colour_3-text">Another promo pod</p>
                                </a>                                                                    <div class="info">
                                        <div class="text secondary_colour_3-text"><p>Mauris ante augue, fringilla non accumsan at, imperdiet vel ipsum. Nunc hendrerit, felis nec hendrerit varius, lacus leo euismod mi, a pulvinar sapien libero.</p></div>
                                    </div>
                                                                    <p class="link"><a role="button" class="btn secondary_colour_3-bg primary_colour_1-text" href="/layouts/"  >Layouts</a></p>
                            </div>
                        </div>
                        <div class="item col-md-4 col-sm-6 col-xs-12  os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                            <div class="inner secondary_colour_1-bg">
<a href="/standard-page/"  >                                                                    <div class="image">
                                        <img src="/media/1015/360x270.png?anchor=center&amp;mode=crop&amp;width=345&amp;height=260&amp;rnd=131027652780000000" alt="360x270 Demo Image">
                                    </div>
                                                                    <p class="heading secondary_colour_3-text">And another pod</p>
                                </a>                                                                    <div class="info">
                                        <div class="text secondary_colour_3-text"><p>Mauris ante augue, fringilla non accumsan at, imperdiet vel ipsum. Nunc hendrerit, felis nec hendrerit varius, lacus leo euismod mi, a pulvinar sapien libero.</p></div>
                                    </div>
                                                                    <p class="link"><a role="button" class="btn secondary_colour_3-bg primary_colour_1-text" href="/standard-page/"  >Standard Page</a></p>
                            </div>
                        </div>
                </div>
                <!--// ROW -->
						<!-- ROW - OUTRO -->
						<div class="row outro os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
							<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
                                <div class="text ">
                                    <p><span>Mauris ante augue, fringilla non accumsan at, imperdiet vel ipsum. </span></p>
                                </div>
							
									<p class="link">
										<a role="button" class="btn primary_colour_2-bg secondary_colour_3-text" href="/layouts/"  >Layouts</a>
										<a role="button" class="btn primary_colour_2-bg secondary_colour_3-text" href="/standard-page/"  >Standard Page</a>
									</p>
							
							</div>
						</div>
						<!--// ROW - OUTRO -->


            </div>
        </section>


    <!-- COMPONENT ANCHOR -->
    <a id="pos_1168"></a>
    <!--// COMPONENT ANCHOR -->
    <section class="content advanced-component text-with-image_video primary_colour_1-bg">
        <div class="container">

            <!-- ROW -->
            <div class="row">

                <div class="col-md-5 col-xs-12 pull-left os-animation" data-os-animation="fadeIn" data-os-animation-delay="0">

                    <!-- INFO -->
                    <div class="info">
                        
<h3 class="heading main secondary_colour_3-text">Text with Image</h3>
                            <div class="text secondary_colour_3-text">
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            </div>
                        
                            <p class="link"><a role="button" class="btn primary_colour_2-bg secondary_colour_3-text" href="/advanced-page/"  >Advanced Page</a></p>
                    </div>
                    <!--// INFO -->

                </div>

                <div class="col-md-6 col-xs-12 pull-right">

                        <div class="image video os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0">

                            <img alt="720x495 Demo Image" src="/media/1005/720x495.png?anchor=center&amp;mode=crop&amp;width=720&amp;height=495&amp;rnd=131027652780000000">

                        </div>

                </div>


            </div>
            <!--// ROW -->

        </div>
    </section>

    <!-- COMPONENT ANCHOR -->
    <a id="pos_1169"></a>
    <!--// COMPONENT ANCHOR -->
    <section class="content advanced-component text-with-image_video secondary_colour_3-bg">
        <div class="container">

            <!-- ROW -->
            <div class="row">

                <div class="col-md-5 col-xs-12 pull-right os-animation" data-os-animation="fadeIn" data-os-animation-delay="0">

                    <!-- INFO -->
                    <div class="info">
                        
<h3 class="heading main ">Text with Video</h3>
                            <div class="text ">
                                <p class="intro">Maecenas iaculis aliquet justo eget tempus. Pellentesque auctor fringilla arcu ac faucibus. Mauris est ante, tincidunt in convallis vel, faucibus quis ipsum. Duis vitae felis quis sapien rhoncus dictum ut posuere lectus. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
<p>Maecenas iaculis aliquet justo eget tempus. Pellentesque auctor fringilla arcu ac faucibus. Mauris est ante, tincidunt in convallis vel, faucibus quis ipsum. Duis vitae felis quis sapien rhoncus dictum ut posuere lectus. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                            </div>
                        
                    </div>
                    <!--// INFO -->

                </div>

                <div class="col-md-6 col-xs-12 pull-left">

                        <div class="image video os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0">
<a href="http://vimeo.com/51610638" data-title="Example Video" data-toggle="lightbox" data-remote="http://player.vimeo.com/video/51610638">
                            <img alt="720x495 Demo Image" src="/media/1005/720x495.png?anchor=center&amp;mode=crop&amp;width=720&amp;height=495&amp;rnd=131027652780000000">

<div class="overlayicon"><i class="fa fa-play fa-3x"></i></div></a>                        </div>

                </div>


            </div>
            <!--// ROW -->

        </div>
    </section>

     <!-- COMPONENT ANCHOR -->
    <a id="pos_1170"></a>
    <!--// COMPONENT ANCHOR -->
    <section class="content advanced-component blog-with-form secondary_colour_2-bg">
        <div class="container">

            <!-- ROW -->
            <div class="row">

                <div class="col-md-7 col-xs-12 pull-left os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0">

                    <!-- LISTING - BLOG -->
                                    <div class="listing blog">
                                                                                
<h4 class="heading main primary_colour_1-text">Latest from the Blog</h4>                                        
                                            <div class="item" itemscope itemtype="http://schema.org/BlogPosting">
                                                <div class="info">
                                                    <a href="/blog/posts/2015/august/useful-coding-tips/" itemprop="url">

                                                        <p class="heading primary_colour_1-text" itemprop="name headline">
                                                            Useful coding tips
                                                        </p>
                                                    </a>
                                                        <div class="text " itemprop="articleBody"><p>An "intro" paragraph class senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit a ...</p></div>
                                                </div>
                                                
<div class="meta panel panel-default">
    <div class="panel-body">
        <div>
                        <span class="author" itemprop="author" itemscope itemtype="http://schema.org/Person">
                            Posted by
                                <a itemprop="url" rel="author" href="https://uskinned.net/blog/" target="blank"  title="Link will open in a new window/tab" >Joe Bloggs<i class="fa fa-external-link after"></i></a>
                            on
                        </span>

            <time itemprop="datePublished" datetime="2015-00-14"><span class="date">14 Aug 2015</span></time>
        </div>
        <div class="row">
                <span class="comments col-sm-6 col-xs-12"><a href="/blog/posts/2015/august/useful-coding-tips/#disqus_thread">0 comments</a></span>

            <span class="categories col-sm-6 text-right col-xs-12 text-left-xs pull-right">
                    <span><a href="/blog/?category=1314" title="Technology" rel="NOINDEX, FOLLOW">Technology</a>, </span>
                    <span><a href="/blog/?category=1316" title="ASP.NET" rel="NOINDEX, FOLLOW">ASP.NET</a></span>
</span>
        </div>
    </div>
</div>

                                            </div>
                                            <div class="item" itemscope itemtype="http://schema.org/BlogPosting">
                                                <div class="info">
                                                    <a href="/blog/posts/2015/july/get-your-seo-in-order/" itemprop="url">

                                                        <p class="heading primary_colour_1-text" itemprop="name headline">
                                                            Get your SEO in order
                                                        </p>
                                                    </a>
                                                        <div class="text " itemprop="articleBody"><p>An "intro" paragraph class senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit a ...</p></div>
                                                </div>
                                                
<div class="meta panel panel-default">
    <div class="panel-body">
        <div>
                        <span class="author" itemprop="author" itemscope itemtype="http://schema.org/Person">
                            Posted by
                                <a itemprop="url" rel="author" href="https://uskinned.net/blog/" target="blank"  title="Link will open in a new window/tab" >Joe Bloggs<i class="fa fa-external-link after"></i></a>
                            on
                        </span>

            <time itemprop="datePublished" datetime="2015-00-24"><span class="date">24 Jul 2015</span></time>
        </div>
        <div class="row">
                <span class="comments col-sm-6 col-xs-12"><a href="/blog/posts/2015/july/get-your-seo-in-order/#disqus_thread">0 comments</a></span>

            <span class="categories col-sm-6 text-right col-xs-12 text-left-xs pull-right">
                    <span><a href="/blog/?category=1317" title="SEO" rel="NOINDEX, FOLLOW">SEO</a></span>
</span>
        </div>
    </div>
</div>

                                            </div>
                                        <p class="link"><a class="btn primary_colour_1-bg secondary_colour_3-text" href="/blog/"  >See all</a></p>
                                    </div>
                                    


                    <!--// LISTING - BLOG -->

                </div>

                <div class="col-md-4 col-xs-12 pull-right os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0">

                    	
<form action="/umbraco/Surface/NewsletterSignupSurface/HandleNewsletterSubmit" data-ajax="true" data-ajax-loading="#NewsletterAjaxLoading1170" data-ajax-method="POST" data-ajax-mode="replace" data-ajax-update="#NewsletterSignupContainer1170" id="form0" method="post"><input data-val="true" data-val-number="The field CurrentNodeID must be a number." data-val-required="The CurrentNodeID field is required." id="CurrentNodeID" name="CurrentNodeID" type="hidden" value="1170" /><input data-val="true" data-val-number="The field ActualPageID must be a number." data-val-required="The ActualPageID field is required." id="ActualPageID" name="ActualPageID" type="hidden" value="1157" /><input name="__RequestVerificationToken" type="hidden" value="kCu0T5fNbLEc9f22U6-7Jm7HROQw_bDcxs2Il1ZLMaQ60UWZ7vcFSNvYZ-Zih2Udkpe54xYGEG7KZ4DhWbgs1Jf9YH2W2plTviZTOmg0sT81" />        <div class="newsletter ajax_wrap panel panel-default">
        <div class="panel-body">

<p class="heading main">Stay in touch</p>
<p>Signup to receive all the latest news from uSkinned.</p>                <div id="NewsletterSignupContainer1170">
                    <div class="alert alert-danger alert-dismissible fade in" id="NewsletterError1170" style="display:none">
                    </div>
                    <fieldset>
                        <div class="form-group">
                            <label for="FirstName" class="control-label">
                                First name <em class="req">*</em>
                            </label>
                            <input class="form-control" data-val="true" data-val-required="The FirstName field is required." id="FirstName" name="FirstName" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="false">The &#39;First name&#39; field is required</span>
                        </div>
                        <div class="form-group">
                            <label for="LastName" class="control-label">
                                Last name <em class="req">*</em>
                            </label>
                            <input class="form-control" data-val="true" data-val-required="The LastName field is required." id="LastName" name="LastName" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="false">The &#39;Last name&#39; field is required</span>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="control-label">
                                Email address <em class="req">*</em>
                            </label>
                            <input autocapitalize="off" class="form-control" data-val="true" data-val-regex="The field Email must match the regular expression &#39;\w+([-+.&#39;]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*&#39;." data-val-regex-pattern="\w+([-+.&#39;]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*" data-val-required="The Email field is required." id="Email" name="Email" type="text" value="" />
                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="false">Please enter a valid Email address</span>
                        </div>
                    </fieldset>
                    <fieldset>
                        <button class="btn primary_colour_1-bg secondary_colour_3-text" type="submit">
                            <span>Send</span>
                        </button>
                    </fieldset>
                    <div class="ajax_loading" id="NewsletterAjaxLoading1170" style="display:none">
                        <div class="loading">
                            <span class="message">Signing up to newsletter, please wait.</span>
                        </div>
                    </div>
                </div>
								
        </div>					
        </div>
</form>

                </div>

            </div>
            <!--// ROW -->

        </div>
    </section>

    <!-- COMPONENT ANCHOR -->
    <a id="pos_1171"></a>
    <!--// COMPONENT ANCHOR -->
        <section class="content advanced-component image_carousel secondary_colour_3-bg">
            <div class="container">

					<!-- ROW - OVERVIEW -->
					<div class="row overview os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
						<div class="col-md-8 col-sm-10 col-xs-12">
<p class="heading main primary_colour_1-text">We work with the biggest brands</p>															<div class="text ">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sit amet, consectetur adipiscing elit.</p>
								</div>
						</div>
					</div>
                    
					<!-- ROW -->
					<div class="row">
						<div class="col-xs-12">
							<div class="gallery slides">
										<div class="item">
											<div class="image">
<a href="/listing/"  ">												<img src="/media/1014/300x160.png?anchor=center&amp;mode=crop&amp;width=300&amp;height=160&amp;rnd=131027652780000000" alt="300x160 Demo Image">
														<div class="overlayicon"><i class="fa fa-link"></i></div>
</a>											</div>
										</div>
										<div class="item">
											<div class="image">
<a href="https://uskinned.net"  title="Link will open in a new window/tab"  target="blank"">												<img src="/media/1014/300x160.png?anchor=center&amp;mode=crop&amp;width=300&amp;height=160&amp;rnd=131027652780000000" alt="300x160 Demo Image">
														<div class="overlayicon"><i class="fa fa-external-link after"></i></div>
</a>											</div>
										</div>
										<div class="item">
											<div class="image">
												<img src="/media/1014/300x160.png?anchor=center&amp;mode=crop&amp;width=300&amp;height=160&amp;rnd=131027652780000000" alt="300x160 Demo Image">
											</div>
										</div>
										<div class="item">
											<div class="image">
												<img src="/media/1014/300x160.png?anchor=center&amp;mode=crop&amp;width=300&amp;height=160&amp;rnd=131027652780000000" alt="300x160 Demo Image">
											</div>
										</div>
										<div class="item">
											<div class="image">
												<img src="/media/1014/300x160.png?anchor=center&amp;mode=crop&amp;width=300&amp;height=160&amp;rnd=131027652780000000" alt="300x160 Demo Image">
											</div>
										</div>
										<div class="item">
											<div class="image">
												<img src="/media/1014/300x160.png?anchor=center&amp;mode=crop&amp;width=300&amp;height=160&amp;rnd=131027652780000000" alt="300x160 Demo Image">
											</div>
										</div>
										<div class="item">
											<div class="image">
												<img src="/media/1014/300x160.png?anchor=center&amp;mode=crop&amp;width=300&amp;height=160&amp;rnd=131027652780000000" alt="300x160 Demo Image">
											</div>
										</div>
										<div class="item">
											<div class="image">
												<img src="/media/1014/300x160.png?anchor=center&amp;mode=crop&amp;width=300&amp;height=160&amp;rnd=131027652780000000" alt="300x160 Demo Image">
											</div>
										</div>
							</div>
						</div>
					</div>
					<!--// ROW -->
							
							

		
            </div>
        </section>



	



	


    <!-- OUTRO STRIP -->
	<div id="OutroStripSectionDiv">
    
        <section class="content advanced-component cta-strip secondary_colour_1-bg">
            <div class="container">

                <!-- ROW -->
                <div class="row">
					
                    <div class="col-xs-12">
						
						<p class="heading main secondary_colour_3-text">Outro heading</p>
								
                    </div>

                </div>
                <!--// ROW -->
                <!-- ROW -->
                <div class="row">
							
                    <div class="col-md-8 col-xs-12">
						
						<div class="text secondary_colour_3-text">
                        <p><span class="intro"> </span></p>
						</div>
								
                    </div>
                                        <div class="col-md-3 col-xs-12 pull-right">

                        <p class="link"><a class="btn btn-block btn-lg primary_colour_2-bg secondary_colour_3-text" href="/feed-back/"  >Get in touch</a></p>

                    </div>

                </div>
                <!--// ROW -->

            </div>
        </section>

	</div>
     <!--// OUTRO STRIP -->

    <!-- FOOTER -->
    <footer class="primary_colour_1-bg">
        <div class="container">

            <!-- ROW -->
            
            <!--// ROW -->
            <!-- ROW -->
            <div class="row">

                <div class="col-sm-12">

                    <nav class="footer">
                        <ul class="nav">
                                Email: info@koolriculum.com
                                
                                
                                
                    
                            <li class="site_credit pull-right"><div>KOOLriculum, Inc &copy; 2018 </div></li>
</ul>
                    </nav>

                </div>

            </div>
            <!--// ROW -->

        </div>
    </footer>
    <!--// FOOTER -->
    <!-- BACK TO TOP -->
    <span id="top-link-block">
        <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </span>
    <!--// BACK TO TOP -->

</div>
<div id="loading-div-background-resource" style="display:none;">
    <div id="loading-div-resource" class="ui-corner-all">
        <img id="myImageId" style="height:70px;margin:30px;margin-bottom:0px;width: 30%;" src="/Media/spinner.gif" alt="Loading.." />
        <h2 style="color:black !important;font-weight:normal;font-weight: bold;" id="hLoadingHeader">Signing Up....</h2>
    </div>
</div>

<div id="updating-div-background-resource" style="display:none;">
    <div id="updating-div-resource" class="ui-corner-all">
        <img id="myImageId" style="height:70px;margin:30px;margin-bottom:0px;width: 30%;" src="/Media/spinner.gif" alt="updating.." />
        <h2 style="color:black !important;font-weight:normal;font-weight: bold;" id="hupdatingHeader">updating....</h2>
    </div>
</div>




<div id="firstloading-div-background-resource" style="display:none;">
    <div id="firstloading-div-resource" class="ui-corner-all">
        <img id="myImageIdload" style="height:70px;margin:30px;margin-bottom:0px;" src="/Media/spinner.gif" alt="Loading.." />
        <h2 style="color:black !important;font-weight:normal;font-weight: bold;">Loading....</h2>
    </div>
</div>
<!--// SITE -->
<script>
    window.onscroll = function() {myFunction()};

    function myFunction() {
    if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
        document.getElementById("top").className = "top-toggle fixed-right top-active";
    } else {
        document.getElementById("top").className = "top-toggle fixed-right";
    }
}
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>iSTUDIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="I'm Bojan Dragojevic front end developer and this is my site">
    <meta name="keywords" content="html5, CSS3, javascript, jQuery, Backbone.js, Underscore.js, front end development ">
    <meta name="author" content="Bojan Dragojević">
    <meta name="apple-mobile-web-app-title" content="istudio">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/select2.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,700,400italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../components/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">

  </head>

  <body data-spy="scroll" data-target=".navbar"  >

    <div class="navbar navbar-fixed-top" >
      <div class="navbar-inner">
        <div class="container">

          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="brand span2" href="http://dragojevich.com/istudio"><span>littleLOGO</span></a>

          <nav class="nav-collapse collapse">

            <ul class="nav pull-right">

              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#service">Services</a></li>
              <li><a href="#contact">Contact</a></li>

            </ul>

          </nav><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <!-- intro -->
    <div class="wrap_intro"  id="home" >
    
        <div class="container">

            <div class="row-fluid">

                <div class="span10">

                    <?php  
                        // check for a successful form post  
                        if (isset($_GET['s'])) echo "<p class=\"alert alert-success\">".$_GET['s']." <em>x</em></p>";  
                    ?>  
            
                    <h1>Placing content boxes on your grid</h1>

                    <p>Once you created your 970 grid, it's time to fill it with content boxes. When you're at the information arhitecture stage of the process you should already have an understanding of the content that will go on your website. The goal to wireframing an effective information arhitecture is focus on the placement, sizing and order of content, and not to focus on the look and feel. This is where content boxes come in handy.</p>

                </div>

                <span>blue flag</span>

            </div>
     
        </div>

    </div>
    <!-- /intro end -->

    <!-- section two -->
    <div class="wrap_slider" id="about">
    
        <div class="container">

            <div class="row-fluid">

                <div class="span12">


                    <div id="myCarousel" class="carousel slide">
                        
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="active item cf">
                                <h2 class="span4">Placing navigations on your grid</h2>
                                <p class="span7 pull-right">No matter what kind of navigation you want to use, the 970 grid makes it easy to lay out a variety of navigations. Adding a column navigation is easy, as well as adding a top navigation. Whatever navigation you choose to use, the grid can align your navigation with your text, images and other content. This gives your overall site a balanced and consistent look.</p>
                            </div>

                            <div class="item">
                                <h2 class="span4">where content boxes come in handy & usable</h2>
                                <p class="span7 pull-right" >is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>

                            <div class="item">
                                <h2 class="span4">Placing navigations on your grid</h2>
                                <p class="span7 pull-right" >No matter what kind of <span>navigation you</span> want to use, the 970 grid makes it easy to lay out a variety of navigations.</p> 
                            </div>

                        </div>
                        
                        <!-- Carousel indicator -->
                        <ol class="carousel-indicators span7 pull-right">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        

                        <!-- Carousel nav -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                    
                    </div>

                </div>

            </div>
     
        </div>

    </div>
    <!-- /section two end -->

    <!-- section three -->
    <div class="wrap_img_navigation" id="service">

        <div class="container">

            <div class="row-fluid">

                <div class="span12"> 
                    <small class="section_subtitle">your navigations</small>
                    <h2 class="section_title">Placing navigations</h2>
                </div>

            </div>

            <div class="row-fluid">

                <div class="span4">

                    <div class="img_wrap">
                        <a href="#">
                            <img src="img/picture_1.png" />
                            <span>background</span>
                        </a>
                    </div>

                    <h3>Placing navigations</h3>
                    <p>It’s important to not spend too much time thinking about the look and feel of the design. Remember, wireframing is not about the look.</p>
                    <p class="custom_btn"><a href="#">View more</a></p>
                </div>

                <div class="span4">

                    <div class="img_wrap">
                        <a href="#">
                            <img src="img/picture_2.png" />
                            <span>background</span>
                        </a>
                    </div>

                    <h3>Placing navigations</h3>
                    <p>There’s a lot of hype surrounding the 960 grid system. Personally, I think the use of 12 columns for a grid is perfect. However, the two major problems I have with the 960 grid system is that the gutters are too wide and the content width isn’t actually 960 pixels.</p>
                    <p class="custom_btn"><a href="#">View more</a></p>
                </div>

                <div class="span4">

                    <div class="img_wrap">
                        <a href="#">
                            <img src="img/picture_3.png" />
                            <span>background</span>
                        </a>
                    </div>

                    <h3>Placing navigations</h3>
                    <p>It’s important to not spend too much time thinking about the look and feel of the design. Remember, wireframing is not about the look and feel. </p>
                    <p class="custom_btn"><a href="#">View more</a></p>
                </div>

            </div>
     
        </div>

    </div>
    <!-- /section three end -->

    <!-- section four -->
    <div class="wrap_article">

        <div class="container">

            <div class="row-fluid">
                
                <div class="span1">
                    <div class="avatar_name">
                        <span>Ivak Tušek</span>
                    </div>
                    <img src="img/avatar.png" />

                </div>

                <div class="span11">
                    <span class="post_date">15th JULY, 2013</span>
                    <h2>After a whole day of doing nothing but wireframes</h2>
                    <p>You cannot be possibly implying that he 'ripped' off 'your' design. C'mon guys, we're grown freaking adults, how about we get over ourselves some your' design. C'mon guys?</p>
                    <hr />
                    <span class="like_btn"><i></i>Like article</span>
                </div>

            </div>
     
        </div>

    </div>
    <!-- /section four end -->

    <!-- section five -->
    <div class="wrap_form" id="contact">

        <div class="container">

            <div class="row-fluid">

                <div class="span7">
                    <form class="well" id="contact_form" method="POST" action="contact-form-submission.php">
                        <div class="offset1">

                            <label for="name">Name &amp; Surname</label>
                            <div class="input-prepend small-prepend">
                                <span class="add-on">
                                    <i class="icon-person"></i>
                                </span>
                                <input type="text" id="name" name="name" class="input " >
                                <span class="input_error first">You forgat to enter <br /> your name and surname</span>
                            </div>
                            
                            <label for="mail">Email</label>
                            <div class="input-prepend">
                                <span class="add-on">
                                    <i class="icon-email"></i>
                                </span>
                                <input type="text" id="mail" name="mail" class="input" >
                                <span class="input_error">Yo, your email?</span>
                                <span class="input_valid first">Email adress <br/> looks good</span>
                            </div>
                            
                            <label for="telephone">Telephone</label>
                            <div class="input-prepend">
                                <span class="add-on">
                                    <i class="icon-telephone"></i>
                                </span><input type="text" id="telephone" name="telephone" class="input">
                                <span class="input_error">Only numbers bro!</span>
                                <span class="input_valid">Numberlooks fine</span>
                            </div>

                            <label for="country">Country</label>
                            <select id="country" class="selectpicker" name="country" >
                                <option value="Croatia" selected="">Croatia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Hungary">Hungary</option>
                            </select>

                            <label for="message">Your message</label>
                            <textarea name="message" id="message" class="span8" rows="5"></textarea>

                            <div class="row-fluid">
                                <button id="submit" type="submit" class="btn btn-large disabled">Send</button>
                            </div>
                        </div>
                        <input type="hidden" name="save" value="contact">  

                    </form>
                </div>

                <div class="span4">
                    <h2>Nothing but wireframes</h2>
                    <p>No matter what kind of navigation you want to use, the 970 grid makes it easy to lay out a variety of navigations. Adding a column navigation is easy, as well as adding a top navigation.</p>
                    <span>You cannot be possibly 'ripp' off 'your' design. </span>
                </div>

            </div>

        </div>

    </div>
    <!-- /section five end -->

    <!-- section six -->
    <div class="wrap_office">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 wrap_white"> 
                    <small class="section_subtitle">where we are</small>
                    <h2 class="section_title">Our office</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="map">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=45.840281,15.963135&amp;spn=1.423599,2.150574&amp;t=m&amp;z=9&amp;output=embed"></iframe>
    </div>
    <!-- /section six end -->

    <!-- footer - contact -->
    <footer class="wrap_contact">

        <div class="container"> 
            <div class="row-fluid">
                <div class="span4">
                    <a href="mailto:bdragojevic@gmail.com">Contact us</a>
                </div>
            </div>
        </div>

    </footer>

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.0.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/misc.js"></script>


  </body>
</html>

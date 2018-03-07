<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('../../docs-assets/ico/favicon.png')}}">

    <title>MY PROFILE</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('Portofolio/css/bootstrap.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{asset('Portofolio/css/main.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{asset('Portofolio/js/hover.zoom.js')}}"></script>
    <script src="{{asset('Portofolio/js/hover.zoom.conf.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">My Profile</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="work.html">Currently learn</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Others</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="{{asset('Portofolio/img/user.png')}}" witdh="200px" height="200px" alt="myprofile">
					<h1>Hi, My name is Michael Pratama!</h1>
					<p>I am a student from binus university and currently learn about the web programming in BSD</p>
					
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt centered">	
		<h1>I am Currently Learning :</h1>

			<div class="col-lg-4">
			
				<a class="zoom green" href="work01.html"><img class="img-responsive" src="{{asset('Portofolio/img/portfolio/port01.jpg')}}" alt="" /></a>
				<p>HTML 5</p>
			</div>
			<div class="col-lg-4">
				<a class="zoom green" href="work01.html"><img class="img-responsive" witdh="300px;" height="300px;" src="{{asset('Portofolio/img/portfolio/port02.jpg')}}" alt="" /></a>
				<p>CSS 3</p>
			</div>
			<div class="col-lg-4">
				<a class="zoom green" href="work01.html"><img class="img-responsive" src="{{asset('Portofolio/img/portfolio/port03.jpg')}}" alt="" /></a>
				<p>PHP</p>
			</div>
		</div><!-- /row -->
		<div class="row mt centered">	
			<div class="col-lg-4">
				<a class="zoom green" href="work01.html"><img class="img-responsive" src="{{asset('Portofolio/img/portfolio/port04.jpg')}}" alt="" /></a>
				<p>MYSQL</p>
			</div>
			<div class="col-lg-4">
				<a class="zoom green" href="work01.html"><img class="img-responsive" src="{{asset('Portofolio/img/portfolio/port05.jpg')}}" alt="" /></a>
				<p>Laravel Framework</p>
			</div>
			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>My location</h4>
					<p>
						Somewhere in Tangerang <br/>
					     +622889233321 <br/>
						Tangerang,Indonesia
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>My Links</h4>
					<p>
						<a href="#">Dribbble</a><br/>
						<a href="#">Twitter</a><br/>
						<a href="#">Facebook</a>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>About Me</h4>
					<p>Just a normal student that trying something new</p>
					<audio src="{{asset('Portofolio/music.mp3')}}" width="200px" height="200px" autoplay controls loop>
          </audio>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('Portofolio/js/bootstrap.min.js')}}"></script>
  </body>
</html>

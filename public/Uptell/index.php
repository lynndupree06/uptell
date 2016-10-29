<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="UpTell Team">

    <title>UpTell - Express Yourself</title>

    <!-- Custom styles for this template -->
    <link href="assests/application.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- Google Translate -->
    <meta name="google-translate-customization" content="dc1e5ff71f1112b8-52f4aed228d8ab5b-g8e9b78ee6ef0da72-1d"></meta>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
   			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
			<span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UpTell - Express Yourself</a>
        </div>
          <div class="collapse navbar-collapse" id="navigation">
         <form class="navbar-form navbar-left" action="singup.php">
         <div class="form-group">
          <button type="submit" class="btn btn-success">Sign Up</button>
         </div>
          </form>
          
          <form class="navbar-form navbar-right" action="dashboard.php">
            <div class="form-group">
              <label>Email</label><input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label><input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Call to action -->
    <div class="jumbotron">
	  <div class="video-container">
      	<iframe src="https://www.youtube.com/embed/4psbmiYm0pk" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Featured Writing Project</h2>
          <a href="#">
           <img class="img-responsive" src="./img/featured/favoriteone.jpg" alt="Featured Writing Project">
           </a>
          <p> Teen Title and Description</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Featured Video Project</h2>
           <a href="#">
           <img class="img-responsive" src="./img/featured/favoritetwo.jpg" alt="Featured Video Project">
           </a>
          <p> Teen Title and Description</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Featured Music Project</h2>
            <a href="#">
           <img class="img-responsive" src="./img/featured/favoritethree.jpg" alt="Featured Music Project">
           </a>
          <p> Teen Title and Description</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      
 <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Create</h2>
          <p class="lead">Create a story about anything you want, however you want. Love to talk and be in front of the camera? You'll love our video and picture tools. Are you camera shy? You can make a text or audio story. Do you like to draw or make music? We have an art and music tool, too. You can even create with your friends.</p>
        </div>
        <div class="col-md-5">
       <img class="featurette-image img-responsive" src="./img/create.jpg" alt="Create"/>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="./img/share_main.jpg" alt="Share" />
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Share</h2>
          <p class="lead">Once you've made a story, you can share it with your friends and the rest of the UpTell community.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Explore</h2>
          <p class="lead">Look to see what stories others are creating. You can search by interests, make new friends, and learn about life around the world. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="./img/explore.jpg" alt="Explore" />
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

      <footer>
      	<div class="col-md-3">
		<ul>
		<li><a href="about.php">About Us</a></li>
		<li>Mission</li>
		<li><a href="educators.php">Parents and Educators</a></li>
		</ul>
		</div>
		<div class="col-md-3">
		<ul>
		<li><a href="help.php">Help and Tutorials</a></li>
		<li>Q&amp;A</li>
		<li><a href="communityGuideline.php">Community Guidelines</a></li>
		</ul>
		</div>
        <div class="col-md-3">
		<ul>
		<li>Publish Stories</li>
		<li>Print Stories</li>
		<li>Share Stories</li>
		</ul>
		</div>
		<div class="col-md-3">
		<ul>
		<li>Terms of Reference</li>
		<li>Privacy </li>
		<li>Contact Us</li>
		</ul>
		</div>
      
        <div class="col-md-12">
        <br />
		<br />
        <br />
        <br />
           <!--Google Translator Plugin-->
        <div id="google_translate_element" ></div>
		<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<p>&copy; UpTell 2015</p> 
</div>
      </footer>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

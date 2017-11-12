<html>
<head>

    <!-- make it responsive -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />               
    <link rel="stylesheet" type="text/css" href="css/grid.css" /> 
    <link rel="stylesheet" type="text/css" href="css/animsition.css" />
    <link rel="stylesheet" type="text/css" href="css/instagram.css" />
    <link rel="stylesheet" type="text/css" href="css/flickity.css" />
    <!-- JS -->
    <!-- flickity -->
    <script src="js/jquery.min.js"></script>  
    <script src="js/flickity.pkgd.js"></script>         
    <!-- instagram -->
    <script src="js/instafeed.js"></script>      
    <script type="text/javascript">
        var userFeed = new Instafeed({
            get: 'user',
            userId: '34417750',
            accessToken: '34417750.3f949ca.5a06e03e1dda4dd0ae68c0504da0c004',
            template: '<div class="gallery-cell"><a href="{{link}}"><img src="{{image}}" /></a></div>'
        });
        userFeed.run();
    </script>    



</head>

<body>



<main class="main">

	<header>
		<nav>
			<a href="#">index</a> ● <a href="#">contact</a> 	
		</nav>
	</header>

	<h1>Sam Baker Salmon</h1>
	<h2>Visual & Interactive Designer</h2>

</main>



<!-- start flickity gallery -->  

    <div class="projects gallery">
      <div class="gallery-cell">
        <a href="#">
          <div class="content">
            <h2>Refinery Hotel</h2>
            <img src="images/image.jpg" />
          </div>
        </a>      
      </div>
      <div class="gallery-cell"></div>
      <div class="gallery-cell"></div>
      <div class="gallery-cell"></div>
      <div class="gallery-cell"></div>
    </div>  

<!-- end flickity gallery -->  

    <div class="projects gallery">
      <div id="instafeed"></div>  
    </div>

<!-- side title -->
<div class="side-title-1">
	<h4>Recent Work</h4>
</div>
<!-- side title -->

<!-- side title -->
<div class="side-title-2">
	<h4>Instagram</h4>
</div>
<!-- side title -->

<footer>
</footer>


    <!-- JS -->
    <!-- flickity -->
    <script>
    var $gallery = $('.gallery').flickity();
    $('body').on( 'click', function() {
        console.log('click')  
    });
    </script>    
    <!-- animstion -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/animsition.js"></script>
    <script>
      $(document).ready(function() {
        $('.animsition').animsition();
      });
    </script>  

</body>

</html>
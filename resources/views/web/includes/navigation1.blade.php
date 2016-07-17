<section id="navigation">
	<nav class="navbar">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{url('/')}}">
	      	<img src="{{url('assets/front/images/logo.png')}}" class="biglogo">
	      	<!-- <img src="{{url('assets/front/images/logosmall.png')}}" class="smalllogo"> -->
	      </a>
	    </div>
	    <div class="collapse navbar-collapse pull-right" id="myNavbar">
	      <ul class="nav navbar-nav">
			      	<li><a href="category_davinci.php">About</a></li>
			      	<li><a href="category_erikshaw.php">Agent</a></li>
			      	<li><a href="category_cargo.php">Gallery</a></li>
			      	<li><a href="category_battery.php">Media</a></li>
			      	<li><a href="contact.php">Contact Us</a></li>
			      	<!-- <li><a href="contact.php" class="btn btn-primary btn-login">Login
			      			<img src="{{url('assets/front/images/loginicon.png')}}">
			      		</a>
			      	</li> -->
		      </ul>
	    </div>
	  </div>
	</nav>
</section>
<style type="text/css">
	.navbar-toggle .icon-bar:nth-of-type(2) {
	  top: 1px;
}

.navbar-toggle .icon-bar:nth-of-type(3) {
  	top: 2px;
}

.navbar-toggle .icon-bar {
	  position: relative;
	  transition: all 500ms ease-in-out;
}

.navbar-toggle.active .icon-bar:nth-of-type(1) {
	  top: 6px;
	  transform: rotate(45deg);
}

.navbar-toggle.active .icon-bar:nth-of-type(2) {
	  background-color: transparent;
}

.navbar-toggle.active .icon-bar:nth-of-type(3) {
	  top: -6px;
	  transform: rotate(-45deg);
}
</style>

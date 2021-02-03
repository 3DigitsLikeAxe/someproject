
<div class="banner-background" id="to-top">
	<div class="container">
		<div class="nav-back">
			<div class="navigation">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">HOME <span class="sr-only">(current)</span></a></li>
							<li><a class="{{ Request::is('about') ? 'active' : '' }}" href="about">ABOUT</a></li>
							<li class="dropdown">
							  <a href="gallery.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALLERY<span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a class="{{ Request::is('gallery') ? 'active' : '' }}" href="gallery">Action</a></li>
								<li><a class="{{ Request::is('gallery') ? 'active' : '' }}" href="gallery">Another action</a></li>
								<li><a class="{{ Request::is('gallery') ? 'active' : '' }}" href="gallery">Something else here</a></li>
							  </ul>
							</li>
							<li><a class="{{ Request::is('pages') ? 'active' : '' }}" href="pages">PAGES</a></li>
							<li><a class="{{ Request::is('blog') ? 'active' : '' }}" href="blog">BLOG</a></li>
							<li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="contact">CONTACT</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
						<div class="clearfix"></div>	
					<div class="clearfix"></div>
				</nav>
				<div class="clearfix"></div>
			</div>
			<div class="logo">
				<h1><a href="index.html">PET<span class="hlf"> KENNEL</span></a></h1>
			</div>
			

<header id="header" style="
    background: black; position:relative">
	<div class="header-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-sm-6 col-6 header-top-left">
					<ul>
						<li><a href="#"></a></li>
						<li><a href="{{route('booktickets.form')}}">Book Tickets</a></li>
					</ul>
				</div>
				<div class="col-lg-6 col-sm-6 col-6 header-top-right">
					<div class="header-social">
						<!-- @guest -->
						<a href="{{route('user.login')}}"><i class="">Log In</i></a>
						<a href="{{route('user.registration')}}"><i class="">Registration</i></a>
                       <!-- @endguest -->

					   @auth
					   <!-- <a herf="#">logout</a> -->
					   {{auth()->user()->name}}
					   <a href="{{route('passenger.logout')}}">Logout</a>

					   @endauth

					  

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="index.html"></a></li>
					
					<li><a href="{{route('myticket')}}">My Ticket</a></li>


					

				
					







				</ul>

			</nav><!-- #nav-menu-container -->
		</div>
	</div>
</header><!-- #header -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>3335043642</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="/inicio">
						<!-- replace logo here -->
						<svg width="220px" height="31px" viewBox="0 0 155 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="30" font-family="AustinBold, Austin" font-weight="bold">
						        <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
						            <text id="AbarrotesMX">
						                <tspan x="108.94" y="325">AbarrotesMX</tspan>
						            </text>
						        </g>
						    </g>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
			<!-- Cart -->
			<ul class="top-menu text-right list-inline">
	          <li class="dropdown cart-nav dropdown-slide">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-android-cart"></i>Carrito</a>
	            <div class="dropdown-menu cart-dropdown">
	            	<!-- Cart Item -->
	            	<div class="media">
	            		<a class="pull-left" href="#">
	            			<img  class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
	            		</a>
	            		<div class="media-body">
	            			<h4 class="media-heading"><a href="">Ladies Bag</a></h4>
	            			<div class="cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                            <h5><strong>$1200</strong></h5>
	            		</div>
                        <a href="#" class="remove"><i class="tf-ion-close"></i></a>
	            	</div><!-- / Cart Item -->
	            	<!-- Cart Item -->
	            	<div class="media">
	            		<a class="pull-left" href="#">
	            			<img  class="media-object" src="images/shop/cart/cart-2.jpg" alt="image" />
	            		</a>
	            		<div class="media-body">
	            			<h4 class="media-heading"><a href="">Ladies Bag</a></h4>
	            			<div class="cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                            <h5><strong>$1200</strong></h5>
	            		</div>
                        <a href="#" class="remove"><i class="tf-ion-close"></i></a>
	            	</div><!-- / Cart Item -->

	            	<div class="cart-summary">
                        <span>Total</span>
                        <span class="total-price">$1799.00</span>
                    </div>
                    <ul class="text-center cart-buttons">
                    	<a href="/Carrito" class="btn btn-small">Carrito</a>
                    	<a href="/Metodo-Pago" class="btn btn-small">Metodo de Pago</a>
                    </ul>
                </div>

	          </li><!-- / Cart -->

	          <!-- Search -->
	          <li class="dropdown search dropdown-slide">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i> Search</a>
	            <ul class="dropdown-menu search-dropdown">
	              <li><form action="post"><input type="search" class="form-control" placeholder="Search..."></form></li>
	            </ul>
	          </li><!-- / Search -->

	        </ul>
					<ul class="nav navbar-nav navbar-right">
						@guest
								<li class="nav-item">
										<a class="nav-link" href="{{ route('login') }}">{{ __('Inicio') }}</a>
								</li>
								@if (Route::has('register'))
										<li class="nav-item">
												<a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
										</li>
								@endif
						@else
								<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
												{{ Auth::user()->name }} <span class="caret"></span>
										</a>

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="{{ route('logout') }}"
													 onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
														{{ __('Salir') }}
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
												</form>
										</div>
								</li>
						@endguest
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->

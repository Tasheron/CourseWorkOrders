<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1, shrink-to-fit=no">
    <title>Course Work</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
    <!-- Custom styles -->
	<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Input mask -->
	<script src="https://unpkg.com/imask"></script>
</head>

<body>
	@if (request()->success)
		<div class="alert alert-success">
			Your order successfully created! Our manager will call you soon
		</div>
	@endif

	<header class="header">
		<section class="hero-section">
			<div class="hero-mask">
			</div>
			<div class="container text-center py-5">
				<div class="single-col-max mx-auto">
					<div class="hero-heading-upper pt-3 mb-3">You Will Code Like A Pro</div>
					<h1 class="hero-heading mb-5">
						<span class="brand mb-4 d-block"><span class="brackets">{</span><span class="header-name">DevCourse</span><span class="brackets">}</span></span>
					    <span class="desc d-block">A Course That Will Make You A Developer</span>
				    </h1>
					<div class="text-center mb-5">
						<a href="#section-pricing" class="btn btn-lg scrollto">Start Learning Now</a>
					</div>
					<div class="hero-summary">
						<div class="row">
							<div class="item col-4">
								<div class="summary-desc mb-1"><i class="icon fas fa-video me-2"></i>Content</div>
								<h4 class="summary-heading">80+ <span class="desc">Videos</span></h4>
							</div>
							<div class="item col-4">
								<div class="summary-desc mb-1"><i class="icon fas fa-clock me-2"></i>Duration</div>
								<h4 class="summary-heading">72 <span class="desc">Hours</span></h4>
							</div>
							<div class="item col-4">
								<div class="summary-desc mb-1"><i class="icon fas fa-user-circle me-2"></i>Access</div>
								<h4 class="summary-heading">Lifetime</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</header>
	
	<div class="sections-wrapper">
        <div class="section-blocks mb-5">
		    <div id="section-overview" class="section-overview section pt-md-4 pt-lg-5">
		        <div class="container py-5">
			        <div class="section-col-max mx-auto">
				        <h3 class="section-title mb-4">What Will You Learn</h3>
			            <p class="section-text mb-4">Your course overview goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae posuere nibh, at posuere enim. Sed vulputate ante congue, euismod odio a, gravida neque. Maecenas volutpat risus dolor.</p>
			            <div class="section-columns text-center">
				            <ul class="column-list list-unstyled mx-auto d-inline-block">
								<li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight lorem ipsum</li>
								<li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight  lorem ipsum</li>
								<li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight  lorem ipsum</li>
								<li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight  lorem ipsum</li>
								<li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight  lorem ipsum</li>
								<li><i class="theme-check-icon fas fa-check me-2"></i>Course highlight  lorem ipsum</li>
							</ul>
			            </div>
			        </div>
		        </div>
		    </div>

	        <div id="section-pricing" class="section-pricing py-5">
		        <div class="container">
			        <div class="single-col-max mx-auto">
			        <h3 class="text-center mb-5">Join This Course</h3>
		            <div class="pricing-plan">
			            <div class="row justify-content-md-center">
				            <div class="pricing-plan-row col-12 col-lg-6 mb-4 mb-lg-0">
					            <div class="plan-item rounded">
						            <div class="plan-header">
							            <h4 class="plan-heading text-center rounded-top p-3 theme-bg-primary">Free</h4>
						            </div>
						            <div class="plan-details p-4">
							            <div class="plan-desc text-center mb-4">
								            <div class="plan-price">$0</div>
								            <div class="plan-price-desc">Limited Access</div>
							            </div>
							            <div class="plan-content px-3">
							                <div class="plan-content-intro mb-3">Join free and you'll get:</div>
								            <ul class="plan-content-list list-unstyled">
									            <li><i class="theme-check-icon fas fa-check me-2"></i>Access to basic level videos</li>
									            <li><i class="theme-check-icon fas fa-check me-2"></i>3 bonus resources</li>
								            </ul>
							            </div>
						            </div>
						            <div class="plan-cta text-center px-4" style="translate: 0 355%">
							            <button class="popup-open-btn-free btn btn-block">Join Free</button>
							        </div>
					            </div>
				            </div>
				            <div class="pricing-plan-row col-12 col-lg-6 mb-4 mb-lg-0">
					            <div class="plan-item rounded">
						            <div class="plan-header">
							            <h4 class="plan-heading text-center rounded-top p-3 theme-bg-primary">Premium</h4>
						            </div>
						            <div class="plan-details p-4">
							            <div class="plan-desc text-center mb-4">
								            <div class="plan-price">$99</div>
								            <div class="plan-price-desc">Unlimited Access</div>
							            </div>
							            <div class="plan-content px-3">
							                <div class="plan-content-intro mb-3">Buy this plan and you'll get:</div>
								            <ul class="plan-content-list list-unstyled">
									            <li><i class="theme-check-icon fas fa-check me-2"></i>Access to all 80+ videos</li>
									            <li><i class="theme-check-icon fas fa-check me-2"></i>Access to all 40+ resources</li>
									            <li><i class="theme-check-icon fas fa-check me-2"></i>Access to projects source code</li>
									            
									            <li><i class="theme-check-icon fas fa-check me-2"></i>Exclusive support forum</li>
									            <li><i class="theme-check-icon fas fa-check me-2"></i>Free updates</li>
									            
									            <li><i class="theme-check-icon fas fa-check me-2"></i>Digital certificate</li>
								            </ul>
							            </div>
						            </div>
						            <div class="plan-cta text-center px-4">
							            <button class="popup-open-btn-vip btn btn-block">Enrol Now</button>
							        </div>
					            </div>
				            </div>
			            </div>
		            </div>
		            </div>
		        </div>
	        </div>
		</div>
	</div>

	<footer class="footer text-center mb-4">
		<div class="container">
			<div class="">
	            Created by <a class="theme-link" href="http://vk.com/tasheron" target="_blank">Alexey Suvorov</a>
			</div>
		</div>
	</footer>

	<div class="popup-plan">
		<i class="popup-plan--close fa fa-times fa-2x"></i>
		<h2 class="popup-plan--header text-center mt-3 mb-5">Register Today</h2>
		<div>
			<form method="POST" action="/api/order/new">
				{{ csrf_field() }}
				<input type="hidden" class="plan" name="plan" value="">
				<input type="email" name="email" placeholder="Email">
				<input type="text" name="name" placeholder="Name">
				<input class="mask" type="text" name="phone" placeholder="+7 (999) 999-99-99">
				<button class="submit">Send order</button>
			</form>
		</div>
	</div>

    <!-- Custom js -->
	<script src="{{ mix('js/app.js') }}"></script>
</body>
</html> 

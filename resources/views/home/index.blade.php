@extends('layouts.app')
@section('title', 'Welcome to Ibinex')
@push('stylesheets')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush


@section('content')

<section id="intro-cryptobridge">
	<article class="position-relative">
		<h2>Introducing</h2>
		<h1>CryptoBridge&trade;</h1>
		<p>
			Our patent-pending proprietary software, CryptoBridge, is the nexus that aggregates premier cryptocurrency exchanges and in­dexes for your customers, in real­-time.
		</p>
		<p>
			The CryptoBridge algorithm benefits your customers by showing them a unique combination of the best and most select crypto­currency exchanges and most at­tractive live prices — only available via the Ibinex trading platform.
		</p>
		<form class="position-absolute" id="requestDemo">
			<div class="input-group">
				<input type="email" class="form-control" placeholder="Type your email" required="" autocomplete="off">
				<span class="input-group-btn"><button type="submit" class="btn">REQUEST A DEMO</button></span>
			</div>
		</form>
	</article>
	<div class="hollow-box"></div>
</section>

<div class="container-fluid position-relative" id="gateway">
	<div class="container">
		<section class="row">
			<article class="col-md-12 col-lg-6">
				<img src="images/home/laptop.png" class="img-fluid">
			</article>
			<article class="col-md-12 col-lg-6">
			</article>
			<article class="col-md-12 col-lg-6">
				<h1>Ibinex - The Gateway to your Own Customised Cryptocurrency Ecosystem</h1>
				<p>With an in-depth understanding of evolving blockchain technology and cryptocurrency development, Ibinex invite you to engage with a fully-customisable, private, institutional white label platform. Trail&shy;blazing turnkey solutions to merge with your own web-based plat&shy;form, Ibinex will show you definitively how to build a cryptocurrency exchange, your way.</p>
			</article>
		</section>
	</div>
</div>

<div class="container" id="exchange">

	<section id="exchange-title">
		<h2 class="text-center">Exchange your Way with Ibinex.</h2>
		<h2 class="text-center">Your Turn-Key Solution Includes:</h2>
	</section>

	<section id="exchange-1" class="row">
		<article class="col-md-6">
			<img src="images/home/card-tailored.png">
			<h1>Tailored Front End content website</h1>
			<p>Ibinex provide you with a tailored front-end website with a fully-integrated web-based trading platform and Content Management System (CMS). Offering you flexible front-end user trading, while preserving the personal touch for your brand, the Ibinex solution showcases enhanced practicality and performance driven features.</p>

		</article>

		<article class="col-md-6">
			<img src="images/home/card-crm.png">
			<h1>Full CRM &amp; Back Office Solution</h1>
			<p>The Ibinex ecosystem assimilates a complete Customer Relationship Management (CRM) as a complement to your web based exchange platform. This includes KYC/AML documentation collection and verification, and account &amp; money management. The result is an effortless back office administration workflow and smooth UI/UX for your customers.</p>
		</article>
	</section>
	<section id="exchange-2" class="row">
		<article class="col-md-6">
			<img src="images/home/card-liquidity.png">
			<h1>Aggregated Liquidity Exchange</h1>
			<p>Connect with Ibinex and receive coveted access to an unprecedented first-tier array of "Top of the Book" API bridges from over 60 leading exchanges for hundreds of cryptocurrencies. By monitoring the Ibinex stream, you can become a leading exchange market for the most in-demand cryptocurrencies and never miss the opportunity to benefit from liquidity as trends shift.</p>
		</article>
		<article class="col-md-6">
			<img src="images/home/card-solution.png">
			<h1>Complete Processing solution</h1>
			<p>
				With our thriving network of exclusive partners, Ibinex is changing the game for cryptocurrency payment processing. We bring you exclusive payment solutions unavailable elsewhere, truly revolutionising the way that crypto is bought and sold and turbocharging the possibilities for your exchange to thrive in maximum liquidity.
			</p>
		</article>
	</section>
	<section id="exchange-3" class="row">
		<article class="col-md-6">
			<img src="images/home/card-compliant.png">
			<h1>Compliant Banking Custodian service</h1>
			<p>Ibinex is the first ever cryptocurrency exchange platform the world that has a finance transaction license. We can offer fully-compliant and licensed custodian processing and accounts, or you can choose to operate with your own custodian. Ibinex is licensed to facilitate payments via swipe-and-transmit from FIAT to a base currency. This preferred solution is unavailable to the bigger cryptocurrency exchanges, and is only offered by Ibinex.</p>
		</article>
		<article class="col-md-6">
			<img src="images/home/card-cloud.png">
			<h1>Hosted in a secure private cloud environment</h1>
			<p>
				Security is a 360 degree operation, with the Ibinex platform guarded 24/7 in a private cloud and crypto-based funds held in shielded cold wallets. Cyber security experts maintain and defend the platform, while cold wallets containing funds are impregnable, offline, and safely out of unauthorised reach.
			</p>
		</article>
	</section>
</div>

<div class="container-fluid" id="vision">
	<div class="container">
		<section class="row position-relative vision-web">
			<article class="col-md-6 position-absolute">
				<img src="images/home/vision--video.png" class="img-fluid">
			</article>
			<article class="col-md-5">
			</article>
			<article class="col-md-7">
				<h1 class="text-center align-middle" >
					<span>Our</span><span>vision.</span>
				</h1>
			</article>
		</section>
		<section class="row vision-mobile">
			<article class="text-center">
				<img src="images/home/vision--video.png" class="img-fluid">
			</article>
			<article class="text-center">
				<h1 class="text-center align-middle" id="ourVisionMobile">
					<span>Our</span><span>vision.</span>
				</h1>
				<h1 class="text-center align-middle" id="ourVisionMobile-Mobile">
					<span>Our vision.</span>
				</h1>
			</article>
		</section>
	</div>
</div>

<div class="container text-center position-relative" id="technical-papers">

	<h5 >Learn more about Ibinex</h5>
	<h1 >Technical Papers &amp; Legal Circular</h1>	

	<section class="row not-home-carousel">
		<article class="col-md-4">
			<img src="images/home/business.png" class="img-fluid">
			<div>
				<h3 style="color: #243555;">Business Model</h3>
				<h4>PDF - 1.3MB</h4>
				<button class="btn btn-default rounded-button ">
					Download
				</button>
			</div>
		</article>
		<article class="col-md-4">
			<img src="images/home/one-page.png" class="img-fluid">
			<div>
				<h3 style="color: #9e664c;">One Page Brochure</h3>
				<h4>PDF - 1.3MB</h4>
				<button class="btn btn-default rounded-button">
					Download
				</button>
			</div>
		</article>
		<article class="col-md-4">
			<img src="images/home/custodian.png" class="img-fluid">
			<div>
				<h3 style="color: #9a4c47;">Custodian Guidelines</h3>
				<h4>PDF - 1.3MB</h4>
				<button class="btn btn-default rounded-button ">
					Download
				</button>
			</div>
		</article>
	</section>
	<section class="row not-home-carousel">
		<article class="col-md-4">
			<img src="images/home/pricing.png" class="img-fluid">
			<div>
				<h3 style="color: #708158;">Pricing Model</h3>
				<h4>PDF - 1.3MB</h4>
				<button class="btn btn-default rounded-button center-block ">
					Download
				</button>
			</div>
		</article>
		<article class="col-md-4">
			<img src="images/home/terms.png" class="img-fluid">
			<div>
				<h3 style="color: #8154a7;">Terms &amp; Conditions</h3>
				<h4>PDF - 1.3MB</h4>
				<button class="btn btn-default rounded-button">
					Download
				</button>
			</div>
		</article>
		<article class="col-md-4">
			<img src="images/home/kyc.png" class="img-fluid">
			<div>
				<h3 style="color: #44577f;">KYC &amp; AML Requirments</h3>
				<h4>PDF - 1.3MB</h4>
				<button class="btn btn-default rounded-button ">
					Download
				</button>
			</div>
		</article>
	</section>

	<!-- carousel -->

	<div class="home-carousel row">

			<div class="carousel-item">
				<img src="images/home/business.png" class="mx-auto">
				<div>
					<h3 style="color: #243555;">Business Model</h3>
					<h4>PDF - 1.3MB</h4>
					<button class="btn btn-default rounded-button ">
						Download
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/home/one-page.png" class="mx-auto">
				<div>
					<h3 style="color: #9e664c;">One Page Brochure</h3>
					<h4>PDF - 1.3MB</h4>
					<button class="btn btn-default rounded-button">
						Download
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/home/custodian.png" class="mx-auto">
				<div>
					<h3 style="color: #9a4c47;">Custodian Guidelines</h3>
					<h4>PDF - 1.3MB</h4>
					<button class="btn btn-default rounded-button ">
						Download
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/home/pricing.png" class="mx-auto">
				<div>
					<h3 style="color: #708158;">Pricing Model</h3>
					<h4>PDF - 1.3MB</h4>
					<button class="btn btn-default rounded-button center-block ">
						Download
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/home/terms.png" class="mx-auto">
				<div>
					<h3 style="color: #8154a7;">Terms &amp; Conditions</h3>
					<h4>PDF - 1.3MB</h4>
					<button class="btn btn-default rounded-button">
						Download
					</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/home/kyc.png" class="mx-auto">
				<div>
					<h3 style="color: #44577f;">KYC &amp; AML Requirments</h3>
					<h4>PDF - 1.3MB</h4>
					<button class="btn btn-default rounded-button ">
						Download
					</button>
				</div>
			</div>
	</div>

	<div class="paginator">
		<li class="prev"><i class="fa fa-angle-left fa-3x" aria-hidden="true"></i></li>
		<li class="next"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i></li>
	</div>

</div>


<section id="media-coverage">
	<h1 class="text-center" style="font-weight:bolder;">Ibinex media coverage</h1>
	<ul id="coverages">
		<li><img src="images/home/media--yahoo.png"></li>
		<li><img src="images/home/media--tg.png"></li>
		<li><img src="images/home/media--tc.png"></li>
		<li><img src="images/home/media--mashable.png"></li>
		<li><img src="images/home/media--bi.png"></li>
		<li><img src="images/home/media--hp.png"></li>
	</ul>
</section>

@endsection

@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush

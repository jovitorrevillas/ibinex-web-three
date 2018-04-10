@extends('layouts.app')
@section('title','Contact Us')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endpush

@section('content')



	

	<div class="jumbotron text-center"  id="services" >
			
			<h1 class="services-title" style="">Services</h1>

			<p id="ibinex_services">Ibinex services are all characterised by high-level innovation made practical for your personalised <br>exchange integration.</p>
			<p id="ibinex_ecosystem">Our ecosystem of services comprises of the following units:</p>


	</div>


	<div class="container" id="platform">

		  	<div class="row">

				    <div class="col-md-6 " >
				    	
				 		   <img src="images/services/Ibinex-Platform2.png" class="platform-laptop" >

				    </div>

				    <div class="col-md-6 ">

				    <h1 class="heading platform-heading">Platform</h1>

				  	 <p class="platform-description">Your exchange is your launchpad. Our suite elevates your exchange by equipping you with your own platform consisting of:</p>


				  	 <ul class="check-items ">
				  	 	<li> <span>Tailor-made private, institutional while label infrastructure</span></li>
				  	 	<li>
				  	 		<span>Fully-customisable front-end website</span></li>
				  	 	<li><span>Completely integrated web-based trading platform</span></li>
				  	 	<li><span>Flexible front-end user trading</span></li>
				  	 	<li><span>Performance-driven features</span></li>
				  	 	<li><span>Secure private cloud hosting</span></li>
				  	 	<li><span>Total compatibility with your own branding deck.</span></li>
				  	 </ul>


				  	 <img src="images/services/Ibinex-Platform2.png" class="platform-mobile-laptop" >
				  	

				    </div>

		  </div>
	</div>
		
	


	<div class="container" id="crm">
		
			
				<div class="row" >

					   <div class="col-xl-6">

					   	<h1 class="heading crm-heading">CRM/Back Office</h1>

				  	 <p class="crm-description">The Ibinex solution unites the front-end and platform with a full back office suit including CRM with:</p>



				  	 <ul class="crm-check-items">
				  	 	<li>
				  	 	<span>KYC/AML documentation collection</span>
				  	 	</li>
				  	 	<li><span>Documentation verification</span></li>
				  	 	<li><span>Account and money management</span></li>
				  	 	<li><span>Optimised back-office administrative workflow</span></li>
				  	 	<li><span>Enhanced UI/UX</span></li>
				  	 </ul>

				  	 	
						
						
						
						

			

				    </div>


				    <div class="col-xl-6">
				    
				    	<img src="images/services/docs.png" class="crm-dashboard">

				    </div>

				 

		 	 </div>



	</div>


	<div class="cryptobridge" id="cryptobridge">
		
				
				<div class="container">
					
					<div class="row">

					   <div class="col-xl-6">

						
					   	<img src="images/services/cryptobridge.png" class="img-fluid c3-logo" >

					   	 <img src="images/services/cryptobridge_mobile.png" class="img-fluid c3-mobile-logo" >
				

				   		</div>


				    <div class="col-xl-6 col-xs-12">

				    	<h1 class="heading crypto-heading">CryptoBridge™</h1>

				    	<p class="crypto-descritpion">Aggregate elite exchanges and indexes as the cryptocurrency market moves, with out patent-pending proprietary software suite, CryptoBridge™. Gain access to 60 premier exchanges for maximum liquidity cryptocurrencies, all available only through Cryptobridge™ by Ibinex.</p>

				    </div>

				 

		 	 	</div>

				</div>

				



	</div>


	<div class="container ccp" id="ccp" >
		
			
				<div class="row" >

					   <div class="col-xl-6  ">

						
						<h1 class="heading ccp-heading">Credit Card Processing</h1>

				    	<p class="ccp-description">We offer full spectrum payment processing for cryptocurrencies, and a complete selection that is unavailable elsewhere. Exchanging your way with Ibinex means experiencing a whole new world of payment options including: credit cards, debit cards, wire transfers, alternative payments, hosted wallets and cold wallets.</p>

				    	<img src="images/services/cards.png" class="img-fluid ccp-cards" >
			

				   		</div>


				    <div class="col-xl-6">

				    	<img src="images/services/creditcard-phone.png" class="ccp-phone">



				    </div>

				 

		 	 </div>



	</div>


	<div  id="ca">
		
					<div class="container">
						
						<div class="row">

					   <div class="col-xl-6">

						
						<img src="images/services/custodian_accounts.png" class="ca-person">
			

				   		</div>

				    <div class="col-xl-6 custodian-right" >

				    			<h1 class="heading ca-heading">Custodian Accounts</h1>

				    	<p class="ca-description">Another first sees Ibinex leading the way as the world's first cryptocurrency exchange with a finance transaction license. We are proud to be the first to offer you:</p>

				    	<ul class="ca-items">
				    		<li>Fully-compliant and licensed custodian proceeding and accounts</li>
				    		<li>The choice to instead select a custodian of your choice</li>
				    		<li>Payments via swipe-and-transmit from FIAT to base currency</li>
				    		<li>A raft of other custodian account options unavailable elsewhere</li>
				    	</ul>

				    </div>

				 

		 	 </div>

					</div>
				



	</div>


@endsection
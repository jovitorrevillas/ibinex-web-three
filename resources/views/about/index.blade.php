@extends('layouts.app')
@section('title','About us')

@push('scripts')
	<script src="js/swiper.min.js"></script>
	<script>
		var lastCard = $(".card-list .card").length - 1;

		$('.next').click(function(e){
            e.preventDefault();
            var prependList = function() {
                if( $('.card').hasClass('activeNow') ) {
                    var $slicedCard = $('.card').slice(lastCard).removeClass('transformThis activeNow');
                    $('#executive-team ul').prepend($slicedCard);
                }
            };
            $('#executive-team li').last().removeClass('transformPrev').addClass('transformThis').prev().addClass('activeNow');
            setTimeout(function(){prependList(); }, 150);
		});

		$('.prev').click(function(e) {
			e.preventDefault();
			var appendToList = function() {
				if( $('.card').hasClass('activeNow') ) {
					$('.card.activeNow').removeClass('activeNow');
					var $slicedCard = $('.card').slice(0, 1).addClass('transformPrev');
					$('.card-list').append($slicedCard);
				}
			};

			$('#executive-team li').removeClass('transformPrev').last().addClass('activeNow').prevAll().removeClass('activeNow');
			setTimeout(function(){appendToList();}, 150);
		});

		var mySwiper = new Swiper ('.swiper-container', {
		    // Optional parameters
		    direction: 'horizontal',
		    loop: true,

		    // Navigation arrows
		    navigation: {
		      nextEl: '.swiper-button-next',
		      prevEl: '.swiper-button-prev',
		    },
		});
	</script>
@endpush

@section('content')
	<div id="about">
		<section class="flex" id="transparency">
			<div class="img-lockup">
				<img src="images/about/about-banner.jpg" alt="" class="hidden-md">
				<img src="images/about/about-banner-mobile.jpg" alt="" class="visible-md">
			</div>
			<div class="transparency-lockup flex">
				<article class="transparency">
					<h1>Transparency</h1>
					<p>
						Ibinex is a collaboration of pioneers. With decades of combined experience within the finance, technology, cyber security and SaaS worlds, today we are proud to work with over 60 of the leading exchanges for hundreds of cryptocurrencies.
					</p>
					<p>
						We channel our extensive industry knowledge and vision into the live and developing cryptocurrency arena, to provide you with premium solutions for you to create tailored exchange platforms with our seasoned experience as your competitive edge.
					</p>
					<p>
						We are trusted by thousands of customers world-wide daily as their white-label exchange platform, and pride ourselves on exhibiting the very highest standards of transparency and professionalism.
					</p>
					<p>
						Ibinex is defined by our dedication to unifying trading standards in the cryptocurrency world, increasing accountability, integrity and excellence in service.
					</p>
				</article>
			</div>
		</section>

		<section id="media-coverage">
			<div class="content">
				<h1 class="hidden-md">Ibinex media coverage</h1>
				<h1 class="visible-md">Ibinex Media Coverage</h1>

				<div class="media-lockup flex-center">
					<img src="images/about/media1.png" alt="">
					<img src="images/about/media2.png" alt="">
					<img src="images/about/media3.png" alt="">
					<img src="images/about/media4.png" alt="">
					<img src="images/about/media5.png" alt="">
					<img src="images/about/media6.png" alt="">
				</div>
				<div class="media-lockup flex-center">
					<img src="images/about/media7.png" alt="">
					<img src="images/about/media8.png" alt="">
					<img src="images/about/media9.png" alt="">
					<img src="images/about/media10.png" alt="">
					<img src="images/about/media11.png" alt="">
					<img src="images/about/media12.png" alt="">
				</div>
			</div>
		</section>

		<section id="team">
			<div class="desktop">
				<div class="container" id="executive-team">
					<div class="row">
						<div class="col-md-6">
							<div class="card-stack">
								<ul class="card-list">
									<li class="card">
										<img src="images/about/exec3.png" alt="Executive">
									</li>
									<li class="card">
										<img src="images/about/exec2.png" alt="Executive">
									</li>
									<li class="card">
										<img src="images/about/exec1.png" alt="Executive">
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<article>
								<h3>Executive team</h3>
								<h1>The people <br> behind iBinex.</h1>

								<p class="heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</article>
							<article class="executive-slider">
								<div class="slider-control">
									<a class="buttons prev" href="#">
										<img src="images/about/arrow-long-left.svg" alt="">
									</a>
									<a class="buttons next" href="#">
										<img src="images/about/arrow-long-right.svg" alt="">
									</a>
								</div>

								<h4 class="name">Matthew Novinski</h4>
								<h5 class="designation">Chief Executive Officer</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in</p>

								<div class="links">
									<a href=""><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> Linkedin Profile</a>
									<a href=""><i class="fa fa-file-pdf-o fa-lg" aria-hidden="true"></i> Download CV</a>
								</div>
							</article>
						</div>
					</div>
				</div>
				<hr>
				<div id="advisory-board">
					<div class="container">
						<h1>Advisory <span class="italic">Board</span></h1>
						<div class="board-lockup">
							<div class="row">
								<div class="col-lg-3">
									<img src="images/about/board1.png" alt="">
									<article>
										<h5 class="name">Jeremy Corbein</h5>
										<p class="designation">Chief Operational Officer, Deiteriy</p>
									</article>
								</div>

								<div class="col-lg-3">
									<img src="images/about/board2.png" alt="">
									<article>
										<h5 class="name">Jimmy Fallon</h5>
										<p class="designation">Head of Economics Department, Stockholm School of Economics in Riga</p>
									</article>
								</div>

								<div class="col-lg-3">
									<img src="images/about/board3.png" alt="">
									<article>
										<h5 class="name">Stephen Colbert</h5>
										<p class="designation">Head of Products and Services Development Department, XB Software</p>
									</article>
								</div>

								<div class="col-lg-3">
									<img src="images/about/board4.png" alt="">
									<article>
										<h5 class="name">Artem Kushik</h5>
										<p class="designation">Business Analyst, Crédit Agricole CIB</p>
									</article>
								</div>

								<div class="col-lg-3">
									<img src="images/about/board1.png" alt="">
									<article>
										<h5 class="name">Jeremy Corbein</h5>
										<p class="designation">Chief Operational Officer, Deiteriy</p>
									</article>
								</div>

								<div class="col-lg-3">
									<img src="images/about/board2.png" alt="">
									<article>
										<h5 class="name">Jimmy Fallon</h5>
										<p class="designation">Head of Economics Department, Stockholm School of Economics in Riga</p>
									</article>
								</div>

								<div class="col-lg-3">
									<img src="images/about/board3.png" alt="">
									<article>
										<h5 class="name">Stephen Colbert</h5>
										<p class="designation">Head of Products and Services Development Department, XB Software</p>
									</article>
								</div>

								<div class="col-lg-3">
									<img src="images/about/board4.png" alt="">
									<article>
										<h5 class="name">Artem Kushik</h5>
										<p class="designation">Business Analyst, Crédit Agricole CIB</p>
									</article>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mobile">
				<div id="executive-team">
					<article>
						<h3>Executive team</h3>
						<p class="heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</article>

					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
					  	<div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" src="images/about/mobile/exec1.png">

						    	<div class="content">
						    		<article>
						    			<h4 class="name">Matthew Novinski</h4>
										<h5 class="designation">Chief Executive Officer</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>

										<div class="links">
											<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin Profile</a>
											<!-- <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download CV</a> -->
										</div>
						    		</article>
						    	</div>
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="images/about/mobile/exec2.png">

								<div class="content">
									<article>
										<h4 class="name">John Whirlpool</h4>
										<h5 class="designation">Chief Executive Officer</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in</p>

										<div class="links">
											<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin Profile</a>
											<!-- <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download CV</a> -->
										</div>
									</article>
								</div>
						    </div>
					    	<div class="carousel-item">
					      		<img class="d-block w-100" src="images/about/mobile/exec3.png">

								<div class="content">
									<article>
										<h4 class="name">Rion Pronelle/h4>
										<h5 class="designation">Chief Executive Officer</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in</p>

										<div class="links">
											<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin Profile</a>
											<!-- <a href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download CV</a> -->
										</div>
									</article>
								</div>
					    	</div>
					  	</div>
					</div>

					<div class="slider-control">
						<div class="control-lockup">
					    	<a href="#carouselExampleControls" role="button" data-slide="prev">
								<img src="images/about/arrow-long-left.svg" alt="">
						  	</a>
						  	<a href="#carouselExampleControls" role="button" data-slide="next">
								<img src="images/about/arrow-long-right.svg" alt="">
							</a>
						</div>
					</div>
				</div>
				<div id="board">
					<h3>Ibinex Advisory Board</h3>

					<!-- Slider main container -->
					<div class="swiper-container">
					    <!-- Additional required wrapper -->
					    <div class="swiper-wrapper">
					        <!-- Slides -->
					        <div class="swiper-slide">
								<img src="images/about/mobile/board1.png" alt="">
								<article>
									<h5 class="name">Jeremy Corbein</h5>
									<p class="designation">Chief Operational Officer, Deiteriy</p>
								</article>
					        </div>
					        <div class="swiper-slide">
								<img src="images/about/mobile/board2.png" alt="">
								<article>
									<h5 class="name">Jimmy Fallon</h5>
									<p class="designation">Head of Economics Department, Stockholm School of Economics in Riga</p>
								</article>
					        </div>
					        <div class="swiper-slide">
								<img src="images/about/mobile/board3.png" alt="">
								<article>
									<h5 class="name">Stephen Colbert</h5>
									<p class="designation">Head of Products and Services Development Department, XB Software</p>
								</article>
					        </div>
							<div class="swiper-slide">
								<img src="images/about/mobile/board4.png" alt="">
								<article>
									<h5 class="name">Artem Kushik</h5>
									<p class="designation">Business Analyst, Crédit Agricole CIB</p>
								</article>
							</div>
					    </div>

					    <!-- If we need navigation buttons -->
					    <div class="swiper-button-prev"></div>
					    <div class="swiper-button-next"></div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection
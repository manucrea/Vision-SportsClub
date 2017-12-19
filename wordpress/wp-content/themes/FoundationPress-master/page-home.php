<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

	<section id="slider">
		<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
		  <div class="orbit-wrapper">
		    <div class="orbit-controls">
		      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fa fa-angle-left" aria-hidden="true"></i></button>
		      <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fa fa-angle-right" aria-hidden="true"></i></button>
		    </div>
		    <ul class="orbit-container">
		      <li class="is-active orbit-slide">
		        <figure class="orbit-figure">
		          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/slider1.jpg" alt="Space">
		          <figcaption class="orbit-caption">the body achieves <br> what the <span>mind believes</span></figcaption>
		        </figure>
		      </li>
		      <li class="orbit-slide">
		        <figure class="orbit-figure">
		          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/slider2.jpg" alt="Space">
		          <figcaption class="orbit-caption">the body achieves <br> what the <span>mind believes</span></figcaption>
		        </figure>
		      </li>
		    </ul>
		  </div>
		</div>
		<div class="claim-free-pass-form">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-middle align-center">
					<div class="shrink cell">
						<p>Be <b>stronger</b> than your excuses</p>
					</div>
					<div class="auto cell">
						<?php echo do_shortcode( '[contact-form-7 id="89" title="claim-free-pass"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="about">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="small-12 medium-5 large-4 large-offset-1 cell">
					<div class="title">
						About <b><span class="blue">VISION</span> <span class="gray">SPORTS</span> CLUB</b>
					</div>
					<p>
						Founded in 2008, is Rockland County’s most innovative fitness center for life enrichment, enhancement, and longevity. Our 50,000 square foot facility brings together the best in health club design, state-of-the-art fitness equipment, private training facility, innovative group exercise and personal training programs, and nutritional counseling to provide our members with a truly customized fitness experience.
					</p>
					<div class="text-right">
						<a class="button outline" href="#">About Us</a>
					</div>
				</div>
				<div class="auto cell">
					<div class="text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/woman-jump.png" alt=" ">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="groups">
		<div class="group-x text-center">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-middle align-center">
					<div class="cell">
						<h3>GROUP X</h3>
						<p class="big">
							No matter your fitness level Vision Sports Club has the right
						</p>
						<p class="big">
							<span class="blue">GroupX class</span> to help you reach your fitness goals.
						</p>
						<p>
							Whether you are searching for a fat-shredding spin, dance, or aerobics class, an invigorating strength training or Pilates class, or a relaxing yoga session, our enthusiastic and skilled instructors will ensure you are getting a great workout… and having fun while doing it. <span class="blue">All classes are geared t o any level from beginner to advanced.</span>
						</p>
						<p>
							<a class="button outline white" href="#">View our Schedule</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="classes">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-middle align-center">
					<div class="small-12 medium-4 large-4 cell">
						<div class="box text-center crossfit">
							<div class="over">
								<h4>CROSSFIT</h4>
								<p>
									Is a Personal Training and Strength & Conditioning program that develops individuals, athletes & teams to reach new levels of health and fitness through our unique training style. 
								</p>
								<a class="button outline" href="#">Free 3 days trial</a>
							</div>
						</div>
					</div>
					<div class="small-12 medium-4 large-4 cell">
						<div class="box text-center training">
							<div class="over">
								<h4>TRAINING</h4>
								<p>
									Our certified and experienced Personal Training staff is dedicated to providing each client with a customized and comprehensive plan to reach his or her fitness goals.
								</p>
								<a class="button outline" href="#">Schedule</a>
							</div>
						</div>
					</div>
					<div class="small-12 medium-4 large-4 cell">
						<div class="box text-center youthfitzone">
							<div class="over">
								<h4>YOUTH FIT ZONE</h4>
								<p>
									Vision Sports Club is the only health club in the Rockland County area to offer a dedicated, comprehensive youth fitness section.
								</p>
								<a class="button outline" href="#">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="news">
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-padding-y align-center">
				<div class="small-12 medium-6 large-6 cell">
					<h3>FEATURED</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<ul class="news-list no-bullet">
						<li>
							<a href="#">
								<div class="grid-x grid-padding-x align-middle align-center">
									<div class="small-12 medium-4 cell">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/news-1.png" alt=" ">
									</div>
									<div class="small-12 medium-8 cell">
										<span class="meta">10/10/2017</span>
										<h5>SPORTS PERFORMANCE</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="grid-x grid-padding-x align-middle align-center">
									<div class="small-12 medium-4 cell">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/news-2.png" alt=" ">
									</div>
									<div class="small-12 medium-8 cell">
										<span class="meta">10/10/2017</span>
										<h5>NUTRITION</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="grid-x grid-padding-x align-middle align-center">
									<div class="small-12 medium-4 cell">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/news-3.png" alt=" ">
									</div>
									<div class="small-12 medium-8 cell">
										<span class="meta">10/10/2017</span>
										<h5>PARTIES</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="small-12 medium-6 large-6 cell">
					<h3>VISION NEWS AND EVENTS</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<ul class="events-list no-bullet">
						<li>
							<div class="grid-x grid-padding-x align-middle align-center">
								<div class="small-2 cell text-center">
									<h3>21</h3>
									<h5>OCT</h5>
								</div>
								<div class="auto cell">
									<a href="#">
										<h5>CROSSFIT CHALLENGE</h5>
										<span class="meta">10/10/2017</span>
									</a>
								</div>
								<div class="small-3 cell">
									<a href="#">
										<div class="icon-calendar">
											<div class="type">
												<i class="fa fa-calendar-o" aria-hidden="true"></i>
											</div>
											<div class="txt">
												Add to <br>Calendar
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li>
							<div class="grid-x grid-padding-x align-middle align-center">
								<div class="small-2 cell text-center">
									<h3>21</h3>
									<h5>OCT</h5>
								</div>
								<div class="auto cell">
									<a href="#">
										<h5>CROSSFIT CHALLENGE</h5>
										<span class="meta">10/10/2017</span>
									</a>
								</div>
								<div class="small-3 cell">
									<a href="#">
										<div class="icon-calendar">
											<div class="type">
												<i class="fa fa-calendar-o" aria-hidden="true"></i>
											</div>
											<div class="txt">
												Add to <br>Calendar
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li>
							<div class="grid-x grid-padding-x align-middle align-center">
								<div class="small-2 cell text-center">
									<h3>21</h3>
									<h5>OCT</h5>
								</div>
								<div class="auto cell">
									<a href="#">
										<h5>CROSSFIT CHALLENGE</h5>
										<span class="meta">10/10/2017</span>
									</a>
								</div>
								<div class="small-3 cell">
									<a href="#">
										<div class="icon-calendar">
											<div class="type">
												<i class="fa fa-calendar-o" aria-hidden="true"></i>
											</div>
											<div class="txt">
												Add to <br>Calendar
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li>
							<div class="grid-x grid-padding-x align-middle align-center">
								<div class="small-2 cell text-center">
									<h3>21</h3>
									<h5>OCT</h5>
								</div>
								<div class="auto cell">
									<a href="#">
										<h5>CROSSFIT CHALLENGE</h5>
										<span class="meta">10/10/2017</span>
									</a>
								</div>
								<div class="small-3 cell">
									<a href="#">
										<div class="icon-calendar">
											<div class="type">
												<i class="fa fa-calendar-o" aria-hidden="true"></i>
											</div>
											<div class="txt">
												Add to <br>Calendar
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

 <?php get_footer();

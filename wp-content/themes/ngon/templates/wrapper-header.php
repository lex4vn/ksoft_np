<?php /* Wrapper Name: Header */ ?>
<div class="header-inner">
	<div class="main-header ">
		<div class="thrillist-logo-wrap">
			<a href="/" class="ga-trigger" data-ga-category="Nav" data-ga-action="TL Logo" data-ga-label="/" title="Thrillist - Find the Best and Most Under-Appreciated Places to Eat, Drink and Travel">
                    <span class="thrillist-logo desktop-logo">
                        <span class="logo-text">Thrillist</span>
                    </span>
			</a>
		</div>
		<nav class="main-menu">
			<?php
			if (has_nav_menu('primary')) {
				wp_nav_menu(array(
					'theme_location' => 'primary',
				));

//				wp_nav_menu(array(
//					'theme_location' => 'primary',
//					'container' => 'div',
//					'container_id' => 'mobile-menu',
//					'menu_class' => 'mobile-menu',
//					'menu_id' => 'toggle-view-menu',
//					'items_wrap' => '<span>' . esc_html__('Menu', 'news-mix-lite') . '</span><ul id="%1$s" class="hidden">%3$s</ul>',
//					'walker' => $mobile_menu_walker
//				));
			}
			?>
<!--			<ul class="nav clearfix">-->
<!--				<li class="nav__item--food-and-drink ">-->
<!--					<a href="/food-and-drink" class="ga-trigger" data-ga-category="Nav" data-ga-action="food-and-drink" data-ga-label="food-and-drink_1" data-ga-value="1">-->
<!--						Food &amp; Drink                        </a>-->
<!--				</li>-->
<!--				<li class="nav__item--travel ">-->
<!--					<a href="/travel" class="ga-trigger" data-ga-category="Nav" data-ga-action="travel" data-ga-label="travel_2" data-ga-value="2">-->
<!--						Travel                        </a>-->
<!--				</li>-->
<!--				<li class="nav__item--health ">-->
<!--					<a href="/health" class="ga-trigger" data-ga-category="Nav" data-ga-action="health" data-ga-label="health_3" data-ga-value="3">-->
<!--						Health                        </a>-->
<!--				</li>-->
<!--				<li class="nav__item--on-tap ">-->
<!--					<a href="/on-tap" class="ga-trigger" data-ga-category="Nav" data-ga-action="on-tap" data-ga-label="on-tap_4" data-ga-value="4">-->
<!--						On Tap                        </a>-->
<!--				</li>-->
<!---->
<!--				<li class="nav__item--more has-dropdown ">-->
<!--					<span>All Sections</span>-->
<!--					<div class="dropdown">-->
<!--						<div class="dropdown-inner">-->
<!--							<h4>All Sections</h4>-->
<!--							<ul class="clearfix">-->
<!--								<li class="subnav__item--food-and-drink ">-->
<!--									<a href="/food-and-drink" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="food-and-drink_pos1" data-ga-value="5">-->
<!--										<span>Food &amp; Drink</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--travel ">-->
<!--									<a href="/travel" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="travel_pos2" data-ga-value="5">-->
<!--										<span>Travel</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--health ">-->
<!--									<a href="/health" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="health_pos3" data-ga-value="5">-->
<!--										<span>Health</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--on-tap ">-->
<!--									<a href="/on-tap" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="on-tap_pos4" data-ga-value="5">-->
<!--										<span>On Tap</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--money ">-->
<!--									<a href="/money" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="money_pos5" data-ga-value="5">-->
<!--										<span>Money</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--sex-dating ">-->
<!--									<a href="/sex-dating" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="sex-dating_pos6" data-ga-value="5">-->
<!--										<span>Sex &amp; Dating</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--entertainment ">-->
<!--									<a href="/entertainment" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="entertainment_pos7" data-ga-value="5">-->
<!--										<span>Entertainment</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--videos ">-->
<!--									<a href="/videos" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="videos_pos8" data-ga-value="5">-->
<!--										<span>Video</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--cars ">-->
<!--									<a href="/cars" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="cars_pos9" data-ga-value="5">-->
<!--										<span>Cars</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--luxe ">-->
<!--									<a href="/luxe" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="luxe_pos10" data-ga-value="5">-->
<!--										<span>Luxe</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--tech ">-->
<!--									<a href="/tech" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="tech_pos11" data-ga-value="5">-->
<!--										<span>Tech</span>-->
<!--									</a>-->
<!--								</li>-->
<!--								<li class="subnav__item--recipes ">-->
<!--									<a href="/recipes" class="ga-trigger" data-ga-category="Nav" data-ga-action="More" data-ga-label="recipes_pos12" data-ga-value="5">-->
<!--										<span>Recipes</span>-->
<!--									</a>-->
<!--								</li>-->
<!--							</ul>-->
<!--						</div>-->
<!--					</div>-->
<!--				</li>-->
<!---->
<!--				<li class="nav__item--cities has-dropdown ">-->
<!--					<span>Cities</span>-->
<!--					<div class="dropdown">-->
<!--						<div class="dropdown-inner">-->
<!---->
<!--							<div class="nav__spotlight">-->
<!--								<h4>Most Popular</h4>-->
<!--								<ul>-->
<!--									<li class="nav__spotlight--new-york ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="spotlight_new-york_pos1" data-ga-value="6" href="/new-york" title="New York Edition of Thrillist">-->
<!--											<span>New York</span>-->
<!--										</a>-->
<!--									</li>-->
<!--									<li class="nav__spotlight--chicago ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="spotlight_chicago_pos2" data-ga-value="6" href="/chicago" title="Chicago Edition of Thrillist">-->
<!--											<span>Chicago</span>-->
<!--										</a>-->
<!--									</li>-->
<!--									<li class="nav__spotlight--los-angeles ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="spotlight_los-angeles_pos3" data-ga-value="6" href="/los-angeles" title="Los Angeles Edition of Thrillist">-->
<!--											<span>Los Angeles</span>-->
<!--										</a>-->
<!--									</li>-->
<!--									<li class="nav__spotlight--san-francisco ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="spotlight_san-francisco_pos4" data-ga-value="6" href="/san-francisco" title="San Francisco Edition of Thrillist">-->
<!--											<span>San Francisco</span>-->
<!--										</a>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</div>-->
<!---->
<!--							<div class="nav__full-list">-->
<!--								<h4>All Cities</h4>-->
<!--								<ul>-->
<!--									<li class="nav__full-list--atlanta  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_atlanta_pos1" data-ga-value="6" href="/atlanta" title="Atlanta Edition of Thrillist">Atlanta</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--atlantic-city  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_atlantic-city_pos2" data-ga-value="6" href="/atlantic-city" title="Atlantic City Edition of Thrillist">Atlantic City</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--austin  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_austin_pos3" data-ga-value="6" href="/austin" title="Austin Edition of Thrillist">Austin</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--boston  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_boston_pos4" data-ga-value="6" href="/boston" title="Boston Edition of Thrillist">Boston</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--charleston  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_charleston_pos5" data-ga-value="6" href="/charleston" title="Charleston Edition of Thrillist">Charleston</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--charlotte  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_charlotte_pos6" data-ga-value="6" href="/charlotte" title="Charlotte Edition of Thrillist">Charlotte</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--chicago  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_chicago_pos7" data-ga-value="6" href="/chicago" title="Chicago Edition of Thrillist">Chicago</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--cleveland  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_cleveland_pos8" data-ga-value="6" href="/cleveland" title="Cleveland Edition of Thrillist">Cleveland</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--dallas  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_dallas_pos9" data-ga-value="6" href="/dallas" title="Dallas Edition of Thrillist">Dallas</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--denver  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_denver_pos10" data-ga-value="6" href="/denver" title="Denver Edition of Thrillist">Denver</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--detroit  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_detroit_pos11" data-ga-value="6" href="/detroit" title="Detroit Edition of Thrillist">Detroit</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--hamptons  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_hamptons_pos12" data-ga-value="6" href="/hamptons" title="Hamptons Edition of Thrillist">Hamptons</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--honolulu  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_honolulu_pos13" data-ga-value="6" href="/honolulu" title="Honolulu Edition of Thrillist">Honolulu</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--houston  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_houston_pos14" data-ga-value="6" href="/houston" title="Houston Edition of Thrillist">Houston</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--indianapolis  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_indianapolis_pos15" data-ga-value="6" href="/indianapolis" title="Indianapolis Edition of Thrillist">Indianapolis</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--las-vegas  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_las-vegas_pos16" data-ga-value="6" href="/las-vegas" title="Las Vegas Edition of Thrillist">Las Vegas</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--los-angeles  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_los-angeles_pos17" data-ga-value="6" href="/los-angeles" title="Los Angeles Edition of Thrillist">Los Angeles</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--louisville  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_louisville_pos18" data-ga-value="6" href="/louisville" title="Louisville Edition of Thrillist">Louisville</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--memphis  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_memphis_pos19" data-ga-value="6" href="/memphis" title="Memphis Edition of Thrillist">Memphis</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--miami  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_miami_pos20" data-ga-value="6" href="/miami" title="Miami Edition of Thrillist">Miami</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--milwaukee  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_milwaukee_pos21" data-ga-value="6" href="/milwaukee" title="Milwaukee Edition of Thrillist">Milwaukee</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--minneapolis  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_minneapolis_pos22" data-ga-value="6" href="/minneapolis" title="Minneapolis Edition of Thrillist">Minneapolis</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--nashville  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_nashville_pos23" data-ga-value="6" href="/nashville" title="Nashville Edition of Thrillist">Nashville</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--new-orleans  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_new-orleans_pos24" data-ga-value="6" href="/new-orleans" title="New Orleans Edition of Thrillist">New Orleans</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--new-york  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_new-york_pos25" data-ga-value="6" href="/new-york" title="New York Edition of Thrillist">New York</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--philadelphia  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_philadelphia_pos26" data-ga-value="6" href="/philadelphia" title="Philadelphia Edition of Thrillist">Philadelphia</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--phoenix  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_phoenix_pos27" data-ga-value="6" href="/phoenix" title="Phoenix Edition of Thrillist">Phoenix</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--pittsburgh  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_pittsburgh_pos28" data-ga-value="6" href="/pittsburgh" title="Pittsburgh Edition of Thrillist">Pittsburgh</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--portland  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_portland_pos29" data-ga-value="6" href="/portland" title="Portland Edition of Thrillist">Portland</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--san-antonio  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_san-antonio_pos30" data-ga-value="6" href="/san-antonio" title="San Antonio Edition of Thrillist">San Antonio</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--san-diego  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_san-diego_pos31" data-ga-value="6" href="/san-diego" title="San Diego Edition of Thrillist">San Diego</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--san-francisco  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_san-francisco_pos32" data-ga-value="6" href="/san-francisco" title="San Francisco Edition of Thrillist">San Francisco</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--seattle  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_seattle_pos33" data-ga-value="6" href="/seattle" title="Seattle Edition of Thrillist">Seattle</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--washington-dc  column-break">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_washington-dc_pos34" data-ga-value="6" href="/washington-dc" title="Washington DC Edition of Thrillist">Washington DC</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--amsterdam  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_amsterdam_pos35" data-ga-value="6" href="/amsterdam" title="Amsterdam Edition of Thrillist">Amsterdam</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--berlin  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_berlin_pos36" data-ga-value="6" href="/berlin" title="Berlin Edition of Thrillist">Berlin</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--london  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_london_pos37" data-ga-value="6" href="/london" title="London Edition of Thrillist">London</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--montreal  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_montreal_pos38" data-ga-value="6" href="/montreal" title="Montreal Edition of Thrillist">Montreal</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--paris  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_paris_pos39" data-ga-value="6" href="/paris" title="Paris Edition of Thrillist">Paris</a>-->
<!--									</li>-->
<!--									<li class="nav__full-list--toronto  ">-->
<!--										<a class="ga-trigger" data-ga-category="Nav" data-ga-action="cities" data-ga-label="all_toronto_pos40" data-ga-value="6" href="/toronto" title="Toronto Edition of Thrillist">Toronto</a>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</div>                    </div>-->
<!--					</div>-->
<!--				</li>-->
<!---->
<!--				<li class="nav__item--video has-dropdown">-->
<!--					<a href="/videos" class="nav__dropdown-link ga-trigger" data-ga-category="Nav" data-ga-action="video" data-ga-label="video_7" data-ga-value="7">-->
<!--						<span>Video</span>-->
<!--					</a>-->
<!---->
<!--					<div class="dropdown">-->
<!--						<div class="dropdown-inner">-->
<!--							<div class="nav__video-dropdown clearfix">-->
<!---->
<!--								<section class="nav__series">-->
<!--									<a class="nav__series-header-link" href="/videos">-->
<!--										<h4 class="nav__series-header">-->
<!--											Top Series-->
<!--										</h4>-->
<!--									</a>-->
<!---->
<!--									<ul class="nav__series-list">-->
<!--										<li class="nav__series-item">-->
<!--											<a href="/grilld" class="nav__series-link">-->
<!--												<div class="nav__series-text">-->
<!--													Grilld                        </div>-->
<!--											</a>-->
<!--										</li>-->
<!--										<li class="nav__series-item">-->
<!--											<a href="/eat-this" class="nav__series-link">-->
<!--												<div class="nav__series-text">-->
<!--													Eat This                        </div>-->
<!--											</a>-->
<!--										</li>-->
<!--										<li class="nav__series-item">-->
<!--											<a href="/the-explorers" class="nav__series-link">-->
<!--												<div class="nav__series-text">-->
<!--													The Explorers                        </div>-->
<!--											</a>-->
<!--										</li>-->
<!--										<li class="nav__series-item">-->
<!--											<a href="/fork-yeah" class="nav__series-link">-->
<!--												<div class="nav__series-text">-->
<!--													Fork Yeah                        </div>-->
<!--											</a>-->
<!--										</li>-->
<!--										<li class="nav__series-item">-->
<!--											<a href="/bottoms-up" class="nav__series-link">-->
<!--												<div class="nav__series-text">-->
<!--													Bottoms Up                        </div>-->
<!--											</a>-->
<!--										</li>-->
<!---->
<!--										<li class="nav__series-item nav__series-item--all-series">-->
<!--											<a href="/videos" class="nav__series-link">-->
<!--												See All-->
<!--											</a>-->
<!--										</li>-->
<!--									</ul>-->
<!--								</section>-->
<!---->
<!--								<section class="nav__thumbnails">-->
<!--									<h4 class="nav__thumbnails-header">Most Popular</h4>-->
<!--									<ul class="nav__thumbnail-list clearfix">-->
<!---->
<!--										<li class="nav__thumbnail">-->
<!--											<a href="/node/4324854" class="nav__thumbnail-link">-->
<!---->
<!--												<section class="video-player video-player--nav video-player--16-9 js-video-player is-not-playing " data-video-id="OiDwoZxK" data-wrapper-id-prefix="navVideo" data-aspect-ratio="16:9" data-suppress-video="suppressed" data-context="nav" data-position="0" style="">-->
<!--													<figure class="video-player__still js-video-player__still">-->
<!---->
<!--                    <span class="video-player__preview-wrapper js-video-player__preview-wrapper">-->
<!--                <video class="video-player__preview js-video-player__preview" preload="auto" muted="">-->
<!--					<source src="https://content.jwplatform.com/videos/q9a8lugz-320.mp4" type="video/mp4">-->
<!--				</video>-->
<!--            </span>-->
<!---->
<!--        <span class="video-player__still-image-wrapper video-player__still-image-wrapper--mobile">-->
<!--            <span class="video-player__still-image is-background-image" style="background-image: url(https://content.jwplatform.com/thumbs/OiDwoZxK-720.jpg);"></span>-->
<!--        </span>-->
<!---->
<!--        <span class="video-player__still-image-wrapper video-player__still-image-wrapper--desktop">-->
<!--            <span class="video-player__still-image is-background-image" style="background-image: url(https://content.jwplatform.com/thumbs/OiDwoZxK-320.jpg);"></span>-->
<!--        </span>-->
<!---->
<!--														<div class="video-player__still-overlay js-video-player__still-overlay">-->
<!--															<i class="video-player__icon">-->
<!--																<div class="video-play-icon">-->
<!--    <span class="video-play-icon__circle">-->
<!--        <span class="video-play-icon__triangle"></span>-->
<!--    </span>-->
<!--																</div>-->
<!--															</i>-->
<!---->
<!---->
<!--														</div>-->
<!---->
<!--													</figure>-->
<!---->
<!---->
<!--												</section>-->
<!---->
<!--												<div class="nav__thumbnail-title">-->
<!--													Savor What's Left of Summer With This Caprese Cocktail                        </div>-->
<!--											</a>-->
<!--										</li>-->
<!--										<li class="nav__thumbnail">-->
<!--											<a href="/node/4317386" class="nav__thumbnail-link">-->
<!---->
<!--												<section class="video-player video-player--nav video-player--16-9 js-video-player is-not-playing " data-video-id="qCuQdu3D" data-wrapper-id-prefix="navVideo" data-aspect-ratio="16:9" data-suppress-video="suppressed" data-context="nav" data-position="0" style="">-->
<!--													<figure class="video-player__still js-video-player__still">-->
<!---->
<!--                    <span class="video-player__preview-wrapper js-video-player__preview-wrapper">-->
<!--                <video class="video-player__preview js-video-player__preview" preload="auto" muted="">-->
<!--					<source src="https://content.jwplatform.com/videos/gzpGnWPB-320.mp4" type="video/mp4">-->
<!--				</video>-->
<!--            </span>-->
<!---->
<!--        <span class="video-player__still-image-wrapper video-player__still-image-wrapper--mobile">-->
<!--            <span class="video-player__still-image is-background-image" style="background-image: url(https://content.jwplatform.com/thumbs/qCuQdu3D-720.jpg);"></span>-->
<!--        </span>-->
<!---->
<!--        <span class="video-player__still-image-wrapper video-player__still-image-wrapper--desktop">-->
<!--            <span class="video-player__still-image is-background-image" style="background-image: url(https://content.jwplatform.com/thumbs/qCuQdu3D-320.jpg);"></span>-->
<!--        </span>-->
<!---->
<!--														<div class="video-player__still-overlay js-video-player__still-overlay">-->
<!--															<i class="video-player__icon">-->
<!--																<div class="video-play-icon">-->
<!--    <span class="video-play-icon__circle">-->
<!--        <span class="video-play-icon__triangle"></span>-->
<!--    </span>-->
<!--																</div>-->
<!--															</i>-->
<!---->
<!---->
<!--														</div>-->
<!---->
<!--													</figure>-->
<!---->
<!---->
<!--												</section>-->
<!---->
<!--												<div class="nav__thumbnail-title">-->
<!--													Singapore's Spicy Frog Is Worth Making a Big Trip                        </div>-->
<!--											</a>-->
<!--										</li>-->
<!--										<li class="nav__thumbnail">-->
<!--											<a href="/node/4315113" class="nav__thumbnail-link">-->
<!---->
<!--												<section class="video-player video-player--nav video-player--16-9 js-video-player is-not-playing " data-video-id="5xkuT0vm" data-wrapper-id-prefix="navVideo" data-aspect-ratio="16:9" data-suppress-video="suppressed" data-context="nav" data-position="0" style="">-->
<!--													<figure class="video-player__still js-video-player__still">-->
<!---->
<!--                    <span class="video-player__preview-wrapper js-video-player__preview-wrapper">-->
<!--                <video class="video-player__preview js-video-player__preview" preload="auto" muted="">-->
<!--					<source src="https://content.jwplatform.com/videos/i7i6ZHOk-320.mp4" type="video/mp4">-->
<!--				</video>-->
<!--            </span>-->
<!---->
<!--        <span class="video-player__still-image-wrapper video-player__still-image-wrapper--mobile">-->
<!--            <span class="video-player__still-image is-background-image" style="background-image: url(https://content.jwplatform.com/thumbs/5xkuT0vm-720.jpg);"></span>-->
<!--        </span>-->
<!---->
<!--        <span class="video-player__still-image-wrapper video-player__still-image-wrapper--desktop">-->
<!--            <span class="video-player__still-image is-background-image" style="background-image: url(https://content.jwplatform.com/thumbs/5xkuT0vm-320.jpg);"></span>-->
<!--        </span>-->
<!---->
<!--														<div class="video-player__still-overlay js-video-player__still-overlay">-->
<!--															<i class="video-player__icon">-->
<!--																<div class="video-play-icon">-->
<!--    <span class="video-play-icon__circle">-->
<!--        <span class="video-play-icon__triangle"></span>-->
<!--    </span>-->
<!--																</div>-->
<!--															</i>-->
<!---->
<!---->
<!--														</div>-->
<!---->
<!--													</figure>-->
<!---->
<!---->
<!--												</section>-->
<!---->
<!--												<div class="nav__thumbnail-title">-->
<!--													Make This Hydrating Watermelon Gin Fizz Cocktail                        </div>-->
<!--											</a>-->
<!--										</li>-->
<!---->
<!--									</ul>-->
<!--								</section>-->
<!---->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</li>-->
<!---->
<!--			</ul>-->
		</nav>

		<div class="utility-nav-wrap">


			<section class="header-nav-ad-container ad-rendered">
				<div class="header-nav-ad" data-ad-id="thrillist-ad-135x40">
					<div id="thrillist-ad-135x40" style="height: 40px; min-height: auto;" class="thrillist-ad thrillist-ad-135x40 ga-trigger" data-ga-category="Stack" data-ga-action="Click" data-ga-label="thrillist-ad" data-google-query-id="CP-opMiw3s8CFZOWvAodt00Lww">

						<div id="google_ads_iframe_/1006809/tmg/thrillist/homepage_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/1006809/tmg/thrillist/homepage_0" title="3rd party ad content" name="google_ads_iframe_/1006809/tmg/thrillist/homepage_0" width="0 px" height="0 px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" src="javascript:&quot;<html><body style='background:transparent'></body></html>&quot;" style="border: 0px; vertical-align: bottom; display: none;" data-ad-collapse="1"></iframe></div><iframe id="google_ads_iframe_/1006809/tmg/thrillist/homepage_0__hidden__" title="" name="google_ads_iframe_/1006809/tmg/thrillist/homepage_0__hidden__" width="0" height="0" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" src="javascript:&quot;<html><body style='background:transparent'></body></html>&quot;" style="border: 0px; vertical-align: bottom; visibility: hidden; display: none;"></iframe></div>
				</div>
			</section>

			<ul class="utility-nav clearfix">

				<li class="utility-nav__search has-form">
					<form id="nav-search-form" action="/search/submit" accept-charset="UTF-8" method="post" role="search" data-position="1">
						<div class="form-item nav-search-form-field" id="nav-search-form-field">
							<label for="search" class="visually-hidden">search</label>
							<input type="search" maxlength="128" name="query" id="nav-search-form-input" value="" class="form-text header-search-field" autocomplete="off" data-default="90" placeholder="Search...">
							<input type="submit" class="header-search-submit" value="🔍">
						</div>

					</form>

					<div class="search-dropdown">
						<div class="search-dropdown-wrapper">
							<div class="search-section-wrapper">
								<div class="dropdown-popular-searches">
									<h3 class="search-section">Popular Searches</h3>
									<ul class="search-dropdown-results">
										<li>
											<a class="ga-trigger" data-ga-category="search_nav" data-ga-action="popular_searches" data-ga-label="Brunch" data-ga-value="1" data-ref-id=" " data-headline="Brunch" data-link-url="search?q=Brunch&amp;section=" data-edition="no_edition" data-vertical="" data-list-type="nav_popular_searches" data-position="1" href="/search?q=Brunch&amp;section=">
												Brunch                            </a>
										</li>
										<li>
											<a class="ga-trigger" data-ga-category="search_nav" data-ga-action="popular_searches" data-ga-label="Coffee" data-ga-value="2" data-ref-id=" " data-headline="Coffee" data-link-url="search?q=Coffee&amp;section=" data-edition="no_edition" data-vertical="" data-list-type="nav_popular_searches" data-position="2" href="/search?q=Coffee&amp;section=">
												Coffee                            </a>
										</li>
										<li>
											<a class="ga-trigger" data-ga-category="search_nav" data-ga-action="popular_searches" data-ga-label="Pizza" data-ga-value="3" data-ref-id=" " data-headline="Pizza" data-link-url="search?q=Pizza&amp;section=" data-edition="no_edition" data-vertical="" data-list-type="nav_popular_searches" data-position="3" href="/search?q=Pizza&amp;section=">
												Pizza                            </a>
										</li>
										<li>
											<a class="ga-trigger" data-ga-category="search_nav" data-ga-action="popular_searches" data-ga-label="Beer" data-ga-value="4" data-ref-id=" " data-headline="Beer" data-link-url="search?q=Beer&amp;section=" data-edition="no_edition" data-vertical="" data-list-type="nav_popular_searches" data-position="4" href="/search?q=Beer&amp;section=">
												Beer                            </a>
										</li>
									</ul>
								</div>
								<div class="dropdown-top-results">
									<h3 class="search-section">Top Results</h3>
									<ul class="search-dropdown-results">
									</ul>
								</div>
							</div>
						</div>
					</div>    </li>

				<li class="utility-nav__maps">
					<a class="utility-nav__dropdown-title icon-compass ga-trigger" data-ga-category="Nav" data-ga-action="nearby_map_nav_icon" data-ga-label="map_nav_icon_click" href="/map">
						<span class="utility-nav__item-title">Near Me</span>
					</a>
					<a class="ga-trigger" href="/map" title="description" data-ga-category="Nav" data-ga-action="nearby_map_nav_dropdown" data-ga-label="map_nav_dropdown_click">
						<div class="utility-nav__dropdown">
							Discover Bars &amp; Restaurants
						</div>
					</a>

				</li>

				<li class="utility-nav__saved-items has-dropdown">
        <span href="#" class="utility-nav__dropdown-title icon-bookmark-1">
            <span class="utility-nav__item-title">Saved</span>
        </span>
					<div class="utility-nav__dropdown">
						<div class="for-guests">
							<a href="/login?destination=/saved" class="ga-trigger" data-ga-category="Nav" data-ga-action="saved_items" data-ga-label="login" data-ga-value="2">Log in</a>
							or
							<a class="nav-vortex-signup-dropdown ga-trigger" href="https://signup.thrillist.com/" data-ga-category="Nav" data-ga-action="saved_items" data-ga-label="sign up" data-ga-value="2">Sign Up</a> to start saving places
						</div>
						<div class="for-members">
							View your<br><a href="/saved" class="ga-trigger" data-ga-category="Nav" data-ga-action="saved_items" data-ga-label="view saved" data-ga-value="2">Saved places</a>
						</div>
					</div>
				</li>

				<li class="utility-nav__user-options js-utility-nav__user-options has-dropdown">
        <span href="#" class="utility-nav__dropdown-title js-utility-nav__dropdown-title icon-user" id="header-user-avatar">
            <span class="utility-nav__item-title for-guests">Login</span>
            <span class="utility-nav__item-title for-members">Account</span>
            <img class="utility-nav__facebook-image js-utility-nav__facebook-image">
        </span>
					<div class="utility-nav__dropdown">
						<ul>
							<li class="for-guests user-options-login">
								<a href="/login" class="ga-trigger" data-ga-category="Nav" data-ga-action="user_options" data-ga-label="login" data-ga-value="3">Log In</a>
							</li>
							<li class="for-guests user-options-signup dropdown-nav-signup">
								<a class="nav-vortex-signup-dropdown ga-trigger" href="https://signup.thrillist.com/" data-ga-category="Nav" data-ga-action="user_options" data-ga-label="signup" data-ga-value="3">Sign Up</a>
							</li>

							<li>
								<a class="for-members ga-trigger" href="/account" alt="My Settings" data-ga-category="Nav" data-ga-action="user_options" data-ga-label="account_settings" data-ga-value="3">Settings</a>
							</li>
							<li>
								<a class="for-members user-details-logout ga-trigger js-logout-btn" href="#" data-ga-category="Nav" data-ga-action="user_options" data-ga-label="logout" data-ga-value="3">Log Out</a>
							</li>
						</ul>
					</div>
				</li>

			</ul>

		</div>
	</div>
</div><!--header-inner-->
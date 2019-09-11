import utils from './scripts/utils'

const app = {

	init: function() {
		this.cacheDOM();
		this.info();
		this.listeners();
		if ( this.nav ) {
			this.checkSticky();
		}
		this.updateFooter();
		this.checkScroll();

	},

	info: function() {

		// General
		this.dribbleToken = 'b4a94f6f18f9c2324e64c82d88e0d7e4820d559960175d30105edc007e3866d9';
		this.width = window.innerWidth;
		this.height = window.innerHeight;
		this.isMobile = window.innerWidth <= 960;

		if ( this.nav ) {
			this.is_sticky = null;
			this.sticky_width = this.nav.getBoundingClientRect().width;
			this.sticky_height = this.nav.getBoundingClientRect().height;
		}

		// Find border size on hero
		this.hero = document.querySelector('.section__hero') || false;

		if ( this.hero ) {
			this.hero_style = this.hero.currentStyle || window.getComputedStyle(this.hero);
			this.hero_size = parseInt(this.hero_style.paddingTop.slice(0, this.hero_style.marginTop.length - 2));	
		}
	},

	cacheDOM: function() {

		// Creative
		document.body = document.body;
		this.html = document.documentElement;
		this.docHeight = Math.max( document.body.scrollHeight, document.body.offsetHeight, this.html.clientHeight, this.html.scrollHeight, this.html.offsetHeight );

		// Fun
		this.logo = document.querySelector('.logo');
		this.nav = document.querySelector('.navigation--sticky');
		this.eye_left = document.querySelector('.eyes__eye--left');
		this.eye_right = document.querySelector('.eyes__eye--right');
		this.mouse = document.querySelector('.mouse');
		this.eye_walk = 2; 

		// Works
		this.works = [].slice.call(document.querySelectorAll('.section__works .col')) || false;
		this.works_section = document.querySelector('.section__works');

		// Footer 
		this.footer = document.querySelector('footer');
		this.footerHeight = 0;
		this.footerItems = document.querySelectorAll('footer *');
		this.footerItems_container = this.footer.querySelector('.container');
		this.aboveFooter = utils.node_before(this.footer);

		// Post Navigation
		this.post_nav = document.querySelector('.navigation--post');
		
	},

	onResize: function()  {
		this.docHeight = Math.max( document.body.scrollHeight, document.body.offsetHeight, this.html.clientHeight, this.html.scrollHeight, this.html.offsetHeight );
	}
};

app.checkSticky = function(e) {
	this.is_sticky = window.scrollY >= ( this.height - this.sticky_height ) ? true : false;

	if ( this.is_sticky ) { 
		document.querySelector('.navigation + *').style.marginTop = this.sticky_height + 'px';
		document.body.classList.add('fixed'); 
	} else {
		document.body.classList.remove('fixed');
		document.querySelector('.navigation + *').style.marginTop = 0;
	};
};

app.workHoverOn = function(e) {
	this.classList.add('active');

}

app.workHoverOff = function(e) {
	this.classList.remove('active');

}

app.updateFooter = function() {
	this.footerHeight = this.footer.offsetHeight;
	this.aboveFooter.style.marginBottom = this.footerHeight + 'px';
}

app.trackMouse = function(e) {
	this.mouse.style.left = e.pageX + 'px';
	this.mouse.style.top = e.pageY + 'px';
}

app.animateFooter = function(e) {
	let dist = ( window.scrollY + window.innerHeight) - ( this.aboveFooter.offsetTop + this.aboveFooter.offsetHeight)
	let inView =  dist > 0;
	let percent = Math.round(dist / this.footerHeight * 100) / 100;

	if ( inView ) {
		this.footerItems_container.style.transform = `translateY(${ -percent * 50 }px)`;
	};
};

app.workOnClick = function(e) {
	const target = this.querySelector('.col--expandable')
	const coords = utils.findFixedPos(target);

	TweenMax.set( target, { x: coords.x, y: coords.y, width: coords.w, height: coords.h, position: 'fixed', zIndex: 9999 });

	let tl = new TimelineMax() 
		.to( target, .25, { x: 0, ease: Sine.easeInOut})
		.to( target, .25, { y: 0, ease: Sine.easeInOut}, '-=.25')
		.to( target, .25, { minWidth: '100%', ease: Sine.easeInOut}, '-=.5')
		.to( target, .25, { minHeight: '100%', ease: Sine.easeInOut}, '-=.75')
};

app.listeners = function() {
	window.addEventListener('scroll', this.animateFooter.bind(app));
	window.addEventListener('resize', this.updateFooter.bind(app));
	window.addEventListener('resize', this.onResize.bind(app));
	window.addEventListener('scroll', this.checkScroll, 10);

	if ( this.nav ) {
		window.addEventListener('scroll', this.checkSticky.bind(app));
	}

	this.works.map( work => {
		work.addEventListener('mouseover', this.workHoverOn);
		work.addEventListener('mouseout', this.workHoverOff);
	})
	
}

const sliderImages = [].slice.call(document.querySelectorAll('.slide-in'));

app.checkScroll = function(e) {
	const offset = 200;

  sliderImages.map( image => {
    const slideInAt = ( window.scrollY + window.innerHeight) - offset;
    const imageBottom = image.offsetTop + image.height;
    
    const isHalfShown = slideInAt > image.offsetTop;
    const isNotScrolledPassed = window.scrollY < imageBottom;

    if (isHalfShown && isNotScrolledPassed) {
      image.classList.add('active');
    } 
  });
};

window.addEventListener('load', function() {
	app.init();
})

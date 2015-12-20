//JS

jQuery(document).ready(function() {

var titleLogo = $(".multitoad-logo");
var blueToad = $(".blue-toad");
var greenToad = $(".green-toad");
var visitForums = $(".visit-forums");
var checkTwitch = $(".check-twitch");
var twitchContain = $(".twitch-container");
var twitchStream = $(".twitch-stream");
var orText = $(".or");
var slogan = $(".slogan");

function initAnimation() {

	TweenMax.to(titleLogo, 1, { top: "150px", opacity: 1, delay: 2, ease: Quad.easeOut });
	TweenMax.to(blueToad, 2, { opacity: 1, delay: 0, ease: Quad.easeOut });
	TweenMax.to(greenToad, 2, { opacity: 1, delay: 0, ease: Quad.easeOut });
	TweenMax.to(blueToad, 1, { left: "233px", opacity: 1, delay: 2, ease: Quad.easeInOut });
	TweenMax.to(greenToad, 1, { left: "410px", opacity: 1, delay: 2, ease: Quad.easeInOut,  onComplete:secondAnimation });

}

function secondAnimation() {
	TweenMax.set(twitchStream, { display: "block", delay: 1.5 });
	TweenMax.to(slogan, 1, { opacity: 1, delay: 0, ease: Quad.easeOut });
	TweenMax.to(visitForums, 1, { top: "310px", opacity: .7, delay: .1, ease: Quad.easeOut });
	TweenMax.to(orText, 1, { opacity: 1, delay: .3, ease: Quad.easeOut });
	TweenMax.to(checkTwitch, 1, { top: "311px", opacity: .7, delay: .4, ease: Quad.easeOut });
	TweenMax.to(twitchContain, 1, { opacity: 1, delay: .7, ease: Quad.easeOut });
}

initAnimation();

visitForums.hover(
	function() {
		TweenMax.to(visitForums, .4, { top: "314px", opacity: 1, delay: 0, ease: Quad.easeOut });
	}, 
	function() {
		TweenMax.to(visitForums, .4, { top: "310px", opacity: .7, delay: 0, ease: Quad.easeOut });
	}
);

checkTwitch.hover(
	function() {
		TweenMax.to(checkTwitch, .4, { top: "315px", opacity: 1, delay: 0, ease: Quad.easeOut });
	}, 
	function() {
		TweenMax.to(checkTwitch, .4, { top: "311px", opacity: .7, delay: 0, ease: Quad.easeOut });
	}
);


});
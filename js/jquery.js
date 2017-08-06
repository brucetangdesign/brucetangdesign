$(document).ready(init);

var mobileNavOpen = false;

//MAIN INITIALIZE FUNCTION CALLED WHEN THE PAGE IS LOADED
function init(){
    //reset the contact form values (utilized if user reloads the page)
    //document.forms['contact-form'].reset();
    
    //initialize the small screen nav (hamburger menu)
    initResponsiveNav();
    
    //check the window size
    $(window).resize(checkSize);
    
    //initialize the desktop nav
    initNav($( ".nav" ));
}

//SET UP THE RESPONSIVE SMALL SCREEN NAV
function initResponsiveNav(){
    //click function for the hamburger menu
    $("#mobile-nav-icon").click(function() {
        mobileNavToggle($(this));
        var navStartPos;
        
        //Determine if the mobile nav is open or not
        if(mobileNavOpen==true){
            //The mobile nav is already open. "X" is being clicked. Cose the overlay and hide the nav links.
            $(".overlay").remove();
            mobileNavOpen = false;
            $(".nav-mobile").toggle();
        }
        
        else{
            //Mobile nav is not open yet. Create the overlay and show the links.
            $("body").prepend("<div class='overlay'></div>");
            mobileNavOpen = true;
            
            //Create a fade/slide in effect for the links
            $(".nav-mobile").toggle();
            $(".nav-mobile").fadeTo( 0, 0 );
            navStartPos = $(".nav-mobile").offset().top + 20;
            $(".nav-mobile").offset({ top: navStartPos});
            $(".nav-mobile").animate({opacity:1,top: "50%"},300,'easeOutQuad');
            
            //Hide the nav if the user scrolls
            $(window).scroll(function(event){
                if(mobileNavOpen==true){
                    $(".overlay").remove();
                    mobileNavOpen = false;
                    $(".nav-mobile").toggle();
                    mobileNavToggle();
                }
                $(window).unbind("scroll");
            });
        }
    });
}
  
function mobileNavToggle(){
	$("#hamburger-icon").toggle();
	$("#close-icon").toggle();
	
	//animate "X" icon
	if ($("#close-icon").css("display") != "none" ){
		TweenMax.set("#close-l1", {rotation:-45, transformOrigin:"center center"});
		TweenMax.set("#close-l2", {rotation:45, transformOrigin:"center center"});
		TweenMax.to("#close-l1", .4, {rotation:0, transformOrigin:"center center",ease:Back.easeOut});
		TweenMax.to("#close-l2", .4, {rotation:0, transformOrigin:"center center",ease:Back.easeOut});
	}
	else{
		TweenMax.set("#ham-l1", {y:6});
		TweenMax.set("#ham-l3", {y:-6});
		TweenMax.to("#ham-l1", .3, {y:0, ease:Back.easeOut});
		TweenMax.to("#ham-l3", .3, {y:0, ease:Back.easeOut});
	}
}
  
function resetNav(){
	$(".overlay").remove();
	mobileNavToggle();
}
  
function checkSize(){
    if ($("#mobile-nav-icon").css("display") == "none" ){
        if(mobileNavOpen == true){
			resetNav();
			$(".nav-mobile").toggle();
			mobileNavOpen = false;
			$("#header-bg").css('display','block');
		}
    }
	
	$('.main-section').css('min-height', '100vh');
}
  
function initNav(navElement){
	  var numLinks = navElement.children('ul').find("li").length;
	  var aTag;
      var navClass = navElement.attr('class');
    console.log(navElement);
	  for(var i=0;i<=numLinks;i++){
		aTag = navElement.children('ul').find("li").eq(i);
		aTag.idNum = i;
		
          
		aTag.hover(
			function(){
				if(!$(this).attr('id')){
                    
					hoverOn($(this),navClass);
				}
			},
			
			function(){
				 if(!$(this).attr('id')){
					 hoverOut($(this),navClass);
				 }
			});
	  }
}
  
function hoverOn(navElement,navClass){
	var position = $(navElement).position();
	var w = $(navElement).width();
	var h = $(navElement).height();
	var x = position.left;
	var y = position.top;
    var leftStart;
    var leftEnd;
	var paddingBottom = $(navElement).css( "padding-bottom" );
	var thisClass = $(navElement).attr("class");
	var newColor;
	paddingBottom = parseInt(paddingBottom, 10);

	var underline;
					
	if($(navElement).find('.underline').length == 0){
		$(navElement).append( "<div class='underline'></div>" );
	}
	else{
		
	}
	
    if(navClass == "nav"){
        leftStart = x + w/2;
        leftEnd = x;
    }
    else if(navClass == "nav-mobile"){
        leftStart = w/2;
        leftEnd = 0;
    }
    
	underline = $( navElement ).children('.underline');
	underline.css({left: leftStart, top:h + paddingBottom, position:'absolute'});
	underline.stop();
	underline.animate({left: leftEnd, width:w},300,'easeOutQuad');
					
	$("html").stop();
}
  
function hoverOut(navElement,navClass){
	var position = $(navElement).position();
	var x = position.left;
	var w = $(navElement).width();
    var leftEnd;
	var underline = $( navElement ).children('.underline');
    
    if(navClass == "nav"){
        leftEnd = x + w/2;
    }
    else if(navClass == "nav-mobile"){
        leftEnd = w/2;
    }
    
	underline.stop();
	underline.animate({left: leftEnd, width:0},300,'easeOutQuad',function(){underline.remove();});
	$("html").stop();
}
  
  
$(document).on("click", "a[href^='#']", function (e) {
  var id = $(this).attr("href");
  if ($(id).length > 0) {
    e.preventDefault();

    // trigger scroll
    controller.scrollTo(id);

    // if supported by the browser we can even update the URL.
    if (window.history && window.history.pushState) {
     history.pushState("", document.title, id);
    }
  }
		
		
  if(mobileNavOpen==true){
    $(".overlay").remove();
    mobileNavOpen = false;
    $(".nav-mobile").toggle();
    mobileNavToggle();
  }
});

//SCROLLMAGIC -------------------------------------------------
var controller = new ScrollMagic.Controller();
var colorChangeOffset = 220;
// build scenes
new ScrollMagic.Scene({})
  .setTween("#intro > .container", {y: "0px", ease: Linear.easeNone})
  .addTo(controller);
 
new ScrollMagic.Scene({})
  .setTween("#work > .container", {y: "0px", ease: Linear.easeNone})
  .addTo(controller);
  
new ScrollMagic.Scene({})
 .setTween("#about > .container", {y: "0px", ease: Linear.easeNone})
 .addTo(controller);

new ScrollMagic.Scene({})
 .setTween("#contact > .container", {y: "0px", ease: Linear.easeNone})
 .addTo(controller);

//INTRO SCENE
new ScrollMagic.Scene({triggerElement: "#intro"})
    .on('start', function () {
        moveBg("#intro");
    })
    .addTo(controller);

new ScrollMagic.Scene({triggerElement: "#work"})
    .on("progress", function (event) {
        if(event.state == "DURING"){
            //clearInterval(moveBgInt);
            cancelAnimationFrame(moveBgID);
        }
        else if(event.state == "BEFORE"){
            moveBg("#intro");
        }
    })
    .addTo(controller);

	
//WORK SCENE
var confettiDuration = 1;
var introConfettiTL = new TimelineMax();
  introConfettiTL.to('#confetti-1', confettiDuration, {yPercent: -40}, '0'),
  introConfettiTL.to('#confetti-3', confettiDuration, {yPercent: -30}, '0');

  var confettiOut = new ScrollMagic.Scene({triggerElement: "#work",triggerHook: 'onEnter', duration: '100%'})
  .setTween(introConfettiTL)
  .addTo(controller);


var introConfettiTL2 = new TimelineMax();
  introConfettiTL2.to('#confetti-2', confettiDuration, {yPercent: -20}, '0'),
  introConfettiTL2.to('#confetti-4', confettiDuration, {yPercent: -10}, '0');
var confettiOut2 = new ScrollMagic.Scene({triggerElement: "#work",triggerHook: 'onEnter', duration: '140%'})
  .setTween(introConfettiTL2)
  .addTo(controller);

  TweenMax.set($("#work-tns > div"),{y: 600});

  var workTns = new ScrollMagic.Scene({
 triggerElement: "#work",triggerHook: 'onEnter',offset:colorChangeOffset})
  .setTween("#work-tns > div", .5, {y:0,alpha:1})
  .addTo(controller);
  
  		
	  
//ABOUT & CONTACT CONFETTI SCENE

  var confetti5In = new ScrollMagic.Scene({triggerElement: "#about",triggerHook: 'onEnter', duration: '200%',offset:'0px'})
  .setTween('#confetti-5', 0.5, {yPercent: -210, rotation: 10}, '0')
  .addTo(controller);	


var confetti6In = new ScrollMagic.Scene({triggerElement: "#about",triggerHook: 'onEnter', duration: '200%',offset:'0px'})
  .setTween('#confetti-6', 0.5, {yPercent: -140, rotation: -5}, '0')
  .addTo(controller);
  
var confetti7In = new ScrollMagic.Scene({triggerElement: "#about",triggerHook: 'onEnter', duration: '200%'})
  .setTween('#confetti-7', 0.5, {yPercent: -270}, '1')
  .addTo(controller); 

var confetti8In = new ScrollMagic.Scene({triggerElement: "#about",triggerHook: 'onEnter', duration: '300%',offset:'0px'})
  .setTween('#confetti-8', 0.5, {bottom: '140vh', rotation:3}, '0')
  .addTo(controller); 
  
var confetti9In = new ScrollMagic.Scene({triggerElement: "#contact",triggerHook: 'onEnter', duration: '100%'})
  .setTween('#confetti-9', 0.5, {bottom: '20vh'}, '1')
  .addTo(controller); 

//set up diagonal line bg animations for each section
var sections = ["#intro", "#work", "#about", "#contact"];
for(i=0;i<sections.length;i++){
  new ScrollMagic.Scene({triggerElement: sections[i],triggerHook: 0,duration: "80%"})
  .setTween(sections[i] + "-bg-container1", {y:"95%", ease: Linear.easeNone})
  .addTo(controller);
				
  new ScrollMagic.Scene({triggerElement: sections[i],triggerHook: 0,duration: "100%"})
  .setTween(sections[i] + "-bg-container2", {y:"80%", ease: Linear.easeNone})
  .addTo(controller);
}	

					
controller.scrollTo(function (newpos) {
 TweenMax.to(window, .92, {scrollTo: {y: newpos}, ease:Power1.easeInOut });
});
//-----------------------------------------------------------------

//MOVE THE BACKGROUND PICS ACCORDING TO MOUSE POSITION
var moveBgID;
function moveBg(pic){
    //x axis vars
    var ww =  $(window).width();
    var halfww = ww/2;
    var newX = 0;
    var maxXMovementPerc = 0.05;
    var maxXMovement = ww * maxXMovementPerc;
    var xSpeed = 50;
    
    //y axis vars
    var wh =  $(window).height();
    var halfwh = wh/2;
    var newY = 0;
    var maxYMovementPerc = 0.07;
    var maxYMovement = wh * maxYMovementPerc;
    var ySpeed = 5;
    
    
    
    var currentMousePos = { x: -1, y: -1 };
    $(document).mousemove(function(event) {
        currentMousePos.x = event.pageX;
        currentMousePos.y = event.pageY;
    });
    
    //moveBgInt = setInterval(function(){ movePic();}, 1);
    
    requestAnimationFrame(movePic);
    
    function movePic(){        
        //x axis
        var finalX = (((halfww)-currentMousePos.x));
        newX += ((finalX-newX)/xSpeed);
        var convertedX = newX/halfww;
        var finalXPerc = ((maxXMovement * convertedX)/ww)*100;
        var finalXPos = 50 + finalXPerc;
        
        //y axis
        var finalY = (((halfwh)-currentMousePos.y));
        newY += ((finalY-newY)/ySpeed);
        var convertedY = newY/halfwh;
        var finalYPerc = ((maxYMovement * convertedY)/wh)*100;
        var finalYPos = 105 - finalYPerc;

        $(pic).css("background-position", finalXPos+"% " + finalYPos+"% ");
        
        moveBgID = requestAnimationFrame(movePic)
    }
}

var flagc = false;
var flagl = false;
var flagr = false;
var index=0;
var n = 0;
var k = 1;


function pictzoomc(){
		$('.photocolon').toggleClass("actph")
		$('.phead').toggleClass("actphaed")
		$('.phtxt').toggleClass("actphtxt")
		$('.cardcolon').toggleClass("actcard")
		$('.cameracolon').toggleClass("actcamer")
	 	index =index+1
		if(index % 2==1)
			{
			flagc =true;
			}
		if(index%2 ==0){
			flagc==false;
		}
		//var i =prompt("",pictzoomc())
}
function pictzooml(){
		$('.cardcolon').toggleClass("actcard2")
		$('.chead').toggleClass("actchead")
		$('.ctxt').toggleClass("actctxt")
		$('.photocolon').toggleClass("actph2")
		$('.cameracolon').toggleClass("actcamer")
		flagl = true;
		index =index+1
		if(index%2==1)
			{
			flagl =true;
			}
		if(index%2==0){
			flagl=false;
		}
}
function pictzoomr(){
		$('.cameracolon').toggleClass("actcamer2")
		$('.camhead').toggleClass("actcamhead")
		$('.camtxt').toggleClass("actcamtxt")
		$('.photocolon').toggleClass("actph3")
		$('.cardcolon').toggleClass("actcard")
		index =index+1
		if(index%2==1)
			{
			flagr =true;
			}
		if(index%2==0){
			flagr=false;
		}
}

function proverkac(){
	if(!flagl || !flagr){
		pictzoomc();
	}
	
}
function proverkal(){
	if(!flagr || !flagc){
		pictzooml();
	}
}
function proverkar(){
	if(!flagc || !flagl){
		pictzoomr();
	}
}

function goto(){
		var b = $('#anchor').offset().top
		$('html, body').animate({scrollTop:b},2000)
}
function gotoab(){
		var a = $('#ab').offset().top
		$('html, body').animate({scrollTop:a},100)
}	

/*function l(){
		var k = $("#tex").val()
	console.log(k.length)
	if (k.length>0){
		$("#tex").css("height","220px")	
		return}else{
			if(k.length==0){
				$("#tex").css("height","50px")	
			}
		}
}
	*/
var flag = true;

function fotos(){
	$('.message').css("left","100vw")
	$('.fotos').css("left","0vw")
	$('.he2').css("left","0vw")
	$('.he1').css("left","100vw")
	$('.l').css("color","red")
	$('.r').css("color","#171717")
}
function message(){
	$('.fotos').css("left","-100vw")
	$('.message').css("left","0vw")
	$('.he1').css("left","0vw")
	$('.he2').css("left","100vw")
	$('.l').css("color","#171717")
	$('.r').css("color","red")
	
}

function opensearch(){
	$('.search').toggleClass("actsearch")
	$('.cl').toggleClass("actcl")
	$('.wrap-menu').toggleClass("actmenu")
	
}
function ex(){
	$('.search').toggleClass("actsearch")
	$('.cl').toggleClass("actcl")
	$('.wrap-menu').toggleClass("actmenu")
}
function presentaition(){
	var z = 0
	var urlm = ['../web/img/baba.jpeg','../web/img/bridge.jpg','../web/img/family.jpg'] 
	var timeId = setInterval(function(){
		if(z==urlm.length){
			z=0
		}
		console.log(z,urlm[z])
		$('.pict').css("background","url("+ urlm[z]+")")
		$('.pict').css("background-size",'100% 140%')
		$('.pict').css("transition",'1.5s')
		z++
	},5000)
		
	}

$(window).load(function(){
	presentaition()
	gotoab()
})


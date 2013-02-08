//-----broadcost word------
$(function(){
	var scrtime;
	$("#quotation").hover(function(){
		clearInterval(scrtime);
	
	},function(){
	
	scrtime = setInterval(function(){
		var $ul = $("#quotation ul");
		var liHeight = $ul.find("li:last").height();
		$ul.animate({marginTop : liHeight + 20 + "px"},1000,function(){
		
		$ul.find("li:last").prependTo($ul)
		$ul.find("li:first").hide();
		$ul.css({marginTop:0});
		$ul.find("li:first").fadeIn(1000);
		});
	},6000);
	
	}).trigger("mouseleave");
});

//------menu----------
$(function() {
    $( "#menu" ).menu();
  });

//---carousel----
$('#foo0').carouFredSel({
	   "scroll": {"duration" : 1000 ,"pauseOnHover":true},
	   pagination  : "#foo0_pag"
	});
$('#foo1').carouFredSel({
	   "scroll": {"duration" : 1000 ,"pauseOnHover":true},
	   pagination  : "#foo1_pag"

	});
$('#foo2').carouFredSel({
	   "scroll": {"duration" : 1000 ,"pauseOnHover":true},
	   pagination  : "#foo2_pag"

	});
$('#foo3').carouFredSel({
	   "scroll": {"duration" : 1000 ,"pauseOnHover":true},
	   pagination  : "#foo3_pag"

	});
//------searchhhhhhhhhhhhhhhh---

//------menu--------
$(function() {
    $( "#menu" ).menu();
  });

//-------detailllllllllllllll---
$(function() {
    var spinner = $( "#spinner" ).spinner();
	$( "#spinner" ).css("width","50px");
});
function changeButton(){
	$(".detail-down input").css("background-image","url(./img/buyclick.jpg)");
	}
function upButton(){
	$(".detail-down input").css("background-image","url(./img/buy.jpg)");
	}

//------tradeeeeeeeeeeeeee--------
 $(function() {
    var name = $( "#name" ),
      phone = $( "#phone" ),
      address = $( "#address" ),
      allFields = $( [] ).add( name ).add( phone ).add( address ),
      tips = $( ".validateTips" );
	  al=0;//改为本来个-1
	  bValid = true;
 
    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 	function check(){
		if (name.val().length<=0) {bValid=false; name.addClass("ui-state-highlight");}
		if (phone.val().length!=8 && phone.val().length!=11) {bValid=false; phone.addClass("ui-state-highlight");}
		if (address.val().length<=0) {bValid=false; address.addClass("ui-state-highlight");}
		}
	 
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        "添加": function() {
          bValid = true;
		  check();
          if ( bValid ) {//!!!!!!!!!!!!!!!!!!!!!!!value
		  al=al+1;
            $( ".trade-address-list:last" ).after( "<label  class=\"trade-address-list unselected\"><input type=\"radio\" onclick=\"fill("+al+")\" name=\"trade-address\" value=\""+al+"\" /><ul><li>"+ name.val() + "</li><li>" + phone.val() +"</li><li>"+ address.val() +"</li></ul></label>" );
			
            $( this ).dialog( "close" );
			
          }
        },
        "取消": function() {
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        allFields.val( "" ).removeClass( "ui-state-error" );
      }
    });
 
    $( "#add-address" )
		.button()
      .click(function() {
        $( "#dialog-form" ).dialog( "open" );
      });
  });

$(function(){
	$("#Submit").button();
	})
	
	
//date

$(function () {
            $('#example7').datetimepicker(
			{
            });
			
        });

//address
function fill(i){
		$(".trade-address-list:eq("+i+")").addClass("selected").removeClass("unselected").siblings(".selected").removeClass("selected").addClass("unselected");
		}
//算总价钱
 var sum=0;sumother=0;
$(function(){
	sum=24.42;
	 result=$(".trade-ok").children("h1").children("b");
	 result.html(sum+sumother+" 元");
	//    others=$("#trade-others").val();
	 
	/*
	//传入商品个数信息 设为a 切记到ci里重写	
	for (i=1;i<=a;i++)
	 {
	  	 b=100+i;
		 sum=sum+$("#"+b).html();
		 }	 */
	})	
function changeone(cel){
	var q=0;tr=0;p=0;f=0;
	 result=$(".trade-ok").children("h1").children("b");
	tr=$(cel).parent("td").parent("tr").children("td:last");
	q=parseFloat(tr.html()); 
	p=parseFloat($(cel).parent("td").parent("tr").children("td:eq(1)").html());
	if ($(cel).val()==0) {
		tr.html(p);
		sum=sum-q+p;
		}
	if ($(cel).val()==1){
		f=p/2;
		tr.html(f.toFixed(2)); 
		sum=sum-q+p/2;
		}
		f=sum+sumother
		result.html(f.toFixed(2)+" 元");
	}
function changeother(cel){
		var f=0;
		sumother=0;
		result=$(".trade-ok").children("h1").children("b");
		if ($(cel).val() == '1') sumother=1;/*塑料袋价钱*/
		if ($(cel).val() == '2') sumother=2;/*布袋价钱*/
		f=sum+sumother
		result.html(f.toFixed(2)+" 元");
		}

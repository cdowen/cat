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
 
    $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        "添加": function() {
          var bValid = true;
          allFields.removeClass( "ui-state-error" );
 
          if ( bValid ) {//!!!!!!!!!!!!!!!!!!!!!!!value
            $( ".trade-address-list:last" ).after( "<div class=\"trade-address-list\"><ul><li><input type=\"radio\" name=\"trade-address\" value=\"0\" checked=\"checked\"/></li><li>"+ name.val() + "</li><li>" + phone.val() +"</li><li>"+ address.val() +"</li></ul></div>" );
			
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
$(function(){
    var now = new Date();
    $('#date').mobiscroll().datetime({
        minDate: new Date(now.getFullYear(), now.getMonth(), now.getDate()),
        theme: 'android-ics light',
        display: 'modal',
        mode: 'mixed',
    });    
    $('#show').click(function(){
        $('#date').mobiscroll('show'); 
        return false;
    });
    $('#clear').click(function () {
        $('#date').val('');
        return false;
    });
});
$(function(){
	$("#clear").button();
	})
$(function(){
	$("#show").button();
	})
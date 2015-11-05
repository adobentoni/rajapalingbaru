/*$(document).ready(function() {
  $("#gnavAreaInner ul li ").click(function() {
    $('.menu-submenu').slideToggle(300);
});

//Mouseup textarea false
$(".menu-submenu").mouseup(function() {
  return false
});
  
$("#gnavAreaInner ul li ").mouseup(function() {
  return false
});
//Textarea without editing.
$(document).mouseup(function() {
  $(".menu-submenu").slideUp(300);
});

}); */

$(document).ready(function(e) {


		$('#gnav li').click(function(e) {
		$('#gnav li.active').removeClass('active');
		$(this).addClass('active');
		
	});
	
	$('#buthome').click(function(e) {
		$.ajax ({
			success: function(e) {
      					$('#mainArea').load("php/home.php");			
			}
		});
	});
	$('#butbank').click(function(e) {
		$.ajax ({
			success: function(e) {
      					$('#mainArea').load("php/bank.php");			
			}
		});
	});
	$('#butperaturan').click(function(e) {
		$.ajax ({
			success: function(e) {
      					$('#mainArea').load("php/peraturan.php");			
			}
		});
	});
	$('#butpanduan').click(function(e) {
		$.ajax ({
			success: function(e) {
      					$('#mainArea').load("php/panduan.php");			
			}
		});
	});
	$('#butpromo').click(function(e) {
		$.ajax ({
			success: function(e) {
      					$('#mainArea').load("php/promo.php");			
			}
		});
	});
});




	





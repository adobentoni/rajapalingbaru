          <div id="submenu-wrapper" align="center">
            <div id="submenu">

             <p id="pokertexas" class="panduangroup active" ><a href="#panduan"> Poker Texas</a></p>
             <p id="domino"  class="panduangroup" ><a href="#domino">Domino</a></p>
             </div>
          </div>
		  <div class="referral clearfix">
			<br>
			<br>
			<div id="panduanraja">
			<br>
   
			<br>
            
			<br>
			<p style="text-align: center;"><a style="text-decoration: none; font-size: 13px; font-weight: bold; color:#f00;" href="#top">Back to Top</a></p>
		  </div>
          <body>
          <tr align="center">
							<td width="45%" style="height:80px;"></td>
							<td style="padding-left:15px; padding-right:15px" align="right"><!-- <span><a href="" style="text-decoration:none;"> <img width="50px" src="panduan/images/backbut.png" /> </a></span> --> 
							  
							<ul class="pagination">
								<!--
								--><li id="1"><a href="#"  ><span class="bunder active"></span></li><!--
								--><li id="2"><a href="#"  ><span class="bunder"></span></a></li><!--
								--><li id="3"><a href="#"><span class="bunder"></span></a></li><!--
								--><li id="4"><a href="#"><span class="bunder"></span></a></li>
							</ul></td>
						  </tr>
                          </body>
          </div>
          <script>
		  $(document).ready(function(e) {
		  	$('#submenu > p').click(function(e) {
			$('#submenu > p').siblings().removeClass('active');
			$(this).addClass('active');
		
			});
			$('.pagination li span').click(function(e) {
				$('.pagination li span.active').removeClass('active');
				$(this).addClass('active');
			
			});
			var panduan = location.hash;
			 if( panduan == "#pandudomino"){
				$('#panduanraja').load("php/pandudomino01.php");
				
			}else if( panduan == "#panduan") {
				$('#panduanraja').load("php/pandupoker.php");
			}
			$('#pokertexas').click(function(e){
				$('#panduanraja').load("php/pandupoker.php");
						
			});
			$('#domino').click(function(e){
				$('#panduanraja').load("php/pandudomino01.php");
						
			});
			$('#1').click(function(e){
				$('#panduanraja').load("php/pandudomino01.php");
						
			});
			$('#2').click(function(e){
				$('#panduanraja').load("php/pandudomino02.php");
						
			});
			$('#3').click(function(e){
				$('#panduanraja').load("php/pandudomino03.php");
						
			});
			$('#4').click(function(e){
				$('#panduanraja').load("php/pandudomino04.php");
						
			});
		});
	</script>

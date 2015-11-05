					<div id="banner">
                    <div class="leftAr"><img src="images/sliderArrow.png"></div>
                    <div class="rightAr"><img src="images/sliderArrowRight.png"></div>
                    <div class="pagerSlider"></div>
					<div class="sliderWrap"
                    data-cycle-fx=scrollHorz
                    data-cycle-timeout=4500
                    data-cycle-speed=300
                    data-cycle-pause-on-hover="true"
                    data-cycle-loader=true
                    data-cycle-prev=".leftAr"
                    data-cycle-next=".rightAr"
                    data-cycle-pager=".pagerSlider"
                    data-cycle-slides="> div"
                    >
                    <div class="slide"><img src="images/banner/slide2.jpg" alt="raja domino" title="raja domino"></div>
                    <div class="slide"><img src="images/banner/slide3.jpg" alt="raja domino" title="raja domino"></div>
							
                    <div class="slide"><img src="images/banner/slide2.jpg" alt="raja domino" title="raja domino"></div>
                    </div>
				</div>
                        <script type="text/javascript" src="public/js/cycle2.js"></script>

<script type="text/javascript">
    $(".sliderWrap").cycle();
</script>
<script type="text/javascript">
    $(window).resize(
        function(){
           if ($(this).width() < 640) {
               $('.sliderWrap').cycle('stop');       
           }
        }
    );
    $(document).ready(function() {
       $(window).resize();
    });
</script>
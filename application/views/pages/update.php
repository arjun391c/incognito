<div class="container">

	<div class="row">

		<div class="text-center text-warning mt70" >
			<!--<h2 class="Dagger colblue">
				Coming Soon! 
			</h2>-->

			<h2 class="Dagger colblue">

			Congratulations!.
			</h2>

		</div>

	</div>
	<!--
	<div  id="countdown">
			<div id="clockdiv"> 
  				<div> 
    		 
    	 			<div class="smalltext">Days</div> 
 				</div> 
  				<div> 
  		
  					<div class="smalltext">Hours</div> 
  				</div> 
  				<div> 
    		
    					<div class="smalltext">Minutes</div> 
  				</div> 
  				<div> 
    				
    					<div class="smalltext">Seconds</div> 
  				</div> 
  				
  			
			</div> 
	</div>
-->
<!---------------------------------------------------------------------------------->
	<div class="row">

		<div class="text-center " >
		

			<h3 class="Dagger colwhite">

			 You have made it to the end of the maze. 25 brain wrecking levels, over 1500 hunters fighting tooth and nail for the ultimate prize, but there can be only one Winner. Glory be to the first to lay sight on this page, you shall be showered with riches. 
The hunt may be over but the best is yet to come, join us for Hestia'20 from March 5 to 8 to witness an Odyssey like never before.

			</h3>
			<h3 class="Dagger colwhite mt40">
				
Untill next time, this is team Incognito signing off. May the odds forever be in your favor!
			</h3>

		</div>

	</div>


<!---------------------------------------------------------------------------- -->
<!-------------------------------------------------------------- timer ----------------------
	<script  src="<?php echo base_url('assets/js/jquery.countdown.js') ?>"></script>
	<script>
	$(function(){
		var note = $('#note'),
		//ts = new Date(2021,0,1)
		ts = new Date("Mar 2, 2020 21:30:00")
		newYear = true;
		
		if((new Date())> ts){
			ts= (new Date()).getTime+10*24*60*60*1000;
			newYear = false;
		}
		
		$('#countdown').countdown({
			timestamp : ts,
			callback : function(days,hours,minutes,seconds)
				{
					var message = "";
					message += days + "day" +  (days==1 ? '' : 's') + ",";
					
					message += hours + "hour" +  (hours==1 ? '' : 's') + ",";
					
					message += minutes + "minutes" +  (minutes==1 ? '' : 's') + "and";
					
					message += seconds + "seconds" +  (seconds==1 ? '' : 's') + "<br>";
					
					note.html(message);
				}
					
		});
	});
	</script>
--------------------------------------------------------->
	

</div>

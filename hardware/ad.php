<script>
	$('#ads').cycle({ 
		fx: 'scrollDown',
		speed: 1000, 
		timeout: 5000
	});

	function begin(){
		$.mobile.changePage("#user");
	}
</script>

<!--<style>
	.pics {  
	    height:  232px;  
	    width:   232px;  
	    padding: 0;  
	    margin:  0;  
	} 
	 
	.pics img {  
	    padding: 15px;  
	    border:  1px solid #ccc;  
	    background-color: #eee;  
	    width:  200px; 
	    height: 200px; 
	    top:  0; 
	    left: 0 
	} 
</style>-->

<div data-role="page" id="ad">
	<div data-role="content" onClick="begin()">
		<div id="ads"> 
			<img src="img/ads/coke.jpg" alt="coke" /> 
			<img src="img/ads/google.jpg" alt="google" /> 
			<img src="img/ads/frito.jpg" alt="frito" /> 
		</div> 
		<div>
			Tap anywhere to reclaim your change
		</div>
	</div>
</div>
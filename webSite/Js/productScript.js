//Product-Like-Flipcart Script
	$(document).ready(function(){
		$('.thumb a').mouseover(function(e){
			e.preventDefault();
			$('.imgBox img').attr("src", $(this).attr("href"));
		});
	});

	$(document).ready(function(){
		$('.thumb1 a').mouseover(function(e){
			e.preventDefault();
			$('.imgBox1 img').attr("src", $(this).attr("href"));
		});
	});

	$(document).ready(function(){
		$('.thumb2 a').mouseover(function(e){
			e.preventDefault();
			$('.imgBox2 img').attr("src", $(this).attr("href"));
		});
	});

	$(document).ready(function(){
		$('.thumb3 a').mouseover(function(e){
			e.preventDefault();
			$('.imgBox3 img').attr("src", $(this).attr("href"));
		});
	});

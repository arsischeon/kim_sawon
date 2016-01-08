
<div style="min-width:1080px">
	<object id="obj" data="/sources/mainpage-01.svg" type="image/svg+xml"></object>
</div>
<div id="banner" style="position:absolute; width:100%;">
	<img src="/sources/banner.jpg" class="img img-responsive">
</div>
<script>
document.getElementById('obj').addEventListener("load",function(){
	var doc=this.getSVGDocument();
	var banner_top=doc.querySelector("#up").getBoundingClientRect().bottom;
	var banner_bottom=doc.querySelector("#down").getBoundingClientRect().top;
	$("#banner").css("top",banner_top-0.1+"px");
	$("#banner").css("height",(banner_bottom-banner_top)+"px");
	$(window).on("resize",function(){
		banner_top=doc.querySelector("#up").getBoundingClientRect().bottom;
		banner_bottom=doc.querySelector("#down").getBoundingClientRect().top;
		$("#banner").css("top",banner_top-0.1+"px");
		$("#banner").css("height",(banner_bottom-banner_top)+"px");
	});
	doc.querySelector('#menu1').addEventListener("click",function(){
		location.href="/menu/description";
	});
	doc.querySelector('#menu2').addEventListener("click",function(){
		location.href="/menu/howto";
	});
	doc.querySelector('#menu3').addEventListener("click",function(){
		location.href="/menu/cs";
	});
	doc.querySelector('#logo').addEventListener("click",function(){
		location.href="/";
	});


	doc.querySelector('#balloon_gosoo').addEventListener("click",function(){
		location.href="../search/gosoo";
	});
	doc.querySelector('#character_gosoo').addEventListener("click",function(){
		location.href="../search/gosoo";
	});

	doc.querySelector('#balloon_joongsoo').addEventListener("click",function(){
		location.href="../search/joongsoo";
	});
	doc.querySelector('#character_joongsoo').addEventListener("click",function(){
		location.href="../search/joongsoo";
	});

	doc.querySelector('#balloon_hasoo').addEventListener("click",function(){
		location.href="../search/hasoo";
	});
	doc.querySelector('#character_hasoo').addEventListener("click",function(){
		location.href="../search/hasoo";
	});


})

</script>


<div style="min-width:1080px">
	<object id="obj" data="/sources/mainpage.svg" type="image/svg+xml"></object>
</div>
<script>
document.getElementById('obj').addEventListener("load",function(){
	var doc=this.getSVGDocument();

	doc.querySelector('#balloon_gosoo').addEventListener("click",function(){
		location.href="../search/gosu";
	});
	doc.querySelector('#character_gosoo').addEventListener("click",function(){
		location.href="../search/gosu";
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

	doc.querySelector('#transparent').addEventListener("click",function(){
		location.href="../";
	});
})



// .addEventListener("click", function(){
//   alert('fwe');
//
// });
</script>



<div style="min-width:1080px">
	<object id="obj" data="/sources/search_gosoo.svg" type="image/svg+xml"></object>
	<object id="obj2" data="/sources/coming_down.svg" type="image/svg+xml"></object>
</div>

<style>
@keyframes down {
    from {top:-195px;}
    to {top:0px;}
}
@keyframes up {
    from {top:0px;}
		to {top:-195px;}
}
.movingDown{
	position:absolute;
	animation-name: down;
	animation-duration: 1s;
	top:0px;
}
.movingUp{
	position:absolute;
	animation-name: up;
	animation-duration: 1s;
	top:-195px;
}
</style>

<script>

document.getElementById('obj').addEventListener("load",function(){
	var doc=this.getSVGDocument();
	doc.querySelector('#previous_page_arrow').addEventListener("mouseover",function(){
		document.getElementById('obj2').classList.add('movingDown');
		document.getElementById('obj2').addEventListener("mouseout",function(){
			document.getElementById('obj2').classList.remove('movingDown');
			document.getElementById('obj2').classList.add('movingUp');
		});
					document.getElementById('obj2').classList.remove('movingUp');
		// var count=-195;
		// while(count<0){
		// 	count+=0.01;
		// 	document.getElementById('obj2').style.top=count.toString().concat('px');
		// }

	});
});

function down(){
	var count=-195;
	while(count<0){
		count+=0.01;
		document.getElementById('obj2').style.top=count.toString().concat('px');
	}
}

</script>

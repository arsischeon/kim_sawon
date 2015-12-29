

<div style="min-width:1080px">
	<object id="obj" data="/sources/search_gosoo.svg" type="image/svg+xml"></object>
	<object id="obj2" data="/sources/coming_down.svg" type="image/svg+xml"></object>
</div>

<style>
@keyframes example {
    from {top:-195px;}
    to {top:0px;}

}
.moving{
	position:absolute;
	animation-name: example;
	animation-duration: 1s;
	top:0px;
}

</style>

<script>

document.getElementById('obj2').addEventListener("load",function(){
	var doc=this.getSVGDocument();
	doc.querySelector('#previous_page_arrow').addEventListener("mouseover",function(){
		document.getElementById('obj2').classList.add('moving');
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



<div style="min-width:1080px">
	<object id="obj" data="/sources/search_gosoo.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px" id="obj2" data="/sources/coming_down.svg" type="image/svg+xml"></object>
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
var obj=document.getElementById('obj');
var obj2=document.getElementById('obj2');

obj.addEventListener("load",function(){
	//마우스오버시 메뉴가 내려옴
	var doc=this.getSVGDocument();
	doc.querySelector('#previous_page_arrow').addEventListener("mouseover",function(){
		obj2.classList.add('movingDown');
		obj2.addEventListener("mouseout",function(){
			obj2.classList.remove('movingDown');
			obj2.classList.add('movingUp');
		});
			obj2.classList.remove('movingUp');
	});

});
obj2.addEventListener("load",function(){
	var doc=this.getSVGDocument();
//내려온 메뉴에 링크를 붙임.
	doc.querySelector('#service').addEventListener("click",function(){
	location.href="naver.com";
	});
	

});

</script>

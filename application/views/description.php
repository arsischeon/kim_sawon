

<div style="min-width:1080px">
	<object id="obj" data="/sources/description.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px;z-index:2; " class="initial" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>
<div id="cartoon" style="overflow-y:auto; position: absolute; z-index:1;">
	<img id="itself" src="/sources/cartoon.jpg" class="img img-responsive">

</div>
<style>
@keyframes down {}
@keyframes up {}
.initial{}
.movingDown{}
.movingUp{}

</style>

<script>
var obj=document.getElementById('obj');
var obj2=document.getElementById('obj2');






 // console.log(doc.querySelector('#previous_page_arrow').getBoundingClientRect().bottom);

obj.addEventListener("load",function(){
	//마우스오버시 메뉴가 내려옴
	var doc=this.getSVGDocument();
	var cartoonBackground=doc.querySelector("#cartoonBackground").getBoundingClientRect();
	var sogae=doc.querySelector("#sogae").getBoundingClientRect();
	$("#cartoon").css("top",cartoonBackground.top);
	$("#cartoon").css("height",cartoonBackground.height);
	$("#cartoon").css("left",cartoonBackground.left);
	$("#cartoon").css("width",cartoonBackground.width);
	// $("#itself").css("padding-top",	sogae.top-cartoonBackground.top);
	$(window).on("resize",function(){
		// sogae=doc.querySelector("#sogae").getBoundingClientRect();
		cartoonBackground=doc.querySelector("#cartoonBackground").getBoundingClientRect();
		$("#cartoon").css("top",cartoonBackground.top);
		$("#cartoon").css("height",cartoonBackground.height);
		$("#cartoon").css("left",cartoonBackground.left);
		$("#cartoon").css("width",cartoonBackground.width);
	});


	});



obj2.addEventListener("load",function(){
	var doc=this.getSVGDocument();
	var initial=getRule("initial");
	initial.style.cssText="position:absolute; top:-"+ doc.querySelector('#background').getBoundingClientRect().height +"px";
	doc.querySelector('#mouse_over_pop_up .cls-3').addEventListener("mouseover",function(){
		var hei; //백그라운드 높이 저장
		obj2.classList.remove('movingUp');
		obj2.classList.remove('initial');
		//down 부터
		var keyframes = getRule("down");
		keyframes.deleteRule("0");
		keyframes.deleteRule("100");
		keyframes.appendRule("0% {  top:-"+ (hei=doc.querySelector('#background').getBoundingClientRect().height) +"px }");
		keyframes.appendRule("100% {  top:0px }");
		getRule("movingDown").style.cssText="	position:absolute; animation-name: down; animation-duration: 0.4s; top:0px;"
		obj2.classList.add('movingDown');

		//up 부분
		obj2.addEventListener("mouseout",function(){
 		 if(obj2.getBoundingClientRect().top==0){
 		obj2.classList.remove('movingDown');
 		var keyframes = getRule("up");
 		keyframes.deleteRule("0");
 		keyframes.deleteRule("100");
 		keyframes.appendRule("0% {  top:0px; }");
 		keyframes.appendRule("100% {  top:-"+ hei +"px }");
 		getRule("movingUp").style.cssText="	position:absolute; animation-name: up; animation-duration: 0.4s; top:-"+hei+"px;"
 		obj2.classList.add('movingUp');
 			}
 	 });

	});

//내려온 메뉴에 링크를 붙임.
//coming_down.svg 에 클릭 이벤트 넣음.
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


});

</script>

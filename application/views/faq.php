

<div style="min-width:1080px">
	<object id="obj" data="/sources/faq1-09.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px; " class="initial" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>
<div id="cartoon" style="overflow-y:auto; position: absolute; z-index:1;">
	<div class="container-fluid">
		<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Collapsible Group 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Collapsible Group 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Collapsible Group 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
</div>
	</div>



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
	doc.querySelector("#cs").addEventListener("click",function(){
			location.href="/menu/cs";
		});
		doc.querySelector("#ask").addEventListener("click",function(){
				alert("출장 중입니다~ 페이스북이나 카카오톡으로 연락주세요~");
			});


			var cartoonBackground=doc.querySelector("#ten_next_page").getBoundingClientRect();

			$("#cartoon").css("top",cartoonBackground.top);
			$("#cartoon").css("height",cartoonBackground.height);
			$("#cartoon").css("left",cartoonBackground.left);
			$("#cartoon").css("width",cartoonBackground.width);
			// $("#itself").css("padding-top",	sogae.top-cartoonBackground.top);
			$(window).on("resize",function(){
				// sogae=doc.querySelector("#sogae").getBoundingClientRect();
				cartoonBackground=doc.querySelector("#ten_next_page").getBoundingClientRect();
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
closeWindowByMask();

});

</script>

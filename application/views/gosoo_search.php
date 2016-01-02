

<div style="min-width:1080px">
	<object id="obj" data="/sources/search_gosoo.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px; z-index:1000;" class="initial" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>

<div id="inside" class="container" style="display:none; position: absolute; ">

		<div class="row">
			<div class="col-sm-6">
				<span>수량</span>
				<select name="speed" id="speed">
  				<option value=""></option>
					<option value="100">100</option>
					<option value="200">200</option>
					<option value="300">300</option>
					<option value="400">400</option>
					<option value="500">500</option>
					<option value="600">600</option>
					<option value="700">700</option>
					<option value="800">800</option>
					<option value="900">900</option>
					<option value="1000">1000</option>
					<option value="1100">1100</option>
					<option value="1200">1200</option>
					<option value="1300">1300</option>
					<option value="1400">1400</option>
					<option value="1500">1500</option>
					<option value="2000">2000</option>
					<option value="2500">2500</option>
					<option value="3000">3000</option>
					<option value="3500">3500</option>
					<option value="4000">4000</option>
					<option value="4500">4500</option>
					<option value="5000">5000</option>
				</select>


<script>
$( "#speed" ).selectmenu({


}).selectmenu( "menuWidget" ).addClass( "overflow" );
</script>

			</div>
			<div class="col-lg-6"> dd
			</div>
		</div>

</div>
<style>
.overflow { height: 200px; }
.ui-selectmenu-button, .ui-button, .ui-widget{
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-bottom-left-radius: 0px;
	border-bottom-right-radius: 0px;
	width: 6em !important;
	background: white !important;
}
span{
	font-family: Noto Sans CJK KR;
}
option{
	text-align: center;
}
#inside{

}
@keyframes down {}
@keyframes up {}
.initial{}
.movingDown{}
.movingUp{}

</style>

<script>
function getRule(data) {

      var rule;

      var ss = document.styleSheets;

      for (var i = 0; i < ss.length; ++i) {

          // loop through all the rules!

          for (var x = 0; x < ss[i].cssRules.length; ++x) {

              rule = ss[i].cssRules[x];

              if (rule.name == data || rule.selectorText=="."+data) {

                  return rule;

              }

          }

      }

  }


$(function(){
	// $("#selectionBackground")




var obj=document.getElementById('obj');
var obj2=document.getElementById('obj2');

obj.addEventListener("load",function(){
	//마우스오버시 메뉴가 내려옴
	var doc=obj.getSVGDocument();
	var leftOfInside=doc.querySelector("#lefthand").getBoundingClientRect().right;
	var rightOfInside=doc.querySelector("#righthand").getBoundingClientRect().left;
	var topOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().top;
	var heightOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().height;
	var insideWidth=rightOfInside-leftOfInside;
	var insideLeft=leftOfInside;
	$("#inside").css("left",insideLeft+"px");
	$("#inside").css("width",insideWidth+"px");
	$("#inside").css("top",topOfInside+5+"px");
	$("#inside").css("height",heightOfInside-5+"px");
	$("#inside").css("display","");
	$(window).on("resize",function(){
		var leftOfInside=doc.querySelector("#lefthand").getBoundingClientRect().right;
		var rightOfInside=doc.querySelector("#righthand").getBoundingClientRect().left;
		var topOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().top;
		var heightOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().height;
		var insideWidth=rightOfInside-leftOfInside;
		var insideLeft=leftOfInside;
		$("#inside").css("left",insideLeft+"px");
		$("#inside").css("width",insideWidth+"px");
		$("#inside").css("top",topOfInside+5+"px");
		$("#inside").css("height",heightOfInside-5+"px");
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

});
</script>

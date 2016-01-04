

<div style="min-width:1080px">
	<object id="obj" data="/sources/search_joongsoo.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px; " class="initial" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>
<script>
$(function(){
		$( "#purpose" ).selectmenu();
		$( "#amount" ).selectmenu().selectmenu( "menuWidget" ).addClass( "overflow" );
		$( "#amount" ).on( "selectmenuchange", function( event, ui ) { makeSentence("amount",ui.item.label); } );
		$( "#coating" ).selectmenu();
		$( "#coating" ).on( "selectmenuchange", function( event, ui ) { makeSentence("coating",ui.item.label); } );
		$('[data-toggle="tooltip"]').tooltip();
});

</script>
<style>
@keyframes down {}
@keyframes up {}
.initial{}
.movingDown{}
.movingUp{}
.option-label{
		font-size:16px;
		color:#66635A;
		margin-right:3px;
}
#amount-button{
	width: 8em !important;
}
#purpose-button{
	width: 100% !important;
}
#paperType-button,#coating-button,#front_color-button,#back_color-button{
	width: 9em !important;
}
.row{
	margin-top:18px;
}
.ui-selectmenu-button, .ui-button, .ui-widget{
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-bottom-left-radius: 0px;
	border-bottom-right-radius: 0px;
	background: white !important;
}
option{
	text-align: center;
}
</style>


<div id="inside" class="container" style=" display:none; position: absolute; ">
	<div class="row">
		<div class="col-xs-4">
			<span class="option-label">무슨 용도를 위해 출력하시나요?</span>
		</div>
		<div class="col-xs-8">
			<select name="purpose" id="purpose">
				<option value=""></option>
				<option value="100">100장</option>
				<option value="200">200장</option>
				<option value="300">300장</option>
				<option value="400">400장</option>
			</select>
		</div>
	</div>
	<div class="container" id="inside2" style="padding:0px; overflow-y:auto; overflow-x:hidden; ">
	<div class="row">
		<div class="col-xs-5" style="padding-right:0px;">
			<span class="option-label">수량</span>
			<select name="amount" id="amount">
				<option value=""></option>
				<option value="100">100장</option>
				<option value="200">200장</option>
				<option value="300">300장</option>
				<option value="400">400장</option>
				<option value="500">500장</option>
				<option value="600">600장</option>
				<option value="700">700장</option>
				<option value="800">800장</option>
				<option value="900">900장</option>
				<option value="1000">1000장</option>
				<option value="1100">1100장</option>
				<option value="1200">1200장</option>
				<option value="1300">1300장</option>
				<option value="1400">1400장</option>
				<option value="1500">1500장</option>
				<option value="2000">2000장</option>
				<option value="2500">2500장</option>
				<option value="3000">3000장</option>
				<option value="3500">3500장</option>
				<option value="4000">4000장</option>
				<option value="4500">4500장</option>
				<option value="5000">5000장</option>
			</select>
			<div style=" display: inline-block;">
				<img data-toggle="tooltip" style="padding-top: 5px;" data-placement="bottom" title="여러 업체에서 선택할 수 있는 수량이 다르기 때문에, 우리는 가장 보편적인 수치들을 선택지로 제공하기로 했어. 만약 꼭 다른 수치를 입력하기를 원한다면 고객센터로 연락해줘!" src="/sources/question_icon.png">
				<span style="display: inline-block; font-size:2px;vertical-align: top;"> 왜 더 많은 단위의<br> 입력이 안돼? </span>
			</div>

		</div>
		<div class="col-xs-4">
			<span class="option-label">코팅</span>
			<select name="coating" id="coating">
				<option value="">코팅없음</option>
				<option value="1">단면무광</option>
				<option value="2">양면무광</option>
				<option value="3">단면유광</option>
				<option value="4">양면유광</option>
			</select>
		</div>
		<div class="col-xs-3">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<span class="option-label">종이 재질</span>
		</div>
	</div>

</div>
</div>


<script>
var obj=document.getElementById('obj');
var obj2=document.getElementById('obj2');


obj.addEventListener("load",function(){
	var doc=obj.getSVGDocument();
	var leftOfInside=doc.querySelector("#lefthand").getBoundingClientRect().right;
	var rightOfInside=doc.querySelector("#righthand").getBoundingClientRect().left;
	var topOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().top;
	var heightOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().height;
	var insideWidth=rightOfInside-leftOfInside;
	var insideLeft=leftOfInside;
	$("#inside").css("left",insideLeft+"px");
	$("#inside").css("width",insideWidth+"px");
	$("#inside").css("top",topOfInside+20+"px");
	$("#inside").css("height",heightOfInside-35+"px");
	$("#inside").css("display","");
	$("#inside2").css("width",insideWidth+"px");
	$("#inside2").css("height",heightOfInside-55+"px");
	$(window).on("resize",function(){
		var leftOfInside=doc.querySelector("#lefthand").getBoundingClientRect().right;
		var rightOfInside=doc.querySelector("#righthand").getBoundingClientRect().left;
		var topOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().top;
		var heightOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().height;
		var insideWidth=rightOfInside-leftOfInside;
		var insideLeft=leftOfInside;
		$("#inside").css("left",insideLeft+"px");
		$("#inside").css("width",insideWidth+"px");
		$("#inside").css("top",topOfInside+20+"px");
		$("#inside").css("height",heightOfInside-35+"px");
		$("#inside2").css("width",insideWidth+"px");
		$("#inside2").css("height",heightOfInside-55+"px");
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

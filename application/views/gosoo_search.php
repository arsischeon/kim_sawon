

<div style="min-width:1080px">
	<object id="obj" data="/sources/search_gosoo.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px; z-index:1000;" class="initial" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>
<script>
var thickList=[''];
var amount="-";
var paperType="-";
var paperThick="-";
var size="-";
var coating="-";
var front_color="-";
var back_color="인쇄안함";
function makeSentence(name,value){

	switch (name) {
		case "amount":
			amount=value;
			break;
		case "paperType":
			paperType=value;
			break;
		case "paperThick":
			paperThick=thickList[value];
			break;
		case "size":
			size=value;
			break;
		case "coating":
			coating=value;
			break;
		case "front_color":
			front_color=value;
			break;
		case "back_color":
			back_color=value;
			break;
		default:

	}
	$("#offer").text("\"포스터 "+amount+"을 "+size+"크기의 "+paperType+" "+paperThick+"으로 앞면 "+front_color+" "+(back_color=="인쇄안함"?"":"뒷면 "+back_color)+"로 출력하고 , "+coating+"으로 코팅해 주세요\"");
}
$(function(){
	$( "#amount" ).selectmenu().selectmenu( "menuWidget" ).addClass( "overflow" );
	$( "#amount" ).on( "selectmenuchange", function( event, ui ) { makeSentence("amount",ui.item.label); } );
	$( "#paperType" ).selectmenu();
	$( "#paperType" ).on( "selectmenuchange", function( event, ui ) {
		makeSentence("paperType",ui.item.label);
		console.log(ui.item);
		switch (parseInt(ui.item.value)) {
				case 1:
				thickList=['',"100g","120g","150g","180g","200g","210g"];
				break;
				case 2:
				thickList=['',"100g","120g","150g","180g","200g","210g"];
				break;
				case 4:
				thickList=['','210g'];
				break;
				case 5:
				thickList=['','105g','130g','160g','210g'];
				break;
				case 6:
				thickList=['','210g'];
				break;

		}
		var cntThickList=thickList.length-1;
		$( "#thick" ).slider("option","max",thickList.length-1).slider("pips",{
				first:false,
				rest: "label",
				labels: thickList
		}).slider("pips","refresh");
	});
	$( "#coating" ).selectmenu();
	$( "#coating" ).on( "selectmenuchange", function( event, ui ) { makeSentence("coating",ui.item.label); } );
	$( "#front_color" ).selectmenu();
	$( "#front_color" ).on( "selectmenuchange", function( event, ui ) { makeSentence("front_color",ui.item.label); } );
	$( "#back_color" ).selectmenu();
	$( "#back_color" ).on( "selectmenuchange", function( event, ui ) { makeSentence("back_color",ui.item.label); } );
	$('[data-toggle="tooltip"]').tooltip();
	var sizeList=["",""];
	$( "#size" ).slider({max:2}).slider("pips",{
        step: 50,
				labels:["0","1","2"],
			  rest: "label"
	}).slider("float",{
			labels: ["0","1","2"]
	});

	$( "#thick" ).slider({max:thickList.length}).slider("pips",{
			first:false,
			rest: "label",
			labels: thickList
	});
	$("#thick").on( "slidechange", function( event, ui ) {
		console.log(ui);
		makeSentence("paperThick",ui.value);
	});
});
</script>
<style>

.ui-slider-handle{
	background: url("/sources/slider_button.png") 50% 50%  !important;
	width: 2em !important;
	height: 2em !important;
	top: -.6em !important;
	border: 0px !important;
	margin-left: -.9em !important;
}
#size,#thick{
	background:#DEDDDD !important;
}
.row{
	margin-top:18px;
}
.option-label{
	font-size:16px;
	color:#66635A;
	margin-right:3px;
}
#amount-button{
	width: 8em !important;
}
#paperType-button,#coating-button,#front_color-button,#back_color-button{
	width: 9em !important;
}
.overflow { height: 200px; }
.ui-selectmenu-button, .ui-button, .ui-widget{
	border-top-left-radius: 0px;
	border-top-right-radius: 0px;
	border-bottom-left-radius: 0px;
	border-bottom-right-radius: 0px;
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
<div id="inside" class="container" style=" overflow-y:scroll; overflow-x:none; display:none; position: absolute; ">
		<div class="row">
			<div class="col-xs-4" style="padding-right:0px;">
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
				<div style="     display: inline-block;">
					<img data-toggle="tooltip" style="padding-top: 5px;" data-placement="bottom" title="여러 업체에서 선택할 수 있는 수량이 다르기 때문에, 우리는 가장 보편적인 수치들을 선택지로 제공하기로 했어. 만약 꼭 다른 수치를 입력하기를 원한다면 고객센터로 연락해줘!" src="/sources/question_icon.png">
					<span style="display: inline-block; font-size:2px;vertical-align: top;"> 왜 더 많은 단위의<br> 입력이 안돼? </span>
				</div>

			</div>
			<div class="col-xs-4">
				<span class="option-label">종이재질</span>
				<select name="paperType" id="paperType">
  				<option value=""></option>
					<option value="1">아트지</option>
					<option value="2">스노우지</option>
					<option value="3">모조지</option>
					<option value="4">르누와르</option>
					<option value="5">랑데부</option>
					<option value="6">아르떼</option>
				</select>
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
		</div>
		<div class="row">
			<div class="col-xs-12">
				<span class="option-label">종이크기</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div id="size">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<span class="option-label">종이무게</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div id="thick">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<span class="option-label">도수와 인쇄면</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<span class="option-label">앞면</span>
				<select name="front_color" id="front_color">
					<option value=""></option>
					<option value="1">1도</option>
					<option value="2">4도</option>
					<option value="3">5도</option>
				</select>
			</div>
			<div class="col-xs-4">
				<span class="option-label">뒷면</span>
				<select name="back_color" id="back_color">
					<option value="">인쇄안함</option>
					<option value="1">1도</option>
					<option value="2">4도</option>
					<option value="3">5도</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
			<span id="offer" style="font-size:16px; text-align:center; display: block;">포스터 -을 -크기의 - -으로 앞면 -로 출력하고, -으로 코팅해 주세요</span>
		</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<hr style="border-top: 2px solid #DEDDDD; margin-top: 0px; ">
			</div>
		</div>
		<div class="row" style="margin-top:14px;">
			<div class="col-xs-4">
				<div style="float:left;">	<span class="option-label">검색 결과 개수:</span></div>
				<div style="border-bottom: 2px solid #f3c262; display: inline-block; width:80px; text-align:center; font-size:17px;"> 30</div>
				<div style="display: inline-block; "><span class="option-label">개</span></div>
			</div>
			<div class="col-xs-4">
			</div>
			<div class="col-xs-4">
				<img style="height:32px; float:right;" src="/sources/submit_button.png">
			</div>
		</div>

</div>


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
	$("#inside").css("top",topOfInside+20+"px");
	$("#inside").css("height",heightOfInside-35+"px");
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
		$("#inside").css("top",topOfInside+20+"px");
		$("#inside").css("height",heightOfInside-35+"px");

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

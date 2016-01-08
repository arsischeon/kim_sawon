

<div style="min-width:1080px">
	<object id="obj" data="/sources/search_gosoo.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px; z-index:1000;" class="initial" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>
<script>
var thickList=[''];
var orderList=[''];
var amount="-";
var paperType="-";
var paperThick="-g";
var size="-";
var coating="-";
var color="-도";
var side="-";

var Iamount="";
var IpaperType="";
var IpaperThick="";
var Isize="";
var Icoating="";
var Iside="";
var Icolor="";
function makeSentence(name,value,Id){

	switch (name) {
		case "amount":
		amount=value;
		Iamount=Id;
		break;
		case "paperType":
		paperType=value;
		IpaperType=Id;
		break;
		case "paperThick":
		paperThick=thickList[value];
		IpaperThick=Id;
		break;
		case "size":
		size=value;
		Isize=Id;
		break;
		case "coating":
		coating=value;
		Icoating=Id;
		break;
		case "color":
		color=value;
		Icolor=Id;
		break;
		case "side":
		side=value;
		Iside=Id;
		break;
		default:

	}
	$("#offer").text("\"포스터 "+amount+"을 "+size+"크기의 "+paperType+" "+paperThick+"으로 "+side+" "+color+"로 출력하고 , "+coating+"으로 코팅해 주세요\"");
	if(amount=="-"||paperType=="-"||paperThick=="-g"||size=="-"||coating=="-"||side==""||color==""){
		$("#submit_no").css("display","block");
		$("#submit_yes").css("display","none");
	}else{
		$("#submit_no").css("display","none");
		$("#submit_yes").css("display","block");
	}
	if(Iamount!=""){
	var request = $.ajax({
	url: "/result/silsigan_search?goods=1&amount="+Iamount+"&paperType="+IpaperType+"&paperThick="+IpaperThick+"&size="+Isize+"&coating="+Icoating+"&side="+Iside+"&color="+Icolor+"",
	success:function(data){
		$( "#silsigan" ).html(data);
	}
	});
}
}
	var numOfSize=[,3,2,1,7,6,10,9,8,15,14,16];
	var nameOfSize=["","A3","A2","A1","B3","B2","8절","4절","2절","국4절","국2절","국절"];
function colorSelect(value){
	var pos;
	var idOfColor=["1do","4do"];
	var nameOfColor=["1도","4도"];
	var numOfColor=[1,2];
	for(var i=0;i<idOfColor.length;i++){
		if(value==idOfColor[i]){
			pos=i;
		}
	}
	makeSentence("color",nameOfColor[pos],numOfColor[pos]);
}
function sideSelect(value){
		var pos;
		var idOfSide=["single","double"];
		var nameOfSide=["단면","양면"];
		var numOfSide=[1,2];
		for(var i=0;i<idOfSide.length;i++){
			if(value==idOfSide[i]){
				pos=i;
			}
		}
			makeSentence("side",nameOfSide[pos],numOfSide[pos]);
}
$(function(){
	$("#submit_yes").on("click",function(){
		console.log(Iamount+";;"+ IpaperType+";;"+IpaperThick+";;"+Isize+";;"+Icoating+";;"+Iside+";;"+Icolor);
		location.href="/result/lists?goods=1&amount="+Iamount+"&paperType="+IpaperType+"&paperThick="+IpaperThick+"&size="+Isize+"&coating="+Icoating+"&side="+Iside+"&color="+Icolor;
	});
	$( "#amount" ).selectmenu().selectmenu( "menuWidget" ).addClass( "overflow" );
	$( "#amount" ).on( "selectmenuchange", function( event, ui ) { makeSentence("amount",ui.item.label,ui.item.value); } );
	$( "#paperType" ).selectmenu();
	$( "#paperType" ).on( "selectmenuchange", function( event, ui ) {
		makeSentence("paperType",ui.item.label,ui.item.value);
		// console.log(ui.item);
		switch (parseInt(ui.item.value)) {
			case 1:
			thickList=['',"100g","120g","150g","180g","200g","250g","300"];
			orderList=[0,1,2,3,4,5,6,8];
			break;
			case 2:
			thickList=['',"100g","120g","150g","180g","200g","250g","300"];
			orderList=[0,1,2,3,4,5,6,8];
			break;
			case 3:
			thickList=['',"80g","100g","120g","150g","180g","200g","220g","250g","260","300"];
			orderList=[0,10,1,2,3,4,5,16,6,17,8];
			break;
			case 4:
			thickList=['','210g'];
			orderList=[0,14];
			break;
			case 5:
			thickList=['','105g','130g','160g',"190g",'210g',"240g"];
			orderList=[0,9,11,12,13,14,15];
			break;
			case 6:
			thickList=['','210g'];
			orderList=[0,14];
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
	$( "#coating" ).on( "selectmenuchange", function( event, ui ) { makeSentence("coating",ui.item.label,ui.item.value); } );
	$('[data-toggle="tooltip"]').tooltip();
	var sizeList=["",""];
	$( "#size" ).slider({max:11}).slider("pips",{
		first: false,
		labels:["","A3","A2","A1","B3","B2","8절","4절","2절","국4절","국2절","국전"],
		rest: "label"
	}).slider("float",{
		labels:["","A3","A2","A1","B3","B2","8절","4절","2절","국4절","국2절","국전"],
	});
	$("#size").on( "slidechange", function( event, ui ) {
		console.log(ui);
		makeSentence("size",nameOfSize[ui.value],numOfSize[ui.value]);
	});
	$( "#thick" ).slider({max:thickList.length}).slider("pips",{
		first:false,
		rest: "label",
		labels: thickList
	});
	$("#thick").on( "slidechange", function( event, ui ) {
		console.log(ui);
		makeSentence("paperThick",ui.value,orderList[ui.value]);
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
	width: 8em !important;
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
input[type="radio"] {
    position:absolute;
    clip: rect(0,0,0,0);
    clip: rect(0 0 0 0);
}
input[type="radio"] + label::before {
	  vertical-align: -webkit-baseline-middle;
    content: url('/sources/radio_no.png');
}
input[type="radio"]:checked + label::before {
    content: url('/sources/radio_yes.png');
}
@keyframes down {}
	@keyframes up {}
		.initial{}
			.movingDown{}
				.movingUp{}

					</style>
					<div id="inside" class="container" style=" overflow-y:auto; overflow-x:hidden; display:none; position: absolute; ">
						<div class="row">
							<div class="col-xs-5" style="width:38%; padding-right:0px;">
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
									<span style="display: inline-block; font-size:10px;vertical-align: top;"> 왜 더 많은 단위의<br> 입력이 안돼? </span>
								</div>

							</div>
							<div class="col-xs-4" style="width:32%;">
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
							<div class="col-xs-3" style="width:30%;">
								<span class="option-label">코팅</span>
								<select name="coating" id="coating">
									<option value=""></option>
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
								<div style="padding-left:20px;">
									<span style="position: absolute; left: 11%; font-size:15px;">A</span>
									<span style="position: absolute; left: 28%; font-size:15px;">B</span>
									<span style="position: absolute; left: 46%; font-size:15px;">4*6판계열</span>
									<span style="position: absolute; left: 72%; font-size:15px;">국판계열</span>
								</div>
								<div id="size" style="margin-top: 22px; background: linear-gradient(to right,white 0%, white 27.3%, #DEDDDD 27.3%, #DEDDDD 45.5%, white 45.5%, white 72.8%, #DEDDDD 72.8%, #DEDDDD 100%) !important;">
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
							<div class="col-xs-4">
								<span class="option-label">인쇄면</span>
								<div style="margin-top: 10px;">
									<input name="side" id="single" type="radio" onclick="sideSelect('single')" ><label style="padding-left:15px; font-weight: normal; font-size:14px; " class="option-label" for="single">단면</label>
									<input name="side" id="double" type="radio" onclick="sideSelect('double')"><label style="padding-left:15px; font-weight: normal; font-size:14px; " class="option-label" for="double">양면</label>
								</div>
							</div>
							<div class="col-xs-4">
								<span class="option-label">도수</span>
								<div style="margin-top: 10px;">
									<input name="color" id="1do" type="radio" onclick="colorSelect('1do')" ><label style="padding-left:15px; font-weight: normal; font-size:14px; " class="option-label" for="1do">1도</label>
									<input name="color" id="4do" type="radio" onclick="colorSelect('4do')"><label style="padding-left:15px; font-weight: normal; font-size:14px; " class="option-label" for="4do">4도</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<hr style="border-top: 2px solid #DEDDDD; margin-top: 0px; ">
							</div>
						</div>
						<div class="row" style="margin-top:0px">
							<div class="col-xs-12">
								<span id="offer" style="font-size:16px; text-align:center; display: block;">포스터 -을 -크기의 - -으로 앞면 -로 출력하고, -으로 코팅해 주세요</span>
							</div>
						</div>

						<div class="row" style="margin-top:14px;">
							<div class="col-xs-4">
								<div style="float:left;">	<span class="option-label">검색 결과 개수:</span></div>
								<div id="silsigan" style="border-bottom: 2px solid #f3c262; display: inline-block; width:80px; text-align:center; font-size:17px;"></div>
								<div style="display: inline-block; "><span class="option-label">개</span></div>
							</div>
							<div class="col-xs-4">
							</div>
							<div class="col-xs-4">
								<img id="submit_yes" style="cursor:pointer; height:32px;float: right; display:none;" src="/sources/submit_button.png">
								<img id="submit_no" style="height:32px;     float: right; display:block;" src="/sources/submit_no_button.png">
							</div>
						</div>

					</div>

					<script>
					$(function(){
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



<div style="min-width:1080px">
	<object id="obj" data="/sources/search_joongsoo.svg"  type="image/svg+xml"></object>
	<object style="min-width:1080px; " class="initial" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>
<img id="typecc" src="/sources/chuchun.png" style="width:50px; z-index:300; position:absolute; display:none">
<img id="sizecc" src="/sources/chuchun.png" style="width:80px; z-index:300; position:absolute; display:none">
<script>
	var listing=["paper2","a3"];
	function chuchun(lists){
		for(var i=0;i<lists.length;i++){
			var target=$("#"+lists[i]);
			var cc_top=target.offset().top+target.height()*0.7;
			var cc_left=target.offset().left;
			if(i==0){
				$("#typecc").css("top",cc_top+"px");
				$("#typecc").css("left",cc_left+"px");
				$("#typecc").css("display","");
			}else{
				$("#sizecc").css("top",cc_top+"px");
				$("#sizecc").css("left",cc_left+"px");
				$("#sizecc").css("display","");
			}
		}
		if ($("#typecc").offset().top<$("#inside2").offset().top) {
			$("#typecc").css("display","none");
		}
		if ($("#typecc").offset().top+$("#typecc").height()>$("#inside2").offset().top+$("#inside2").height()) {
			$("#typecc").css("display","none");
		}
		if ($("#sizecc").offset().top<$("#inside2").offset().top) {
			$("#sizecc").css("display","none");
		}
		if ($("#sizecc").offset().top+$("#sizecc").height()>$("#inside2").offset().top+$("#inside2").height()) {
			$("#sizecc").css("display","none");
		}

	}
	var thickList=[''];
	var amount="-";
	var paperType="-";
	var paperThick="-g";
	var size="-";
	var coating="-";
	var side="";
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
			case "side":
			side=value;
			break;
		}
		$("#offer").text("\"포스터 "+amount+"을 "+size+"크기의 "+paperType+" "+paperThick+"으로 "+(side=="1"?"단면":"양면")+"으로 출력하고 , "+coating+"으로 코팅해 주세요\"");
	}
	$(function(){

		$("#inside2").scroll(function(){
			chuchun(listing);
		});
		$( "#purpose" ).selectmenu();
		$( "#purpose" ).on( "selectmenuchange", function( event, ui ) {
			switch(parseInt(ui.item.value)){
				case 1:
					listing=["paper1","a2"];
				break;
				case 2:
					listing=["paper2","a1"];
				break;
				case 3:
					listing=["paper2","a1"];
				break;
			}
			chuchun(listing);
		 });
		$( "#amount" ).selectmenu().selectmenu( "menuWidget" ).addClass( "overflow" );
		$( "#amount" ).on( "selectmenuchange", function( event, ui ) { makeSentence("amount",ui.item.label); } );
		$( "#coating" ).selectmenu();
		$( "#coating" ).on( "selectmenuchange", function( event, ui ) { makeSentence("coating",ui.item.label); } );
		$('[data-toggle="tooltip"]').tooltip();
		$( "#thick" ).slider({max:thickList.length}).slider("pips",{
			first:false,
			rest: "label",
			labels: thickList
		});

		//papertype 바뀌었을 때
	// 	switch (parseInt(ui.item.value)) {
	// 		case 1:
	// 		thickList=['',"100g","120g","150g","180g","200g","250g","300"];
	// 		orderList=[0,1,2,3,4,5,6,8];
	// 		break;
	// 		case 2:
	// 		thickList=['',"100g","120g","150g","180g","200g","250g","300"];
	// 		orderList=[0,1,2,3,4,5,6,8];
	// 		break;
	// 		case 3:
	// 		thickList=['',"80g","100g","120g","150g","180g","200g","220g","250g","260","300",""];
	// 		orderList=[0,10,1,2,3,4,5,16,6,17,8];
	// 		break;
	// 		case 4:
	// 		thickList=['','210g'];
	// 		orderList=[0,14];
	// 		break;
	// 		case 5:
	// 		thickList=['','105g','130g','160g',"190g",'210g',"240g"];
	// 		orderList=[0,9,11,12,13,14,15];
	// 		break;
	// 		case 6:
	// 		thickList=['','210g'];
	// 		orderList=[0,14];
	// 		break;
	//
	// 	}
	// 	var cntThickList=thickList.length-1;
	// 	$( "#thick" ).slider("option","max",thickList.length-1).slider("pips",{
	// 		first:false,
	// 		rest: "label",
	// 		labels: thickList
	// 	}).slider("pips","refresh");
	// });



});

</script>
<style>
.ui-selectmenu-open{
	z-index: 400;
}
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
.ui-slider-handle{
	background: url("/sources/slider_button.png") 50% 50%  !important;
	width: 2em !important;
	height: 2em !important;
	top: -.6em !important;
	border: 0px !important;
	margin-left: -.9em !important;
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
.paper-option-sub-text{
	display: block;
	text-align: center;
	font-size: 10px;
	color:#8C8980;
	padding-top:5px;
}

.image-paper{

}

.col-xs-4.papersize1{
	width: 31.3%;
	margin: 1% 1%;
	margin-top:0px;
	margin-bottom:0px;
	padding:0px 0px 0px 0px;
}
.papersize{
		width:100%;
		/*padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 10px;
		padding-right: 10px;
		background: #D1D2D1;
		border-radius: 4px;*/
}

.paper-text{
	display: block;
	text-align: center;
	color:#8C8980;
	font-size:15px;
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
</style>
<div id="paper_popup">
</div>

<div id="inside" class="container" style=" display:none; position: absolute; ">
	<div class="row">
		<div class="col-xs-4">
			<span class="option-label">무슨 용도를 위해 출력하시나요?</span>
		</div>
		<div class="col-xs-4" style="padding-left:0px;">
			<select name="purpose" id="purpose">
				<option value=""></option>
				<option value="1">동아리 포스터</option>
				<option value="2">야외 부착</option>
				<option value="3">실내 부착</option>
			</select>
		</div>
		<div class="col-xs-4" style="border-left: 2px solid #DEDDDD;">
			<div style="float:left;">	<span class="option-label">검색 결과 개수:</span></div>
			<div style="border-bottom: 2px solid #f3c262; display: inline-block; width:80px; text-align:center; font-size:17px;"> 30</div>
			<div style="display: inline-block; "><span class="option-label">개</span></div>
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
	<div class="row">
		<div class="col-xs-2">
			<img id="paper1" class="img img-responsive" src="/sources/paperR1.jpg">
			<span class="paper-option-sub-text">"광택이 있고<br>가격대비 색감이<br>좋아."</span>
		</div>
		<div class="col-xs-2">
			<img id="paper2" class="img img-responsive" src="/sources/paperR2.jpg">
			<span class="paper-option-sub-text">"무광택이고<br>가격대비 색감이<br>좋아."</span>
		</div>
		<div class="col-xs-2">
			<img id="paper3" class="img img-responsive" src="/sources/paperR3.jpg">
			<span class="paper-option-sub-text">"일반 복사용지야.<br>표면이 매끄럽고<br>가격이 저렴해"</span>
		</div>
		<div class="col-xs-2">
			<img id="paper4" class="img img-responsive" src="/sources/paperR4.jpg">
			<span class="paper-option-sub-text">"은은한 광택이 돌고<br>종이 본연의 촉감이<br>살아있어."</span>
		</div>
		<div class="col-xs-2">
			<img id="paper5" class="img img-responsive" src="/sources/paperR5.jpg">
			<span class="paper-option-sub-text">"색감 표현이<br>훌륭하고 약간의<br>무늬가 고급스러워"</span>
		</div>
		<div class="col-xs-2">
			<img id="paper6" class="img img-responsive" src="/sources/paperR6.jpg">
			<span class="paper-option-sub-text">"종이 질감이<br>살아있어서 색감이<br>풍부하게 표현돼"</span>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<span class="option-label">종이크기</span>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<img src="/sources/joongsoo_mw.png" class="img img-responsive">
		</div>
		<div class="col-xs-8">

		</div>
	</div>
	<div class="row" style="margin-top:0px;">
		<div class="container-fluid" style="padding-top: 1%; padding-bottom: 1%; margin-top:0px !important; margin: 20px 20px; border-radius:7px; border: 4px solid #F3C262; border-top-left-radius">
			<div class="row" style="padding:1%; margin-top:0px;">
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="a3" src="/sources/a3.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">A3</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1 ">
					<div class="papersize">
						<img id="a2" src="/sources/a2.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">A2</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="a1" src="/sources/a1.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">A1</span>
					</div>
				</div>
			</div>
			<div class="row" style=" margin-top:0px;">
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="b3"  src="/sources/b3.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">B3</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="b2" src="/sources/b2.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">B2</span>
					</div>
				</div>

			</div>
			<div class="row" style="margin-top:0px;">
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="8j" src="/sources/8j.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">8절</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="4j" src="/sources/4j.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">4절</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="2j" src="/sources/2j.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">2절</span>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:0px;">
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="g4j" src="/sources/g4j.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">국4절</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="g2j" src="/sources/g2j.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">국2절</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="gj" src="/sources/gj.png" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">국전</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<span class="option-label">종이 두께</span>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12" style="padding-left:30px;">
			<div id="thick">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<span class="option-label">인쇄면</span>
			<div style="margin-top: 10px;">
				<input name="side" id="single" type="radio"><label style="padding-left:15px; font-weight: normal; font-size:14px; " class="option-label" for="single">단면</label>
				<input name="side" id="double" type="radio"><label style="padding-left:15px; font-weight: normal; font-size:14px; " class="option-label" for="double">양면</label>
			</div>
		</div>
		<div class="col-xs-4">
			<span class="option-label">도수</span>
			<div style="margin-top:10px;">
			<div style="width:48%; float:left;">
				<img class="img img-responsive" src="/sources/1do.png">
				<span class="paper-text" style="text-align:center; display:block;">1도(흑백)</span>
				<span style="font-size:13px; text-align:center; 	color:#8C8980; display:block;">“흑백 인쇄물에<br>적합해. 단, 섬세한<br>디자인의 흑백<br>출력물은 4도를<br>권장할게.”</span>
			</div>
			<div style="width:48%; float:right; ">
				<img class="img img-responsive" src="/sources/4do.png">
				<span class="paper-text" style="text-align:center; display:block;">4도</span>
				<span style="font-size:13px; text-align:center; 	color:#8C8980; display:block;">“컬러 인쇄물은<br>4도(CMYK)로<br>출력해야 해.<br>CMYK로 작업하는<br>것 잊지 말고!”</span>
			</div>
		</div>
		</div>

	</div>
	<div class="row">
		<div class="col-xs-12">
			<hr style="border-top: 2px solid #DEDDDD; margin-top: 0px; ">
		</div>
	</div>
	<div class="row" style="margin-top:0px;">
		<div class="col-xs-12">
			<span id="offer" style="font-size:16px; text-align:center; display: block;">포스터 -을 -크기의 - -으로 앞면 -로 출력하고, -으로 코팅해 주세요</span>
		</div>
	</div>

	<div class="row" style="margin-top:10px;">
		<div class="col-xs-4">
		</div>
		<div class="col-xs-4">
			<img style="height:32px; text-align:center; display:block;" src="/sources/submit_button.png">
		</div>
		<div class="col-xs-4">
		</div>
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
	$("#inside").css("top",topOfInside+"px");
	$("#inside").css("height",heightOfInside-35+"px");
	$("#inside").css("display","");
	$("#inside2").css("width",insideWidth-20+"px");
	$("#inside2").css("height",heightOfInside-70+"px");
	$("#inside2").css("margin-top","10px");
	$("#inside2").css("padding-right","20px");
	$(window).on("resize",function(){
		var leftOfInside=doc.querySelector("#lefthand").getBoundingClientRect().right;
		var rightOfInside=doc.querySelector("#righthand").getBoundingClientRect().left;
		var topOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().top;
		var heightOfInside=doc.querySelector("#backgroundWhite").getBoundingClientRect().height;
		var insideWidth=rightOfInside-leftOfInside;
		var insideLeft=leftOfInside;
		$("#inside").css("left",insideLeft+"px");
		$("#inside").css("width",insideWidth+"px");
		$("#inside").css("top",topOfInside+"px");
		$("#inside").css("height",heightOfInside-35+"px");
		$("#inside2").css("width",insideWidth-20+"px");
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



<div style="min-width:1080px">
	<object id="obj" data="/sources/search_hasooo.svg"  type="image/svg+xml"></object>
	<object style="min-width:1080px; z-index: 1000;
	" class="initial" id="obj2" data="/sources/coming_down2.svg"  type="image/svg+xml"></object>
</div>
<img id="sizecc" src="/sources/chuchun.png" style="width:80px; z-index:300; position:absolute; display:none">
<script>
	function chuchun(lists){
			var target=$("#a"+lists[2]);
			var cc_top=target.offset().top+target.height()*0.7;
			var cc_left=target.offset().left;
			$("#sizecc").css("top",cc_top+"px");
			$("#sizecc").css("left",cc_left+"px");
			$("#sizecc").css("display","");
		if ($("#sizecc").offset().top<$("#inside2").offset().top) {
			$("#sizecc").css("display","none");
		}
		if ($("#sizecc").offset().top+$("#sizecc").height()>$("#inside2").offset().top+$("#inside2").height()) {
			$("#sizecc").css("display","none");
		}
		makeSentence(hubo[ccList][number]);
	}
	var amount="-";
	var paperType="-";
	var paperThick="-g";
	var size="-";
	var coating="-";
	var side="";
	var color="";

	var number=0; //추천 리스트 상에서 한 항목 안에서의 번호

	var Iamount="";
	var IpaperType="";
	var IpaperThick="";
	var Isize="";
	var Icoating="";
	var Iside="";
	var Icolor="";
	var listing;
	var hubo=[];
	hubo[1]=[];
	hubo[2]=[];
	hubo[3]=[];
	hubo[1][1]=[0,1,2,3,2];
	hubo[1][2]=[0,2,2,3,2];
	hubo[1][3]=[3,1,2,3,2];
	hubo[2][1]=[3,2,1,5,2];
	hubo[2][2]=[3,1,2,5,2];
	hubo[2][3]=[3,2,2,5,2];
	hubo[3][1]=[1,1,1,5,2];
	hubo[3][2]=[1,1,2,5,2];
	hubo[3][3]=[0,5,2,12,2];
	var ccList;

	function changeCC(){
		if(number<3)number++;
		else number=1;
		chuchun(hubo[ccList][number]);
		makeSentence(hubo[ccList][number]);
	}
	function makeSentence(name,value,num){
		switch(hubo[ccList][number][0]){
			 case 0:
			 	coating="코팅안함";
				Icoating="";
			 break;
			 case 1:
			 	coating="단면무광";
				Icoating=1;
				break;
			case 3:
				coating="단면유광";
				Icoating=3;
				break;
		}
		switch(hubo[ccList][number][1]){
			 case 1:
				paperType="보급형 광택지";
				IpaperType=1;
			 break;
			 case 2:
				paperType="보급형 무광택지";
				IpaperType=2;
				break;
			case 5:
				paperType="약간의 무늬의 고급형 용지";
				IpaperType=5;
				break;
		}

		switch(hubo[ccList][number][3]){
			 case 3:
				paperThick="일반적인 포스터 두께";
				IpaperThick=3;
			 break;
			 case 5:
				paperThick="고급형 포스터 두께";
				IpaperThick=3;
			 break;
			 case 12:
				paperThick="일반적인 포스터 두께";
				IpaperThick=3;
			 break;
		}
		color="4도";
		Icolor=2;
		switch (name) {
			case "amount":
			amount=value;
			Iamount=num;
			break;
			case "size":
			size=value;
			Isize=num;
			break;
			case "side":
			side=value;
			Iside=num;
			break;
		}
		$("#offer").text("\"포스터 "+amount+"을 "+size+"크기의 "+paperType+" "+paperThick+"으로 "+side+"으로  "+color+" 출력하고, "+coating+"으로 코팅해 주세요\"");

		//전송버튼 활성화 및 get 전송
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
	$(function(){
		$("#changeCC").on("click",function(){
			changeCC();
		});
		$("#submit_yes").on("click",function(){
			location.href="/result/lists?goods=1&amount="+Iamount+"&paperType="+IpaperType+"&paperThick="+IpaperThick+"&size="+Isize+"&coating="+Icoating+"&side="+Iside+"&color="+Icolor;
		});
		$("#inside2").scroll(function(){
			if(number!=0){
			chuchun(hubo[ccList][number]);
		}
		});
		$( "#purpose" ).selectmenu();
		$( "#purpose" ).on( "selectmenuchange", function( event, ui ) {
			number=1;
			switch(parseInt(ui.item.value)){
				case 1:
					ccList=1;
				break;
				case 2:
					ccList=2;
				break;
				case 3:
					ccList=3;
				break;
			}
			chuchun(hubo[ccList][number]);
		 });
		$( "#amount" ).selectmenu().selectmenu( "menuWidget" ).addClass( "overflow" );
		$( "#amount" ).on( "selectmenuchange", function( event, ui ) {
			makeSentence("amount",ui.item.label,ui.item.value);
		} );
		$('[data-toggle="tooltip"]').tooltip();
});
function sizeSelect(value){
	var pos;
	var idOfSize=["a3","a2","a1","b3","b2","8j","4j","2j","g4j","g2j","gj"];
	var nameOfSize=["A3","A2","A1","B3","B2","8절","4절","2절","국4절","국2절","국절"];
	var numOfSize=[3,2,1,7,6,10,9,8,15,14,16];
	$("#selected_size_mark").remove();
	for(var i=0;i<idOfSize.length;i++){
		if(value==idOfSize[i]){
			pos=i;
			$("#"+value).after("<div id=\"selected_size_mark\" style=\"height:"+$("#a3").height()+"px\"class=\"option-selected\"></div>");
		}
	}
	makeSentence("size",nameOfSize[pos],numOfSize[pos]);
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
</script>
<style>
.option-selected{
		background: #F3C262;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 100;
    border-radius: 10px;
    opacity: 0.7;
}
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
#changeCC{
	cursor:pointer;
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
			<span class="option-label">무슨 용도야? 추천해줄게!</span>
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
			<div id="silsigan" style="border-bottom: 2px solid #f3c262; display: inline-block; width:80px; text-align:center; font-size:17px;"></div>
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
				<span class="option-label">인쇄면</span>
				<div style="margin-top: 10px; display: inline;">
					<input name="side" id="single" type="radio" onclick="sideSelect('single')" ><label style="padding-left:15px; font-weight: normal; font-size:14px; " class="option-label" for="single">단면</label>
					<input name="side" id="double" type="radio" onclick="sideSelect('double')"><label style="padding-left:15px; font-weight: normal; font-size:14px; " class="option-label" for="double">양면</label>
				</div>
			</div>
		<div class="col-xs-3">
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
						<img id="a3" src="/sources/a3.png" onclick="sizeSelect('a3')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">A3</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1 ">
					<div class="papersize">
						<img id="a2" src="/sources/a2.png" onclick="sizeSelect('a2')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">A2</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="a1" src="/sources/a1.png" onclick="sizeSelect('a1')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">A1</span>
					</div>
				</div>
			</div>
			<div class="row" style="padding:1%; margin-top:0px;">
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="b3"  src="/sources/b3.png" onclick="sizeSelect('b3')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">B3</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="b2" src="/sources/b2.png" onclick="sizeSelect('b2')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">B2</span>
					</div>
				</div>

			</div>
			<div class="row" style="padding:1%; margin-top:0px;">
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="8j" src="/sources/8j.png" onclick="sizeSelect('8j')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">8절</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="4j" src="/sources/4j.png" onclick="sizeSelect('4j')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">4절</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="2j" src="/sources/2j.png" onclick="sizeSelect('2j')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">2절</span>
					</div>
				</div>
			</div>
			<div class="row" style="padding:1%; margin-top:0px;">
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="g4j" src="/sources/g4j.png" onclick="sizeSelect('g4j')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">국4절</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="g2j" src="/sources/g2j.png" onclick="sizeSelect('g2j')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">국2절</span>
					</div>
				</div>
				<div class="col-xs-4 papersize1">
					<div class="papersize">
						<img id="gj" src="/sources/gj.png" onclick="sizeSelect('gj')" class="img img-responsive">
					</div>
					<div>
						<span class="paper-text">국전</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-5">
		</div>
		<div class="col-xs-2">
			<img id="changeCC" src="/sources/changeCC.png" class="img img-responsive">
		</div>
		<div class="col-xs-5">
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
			<img id="submit_yes" style="cursor:pointer; height:32px; margin-left: 40px; text-align:center; display:none;" src="/sources/submit_button.png">
			<img id="submit_no" style="height:32px; margin-left: 40px; text-align:center; display:block;" src="/sources/submit_no_button.png">
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
	doc.querySelector("#go1").addEventListener("click",function(){
		location.href="/search/gosoo";
	});
	doc.querySelector("#go2").addEventListener("click",function(){
		location.href="/search/joongsoo";
	});
	doc.querySelector("#go3").addEventListener("click",function(){
		location.href="/search/hasoo";
	});
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

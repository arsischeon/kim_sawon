

<div style="min-width:1080px;  ">
	<object id="obj" data="/sources/result.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px; z-index:100;" class="initial" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>
<div id="segment" style="min-width:806px; width:100%; position:absolute;" >
	<svg id="result" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1433.47 259.15">
   <defs>
      <style>.cls-1{fill:none;stroke:#66635a;stroke-miterlimit:10;stroke-width:2px;}.cls-2,.cls-9{font-size:22px;}.cls-2,.cls-3,.cls-5{fill:#66635a;}.cls-2,.cls-3,.cls-5,.cls-8,.cls-9{font-family:Noto Sans CJK KR;}.cls-3{font-size:40px;}.cls-4{fill:#bfa880;}.cls-5{font-size:25px;}.cls-6{fill:#f3c262;}.cls-7{fill:#ecb450;}.cls-8{font-size:14.74px;}.cls-8,.cls-9{fill:#fff;}</style>
   </defs>
   <title>kkkkkkk-08</title>
   <g id="dummy-3" data-name="dummy">
      <line id="sline" class="cls-1" x1="97.27" y1="209.04" x2="1335.96" y2="209.04"/>
			  <?php
				$price;
				$cnt=0;
				foreach ($resultExact->result_array() as $result): ?>
					<?php if($cnt++==0){
						$iiid=$result['id'];
						?>
      <text class="cls-2" transform="translate(312.11 123.7)">
         <? echo $result['site_name'];?>
         <tspan x="0" y="26.4"><? echo $result['site_phone'];?></tspan>
         <tspan x="0" y="52.8"><? echo "배송비: ".$result['delivery']; ?></tspan>
      </text>

      <text class="cls-3" transform="translate(312.11 75.8)"><?echo number_format($price=$result['price'])."원 (장당 가격: ".number_format($result['price']/$result['amount'])."원)";?></text>

      <circle style="fill:white;" id="logoCircle" class="cls-4" cx="170.85" cy="108.62" r="66.9"/>
   </g>
   <g id="more_results" data-name="more results">
      <text class="cls-5" style="font-size:8px;" transform="translate(1137.78 175.05)">검색결과 더보기</text>
      <polygon class="cls-6" points="1314.96 158.15 1325.46 172.34 1335.96 158.15 1314.96 158.15"/>
   </g>
   <g id="cheapest_price_banner" data-name="cheapest price banner">
      <path class="cls-7" d="M112.59,141.84A66.66,66.66,0,0,1,108,132H97.27l7.67,12.41-7.59,12.3h13.26V143.14Z"/>
      <path class="cls-7" d="M236.76,144.39L244.43,132H233.74a66.75,66.75,0,0,1-4.62,9.85l2,1.3v13.54h13.26Z"/>
      <path class="cls-6" d="M231.06,156.69c0-3.76-.06-7.23,0-10.68,0-1.56-.29-2.3-1-2.87H111.62c-0.72.56-1,1.3-1,2.87,0.09,3.45,0,6.92,0,10.68h0v11.07H231.09V156.69h0Z"/>
      <text class="cls-8" transform="translate(150.5 161.12)">최저가</text>
   </g>

   <g style="cursor:pointer;" onclick="location.href='<? echo $result['site_url'];?>'" id="site_barogagi" data-name="site barogagi">
      <rect class="cls-6" x="1137.78" y="47.15" width="198.18" height="87.6" rx="10.45" ry="10.45"/>
      <text class="cls-9" transform="translate(1206.51 86.85)">
         사이트
         <tspan x="-10.12" y="26.4">바로가기</tspan>
      </text>
   </g>
	 <?php
 			}
 			endforeach;

			?>

</svg>
<?
if(!isset($iiid)){
	echo "결과 없음";
	echo "<div id='logoImage'></div><div id='logoCircle'></div>";
}else{?>
<img id="logoImage" style="position: fixed;" class="img" src="/sources/logo/<?echo $iiid;?>.jpg">
<? } ?>
<style>
table{
	color: #66635A;
}
</style>
<?php
$flag1=0;
$flag2=0;
$count=0;
$q1=new SplQueue();
$q2=new SplQueue();
		foreach ($resultSimmilar->result_array() as $result):
			$count++;
 			if($result['price']<$price){
				if($count<7){
				$q1->enqueue($result);
			}
			}else{
				if($count<7){
				$q2->enqueue($result);
			}
			}
 		endforeach; ?>
<div id="scrollArea">
		<?
		 if(!$q1->isEmpty()) {
			 $flag1=1;
			 ?>
	<table id="result_table">
		<thead>
			<th style="font-size:15pt; text-align:left;">더 저렴하게?</th>
			<th style="font-size:10pt; text-align:left;">업체명</th>
			<th style="font-size:10pt; text-align:left;">총액</th>
			<th style="font-size:10pt; text-align:left;">장당 가격</th>
			<th style="font-size:10pt; text-align:left;">배송비</th>
			<th></th>
		</thead>
		<tbody>
			<?
		}
			 while (!$q1->isEmpty()) {
				 $resultq=$q1->dequeue();
				 ?>
			<tr>
				<td style="width:39%;font-size:10pt; text-align:left;"><b><? echo $resultq['amount']."장"; ?></b>-크기-종이재질-종이무게-도수-면-코팅</td>
				<td style="width:11%; font-size:10pt; text-align:left;"><? echo $resultq['site_name']; ?></td>
				<td style="width:12%; font-size:10pt; text-align:left;"><? echo number_format($resultq['price'])."원"; ?></td>
				<td style="width:12%; font-size:10pt; text-align:left;"><? echo number_format($resultq['price']/$resultq['amount'])."원"; ?></td>
				<td style="width:12%; font-size:10pt; text-align:left;"><? echo $resultq['delivery']; ?></td>
				<td><img onclick="location.href='<? echo $resultq['site_url']; ?>'" type="button" src="/sources/button.png" style="text-align:right; vertical-align:middle; width:80px; cursor:pointer;"></td>
			</tr>
			<? }?>

			<? if($flag1==1){ ?>
		</tbody>

	</table>
<?}?>
	<table id="result_table2">
		<thead>
			<th style="font-size:15pt; text-align:left;">이건 어때요?</th>
			<th style="font-size:10pt; text-align:left;">업체명</th>
			<th style="font-size:10pt; text-align:left;">장당 가격</th>
			<th style="font-size:10pt; text-align:left;">총액</th>
			<th style="font-size:10pt; text-align:left;">차액</th>
			<th style="font-size:10pt; text-align:left;">배송비</th>
			<th></th>
		</thead>
		<tbody>
			<?
			while (!$q2->isEmpty()) {
 			 $resultq=$q2->dequeue();
 			 ?>
 		<tr>
 			<td style="width:22%;font-size:10pt; text-align:left;"><b><? echo $resultq['amount']."장"; ?></b>으로 바꿨을 때</td>
 			<td style="width:20%; font-size:10pt; text-align:left;"><? echo $resultq['site_name']; ?></td>
				<td style="width:10%; font-size:10pt; text-align:left;"><? echo number_format($resultq['price']/$resultq['amount'])."원"; ?></td>

 			<td style="width:12%; font-size:10pt; text-align:left;"><? echo number_format($resultq['price'])."원"; ?></td>
			<td style="width:10%; font-size:10pt; text-align:left; opacity:0.6;"><? echo number_format($resultq['price']-$price)."원"; ?></td>

 			<td style="width:12%; font-size:10pt; text-align:left;"><? echo $resultq['delivery']; ?></td>
 			<td><img onclick="location.href='<? echo $resultq['site_url']; ?>'" type="button" src="/sources/button.png" style="text-align:right; vertical-align:middle; width:80px; cursor:pointer;"></td>
 		</tr>
 		<? }?>
		</tbody>
	</table>
</div>

<script>
$("td>img").css("width", "99px");
</script>


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

obj.addEventListener("load",function(){
	//마우스오버시 메뉴가 내려옴
	var doc=this.getSVGDocument();

	$("#segment").css("top",doc.querySelector("#cheapest_price_banner").getBoundingClientRect().bottom+"px");
	$("#segment").css("height",doc.querySelector("rect.cls-2").getBoundingClientRect().bottom-doc.querySelector("#cheapest_price_banner").getBoundingClientRect().bottom+"px");
	$("#segment").css("left",doc.querySelector("#cheapest_price_banner").getBoundingClientRect().left+"px");
	$("#segment").css("width",doc.querySelector("#cheapest_price_banner").getBoundingClientRect().width+"px");

	$("#result_table").css("width",document.getElementById("sline").getBoundingClientRect().width+"px");
	$("#result_table").css("margin-left",$("#sline").position().left+"px");
	$("#result_table2").css("width",document.getElementById("sline").getBoundingClientRect().width+"px");
	$("#result_table2").css("margin-left",$("#sline").position().left+"px");

	$("#logoImage").css("left",$("#logoCircle")[0].getBoundingClientRect().left+2+"px");
	$("#logoImage").css("width",$("#logoCircle")[0].getBoundingClientRect().width-4+"px");
	$("#logoImage").css("top",
	$("#logoCircle")[0].getBoundingClientRect().top
	+$("#logoCircle")[0].getBoundingClientRect().height/2
	-$("#logoImage").height()/2+"px");




	var listOr="<? echo $getData; ?>";
	var list=listOr.split(",");
	for(var i=0; i<list.length;i++){
		switch(i){
			case 0:
				size=findPos(list[i],numOfSize,nameOfSize);
			break;
			case 1:
				side=findPos(list[i],numOfSide,nameOfSide);
			break;
			case 2:
				paperType=findPos(list[i],numOfPaperType,nameOfPaperType);
			break;
			case 3:
				paperThick=findPos(list[i],numOfPaperThick,nameOfPaperThick);
			break;
			case 4:
				color=findPos(list[i],numOfColor,nameOfColor);
			break;
			case 5:
				coating=findPos(list[i],numOfCoating,nameOfCoating);
			break;
			case 6:
				amount=list[i];
			break;
		}
	}

	doc.querySelector("#sumText").innerHTML="\"포스터 "+amount+"을 "+size+"크기의 "+paperType+" "+paperThick+"으로 "+side+" "+color+"로 출력하고 , "+coating+"으로 코팅해 주세요\"";


	});
	var numOfSize=[,3,2,1,7,6,10,9,8,15,14,16];
	var nameOfSize=["","A3","A2","A1","B3","B2","8절","4절","2절","국4절","국2절","국절"];
	var nameOfColor=["1도","4도"];
	var numOfColor=[1,2];
	var nameOfSide=["단면","양면"];
	var numOfSide=[1,2];
	var numOfPaperType=[1,2,3,4,5,6];
	var nameOfPaperType=["아트지","스노우지","모조지","르느와르","랑데뷰","아르떼"];
	var numOfPaperThick=[1,2,3,4,5,6,8,9,10,11,12,13,14,15,16,17];
	var nameOfPaperThick=["100g","120g","150g","180g","200g","250g","300g","105g","80g","130g","160g","190g","210g","240g","220g","260g"];
	var numOfCoating=["",1,2,3,4];
	var nameOfCoating=["코팅안함","단면무광","양면무광","단면유광","양면유광"];

	function findPos(data,num,name){
		var pos;
		for(var i=0;i<num.length;i++){
			if(data==num[i]){pos=i;}
		}
		return name[pos];
	}

	var amount="-";
	var paperType="-";
	var paperThick="-g";
	var size="-";
	var coating="-";
	var color="-도";
	var side="-";



	$(window).on("load",function(){



	$(window).scroll(function(){
		console.log("scroll");
		$("#logoImage").css("left",$("#logoCircle")[0].getBoundingClientRect().left+2+"px");
		$("#logoImage").css("width",$("#logoCircle")[0].getBoundingClientRect().width-4+"px");
		$("#logoImage").css("top",
		$("#logoCircle")[0].getBoundingClientRect().top
		+$("#logoCircle")[0].getBoundingClientRect().height/2
		-$("#logoImage").height()/2+"px");

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

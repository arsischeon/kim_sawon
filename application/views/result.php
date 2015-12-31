

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
      <text class="cls-2" transform="translate(312.11 123.7)">
         사이트명
         <tspan x="0" y="26.4">전화번호 ww</tspan>
         <tspan x="121.17" y="26.4">w</tspan>
         <tspan x="137.83" y="26.4">.사이트주소</tspan>
         <tspan x="245.14" y="26.4">.</tspan>
         <tspan x="250.97" y="26.4">c</tspan>
         <tspan x="261.65" y="26.4">om </tspan>
         <tspan x="0" y="52.8">검색된 옵션 (</tspan>
         <tspan x="119.72" y="52.8">ex</tspan>
         <tspan x="142.52" y="52.8">. 300부-A2-아트지-150g-4도-단면-유광코팅)</tspan>
      </text>
      <text class="cls-3" transform="translate(312.11 75.8)">00,000원</text>
      <circle class="cls-4" cx="170.85" cy="108.62" r="66.9"/>
   </g>
   <g id="more_results" data-name="more results">
      <text class="cls-5" transform="translate(1137.78 175.05)">검색결과 더보기</text>
      <polygon class="cls-6" points="1314.96 158.15 1325.46 172.34 1335.96 158.15 1314.96 158.15"/>
   </g>
   <g id="cheapest_price_banner" data-name="cheapest price banner">
      <path class="cls-7" d="M112.59,141.84A66.66,66.66,0,0,1,108,132H97.27l7.67,12.41-7.59,12.3h13.26V143.14Z"/>
      <path class="cls-7" d="M236.76,144.39L244.43,132H233.74a66.75,66.75,0,0,1-4.62,9.85l2,1.3v13.54h13.26Z"/>
      <path class="cls-6" d="M231.06,156.69c0-3.76-.06-7.23,0-10.68,0-1.56-.29-2.3-1-2.87H111.62c-0.72.56-1,1.3-1,2.87,0.09,3.45,0,6.92,0,10.68h0v11.07H231.09V156.69h0Z"/>
      <text class="cls-8" transform="translate(150.5 161.12)">최저가</text>
   </g>
   <g id="site_barogagi" data-name="site barogagi">
      <rect class="cls-6" x="1137.78" y="47.15" width="198.18" height="87.6" rx="10.45" ry="10.45"/>
      <text class="cls-9" transform="translate(1206.51 86.85)">
         사이트
         <tspan x="-10.12" y="26.4">바로가기</tspan>
      </text>
   </g>
</svg>
	<table id="result_table">
		<thead>
			<th style="font-size:13pt; ">더 저렴하게?</th>
			<th style="font-size:10pt;">업체명</th>
			<th>총액</th>
			<th>장당 가격</th>
			<th>배송비</th>
			<th></th>
		</thead>
		<tbody>
			<tr>
				<td>매수-크기-종이재질-종이무게-도수-면-코팅</td>
				<td>업체명</td>
				<td>00,000원</td>
				<td>0,000원</td>
				<td>0,000원</td>
				<td></td>
			</tr>
		</tbody>

	</table>



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




 // console.log(doc.querySelector('#previous_page_arrow').getBoundingClientRect().bottom);

obj.addEventListener("load",function(){
	//마우스오버시 메뉴가 내려옴
	var doc=this.getSVGDocument();
	$("#segment").css("top",doc.querySelector("#cheapest_price_banner").getBoundingClientRect().bottom+"px");
	$("#segment").css("height",doc.querySelector("rect.cls-2").getBoundingClientRect().bottom-doc.querySelector("#cheapest_price_banner").getBoundingClientRect().bottom+"px");
	$("#segment").css("left",doc.querySelector("#cheapest_price_banner").getBoundingClientRect().left+"px");
	$("#segment").css("width",doc.querySelector("#cheapest_price_banner").getBoundingClientRect().width+"px");

	$("#result_table").css("width",document.getElementById("sline").getBoundingClientRect().width+"px");
	$("#result_table").css("margin-left",$("#sline").position().left+"px");


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

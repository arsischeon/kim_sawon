
function getRule(data) {

  var rule;

  var ss = document.styleSheets;

  for (var i = 0; i < ss.length; ++i) {

    // loop through all the rules!
    if(ss[i].cssRules!=null){
    for (var x = 0; x < ss[i].cssRules.length; ++x) {

      rule = ss[i].cssRules[x];

      if (rule.name == data || rule.selectorText=="."+data) {

        return rule;

      }

    }
}
  }

}
function closeWindowByMask() {
        $('#mask, #loadingImg').hide();
        $('#mask, #loadingImg').remove();
    }
function wrapWindowByMask() {
        //화면의 높이와 너비를 구한다.
        var maskHeight = $(document).height();
//      var maskWidth = $(document).width();
        var maskWidth = window.document.body.clientWidth;

        var mask = "<div id='mask' style='position:absolute; z-index:9000; background-color:#000000; display:none; left:0; top:0;'></div>";
        var loadingImg = '';

        loadingImg += "<div id='loadingImg' style='position:absolute; left:50%; top:40%; display:none; z-index:10000;'>";
        loadingImg += " <img src='/sources/loading.gif'/>";
        loadingImg += "</div>";

        //화면에 레이어 추가
        $('body')
            .append(mask)
            .append(loadingImg)

        //마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
        $('#mask').css({
                'width' : maskWidth
                , 'height': maskHeight
                , 'opacity' : '0.3'
        });

        //마스크 표시
        $('#mask').show();

        //로딩중 이미지 표시
        $('#loadingImg').show();
    }

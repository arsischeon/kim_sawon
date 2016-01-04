
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

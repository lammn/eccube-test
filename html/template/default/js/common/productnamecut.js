$(function(){
$(".productNameThumb").each(function(){
  var size = 16;
  var txt = $(this).text();
  var suffix = '…';
  var b = 0;
  var cutflg = 0;
  for(var i = 0; i < txt.length; i++) {
    b += txt.charCodeAt(i) <= 255 ? 0.5 : 1;
    if (b > size) {
      txt = txt.substr(0, i) + suffix;
      cutflg = 1;
      break;
    }
  }
  if(cutflg == 0){
    txt = txt+'';
  }
  $(this).html(txt);
});


  $('#info').clone().appendTo('#infoSp');



});
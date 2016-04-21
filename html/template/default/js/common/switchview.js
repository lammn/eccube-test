$(function(){
    btnPc = 'swPc';
    btnSp = 'swSp';
    btnAcvClass = 'btnAcv';
    vpPc = 'width=1024';
    vpSp = 'width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no';
 
    // ViewPort
    $('head').prepend('<meta name="viewport" content=' + ($.cookie('swView') == 1 ? vpPc : vpSp) + '>');
    setBtn='#'+(btnPc)+',#'+(btnSp); setBtnPc='#'+(btnPc); setBtnSp='#'+(btnSp);
    $(setBtn).on('click',function(){
        $.cookie('swView', $(this).attr('id') == btnPc ? 1 : 0);
        location.reload();
        return false;
    });
 
    // BtnActive
    var cookie = $.cookie('btnAcv');
    if(cookie == 'acvPc'){
        $(setBtnPc).addClass(btnAcvClass);
        $(setBtnSp).removeClass(btnAcvClass);
        $(setBtnSp).show();
    } else if(cookie == 'acvSp'){
        $(setBtnPc).removeClass(btnAcvClass);
        $(setBtnSp).addClass(btnAcvClass);
    }
    $(setBtnPc).on('click',function(){
        $.cookie('btnAcv','acvPc',{expires:7, path:'/'});
        $(setBtnSp).removeClass(btnAcvClass);
        $(this).addClass(btnAcvClass);
        $(setBtnSp).show();
    });
    $(setBtnSp).on('click',function(){
        $.cookie('btnAcv','acvSp',{expires:7, path:'/'});
        $(setBtnPc).removeClass(btnAcvClass);
        $(this).addClass(btnAcvClass);
    });
});
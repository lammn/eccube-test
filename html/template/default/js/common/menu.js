(function () {

    $(function () {

        // アクティブなメニューのラベル
        var activeLabel = null;

        // リストにマウスオーバーしたら実行
        var $menus = $('.gNav li');
        var $menuContents = $('.menu1, .menu2, .menu3, .menu4');
        $menus.on('mouseover', function (e) {
            var $menu = $(e.currentTarget);
            var label = $menu.data('menuLabel');

            // 関係のないメニューの場合は閉じる
            if (!label) {
                $menuContents.slideUp(200);
                activeLabel = null;
                return;
            }

            // アクティブなメニューでない場合はアニメーションなしで閉じる
            if (label !== activeLabel) {
                $menuContents.hide(0);
            }

            // アクティブなメニューのラベルを記録する
            activeLabel = label;
            // 該当するメニューのコンテンツを表示する
            $('.' + activeLabel).slideDown(200);
        });

        // ナビゲーション領域から外れたらアニメーションで閉じる
        var $navigation = $('nav');
        $navigation.on('mouseleave', function (e) {
            $menuContents.slideUp(200);
            activeLabel = null;
        });

        // メニューコンテンツから外れた場合もアニメーションで閉じる
        $menuContents.on('mouseleave', function (e) {
            $menuContents.slideUp(200);
            activeLabel = null;
        });

    });
})();

 

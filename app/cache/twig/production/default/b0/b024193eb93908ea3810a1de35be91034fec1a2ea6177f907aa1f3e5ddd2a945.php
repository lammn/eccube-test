<?php

/* default_frame_shop.twig */
class __TwigTemplate_6845710bb471d385f2e03faee0305054d5e964f6e3a9387c9a301e56eede6643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
";
        // line 23
        echo "<html lang=\"ja\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "shop_name", array()), "html", null, true);
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty((isset($context["subtitle"]) ? $context["subtitle"] : null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        }
        echo "</title>
";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "author", array()))) {
            // line 29
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "author", array()), "html", null, true);
            echo "\">
";
        }
        // line 31
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "description", array()))) {
            // line 32
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "description", array()), "html", null, true);
            echo "\">
";
        }
        // line 34
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "keyword", array()))) {
            // line 35
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "keyword", array()), "html", null, true);
            echo "\">
";
        }
        // line 37
        if ( !twig_test_empty($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "meta_robots", array()))) {
            // line 38
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "meta_robots", array()), "html", null, true);
            echo "\">
";
        }
        // line 40
        echo "<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no\">
<link rel=\"icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/favicon.ico\">

<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<!-- for original theme CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/cart.css\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/common/shop_page.css\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/common/shop_style.css\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/common/reset.css\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/common/jquery.bxslider.css\" type=\"text/css\" media=\"screen\">
";
        // line 51
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 52
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/jquery-1.11.3.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"><\\/script>')</script>

";
        // line 57
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Head", array())) {
            // line 58
            echo "    ";
            // line 59
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Head", array())));
            echo "
    ";
        }
        // line 63
        echo "
</head>
<body id=\"page_";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter((isset($context["body_class"]) ? $context["body_class"] : null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">


   
   <header id=\"pageTop\">
        
            ";
        // line 72
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Header", array())) {
            // line 73
            echo "                ";
            // line 74
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Header", array())));
            echo "
                ";
            // line 76
            echo "            ";
        }
        // line 77
        echo "            ";
        // line 78
        echo "            
        
    </header>

    <div id=\"contents\" class=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "theme", array()), "html", null, true);
        echo " wrapper\">

        <div id=\"contents_top\">
            ";
        // line 86
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsTop", array())) {
            // line 87
            echo "                ";
            // line 88
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsTop", array())));
            echo "
                ";
            // line 90
            echo "            ";
        }
        // line 91
        echo "            ";
        // line 92
        echo "        </div>

        <!--<div class=\"container-fluid inner\">-->
        <div class=\"inner\">
            ";
        // line 97
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideLeft", array())) {
            // line 98
            echo "                <div id=\"side_left\" class=\"side pc\">
                    ";
            // line 100
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideLeft", array())));
            echo "
                    ";
            // line 102
            echo "                </div>
            ";
        }
        // line 104
        echo "            ";
        // line 105
        echo "
            <div id=\"main\" class=\"mainContent\">
                ";
        // line 108
        echo "                ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainTop", array())) {
            // line 109
            echo "                    <div id=\"main_top\">
                        ";
            // line 110
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainTop", array())));
            echo "
                    </div>
                ";
        }
        // line 113
        echo "                ";
        // line 114
        echo "
                <div id=\"main_middle\">
                    ";
        // line 116
        $this->displayBlock('main', $context, $blocks);
        // line 117
        echo "                </div>

                ";
        // line 120
        echo "                ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainBottom", array())) {
            // line 121
            echo "                    <div id=\"main_bottom\">
                        ";
            // line 122
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainBottom", array())));
            echo "
                    </div>
                ";
        }
        // line 125
        echo "                ";
        // line 126
        echo "            </div>

            ";
        // line 129
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideRight", array())) {
            // line 130
            echo "                <div id=\"side_right\" class=\"side\">
                    ";
            // line 132
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideRight", array())));
            echo "
                    ";
            // line 134
            echo "                </div>
            ";
        }
        // line 136
        echo "            ";
        // line 137
        echo "
            ";
        // line 139
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsBottom", array())) {
            // line 140
            echo "                <div id=\"contents_bottom\">
                    ";
            // line 142
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsBottom", array())));
            echo "
                    ";
            // line 144
            echo "                </div>
            ";
        }
        // line 146
        echo "            ";
        // line 147
        echo "
        </div>

        <footer>
            ";
        // line 152
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())) {
            // line 153
            echo "                ";
            // line 154
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())));
            echo "
                ";
            // line 156
            echo "            ";
        }
        // line 157
        echo "            ";
        // line 158
        echo "
        </footer>

    </div>

    

<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script>
\$(function () {
    \$('#drawer').append(\$('.drawer_block').clone(true).children());
    \$.ajax({
        url: '";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/svg.html',
        type: 'GET',
        dataType: 'html',
    }).done(function(data){
        \$('body').prepend(data);
    }).fail(function(data){
    });
});
</script>
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/common/jquery.bxslider.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/common/scroll.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/common/menu.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/sp/menu.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/common/jquery.cookie.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/common/switchview.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/common/productnamecut.js\"></script>
<script>\$(document).ready(function(){
//メインスライド用の記述
  \$('.bxslider01').bxSlider({
  pagerCustom: '#bx-pager',
  controls:false,
  auto: true,
  });
});
 
//サムネイル
\$(document).ready(function(){
  \$('.bxslider02').bxSlider({
  pager:false,
  minSlides: 5,//１スライドに表示するサムネイルの数
  maxSlides: 5,//１スライドに表示するサムネイルの最大数
  slideWidth: 90,//サムネイルの横幅（単位はpx）
  slideMargin: 10,//サムネイル間の余白（単位はpx）
  nextSelector: '#NextIcon',//\"次へ”矢印をカスタマイズするための記述
  prevSelector: '#PrevIcon'//\"前へ”矢印をカスタマイズするための記述
      });
});
</script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
";
        // line 212
        $this->displayBlock('javascript', $context, $blocks);
        // line 214
        echo "</body>
</html>";
    }

    // line 51
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 116
    public function block_main($context, array $blocks = array())
    {
    }

    // line 212
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_frame_shop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 212,  434 => 116,  429 => 51,  424 => 214,  422 => 212,  416 => 211,  410 => 210,  384 => 187,  380 => 186,  376 => 185,  372 => 184,  368 => 183,  364 => 182,  360 => 181,  347 => 171,  337 => 166,  331 => 165,  322 => 158,  320 => 157,  317 => 156,  312 => 154,  310 => 153,  307 => 152,  301 => 147,  299 => 146,  295 => 144,  290 => 142,  287 => 140,  284 => 139,  281 => 137,  279 => 136,  275 => 134,  270 => 132,  267 => 130,  264 => 129,  260 => 126,  258 => 125,  252 => 122,  249 => 121,  246 => 120,  242 => 117,  240 => 116,  236 => 114,  234 => 113,  228 => 110,  225 => 109,  222 => 108,  218 => 105,  216 => 104,  212 => 102,  207 => 100,  204 => 98,  201 => 97,  195 => 92,  193 => 91,  190 => 90,  185 => 88,  183 => 87,  180 => 86,  174 => 82,  168 => 78,  166 => 77,  163 => 76,  158 => 74,  156 => 73,  153 => 72,  142 => 65,  138 => 63,  132 => 59,  130 => 58,  128 => 57,  121 => 54,  117 => 52,  115 => 51,  111 => 50,  107 => 49,  103 => 48,  99 => 47,  95 => 46,  88 => 44,  82 => 43,  77 => 41,  74 => 40,  68 => 38,  66 => 37,  60 => 35,  58 => 34,  52 => 32,  50 => 31,  44 => 29,  42 => 28,  31 => 27,  25 => 23,  22 => 1,);
    }
}
/* <!doctype html>*/
/* {#*/
/* This file is part of EC-CUBE*/
/* */
/* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* */
/* http://www.lockon.co.jp/*/
/* */
/* This program is free software; you can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License*/
/* as published by the Free Software Foundation; either version 2*/
/* of the License, or (at your option) any later version.*/
/* */
/* This program is distributed in the hope that it will be useful,*/
/* but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/* GNU General Public License for more details.*/
/* */
/* You should have received a copy of the GNU General Public License*/
/* along with this program; if not, write to the Free Software*/
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/* #}*/
/* <html lang="ja">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ BaseInfo.shop_name }}{% if subtitle is defined and subtitle is not empty %} / {{ subtitle }}{% elseif title is defined and title is not empty %} / {{ title }}{% endif %}</title>*/
/* {% if PageLayout.author is not empty %}*/
/*     <meta name="author" content="{{ PageLayout.author }}">*/
/* {% endif %}*/
/* {% if PageLayout.description is not empty %}*/
/*     <meta name="description" content="{{ PageLayout.description }}">*/
/* {% endif %}*/
/* {% if PageLayout.keyword is not empty %}*/
/*     <meta name="keywords" content="{{ PageLayout.keyword }}">*/
/* {% endif %}*/
/* {% if PageLayout.meta_robots is not empty %}*/
/*     <meta name="robots" content="{{ PageLayout.meta_robots }}">*/
/* {% endif %}*/
/* <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">*/
/* <link rel="icon" href="{{ app.config.front_urlpath }}/img/common/favicon.ico">*/
/* */
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/slick.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/default.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <!-- for original theme CSS -->*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath}}/css/cart.css" type="text/css" media="screen">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath}}/css/common/shop_page.css" type="text/css" media="screen">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath}}/css/common/shop_style.css" type="text/css" media="screen">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/common/reset.css" type="text/css" media="screen">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath}}/css/common/jquery.bxslider.css" type="text/css" media="screen">*/
/* {% block stylesheet %}{% endblock %}*/
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <script>window.jQuery || document.write('<script src="{{ app.config.front_urlpath }}/js/vendor/jquery-1.11.3.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"><\/script>')</script>*/
/* */
/* {# ▼Head COLUMN #}*/
/* {% if PageLayout.Head %}*/
/*     {# ▼上ナビ #}*/
/*     {{ include('block.twig', {'Blocks': PageLayout.Head}) }}*/
/*     {# ▲上ナビ #}*/
/* {% endif %}*/
/* {# ▲Head COLUMN #}*/
/* */
/* </head>*/
/* <body id="page_{{ app.request.get('_route') }}" class="{{ body_class|default('other_page') }}">*/
/* */
/* */
/*    */
/*    <header id="pageTop">*/
/*         */
/*             {# ▼HeaderInternal COLUMN #}*/
/*             {% if PageLayout.Header %}*/
/*                 {# ▼上ナビ #}*/
/*                 {{ include('block.twig', {'Blocks': PageLayout.Header}) }}*/
/*                 {# ▲上ナビ #}*/
/*             {% endif %}*/
/*             {# ▲HeaderInternal COLUMN #}*/
/*             */
/*         */
/*     </header>*/
/* */
/*     <div id="contents" class="{{ PageLayout.theme }} wrapper">*/
/* */
/*         <div id="contents_top">*/
/*             {# ▼TOP COLUMN #}*/
/*             {% if PageLayout.ContentsTop %}*/
/*                 {# ▼上ナビ #}*/
/*                 {{ include('block.twig', {'Blocks': PageLayout.ContentsTop}) }}*/
/*                 {# ▲上ナビ #}*/
/*             {% endif %}*/
/*             {# ▲TOP COLUMN #}*/
/*         </div>*/
/* */
/*         <!--<div class="container-fluid inner">-->*/
/*         <div class="inner">*/
/*             {# ▼LEFT COLUMN #}*/
/*             {% if PageLayout.SideLeft %}*/
/*                 <div id="side_left" class="side pc">*/
/*                     {# ▼左ナビ #}*/
/*                     {{ include('block.twig', {'Blocks': PageLayout.SideLeft}) }}*/
/*                     {# ▲左ナビ #}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {# ▲LEFT COLUMN #}*/
/* */
/*             <div id="main" class="mainContent">*/
/*                 {# ▼メイン上部 #}*/
/*                 {% if PageLayout.MainTop %}*/
/*                     <div id="main_top">*/
/*                         {{ include('block.twig', {'Blocks': PageLayout.MainTop}) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {# ▲メイン上部 #}*/
/* */
/*                 <div id="main_middle">*/
/*                     {% block main %}{% endblock %}*/
/*                 </div>*/
/* */
/*                 {# ▼メイン下部 #}*/
/*                 {% if PageLayout.MainBottom %}*/
/*                     <div id="main_bottom">*/
/*                         {{ include('block.twig', {'Blocks': PageLayout.MainBottom}) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {# ▲メイン下部 #}*/
/*             </div>*/
/* */
/*             {# ▼RIGHT COLUMN #}*/
/*             {% if PageLayout.SideRight %}*/
/*                 <div id="side_right" class="side">*/
/*                     {# ▼右ナビ #}*/
/*                     {{ include('block.twig', {'Blocks': PageLayout.SideRight}) }}*/
/*                     {# ▲右ナビ #}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {# ▲RIGHT COLUMN #}*/
/* */
/*             {# ▼BOTTOM COLUMN #}*/
/*             {% if PageLayout.ContentsBottom %}*/
/*                 <div id="contents_bottom">*/
/*                     {# ▼下ナビ #}*/
/*                     {{ include('block.twig', {'Blocks': PageLayout.ContentsBottom}) }}*/
/*                     {# ▲下ナビ #}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {# ▲BOTTOM COLUMN #}*/
/* */
/*         </div>*/
/* */
/*         <footer>*/
/*             {# ▼Footer COLUMN#}*/
/*             {% if PageLayout.Footer %}*/
/*                 {# ▼上ナビ #}*/
/*                 {{ include('block.twig', {'Blocks': PageLayout.Footer}) }}*/
/*                 {# ▲上ナビ #}*/
/*             {% endif %}*/
/*             {# ▲Footer COLUMN#}*/
/* */
/*         </footer>*/
/* */
/*     </div>*/
/* */
/*     */
/* */
/* <script src="{{ app.config.front_urlpath }}/js/vendor/bootstrap.custom.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.front_urlpath }}/js/vendor/slick.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script>*/
/* $(function () {*/
/*     $('#drawer').append($('.drawer_block').clone(true).children());*/
/*     $.ajax({*/
/*         url: '{{ app.config.front_urlpath }}/img/common/svg.html',*/
/*         type: 'GET',*/
/*         dataType: 'html',*/
/*     }).done(function(data){*/
/*         $('body').prepend(data);*/
/*     }).fail(function(data){*/
/*     });*/
/* });*/
/* </script>*/
/* <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* <script type="text/javascript" src="{{ app.config.front_urlpath }}/js/common/jquery.bxslider.js"></script>*/
/* <script type="text/javascript" src="{{ app.config.front_urlpath }}/js/common/scroll.js"></script>*/
/* <script type="text/javascript" src="{{ app.config.front_urlpath }}/js/common/menu.js"></script>*/
/* <script type="text/javascript" src="{{ app.config.front_urlpath }}/js/sp/menu.js"></script>*/
/* <script type="text/javascript" src="{{ app.config.front_urlpath }}/js/common/jquery.cookie.js"></script>*/
/* <script type="text/javascript" src="{{ app.config.front_urlpath }}/js/common/switchview.js"></script>*/
/* <script type="text/javascript" src="{{ app.config.front_urlpath }}/js/common/productnamecut.js"></script>*/
/* <script>$(document).ready(function(){*/
/* //メインスライド用の記述*/
/*   $('.bxslider01').bxSlider({*/
/*   pagerCustom: '#bx-pager',*/
/*   controls:false,*/
/*   auto: true,*/
/*   });*/
/* });*/
/*  */
/* //サムネイル*/
/* $(document).ready(function(){*/
/*   $('.bxslider02').bxSlider({*/
/*   pager:false,*/
/*   minSlides: 5,//１スライドに表示するサムネイルの数*/
/*   maxSlides: 5,//１スライドに表示するサムネイルの最大数*/
/*   slideWidth: 90,//サムネイルの横幅（単位はpx）*/
/*   slideMargin: 10,//サムネイル間の余白（単位はpx）*/
/*   nextSelector: '#NextIcon',//"次へ”矢印をカスタマイズするための記述*/
/*   prevSelector: '#PrevIcon'//"前へ”矢印をカスタマイズするための記述*/
/*       });*/
/* });*/
/* </script>*/
/* <script src="{{ app.config.front_urlpath }}/js/function.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.front_urlpath }}/js/eccube.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* {% block javascript %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/

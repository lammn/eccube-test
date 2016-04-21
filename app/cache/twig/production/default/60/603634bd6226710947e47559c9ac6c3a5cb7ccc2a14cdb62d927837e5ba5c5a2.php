<?php

/* default_frame.twig */
class __TwigTemplate_59e46ad9445ac006a8f839e1257d6bdef9238587aca1b7ff9a5d9775d9e1e397 extends Twig_Template
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
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/favicon.ico\">
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/slick.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/default.css?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\">
<!-- for original theme CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/common/style.css\" type=\"text/css\" media=\"screen\">
<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/css/common/page.css\" type=\"text/css\" media=\"screen\">
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
        echo "\">

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

        <div class=\"container-fluid inner\">
            ";
        // line 96
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideLeft", array())) {
            // line 97
            echo "                <div id=\"side_left\" class=\"side\">
                    ";
            // line 99
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideLeft", array())));
            echo "
                    ";
            // line 101
            echo "                </div>
            ";
        }
        // line 103
        echo "            ";
        // line 104
        echo "
            <div id=\"main\">
                ";
        // line 107
        echo "                ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainTop", array())) {
            // line 108
            echo "                    <div id=\"main_top\">
                        ";
            // line 109
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainTop", array())));
            echo "
                    </div>
                ";
        }
        // line 112
        echo "                ";
        // line 113
        echo "
                <div id=\"main_middle\">
                    ";
        // line 115
        $this->displayBlock('main', $context, $blocks);
        // line 116
        echo "                </div>

                ";
        // line 119
        echo "                ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainBottom", array())) {
            // line 120
            echo "                    <div id=\"main_bottom\">
                        ";
            // line 121
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "MainBottom", array())));
            echo "
                    </div>
                ";
        }
        // line 124
        echo "                ";
        // line 125
        echo "            </div>

            ";
        // line 128
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideRight", array())) {
            // line 129
            echo "                <div id=\"side_right\" class=\"side\">
                    ";
            // line 131
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "SideRight", array())));
            echo "
                    ";
            // line 133
            echo "                </div>
            ";
        }
        // line 135
        echo "            ";
        // line 136
        echo "
            ";
        // line 138
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsBottom", array())) {
            // line 139
            echo "                <div id=\"contents_bottom\">
                    ";
            // line 141
            echo "                    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "ContentsBottom", array())));
            echo "
                    ";
            // line 143
            echo "                </div>
            ";
        }
        // line 145
        echo "            ";
        // line 146
        echo "
        </div>

        <footer>
            ";
        // line 151
        echo "            ";
        if ($this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())) {
            // line 152
            echo "                ";
            // line 153
            echo "                ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => $this->getAttribute((isset($context["PageLayout"]) ? $context["PageLayout"] : null), "Footer", array())));
            echo "
                ";
            // line 155
            echo "            ";
        }
        // line 156
        echo "            ";
        // line 157
        echo "
        </footer>

    </div>


<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/bootstrap.custom.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/vendor/slick.min.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/function.js?v=";
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/js/eccube.js?v=";
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
";
        // line 210
        $this->displayBlock('javascript', $context, $blocks);
        // line 212
        echo "</body>
</html>";
    }

    // line 51
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 115
    public function block_main($context, array $blocks = array())
    {
    }

    // line 210
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 210,  434 => 115,  429 => 51,  424 => 212,  422 => 210,  396 => 187,  392 => 186,  388 => 185,  384 => 184,  380 => 183,  376 => 182,  372 => 181,  359 => 171,  349 => 166,  343 => 165,  337 => 164,  331 => 163,  323 => 157,  321 => 156,  318 => 155,  313 => 153,  311 => 152,  308 => 151,  302 => 146,  300 => 145,  296 => 143,  291 => 141,  288 => 139,  285 => 138,  282 => 136,  280 => 135,  276 => 133,  271 => 131,  268 => 129,  265 => 128,  261 => 125,  259 => 124,  253 => 121,  250 => 120,  247 => 119,  243 => 116,  241 => 115,  237 => 113,  235 => 112,  229 => 109,  226 => 108,  223 => 107,  219 => 104,  217 => 103,  213 => 101,  208 => 99,  205 => 97,  202 => 96,  197 => 92,  195 => 91,  192 => 90,  187 => 88,  185 => 87,  182 => 86,  176 => 82,  170 => 78,  168 => 77,  165 => 76,  160 => 74,  158 => 73,  155 => 72,  144 => 65,  140 => 63,  134 => 59,  132 => 58,  130 => 57,  123 => 54,  119 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  94 => 45,  88 => 44,  82 => 43,  78 => 42,  74 => 40,  68 => 38,  66 => 37,  60 => 35,  58 => 34,  52 => 32,  50 => 31,  44 => 29,  42 => 28,  31 => 27,  25 => 23,  22 => 1,);
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
/* */
/* <link rel="icon" href="{{ app.config.front_urlpath }}/img/common/favicon.ico">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/style.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/slick.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/default.css?v={{ constant('Eccube\\Common\\Constant::VERSION') }}">*/
/* <!-- for original theme CSS -->*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/common/style.css" type="text/css" media="screen">*/
/* <link rel="stylesheet" href="{{ app.config.front_urlpath }}/css/common/page.css" type="text/css" media="screen">*/
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
/*     <div id="contents" class="{{ PageLayout.theme }}">*/
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
/*         <div class="container-fluid inner">*/
/*             {# ▼LEFT COLUMN #}*/
/*             {% if PageLayout.SideLeft %}*/
/*                 <div id="side_left" class="side">*/
/*                     {# ▼左ナビ #}*/
/*                     {{ include('block.twig', {'Blocks': PageLayout.SideLeft}) }}*/
/*                     {# ▲左ナビ #}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {# ▲LEFT COLUMN #}*/
/* */
/*             <div id="main">*/
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
/* */
/* <script src="{{ app.config.front_urlpath }}/js/vendor/bootstrap.custom.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.front_urlpath }}/js/vendor/slick.min.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.front_urlpath }}/js/function.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
/* <script src="{{ app.config.front_urlpath }}/js/eccube.js?v={{ constant('Eccube\\Common\\Constant::VERSION') }}"></script>*/
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
/* {% block javascript %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/

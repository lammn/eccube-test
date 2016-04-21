<?php

/* __string_template__f401a07863558235f528e302f62de9c489fa1375f3aaf8419064de9aba6db674 */
class __TwigTemplate_6299a0306502a6734b17467eeb8948cb23d18ad5f60d9e2d092ca1ba1fc946c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame_shop.twig", "__string_template__f401a07863558235f528e302f62de9c489fa1375f3aaf8419064de9aba6db674", 22);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame_shop.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["body_class"] = "product_page";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "
    <div class=\"mainContent\">
        ";
        // line 44
        echo "
        <!-- ▼item_detail▼ -->
        <div class=\"product_cont1 clearfix\">
            <div class=\"page_sTit2 gramond\">
                <h2>";
        // line 48
        echo (isset($context["product_name"]) ? $context["product_name"] : null);
        echo "</h2>
            </div>
            <div id=\"item_detail\">
                <div id=\"detail_wrap\">
                    <!--★画像★-->
                    <div class=\"product_pics\">
                        <div class=\"product_pics_main\"><img></div>
                        <div id=\"detail_image_box__slides\" class=\"product_pics_bot clearfix\">
                            ";
        // line 56
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductImage", array())) > 0)) {
            // line 57
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "ProductImage", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
                // line 58
                echo "                                    <div id=\"detail_image_box__item--";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" class=\"product_pics_thm\"><img
                                                src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct($context["ProductImage"]), "html", null, true);
                echo "\"/>
                                    </div>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                            ";
        } else {
            // line 63
            echo "                                <div id=\"detail_image_box__item\" class=\"product_pics_thm\"><img
                                            src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "image_save_urlpath", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getNoImageProduct(""), "html", null, true);
            echo "\"/></div>
                            ";
        }
        // line 66
        echo "                        </div>
                    </div>


                    <div class=\"product_cont1_R alpha\">
                        <div class=\"product_cont1_R_cont clearfix\">
                            <!--★商品名★-->

                            <div class=\"product_cont1_h\">
                                <p>NAME:</p>
                            </div>
                            <div class=\"product_cont1_d\">
                                <p>";
        // line 78
        echo (isset($context["product_name"]) ? $context["product_name"] : null);
        echo "</p>
                            </div>

                        </div>
                        <!--
                    ";
        // line 83
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "hasProductClass", array())) {
            // line 84
            if (( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())) && ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array())))) {
                // line 85
                echo "                        <p id=\"detail_description_box__class_normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            } elseif (( !(null === $this->getAttribute(            // line 86
(isset($context["Product"]) ? $context["Product"] : null), "getPrice01Min", array())) &&  !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array())))) {
                // line 87
                echo "                        <p id=\"detail_description_box__class_normal_range_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> ～ <span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMax", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 89
            echo "                    ";
        } else {
            // line 90
            if ( !(null === $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01Max", array()))) {
                // line 91
                echo "                        <p id=\"detail_description_box__normal_price\" class=\"normal_price\"> 通常価格：<span class=\"price01_default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice01IncTaxMin", array())), "html", null, true);
                echo "</span> <span class=\"small\">税込</span></p>
                        ";
            }
            // line 93
            echo "                    ";
        }
        // line 94
        echo "-->

                        <!--★販売価格★-->
                        <div class=\"product_cont1_R_cont clearfix\">
                            <div class=\"product_cont1_h\">
                                <p>PRICE:</p>
                            </div>
                            <div class=\"product_cont1_d\">
                                ";
        // line 102
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "hasProductClass", array())) {
            // line 103
            if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Min", array()) == $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02Max", array()))) {
                // line 104
                echo "                                        <p id=\"detail_description_box__class_sale_price\" class=\"sale_price\"><span
                                                    class=\"price02_default\">";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span>
                                            <span class=\"small\">(税込)</span></p>
                                    ";
            } else {
                // line 108
                echo "                                        <p id=\"detail_description_box__class_range_sale_price\" class=\"sale_price\"><span
                                                    class=\"price02_default\">";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
                echo "</span>
                                            ～
                                            <span class=\"price02_default\">";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMax", array())), "html", null, true);
                echo "</span>
                                            <span class=\"small\">(税込)</span></p>
                                    ";
            }
            // line 114
            echo "                                ";
        } else {
            // line 115
            echo "<p id=\"detail_description_box__sale_price\" class=\"sale_price\"><span
                                                class=\"price02_default\">";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getPriceFilter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "getPrice02IncTaxMin", array())), "html", null, true);
            echo "</span>
                                        <span class=\"small\">(税込)</span></p>
                                ";
        }
        // line 119
        echo "</div>
                        </div>

                        <!--★商品説明★-->
                        <div class=\"product_cont1_R_cont clearfix\">
                            <p id=\"detail_not_stock_box__description_detail\"
                               class=\"product_cont1_text\">";
        // line 125
        echo nl2br($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "description_detail", array()));
        echo "</p>
                        </div>
                        <div class=\"product_cont1_R_cont clearfix\">
                            <form action=\"?\" method=\"post\" id=\"form1\" name=\"form1\">
                                <!--▼買い物かご-->
                                <div id=\"detail_cart_box\" class=\"cart_area\">
                                    ";
        // line 131
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "stock_find", array())) {
            // line 132
            echo "
                                        ";
            // line 134
            echo "                                        ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array(), "any", true, true)) {
                // line 135
                echo "                                            <ul id=\"detail_cart_box__cart_class_category_id\" class=\"classcategory_list\">
                                                ";
                // line 137
                echo "                                                <li>
                                                    ";
                // line 138
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'widget');
                echo "
                                                    ";
                // line 139
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id1", array()), 'errors');
                echo "
                                                </li>
                                                ";
                // line 142
                echo "                                                ";
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
                    // line 143
                    echo "                                                    <li>
                                                        ";
                    // line 144
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'widget');
                    echo "
                                                        ";
                    // line 145
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), 'errors');
                    echo "
                                                    </li>
                                                ";
                }
                // line 148
                echo "                                            </ul>
                                        ";
            }
            // line 150
            echo "
                                        ";
            // line 152
            echo "                                        <dl id=\"detail_cart_box__cart_quantity\" class=\"quantity\">
                                            <dt>数量</dt>
                                            <dd>
                                                ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantity", array()), 'widget');
            echo "
                                                ";
            // line 156
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "quantity", array()), 'errors');
            echo "
                                            </dd>
                                        </dl>

                                        <div class=\"extra-form\">
                                            ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 162
                echo "                                                ";
                if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                    // line 163
                    echo "                                                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                                ";
                }
                // line 165
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "                                        </div>

                                        ";
            // line 169
            echo "

                                        <div id=\"detail_cart_box__button_area\"
                                             class=\"btn_area product_cont1_R_cont_btns product_cont1_cont_btns\">
                                            <ul id=\"detail_cart_box__insert_button\" class=\"\">
                                                <li class=\"\">
                                                    <button type=\"submit\" id=\"cart\" class=\"buyBtn1\"></button>
                                                </li>
                                            </ul>
                                            ";
            // line 178
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_favorite_product", array()) == 1)) {
                // line 179
                echo "                                                <ul id=\"detail_cart_box__favorite_button\" class=\"\">
                                                    ";
                // line 180
                if (((isset($context["is_favorite"]) ? $context["is_favorite"] : null) == false)) {
                    // line 181
                    echo "                                                        <li class=\"\">
                                                            <button type=\"submit\" id=\"favorite\"
                                                                    class=\"likeBtn1\"></button>
                                                        </li>
                                                    ";
                } else {
                    // line 186
                    echo "                                                        <li class=\"\">お気に入りに追加済みです</li>
                                                    ";
                }
                // line 188
                echo "                                                </ul>
                                            ";
            }
            // line 190
            echo "                                        </div>
                                    ";
        } else {
            // line 192
            echo "                                        ";
            // line 193
            echo "                                        <div id=\"detail_cart_box__button_area\" class=\"btn_area\">
                                            <ul class=\"row\">
                                                <li class=\"\"><p>ただいま品切れ中です</p></li>
                                                    ";
            // line 196
            if (((isset($context["is_product_request"]) ? $context["is_product_request"] : null) == false)) {
                // line 197
                echo "                                                <li class=\"\">
                                                    <button type=\"submit\" id=\"item_request\"
                                                            class=\"\">再入荷リクエストはこちら</button>
                                                </li>
                                                ";
            } else {
                // line 202
                echo "                                                    <li class=\"\" style=\"color: #1E347B; font-weight: bold;\">再入荷をリクエストしました</li>
                                                ";
            }
            // line 204
            echo "
                                            </ul>
                                        </div>
                                    ";
        }
        // line 208
        echo "
                                    <!--▲買い物かご-->
                                    ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                            </form>
                        </div>
                    </div>


                    <div class=\"product_cont1_R_cont clearfix\">
                        <!--▼商品コード-->
                        <p id=\"detail_description_box__item_range_code\" class=\"item_code\">商品コード： <span
                                    id=\"item_code_default\">
                        ";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()), "html", null, true);
        echo "
                                ";
        // line 221
        if (($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_min", array()) != $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()))) {
            echo " ～ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "code_max", array()), "html", null, true);
        }
        // line 222
        echo "                        </span></p>
                        <!--▲商品コード-->
                    </div>
                </div>


                <!--詳細ここまで-->
            </div>

            ";
        // line 232
        echo "            ";
        if ($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array())) {
            // line 233
            echo "                <div id=\"sub_area\" class=\"row\">
                    <div class=\"col-sm-10 col-sm-offset-1\">
                        <div id=\"detail_free_box__freearea\"
                             class=\"freearea\">";
            // line 236
            echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "freearea", array())));
            echo "</div>
                    </div>
                </div>
            ";
        }
        // line 240
        echo "        </div>
        <!-- ▲item_detail▲ -->
    </div>
    </div>
";
    }

    // line 248
    public function block_javascript($context, array $blocks = array())
    {
        // line 249
        echo "    <script>
        eccube.classCategories = ";
        // line 250
        echo twig_jsonencode_filter($this->getAttribute((isset($context["Product"]) ? $context["Product"] : null), "class_categories", array()));
        echo ";

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        ";
        // line 261
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array(), "any", true, true)) {
            // line 262
            echo "        fnSetClassCategories(
                document.form1, ";
            // line 263
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classcategory_id2", array()), "vars", array()), "value", array()));
            echo "
        );
        ";
        }
        // line 266
        echo "    </script>

    <script>
        \$(function () {
            /* \$('.carousel').slick({
             infinite: false,
             speed: 300,
             prevArrow:'<button type=\"button\" class=\"slick-prev\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
             nextArrow:'<button type=\"button\" class=\"slick-next\"><span class=\"angle-circle\"><svg class=\"cb cb-angle-right\"><use xlink:href=\"#cb-angle-right\" /></svg></span></button>',
             slidesToShow: 4,
             slidesToScroll: 4,
             responsive: [
             {
             breakpoint: 768,
             settings: {
             slidesToShow: 3,
             slidesToScroll: 3
             }
             }
             ]
             });*/

            /**  \$('.slides').slick({
        dots: true,
        arrows: false,
        speed: 300,
        customPaging: function(slider, i) {
            return '<button class=\"thumbnail\">' + \$(slider.\$slides[i]).find('img').prop('outerHTML') + '</button>';
        }
    }); **/

            \$('#favorite').click(function () {
                \$('#mode').val('add_favorite');
            });

            \$('#item_request').click(function () {
                \$('#mode').val('item_request');
            });


            \$('.product_pics_main img').attr('src', \$('.product_pics_thm').children('img').eq(0).attr('src'));

            \$('.product_pics_thm img').click(function () {
                \$('.product_pics_main img').attr('src', \$(this).attr('src'));
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "__string_template__f401a07863558235f528e302f62de9c489fa1375f3aaf8419064de9aba6db674";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 266,  468 => 263,  465 => 262,  463 => 261,  449 => 250,  446 => 249,  443 => 248,  435 => 240,  428 => 236,  423 => 233,  420 => 232,  409 => 222,  404 => 221,  400 => 220,  387 => 210,  383 => 208,  377 => 204,  373 => 202,  366 => 197,  364 => 196,  359 => 193,  357 => 192,  353 => 190,  349 => 188,  345 => 186,  338 => 181,  336 => 180,  333 => 179,  331 => 178,  320 => 169,  316 => 166,  310 => 165,  304 => 163,  301 => 162,  297 => 161,  289 => 156,  285 => 155,  280 => 152,  277 => 150,  273 => 148,  267 => 145,  263 => 144,  260 => 143,  257 => 142,  252 => 139,  248 => 138,  245 => 137,  242 => 135,  239 => 134,  236 => 132,  234 => 131,  225 => 125,  217 => 119,  211 => 116,  208 => 115,  205 => 114,  199 => 111,  194 => 109,  191 => 108,  185 => 105,  182 => 104,  180 => 103,  178 => 102,  168 => 94,  165 => 93,  159 => 91,  157 => 90,  154 => 89,  146 => 87,  144 => 86,  139 => 85,  137 => 84,  135 => 83,  127 => 78,  113 => 66,  106 => 64,  103 => 63,  100 => 62,  81 => 59,  76 => 58,  58 => 57,  56 => 56,  45 => 48,  39 => 44,  35 => 29,  32 => 28,  28 => 22,  26 => 24,  11 => 22,);
    }
}
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
/* {% extends 'default_frame_shop.twig' %}*/
/* */
/* {% set body_class = 'product_page' %}*/
/* */
/* */
/* */
/* {% block main %}*/
/* */
/*     <div class="mainContent">*/
/*         {# todo ブロック化}*/
/* */
/*         <div id="topicpath" class="row">*/
/*             {% for ProductCategory in Product.ProductCategories %}*/
/*             <ol>*/
/*                 {% for Category in ProductCategory.Category.path %}*/
/*                     <li><a href="{{ url('product_list') }}?category_id={{ Category.id }}">{{ Category.name }}</a></li>*/
/*                 {% endfor %}*/
/*                 <li>{{ Product.name }}</li>*/
/*             </ol>*/
/*             {% endfor %}*/
/*         </div>*/
/*         #}*/
/* */
/*         <!-- ▼item_detail▼ -->*/
/*         <div class="product_cont1 clearfix">*/
/*             <div class="page_sTit2 gramond">*/
/*                 <h2>{{ product_name|raw }}</h2>*/
/*             </div>*/
/*             <div id="item_detail">*/
/*                 <div id="detail_wrap">*/
/*                     <!--★画像★-->*/
/*                     <div class="product_pics">*/
/*                         <div class="product_pics_main"><img></div>*/
/*                         <div id="detail_image_box__slides" class="product_pics_bot clearfix">*/
/*                             {% if Product.ProductImage|length > 0 %}*/
/*                                 {% for ProductImage in Product.ProductImage %}*/
/*                                     <div id="detail_image_box__item--{{ loop.index }}" class="product_pics_thm"><img*/
/*                                                 src="{{ app.config.image_save_urlpath }}/{{ ProductImage|no_image_product }}"/>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             {% else %}*/
/*                                 <div id="detail_image_box__item" class="product_pics_thm"><img*/
/*                                             src="{{ app.config.image_save_urlpath }}/{{ ''|no_image_product }}"/></div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="product_cont1_R alpha">*/
/*                         <div class="product_cont1_R_cont clearfix">*/
/*                             <!--★商品名★-->*/
/* */
/*                             <div class="product_cont1_h">*/
/*                                 <p>NAME:</p>*/
/*                             </div>*/
/*                             <div class="product_cont1_d">*/
/*                                 <p>{{ product_name|raw }}</p>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <!--*/
/*                     {% if Product.hasProductClass -%}*/
/*                         {% if Product.getPrice01Min is not null and Product.getPrice01Min == Product.getPrice01Max %}*/
/*                         <p id="detail_description_box__class_normal_price" class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                         {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}*/
/*                         <p id="detail_description_box__class_normal_range_price" class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> ～ <span class="price01_default">{{ Product.getPrice01IncTaxMax|price }}</span> <span class="small">税込</span></p>*/
/*                         {% endif %}*/
/*                     {% else -%}*/
/*                         {% if Product.getPrice01Max is not null %}*/
/*                         <p id="detail_description_box__normal_price" class="normal_price"> 通常価格：<span class="price01_default">{{ Product.getPrice01IncTaxMin|price }}</span> <span class="small">税込</span></p>*/
/*                         {% endif %}*/
/*                     {% endif -%}*/
/* -->*/
/* */
/*                         <!--★販売価格★-->*/
/*                         <div class="product_cont1_R_cont clearfix">*/
/*                             <div class="product_cont1_h">*/
/*                                 <p>PRICE:</p>*/
/*                             </div>*/
/*                             <div class="product_cont1_d">*/
/*                                 {% if Product.hasProductClass -%}*/
/*                                     {% if Product.getPrice02Min == Product.getPrice02Max %}*/
/*                                         <p id="detail_description_box__class_sale_price" class="sale_price"><span*/
/*                                                     class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span>*/
/*                                             <span class="small">(税込)</span></p>*/
/*                                     {% else %}*/
/*                                         <p id="detail_description_box__class_range_sale_price" class="sale_price"><span*/
/*                                                     class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span>*/
/*                                             ～*/
/*                                             <span class="price02_default">{{ Product.getPrice02IncTaxMax|price }}</span>*/
/*                                             <span class="small">(税込)</span></p>*/
/*                                     {% endif %}*/
/*                                 {% else -%}*/
/*                                     <p id="detail_description_box__sale_price" class="sale_price"><span*/
/*                                                 class="price02_default">{{ Product.getPrice02IncTaxMin|price }}</span>*/
/*                                         <span class="small">(税込)</span></p>*/
/*                                 {% endif -%}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <!--★商品説明★-->*/
/*                         <div class="product_cont1_R_cont clearfix">*/
/*                             <p id="detail_not_stock_box__description_detail"*/
/*                                class="product_cont1_text">{{ Product.description_detail|raw|nl2br }}</p>*/
/*                         </div>*/
/*                         <div class="product_cont1_R_cont clearfix">*/
/*                             <form action="?" method="post" id="form1" name="form1">*/
/*                                 <!--▼買い物かご-->*/
/*                                 <div id="detail_cart_box" class="cart_area">*/
/*                                     {% if Product.stock_find %}*/
/* */
/*                                         {# 規格 #}*/
/*                                         {% if form.classcategory_id1 is defined %}*/
/*                                             <ul id="detail_cart_box__cart_class_category_id" class="classcategory_list">*/
/*                                                 {# 規格1 #}*/
/*                                                 <li>*/
/*                                                     {{ form_widget(form.classcategory_id1) }}*/
/*                                                     {{ form_errors(form.classcategory_id1) }}*/
/*                                                 </li>*/
/*                                                 {# 規格2 #}*/
/*                                                 {% if form.classcategory_id2 is defined %}*/
/*                                                     <li>*/
/*                                                         {{ form_widget(form.classcategory_id2) }}*/
/*                                                         {{ form_errors(form.classcategory_id2) }}*/
/*                                                     </li>*/
/*                                                 {% endif %}*/
/*                                             </ul>*/
/*                                         {% endif %}*/
/* */
/*                                         {# 数量 #}*/
/*                                         <dl id="detail_cart_box__cart_quantity" class="quantity">*/
/*                                             <dt>数量</dt>*/
/*                                             <dd>*/
/*                                                 {{ form_widget(form.quantity) }}*/
/*                                                 {{ form_errors(form.quantity) }}*/
/*                                             </dd>*/
/*                                         </dl>*/
/* */
/*                                         <div class="extra-form">*/
/*                                             {% for f in form.getIterator %}*/
/*                                                 {% if f.vars.name matches '[^plg*]' %}*/
/*                                                     {{ form_row(f) }}*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/* */
/*                                         {# カートボタン #}*/
/* */
/* */
/*                                         <div id="detail_cart_box__button_area"*/
/*                                              class="btn_area product_cont1_R_cont_btns product_cont1_cont_btns">*/
/*                                             <ul id="detail_cart_box__insert_button" class="">*/
/*                                                 <li class="">*/
/*                                                     <button type="submit" id="cart" class="buyBtn1"></button>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                             {% if BaseInfo.option_favorite_product == 1 %}*/
/*                                                 <ul id="detail_cart_box__favorite_button" class="">*/
/*                                                     {% if is_favorite == false %}*/
/*                                                         <li class="">*/
/*                                                             <button type="submit" id="favorite"*/
/*                                                                     class="likeBtn1"></button>*/
/*                                                         </li>*/
/*                                                     {% else %}*/
/*                                                         <li class="">お気に入りに追加済みです</li>*/
/*                                                     {% endif %}*/
/*                                                 </ul>*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                     {% else %}*/
/*                                         {# 在庫がない場合は品切れボタンのみ表示 #}*/
/*                                         <div id="detail_cart_box__button_area" class="btn_area">*/
/*                                             <ul class="row">*/
/*                                                 <li class=""><p>ただいま品切れ中です</p></li>*/
/*                                                     {% if is_product_request == false %}*/
/*                                                 <li class="">*/
/*                                                     <button type="submit" id="item_request"*/
/*                                                             class="">再入荷リクエストはこちら</button>*/
/*                                                 </li>*/
/*                                                 {% else %}*/
/*                                                     <li class="" style="color: #1E347B; font-weight: bold;">再入荷をリクエストしました</li>*/
/*                                                 {% endif %}*/
/* */
/*                                             </ul>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/* */
/*                                     <!--▲買い物かご-->*/
/*                                     {{ form_rest(form) }}*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="product_cont1_R_cont clearfix">*/
/*                         <!--▼商品コード-->*/
/*                         <p id="detail_description_box__item_range_code" class="item_code">商品コード： <span*/
/*                                     id="item_code_default">*/
/*                         {{ Product.code_min }}*/
/*                                 {% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}{% endif %}*/
/*                         </span></p>*/
/*                         <!--▲商品コード-->*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <!--詳細ここまで-->*/
/*             </div>*/
/* */
/*             {# フリーエリア #}*/
/*             {% if Product.freearea %}*/
/*                 <div id="sub_area" class="row">*/
/*                     <div class="col-sm-10 col-sm-offset-1">*/
/*                         <div id="detail_free_box__freearea"*/
/*                              class="freearea">{{ include(template_from_string(Product.freearea)) }}</div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         <!-- ▲item_detail▲ -->*/
/*     </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascript %}*/
/*     <script>*/
/*         eccube.classCategories = {{ Product.class_categories|json_encode|raw }};*/
/* */
/*         // 規格2に選択肢を割り当てる。*/
/*         function fnSetClassCategories(form, classcat_id2_selected) {*/
/*             var $form = $(form);*/
/*             var product_id = $form.find('input[name=product_id]').val();*/
/*             var $sele1 = $form.find('select[name=classcategory_id1]');*/
/*             var $sele2 = $form.find('select[name=classcategory_id2]');*/
/*             eccube.setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);*/
/*         }*/
/* */
/*         {% if form.classcategory_id2 is defined %}*/
/*         fnSetClassCategories(*/
/*                 document.form1, {{ form.classcategory_id2.vars.value|json_encode|raw }}*/
/*         );*/
/*         {% endif %}*/
/*     </script>*/
/* */
/*     <script>*/
/*         $(function () {*/
/*             /* $('.carousel').slick({*/
/*              infinite: false,*/
/*              speed: 300,*/
/*              prevArrow:'<button type="button" class="slick-prev"><span class="angle-circle"><svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right" /></svg></span></button>',*/
/*              nextArrow:'<button type="button" class="slick-next"><span class="angle-circle"><svg class="cb cb-angle-right"><use xlink:href="#cb-angle-right" /></svg></span></button>',*/
/*              slidesToShow: 4,*/
/*              slidesToScroll: 4,*/
/*              responsive: [*/
/*              {*/
/*              breakpoint: 768,*/
/*              settings: {*/
/*              slidesToShow: 3,*/
/*              slidesToScroll: 3*/
/*              }*/
/*              }*/
/*              ]*/
/*              });*//* */
/* */
/*             /**  $('.slides').slick({*/
/*         dots: true,*/
/*         arrows: false,*/
/*         speed: 300,*/
/*         customPaging: function(slider, i) {*/
/*             return '<button class="thumbnail">' + $(slider.$slides[i]).find('img').prop('outerHTML') + '</button>';*/
/*         }*/
/*     }); **//* */
/* */
/*             $('#favorite').click(function () {*/
/*                 $('#mode').val('add_favorite');*/
/*             });*/
/* */
/*             $('#item_request').click(function () {*/
/*                 $('#mode').val('item_request');*/
/*             });*/
/* */
/* */
/*             $('.product_pics_main img').attr('src', $('.product_pics_thm').children('img').eq(0).attr('src'));*/
/* */
/*             $('.product_pics_thm img').click(function () {*/
/*                 $('.product_pics_main img').attr('src', $(this).attr('src'));*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/

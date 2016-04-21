<?php

/* __string_template__c5b3166497599d21471ff996d1ef2a01c84ff8a7a6609b28c69267707484395e */
class __TwigTemplate_13a915c38568447706bfbe2ea653a27a34019751c847d6223aba563f45dbe711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"drawer_block pc header_bottom_area\">
    <div id=\"search\" class=\"searchBox\">
        <form method=\"get\" id=\"searchform1\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("product_list");
        echo "\">

                <div class=\"input_search clearfix\">
                    <input name=\"name\" id=\"keywords1\" value=\"\" type=\"text\">
                    <input type=\"image\" id=\"searchBtn1\" class=\"bt_search\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "front_urlpath", array()), "html", null, true);
        echo "/img/common/ser_btn.png\"></inout>

            </div>
            <div class=\"extra-form\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 33
            echo "                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 34
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                        ";
                // line 35
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                        ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                    ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__c5b3166497599d21471ff996d1ef2a01c84ff8a7a6609b28c69267707484395e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 39,  58 => 38,  53 => 36,  49 => 35,  44 => 34,  41 => 33,  37 => 32,  30 => 28,  23 => 24,  19 => 22,);
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
/* <div class="drawer_block pc header_bottom_area">*/
/*     <div id="search" class="searchBox">*/
/*         <form method="get" id="searchform1" action="{{ path('product_list') }}">*/
/* */
/*                 <div class="input_search clearfix">*/
/*                     <input name="name" id="keywords1" value="" type="text">*/
/*                     <input type="image" id="searchBtn1" class="bt_search" src="{{ app.config.front_urlpath }}/img/common/ser_btn.png"></inout>*/
/* */
/*             </div>*/
/*             <div class="extra-form">*/
/*                 {% for f in form.getIterator %}*/
/*                     {% if f.vars.name matches '[^plg*]' %}*/
/*                         {{ form_label(f) }}*/
/*                         {{ form_widget(f) }}*/
/*                         {{ form_errors(f) }}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/

<?php

/* __string_template__54d30d9007816a93fec97d8200dc14aadfa4aec952b842ca2f235d74626f665e */
class __TwigTemplate_44f94371bf402bf986d7c81392b0f5bc15c1a32be8d93dcaed32dbc3e8e792ad extends Twig_Template
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
        $__internal_3857c35a1d691f3c099cfd691a5a9a0a08f7ea68384043843f19203fcd7bab3a = $this->env->getExtension("native_profiler");
        $__internal_3857c35a1d691f3c099cfd691a5a9a0a08f7ea68384043843f19203fcd7bab3a->enter($__internal_3857c35a1d691f3c099cfd691a5a9a0a08f7ea68384043843f19203fcd7bab3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__54d30d9007816a93fec97d8200dc14aadfa4aec952b842ca2f235d74626f665e"));

        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 23
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getUrl("mypage");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>マイページ
                </a>
            </li>
            ";
            // line 30
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : $this->getContext($context, "BaseInfo")), "option_favorite_product", array()) == 1)) {
                // line 31
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("mypage_favorite");
                echo "\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 33
            echo "            <li>
                <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getUrl("logout");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログアウト
                </a>
            </li>
        </ul>
    </div>
";
        } else {
            // line 41
            echo "    <div id=\"member\" class=\"member drawer_block pc\">
        <ul class=\"member_link\">
            <li>
                <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getUrl("entry");
            echo "\">
                    <svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg>新規会員登録
                </a>
            </li>
            ";
            // line 48
            if (($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : $this->getContext($context, "BaseInfo")), "option_favorite_product", array()) == 1)) {
                // line 49
                echo "                <li><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("mypage_favorite");
                echo "\"><svg class=\"cb cb-heart-circle\"><use xlink:href=\"#cb-heart-circle\"></use></svg>お気に入り</a></li>
            ";
            }
            // line 51
            echo "            <li>
                <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getUrl("mypage_login");
            echo "\">
                    <svg class=\"cb cb-lock-circle\"><use xlink:href=\"#cb-lock-circle\" /></svg>ログイン
                </a>
            </li>
        </ul>
    </div>
";
        }
        
        $__internal_3857c35a1d691f3c099cfd691a5a9a0a08f7ea68384043843f19203fcd7bab3a->leave($__internal_3857c35a1d691f3c099cfd691a5a9a0a08f7ea68384043843f19203fcd7bab3a_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__54d30d9007816a93fec97d8200dc14aadfa4aec952b842ca2f235d74626f665e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 52,  77 => 51,  71 => 49,  69 => 48,  62 => 44,  57 => 41,  47 => 34,  44 => 33,  38 => 31,  36 => 30,  29 => 26,  24 => 23,  22 => 22,);
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
/* {% if is_granted('ROLE_USER') %}*/
/*     <div id="member" class="member drawer_block pc">*/
/*         <ul class="member_link">*/
/*             <li>*/
/*                 <a href="{{ url('mypage') }}">*/
/*                     <svg class="cb cb-user-circle"><use xlink:href="#cb-user-circle" /></svg>マイページ*/
/*                 </a>*/
/*             </li>*/
/*             {% if BaseInfo.option_favorite_product == 1 %}*/
/*                 <li><a href="{{ url('mypage_favorite') }}"><svg class="cb cb-heart-circle"><use xlink:href="#cb-heart-circle"></use></svg>お気に入り</a></li>*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a href="{{ url('logout') }}">*/
/*                     <svg class="cb cb-lock-circle"><use xlink:href="#cb-lock-circle" /></svg>ログアウト*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% else %}*/
/*     <div id="member" class="member drawer_block pc">*/
/*         <ul class="member_link">*/
/*             <li>*/
/*                 <a href="{{ url('entry') }}">*/
/*                     <svg class="cb cb-user-circle"><use xlink:href="#cb-user-circle" /></svg>新規会員登録*/
/*                 </a>*/
/*             </li>*/
/*             {% if BaseInfo.option_favorite_product == 1 %}*/
/*                 <li><a href="{{ url('mypage_favorite') }}"><svg class="cb cb-heart-circle"><use xlink:href="#cb-heart-circle"></use></svg>お気に入り</a></li>*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a href="{{ url('mypage_login') }}">*/
/*                     <svg class="cb cb-lock-circle"><use xlink:href="#cb-lock-circle" /></svg>ログイン*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/

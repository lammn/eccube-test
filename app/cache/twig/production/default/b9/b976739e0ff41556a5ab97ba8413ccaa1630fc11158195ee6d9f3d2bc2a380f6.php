<?php

/* Block/logo.twig */
class __TwigTemplate_0a50c22a2e022f80ed928c4f8bdc95d251ca85a81252c416df7df765f99bf2a3 extends Twig_Template
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
        echo "             <div class=\"header_logo_area\">

                <h1 class=\"header_logo\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\"><img src = \"http://la-terra.co.jp/test_latia/common/images/logo.png\" /></a>official site</h1>
            </div>";
    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  19 => 22,);
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
/*              <div class="header_logo_area">*/
/* */
/*                 <h1 class="header_logo"><a href="{{ url('homepage') }}"><img src = "http://la-terra.co.jp/test_latia/common/images/logo.png" /></a>official site</h1>*/
/*             </div>*/

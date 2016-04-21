<?php

/* Block/logo.twig */
class __TwigTemplate_3d9e6b97c48a03a6799bf7ef39742c504c887e1757c2f3e6fe791b7cc94a4e2f extends Twig_Template
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
        $__internal_8a6ba295dc6313f72571cc28ed4378c4cc2fd8dd42b1f1098adce2d0b967fb00 = $this->env->getExtension("native_profiler");
        $__internal_8a6ba295dc6313f72571cc28ed4378c4cc2fd8dd42b1f1098adce2d0b967fb00->enter($__internal_8a6ba295dc6313f72571cc28ed4378c4cc2fd8dd42b1f1098adce2d0b967fb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/logo.twig"));

        // line 22
        echo "             <div class=\"header_logo_area\">

                <h1 class=\"header_logo\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\"><img src = \"http://la-terra.co.jp/test_latia/common/images/logo.png\" /></a>official site</h1>
            </div>";
        
        $__internal_8a6ba295dc6313f72571cc28ed4378c4cc2fd8dd42b1f1098adce2d0b967fb00->leave($__internal_8a6ba295dc6313f72571cc28ed4378c4cc2fd8dd42b1f1098adce2d0b967fb00_prof);

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
        return array (  26 => 24,  22 => 22,);
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

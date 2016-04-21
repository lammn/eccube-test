<?php

/* __string_template__a4cc4078652c871bf642664b4bf345c047f5dca4b238b37656832ae83261a75d */
class __TwigTemplate_e970badcda27d14555e29eb8225f8dc3ad5ca326f36046c95e3d522b13adfad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__a4cc4078652c871bf642664b4bf345c047f5dca4b238b37656832ae83261a75d", 22);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["body_class"] = "mypage";
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"wrapper pageCont\">
<div class=\"pageTit garamond\">
      <h2>LOGIN</h2>
    </div>
    <div class=\"container-fluid\">
        <form name=\"login_mypage\" id=\"login_mypage\" method=\"post\" action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("login_check");
        echo "\" onsubmit=\"return eccube.checkLoginFormInputted('login_mypage')\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
            ";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "has", array(0 => "eccube.login.target.path"), "method")) {
            // line 34
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "eccube.login.target.path"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["targetPath"]) {
                // line 35
                echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"";
                echo twig_escape_filter($this->env, $context["targetPath"], "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        }
        // line 38
        echo "            <div id=\"login_box\" class=\"row\">
                <div id=\"mypage_login_wrap\" class=\"col-sm-8 col-sm-offset-2\">
                    <div id=\"mypage_login_box\" class=\"column\">

                        <div id=\"mypage_login_box__body\" class=\"column_inner clearfix\">
                            <div class=\"icon\"><svg class=\"cb cb-user-circle\"><use xlink:href=\"#cb-user-circle\" /></svg></div>
                            <div id=\"mypage_login_box__login_email\" class=\"form-group\">
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_email", array()), 'widget', array("attr" => array("style" => "ime-mode: disabled;", "placeholder" => "メールアドレス")));
        echo "
                            </div>
                            <div id=\"mypage_login_box__login_pass\" class=\"form-group\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_pass", array()), 'widget', array("attr" => array("placeholder" => "パスワード")));
        echo "
                                ";
        // line 49
        if ($this->getAttribute((isset($context["BaseInfo"]) ? $context["BaseInfo"] : null), "option_remember_me", array())) {
            // line 50
            echo "                                    ";
            if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 51
                echo "                                        <input id=\"mypage_login_box__login_memory\" type=\"hidden\" name=\"login_memory\" value=\"1\">
                                    ";
            } else {
                // line 53
                echo "                                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "login_memory", array()), 'widget');
                echo "
                                    ";
            }
            // line 55
            echo "                                ";
        }
        // line 56
        echo "                            </div>
                            <div class=\"extra-form form-group\">
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "getIterator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 59
            echo "                                    ";
            if (preg_match("[^plg*]", $this->getAttribute($this->getAttribute($context["f"], "vars", array()), "name", array()))) {
                // line 60
                echo "                                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'label');
                echo "
                                        ";
                // line 61
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                        ";
                // line 62
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                    ";
            }
            // line 64
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                            </div>
                            ";
        // line 66
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 67
            echo "                            <div id=\"mypage_login_box__error_message\" class=\"form-group\">
                                <span class=\"text-danger\">";
            // line 68
            echo $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null));
            echo "</span>
                            </div>
                            ";
        }
        // line 71
        echo "                            <div id=\"mypage_login__login_button\" class=\"btn_area\">
                                <p><button type=\"submit\" class=\"btn btn-info btn-block btn-lg\">ログイン</button></p>
                                <ul id=\"mypage_login__login_menu\" >
                                    <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getUrl("forgot");
        echo "\">ログイン情報をお忘れですか？</a></li>
                                    <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getUrl("entry");
        echo "\">新規会員登録</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </form>
    </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__a4cc4078652c871bf642664b4bf345c047f5dca4b238b37656832ae83261a75d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 82,  157 => 75,  153 => 74,  148 => 71,  142 => 68,  139 => 67,  137 => 66,  134 => 65,  128 => 64,  123 => 62,  119 => 61,  114 => 60,  111 => 59,  107 => 58,  103 => 56,  100 => 55,  94 => 53,  90 => 51,  87 => 50,  85 => 49,  81 => 48,  75 => 45,  66 => 38,  63 => 37,  54 => 35,  49 => 34,  47 => 33,  41 => 32,  34 => 27,  31 => 26,  27 => 22,  25 => 24,  11 => 22,);
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
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set body_class = 'mypage' %}*/
/* */
/* {% block main %}*/
/* <div class="wrapper pageCont">*/
/* <div class="pageTit garamond">*/
/*       <h2>LOGIN</h2>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         <form name="login_mypage" id="login_mypage" method="post" action="{{ url('login_check') }}" onsubmit="return eccube.checkLoginFormInputted('login_mypage')" {{ form_enctype(form) }}>*/
/*             {% if app.session.flashBag.has('eccube.login.target.path') %}*/
/*                 {% for targetPath in app.session.flashBag.get('eccube.login.target.path') %}*/
/*                     <input type="hidden" name="_target_path" value="{{ targetPath }}" />*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <div id="login_box" class="row">*/
/*                 <div id="mypage_login_wrap" class="col-sm-8 col-sm-offset-2">*/
/*                     <div id="mypage_login_box" class="column">*/
/* */
/*                         <div id="mypage_login_box__body" class="column_inner clearfix">*/
/*                             <div class="icon"><svg class="cb cb-user-circle"><use xlink:href="#cb-user-circle" /></svg></div>*/
/*                             <div id="mypage_login_box__login_email" class="form-group">*/
/*                                 {{ form_widget(form.login_email, {'attr': {'style' : 'ime-mode: disabled;', 'placeholder' : 'メールアドレス' }}) }}*/
/*                             </div>*/
/*                             <div id="mypage_login_box__login_pass" class="form-group">*/
/*                                 {{ form_widget(form.login_pass,  {'attr': {'placeholder' : 'パスワード' }}) }}*/
/*                                 {% if BaseInfo.option_remember_me %}*/
/*                                     {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}*/
/*                                         <input id="mypage_login_box__login_memory" type="hidden" name="login_memory" value="1">*/
/*                                     {% else %}*/
/*                                         {{ form_widget(form.login_memory) }}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="extra-form form-group">*/
/*                                 {% for f in form.getIterator %}*/
/*                                     {% if f.vars.name matches '[^plg*]' %}*/
/*                                         {{ form_label(f) }}*/
/*                                         {{ form_widget(f) }}*/
/*                                         {{ form_errors(f) }}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             {% if error %}*/
/*                             <div id="mypage_login_box__error_message" class="form-group">*/
/*                                 <span class="text-danger">{{ error|trans|raw }}</span>*/
/*                             </div>*/
/*                             {% endif %}*/
/*                             <div id="mypage_login__login_button" class="btn_area">*/
/*                                 <p><button type="submit" class="btn btn-info btn-block btn-lg">ログイン</button></p>*/
/*                                 <ul id="mypage_login__login_menu" >*/
/*                                     <li><a href="{{ url('forgot') }}">ログイン情報をお忘れですか？</a></li>*/
/*                                     <li><a href="{{ url('entry') }}">新規会員登録</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*             </div><!-- /.row -->*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/*         </form>*/
/*     </div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */

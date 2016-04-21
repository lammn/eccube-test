<?php

/* Block/paypalexpress_paypal_block.twig */
class __TwigTemplate_bdfeead4059fd52cb687407e8ff3b1e0ff0cb6ad1947babdc7376bae3bcca0ad extends Twig_Template
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
        $__internal_4dd4eceb90f18a5bad8a0e4076193e17db7b533f7e1b15615223f1ff58175ca1 = $this->env->getExtension("native_profiler");
        $__internal_4dd4eceb90f18a5bad8a0e4076193e17db7b533f7e1b15615223f1ff58175ca1->enter($__internal_4dd4eceb90f18a5bad8a0e4076193e17db7b533f7e1b15615223f1ff58175ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/paypalexpress_paypal_block.twig"));

        // line 1
        echo "<table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" align=\"center\"><tr><td align=\"center\"></td></tr><tr><td align=\"center\">
";
        // line 2
        echo twig_include($this->env, $context, "PayPalExpress/Resource/template/Block/paypal_logo.twig");
        echo "
</td></tr></table>
";
        
        $__internal_4dd4eceb90f18a5bad8a0e4076193e17db7b533f7e1b15615223f1ff58175ca1->leave($__internal_4dd4eceb90f18a5bad8a0e4076193e17db7b533f7e1b15615223f1ff58175ca1_prof);

    }

    public function getTemplateName()
    {
        return "Block/paypalexpress_paypal_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center">*/
/* {{ include('PayPalExpress/Resource/template/Block/paypal_logo.twig') }}*/
/* </td></tr></table>*/
/* */

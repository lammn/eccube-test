<?php

/* Block/paypalexpress_paypal_block.twig */
class __TwigTemplate_f55c99886d0f290b5c9c1e3c6b8504c90fc82b117890b973e7b848c691b1dde4 extends Twig_Template
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
        // line 1
        echo "<table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" align=\"center\"><tr><td align=\"center\"></td></tr><tr><td align=\"center\">
";
        // line 2
        echo twig_include($this->env, $context, "PayPalExpress/Resource/template/Block/paypal_logo.twig");
        echo "
</td></tr></table>
";
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
        return array (  22 => 2,  19 => 1,);
    }
}
/* <table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center">*/
/* {{ include('PayPalExpress/Resource/template/Block/paypal_logo.twig') }}*/
/* </td></tr></table>*/
/* */

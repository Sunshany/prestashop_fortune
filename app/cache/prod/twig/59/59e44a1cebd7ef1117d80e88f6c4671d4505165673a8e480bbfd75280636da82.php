<?php

/* PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig */
class __TwigTemplate_4ec777214786e43c7d793d66bbf40773fd3a6acab098b9e830ff83deef6d088b extends Twig_Template
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
        // line 25
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "counter", array(), "any", true, true)) {
            // line 26
            echo "  <span
    class=\"maxLength\">";
            // line 27
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => "<span class=\"currentTotalMax\">", "[/2]" => "</span>"));
            // line 32
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 32,  24 => 27,  21 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "C:\\wamp64\\www\\Prestashop_Fortune\\src\\PrestaShopBundle/Resources/views/Admin/Product/Include/form_max_length.html.twig");
    }
}

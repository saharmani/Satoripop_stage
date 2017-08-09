<?php

/* C:\wamp\www\tribloo/themes/demo/partials/site/footer.htm */
class __TwigTemplate_f8a9bd8af35ee5150fcdbd41de169f09218b03fa8c60a5a644a96d068547aa4e extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy;";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Satoripop </p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\tribloo/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy;{{ \"now\"|date(\"Y\") }} Satoripop </p>
    </div>
</div>", "C:\\wamp\\www\\tribloo/themes/demo/partials/site/footer.htm", "");
    }
}

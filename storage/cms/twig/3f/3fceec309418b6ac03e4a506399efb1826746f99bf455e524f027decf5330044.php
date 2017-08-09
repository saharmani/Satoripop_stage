<?php

/* C:\wamp\www\tribloo/themes/demo/partials/site/header.htm */
class __TwigTemplate_ee0405b766885b8ec4c4ce1cf29e4dcd22dd8808933c50c23359a4360b806f95 extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
      
       
    <ul class=\"nav nav-pills\">
                <li class=\"";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
                <li class=\"";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "centers")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("centers");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Centers"));
        echo "</a></li>
                <li class=\"";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "login")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
        echo "\">

                    ";
        // line 11
        if ( !(isset($context["user"]) ? $context["user"] : null)) {
            // line 12
            echo "                        Login
                    ";
        } else {
            // line 14
            echo "                        My profile
                    ";
        }
        // line 16
        echo "                </a></li>
                ";
        // line 17
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 18
            echo "                    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
";
            // line 19
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Déconnexion"));
            echo "</a></li>
                ";
        }
        // line 21
        echo "                <li>    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "  </li>
</ul>
 
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp\\www\\tribloo/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  72 => 19,  69 => 18,  67 => 17,  64 => 16,  60 => 14,  56 => 12,  54 => 11,  45 => 9,  35 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
      
       
    <ul class=\"nav nav-pills\">
                <li class=\"{% if this.page.id == 'home' %} active {% endif %}\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                <li class=\"{% if this.page.id == 'centers' %} active {% endif %}\"><a href=\"{{ 'centers'|page }}\">{{'Centers'|_}}</a></li>
                <li class=\"{% if this.page.id == 'login' %} active {% endif %}\"><a href=\"{{ 'login'|page }}\">

                    {% if not user  %}
                        Login
                    {% else %}
                        My profile
                    {% endif %}
                </a></li>
                {% if user %}
                    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
{{'Déconnexion'|_}}</a></li>
                {% endif %}
                <li>    {% component \"localePicker\" %}  </li>
</ul>
 
    </div>
</nav>", "C:\\wamp\\www\\tribloo/themes/demo/partials/site/header.htm", "");
    }
}

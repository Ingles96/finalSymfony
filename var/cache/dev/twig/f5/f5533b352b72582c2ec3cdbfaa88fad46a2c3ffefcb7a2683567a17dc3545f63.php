<?php

/* EsqueletBundle:login:login.html.twig */
class __TwigTemplate_3f86f3ec922710ed48e7b9e8a9706192e897318a1bc6bdb73efe271a77da34c0 extends Twig_Template
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
        $__internal_635f68102b62ca3ff9f01ce1cfa7326365f35949764eaa90e9c53ee8719c5855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635f68102b62ca3ff9f01ce1cfa7326365f35949764eaa90e9c53ee8719c5855->enter($__internal_635f68102b62ca3ff9f01ce1cfa7326365f35949764eaa90e9c53ee8719c5855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:login:login.html.twig"));

        $__internal_ecf4b279aaab25c0f2ef33bc58997c76fd53cd7166baa4950c7dfd06d6962d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf4b279aaab25c0f2ef33bc58997c76fd53cd7166baa4950c7dfd06d6962d09->enter($__internal_ecf4b279aaab25c0f2ef33bc58997c76fd53cd7166baa4950c7dfd06d6962d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:login:login.html.twig"));

        // line 1
        echo "<body>
";
        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 21
        echo "
    <button type=\"submit\">login</button>
</form>

</body>
";
        
        $__internal_635f68102b62ca3ff9f01ce1cfa7326365f35949764eaa90e9c53ee8719c5855->leave($__internal_635f68102b62ca3ff9f01ce1cfa7326365f35949764eaa90e9c53ee8719c5855_prof);

        
        $__internal_ecf4b279aaab25c0f2ef33bc58997c76fd53cd7166baa4950c7dfd06d6962d09->leave($__internal_ecf4b279aaab25c0f2ef33bc58997c76fd53cd7166baa4950c7dfd06d6962d09_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  47 => 11,  42 => 9,  39 => 8,  33 => 6,  31 => 5,  28 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
{# app/Resources/views/security/login.html.twig #}
{# ... you will probably extend your base template, like base.html.twig #}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>

</body>
", "EsqueletBundle:login:login.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/login/login.html.twig");
    }
}

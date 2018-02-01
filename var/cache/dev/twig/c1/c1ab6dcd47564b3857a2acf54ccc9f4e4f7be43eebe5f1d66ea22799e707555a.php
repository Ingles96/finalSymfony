<?php

/* EsqueletBundle:Default:calendario_y_horarios.html.twig */
class __TwigTemplate_abca7e197eeddc9b980fd14393212213f2b2b7fe1246115956367de3c8622ec5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsqueletBundle:Default:calendario_y_horarios.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_723169063aff4f984d0dac6503bb341b2f51bbb6159e85963d6168be84cc30da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723169063aff4f984d0dac6503bb341b2f51bbb6159e85963d6168be84cc30da->enter($__internal_723169063aff4f984d0dac6503bb341b2f51bbb6159e85963d6168be84cc30da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:calendario_y_horarios.html.twig"));

        $__internal_8e85c0226c265b366d0af77e53b09a3547962b58e7d650aef43a13fa54bc9ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e85c0226c265b366d0af77e53b09a3547962b58e7d650aef43a13fa54bc9ad5->enter($__internal_8e85c0226c265b366d0af77e53b09a3547962b58e7d650aef43a13fa54bc9ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:calendario_y_horarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_723169063aff4f984d0dac6503bb341b2f51bbb6159e85963d6168be84cc30da->leave($__internal_723169063aff4f984d0dac6503bb341b2f51bbb6159e85963d6168be84cc30da_prof);

        
        $__internal_8e85c0226c265b366d0af77e53b09a3547962b58e7d650aef43a13fa54bc9ad5->leave($__internal_8e85c0226c265b366d0af77e53b09a3547962b58e7d650aef43a13fa54bc9ad5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9b61fbcd476114827e9e10027d332fcfafabc810f40c67bbcc56303ecdce959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b61fbcd476114827e9e10027d332fcfafabc810f40c67bbcc56303ecdce959->enter($__internal_d9b61fbcd476114827e9e10027d332fcfafabc810f40c67bbcc56303ecdce959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd7f44c291d2c96385f8e601f545f4e3abd1cd5e21d1fed244041206c24505d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7f44c291d2c96385f8e601f545f4e3abd1cd5e21d1fed244041206c24505d8->enter($__internal_bd7f44c291d2c96385f8e601f545f4e3abd1cd5e21d1fed244041206c24505d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["futbol"]) ? $context["futbol"] : $this->getContext($context, "futbol")));
        foreach ($context['_seq'] as $context["_key"] => $context["carlet"]) {
            // line 5
            echo "<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "nombre", array()), "html", null, true);
            echo "</li>
<li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "apellidos", array()), "html", null, true);
            echo "</li>
<li>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "categoria", array()), "html", null, true);
            echo "</li>
<li>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "altura", array()), "html", null, true);
            echo "</li>
<li>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "peso", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bd7f44c291d2c96385f8e601f545f4e3abd1cd5e21d1fed244041206c24505d8->leave($__internal_bd7f44c291d2c96385f8e601f545f4e3abd1cd5e21d1fed244041206c24505d8_prof);

        
        $__internal_d9b61fbcd476114827e9e10027d332fcfafabc810f40c67bbcc56303ecdce959->leave($__internal_d9b61fbcd476114827e9e10027d332fcfafabc810f40c67bbcc56303ecdce959_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:Default:calendario_y_horarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  66 => 8,  62 => 7,  58 => 6,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
{% for carlet in futbol %}
<li>{{ carlet.nombre }}</li>
<li>{{ carlet.apellidos }}</li>
<li>{{ carlet.categoria }}</li>
<li>{{ carlet.altura }}</li>
<li>{{ carlet.peso }}</li>
{% endfor %}
{% endblock %}
", "EsqueletBundle:Default:calendario_y_horarios.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/Default/calendario_y_horarios.html.twig");
    }
}

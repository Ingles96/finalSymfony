<?php

/* carlet/show.html.twig */
class __TwigTemplate_19261a152afedc902ac3477b7e26b478f8a60a4431327a124f7ba1bf5f18551e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "carlet/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df8345c7e9aa2ea681378ade2d431cbeebd83339d05396365cb724d1735db30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8345c7e9aa2ea681378ade2d431cbeebd83339d05396365cb724d1735db30f->enter($__internal_df8345c7e9aa2ea681378ade2d431cbeebd83339d05396365cb724d1735db30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/show.html.twig"));

        $__internal_a80feada26ae2087eff8ea0de9be0c10c589286a2010e96c0e5b7fb1fcfad777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80feada26ae2087eff8ea0de9be0c10c589286a2010e96c0e5b7fb1fcfad777->enter($__internal_a80feada26ae2087eff8ea0de9be0c10c589286a2010e96c0e5b7fb1fcfad777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8345c7e9aa2ea681378ade2d431cbeebd83339d05396365cb724d1735db30f->leave($__internal_df8345c7e9aa2ea681378ade2d431cbeebd83339d05396365cb724d1735db30f_prof);

        
        $__internal_a80feada26ae2087eff8ea0de9be0c10c589286a2010e96c0e5b7fb1fcfad777->leave($__internal_a80feada26ae2087eff8ea0de9be0c10c589286a2010e96c0e5b7fb1fcfad777_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79e3f394720de217e6d6a07f66d493c088f8b8f496a7e2533711c465f9fbf109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e3f394720de217e6d6a07f66d493c088f8b8f496a7e2533711c465f9fbf109->enter($__internal_79e3f394720de217e6d6a07f66d493c088f8b8f496a7e2533711c465f9fbf109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_caf177efe0032f51bb43b1cb8cb0b499ae60299574fbf6d487096d9f4ca3891e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf177efe0032f51bb43b1cb8cb0b499ae60299574fbf6d487096d9f4ca3891e->enter($__internal_caf177efe0032f51bb43b1cb8cb0b499ae60299574fbf6d487096d9f4ca3891e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Jugador</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechanacimiento</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "fechaNacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "categoria", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Altura</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "altura", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peso</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "peso", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carlet_index");
        echo "\">Volver a la lista</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carlet_edit", array("id" => $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "id", array()))), "html", null, true);
        echo "\">Editar</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Borrar\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_caf177efe0032f51bb43b1cb8cb0b499ae60299574fbf6d487096d9f4ca3891e->leave($__internal_caf177efe0032f51bb43b1cb8cb0b499ae60299574fbf6d487096d9f4ca3891e_prof);

        
        $__internal_79e3f394720de217e6d6a07f66d493c088f8b8f496a7e2533711c465f9fbf109->leave($__internal_79e3f394720de217e6d6a07f66d493c088f8b8f496a7e2533711c465f9fbf109_prof);

    }

    public function getTemplateName()
    {
        return "carlet/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 47,  117 => 44,  111 => 41,  101 => 34,  94 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Jugador</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ carlet.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ carlet.nombre }}</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>{{ carlet.apellidos }}</td>
            </tr>
            <tr>
                <th>Fechanacimiento</th>
                <td>{% if carlet.fechaNacimiento %}{{ carlet.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>{{ carlet.categoria }}</td>
            </tr>
            <tr>
                <th>Altura</th>
                <td>{{ carlet.altura }}</td>
            </tr>
            <tr>
                <th>Peso</th>
                <td>{{ carlet.peso }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('carlet_index') }}\">Volver a la lista</a>
        </li>
        <li>
            <a href=\"{{ path('carlet_edit', { 'id': carlet.id }) }}\">Editar</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Borrar\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "carlet/show.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app\\Resources\\views\\carlet\\show.html.twig");
    }
}

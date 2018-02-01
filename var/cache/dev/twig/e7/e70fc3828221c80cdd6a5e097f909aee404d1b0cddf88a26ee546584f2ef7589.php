<?php

/* carlet/mostrar.html.twig */
class __TwigTemplate_f71b412f8d8af0707748d467081b9774aea0924509ef0099cb373fa2a5eb093a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "carlet/mostrar.html.twig", 1);
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
        $__internal_e7d04657fdee24572dcf21443f1a306a6db0ff65aee5c83bfd3cc4a3980a76a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d04657fdee24572dcf21443f1a306a6db0ff65aee5c83bfd3cc4a3980a76a6->enter($__internal_e7d04657fdee24572dcf21443f1a306a6db0ff65aee5c83bfd3cc4a3980a76a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/mostrar.html.twig"));

        $__internal_1d055d9acc2c3fd924b508b1dff2ba78ac0731839b254bac80fc3e1ba2fab699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d055d9acc2c3fd924b508b1dff2ba78ac0731839b254bac80fc3e1ba2fab699->enter($__internal_1d055d9acc2c3fd924b508b1dff2ba78ac0731839b254bac80fc3e1ba2fab699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/mostrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d04657fdee24572dcf21443f1a306a6db0ff65aee5c83bfd3cc4a3980a76a6->leave($__internal_e7d04657fdee24572dcf21443f1a306a6db0ff65aee5c83bfd3cc4a3980a76a6_prof);

        
        $__internal_1d055d9acc2c3fd924b508b1dff2ba78ac0731839b254bac80fc3e1ba2fab699->leave($__internal_1d055d9acc2c3fd924b508b1dff2ba78ac0731839b254bac80fc3e1ba2fab699_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_102b9b4d3b9713915282c5734e5e8d1a2fff94900a2506578472815f720e53c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102b9b4d3b9713915282c5734e5e8d1a2fff94900a2506578472815f720e53c3->enter($__internal_102b9b4d3b9713915282c5734e5e8d1a2fff94900a2506578472815f720e53c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad4231e8146146f8f0bae21ce14bcbe0c801b5c4f5c2bafdbf180f063e8be96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4231e8146146f8f0bae21ce14bcbe0c801b5c4f5c2bafdbf180f063e8be96d->enter($__internal_ad4231e8146146f8f0bae21ce14bcbe0c801b5c4f5c2bafdbf180f063e8be96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_jugador", array("id" => $this->getAttribute((isset($context["carlet"]) ? $context["carlet"] : $this->getContext($context, "carlet")), "id", array()))), "html", null, true);
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
        
        $__internal_ad4231e8146146f8f0bae21ce14bcbe0c801b5c4f5c2bafdbf180f063e8be96d->leave($__internal_ad4231e8146146f8f0bae21ce14bcbe0c801b5c4f5c2bafdbf180f063e8be96d_prof);

        
        $__internal_102b9b4d3b9713915282c5734e5e8d1a2fff94900a2506578472815f720e53c3->leave($__internal_102b9b4d3b9713915282c5734e5e8d1a2fff94900a2506578472815f720e53c3_prof);

    }

    public function getTemplateName()
    {
        return "carlet/mostrar.html.twig";
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
            <a href=\"{{ path('editar_jugador', { 'id': carlet.id }) }}\">Editar</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Borrar\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "carlet/mostrar.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app\\Resources\\views\\carlet\\mostrar.html.twig");
    }
}

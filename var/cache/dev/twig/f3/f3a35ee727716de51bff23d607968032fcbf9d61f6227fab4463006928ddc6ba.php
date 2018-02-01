<?php

/* carlet/index.html.twig */
class __TwigTemplate_2a131944b84a62f62feacf15aacc3b02585e062a81dfdb25295533f7995a6f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "carlet/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d1e39a30b19c3f84284904acdbd2f5715a250f6e6e2885ddea98adbbb944533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1e39a30b19c3f84284904acdbd2f5715a250f6e6e2885ddea98adbbb944533->enter($__internal_1d1e39a30b19c3f84284904acdbd2f5715a250f6e6e2885ddea98adbbb944533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/index.html.twig"));

        $__internal_ea4a0036538d53c4b517f326d7b33bac81b7399f5afd9544009ecb1e120ebfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4a0036538d53c4b517f326d7b33bac81b7399f5afd9544009ecb1e120ebfa2->enter($__internal_ea4a0036538d53c4b517f326d7b33bac81b7399f5afd9544009ecb1e120ebfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "carlet/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d1e39a30b19c3f84284904acdbd2f5715a250f6e6e2885ddea98adbbb944533->leave($__internal_1d1e39a30b19c3f84284904acdbd2f5715a250f6e6e2885ddea98adbbb944533_prof);

        
        $__internal_ea4a0036538d53c4b517f326d7b33bac81b7399f5afd9544009ecb1e120ebfa2->leave($__internal_ea4a0036538d53c4b517f326d7b33bac81b7399f5afd9544009ecb1e120ebfa2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bab1e08a03baec011393aa7a479842c598c6c45bbeb3a3dfb2c2af3c69aea986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab1e08a03baec011393aa7a479842c598c6c45bbeb3a3dfb2c2af3c69aea986->enter($__internal_bab1e08a03baec011393aa7a479842c598c6c45bbeb3a3dfb2c2af3c69aea986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_23bf3ace9250754f6b9fa3ba934990abeffacf693eec234e92def0e3bfc02a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23bf3ace9250754f6b9fa3ba934990abeffacf693eec234e92def0e3bfc02a5b->enter($__internal_23bf3ace9250754f6b9fa3ba934990abeffacf693eec234e92def0e3bfc02a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/plantilla.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link  href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_23bf3ace9250754f6b9fa3ba934990abeffacf693eec234e92def0e3bfc02a5b->leave($__internal_23bf3ace9250754f6b9fa3ba934990abeffacf693eec234e92def0e3bfc02a5b_prof);

        
        $__internal_bab1e08a03baec011393aa7a479842c598c6c45bbeb3a3dfb2c2af3c69aea986->leave($__internal_bab1e08a03baec011393aa7a479842c598c6c45bbeb3a3dfb2c2af3c69aea986_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d85ec7c293471c168d91a1314f52e53ac66094881524f827478ffb96fa669f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85ec7c293471c168d91a1314f52e53ac66094881524f827478ffb96fa669f81->enter($__internal_d85ec7c293471c168d91a1314f52e53ac66094881524f827478ffb96fa669f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_602720688e25629d67635150acf099d9db5a00505f95f24ed1dad62f4d3207f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602720688e25629d67635150acf099d9db5a00505f95f24ed1dad62f4d3207f3->enter($__internal_602720688e25629d67635150acf099d9db5a00505f95f24ed1dad62f4d3207f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Lista de jugadores</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fechanacimiento</th>
                <th>Categoria</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadores"]) ? $context["jugadores"] : $this->getContext($context, "jugadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["carlet"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_jugador", array("id" => $this->getAttribute($context["carlet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["carlet"], "fechaNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carlet"], "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "categoria", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "altura", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "peso", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_jugador", array("id" => $this->getAttribute($context["carlet"], "id", array()))), "html", null, true);
            echo "\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editar_jugador", array("id" => $this->getAttribute($context["carlet"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevo_jugador");
        echo "\">Crear nuevo jugador</a>
        </li>
    </ul>
";
        
        $__internal_602720688e25629d67635150acf099d9db5a00505f95f24ed1dad62f4d3207f3->leave($__internal_602720688e25629d67635150acf099d9db5a00505f95f24ed1dad62f4d3207f3_prof);

        
        $__internal_d85ec7c293471c168d91a1314f52e53ac66094881524f827478ffb96fa669f81->leave($__internal_d85ec7c293471c168d91a1314f52e53ac66094881524f827478ffb96fa669f81_prof);

    }

    public function getTemplateName()
    {
        return "carlet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 49,  154 => 44,  142 => 38,  136 => 35,  129 => 31,  125 => 30,  121 => 29,  115 => 28,  111 => 27,  107 => 26,  101 => 25,  98 => 24,  94 => 23,  76 => 7,  67 => 6,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
{% block stylesheets %}
<link  href=\"{{ asset ('/css/plantilla.css') }}\" rel=\"stylesheet\">
<link  href=\"{{ asset ('/css/estilos.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
    <h1>Lista de jugadores</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fechanacimiento</th>
                <th>Categoria</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        {% for carlet in jugadores %}
            <tr>
                <td><a href=\"{{ path('mostrar_jugador', { 'id': carlet.id }) }}\">{{ carlet.id }}</a></td>
                <td>{{ carlet.nombre }}</td>
                <td>{{ carlet.apellidos }}</td>
                <td>{% if carlet.fechaNacimiento %}{{ carlet.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>
                <td>{{ carlet.categoria }}</td>
                <td>{{ carlet.altura }}</td>
                <td>{{ carlet.peso }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('mostrar_jugador', { 'id': carlet.id }) }}\">Mostrar</a>
                        </li>
                        <li>
                            <a href=\"{{ path('editar_jugador', { 'id': carlet.id }) }}\">Editar</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('nuevo_jugador') }}\">Crear nuevo jugador</a>
        </li>
    </ul>
{% endblock %}
", "carlet/index.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app\\Resources\\views\\carlet\\index.html.twig");
    }
}

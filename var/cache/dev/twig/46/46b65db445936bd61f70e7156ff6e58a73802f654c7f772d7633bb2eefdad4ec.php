<?php

/* EsqueletBundle:Default:plantilla.html.twig */
class __TwigTemplate_fceddaea191d20e3ffb3542fd74bfe1ab4288316e02537966aa66acf262ce18e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EsqueletBundle:Default:plantilla.html.twig", 1);
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
        $__internal_c9785178d9c303c88e405e57846a6e30e18b49d92fc3cf35bed1d133c65f5397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9785178d9c303c88e405e57846a6e30e18b49d92fc3cf35bed1d133c65f5397->enter($__internal_c9785178d9c303c88e405e57846a6e30e18b49d92fc3cf35bed1d133c65f5397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:plantilla.html.twig"));

        $__internal_554d9427d52d74033bb6c15966b5de60b06f2006e5459afc8a10d10547a47890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554d9427d52d74033bb6c15966b5de60b06f2006e5459afc8a10d10547a47890->enter($__internal_554d9427d52d74033bb6c15966b5de60b06f2006e5459afc8a10d10547a47890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:plantilla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9785178d9c303c88e405e57846a6e30e18b49d92fc3cf35bed1d133c65f5397->leave($__internal_c9785178d9c303c88e405e57846a6e30e18b49d92fc3cf35bed1d133c65f5397_prof);

        
        $__internal_554d9427d52d74033bb6c15966b5de60b06f2006e5459afc8a10d10547a47890->leave($__internal_554d9427d52d74033bb6c15966b5de60b06f2006e5459afc8a10d10547a47890_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6926d13630aade68a3087bf05104836a9548bcc9fcc1116811270df26d75f009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6926d13630aade68a3087bf05104836a9548bcc9fcc1116811270df26d75f009->enter($__internal_6926d13630aade68a3087bf05104836a9548bcc9fcc1116811270df26d75f009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8721626d98b38a321e9b384540d3139be51706469b6d26f09e9d76d244a34cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8721626d98b38a321e9b384540d3139be51706469b6d26f09e9d76d244a34cfb->enter($__internal_8721626d98b38a321e9b384540d3139be51706469b6d26f09e9d76d244a34cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/plantilla.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link  href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_8721626d98b38a321e9b384540d3139be51706469b6d26f09e9d76d244a34cfb->leave($__internal_8721626d98b38a321e9b384540d3139be51706469b6d26f09e9d76d244a34cfb_prof);

        
        $__internal_6926d13630aade68a3087bf05104836a9548bcc9fcc1116811270df26d75f009->leave($__internal_6926d13630aade68a3087bf05104836a9548bcc9fcc1116811270df26d75f009_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_90c55be40c5df191d261650cc250b68f9aef83a89afb9d73bb4d4347f81bc612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c55be40c5df191d261650cc250b68f9aef83a89afb9d73bb4d4347f81bc612->enter($__internal_90c55be40c5df191d261650cc250b68f9aef83a89afb9d73bb4d4347f81bc612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cfeb02f3147140e5ca725cc49fdd10fe09d869701a2f36a3a1dd8a0c820d5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfeb02f3147140e5ca725cc49fdd10fe09d869701a2f36a3a1dd8a0c820d5bb->enter($__internal_0cfeb02f3147140e5ca725cc49fdd10fe09d869701a2f36a3a1dd8a0c820d5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Lista de jugadores</h1>

    <table >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>Categoria</th>
                <th>Altura</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["futbol"]) ? $context["futbol"] : $this->getContext($context, "futbol")));
        foreach ($context['_seq'] as $context["_key"] => $context["carlet"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["carlet"], "fechaNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carlet"], "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "categoria", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "altura", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "peso", array()), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>


";
        
        $__internal_0cfeb02f3147140e5ca725cc49fdd10fe09d869701a2f36a3a1dd8a0c820d5bb->leave($__internal_0cfeb02f3147140e5ca725cc49fdd10fe09d869701a2f36a3a1dd8a0c820d5bb_prof);

        
        $__internal_90c55be40c5df191d261650cc250b68f9aef83a89afb9d73bb4d4347f81bc612->leave($__internal_90c55be40c5df191d261650cc250b68f9aef83a89afb9d73bb4d4347f81bc612_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:Default:plantilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  121 => 28,  117 => 27,  113 => 26,  107 => 25,  103 => 24,  99 => 23,  96 => 22,  92 => 21,  76 => 7,  67 => 6,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
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

    <table >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>Categoria</th>
                <th>Altura</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>
        {% for carlet in futbol %}
            <tr>
                <td>{{ carlet.nombre }}</td>
                <td>{{ carlet.apellidos }}</td>
                <td>{% if carlet.fechaNacimiento %}{{ carlet.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>
                <td>{{ carlet.categoria }}</td>
                <td>{{ carlet.altura }}</td>
                <td>{{ carlet.peso }}</td>

            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "EsqueletBundle:Default:plantilla.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/Default/plantilla.html.twig");
    }
}

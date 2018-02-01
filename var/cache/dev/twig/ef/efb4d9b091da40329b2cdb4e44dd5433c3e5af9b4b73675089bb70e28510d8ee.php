<?php

/* usuario/index.html.twig */
class __TwigTemplate_8265b864d3418761fd8664b7f1b38ccefa74534f4b017fa8e28c2c5ca30588f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/index.html.twig", 1);
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
        $__internal_29d3bbde262d857d45ce4c3c29046a17a58cbe2ad1f2b8f5e72a0c3abf0fa494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d3bbde262d857d45ce4c3c29046a17a58cbe2ad1f2b8f5e72a0c3abf0fa494->enter($__internal_29d3bbde262d857d45ce4c3c29046a17a58cbe2ad1f2b8f5e72a0c3abf0fa494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $__internal_0086c4a7a7ced44c4ae2a186ef4b7c9aec6bfbc2c5df0504fb222388c1bae228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0086c4a7a7ced44c4ae2a186ef4b7c9aec6bfbc2c5df0504fb222388c1bae228->enter($__internal_0086c4a7a7ced44c4ae2a186ef4b7c9aec6bfbc2c5df0504fb222388c1bae228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d3bbde262d857d45ce4c3c29046a17a58cbe2ad1f2b8f5e72a0c3abf0fa494->leave($__internal_29d3bbde262d857d45ce4c3c29046a17a58cbe2ad1f2b8f5e72a0c3abf0fa494_prof);

        
        $__internal_0086c4a7a7ced44c4ae2a186ef4b7c9aec6bfbc2c5df0504fb222388c1bae228->leave($__internal_0086c4a7a7ced44c4ae2a186ef4b7c9aec6bfbc2c5df0504fb222388c1bae228_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7eb27c15bd6b3cceb9c910090615dcc5e29c026511346b97e5ccadf4d2cf695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7eb27c15bd6b3cceb9c910090615dcc5e29c026511346b97e5ccadf4d2cf695->enter($__internal_a7eb27c15bd6b3cceb9c910090615dcc5e29c026511346b97e5ccadf4d2cf695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_94867e026ba5764152a1983855bf3af37c82c5456e47dd9cc5dba99c1c4aa8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94867e026ba5764152a1983855bf3af37c82c5456e47dd9cc5dba99c1c4aa8a8->enter($__internal_94867e026ba5764152a1983855bf3af37c82c5456e47dd9cc5dba99c1c4aa8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/plantilla.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link  href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_94867e026ba5764152a1983855bf3af37c82c5456e47dd9cc5dba99c1c4aa8a8->leave($__internal_94867e026ba5764152a1983855bf3af37c82c5456e47dd9cc5dba99c1c4aa8a8_prof);

        
        $__internal_a7eb27c15bd6b3cceb9c910090615dcc5e29c026511346b97e5ccadf4d2cf695->leave($__internal_a7eb27c15bd6b3cceb9c910090615dcc5e29c026511346b97e5ccadf4d2cf695_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b54ce82dccc3687dc915a170dce7ad90601cc9e1c9f11687d1b1bcd45c912d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54ce82dccc3687dc915a170dce7ad90601cc9e1c9f11687d1b1bcd45c912d4a->enter($__internal_b54ce82dccc3687dc915a170dce7ad90601cc9e1c9f11687d1b1bcd45c912d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e7d22284f918db1adc34b6370884b176403a5db9dc64dfbc38b9d1d23a30833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7d22284f918db1adc34b6370884b176403a5db9dc64dfbc38b9d1d23a30833->enter($__internal_1e7d22284f918db1adc34b6370884b176403a5db9dc64dfbc38b9d1d23a30833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Lista de usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre Usuario</th>
                <th>Contraseña</th>
                <th>Email</th>


            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
                <td>
<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mostrar_usuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">Mostrar usuario</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>


";
        
        $__internal_1e7d22284f918db1adc34b6370884b176403a5db9dc64dfbc38b9d1d23a30833->leave($__internal_1e7d22284f918db1adc34b6370884b176403a5db9dc64dfbc38b9d1d23a30833_prof);

        
        $__internal_b54ce82dccc3687dc915a170dce7ad90601cc9e1c9f11687d1b1bcd45c912d4a->leave($__internal_b54ce82dccc3687dc915a170dce7ad90601cc9e1c9f11687d1b1bcd45c912d4a_prof);

    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 32,  116 => 28,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  96 => 22,  92 => 21,  76 => 7,  67 => 6,  55 => 4,  50 => 3,  41 => 2,  11 => 1,);
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
    <h1>Lista de usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre Usuario</th>
                <th>Contraseña</th>
                <th>Email</th>


            </tr>
        </thead>
        <tbody>
        {% for usuario in user %}
            <tr>
                <td>{{ usuario.id }}</a></td>
                <td>{{ usuario.username }}</td>
                <td>{{ usuario.password }}</td>
                <td>{{ usuario.email }}</td>
                <td>
<a href=\"{{ path('mostrar_usuario', { 'id': usuario.id }) }}\">Mostrar usuario</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "usuario/index.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\examen\\app\\Resources\\views\\usuario\\index.html.twig");
    }
}

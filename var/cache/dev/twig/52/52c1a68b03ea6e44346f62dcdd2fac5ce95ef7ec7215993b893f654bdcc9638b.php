<?php

/* usuario/mostrar.html.twig */
class __TwigTemplate_daf7e2cf9a4cdbc6241023eec097657dc19b4ba957c38c6c7b322f553b813010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuario/mostrar.html.twig", 1);
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
        $__internal_3b8dfc9f824604563bced2dc556864d3b8dd05ecd65cdcd1b8fbad37a50b5aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8dfc9f824604563bced2dc556864d3b8dd05ecd65cdcd1b8fbad37a50b5aa4->enter($__internal_3b8dfc9f824604563bced2dc556864d3b8dd05ecd65cdcd1b8fbad37a50b5aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/mostrar.html.twig"));

        $__internal_c0da6c9f6f3053b3b62ec8f9434f08f85affdaecb458300ec5b55c943c0b5cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0da6c9f6f3053b3b62ec8f9434f08f85affdaecb458300ec5b55c943c0b5cde->enter($__internal_c0da6c9f6f3053b3b62ec8f9434f08f85affdaecb458300ec5b55c943c0b5cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuario/mostrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b8dfc9f824604563bced2dc556864d3b8dd05ecd65cdcd1b8fbad37a50b5aa4->leave($__internal_3b8dfc9f824604563bced2dc556864d3b8dd05ecd65cdcd1b8fbad37a50b5aa4_prof);

        
        $__internal_c0da6c9f6f3053b3b62ec8f9434f08f85affdaecb458300ec5b55c943c0b5cde->leave($__internal_c0da6c9f6f3053b3b62ec8f9434f08f85affdaecb458300ec5b55c943c0b5cde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38aa992a46a9b528c2279c31a054fa8ffc2e870cccc2c2b800542ea4d554c69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38aa992a46a9b528c2279c31a054fa8ffc2e870cccc2c2b800542ea4d554c69d->enter($__internal_38aa992a46a9b528c2279c31a054fa8ffc2e870cccc2c2b800542ea4d554c69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c97cb7a9fc42d33e701e55fb2a1a1006fc01670746b56718acd6e754daf1f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c97cb7a9fc42d33e701e55fb2a1a1006fc01670746b56718acd6e754daf1f6e->enter($__internal_1c97cb7a9fc42d33e701e55fb2a1a1006fc01670746b56718acd6e754daf1f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre Usuario</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contraseña</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Volver a la lista</a>
        </li>

        <li>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Borrar\">
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1c97cb7a9fc42d33e701e55fb2a1a1006fc01670746b56718acd6e754daf1f6e->leave($__internal_1c97cb7a9fc42d33e701e55fb2a1a1006fc01670746b56718acd6e754daf1f6e_prof);

        
        $__internal_38aa992a46a9b528c2279c31a054fa8ffc2e870cccc2c2b800542ea4d554c69d->leave($__internal_38aa992a46a9b528c2279c31a054fa8ffc2e870cccc2c2b800542ea4d554c69d_prof);

    }

    public function getTemplateName()
    {
        return "usuario/mostrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  96 => 34,  89 => 30,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Usuario</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ usuario.id }}</td>
            </tr>
            <tr>
                <th>Nombre Usuario</th>
                <td>{{ usuario.username }}</td>
            </tr>
            <tr>
                <th>Contraseña</th>
                <td>{{ usuario.password }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ usuario.email }}</td>
            </tr>

        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('usuario_index') }}\">Volver a la lista</a>
        </li>

        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Borrar\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "usuario/mostrar.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\examen\\app\\Resources\\views\\usuario\\mostrar.html.twig");
    }
}

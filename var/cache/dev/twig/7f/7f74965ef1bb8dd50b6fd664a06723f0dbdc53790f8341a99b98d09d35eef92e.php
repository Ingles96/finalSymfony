<?php

/* EsqueletBundle:Default:all.html.twig */
class __TwigTemplate_ffdc913f385c0da5923c955182bcfa7463b47f48622d87c63a6b9bcc8b5c2acd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed856ee324347d04baef4c50b286262ba9d9f656a8c769add8ba153512d95f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed856ee324347d04baef4c50b286262ba9d9f656a8c769add8ba153512d95f38->enter($__internal_ed856ee324347d04baef4c50b286262ba9d9f656a8c769add8ba153512d95f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:all.html.twig"));

        $__internal_4e3593fc03c952c9d8d6f4dc8b8263843d34778b81edb5f5aefa491f0682cada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3593fc03c952c9d8d6f4dc8b8263843d34778b81edb5f5aefa491f0682cada->enter($__internal_4e3593fc03c952c9d8d6f4dc8b8263843d34778b81edb5f5aefa491f0682cada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:all.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
  </head>
  <body>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "  </body>
</html>
";
        
        $__internal_ed856ee324347d04baef4c50b286262ba9d9f656a8c769add8ba153512d95f38->leave($__internal_ed856ee324347d04baef4c50b286262ba9d9f656a8c769add8ba153512d95f38_prof);

        
        $__internal_4e3593fc03c952c9d8d6f4dc8b8263843d34778b81edb5f5aefa491f0682cada->leave($__internal_4e3593fc03c952c9d8d6f4dc8b8263843d34778b81edb5f5aefa491f0682cada_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b52550b1145c83a163349a5a3c6d0917f60508ed98269188595665cbb70b49cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52550b1145c83a163349a5a3c6d0917f60508ed98269188595665cbb70b49cf->enter($__internal_b52550b1145c83a163349a5a3c6d0917f60508ed98269188595665cbb70b49cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f0332f4630da9e79c867b8e55f68b9e927965d83781f270cbd597c012fa533c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0332f4630da9e79c867b8e55f68b9e927965d83781f270cbd597c012fa533c->enter($__internal_7f0332f4630da9e79c867b8e55f68b9e927965d83781f270cbd597c012fa533c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenido ";
        
        $__internal_7f0332f4630da9e79c867b8e55f68b9e927965d83781f270cbd597c012fa533c->leave($__internal_7f0332f4630da9e79c867b8e55f68b9e927965d83781f270cbd597c012fa533c_prof);

        
        $__internal_b52550b1145c83a163349a5a3c6d0917f60508ed98269188595665cbb70b49cf->leave($__internal_b52550b1145c83a163349a5a3c6d0917f60508ed98269188595665cbb70b49cf_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b14849a76066a6c8795f7f7d7345d69ad927d953d8ae9729c0abdb540f5907b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b14849a76066a6c8795f7f7d7345d69ad927d953d8ae9729c0abdb540f5907b->enter($__internal_0b14849a76066a6c8795f7f7d7345d69ad927d953d8ae9729c0abdb540f5907b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_61a233c7eac08fb596b1c0aac2ad41327f390fe62da3b9b7bc8f5ecf46eb7cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a233c7eac08fb596b1c0aac2ad41327f390fe62da3b9b7bc8f5ecf46eb7cb2->enter($__internal_61a233c7eac08fb596b1c0aac2ad41327f390fe62da3b9b7bc8f5ecf46eb7cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_61a233c7eac08fb596b1c0aac2ad41327f390fe62da3b9b7bc8f5ecf46eb7cb2->leave($__internal_61a233c7eac08fb596b1c0aac2ad41327f390fe62da3b9b7bc8f5ecf46eb7cb2_prof);

        
        $__internal_0b14849a76066a6c8795f7f7d7345d69ad927d953d8ae9729c0abdb540f5907b->leave($__internal_0b14849a76066a6c8795f7f7d7345d69ad927d953d8ae9729c0abdb540f5907b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f9031423595a2b1a482962d4c4ba2efbe6fd3aa59a19d977e20195f3eb5ce86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9031423595a2b1a482962d4c4ba2efbe6fd3aa59a19d977e20195f3eb5ce86->enter($__internal_0f9031423595a2b1a482962d4c4ba2efbe6fd3aa59a19d977e20195f3eb5ce86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a98878c6cc3b8e018e88e1fe1a4ffd2ac6d378033eb28e810d6c193a0bb460b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98878c6cc3b8e018e88e1fe1a4ffd2ac6d378033eb28e810d6c193a0bb460b6->enter($__internal_a98878c6cc3b8e018e88e1fe1a4ffd2ac6d378033eb28e810d6c193a0bb460b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carlet.jpg"), "html", null, true);
        echo "\" alt=\"\"> <a>CARLET EMF C.F.</a>
<div class=\"menu\">
    <ul>
      <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a></li>
      <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\">Noticias</a></li>
      <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscripciones");
        echo "\">Inscripciones</a></li>
      <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instalaciones");
        echo "\">Instalaciones</a></li>
      <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a></li>
      <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantilla");
        echo "\">Plantilla</a></li>
      <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendario_y_horarios");
        echo "\">Calendario y horarios</a></li>
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultados_y_clasificacion");
        echo "\">Resultados y clasificacion</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rankings");
        echo "\">Rankings</a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mi_perfil");
        echo "\">Mi perfil</a></li>
    </ul>
</div>


";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")));
        foreach ($context['_seq'] as $context["_key"] => $context["futbol"]) {
            // line 32
            echo "<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["futbol"], "nombre", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['futbol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "

<footer>Esto es el footer de la pagina web de la escuela de futbol de Carlet</footer>
    ";
        
        $__internal_a98878c6cc3b8e018e88e1fe1a4ffd2ac6d378033eb28e810d6c193a0bb460b6->leave($__internal_a98878c6cc3b8e018e88e1fe1a4ffd2ac6d378033eb28e810d6c193a0bb460b6_prof);

        
        $__internal_0f9031423595a2b1a482962d4c4ba2efbe6fd3aa59a19d977e20195f3eb5ce86->leave($__internal_0f9031423595a2b1a482962d4c4ba2efbe6fd3aa59a19d977e20195f3eb5ce86_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21788f4c15482288cf27d9aa6a7f484fe37307e7e4dd426c4717c487a09eb691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21788f4c15482288cf27d9aa6a7f484fe37307e7e4dd426c4717c487a09eb691->enter($__internal_21788f4c15482288cf27d9aa6a7f484fe37307e7e4dd426c4717c487a09eb691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_034994c10844a54198db0406c911ae8ec24ab130d61a7311c661c118031440b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034994c10844a54198db0406c911ae8ec24ab130d61a7311c661c118031440b3->enter($__internal_034994c10844a54198db0406c911ae8ec24ab130d61a7311c661c118031440b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_034994c10844a54198db0406c911ae8ec24ab130d61a7311c661c118031440b3->leave($__internal_034994c10844a54198db0406c911ae8ec24ab130d61a7311c661c118031440b3_prof);

        
        $__internal_21788f4c15482288cf27d9aa6a7f484fe37307e7e4dd426c4717c487a09eb691->leave($__internal_21788f4c15482288cf27d9aa6a7f484fe37307e7e4dd426c4717c487a09eb691_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:Default:all.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 38,  177 => 34,  168 => 32,  164 => 31,  156 => 26,  152 => 25,  148 => 24,  144 => 23,  140 => 22,  136 => 21,  132 => 20,  128 => 19,  124 => 18,  120 => 17,  113 => 14,  104 => 13,  91 => 8,  82 => 7,  64 => 6,  52 => 39,  49 => 38,  47 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>{% block title %} Bienvenido {% endblock %}</title>
    {% block stylesheets %}
<link  href=\"{{ asset ('/css/estilos.css') }}\" rel=\"stylesheet\">
  {% endblock %}

  </head>
  <body>
    {% block body %}
    <img src=\"{{ asset('carlet.jpg') }}\" alt=\"\"> <a>CARLET EMF C.F.</a>
<div class=\"menu\">
    <ul>
      <li><a href=\"{{ path(\"inicio\")}}\">Inicio</a></li>
      <li><a href=\"{{ path(\"noticias\")}}\">Noticias</a></li>
      <li><a href=\"{{ path(\"inscripciones\")}}\">Inscripciones</a></li>
      <li><a href=\"{{ path(\"instalaciones\")}}\">Instalaciones</a></li>
      <li><a href=\"{{ path(\"contacto\")}}\">Contacto</a></li>
      <li><a href=\"{{ path(\"plantilla\")}}\">Plantilla</a></li>
      <li><a href=\"{{ path(\"calendario_y_horarios\")}}\">Calendario y horarios</a></li>
      <li><a href=\"{{ path(\"resultados_y_clasificacion\")}}\">Resultados y clasificacion</a></li>
      <li><a href=\"{{ path(\"rankings\")}}\">Rankings</a></li>
      <li><a href=\"{{ path(\"mi_perfil\")}}\">Mi perfil</a></li>
    </ul>
</div>


{% for futbol in evento %}
<li>{{ futbol.nombre }}</li>
{% endfor %}


<footer>Esto es el footer de la pagina web de la escuela de futbol de Carlet</footer>
    {% endblock %}
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "EsqueletBundle:Default:all.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/Default/all.html.twig");
    }
}

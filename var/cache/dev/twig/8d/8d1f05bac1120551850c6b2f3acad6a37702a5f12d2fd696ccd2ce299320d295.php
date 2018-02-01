<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
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
        $__internal_45d3d55e53d57846aed9aa9ec92004ba47995566d48042de214139a2facdf333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d3d55e53d57846aed9aa9ec92004ba47995566d48042de214139a2facdf333->enter($__internal_45d3d55e53d57846aed9aa9ec92004ba47995566d48042de214139a2facdf333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bfa0dd84e3a68a530bc133317f1fef267773bba2e2281bd526de34c0f51c0b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa0dd84e3a68a530bc133317f1fef267773bba2e2281bd526de34c0f51c0b44->enter($__internal_bfa0dd84e3a68a530bc133317f1fef267773bba2e2281bd526de34c0f51c0b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carlet.jpg"), "html", null, true);
        echo "\" alt=\"\"> <a>CARLET EMF C.F.</a>

    ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a>
    ";
        }
        // line 18
        echo "

<div class=\"menu\">
    <ul>
      <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a></li>
      <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\">Noticias</a></li>
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscripciones");
        echo "\">Inscripciones</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instalaciones");
        echo "\">Instalaciones</a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a></li>
      <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantilla");
        echo "\">Plantilla</a></li>
      <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendario_y_horarios");
        echo "\">Calendario y horarios</a></li>
      <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultados_y_clasificacion");
        echo "\">Resultados y clasificacion</a></li>
      <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rankings");
        echo "\">Rankings</a></li>
      <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mi_perfil");
        echo "\">Mi perfil</a></li>
      <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_index");
        echo "\">Gestor usuarios</a></li>
    </ul>
</div>

";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
<footer class=\"footer-distributed\">

  <div class=\"footer-left\">

    <h3>Carlet E.M.F<span> Club de Futbol</span></h3>

    <p class=\"footer-links\">
      <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a>
      ·
      <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a>
      ·
      <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\">Noticias</a>
      ·
    </p>

    <p class=\"footer-company-name\"> Copyright &copy; 2017,Carlet E.M.F C.F</p>
  </div>

  <div class=\"footer-center\">

    <div>
      <i class=\"fa fa-map-marker\"></i>
      <p><span>Av. Chilly-Mazarin, 2</span> Carlet, España</p>
    </div>

    <div>
      <i class=\"fa fa-phone\"></i>
      <p>+34 662032992</p>
    </div>

    <div>
      <i class=\"fa fa-envelope\"></i>
      <p><a href=\"https://gmail.com\">carletemf@gmail.com</a></p>
    </div>

  </div>

  <div class=\"footer-right\">

    <p class=\"footer-company-about\">
      <span>Sobre nuestro club de futbol</span>
      Esta pagina esta dedicada a informar sobre nuestros equipos de futbol, calendario y resultados de cada equipo.
    </p>

    <div class=\"footer-icons\">

      <a href=\"https://facebook.com\"><img src=\"http://3.bp.blogspot.com/-MQuocq7OzfU/UiXwUY81yQI/AAAAAAAAB0Q/h6-R_R2-buI/s1600/face.png\" title=\"Dale mg a nuestra pagina de facebook\" /></a>
    </div>

  </div>

</footer>
    ";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "  </body>
</html>
";
        
        $__internal_45d3d55e53d57846aed9aa9ec92004ba47995566d48042de214139a2facdf333->leave($__internal_45d3d55e53d57846aed9aa9ec92004ba47995566d48042de214139a2facdf333_prof);

        
        $__internal_bfa0dd84e3a68a530bc133317f1fef267773bba2e2281bd526de34c0f51c0b44->leave($__internal_bfa0dd84e3a68a530bc133317f1fef267773bba2e2281bd526de34c0f51c0b44_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_95e4925188ef4152abc4f7d9f4ce1bf9f914b04f8e063cd282111bdba0c57a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e4925188ef4152abc4f7d9f4ce1bf9f914b04f8e063cd282111bdba0c57a81->enter($__internal_95e4925188ef4152abc4f7d9f4ce1bf9f914b04f8e063cd282111bdba0c57a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e977a08d46e603b46e98c7578d09e40800c8d63524a672a3ed2a2d01c0c47560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e977a08d46e603b46e98c7578d09e40800c8d63524a672a3ed2a2d01c0c47560->enter($__internal_e977a08d46e603b46e98c7578d09e40800c8d63524a672a3ed2a2d01c0c47560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenido ";
        
        $__internal_e977a08d46e603b46e98c7578d09e40800c8d63524a672a3ed2a2d01c0c47560->leave($__internal_e977a08d46e603b46e98c7578d09e40800c8d63524a672a3ed2a2d01c0c47560_prof);

        
        $__internal_95e4925188ef4152abc4f7d9f4ce1bf9f914b04f8e063cd282111bdba0c57a81->leave($__internal_95e4925188ef4152abc4f7d9f4ce1bf9f914b04f8e063cd282111bdba0c57a81_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f3d64f3d90beefcc5a52265fc6a87ef9decdab46b15af6876f6d44f2778eb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3d64f3d90beefcc5a52265fc6a87ef9decdab46b15af6876f6d44f2778eb04->enter($__internal_5f3d64f3d90beefcc5a52265fc6a87ef9decdab46b15af6876f6d44f2778eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c79fb61f74b2a0e36f8865750377a4a218cb85d394862bfd0f8b536fea337d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c79fb61f74b2a0e36f8865750377a4a218cb85d394862bfd0f8b536fea337d8->enter($__internal_9c79fb61f74b2a0e36f8865750377a4a218cb85d394862bfd0f8b536fea337d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_9c79fb61f74b2a0e36f8865750377a4a218cb85d394862bfd0f8b536fea337d8->leave($__internal_9c79fb61f74b2a0e36f8865750377a4a218cb85d394862bfd0f8b536fea337d8_prof);

        
        $__internal_5f3d64f3d90beefcc5a52265fc6a87ef9decdab46b15af6876f6d44f2778eb04->leave($__internal_5f3d64f3d90beefcc5a52265fc6a87ef9decdab46b15af6876f6d44f2778eb04_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_980cb67f068536748da07ec29783f2080ad4b32d017f7a7bde36422dfca2c5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980cb67f068536748da07ec29783f2080ad4b32d017f7a7bde36422dfca2c5e8->enter($__internal_980cb67f068536748da07ec29783f2080ad4b32d017f7a7bde36422dfca2c5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_466c256326653d9204bd45b78c6f96e92099896924f89f6afb1387260d85ccbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466c256326653d9204bd45b78c6f96e92099896924f89f6afb1387260d85ccbc->enter($__internal_466c256326653d9204bd45b78c6f96e92099896924f89f6afb1387260d85ccbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_466c256326653d9204bd45b78c6f96e92099896924f89f6afb1387260d85ccbc->leave($__internal_466c256326653d9204bd45b78c6f96e92099896924f89f6afb1387260d85ccbc_prof);

        
        $__internal_980cb67f068536748da07ec29783f2080ad4b32d017f7a7bde36422dfca2c5e8->leave($__internal_980cb67f068536748da07ec29783f2080ad4b32d017f7a7bde36422dfca2c5e8_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ec7fd1ecba9650b899a94251fee763805fb63de972d543b44f256e0bb987dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec7fd1ecba9650b899a94251fee763805fb63de972d543b44f256e0bb987dcb->enter($__internal_4ec7fd1ecba9650b899a94251fee763805fb63de972d543b44f256e0bb987dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da9bc5b2418393acb8b57874ea3f32af7dd36d1623885e69f9f3939ecb21f5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9bc5b2418393acb8b57874ea3f32af7dd36d1623885e69f9f3939ecb21f5f9->enter($__internal_da9bc5b2418393acb8b57874ea3f32af7dd36d1623885e69f9f3939ecb21f5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da9bc5b2418393acb8b57874ea3f32af7dd36d1623885e69f9f3939ecb21f5f9->leave($__internal_da9bc5b2418393acb8b57874ea3f32af7dd36d1623885e69f9f3939ecb21f5f9_prof);

        
        $__internal_4ec7fd1ecba9650b899a94251fee763805fb63de972d543b44f256e0bb987dcb->leave($__internal_4ec7fd1ecba9650b899a94251fee763805fb63de972d543b44f256e0bb987dcb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 90,  233 => 36,  220 => 8,  211 => 7,  193 => 6,  181 => 91,  179 => 90,  135 => 49,  130 => 47,  125 => 45,  115 => 37,  113 => 36,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  60 => 18,  54 => 16,  52 => 15,  47 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
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
    <img src=\"{{ asset('carlet.jpg') }}\" alt=\"\"> <a>CARLET EMF C.F.</a>

    {% if is_granted('ROLE_ADMIN') %}
    <a href=\"{{ path('logout')}}\">Salir</a>
    {% endif %}


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
      <li><a href=\"{{ path(\"usuario_index\")}}\">Gestor usuarios</a></li>
    </ul>
</div>

{% block body %}{% endblock %}

<footer class=\"footer-distributed\">

  <div class=\"footer-left\">

    <h3>Carlet E.M.F<span> Club de Futbol</span></h3>

    <p class=\"footer-links\">
      <a href=\"{{ path(\"inicio\")}}\">Inicio</a>
      ·
      <a href=\"{{ path(\"contacto\")}}\">Contacto</a>
      ·
      <a href=\"{{ path(\"noticias\")}}\">Noticias</a>
      ·
    </p>

    <p class=\"footer-company-name\"> Copyright &copy; 2017,Carlet E.M.F C.F</p>
  </div>

  <div class=\"footer-center\">

    <div>
      <i class=\"fa fa-map-marker\"></i>
      <p><span>Av. Chilly-Mazarin, 2</span> Carlet, España</p>
    </div>

    <div>
      <i class=\"fa fa-phone\"></i>
      <p>+34 662032992</p>
    </div>

    <div>
      <i class=\"fa fa-envelope\"></i>
      <p><a href=\"https://gmail.com\">carletemf@gmail.com</a></p>
    </div>

  </div>

  <div class=\"footer-right\">

    <p class=\"footer-company-about\">
      <span>Sobre nuestro club de futbol</span>
      Esta pagina esta dedicada a informar sobre nuestros equipos de futbol, calendario y resultados de cada equipo.
    </p>

    <div class=\"footer-icons\">

      <a href=\"https://facebook.com\"><img src=\"http://3.bp.blogspot.com/-MQuocq7OzfU/UiXwUY81yQI/AAAAAAAAB0Q/h6-R_R2-buI/s1600/face.png\" title=\"Dale mg a nuestra pagina de facebook\" /></a>
    </div>

  </div>

</footer>
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\examen\\app\\Resources\\views\\base.html.twig");
    }
}

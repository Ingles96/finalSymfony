<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
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
        $__internal_026072f85a277cc126f80196c9a10a6dedf47eea9b6f430e95255ff310e051d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026072f85a277cc126f80196c9a10a6dedf47eea9b6f430e95255ff310e051d0->enter($__internal_026072f85a277cc126f80196c9a10a6dedf47eea9b6f430e95255ff310e051d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_3f9d957cec88b92c26d08e082a1809af907143ea8741691656d9af2ab506d12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9d957cec88b92c26d08e082a1809af907143ea8741691656d9af2ab506d12e->enter($__internal_3f9d957cec88b92c26d08e082a1809af907143ea8741691656d9af2ab506d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

    <a href=\"/usuarios/logout\">Salir</a>
<div class=\"menu\">
    <ul>
      <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a></li>
      <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\">Noticias</a></li>
      <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscripciones");
        echo "\">Inscripciones</a></li>
      <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instalaciones");
        echo "\">Instalaciones</a></li>
      <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a></li>
      <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantilla");
        echo "\">Plantilla</a></li>
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendario_y_horarios");
        echo "\">Calendario y horarios</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultados_y_clasificacion");
        echo "\">Resultados y clasificacion</a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rankings");
        echo "\">Rankings</a></li>
      <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mi_perfil");
        echo "\">Mi perfil</a></li>
    </ul>
</div>

";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
<footer class=\"footer-distributed\">

  <div class=\"footer-left\">

    <h3>Carlet E.M.F<span> Club de Futbol</span></h3>

    <p class=\"footer-links\">
      <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a>
      ·
      <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a>
      ·
      <a href=\"";
        // line 44
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
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "  </body>
</html>
";
        
        $__internal_026072f85a277cc126f80196c9a10a6dedf47eea9b6f430e95255ff310e051d0->leave($__internal_026072f85a277cc126f80196c9a10a6dedf47eea9b6f430e95255ff310e051d0_prof);

        
        $__internal_3f9d957cec88b92c26d08e082a1809af907143ea8741691656d9af2ab506d12e->leave($__internal_3f9d957cec88b92c26d08e082a1809af907143ea8741691656d9af2ab506d12e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d538ab197125817acb52b5cfd4b4cadb708712043fe5568b19cdd62b84cb2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d538ab197125817acb52b5cfd4b4cadb708712043fe5568b19cdd62b84cb2d8->enter($__internal_3d538ab197125817acb52b5cfd4b4cadb708712043fe5568b19cdd62b84cb2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d541fac91458dc5edbe53dbc813aba367ba8acc7619a4e628af292599d09735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d541fac91458dc5edbe53dbc813aba367ba8acc7619a4e628af292599d09735->enter($__internal_3d541fac91458dc5edbe53dbc813aba367ba8acc7619a4e628af292599d09735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenido ";
        
        $__internal_3d541fac91458dc5edbe53dbc813aba367ba8acc7619a4e628af292599d09735->leave($__internal_3d541fac91458dc5edbe53dbc813aba367ba8acc7619a4e628af292599d09735_prof);

        
        $__internal_3d538ab197125817acb52b5cfd4b4cadb708712043fe5568b19cdd62b84cb2d8->leave($__internal_3d538ab197125817acb52b5cfd4b4cadb708712043fe5568b19cdd62b84cb2d8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_953e6d704d89e8836b77df40af3823c84a0edd8fbabdf0b4124d53ab4a212ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953e6d704d89e8836b77df40af3823c84a0edd8fbabdf0b4124d53ab4a212ffe->enter($__internal_953e6d704d89e8836b77df40af3823c84a0edd8fbabdf0b4124d53ab4a212ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1e156627a032e7ff0c1c8409053ca0885763d0e05fd1cc392728938972e2c1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e156627a032e7ff0c1c8409053ca0885763d0e05fd1cc392728938972e2c1e6->enter($__internal_1e156627a032e7ff0c1c8409053ca0885763d0e05fd1cc392728938972e2c1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_1e156627a032e7ff0c1c8409053ca0885763d0e05fd1cc392728938972e2c1e6->leave($__internal_1e156627a032e7ff0c1c8409053ca0885763d0e05fd1cc392728938972e2c1e6_prof);

        
        $__internal_953e6d704d89e8836b77df40af3823c84a0edd8fbabdf0b4124d53ab4a212ffe->leave($__internal_953e6d704d89e8836b77df40af3823c84a0edd8fbabdf0b4124d53ab4a212ffe_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d538a551efc8954af5ac54042edfacf135f5b5fda9f808dada08c34ce50bee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d538a551efc8954af5ac54042edfacf135f5b5fda9f808dada08c34ce50bee4->enter($__internal_3d538a551efc8954af5ac54042edfacf135f5b5fda9f808dada08c34ce50bee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_beac69515c65d844498dcf63efa76a25c3f9af336aa1f1627d3346aa58461eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beac69515c65d844498dcf63efa76a25c3f9af336aa1f1627d3346aa58461eb3->enter($__internal_beac69515c65d844498dcf63efa76a25c3f9af336aa1f1627d3346aa58461eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_beac69515c65d844498dcf63efa76a25c3f9af336aa1f1627d3346aa58461eb3->leave($__internal_beac69515c65d844498dcf63efa76a25c3f9af336aa1f1627d3346aa58461eb3_prof);

        
        $__internal_3d538a551efc8954af5ac54042edfacf135f5b5fda9f808dada08c34ce50bee4->leave($__internal_3d538a551efc8954af5ac54042edfacf135f5b5fda9f808dada08c34ce50bee4_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8a59c84281a15f63184f0ebc5911a2d55779c0df8f9a110464c105a15ccad7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a59c84281a15f63184f0ebc5911a2d55779c0df8f9a110464c105a15ccad7f->enter($__internal_c8a59c84281a15f63184f0ebc5911a2d55779c0df8f9a110464c105a15ccad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74b99d100859a4cbc050e89dfb472e74860f931a548c1927fbe28b8a0f194138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b99d100859a4cbc050e89dfb472e74860f931a548c1927fbe28b8a0f194138->enter($__internal_74b99d100859a4cbc050e89dfb472e74860f931a548c1927fbe28b8a0f194138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_74b99d100859a4cbc050e89dfb472e74860f931a548c1927fbe28b8a0f194138->leave($__internal_74b99d100859a4cbc050e89dfb472e74860f931a548c1927fbe28b8a0f194138_prof);

        
        $__internal_c8a59c84281a15f63184f0ebc5911a2d55779c0df8f9a110464c105a15ccad7f->leave($__internal_c8a59c84281a15f63184f0ebc5911a2d55779c0df8f9a110464c105a15ccad7f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 85,  218 => 31,  205 => 8,  196 => 7,  178 => 6,  166 => 86,  164 => 85,  120 => 44,  115 => 42,  110 => 40,  100 => 32,  98 => 31,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  47 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
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

    <a href=\"/usuarios/logout\">Salir</a>
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
", "::base.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app/Resources\\views/base.html.twig");
    }
}

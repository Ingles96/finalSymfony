<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/carlet')) {
                // carlet_index
                if ('/carlet' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'carlet_index');
                    }

                    return array (  '_controller' => 'EsqueletBundle\\Controller\\CarletController::indexAction',  '_route' => 'carlet_index',);
                }

                // nuevo_jugador
                if ('/carlet/new' === $pathinfo) {
                    return array (  '_controller' => 'EsqueletBundle\\Controller\\CarletController::nuevoAction',  '_route' => 'nuevo_jugador',);
                }

                // mostrar_jugador
                if (preg_match('#^/carlet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostrar_jugador')), array (  '_controller' => 'EsqueletBundle\\Controller\\CarletController::mostrarAction',));
                }

                // editar_jugador
                if (preg_match('#^/carlet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editar_jugador')), array (  '_controller' => 'EsqueletBundle\\Controller\\CarletController::editarAction',));
                }

                // borrar_jugador
                if (preg_match('#^/carlet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_jugador')), array (  '_controller' => 'EsqueletBundle\\Controller\\CarletController::borrarAction',));
                }

            }

            // calendario_y_horarios
            if ('/calendario_y_horarios' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::calendarioAction',  '_route' => 'calendario_y_horarios',);
            }

            // contacto
            if ('/contacto' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::contactoAction',  '_route' => 'contacto',);
            }

        }

        // all
        if ('/all' === $pathinfo) {
            return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::allAction',  '_route' => 'all',);
        }

        if (0 === strpos($pathinfo, '/in')) {
            // inicio
            if ('/inicio' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::inicioAction',  '_route' => 'inicio',);
            }

            // inscripciones
            if ('/inscripciones' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::inscripcionesAction',  '_route' => 'inscripciones',);
            }

            // instalaciones
            if ('/instalaciones' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::instalacionesAction',  '_route' => 'instalaciones',);
            }

        }

        // noticias
        if ('/noticias' === $pathinfo) {
            return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::noticiasAction',  '_route' => 'noticias',);
        }

        // plantilla
        if ('/plantilla' === $pathinfo) {
            return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::plantillaAction',  '_route' => 'plantilla',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // resultados_y_clasificacion
            if ('/resultados_y_clasificacion' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::resultados_y_clasificacionAction',  '_route' => 'resultados_y_clasificacion',);
            }

            // registro
            if ('/registro' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::registroAction',  '_route' => 'registro',);
            }

            // user_registration
            if ('/register' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\UsuariosController::registerAction',  '_route' => 'user_registration',);
            }

        }

        // rankings
        if ('/rankings' === $pathinfo) {
            return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::rankingsAction',  '_route' => 'rankings',);
        }

        // mi_perfil
        if ('/mi_perfil' === $pathinfo) {
            return array (  '_controller' => 'EsqueletBundle\\Controller\\DefaultController::mi_perfilAction',  '_route' => 'mi_perfil',);
        }

        if (0 === strpos($pathinfo, '/examen')) {
            // usuario_index
            if ('/examen' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'EsqueletBundle\\Controller\\ExamenController::indexAction',  '_route' => 'usuario_index',);
            }

            // actualizar_usuario
            if (preg_match('#^/examen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualizar_usuario')), array (  '_controller' => 'EsqueletBundle\\Controller\\ExamenController::actualizarAction',));
            }

            // mostrar_usuario
            if (preg_match('#^/examen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mostrar_usuario')), array (  '_controller' => 'EsqueletBundle\\Controller\\ExamenController::mostrarAction',));
            }

            // borrar_usuario
            if (preg_match('#^/examen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrar_usuario')), array (  '_controller' => 'EsqueletBundle\\Controller\\ExamenController::borrarAction',));
            }

        }

        // usuario
        if ('/usuario' === $pathinfo) {
            return array (  '_controller' => 'EsqueletBundle\\Controller\\UsuariosController::usuarioAction',  '_route' => 'usuario',);
        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios
            if ('/usuarios' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\UsuariosController::usuariosAction',  '_route' => 'usuarios',);
            }

            // login
            if ('/usuarios/login' === $pathinfo) {
                return array (  '_controller' => 'EsqueletBundle\\Controller\\UsuariosController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ('/usuarios/logout' === $pathinfo) {
                return array('_route' => 'logout');
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

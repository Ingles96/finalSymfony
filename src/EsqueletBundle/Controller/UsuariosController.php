<?php
namespace EsqueletBundle\Controller;

use EsqueletBundle\Form\usuarioType;
use EsqueletBundle\Entity\usuario;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UsuariosController extends Controller
{

  /**
   * @Route("/usuario", name="usuario")
   */
  public function usuarioAction()
  {
    // whatever *your* User object is
    $user = new Usuario();
    $plainPassword = '1234';
    $encoder = $this->container->get('security.password_encoder');
    $encoded = $encoder->encodePassword($user, $plainPassword);
    $user->setPassword($encoded);
    $user->setUserName("admin");
    $roles = '{"ROLE_ADMIN", "ROLE_SUPER_ADMIN"}';
    $user->setEmail("josep96@gmail.com");
    $em = $this->getDoctrine()->getManager();
    $em->persist($user);
    $em->flush();
    return $this->render('EsqueletBundle:Default:usuario.html.twig');
  }

  /**
   * @Route("/usuarios", name="usuarios")
   */
  public function usuariosAction()
  {
      return $this->render('EsqueletBundle:Default:inicio.html.twig');
  }

    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $usuario = new Usuario();
        $form = $this->createForm(usuarioType::class, $usuario);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
            ->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return new Response ("Usuario registrado");
        }

        return $this->render(
            'EsqueletBundle:registro:register.html.twig',
            array('form' => $form->createView())
        );
    }

               /**
            * @Route("/usuarios/login", name="login")
            */
           public function loginAction(Request $request)
           {
             $authenticationUtils = $this->get('security.authentication_utils');
            // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();

            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('EsqueletBundle:login:login.html.twig', array(
                'last_username' => $lastUsername,
                'error'         => $error,
            ));

           }
}

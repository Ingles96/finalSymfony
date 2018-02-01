<?php

namespace EsqueletBundle\Controller;

use EsqueletBundle\Entity\usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Carlet controller.
 *
 * @Route("examen")
 */
class ExamenController extends Controller
{
    /**
     * @Route("/", name="usuario_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('EsqueletBundle:usuario')->findAll();

        return $this->render('usuario/index.html.twig', array(
            'user' => $user,
        ));
    }

//ACTUALIZAR USUARIO
    /**
     * @Route("/{id}", name="actualizar_usuario")
     */
     public function actualizarAction(Request $request,$id)
   {
       $entity = $this->getDoctrine()->getRepository('EsqueletBundle:usuario')->find($id);

       if(!$entity){return $this->redirectToRoute('usuario_index');}
       $form = $this->createForm(\EsqueletBundle\Form\usuarioType::class, $entity);
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid())
       {
           $DB = $this->getDoctrine()->getManager();
           $DB->persist($entity);
           $DB->flush();
           return $this->redirectToRoute('Campo_Actualizar', ["id" => $id]);
       }
       return $this->render("EsqueletBundle:usuario:index.html.twig", array('user'=>$user->createView() ));
   }


    //MOSTRAR USUARIO
        /**
         * @Route("/{id}", name="mostrar_usuario")
         */
        public function mostrarAction(usuario $usuario)
        {
            $deleteForm = $this->createDeleteForm($usuario);

            return $this->render('usuario/mostrar.html.twig', array(
                'usuario' => $usuario,
                'delete_form' => $deleteForm->createView(),
            ));
        }


    //BORRAR USUARIO
        /**
         * @Route("/{id}", name="borrar_usuario")
         */
        public function borrarAction(Request $request, usuario $usuario)
        {
            $form = $this->createDeleteForm($usuario);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($usuario);
                $em->flush();
            }

            return $this->redirectToRoute('usuario_index');
        }


/**
 * Creates a form to delete a usuario entity.
 *
 * @param usuario $usuario The usuario entity
 *
 * @return \Symfony\Component\Form\Form The form
 */
private function createDeleteForm(usuario $usuario)
{
    return $this->createFormBuilder()
        ->setAction($this->generateUrl('usuario_index', array('id' => $usuario->getId())))
        ->setMethod('DELETE')
        ->getForm()
    ;
}
}

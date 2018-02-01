<?php

namespace EsqueletBundle\Controller;

use EsqueletBundle\Entity\Carlet;
use EsqueletBundle\Entity\Plantilla;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Carlet controller.
 *
 * @Route("carlet")
 */
class CarletController extends Controller
{
    /**
     * @Route("/", name="carlet_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $jugadores = $em->getRepository('EsqueletBundle:Carlet')->findAll();

        return $this->render('carlet/index.html.twig', array(
            'jugadores' => $jugadores,
        ));
    }

//NUEVO JUGADOR
    /**
     * @Route("/new", name="nuevo_jugador")
     */
    public function nuevoAction(Request $request)
    {
        $carlet = new Carlet();
        $form = $this->createForm('EsqueletBundle\Form\CarletType', $carlet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carlet);
            $em->flush();

            return $this->redirectToRoute('nuevo_jugador', array('id' => $carlet->getId()));
        }

        return $this->render('carlet/nuevo.html.twig', array(
            'carlet' => $carlet,
            'form' => $form->createView(),
        ));
    }

//MOSTRAR JUGADOR
    /**
     * @Route("/{id}", name="mostrar_jugador")
     */
    public function mostrarAction(Carlet $carlet)
    {
        $deleteForm = $this->createDeleteForm($carlet);

        return $this->render('carlet/mostrar.html.twig', array(
            'carlet' => $carlet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

//EDITAR JUGADOR
    /**
     * @Route("/{id}/edit", name="editar_jugador")
     */
    public function editarAction(Request $request, Carlet $carlet)
    {
        $deleteForm = $this->createDeleteForm($carlet);
        $editForm = $this->createForm('EsqueletBundle\Form\CarletType', $carlet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('editar_jugador', array('id' => $carlet->getId()));
        }

        return $this->render('carlet/editar.html.twig', array(
            'carlet' => $carlet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


//BORRAR JUGADOR
    /**
     * @Route("/{id}", name="borrar_jugador")
     */
    public function borrarAction(Request $request, Carlet $carlet)
    {
        $form = $this->createDeleteForm($carlet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($carlet);
            $em->flush();
        }

        return $this->redirectToRoute('carlet_index');
    }

    /**
     * Creates a form to delete a carlet entity.
     *
     * @param Carlet $carlet The carlet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Carlet $carlet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carlet_index', array('id' => $carlet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

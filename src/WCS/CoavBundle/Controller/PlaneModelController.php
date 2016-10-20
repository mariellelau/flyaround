<?php

namespace WCS\CoavBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WCS\CoavBundle\Entity\PlaneModel;

/**
 * PlaneModel controller.
 *
 */
class PlaneModelController extends Controller
{
    /**
     * Lists all PlaneModel entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $planeModels = $em->getRepository('WCSCoavBundle:PlaneModel')->findAll();

        return $this->render('planemodel/index.html.twig', array(
            'planeModels' => $planeModels,
        ));
    }

    /**
     * Finds and displays a PlaneModel entity.
     *
     */
    public function showAction(PlaneModel $planeModel)
    {

        return $this->render('planemodel/show.html.twig', array(
            'planeModel' => $planeModel,
        ));
    }
}

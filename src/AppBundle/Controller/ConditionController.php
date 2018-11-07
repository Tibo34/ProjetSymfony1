<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ConditionController extends Controller
{  

    /**
     * @Route("/conditions", name="Condition")
     */
    public function conditionsAction(Request $name)
    {
        return $this->render('conditions/conditions.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class ContactController extends Controller
{
    /**
     * @Route("/contact",methods={"POST"})
     */
    public function contactpostAction(){
        $request=Request::createFromGlobals();
        $objet='TML';
        if('dev'===$this->get('kernel')->getEnvironment())
        {
            $objet.=' dev ';
        }
        $message=$request->get('identite')." : ".$request->request->get('message');
        $mail=\Swift_Message::newInstance()
        ->setSubject($objet)
        ->setFrom('thibautmolina@yahoo.fr')
        ->setTo('thibaut.molina@vivelys')       
        ->setBody($message);
        $retour=$this->get('mailer')->send($mail);
        return $this->render('contact/contact.html.php',array('confirmation'=>$retour,'message'=>$message,"mail"=>$mail->getTo()));
    }

    /**
     * @Route("/contact")
     */
    public function contactAction(Request $name)
    {
         return $this->render('contact/contact.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    

   
}
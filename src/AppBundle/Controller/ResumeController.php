<?php

namespace AppBundle\Controller;

use AppBundle\Service\GitHub;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ResumeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $data = array();

        $form = $this->createFormBuilder($data)
            ->add('username', TextType::class, array('label' => 'Username: ', 'attr' => array('pattern' => '.{2,}')))
            ->add('save', SubmitType::class, array('label' => 'Generate'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $username = htmlspecialchars(strip_tags($form['username']->getData()));
            return $this->redirectToRoute('generate_resume', array('username' => $username));
        }

        return $this->render('resume/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/resume/{username}", name="generate_resume")
     */
     public function generateResumeAction($username)
     {
        $gitHub = new GitHub($username);

        $isUserExists = $gitHub->isUserExists();
        if ($isUserExists !== true) {
            $this->get('session')->getFlashBag()->set('error', $isUserExists);
            return $this->redirectToRoute('error');
        }

         return $this->render('resume/show.html.twig', array(
             'user'     => $gitHub->getUserData(),
             'repos'    => $gitHub->getUserRepos(),
             'langs'    => $gitHub->getUserLangs(),
             'total'    => count($gitHub->getUserRepos()),
         ));
     }

    /**
     * @Route("/error", name="error")
     */
     public function errorAction()
     {
         return $this->render('resume/error.html.twig');
     }
}

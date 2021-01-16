<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Karan');
       
    }
    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers=['Make sure your cat is sitting perfectly still',
                  'Honestly, I like furry shoes better than my cat',
                   'Maybe...try saying the spell backwards'];
        return $this->render('questions/show.html.twig',['questions'=>ucwords(str_replace('-',' ',$slug)),'answer'=>$answers]);
       // return new Response(sprintf('Future page to show a question "%s"!',$slug));
    }
}
?>



<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    
    /**
     * @Route("/",name="app_homepage")
     */
    public function homepage()
    {

        $a=['Make sure your cat is sitting perfectly still',
                  'Honestly, I like furry shoes better than my cat',
                   'Maybe...try saying the spell backwards'];
        return $this->render('questions/homepage.html.twig',['questions'=>$a]);
       
    }
    /**
     * @Route("/questions/{slug}",name="app_question_show")
     */
    public function show($slug)
    {
        $arr=['Make sure your cat is sitting perfectly still',
                  'Honestly, I like furry shoes better than my cat',
                   'Maybe...try saying the spell backwards'];
        return $this->render('questions/show.html.twig',['question'=>ucwords(str_replace('-',' ',$slug)),'answers'=>$arr]);
       // return new Response(sprintf('Future page to show a question "%s"!',$slug));
    }
}
?>



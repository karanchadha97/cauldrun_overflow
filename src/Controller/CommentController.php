<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
class CommentController extends AbstractController
{
     /**
     * @Route("/comments/{id}/vote/{direction<up|down>}",methods="POST")
     */

    public function commentVote($id,$direction)
    {
        if($direction==="up")
        {
            $currentVoteCount=rand(7,100);
        }
        else
        {
            $currentVoteCount=rand(0,5);
        }
        return $this->json(['votes'=>$currentVoteCount]);
    }
}
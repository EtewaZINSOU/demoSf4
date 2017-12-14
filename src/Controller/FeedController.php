<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/10/17
 * Time: 15:47
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('feed.html.twig',['number' => $number]);

//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
    }

}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class BasicController extends AbstractController
{
    /**
     * @Route("/home")
     * @return Response
     */
    public function home(): Response
    {
        $html = '<html><body><h1>Bienvenue !</h1></body></html>';

        return new response($html);
    }

    /**
     * @route("another_page")
     * @return RedirectResponse
     */
    public function  anotherPage(): RedirectResponse
    {
        $url = $this->generateUrl('app_basic_home');
        return new RedirectResponse(($url));
        /**
         * ou
         * return $this->redirectToRoute('app_basic_home');
         *
         * et si on souhaite rediriger vers une url on peut
         * si url externe:
         * return $this ->redirect('https://www.google.fr');
         *
         * si url interne:
         * * return $this ->redirect('/home');
         */
    }
}
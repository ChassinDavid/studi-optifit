<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
Si on veut mettre une URL de base... si on souhaite que toutes nos routes commencent par /blog
#[Route('/blog')]
**/
class DefaultController extends AbstractController
{
    #[Route()]
    public function index()
    {
        return $this ->redirect('/login');
    }
    #[Route('/login', name:'login')]
    public function login(): Response
    {
        return $this->render('default/login.html.twig', [
            'name' => 'david',
        ]);
    }
    #[Route('/bonjour/{name}.{_format}', name: 'hello', requirements: ['name'=> '\d', '_format'=>'html|json'], methods: ['POST'])]
    public function Posthello(string $name)
    {
        return new Response('<body>Bonjour à toi '.$name.'</body>');
    }
    #[Route('/bonjour/{name}.{_format}', name: 'hello', requirements: ['name'=> '\d', '_format'=>'html|json'], methods: ['GET'])]
    public function Gethello(string $name)
    {
        return new Response('<body>Bonjour, tu es bien  '.$name.'</body>');
    }

}

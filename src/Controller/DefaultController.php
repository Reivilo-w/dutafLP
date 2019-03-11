<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(ArticleRepository $articleRepository)
    {
        return $this->render('default/index.html.twig', [
            'articles' => $articleRepository->findAll()
        ]);
    }

    /**
     * @Route("/acheter/{id}", name="acheter")
     */
    public function acheter(Article $id)
    {
        return $this->render('default/acheter.html.twig', [
            'article' => $id
        ]);
    }
}

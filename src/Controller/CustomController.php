<?php

declare(strict_types=1);

namespace Fk\Example\Controller;

use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(defaults: ['_routeScope' => ['storefront']])]
class CustomController extends StorefrontController
{
    public function __construct()
    {
    }

    #[Route(path: '/fk/page', name: 'frontend.fk.example.page', methods: ['GET'])]
    public function page(): Response
    {
        return $this->renderStorefront('@FkExample/storefront/fk/page.html.twig', [
            'page' => [
                'product' => [
                    'id' => 1,
                    'name' => 'product 1',
                ],
            ],
        ]);
    }
}
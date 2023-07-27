<?php

namespace App\Controller;

use App\Form\CommuneType;
use App\Form\DepartementType;
use App\Service\ApiEtablissementsPublicsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    public function __construct(
        private readonly ApiEtablissementsPublicsService $apiEtablissementsPublicsService
    )
    {
    }

    #[Route('/', name: 'app_search_home')]
    public function home(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/departement', name: 'app_search_departement')]
    public function department(Request $request): Response
    {
        $formDepartement = $this->createForm(DepartementType::class);

        $formDepartement->handleRequest($request);

        if ($formDepartement->isSubmitted() && $formDepartement->isValid()) {
            $data = $formDepartement->getData();

            $etablissements = $this->apiEtablissementsPublicsService->getEtablissementsByDepartment(
                $data['numero'],
                $data['type']
            );
        }

        return $this->render('search/index.html.twig', [
            'form' => $formDepartement->createView(),
            'etablissements' => $etablissements ?? null,
        ]);
    }

    #[Route('/commune', name: 'app_search_commune')]
    public function commune(Request $request): Response
    {
        $formCommune = $this->createForm(CommuneType::class);

        $formCommune->handleRequest($request);

        if ($formCommune->isSubmitted() && $formCommune->isValid()) {
            $data = $formCommune->getData();

            $etablissements = $this->apiEtablissementsPublicsService->getEtablissementsByCommune(
                $data['codePostal'],
                $data['type']
            );
        }

        dump($etablissements ?? []);
        return $this->render('search/index.html.twig', [
            'form' => $formCommune->createView(),
            'etablissements' => $etablissements ?? null,
        ]);
    }
}

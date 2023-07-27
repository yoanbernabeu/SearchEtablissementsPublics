<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ApiEtablissementsPublicsService
{
    public function __construct(
        private readonly HttpClientInterface $client
    ) {
    }

    public function getEtablissementsByDepartment(int $department, string $typeOrganisme): array
    {
        return $this->client->request(
            'GET',
            sprintf('departements/%d/%s', $department, $typeOrganisme)
        )->toArray();
    }

    public function getEtablissementsByCommune(int $codePostal, string $typeOrganisme): array
    {
        return $this->client->request(
            'GET',
            sprintf('communes/%d/%s', $codePostal, $typeOrganisme)
        )->toArray();
    }
}

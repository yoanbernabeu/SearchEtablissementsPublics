<?php

declare(strict_types=1);

namespace App\Config;

enum TypeOrganisme: string
{
    case accompagnement_personnes_agees = 'Plateforme d\'accompagnement et de répit pour les aidants de personnes âgées';
    case adil = 'Information sur le logement (agenceAgence départementale pour l’information sur le logement (ADIL) départementale, Adil)';
    case afpa = 'Association nationale pour la formation professionnelle des adultes (AFPA), réseau local';
    case anah = 'Agence nationale de l’habitat (ANAH), réseau local';
    case apec = 'Association pour l’emploi des cadres (APEC)';
    case apecita = 'Association pour l\'emploi des cadres, ingénieurs et techniciens de l\'agriculture et de l\'agroalimentaire (APECITA), réseau local';
    case ars = 'Agence régionale de santé (ARS)';
    case ars_antenne = 'Délégation territoriale de l\'Agence régionale de santé';
    case banque_de_france = 'Banque de France, succursale';
    case bav = 'Bureau d\'aide aux victimes';
    case bsn = 'Bureau ou centre du service national';
    case caa = 'Cour administrative d’appel';
    case caf = 'Caisse d’allocations familiales (CAF)';
    case carsat = 'Caisse d\'assurance retraite et de la santé au travail (CARSAT)';
    case ccas = 'Centre communal d\'action sociale';
    case cci = 'Chambre de commerce et d’industrie (CCI)';
    case cdas = 'Centre départemental d\'action sociale';
    case cddp = 'Centre départemental de documentation pédagogique';
    case cdg = 'Centre de gestion de la fonction publique territoriale';
    case centre_detention = 'Centre de détention';
    case centre_impots_fonciers = 'Centre des impôts foncier et cadastre';
    case centre_penitentiaire = 'Centre pénitentiaire';
    case centre_social = 'Centre social';
    case cesr = 'Conseil économique, social et environnemental régional';
    case cg = 'Conseil départemental';
    case chambre_agriculture = 'Chambre d’agriculture';
    case chambre_metier = 'Chambre de métiers et de l’artisanat';
    case cicas = 'Centre d’information de conseil et d\'accueil des salariés (CICAS)';
    case cidf = 'Centre d’information sur les droits des femmes et des familles (CIDFF)';
    case cij = 'Information jeunesse, réseau local';
    case cio = 'Centre d’information et d’orientation (CIO)';
    case civi = 'Commission d\'indemnisation des victimes d\'infraction';
    case clic = 'Point d\'information local dédié aux personnes âgées';
    case cnfpt = 'Centre national de la fonction publique territoriale (CNFPT), réseau local';
    case cnra = 'Centre en route de la navigation aérienne';
    case commissariat_police = 'Commissariat de police';
    case commission_conciliation = 'Commission départementale de conciliation';
    case conciliateur_fiscal = 'Conciliateur fiscal';
    case conseil_culture = 'Conseil de la culture, de l’éducation et de l’environnement';
    case cour_appel = 'Cour d’appel';
    case cpam = 'Caisse primaire d’assurance maladie (CPAM)';
    case cr = 'Conseil régional';
    case crc = 'Chambre régionale ou territoriale des comptes';
    case crdp = 'Centre régional de documentation pédagogique';
    case creps = 'Centre régional d’éducation populaire et de sports (CREPS)';
    case crfpn = 'Centre ou délégation régionale de recrutement et de formation de la police nationale';
    case crib = 'Centre de ressources et d\'information des bénévoles (CRIB)';
    case crous = 'CROUS et ses antennes';
    case csl = 'Centre de semi-liberté';
    case dac = 'Direction de l’aviation civile';
    case dd_femmes = 'Droit des femmes et égalité, mission départementale';
    case dd_fip = 'Direction départementale des finances publiques';
    case ddcs = 'Direction départementale de la cohésion sociale (DDCS)';
    case ddcspp = 'Direction départementale de la cohésion sociale et de la protection des populations (DDCSPP)';
    case ddpjj = 'Direction territoriale de la protection judiciaire de la jeunesse';
    case ddpp = 'Protection des populations (direction départementale, DDPP)';
    case ddsp = 'Direction départementale ou service de la sécurité publique';
    case ddt = 'Direction départementale des territoires -et de la mer- (DDT)';
    case defenseur_droits = 'Défenseur des droits';
    case did_routes = 'Direction interdépartementale des routes';
    case dir_mer = 'Direction interrégionale de la mer';
    case dir_meteo = 'Météo France, direction interrégionale';
    case dir_pj = 'Direction interrégionale de la police judiciaire';
    case direccte = 'Direction régionale des entreprises, de la concurrence, de la consommation, du travail et de l\'emploi';
    case direccte_ut = 'Unité territoriale - Direction régionale des entreprises, de la concurrence, de la consommation, du travail et de l\'emploi (DIRECCTE)';
    case diren = 'Direction régionale de l\'environnement';
    case drac = 'Direction régionale des affaires culturelles (DRAC)';
    case draaf = 'Direction régionale de l\'alimentation, de l\'agriculture et de la forêt (DRAAF)';
    case drddi = 'Direction régionale des douanes et des droits indirects';
    case dreal = 'Direction régionale de l\'environnement, de l\'aménagement et du logement (DREAL)';
    case driaf = 'Direction régionale interdépartementale de l\'alimentation, de l\'agriculture et de la forêt';
    case drjscs = 'Direction régionale de la jeunesse, des sports et de la cohésion sociale (DRJSCS)';
    case drome = 'Direction régionale de l\'Office français de l\'immigration et de l\'intégration (OFII)';
    case drraf = 'Direction régionale et interdépartementale de l\'hébergement et du logement (DRIHL)';
    case drsp = 'Direction régionale du service médical (DRSM)';
    case drt = 'Direction régionale du travail, de l\'emploi et de la formation professionnelle';
    case esat = 'Établissement et service d\'aide par le travail (ESAT)';
    case fongecif = 'Fonds de gestion des congés individuels de formation (FONGECIF), réseau local';
    case gendarmerie = 'Brigade de gendarmerie';
    case greta = 'Groupe de recherche et d\'étude technologiques de l\'académie (GRETA), réseau local';
    case hlm = 'Office public d\'HLM';
    case hotel_tresor_public = 'Hôtel des finances';
    case iedom = 'Institut d\'émission des départements d\'outre-mer';
    case ihedn = 'Institut des hautes études de défense nationale';
    case inspection_academique = 'Inspection académique - direction des services départementaux de l’éducation nationale';
    case inspection_travail = 'Inspection du travail';
    case ira = 'Institut régional d’administration';
    case jsp = 'Jeunes sapeurs-pompiers, unité locale';
    case lycee = 'Lycée';
    case mairie = 'Mairie';
    case maison_centrale = 'Maison centrale';
    case maison_handicapes = 'Maison départementale des personnes handicapées (MDPH)';
    case maison_justice = 'Maison de justice et du droit';
    case mission_locale = 'Mission locale et Permanence d’accueil, d’information et d’orientation (PAIO)';
    case notaire = 'Chambre des notaires';
    case ofii = 'Office français de l\'immigration et de l\'intégration (OFII)';
    case office_tourisme = 'Office de tourisme';
    case onac = 'Office national des anciens combattants et victimes de guerre (ONAC)';
    case paio = 'Permanence d\'accueil, d\'information et d\'orientation (PAIO)';
    case parloir_avocat = 'Parloir avocat';
    case pmi = 'Protection maternelle et infantile (PMI), centre de protection maternelle et infantile';
    case pole_emploi = 'Pôle emploi';
    case prefecture = 'Préfecture';
    case prison = 'Maison d\'arrêt';
    case rsi = 'Régime social des indépendants (RSI), réseau local';
    case secu_mine = 'Sécurité sociale pour les mines (CANSSM)';
    case secu_sociale = 'Caisse générale de sécurité sociale (CGSS)';
    case service_penitentiaire = 'Service pénitentiaire d\'insertion et de probation (SPIP)';
    case sdis = 'Service départemental d\'incendie et de secours (SDIS)';
    case sous_pref = 'Sous-préfecture';
    case tribunal_admin = 'Tribunal administratif';
    case tribunal_commerce = 'Tribunal de commerce';
    case tribunal_instance = 'Tribunal d\'instance';
    case tribunal_grande_instance = 'Tribunal de grande instance (TGI)';
    case urssaf = 'Union de recouvrement des cotisations de sécurité sociale et d\'allocations familiales (URSSAF)';

    public static function toArray(): array
    {
        $array = [];
        foreach (self::cases() as $case) {
            $array[$case->value] = $case->name;
        }

        return $array;
    }
}

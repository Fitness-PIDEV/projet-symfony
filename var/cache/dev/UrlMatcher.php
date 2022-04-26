<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/ajouterCategorie' => [[['_route' => 'addcategorie', '_controller' => 'App\\Controller\\CategorieController::ajoutercategorie'], null, null, null, false, false, null]],
        '/listCategorie' => [[['_route' => 'Categorielist', '_controller' => 'App\\Controller\\CategorieController::listCategorie'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours', '_controller' => 'App\\Controller\\CoursController::index'], null, null, null, false, false, null]],
        '/ajouterCours' => [[['_route' => 'addCours', '_controller' => 'App\\Controller\\CoursController::ajouterCours'], null, null, null, false, false, null]],
        '/listCours' => [[['_route' => 'Courslist', '_controller' => 'App\\Controller\\CoursController::listCours'], null, null, null, false, false, null]],
        '/listCoursfront' => [[['_route' => 'Courslistfront', '_controller' => 'App\\Controller\\CoursController::listcoursfront'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/ajouterProduit' => [[['_route' => 'addproduits', '_controller' => 'App\\Controller\\ProduitController::ajouter'], null, null, null, false, false, null]],
        '/listProduit' => [[['_route' => 'Produitslist', '_controller' => 'App\\Controller\\ProduitController::listProduit'], null, null, null, false, false, null]],
        '/listProduitfront' => [[['_route' => 'Produitslistfront', '_controller' => 'App\\Controller\\ProduitController::listProduitfront'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'recherche_prod', '_controller' => 'App\\Controller\\ProduitController::Recherche'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\ProduitController::stat'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/de(?'
                    .'|lete(?'
                        .'|C(?'
                            .'|ategorie/([^/]++)(*:203)'
                            .'|ours/([^/]++)(*:224)'
                        .')'
                        .'|Produit/([^/]++)(*:249)'
                    .')'
                    .'|tail(?'
                        .'|cours/([^/]++)(*:279)'
                        .'|/([^/]++)(*:296)'
                    .')'
                .')'
                .'|/update(?'
                    .'|C(?'
                        .'|ategorie/([^/]++)(*:337)'
                        .'|ours/([^/]++)(*:358)'
                    .')'
                    .'|Produit/([^/]++)(*:383)'
                .')'
                .'|/produit/([^/]++)/(?'
                    .'|valide(*:419)'
                    .'|refuser(*:434)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        203 => [[['_route' => 'categorieDelete', '_controller' => 'App\\Controller\\CategorieController::deleteCategorie'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'coursDelete', '_controller' => 'App\\Controller\\CoursController::deleteCours'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'produitDelete', '_controller' => 'App\\Controller\\ProduitController::deleteProduit'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'cours_detail', '_controller' => 'App\\Controller\\CoursController::detailC'], ['id'], null, null, false, true, null]],
        296 => [[['_route' => 'produit_detail', '_controller' => 'App\\Controller\\ProduitController::detailP'], ['id'], null, null, false, true, null]],
        337 => [[['_route' => 'updatecategorie', '_controller' => 'App\\Controller\\CategorieController::updateCategorie'], ['id'], null, null, false, true, null]],
        358 => [[['_route' => 'updatecours', '_controller' => 'App\\Controller\\CoursController::updateCours'], ['id'], null, null, false, true, null]],
        383 => [[['_route' => 'updateproduits', '_controller' => 'App\\Controller\\ProduitController::updateProduit'], ['id'], null, null, false, true, null]],
        419 => [[['_route' => 'produit_valide', '_controller' => 'App\\Controller\\ProduitController::valide'], ['id'], null, null, false, false, null]],
        434 => [
            [['_route' => 'produit_refuser', '_controller' => 'App\\Controller\\ProduitController::refuser'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

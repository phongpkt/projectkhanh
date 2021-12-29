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
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/customer' => [[['_route' => 'customer', '_controller' => 'App\\Controller\\CustomerController::index'], null, null, null, false, false, null]],
        '/employee' => [[['_route' => 'employee', '_controller' => 'App\\Controller\\EmployeeController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order_index', '_controller' => 'App\\Controller\\OrderController::orderIndex'], null, null, null, false, false, null]],
        '/order/add' => [[['_route' => 'order_add', '_controller' => 'App\\Controller\\OrderController::orderAdd'], null, null, null, false, false, null]],
        '/order/sort/date/asc' => [[['_route' => 'sort_order_date_asc', '_controller' => 'App\\Controller\\OrderController::sortOrderDateAsc'], null, null, null, false, false, null]],
        '/order/sort/date/desc' => [[['_route' => 'sort_order_date_desc', '_controller' => 'App\\Controller\\OrderController::sortOrderDateDesc'], null, null, null, false, false, null]],
        '/getproductlist' => [[['_route' => 'product_list_api', '_controller' => 'App\\Controller\\ProductController::getproductListAPI'], null, ['GET' => 0], null, false, false, null]],
        '/products' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::productIndex'], null, null, null, false, false, null]],
        '/product/add' => [[['_route' => 'product_add', '_controller' => 'App\\Controller\\ProductController::productAdd'], null, null, null, false, false, null]],
        '/product/sort/price/asc' => [[['_route' => 'sort_product_price_asc', '_controller' => 'App\\Controller\\ProductController::sortProductPriceAsc'], null, null, null, false, false, null]],
        '/product/sort/price/desc' => [[['_route' => 'sort_product_price_desc', '_controller' => 'App\\Controller\\ProductController::sortProductIdDesc'], null, null, null, false, false, null]],
        '/product/search' => [[['_route' => 'search_product_by_name', '_controller' => 'App\\Controller\\ProductController::searchProductByName'], null, null, null, false, false, null]],
        '/vendor' => [[['_route' => 'vendor', '_controller' => 'App\\Controller\\VendorController::index'], null, null, null, false, false, null]],
        '/category/add' => [[['_route' => 'category_add', '_controller' => 'App\\Controller\\CategoryController::categoryAdd'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/order/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:196)'
                        .'|lete/([^/]++)(*:217)'
                    .')'
                    .'|edit/([^/]++)(*:239)'
                .')'
                .'|/product/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:278)'
                        .'|lete/([^/]++)(*:299)'
                    .')'
                    .'|edit/([^/]++)(*:321)'
                .')'
                .'|/category/edit/([^/]++)(*:353)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        196 => [[['_route' => 'order_detail', '_controller' => 'App\\Controller\\OrderController::orderDetail'], ['id'], null, null, false, true, null]],
        217 => [[['_route' => 'order_delete', '_controller' => 'App\\Controller\\OrderController::orderDelete'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'order_edit', '_controller' => 'App\\Controller\\OrderController::orderEdit'], ['id'], null, null, false, true, null]],
        278 => [[['_route' => 'product_detail', '_controller' => 'App\\Controller\\ProductController::productDetail'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::productDelete'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::productEdit'], ['id'], null, null, false, true, null]],
        353 => [
            [['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::categoryEdit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

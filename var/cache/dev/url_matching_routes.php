<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_admin_adminlogin', '_controller' => 'App\\Controller\\AdminController::adminLogin'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\Carrito\\CartController::index'], null, null, null, false, false, null]],
        '/categoria' => [[['_route' => 'app_categoria_index', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categoria/new' => [[['_route' => 'app_categoria_new', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cliente' => [[['_route' => 'app_cliente_index', '_controller' => 'App\\Controller\\Cliente\\ClienteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cliente/new' => [[['_route' => 'app_cliente_new', '_controller' => 'App\\Controller\\Cliente\\ClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consulta' => [[['_route' => 'app_consulta_index', '_controller' => 'App\\Controller\\Consulta\\ConsultaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/consulta/new' => [[['_route' => 'app_consulta_new', '_controller' => 'App\\Controller\\Consulta\\ConsultaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/direccion' => [[['_route' => 'after_login_route_name', '_controller' => 'App\\Controller\\DefaultController::afterloginRedirectAction'], null, null, null, false, false, null]],
        '/novedades' => [[['_route' => 'app_novedades_index', '_controller' => 'App\\Controller\\Novedades\\NovedadesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/novedades/new' => [[['_route' => 'app_novedades_new', '_controller' => 'App\\Controller\\Novedades\\NovedadesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/order/item' => [[['_route' => 'app_order_item_index', '_controller' => 'App\\Controller\\Novedades\\OrderItemController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/item/new' => [[['_route' => 'app_order_item_new', '_controller' => 'App\\Controller\\Novedades\\OrderItemController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/order' => [[['_route' => 'app_order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/new' => [[['_route' => 'app_order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panel' => [[['_route' => 'app_panel', '_controller' => 'App\\Controller\\PanelController::index'], null, null, null, false, false, null]],
        '/pedido' => [[['_route' => 'app_pedido_index', '_controller' => 'App\\Controller\\Pedido\\PedidoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pedido/new' => [[['_route' => 'app_pedido_new', '_controller' => 'App\\Controller\\Pedido\\PedidoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto' => [[['_route' => 'app_producto_index', '_controller' => 'App\\Controller\\Producto\\ProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producto/new' => [[['_route' => 'app_producto_new', '_controller' => 'App\\Controller\\Producto\\ProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\Profile\\ProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/verify/resend' => [[['_route' => 'app_verify_resend_email', '_controller' => 'App\\Controller\\RegistrationController::resendVerifyEmail'], null, null, null, false, false, null]],
        '/role' => [[['_route' => 'role_index', '_controller' => 'App\\Controller\\Role\\RoleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/role/new' => [[['_route' => 'role_new', '_controller' => 'App\\Controller\\Role\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stock' => [[['_route' => 'app_stock_index', '_controller' => 'App\\Controller\\Stock\\StockController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stock/new' => [[['_route' => 'app_stock_new', '_controller' => 'App\\Controller\\Stock\\StockController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\User\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\User\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|ategoria/([^/]++)(?'
                        .'|(*:32)'
                        .'|/edit(*:44)'
                        .'|(*:51)'
                    .')'
                    .'|liente/([^/]++)(?'
                        .'|(*:77)'
                        .'|/(?'
                            .'|pedido(*:94)'
                            .'|edit(*:105)'
                        .')'
                        .'|(*:114)'
                    .')'
                    .'|onsulta/([^/]++)(?'
                        .'|(*:142)'
                        .'|/edit(*:155)'
                        .'|(*:163)'
                    .')'
                .')'
                .'|/novedades/([^/]++)(?'
                    .'|(*:195)'
                    .'|/edit(*:208)'
                    .'|(*:216)'
                .')'
                .'|/order/(?'
                    .'|item/([^/]++)(?'
                        .'|(*:251)'
                        .'|/edit(*:264)'
                        .'|(*:272)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:292)'
                        .'|/edit(*:305)'
                        .'|(*:313)'
                    .')'
                .')'
                .'|/p(?'
                    .'|edido/([^/]++)(?'
                        .'|(*:345)'
                        .'|/edit(*:358)'
                        .'|(*:366)'
                    .')'
                    .'|roducto/(?'
                        .'|([^/]++)(*:394)'
                        .'|detail/([^/]++)(*:417)'
                        .'|categoria/([^/]++)(*:443)'
                        .'|([^/]++)(?'
                            .'|/edit(*:467)'
                            .'|(*:475)'
                        .')'
                    .')'
                .')'
                .'|/role/([^/]++)(?'
                    .'|(*:503)'
                    .'|/edit(*:516)'
                    .'|(*:524)'
                .')'
                .'|/stock/([^/]++)(?'
                    .'|(*:551)'
                    .'|/edit(*:564)'
                    .'|(*:572)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:598)'
                    .'|/edit(*:611)'
                    .'|(*:619)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:659)'
                    .'|wdt/([^/]++)(*:679)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:725)'
                            .'|router(*:739)'
                            .'|exception(?'
                                .'|(*:759)'
                                .'|\\.css(*:772)'
                            .')'
                        .')'
                        .'|(*:782)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'app_categoria_show', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        44 => [[['_route' => 'app_categoria_edit', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        51 => [[['_route' => 'app_categoria_delete', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_cliente_show', '_controller' => 'App\\Controller\\Cliente\\ClienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        94 => [[['_route' => 'app_pedidocliente_show', '_controller' => 'App\\Controller\\Cliente\\ClienteController::showPedido'], ['id'], ['GET' => 0], null, false, false, null]],
        105 => [[['_route' => 'app_cliente_edit', '_controller' => 'App\\Controller\\Cliente\\ClienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        114 => [[['_route' => 'app_cliente_delete', '_controller' => 'App\\Controller\\Cliente\\ClienteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        142 => [[['_route' => 'app_consulta_show', '_controller' => 'App\\Controller\\Consulta\\ConsultaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'app_consulta_edit', '_controller' => 'App\\Controller\\Consulta\\ConsultaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        163 => [[['_route' => 'app_consulta_delete', '_controller' => 'App\\Controller\\Consulta\\ConsultaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        195 => [[['_route' => 'app_novedades_show', '_controller' => 'App\\Controller\\Novedades\\NovedadesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'app_novedades_edit', '_controller' => 'App\\Controller\\Novedades\\NovedadesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'app_novedades_delete', '_controller' => 'App\\Controller\\Novedades\\NovedadesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        251 => [[['_route' => 'app_order_item_show', '_controller' => 'App\\Controller\\Novedades\\OrderItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'app_order_item_edit', '_controller' => 'App\\Controller\\Novedades\\OrderItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'app_order_item_delete', '_controller' => 'App\\Controller\\Novedades\\OrderItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'app_order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        345 => [[['_route' => 'app_pedido_show', '_controller' => 'App\\Controller\\Pedido\\PedidoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        358 => [[['_route' => 'app_pedido_edit', '_controller' => 'App\\Controller\\Pedido\\PedidoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        366 => [[['_route' => 'app_pedido_delete', '_controller' => 'App\\Controller\\Pedido\\PedidoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_producto_show', '_controller' => 'App\\Controller\\Producto\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_producto_detail', '_controller' => 'App\\Controller\\Producto\\ProductoController::detail'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'app_producto_categoria', '_controller' => 'App\\Controller\\Producto\\ProductoController::showCategorias'], ['id'], ['GET' => 0], null, false, true, null]],
        467 => [[['_route' => 'app_producto_edit', '_controller' => 'App\\Controller\\Producto\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        475 => [[['_route' => 'app_producto_delete', '_controller' => 'App\\Controller\\Producto\\ProductoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        503 => [[['_route' => 'role_show', '_controller' => 'App\\Controller\\Role\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        516 => [[['_route' => 'role_edit', '_controller' => 'App\\Controller\\Role\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        524 => [[['_route' => 'role_delete', '_controller' => 'App\\Controller\\Role\\RoleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        551 => [[['_route' => 'app_stock_show', '_controller' => 'App\\Controller\\Stock\\StockController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        564 => [[['_route' => 'app_stock_edit', '_controller' => 'App\\Controller\\Stock\\StockController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        572 => [[['_route' => 'app_stock_delete', '_controller' => 'App\\Controller\\Stock\\StockController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        598 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\User\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        611 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\User\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        619 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\User\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        659 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        679 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        725 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        739 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        759 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        772 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        782 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

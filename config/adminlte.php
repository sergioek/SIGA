<?php

use Illuminate\Http\Request;

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'SIGA',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Técnica Nº12</b>',
    'logo_img' => 'vendor/adminlte/dist/img/logo64.png',
    'logo_img_class' => 'brand',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'SIGA',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' =>true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => 'bg-white',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-white-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => '1',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'dashboard',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
     
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
     
  
      
        ['header' => 'account_settings'],

        [
            'text' => 'Mi Perfil',
            'route'  => 'profile.show',
            'icon' => 'fas fa-fw fa-user',
        ],

        /*---------------Establecimiento-------------------------*/
        
        ['header' => 'SISTEMA'],
        [
            'text'       => 'Mi establecimiento',
            'icon' => 'fas fa-school',
            'url'        => '#',
            'submenu'=>[

                [
                    'text'=>'Estadística',
                    'url'=>'/dashboard',
                    'icon'=>'fas fa-square-root-alt',
                ],

                [
                'text'=>'Datos Institucionales',
                'route'=>'establecimiento.index',
                'icon'=>'fas fa-info',
                ],

                [
                    'text'=>'Carreras',
                    'url'=>'#',
                    'icon'=>'fas fa-graduation-cap',
                    'submenu'=>[
                        [
                            'text'=>'Ver Carreras',
                            'route'=>'carrera.index',
                        ],


                        [
                            'text'=>'Crear Carreras',
                            'route'=>'carrera.create',
                        ],
                    ],
                   
                ],


                [
                    'text'=>'Cursos y Divisiones',
                    'url'=>'/curso',
                    'icon'=>'fas fa-chalkboard-teacher',

                    'submenu'=>[
                        [
                            'text'=>'Ver Cursos',
                            'route'=>'curso.index',
                        ],

                        [
                            'text'=>'Crear Cursos ',
                            'route'=>'curso.create',
                        ],
                    ],
                   
                ],

                [
                    'text'=>'Espacios curriculares',
                    'url'=>'/espacio',
                    'icon'=>'fas fa-flask',

                    'submenu'=>[
                        [
                            'text'=>'Ver espacios',
                            'route'=>'espacio.index',
                        ],

                        [
                            'text'=>'Crear espacios ',
                            'route'=>'espacio.create',
                        ],
                    ],
                   
                ],

                [
                    'text'=>'Ciclos Lectivos',
                    'url'=>'/ciclo',
                    'icon'=>'fas fa-calendar-week',

                    'submenu'=>[
                        [
                            'text'=>'Ver Ciclos Lectivos',
                            'route'=>'ciclo.index',
                        ],

                        [
                            'text'=>'Inaugurar Nuevo Ciclo Lectivo',
                            'route'=>'ciclo.create',
                        ],

                        
                        [
                            'text'=>'Cerrar Ciclo Lectivo',
                            'route'=>'ciclo.close',
                        ],
                    ],
                   
                ],
                
            ],
        ],

        /*------------------Alumnos--------------------------------*/

        [
            'text'       => 'Alumnos',
            'icon' => 'fas fa-user-graduate',
            'url'        => '/alumno',
            'submenu'=>[
                [
                'text'=>'Ver alumnos',
                'route'=>'alumno.index',
                'icon'=>'fas fa-eye',
                ],


                [
                    'text'=>'Agregar alumnos',
                    'route'=>'alumno.create',
                    'icon'=>'fas fa-plus',
                    ],

 
                ],
                
            ],


        /*.----------------------Tutores*/

        
        [
            'text'       => 'Tutores',
            'icon' => 'fas fa-user',
            'url'        => '/tutor',
            'submenu'=>[
                [
                'text'=>'Ver tutores',
                'route'=>'tutor.index',
                'icon'=>'fas fa-eye',
                ],


                [
                    'text'=>'Agregar tutores',
                    'route'=>'tutor.create',
                    'icon'=>'fas fa-plus',
                    ],
 
                ],
                
            ],

/*--------------------Inscripciones------------------------------*/
        
[
    'text'       => 'Inscripciones',
    'icon' => 'fas fa-bookmark',
    'url'        => '#',
    'submenu'=>[
        [
            'text'=>'Buscar inscripciones de alumnos',
            'route'=>'inscripcion.alumno',
            'icon'=>'fas fa-search',
        ],

        [
            'text'=>'Nueva Inscripcion',
            'route'=>'inscripcion.create',
            'icon'=>'fas fa-plus',
        ],

        [
            'text'=>'Reinscripcion',
            'route'=>'inscripcion.existing',
            'icon'=>'fas fa-folder-plus',
        ],

        [
        'text'=>'Ver todos los inscriptos',
        'route'=>'inscripcion.index',
        'icon'=>'fas fa-eye',
        ],

        ],
        
    ],


    /*--------------------Generar secciones---------------------*/
        
[ 
    'text'       => 'Secciones de alumnos',
    'icon' => 'fas fa-people-arrows',
    'url'        => '#',
    'submenu'=>[

        [
            'text'=>'Ver alumnos de una sección',
            'route'=>'asignardivision.index',
            'icon'=>'fas fa-low-vision',
        ],
    
        [
        'text'=>'Asignar Inscriptos a una sección',
        'route'=>'asignardivision.create',
        'icon'=>'fas fa-sort-alpha-down',
        ],

      
        ],
        
    ],


    /*--------------Calificaciones---------------------------------*/

    [
        'text'       => 'Calificaciones',
        'icon' => 'fas fa-star-half-alt',
        'url'        => '#',
        'submenu'=>[
            [
            'text'=>'Cargar Notas',
            'route'=>'calificaciones.index',
            'icon'=>'fas fa-user-tag',
            ],
    
           
    
            ],
            
        ],


 /*------------------Reportes----------------------------*/

 [
    'text'       => 'Reportes',
    'icon' => 'fas fa-file',
    'url'        => '#',
    'submenu'=>[

        [
            'text'=>'Reportes por curso',
            'route'=>'reporte.index',
            'icon'=>'fas fa-list-ul',
        ],


        [
        'text'=>'Reportes por alumno',
        'route'=>'reporte.alumno',
        'icon'=>'fas fa-address-book',
        ],


        [
            'text'=>'Libro de calificaciones',
            'route'=>'reporte.libro',
            'icon'=>'fas fa-swatchbook',
            ],
    


        ],
        
    ],


    
 /*------------------Documentacion y acerca de----------------------------*/

 [
    'text'       => 'Soporte SIGA',
    'icon' => 'fas fa-question',
    'url'        => '#',
    'submenu'=>[

        [
            'text'=>'Documentacíon y manuales',
            'route'=>'soporte.doc',
            'icon'=>'far fa-file-code',
        ],


        [
        'text'=>'Acerca de',
        'route'=>'soporte.index',
        'icon'=>'fas fa-headset',
        ],


        ],
        
    ],




    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => true,
];

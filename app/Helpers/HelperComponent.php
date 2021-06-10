<?php
namespace App\Helpers;
class HelperComponent {

    public static function SideBar(){
        return [
                [
                    "g_heading"=>"Dashboard",
                    "menu"=>[
                        "title"=>'Dashboards',
                        "icon"=>"icon-rocket",
                        "color_code"=>"",
                        "can"=>"",
                        "v-can"=>"",
                        "sub_menu"=>[
                            setSubMenu(
                                null,
                                "Dashboard",
                                null,
                                null,
                                null,
                                "/",
                            ),
                        ]
                    ]
                ],
                [
                    "g_heading"=>"DIRECTORIES",
                    "menu"=>[
                        "title"=>'User Management',
                        "icon"=>"icon-users",
                        "color_code"=>"",
                        "can"=>"",
                        "v-can"=>"",
                        "sub_menu"=>[
                                setSubMenu(
                                    null,
                                    "Users",
                                    null,
                                    null,
                                    null,
                                    "/users",
                                ),
                                setSubMenu(
                                    null,
                                    "Roles",
                                    null,
                                    null,
                                    null,
                                    "/roles",
                                ),
                                setSubMenu(
                                    null,
                                    "Permissions",
                                    null,
                                    null,
                                    null,
                                    "/permissions",
                                ),
                        ],

                    ],

                ],

                [
                    "g_heading"=>"",
                    "menu"=>[
                        "title"=>'Tours',
                        "icon"=>"fa fa-road",
                        "color_code"=>"",
                        "can"=>"",
                        "v-can"=>"",
                        "sub_menu"=>[
                                setSubMenu(
                                    null,
                                    "Tours",
                                    null,
                                    null,
                                    null,
                                    "/tours",
                                ),
                                setSubMenu(
                                    null,
                                    "Roles",
                                    null,
                                    null,
                                    null,
                                    "/roles",
                                ),
                                setSubMenu(
                                    null,
                                    "Permissions",
                                    null,
                                    null,
                                    null,
                                    "/permissions",
                                ),
                        ],

                    ],

                ],

                [
                    "single_link" => setSingleLink('Packages', "icon-layers", null, null, null, '/packages'),
                ],

     ];
    }
}

<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        $menus =
            [
                'dashboard' => [
                    'icon' => 'layers',
                    'title' => 'Dashboard',
                    'route_name' => 'dashboard',
                    'params' => [
                        'layout' => 'side-menu',
                    ],
                ],
                'approachment' => [
                    'icon' => 'message-circle',
                    'title' => 'Approachment',
                    'sub_menu' => [
                        'pendekatan' => [
                            'icon' => 'message-circle',
                            'route_name' => 'approachments.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Pendekatan'
                        ],
                        'activity' => [
                            'icon' => 'coffee',
                            'route_name' => 'activities.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Activity'
                        ],
                        'status' => [
                            'icon' => 'thumbs-up',
                            'route_name' => 'status.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Status'
                        ]
                    ]
                ],
                'company' => [
                    'icon' => 'home',
                    'title' => 'Company',
                    'sub_menu' => [
                        'company' => [
                            'icon' => 'home',
                            'route_name' => 'companies.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Company'
                        ],
                        'company_type' => [
                            'icon' => 'list',
                            'route_name' => 'company_types.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Company Types'
                        ],
                        'company_area' => [
                            'icon' => 'map-pin',
                            'route_name' => 'company_areas.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Company Areas'
                        ],
                    ]
                ],
                'contact' => [
                    // 'icon' => 'inbox',
                    'icon' => 'users',
                    'params' => [
                        'layout' => 'side-menu'
                    ],
                    'title' => 'Contact',
                    'sub_menu' => [
                        'contact' => [
                            'icon' => 'users',
                            'route_name' => 'contacts.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Contact'
                        ],
                        'contact-type' => [
                            'icon' => 'user-check',
                            'route_name' => 'contact_types.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Contact Type'
                        ],
                        'lead-source' => [
                            'icon' => 'send',
                            'route_name' => 'leadsources.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Lead Source'
                        ],
                        'lead-status' => [
                            'icon' => 'thumbs-up',
                            'route_name' => 'leadstatuses.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Lead Status'
                        ],
                        'lead-priority' => [
                            'icon' => 'bookmark',
                            'route_name' => 'leadpriorities.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Lead Priority'
                        ],
                        'lead-interest' => [
                            'icon' => 'star',
                            'route_name' => 'leadinterests.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Lead Interest'
                        ]
                    ],
                ],
                'quotation' => [
                    'icon' => 'layout',
                    'title' => 'Quotation',
                    'sub_menu' => [
                        'quotation' => [
                            'icon' => 'layout',
                            'route_name' => 'quotation.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Quotation'
                        ],
                        'deal-source' => [
                            'icon' => 'at-sign',
                            'route_name' => 'deal_sources.index',
                            'params' => [
                                'layout' => 'side-menu'
                            ],
                            'title' => 'Deal Source'
                        ]
                    ]
                ],
                'fppp' => [
                    'icon' => 'file-text',
                    'route_name' => 'fppps.index',
                    'params' => [
                        'layout' => 'side-menu'
                    ],
                    'title' => 'FPPP'
                ],
                'devider',
            ];

        $roles = [
            'role-permission' => [
                'icon' => 'lock',
                'route_name' => 'fppps.index',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'User Role'
            ],
            'log-activity' => [
                'icon' => 'layout-list',
                'route_name' => 'logs.index',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Logs'
            ],
        ];

        if (auth()->user()) {
            if (auth()->user()->hasRole('Admin')) {
                $menus = array_merge($menus, $roles);
            }
        }

        return $menus;
    }
}

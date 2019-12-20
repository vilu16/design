<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Testsida för utveckling"
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapport",
            "submenu" => [
                "items" => [
                    [
                    "text" => "Rapport färgschema",
                    "url" => "rapport/fargschema",
                    "title" => "Rapport för färgschema",
                    ],
                    [
                    "text" => "Rapport laddningstid",
                    "url" => "rapport/laddningstid",
                    "title" => "Rapport för laddningstid",
                    ],
                    [
                    "text" => "Rapport designprincip",
                    "url" => "rapport/designprincip",
                    "title" => "Rapport för designprinciper",
                    ],
                    [
                    "text" => "Rapport designelement",
                    "url" => "rapport/designelement",
                    "title" => "Rapport för designelement",
                    ],
                    [
                    "text" => "Rapport designprinciper",
                    "url" => "rapport/designprincper",
                    "title" => "Rapport för designprinciper",
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg/index",
            "title" => "Blogg",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Blogg 1",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Blogg 1",
                    ],
                    [
                        "text" => "Blogg 2",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Blogg 2",
                    ],
                    [
                        "text" => "Blogg 3",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Blogg 3",
                    ],
                ],
            ],
        ],
        [
            "text" => "Designelement",
            "url" => "designelement",
            "title" => "Testsida för designelement",
        ],
        [
            "text" => "Designprinciper",
            "url" => "designprinciper",
            "title" => "Testsida för designprinciper",
        ],
    ]
];

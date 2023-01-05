<?php
echo "<pre>";
print_r(

    [
        "FrontEnd" => [
            0 => "HTML",
            1 => "CSS",
            "JS" => [
                "Vuejs" => [
                    2 => "v2",
                    3 => "v3",
                ],
                "ReactJs",
                "Svelte",
            ],
        ],
        "BackEnd" => [
            "PHP",
            "MySQL",
            "Security",
        ],
        "Git",
        "Github",
        "Testing" => [
            "Unit Testing",
            "End To End",
            "Integration",
        ]
    ]

);
echo "</pre>";

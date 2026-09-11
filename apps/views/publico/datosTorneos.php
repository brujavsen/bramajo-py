<?php
$torneos = [
    1 => [
        "id" => 1,
        "nombre" => "Sub 6 Caval",
        "imagen" => "../../assets/Youth-soccer-indiana.jpg",
        "popular"=> true,
        "inscripcionAbierta" => true,

        "detalles" => [
            "deporte" => "Fútbol",
            "fecha" => "20/09/2026",
            "hora" => "15:00",
            "lugar" => "Club Urunday",
            "estado" => "En curso",
            "descripcion" => "Torneo de fútbol organizado para equipos juveniles."
        ],

        "participantes" => [
            "Equipo Rojo",
            "Los Tigres",
            "Deportivo Central",
            "Atlético Sur"
        ],

        "resultados" => [
            [
                "participante1" => "Equipo Rojo",
                "puntaje1" => 3,
                "participante2" => "Los Tigres",
                "puntaje2" => 1
            ],

            [
                "participante1" => "Deportivo Central",
                "puntaje1" => 2,
                "participante2" => "Atlético Sur",
                "puntaje2" => 2
            ]
        ]
    ],

    2 => [
        "id" => 2,
        "nombre" => "Torneo de Natación",
        "imagen" => "../../assets/images.jpg",
        "popular"=> true,
        "inscripcionAbierta" => true,

        "detalles" => [
            "deporte" => "Natación",
            "fecha" => "25/09/2026",
            "hora" => "16:00",
            "lugar" => "Piscina Municipal",
            "estado" => "En curso",
            "descripcion" => "Competencia de natación dividida en diferentes categorías."
        ],

        "participantes" => [
            "Lucía Fernández",
            "Martín Rodríguez",
            "Sofía García",
            "Joaquín López"
        ],

        "resultados" => [
            [
                "participante" => "Lucía Fernández",
                "resultado" => "1 minuto y 12 segundos",
                "posicion" => 1
            ],

            [
                "participante" => "Martín Rodríguez",
                "resultado" => "1 minuto y 18 segundos",
                "posicion" => 2
            ],

            [
                "participante" => "Sofía García",
                "resultado" => "1 minuto y 21 segundos",
                "posicion" => 3
            ]
        ]
    ],

    3 => [
        "id" => 3,
        "nombre" => "Torneo de Boxeo",
        "imagen" => "../../assets/box.jpg",
        "popular"=> true,
        "inscripcionAbierta" => true,

        "detalles" => [
            "deporte" => "Boxeo",
            "fecha" => "30/09/2026",
            "hora" => "19:00",
            "lugar" => "Gimnasio Central",
            "estado" => "En curso",
            "descripcion" => "Torneo de boxeo organizado por categorías de peso."
        ],

        "participantes" => [
            "Lucas Pérez",
            "Mateo Silva",
            "Bruno González",
            "Nicolás Díaz"
        ],

        "resultados" => [
            "Round1" => [
                "participante1" => "Lucas Pérez",
                "puntaje1" => 10,
                "participante2" => "Mateo Silva",
                "puntaje2" => 8
            ],
            "Round2" => [
                "participante1" => "Bruno González",
                "puntaje1" => 9,
                "participante2" => "Nicolás Díaz",
                "puntaje2" => 10
            ],
            "Final" => [
                "participante1" => "Lucas Pérez",
                "puntaje1" => 10,
                "participante2" => "Nicolás Díaz",
                "puntaje2" => 9
            ],
        ],
    ],


    
    4 => [
        "id" => 4,
        "nombre" => "Torneo de Tenis",
        "imagen" => "../../assets/imagesDos.jpg",
        "popular"=> true,
        "inscripcionAbierta" => true,

        "detalles" => [
            "deporte" => "Tenis",
            "fecha" => "05/10/2026",
            "hora" => "14:00",
            "lugar" => "Club Deportivo",
            "estado" => "En curso",
            "descripcion" => "Competencia de tenis en modalidad individual y dobles."
        ],

        "participantes" => [
            "Lucas Pérez",
            "Mateo Silva",
            "Bruno González",
            "Nicolás Díaz"
        ],

        "resultados" => [
            "Ronda 1" => [
                "participante1" => "Lucas Pérez",
                "puntaje1" => 6,
                "participante2" => "Mateo Silva",
                "puntaje2" => 4
            ],
            "Ronda 2" => [
                "participante1" => "Bruno González",
                "puntaje1" => 7,
                "participante2" => "Nicolás Díaz",
                "puntaje2" => 5
            ],
            "Final" => [
                "participante1" => "Lucas Pérez",
                "puntaje1" => 6,
                "participante2" => "Bruno González",
                "puntaje2" => 3
            ],

        ],
    ],

    5 => [
        "id" => 5,
        "nombre" => "Torneo de Baloncesto",
        "imagen" => "../../assets/imagesUno.jpg",
        "popular"=> true,
        "inscripcionAbierta" => true,

        "detalles" => [
            "deporte" => "Baloncesto",
            "fecha" => "10/10/2026",
            "hora" => "18:00",
            "lugar" => "Polideportivo Municipal",
            "estado" => "En curso",
            "descripcion" => "Torneo de baloncesto con equipos locales y regionales."
        ],

        "participantes" => [
            "Equipo A",
            "Equipo B",
            "Equipo C",
            "Equipo D"
        ],

        "resultados" => [
            [
                "participante1" => "Equipo A",
                "puntaje1" => 75,
                "participante2" => "Equipo B",
                "puntaje2" => 68
            ],

            [
                "participante1" => "Equipo C",
                "puntaje1" => 82,
                "participante2" => "Equipo D",
                "puntaje2" => 79
            ],
        ],
    ],

    6 => [
        "id" => 6,
        "nombre" => "Torneo de Atletismo",
        "imagen" => "../../assets/images.jpg",
        "popular" => true,
        "inscripcionAbierta" => true,

        "detalles" => [
            "deporte" => "Atletismo",
            "fecha" => "15/10/2026",
            "hora" => "09:00",
            "lugar" => "Estadio Municipal",
            "estado" => "En curso",
            "descripcion" => "Competencia de atletismo con diversas disciplinas y categorías."
        ],

        "participantes" => [
            "Ana López",
            "Carlos Martínez",
            "Laura Fernández",
            "Javier Gómez"
        ],

        "resultados" => [
            [
                "participante" => "Ana López",
                "resultado" => "12.5 segundos (100m)",
                "posicion" => 1
            ],

            [
                "participante" => "Carlos Martínez",
                "resultado" => "11.8 segundos (100m)",
                "posicion" => 2
            ]
        ]
    ]
];
?>
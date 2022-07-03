<?php
/**
 * @return array
 */
function VideocardSet()
{
    return [
        [
            "id" => 1,
            "videocardName" => "RTX 3080ti",
            "videocardImage" => "3080ti.png",
        ],
        [
            "id" => 2,
            "videocardName" => "RTX 3070ti",
            "videocardImage" => "3070ti.png",
        ],
        [
            "id" => 3,
            "videocardName" => "RTX 3070",
            "videocardImage" => "3070.png",
        ],
        [
            "id" => 4,
            "videocardName" => "RTX 3060",
            "videocardImage" => "3060.png",
        ],
        [
            "id" => 5,
            "videocardName" => "GTX 1650",
            "videocardImage" => "1650.png",
        ],
        [
            "id" => 6,
            "videocardName" => "RTX 4000",
            "videocardImage" => "rtx4000.png",
        ]


    ];
}

/**
 * @param $id
 * @return mixed
 */
function getVideocardDetails($id)
{
    $tags = [
        1 => [
            "videocardName" => "RTX 3080TI",

            "description" => "
            De Gigabyte GeForce RTX 3080 Ti Gaming OC is gebaseerd op de gloednieuwe NVIDIA Ampere-architectuur en levert het ultieme spel, met geavanceerde 2e generatie Ray Tracing Cores en 3e generatie Tensor Cores met een grotere verwerkingscapaciteit. <br>

            
            "
        ],
        2 => [
            "videocardName" => "RTX 3070TI",

            "description" => "
            De MSI GeForce RTX 3070 Ti SUPRIM wordt aangedreven door Ampere-NVIDIA's 2e generatie RTX-architectuur.<br>
             Gebouwd met verbeterde RT Cores en Tensor Cores, nieuwe streaming multiprocessors en supersnel G6X-geheugen,<br>
             geeft het je de kracht die je nodig hebt om door de meest veeleisende games te scheuren.<br>

     
            "

        ],
        3 => [
            "videocardName" => "RTX 3070",
            "description" => "
            De Gigabyte GeForce RTX 3070 Gaming OC rev. 2.0 LHR is een grafische kaart gebaseerd op de RTX 3070 chip.<br>
            Met 8 GB GDDR6 geheugen en een coreklok van 1815 MHz<br>

       
            "
        ],
        4 => [
            "videocardName" => "RTX 3060",
            "description" => "
            
            
            De Gigabyte GeForce RTX 3060 Gaming OC 12G rev. 2.0 beschikt over het WINDFORCE 3X koelsysteem met 3X 80 mm unieke bladventilatoren,<br>
            afwisselend draaiend, 3 samengestelde koperen heat pipes direct touch GPU, <br>
            3D actieve ventilator en schermkoeling, die samen zorgen voor een zeer efficiënte warmteafvoer.<br>
            
            ",

        ],
        5 => [
            "videocardName" => " GTX 1650",

            "description" => "
            
           De DUAL-GTX1650-4G van Asus is gebaseerd op de NVIDIA GeForce GTX 1650 grafische chip en beschikt over 4 GB GDDR5 geheugen. <br>
           
            "
        ],
        6 => [
            "videocardName" => "RTX 4000",

            "description" => "
            
            De NVIDIA Quadro RTX 4000 van PNY beschikt over 2034 CUDA, 36 RT -en 288 Tensor cores. De kaart is uitgerust met 8GB aan GDDR6 geheugen welke voorzien is van ECC oncdersteuning.<br>
            
            "




        ]

    ];

    return $tags[$id];
}

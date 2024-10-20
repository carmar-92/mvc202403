<?php

namespace Controllers\Sales;

use Controllers\PublicController;
use Views\Renderer;

class TopTen extends PublicController
{
    public function run(): void
    {
        $viewData = [
            "nombre_programador" => 'Carlos E Martinez',
            "clases" => [
                "Programación de portales web I",
                "Programación de portales web II",
                "Programación de negocios web"
            ],
            "contactos" => [
                [
                    "nombre" => "Marcos Andres Moreira",
                    "telefono" =>"94205874"
                ],
                [
                    "nombre" => "Alfonso Samuel López",
                    "telefono" =>"84568742"
                ],
                [
                    "nombre" => "Alejandro Luis Martinez",
                    "telefono" =>"94659712"
                ]
            ]
        ];

        if ($this->isPostBack()){
            $txtNombre = $_POST["txtNombre"];
            $rslMessage = strtoupper($txtNombre) . " Procesado";
            $viewData["txtNombre"] = $txtNombre;
            $viewData["rslMessage"] = $rslMessage;
        }

        Renderer::render('sales/top10', $viewData);
    }
}

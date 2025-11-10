<?php

namespace App\Controller;

class PageController
{
    public function home(): void
    {
        $gretting = "Hello";
        $name = "John";
        $this->render("page/home", ["grettings" => $gretting, "name" => $name,]);
    }
    public function about(): void
    {
        $this->render("page/about");
    }

    protected function render(string $path, array $params =  []): void
    {

        $filePath = APP_ROOT . "/templates/$path.php";

        if (!file_exists($filePath)) {
            echo "Le fichier $filePath n'existe pas";
        } else {
            // va transformer chaque clé du tableau en variable
            extract($params);
            require_once $filePath;
        }
    }
}

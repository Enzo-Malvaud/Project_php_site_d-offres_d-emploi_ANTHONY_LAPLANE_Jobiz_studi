<?php

namespace App\Controller;

use App\Repository\CategoryRepository;

class PageController extends Controller
{
    public function home(): void
    {
        $gretting = "Hello";
        $name = "John";
        
        $categoryRepository = new CategoryRepository();

        $categories = $categoryRepository->findAll();

        $this->render("page/home", [
            "grettings" => $gretting, 
            "name" => $name,
            "categories" => $categories,
        ]);
    }
    public function about(): void
    {
        $this->render("page/about");
    }




}

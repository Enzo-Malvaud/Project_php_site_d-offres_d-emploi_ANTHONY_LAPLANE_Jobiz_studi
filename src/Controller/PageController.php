<?php

namespace App\Controller;

use App\Repository\CategoryRepository;

class PageController extends Controller
{
    public function home(): void
    {

        $categoryRepository = new CategoryRepository();

        $categories = $categoryRepository->findAll();
        
        $this->render("page/home", [
            "categories" => $categories,
        ]);
    }

    public function about(): void
    {
        $this->render("page/about");
    }


}
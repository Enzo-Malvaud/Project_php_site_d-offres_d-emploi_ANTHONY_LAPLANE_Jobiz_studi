<?php

namespace App\Controller;

class PageController extends Controller
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

    public function test(): void
    {
        $this->render("page/test");
    }


}

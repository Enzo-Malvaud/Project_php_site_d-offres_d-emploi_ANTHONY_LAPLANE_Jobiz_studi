<?php

namespace App\Entity;

class Entity
{

    public static function createAndHydrate(array $data):static
    {
        $entity = new static();
        $entity->hydrate($data);

        return $entity;
    }

    public function hydrate(array $data):void
    {
        foreach ($data as $key => $value) {
            // $key => id
            // on veut transformer cette chaine en setId
            // first_name => setFirst_name // setFirstName

            // first_name => first name => First Name => FirstName => setFirstName
            
            $methodName = str_replace(array('-', '_'), ' ', $key);
            $methodName = ucwords($methodName);
            $methodName = str_replace(' ', '', $methodName);
            $methodName = "set".$methodName;
            
            // équivalent en une ligne : 
            // $methodName = "set".str_replace(' ', '', ucwords(str_replace(array('-', '_'), ' ', $key)));

            if (method_exists($this, $methodName)) {
                $this->{$methodName}($value);
            }
        }
    }
}
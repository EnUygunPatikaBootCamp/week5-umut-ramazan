<?php
namespace App\Service;

class NameGenerator
{
    public function randomName()
    {
         $names= [
             'ali',
             'ahmet',
             'ayşe',
             'aleyna',
             'seyhan'
         ];
         $index= array_rand($names);
         return $names[$index];
    }
}
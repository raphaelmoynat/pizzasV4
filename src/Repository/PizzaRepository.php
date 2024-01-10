<?php

namespace App\Repository;


use App\Entity\PizzaEntity;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: PizzaEntity::class)]
class PizzaRepository extends Repository
{
    public function insert(string $name, int $size):void
    {

        $query = $this->pdo->prepare("INSERT INTO pizzas SET name = :name, size = :size");

        $query->execute([
            "name"=>$name,
            "size"=>$size,
        ]);
    }

    public function update(string $name, int $size,  int $id):void
    {

        $query = $this->pdo->prepare("UPDATE pizzas SET name = :name, size = :size WHERE id = :id");

        $query->execute([
            "name" => $name,
            "size" => $size,
            "id" => $id
        ]);
    }
}
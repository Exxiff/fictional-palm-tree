<?php

declare(strict_types=1);

class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $father;
    private ?Dog $mother;

    public function __construct(string $name, string $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->father = null;
        $this->mother = null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setFather(Dog $father): void
    {
        if ($father->sex === 'male') {
            $this->father = $father;
        }
    }

    public function setMother(Dog $mother): void
    {
        if ($mother->sex === 'female') {
            $this->mother = $mother;
        }
    }

    public function getFathersName(): string
    {
        if ($this->father !== null) {
            return $this->father->name;
        } else {
            return "Unknown";
        }
    }

    public function getMotherName(): string
    {
        if ($this->mother !== null) {
            return $this->mother->name;
        } else {
            return "Unknown";
        }
    }

    public function hasSameMotherAs(Dog $otherDog): bool
    {
        if ($this->mother !== null && $otherDog->mother !== null) {
            return $this->mother->name === $otherDog->mother->name;
        }
        return false;
    }
}

class DogTest
{
    public static function test(): void
    {
        $dogs = [];

        $dogs['Max'] = new Dog("Max", "male");
        $dogs['Rocky'] = new Dog("Rocky", "male");
        $dogs['Sparky'] = new Dog("Sparky", "male");
        $dogs['Buster'] = new Dog("Buster", "male");
        $dogs['Sam'] = new Dog("Sam", "male");
        $dogs['Lady'] = new Dog("Lady", "female");
        $dogs['Molly'] = new Dog("Molly", "female");
        $dogs['Coco'] = new Dog("Coco", "female");

        $dogs['Max']->setFather($dogs['Rocky']);
        $dogs['Max']->setMother($dogs['Lady']);

        $dogs['Coco']->setFather($dogs['Buster']);
        $dogs['Coco']->setMother($dogs['Molly']);

        $dogs['Rocky']->setFather($dogs['Sam']);
        $dogs['Rocky']->setMother($dogs['Molly']);

        $dogs['Buster']->setFather($dogs['Sparky']);
        $dogs['Buster']->setMother($dogs['Lady']);

        foreach ($dogs as $dog) {
            echo "/////////////////\n";
            echo "Name: {$dog->getName()}\n";
            echo "Sex: {$dog->getSex()}\n";
            echo "Father: {$dog->getFathersName()}\n";
            echo "Mother: {$dog->getMotherName()}\n";
            foreach ($dogs as $otherDog) {
                if ($dog->hasSameMotherAs($otherDog) && $dog !== $otherDog) {
                    echo "{$dog->getName()} has same mother as {$otherDog->getName()}\n";
                }
            }
        }
    }
}

DogTest::test();
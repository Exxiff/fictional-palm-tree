<?php declare(strict_types=1);
/*Exercise 3
Create a person object with name, surname and age.
Create a function that will determine if the person has reached 18 years of age.
Print out if the person has reached age of 18 or not.*/

function createPerson(string $name,string $surname,int $age) : stdClass
{
    $person = new stdClass();
    $person->name=$name;
    $person->surname=$surname;
    $person->age=$age;

    return $person;
}

$person = createPerson("Tagilla", "Killa", 1);

function checkAge(stdClass $person): string
{
    if ($person->age >= 18) {
        return "$person->name $person->surname is 18 or older." . PHP_EOL;
    }
    return "$person->name $person->surname is younger than 18." . PHP_EOL;
}

echo checkAge($person);

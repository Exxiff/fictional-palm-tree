<?php declare(strict_types=1);
/*Exercise 4
Create an array of objects that uses the function of exercise 3
 but in loop printing out if the person has reached age of 18.*/

function createPerson(string $name,string $surname,int $age) : stdClass
{
    $person = new stdClass();
    $person->name=$name;
    $person->surname=$surname;
    $person->age=$age;

    return $person;
}

$personArray = array(
    createPerson("Raitis","Bērziņs",19),
    createPerson("Dāvis","Kalniņš",12),
    createPerson("Linda","Berlinska",19),
    createPerson("Gatis","Strazds",155),

);

foreach ($personArray as $person)
{
    if ($person->age >= 18) {
        echo $person->name . " " . $person->surname . " is older than 18.\n";
    }else {
        echo $person->name . " " . $person->surname . " is younger than 18.\n";
    }
}

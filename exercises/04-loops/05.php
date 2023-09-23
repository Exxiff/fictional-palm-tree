<?php
/*Exercise 5
Create an associative array with objects of multiple persons.
Each person should have a name, surname, age and birthday.
Using loop (by your choice) print out every person's personal data
without using foreach loop.??*/


    // Function with variables being object keys
function createPerson(string $name,string $surname,int $age,string $birthday) : stdClass
    {
    // with ->name accesses directly property $name
    $person = new stdClass();
    $person->name=$name;
    $person->surname=$surname;
    $person->age=$age;
    $person->birthday=$birthday;
    return $person;
    }

    //Inserts function in array, creates objects
    $persons = [
        createPerson("Gatis","Frajers",25,'12.09.1998'),
        createPerson("Raitis","Tumba",34,'25.04.1989'),
        createPerson("Amils","Āzis",19,'03.11.2004'),
        createPerson("Denny","Depp",42,'15.02.1980'),
    ];
        //Iterates through array, and prints each parameter
        for ($i=0; $i<count($persons); $i++) {
            echo "First name : " . $persons[$i]->name.PHP_EOL;
            echo "Last name : " . $persons[$i]->surname.PHP_EOL;
            echo "Age : " . $persons[$i]->age.PHP_EOL;
            echo "Birthday date : " . $persons[$i]->birthday.PHP_EOL;
            echo "////////////////////////////////".PHP_EOL;
        }

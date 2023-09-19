<?php
/*Exercise 7** High difficulty !!!!
Imagine you own a gun store.
Only certain guns can be purchased with license types.
Create an object (person) that will be the requester to purchase a gun (object)
Person object has a name, valid licenses (multiple) & cash.
Guns are objects stored within an array.
Each gun has license letter, price & name.
Using PHP in-built functions determine if the requester (person) can buy a gun from the store.*/

function createPerson(string $name,string $license,int $cash) : stdClass
{
    $person = new stdClass();
    $person->name=$name;
    $person->license=$license;
    $person->cash=$cash;

    return $person;
}

function createGun(string $name,string $licenseType,int $price) : stdClass
{
    $gun = new stdClass();
    $gun->name=$name;
    $gun->licenseType=$licenseType;
    $gun->price=$price;

    return $gun;
}

$person = createPerson("CJ",'A,B,C',411);

$gunArray = array(
    createGun('P320','A',350),
    createGun('1911','A',899),
    createGun('Glock 18C','A',600),
    createGun('Five-Seven','A',1399),
    createGun('Maverick 88','B',200),
    createGun('Copolla','B',500),
    createGun('M3500','B',900),
    createGun('AA12','B',3200),
    createGun('AK-47','C',699),
    createGun('FAL','C',1500),
    createGun('M4A1','C',2200),
    createGun('Nuke','X',999997),
);


$licenseArray = explode(',',$person->license);//Separates licenses to arrays

$hasAffordableGuns = false;//false = empty list

echo "Welcome $person->name! Have a look at our selection!\n Current Balance: $person->cash$\n";
for($i = 0; $i < count($gunArray);$i++)//Outer loop, iterates all guns
{
    for($t = 0; $t < count($licenseArray);$t++)//Inner loop, iterates license types
    {
        //Main output message
        if ($gunArray[$i]->licenseType == $licenseArray[$t] && $person->cash > $gunArray[$i]->price)
        {
            echo "* {$gunArray[$i]->price}$ ({$gunArray[$i]->licenseType}){$gunArray[$i]->name}\n";
            $hasAffordableGuns=true;
        }
    }
}
if(!$hasAffordableGuns)
{
    echo "* Sorry, you can't afford anything!\n";
}
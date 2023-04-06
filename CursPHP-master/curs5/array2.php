
<?php
/**
 * Scrieti o functie ce primeste un array ca argument cu informatii depre persoane:
 *   array(
 *        0 => array(
 *            0 => "ion",
 *            1 => "popescu"
 *        )
 *    )
 *
 *    si returneaza un array ("Nume Prenume") ordonat alfabetic dupa nume:
 *
 */
/**
 * @brief Processing array elements and sorting the array
 * @param $personsArray
 * @return array
 */
function processPersons($personsArray)
{
    $finalArray = array();
    foreach ($personsArray as $person) {
        $firstName = $person[0];
        $lastName = $person[1];
        $personInfoFormatted = formatName($lastName, $firstName);
        $finalArray[] = $personInfoFormatted;
    }
    sort($finalArray);
    return $finalArray;
}
/**
 * @param $lastName
 * @param $firstName
 * @return string
 */
function formatName($lastName, $firstName)
{
    return ucwords(strtolower($lastName . ' ' . $firstName));
}
$persons = array(
    0 => array(
        0 => "ion",
        1 => "popescu",
    ),
    1 => array(
        0 => "dan",
        1 => "IONESCU",
    ),
    2 => array(
        0 => "vlad",
        1 => "DumitresCU",
    ),
    3 => array(
        0 => "toma",
        1 => "DaMian",
    ),
);
$persons = processPersons($persons);
echo "<pre>";
print_r($persons);

?>
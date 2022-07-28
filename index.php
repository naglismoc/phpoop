<?php include './views/header.php';?>
<?php include './models/Person.php';?>

            <a href="./views/home.php">kontaktai</a>

            <?php
            // print_r(array_keys($_SERVER));
            // print_r($_SERVER['DOCUMENT_ROOT']);
            // print_r($_SERVER['PHP_SELF']);
            // print_r(__DIR__);
            // print_r(dirname(__FILE__, 2));
            // print_r(getcwd());
            ?>
            <h1>Laba!</h1>
     
<?php
$names = ['Petras','Jonas','Zygis','Renata','Jonas'];
$surnames = ['Pav1','Pav2','Pav3','Pav4','Pav5'];
for ($i=0; $i < count($names); $i++) { 
    echo "<p>".$names[$i]. " " . $surnames[$i].'</p>';
}
$count = 1;
$person = new Person();
$person->name = "Naglis";
$person->surname = "Mockevicius";
$person->age = 21;
$person->id = $count;
$count++;
print_r($person);

$person1 = new Person();
$person1->name = "Pavel";
$person1->surname = "Mazurkevic";
$person1->age = 20;
$person1->id = $count;
$count++;

print_r($person1);
$person1->age = 22;

print_r($person);
print_r($person1);


$person2 = new Person("Giedrė","Janušauskienė",28);
$person2->id = $count;
$count++;

print_r($person2);
// $person3 = new Person("Giedrė2",28);
// print_r($person3);
echo "<br>============================<br>";
echo $person2->name."<br>";
$persons = [$person,$person1,$person2];
foreach ($persons as $person) {
    if($person->id == 3){
        $person->name = "Giedra";
    }
}
echo $person2->name."<br>";
$_SESSION['persons'] = $persons;
print_r($_SESSION['persons'] );

$person2->birthDate = 1996;
$person2->toString();
$person1->toString();
echo "<br>============================<br>";
echo $person2->actualAge();
$person2->makeASound();
$person1->makeASound();
?>
<input type="hidden" name="id" value="3">
<?php include './views/footer.php';?>   
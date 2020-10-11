<?php
require_once 'Person.php';
require_once 'PersonStorage.php';
$personStorage = new PersonStorage();

$name = $_POST['name']?? 'Janis';


$person = $personStorage->getByName($name);
echo $person->getName() . '/' . $person->getAge() . '/'. $person->getCount();
?>


<html lang="en">
<body>
<form action="/" method="post">
<label for="name">Name</label>
<input type="text" name="name" id="name"/>
<button type="submit">Submit</button>
</form>
</body>
</html>


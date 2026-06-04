<?php include 'header_def8.php'; ?>
<h2>Enter Array Values</h2>
<form method="post">
    <label>Index Array (comma separated): <input type="text" name="index_values" value="10,20,30,40,50"></label><br><br>
    <label>Associative Array (format: key:value,key:value): <input type="text" name="assoc_values" value="name:John,age:25,city:New York"></label><br><br>
    <label>Multi-dimensional Array (format: id:Name;id:Name): <input type="text" name="multi_values" value="1:Alice;2:Bob;3:Charlie"></label><br><br>
    <input type="submit" value="Print Arrays">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Index Array
    $indexArray = array_map('trim', explode(',', $_POST['index_values']));
    echo "<h3>Index Array:</h3>";
    foreach ($indexArray as $value) {
        echo "$value ";
    }
    echo "<br><br>";

    // Associative Array
    $assocPairs = explode(',', $_POST['assoc_values']);
    $associativeArray = array();
    foreach ($assocPairs as $pair) {
        list($k, $v) = explode(':', $pair);
        $associativeArray[trim($k)] = trim($v);
    }
    echo "<h3>Associative Array:</h3>";
    foreach ($associativeArray as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";

    // Multi-dimensional Array
    $multiPairs = explode(';', $_POST['multi_values']);
    $multiArray = array();
    foreach ($multiPairs as $pair) {
        list($id, $name) = explode(':', $pair);
        $multiArray[] = array("id" => trim($id), "name" => trim($name));
    }
    echo "<h3>Multi-dimensional Array:</h3>";
    foreach ($multiArray as $row) {
        echo "ID: {$row['id']}, Name: {$row['name']}<br>";
    }
}
include 'footer_def8.php';
?>
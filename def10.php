<?php include 'header_def10.php'; ?>
<h2>Enter Two Arrays to Merge (comma separated)</h2>
<form method="post">
    <label>Array 1: <input type="text" name="array1" value="a,b,c" size="30"></label><br><br>
    <label>Array 2: <input type="text" name="array2" value="d,e,f" size="30"></label><br><br>
    <input type="submit" value="Merge Arrays">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $array1 = array_map('trim', explode(',', $_POST['array1']));
    $array2 = array_map('trim', explode(',', $_POST['array2']));
    echo "<h3>Array 1:</h3>";
    print_r($array1);
    echo "<h3>Array 2:</h3>";
    print_r($array2);
    echo "<h3>Merged Array (using array_merge):</h3>";
    $mergedArray = array_merge($array1, $array2);
    print_r($mergedArray);
}
include 'footer_def10.php';
?>
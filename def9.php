<?php include 'header_def9.php'; ?>
<h2>Enter Array Values (comma separated)</h2>
<form method="post">
    <input type="text" name="array_values" value="1,2,3,4,5" size="40">
    <input type="submit" value="Reverse Array">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputArray = array_map('trim', explode(',', $_POST['array_values']));
    echo "<h3>Original Array:</h3>";
    print_r($inputArray);
    echo "<h3>Reversed Array (using array_reverse):</h3>";
    $reversedArray = array_reverse($inputArray);
    print_r($reversedArray);
}
include 'footer_def9.php';
?>
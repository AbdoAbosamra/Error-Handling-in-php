<!DOCTYPE html>
<html>
<body>

<?php
function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Division by zero"); // Exception will raise only if the condition match
    }
    return $numerator / $denominator;
}

try {
    $result = divide(10, 0);
    echo $result; // This line will not be executed
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>

</body>
</html>


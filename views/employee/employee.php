<?php

function employeeForm()
{
    echo 'Add new form';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php


    if (isset($employee)) {
        echo 'This is employee view.';
        show($employee);
    } elseif ($addEmployee) {
        employeeForm();
    } else {
        echo 'Employee not found!';
    }


    ?>

</body>

</html>
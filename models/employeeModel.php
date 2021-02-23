<?php

function get()
{
    $con = mysqli_connect('localhost', 'yogi', 'archdb', 'employees', 3306, '/run/mysqld/mysqld.sock');

    // Check connection
    if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
        exit();
    }

    $sql = 'SELECT first_name, last_name, gender, hire_date FROM employees ORDER BY first_name ASC';
    $result = mysqli_query($con, $sql);

    // Fetch all
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    

    // Free result set
    mysqli_free_result($result);

    mysqli_close($con);
  
    return $data;
}

function getById($id)
{
    $data = 'Add employee data from database';
    return $data;
}
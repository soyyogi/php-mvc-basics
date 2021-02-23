<?php

include MODELS . 'employeeModel.php';

function index(...$params) {
    if(isset($_GET['id'])) {
        $employee = getEmployee($_GET['id']);
        include VIEWS . 'employee/employee.php';
    } else {
        $allEmployees = getAllEmployees();
        include VIEWS . 'employee/employeeDashboard.php';
    }
}

function add(...$params) {
    $addEmployee = true;
    include VIEWS . 'employee/employee.php';
}


//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
    return get();
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($id)
{
    return getById($id);
}

/**
 * This function includes the error view with a message
 */
// function error($errorMsg)
// {
    
// }

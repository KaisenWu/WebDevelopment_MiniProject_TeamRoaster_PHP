<?php

/**
 * Student Name:            Kaisen Wu
 * Student Number:          300341264
 * Assignment/File Name:    Lab04
 * 
 * Description: 
 * 
 * This app is developed for displaying the table related to MLB info. And the data can be
 * sort by team name, payroll, and wins.
 * 
 * References:
 * 
 * Files and Directories with PHP - by Rahim Virani and others
 * 
 * Week5-shi-89 (in-class code) - by Rahim Virani
 * 
 * Starter template (https://getbootstrap.com/docs/5.1/getting-started/introduction/) - Bootstrap
 * 
 * Tables (https://getbootstrap.com/docs/5.1/content/tables/) - Bootstrap
 * 
 * How to make a cell of table hyperlin  * 
 * (https://stackoverflow.com/questions/25824095/order-by-clicking-table-header) 
 * - stackoverflow
 * 
 * Learn Bootstrap in less than 20 minutes - Responsive Website Tutorial 
 * (https://www.youtube.com/watch?v=eow125xV5-c&t=238s) 
 * - Raddy
 * 
 * 
 * STOP!!! 
 * Did you follow the Assignment Submission Guidlines?
 * Did you double check your submission runs in anohter directory or on another computer?
 *  
 *      
**/


//Require Files
require_once("inc/config.inc.php");
require_once("inc/file.inc.php");
require_once("inc/html.inc.php");
require_once("inc/roster.inc.php");


//Get the file contents
$fileContents = getFileContents();

//Parse the file contents
if(isset($fileContents))    {
    $roster = parseRoster($fileContents);
    // var_dump($roster);
}

//If the request method was get and "sort" issset
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['sort'])) {
    
    if($_GET['sort'] == "teamName"){
        $roster = sortbyName($roster);
    }
    elseif($_GET['sort'] == "payroll")  {
        $roster = sortbyPayroll($roster);
    }
    else    {
        $roster = sortbyWins($roster);
    }    
}

//Html header
htmlHeader();

//Print the roster
htmlRoster($roster);

//Html footer
htmlFooter();


?>
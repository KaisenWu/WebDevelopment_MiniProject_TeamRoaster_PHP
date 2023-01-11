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

//
function getFileContents()  {
	//Try to open the file and read the contents
	try{
		//Open the file for reading only.
		$fh = fopen(DATA_FILE, 'r');
		//If issues happen when opening the file, handle the exception.
		if(is_null($fh))	{
			throw new Exception("Can't open the file for some reasons.");
		}
		//Store the data to a long string variable.
		$contents = fread($fh,filesize(DATA_FILE));
		//Close the file handle.
		fclose($fh);
	} catch(Exception $fx)	{
		echo $fx->getMessage();
		error_log($fx->getMessage(), 1);
	}

	//return the contents if successful, if not write an error and die.
	if(is_null($contents))	{
		throw new Exception("Return contens fail.");
	}	else	{
		return $contents;
	}	
	
}
?>
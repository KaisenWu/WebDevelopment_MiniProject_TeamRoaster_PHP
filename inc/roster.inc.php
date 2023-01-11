<?php

//This function takes the contents of a CSV file and returns a two-dimensional array of the data
function parseRoster($fileContents)  {
    
    //Declare an array
    $roster = array(array());
    
    //Explode by newline character
    $rows = explode("\n",$fileContents);    

    //For each line in the above
    //Explode the line by comma 
    //convert the line into an array by the delimieter
    for($rowNumber=1;$rowNumber<count($rows);$rowNumber++)  {        
        $cells = explode(",", $rows[$rowNumber]);

        //Check for the appropriate number of columns in the file
        if(count($cells)!=3)  {
            //Trim each column entry
            throw new Exception("Problem parsing fime on $rowNumber");
        } else{           
            //add the line back to the $array
            for($colNumber=0;$colNumber<count($cells);$colNumber++) {
                $roster[$rowNumber-1][$colNumber+1] = str_replace(" ","",$cells[$colNumber]);
            }
        }
    } 

    //Append the images to the array.
    for($rosterRowNum=0;$rosterRowNum<count($roster);$rosterRowNum++)   {
        if($rosterRowNum!=21 && $rosterRowNum!= 13){
            $roster[$rosterRowNum][0] = '<img src="img/'.strtolower($roster[$rosterRowNum][1]).'.gif">';
        }
        elseif($rosterRowNum ==21) {
            $roster[$rosterRowNum][0] = '<img src="img/blue jays.gif">';
        }
        else    {
            $roster[$rosterRowNum][0] = '<img src="img/white sox.gif">';
        }
        
    }    
    return $roster;
}

//Comparator function for sorting by name
function cmpSortName ($x, $y)   {
    return $x[1] <=> $y[1];
}

//Sort by name and return the data
function sortbyName($rosterData)    {
   usort($rosterData, "cmpSortName");   
   return $rosterData;
}

//Sort by payroll return the data
function sortbyPayroll($rosterData) {
    usort($rosterData, "cmpSortPayroll");   
    return $rosterData;
}

//Sort by wins and return the data
function sortbyWins($rosterData) {
    usort($rosterData, "cmpSortWins");
    return $rosterData;
}

//Comparator function for sorting by payroll
function cmpSortPayroll ($x, $y)   {
    return $x[2] <=> $y[2];
}

//Comparator function for sorting by wins
function cmpSortWins ($x, $y)   {
    return $x[3] <=> $y[3];
}

?>
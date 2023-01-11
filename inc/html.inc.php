<?php

function htmlHeader($header = "MLB Team Roster by Kaisen")   { ?>

<!-- Import the bootstrap template. -->
<!-- Start header -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $header ?></title>
  </head>
  <body>
      <div class="container">
  <H1><?php echo $header; ?></H1>

<!-- End header -->
<?php }

function htmlFooter()   { ?>

<!-- Some footer here -->
</div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php }

function htmlRoster($roster)    {    

    //Write out the header with the links
    echo '<TABLE class="table">
    <thead>
      <tr>
        <th scope="col">Logo</th>
        <th scope="col"><a href="./lab04-kwu-64.php?sort=teamName">Team Name</a></th>
        <th scope="col"><a href="./lab04-kwu-64.php?sort=payroll">Payroll</th>
        <th scope="col"><a href="./lab04-kwu-64.php?sort=wins">Wins</th>
      </tr>
    </thead>
    <tbody>';
    
    //iterate through the data and draw the table
    foreach($roster as $val) {
      echo '<tr>
      <td>'.$val[0].'</td>
      <td>'.$val[1].'</td>
      <td>'.$val[2].'</td>
      <td>'.$val[3].'</td>
    </tr>';
    }

    //close the table
    echo '</TABLE>';
}

?>

<link rel="stylesheet" type="text/css" href="public/css/indexform.css">
<table class="table-fill">
      <thead>
        <tr>
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Surname</th>
                          <th>Gender</th>
                          <th>Ethnicity</th>
                          <th>Date of Birth</th>
                          <th>Address</th>
                          <th>Post Code</th>
                          <th>Telephone</th>
                          <th>Email</th>
                          <th>Disability</th>
                          <th>Crime</th>
                          <th>Grading history</th>          
                          <th>Paid + Date</th>
                          <th>Competitor Level</th>
        </tr>
      </thead>
      <tbody>

<?php

$link = mysqli_connect("localhost", "1415481", "chelsea123", "db1415481");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 
if(isset($term)){
    $sql = "SELECT * FROM person WHERE Name LIKE '" . $term . "%'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo 
                "<tr>
                              <td>{$row['ID']}</td>
                              <td>{$row['Name']}</td>
                              <td>{$row['Surname']}</td>
                              <td>{$row['Gender']}</td>
                              <td>{$row['Ethnicity']}</td>
                              <td>{$row['DOB']}</td>
                              <td>{$row['Address']}</td>
                              <td>{$row['Postcode']}</td>
                              <td>{$row['Telephone_number']}</td>
                              <td>{$row['Email']}</td>
                              <td>{$row['Disability']}</td>
                              <td>{$row['Crime']}</td> 
                              <td>{$row['Grading_history']}</td>   
                              <td>{$row['Paid']}</td>
                              <td>{$row['Competitor_level']}</td>              
            </tr>\n";
        }
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}

mysqli_close($link);
?>
      </tbody>
    </table> 
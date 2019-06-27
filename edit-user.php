<?php
require('components/navbar.php'); 
if(!isset($_SESSION['username'])) { //only access this page if session exists, if not redirect to login
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/business-casual.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public/css/indexform.css">
    <link rel="stylesheet" type="text/css" href="public/css/custom.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Elite Karate Association</div>
    <div class="address-bar">Self Defence | Peace of Mind | A Safer Future</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Elite Karate Association</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="3customers.php">Back to Customers Table</a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php 
    require("application/config.php");
    require("application/database.php");
    $id = $_GET['id'];

    $getTableData = $dbh->prepare("SELECT * FROM person WHERE ID='$id'");
    $getTableData->execute();
    ?>
      <?php while ($row = $getTableData->fetch(PDO::FETCH_ASSOC)) : ?>
    <center>
    <div class="container">

        <div class="row">
            <div class="box">
            <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Specific Customer Details</strong>
                    </h2>
                    <hr>
                </div>
                    <div class="registration">
                    <div class="personal">
                        <form method="post" action="edit-user.php?id=<?php echo $row['ID']?>" id="myForm">
                            <label for="firstname">First Name(s):</label><br>
                            <input type="text" name="firstname" id="firstname" value="<?=$row['Name']?>"><br><br>

                            <label for="lastname">Surname:</label><br>
                            <input type="text" name="lastname" id="lastname" value="<?=$row['Surname']?>"><br><br>

                            <label for="gender">Gender:</label><br>
                            <input type="text" name="gender" id="gender" value="<?=$row['Gender']?>"><br><br>

                            <label for="ethnicity">Ethnicity:</label><br>
                            <input type="text" name="ethnicity" id="ethnicity" value="<?=$row['Ethnicity']?>"><br><br>

                            <label for="DOB">Date Of Birth:</label><br>
                            <input type="date" name="DOB" id="DOB" value="<?=$row['DOB']?>"><br><br>

                            <label for="address">Full Address:</label><br>
                            <input type="text" name="address" id="address" value="<?=$row['Address']?>"><br><br>

                            <label for="postcode">Post Code:</label><br>
                            <input type="text" name="postcode" id="postcode" value="<?=$row['Postcode']?>"><br><br>

                            <label for="telephone_num">Telephone Number:</label><br>
                            <input type="text" name="telephone_num" id="telephone_num" value="<?=$row['Telephone_number']?>"><br><br>

                            <label for="email">Email address:</label><br>
                            <input type="text" name="email" id="email" value="<?=$row['Email']?>"><br><br>
                        
                            <label for="disability">Any disabilities?:</label><br>
                            <input type="text" name="disability" id="disability" value="<?=$row['Disability']?>"><br><br>

                            <label for="crime">Ever convicted of a crime?:</label><br>
                            <input type="text" name="crime" id="crime" value="<?=$row['Crime']?>"><br><br>

                            <label for="grading_history">Grading History:</label><br>
                            <input type="text" name="grading_history" id="grading_history" value="<?=$row['Grading_history']?>"><br><br>

                            <label for="paid">Payment Details:</label><br>
                            <input type="text" name="paid" id="paid" value="<?=$row['Paid']?>"><br><br>

                            <label for="competitor_level">Competitor Level:</label><br>
                            <input type="text" name="competitor_level" id="competitor_level" value="<?=$row['Competitor_level']?>"><br><br>

                            <label for="injury">Risk of injury statement accepted:</label><br>
                            <input type="text" name="injury" id="injury" value="<?=$row['Injury']?>"><br>
                            <br>
                            <input class="register" type="submit" value="Edit" name="submit" />
                        </form>
                            <?php endwhile; ?>
                            <!--<br><a href="3customers.php"><button>Go back to customers page</button></a>-->
<?php

$updated = "You have successfully updated the record, Please go back !";

if (isset($_POST['submit'])) {
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$ethnicity = $_POST['ethnicity'];
$DOB = $_POST['DOB'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$telephone_num = $_POST['telephone_num'];
$email = $_POST['email'];
$disability = $_POST['disability'];
$crime = $_POST['crime'];
$grading_history = $_POST['grading_history'];
$paid = $_POST['paid'];
$competitor_level = $_POST['competitor_level'];
$injury = $_POST['injury'];


$newDataQuery = $dbh->prepare("UPDATE person SET Name=:fname,
                                                 Surname=:lname,
                                                 Gender=:gender,
                                                 Ethnicity=:ethnicity,
                                                 DOB=:dob,
                                                 Address=:address,
                                                 Postcode=:postcode,
                                                 Telephone_number=:telephone_num,
                                                 Email=:email,
                                                 Disability=:disability,
                                                 Crime=:crime,
                                                 Grading_history=:grading_history,
                                                 Paid=:paid,
                                                 Competitor_level=:competitor_level,
                                                 Injury=:injury 
                                                 WHERE ID = :id");
    $newDataQuery->bindParam(':fname', $fname);
    $newDataQuery->bindParam(':lname', $lname);
    $newDataQuery->bindParam(':gender', $gender);
    $newDataQuery->bindParam(':ethnicity', $ethnicity);
    $newDataQuery->bindParam(':dob', $DOB);
    $newDataQuery->bindParam(':address', $address);
    $newDataQuery->bindParam(':postcode', $postcode);
    $newDataQuery->bindParam(':telephone_num', $telephone_num);
    $newDataQuery->bindParam(':email', $email);
    $newDataQuery->bindParam(':disability', $disability);
    $newDataQuery->bindParam(':crime', $crime);
    $newDataQuery->bindParam(':grading_history', $grading_history);
    $newDataQuery->bindParam(':paid', $paid);
    $newDataQuery->bindParam(':competitor_level', $competitor_level);
    $newDataQuery->bindParam(':injury', $injury);
    $newDataQuery->bindParam(':id', $id);
    if ($newDataQuery->execute()) {
        echo "<script type='text/javascript'>alert('$updated');</script>";
        //echo "Successfully Updated Record!";
        //header("location: edit-user.php?id=".$id);
    }
}
   ?>
                    </div>
                    </div>
                                </div>
        </div>
        </div>
        

                        </center>


    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>
                    Copyright &copy; Humza Choudhary 2017
                    <a href="https://twitter.com/humzzzzzzz" target="_blank">
                    <img src="http://www.niftybuttons.com/komodomedia/twitter_32.png" alt="twitter icon" title="Humza's Twitter Page"></a>
                    <a href="https://www.facebook.com/EliteKarateAssociation/" target="_blank">
                    <img src="http://www.niftybuttons.com/komodomedia/facebook_32.png" alt="facebook icon" title="Humza's Facebook"></a>
                    <a href="https://www.youtube.com/channel/UC6nnXNgJLMbpIO4EVaosdJA" target="_blank">
                    <img src="http://www.niftybuttons.com/komodomedia/youtube_32.png" alt="youtube icon" title="Humza's Youtube Channel"></a>
                    </p>
                </div>
            </div>
        </div>
</footer>
</body>
</html>



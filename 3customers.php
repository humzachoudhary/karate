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

    <title>Staff</title>

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
                        <a href="1index.php">Home</a>
                    </li>
                    <li>
                        <a href="2registration.php">Register</a>
                    </li>
                    <li>
                        <a href="3customers.php" style="color:blue; font-weight: bold;">Staff Only</a>
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  
                <div class="col-lg-12">
                <hr>
                    <div class="welcomeuser">
                        <?php if(isset($_SESSION['username'])) : ?>
                            You are signed in as <?=$_SESSION['username'];?>
                            <br>        
                            <a href='logout.php'>LOG OUT</a>
                        <?php endif; ?>
                    </div>
                <hr>
                <h3 class="intro-text text-center"><strong>Existing Customer Details:</strong>
                </h3>
                <hr>                   
                </div>

    <div class="box">
              
               <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                    $('.search-box input[type="text"]').on("keyup input", function(){
                        /* Get input value on change */
                        var inputVal = $(this).val();
                        var resultDropdown = $(this).siblings(".result");
                        if(inputVal.length){
                            $.get("backend-search.php", {term: inputVal}).done(function(data){
                                // Display the returned data in browser
                                resultDropdown.html(data);
                            });
                        } else{
                            resultDropdown.empty();
                        }
                    });
                    
                    // Set search input value on click of result item
                    $(document).on("click", ".result p", function(){
                        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                        $(this).parent(".result").empty();
                    });
                });
                </script>
                </head>
                    
                  <h3>Search for customers:</h3>
                    <div class="search-box">
                        <input type="text" autocomplete="off" placeholder="Enter Name" />
                        <div class="result"></div>
                        <br>
                    
    </div>
                
                   
<?php
require("application/config.php");
require("application/database.php");


$getTableData = $dbh->prepare("SELECT * FROM person");
$getTableData->execute();

?>
<center>
<table class="hoverTable">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Gender</th>
    <th>Ethnicity</th>
    <th>Date Of Birth</th>
    <th>Address</th>
    <th>Post Code</th>
    <th>Telephone Number</th>
    <th>Email</th>
    <th>Disability</th>
    <th>Crime</th>
    <th>Grading History</th>
    <th>Paid</th>
    <th>Competitor Level</th>
    <th>Injury</th>
    <th>Action</th>
  </tr>
  <?php while ($row = $getTableData->fetch(PDO::FETCH_ASSOC)) ://get user data ?>
    <form method="POST" action="edit-user.php?id=<?php echo $row['ID']?>">
    <tr>
    <td><?=$row['ID']?></td>
    <td><?=$row['Name']?></td>
    <td><?=$row['Surname']?></td>
    <td><?=$row['Gender']?></td>
    <td><?=$row['Ethnicity']?></td>
    <td><?=$row['DOB']?></td>
    <td><?=$row['Address']?></td>
    <td><?=$row['Postcode']?></td>
    <td><?=$row['Telephone_number']?></td>
    <td><?=$row['Email']?></td>
    <td><?=$row['Disability']?></td>
    <td><?=$row['Crime']?></td>
    <td><?=$row['Grading_history']?></td>
    <td><?=$row['Paid']?></td>
    <td><?=$row['Competitor_level']?></td>
    <td><?=$row['Injury']?></td>
    <td><button id="get-user-data" database_id="<?=$row['ID']?>">Edit</button></td>
  </tr>
  </form>
  <?php endwhile;?>

</table>
</center>

                <br>
                <br>
                </div>
              
              <div class="clearfix"></div>
            </div>
        </div>

        

    </div>
    

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

  

    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>

</body>

</html>

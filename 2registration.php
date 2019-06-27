<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

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
                        <a href="2registration.php" style="color:blue; font-weight: bold;">Register</a>
                    </li>
                    <li>
                        <a href="3customers.php">Staff Only</a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <center>
    <div class="container">

        <div class="row">
            <div class="box">
            <div class="col-lg-12">
                    <hr>
                    <h3 class="intro-text text-center"><strong>Please complete this Registration form to register</strong>
                    </h3>
                    <hr>
                </div>
                    <div class="registration">
                    <div class="personal">
                        <h2>Personal Details:</h2><br>
                        <form action="insert.php" method="post" name="register" id="myForm">
                            <label for="fname">First Name(s):</label>
                            <br>
                            <input type="text" name="fname" />
                            <br>
                            <br> <label for="lname">Last Name:</label>
                            <br>
                            <input type="text" name="lname" />
                            <br>
                            <br> <label for="sex">Gender:</label>

                            <br>
                            <select type="text" name="sex">
                                <option selected="true" disabled="disabled">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <br>
                            <br> <label for="ethnicity">Ethnicity:</label>

                            <br>
                            <input type="text" name="ethnicity" />
                            <br>
                            <br> <label for="DOB">Date of birth:</label> 
                            <br>
                            <input type="date" name="DOB" min="1920-01-01" max="2010-01-01"/>
                            <br>
                            <br> <label for="address">Full address:</label> 
                            <br>
                            <textarea type="text" name="address" cols="38" rows="5"></textarea>
                            <br>
                            <br> <label for="postcode">Post Code:</label>  
                            <br>
                            <input type="text" name="postcode" />
                            <br>
                            <br> <label for="number">Contact Number:</label>
                            <br>
                            <input type="number" name="number" />
                            <br>
                            <br> <label for="email">Email address:</label>
                            <br>
                            <input type="email" name="email" />
                            <br>
                            <br>
                            <br>
                        
                            <h2>Previous Experiences:</h2><br>
                            <label for="disability">Do you suffer from a disability<br> or suffer from anything<br> we should be aware of?: </label>
                            <br>
                            <input type="text" name="disability" />
                            <br><br>
                            
                            <label for="crime">Have you ever been convicted<br> of a crime of violence?: </label> 
                            <br>
                            <select type="text" rows="5" name="crime">
                                <option selected="true" disabled="disabled">Select</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                            <br><br>
                            <label for="grading">Current karate grading history:</label>
                            <br>
                            <select type="text" name="grading">
                                <option selected="true" disabled="disabled">Select</option>
                                <option>Never done</option>
                                <option>Black Belt</option>
                                <option>Junior Black Belt (Under 16yrs)</option>
                                <option>1st Kyū 級 (3rd Brown Belt)</option>
                                <option>2nd Kyū 級 (2nd Brown Belt)</option>
                                <option>3rd Kyū 級 (1st Brown Belt)</option>
                                <option>4th Kyū 級 (Purple Belt)</option>
                                <option>5th Kyū 級 (Blue Belt)</option>
                                <option>6th Kyū 級 (Green Belt)</option>
                                <option>7th Kyū 級 (Orange Belt)</option>
                                <option>8th Kyū 級 (Yellow Belt)</option>
                                <option>9th Kyū 級 (Red Belt)</option>
                                <option>10th Kyū 級 (Red/White Belt)</option>
                                <option>11th Kyū 級 (White/Red Belt)</option>
                                <option>12th Kyū 級 (White Belt)</option>

                            </select>
                            <!--<br>
                            <br> Have you paid for your membership?
                            <br>If so, please type the date you paid
                            <br>(dd/mm/yyyy):
                            <br>
                            <input type="text" name="paid" />-->
                            <br>
                            <br> <label for="competitor">Are you a competitor?<br> If so at which level:</label>
                            <br>
                            <select type="text" name="competitor">
                                <option selected="true" disabled="disabled">Select</option>
                                <option>Nope</option>
                                <option>Club level</option>
                                <option>National level</option>

                            </select>
                            <br>
                            <br> 
                            <label for="injury">Do you accept that the practice<br> of martial art/combat sport<br> involves the risk of serious injury?:</label>
                            <br>
                            <select type="text" name="injury">
                                <option selected="true" disabled="disabled">Select</option>
                                <option>Yes</option>
                            </select>
                            <br>
                            <br>

                            <input class="btn btn-success submit" type="submit" value="Register" />
                            <br>
                            <input class="register" type="button" onclick="resetform()" value="Clear" />
                        </form>



                    </div>
                    </div>
                    <img class="img-responsive img-border-left" src="public/images/karate.jpg" alt="Elite Karate" title="Elite Karate LOGO">
                    </div>
                    </div>
                    </div>
                    </center>

    <script>
        function resetform() {
            document.getElementById("myForm").reset();
        }
    </script>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!--  include of jquery lib -->

    <script language="JavaScript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> <!-- include of jqyer validation lib -->
    <script language="JavaScript" type="text/javascript" src="public/js/jquery-validation.js"></script> <!-- include of aditional javascript file where we defined all rules -->

</body>

</html>

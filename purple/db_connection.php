<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Purpleorganization12345.";
$db = "practice";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}


 ?>  




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com -->
    <title>Purple Organization</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css" />
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
                <a class="navbar-brand" href="#myPage"><img src="logo.png" width="30px" /></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#pricing">PRICING</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>Purple Organization</h1>
        <p>House of tech e-learning</p>
        <script async src="https://cse.google.com/cse.js?cx=009711255933553828222:zyi7nbod5ij"></script>
<div class="gcse-search"></div>
        <!--form>
            <div class="input-group">
    
                <input type="email" class="form-control" size="50" placeholder="Search for a program training" required>
                <div class="input-group-btn">
                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form-->
    </div>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About Purple Organization</h2><br>
                <h4>Purple Organization is a place of technological needs <br/>.we teach people to be good in programming languages</h4><br>
                <p>Our Organization is the best currently in Ghana <br/>and one of the best in Africa</p>
                <p>The figure shows our training from when started to recent years</p>
                <br><button class="btn btn-danger btn-lg">Get in Touch</button>
            </div>
            <div class="col-sm-4">
                <span><img src="purple-data.jpg" style="float: right;"/></span>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-orange">
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-globe logo slideanim"></span>
            </div>
            <div class="col-sm-8">
                <h2>Our Values</h2><br>
                <h4><strong>MISSION:</strong> We started Purple Organization with one objective: to provide more opportunities in the tech ecosystem for African women. A year on and we’re still actively pursuing this! In the past year, ladies who have gone
                    through our training have accepted job offers from companies like Microsoft, Stanbic Bank, Hubtel, Vodafone, AgroCenta and others. But guess what? We’re just getting started!</h4><br>
                <p><strong>VISION:</strong> We started Purple Organization with one objective: to provide more opportunities in the tech ecosystem for African women. A year on and we’re still actively pursuing this! In the past year, ladies who have gone
                    through our training have accepted job offers from companies like Microsoft, Stanbic Bank, Hubtel, Vodafone, AgroCenta and others. But guess what? We’re just getting started!</p>
            </div>
        </div>
    </div>

    <!-- Container (Services Section) -->
    <div id="services" class="container-fluid text-center">
        <h2>Training Offers</h2>
        <h4>What we offer</h4>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-education logo-small"></span>
                <h4>Training</h4>
                <p>We train you to be the best</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-cloud logo-small"></span>
                <h4>Cloud training</h4>
                <p>We teach cloud computing both online and onsite</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-user logo-small"></span>
                <h4>Motivation</h4>
                <p>We motivate our pupils by inviting key note people in the tech industry</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-bold logo-small"></span>
                <h4>Bootcamps</h4>
                <p>We organize bootcamps for all persons</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-certificate logo-small"></span>
                <h4>CERTIFIED</h4>
                <p>We give certificates after every bootcamp or training</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-phone logo-small"></span>
                <h4 style="color:#303030;">Mobile or Web apps</h4>
                <p>We teach both andriod and web apps</p>
            </div>
        </div>
    </div>


    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Development Stack</h2><br>
            <h4>Programming Languages we teach</h4>
        </div>
        <div class="row slideanim">

            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>HTML</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>Duration:4 weeks</strong>
                            <p><strong>Starting:4th July</strong>

                    </div>
                    <div class="panel-footer">

                        <button class="btn btn-lg">Sign Up</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Css</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>Duration:4 weeks</strong>
                            <p><strong>Starting:10th September</strong>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-lg">Sign Up</button>
                    </div>
                </div>

            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>JavaScript</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>Duration:6 weeks</strong>
                            <p><strong>Starting 3rd December</strong>

                    </div>
                    <div class="panel-footer">

                        <button class="btn btn-lg">Sign Up</button>
                    </div>
                </div>
            </div>
            <div class="row slideanim">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Android develop</h1>
                        </div>
                        <div class="panel-body">
                            <strong>Duration:3 weeks </strong>
                            <strong>Starting:1st May</strong>

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-lg">Sign Up</button>
                        </div>

                    </div>
                </div>
                <div class="row slideanim">
                    <div class="col-sm-4 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <h1>Cloud computing</h1>
                            </div>
                            <div class="panel-body">
                                <strong>Duration:5 weeks </strong>
                                <strong>Starting:2nd July</strong>


                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-lg">Sign Up</button>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Container (Pricing Section) -->
                <div id="pricing" class="container-fluid">
                    <div class="text-center">
                        <h2>Pricing</h2>
                        <h4>Choose a payment plan that works for you</h4>
                    </div>
                    <div class="row slideanim">
                        <div class="col-sm-4 col-xs-12">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                    <h1>Basic</h1>
                                </div>
                                <div class="panel-body">
                                    <p> <strong>Including modules that last for 2 months </strong></p>
                                    <strong>Package:One programming language</strong>


                                </div>
                                <div class="panel-footer">
                                    <h3>$19</h3>
                                    <h4>per month</h4>
                                    <button class="btn btn-lg">Sign Up</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                    <h1>Pro</h1>
                                </div>
                                <div class="panel-body">
                                    <p><strong>Including modules that last 4 months</strong></p>
                                    <strong>Package:3 programming languages</strong>

                                </div>
                                <div class="panel-footer">
                                    <h3>$29</h3>
                                    <h4>per month</h4>
                                    <button class="btn btn-lg">Sign Up</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="panel panel-default text-center">
                                <div class="panel-heading">
                                    <h1>Premium</h1>
                                </div>
                                <div class="panel-body">
                                    <p><strong>Including modules that last 6 months</strong></p>
                                    <p><strong>Package: All programming lanaguages available</strong></p>
                                </div>
                                <div class="panel-footer">
                                    <h3>$49</h3>
                                    <h4>per month</h4>
                                    <button class="btn btn-lg">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Container (Contact Section) -->
                <div id="contact" class="container-fluid">
                    <h2 class="text-center" style="color: black;">CONTACT</h2>
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Contact us and we'll get back to you within 24 hours.</p>
                            <p><span class="glyphicon glyphicon-map-marker" style="color:red"></span> Accra, Ghan</p>
                            <p><span class="glyphicon glyphicon-phone" style="color: blue;"></span> +233 57311257 </p>
                            <p><span class="glyphicon glyphicon-envelope" style="color: orangered;"></span> purple@gmail.com</p>
                        </div>
                        <div class="col-sm-7 slideanim">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button class="btn btn-primary pull-right" type="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <footer class="container-fluid text-center">
                    <a href="#myPage" title="To Top">
                        <span class="glyphicon glyphicon-chevron-up"></span>
                    </a>

                </footer>

                <script>
                    $(document).ready(function() {
                        // Add smooth scrolling to all links in navbar + footer link
                        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                            // Make sure this.hash has a value before overriding default behavior
                            if (this.hash !== "") {
                                // Prevent default anchor click behavior
                                event.preventDefault();

                                // Store hash
                                var hash = this.hash;

                                // Using jQuery's animate() method to add smooth page scroll
                                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                                $('html, body').animate({
                                    scrollTop: $(hash).offset().top
                                }, 900, function() {

                                    // Add hash (#) to URL when done scrolling (default click behavior)
                                    window.location.hash = hash;
                                });
                            } // End if
                        });

                        $(window).scroll(function() {
                            $(".slideanim").each(function() {
                                var pos = $(this).offset().top;

                                var winTop = $(window).scrollTop();
                                if (pos < winTop + 600) {
                                    $(this).addClass("slide");
                                }
                            });
                        });
                    })
                </script>

</body>

</html>
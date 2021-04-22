
<?php
 ob_start();
session_start();
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
 <!--<![endif]-->
<head><meta charset="euc-jp">
    <title>NACEST</title>
    <!-- Meta -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles-kadpoly.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
 $id = $_GET['id'];
$conn = mysqli_connect("localhost","nacestmk_root","43]67ukb+wsx","nacestmk_nacestdb");

           $applicationNo = $_SESSION['tnx'];   
            $query = "SELECT * FROM application WHERE `applicationNo` = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);
     
     
?>
<body class="home-page">
    <?php
    echo $applicationNo;
    ?>
    <div class="wrapper">
        <!-- ******HEADER****** -->
        <header class="header">
           <!--//to-bar-->
            <div class="header-main container">
                <h1 class="logo col-md-12 col-sm-12 logotext" align="center">
                    <a href="/"><img id="logo" src="assets/images/logo.jpg" alt="Logo"></a><br/>NIGERIAN ARMY COLLEGE OF ENVIRONMENTAL SCIENCE AND TECHNOLOGY<br>NACEST <br>2020/2021 Admission Application
                </h1><!--//logo-->
                
            </div><!--//header-main-->
        </header><!--//header-->
        
        <!-- ******CONTENT****** -->
        <div class="content container">
           
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h3 class="heading-title pull-left"><b></b>Admission Application Bio-Data</b></h3>
                    <h3></h3>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">index.php</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Applications</li>
                        </ul>
                        
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row">
                        <?php
                       echo $_SESSION['applicationNo'];
                        ?>
                        <article class="contact-form col-md-4 col-sm-5  page-row">                             
                            <form action="" method="post">
                                <div class="form-group message">
                                    <label for="wmessage">Application No.<span class="required">*</span></label>
<?php echo $data['applicationNo'] ?> <?php echo $_SESSION['applicationNo'] ?>
                                </div><!--//form-group-->
                                <div class="form-group name">
                                    <label for="wname">First Name:</label>
                                    <?php echo $data['fname'] ?>
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="wemail">Middle Name:<span class="required">*</span></label>
                                    <?php echo $data['mname'] ?>
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="wphone">Last Name:</label>
                                   <?php echo $data['lname'] ?>
                                </div><!--//form-group-->
                                <div class="form-group message">
                                    <label for="wmessage">Date of Birth:<span class="required">*</span></label>
                                 <?php echo $data['dob'] ?>
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="wphone">Gender:</label>
<?php echo $data['gender'] ?>
                                 </div><!--//form-group-->
                                   <div class="form-group phone">
                                    <label for="wphone">Marital Status:</label>
                                    <?php echo $data['maritalStatus'] ?>
                                 </div><!--//form-group-->
                                   
                                <div class="form-group message">
                                    <label for="wmessage">Phone Number<span class="required">*</span></label>
                                 <?php echo $data['phoneNumber'] ?>
                                </div><!--//form-group-->
                                 <div class="form-group message">
                                    <label for="wmessage">Email Address<span class="required">*</span></label>
                                    <?php echo $data['email'] ?>
                                </div>
                                <div class="form-group phone">
                                    <label for="wphone">Personnel Status:</label>
                                    
                                    <?php echo $data['personnelStatus'] ?>
                                 </div><!--//form-group-->
                                   <div class="form-group message">
                                    <label for="wmessage">Rank<span class="required">*</span></label>
                                    <?php echo $data['rank'] ?>
                                </div>   
                                    
                                                        </article><!--//contact-form-->
                        <article class="contact-form col-md-4 col-sm-5  page-row">
                        <div class="form-group message">
                                    <label for="wmessage">SVC Number<span class="required">*</span></label>
                                    <?php echo $data['svcno'] ?>
                                </div>
                                <div class="form-group message">
                                    <label for="wmessage">Unit & FMN:<span class="required">*</span></label>
                                   <?php echo $data['unitfmn'] ?>
                                </div> 

                           <div class="form-group name">
                                    <label for="wname">Nationality:</label>
                                   <?php echo $data['nationality'] ?>
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="wemail">State:<span class="required">*</span></label>
                                    <?php echo $data['state'] ?>
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="wphone">LGA</label>
                                    <?php echo $data['lga'] ?>
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="wphone">Programme:</label>
                                    <?php echo $data['programme'] ?>
                                 </div><!--//form-group-->
                                   <div class="form-group phone">
                                    <label for="wphone">First Choice:</label>
<?php echo $data['firstchoice'] ?>
                                 </div><!--//form-group-->
                                  <div class="form-group phone">
                                    <label for="wphone">Second Choice:</label>
                                    <?php echo $data['secondchoice'] ?>
                                 </div><!--//form-group-->
                                   
                                <div class="form-group message">
                                    <label for="wmessage">UTME Registration Number:<span class="required">*</span></label>
                                 <?php echo $data['utmeRegNo'] ?>
                                </div><!--//form-group-->
                                 <div class="form-group message">
                                    <label for="wmessage">UTME Scores<span class="required">*</span></label>
<?php echo $data['utmeScores'] ?>
                                </div><!--//form-group-->

                                </article> 
                               <article class="contact-form col-md-4 col-sm-5  page-row">
                                    <div><img src="<?php echo $data['imageurl']?>"  style ="border-radius: 15%"class="rcorners3" style="" width="200px" height="200px" style="background-image:url(assets/images/image.jpg)">,<br/>
                                    Full Names: <?php echo $data['fname'] ?>, <?php echo $data['lname'] ?><br/>
 Application NO: <?php echo $data['applicationNo'] ?>
                                     </div>
                                   
                                </article>
                               
</form?
                    </div><!--//page-row-->
                 <div align="justify">Application Fee: N6500 which includes (form fee 3,000 examination fee N2500, bank charges N300 and result checker N700)<br>
Applicants are to come along with the printout of their exam slopt on the day of examination<br>

The date of the entrance examination into ND programmes will be communicated to you in due course</div> 
                </div><!--//page-content-->
            </div><!--//page-wrapper--> 
<p>Note: <br>1. Print this Form out and come along with it on the day of entrance Examination.<br>2.  Come along with your Payment receipt sent to your email or Prove of Payment.<br>3.    Attact your O,level Result along with your Printout and Payment receipt.</p>
        </div><!--//content-->
    </div><!--//wrapper-->
    <!-- ******FOOTER****** -->
    </body>
</html>

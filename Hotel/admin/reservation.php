<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOKING RAMKRISHNA</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    <li>
                        <a  href="AvailableRoom.php"><i class="fas fa-search"></i></i> Available Rooms</a>
                    </li>
                    
          </ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
       <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            BOOKING <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <table class="row">
                
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
            <form name="form" method="post">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
                        <option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                        <option value="Prof.">Prof.</option>
                        <option value="Rev .">Rev .</option>
                        <option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
                 <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
                 <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
                 <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" maxlength="10" class="form-control" required>
                                            
                               </div>
                               

                              </div>
                           </div>
                         </div>
                      <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>   
                        <div class="panel-body">

                              <div class="form-group">
                                            <label>Aadhar No.</label>
                                            <input name="aadhar" type="text" maxlength="12" class="form-control" required>
                                   </div>          
                               
                               <div class="form-group">
                                            <label>State</label>
                                            <input name="state" type="text" maxlength="20" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>City</label>
                                            <input name="city" type="text" maxlength="20" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Zip</label>
                                            <input name="zip" type="text" maxlength="20" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Vehicle No.</label>
                                            <input name="vehicle" type ="text" maxlength="8" class="form-control" required>
                                            
                               </div>
                             </div>
                           </div>
                         </div>

                <!--  <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Sri Lankan" checked="">Indian
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Sri Lankan ">NRI 
                                            </label>
                         
                                </div>
                <?php

                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                ?> -->
                <!-- <div class="form-group">
                                            <label>Passport Country*</label>
                                            <select name="country" class="form-control" required>
                        <option value selected ></option>
                                                <?php
                        foreach($countries as $key => $value):
                        echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                        endforeach;
                        ?>
                                            </select>
                </div> -->
                <!-- <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" maxlength="10" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Vehicle No.</label>
                                            <input name="vehicle" type ="text" maxlength="8" class="form-control" required>
                                            
                               </div> -->
                 
                    <!--     </div>
                        
                    </div>
                </div> -->
                
                  
            <table class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            BOOKING INFORMATION
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                                            <label>Arrival From</label>
                                            <input name="arrival" type="text" class="form-control">
                                            
                               </div>
                               <div class="form-group">
                                            <label>Going Where</label>
                                            <input name="going" type="text" class="form-control">
                                            
                               </div>
                <div class="form-group">

                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" onchange="mytype(this.value)" data-toggle="tooltip1" required>
                        <option>Select Type</option>
                                                <option value="Ac Room">AC ROOM</option>
                                                <option value="Non Ac">NON AC ROOM</option>
                        <!-- <option value="Guest House">GUEST HOUSE</option>
                        <option value="Single Room">SINGLE ROOM</option> -->
                                            </select>
                              </div>
    
                            <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select id="bed" name="bed" class="form-control" onchange="mybed(this.value)" data-toggle="tooltip" required>
                                                <option>Select Bed</option>
                                                <!-- <option>Single</option>
                                                <option>Double</option>
                                                <option>Triple</option>
                                                <option>Quad</option> -->
                                                
                                            </select>
                            </div>
                          
                              
                
                <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <input name="nroom" type="text" maxlength="1" class="form-control" value="1"placeholder="Deafult 1 Selected">
                        <!-- <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option> -->
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>All Rooms</label>
                                            <select id="roomno" name="roomno" class="form-control" required>
                                                <option>Select Room No.</option>

                                            </select>
                              </div>
                              <!-- <div class="form-group">
                                            <label>Room No.</label>
                                            <input name="roomno" type="text" class="form-control" required>
                                            
                               </div> -->
                               <div class="form-group">
                                            <label>Advance</label>
                                            <input name="advance" type="text" value="100" class="form-control" placeholder="Default ₹100" >
                                            
                               </div>
               
               
               <!--  <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control"required>
                        <option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
                        <option value="Half Board">Half Board</option>
                        <option value="Full Board">Full Board</option>
                        
                                                
                                             
                                            </select>
                              </div> -->
                <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
                 <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </table>
        
        
                <!-- <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
            <p>Enter the random code<br /></p>
              <input  type="text" name="code1" title="random code" />
              <input type="hidden" name="code" value="<?php echo $Random_code; ?>" /> -->
                    <div class="col-md-12 col-sm-12">
            <input id="sub-btn" type="submit" name="submit" class="btn btn-primary">
                    
            <?php
              if(isset($_POST['submit']))
              {
              // $code1=$_POST['code1'];
              // $code=$_POST['code']; 
              // if($code1!="$code")
              // {
              // $msg="Invalide code"; 
              // }
              // else
              // {
              
                  $con=mysqli_connect("localhost:3307","root","","hotel");
                  $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
                  $rs = mysqli_query($con,$check);
                  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                  if($data[0] > 1) {
                    echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
                    
                  }

                  else
                  {
                    $new ="Not Confirm";
                    $newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Aadhar`,`State`,`City`,`Zip`,`Phone`, `Vehicle No`,`Arrival`,`Going`, `TRoom`, `Bed`, `NRoom`, `RoomNo`, `Advance`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[aadhar]','$_POST[state]','$_POST[city]','$_POST[zip]','$_POST[phone]','$_POST[vehicle]','$_POST[arrival]','$_POST[going]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[roomno]','$_POST[advance]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'));

                                        INSERT INTO `copy`(`Title`, `FName`, `LName`, `Email`, `Aadhar`,`State`,`City`,`Zip`,`Phone`, `Vehicle No`,`Arrival`,`Going`, `TRoom`, `Bed`, `NRoom`, `RoomNo`, `Advance`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[aadhar]','$_POST[state]','$_POST[city]','$_POST[zip]','$_POST[phone]','$_POST[vehicle]','$_POST[arrival]','$_POST[going]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[roomno]','$_POST[advance]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";


                    if (mysqli_multi_query($con,$newUser))
                    {
                      echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                      
                    }
                    else
                    {
                      echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                      
                    }
                  }

              $msg="Your code is correct";
              }
              
              ?>
            </form>
              
                    </div>

                    <!-- </div>     -->
                <!-- </div>     -->
       <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <script>
        

        function mytype(data) {
            
            const ajaxreq = new XMLHttpRequest();
            ajaxreq.open('GET','http://localhost/Hotel/admin/getroomtype.php?selectac='+data,'TRUE');

            ajaxreq.send();

            ajaxreq.onreadystatechange = function(){
                if(ajaxreq.readyState == 4 && ajaxreq.status == 200){

                    document.getElementById('bed').innerHTML = ajaxreq.responseText;

                }
            }
        }
        $(document).ready(function(){
            $('[data-toggle="tooltip1"]').tooltip();
        });

</script>
<script>
        function mybed(data1) {
            
            const ajaxreq1 = new XMLHttpRequest();
            ajaxreq1.open('GET','http://localhost/Hotel/admin/getdata.php?selectvalue='+data1,'TRUE');

            ajaxreq1.send();

            ajaxreq1.onreadystatechange = function(){
                if(ajaxreq1.readyState == 4 && ajaxreq1.status == 200){

                    document.getElementById('roomno').innerHTML = ajaxreq1.responseText;

                }
            }
        }

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

    </script>

</body>
</html>

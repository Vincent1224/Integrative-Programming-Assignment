<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
// put your code here
require_once 'header.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
        <link href="css/userProfile.css" rel="stylesheet" type="text/css"/>
       
    </head>
    <body style="display: grid; grid-template-columns: auto;">
        <div class="body">
        <div class="profile-body">
        
        <div class="">
            <!-- Contact detail -->
            <div class="col-xxl-8 mb-5 mb-xxl-0">
                <div class="bg-secondary-soft px-4 py-5 rounded">
                     <form>
                    <div class="row g-3">
                       
                        <h4 class="mb-4 mt-0">User Profile</h4>
                        
                        <div class="col-md-6">
                            <label class="form-label" id="custidlbl">Customer ID</label>
                            <input type="text" id="custID" class="form-control" placeholder="" aria-label="Customer ID" value="C001" disabled >
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label" id="usernamelbl">Username</label>
                            <input type="text" class="form-control name" placeholder="" aria-label="Username" value="Vincent">
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label"  id="phonelbl">Phone number</label>
                            <input type="text" class="form-control phnum" placeholder="" aria-label="Phone number" value="017-5942833">
                        </div>
                    
                        <div class="col-md-6">
                            <label class="form-label"  id="emaillbl">Email</label>
                            <input type="email" class="form-control mail" id="inputEmail4" value="vincentlcz-pm20@student.tarc.edu.my">
                        </div>
                      

                    </div> <!-- Row END -->
                    <div id="editbtn">
                        <button type="button"  class="btn btn-primary btn-lg savebtn" onclick="changeMessageProfile()">Update profile</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
        </div>    
        
        <div class="delivery-body">

            <div class="">
                <div class="col-xxl-8 mb-5 mb-xxl-0">
                    <div class="bg-secondary-soft px-4 py-5 rounded">
                        <form>
                            <div class="row g-3">

                                <h4 class="mb-4 mt-0">Delivery Details</h4>

                                <div class="col-md-6">
                                    <label class="form-label" id="add1">Address Line 1</label>
                                    <input type="text" id="add1" class="form-control add1" placeholder="" aria-label="Address Line 1" value="2487-C Lorong Inai 10/1">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" id="add2">Address Line 2</label>
                                    <input type="text" class="form-control add2" placeholder="" aria-label="Address Line 2" value="Taman Desa Jalan Inai">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"  id="postcode">Postcode</label>
                                    <input type="text" class="form-control postcode" placeholder="" aria-label="Postcode" value="05400">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label"  id="city">City</label>
                                    <input type="text" class="form-control city" placeholder="" aria-label="Phone number" value="05400">
                                </div>
                                
                                <div>
                                <label class="form-label"  id="state">States</label>
                                <select class="form-select state" aria-label="States">
                                    <option selected>States</option>
                                    <option value="Johor">Johor</option>
                                    <option value="Kedah">Kedah</option>
                                    <option value="Kelantan">Kelantan</option>
                                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                                    <option value="Labuan">Labuan</option>
                                    <option value="Melaka">Melaka</option>
                                    <option value="Negeri Sembilan">Negeri Sembilan</option>
                                    <option value="Pahang">Pahang</option>
                                    <option value="Penang">Penang</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perlis">Perlis</option>
                                    <option value="Putrajaya">Putrajaya</option>
                                    <option value="Sabah">Sabah</option>
                                    <option value="Sarawak">Sarawak</option>
                                    <option value="Selangor">Selangor</option>
                                    <option value="Terengganu">Terengganu</option>
                                    

                                </select>
                                </div>
                            </div>
                            <div id="editDelivery">
                                <button type="button"  class="btn btn-primary btn-lg editDelivery" onclick="changeMessageDelivery()">Update Delivery Address</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> 
        </div>
        <br />
        <br/>
        <?php
        require_once 'footer.php';
        ?>
        
    </body>
    <script>
        //profile
        $(document).ready(function () {
        //Disable Save Button On Page Load
        $(".savebtn").attr('disabled', 'disabled');

        
        $(".name").keyup(function() {
        $(".savebtn").removeAttr('disabled');
        });
        
        $(".phnum").keyup(function() {
        $(".savebtn").removeAttr('disabled');
        });
        
        $(".mail").keyup(function() {
        $(".savebtn").removeAttr('disabled');
        });

        //Disable Save Button once clicked
        $(".savebtn").click(function() {
        $(this).attr('disabled', 'disabled');
        });
        });
        
        
        
        //delivery Address
        $(document).ready(function () {
        //Disable Save Button On Page Load
        $(".editDelivery").attr('disabled', 'disabled');

        
        $(".add1").keyup(function() {
        $(".editDelivery").removeAttr('disabled');
        });
        
        $(".add2").keyup(function() {
        $(".editDelivery").removeAttr('disabled');
        });
        
        $(".postcode").keyup(function() {
        $(".editDelivery").removeAttr('disabled');
        });
        
        $(".city").keyup(function() {
        $(".editDelivery").removeAttr('disabled');
        });
        
        $(".state").change(function() {
        $(".editDelivery").removeAttr('disabled');
        });

        //Disable Save Button once clicked
        $(".editDelivery").click(function() {
        $(this).attr('disabled', 'disabled');
        });
        });
        
        function changeMessageProfile() {
        alert("Profile Information Change Successfully");
        }
        
        function changeMessageDelivery() {
        alert("Delivery Information Change Successfully");
        }
    </script>
</html>

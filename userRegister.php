<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style type="text/css">
        .auto-style2 {
            width: 400px;
            padding-left: 10%;
        }
        .auto-style3 {
            background-color: whitesmoke;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 9px;
            width: 402px;
        }
        </style>
        <script src="https://use.fontawesome.com/f9fd45026c.js"></script>
        <link href="css/register.css" rel="stylesheet" type="text/css"/>
        <title>Register</title>
    </head>
    <body>
        <div id="candidateRegisterForm" runat="server">
            <table id="registerCandidateTable" class="auto-style1">
                <tr>
                    <td class="regTable-left">
                        <img src="images/register.png" />

                    </td>
                    <td class="auto-style3">
                        <h2>Sign Up</h2>
                        <div class="auto-style2">
                            <br />
                            <p class="label"><b>Username</b></p>
                            <i class="fa fa-user" id="registerIcon1" aria-hidden="true"></i>
                            <input type="text" class="input" placeholder="Full Name">
                            <br/>
                            <p class="label"><b>Email</b></p>
                            <i class="fa fa-envelope" id="registerIcon2" aria-hidden="true"></i>
                            <input type="email" class="input" placeholder="Email">
                            <br />
                            <p class="label"><b>Please Select Your Gender</b></p>
                            <input type="radio" id="male" name="gender" value="Male">
                              <label for="m">Male</label>
                              <input type="radio" id="female" name="gender" value="Female">
                              <label for="f">Female</label><br>
                            <p class="label"><b>Password</b></p>
                            <i class="fa fa-lock" aria-hidden="true" id="registerIcon3"></i>
                            <input type="password" class="input" placeholder="password">
                            <br />
                            <p class="label"><b>Re-Enter Password</b></p>
                            <i class="fa fa-lock" aria-hidden="true" id="registerIcon3"></i>
                            <input type="password" class="input" placeholder="password">
                            <br />
                           <br />
                            <br />
                            <div class="submit">
                                <input type="button" class="RegisterButton" name="name" value="Register">
                             </div>
                            <br />
                            <div class="loginNow">
                                <a href="login.php" style="text-decoration: none;">Click Here to Login</a>
                            </div>
                            <br />

                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>

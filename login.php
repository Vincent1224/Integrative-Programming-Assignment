<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://use.fontawesome.com/f9fd45026c.js"></script>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <link href="Css/Login.css" rel="stylesheet" />
        <style type="text/css">
            .tr1 {
                width: 365px;
            }
            .tr2 {
                width: 126px;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <div id="form">
            <div class="loginContent">
                <div id="icon">
                    <i class="fa fa-user-circle-o" style="font-size: 125px; padding-top: 20px; color:#415C4E;" aria-hidden="true"></i>
                </div>
                <h1 style="text-align:center; color:#415C4E;">Login</h1>

                <table class="formTable">
                
                    <tr>
                        <td class="tr2" id="emaillabel">Email</td>
                        <td class="tr1">
                            <input type="text" class="textEmail" required> &nbsp;
                        </td>
                    </tr>
                  
                 
                    <tr>
                        <td class="tr2" id="pwdlabel">Password</td>
                    <td class="tr1">
                        <input type="text" class="textPwd" required >&nbsp;
                    </td>
                    </tr>
                  
                    <tr class="btnContainer">
                        <td class="tr2"  colspan="2"  style="padding-left: 10px;">
                            <input class="userBtnLogin" type="submit" value="Submit">
                        </td>
                    </tr>
                    <tr class="btnContainer">
                        <td colspan="2">
                            <div class="registerNow">
                                <a href="userRegister.php" style="text-decoration: none;">Register Here</a>
                            </div>
                        </td>
                    </tr> 
                </table>       
            </div>
        </div>
    </body>
</html>

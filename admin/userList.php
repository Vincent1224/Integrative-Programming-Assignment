
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Product List</title>

        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="../css/productList.css" rel="stylesheet" type="text/css"/>
        <link href="../css/adminHome.css" rel="stylesheet" type="text/css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php
            require_once 'sidebar.php';
            ?>


            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content" class="col-lg-12" style="padding-top: 20px;">
                    <h3 class="heading">&nbsp;User List</h3>
                    <div class="card shadow mb-4">
                        <table class="table table-striped" style="padding-left: 5%; padding-right: 5%">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">Customer ID</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Ban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="text-align: center;">
                                    <td>C001</td>
                                    <td>Vincent</td>
                                    <td>vincentlcz-pm20@student.tarc.edu.my</td>
                                    <td>M</td>
                                    <td>Active</td>
                                    <td><button type="editBtn" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button></td>
                                    <td><button type="removeBtn" class="btn btn-danger" data-toggle="modal" data-target="#delModal">Ban</button></td>

                                </tr>
                               <tr style="text-align: center;">
                                    <td>C001</td>
                                    <td>Vincent</td>
                                    <td>vincentlcz-pm20@student.tarc.edu.my</td>
                                    <td>M</td>
                                    <td>Banned</td>
                                    <td><button type="editBtn" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button></td>
                                    <td><button type="removeBtn" class="btn btn-danger" data-toggle="modal" data-target="#delModal">Ban</button></td>

                                </tr>


                            </tbody>
                        </table>
                    </div>


                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; SweatLab 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>



        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form id="editForm">
                                <div>
                                    <h4 class="small font-weight-bold">Customer ID 
                                        <span class="float-right"></span></h4>
                                    <input type="text" class="form-control" value="C001" disabled> <br/>
                                </div> 
                                <div>
                                    <h4 class="small font-weight-bold">Customer Name 
                                        <span class="float-right"></span></h4>
                                    <input type="text" class="form-control prodName" id="prodName" value="Nikke Ass"> <br/>
                                </div> 
                                <div>
                                    <h4 class="small font-weight-bold">Email
                                        <span class="float-right"></span></h4>
                                    <input type="text" id="prodPrice" class="form-control prodPrice" value="99.00"> <br/>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Gender</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" id="saveButton">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Remove Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form id="banForm">
                                <div>
                                    <h4 class="small font-weight-bold">Customer ID 
                                        <span class="float-right"></span></h4>
                                    <input type="text" class="form-control" value="C001" disabled> <br/>
                                </div> 
                                <div>
                                    <h4 class="small font-weight-bold">Customer Name 
                                        <span class="float-right"></span></h4>
                                    <input type="text" class="form-control prodName" id="prodName" value="Nikke Ass" disabled> <br/>
                                </div> 
                                <div>
                                    <h4 class="small font-weight-bold">Email
                                        <span class="float-right"></span></h4>
                                    <input type="text" id="prodPrice" class="form-control prodPrice" value="vincentlcz-pm20@student.tarc.edu.my" disabled> <br/>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01" disabled>Gender</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" disabled>
                                        <option selected>Male</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="delButton">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.onload = function () {
                var form = document.getElementById("editForm");
                var saveButton = document.getElementById("saveButton");

                form.addEventListener("input", function () {
                    var nameInput = document.getElementById("prodName").value;
                    var priceInput = document.getElementById("prodPrice").value;
                    var descInput = document.getElementById("prodDesc").value;
                    var qtyInput = document.getElementById("prodQty").value;

                    if (nameInput === "" || priceInput === "" || descInput === "" || qtyInput === "") {
                        saveButton.disabled = true;
                    } else {
                        saveButton.disabled = false;
                    }
                });
            };
        </script>


        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

    </body>

</html>

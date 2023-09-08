<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2023 || Designed By Khalid || <a data-toggle="modal" data-target="#adminLoginModalCenter" href="">Admin Login</a> </small>
</footer>
<!-- End Footer -->

<!--   Start student registration model -->
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Student Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- End student reg.form -->
                <form id="stuRegForm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <small id="statusMsg1"></small>
                        <input type="email" name="stuname" id="stuname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <small id="statusMsg2"></small>
                        <input type="email" id="stuemail" name="stuemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <small id="statusMsg3"></small>
                        <input type="password" name="stupass" id="stupass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>

                </form>
                <!-- End student reg.form -->
                <div class="modal-footer">
                    <span id="successMsg"></span>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="addstu()" id="signup" class="btn btn-primary">Signup</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End student registration model -->
<!-- Start student login model -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Student Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Start student login form -->
                <form id="stuLoginForm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="stuLogemail" id="stuLogemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="stuLogpass" id="stuLogpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                </form>
                <!-- End student lign form -->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="checkStuLogin()" id="stuLoginBtn" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
<!-- end student login model -->

<!-- Start Admin login model -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Start admin login form -->
                <form id="stuLoginForm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="adminLogemail" id="adminLogemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="adminLogpass" id="adminLogpass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                </form>
                <!-- End admin lign form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="adminLoginBtn" onclick="checkAdminLogin()" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
<!-- end Admin login model -->





<!-- Jquery and Boostrap JavaScript-->


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/ajaxrequest.js"></script>
<script src="js/adminajaxrequest.js"></script>


</body>

</html>
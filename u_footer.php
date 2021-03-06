	<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Talamban, Rosillos Road
                            <br> Cebu City, Central Visayas</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a target="_blank" a href="https://www.facebook.com/jason.ty.18" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Members</h3>
                        <p>Jason Ty</p>
						<p>Christian Cuartero</p>
						<p>Chris Pesudas</p>
						<p>Reden Remorta</p>
						<p>Servando Danilo Erida Jr.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; JTH Dormitory
                    </div>
                </div>
            </div>
        </div>
    </footer>
	
	<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
	<script src="js/aboy.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

    <script src="js/locales.js"></script>
    <script src="js/passfield.js"></script>

    <script src="js/jquery.dataTables.min.js"></script>

    <script>
        $("#mypass").passField({
            allowEmpty: false,
            allowAnyChars: false,
            isMasked: false,
            showGenerate: false
        });

        $(document).ready(function(){
            $('#his_table').DataTable();
        });

        function checkPasswordMatch() {
            var password = $("#mypass").val();
            var confirmPassword = $("#re_mypass").val();

            if (password != confirmPassword)
                $("#pass_error").html("New and Confirm Password does not match!");
            else
                $("#pass_error").html("Passwords match.");
        }

        $(document).ready(function () {
           $("#mypass, #re_mypass").keyup(checkPasswordMatch);
        });
    </script>


</body>

</html>
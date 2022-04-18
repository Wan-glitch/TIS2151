			<form id="login_form1" class="form-signin" method="post">
			    <h3 class="form-signup-heading"><i class="icon-lock"></i> Sign in</h3>
                <input type="text" class="fadeIn second" name="username" placeholder="Username" required autofocus =""/>
			    <input type="password" class="fadeIn third" name="password" placeholder="Password" required />
			    <label class="checkbox">
			        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me </label>
                
                <input type="submit" class="fadeIn fourth" id ="signin" name="login" value="Log In">
            </form>

			    <script type="text/javascript">
			    $(document).ready(function() {
			        $('#signin').tooltip('show');
			        $('#signin').tooltip('hide');
			    });
			    </script>
			</form>
			<script>
jQuery(document).ready(function() {
    jQuery("#login_form1").submit(function(e) {
        e.preventDefault();
        var formData = jQuery(this).serialize();
        $.ajax({
            type: "POST",
            url: "login.php",
            data: formData,
            success: function(html) {
                if (html == 'true') {
                    $.jGrowl("Loading File Please Wait......", {
                        sticky: true
                    });
                    $.jGrowl("Welcome to FYP Monitoring and Management system", {
                        header: 'Login Successfully'
                    });
                    var delay = 1000;
                    setTimeout(function() {
                        window.location = 'dasboard_lecturer.php'
                    }, delay);
                } 
                else if (html == 'true_supervisor') {
                    $.jGrowl("Welcome to FYP Monitoring and Management system", {
                        header: 'Login Successfully'
                    });
                    var delay = 1000;
                    setTimeout(function() {
                        window.location = 'dasboard_supervisor.php'
                    }, delay);
                
                } 
                else if (html == 'true_student') {
                    $.jGrowl("Welcome to FYP Monitoring and Management system", {
                        header: 'Login Successfully'
                    });
                    var delay = 1000;
                    setTimeout(function() {
                        window.location = 'student_notification.php'
                    }, delay);
                } 
                else {
                    $.jGrowl("Please Check your username and Password", {
                        header: 'Login Failed'
                    });
                }
            }
        });
        return false;
    });
});
			</script>
			<div id="button_form" class="form-signin">
			    <h4> Register a new account </h4>
			    <hr>
			    <button data-placement="top" title="Register as Student" id="signup_student"
			        onclick="window.location='signup_student.php'" id="btn_student" name="login" class="btn btn-info"
			        type="submit">Student</button>
			    <div class="pull-right">
			        <button data-placement="top" title="Register as Lecturer" id="signup_lecturer"
			            onclick="window.location='signup_lecturer.php'" name="login" class="btn btn-info" type="submit">Lecturer</button>
			    </div>
			</div>
			<script type="text/javascript">
$(document).ready(function() {
    $('#signup_student').tooltip('show');
    $('#signup_student').tooltip('hide');
});
			</script>
			<script type="text/javascript">
$(document).ready(function() {
    $('#signup_lecturer').tooltip('show');
    $('#signup_lecturer').tooltip('hide');
});
			</script>

 <?php
 /*
 include '_dbconnect.php'

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username= $_POST['username'];
    $password= $_POST['password'];
    $email= $_POST['email'];
    echo "password successfully set";
}
*/
?> 


<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container ">
                    <!-- <h1 class="">Signup Up here</h1> -->
                    <form action="/FORUM/partials/_handleSignup.php" method="post">
                        <div class="mb-3 col-md-6 form-control" align-items: center">
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" maxlength="11" class="form-control" id="username" name="username"
                                placeholder="Enter username" aria-describedby="emailHelp" required>
                         </div>
                         <div class="mb-3">
                                <label for="Email" class="form-label">Enter your Email here </label>
                                <input type="Email" class="form-control" id="Email" name="email"
                                    placeholder="Email id" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" maxlength="20"
                                    placeholder="Enter password" required>
                            </div>
                            <div class="mb-3">
                                <label for="cpassword" class="form-label">Confirm Password</label>
                                <input type="cpassword" class="form-control" id="cpassword" name="cpassword"
                                    placeholder="Confirm password" required>
                            </div>

                            

                            <div id="emailHelp" class="form-text">Well never share your data with anyone else.</div>
                        </div>

                        <button type="submit" class="btn btn-primary col-md-6">Signup</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
    <?php include "header.php"; ?>
    <main>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="my-4">Membership<small>Sign up</small>
                    </h1>
                    <h5>PSB Academy students register as a member on the SCS website. And you can share a lot of information or get information.</h5>
                    <div class="card mb-4">
                    <div class="card-body">
                        <form  method="post" action="member.php" onsubmit="return validate()">
                            <div class="form-controll">
                                <label for="exampleInputPassword1">Member ID</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="id" name="id" placeholder="ID must be at least 8 characters long.">
                                        <button type="button" class="btn btn-success" onclick="openidcheck()">ID duplicate check</button>
                                        <input type="hidden" class="form-control" name="command" value="new">
                                    </div>

                            </div>
                            </br>
                            <div class="form-controll">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password"  name="password" placeholder="Password must be at least 8 characters long.">
                            </div>	
                            </br>
                            <div class="form-controll">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name = "name" >
                            </div>	
                            </br>
                            <div class="form-controll">
                                <label for="exampleInputPassword1">Mail Address</label>
                                <input type="text" class="form-control" id="mail" placeholder="Your mail address" name = "mail" >
                            </div>	
                            </br>				 
                            <div class="form-controll">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender" >
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                </select>
                            </div>
                            </br>	
                            <div class="form-controll">
                                <label for="exampleInputPassword1">Membership Greeting</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>	
                            </br>				 	
                            <button type="submit" class="btn btn-primary" name="button" value="new" >Save</button>
                            <a href="index.php"><button type="button" class="btn btn-danger" name="button" >Home</button></a>
                        </form>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
        <!-- Footer-->
        <?php include 'footer.php'; ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

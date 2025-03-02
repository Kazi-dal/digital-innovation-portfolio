<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <div class="form-wrapper">
                <h1>Register</h1>
                <form method="post" action="register_user.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="registerName">Fitst Name</label>
                                <input type="name" class="form-control" name="registerName" >
                              </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="registerLastName">Last Name</label>
                                <input type="name" class="form-control" name="registerLastName" >
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                            <label for="registerEmail">Email</label>
                            <input type="email" class="form-control" name="registerEmail" >
                          </div>
                        <div class="form-group">
                            <label for="registerPassword">Password</label>
                            <input type="password" class="form-control" name="registerPassword" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
                </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
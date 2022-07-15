<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<title>
    sample
</title>

<body>
<div class="container pt-4">
<form action = "get.php" method = "post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="usermail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="passcode" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
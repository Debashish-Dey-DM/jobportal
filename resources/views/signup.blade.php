<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Sign Up</title>
</head>
<body>
    <form action="#" enctype="multipart/form-data" method="POST">
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input class="form-control" type="text" name="username"  placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Number</label>
    <input class="form-control" type="text" name="phone" placeholder="Contact Number">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password"  placeholder="Password">
  </div>
  <div class="form-group"> 
      <label for="">Select Your Type</label>
  <select class="form-control" name="type">
  <option value="1" >Company</option>
  <option value="0" >Job Seeker</option>
</select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
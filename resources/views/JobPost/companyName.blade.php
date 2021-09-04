<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Name Update</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <h1>Please Provide your Company Name</h1>
   <form action="#" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input class="form-control" type="text" name="Company_Name"  placeholder="Company Name">
  </div>
  <button type = "submit"> Submit</button>
    </form>
</body>
</html>
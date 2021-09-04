<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Apply For Job</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/ApplyJob">Job List <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/logout">LogOut <span class="sr-only"></span></a>
      </li>
      
    </ul>
  </div>
</nav>
    <h1>CV Here</h1>
    {{-- <h1>{{$type}}</h1> --}}
    
    @foreach ($job as $key => $job) 
    <h1>{{$job->id}}</h1>
      
        <div class="card" style="width: 18rem;">
 
  <div class="card-body">
    <h5 class="card-title">{{$job->job_title}}</h5>
    <p class="card-text"><h5 class="text-primary"> Responsibilities</h5>{{$job->job_responsibilities}}	</p>
    <p class="card-text"><h5 class="text-success"> Requirements</h5>{{$job->job_requirements}}	</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><h5 class="text-danger"> Remuneration</h5>{{$job->job_salary}}</li>
    <li class="list-group-item"><h5 class="text-warning"> Job Location</h5>{{$job->job_location}} </li>
    <li class="list-group-item"><h5 class="text-warning"> CV Dropped</h5>{{$job->cv_count}}</li>
  </ul>
  <div class="card-body">
    <form action="#" enctype="multipart/form-data" method="POST">
      @csrf
    <fieldset class="form-group">
        <div class="custom-file">
           <label class="text-danger"  for="inputGroupFile02">Choose File</label>  
          <input type="file" class="custom-file-input" id="inputGroupFile02" name="CV_file">
           
        </div>
    </fieldset>
    <button class="btn btn-secondary">Submit CV</button>
    </form>
   
  </div>
</div>
  @endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Job List</title>
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
    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                        <div class="row">
                                            <h1 class="container p-3 mb-2 bg-secondary text-white">Job List</h1>
  
                                        <table class="table table-success table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Job Title</th>
                                                    <th>Job Responsibilities</th>
                                                    <th>Job Requirements</th>
                                                    <th>Remuneration</th>
                                                    <th>Job Location</th>
                                                    <th>Cv Dropped</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($Joblist as $key => $job) 
                                            <tr>
                                                <td>{{$job->id}}</td>
                                                
                                                    <td>{{$job->job_title}}</td>
                                                    <td>{{$job->job_responsibilities}}</td>
                                                    <td>{{$job->job_requirements}}</td>
                                                    <td>{{$job->job_salary}}$</td>
                                                    <td>{{$job->job_location}}</td>
                                                    <td>{{$job->cv_count}}</td>
                                                     
                                                <td><a href="apply/{{$job->id}}/{{$job->type}}"> Apply </a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                        </div>
                                    
                                </div>
                            </div>
                        </div>
</body>
</html>
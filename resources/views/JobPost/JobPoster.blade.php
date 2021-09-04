<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Job Poster</title>
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">JOBPOST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/post">Create Job <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/joblist">JobList</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/logout">LogOut <span class="sr-only"></span></a>
      </li>
    </ul>
  </div>
</nav>
                            <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create New Job</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="#" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-lg-12">
                                                <input type="text" class="form-control" name="job_title" placeholder="Job Title" required>
                                            </div>
                                            <div class="col-12 col-sm-12" style="margin-top:10px">
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" name="job_responsibilities" id="basicTextarea" rows="3" placeholder="Job Responsibilities" required></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-12" style="margin-top:10px">
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" name="job_requirements" id="basicTextarea" rows="3" placeholder="Requirements" required></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6" style="margin-top:10px">
                                                <label for="">          </label>
                                                <input type="number" class="form-control" name="job_salary" placeholder="Remuneration" required>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-12" >
                                            <label for="">  </label>
                                                <input type="text" class="form-control" name="job_location" placeholder="Location" required>
                                            </div>
                                            
                                            <div class="col-12 col-sm-12" style="margin-top: 10px">
                                                <button type="submit" class="btn btn-block btn-success glow">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
</body>
</html>
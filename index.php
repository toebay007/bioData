<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bio-Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <div class="container-fluid bodi">
        <div class="row bodi">
            <div class="col-md-12">
                <div class="container">
                    <nav class="navbar fixed-top bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Biometric Database</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 offset-md-1 bodis">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Report</li>
                    </ol>
                </nav>
                <br><br>
                <h4 class="text-center bodi">
                    <i><b>Search</b></i>
                </h4>
                <div class="cards">
                <form action="#" method="post">
                    
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Open this select list</option>
                            <option value="Active">Active</option>
                            <option value="Retired">Retired</option>
                            <option value="Deceased">Deceased</option>
                            <option value="Leave of absence">Leave of absence</option>
                            <option value="Sabbatical">Sabbatical</option>
                            <option value="Suspension">Suspension</option>
                        </select>
                    <label for="floatingSelect">Generate report by;</label>
                    <div id="emailHelp" class="form-text">Kindly select a search category</div>
                    </div>

                    
                    <div class="col-4 form-floating mb-3">
                    <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">From</label>
                    </div>
                    <div class="col-4 form-floating">
                    <input type="date" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">To</label>
                    </div>
                    
                    <div class="form-floating mt-4">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Open this select list</option>
                            <option value="Department">Department</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Institution">Institution</option>
                        </select>
                    <label for="floatingSelect">Generate report by;</label>
                    </div>
                
                    <button class="btn submitz" type="submit">Search</button>
                </form>
                </div>
                
            </div>
        </div>







    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
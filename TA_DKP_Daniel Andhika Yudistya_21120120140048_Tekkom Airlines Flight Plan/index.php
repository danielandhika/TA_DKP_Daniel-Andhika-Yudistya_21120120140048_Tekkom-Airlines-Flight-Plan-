<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Tekkom Airlines</title>
</head>

<body style="overflow-x: hidden;">
    <div class="jumbotron text-center">
        <h2>TEKKOM AIRLINES</h2>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center">Pilot Flight Plan</h2>
            <hr>
        </div>
    </div>
    <!-- card -->
    <div class="container">
        <div class="row">
            <div class="card card-tengah2 mb-4" style="width: 45rem;">
                <div class="card-body">
                    <form action="output.php" method="POST" class="row g-3">
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <h3>PILOT</h3>
                                <label for="inputPassword" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" Required>
                                </div>
                            </div>
                        </div>
                        <fieldset class="col-md-12">
                            <div class="row">
                                <legend class="col-form-label col-md-3 pt-0">Posisition</legend>
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1" id="gridRadios1" value="Capt." checked>
                                        <label class="form-check-label" for="gridRadios1">Captain</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radio1" id="gridRadios2" value="FO">
                                        <label class="form-check-label" for="gridRadios2">First Officer</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Aircraft Rating</label>
                                <div class="col-md-9">
                                    <select name="rat" class="form-select" aria-label="Default select example">
                                        <option value="a320" selected>AIRBUS A320</option>
                                        <option value="b737">Boeing 737</option>
                                        <option value="c172">Cessna 172</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <h3>FLIGHT ROUTE</h3>
                                <label for="inputPassword" class="col-sm-3 col-form-label">Origin</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="origin" placeholder=" Type ICAO Code Departure Airport" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Waypoints</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="waypoints" placeholder="Type Waypoints" required> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Destination</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="destination" placeholder="Type ICAO Code Destination Airport" required>   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Alternate Airport</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="alternate" placeholder="Type ICAO Code Alternate Airport" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- endcard -->
    <div class="card">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <footer class="blockquote-footer">Daniel Andhika Yudistya <cite title="Source Title">Praktikum DKP 2021</cite></footer>
            </blockquote>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
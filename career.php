<!DOCTYPE html>
<html lang="en">
<?php include 'config.php' ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Carrer</title>
    <style>
        .jobs {
            width: 100%;
            height: 300px;
            margin: 10px;
            padding: 15px;
            border: solid 1px black;
            border-radius: 8px;
            box-shadow: 3px 3px 3px 6px whitesmoke;

        }
    </style>
</head>

<body>

    <!-- <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-light" style="position: fixed;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="banner">
            <img src="banner1.jpg" alt="" class="img-fluid">
        </div>
    </div> -->
    <div>
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Job Portal</h1>
                        <p class="lead">Best jobs available matching your skills.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT cname,position,jdesc,CTC,skills from jobs";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    echo '
            <div class="col-md-4">
                <div class="jobs">
                    <h3 style="text-align: center;">' . $rows['position'] . '</h3>
                    <h3 style="text-align: center;">' . $rows['cname'] . '</h3>
                    <p style="color: black; text-align:justify;">' . $rows['jdesc'] . '</p>
                    <p style="color: black; text-align:justify;">' . $rows['skills'] . '</p>
                    <p style="color: black; text-align:justify;">' . $rows['CTC'] . '</p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
                     Apply Now
                    </button>
               </div>
            </div>';
                }
            }
            ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Apply for Jobs</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" id="recipient-name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Applying For</label>
                                    <input type="text" class="form-control" name="apply">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Qualification</label>
                                    <input type="text" class="form-control" id="recipient-name" name="qual">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Year passout</label>
                                    <input type="text" class="form-control" id="recipient-name" name="year">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
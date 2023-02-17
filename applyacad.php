<!DOCTYPE html>
<html>

<head>
    <title>Gearbox Acedemy Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        function validate() {
            var x = document.getElementById("passwd");
            var y = document.getElementById("c_passwd");
            if (x.value == y.value) return;
            else alert("Passwords do not match");
        }
    </script>
    <style>
        .d-flex {
            display: flex;
            align-items: center;
            height: 100vh;
        }
    </style>

</head>

<body>

    <?php
    require __DIR__ . '/fetchteams.php';
    require __DIR__ . '/db_connect.php';
    $data;
    $conn = connect();
    if ($conn != NULL) {
        $data = teams($conn);
    }
    ?>

    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col"></div>
            <div class="col-9 g-4 shadow-sm p-4">
                <?php
                $form_header = "Gearbox Academy Application";
                include_once 'formheader.php';
                ?>
                <form action="updatedetails.php" method="post">
                    <div class="row g-3">
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="user_name" name="user_name" required>
                                <label for="user_name">Name</label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="natID" name="national_id" required>
                                <label for="natID">National ID</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="univ" name="univ">
                                <label for="univ">University</label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="uni_course" name="uni_course">
                                <label for="uni_course">Course</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="year" pname="year">
                                <label for="year">Year</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="teamSelect" name="team" aria-label="Select team"
                                    required>
                                    <option>Select a team</option>
                                    <?php foreach ($data as $row):
                                        printf("<option value='%s'>%s</option>", $row['id'], $row['name']);
                                    endforeach ?>
                                </select>
                                <label for="genderSelect">Team</label>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-outline-dark" type="submit" value="Submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col"> </div>
        </div>
    </div>


</body>

</html>
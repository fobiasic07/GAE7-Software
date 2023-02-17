<!DOCTYPE html>
<html>

<head>
    <title>Gearbox Academy Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        .d-flex {
            display: flex;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col"></div>
            <div class="col-9 shadow-sm p-4 rounded">
                <?php 
                $form_header = "Gearbox Junior Academy Application";
                include_once 'formheader.php'; 
                ?>
                <form class="form" action="submit.php" method="post">
                    <div class="row g-2">
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" required>
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <input type="text" id="school" name="school" class="form-control" required>
                                <label for="school">School</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="age" name="age" required>
                                <label for="age">Age</label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="genderSelect" name="gender" aria-label="Select gender"
                                    required>
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="genderSelect">Child Gender</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="grade" name="grade" placeholder="" required>
                                <label for="grade">Grade</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="guardian_name" name="guardian" required>
                                <label for="guardian_name">Guardian's Name</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating">
                                <input type="tel" id="parent_phone" class="form-control" name="parent_phone"
                                    maxlength="10" minlength="10" required>
                                <label for="parent_phone">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" id="address" name="address" class="form-control" required>
                                <label for="age">Address</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="parent_email">
                                <label for="email">Email address</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="text" id="emergency_name" class="form-control" name="emergency_name"
                                    required>
                                <label for="emergency_name">Emergency Contact Name</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="tel" id="emergency_phone" class="form-control" name="emergency"
                                    maxlength="10" minlength="10" required>
                                <label for="emergency_phone">Emergency Contact Phone</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-outline-dark" type="submit" value="Submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>
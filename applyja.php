<?php
require __DIR__ . '/fetchteams.php';
$data = teams();
$form_header = "Gearbox Junior Academy Application";
include_once 'applyformheader.php';
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
                <select class="form-select" id="genderSelect" name="gender" aria-label="Select gender" required>
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="genderSelect">Child Gender</label>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="grade" name="year" placeholder="" required>
                <label for="grade">Grade</label>
            </div>
        </div>
    </div>
    <div class="row g-2">
        <div class="col-sm">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="guardian_name" name="guardian" required>
                <label for="guardian_name">Guardian's Name</label>
            </div>
        </div>
        <div class="col-sm">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email">
                <label for="email">Email address</label>
            </div>
        </div>
    </div>
    <div class="row g-2">
        <div class="col-sm">
            <div class="form-floating mb-3">
                <input type="text" id="address" name="address" class="form-control" required>
                <label for="age">Address</label>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-floating mb-3">
                <input type="tel" id="parent_phone" class="form-control" name="phone" maxlength="10"
                    minlength="10" required>
                <label for="parent_phone">Phone Number</label>
            </div>
        </div>
    </div>
    <div class="row g-2">
        <div class="col-sm">
            <div class="form-floating mb-3">
                <input type="text" id="emergency_name" class="form-control" name="emergency_name" required>
                <label for="emergency_name">Emergency Contact Name</label>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-floating mb-3">
                <input type="tel" id="emergency_phone" class="form-control" name="emergency_phone" maxlength="10"
                    minlength="10" required>
                <label for="emergency_phone">Emergency Contact Phone</label>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm">
            <div class="form-floating">
                <select class="form-select" id="teamSelect" name="team" aria-label="Select team" required>
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
<div class="col"></div>
</div>
</div>
</body>

</html>
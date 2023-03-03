<?php
require __DIR__ . '/fetchteams.php';
$data = teams();
$form_header = "Gearbox Academy Application";
include_once 'applyformheader.php';
?>
<form class="form" action="submit.php" method="post">
    <div class="row g-3 mb-3">
        <div class="col-sm">
            <div class="form-floating">
                <input type="name" class="form-control" id="user_name" name="name" required>
                <label for="user_name">Name</label>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-floating">
                <input type="name" class="form-control" id="natID" name="nat_id" required>
                <label for="natID">National ID</label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-floating">
                <input type="number" class="form-control" id="age" name="age" required>
                <label for="age">Age</label>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-sm">
            <div class="form-floating ">
                <input type="email" class="form-control" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-floating">
                <input type="tel" class="form-control" id="phone" name="phone" required>
                <label for="phone">Phone</label>
            </div>
        </div>
    </div>
    <div class="row g-3  mb-3">
        <div class="col-sm-12 col-md-5">
            <div class="form-floating">
                <input type="name" class="form-control" id="univ" name="school">
                <label for="univ">University</label>
            </div>
        </div>
        <div class="col-sm-8 col-md-5">
            <div class="form-floating">
                <input type="name" class="form-control" id="uni_course" name="course">
                <label for="uni_course">Course</label>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="form-floating">
                <input type="number" class="form-control" id="year" name="year">
                <label for="year">Year</label>
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
        <button class="btn btn-outline-secondary" type="submit" value="Submit">Submit</button>
    </div>
</form>
</div>
<div class="col"> </div>
</div>
</div>


</body>

</html>
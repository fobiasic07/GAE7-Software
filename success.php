<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .d-flex {
            display: flex;
            align-items: center;
            height: 100vh;
            justify-content: center;
        }
    </style>
</head>

<body>

    <div class="d-flex text-center">
        <div class="card border-1 rounded shadow-sm p-3" style="min-height: 50%;">
            <div class="card-title">
                <h3 class="bi bi-check2-square" style="font-size: 3rem;color:maroon;"><br>Success!</h3>                
            </div>

            <div class="card-body text-center fw-semibold">
                Your Application for GearBox Academy has been received.<br>
            </div>

            <div class="d-inline gap-2 col-6 mx-auto">
                <a href="applicant.php?p=apc<?php echo $id; ?>sc">
                    <button class="btn btn-light" style="border-radius: 16px;"><span
                            title="check application details">Details</span></button></a>
                <a href="index.php">
                    <button class="btn btn-light" style="border-radius: 16px;"><span
                            title="homepage">Home</span></button></a>
            </div>

        </div>
    </div>
</body>

</html>
<div class="table-responsive">
    <table class="table table-light table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">University</th>
                <th scope="col">Course</th>
                <th scope="col">Year</th>
                <th scope="col">Team</th>
                <th scope="col">Phone</th>
                <th scope="col">Application Date</th>
                <th scope="col">Approve</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applicants as $student): ?>
                <tr>
                    <td>
                        <?php echo ucwords($student->name); ?>
                    </td>
                    <td>
                        <?php echo ucwords($student->institution); ?>
                    </td>
                    <td>
                        <?php echo ucwords($student->field); ?>
                    </td>
                    <td>
                        <?php echo $student->year; ?>
                    </td>
                    <td>
                        <?php echo $student->team; ?>
                    </td>
                    <td>
                        <?php echo $student->phone; ?>
                    </td>
                    <td>
                        <?php echo $student->date; ?>
                    </td>
                    <td>
                        <form action="../approve.php" method="POST">
                            <input type="hidden" name="id" value=<?php echo $student->id; ?>>
                            <button class="btn btn-light" type="submit">Approve</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
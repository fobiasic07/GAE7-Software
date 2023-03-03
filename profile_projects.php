<?php
foreach ($projects as $project): ?>
    <h3>
        <?php echo $project->title; ?>
    </h3>
    <p>
        <?php echo $project->description; ?>
    </p>
    <a href=<?php echo $project->google_doc; ?>>Google Doc</a>
    <p>
        <?php echo $project->start_date ?>
    </p>
<?php endforeach; ?>
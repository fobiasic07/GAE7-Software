<?php

require_once 'fetchgroup.php';
require_once 'fetchapplicant.php';
include_once 'header.php';
$groups = fetchAcademyGroups();


if (isset($_GET)) {
    switch ($_GET['group']) {
        case 'ja':
            $applicants = fetchPendingGroupApplicants(1);
            include_once 'views/junior_applicants.php';
            break;
        case 'acad':
            $applicants = fetchPendingGroupApplicants(4);
            include_once 'views/uni_applicants.php';
            break;
    }
}
?>
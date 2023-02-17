<div class="container-fluid px-3">
    <div class="row">
        <div class="mx-auto">
            <div class="border-bottom border-1 mx-4">
                <span class="display-1">
                    <?php echo $user->name; ?>
                    <button class="btn btn-secondary btn-sm opacity-75"
                        style="--bs-btn-font-weight: 600; --bs-btn-font-size: .85rem;">
                        <div class="hstack gap-2">
                            <span class="material-symbols-outlined my-auto">
                                <?php echo $user->team_icon; ?>
                            </span>
                            <p class="d-inline my-auto">
                                <?php echo $user->team; ?>
                            </p>
                        </div>
                    </button>
                </span>
            </div>

            <div class="container">
                <br>
                <div class="card">
                    <div class="card-header">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs card-header-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#commend">Commendations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#attendance">Attendance</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>

                                <div class="border-bottom border-1 d-inline-flex">
                                    <span class="h3" style="margin-right: 8px;">Education:</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-lg-6">
                                        <div class="form-floating">
                                            <input type="text" readonly class="form-control-plaintext" id="school"
                                                value="<?php echo $user->institution; ?>">
                                            <label for="school">School</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="form-floating">
                                            <input type="text" readonly class="form-control-plaintext" id="course"
                                                value="<?php echo $user->field; ?>">
                                            <label for="course">Course</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-floating">
                                            <input type="text" readonly class="form-control-plaintext mb-3" id="year"
                                                value="<?php echo $user->year_of_study; ?>">
                                            <label for="year">Year</label>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="border-bottom border-1 d-inline-flex">
                                    <span class="h3" style="margin-right: 8px;">Socials:</span>
                                </div>
                                <div class="row row-cols-auto g-3 py-2">
                                    <div class="col">
                                        <a href="" class="btn btn-outline-dark bi bi-github btn-md">
                                            GitHub
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-outline-dark bi bi-linkedin btn-md">
                                            LinkedIn
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="#" class="btn btn-outline-dark bi bi-twitter btn-md">
                                            Twitter
                                        </a>
                                    </div>
                                </div>
                                <br>


                                <div class="border-bottom border-1 d-inline-flex">
                                    <span class="h3" style="margin-right: 8px;">Academy Details:</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" readonly class="form-control-plaintext" id="group"
                                                value="<?php echo $user->group; ?>">
                                            <label for="group">Group</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" readonly class="form-control-plaintext" id="cohort"
                                                value="<?php echo $user->cohort; ?>">
                                            <label for="cohort">Cohort</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm">
                                        <div class="form-floating">
                                            <input type="text" readonly class="form-control-plaintext" id="join"
                                                value="<?php echo $user->join_date . ' (' . $user->days . ' Days)'; ?>">
                                            <label for="join">Join Date (Days)</label>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="card text-bg-light border-1 mb-3">
                                    <h5 class="card-header border-0 card-title">Bio</h5>
                                    <div class="card-body">
                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Id rerum ea debitis ut, libero vero ipsa illum voluptatibus
                                            numquam recusandae laborum iste voluptatem hic ab nihil nisi error
                                            minima repellendus!</p>
                                    </div>
                                </div>


                            </div>
                            <div id="projects" class="container tab-pane fade"><br>

                            </div>
                            <div id="commend" class="container tab-pane fade"><br>
                                <p>Commendations</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</div>
</div>
<?php include_once('../cunnect/header.php')?>
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <div class="profile-tab">
                    <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active">About Me</a>
                            </li>
                            <li class="nav-item">
                                <?Php
                                    $voter_sin_id = $after_ascos_voter_name['id'];
                                    $select_count = "SELECT COUNT(*) as vote FROM voter_list WHERE voter_id = $voter_sin_id";
                                    $mysqli_single_count_qunt = mysqli_query($db_connect,$select_count);
                                    $after_assoc_count = mysqli_fetch_assoc($mysqli_single_count_qunt);

                                    if($after_assoc_count['vote'] == 1){
                                        ?>
                                        <span class="badge bg-warning ">Your vote has been cast</span>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <a href="canditor_list.php" > <span class="badge bg-success text-white">Cast your vote</span> </a>
                                        <?php
                                    }
                                
                                
                                ?>
                            
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="about-me" class="tab-pane fade active show">
                                <div class="profile-about-me">
                                    <div class="pt-4 border-bottom-1 pb-3">
                                        <h4 class="text-primary">About Me</h4>
                                        <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                    </div>
                                </div>
                                <div class="profile-personal-info">
                                    <h4 class="text-primary mb-4">Personal Information</h4>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['name']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['email']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Phone number <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['phone']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Birthday <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['birth_day']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">NID Number <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['nid_number']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Father Name <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['father_name']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Mother Name <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['mother_name']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Gender <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['gender']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Distric <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['district']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Sub Distric <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['subdistrict']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Zip <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['zip']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Village <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['village']?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-3 col-5">
                                            <h5 class="f-w-500">Voter Join <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-9 col-7"><span><?= $after_ascos_voter_name['created_at']?></span>
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
</div>
<?php include_once('../cunnect/footer.php')?>
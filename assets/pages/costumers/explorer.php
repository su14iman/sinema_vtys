<div class="container-fluid mt-5 mb-5">
    <div class="row mt-5">


    <?php
        // ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
        // error_reporting(0);
        // global $sqli;
        $dataEvents->fetchAll(function($rows) {
                global $salesClass;
                $event_id = $rows['event_id'];
                $plan_id = $rows['plan_id'];
                $movie_id = $rows['movie_id'];

                $movieArg = new \stdClass;
                $movieArg->id= $movie_id;
                $movie = $salesClass->movieGet($movieArg);
                $movie_name = $movie['movie_name'];

                $planArg = new \stdClass;
                $planArg->id = $plan_id;
                $plans = $salesClass->plansGet($planArg);
                $from_date = $plans['from_date'];
                $to_date = $plans['to_date'];


                echo '
                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 row justify-content-center" style="margin:1%;">
                        <div class="card film-card" style="padding: 6%;width: 100%;">
                            <div class="col-12">
                                <h5 class="text-center">'.$movie_name.'</h5>
                            </div>
                            <div class="col-12">
                                <p style=" color: #808080; " class="text-center">
                                    '.$from_date.' <br> '.$to_date.'
                                </p>
                            </div>
                            <div class="col-12">
                                <a href="?show='.$event_id.'" class="btn btn-primary btn-rounded btn-floating btn-lg btn-block">show</a>
                            </div>
                        </div>
                    </div>
                ';




        });
    
    ?>



    </div>
</div>
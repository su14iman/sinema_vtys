<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Tickets</h3>
</div>
<div class="container-fluid mt-5 m-5">
    <form method="POST" action="" class="form-card card">
        <div class="form-group row justify-content-center r">
            <label for="i-movie" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Event</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select name="event_id" class="form-control" id="i-movie">
                    <?php 
                        $dataEvent->fetchAll(function($rows) {
                            global $salesClass;
                            $plansArg = new \stdClass;
                            $movieArg = new \stdClass;
                            $plansArg->id = $rows['plan_id'];
                            $movieArg->id = $rows['movie_id'];
                            echo '
                                <option value="'.$rows['event_id'].'">
                                '.$salesClass->movieGet($movieArg)['movie_name'].'
                                ---
                                '.$salesClass->plansGet($plansArg)['from_date'].'
                                ==
                                '.$salesClass->plansGet($plansArg)['to_date'].'
                                </option>
                            ';
                        });
                     ?>
                </select>
            </div>
        </div>

        
        <div class="form-group row justify-content-center r">
            <label for="i-costumer" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Costumer</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select name="costumer_id" class="form-control" id="i-costumer">
                    <option value="0">Null</option>
                    <?php 
                        $dataCostumer->fetchAll(function($rows) {
                            echo '
                                <option value="'.$rows['costumer_id'].'">
                                '.$rows['costumer_surname'].' 
                                '.$rows['costumer_name'].'
                                </option>
                            ';
                        });
                     ?>
                </select>
            </div>
        </div>
        
        <div class="form-group row justify-content-center r">
            <label for="i-hall" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Hall</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select name="hall_id" class="form-control" id="i-hall">
                <?php 
                    $dataHalls->fetchAll(function($rows) {
                            echo '
                                <option value="'.$rows['hall_id'].'">
                                '.$rows['hall_capasity'].' 
                                </option>
                            ';
                    });
                ?>
                </select>
            </div>
        </div>
        
        <div class="form-group row justify-content-center mt-4">
            <div class=" col-lg-10 col-sm-8 col-xs-12 col-12">
            <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" name="submit" type="submit">add</button>
            </div>
        </div>
    </form>
</div>
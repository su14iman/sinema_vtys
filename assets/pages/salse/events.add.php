<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Events</h3>
</div>
<div class="container-fluid mt-5 m-5">
    <form method="POST" action="" class="form-card card">
      <div class="form-group row justify-content-center r">
        <label for="i-plan" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">plan</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <select name="plan_id" class="form-control" id="i-plan">
            <?php 
                $dataPlans->fetchAll(function($rows) {
                  echo '
                          <option value="'.$rows['plan_id'].'">
                          '.$rows['from_date'].' --- '.$rows['to_date'].'
                          </option>
                        ';
                });
            ?>
                <!-- <option value=""> Default select</option> -->
            </select>
        </div>
      </div>
      <div class="form-group row justify-content-center r">
        <label for="i-movie" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">movie</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <select name="movie_id" class="form-control" id="i-movie">

            <?php 
                $dataMovies->fetchAll(function($rows) {
                  echo '
                          <option value="'.$rows['movie_id'].'">
                          '.$rows['movie_name'].'
                          </option>
                        ';
                });
            ?>
                <!-- <option value="">Default select</option> -->
            </select>
        </div>
      </div>
      <div class="form-group row justify-content-center mt-4">
        <div class=" col-lg-10 col-sm-8 col-xs-12 col-12">
          <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit" name="submit">add</button>
        </div>
      </div>
    </form>
</div>
<?php
  // var_dump($dataMovie);


  global $salesClass;
  $event_id = $dataMovie['event_id'];
  $plan_id = $dataMovie['plan_id'];
  $movie_id = $dataMovie['movie_id'];


  $movieArg = new \stdClass;
  $movieArg->id= $movie_id;
  $movie = $salesClass->movieGet($movieArg);
    $movie_name = $movie['movie_name'];
    $genre_id = $movie['genre_id'];
    $movie_date = $movie['movie_date'];

  $planArg = new \stdClass;
  $planArg->id = $plan_id;
  $plans = $salesClass->plansGet($planArg);
    $from_date = $plans['from_date'];
    $to_date = $plans['to_date'];

  $genreArg = new \stdClass;
  $genreArg->id= $genre_id;
  $genre = $salesClass->genresGet($genreArg);
    $genreName = $genre['genre_name'];

?>

<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Movie Details</h3>
</div>
<div class="container-fluid mt-5 m-5">
    <form class="form-card card">
      <div class="form-group row justify-content-center r">
        <label for="t-id" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">ID</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <h6 class="form-control text-center" id="t-id"><?php echo $event_id; ?></h6>
        </div>
      </div>
      <div class="form-group row justify-content-center r">
        <label for="t-name" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Name</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <p class="form-control text-center" id="t-name"><?php echo $movie_name; ?></p>
        </div>
      </div>
      <div class="form-group row justify-content-center r">
        <label for="t-type" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Type</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <p class="form-control text-center" id="t-type"><?php echo $genreName; ?></p>
        </div>
      </div>
      <div class="form-group row justify-content-center r">
        <label for="t-datefilm" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Date Film</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <p class="form-control text-center" id="t-datefilm"><?php echo $movie_date; ?></p>
        </div>
      </div>
      <div class="form-group row justify-content-center r">
        <label for="t-showfilm" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Show Film</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <p class="form-control text-center" id="t-showfilm"><?php echo $from_date." -- ".$to_date;  ?></p>
        </div>
      </div>
      <div class="form-group row justify-content-center mt-4">
        <div class=" col-lg-10 col-sm-8 col-xs-12 col-12">
          <a href="mytickets.php?add=<?php echo $event_id;?>" class="btn btn-success btn-rounded btn-floating btn-lg btn-block" type="submit">Buy</a>
        </div>
      </div>
    </form>
</div>
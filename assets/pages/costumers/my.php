<div style=" margin: 1%; ">
    <h3>myTickets:</h3>
</div>



<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Tickets</h3>
</div>
<!-- <div class="container-fluid mt-5 m-5"> -->
<div class="">
    <!-- <form class="form-card card"> -->
    <form class="">
        <div class="form-group row justify-content-center">
          <div class="col-12 col-form-label" style="overflow: auto;">
              <div style="text-align:right; margin:1%;">
              <a href="?add">add</a>
              </div>
            <table class="table table-striped table-bordered " style="width:100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Movie Name</th>
                <th scope="col">Movie Genre</th>
                <th scope="col">Showing Time</th>
                <th scope="col">Hall</th>
                <th scope="col">Costumer Name - Surname</th>
                <th scope="col">Costumer Email</th>
                <th scope="col">Sales Person Name - Surname</th>
                <th scope="col">Sales Person Email</th>
                <th scope="col">Creating Time</th>
                <th scope="col">Option</th>
              </tr>
          </thead>
          <tbody>
    

    <?php
        // ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
        // error_reporting(0);
        // global $sqli;
        $data->fetchAll(function($rows) {
            global $salesClass;
            
            $EventArg = new \stdClass;
            $EventArg->id = $rows['event_id'];
            $events = $salesClass->eventsGet($EventArg);

              $plan_id = $events['plan_id'];
              $movie_id = $events['movie_id'];

            $planArg = new \stdClass;
            $planArg->id = $plan_id;
            $plans = $salesClass->plansGet($planArg);

              $from_date = $plans['from_date'];
              $to_date = $plans['to_date'];

            $movieArg = new \stdClass;
            $movieArg->id= $movie_id;
            $movie = $salesClass->movieGet($movieArg);

              $genre_id = $movie['genre_id'];
              $movie_name = $movie['movie_name'];

            $costumerArg = new \stdClass;
            $costumerArg->id= $rows['costumer_id'];
            $costumer = $salesClass->costumersGet($costumerArg);

              @$costumer_name = $costumer['costumer_name'];
              @$costumer_surname = $costumer['costumer_surname'];
              @$costumer_email = $costumer['costumer_email'];
            
            
            $salesArg = new \stdClass;
            $salesArg->id= $rows['sales_person_id'];
            $sales = $salesClass->salesGet($salesArg);

              $sales_name = $sales['sales_person_name'];
              $sales_surname = $sales['sales_person_surname'];
              $sales_email = $sales['sales_person_email'];
              
            
            $genreArg = new \stdClass;
            $genreArg->id= $genre_id;
            $genre = $salesClass->genresGet($genreArg);
            
              $genreName = $genre['genre_name'];
              @$hall_id = $rows['hall_id'];
              $ticket_time = $rows['ticket_time'];
            
          


              echo '
                <tr>
                  <th scope="row">'.$rows['ticket_id'].'</th>
                  <td>'.$movie_name.'</td>
                  <td>'.$genreName.'</td>
                  <td>'.$from_date.' -- '.$to_date.'</td>
                  <td>'.$hall_id.'</td>
                  <td>'.$costumer_name.' '.$costumer_surname.'</td>
                  <td>'.$costumer_email.'</td>
                  <td>'.$sales_name.' '.$sales_surname.'</td>
                  <td>'.$sales_email.'</td>
                  <td>'.$ticket_time.'</td>
                  <td><a href="?del='.$rows['ticket_id'].'" class="btn-danger" style=" border-radius: 200px; ">X</a></td>
                </tr>
              ';


            


            
        });
    
    ?>
 
</tbody>
          </table>
        </div>
      </div>
    </form>
</div>
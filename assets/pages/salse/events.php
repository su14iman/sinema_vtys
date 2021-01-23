<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Events</h3>
</div>
<div class="container-fluid mt-5 m-5">
    <form class="form-card card">
        <div class="form-group row justify-content-center">
          <div class="col-12 col-form-label" style="overflow: auto;">
          <div style="text-align:right; margin:1%;">
          <a href="?add">add</a>
        </div>
            <table class="table table-striped table-bordered " style="width:100%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">plan</th>
                <th scope="col">movie</th>
                <th scope="col">Option</th>
              </tr>
          </thead>
          <tbody>


              <?php 
                  $data->fetchAll(function($rows) {
                    global $salesClass;
                    $plansArg = new \stdClass;
                    $movieArg = new \stdClass;
                    $plansArg->id = $rows['plan_id'];
                    $movieArg->id = $rows['movie_id'];
                    echo '
                      <tr>
                        <th scope="row">'.$rows['event_id'].'</th>
                        
                        <td>
                          '.$salesClass->plansGet($plansArg)['from_date'].'
                          ---
                          '.$salesClass->plansGet($plansArg)['to_date'].'
                        </td>
                        <td>
                          '.$salesClass->movieGet($movieArg)['movie_name'].'
                        </td>

                        
                        <td><a href="?del='.$rows['event_id'].'" class="btn-danger" style=" border-radius: 200px; ">X</a></td>
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
<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Movies</h3>
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
                <th scope="col">genre</th>
                <th scope="col">Name</th>
                <th scope="col">Director</th>
                <th scope="col">Date</th>
                <th scope="col">Language</th>
                <th scope="col">Option</th>
              </tr>
          </thead>
          <tbody>

              <?php 
                  $data->fetchAll(function($rows) {
                    global $salesClass;
                    $genresArg = new \stdClass;
                    $genresArg->id = $rows['genre_id'];
                    echo '
                      <tr>
                        <th scope="row">'.$rows['movie_id'].'</th>
                        
                        <td>
                          '.$salesClass->genresGet($genresArg)['genre_name'].'
                        </td>

                        <td>'.$rows['movie_name'].'</td>
                        <td>'.$rows['movie_director'].'</td>
                        <td>'.$rows['movie_date'].'</td>
                        <td>'.$rows['movie_language'].'</td>
                        <td><a href="?del='.$rows['movie_id'].'" class="btn-danger" style=" border-radius: 200px; ">X</a></td>
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
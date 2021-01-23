<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Genres</h3>
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
                <th scope="col">geners</th>
                <th scope="col">Option</th>
              </tr>
          </thead>
          <tbody>
              <!-- <tr>
                <th scope="row">1</th>
                <td>geners</td>
                <td><button class="btn-danger" style=" border-radius: 200px; ">X</button></td>
              </tr> -->
              <?php 
                  $data->fetchAll(function($rows) {
                    echo '
                      <tr>
                        <th scope="row">'.$rows['genre_id'].'</th>
                        <td>'.$rows['genre_name'].'</td>
                        <td>
                        <a href="?del='.$rows['genre_id'].'" class="btn-danger" style=" border-radius: 200px; ">X</a>
                        </td>
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
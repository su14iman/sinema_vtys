<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Plans</h3>
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
                <th scope="col">From Date</th>
                <th scope="col">To Date</th>
                <th scope="col">Option</th>
              </tr>
          </thead>
          <tbody>

              <?php 
                  $data->fetchAll(function($rows) {
                    echo '
                      <tr>
                        <th scope="row">'.$rows['plan_id'].'</th>
                        <td>'.$rows['from_date'].'</td>
                        <td>'.$rows['to_date'].'</td>
                        <td>
                        <a href="?del='.$rows['plan_id'].'" class="btn-danger" style=" border-radius: 200px; ">X</a>
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
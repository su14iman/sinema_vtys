<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Plans</h3>
</div>
<div class="container-fluid mt-5 m-5">
    <form class="form-card card">
      <div class="form-group row justify-content-center r">
        <label for="form-date" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Form Date</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
          <input type="datetime-local" class="form-control" id="form-date">
        </div>
      </div>
      <div class="form-group row justify-content-center r">
        <label for="to-date" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">To Date</label>
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
          <input type="datetime-local" class="form-control" id="to-date">
        </div>
      </div>
      <div class="form-group row justify-content-center mt-4">
        <div class=" col-lg-10 col-sm-8 col-xs-12 col-12">
          <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">add</button>
        </div>
      </div>
    </form>
    <form class="form-card card">
      <div class="form-group row justify-content-center">
        <div class="col-12 col-form-label" style="overflow: auto;">
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
              <tr>
                <th scope="row">1</th>
                <td>2021-01-14T06:16</td>
                <td>2021-01-14T06:16</td>
                <td><button class="btn-danger" style=" border-radius: 200px; ">X</button></td>
              </tr>
          </tbody>
          </table>
        </div>
      </div>
    </form>
</div>
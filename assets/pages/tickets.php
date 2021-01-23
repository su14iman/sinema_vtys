<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Movies</h3>
</div>
<div class="container-fluid mt-5 m-5">
    <form class="form-card card">
        <div class="form-group row justify-content-center r">
            <label for="i-movie" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Movie</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select class="form-control" id="i-movie">
                    <option>Default select</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-costumer" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Costumer</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select class="form-control" id="i-costumer">
                    <option>Default select</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-sale-person" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Sales Person</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select class="form-control" id="i-sale-person">
                    <option>Default select</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-hall" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Hall</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select class="form-control" id="i-hall">
                    <option>Default select</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-time" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Time</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="datetime-local" class="form-control" id="i-time">
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
                <th scope="col">Movie</th>
                <th scope="col">Costumer</th>
                <th scope="col">Sales Person</th>
                <th scope="col">Hall</th>
                <th scope="col">Time</th>
                <th scope="col">Option</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Movie</td>
                <td>Costumer</td>
                <td>Sales Person</td>
                <td>Hall</td>
                <td>Time</td>
                <td><button class="btn-danger" style=" border-radius: 200px; ">X</button></td>
              </tr>
          </tbody>
          </table>
        </div>
      </div>
    </form>
</div>
<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Movies</h3>
</div>
<div class="container-fluid mt-5 m-5">
    <form class="form-card card">
        <div class="form-group row justify-content-center r">
            <label for="i-genre" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">genre</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select class="form-control" id="i-genre">
                    <option>Default select</option>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-name" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Name</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="text" class="form-control" id="i-name">
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-director" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Director</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="text" class="form-control" id="i-director">
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-date" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Date</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="datetime-local" class="form-control" id="i-date">
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-language" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Language</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="text" class="form-control" id="i-language">
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
                <th scope="col">genre</th>
                <th scope="col">Name</th>
                <th scope="col">Director</th>
                <th scope="col">Date</th>
                <th scope="col">Language</th>
                <th scope="col">Option</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <th scope="row">1</th>
                <td>genre</td>
                <td>Name</td>
                <td>Director</td>
                <td>Date</td>
                <td>Language</td>
                <td><button class="btn-danger" style=" border-radius: 200px; ">X</button></td>
              </tr>
          </tbody>
          </table>
        </div>
      </div>
    </form>
</div>
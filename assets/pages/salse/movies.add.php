<div class="container-fluid mt-5 mb-5">
  <h3 class="text-center" id="header">Movies</h3>
</div>
<div class="container-fluid mt-5 m-5">
    <form method="POST" action="" class="form-card card">
        <div class="form-group row justify-content-center r">
            <label for="i-genre" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">genre</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <select class="form-control" name="genre_id" id="i-genre">
                    <!-- <option value="1">Default select</option> -->
                    <?php 
                        $dataGenre->fetchAll(function($rows) {
                            echo '
                                <option value="'.$rows['genre_id'].'">'.$rows['genre_name'].'</option>
                            ';
                        });
                     ?>
                </select>
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-name" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Name</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="text" class="form-control" id="i-name" name="movie_name">
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-director" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Director</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="text" class="form-control" id="i-director" name="movie_director">
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-date" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Date</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="date" class="form-control" id="i-date" name="movie_date">
            </div>
        </div>
        <div class="form-group row justify-content-center r">
            <label for="i-language" class="col-lg-4 col-sm-12 col-12 col-form-label text-center">Language</label>
            <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                <input type="text" class="form-control" id="i-language" name="movie_language">
            </div>
        </div>
        <div class="form-group row justify-content-center mt-4">
            <div class=" col-lg-10 col-sm-8 col-xs-12 col-12">
            <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" name="submit" type="submit">add</button>
            </div>
        </div>
    </form>
</div>
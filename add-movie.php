<?php include 'inc/header.php' ?>

<?php 
 $movie_name = $year = $duration = $rating = $poster_image = $trailer_link = $genres = $description = $director= $writers = $stars = '';


 $fields = [
    'movie_name' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'year' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'duration' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'rating' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'poster_image' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'trailer_link' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'genres' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'description' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'director' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'writers' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],
    'stars' => [
        'required' => true,
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ],

];


//Form Submit
if(isset($_POST['submit'])){
    $errors = [];

    foreach($fields as $key => $field){
        
        $value = $_POST[$key] ?? '';
    

    if($field['required'] && empty($value)){
        $errors[$key] = 'Field Required';
    }else{

        $_POST[$key] = filter_input(INPUT_POST, $key, $field['filter']);
        ${$key} =  $_POST[$key];
        
    }

  
}



if(!$errors){
        
    // Break Youtube Link 
    $position = strpos($trailer_link, "=");
    $trailer_link_mod = 'https://www.youtube.com/embed/'. substr($trailer_link, $position + 1);

    

        // Add to database
        $sql = "INSERT INTO movies (movie_name,year,duration,rating,poster_image,trailer_link,genres, description, director,writers,stars) values ('$movie_name', '$year', '$duration','$rating','$poster_image','$trailer_link_mod','$genres','$description','$director','$writers','$stars') ";
    
        if(mysqli_query($conn, $sql)){
          // Success
          header('Location: index.php');
        }else {
          //Error 
          echo 'Error: ' . mysqli_error($conn);
        }
      }


}

 

 
?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12  p-3">
                    <h2>Add New Movie</h2>

                </div>
            </div>

            <div class="row ">
                <div class="col-6 ">
                    <form class="row  g-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post" >

                        <div class="col-12">
                            <label for="movie_name" class="form-label fw-semibold ">Movie Name</label>
                            <input type="text" name="movie_name" id="movie_name" placeholder="Jhon Wick Chapter: 4" class="form-control py-2 rounded-0 bg-dark border-0  text-light <?php echo isset($errors) && array_key_exists('movie_name', $errors) ? 'is-invalid': null;?>">
                            <div class="invalid-feedback">

                            Required Field

                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label fw-semibold ">Year</label>
                            <input type="number" name="year" class=" form-control py-2 rounded-0 bg-dark border-0 text-light <?php echo isset($errors) && array_key_exists('year', $errors) ? 'is-invalid': null;?>"
                                placeholder="2022" >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label fw-semibold">Duration</label>
                            <input type="text" name="duration" class="form-control  py-2 rounded-0 bg-dark  border-0 text-light <?php echo isset($errors) && array_key_exists('duration', $errors)  ? 'is-invalid': null;?>"
                                placeholder="2h 10m" >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-3">
                            <label class="form-label fw-semibold">Rating</label>
                            <input type="text" name="rating" class="form-control  py-2 rounded-0 bg-dark  border-0 text-light <?php echo isset($errors) && array_key_exists('rating', $errors)  ? 'is-invalid': null;?>" placeholder="85%"
                                >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Poster Image</label>
                            <input type="text" name="poster_image" class="form-control  py-2 rounded-0 bg-dark  border-0 text-light <?php echo isset($errors) && array_key_exists('poster_image', $errors)  ? 'is-invalid': null;?>" >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Trailer Link</label>
                            <input type="text" name="trailer_link" class="form-control  py-2 rounded-0 bg-dark  border-0 text-light <?php echo isset($errors) && array_key_exists('trailer_link', $errors)  ? 'is-invalid': null;?>"
                                placeholder="https://www.youtube.com/embed/yjRHZEUamCc" >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Genres</label>
                            <input type="text" name="genres" class="form-control  py-2 rounded-0 bg-dark  border-0 text-light <?php echo isset($errors) && array_key_exists('genres', $errors)  ? 'is-invalid': null;?>" 
                                placeholder="Action,Crime,Thriller" >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description" class="form-control bg-dark border-0 text-light <?php echo isset($errors) && array_key_exists('description', $errors)  ? 'is-invalid': null;?>" id="" rows="5"></textarea>
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Director</label>
                            <input type="text" name="director" class="form-control  py-2 rounded-0 bg-dark  border-0 text-light <?php echo isset($errors) && array_key_exists('director', $errors)  ? 'is-invalid': null;?>"
                                placeholder="John Murphy" >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Writers</label>
                            <input type="text" name="writers" class="form-control  py-2 rounded-0 bg-dark  border-0 text-light <?php echo isset($errors) && array_key_exists('writers', $errors) ? 'is-invalid': null;?>"
                                placeholder="Shay Hatten, Michael Finch" >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Stars</label>
                            <input type="text" name="stars" class="form-control  py-2 rounded-0 bg-dark  border-0 text-light <?php echo  isset($errors) && array_key_exists('stars', $errors)  ? 'is-invalid': null;?>"
                                placeholder="Keanu Reeves, Laurence Fishburne" >
                            <div class="invalid-feedback">
                                Required Field
                            </div>
                        </div>

                        <div class="col-12 ps-0">
                            <button class="btn btn-success rounded-0 px-4 py-2 mt-3 fw-semibold" type="submit" name="submit">Add
                                Movie</button>
                        </div>
                    </form>
                </div>

            </div>
    </main>

</body>

</html>
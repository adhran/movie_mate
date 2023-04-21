<?php include 'inc/header.php' ?>

<?php
  $id = $_GET['id'];

  $sql = "SELECT * FROM movies WHERE id = $id";

  $res = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($res)) {
    $movie_name= $row['movie_name'];
    $year= $row['year'];
    $duration= $row['duration'];
    $trailer_link= $row['trailer_link'];
    $genres = $row['genres'];
    $description= $row['description'];
    $director= $row['director'];
    $writers= $row['writers'];
    $stars= $row['stars'];


    $genresS = explode(",", $genres);


}

  
  ?>

        <div class="container my-5">

            <div class="row">
                <div class="col-12  pe-3">
                    <h2> <?php echo $movie_name ?> </h2>
                    <div class="d-flex ">
                        <p class="me-3 lead fs-6"><?php echo $year ?> </p>
                        <p class="me-3 lead fs-6"><?php echo $duration ?> </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <iframe class="w-100" height="315" src="<?php echo $trailer_link ?> "
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                    <div class="mt-3">
    
                    <?php foreach($genresS as $genre):?>
                        <button class="btn btn-outline-light rounded-4"><?php echo $genre; ?> </button>
                    <?php endforeach;?>
                    </div>


                    <p class=" lead mt-3  "> <?php echo $description; ?> </p>


                    <div class="mt-3 ">
                        <div class="d-flex border-2 border-white ">
                            <p class="fs-5 fw-bold">Director - <span class="fw-normal fs-6 ms-3"> <?php echo $director; ?> </span>
                            </p>

                        </div>
                        <div class="d-flex border-2 border-white ">
                            <p class="fs-5 fw-bold">Writers - <span class="fw-normal fs-6 ms-3"> <?php echo $writers ?> </span>
                            </p>

                        </div>
                        <div class="d-flex border-2 border-white ">
                            <p class="fs-5 fw-bold">Stars - <span class="fw-normal fs-6 ms-3"><?php echo $stars ?></span>
                            </p>

                        </div>
                    </div>

                </div>

            </div>

    </main>

</body>

</html>
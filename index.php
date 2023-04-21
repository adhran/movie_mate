<?php include 'inc/header.php' ?>

<?php

  $sql = 'SELECT * FROM movies ';
  $result = mysqli_query($conn, $sql);
  $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);
  

?>


        <div class="container mt-5">
            <div class="row">
                <div class="col-12  pe-3">

      <?php if(!empty($movies)): ?>
        <h2>Latest Movies</h2>
      <?php endif;?>
                    
      <?php if(empty($movies)): ?>
        <h2>No Movies</h2>
      <?php endif;?>

                </div>
            </div>



            <div class="row ">

            <?php foreach($movies as $item):?>
                <div class="col-10 mx-auto mx-sm-0 col-sm-6 col-md-4 col-lg-2  mt-4 ">
                    <div class="card bg-black text-white  border-dark position-relative"
                        style=" height: 360px; transition: all ease-in-out 400ms;  ">
                        <a href="detail.php?id=<?php echo $item['id']?>" class="text-decoration-none">
                            <div class="position-relative" style="height: 250px;">
                                <img class="position-absolute h-100 w-100"
                                    style=" object-fit: cover; object-position: top;"
                                    src="<?php echo $item['poster_image'] ?>"
                                    alt="Card image cap">
                            </div>
                        </a>
                        <div class="card-body position-relative">
                            <h5 class="card-title "><?php echo $item['movie_name'] ?></h5>
                            <div class="d-flex">
                                <p class="me-1"><i class="bi bi-hand-thumbs-up-fill"></i></p>
                                <p><?php echo $item['rating'] ?></p>
                            </div>
                            <!-- <button class="btn btn-dark rounded-0 w-75 position-absolute  " style="bottom: 20px;"><i
                                    class="bi bi-plus"></i>
                                WatchList</button> -->
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
    </main>

</body>

</html>
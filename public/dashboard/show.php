<?php
session_start();
if (!$_SESSION['mail']) {
  header('location: ./sign-in.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('./includes/head.php')  ?>

<body>
  <div class="wrapper">
    <?php include('./includes/sidebar.php')  ?>

    <div class="main">
      <?php include('./includes/navbar.php')  ?>


      <main class="content">
        <div class="container-fluid p-0">
          <a class="btn btn-primary" href="./logout.php">Log out</a>

          <h1 class="h3 mb-3">Users Data</h1>
          <h1> Wellcome Our user </h1>
          <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-body">

                  <table class="table table-responsive">
                    <tr>
                      <th>ID</th>
                      <th>EMAIL</th>
                      <th>PASSWORD</th>
                      <th>IMAGE</th>
                      <th>CREATED AT</th>
                      <th>ACTION</th>
                    </tr>

                    <?php
                    include('./db_con.php');

                    $sql = "SELECT * FROM `users_tbl`";
                    $res = mysqli_query($conn, $sql);
                    // $data =  mysqli_fetch_assoc($res)

                    while ($data =  mysqli_fetch_assoc($res)) {
                    ?>
                      <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['password'] ?></td>
                        <td><img src="<?php echo $data['image']  ?>" alt="not found" width="150" height="150"></td>
                        <td><?php echo $data['created_at'] ?></td>
                        <td>
                          <a href="./edit.php?uid=<?php echo $data['id'] ?>" class="btn btn-primary">Edit</a>
                          <a href="./delete.php?delid=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php

                    }

                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>
      <?php include('./includes/footer.php') ?>
    </div>
  </div>

  <script src="js/app.js"></script>

</body>

</html>
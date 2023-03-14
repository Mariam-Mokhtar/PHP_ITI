<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body style="background: linear-gradient(#ECF2FF,
#E3DFFD,
#E5D1FA,
#FFF4D2) ;background-attachment: fixed;">
  <section class="vh-100 ">
    <div class="container py-5 h-100 ">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col col-lg-10 mb-4 mb-lg-0 p-3 bg-white rounded-3 text-center">
          <h1 class="mb-3" style="color: #596E79 ;">Table of Contents </h1>
          <table class="table table-striped  table-bordered" id="all-users">
            <thead>
              <tr>
                <th scope="col">Visit Date</th>
                <th scope="col">IP</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $users = convert_file_to_array();
              foreach ($users as $user) {
                $counter = 0;
                $user_details = explode(",", $user);
                echo "<tr>";
                foreach ($user_details as $value) {
                  echo " <td>$value</td>";
                  $counter++;
                }
                echo "</tr>";
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
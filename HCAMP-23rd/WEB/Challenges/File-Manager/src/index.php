<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <title> File Manager </title>
    </head>
    <body>
        <br>
        <center>
        <div class="col-md-8">
          <div class="card">
              <div class="card-header"> Select your Files </div>
              <div class="card-body">
                  <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" class="form-control form-control-sm" name="upload_file" required><br>
                    <input type="password" class="form-control form-control-sm" name="upload_pass" placeholder="Password" required><br>
                    <button type="submit" class="btn btn-outline-primary btn-sm"> Upload </button>
                </div>
            </div>
        </center>
    </body>
</html>

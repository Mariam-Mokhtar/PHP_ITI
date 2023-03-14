<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>File Upload</title>
    <style>
        body {
            background: linear-gradient(#ECF2FF,
                    #E3DFFD,
                    #E5D1FA,
                    #FFF4D2);
            background-attachment: fixed;
            color: #9681ac;
            font-family: 'Lato', sans-serif;
            height: 100vh;
        }
        .file-upload-wrapper {
            border: 2px #9681ac dotted;
        }
        button {
            background-color: #9681ac;
            color: #ECF2FF !important;
        }
        button:hover{
            color: #9681af !important;
            background-color: #E5D1FA !important;
        }
    </style>
</head>
<body class="container d-flex align-items-center">
    <section class="container rounded-5 bg-white p-5 w-75 shadow">
        <div class="row">
            <form action="/iti_php/Lab3/uploadFile_aws_S3/index.php" method="post" enctype="multipart/form-data" class="col-md-12 text-center">
                <h2 class="mb-4" style="text-shadow: 3px 3px #E3DFFD">FILE UPLOAD</h2>
                <div class="file-upload-wrapper text-center  p-5">
                    <p class="mb-3 text-xl">
                        <b>Drag and Drop files here</b>
                    </p>
                    <p class="font-sm mb-4">OR</p>
                    <input type="file" name="fileToUpload" id="fileToUpload" required>
                </div>
                <button type="submit" class="btn  mt-4" style="background-color:#9681ac">
                    <i class="bi bi-upload me-3"></i>Upload</button>
            </form>
            <?php echo $result?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
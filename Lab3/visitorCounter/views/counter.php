<?php
$counter = new counter();
$counter->increment_and_update_counter();
$current_count = $counter->get_count();
?>
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

        button:hover {
            color: #9681af !important;
            background-color: #E5D1FA !important;
        }
    </style>
</head>

<body class="container d-flex align-items-center">
    <section class="container">
            <div class="card mx-auto shadow" style="width:20rem;">
                <img src="\iti_php\Lab3\visitorCounter\images\visitor.png" class="card-img-top">
                <div class="card-body text-center">
                    <h2 class="mb-4">Visitor Counter</h2>
                    <p class="card-text w-50 mx-auto rounded-5 text-white mb-4 p-1" style="background-color:#9681ac"><?php echo $current_count; ?></p>
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
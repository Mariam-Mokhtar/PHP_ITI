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

    <section class="container my-5">
        <div class="row mx-auto p-4 bg-white shadow-lg rounded-4 w-75 fw-bold" style="color:#A3C7D6">
            <h3 class="text-center fw-bolder" > Contact Form </h3>
            <div id="after_submit">
            </div>
            <form method="post" action="index.php">
                <div class="row mb-2">
                    <h6 class="text-center text-danger"> <?php echo $error?></h6>
                </div>
                <div class="row mb-2">
                    <label class="required mb-2" for="name">Your name:</label><br />
                    <input  id="name" class="form-control" name="name" type="text" value="<?php echo remember_var("name")?>" size="30" /><br />
                </div>
                <div class="row mb-2">
                    <label class="required mb-2" for="email">Your email:</label><br />
                    <input  id="email" class="form-control" name="email" type="text" value="<?php echo remember_var("email")?>" size="30" /><br />
                </div>
                <div class="row mb-4">
                    <label class="required mb-2" for="message">Your message:</label><br />
                    <textarea  id="message" class="form-control" name="message"  rows="5" cols="30"><?php echo remember_var("message")?></textarea><br />
                </div>
                <input id="submit" name="submit" type="submit" value="Send email" class="btn text-white fw-bold"style="background-color:#A3C7D6"/>
                <input id="clear" name="clear" type="reset" value="clear form" class="btn text-white fw-bold"style="background-color:#A3C7D6"/>
                        </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
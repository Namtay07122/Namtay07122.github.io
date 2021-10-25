
<?php
    require_once('dbhelper.php')
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index1.html">Hire me</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Add Film</h2>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3"><label class="form-label" for="subject">Category</label>
                        <select class="form-select" name="category" id="subject">
                            <optgroup label="This is a group">
                            <?php 

                            $sql = "select * from category " ;
                            $variable = executeResult($sql);
                            foreach ($variable as  $value) { ?>
                                    
                            <option value="<?=$value['id']?>"><?=$value['name']?></option>

                            <?php } ?>
                            </optgroup>
                        </select>
                    </div>
                    <div class="mb-3"><label class="form-label" for="email">Name</label>
                        <input class="form-control" type="text" name="title" id="name">
                    </div>
                    <div class="mb-3"><label class="form-label" for="text">Other name</label>
                        <input class="form-control" name="other" type="text" id="email-1">
                    </div>
                    <div class="mb-3"><label class="form-label" for="message">Summary</label>
                        <textarea name="summary" class="form-control" id="message"></textarea>
                    </div>
                    <div class="mb-3"><label class="form-label" for="message">Video</label>
                        <input name="uploadFile" class="form-control" type="file">
                    </div>
                    <div></div>
                    <div></div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6"><label class="form-label" for="hire-date">Image</label>
                                <img id="blah" src="#" style="float: right;">
                                <input class="form-control" onchange="readURL(this);" name="image" type="file">
                            </div>
                            <div class="col-md-6 button">
                                <input class="btn btn-primary d-block w-100" type="submit" name="submit1" value="ADD">
                            </div>
                        </div>
                    </div>
                    <?php  require('action.php') ?>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                        class="icon ion-social-instagram-outline"></i></a><a href="#"><i
                        class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
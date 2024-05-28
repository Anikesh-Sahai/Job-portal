<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet/less" type="text/css" href="../public/less/style.less" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{$title}</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <i class="fa fa-telegram"></i>
                JOBSTAKE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                </ul>
                <div class="d-flex">
                    <button onclick="history.back()" class="btn btn-primary mx-1 px-4">Back</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- alert -->

    {* {if $valid=="true"}
    <div class="alert alert-{$type} alert-dismissible fade show" role="alert">
        <strong>{$result}.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    {/if} *}

    <div class="post">
        <div id="alert-jobpage"></div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                    <div class="card my-5">
                        {if $img == NULL}
                            <img src="../public/img/default-image.jpg" class="card-img-top" alt="Job tumbhnail img">
                        {else}
                            <img src="../public/img/{$img}" class="card-img-top" alt="Job tumbhnail img">
                        {/if}
                        <div class="card-body">
                        <h5 class="card-title" id="j_id">Job ID: {$job_id}</h5>
                        <h5 class="card-title">{$job_title}</h5>
                        <h6 class="card-subtitle my-2 text-muted"><b>Posted on:</b> {$date}</h6>
                        <h6 class="card-subtitle my-2 text-muted"><b>Relative Tags:</b> {$tag}</h6>
                        <p class="card-text"><b>{$location}</b></p>
                        <p class="card-text">{$job_desc}</p>
                        <p class="card-text"><b>Contact Email:</b> {$email}</p>
                        {if $user == "Employee"}
                            <a id="apply" class="btn btn-primary">Apply</a>
                        {elseif $user=="Employer"}
                            <a href="delete.php?id={$job_id}" class="btn btn-primary">Delete</a>
                        {/if}    
                        
                        </div>
                    </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/less"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../public/js/scrypt.js"></script>

</body>

</html>
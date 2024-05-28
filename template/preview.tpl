
  <!doctype html>
  <html lang="en">
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
          <link rel="stylesheet/less" type="text/css" href="../public/less/style.less" />
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
          <title>Hello, world!</title>
      </head>
      <body>

          <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                  <a class="navbar-brand" href="home.php">
                      <i class="fa fa-telegram"></i>
                      JOBSTAKE
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                  <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;"> 
                  </ul>
                  <div class="d-flex">
                      <button onclick="history.back()" class="btn btn-primary mx-1 px-4">BACK</button>
                      <!-- {if $valid=="true"}
                        <a href="logout.php"><button class="btn btn-primary mx-1">LogOut</button></a>
                      {else}
                        <a href="login.php"><button class="btn btn-primary mx-1">Login</button></a>
                        <a href="signup.php"><button class="btn btn-primary mx-1">SignUp</button></a>
                      {/if}
                      {if $emp=="Employer"}
                        <a href="postjob.php"><button class="btn btn-primary mx-1">Post Job</button></a>
                        <a href="signup.php"><button class="btn btn-primary mx-1">Show My Jobs</button></a>
                      {/if} -->
                  </div>
                </div>
              </div>
            </nav>

          <div class="main">
              <div class="row d-flex justify-content-end my-4">
                  <div class="col-2">
                      <button type="button" onclick="history.back()" class="btn-1 btn btn-warning px-5">Edit</button>
                  </div>
                  <div class="col-2">
                    <form action="postjob.php" method="post">
                      <input type="hidden" name="name" value="{$posted_by}">
                      <input type="hidden" name="email" value="{$email}">
                      <input type="hidden" name="location" value="{$location}">
                      <input type="hidden" name="job_t" value="{$job_title}">
                      <input type="hidden" name="job_d" value="{$job_d}">
                      <input type="hidden" name="tag" value="{$tag}">
                      <input type="hidden" name="img" value="{$img}">
                      <input type="hidden" name="publish" value="false">
                      <input type="submit" value="review" class="btn-2 btn btn-warning px-5"> 
                    </form>
                  </div>
                  <div class="col-2">
                    <form action="postjob.php" method="post">
                      <input type="hidden" name="name" value="{$posted_by}">
                      <input type="hidden" name="email" value="{$email}">
                      <input type="hidden" name="location" value="{$location}">
                      <input type="hidden" name="job_t" value="{$job_title}">
                      <input type="hidden" name="job_d" value="{$job_d}">
                      <input type="hidden" name="tag" value="{$tag}">
                      <input type="hidden" name="img" value="{$img}">
                      <input type="hidden" name="publish" value="true">
                      <input type="submit" value="publish" class="btn-2 btn btn-warning px-5"> 
                    </form>
                      <!-- <button type="button" class="btn-2 btn btn-warning px-5">Publish</button> -->
                  </div>
              </div>

              <div class="job-post container my-4 p-4">
                  <div class="card my-3 p-1">
                        <div class="row g-0">
                          <div class="col-md-2">
                            {if $img == NULL}
                              <img src="../public/img/default-image.jpg" class="img-fluid rounded my-4" alt="...">
                            {else}
                              <img src="../public/img/{$img}" class="img-fluid rounded my-4" alt="...">
                            {/if}
                          </div>
                          <div class="col-md-10">
                            <div class="card-body">
                              <h5 class="card-title">{$job_title}</h5>
                              <p class="card-text"><b>Posted By:</b>  {$posted_by}</p>
                              <p class="card-text"><b>Location:</b> {$location} &emsp;&emsp;&emsp; <b>Relative tags:</b> {$tag} </p>
                              <p class="card-text"><small class="text-muted"><b>email:</b> {$email}</small></p>
                            </div>
                          </div>
                        </div>
                    </div>
                                  
                
                      
              </div>
              
              <hr>
              <div class="sml container">You can edit your post here before Publishing it</div>
          </div>
          
          <script src="https://cdn.jsdelivr.net/npm/less" ></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
          <script src="../public/js/scrypt.js"></script>
    </body>
  </html>
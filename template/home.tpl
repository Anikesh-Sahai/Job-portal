<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet/less" type="text/css" href="../public/less/style.less" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        </ul>
        <div class="d-flex">
          {if $valid=="true"}
          <a href="logout.php"><button class="btn btn-primary mx-1">LogOut</button></a>
          {else}
          <a href="login.php"><button class="btn btn-primary mx-1">Login</button></a>
          <a href="signup.php"><button class="btn btn-primary mx-1">SignUp</button></a>
          {/if}
          {if $emp=="Employer"}
          <a href="postjob.php"><button class="btn btn-primary mx-1">Post Job</button></a>
          <button class="btn btn-primary mx-1" id="show">Show My Jobs</button>
          {/if}
        </div>
      </div>
    </div>
  </nav>

  
  <div class="main">
    <div class="search container-fluid d-flex">
      <input class="form-control me-4" type="search" id="search_inp" placeholder="Search for job here..."
      aria-label="Search" id="text">
      <button class="btn btn-outline-success px-4" onclick="search()" type="submit">Search for job</button>
    </div>
  
    <div class="alertpass">
      {if $alert=="true"}
      <div class="alert alert-{$type} alert-dismissible fade show" role="alert">
          <strong>{$result}.</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      {/if} 
    </div>


    <div class="bar_result job-post container my-4 p-4">
      <center>
        <h2 class="card-title mb-4">Search result Jobs</h2>
      </center>
      <div class="bar-result-text"></div>

    </div>


    <div class="employer job-post container my-4 p-4">
      <center>
        <h2 class="card-title mb-4">My Posted Jobs</h2>
      </center>

      <div class="sml container">published Posts</div>
      {foreach $pjob as $post}
      <div class="card my-3 p-1">
        <div class="row g-0">
          <div class="col-md-2">
            {if $post.img == NULL}
            <img src="../public/img/default-image.jpg" class="img-fluid rounded my-4" alt="...">
            {else}
            <img src="../public/img/{$post.img}" class="img-fluid rounded my-4" alt="...">
            {/if}
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title" id="{$post.job_id}"><a href="jobpage.php?key={$post.job_id}">{$post.job_title}</a>
              </h5>
              <p class="card-text"><b>Posted By:</b> {$post.posted_by}</p>
              <p class="card-text"><b>Posted on:</b> {$post.date} &emsp;&emsp;&emsp; <b>Location:</b> {$post.location}
                &emsp;&emsp;&emsp; <b>Relative tags:</b> {$post.tag} </p>
              <p class="card-text"><small class="text-muted"><b>email:</b> {$post.email}</small></p>
            </div>
          </div>
        </div>
      </div>

      {foreachelse}
      No results...
      {/foreach}
      <div class="sml container">Unpublished Posts</div>
        {foreach $ujob as $post}
        <div class="card my-3 p-1">
            <div class="row g-0">
              <div class="col-md-2">
                {if $post.img == NULL}
                <img src="../public/img/default-image.jpg" class="img-fluid rounded my-4" alt="...">
                {else}
                <img src="../public/img/{$post.img}" class="img-fluid rounded my-4" alt="...">
                {/if}
              </div>

              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title" id="{$post.job_id}"><a href="jobpage.php?key={$post.job_id}">{$post.job_title}</a>
                  </h5>
                  <p class="card-text"><b>Posted By:</b> {$post.posted_by}</p>
                  <p class="card-text"><b>Posted on:</b> {$post.date} &emsp;&emsp;&emsp; <b>Location:</b> {$post.location}</p>  
                  <p class="card-text"><b>Relative tags:</b> {$post.tag} </p>
                  <p class="card-text"><small class="text-muted"><b>email:</b> {$post.email}</small></p>
                  <input type="hidden" name="job_d" value="{$post.job_desc}">
                  <button class="editjob btn btn-secondary mx-1">Edit</button>
                  <button class="publishjob btn btn-secondary mx-1">Publish</button>
                </div>

              </div>
            </div>
        </div>

      {foreachelse}
      No results...
      {/foreach}
    </div>

    <div id="all" class="job-post container my-4 p-4">
      <center>
        <h2 class="card-title mb-4">Jobs</h2>
      </center>
      {foreach $jobPosted as $post}
      <div class="card my-3 p-1">
        <div class="row g-0">
          <div class="col-md-2">
            {if $post.img == NULL}
            <img src="../public/img/default-image.jpg" class="img-fluid rounded my-4" alt="...">
            {else}
            <img src="../public/img/{$post.img}" class="img-fluid rounded my-4" alt="...">
            {/if}
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title" id="{$post.job_id}"><a href="jobpage.php?key={$post.job_id}">{$post.job_title}</a>
              </h5>
              <p class="card-text"><b>Posted By:</b> {$post.posted_by}</p>
              <p class="card-text"><b>Posted on:</b> {$post.date} &emsp;&emsp;&emsp; <b>Location:</b> {$post.location}
                &emsp;&emsp;&emsp; <b>Relative tags:</b> {$post.tag} </p>
              <p class="card-text"><small class="text-muted"><b>email:</b> {$post.email}</small></p>
            </div>
          </div>
        </div>
      </div>

      {foreachelse}
      No results...
      {/foreach}

    </div>

  </div>


  <!-- Modal -->
  <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="editjob.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="name" class="form-label">Company Name:</label>
              <input type="text" class="form-control" id="md-name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="md-email" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
              <label for="location" class="form-label">Location:</label>
              <input type="text" class="form-control" id="md-location" name="location" required>
            </div>
            <div class="mb-3">
              <label for="job_t" class="form-label">Job title:</label>
              <input type="text" class="form-control" id="md-job_t" name="job_t" required>
            </div>
            <div class="mb-3">
              <label for="job_d" class="form-label">Job desc:</label>
              <textarea id="md-job_d" name="job_d" class="form-control" rows="10" cols="30"
                placeholder="put your job description here" required></textarea>
            </div>
            <div class="mb-3">
              <label for="tag" class="form-label">Relative Tags:</label>
              <input type="text" class="form-control" id="md-tag" name="tag" required>
              <input type="hidden" id="md-job_id" name="job_id">

            </div>
            <div class="mb-3">
              <label for="inputTag" id="forimg">
                <b> UPLOAD A THUMBNAIL IMAGE </b>
                <input id="inputTag" type="file" name="md-img" >
              </label>
            </div>
            <button type="submit" class="btn btn-warning">Edit</button>
          </form>
        </div>
      </div>
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
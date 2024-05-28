<?php
/* Smarty version 4.3.0, created on 2023-04-11 15:51:56
  from '/home/users/anikesh.sahai/www/html/php/practice/phpcore/job/template/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643534c462bcc9_73717781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4caf0be67aa0de8a39296cfbad96c105a8259e14' => 
    array (
      0 => '/home/users/anikesh.sahai/www/html/php/practice/phpcore/job/template/home.tpl',
      1 => 1681208469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643534c462bcc9_73717781 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
          <?php if ($_smarty_tpl->tpl_vars['valid']->value == "true") {?>
          <a href="logout.php"><button class="btn btn-primary mx-1">LogOut</button></a>
          <?php } else { ?>
          <a href="login.php"><button class="btn btn-primary mx-1">Login</button></a>
          <a href="signup.php"><button class="btn btn-primary mx-1">SignUp</button></a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['emp']->value == "Employer") {?>
          <a href="postjob.php"><button class="btn btn-primary mx-1">Post Job</button></a>
          <button class="btn btn-primary mx-1" id="show">Show My Jobs</button>
          <?php }?>
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
      <?php if ($_smarty_tpl->tpl_vars['alert']->value == "true") {?>
      <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 alert-dismissible fade show" role="alert">
          <strong><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
.</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php }?> 
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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pjob']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
      <div class="card my-3 p-1">
        <div class="row g-0">
          <div class="col-md-2">
            <?php if ($_smarty_tpl->tpl_vars['post']->value['img'] == NULL) {?>
            <img src="../public/img/default-image.jpg" class="img-fluid rounded my-4" alt="...">
            <?php } else { ?>
            <img src="../public/img/<?php echo $_smarty_tpl->tpl_vars['post']->value['img'];?>
" class="img-fluid rounded my-4" alt="...">
            <?php }?>
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title" id="<?php echo $_smarty_tpl->tpl_vars['post']->value['job_id'];?>
"><a href="jobpage.php?key=<?php echo $_smarty_tpl->tpl_vars['post']->value['job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['job_title'];?>
</a>
              </h5>
              <p class="card-text"><b>Posted By:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['posted_by'];?>
</p>
              <p class="card-text"><b>Posted on:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
 &emsp;&emsp;&emsp; <b>Location:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>

                &emsp;&emsp;&emsp; <b>Relative tags:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['tag'];?>
 </p>
              <p class="card-text"><small class="text-muted"><b>email:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
</small></p>
            </div>
          </div>
        </div>
      </div>

      <?php
}
if ($_smarty_tpl->tpl_vars['post']->do_else) {
?>
      No results...
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div class="sml container">Unpublished Posts</div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ujob']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <div class="card my-3 p-1">
            <div class="row g-0">
              <div class="col-md-2">
                <?php if ($_smarty_tpl->tpl_vars['post']->value['img'] == NULL) {?>
                <img src="../public/img/default-image.jpg" class="img-fluid rounded my-4" alt="...">
                <?php } else { ?>
                <img src="../public/img/<?php echo $_smarty_tpl->tpl_vars['post']->value['img'];?>
" class="img-fluid rounded my-4" alt="...">
                <?php }?>
              </div>

              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title" id="<?php echo $_smarty_tpl->tpl_vars['post']->value['job_id'];?>
"><a href="jobpage.php?key=<?php echo $_smarty_tpl->tpl_vars['post']->value['job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['job_title'];?>
</a>
                  </h5>
                  <p class="card-text"><b>Posted By:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['posted_by'];?>
</p>
                  <p class="card-text"><b>Posted on:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
 &emsp;&emsp;&emsp; <b>Location:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>
</p>  
                  <p class="card-text"><b>Relative tags:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['tag'];?>
 </p>
                  <p class="card-text"><small class="text-muted"><b>email:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
</small></p>
                  <input type="hidden" name="job_d" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['job_desc'];?>
">
                  <button class="editjob btn btn-secondary mx-1">Edit</button>
                  <button class="publishjob btn btn-secondary mx-1">Publish</button>
                </div>

              </div>
            </div>
        </div>

      <?php
}
if ($_smarty_tpl->tpl_vars['post']->do_else) {
?>
      No results...
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <div id="all" class="job-post container my-4 p-4">
      <center>
        <h2 class="card-title mb-4">Jobs</h2>
      </center>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobPosted']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
      <div class="card my-3 p-1">
        <div class="row g-0">
          <div class="col-md-2">
            <?php if ($_smarty_tpl->tpl_vars['post']->value['img'] == NULL) {?>
            <img src="../public/img/default-image.jpg" class="img-fluid rounded my-4" alt="...">
            <?php } else { ?>
            <img src="../public/img/<?php echo $_smarty_tpl->tpl_vars['post']->value['img'];?>
" class="img-fluid rounded my-4" alt="...">
            <?php }?>
          </div>
          <div class="col-md-10">
            <div class="card-body">
              <h5 class="card-title" id="<?php echo $_smarty_tpl->tpl_vars['post']->value['job_id'];?>
"><a href="jobpage.php?key=<?php echo $_smarty_tpl->tpl_vars['post']->value['job_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['job_title'];?>
</a>
              </h5>
              <p class="card-text"><b>Posted By:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['posted_by'];?>
</p>
              <p class="card-text"><b>Posted on:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
 &emsp;&emsp;&emsp; <b>Location:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>

                &emsp;&emsp;&emsp; <b>Relative tags:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['tag'];?>
 </p>
              <p class="card-text"><small class="text-muted"><b>email:</b> <?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
</small></p>
            </div>
          </div>
        </div>
      </div>

      <?php
}
if ($_smarty_tpl->tpl_vars['post']->do_else) {
?>
      No results...
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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

  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/less"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../public/js/scrypt.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}

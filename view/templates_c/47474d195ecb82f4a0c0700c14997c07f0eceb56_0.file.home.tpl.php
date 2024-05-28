<?php
/* Smarty version 4.3.0, created on 2023-04-03 13:22:52
  from '/home/users/anikesh.sahai/www/html/php/practice/job/template/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642a85d4ddd8f2_00186657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47474d195ecb82f4a0c0700c14997c07f0eceb56' => 
    array (
      0 => '/home/users/anikesh.sahai/www/html/php/practice/job/template/home.tpl',
      1 => 1680508361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642a85d4ddd8f2_00186657 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                  <input class="form-control me-4" type="search" id="search_inp" placeholder="Search for job here..." aria-label="Search" id="text">
                  <button class="btn btn-outline-success px-4" onclick="search()" type="submit">Search for job</button>
            </div>
            

            <div class="bar_result job-post container my-4 p-4">

            </div>  


            <div class="employer job-post container my-4 p-4">
                    <center><h2 class="card-title mb-4" >My Posted Jobs</h2></center>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empjob']->value, 'post');
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
" ><?php echo $_smarty_tpl->tpl_vars['post']->value['job_title'];?>
</a></h5>
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

            <div class="job-post container my-4 p-4">
              <center><h2 class="card-title mb-4" >Jobs</h2></center>
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
" ><?php echo $_smarty_tpl->tpl_vars['post']->value['job_title'];?>
</a></h5>
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
        
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/less" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
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

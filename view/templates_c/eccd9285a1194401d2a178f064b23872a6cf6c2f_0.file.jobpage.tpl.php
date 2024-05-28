<?php
/* Smarty version 4.3.0, created on 2023-03-31 20:55:10
  from '/home/users/anikesh.sahai/www/html/php/practice/job/template/jobpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6426fb562c90a2_17810067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eccd9285a1194401d2a178f064b23872a6cf6c2f' => 
    array (
      0 => '/home/users/anikesh.sahai/www/html/php/practice/job/template/jobpage.tpl',
      1 => 1680276260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6426fb562c90a2_17810067 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet/less" type="text/css" href="../public/less/style.less" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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

    
    <div class="post">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                    <div class="card my-5">
                        <?php if ($_smarty_tpl->tpl_vars['img']->value == NULL) {?>
                            <img src="../public/img/default-image.jpg" class="card-img-top" alt="Job tumbhnail img">
                        <?php } else { ?>
                            <img src="../public/img/<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" class="card-img-top" alt="Job tumbhnail img">
                        <?php }?>
                        <div class="card-body">
                        <h5 class="card-title">Job ID: <?php echo $_smarty_tpl->tpl_vars['job_id']->value;?>
</h5>
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['job_title']->value;?>
</h5>
                        <h6 class="card-subtitle my-2 text-muted"><b>Posted on:</b> <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h6>
                        <h6 class="card-subtitle my-2 text-muted"><b>Relative Tags:</b> <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</h6>
                        <p class="card-text"><b><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</b></p>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['job_desc']->value;?>
</p>
                        <p class="card-text"><b>Contact Email:</b> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value == "Employee") {?>
                            <a href="apply.php?id=<?php echo $_smarty_tpl->tpl_vars['job_id']->value;?>
" class="btn btn-primary">Apply</a>
                        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value == "Employer") {?>
                            <a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['job_id']->value;?>
" class="btn btn-primary">Delete</a>
                        <?php }?>    
                        
                        </div>
                    </div>
            </div>
            <div class="col-sm-4"></div>
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
</body>

</html><?php }
}

<?php
/* Smarty version 4.3.0, created on 2023-04-05 13:26:34
  from '/home/users/anikesh.sahai/www/html/php/practice/phpcore/job/template/signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_642d29b2ad2585_52743769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e017af77ffa558ae90f1d01ec0fa7ea8f89392c7' => 
    array (
      0 => '/home/users/anikesh.sahai/www/html/php/practice/phpcore/job/template/signup.tpl',
      1 => 1680681390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d29b2ad2585_52743769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet/less" type="text/css" href="../public/less/style.less" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
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
        <?php if ($_smarty_tpl->tpl_vars['valid']->value == "true") {?>
            <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 alert-dismissible fade show" role="alert">
                <strong><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
.</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php }?>
        

        
        <div class="post">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="container p-4">
                        <center><h3><?php echo $_smarty_tpl->tpl_vars['post']->value;?>
</h3></center>
                        <form action="signup.php" method="post">
                            <div class="mb-3">
                              <label for="email" class="form-label">Email:</label>
                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                              <label for="pwd" class="form-label">Password</label>
                              <input type="password" class="form-control" id="pwd" name="pwd" required>
                            </div>
                            <div class="mb-3">
                                <label for="cpwd" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cpwd" name="cpwd" required>
                            </div>
                            <select class="form-select" name="option" aria-label="Default select example" required>
                                <option selected>Please Select one</option>
                                <option>Employer</option>
                                <option>Employee</option>
                            </select><br>
                            <p id="demo"></p>
                            <button type="submit" id="signup" class="btn btn-warning">SignUp Now</button>
                        </form>
                        <a href="login.php"><button class="btn btn-warning mt-3">LogIn</button></a>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>

        </div>

        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"><?php echo '</script'; ?>
>        
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/less" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../public/js/scrypt.js"><?php echo '</script'; ?>
>
        
  </body>
</html><?php }
}

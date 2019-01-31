
<?php 
session_start();
require_once('controller.php');
$control=new Controller;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
              integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
                integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
                integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="view.css"/>
        <?php include('header.php');?>
    </head>
    <header><?php require('menu.php'); ?></header>
    <?php
if ($control->is_user_connected())
    {
?><div class="container-fluid">
        <div class="row">
        <h1>Déconnexion </h1>
    </div>
        <div class="row">
        <form action='index_view.php' method='POST'/>
            <div class="form-group col-12">
        <input type='submit' name='deconnec' value='Déconnexion' class="btn-dark form-control"
               style="width: 150px;height: 30px;"/>
            </div>
            <div class="form-group col-12">
        <input type='hidden' name='deco' class="btn-dark"  value='Déconnexion' class="form-control" /></form>
            </div>
        </div>
    </div><?php
    }
else
    {
?><div class="container-fluid">
        <div class="row">
        
       <h1>Connexion</h1>
    </div>
        <div class="row">
        <form method='POST'/>
            <div class="form-group col-12">
        <input type="text" name="name_connect" placeholder='Nom'class="form-control"/>
            </div>
                <div class="form-group col-12">
        <input type="password" name="password_connect" placeholder='Mot de pass' class="form-control"/>
                </div>
            <div class="row">
                    <div class="form-group">
        <input type='submit' name='submit_connect' value='Envoyer' class="btn-dark form-control"
               style="width: 100px;height: 30px;"/>
                    </div>
            </div>
            </form>
        </div>
        </div>
        <?php 
    }
?>
    </body>
    <footer>
        <?php require('footer.php');?>
    </footer>
</html>
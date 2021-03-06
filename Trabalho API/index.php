<?php 
include_once('youtube.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consumindo API</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="mx-auto card">
                <div class="row">               
                    <div class="col-md-12">
                        <h1 class="text-center my-3">Mine YouTube</h1>
                        <form name="frmYoutube" method="post" action="index.php" class="mx-5">
                            <div class="input-group">
                                <input type="text" placeholder="Pesquisar" class="form-control" name="search" value="" autocomplete="off">                     
                                <div class="input-group-append">
                                    <input type="submit" value="Pesquisar" class="btn btn-outline-dark">
                                    <input type="number" id="maxResults" class="form-control" name="maxResults" min="1" max="50" step="1" value="15">                             
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 ml-3">
                        <?=exibirVideos($videos)?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
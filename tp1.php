<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3 class="card-texte">document
                </h3>
                <div class="card-body">
                    <form action="tp1.php" method="POST">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text"name="nombre" placeholder="entrez un nombre">
                                </div>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="form-group">
                                    <label for="%">%</label>
                                    <div style="text-align:centre;margin-left=500px;">
                                        <p style="margin-top:50px;">  
                                            <?php if(isset($_POST['nombre'],$_POST['pour'])){
                                                  $nombre=htmlspecialchars($_POST['nombre']);
                                                  $pour=htmlspecialchars($_POST['pour']);
                                                  $res=($nombre*$pour)/100;
                                                  echo '<p>' . $nombre . "% de " .$pour. ' est ' .$res.'</p>';
                                                }
                                              ?>
                                         </p>
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombre">de</label>
                                    <input type="text"name="pour" placeholder="le nombre a calculer">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" style="margin-left:500px;">calculer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
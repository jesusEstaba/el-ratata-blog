<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Ratata | Tu Blog de noticias de confianza ;D</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body class="bg-dark">
    
    <div class="bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-light">
                        El Ra<i>tata</i>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-md-12">
            <div class="card text-center">
                <div class="card-body p-0">
                    <img src="imagenes/principal.jpg" height="100" class="img-fluid" alt="noticia principal">
                </div>
                <div class="card-footer">
                    <h1 class="card-title">Apple la embarro con lo de los teclados</h1>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?php foreach([1,2,3] as $articulo):?>
                    <div class="card mb-2">
                        <img class="card-img-top" src="imagenes/sec.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tiembla google translator</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6">
                <?php foreach([1,2,3,4,5,'hola'] as $articulo):?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('Css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}"> -->
    <!-- <script src="{{ asset('Js/bootstrap.min.js') }}"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid bg-success p-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class=" test-white">Enregistrement d'une Maison :</h1>
                        <p class="lead test-white"></p>
                    </div>
                    <div class="col-md-6">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                <!-- @csrf -->
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="nom">Localité</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="prenom">Prix:</label>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="ville">Caractéristiques:</label>
                            <input type="text" name="ville" id="ville" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="formation">Photo:</label>
                            <input type="text" name="formation" id="formation" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="etablissement">Contrat:</label>
                            <input type="text" name="etablissement" id="etablissement" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-40 float-right">Créer</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
                    </div>
    </div>
</body>
</html>

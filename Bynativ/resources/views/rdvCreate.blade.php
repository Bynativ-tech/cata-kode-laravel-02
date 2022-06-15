<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card mt-5" style="width: 30rem;">
            <div class="card-body ">
                <a class="btn btn-primary" href="/rdv" role="button">Liste des RDV</a>
                <hr>
                <h5 class="card-title">Création d'un RDV</h5>

                @if($errors->any())
                          <div class="alert alert-danger" role="alert">

                <ul>
                    @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                    @endforeach
                </ul>
                </div>
                @endif
                <form action="/rdv" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" value="{{old('nom')}}" name="nom" >
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="text" class="form-control" value="{{old('telephone')}}" name="telephone" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" value="{{old('email')}}"name="email" $>
                    </div>
                    <div class="form-group">
                        <label for="date">Date du RDV</label>
                        <input type="date" class="form-control" value="{{old('date')}}"name="date" >
                    </div>
                    <div class="form-group">
                        <label for="heure">Heure du RDV</label>
                        <input type="time" class="form-control" value="{{old('heure')}}"name="heure" >
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" rows="3">{{old('message')}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>

            </div>
        </div>
    </div>



</body>

</html>

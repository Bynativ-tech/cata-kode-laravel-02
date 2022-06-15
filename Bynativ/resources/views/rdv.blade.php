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
        <div class="card mt-5" style="width: 60rem;">
            <div class="card-body ">
                <a class="btn btn-primary" href="/rdv/create" role="button">Créer un nouveau RDV</a>
                <hr>
                <h5 class="card-title">Liste des RDV</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                            <th scope="col">Heure</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($rdvs as $rdv)
                        <tr>
                        <th scope="row">{{$rdv->id}}</th>
                            <td>{{$rdv->nom}}</td>
                            <td>{{$rdv->telephone}}</td>
                            <td>{{$rdv->email}}</td>
                            <td>{{$rdv->date}}</td>
                            <td>{{$rdv->heure}}</td>
                            <td>{{$rdv->message}}</td>
                          <tr>
                        @endforeach

                    </tbody>
                </table>



            </div>
        </div>
    </div>



</body>

</html>

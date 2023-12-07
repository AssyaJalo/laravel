<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion_Apprenant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="contaimer text-center">
        <div class="row">
            <div class="col s12">
                <h1>Listes Des Apprenants</h1>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom:</th>
                            <th>Prenom:</th>
                            <th>Email:</th>
                            <th>Tel:</th>
                            <th>Actions:</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listesA as $apprenant)
                        <tr>
                            <td>{{  $apprenant->id }}  </td>
                            <td>{{  $apprenant->nom }}  </td>
                            <td>{{  $apprenant->prenom }} </td>
                            <td>{{  $apprenant->email }} </td>
                            <td>{{  $apprenant->tel }} </td>

                            <td>
                                <button href="#" class="btn btn-warning">Update</button>
                                <button href="#" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
                <button href="" class="btn btn-primary">Add_Apprenant</button>

          </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

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
                <h1>Listes_Des_Formations</h1>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom:</th>
                            <th>Description:</th>
                            <th>Duree:</th>
                            <th>Prix:</th>
                            <th>Actions:</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listesF as $formation)
                        <tr>
                            <td>{{   $formation->id }}  </td>
                            <td>{{   $formation->nom }}  </td>
                            <td>{{   $formation->description }} </td>
                            <td>{{   $formation->duree }} </td>
                            <td>{{   $formation->prix }} </td>

                            <td>
                                <button href="#" class="btn btn-warning">Update</button>
                                <button href="#" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
                <button href="" class="btn btn-primary">Add_Formation</button>

          </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

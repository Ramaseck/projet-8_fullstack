<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
   <div class="container text-center">
       <div class="row">
           <div class="col s12">
           <H1>CRUD</H1>
            <a href="/ajout" class="btn btn-primary">Ajoutez un etudiant</a> <br>  <br>
            @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        @foreach($etudiants as $etudiant)
                            <th scope="row">{{ $etudiant->id }}</th>
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom }}</td>
                            <td>{{ $etudiant->classe }}</td>
                            <td>
                                <a href="/update-etudiant/{{ $etudiant->id}}" class=" btn btn-info">update</a>
                                <a href="/delete-etudiant/{{ $etudiant->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        <!--
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>
                                <a href="#" class=" btn btn-info">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>-->
                        
                    </tbody>
            </table>
            {{ $etudiants->links()}}
       </div>
   </div> 
</div>
    
</body>
</html>
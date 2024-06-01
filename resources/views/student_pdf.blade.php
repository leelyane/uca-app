<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h1>Student Information</h1>
    <p><strong>Faculté:</strong> {{ $student->faculte }}</p>
    <p><strong>Nom:</strong> {{ $student->nom }}</p>
    <p><strong>Prénom:</strong> {{ $student->prenom }}</p>
    <p><strong>Code:</strong> {{ $student->code }}</p>
    <p><strong>CNE:</strong> {{ $student->cne }}</p>

    <h3><strong>*Garder ce code, vous l'aurez besoin*</strong></h3>
    <p>{{ $student->user_id }}</p>
</body>
</html>

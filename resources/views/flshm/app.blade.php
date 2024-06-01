<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="shortcut icon" href="https://uca.ma:443/public/website/theme-3/img/favicon.png">
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>
    <div style="text-align: left; padding: 10px;">
        <a href="{{ route('dashboard') }}" style="display: inline-block; padding: 10px 20px; background-color: #317873; color: white; text-decoration: none; border-radius: 5px; margin-top:20px; margin-right:20px;">Retour</a>
    </div>
    <div class="page-section">
        <div class="container">
            <h1 class="text-center wow fadeInUp" style="font-size: 30px; color:black; font-weight:bold;">Remplissez ce formulaire</h1>

            @if(session('pdf_url'))
                <a href="{{ session('pdf_url') }}" class="btn btn-primary mt-3 wow zoomIn" id="download-pdf">Télécharger votre inscription</a>
            @else
                <form class="main-form" action="{{ route('storeflshm') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-5 ">
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="nom" required class="form-control" placeholder="Nom">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <label for="birthdate">Date de naissance</label>
                        <input type="date" name="birthdate" class="form-control" placeholder="Date de naissance">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <label for="sexe">Sexe</label><br>
                        <input type="radio" name="sexe" value="Homme" id="homme">
                        <label for="homme">Homme</label>
                        <input type="radio" name="sexe" value="Femme" id="femme">
                        <label for="femme">Femme</label>            
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="cni" class="form-control" placeholder="CNI">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="cne" class="form-control" placeholder="Code Massar">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="email" class="form-control" placeholder="E-mail">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="text" name="tel" class="form-control" placeholder="Téléphone">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <select name="ville" id="departement" class="custom-select">
                            <option>Ville</option>
                            <option value="Marrakech">Marrakech</option>
                            <option value="Essaouira">Essaouira</option>
                            <option value="Safi">Safi</option>
                            <option value="Kelaa de Sraghna">Kelaa de Sraghna</option>
                      </select>
                      </div>
                      <div class="col-12 py-2 wow fadeInRight">
                        <input type="file" name="photo" accept="image/*" class="form-control" >
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft" >
                        <select name="anneebac" class="custom-select">
                            <option>Année d'obtention du bac</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInUp">
                        <select name="seriebac" id="departement" class="custom-select">
                            <option>Série du bac</option>
                            <option value="Sciences éxperimentales: physiques">Sciences éxperimentales: physiques</option>
                            <option value="Sciences éxperimentales: SVT">Sciences éxperimentales: SVT</option>
                            <option value="Sciences mathématiques: A">Sciences mathématiques: A</option>
                            <option value="Sciences mathématiques: B">Sciences mathématiques: B</option>
                            <option value="Sciences économiques">Sciences économiques</option>
                            <option value="Lettres">Lettres</option>
                        </select>
                      </div>
                      <div class="col-12 py-2 wow fadeInUp">
                        <select name="filiere_id" class="custom-select">
                          @foreach ($filiere as $filieres)
                              <option value="{{$filieres->id}}">{{$filieres->name}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                    <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Soumettre</button>
                </form>
            @endif
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const downloadButton = document.getElementById("download-pdf");
            if (downloadButton) {
                downloadButton.addEventListener("click", function(event) {
                    event.preventDefault();
                    const url = downloadButton.href;
                    const link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', 'inscription_reçu2024.pdf'); // or any file name you want
                    document.body.appendChild(link);
                    link.click();
                    link.parentNode.removeChild(link);
                    window.location.href = "{{ route('dashboard') }}";
                });
            }
        });
    </script>
</body>
</html>

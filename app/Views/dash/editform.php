<!DOCTYPE html>
<html lang="en">
<head>
    <title>kita Laporin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="lap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gamja+Flower&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- HEAD -->
        <div class="mb-4">
            <p class="mt-4">Page / <span>Form</span> </p>
            <h1>Report Form</h1>
        </div>

        <!-- CARD FORM -->
        <div class="card-form">    
            <form class="form" method="post" action="">
                <div class="mb-2">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input type="text" class="form-control" id="prodi">
                </div>
                
                <div class="mb-2 mt-3">
                    <label for="fakultas" class="form-label">Fakultas</label>
                    <input type="text" class="form-control" id="fakultas">
                </div>
                <div class="row g-2 gx-4 mb-2 mt-3">
                    <div class="col-md-6">
                        <label for="Nlaporan" class="form-label">Nama Laporan</label>
                        <input type="text" class="form-control" id="Nlaporan">
                    </div>
                    <div class="mt-2 col-md-6 mt-2">
                        <label for="Jlaporan" class="form-label">Jenis Laporan</label>
                        <input type="text" class="form-control" id="Jlaporan">
                    </div>
                </div>
                <div class="mb-2 mt-4">
                    <label for="Nerima" class="form-label">Ditunjukan pada</label>
                    <input type="text" class="form-control" id="Nerima">
                </div>
                <div class="isi mt-4">
                    <label for="isian" class="form-label">Isi Laporan</label>
                    <textarea class="form-control isian-form" placeholder="0/300 WORDS" cols="30" rows="10"></textarea>
                </div>
                <div class="d-grid gap-2 mt-4 me-4 d-md-flex justify-content-md-end">
                    <button class="btn btn-danger" type="button">Cancel</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
            
            <!-- BUTTON -->
                  
                <!-- BUTTON SUBMIT  -->
                
            </div>
    </div>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
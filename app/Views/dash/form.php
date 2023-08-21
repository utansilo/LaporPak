<div class="mb-4">
    <p class="mt-4">Page / <span>Form</span> </p>
    <h1>Report Form</h1>
</div>

<!-- CARD FORM -->
<div class="card-form" enctype="multipart/form-data">    
    <form class="form" method="post" action="<?= base_url('form'); ?>">
        <div class="mb-2">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi">
        </div>
        
        <div class="mb-2 mt-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <select id="fakultas" name="fakultas" class="form-select" aria-label="Default select example">
                <option value="FIK">FIK</option>
                <option value="FES">FES</option>
                <option value="FST">FST</option>
            </select>
        </div>
        <div class="row g-2 gx-4 mb-2 mt-3">
            <div class="col-md-6">
                <label for="nlaporan" class="form-label">Nama Laporan</label>
                <input type="text" class="form-control" id="nlaporan" name="nlaporan">
            </div>
            <div class="mt-2 col-md-6 mt-2">
                <label for="jlaporan" class="form-label">Jenis Laporan</label>
                <select id="jlaporan" name="jlaporan" class="form-select" aria-label="Default select example">
                    <option value="Akademik">Akademik</option>
                    <option value="Non-Akademik">Non-Akademik</option>
                </select>
            </div>
        </div>
        <div class="mb-2 mt-4">
            <label for="nerima" class="form-label">Ditunjukan pada</label>
            <select id="nerima" name="nerima" class="form-select" aria-label="Default select example">
                <option value="Prodi">Prodi</option>
                <option value="Fakultas">Fakultas</option>
                <option value="Prodi&Fakultas">Prodi&Fakultas</option>
            </select>
        </div>
        <div class="isi mt-4">
            <label for="isian" class="form-label">Isi Laporan</label>
            <textarea class="form-control isian-form" id="isian" name="isian" placeholder="0/300 WORDS" cols="30" rows="10"></textarea>
        </div>
    

        <!-- BUTTON -->
        <!-- <div class="button mt-4">  -->
            <!-- TES Accordion -->
            <!-- <div class=" button accordion-flush mt-4" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="circle-button button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        +
                    </button>
                    <label for="Media" class="media">Media <span>(Option)</span></label>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="m-3">
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="gambar" name="gambar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
                
            <!-- BUTTON SUBMIT 
            <div class="d-grid mt-5 gap-2 d-md-flex justify-content-md-end">
                <button class="bton" type="button">Cancel</button> -->
            <button class="bton" type="submit">Submit</button>
            <!-- </div> -->
        </form>
    </div>
</div>
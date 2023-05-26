<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container" id="container_content">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-8">
                <div class="col-md-3">
                    <img src="" alt="" height="80px" width="400px">
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <h3> Coaching Form </h3>
                </div>
                
                <h5>Form ini diisi oleh karyawan setelah sesi coaching selesai lalu dibuat 2 copy dan diberikan kepada Atasan dan tim HRD (People Development)
                </h5>
                <br>
                
                <h5>Name:</h5>
                <h5>ID: </h5>
                <h5>Date: </h5>
                <br>
                <h5>1. Hal - hal yang diskusikan dalam sesi coaching tersebut adalah:</h5>
                <h5></h5>
                <br>
                <h5>2. Insight paling besar yang didapat dari sesi coaching adalah:</h5>
                <h5></h5>
                <br>
                <h5>3. Komitmen yang akan dilakukan setelah sesi coaching tersebut sampai sesi coaching selanjutnya adalah:</h5>
                <h5></h5>

                <table class="table">
                    <tbody>
                    <tr>
                            <td></td>
                            <td class="text-center"><label for="">Karyawan</label></td>
                            <td class="text-center"><label for="">Atasan</label></td>
                    </tr>
                    <tr>
                            <td></td>
                            <td><textarea name="" id="" cols="25" rows="4" class="form-control"></textarea></td>
                            <td><textarea name="" id="" cols="25" rows="4" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                            <td></td>
                            <td><label for="">Tanggal  <span id="result_date_2"></span></label></td>
                            <td><label for="">Tanggal  <span id="result_date_3"></span></label></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-outline-success btn_print" type="submit" id="submit"> Print </button>
    </div>

<?= $this->endSection('content'); ?>
<?= $this->extend('layout/template_second'); ?>
<?= $this->section('content'); ?>

    <div class="container" id="container_content">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-8">

                <div class="col-md-3">
                    <img src="<?php echo base_url(''); ?>" alt="Image" height="80px" width="400px">
                </div>

                <h3 class="text-center"> Form Coach </h3>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                    <div>
                        <label for=""> Name </label>
                        <input type="text" id="name_coach" placeholder="Name" class="form-control">
                    </div>
                    <div>
                        <label for="">ID Employee</label>
                        <input type="text" id="npk" placeholder="ID Employee" class="form-control">
                    </div>
                    <div>
                        <label for="">Date Coaching</label>
                        <input type="date" id="date_coach" placeholder="Date Coach" class="form-control">
                    </div>

                    <br>
                    <div>
                        <h5>1. Hal - hal yang diskusikan dalam sesi coaching tersebut adalah:</h5>
                        <textarea name="" id="fill_1" cols="80" rows="5" class="form-control"></textarea>
                    </div>
                    <div>
                        <h5>2. Insight paling besar yang didapat dari sesi coaching adalah:</h5>
                        <textarea name="" id="fill_2" cols="80" rows="5" class="form-control"></textarea>
                    </div>
                    <div>
                        <h5>3. Komitmen yang akan dilakukan setelah sesi coaching tersebut sampai sesi coaching selanjutnya adalah:</h5>
                        <textarea name="" id="fill_3" cols="80" rows="5" class="form-control"></textarea>
                    </div>
                    <br>
                    <table>
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">Karyawan</th>
                            <th scope="col" class="text-center">Atasan</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td><textarea name="" id="" cols="32" rows="1" class="form-control"></textarea></td>
                            <td><textarea name="" id="" cols="32" rows="1" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="date" id="date_coach" placeholder="Date Coach" class="form-control"></td>
                            <td><input type="date" id="date_coach" placeholder="Date Coach" class="form-control"></td>
                        </tr>
                    </tbody>
                    </table>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-info" onclick="window.print()" id="printPage">View</button>
                    </div>
            </div>
        </div>
    </div>

<?= $this->endSection('content'); ?>
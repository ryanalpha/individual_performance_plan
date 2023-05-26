<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


    <div class="card">
        <div class="card-body">
            <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-4">
                    <h5>Name: </h5>
                    <h5>Department:  </h5>
                    <h5>Division:  </h5>

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-5">
                    <h5>Company:  </h5>
                    <h5>Date of Review:  </h5>
                    <h5>Supervisor: </h5>
                </div>
            </div>
            </div>
        </div>
    </div>

    

    <div class="card">
        
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('/astra/one_result'); ?>" class="btn btn-primary">Add</a>
            <a href="" class="btn btn-primary"> View </a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Program</th>
                    <th>Weight</th>
                    <th>Target One Year</th>
                    <th>Target One Year Achievement</th>
                    <th>Score</th>
                    <th>Total</th>
                </tr>
            </table>

            
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

        </div>
    </div>

<?= $this->endSection('content'); ?>
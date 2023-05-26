<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Add Task</h3>
        </div>
        <div class="card-body">
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
            <form method="post" action="<?= base_url('astra/store') ?>">
                <?= csrf_field(); ?>
 
                <div class="form-group">
                    <label for="program">Program</label>
                    <input type="text" class="form-control" id="program" name="program" value="<?= old('program'); ?>">
                </div>
 
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" class="form-control" id="weight" name="weight" value="<?= old('weight') ?>" />
                </div>
 
                <div class="form-group">
                    <label for="target_mid_year">Target Mid Year</label>
                    <input type="text" class="form-control" id="target_mid_year" name="target_mid_year" value="<?= old('target_mid_year') ?>" />
                </div>
                <div class="form-group">
                    <label for="target_one_year">Target One Year</label>
                    <textarea class="form-control" name="target_one_year" id="target_one_year"><?= old('target_one_year') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="due_date">Due Date</label>
                    <input type="date" class="form-control" name="due_date" id="due_date"><?= old('due_date') ?>
                </div>
 
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-info" />
                </div>
 
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">

    <div class="card">
        <div class="card-header">
            <h3 style="text-align: center;">Individual Performance Plan</h3>
        </div>
        <div class="card-body">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-4">
                <div>
                    <label for="name_employee">Name</label>
                    <select name="name" id="name_employee">
                        <option value="Ersha Nuranjasari">Ersha Nuranjasari</option>
                        <option value="Ratri Cahyaningsih">Ratri Cahyaningsih</option>
                        <option value="Etika">Etika</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="department">Department</label>
                    <select name="department" id="department_employee">
                        <option value="HRD"> HRD </option>
                        <option value="Finance"> Finance </option>
                        <option value="Operational"> Operational </option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="division">Division</label>
                    <select name="division" id="division">
                        <option value="Administration"> Administration </option>
                        <option value="General Affair"> General Affair </option>
                        <option value="Technician"> Technician </option>
                        <option value="Accountant"> Accountant </option>
                        <option value="Legal"> Legal </option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div>
                    <label for="">Company</label>
                    <select name="company" id="company">
                        <option value="PT Century Battery Indonesia"> PT Century Battery Indonesia </option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="">Date of Review</label>
                    <input type="date" id="date_review" >
                </div>
                <br>
                <div>
                    <label for="supervisor_employee"> Supervisor </label>
                    <select name="supervisor_employee" id="supervisor_employee">
                        <option value="Ersha Nuranjasari">Ersha Nuranjasari</option>
                        <option value="Ratri Cahyaningsih">Ratri Cahyaningsih</option>
                        <option value="Etika">Etika</option>
                    </select>
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
            <a href="<?= base_url('/astra/create'); ?>" class="btn btn-primary">Add</a>
            <a href="" class="btn btn-primary"> View </a>
            <a href="<?php echo site_url('pdf/generate') ?>" class="btn btn-primary">Download</a>
            <hr />
            <table class="table table-bordered" id="myTable">
                
                <tr>
                    <th>No</th>
                    <th>Program</th>
                    <th>Weight</th>
                    <th>Target Mid Year</th>
                    <th>Target One Year</th>
                    <th>Due Date</th>
                    <th>Action</th>
                </tr>
                <?php

                $no = 1;

                foreach ($meta_task as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->program; ?></td>
                        <td><?= $row->weight; ?></td>
                        <td><?= $row->target_mid_year; ?></td>
                        <td><?= $row->target_one_year; ?></td>
                        <td><?= $row->due_date; ?></td>
                        <td>
                            <a title="Delete" href="<?= base_url("astra/delete/$row->id_task") ?>" class="btn btn-danger" onclick="return confirm('Are you sure of delete data?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

                <?php
                    $conn = new mysqli("localhost","root","","individual_performance_plan");
                    $query=mysqli_query($conn, "SELECT * FROM meta_task");
                    while ($data=mysqli_fetch_array($query)){
                        $jumlah[]=$data['weight'];
                    }
                    $jumlah_barang=array_sum($jumlah);
                ?>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td><?php echo "$jumlah_barang";?></td>
                </tr>


            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>
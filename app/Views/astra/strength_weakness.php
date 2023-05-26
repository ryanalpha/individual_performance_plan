<?= $this->extend('layout/template_second'); ?>
<?= $this->section('content'); ?>

    <h4 class="text-center"> PERFORMANCE APPRAISAL <br> Strength & Weakness </h4>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Strong Point</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center">Weak Point</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td><textarea name="" id="" cols="35" rows="2" class="form-control"></textarea></td>
                    <td></td>
                    <td><textarea name="" id="" cols="35" rows="2" class="form-control"></textarea></td>
                </tr>
            </tbody>
            <table>
                <thead>
                    <tr>
                        <td class="text-center"><label for="">Notes</label></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td><textarea name="" id="" cols="110" rows="3" class="form-control"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <table>
              <thead>
                  <tr>
                      <td class="text-center"><label for="">Approval</label></td>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                     <td><hr style="width: 855px;"></td>
                  </tr>
              </tbody>
              <thead>
                <tr>
                    <td class="text-center"><label for="">Mid Year Review</label></td>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td><hr style="width: 855px;"></td>
                  </tr>
              </tbody>
            </table>
            <table>
              <thead>
                <tr>
                    <th scope="col" class="text-center">Employee</th>
                    <th scope="col" class="text-center">Appraiser</th>
                    <th scope="col" class="text-center">Appraiser Spv</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td><textarea name="" id="" cols="23" rows="1"></textarea></td>
                    <td><textarea name="" id="" cols="23" rows="1"></textarea></td>
                    <td><textarea name="" id="" cols="23" rows="1"></textarea></td>
                </tr>
            </tbody>
            </table>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Strong Point</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center">Weak Point</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td><textarea name="" id="" cols="35" rows="2" class="form-control"></textarea></td>
                    <td></td>
                    <td><textarea name="" id="" cols="35" rows="2" class="form-control"></textarea></td>
                </tr>
            </tbody>
            <table>
                <thead>
                    <tr>
                        <td class="text-center"><label for="">Notes</label></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td><textarea name="" id="" cols="110" rows="3" class="form-control"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <table>
              <thead>
                  <tr>
                      <td class="text-center"><label for="">Approval</label></td>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                     <td><hr style="width: 855px;"></td>
                  </tr>
              </tbody>
              <thead>
                <tr>
                    <td class="text-center"><label for="">One Year Review</label></td>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td><hr style="width: 855px;"></td>
                  </tr>
              </tbody>
            </table>
            <table>
              <thead>
                <tr>
                    <th scope="col" class="text-center">Employee</th>
                    <th scope="col" class="text-center">Appraiser</th>
                    <th scope="col" class="text-center">Appraiser Spv</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td><textarea name="" id="" cols="23" rows="1"></textarea></td>
                    <td><textarea name="" id="" cols="23" rows="1"></textarea></td>
                    <td><textarea name="" id="" cols="23" rows="1"></textarea></td>
                </tr>
            </tbody>
            </table>
        </table>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-outline-info" onclick="window.print()" id="printPage"> Submit </button>
    </div>

<?= $this->endSection('content'); ?>
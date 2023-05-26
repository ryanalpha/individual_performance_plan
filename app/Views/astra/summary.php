<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-6">
                        <table class="table">
                            <thead class="bg-black">
                                <h3>PDCA & Values</h3>
                                <tr class="text-white">
                                    <th>Aspect</th>
                                    <th>Mid Year</th>
                                    <th>One Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Plan</th>
                                    <th><input type="radio" name="mid_pdca_plan" value="1" onclick="clickId(1)" id="mid_id_pdca_plan">1
                                        <input type="radio" name="mid_pdca_plan" value="2" onclick="clickId(2)" id="mid_id_pdca_plan">2
                                        <input type="radio" name="mid_pdca_plan" value="3" onclick="clickId(3)" id="mid_id_pdca_plan">3
                                        <input type="radio" name="mid_pdca_plan" value="4" onclick="clickId(4)" id="mid_id_pdca_plan">4
                                        <input type="radio" name="mid_pdca_plan" value="5" onclick="clickId(5)" id="mid_id_pdca_plan">5</th>
                                    <th><input type="radio" name="one_pdca_plan" value="1" onclick="clickIdOnePdcaPlan(1)" id="one_id_pdca_plan">1
                                        <input type="radio" name="one_pdca_plan" value="2" onclick="clickIdOnePdcaPlan(2)" id="one_id_pdca_plan">2
                                        <input type="radio" name="one_pdca_plan" value="3" onclick="clickIdOnePdcaPlan(3)" id="one_id_pdca_plan">3
                                        <input type="radio" name="one_pdca_plan" value="4" onclick="clickIdOnePdcaPlan(4)" id="one_id_pdca_plan">4
                                        <input type="radio" name="one_pdca_plan" value="5" onclick="clickIdOnePdcaPlan(5)" id="one_id_pdca_plan">5</th>
                                </tr>
                                <tr>
                                    <th>Do</th>
                                    <th><input type="radio" name="mid_pdca_do" value="1" onclick="clickIdMidPdcaDo(1)" id="mid_id_pdca_do">1
                                        <input type="radio" name="mid_pdca_do" value="2" onclick="clickIdMidPdcaDo(2)" id="mid_id_pdca_do">2
                                        <input type="radio" name="mid_pdca_do" value="3" onclick="clickIdMidPdcaDo(3)" id="mid_id_pdca_do">3
                                        <input type="radio" name="mid_pdca_do" value="4" onclick="clickIdMidPdcaDo(4)" id="mid_id_pdca_do">4
                                        <input type="radio" name="mid_pdca_do" value="5" onclick="clickIdMidPdcaDo(5)" id="mid_id_pdca_do">5</th>
                                    <th><input type="radio" name="one_pdca_do" value="1" onclick="clickIdOnePdcaDo(1)" id="one_id_pdca_do">1
                                        <input type="radio" name="one_pdca_do" value="2" onclick="clickIdOnePdcaDo(2)" id="one_id_pdca_do">2
                                        <input type="radio" name="one_pdca_do" value="3" onclick="clickIdOnePdcaDo(3)" id="one_id_pdca_do">3
                                        <input type="radio" name="one_pdca_do" value="4" onclick="clickIdOnePdcaDo(4)" id="one_id_pdca_do">4
                                        <input type="radio" name="one_pdca_do" value="5" onclick="clickIdOnePdcaDo(5)" id="one_id_pdca_do">5</th>
                                </tr>
                                <tr>
                                    <th>Check</th>
                                    <th><input type="radio" name="mid_pdca_check" value="1" onclick="clickIdMidPdcaCheck(1)" id="mid_id_pdca_check">1
                                        <input type="radio" name="mid_pdca_check" value="2" onclick="clickIdMidPdcaCheck(2)" id="mid_id_pdca_check">2
                                        <input type="radio" name="mid_pdca_check" value="3" onclick="clickIdMidPdcaCheck(3)" id="mid_id_pdca_check">3
                                        <input type="radio" name="mid_pdca_check" value="4" onclick="clickIdMidPdcaCheck(4)" id="mid_id_pdca_check">4
                                        <input type="radio" name="mid_pdca_check" value="5" onclick="clickIdMidPdcaCheck(5)" id="mid_id_pdca_check">5</th>
                                    <th><input type="radio" name="one_pdca_check" value="1" onclick="clickIdOnePdcaCheck(1)" id="one_id_pdca_check">1
                                        <input type="radio" name="one_pdca_check" value="2" onclick="clickIdOnePdcaCheck(2)" id="one_id_pdca_check">2
                                        <input type="radio" name="one_pdca_check" value="3" onclick="clickIdOnePdcaCheck(3)" id="one_id_pdca_check">3
                                        <input type="radio" name="one_pdca_check" value="4" onclick="clickIdOnePdcaCheck(4)" id="one_id_pdca_check">4
                                        <input type="radio" name="one_pdca_check" value="5" onclick="clickIdOnePdcaCheck(5)" id="one_id_pdca_check">5</th>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <th><input type="radio" name="mid_pdca_action" value="1" onclick="clickIdMidPdcaAction(1)" id="mid_id_pdca_action">1
                                        <input type="radio" name="mid_pdca_action" value="2" onclick="clickIdMidPdcaAction(2)" id="mid_id_pdca_action">2
                                        <input type="radio" name="mid_pdca_action" value="3" onclick="clickIdMidPdcaAction(3)" id="mid_id_pdca_action">3
                                        <input type="radio" name="mid_pdca_action" value="4" onclick="clickIdMidPdcaAction(4)" id="mid_id_pdca_action">4
                                        <input type="radio" name="mid_pdca_action" value="5" onclick="clickIdMidPdcaAction(5)" id="mid_id_pdca_action">5</th>
                                    <th><input type="radio" name="one_pdca_action" value="1" onclick="clickIdOnePdcaAction(1)" id="one_id_pdca_action">1
                                        <input type="radio" name="one_pdca_action" value="2" onclick="clickIdOnePdcaAction(2)" id="one_id_pdca_action">2
                                        <input type="radio" name="one_pdca_action" value="3" onclick="clickIdOnePdcaAction(3)" id="one_id_pdca_action">3
                                        <input type="radio" name="one_pdca_action" value="4" onclick="clickIdOnePdcaAction(4)" id="one_id_pdca_action">4
                                        <input type="radio" name="one_pdca_action" value="5" onclick="clickIdOnePdcaAction(5)" id="one_id_pdca_action">5</th>
                                </tr>
                                <tr>
                                    <th>Teamwork</th>
                                    <th><input type="radio" name="mid_pdca_team" value="1" onclick="clickIdMidPdcaTeam(1)" id="mid_id_pdca_team">1
                                        <input type="radio" name="mid_pdca_team" value="2" onclick="clickIdMidPdcaTeam(2)" id="mid_id_pdca_team">2
                                        <input type="radio" name="mid_pdca_team" value="3" onclick="clickIdMidPdcaTeam(3)" id="mid_id_pdca_team">3
                                        <input type="radio" name="mid_pdca_team" value="4" onclick="clickIdMidPdcaTeam(4)" id="mid_id_pdca_team">4
                                        <input type="radio" name="mid_pdca_team" value="5" onclick="clickIdMidPdcaTeam(5)" id="mid_id_pdca_team">5</th>
                                    <th><input type="radio" name="one_pdca_team" value="1" onclick="clickIdOnePdcaTeam(1)" id="one_id_pdca_team">1
                                        <input type="radio" name="one_pdca_team" value="2" onclick="clickIdOnePdcaTeam(2)" id="one_id_pdca_team">2
                                        <input type="radio" name="one_pdca_team" value="3" onclick="clickIdOnePdcaTeam(3)" id="one_id_pdca_team">3
                                        <input type="radio" name="one_pdca_team" value="4" onclick="clickIdOnePdcaTeam(4)" id="one_id_pdca_team">4
                                        <input type="radio" name="one_pdca_team" value="5" onclick="clickIdOnePdcaTeam(5)" id="one_id_pdca_team">5</th>
                                </tr>
                                <tr>
                                    <th>Customer Focus</th>
                                    <th><input type="radio" name="mid_pdca_cust" value="1" onclick="clickIdMidPdcaCust(1)" id="mid_id_pdca_cust">1
                                        <input type="radio" name="mid_pdca_cust" value="2" onclick="clickIdMidPdcaCust(2)" id="mid_id_pdca_cust">2
                                        <input type="radio" name="mid_pdca_cust" value="3" onclick="clickIdMidPdcaCust(3)" id="mid_id_pdca_cust">3
                                        <input type="radio" name="mid_pdca_cust" value="4" onclick="clickIdMidPdcaCust(4)" id="mid_id_pdca_cust">4
                                        <input type="radio" name="mid_pdca_cust" value="5" onclick="clickIdMidPdcaCust(5)" id="mid_id_pdca_cust">5</th>
                                    <th><input type="radio" name="one_pdca_cust" value="1" onclick="clickIdOnePdcaCust(1)" id="one_id_pdca_cust">1
                                        <input type="radio" name="one_pdca_cust" value="2" onclick="clickIdOnePdcaCust(2)" id="one_id_pdca_cust">2
                                        <input type="radio" name="one_pdca_cust" value="3" onclick="clickIdOnePdcaCust(3)" id="one_id_pdca_cust">3
                                        <input type="radio" name="one_pdca_cust" value="4" onclick="clickIdOnePdcaCust(4)" id="one_id_pdca_cust">4
                                        <input type="radio" name="one_pdca_cust" value="5" onclick="clickIdOnePdcaCust(5)" id="one_id_pdca_cust">5</th>
                                </tr>
                                <tr>
                                    <th>Passion for Excellence</th>
                                    <th><input type="radio" name="mid_pdca_pass" value="1" onclick="clickIdMidPdcaPass(1)" id="mid_id_pdca_pass">1
                                        <input type="radio" name="mid_pdca_pass" value="2" onclick="clickIdMidPdcaPass(2)" id="mid_id_pdca_pass">2
                                        <input type="radio" name="mid_pdca_pass" value="3" onclick="clickIdMidPdcaPass(3)" id="mid_id_pdca_pass">3
                                        <input type="radio" name="mid_pdca_pass" value="4" onclick="clickIdMidPdcaPass(4)" id="mid_id_pdca_pass">4
                                        <input type="radio" name="mid_pdca_pass" value="5" onclick="clickIdMidPdcaPass(5)" id="mid_id_pdca_pass">5</th>
                                    <th><input type="radio" name="one_pdca_pass" value="1" onclick="clickIdOnePdcaPass(1)" id="one_id_pdca_pass">1
                                        <input type="radio" name="one_pdca_pass" value="2" onclick="clickIdOnePdcaPass(2)" id="one_id_pdca_pass">2
                                        <input type="radio" name="one_pdca_pass" value="3" onclick="clickIdOnePdcaPass(3)" id="one_id_pdca_pass">3
                                        <input type="radio" name="one_pdca_pass" value="4" onclick="clickIdOnePdcaPass(4)" id="one_id_pdca_pass">4
                                        <input type="radio" name="one_pdca_pass" value="5" onclick="clickIdOnePdcaPass(5)" id="one_id_pdca_pass">5</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th><button class="form-control"> Avg Mid Year</button></th>
                                    <th><button class="form-control"> One Mid Year</button></th>
                                </tr>
                                <tr>
                                    <th>Average</th>
                                    <th><h5 id="avg_pdca_mid"></h5></th>
                                    <th><h5 id="avg_pdca_one"></h5></th>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <div class="col-md-6">
                        <table class="table">
                            <thead class="bg-black">
                                <h3>People Management</h3>
                                <tr class="text-white">
                                    <th>Aspect</th>
                                    <th>Mid Year</th>
                                    <th>One Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Getting Commitment on IPP</th>
                                    <th>
                                        <input type="text" class="form-control" id="program" name="program" value="<?= old('program'); ?>">
                                    </th>
                                    <th><input type="radio" name="one_pm_ipp" value="1" onclick="clickIdOnePMIPP(1)" id="one_id_pm_ipp">1
                                        <input type="radio" name="one_pm_ipp" value="2" onclick="clickIdOnePMIPP(2)" id="one_id_pm_ipp">2
                                        <input type="radio" name="one_pm_ipp" value="3" onclick="clickIdOnePMIPP(3)" id="one_id_pm_ipp">3
                                        <input type="radio" name="one_pm_ipp" value="4" onclick="clickIdOnePMIPP(4)" id="one_id_pm_ipp">4
                                        <input type="radio" name="one_pm_ipp" value="5" onclick="clickIdOnePMIPP(5)" id="one_id_pm_ipp">5</th>
                                </tr>
                                <tr>
                                    <th>Delegating</th>
                                    <th><input type="text" class="form-control" id="program" name="program" value="<?= old('program'); ?>"></th>
                                    <th><input type="radio" name="one_pm_del" value="1" onclick="clickIdOnePMDel(1)" id="one_id_pm_del">1
                                        <input type="radio" name="one_pm_del" value="2" onclick="clickIdOnePMDel(2)" id="one_id_pm_del">2
                                        <input type="radio" name="one_pm_del" value="3" onclick="clickIdOnePMDel(3)" id="one_id_pm_del">3
                                        <input type="radio" name="one_pm_del" value="4" onclick="clickIdOnePMDel(4)" id="one_id_pm_del">4
                                        <input type="radio" name="one_pm_del" value="5" onclick="clickIdOnePMDel(5)" id="one_id_pm_del">5</th>
                                </tr>
                                <tr>
                                    <th>Coaching & Counseling</th>
                                    <th><input type="text" class="form-control" id="program" name="program" value="<?= old('program'); ?>"></th>
                                    <th><input type="radio" name="one_pm_coach" value="1" onclick="clickIdOnePMCoach(1)" id="one_id_pm_coach">1
                                        <input type="radio" name="one_pm_coach" value="2" onclick="clickIdOnePMCoach(2)" id="one_id_pm_coach">2
                                        <input type="radio" name="one_pm_coach" value="3" onclick="clickIdOnePMCoach(3)" id="one_id_pm_coach">3
                                        <input type="radio" name="one_pm_coach" value="4" onclick="clickIdOnePMCoach(4)" id="one_id_pm_coach">4
                                        <input type="radio" name="one_pm_coach" value="5" onclick="clickIdOnePMCoach(5)" id="one_id_pm_coach">5</th>
                                </tr>
                                <tr>
                                    <th>Develeoping Subordinate</th>
                                    <th><input type="text" class="form-control" id="program" name="program" value="<?= old('program'); ?>"></th>
                                    <th><input type="radio" name="one_pm_dev" value="1" onclick="clickIdOnePMDev(1)" id="one_id_pm_dev">1
                                        <input type="radio" name="one_pm_dev" value="2" onclick="clickIdOnePMDev(2)" id="one_id_pm_dev">2
                                        <input type="radio" name="one_pm_dev" value="3" onclick="clickIdOnePMDev(3)" id="one_id_pm_dev">3
                                        <input type="radio" name="one_pm_dev" value="4" onclick="clickIdOnePMDev(4)" id="one_id_pm_dev">4
                                        <input type="radio" name="one_pm_dev" value="5" onclick="clickIdOnePMDev(5)" id="one_id_pm_dev">5</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th><button class="form-control">Avg Mid Year</button></th>
                                    <th><button class="form-control">Avg One Year</button></th>
                                </tr>
                                <tr>
                                    <th>Average</th>
                                    <th></th>
                                    <th><h5 id="avg_mgmt_one"></h5></th>
                                </tr>
                            </tbody>
                        </table>
                </div>       
            </div>
    </div>

    <div class="control text-center">
        <h3> Level Position </h3>
        <label class="radio">
            <input type="radio" name="level" id="level_position_1" result="50" pdca="40" people_mgmt="10">
            IV A-D
        </label>
        <label class="radio">
            <input type="radio" name="level" id="level_position_2" result="50" pdca="35" people_mgmt="15">
            IV E-F
        </label>
        <label class="radio">
            <input type="radio" name="level" id="level_position_3" result="50" pdca="30" people_mgmt="20">
            V
        </label>
        <label class="radio">
            <input type="radio" name="level" id="level_position_4" result="50" pdca="25" people_mgmt="25">
            VI
        </label>
    </div>

    <div class="container">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-5">
                <table class="table">
                    <thead class="bg-black">
                        <h3>Mid Year Review</h3>
                        <tr class="text-white">
                            <th>Criteria</th>
                            <th>Score</th>
                            <th>Bobot</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Result</th>
                            <th></th>
                            <th><h5 id="display_1"></h5></th>
                            <th><h5 id="total_1"></h5></th>
                        </tr>
                        <tr>
                            <th>PDCA & Values</th>
                            <th><h5 id="avg_pdca_mid_2"></h5></th>
                            <th><h5 id="display_2"></h5></th>
                            <th><h2 id="total_2"></h2></th>
                        </tr>
                        <tr>
                            <th>People Management</th>
                            <th><h5 id="avg_mgmt_mid_2"></h5></th>
                            <th><h5 id="display_3"></h5></th>
                            <th><h5 id="total_3"></h5></th>
                        </tr>
                        <tr>
                            <th>Total All</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Grade</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">
                
            </div>
            <div class="col-md-5">
                <table class="table">
                    <thead class="bg-black">
                        <h3>One Year Review</h3>
                        <tr class="text-white">
                            <th>Criteria</th>
                            <th>Score</th>
                            <th>Bobot</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Result</th>
                            <th></th>
                            <th><h5 id="dis_1"></h5></th>
                            <th><h5 id="tot_1"></h5></th>
                        </tr>
                        <tr>
                            <th>PDCA & Values</th>
                            <th><h5 id="avg_pdca_one_2"></h5></th>
                            <th><h5 id="dis_2"></h5></th>
                            <th><h5 id="tot_2"></h5></th>
                        </tr>
                        <tr>
                            <th>People Management</th>
                            <th><h5 id="avg_mgmt_one_2"></h5></th>
                            <th><h5 id="dis_3"></h5></th>
                            <th><h5 id="tot_3"></h5></th>
                        </tr>
                        <tr>
                            <th>Total All</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Grade</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?= $this->endSection('content'); ?>
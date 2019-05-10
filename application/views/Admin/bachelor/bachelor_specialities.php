<title>İxtisaslar</title>

<?php $this->load->view('Admin/includes_for_all/admin_header'); ?>
<?php $this->load->view('Admin/includes_for_all/left_menu'); ?>


<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="display: inline-block; float: left;">
    <div class="row">

        <div class="right">
            <a href="<?php ?>">Əlavə et</a>
            <h3>İxtİsaslar</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 40%;">İxtisas kodu</th>
                    <th>İxtisas</th>
                    <th>Əməliyyat</th>
                </tr>
                </thead>
                <tbody>
                <?php

                ?>
                <tr>
                    <td><?php ?></td>
                    <td>

                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo<?php ?>"><?php  ?></button>


                        <div id="demo<?php ?>" class="collapse">
                            <?php ?>
                        </div>

                    </td>
                    <td>
                        <a href="<?php  ?>">Sil</a>
                    </td>
                </tr>
                </tbody>
                <?php
                ?>

            </table>






        </div>
    </div>
</div>



<?php $this->load->view('Admin/includes_for_all/admin_footer'); ?>











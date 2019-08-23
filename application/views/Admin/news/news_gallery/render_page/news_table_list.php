<table class="table table-striped table-bordered news_table">
    <thead>
    <tr>
        <th scope="col">Şəkillər</th>
        <th scope="col">Vaxt</th>
        <th scope="col">Əməliyyat</th>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($photos as $photo) {
        ?>

        <tr>
            <th>
                <img style="width: 150px;" src="<?php echo base_url('upload/news_images/gallery/'.$photo['name'])?>" alt="">
            </th>

            <th><?php echo $photo['upload_date']?></th>


            <td>
                <a href="<?php echo base_url("himalaY_xeber_gallery_sil/$news[news_id]/$photo[id]")?>" class="btn btn-primary btn-sm"
                   style="background: #DD4B39;border:0px solid #DD4B39">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </td>

        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
<!-- SECTION -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<style>
    body{
        background-image: url(<?= base_url() ?>front_assets/gp/iStock_831812130_-_SMALL.jpg);
        background-attachment: fixed;
        background-size: cover !important;
        background-position: center center !important;
    }

    .icon-home {
        color: #f05d1f;
        font-size: 1.5em;
        font-weight: 700;
        vertical-align: middle;
    }

    .box-home {
        background-color: #444;
        border-radius: 30px;
        background: rgba(250, 250, 250, 0.8);
        max-width: 250px;
        min-width: 250px;
        min-height: 150px;
        max-height: 150px;
        padding: 15px;
    }

</style>
<section class="parallax" style="top: 0; padding-top: 20px;">
    <div class="container container-fullscreen">
        <div class="text-middle">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center m-t-0" style="font-size: xx-large;color: #fff;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                        Event Sponsors
                    </div>
                </div>
                <?php
                if (isset($all_sponsor) && !empty($all_sponsor)) {
                    foreach ($all_sponsor as $val) {
                        ?>
                        <?php if ($val->company_name == "Gravity Productions") { ?>
                            <div class="col-md-12 m-t-30 gravity-productions"
                                 style="text-align: -webkit-center; min-height: 350px;">
                                <div class="col-md-12 col-sm-12" style="margin-bottom:40px;" >
                                    <a class="icon-home" href="<?= base_url() ?>sponsor/view/<?= $val->sponsors_id ?>">
                                        <div class="col-lg box-home text-center" style="max-width:500px!important;max-height:800px!important">
                                            <img src="<?= base_url() ?>uploads/sponsors/<?= $val->sponsors_logo ?>"
                                                 alt="welcome" style="max-width: 300px">
                                            <h2><?= $val->company_name ?></h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                    }
                }
                ?>
                <div class="col-md-12 m-t-30" style="text-align: -webkit-center; min-height: 500px;">
                    <?php
                    if (isset($all_sponsor) && !empty($all_sponsor)) {
                        foreach ($all_sponsor as $val) {
                            ?>
                            <?php if($val->company_name!=="Gravity Productions") {?>
                            <div class="col-md-4 col-sm-12" style="margin-bottom:40px;">
                                <a class="icon-home" href="<?= base_url() ?>sponsor/view/<?= $val->sponsors_id ?>"> 
                                    <div class="col-lg box-home text-center">
                                        <img src="<?= base_url() ?>uploads/sponsors/<?= $val->sponsors_logo ?>" alt="welcome" style="max-width: 100px">
                                        <h4><?= $val->company_name ?></h4>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                            <?php
                        }
                    }
                    ?>
                </div> 
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        var page_link = $(location).attr('href');
        var user_id = <?= $this->session->userdata("cid") ?>;
        var page_name = "Sponsor";
        $.ajax({
            url: "<?= base_url() ?>home/add_user_activity",
            type: "post",
            data: {'user_id': user_id, 'page_name': page_name, 'page_link': page_link},
            dataType: "json",
            success: function (data) {
            }
        });
    });
</script>

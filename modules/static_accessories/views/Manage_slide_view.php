<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    $is_list_view = $state == 'list' || $state == 'success';
    $config_suffix_list = array('');
    $label_suffix_list = array('');
    foreach($slug_list as $slug){
        $config_suffix_list[] = '_'. $slug;
        $label_suffix_list[] = ' For "'. ucwords($slug).'" Slug';
    }
?>

<style type="text/css">
    a.image-thumbnail img{
        max-width:200px;
    }
    #tab-content{
        padding-top:20px;
    }
</style>

<?php if($is_list_view){ ?>
    <div class="tabbable" id="tab-widget">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab"><i class="glyphicon glyphicon-picture"></i> Slides</a></li>
            <li><a href="#tab2" data-toggle="tab"><i class="glyphicon glyphicon-cog"></i> Configurations</a></li>
        </ul>
    </div>
    <div id="tab-content" class="tab-content col-md-12">
        <div class="tab-pane active" id="tab1">
<?php } ?>

<!-- This part will be shown no matter this is list view or not -->
<?php echo $output; ?>

<?php if($is_list_view){ ?>
        </div>
        <div class="tab-pane" id="tab2">
            <form method="post" class="form form-horizontal">
                <?php
                for($i=0; $i<count($config_suffix_list); $i++){
                    $config_suffix = $config_suffix_list[$i];
                    $label_suffix = $label_suffix_list[$i];
                    if($i == 0){
                        echo '<h4>Default</h4>';
                    }else{
                        echo '<h4>'.ucwords($slug_list[$i-1]).' Slug</h4>';
                    }
                ?>
                    <div class="form-group">
                        <label class="control-label col-md-4">Slideshow Height <?php echo $label_suffix; ?> (px) </label>
                        <div class="controls col-md-8">
                            <input class="form-control" name="static_accessories_slide_height<?php echo $config_suffix; ?>"
                                value="<?php echo $config['static_accessories_slide_height'.$config_suffix]; ?>" />
                            <p class="help-block">Height in pixel or left it blank</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Parallax <?php echo $label_suffix; ?> </label>
                        <div class="controls col-md-8">
                            <select class="form-control" name="static_accessories_slide_parallax<?php echo $config_suffix; ?>">
                            <?php
                                $options = array('TRUE' => 'True', 'FALSE' => 'False');
                                foreach($options as $key=>$value){
                                    $selected = $config['static_accessories_slide_parallax'.$config_suffix] == $key? 'selected' : '';
                                    echo '<option '.$selected.' value="'.$key.'">'.$value.'</option>';
                                }
                            ?>
                            </select>
                            <p class="help-block">True for parallax</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Hide on Smallscreen <?php echo $label_suffix; ?> </label>
                        <div class="controls col-md-8">
                            <select class="form-control" name="static_accessories_slide_hide_on_smallscreen<?php echo $config_suffix; ?>">
                            <?php
                                $options = array('TRUE' => 'True', 'FALSE' => 'False');
                                foreach($options as $key=>$value){
                                    $selected = $config['static_accessories_slide_hide_on_smallscreen'.$config_suffix] == $key? 'selected' : '';
                                    echo '<option '.$selected.' value="'.$key.'">'.$value.'</option>';
                                }
                            ?>
                            </select>
                            <p class="help-block">True for parallax</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Image Size <?php echo $label_suffix; ?> </label>
                        <div class="controls col-md-8">
                            <input class="form-control" name="static_accessories_slide_image_size<?php echo $config_suffix; ?>"
                                value="<?php echo $config['static_accessories_slide_image_size'.$config_suffix]; ?>" />
                            <p class="help-block">Image size (e.g: "cover", "contain", "auto", "50%")</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Image Top <?php echo $label_suffix; ?> </label>
                        <div class="controls col-md-8">
                            <input class="form-control" name="static_accessories_slide_image_top<?php echo $config_suffix; ?>"
                                value="<?php echo $config['static_accessories_slide_image_top'.$config_suffix]; ?>" />
                            <p class="help-block">Image top in pixel or left it blank</p>
                        </div>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <div class="controls col-md-12">
                        <button name="apply" class="btn btn-primary">Save Configuration</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php }?>

<script type="text/javascript">

    // This function will add checkboxes and "Delete selected" button.
    add_delete_all_feature(
        '{{ MODULE_SITE_URL }}Manage_slide/delete_selection', // url
        '{{ language:Delete Selected }}', // button caption
        '{{ language:Selected row deleted }}' // notification caption
    );

    $(document).ajaxComplete(function(){
        // TODO: Put your custom code here
    });

    $(document).ready(function(){
        // TODO: Put your custom code here
    });
</script>

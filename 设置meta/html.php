<div class="wrap">
<h2>Meta关键字设置</h2>

<form method="post" action="options.php">
    <?php settings_fields('myoption-group'); ?>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">关键字:</th>
            <td>
                <input type="text" name="keyword" size="100" 
                value="<?php echo get_option('keyword');?>"></td>
        </tr>

        <tr valign="top">
            <th scope="row">描述</th>
            <td>
                <input type="text" name="des" size="100" 
                value="<?php echo get_option('des');?>">
            </td>


        </tr>
    </table>
    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('保存设置')?>">
    </p>

</form>

</div>
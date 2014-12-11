</label><input type="text" class="form-control" id="sector_id" name="sector_id" /><br /></div><!-- /.form-group -->
<select class="form-control" id="sector_id" name="sector_id" />
<?php foreach($sectores as $sector):?>
<option value="<?php echo $sector["sector_id"]?>"><?php echo $sector["sector_name"];?></option>
<?php endforeach;?>
</select><br /><br />
<div role="tabpanel">
	<ul id="facebook-tabs" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#facebook-options" aria-controls="facebook-options" role="tab" data-toggle="tab"><?php echo icon('fa-cogs'); ?> Options</a></li>
	</ul>
	<div class="tab-content">
		<div id="facebook-options" class="tab-pane active" role="tabpanel">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="settings-fburl" class="col-sm-4 control-label"><?php echo $this->lang('link'); ?></label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="settings[fburl]" id="settings-fburl" value="<?php if(isset($data['fburl']))  echo $data['fburl'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="settings-headersize" class="col-sm-5 control-label"><?php echo $this->lang('t-header'); ?></label>
					<div class="col-sm-5">
						<form>
							<select class="form-control" name="settings[headersize]" id="settings-headersize">
								<option <?php if ($data['headersize']=='petite') echo 'selected'; ?>><?php echo $this->lang('header-petit'); ?>
								<option <?php if ($data['headersize']=='grande') echo 'selected'; ?>><?php echo $this->lang('header-grand'); ?>
							</select>
						</form>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-showposts" class="col-sm-4 control-label"><?php echo $this->lang('v-articles'); ?></label>
					<div class="col-sm-3">
						<form>
							<select class="form-control" name="settings[showposts]" id="settings-showposts">
								<option <?php if ($data['showposts']=='oui') echo 'selected'; ?>><?php echo $this->lang('articles-oui'); ?>
								<option <?php if ($data['showposts']=='non') echo 'selected'; ?>><?php echo $this->lang('articles-non'); ?>
							</select>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

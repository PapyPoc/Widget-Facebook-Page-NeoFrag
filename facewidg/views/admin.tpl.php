<div role="tabpanel">
	<ul id="facebook-tabs" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#facebook-options" aria-controls="facebook-options" role="tab" data-toggle="tab"><?php echo icon('fa-cogs'); ?> Options</a></li>
	</ul>
	<div class="tab-content">
		<div id="facebook-options" class="tab-pane active" role="tabpanel">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('link'); ?></label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="settings[fb-url]" id="fb-url" placeholder="https://www.facebook.com/PapyPoc/" value="<?php if(isset($data['fb-url']))  echo $data['fb-url'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('t-header'); ?></label>
					<div class="col-sm-5">
							<SELECT class="form-control" name="settings[header-taille]" id="header-taille">
								<OPTION value="1" <?php if ($data['header-taille'] == '1') echo ' selected="selected"'; ?>><?php echo $this->lang('header-grand'); ?></OPTION>
								<OPTION value="0" <?php if ($data['header-taille'] == '0') echo ' selected="selected"'; ?>><?php echo $this->lang('header-petit'); ?></OPTION>
							</SELECT>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('v-articles'); ?></label>
					<div class="col-sm-5">
							<SELECT class="form-control" name="settings[voir-tous]" id="voir-tous">
								<OPTION value="1" <?php if ($data['voir-tous'] == '1') echo ' selected="selected"'; ?>><?php echo $this->lang('oui'); ?></OPTION>
								<OPTION value="0" <?php if ($data['voir-tous'] == '0') echo ' selected="selected"'; ?>><?php echo $this->lang('non'); ?></OPTION>
							</SELECT>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('v-facepile'); ?></label>
					<div class="col-sm-5">
						<FORM>
							<SELECT class="form-control" name="settings[voir-aime]" id="voir-aime">
								<OPTION value="1" <?php if ($data['voir-aime'] == '1') echo ' selected="selected"'; ?>><?php echo $this->lang('oui'); ?></OPTION>
								<OPTION value="0" <?php if ($data['voir-aime'] == '0') echo ' selected="selected"'; ?>><?php echo $this->lang('non'); ?></OPTION>
							</SELECT>
						</FORM>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('hauteur'); ?></label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="settings[hauteur]" id="hauteur" placeholder="maxi: 500" value="<?php if(isset($data['hauteur']))  echo $data['hauteur'];?>" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div role="tabpanel">
	<ul id="facebook-tabs" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#facebook-options" aria-controls="facebook-options" role="tab" data-toggle="tab"><?php echo icon('fa-cogs'); ?> Options</a></li>
	</ul>
	<div class="tab-content">
		<div id="facebook-options" class="tab-pane active" role="tabpanel">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('link'); ?></label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="settings[fb-url]" id="settings-fb-url" value="<?php if(isset($data['fb-url']))  echo $data['fb-url'];?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('t-header'); ?></label>
					<div class="col-sm-5">
						<FORM>
							<SELECT class="form-control" name="settings[header-taille]" id="settings-header-taille">
								<OPTION value="0" <?php if ($data['header-taille'] == '0') echo 'selected'; ?>><?php echo $this->lang('header-petit'); ?></OPTION>
								<OPTION value="1" <?php if ($data['header-taille'] == '1') echo 'selected'; ?>><?php echo $this->lang('header-grand'); ?></OPTION>
							</SELECT>
						</FORM>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('v-articles'); ?></label>
					<div class="col-sm-5">
						<FORM>
							<SELECT class="form-control" name="settings[voir-posts]" id="settings-voir-posts">
								<OPTION value="1" <?php if ($data['voir-posts'] == '1') echo 'selected'; ?>><?php echo $this->lang('oui'); ?></OPTION>
								<OPTION value="0" <?php if ($data['voir-posts'] == '0') echo 'selected'; ?>><?php echo $this->lang('non'); ?></OPTION>
							</SELECT>
						</FORM>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-4 control-label"><?php echo $this->lang('v-facepile'); ?></label>
					<div class="col-sm-5">
						<FORM>
							<SELECT class="form-control" name="settings[facepile]" id="settings-facepile">
								<OPTION value="1" <?php if ($data['facepile'] == '1') echo 'selected'; ?>><?php echo $this->lang('oui'); ?></OPTION>
								<OPTION value="0" <?php if ($data['facepile'] == '0') echo 'selected'; ?>><?php echo $this->lang('non'); ?></OPTION>
							</SELECT>
						</FORM>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

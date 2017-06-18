<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=191835177981895";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center>
	<div class="fb-page"
		data-href="<?php echo $data['fb-url'];?>"
		data-small-header="<?php if($data['header-taille'] == "0") { echo 'true'; } else {  echo 'false'; } ?>"
		data-adapt-container-width="true"
		data-show-posts="<?php if($data['voir-tous'] == "1") { echo 'true'; } else {  echo 'false'; }?>"
		data-show-facepile="<?php if($data['voir-aime'] == "1") { echo 'true'; } else {  echo 'false'; }?>"
		data-height="<?php echo $data['hauteur']?>">
	</div>
</center>
<?php 
	require_once('layout/header.php');
	require_once('layout/navbar.php');
?>

	<div style="height: 60px;"></div>

	<section class="section">
		<h3 class="section-title">Achievements</h3>
		<div style="height: 40px;"></div>

		<button type="button" class="btn btn-sm btn-light mb-3" data-toggle="modal" data-target="#add-modal"><i class="icon-plus"></i> Add</button>

		<a href="https://simplelineicons.github.io/" class="d-block mb-3" target="_blank">Simple line icons website</a>

		<div class="row">
			<div class="col-12">
				<form method="POST" action="lib/script.php">
					
					<?php foreach(getData()->achievements as $key => $value): ?>
					<div class="card card-custom">
						<div class="card-header">
							<h4 style="font-size: 14px; font-weight: 600;">
								<i class="<?= $value['icon'] ?>" style="font-size: 20px;margin-right: 10px;"></i> 
								<?= $value['title'] ?></h4>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Icon</label>
								<select name="achievements_icon[]" class="form-control">
									<option selected="" value="<?= $value['icon'] ?>"><?= $value['icon'] ?></option>
									<option value="icon-user"><i class="icon-user"></i>user</option>
									<option value="icon-people">people</option>
									<option value="icon-user-female">user-female</option>
									<option value="icon-user-follow">user-follow</option>
									<option value="icon-user-following">user-following</option>
									<option value="icon-user-unfollow">user-unfollow</option>
									<option value="icon-login">login</option>
									<option value="icon-logout">logout</option>
									<option value="icon-emotsmile">emotsmile</option>
									<option value="icon-phone">phone</option>
									<option value="icon-call-end">call-end</option>
									<option value="icon-call-in">call-in</option>
									<option value="icon-call-out">call-out</option>
									<option value="icon-map">map</option>
									<option value="icon-location-pin">location-pin</option>
									<option value="icon-direction">direction</option>
									<option value="icon-directions">directions</option>
									<option value="icon-compass">compass</option>
									<option value="icon-layers">layers</option>
									<option value="icon-menu">menu</option>
									<option value="icon-list">list</option>
									<option value="icon-options-vertical">options-vertical</option>
									<option value="icon-options">options</option>
									<option value="icon-arrow-down">arrow-down</option>
									<option value="icon-arrow-left">arrow-left</option>
									<option value="icon-arrow-right">arrow-right</option>
									<option value="icon-arrow-up">arrow-up</option>
									<option value="icon-arrow-up-circle">arrow-up-circle</option>
									<option value="icon-arrow-left-circle">arrow-left-circle</option>
									<option value="icon-arrow-right-circle">arrow-right-circle</option>
									<option value="icon-arrow-down-circle">arrow-down-circle</option>
									<option value="icon-check">check</option>
									<option value="icon-clock">clock</option>
									<option value="icon-plus">plus</option>
									<option value="icon-minus">minus</option>
									<option value="icon-close">close</option>
									<option value="icon-event">event</option>
									<option value="icon-exclamation">exclamation</option>
									<option value="icon-organization">organization</option>
									<option value="icon-trophy">trophy</option>
									<option value="icon-screen-smartphone">screen-smartphone</option>
									<option value="icon-screen-desktop">screen-desktop</option>
									<option value="icon-plane">plane</option>
									<option value="icon-notebook">notebook</option>
									<option value="icon-mustache">mustache</option>
									<option value="icon-mouse">mouse</option>
									<option value="icon-magnet">magnet</option>
									<option value="icon-energy">energy</option>
									<option value="icon-disc">disc</option>
									<option value="icon-cursor">cursor</option>
									<option value="icon-cursor-move">cursor-move</option>
									<option value="icon-crop">crop</option>
									<option value="icon-chemistry">chemistry</option>
									<option value="icon-speedometer">speedometer</option>
									<option value="icon-shield">shield</option>
									<option value="icon-screen-tablet">screen-tablet</option>
									<option value="icon-magic-wand">magic-wand</option>
									<option value="icon-hourglass">hourglass</option>
									<option value="icon-graduation">graduation</option>
									<option value="icon-ghost">ghost</option>
									<option value="icon-game-controller">game-controller</option>
									<option value="icon-fire">fire</option>
									<option value="icon-eyeglass">eyeglass</option>
									<option value="icon-envelope-open">envelope-open</option>
									<option value="icon-envelope-letter">envelope-letter</option>
									<option value="icon-bell">bell</option>
									<option value="icon-badge">badge</option>
									<option value="icon-anchor">anchor</option>
									<option value="icon-wallet">wallet</option>
									<option value="icon-vector">vector</option>
									<option value="icon-speech">speech</option>
									<option value="icon-puzzle">puzzle</option>
									<option value="icon-printer">printer</option>
									<option value="icon-present">present</option>
									<option value="icon-playlist">playlist</option>
									<option value="icon-pin">pin</option>
									<option value="icon-picture">picture</option>
									<option value="icon-handbag">handbag</option>
									<option value="icon-globe-alt">globe-alt</option>
									<option value="icon-globe">globe</option>
									<option value="icon-folder-alt">folder-alt</option>
									<option value="icon-folder">folder</option>
									<option value="icon-film">film</option>
									<option value="icon-feed">feed</option>
									<option value="icon-drop">drop</option>
									<option value="icon-drawer">drawer</option>
									<option value="icon-docs">docs</option>
									<option value="icon-doc">doc</option>
									<option value="icon-diamond">diamond</option>
									<option value="icon-cup">cup</option>
									<option value="icon-calculator">calculator</option>
									<option value="icon-bubbles">bubbles</option>
									<option value="icon-briefcase">briefcase</option>
									<option value="icon-book-open">book-open</option>
									<option value="icon-basket-loaded">basket-loaded</option>
									<option value="icon-basket">basket</option>
									<option value="icon-bag">bag</option>
									<option value="icon-action-undo">action-undo</option>
									<option value="icon-action-redo">action-redo</option>
									<option value="icon-wrench">wrench</option>
									<option value="icon-umbrella">umbrella</option>
									<option value="icon-trash">trash</option>
									<option value="icon-tag">tag</option>
									<option value="icon-support">support</option>
									<option value="icon-frame">frame</option>
									<option value="icon-size-fullscreen">size-fullscreen</option>
									<option value="icon-size-actual">size-actual</option>
									<option value="icon-shuffle">shuffle</option>
									<option value="icon-share-alt">share-alt</option>
									<option value="icon-share">share</option>
									<option value="icon-rocket">rocket</option>
									<option value="icon-question">question</option>
									<option value="icon-pie-chart">pie-chart</option>
									<option value="icon-pencil">pencil</option>
									<option value="icon-note">note</option>
									<option value="icon-loop">loop</option>
									<option value="icon-home">home</option>
									<option value="icon-grid">grid</option>
									<option value="icon-graph">graph</option>
									<option value="icon-microphone">microphone</option>
									<option value="icon-music-tone-alt">music-tone-alt</option>
									<option value="icon-music-tone">music-tone</option>
									<option value="icon-earphones-alt">earphones-alt</option>
									<option value="icon-earphones">earphones</option>
									<option value="icon-equalizer">equalizer</option>
									<option value="icon-like">like</option>
									<option value="icon-dislike">dislike</option>
									<option value="icon-control-start">control-start</option>
									<option value="icon-control-rewind">control-rewind</option>
									<option value="icon-control-play">control-play</option>
									<option value="icon-control-pause">control-pause</option>
									<option value="icon-control-forward">control-forward</option>
									<option value="icon-control-end">control-end</option>
									<option value="icon-volume-1">volume-1</option>
									<option value="icon-volume-2">volume-2</option>
									<option value="icon-volume-off">volume-off</option>
									<option value="icon-calendar">calendar</option>
									<option value="icon-bulb">bulb</option>
									<option value="icon-chart">chart</option>
									<option value="icon-ban">ban</option>
									<option value="icon-bubble">bubble</option>
									<option value="icon-camrecorder">camrecorder</option>
									<option value="icon-camera">camera</option>
									<option value="icon-cloud-download">cloud-download</option>
									<option value="icon-cloud-upload">cloud-upload</option>
									<option value="icon-envelope">envelope</option>
									<option value="icon-eye">eye</option>
									<option value="icon-flag">flag</option>
									<option value="icon-heart">heart</option>
									<option value="icon-info">info</option>
									<option value="icon-key">key</option>
									<option value="icon-link">link</option>
									<option value="icon-lock">lock</option>
									<option value="icon-lock-open">lock-open</option>
									<option value="icon-magnifier">magnifier</option>
									<option value="icon-magnifier-add">magnifier-add</option>
									<option value="icon-magnifier-remove">magnifier-remove</option>
									<option value="icon-paper-clip">paper-clip</option>
									<option value="icon-paper-plane">paper-plane</option>
									<option value="icon-power">power</option>
									<option value="icon-refresh">refresh</option>
									<option value="icon-reload">reload</option>
									<option value="icon-settings">settings</option>
									<option value="icon-star">star</option>
									<option value="icon-symbol-female">symbol-female</option>
									<option value="icon-symbol-male">symbol-male</option>
									<option value="icon-target">target</option>
									<option value="icon-credit-card">credit-card</option>
									<option value="icon-paypal">paypal</option>
									<option value="icon-social-tumblr">social-tumblr</option>
									<option value="icon-social-twitter">social-twitter</option>
									<option value="icon-social-facebook">social-facebook</option>
									<option value="icon-social-instagram">social-instagram</option>
									<option value="icon-social-linkedin">social-linkedin</option>
									<option value="icon-social-pinterest">social-pinterest</option>
									<option value="icon-social-github">social-github</option>
									<option value="icon-social-google">social-google</option>
									<option value="icon-social-reddit">social-reddit</option>
									<option value="icon-social-skype">social-skype</option>
									<option value="icon-social-dribbble">social-dribbble</option>
									<option value="icon-social-behance">social-behance</option>
									<option value="icon-social-foursqare">social-foursqare</option>
									<option value="icon-social-soundcloud">social-soundcloud</option>
									<option value="icon-social-spotify">social-spotify</option>
									<option value="icon-social-stumbleupon">social-stumbleupon</option>
									<option value="icon-social-youtube">social-youtube</option>
									<option value="icon-social-dropbox">social-dropbox</option>
									<option value="icon-social-vkontakte">social-vkontakte</option>
									<option value="icon-social-steam">social-steam</option>
								</select>
							</div>
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="achievements_title[]" value="<?= $value['title'] ?>" >
							</div>
							<div class="form-group">
								<label>Details</label>
								<textarea class="form-control" name="achievements_details[]" value="<?= $value['details'] ?>" rows="4"><?= $value['details'] ?></textarea>
							</div>
							<div class="form-group">
								<a href="lib/script.php?delete_achievements=<?= $key ?>" class="btn btn-light"><i class="icon-trash"></i> delete</a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>

					<br>
					<button type="submit" class="btn btn-danger">Update</button><!-- Update Button -->

				</form>
				
			</div>

		</div>
	</section>


<!-- Add Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="lib/script.php" method="POST">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Achievement</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<label>Icon <small>*(required)</small></label>
	      	<select name="add_achievements_icon" class="form-control">
				<option selected="" value="icon-bulb">bulb</option>
				<option value="icon-user">user</option>
				<option value="icon-people">people</option>
				<option value="icon-user-female">user-female</option>
				<option value="icon-user-follow">user-follow</option>
				<option value="icon-user-following">user-following</option>
				<option value="icon-user-unfollow">user-unfollow</option>
				<option value="icon-login">login</option>
				<option value="icon-logout">logout</option>
				<option value="icon-emotsmile">emotsmile</option>
				<option value="icon-phone">phone</option>
				<option value="icon-call-end">call-end</option>
				<option value="icon-call-in">call-in</option>
				<option value="icon-call-out">call-out</option>
				<option value="icon-map">map</option>
				<option value="icon-location-pin">location-pin</option>
				<option value="icon-direction">direction</option>
				<option value="icon-directions">directions</option>
				<option value="icon-compass">compass</option>
				<option value="icon-layers">layers</option>
				<option value="icon-menu">menu</option>
				<option value="icon-list">list</option>
				<option value="icon-options-vertical">options-vertical</option>
				<option value="icon-options">options</option>
				<option value="icon-arrow-down">arrow-down</option>
				<option value="icon-arrow-left">arrow-left</option>
				<option value="icon-arrow-right">arrow-right</option>
				<option value="icon-arrow-up">arrow-up</option>
				<option value="icon-arrow-up-circle">arrow-up-circle</option>
				<option value="icon-arrow-left-circle">arrow-left-circle</option>
				<option value="icon-arrow-right-circle">arrow-right-circle</option>
				<option value="icon-arrow-down-circle">arrow-down-circle</option>
				<option value="icon-check">check</option>
				<option value="icon-clock">clock</option>
				<option value="icon-plus">plus</option>
				<option value="icon-minus">minus</option>
				<option value="icon-close">close</option>
				<option value="icon-event">event</option>
				<option value="icon-exclamation">exclamation</option>
				<option value="icon-organization">organization</option>
				<option value="icon-trophy">trophy</option>
				<option value="icon-screen-smartphone">screen-smartphone</option>
				<option value="icon-screen-desktop">screen-desktop</option>
				<option value="icon-plane">plane</option>
				<option value="icon-notebook">notebook</option>
				<option value="icon-mustache">mustache</option>
				<option value="icon-mouse">mouse</option>
				<option value="icon-magnet">magnet</option>
				<option value="icon-energy">energy</option>
				<option value="icon-disc">disc</option>
				<option value="icon-cursor">cursor</option>
				<option value="icon-cursor-move">cursor-move</option>
				<option value="icon-crop">crop</option>
				<option value="icon-chemistry">chemistry</option>
				<option value="icon-speedometer">speedometer</option>
				<option value="icon-shield">shield</option>
				<option value="icon-screen-tablet">screen-tablet</option>
				<option value="icon-magic-wand">magic-wand</option>
				<option value="icon-hourglass">hourglass</option>
				<option value="icon-graduation">graduation</option>
				<option value="icon-ghost">ghost</option>
				<option value="icon-game-controller">game-controller</option>
				<option value="icon-fire">fire</option>
				<option value="icon-eyeglass">eyeglass</option>
				<option value="icon-envelope-open">envelope-open</option>
				<option value="icon-envelope-letter">envelope-letter</option>
				<option value="icon-bell">bell</option>
				<option value="icon-badge">badge</option>
				<option value="icon-anchor">anchor</option>
				<option value="icon-wallet">wallet</option>
				<option value="icon-vector">vector</option>
				<option value="icon-speech">speech</option>
				<option value="icon-puzzle">puzzle</option>
				<option value="icon-printer">printer</option>
				<option value="icon-present">present</option>
				<option value="icon-playlist">playlist</option>
				<option value="icon-pin">pin</option>
				<option value="icon-picture">picture</option>
				<option value="icon-handbag">handbag</option>
				<option value="icon-globe-alt">globe-alt</option>
				<option value="icon-globe">globe</option>
				<option value="icon-folder-alt">folder-alt</option>
				<option value="icon-folder">folder</option>
				<option value="icon-film">film</option>
				<option value="icon-feed">feed</option>
				<option value="icon-drop">drop</option>
				<option value="icon-drawer">drawer</option>
				<option value="icon-docs">docs</option>
				<option value="icon-doc">doc</option>
				<option value="icon-diamond">diamond</option>
				<option value="icon-cup">cup</option>
				<option value="icon-calculator">calculator</option>
				<option value="icon-bubbles">bubbles</option>
				<option value="icon-briefcase">briefcase</option>
				<option value="icon-book-open">book-open</option>
				<option value="icon-basket-loaded">basket-loaded</option>
				<option value="icon-basket">basket</option>
				<option value="icon-bag">bag</option>
				<option value="icon-action-undo">action-undo</option>
				<option value="icon-action-redo">action-redo</option>
				<option value="icon-wrench">wrench</option>
				<option value="icon-umbrella">umbrella</option>
				<option value="icon-trash">trash</option>
				<option value="icon-tag">tag</option>
				<option value="icon-support">support</option>
				<option value="icon-frame">frame</option>
				<option value="icon-size-fullscreen">size-fullscreen</option>
				<option value="icon-size-actual">size-actual</option>
				<option value="icon-shuffle">shuffle</option>
				<option value="icon-share-alt">share-alt</option>
				<option value="icon-share">share</option>
				<option value="icon-rocket">rocket</option>
				<option value="icon-question">question</option>
				<option value="icon-pie-chart">pie-chart</option>
				<option value="icon-pencil">pencil</option>
				<option value="icon-note">note</option>
				<option value="icon-loop">loop</option>
				<option value="icon-home">home</option>
				<option value="icon-grid">grid</option>
				<option value="icon-graph">graph</option>
				<option value="icon-microphone">microphone</option>
				<option value="icon-music-tone-alt">music-tone-alt</option>
				<option value="icon-music-tone">music-tone</option>
				<option value="icon-earphones-alt">earphones-alt</option>
				<option value="icon-earphones">earphones</option>
				<option value="icon-equalizer">equalizer</option>
				<option value="icon-like">like</option>
				<option value="icon-dislike">dislike</option>
				<option value="icon-control-start">control-start</option>
				<option value="icon-control-rewind">control-rewind</option>
				<option value="icon-control-play">control-play</option>
				<option value="icon-control-pause">control-pause</option>
				<option value="icon-control-forward">control-forward</option>
				<option value="icon-control-end">control-end</option>
				<option value="icon-volume-1">volume-1</option>
				<option value="icon-volume-2">volume-2</option>
				<option value="icon-volume-off">volume-off</option>
				<option value="icon-calendar">calendar</option>
				<option value="icon-bulb">bulb</option>
				<option value="icon-chart">chart</option>
				<option value="icon-ban">ban</option>
				<option value="icon-bubble">bubble</option>
				<option value="icon-camrecorder">camrecorder</option>
				<option value="icon-camera">camera</option>
				<option value="icon-cloud-download">cloud-download</option>
				<option value="icon-cloud-upload">cloud-upload</option>
				<option value="icon-envelope">envelope</option>
				<option value="icon-eye">eye</option>
				<option value="icon-flag">flag</option>
				<option value="icon-heart">heart</option>
				<option value="icon-info">info</option>
				<option value="icon-key">key</option>
				<option value="icon-link">link</option>
				<option value="icon-lock">lock</option>
				<option value="icon-lock-open">lock-open</option>
				<option value="icon-magnifier">magnifier</option>
				<option value="icon-magnifier-add">magnifier-add</option>
				<option value="icon-magnifier-remove">magnifier-remove</option>
				<option value="icon-paper-clip">paper-clip</option>
				<option value="icon-paper-plane">paper-plane</option>
				<option value="icon-power">power</option>
				<option value="icon-refresh">refresh</option>
				<option value="icon-reload">reload</option>
				<option value="icon-settings">settings</option>
				<option value="icon-star">star</option>
				<option value="icon-symbol-female">symbol-female</option>
				<option value="icon-symbol-male">symbol-male</option>
				<option value="icon-target">target</option>
				<option value="icon-credit-card">credit-card</option>
				<option value="icon-paypal">paypal</option>
				<option value="icon-social-tumblr">social-tumblr</option>
				<option value="icon-social-twitter">social-twitter</option>
				<option value="icon-social-facebook">social-facebook</option>
				<option value="icon-social-instagram">social-instagram</option>
				<option value="icon-social-linkedin">social-linkedin</option>
				<option value="icon-social-pinterest">social-pinterest</option>
				<option value="icon-social-github">social-github</option>
				<option value="icon-social-google">social-google</option>
				<option value="icon-social-reddit">social-reddit</option>
				<option value="icon-social-skype">social-skype</option>
				<option value="icon-social-dribbble">social-dribbble</option>
				<option value="icon-social-behance">social-behance</option>
				<option value="icon-social-foursqare">social-foursqare</option>
				<option value="icon-social-soundcloud">social-soundcloud</option>
				<option value="icon-social-spotify">social-spotify</option>
				<option value="icon-social-stumbleupon">social-stumbleupon</option>
				<option value="icon-social-youtube">social-youtube</option>
				<option value="icon-social-dropbox">social-dropbox</option>
				<option value="icon-social-vkontakte">social-vkontakte</option>
				<option value="icon-social-steam">social-steam</option>
			</select>
			<br>
	      	<label>Title <small>*(required)</small></label>
	      	<input type="text" class="form-control" name="add_achievements_title" placeholder="your achievement" >
	      	<br>
	      	<label>Details <small>*(required)</small></label>
	      	<textarea class="form-control" name="add_achievements_details" placeholder="..." rows="4"></textarea>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-info">Add</button>
	      </div>
  		</form>
    </div>
  </div>
</div>

<?php 
	require_once('layout/footer.php');
?>
<?php
$model = new Model();
global $detector_groups;

// all segments
$all_segments = array("desktop_edge", "desktop_ie11", "desktop", "desktop_ie10", "desktop_ie9", "desktop_light", "tablet", "tablet_light", "smartphone", "mobile", "mobile_light", "tv", "seo");


// TODO: print current definitions as JSON to be used for JavaScript and let JavaScript set up the grouping column
// that way I can also have default settings sets in the backend


?>
<div class="scene build i:build">

	<h1>Build your own Detector</h1>

	<div class="builder">

		<p>
			Building a static Detector includes the possibility of grouping the <a href="/docs/segments">segments</a>
			into your own segment groups. This allows you to minimize the number of supported UIs to fit the requirements of 
			your projects. If you don't want to add your own segment groups, the static Detector
			will use the default segments. 
		</p>

		<h2>Build your own Detector <br />in 3 easy steps.</h2>


		<h3>1: Group your segments</h3>
		<p>
			Drag the default segments to the grouping area to start making your segment groups (a group will magically 
			appear when you need it).
		</p>

		<div class="customize" data-detector-groups="<?= urlencode(json_encode($detector_groups, true)) ?>">

			<div class="segments">
				<h3>Default segments</h3>
				<ul class="segments">
		<?		foreach($all_segments as $segment): ?>
					<li class="<?= $segment ?>"><?= $segment ?></li>
		<?		endforeach; ?>
				</ul>
			</div>

			<ul class="actions">
				<li class="reset"><a href="/build/reset" class="button">Reset</a></li>
			</ul>

		</div>



		<?= $model->formStart("download", array("class" => "download")) ?>
			<?= $model->input("grouping", array("type" => "hidden", "value" => $detector_groups ? json_encode($detector_groups) : "")) ?>

			<div class="language">

				<h3>2: Select language</h3>
				<fieldset>
					<?= $model->input("language", array("label" => "Programming language", "type" => "radiobuttons", "options" => array("php" => "PHP", "javascript" => "JavaScript", "java" => "Java"), "value" => "php")) ?>
				</fieldset>

			</div>

			<div class="download">

				<h3>3: And download ...</h3>
				<ul class="actions">
					<?= $model->submit("Download", array("class" => "primary", "wrapper" => "li.submit")) ?>
				</ul>

			</div>
		<?= $model->formEnd() ?>
	</div>

	<div class="fallback">
		<p class="note">Building a static Detector is not supported by your browser. Your browser is <strong><?= $this->segment() ?></strong> - Please upgrade or use a Desktop device for building Detector.</p>
	</div>

</div>
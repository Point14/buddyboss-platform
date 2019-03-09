<?php
	list ($name, $value) = bp_ps_template_args ();
?>
	<div class="item-meta">
		<span class="activity">
<?php
			if (!is_array ($value))
				/* translators: %1$s field name, %2$s value */
				printf (esc_html__('%1$s: %2$s', 'buddyboss'), $name, $value);
			else if ($value['units'] == 'km')
				/* translators: %1$s field name, %2$s location, %3$d distance */
				printf (esc_html__('%1$s: %2$s (%3$d km away)', 'buddyboss'), $name, $value['location'], $value['distance']);
			else if ($value['units'] == 'miles')
				/* translators: %1$s field name, %2$s location, %3$d distance */
				printf (esc_html__('%1$s: %2$s (%3$d miles away)', 'buddyboss'), $name, $value['location'], $value['distance']);
?>
		</span>
	</div>
<?php

// BP Profile Search - end of template

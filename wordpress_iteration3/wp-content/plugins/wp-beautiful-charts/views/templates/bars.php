<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<?php



	$height_legend = 40;

	$graph_height = $chart->height-$height_legend;



	$color_axis = $chart->text_color;

	$color_axis_y_values = $chart->text_color;

	$color_axis_x_values = $chart->text_color;

	$color_column = $chart->data[0]->color;

	$color_column_hover = "#dddddd";



	$axis_y_text_size = 16;

	$axis_x_text_size = 18;



	$margin_top = 10;	

	$margin_axis_x = 15;

	$margin_cols = 5;

	$margin_left = $margin_axis_x+$margin_cols;



	$nb_level_y_axis = 10;

	$max_value_y_axis = 0;



	foreach($chart->data as $value)

	{

		if($value->values[0] > $max_value_y_axis)

			$max_value_y_axis = $value->values[0];

	}



	//on arrondi la valeur max de l'axe de y

	$round_nb = strlen((string)round($max_value_y_axis))-2;	

	$max_value_y_axis = round($max_value_y_axis, -$round_nb);



	$text_y_axis_offset = 15;



	$height_percent_axis_y = 100-$margin_top;



	$col_anim_duration = '0.4s';



?>

<script>



	function colorHover(evt) {

	    evt.target.setAttributeNS(null,"fill","<?php echo $color_column_hover ?>");

	}	 



	function colorNormal(evt) {

	    evt.target.setAttributeNS(null,"fill", evt.target.getAttributeNS(null,"normal_color"));

	}



</script>



		<svg style="width: <?php echo $chart->width ?>px; height: <?php echo $chart->height ?>px">

			<svg width="100%" height="<?php echo $graph_height ?>px">

				<g transform="scale(1,-1) translate(0,-<?php echo ($graph_height+50) ?>)">

				<?php



					$i = 0;

					$width_col = (100-$margin_left-($margin_cols*sizeof($data)))/sizeof($data);



					foreach($chart->data as $key => $value)

					{

						$j = 0;

						foreach($value->values as $bar) {

							$height_rect = ($bar/$max_value_y_axis*$height_percent_axis_y);

							echo '<rect title="'.$bar.' '.$atts['unit'].'" width="'.($width_col/sizeof($chart->data[0]->values)).'%" height="'.$height_rect.'%" y="50" x="'.($margin_left+($i*$width_col+$i*$margin_cols)+$j*$width_col/sizeof($chart->data[0]->values)).'%" fill="'.$value->color.'" normal_color="'.$value->color.'" onmouseover="colorHover(evt)" onmouseout="colorNormal(evt)">

								<animate attributeName="height" attributeType="XML" id="rect'.$i.'"	fill="freeze" from="0" to="'.$height_rect.'%"	begin="'.($i == 0 ? 0 : 'rect'.($i-1).'.end').'" dur="'.$col_anim_duration.'"/>

							</rect>';

							$j++;							

						}

						$i++;						

					}



				?>				

				</g>

			</svg>

			<svg width="100%" height="<?php echo ($chart->height+$margin_top) ?>px">

				<?php



					$height_percent_axis_y = 100-$margin_top;

					$real_graph_height = $graph_height*(100-$margin_top)/100;

					$margin_top_height = $graph_height*$margin_top/100;



					//axes x/y

					echo '<line x1="0%" y1="'.$graph_height.'" x2="100%" y2="'.$graph_height.'" stroke="'.$color_axis.'" stroke-width="1"/>';

					echo '<line x1="'.($margin_axis_x).'%" y1="0%" x2="'.($margin_axis_x).'%" y2="100%" stroke="'.$color_axis.'" stroke-width="1"/>';



					//axe des y

					for($i = 0; $i < $nb_level_y_axis; $i++)

					{	

						$y = ($margin_top_height+($i*$height_percent_axis_y/$nb_level_y_axis)*$real_graph_height/$height_percent_axis_y);	

						$value = ($max_value_y_axis-($i*$max_value_y_axis/$nb_level_y_axis));

						echo '<text x="'.((6-strlen($value))/6*50).'" y="'.($y+5).'px" font-size="'.$chart->text_size.'" fill="'.$color_axis_y_values.'">'.$value.'</text>';

						echo '<line x1="'.($margin_axis_x-1).'%" y1="'.($y).'" x2="'.($margin_axis_x+1).'%" y2="'.($y).'" stroke="'.$color_axis.'" stroke-width="1"/>';

					}



					//axe des x

					$i = 0;

					foreach($chart->data as $key => $value)

					{

						$diff_width = $width_col-100*((strlen($value->name))*($axis_x_text_size/1.5))/$chart->width; //différence de taille entre 1 colonne et le texte

						$x = ($margin_left+($i*$width_col+$i*$margin_cols)) + $diff_width/2;

						echo '<text x="'.$x.'%" y="'.($chart->height-15).'" font-size="'.$chart->text_size.'" fill="'.$color_axis_x_values.'">'.$value->name.'</text>';

						$i++;

					}

				?>

			</svg>

		</svg>


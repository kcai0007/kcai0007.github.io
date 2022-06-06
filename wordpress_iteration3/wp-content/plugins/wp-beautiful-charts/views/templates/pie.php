<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<script>



	var pieData<?php echo $chart->id ?> = [

	<?php



		foreach($chart->data as $data)

		{

			echo '{

					value: '.floatval($data->values[0]).',

					color:"'.$data->color.'",

					highlight: "#DDDDDD",

					label: "'.addslashes($data->name).'"

				},';

		}

	?>



	];



	/*window.onload = function(){*/
	jQuery(document).ready(function(){

		var ctx<?php echo $chart->id ?> = document.getElementById("chart-area-<?php echo $chart->id ?>").getContext("2d");

		window.myPie<?php echo $chart->id ?> = new Chart(ctx<?php echo $chart->id ?>).Pie(pieData<?php echo $chart->id ?>);

	//};
	});





</script>



<canvas id="chart-area-<?php echo $chart->id ?>" width="<?php echo $chart->width ?>" height="<?php echo $chart->height ?>"></canvas>


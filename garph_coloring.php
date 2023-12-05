<?php

function solve_graph_coloring($index, $vc, $mca, $cls, $g) {
	if(is_promising($index, $g, $cls, $vc)) {
		if($index == $vc - 1) {
			
			for($i = 0; $i < count($cls); $i++) {
    			echo "Vertex " . ($i + 1) . " is assigned color " . $cls[$i] . "\n";
			}

			
		} else {
			for($color = 1; $color <= $mca; $color++) {
				$cls[$index + 1] = $color;
				solve_graph_coloring($index + 1, $vc, $mca, $cls, $g);
			}
		}
	}
}

function is_promising($index, $g, $cls, $vc) : bool {
	$j = 0;
	$switch = true;
	while($j < $vc && $switch) {
		if($g[$index][$j] && $cls[$index] == $cls[$j]) {
			$switch = false;
		}
		$j++;
	}
	return $switch;
}

//use this https://graphonline.ru/en/ link for checking the graph plot
$graph = array(
    array(false, true, true, true), 	// Vertex 0 is connected to vertices 1, 2, 3
    array(true, false, true, false),	// Vertex 1 is connected to vertices 0, 2
    array(true, true, false, true), 	// Vertex 2 is connected to vertices 0, 1, 3
    array(true, false, true, false) 	// Vertex 3 is connected to vertices 0, 2
);
$maximumColorsAllowed = 3;
$verticeCount = count($graph);
$colors = array_fill(0, $verticeCount, -1);
$colors[0] = 1;
solve_graph_coloring(0, $verticeCount, $maximumColorsAllowed, $colors, $graph);
?>

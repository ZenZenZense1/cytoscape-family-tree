<?php
	include('db.php');

	$query = ("SELECT * FROM child");
	$result = mysqli_query($con,$query);

	$nodes = array();
	while($row = mysqli_fetch_array($result)){
		$Nodes = array('data' => array(
			'registrynum' => $row['registrynum'],
			'fname' => $row['fname']
		));
		array_push($nodes,$Nodes);
	}

	$query1 = "SELECT * FROM child,father WHERE registrynum = f_registrynum";
	$result1 = mysqli_query($con,$query1);

	$edges = array();
	while($row = mysqli_fetch_array($result1)){
		$Edges = array('data' => array(
			'source' => $row['registrynum'],
			'target' => $row['id']
		));
		array_push($edges, $Edges);
	}

	$json = array(
		'nodes' => $nodes,
		'edges' => $edges
	);

	$jsonstring = json_encode($json);
	echo $jsonstring;
?>
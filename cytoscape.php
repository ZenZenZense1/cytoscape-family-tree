<?php
include("db.php");
    $sqlentreperson = "SELECT * FROM child ";
    $resultentreperson = mysqli_query($con,$sqlentreperson);

    $node = array();



    while($row = mysqli_fetch_array($resultentreperson)){
   $entreperson = array ('data' => array(
  'id'=>$nodeID=$row['registrynum'],
  $nodeName='name' =>$row['fname']
  ));
array_push($node,$entreperson);
    }
    $jsonstring = json_encode($json);
    echo  json_encode($entreperson);


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cytoscape</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<style>
			@media screen and (max-width:480px){
				#search{width:100%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}

			#cy {
				width: 100%;
				height: 700px;
				border: 1px solid #aaa;
				background-color: black;

			}

      .alert {
        padding: 20px;
        background-color: grey;
        color:teal;
      }


		</style>
	</head>
	<body>
    <div class="wrapper">
      
     <div class="container-fluid">
        <div id="content">

      		<div id="cy"></div>
    
  		</div>
	</div>
	</div>

<script src="js/dagre.min.js"></script>
<script src="js/cytoscape.js"></script>
<script src="js/cytoscape-dagre.js"></script>

<script>
(function() {
var nodeCountId = 11;
var edgeCountId = 210;
var ylocation = 100;
var xlocation = 100;

var cy = cytoscape({
  container: document.getElementById('cy'),
  elements: {
    nodes: [{
      data: {
        id: 'DS001',
        title: '1'
      },
    }, {
      data: {
        id: 'DS002',
        title: '2'
      }
    }, {
      data: {
        id: 'DS003',
        title: '3'
      }
    }, {
      data: {
        id: 'DS004',
        title: '4'
      }
    }, {
      data: {
        id: 'CV001',
        title: '5'
      }
    }, {
      data: {
        id: 'CV002',
        title: '6'
      }
    }, {
      data: {
        id: 'CV003',
        title: '7'
      }
    }, {
      data: {
        id: 'CV004',
        title: '8'
      }
    }, {
      data: {
        id: 'CV005',
        title: '9'
      }
    }, {
      data: {
        id: 'CV006',
        title: '11'
      }
    }],
    edges: [{
      data: {
        id: '1',
        source: 'DS001',
        target: 'CV001'
      }
    }, {
      data: {
        id: '2',
        source: 'DS002',
        target: 'CV001'
      }
    }, {
      data: {
        id: '3',
        source: 'CV001',
        target: 'CV002'
      }
    }, {
      data: {
        id: '4',
        source: 'CV002',
        target: 'CV003'
      }
    }, {
      data: {
        id: '5',
        source: 'DS004',
        target: 'CV003'
      }
    }, {
      data: {
        id: '6',
        source: 'DS003',
        target: 'CV004'
      }
    }, {
      data: {
        id: '7',
        source: 'CV004',
        target: 'CV005'
      }
    }, {
      data: {
        id: '8',
        source: 'CV003',
        target: 'CV005'
      }
    }, {
      data: {
        id: '9',
        source: 'CV006',
        target: 'CV005'
      }
    }],
    selected: true, // whether the element is selected (default false)
    selectable: true // whether the selection state is mutable (default true)

  },
  layout: {
    name: "dagre"
  },
  style: [{
    selector: 'node',
    style: {
      label:'data(id)',
      shape:'circle',
      'text-valign':'center',
      'width':90,
      'background-color': 'green'
     
    }
  }, {
    selector: 'edge',
    style: {
      'width': 8,
      'line-color': '#9acd32',
      'target-arrow-color': '#DC143C',
      'target-arrow-shape': 'triangle'
    }
  }
],

  layout: {
    name: 'circle',

    rows: 1
  }});
cy.on('click', 'node', function(evt){
 		  var count = <?php echo json_encode($nodeID);?>
   
        
        
     		var eles = cy.add([
  { group: "nodes", data: { id:count }, position: { x:xlocation, y:ylocation } },
  { group: "edges", data: { id: edgeCountId, source: this.id(), target: count } }
]);
 alert("this is the id of the node "+this.id()+" connected to this node "+count);		
nodeCountId += 1;
ylocation += 100;
xlocation += 100;
edgeCountId += 1;
});


})();
</script>
		
</body>
</html>
















































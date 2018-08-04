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
var init = function(){
	$ajax({
		url: 'data.php',
		method: 'GET',
		dataType:'json',
		data:{},
		success: displaygraph,
		error:function(){alert('error getting data');}
	});
}

var displaygraph = function(data){
	$('#cy').cytoscape({

		elements:{
			nodes: data.nodes,
			edges: data.edges
		},

		ready: function(){

		}
	});
}	
ready: function() {
	window.cy= this;

	cy.elements().unselectify();

	cy.on('tap','node', function(e){
		var node = e.cyTarget;
		var neighborhood = node.neighborhood().add(node);

		cy.element().addClass('faded');
		neighborhood.removeCLass('faded');

	});

	cy.on('tap',function(e)
	{
		if(e.cyTarget == cy){
			cy.elements().removeCLass('faded');
		}
	});
}
cy.on('click', 'node', function(evt){
 		  alert("this is the id "+this.id());
     		cy.add([
     				{group: "nodes",data:{id:nodeCountId},position:{x:xlocation,y:ylocation}},
     				{group: "edges",data:{id:"e0",source:nodeCountId,target:this.id()}}
     		]);			
nodeCountId += 1;
ylocation += 100;
xlocation += 100;

});
cy.edgee('click','edge',function(evt){

  alert("asdasdasda");
});

</script>
		
</body>
</html>
















































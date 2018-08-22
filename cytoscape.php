<?php
include("db.php");
    $sqlentreperson = "SELECT * FROM person ";
    $resultentreperson = mysqli_query($con,$sqlentreperson);

    $node = array();
    $nodeDisplay = array();
    $id_number = array();
    $mother_id = array();
    $father_id = array();
    $gender = array();


    while($row = mysqli_fetch_array($resultentreperson)){
array_push($node,$entreperson);
array_push($id_number,$row['id_number']);
array_push($mother_id,$row['mother_id']);
array_push($father_id,$row['father_id']);
array_push($gender,$row['gender']);
$jsonstring = json_encode($json);
    }
 
$id_number_to_json = json_encode(array($id_number));
$mother_id_to_json = json_encode(array($mother_id));
$father_id_to_json = json_encode(array($father_id));
$gender_id_to_json = json_encode(array($gender));
 $id_count = sizeof($id_number);
   
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cytoscape</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<style>
			@media screen and (max-width:480px){
				#search{width:100%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}

			#cy {
				width: 80%;
				height: 700px;
				border: 1px solid #aaa;
				background-color: black;
        margin-left:300px ; 

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
      
    <div id="myModal" class="modal"role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Person Information</h5>
      </div>
      <div class="modal-body">
        <div id="modalInformation"></div>
      <div id="ID"></div>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
    </div>
      </div>
    </div>
  </div>
</div>

    </div>
    
     <div class="container-fluid">
        <div id="content">

      		<div id="cy"></div>
    
  		</div>
	</div>
	</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/dagre.min.js"></script>
<script src="js/cytoscape.js"></script>
<script src="js/cytoscape-dagre.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
(function() {
var nodeCountId = 11;
var edgeCountId = 210;
var ylocation = 100;
var xlocation = 100;

var cy = cytoscape({
  container: document.getElementById('cy'),
  layout: {
    name: "circle"
  },
  style: [{
    selector: 'node',
    style: {
      shape:'circle',
      'text-valign':'center',
      'background-color': 'data(faveColor)',
      // 'display':'none' 
      }
  }, {
    selector: 'edge',
    style: {
      'width': 4,
      'line-color': 'data(faveColor)',
      'target-arrow-color': 'data(faveColor)',
      'target-arrow-shape': 'triangle-backcurve',
      'curve-style': 'bezier',
      
     
    }
  }
]});
  
var id_count = <?php echo $id_count?>;
var id_number = <?php echo json_encode($id_number);?>;
var mother_id = <?php echo json_encode($mother_id);?>;
var father_id = <?php echo json_encode($father_id);?>;
var gender = <?php echo json_encode($gender);?>;
  for (var i = 0; i <id_count; i++) {
    if(gender[i]=='male'){
      cy.add({
        data: { id: id_number[i],faveColor:'#00FFFF'}
        });
    }else{
      cy.add({
        data: { id: id_number[i],faveColor:'#FF4500'}
        });
    }
 
    
      var target_id =  id_number[i];
      var source_mother =  mother_id[i];
      var source_father =  father_id[i];

        if(mother_id[i]!=null){
     
       cy.add({
        data: {
            id: 'mother' + i,
            source: source_mother,
            target: target_id,faveColor:'#FF4500'
        }
    });
  
        }
        if(father_id[i]!=null){

    cy.add({
        data: {
            id: 'father' + i,
            source: source_father,
            target: target_id,
            faveColor:'#00FFFF'
        }
    });
    cy.layout({
    name: 'dagre'
}).run();
}
  }

  cy.on('click', 'node', function(evt){
    console.log("awwawaw");

    console.log($);
    console.log(jQuery);
    $.get('person.php?id=' + this.id(), function(response) {
        var data = JSON.parse(response);
        console.log(data.id);
        console.log(data.name);
        $('#ID').html("<p>ID: "  + data.id + "</p>");
        $('#myModal').modal('show');
    }); 

});


})();
</script>
		
</body>
</html>
















































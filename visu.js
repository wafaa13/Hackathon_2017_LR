

$(document).ready(function(){

	function init() {
		$(".titleIcons").hide();

		for (i = 0; i < 8; i++) { 
			var iconsNav = "#iconsNav" + i+1
			var titleIcon = "#titleIcon" + i+1

			$(iconsNav).hover(function() {
				$(this).animate({ 'zoom': 1.2 }, 10);
				$(this).css('text-decoration', 'none');
				$(titleIcon).show();
			}, function(){
				$(this).animate({ 'zoom': 1 }, 10);
				$(titleIcon).hide();
			});
		}
	};

 	function drawVisu() {
	 	$(".boxVisu").children("h4").hide();

	    var resource = window.location.href.split('resource=');
	    res = resource[1].split('#');
	    resource = res[0];

	    var BddLink = null;
	    var metaData = null;
	    var MetadataLink = null;

	    if(resource == "disponibilite_parking") {
	    	BddLink = '&db=stationnement&table=disponibilite_parking&format=json';
	    	MetadataLink = "../metaData/parking.json";
	    	$.getJSON( MetadataLink, function(metadata){
	            metaData = metadata;
	        });
	    } else if (resource == "population_2008") {
	    	BddLink = '&db=insee&table=population_2008&format=json';
	    	MetadataLink = "../metaData/insee.json";
	    	$.getJSON( MetadataLink, function(metadata){
	            metaData = metadata;
	        });
	    } else if (resource == "archive_fiche") {
	    	BddLink = '&db=archive&table=fiche&format=json';
	    	MetadataLink = "../metaData/archive.json";
	    	$.getJSON( MetadataLink, function(metadata){
	            metaData = metadata;
	        });
	    } else if (resource == "bp_2017_fonction") {
	    	BddLink = '&db=budget&table=bp_2017_fonction&format=json';
	    	MetadataLink = "../metaData/budget.json";
	    	$.getJSON( MetadataLink, function(metadata){
	            metaData = metadata;
	        });
	    }

	    jQuery.ajax({
	        type: "POST",
	        url: '../rest.php',
	        data: {functionname: 'getOpenData', arguments: BddLink},
	        success:function(data) {
	            // Parse data in Json
	            var obj = JSON.parse(data);

	            // Insert type of chart in the select list
	            metaData.graph.possibleGraphs.forEach(function (type) {
			        $("#selectChart").append($("<option value='" + type + "'>" + type + "</option>"));
			    });

	            // Initialization options
			    var opts = {};
			    opts["legend"] = true;
	            opts["link"] = false;

	            // Graph type
	            var graph = metaData.graph.possibleGraphs[0];
	            
	            // Draw a visualization
	            drawGraph(obj.opendata.answer.data, graph, 0, metaData, 0, MetadataLink, opts);
		        drawTable(obj.opendata.answer.data, metaData, MetadataLink, 1);
		        //drawMap(obj.opendata.answer.data, 3, metadata, MetadataLink);
		        //drawTimeLine(obj.opendata.answer.data, 4, metadata, MetadataLink);
		        //Info
		        //Download link
	        }

		});
	};
    

    init();
    drawVisu();

});

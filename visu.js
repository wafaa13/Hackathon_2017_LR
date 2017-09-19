
$(document).ready(function(){

	/**
	 * Init
	 *
	 * @return
	 */
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
		$(".boxVisu").children("h4").hide();
	};

	/**
	 * Get datas from opendata la rochelle plateform
	 *
	 * @return
	 */
 	function getData() {
	 	
	 	// Get url datas
	    var resource = window.location.href.split('resource=');
	    res = resource[1].split('#');
	    resource = res[0];

	   	if(resource == "disponibilite_parking") {
	    	BddLink = '&db=stationnement&table=disponibilite_parking&format=json';

	    } else if (resource == "population_2008") {
	    	BddLink = '&db=insee&table=population_2008&format=json';

	    } else if (resource == "archive_fiche") {
	    	BddLink = '&db=archive&table=fiche&format=json';

	    } else if (resource == "bp_2017_fonction") {
	    	BddLink = '&db=budget&table=bp_2017_fonction&format=json';

	    }

	    ajaxRequest(BddLink, 0, function(data){
    		_drawVisu(data);
    	});

    	return;
	};

	/**
	 * Draw visualisation
	 *
	 * @param  {Object}     data       Data from opendata la rochelle plateform
	 *
	 * @return
	 */
	function _drawVisu(data) {

		// Initialization options
	    var opts = {};
	    opts["legend"] = true;
        opts["link"] = false;
        opts["height"] = true;

        // Graph type
        console.log(data.metadata)
        var graph = data.metadata.graph.possibleGraphs[0];

        var listYear=['2000','2012','2017'];

		// Draw a visualization
        drawGraph(data.data, graph, 0, data.metadata, 0, data.linkMetadata, opts);
        drawTable(data.data, data.metadata, data.linkMetadata, 1);
        //drawMap(obj.opendata.answer.data, 3, metadata, MetadataLink);
        drawTimeLine(listYear);
        //Info
        //Download link

        return;
	};

    init();
    getData();

});


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
		
		
	
		// accordian
		$('.accordion-toggle').on('click', function(){
			$(this).closest('.panel-group').children().each(function(){
			$(this).find('>.panel-heading').removeClass('active');
			 });

			$(this).closest('.panel-heading').toggleClass('active');
		});
		$(".checkData").on("click",function() {
			if($('input',this).is(':checked')){
				var nameData = $('input', this).attr("name");
				getData(nameData);
			}
		});
	};

	/**
	 * Get datas from opendata la rochelle plateform
	 *
	 * @return
	 */
 	function getData(nameData) {
	 	
		if(nameData !== null) {
			var resource = nameData;
		} else {
			// Get url datas
			var resource = window.location.href.split('resource=');
			res = resource[1].split('#');
			resource = res[0];
		}
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
			_enablePanel(data.metadata.dataType);
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
	
	function _enablePanel(datatype) {
		if(datatype == "HistorisedNotLocalisable"){
			$('#tab3').hide();
			$('#tab1').show();
			$('#tab2').show();
			$('#tab4').show();
		}
		else if(datatype == "NotHistorisedLocalisable"){
			$('#tab4').hide();
			$('#tab1').show();
			$('#tab2').show();
			$('#tab3').show();
		}
		else if(datatype == "NotHistorisedNotLocalisable"){
			$('#tab3').hide();
			$('#tab4').hide();
			$('#tab1').show();
			$('#tab2').show();
		}
		else if(datatype == "HistorisedLocalisable"){
			$('#tab1').show();
			$('#tab2').show();
			$('#tab3').show();
			$('#tab4').show();
		}
		else{
			$('#tab1').hide();
			$('#tab2').hide();
			$('#tab3').hide();
			$('#tab4').hide();
		}
	}
    init();

});

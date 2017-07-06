
$(document).ready(function(){

    /**
     * Define ajax request
     *
     * @param  {String}     d       End of the URL
     * @param  {Number}     i       Position of chart (0, 1, 2 or 3)
     *
     * @return
     */
    function ajaxRequest(d, i){
        jQuery.ajax({
            type: "POST",
            url: '../rest.php',
            data: {functionname: 'getOpenData', arguments: d},
            success:function(data) {
                // Parse data in Json
                var obj = JSON.parse(data);

                // TODO Get metadata
                // Temporal solution
                switch (d){
                    case '&db=insee&table=population_2008&format=json':
                        $.getJSON( "../metaData/insee.json", function(metadata){
                            // Draw a visualization
                            drawRandomVisualization(obj.opendata.answer.data, i, metadata, "../metaData/insee.json");
                        });
                        break;
                    case '&db=stationnement&table=disponibilite_parking&format=json':
                        $.getJSON( "../metaData/parking.json", function(metadata){
                            // Draw a visualization
                            drawRandomVisualization(obj.opendata.answer.data, i, metadata, "../metaData/parking.json");
                        });
                        break;
                    case '&db=archive&table=fiche&format=json':
                        $.getJSON( "../metaData/archive.json", function(metadata){
                            // Draw a visualization
                            drawRandomVisualization(obj.opendata.answer.data, i, metadata, "../metaData/archive.json");
                        });
                        break;
                    case '&db=budget&table=bp_2017_fonction&format=json':
                        $.getJSON( "../metaData/budget.json", function(metadata){
                            // Draw a visualization
                            drawRandomVisualization(obj.opendata.answer.data, i, metadata, "../metaData/budget.json");
                        });
                        break;
                }
            }
        });
    }; 

    // Get random values between 1 and 4 and put them in an array
    var numberArray = [];
    for (i = 0; i < 4; i++){
        numberArray.push(Math.floor(Math.random() * 3));
    }

    var dataArray = ['&db=insee&table=population_2008&format=json', '&db=stationnement&table=disponibilite_parking&format=json',/* '&db=archive&table=fiche&format=json',*/ '&db=budget&table=bp_2017_fonction&format=json'];

    // Get data from open data la rochelle
    for (i = 0; i < numberArray.length; i++) {
        // Get final URL
        var j = numberArray[i];
        ajaxRequest(dataArray[j], i);

    };

});


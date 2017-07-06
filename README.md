
**controller.php**

- Génère aléatoirement un chiffre entre 1 et 4 pour récupérer aléatoirement un jeu de données parmi les 4 jeux de données proposées dans la liste "_data Array_"
- Appel le fichier "_rest Php_" afin de récupérer les données
- Appel la fonction "_drawrandomvisualization()_" dans le fichier "_draw Graph.Php_"


**rest.php**

- La fonction "_getOpenData($endUrl)_" récupère les données de l'open data 
   
   
**drawGraph.php**

- La fonction "_drawrandomvisualization()_" est la première fonction appelée qui, selon le type de données (HistorisedLocalisableVisualisation, NotHistorisedNotLocalisableVisualisation, NotHistorisedLocalisableVisualisation ou HistorisedNotLocalisableVisualisation), on choisira aléatoirement un type de visualisation selon les types possibles (graph, timeline ou map), puis on appellera la fonction pour afficher le type de visu
    
    Graphe  
    - dans le cas d'un graphe, on va afficher un graphe aléatoire selon les possibilités de graphe renseigné dans les metadata 
    - la fonction "_drawGraph()_" sert à dessiner le graphe - on fera appel à la fonction "_parseDataForGraph()_" afin de garder uniquement les données qui nous intéressent et parser les données
    
 
 

**Modèle de meta data**
        
        {
            "dataType": "string",
            "graph": {
                "possibleGraphs": "[string]",
                "dataComposition": {
                    "title": "String",
                    "description": "String",
                    "excludeLines": ["String"],
                    "selectList": "String",
                    "onlyOneElement": "String"
                }
            },
            "timeline":{
    
            },
            "map":{
    
            }
        }


datatype --> HistorisedLocalisableVisualisation, NotHistorisedNotLocalisableVisualisation, NotHistorisedLocalisableVisualisation ou HistorisedNotLocalisableVisualisation, 

graph --> données valable que pour les graphe (pour le moment)

possibleGraphs --> liste des graphes qui iraient bien avec le jeu de données

dataComposition --> paramètres pour utiliser les données comme il faut

title --> titre (merci captain obvious)

description --> pour le moment pas utilisé

excludeLines --> la liste des lignes à ne pas prendre (dans les parking par exemple, on n'utilisera pas le nombre de places total)

selectList --> la donnée à mettre dans la liste déroulante si y'en a une, sinon, c'est l'élément qui sera décrit en abscisse (pour les parkings, ce sera le nom du parking en dessous de chaque valeur)

onlyOneElement --> si on veut retenir un seul élément (pour les parkings, il n'y a que la donnée place dispo qui est intéressante, donc on gardera que celle ci)





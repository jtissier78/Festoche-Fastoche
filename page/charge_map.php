<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
        <style type="text/css">
            #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
                height:400px;
            }
        </style>
        <title>Carte</title>
    </head>

<?php 

    include("../function/chargecol.php");

    //var_dump($excel_array);
    
    $coordenatescol = saveColData($excel_array,0,14);

    $coordline = linear($coordenatescol,0,14);
       
    $coord = explode(',',$coordline[54]);

    


?>




    <body>
        <div id="map">
	    <!-- Ici s'affichera la carte -->
	    </div>

        <!-- Fichiers Javascript -->
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	    <script type="text/javascript">
            // On initialise la latitude et la longitude de Paris (centre de la carte)
/*             var lat = 48.852969;
            var lon = 2.349903; */
            var macarte = null;
            var coord = <?php echo json_encode($coord)?>;
            var lat = coord[0];
            var lon = coord[1];

/*             var villes = {
	"Paris": { "lat": 48.852969, "lon": 2.349903 },
	"Brest": { "lat": 48.383, "lon": -4.500 },
	"Quimper": { "lat": 48.000, "lon": -4.100 },
	"Bayonne": { "lat": 43.500, "lon": -1.467 }
}; */


            // Fonction d'initialisation de la carte
            function initMap() {
                // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);

                 var marker = L.marker([lat, lon]).addTo(macarte); 

/*                 for (ville in villes) {
		var marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(macarte);
    }  */ 
   /*                  for (ville in villes) {
                    var marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(macarte);
                    // Nous ajoutons la popup. A noter que son contenu (ici la variable ville) peut être du HTML
                    marker.bindPopup(ville);
                }  */
            }
            
            window.onload = function(){
		// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
		initMap(); 
            };
        </script>
    </body>
</html>
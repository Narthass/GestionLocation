/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

import './styles/app.scss';
import './styles/w3.css';


// start the Stimulus application

import ('../node_modules/bootstrap/dist/js/bootstrap.js');
function afficherContratsArchives() {
    var bouttonContratsArchives = document.getElementById("contratsArchives");
    if (bouttonContratsArchives.style.display == "none") {
    bouttonContratsArchives.style.display = "block";
    } else {
    bouttonContratsArchives.style.display = "none";
    }
    }
    afficherContratsArchives();




// Rend temporaire l'affichage d'une  confirmation de creation ou update.





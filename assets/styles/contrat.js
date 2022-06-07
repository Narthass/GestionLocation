function afficherContratsArchives() {
    var bouttonContratsArchives = document.getElementById("contratsArchives");
    if (bouttonContratsArchives.style.display === "none") {
      bouttonContratsArchives.style.display = "block";
    } else {
      bouttonContratsArchives.style.display = "none";
    }
  }
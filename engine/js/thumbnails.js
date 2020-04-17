/*window.onload = initPage;

function initPage() {
  // find the thumbnails on the page
  thumbs = document.getElementById("pfmenuteste").getElementsByTagName("a");

  // set the handler for each image
  for (var i = 0; i < thumbs.length; i++) {
    image = thumbs[i];
    
    // create the onclick function
    image.onclick = function() {
      // find the image name
      alert("ta quase comeco");
      detailURL = 'images/' + this.title + '-detail.jpg';
      document.getElementById("itemDetail").src = detailURL;
      //getDetails(this.title);
    }
  }
}*/
/*
function C(id, idu) {
      var elmnt = document.getElementById("pfdialog");
      lnm = parseInt(document.documentElement.clientWidth /2);
      anm = parseInt(document.documentElement.clientHeight /2);
      ljm = parseInt(320);
      ajm = parseInt(50);
      //alert(lnm + '\n' + anm);
      //alert(ljm + '\n' + ajm);
      x = parseInt(lnm - ljm);
      y = parseInt(anm - ajm - 80);
      //alert(x + '\n' + y);
      document.getElementById('pfdialog').style.top = y;
      document.getElementById('pfdialog').style.left = x;
detailDiv1 = document.getElementById("conteudobox");
detailDiv1.innerHTML = "<center><img src=\"engine/imgs/loader.gif\"></center>";

PegarDetalhesJanela(id, idu);

  //  }
 // }
}

function PegarDetalhesJanela(id, idu) {
  request = createRequest();
  if (request == null) {
    alert("Unable to create request");
    return;
  }
  var url= "engine/paginas.php?id=" + escape(id) + "&idu=" + escape(idu);
  request.open("GET", url, true);
  request.onreadystatechange = displayDetails;
  request.send(null);
}

function displayDetails() {
  if (request.readyState == 4) {
    if (request.status == 200) {
      detailDiv = document.getElementById("conteudobox");
      detailDiv.innerHTML = request.responseText;
      //alert(request.responseText);
      var elmnt = document.getElementById("pfdialog");
      var de = document.documentElement;
      var w = window.innerWidth || self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
      var h = window.innerHeight || self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight
  
      lnm = parseInt(w /2);
      anm = parseInt(h /2);
      ljm = parseInt(elmnt.offsetWidth /2);
      ajm = parseInt(elmnt.offsetHeight /2);
      //alert(lnm + '\n' + anm);
      //alert(ljm + '\n' + ajm);
      x = parseInt(lnm - ljm);
      y = parseInt(anm - ajm);
      //alert(x + '\n' + y);
      document.getElementById('pfdialog').style.top = y;
      document.getElementById('pfdialog').style.left = x;
    }
  }
}

*/


function CarregaPagina(id, idu) {
  var elmnt = document.getElementById("corpo");
  elmnt.innerHTML = "<center><img src=\"engine/imgs/loader.gif\"></center>";
  //document.getElementById('imghome').style.display = "none";
  PegarDetalhesJanela(id, idu);
}

function PegarDetalhesJanela(id, idu) {
  request = createRequest();
  if (request == null) {
    alert("Unable to create request");
    return;
  }
  var url= "engine/paginas.php?id=" + escape(id) + "&idu=" + escape(idu);
  request.open("GET", url, true);
  request.onreadystatechange = displayDetails;
  request.send(null);
}

function displayDetails() {
  if (request.readyState == 4) {
    if (request.status == 200) {
      var elmnt = document.getElementById("corpo");
      elmnt.innerHTML = request.responseText;
    }
  }
}

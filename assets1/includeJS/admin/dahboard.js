var recReq = getXmlHttpRequestObject();
var _documentid='contentShow';

function getXmlHttpRequestObject() {
    if (window.XMLHttpRequest) {
      return new XMLHttpRequest();
      } else if(window.ActiveXObject) {
        return new ActiveXObject("Microsoft.XMLHTTP");
      } else {
      alert('Status: Cound not create XmlHttpRequest Object. Consider upgrading your browser.');
    }
}

function loadSangatTinggi(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getSangatTinggi' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadTinggi(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getTinggi' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadSedang(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getSedang' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadRendah(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getRendah' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadSangatRendah(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getSangatRendah' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}

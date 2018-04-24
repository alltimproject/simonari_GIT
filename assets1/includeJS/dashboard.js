$(function(){
  $('#pernyataanRisk').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  });
  $('#modalWelcome').modal('show');
});


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
          recReq.open("GET", 'http://localhost/simonari_GIT/unit_kerja/dashboard/getSangatTinggi' , true);
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
          recReq.open("GET", 'http://localhost/simonari_GIT/unit_kerja/dashboard/getSangatRendah' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadrendah(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/unit_kerja/dashboard/getRendah' , true);
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
          recReq.open("GET", 'http://localhost/simonari_GIT/unit_kerja/dashboard/getSedang' , true);
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
          recReq.open("GET", 'http://localhost/simonari_GIT/unit_kerja/dashboard/getTinggi' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}

$(window).on("load resize", function(){
  var scrollWidth = $('.table-content').width() - $('.table-content table').width();
  $('.table-header').css({'padding-right': scrollWidth});
}).resize();



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



//-------------------------------load button tingal risiko -----------------------------------------------------
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
//-------------------------------end load button tingal risiko ------------------------------------------------

//-------------------------------load button Kualifikasi Penyebab ---------------------------------------------
function loadMan(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getMan' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}

function loadMoney(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getMoney' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadMethod(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getMethod' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadMachine(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getMachine' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadMaterial(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getMaterial' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
//-------------------------------end load button Kualifikasi Penyebab ---------------------------------------------

//-------------------------------load button Status Penanganan Risiko ---------------------------------------------
function loadOpen(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getOpen' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
function loadClose(){
      document.getElementById(_documentid).innerHTML = 'Loading.... Tunggu Sebentar';
      if (recReq.readyState == 4 || recReq.readyState == 0) {
          recReq.open("GET", 'http://localhost/simonari_GIT/admin/dashboard/getClose' , true);
          recReq.onreadystatechange = function() {
      if (recReq.readyState == 4 && recReq.status == 200) {
          document.getElementById(_documentid).innerHTML = recReq.responseText;
        }
      }
      recReq.send(null);
        }
}
//-------------------------------load button Status Penanganan Risiko ----------------------------------------------

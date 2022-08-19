//IP
  //get the IP addresses associated with an account
function getIPs(callback) {
var ip_dups = {};

//compatibility for firefox and chrome
var RTCPeerConnection = window.RTCPeerConnection
|| window.mozRTCPeerConnection
|| window.webkitRTCPeerConnection;
var useWebKit = !!window.webkitRTCPeerConnection;

//bypass naive webrtc blocking using an iframe
if (!RTCPeerConnection) {
//NOTE: you need to have an iframe in the page right above the script tag
//
//<iframe id="iframe" sandbox="allow-same-origin" style="display: none"></iframe>
//<script>...getIPs called in here...
//
var win = iframe.contentWindow;
RTCPeerConnection = win.RTCPeerConnection
|| win.mozRTCPeerConnection
|| win.webkitRTCPeerConnection;
useWebKit = !!win.webkitRTCPeerConnection;
}

//minimal requirements for data connection
var mediaConstraints = {
optional: [{RtpDataChannels: true}]
};

var servers = {iceServers: [{urls: "stun:stun.services.mozilla.com"}]};

//construct a new RTCPeerConnection
var pc = new RTCPeerConnection(servers, mediaConstraints);

function handleCandidate(candidate) {
//match just the IP address
var ip_regex = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/
var ip_addr = ip_regex.exec(candidate)[1];

//remove duplicates
if (ip_dups[ip_addr] === undefined)
callback(ip_addr);

ip_dups[ip_addr] = true;
}

//listen for candidate events
pc.onicecandidate = function (ice) {

//skip non-candidate events
if (ice.candidate)
handleCandidate(ice.candidate.candidate);
};

//create a bogus data channel
pc.createDataChannel("");

//create an offer sdp
pc.createOffer(function (result) {

//trigger the stun server request
pc.setLocalDescription(result, function () {}, function () {});

}, function () {});

//wait for a while to let everything done
setTimeout(function () {
//read candidate info from local description
var lines = pc.localDescription.sdp.split('\n');

lines.forEach(function (line) {
if (line.indexOf('a=candidate:') === 0)
handleCandidate(line);
});
}, 1000);
}

//insert IP addresses into the page
getIPs(function (ip) {
var li = document.createElement("li");
li.textContent = ip;

//local IPs
if (ip.match(/^(192\.168\.|169\.254\.|10\.|172\.(1[6-9]|2\d|3[01]))/))


document.getElementById("txtTabla").value = li.textContent;

//IPv6 addresses
else if (ip.match(/^[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7}$/))
document.getElementsByTagName("ul")[2].appendChild(li);

//assume the rest are public IPs
else
document.getElementsByTagName("ul")[1].appendChild(li);
});
//funciones
function habilitar_etica(value)
    {
      if(value=="No")
      {
        // habilitamos
        document.getElementById("nombres").disabled=false;
        document.getElementById("area_involutrada").disabled=false;
        document.getElementById("telefono").disabled=false;
        document.getElementById("email").disabled=false;
      }else if(value=="Si"){
        // deshabilitamos
        document.getElementById("nombres").disabled=true;
        document.getElementById("area_involutrada").disabled=true;
        document.getElementById("telefono").disabled=true;
        document.getElementById("email").disabled=true; 
      }
    }
    function habilitar_cultura(value)
  {
    if(value=="No")
    {
    // habilitamos
    document.getElementById("desempeno2").disabled=false;
    }else if(value=="Si"){
    // deshabilitamos
    document.getElementById("desempeno2").disabled=true;
    }
  }
  function habilitar_cultura2(value)
  {
    if(value=="No")
    {
    // habilitamos
    document.getElementById("feliz2").disabled=false;
    }else if(value=="Si"){
    // deshabilitamos
    document.getElementById("feliz2").disabled=true;
    }
  }   
  function showContent(value) {
        element = document.getElementById("content");
        check = document.getElementById("molestia");
        if (value=="Si") {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
    function habilitar6(value)
    {
      if(value=="Si")
      {
        // habilitamos
        document.getElementById("cual").disabled=false;
        document.getElementById("partecuerpo").disabled=false;
      }else if(value=="No"){
        // deshabilitamos
        document.getElementById("cual").disabled=true;
        document.getElementById("partecuerpo").disabled=true;
      }
    }
    function habilitar8(value)
    {
      if(value=="Si")
      {
        // habilitamos
        document.getElementById("cual_a").disabled=false;
      }else if(value=="No"){
        // deshabilitamos
        document.getElementById("cual_a").disabled=true;
      }
    }
    function habilitar9(value)
    {
      if(value=="Otra")
      {
        // habilitamos
        document.getElementById("tarea").disabled=false;
      }else if (value!="Otra") {
        // deshabilitamos
        document.getElementById("tarea").disabled=true;
      }
    }

$(document).ready(function(){
    $('#button').click(function(){    
        if($('input[id=conditions]').is(':checked')){
            //alert('La politica de privacidad ha sido aceptada');
            return true;
        }
        else{
            alert('Debe contestar la todas las preguntas');
            return false;
        }
    });
});

// jQuery ocultar parrafos manual de mantiz
$(document).ready(function(){ 
   $('#anfitriona_menu').on('click',function(){
    $('#anfitriona_info').show();
    $('#asesor_info').hide();
    $('#asistente_info').hide();
    $('#negocios_info').hide();
    $('#central_info').hide();
    $('#excepciones_info').hide();
    $('#facturacion_info').hide();
    $('#recaudos_info').hide();
    $('#asaru_info').hide();
    $('#alistamiento_info').hide();
    $('#sitcar_info').hide();
    $('#accesorios_info').hide();
    $('#general_info').hide();
    $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#asesor_menu').on('click',function(){
    $('#asesor_info').show();
     $('#anfitriona_info').hide();
     $('#asistente_info').hide();
     $('#negocios_info').hide();
     $('#central_info').hide();
     $('#excepciones_info').hide();
     $('#facturacion_info').hide();
     $('#recaudos_info').hide();
     $('#asaru_info').hide();
     $('#alistamiento_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#asistente_menu').on('click',function(){
    $('#asistente_info').show();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#negocios_info').hide();
     $('#central_info').hide();
     $('#excepciones_info').hide();
     $('#facturacion_info').hide();
     $('#recaudos_info').hide();
     $('#asaru_info').hide();
     $('#alistamiento_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#negocios_menu').on('click',function(){
    $('#negocios_info').show();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#central_info').hide();
     $('#excepciones_info').hide();
     $('#facturacion_info').hide();
     $('#recaudos_info').hide();
     $('#asaru_info').hide();
     $('#alistamiento_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#central_menu').on('click',function(){
    $('#central_info').show();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#excepciones_info').hide();
     $('#facturacion_info').hide();
     $('#recaudos_info').hide();
     $('#asaru_info').hide();
     $('#alistamiento_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#excepciones_menu').on('click',function(){
    $('#excepciones_info').show();
    $('#central_info').hide();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#facturacion_info').hide();
     $('#recaudos_info').hide();
     $('#asaru_info').hide();
     $('#alistamiento_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#facturacion_menu').on('click',function(){
    $('#facturacion_info').show();
    $('#excepciones_info').hide();
    $('#central_info').hide();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#recaudos_info').hide();
     $('#asaru_info').hide();
     $('#alistamiento_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#recaudos_menu').on('click',function(){
    $('#recaudos_info').show();
    $('#facturacion_info').hide();
    $('#excepciones_info').hide();
    $('#central_info').hide();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#asaru_info').hide();
     $('#alistamiento_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#asaru_menu').on('click',function(){
    $('#asaru_info').show();
    $('#recaudos_info').hide();
    $('#facturacion_info').hide();
    $('#excepciones_info').hide();
    $('#central_info').hide();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#alistamiento_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#alistamiento_menu').on('click',function(){
    $('#alistamiento_info').show();
    $('#asaru_info').hide();
    $('#recaudos_info').hide();
    $('#facturacion_info').hide();
    $('#excepciones_info').hide();
    $('#central_info').hide();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#sitcar_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#sitcar_menu').on('click',function(){
    $('#sitcar_info').show();
    $('#alistamiento_info').hide();
    $('#asaru_info').hide();
    $('#recaudos_info').hide();
    $('#facturacion_info').hide();
    $('#excepciones_info').hide();
    $('#central_info').hide();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#accesorios_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#accesorios_menu').on('click',function(){
    $('#accesorios_info').show();
    $('#sitcar_info').hide();
    $('#alistamiento_info').hide();
    $('#asaru_info').hide();
    $('#recaudos_info').hide();
    $('#facturacion_info').hide();
    $('#excepciones_info').hide();
    $('#central_info').hide();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#general_info').hide();
     $('#inicio_info').hide();
   });
});
$(document).ready(function(){ 
   $('#general_menu').on('click',function(){
    $('#general_info').show();
    $('#accesorios_info').hide();
    $('#sitcar_info').hide();
    $('#alistamiento_info').hide();
    $('#asaru_info').hide();
    $('#recaudos_info').hide();
    $('#facturacion_info').hide();
    $('#excepciones_info').hide();
    $('#central_info').hide();
    $('#negocios_info').hide();
    $('#asistente_info').hide();
     $('#anfitriona_info').hide();
     $('#asesor_info').hide();
     $('#inicio_info').hide();
   });
});
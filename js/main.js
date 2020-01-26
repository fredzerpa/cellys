 //general
 //Navbar Initalization
 document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.sidenav1');
     var instances = M.Sidenav.init(elems, {
     });
 });
 //Sidenav Initalization
 document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.sidenav');
     var instances = M.Sidenav.init(elems);
 });
 //Para inicializar detalles
 M.AutoInit();


 //Envio
 //Para inicializar Modals
 document.addEventListener('DOMContentLoaded', function() {
     var elems = document.querySelectorAll('.modal');
     var instances = M.Modal.init(elems);
 });
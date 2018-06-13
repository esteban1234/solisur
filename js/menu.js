$(document).ready(main);

var contador = 1;

function main() {
    $('.openclose').click(function() {
        if (contador == 1) {

            $('nav').toggle("slow");
            
            $('#capa1').css({
            			'display':'block',
            			'position':'fixed',
            			'top': '0px' ,
            			'width': '100%',
            			'height': '100%',
            			'background':'rgba(0,0,0,0.6)', 
            			'z-index':'2'});

            $('.openclose').css({
            			'color':'#fff'});
            contador = 0;
        } else {
            contador = 1;
            $('nav').toggle("slow");

             $('#capa1').css({
            			'display':'none',
            			});

            $('.openclose').css({
            			'color':'#000'});
        }
    });
}

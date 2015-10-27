/**
 * Created by admin on 27.10.2015.
 */
$( document ).ready(function() {

    $( ".shipOne" ).draggable();

    $( ".item" ).droppable({
        drop: function( event, ui ) {
            if($(this).hasClass('closed')===false) {

                $(this).addClass('shipOne closed');
                ui.draggable.remove();
                var a = $(this).data('coordinates').split(',');
                closedArrounShips(a);
            }
        }
    });

    $('.item'). on('click', function(){
        //console.log($(this).attr('id'));
        var self = this;
        $.post( "gameController.php", { key: $(this).data('coordinates')})
            .done(function() {
                $(self).css({color:'red'})
            });
    })

    function closedArrounShips(array){
        array[0] = parseInt(array[0]);
        array[1] = parseInt(array[1]);
        for (var z = array[0]-1; z <= array[0]+1; z++){
            for (var k = array[1]-1; k <= array[1]+1; k++){
                console.log(z+' '+k);
                $('.item[data-coordinates="'+z+','+k+'"]').addClass('closed');
            }
        }
    }











});
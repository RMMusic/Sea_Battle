/**
 * Created by admin on 27.10.2015.
 */
$( document ).ready(function() {

    $( ".ship" ).draggable({ containment:'.container1', revert: "valid", cursorAt: { top: 0, left: 0 }});

    $( ".item" ).droppable({ tolerance:'pointer',
        drop: function( event, ui ) {
            if($(this).hasClass('closed')===false) {
                $(this).addClass('ship closed');
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

    $('.shipDouble'). on('click', function(){
        if($(this).hasClass('shipDoubleHorizontal')){
            $(this).removeClass('shipDoubleHorizontal');
            $(this).addClass('shipDoubleVertical');
        }
        else{
            $(this).removeClass('shipDoubleVertical');
            $(this).addClass('shipDoubleHorizontal');
        }
    })

    $('.shipTriple'). on('click', function(){
        if($(this).hasClass('shipTripleHorizontal')){
            $(this).removeClass('shipTripleHorizontal');
            $(this).addClass('shipTripleVertical');
        }
        else{
            $(this).removeClass('shipTripleVertical');
            $(this).addClass('shipTripleHorizontal');
        }
    })

    $('.shipFour'). on('click', function(){
        if($(this).hasClass('shipFourHorizontal')){
            $(this).removeClass('shipFourHorizontal');
            $(this).addClass('shipFourVertical');
        }
        else{
            $(this).removeClass('shipFourVertical');
            $(this).addClass('shipFourHorizontal');
        }
    })

});
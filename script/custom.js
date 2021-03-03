// $(document).ready(function(){
//     $('.navbar-toggler').click(function(){
//         $('.bx-menu').toggle('fast');
//         $('.bx-x').toggle('fast');
//     });

//     $('p.nav-link').click(function(){
//         $('p.nav-link').removeAttr('Id');
//         $('p.nav-link').removeClass('active');
//         $(this).addClass('active');
//     });
// })



function display(elem){
    var org="#"+elem;
    switch(org){
        case '#all':
            $('#work-container div').removeClass('hide-element');
            break;
        case '#web':
            $('#work-container #web').removeClass('hide-element');
            $('#work-container #game').addClass('hide-element');
            $('#work-container #api').addClass('hide-element');
            break; 
        case '#api':
            $('#work-container #api').removeClass('hide-element');
            $('#work-container #game').addClass('hide-element');
            $('#work-container #web').addClass('hide-element');
            break; 
        case '#game':
            $('#work-container #game').removeClass('hide-element');
            $('#work-container #api').addClass('hide-element');
            $('#work-container #web').addClass('hide-element');
    }
}
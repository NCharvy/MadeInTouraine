
$(document).ready(function() {
    
    
    $(document).on('click','nav img', function () {
        
        
        /* on veut fermer les autres paragraphe apres avoir clique dessus */
        
        var visible=$(this).next().is(':visible') ;
        $('.navbar:visible').slideUp() ;
        if(!visible) {
            
            $(this).next().slideDown () ;
        }
        

        
        
    });
    
    
        $(document).on('click','.jour', function () {
        
        
        /* on veut fermer les autres paragraphe apres avoir clique dessus */
        
        var visible=$(this).next().is(':visible') ;
        $('.subdivtout:visible').slideUp() ;
        if(!visible) {
            
            $(this).next().slideDown () ;
        }
        

        
        
    });
    
    
             Shadowbox.init();

    
}) ;
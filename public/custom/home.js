var Home = function(){
    
    // -------------------------------------------------------------------------
    
    this.__construct = function(){
        
        console.log('Home created');
        //Template = new Template;
        event = new Events;
        remove_hover();
    };
    
    // -------------------------------------------------------------------------
    var remove_hover = function(){
        console.log( $('#table-hover') );
        $('#table-hover').removeClass('table-hover');
    };       
    this.__construct();

};



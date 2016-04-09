var Template = function(){
    
    // -------------------------------------------------------------------------
    
    this.__construct = function(){
        
        console.log('Template created');
    };
    
    // -------------------------------------------------------------------------
    
    this.fetch_states = function(obj){
	var $output = '';
	$.each( obj, function( index , value ) {
                $output += '<option value="'+ value.id +'">'+ value.state_name +'</option>';
	});
	//console.log( $output );
	return $output;
    }
    
    // -------------------------------------------------------------------------
    
    this.fetch_cities = function(obj){
	var $output = '';
	$.each( obj, function( index , value ) {
                $output += '<option value="'+ value.id +'">'+ value.city_name +'</option>';
	});
	//console.log( $output );
	return $output;
    }
    
    // -------------------------------------------------------------------------

    this.__construct();

};

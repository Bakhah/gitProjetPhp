var $newdiv1 = $( "<div id='object1'>COUCOU</div>" ),
  newdiv2 = document.createElement( "div" ),
  existingdiv1 = document.getElementById( "foo" );
 
$( "body" ).append( $newdiv1, [ newdiv2, existingdiv1 ] );
function insertProductLigne(){
	document.getElementById('products_container').append(baliseProduit);
};

$( document ).ready(function() {
	$(ajoutProduit).click(function(){		
		//insertProductLigne();
		$( "body" ).append( $newdiv1, [ newdiv2, existingdiv1 ] );
	});
});

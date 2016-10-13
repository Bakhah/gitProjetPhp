/**
* Créer une nouvelle ligne de produit
*/
function createNewProductLigne(){
  //On clone le dernier produit et on vide son contenu
  $('.product:last').clone(true).appendTo('#products_container');
  $('.product:last input').val("");
};
function createAlert($type,$message){

  var $baliseAlert = "<div class='alert "+$type+" alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>$message</div>";
  alert($baliseAlert);
  $(this).parent().append($baliseAlert);
};
$( document ).ready(function() {
  /**
  * Quand on clique sur le bouton "ajouter produit"
  */
	$('#ajoutProduit').click(function(){
    createNewProductLigne();
	});

  /**
  * Quand on clique sur le bouton "supprimer"
  */
  $('.supp_prod').click(function(){
    var $i = $('.product').length;
      if($i>1){
        $(this).parent().remove();
      }else{
        createAlert('alert-warning',"La recette doit avoir au moins un produit");
      }
	});

});

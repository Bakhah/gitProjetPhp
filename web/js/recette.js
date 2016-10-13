/**
* Créer une nouvelle ligne de produit
*/
function createNewProductLigne(){
  //On clone le dernier produit et on vide son contenu
  $('.product:last').clone(true).appendTo('#products_container');
  $('.product:last input').val("");
};
function createAlert($type,$message){

  var $baliseAlert = "<div class='alert "+$type+" alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"+$message+"</div>";
  alert($baliseAlert);
  $(this).parent().append($baliseAlert);
};
/**
* @return toutes les informations d'un produit dans un array
*/
function getInfoFromProduct(product){
  var prod = [];
  alert(product.find(".prod_name").val());
  prod.push(product.find(".prod_name").val());
  prod.push(product.find(".quantite").text());
  prod.push(product.find(".unite").text());
  return prod;
}
/**
* @return toutes les informations de tous les produits dans un array
*/

function getAllProduct(){
  var prodArray = [];
  for(var i = 0; i<$('.product').length; i++){

    prod.push($('.product')[i])
  }
  return prodArray;
}
$( document ).ready(function() {
  /**
  * Quand on clique sur le bouton "ajouter produit"
  */
	$('#ajoutProduit').click(function(){
    createNewProductLigne();
	});
  $('#enregistrer').click(function(){
    var name = $('#nom').val();
    var instruction = $('#instruction').val();
    var product_tab = getInfoFromProduct($('.product').next());
    alert(name+instruction+product_tab);
  });

  /**
  * Quand on clique sur le bouton "supprimer"
  */
  $('.supp_prod').click(function(){
    var $i = $('.product').length;
      if($i>1){
        $(this).parent().remove();
      }else{
        alert("La recette doit avoir au moins un produit !");
      }
	});

});

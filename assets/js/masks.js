jQuery('document').ready(function(){
	jQuery('[data-mask="dob"]').mask('99/99/9999');
	jQuery('[data-mask="phone"]').mask('(99) 9999-9999?9');
	jQuery('[data-mask="taxvat"]').mask('999.999.999-99');
	jQuery('[data-mask="postcode"]').mask('99999-999');
});
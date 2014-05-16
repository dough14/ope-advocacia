jQuery('document').ready(function(){
	jQuery('[data-mask="dob"]').mask('99/99/9999');
	jQuery('[data-mask="phone"]').mask('(99) 9999-9999?9');
	jQuery('[data-mask="taxvat"]').mask('999.999.999-99');
    jQuery('[data-mask="cnpj"]').mask('99.999.999/9999-99');
    jQuery('[data-mask="rg"]').mask('99.999.999-*');
	jQuery('[data-mask="postcode"]').mask('99999-999');
    jQuery('[data-mask="date-time"]').mask('99/99/9999 99:99:99');
});
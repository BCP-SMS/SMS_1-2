function lettersOnly(evt) {
    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)){             
  $('#letter-message').addClass('d-none').removeClass('d-block');
return true;
}else{                
 $('#letter-message').addClass('d-block').removeClass('d-none');
return false;
}
}
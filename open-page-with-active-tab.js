var hash = window.location.hash.substr(1);
if (hash !== '') {
  setTimeout(function(){
  	jQuery('.tab-hash-' + hash).trigger('click');
  },1000);
}

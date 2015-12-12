var zgameFunction = function() {
   return {
       tabRank: function() {
           $('#bx-tabs select').change(function() {
               var idChange = $(this).val();
               console.log(idChange);
               $("a[href="+idChange+"]").trigger('click')
           })

       }
   }
}();

$(document).ready(function() {
    zgameFunction.tabRank();
})
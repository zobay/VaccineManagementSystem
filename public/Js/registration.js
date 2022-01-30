$('#verify').on('click', function (e) {
    e.preventDefault();
    var nid = $('#nid');
    var dob = $('#dob');
   if(!nid.val()) {
       alert('NID number is required');
   }

   if(!dob.val()) {
       alert('Date of birth is required')
   }

   if (nid.val() && dob.val()) {
       var verify = $('#verify');
       verify.text('')
       var timeOut = setTimeout(showHidden, 2000);
       verify.attr('disabled', true)
       verify.html(
           `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Verifying...`
       );
       // verify.appendChild(tag);

       function showHidden() {
           document.getElementById('details').removeAttribute('hidden')
           verify.attr('hidden', true);
           $('#submit').removeAttr('hidden', true)
       }

   }
})

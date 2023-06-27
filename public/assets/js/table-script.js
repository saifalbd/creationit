
$(document).ready(function() {
  $('#dataTable').DataTable({
    "paging":   false,
    "info":     false
  });
});

const removeForms = document.getElementsByClassName('remove-form');
Array.prototype.forEach.call(removeForms,(form)=>{
  const title = form.getAttribute("title");
  const button  = form.getElementsByTagName('button')[0];
  button.addEventListener('click',async()=>{
     const is = await swal({
          title: "Are you sure?",
          text: title,
          icon: "warning",
          buttons: true,
          dangerMode: true,
        });
        if(is){form.submit();}
 
  });
})

const crudeAlert = (property)=>{
  const queryString = window.location.search;
const parameters = new URLSearchParams(queryString);
const success = parameters.get(property);
if(success){
    swal({
        position: 'center',
        icon: 'success',
        title: success,
        showConfirmButton: false,
        timer: 1500
      })
      parameters.delete(property)
      const newUrl = `${window.location.origin}${window.location.pathname}?${parameters.toString()}`;
window.history.replaceState(null, null, newUrl);
}
}

crudeAlert('inserted');
crudeAlert('removed');
crudeAlert('updated');
crudeAlert('success');

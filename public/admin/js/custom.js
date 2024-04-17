$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,"searching": false,
      "buttons": '', "paging": false,
       
    }).buttons().container().appendTo('#example1_wrapper .col-md-12:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
  });

  //Loader Js
  document.addEventListener("DOMContentLoaded", function() {
    var lengthtotal  = document.getElementsByClassName('loadContentLink').length;
    for(var i=0;i<lengthtotal;i++){
        var loadContentLink = document.getElementsByClassName('loadContentLink')[i]; 
        var loaderContainer = document.getElementById('loaderContainer');
        var content = document.getElementById('content');
    
        loadContentLink.addEventListener('click', function(event) {
            event.preventDefault();
            showLoader();
            
            // Simulate content loading delay (Replace this with actual content loading)
            setTimeout(function() {
                hideLoader();
                content.style.display = 'block'; 
            }, 2000); // 2000 milliseconds (2 seconds) delay
        }); 
    } 

    function showLoader() {
        loaderContainer.style.display = 'flex';
    }

    function hideLoader() {
        loaderContainer.style.display = 'none';
    }
});



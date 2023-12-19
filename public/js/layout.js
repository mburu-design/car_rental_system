 function bookingRequest(){
    alert('sucesss');
}

$('.sidebar a').click(function(e) {

    e.preventDefault();
    
    var url = $(this).attr('href'); 
    
    $('.content').load(url);
    
  })
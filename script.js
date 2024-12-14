$(document).ready(function() {
   
    $('#registrationForm').submit(function(event) {
        event.preventDefault(); 
        
        var formData = $(this).serialize(); 
        
        
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: formData,
            success: function(response) {
                var data = JSON.parse(response);
                if (data.status === 'success') {
                   
                    $('#userName').text(data.name);
                    $('#userEmail').text(data.email);
                    $('#userPhone').text(data.phone);
                    $('#userDob').text(data.dob);
                    $('#response').show();
                    $('#registrationForm').hide(); 
                } else {
                    alert('Registration failed, please try again.');
                }
            }
        });
    });
});

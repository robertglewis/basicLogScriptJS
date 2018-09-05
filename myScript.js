function validation()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    if(username == '' && password == ''){
    document.getElementById('notice').innerHTML = 'Your fields still blank out';
    }
    else
    {
        $(document).ready(function(){
            // ajax call here
            $.ajax({
                type: "POST",
                url: "validate.php",
                data: "name="+username+"&pwd="+password,
                   success: function(data){    
                    alert(data);
                    console.log(data.message);
             if(data == 'True')    {
             //window.location="dashboard.php";
             document.getElementById('notice').innerHTML = 'You successful login!';
             }
             else    {
                document.getElementById('notice').innerHTML = 'Your password and username wrong!';
             }
                }
               });
        });

    }
}
<!DOCTYPE html>
<html lang="en">
    <link href="http://steveville.org/assets/css/cosmo.css" rel="stylesheet" type="text/css" media="all" />
    
    <body style="background-color: #ccc;">
        <div class="text-center">
            <h1>
                Mexon
            </h1>
        </div>
        <hr>
        <br /> 
        <div class="maincontent" style="background-color: #FFF; margin: auto; padding: 20px; width: 450px; border-top: 2px solid #27ae60;">
            <div class="text-center">
                <h1>Dear Mexon,</h1>
                <p> Subject : {{$allData['subject']}} </p>
                <p> {{$allData['message']}} </p>
                <p></p>
                <br>
                <p>Sincerely</p>
                <p> {{$allData['name']}} </p>
                <p> {{$allData['email']}}</p>
            </div>
        </div>
    </body>
</html>

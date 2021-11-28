<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body
        {
            background-image: url('banner1.jpg'); 
            background-size: cover;
        }
        .welcome
        {
            text-align: center;
            padding: 6%;
        }
        h1, p {
            color: #fff;
        }
        .card
        {
            margin-left: auto; 
            margin-right: auto;
        }
    </style>
    <title>Work</title>
</head>
<body>
    <div class="welcome">
        <h1>Welcome <b><span id="result"></span></b>!</h1>
    </div>
    <div class="card" style="width: 40rem;">
        <div class="card-body">
          <h5 class="card-title">Submit the work assigned:</h5>
        </div>
        <div class="card-body">
            <form name="myform" onsubmit="return validation()">
                <input type='file' name="file_upload"/><br><br>
                <button type="button submit" class="btn btn-success">Upload</button>
                <div id="del"></div>
            </form>
        </div>
      </div>
    <script>
        document.getElementById("result").innerHTML=localStorage.getItem("ddvalue");
        var file=document.forms['myform']['file_upload'];
        function validation()
        {
            if(file.value!='')
            {
                alert("UPLOAD SUCCESSFUL! THANK YOU!");
            }
            else
            {
                alert("No file is been Selected");
                return false;
            }
        }
    </script>
</body>
</html>

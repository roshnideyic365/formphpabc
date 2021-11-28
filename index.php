<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script>
        function passval()
        {
            var selecttext=document.getElementById("name").value;
            localStorage.setItem("ddvalue",selecttext);
            return true;
        }
    </script>
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
			background-image: url('back.jpg');
			background-size: cover;
            color: white;
		}
		form{
			background: rgba(0, 0, 0, 0.6) ; 
			margin-left: 30em;
			margin-right: 10em;
			margin-top: 6em;
			padding: 40px;
			box-shadow: 10px 10px 8px 10px #888888;

		}
        .work
        {
            height: 20vh;
        }
        #name
        {
            width: 100%;
            height: 6vh;
        }
	</style>
</head>
<body>
	<div class="container">
		<form action="employee.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label><br>
                <select id="name" class="name" name="name">
                    <option>--Select Name--</option>
                    <option>Zayden Yates</option>
                    <option>Santos Ashley</option>
                    <option>Emmalee Mullen</option>
                    <option>Lance Ware</option>
                    <option>Maliyah Huerta</option>
                    <option>Dawson Cross</option>
                    <option>Jazmin Lewis</option>
                    <option>Elliana Figueroa</option>
                    <option>Joselyn Gross</option>
                    <option>John Brown</option>
                    <option>Bridget Rowe</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="work" class="col-form-label">Task:</label>
                <textarea id="work" type="text" class="form-control work" name="work"></textarea>
            </div>
            <input type="submit" class="submit" value="Submit" onclick="passval()">
		</form>    
	</div>
</body>
</html>
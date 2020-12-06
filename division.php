
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bgcolor">
<nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addition.php">ADDITION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="subtraction.php">SUBTRACTION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="division.php">DIVISION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="multiplication.php">MULTIPLICATION</a>
          </li>
        </ul>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col ">

            </div>
            <div class="col">
                <table class="table table-borderless">
                    <h1>DVISION</h1>
                    <tr>
                        <td>FIRST NUMBER</td>
                        <td><input type="text" class="form-control" id="n1"></td>
                    </tr>
                    <tr>
                        <td>SECOND NUMBER</td>
                        <td><input type="text" class="form-control" id="n2"></td>
                    </tr>
                    <tr>
                        <td>QUOTIENT</td>
                        <td><input type="text" class="form-control" id="quotient"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onClick=buttonclick() type="button" class="btn btn-info">DIVIDE</button>
                        </td>
                    </tr>
                </table>
               
            </div>
            <div class="col ">

            </div>
        </div>
    </div>
    <script>
        function buttonclick() {
           var getn1=parseInt(document.getElementById("n1").value)
           var getn2=parseInt(document.getElementById("n2").value)
           console.log(getn1)
           console.log(getn2)
           if(Number.isInteger(getn1 && getn2)){
              result=getn1/getn2
              document.getElementById("quotient").value=result
            }
            else
            {
              alert("Enter a number")
            }
        }
        
    </script>
</body>
</html>
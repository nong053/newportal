<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
@import url(fonts/thsarabunnew.css);
body{ font-family: 'THSarabunNew', sans-serif; 
/* line-height: 1.7em; background: #e1e1e1;  */
}

body {
    overflow-x: hidden;
    /* color: rgba(244,244,245,.9); */
    background: radial-gradient(farthest-side ellipse at 10% 0,#333867 20%,#17193b);
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
}
</style>

<div class='container'>
    <div class='row' style='margin-top:100px; color:white;'>
    <div class='col-md-4  col-md-offset-4'>
    <form class="form-horizontal" action="main.php">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <input type='radio'>xx
        <input type='radio'>xx
        <p>
        <button type="submit" class="btn btn-default">Sign in</button>
        </p>
        </div>
    </div>
    </form>
    </div>
    </div>
</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>1</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
    <label for="websites1">Websites</label>
    <select name="websites1" id="websites1">
        <option value="Design">Design</option>
        <option value="Dev">Dev</option>
        <option value="Ecom">Ecom</option>
    </select>
</form>
<script type="text/javascript" src="js/jquery_1.7.1_min.js"></script> 
<script type="text/javascript">

$(document).ready(function() {

    function languageChange()
    {
         var lang = $('#websites1 option:selected').val();

        return lang;
    }


    $('#websites1').change(function(e) {                    

        var lang = languageChange();

        var dataString = 'lang=' + lang;

        $.ajax({

            type: "POST",
            url: "pass_value.php",
            data: dataString,
            dataType: 'json',
            cache: false,
            success: function(response) {

                    alert(response.message);

                }
        });

        return false;

    });

});

</script>
</body>
</html>
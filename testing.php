<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<form>
<input type="text" name="type" id="mal" />
<input type="text" name="name" id="name" />
<input type="button" value="submit" onclick="getIn();" />
</form>

<div id="result">
	fghdfhdfh
</div>
<script type="text/javascript">
	function getIn(){
$('form input, form select').each(
    function(){  
        var input = $(this);
           input.push($(this).val());
        $("#result").append(input);
        
    }
}
</script>
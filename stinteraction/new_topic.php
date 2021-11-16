<html>
<body>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_new_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" id= "topic"  type="text" id="topic" size="50" /></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" id="detail" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" id="btn" value="Submit" /> <input type="reset" name="Submit2" value="Reset" />  <a href="forum.php"> Go back! </a></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<script>
    $(document).ready(function(){

        $("#form1").validate({
           rules: {
             topic :"required",
             detail :"required"
           },
           messages: {
             topic :"please enter the topic ",
             detail :"please enter the detail"

           }
        })

        $('#btn').click(function() {
           $("#form1").validate();  // This is not working and is not validating the form
          });


        });

  </script>


</body>
</html>
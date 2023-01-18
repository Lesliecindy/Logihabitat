<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard administrateur</title>
   </head>

<div id="msg"></div>
<table border="1"  width="700px">
     <tr data-row-id="<?=$row['info_id'];?>">
           <td class="editable-col" contenteditable="true" col-index='0' oldVal="<?=$row['info_titre'];?>" ><?=$row['info_titre'];?></td>
    </tr>
    <tr data-row-id="<?=$row['info_id'];?>">
           <td class="editable-col" contenteditable="true" col-index='1' oldVal="<?=$row['info_contenu'];?>" ><?=$row['info_contenu'];?></td>
    </tr>
</table>
<body>
    <script>
        $(document).ready(function(){
        $('td.editable-col').on('focusout', function() {
            data = {};
            data['val'] = $(this).text();
            data['id'] = $(this).parent('tr').attr('data-row-id');
            data['index'] = $(this).attr('col-index');

            if($(this).attr('oldVal') === data['val'])
            return false;
            
            $.ajax({   
                type: "POST",  
                url: "ajax_request.php",  
                cache:false,  
                data: data,
                dataType: "json",       
                success: function(response)  
                {   
                    if(response.status) {
                    $("#msg").removeClass('alert-danger');
                    $("#msg").addClass('alert-success').html(response.msg);
                    } else {
                    $("#msg").removeClass('alert-success');
                    $("#msg").addClass('alert-danger').html(response.msg);
                    }
                }   
                });
        });
        });
    </script>
    

</body>
</html>
<?php
include "connection.php";
$conn=DbConnection();
$query="select * from tutorial";
$data=$conn->query($query);
$tutorial_name = array();
while($row = $data->fetch_assoc()){
    $tutorial_name[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>#tutorial_list{
    width:50%;
}
#topic_name{
    width:50%;
}
.name_div{
    display: none;
}

</style>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount','codesample'
        ],
        codesample_languages: [
            {text: 'HTML/XML', value: 'markup'},
            {text: 'JavaScript', value: 'javascript'},
            {text: 'CSS', value: 'css'},
            {text: 'PHP', value: 'php'},
            {text: 'Ruby', value: 'ruby'},
            {text: 'Python', value: 'python'},
            {text: 'Java', value: 'java'},
            {text: 'C', value: 'c'},
            {text: 'C#', value: 'csharp'},
            {text: 'C++', value: 'cpp'},
            {text: 'SQL', value: 'SQL'}
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help |codesample |code'
        ,content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
      });
    </script>
  </head>
  <body>
  <div class="container">
  <h1>Add Article</h1>
        <form method="POST" id="upload_form" enctype="multipart/form-data">
        <div class="form-group page_type_div">
                    <label for="page_type">Type</label>
                    <select id="page_type" class="form-control" name="page_type" onChange="showField()">
                    <option value=''>Tutorial</option>
                    <option value='blog'>Blog</option>
                    </select>
            </div>
            <div class="form-group name_div" >
                    <label for="name">Name</label>
                    <input type='text' id="name" class="form-control" name="name"/>
            </div>
            <div class="form-group tutorial_list_div">
                    <label for="tutorial_list">Tutorial Name</label>
                    <select id="tutorial_list" class="form-control" name="tutorial_list" onChange="getTopics()">
                    <option value=''>Please Select</option>
                    <?php for($i=0;$i<count($tutorial_name);$i++){
                        $tutorial_list .= "<option value='".$tutorial_name[$i]['id']."'>".$tutorial_name[$i]['name']."</option>";
                    }
                        echo $tutorial_list;
                    ?>
                    </select>
            </div>
            <div class="form-group topic_name_div">
                    <label for="topic_name">Topic Name</label>
                    
                    <select id="topic_name" class="form-control" name="topic_name" >
                    <option value=''>Please Select</option>
                    </select>
            </div>
            <textarea id="mytextarea"></textarea>
            <br><br>
            <button type="button" class="btn btn-primary" onClick="saveArticle()">Save</button>
        </form>
    </div>
    <script>
        function getTopics(){
            var id =$('#tutorial_list').val();
            $.ajax({
                type: 'POST',
                data: {
                        "id" : id,
                        "type" : "getTopic",
                    },
                url: "add-article-ajax.php",
                success: function(data){
                    debugger;
                    var data = JSON.parse(data);
                    let option;
                    for(let i=0;i<data.length;i++){
                        option+='<option value="'+data[i].name+'">'+data[i].name+'</option>';
                    }
                    $('#topic_name').empty();
                    $('#topic_name').append(option);
                    },
               
            });
        }
        function showField(){
            if( $('#page_type').val() == 'blog'){
                $('#tutorial_list').val('');
                $('#topic_name').val('');
                $('.tutorial_list_div').hide();
                $('.topic_name_div').hide();
                $('.name_div').show();
                
            }else{
                $('#tutorial_list').val('');
                $('#topic_name').val('');
                $('.tutorial_list_div').show();
                $('.topic_name_div').show();
                $('.name_div').hide();
            }
        }
        function saveArticle(){
            var tutorial_name =$('#tutorial_list').val();
            var topic_name =$('#topic_name').val();
            var page_type =$('#page_type').val();
            var name =$('#name').val();
            var article = tinyMCE.activeEditor.getContent({format : 'raw'});
            $.ajax({
                type: 'POST',
                data: {
                        "tutorial_name" : tutorial_name,
                        "topic_name" : topic_name,
                        "type" : "save",
                        "page_type" : page_type,
                        "name" :name,
                        "article" : article
                    },
                url: "add-article-ajax.php",
                success: function(data){
                        $('#tutorial_list').val('');
                        $('#topic_name').val('');
                        $('#name').val('');
                        tinyMCE.activeEditor.setContent('');
                    },
            });
        }
    </script>
  </body>
</html>
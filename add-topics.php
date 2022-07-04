<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .dynamic-inp{
            display: inline !important;
        }
        .cancel-btn{
            position: relative;
            left: 15px;
            bottom: 3px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form method="POST" id="upload_form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tutorial Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Tutorial Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                </div>
                <hr>
                <div  id="addHeading">

                </div>
                <button type="button" class="btn btn-primary" onclick="addHeading()">Add Heading</button>
                <button type="button" class="btn btn-primary" onclick="addTopics()">Add Topics</button>
                <br>
                <br>
                <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="button" class="btn btn-primary" onClick="submitForm()">Submit</button>
            </form>
        </div>
        <script>
var count =0;
var heading_array = [];
function addHeading(){
    tr = `<div class="form-group" id="heading_${count}"><input type="text" class="form-control dynamic-inp" id="name" aria-describedby="emailHelp" placeholder="Enter Heading" style="width:90%"><button type="button" class="btn btn-primary cancel-btn" onClick="removeHeading(${count})">x</button></div>`;
    $("#addHeading").append(tr);
    heading_array.push(count);
}
function addTopics(){
    tr = `<div class="form-group" id="topic_${count}"><input type="text" class="form-control dynamic-inp" id="name" aria-describedby="emailHelp" placeholder="Enter Topic" style="width:90%;border:1px solid yellow"><button type="button" class="btn btn-danger cancel-btn" onClick="removeTopics(${count})">x</button></div>`;
    $("#addHeading").append(tr);
}
function removeHeading(id){
    debugger;
     $(`#heading_${id}`).remove();
}
function removeTopics(id){
     $(`#topic_${id}`).remove();
}
function submitForm(){

    if ((!document.getElementById("name").value) && (!document.getElementById("description").value)){
        alert("Fill Complete Details")
    }
    else{
        debugger;
        form = $("form#upload_form");
        var formData = new FormData(form[0]);
        formData.append('record_id', 'new');
        fromData.append('heading_count',heading_array);
        $.ajax({
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        url: "addTopicsAjax.php",
        success: function (data) {
            data = JSON.parse(data);
            console.log(data);
        },
        complete: function(data){
        },
    });
    }
}
</script>
    </body>
</html>
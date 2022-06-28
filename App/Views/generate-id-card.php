<?php
include('header.php');
?>

<link rel="stylesheet" href="http://localhost/PHP-oop-crud-master/public/supportFiles/css/style.css">


<br>
<div class="row" style="margin: 0px 20px 5px 20px">
    <div class="col-sm-6">
        <div class="card jumbotron">
            <div class="card-body">
                <form class="form" method="POST" action="?Crud/generateIdCard">.
                    <label for="exampleInputEmail1">Student Id Card No.</label>
                    <input class="form-control mr-sm-2" placeholder="Enter Id Card No." name="id">
                    <small id="emailHelp" class="form-text text-muted">Every student's should have unique Id no.</small>
                    <br>
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="generate">Generate</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <?php if (isset($args[0])) { 
            include('idcard.php');
            
        }else{
            echo "Select id first";
        }
            
        ?>
    </div>
</div>
<script>
    function downloadtable() {

        var node = document.getElementById('mycard');

        domtoimage.toPng(node).then(function(dataUrl) {
            var img = new Image();
            img.src = dataUrl;
            downloadURI(dataUrl, "staff-id-card.png")
        }).catch(function(error) {
            console.error('oops, something went wrong', error);
        });
    }

    function downloadURI(uri, name) {
        var link = document.createElement("a");
        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        delete link;
    }
    </script>
<?php
    include('footer.php');
?>
    <div class="card">
        <div class="card-header">
            Here is your Id Card
        </div>
        <div class="card-body" id="mycard">
            <!-- second id card  -->
            <div class='container' style='text-align:left; border:2px dotted black;'>
                <div class='header'>
                </div>
                <div class='container-2'>
                    <div class='box-1'>
                        <h2><?= $args[0]['image'] ?></h2>
                    </div>
                    <div class='box-2'>
                        <h2><?= $args[0]['name'] ?></h2>
                    </div>
                    <div class='box-2'>
                        <h2><?= $args[0]['role'] ?></h2>
                    </div>
                    <div class='box-3'>
                        <img src='images/logo.png' alt=''>
                    </div>
                </div>

                <div class='container-3'>
                    <div class='info-1'>
                        <div class='id'>
                            <h4>ID No</h4>
                            <p><?= $args[0]['id_number'] ?></p>
                        </div>
                        <div class='dob'>
                            <h4>mobile</h4>
                            <p><?= $args[0]['mobile'] ?></p>
                        </div>
                    </div>
                    <div class='info-2'>
                        <div class='join-date'>
                            <h4>Date of Birth</h4>
                            <p><?= $args[0]['dob'] ?></p>
                        </div>
                    </div>
                    <div class='info-3'>
                        <div class='email'>
                            <h4>Address</h4>
                            <p><?= $args[0]['email'] ?> </p>
                        </div>
                    </div>
                </div>
                <!-- id card end -->
            </div>
            <br>
        </div>
    </div>
    <button id="demo" class="downloadtable btn btn-primary" onclick="downloadtable()"> Download Id Card</button>
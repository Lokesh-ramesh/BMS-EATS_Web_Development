<html>

<div class="col-sm order-md-last">
    <div class="card">
        <div class="card-body" style="background-color:#f6f9ff;">
            <h5 class="text-muted p-2">FORM SUBMITTED</H5>
            <h4 class="d-flex justify-content-between align-item-center">

                <span class="text-muted p-3">Your Cart</span>
                <span class="badge bg-secondary rounded-3 m-3 "><?php 
                            
                            echo mysqli_num_rows($result); ?></span>
            </h4>
            <ul class="list-group">
                <?php
                              
                            while ($row = mysqli_fetch_assoc($result)){
                            order($row['product_name'],($row['qty']*$row['new_price']));
                            }?>
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <h6>Total (Rs)</h6>
                    </div>
                    <span class="text-muted">Rs<?php echo $_SESSION['subtotal1']; ?></span>
                </li>
            </ul>
            <div class="col-12 pt-3">
                <button type="button" class="btn btn-primary" data-mdb-toggle="modal"
                    data-mdb-target="#exampleModal">PROCEED TO PAY
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content border-top border-bottom border-5"
                            style="border-color: #35558a !important;">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <img class="rounded mx-auto d-block" src="successfully-done.gif"
                                style="width:120px;height: 120px;px">
                            <div class="modal-body text-start text-black p-4">
                                <div class="row">
                                    <div class="col mb-3">
                                        <p class="modal-title text-uppercase fw-bold mb-1">Date</p>
                                        <p id="current_date"></p>
                                        <script>
                                        var today = new Date();
                                        var date = today.getFullYear() + '-' + (today.getMonth() + 1) +
                                            '-' + today.getDate();
                                        document.getElementById("current_date").innerHTML = date;
                                        </script>
                                    </div>

                                    <div class="col mb-3">
                                        <p class="modal-title text-uppercase fw-bold mb-1">Order No.</p>
                                        <p>GB5AG</p>
                                    </div>
                                </div>
                                <h5 class="modal-title text-uppercase mb-3" id="exampleModalLabel">
                                    <?php
                                     $_SESSION['username'];
                                    ?></h5>
                                <h4 class="mb-3" style="color: #35558a;">Thank you for ordering</h4>
                                <p class="mb-0" style="color: #35558a;">Payment summary</p>
                                <hr class="mt-2 mb-4"
                                    style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                                <div class="d-flex justify-content-between">
                                    <p class="fw-bold">Total</p>
                                    <p class="fw-bold" style="color: #35558a;">₹<?php echo $_SESSION['subtotal1']; ?>
                                    </p>
                                </div>
                                <hr class="mt-2 mb-4"
                                    style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">
                                <div class="d-flex justify-content-between">
                                    <p class="fw-bold">STATUS</p>
                                    <p class="fw-bold" style="color: #35558a;">PREPARING..</p>
                                </div>
                            </div>

                            <div class="modal-footer d-flex justify-content-center border-top-0 py-4">
                                <button type="button" class="btn btn-primary btn-lg mb-1"
                                    style="background-color: #35558a;">
                                    <a href="./index.php" style="text-decoration:none;color:white;">BACK TO
                                        HOME</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>
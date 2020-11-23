<?php
include_once("header.php");
require("session.php");

session_start();

?>
<header class="py-5 position-absolute " style="left: 0%;">
    <form action="session.php" method="POST">
        <input type="hidden" name="name" value="gigo">
        <button class="<?php if ($_SESSION["name"] == "gigo") : ?> btn btn-sm btn-success <?php else : ?>  btn btn-sm btn-danger <?php endif; ?>"><?php if (!empty($_SESSION["name"])) echo ("Log Out");
                                                                                                                                                    else echo ("Login"); ?></button>
    </form>
</header>
<div class="container-fluid d-flex justify-content-center" style=" overflow:visible; background-image: url('/img/bg.jpg'); height:80vh">
    <div class="div w-25 my-5">
        <img src="/img/human.jpg" class="d-block m-auto" width="150px" style="border-radius:100%;" alt="">



        <div class="form bg-white p-3 mt-3 rounded ">
            <form method="post" action="function.php">
                <div class="form-group">
                    <input type="text" name="name" class="form-control p-2" style="border-radius:50px;" placeholder="نام">
                </div>
                <div class="form-group">
                    <input type="text" name="family" class="form-control p-2" style="border-radius:50px;" placeholder="فامیل">
                </div>
                <div class="form-group">
                    <input type="datetime-local" name="data" class="form-control p-2" style="border-radius:50px;" placeholder="تاریخ تولد">
                </div>

                <div class="form-group ">

                    <div style="position: relative;">
                        <input type="tel" name="tel" class="form-control p-2" style="border-radius:50px;" placeholder="موبایل">
                        <span class="material-icons" style="position: absolute; top:10px; left:10px">
                            settings_phone
                        </span>
                    </div>
                </div>
                <div class="form-group">

                    <div class="dropdown" style="position: relative;">

                        <span class="material-icons" style="position: absolute; top:10px; left:10px">
                            swap_vert
                        </span>
                        <input type="text" name="city" class="text-right  border form-control p-2 btn btn-white dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:50px;" placeholder="استان">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">بیرجند</a>
                            <a class="dropdown-item" href="#">مشهد</a>
                            <a class="dropdown-item" href="#">تهران</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control p-2" style="border-radius:50px;" placeholder="شهر">
                </div>

                <div class="d-flex justify-content-start align-items-center">
                    <input type="checkbox" class="text-center m-2">

                    <small>با تمامی شرایط و قوانین این سایت موافقم</small>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-danger " style="border: 5px solid white;  position: relative; top:50px; width: 65px; height: 65px; border-radius: 50px;">
                        <span class="material-icons pt-2">
                            reply_all
                        </span>
                    </button>

                </div>
            </form>
        </div>


        <div class="titel text-center pb-5 pt-2">
            <h5>gigo</h5>
        </div>
    </div>
</div>




<?php include("footer.php");

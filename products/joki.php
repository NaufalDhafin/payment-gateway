<?php
    include "../configs/conf.php";
    include "source.php";
?>
    <section id="page1" style="margin-top: 60px;">
        <h2>Joki Tugas</h2>
        <div class="main-page">
          <div class="list" style="background: rgba(0, 0, 255, 0.452); height: 218px;">
            <p id="judul" style="color: white;">Warior</p>
            <p id="desk" style="color: white;display: flex;flex-direction: column;">
                <span><i class='bx bxs-cricket-ball'></i> Tampilan/Front End</span>
                <span><i class='bx bxs-cricket-ball'></i> Responsive</span>
                <span><i class='bx bxs-cricket-ball'></i> Tema Disediakan</span>
                <span><i class='bx bxs-cricket-ball'></i> Request Sesuai Tugas</span>
                <span><i class='bx bxs-cricket-ball'></i> Full Html,Css,Js</span>
                <div class="buys">
                    <a href="../payment/buy.php?id=4" id="buy"><?= rp($rjwarior['harga'])?></a>
                </div>
            </p>
          </div>
          <div class="list" style="background: rgba(183, 0, 255, 0.514); height: 295px;">
            <p id="judul" style="color: white;">Epic</p>
            <p id="desk" style="color: white;display: flex;flex-direction: column;">
                <span><i class='bx bxs-cricket-ball'></i> Tampilan/Front End</span>
                <span><i class='bx bxs-cricket-ball'></i> Back End</span>
                <span><i class='bx bxs-cricket-ball'></i> MYSQL</span>
                <span><i class='bx bxs-cricket-ball'></i> CRUD [Create,Read,Update,Delete]</span>
                <span><i class='bx bxs-cricket-ball'></i> Responsive</span>
                <span><i class='bx bxs-cricket-ball'></i> Tema Disediakan</span>
                <span><i class='bx bxs-cricket-ball'></i> Request Sesuai Tugas</span>
                <span><i class='bx bxs-cricket-ball'></i> Full Html,Css,Js</span>
                <div class="buys">
                    <a href="../payment/buy.php?id=5" id="buy"><?= rp($rjepic['harga'])?></a>
                </div>
            </p>
          </div>
          <div class="list" style="background: rgba(255, 0, 0, 0.452); height: 320px;">
            <p id="judul" style="color: white;">Mythic Glory</p>
            <p id="desk" style="color: white;display: flex;flex-direction: column;">
                <span><i class='bx bxs-cricket-ball'></i> Tampilan/Front End</span>
                <span><i class='bx bxs-cricket-ball'></i> Back End</span>
                <span><i class='bx bxs-cricket-ball'></i> MYSQL</span>
                <span><i class='bx bxs-cricket-ball'></i> CRUD [Create,Read,Update,Delete]</span>
                <span><i class='bx bxs-cricket-ball'></i> Integrasi Payment Gateway</span>
                <span><i class='bx bxs-cricket-ball'></i> Responsive</span>
                <span><i class='bx bxs-cricket-ball'></i> Request Tema</span>
                <span><i class='bx bxs-cricket-ball'></i> Request Sesuai Tugas</span>
                <span><i class='bx bxs-cricket-ball'></i> Full Html,Css,Js</span>
                <div class="buys">
                    <a href="../payment/buy.php?id=6" id="buy"><?= rp($rjmythic_glory['harga'])?></a>
                </div>
            </p>
          </div>
        </div>
    </section>

    
</body>

</html>
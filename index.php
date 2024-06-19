<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOPCASH</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>TOPCASH</h1>
    <a href="index.php"><img src="img/topcash12.png" alt="TopCash Logo"></a><br><br>
    <br><nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown" id="topup-game-dropdown">
                <a href="#" class="dropbtn">TopUp Game</a>
                <div class="dropdown-content">
                    <a href="#games-andro" class="dropdown-item">Android</a>
                    <a href="#games-pc" class="dropdown-item">PC</a>
                    <a href="#games-PS" class="dropdown-item">PlayStation</a>
                </div>
            </li>
            <li><a href="#pulsa">Isi Pulsa</a></li>
            <li><a href="#lain-lain">Produk Lainnya</a></li>
            <li><a href="#Tentang">Tentang Kami</a></li>
        </ul>
    </nav>
</header><BR><BR><BR><BR><BR><br><br><br><br>

<script>
        // Fungsi untuk menutup dropdown
        function closeDropdown() {
            const dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.style.display = 'none';
        }

        // Tambahkan event listener pada setiap item dropdown
        const dropdownItems = document.querySelectorAll('.dropdown-item');
        dropdownItems.forEach(item => {
            item.addEventListener('click', closeDropdown);
        });

        // Mencegah penutupan dropdown ketika mengklik tombol dropdown
        const dropbtn = document.querySelector('.dropbtn');
        dropbtn.addEventListener('click', function(event) {
            event.preventDefault();
            const dropdownContent = document.querySelector('.dropdown-content');
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        });
    </script>

<section id="games-andro">
    <h2>Game Android</h2>
    <div class="game-android">
        <a href="ml.php"><div class="game-logo-android"><img src="img/1c.jpg" alt="Mobile Legends"></div></a>
        <a href="ff.php"><div class="game-logo-android"><img src="img/2c.jpg" alt="Free Fire"></div></a>
        <a href="cod.php"><div class="game-logo-android"><img src="img/3c.jpg" alt="Call of Duty"></div></a>
        <a href="pubg.php"><div class="game-logo-android"><img src="img/4c.jpg" alt="PUBG Mobile"></div></a>
        <div class="game-logo-android"><img src="img/5c.png" alt="Mobile Legends Adventure"></div>
        <div class="game-logo-android"><img src="img/6c.png" alt="Genshin Impact"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
    <div class="game-android">
        <div class="game-logo-android"><img src="img/7c.png" alt="Mobile Legends"></div>
        <div class="game-logo-android"><img src="img/8ball.jpg" alt="8Ballpool"></div>
        <div class="game-logo-android"><img src="img/8c.jpg" alt="Call of Duty"></div>
        <div class="game-logo-android"><img src="img/8c+.jpg" alt="PUBG Mobile"></div>
        <div class="game-logo-android"><img src="img/aov.jpg" alt="aov"></div>
        <div class="game-logo-android"><img src="img/BrawlStars.jpg" alt="BrawlStars"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
</section>

<section id="games-pc">
    <h2>Game PC</h2>
    <div class="game-android">
        <div class="game-logo-android"><img src="img/valo.jpg" alt="Valorant"></div>
        <div class="game-logo-android"><img src="img/stumbel.jpg" alt="Stumble Guys"></div>
        <div class="game-logo-android"><img src="img/pb.jpg" alt="Point Blank"></div>
        <div class="game-logo-android"><img src="img/mine.jpg" alt="Minecraft"></div>
        <div class="game-logo-android"><img src="img/lol.png" alt="League of Legends"></div>
        <div class="game-logo-android"><img src="img/dota.jpg" alt="Dota 2"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
    <div class="game-android">
        <div class="game-logo-android"><img src="img/forza.jpg" alt="Forza Horizon"></div>
        <div class="game-logo-android"><img src="img/fornit.jpg" alt="Fortnite"></div>
        <div class="game-logo-android"><img src="img/apex.jpg" alt="Apex Legends"></div>
        <div class="game-logo-android"><img src="img/csgo.png" alt="CS:GO"></div>
        <div class="game-logo-android"><img src="img/zepeto.png" alt="Zepeto"></div>
        <div class="game-logo-android"><img src="img/tpg.png" alt="The Sims"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
</section>

<section id="games-PS">
    <h2>Game PlayStation</h2>
    <div class="game-android">
        <div class="game-logo-android"><img src="img/gtavps.jpg" alt="Gta V"></div>
        <div class="game-logo-android"><img src="img/losps.jpg" alt="Last Of Us"></div>
        <div class="game-logo-android"><img src="img/rdr2ps.jpg" alt="Red Dead Redemption"></div>
        <div class="game-logo-android"><img src="img/godps.jpg" alt="God of War III"></div>
        <div class="game-logo-android"><img src="img/mgrps.jpg" alt="Metal Gear Solid 4: Guns of the Patriots"></div>
        <div class="game-logo-android"><img src="img/gtaivps.jpg" alt="Grand Theft Auto IV"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
    <div class="game-android">
        <div class="game-logo-android"><img src="img/wdps.jpg" alt="Watch Dogs"></div>
        <div class="game-logo-android"><img src="img/codps.jpg" alt="Call of Duty: Modern Warfare 3"></div>
        <div class="game-logo-android"><img src="img/rer2ps.jpg" alt="resident evil revelations 2"></div>
        <div class="game-logo-android"><img src="img/acbps.jpg" alt="Assassins’s Creed: Brotherhood"></div>
        <div class="game-logo-android"><img src="img/bacps.jpg" alt="Batman: Arkham City"></div>
        <div class="game-logo-android"><img src="img/sldps.jpg" alt="Sleeping Dogs"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
</section>

<section id="pulsa">
    <h2>Pulsa</h2>
    <div class="game-android">
        <div class="game-logo-android"><img src="img/g.png" alt="AXIS"></div>
        <div class="game-logo-android"><img src="img/H.png" alt="Free Fire"></div>
        <div class="game-logo-android"><img src="img/i.jpg" alt="Indosat"></div>
        <div class="game-logo-android"><img src="img/j.jpg" alt="Tri"></div>
        <div class="game-logo-android"><img src="img/k.jpg" alt="Telkomsel"></div>
        <div class="game-logo-android"><img src="img/l.jpg" alt="SmartFren"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
</section>

<section id="lain-lain">
    <h2>Lain - Lain</h2>
<div class="game-android">
        <div class="game-logo-android"><img src="img/a.png" alt="Dana"></div>
        <div class="game-logo-android"><img src="img/b.png" alt="GoPay"></div>
        <div class="game-logo-android"><img src="img/c.png" alt="OVO"></div>
        <div class="game-logo-android"><img src="img/d.png" alt="Link Aja"></div>
        <div class="game-logo-android"><img src="img/e.jpg" alt="bpjs"></div>
        <div class="game-logo-android"><img src="img/f.jpg" alt="PLN"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
    <div class="game-android">
        <div class="game-logo-android"><img src="img/v1.jpg" alt="Google Play"></div>
        <div class="game-logo-android"><img src="img/v2.jpg" alt="Steam"></div>
        <div class="game-logo-android"><img src="img/v3.jpg" alt="PlayStation"></div>
        <div class="game-logo-android"><img src="img/v4.jpg" alt="Nitendo"></div>
        <div class="game-logo-android"><img src="img/v5.jpg" alt="Xbox"></div>
        <div class="game-logo-android"><img src="img/v6.jpg" alt="Garena"></div>
        <!-- Tambahkan div untuk game lainnya -->
    </div>
    </section>

    <section id="Tentang">
    <h2>Tugas Inovasi dan Rancangan Bisnis</h2>
    <div class="about">
        <p>Projek yang kita buat adalah hasil kolaborasi dari anggota yang berfikir secara bersama sehingga terbentuknya Inovasi penyedia Jasa TOPCASH. Berikut adalah anggota tim kami:</p><br>
        <ul>
            <li>Fauzan Akmal Setiawan - 123220010</li>
            <li>Yosua Dwi Aprilian - 123220011 </li>
            <li>NAZAR MIFTAKHUL - 123220029</li>
        </ul><br>
        <p>Tim kami berfokus untuk menciptakan inovatif yang mudah dan murah untuk dapat memberikan dampak positif bagi bisnis dan masyarakat.</p>
    </div>
</section>



<footer>
    <p>© 2024 TOPCASH. All rights reserved.</p>
</footer>
</body>
</html>

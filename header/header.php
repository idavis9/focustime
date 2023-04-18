<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleh.css?v=2.0">
    <title>Document</title>
</head>
<body>

    <!-- Sección de Pc  -->

    <div class="header">
        <div class="headersub">
            <div class="logo">
                <a href="../index.php">
                    <img src="../img//logos/FTSIN.png" alt="Logo de la marca">
                </a>
            </div>

            <div class="menu">
                <nav>
                    <li><a href="../index.php">MARKETING DIGITAL</a></li> |
                    <li><a href="../index.php">DISEÑO WEB</a></li> |
                    <li><a href="../index.php">DISEÑO LOGOTIPO</a></li> |
                    <li style="padding: 0px 0px 0px 15px;"><a href="../index.php">CONTÁCTANOS</a></li>
                </nav>
            </div>
        </div>
    </div>


    <!-- Sección de Tablet y Movil -->

    <div class="header-tm">
        <div class="headersub-tm">
            <div class="logo-tm">
                <a href="../index.php">
                    <img src="../img//logos/FTSIN.png" alt="Logo de la marca">
                </a>
            </div>
            <div class="menu-tm">
                <div class="bars-menu">
                    <span class="line1 "></span>
                    <span class="line2 "></span>
                    <span class="line3 "></span>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-full ">
        <nav>
            <li><a href="../index.php">MARKETING DIGITAL</a></li> 
            <li><a href="../index.php">DISEÑO WEB</a></li> 
            <li><a href="../index.php">DISEÑO LOGOTIPO</a></li>
            <li><a href="../index.php">CONTÁCTANOS</a></li>
        </nav>

    </div>

    <script>
        const menuimg = document.querySelector(".bars-menu")
        const menufull = document.querySelector(".menu-full")

        menuimg.addEventListener('click', ()=>{
        menufull.classList.toggle('mobile-menu')})

        
        const barsmenu = document.querySelector(".bars-menu")
        const lineuno = document.querySelector(".line1")
        const linedos = document.querySelector(".line2")
        const linetres = document.querySelector(".line3")

        barsmenu.addEventListener('click', ()=>{
        lineuno.classList.toggle('activeline1')})

        barsmenu.addEventListener('click', ()=>{
        linedos.classList.toggle('activeline2')})

        barsmenu.addEventListener('click', ()=>{
        linetres.classList.toggle('activeline3')})

    </script>



</body>
</html>
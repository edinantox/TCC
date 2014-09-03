<?php
echo '
    <div id="content">

        <div id="header">
            <div id="logo">
            </div>

            <div id="search">
                <input type="text" onkeypress="busca_geral()" name="busca-barra"/>
                <img id="lupa"
                src="./view/imagens/buscar.png"
                onclick="buscar()"
                onmouseover="this.src=./view/imagens/buscar-hover.png"
                onmouseout="this.src=./view/imagens/buscar.png"
                style="cursor:pointer;">
            </div>

            <div id="search">
            </div>

            <div id="cat">
            </div>
        </div>

        <div id="banner">
        </div>

        <div id="principais">
        </div>

        <div id="footer">
        </div>
    </div>



';
?>


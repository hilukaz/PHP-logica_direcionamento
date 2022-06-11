<html>
    <head>
        <title>Tela<?php echo $_GET['tela'];?></title>
    </head>
    <body>
        <?php if($_GET['tela']==1){?><!--se variável tela == 1, apareça tudo que esta dentro do if-->
            <h3>Carregou o conteúdo da tela 1</h3>

        <?php }else if($_GET['tela']==2){?>            
            <h3>Carregou o conteúdo da tela 2</h3>

        <?php }else{?>                
            <h3>Carregou o conteúdo da tela 3</h3>
            
        <?php }?>
    </body>
</html>
<?php
    date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 - <?php echo " ".date("d/m/Y") ?></title>
    <style type="text/css">
        #caixa-inicio{
            background-color: #B0C4DE;
            padding: 5px;
            text-align: center;
            font-size: 24px;
            font-weight: bolder;
            border-radius: 10px;
            width: 50vw;
            border: 0 0 0 0;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 15px;
            color: black;
        }
        #caixa-inicio:hover{
            background-color: #ADD8E6;
            cursor: pointer;
            border-style: groove;
            border-bottom: 2px solid;
            border-top: 0;
            border-left: 0;
            border-right: 2px solid;
            border-color: #D3D3D3;
            color: black;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5px;
        }
        #caixa-body{
            background-color: #D3D3D3;
            border-radius: 5px;
            border: 1px 1px 1px 1px solid;
            margin: auto;
            text-align: justify;
            width: 49vw !important;
            height: 250px;
            padding: 15px;
            border-radius: 10px;
            margin-top: 5px;
            font-size: 16px;
            overflow: auto;           
        }
        p:before { 
            content: "\00a0 \00a0 \00a0 \00a0"; 
        }
    </style>
</head>
<body>
    <div id="caixa-inicio">
    <?php
        echo "DEFAULT";
    ?>
    </div>

    <div id="caixa-body">
        <?php 
            echo "</br>";
            echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam accumsan, magna in cursus vestibulum, sapien lacus interdum lacus, ut facilisis magna odio non urna. Mauris sed nisi quis diam suscipit rhoncus. Aenean volutpat sapien in nibh lobortis, ut consequat mi laoreet. Suspendisse vulputate libero quis ante scelerisque, vitae vulputate ligula auctor. Sed eget viverra risus, imperdiet sollicitudin justo. Duis quis nisi a est maximus imperdiet. Cras accumsan eu libero nec fermentum. Aliquam et vestibulum enim. Duis imperdiet id velit non cursus. Fusce vehicula elit condimentum nisi vulputate, in blandit justo faucibus. Curabitur sit amet purus non ligula faucibus tincidunt. Aliquam nec volutpat dolor. Curabitur condimentum leo vel magna tempor, nec semper lacus dapibus.</p>";
        ?>
    </div>
</body>
</html>

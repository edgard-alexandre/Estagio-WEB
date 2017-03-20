<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Física Antunes</title>
    <link rel="stylesheet" href="">
    <style>
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
            opacity: 0.8;
        }
        
        li{
            float: left;
        }
        
        li:link{
            text-decoration: none;
        }

        li{
            
            display: block;
            color: white;
            text-align: center;
            padding-left: 7%;
            padding-right: 7%;
            padding-top: 2%;
            padding-bottom: 2%;
        }

        li:hover{
            background-color: #000000;
        }  
        
        #caixa{
            position: relative;
            top: 0;
            width: 17%;
            border: solid;
            border-color: black;
            background-color: black;
            opacity: 0.7;
        }
        
        #login{
            float: left;
            padding-top: 2%;
        }
    </style>
</head>
<body background="http://localhost/FisicaAntunes/application/views/slide1.jpg">
    <div>
        <ul>
            <li><?php 
                    echo anchor(base_url("home/funcao"),"HOME");
                ?> 
            </li>
            <li>TÉCNICO</li>
            <li>GRADUAÇÃO</li>
            <li>SOBRE</li>
            <li>CONTATO</li>
            <div id="login">
                <a href="home.php">LOGIN</a>
            </div>
        </ul>    
    </div>
    <div id="caixa">
    </div>
</body>
</html>
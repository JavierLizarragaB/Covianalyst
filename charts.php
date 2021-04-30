<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    include_once 'server/functions.php';
    if(!isset($_SESSION["ID_Usuario"])){
        header("location: login.php");
        exit();
    }else if(isset($_SESSION['LAST_ACTIVITY'])){
        if((time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
            logout();

            header("location: login.php?error=tiempofuera");
            exit();
        }else{
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Coroanalyst</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});

    google.charts.setOnLoadCallback(drawTwoAChart);
    google.charts.setOnLoadCallback(drawTwoBChart);
    google.charts.setOnLoadCallback(drawThreeChart);
    google.charts.setOnLoadCallback(drawFourAChart);
    google.charts.setOnLoadCallback(drawFourBChart);
    google.charts.setOnLoadCallback(drawFiveAChart);
    google.charts.setOnLoadCallback(drawFiveBChart);

    function drawTwoAChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Categoría', 'Compras realizadas'],
            ['Ropa', 8],
            ['Comida a domicilio', 2],
            ['Víveres a domicilio', 4],
            ['Muebles/electrodomésticos', 2],
            ['Coleccionables', 8],
            ['Libros', 6],
            ['Computadoras y/o electrónicos', 5],
            ['Ferretería', 3],
            ['Entretenimiento', 8],
            ['Aplicaciones', 7],
            ['Reservaciones y boletos', 6],
            ['Higiene', 5],
            ['Deporte', 4],
            ['Otros', 3],
            ['Ninguno', 0]
        ]);

        var options = {
            title:'Categorías de compras realizadas antes de la pandemia',
            width:650,
            height:600
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_twoA_div'));
        chart.draw(data, options);
    }

    function drawTwoBChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Categoría', 'Compras realizadas'],
            ['Ropa', 8],
            ['Comida a domicilio', 2],
            ['Víveres a domicilio', 4],
            ['Muebles/electrodomésticos', 2],
            ['Coleccionables', 8],
            ['Libros', 6],
            ['Computadoras y/o electrónicos', 5],
            ['Ferretería', 3],
            ['Entretenimiento', 8],
            ['Aplicaciones', 7],
            ['Reservaciones y boletos', 6],
            ['Higiene', 5],
            ['Deporte', 4],
            ['Otros', 3],
            ['Ninguno', 0]
        ]);

        var options = {
            title:'Categorías de compras realizadas durante la pandemia',
            width:650,
            height:600
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_twoB_div'));
        chart.draw(data, options);
    }

    function drawThreeChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Gastos', 'Respuestas'],
            ['Menos de $1,000 MXN', 8],
            ['$1,000 - $2,500 MXN', 2],
            ['$2,500 - $5,000 MXN', 4],
            ['$5,000 - $7,500 MXN', 2],
            ['$7,500 - $10,000 MXN', 8],
            ['Más de $10,000 MXN', 6]
        ]);

        var options = {
            title:'Gastos mensuales en compras en línea durante la pandemia', 
            width:650, 
            height:600
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_three_div'));
        chart.draw(data, options);
    }

    function drawFourAChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Plataforma', 'Respuestas'],
            ['Mercado Libre', 8],
            ['Amazon', 2],
            ['Facebook Marketplace', 4],
            ['Alibaba/Aliexpress', 2],
            ['eBay', 8],
            ['E-shop/misma marca', 6],
            ['Otros', 3],
            ['N/A', 0]
        ]);

        var options = {
            title:'Plataformas utilizadas para compras en línea antes de la pandemia', 
            pieHole: 0.4,
            width:650, 
            height:600
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_fourA_div'));
        chart.draw(data, options);
    }

    function drawFourBChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Plataforma', 'Respuestas'],
            ['Mercado Libre', 8],
            ['Amazon', 2],
            ['Facebook Marketplace', 4],
            ['Alibaba/Aliexpress', 2],
            ['eBay', 8],
            ['E-shop/misma marca', 6],
            ['Otros', 3],
            ['N/A', 0]
        ]);

        var options = {
            title:'Plataformas utilizadas para compras en línea durante la pandemia', 
            pieHole: 0.4,
            width:650, 
            height:600
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_fourB_div'));
        chart.draw(data, options);
    }

    function drawFiveAChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Método de pago', 'Respuestas'],
            ['Tarjeta de crédito', 8],
            ['Tarjeta de débito', 2],
            ['Paypal', 4],
            ['Mercado Pago', 2],
            ['Efectivo', 8],
            ['Transferencia electrónica', 6],
            ['Depósito en tiendas de conveniencia', 3],
            ['Otro', 0],
            ['N/A', 0]
        ]);

        var options = {
            title:'Uso de métodos de pago antes de la pandemia', 
            pieHole: 0.4,
            width:650, 
            height:600
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_fiveA_div'));
        chart.draw(data, options);
    }

    function drawFiveBChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Método de pago', 'Respuestas'],
            ['Tarjeta de crédito', 8],
            ['Tarjeta de débito', 2],
            ['Paypal', 4],
            ['Mercado Pago', 2],
            ['Efectivo', 8],
            ['Transferencia electrónica', 6],
            ['Depósito en tiendas de conveniencia', 3],
            ['Otro', 0],
            ['N/A', 0]
        ]);

        var options = {
            title:'Uso de métodos de pago durante la pandemia', 
            pieHole: 0.4,
            width:650, 
            height:600
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_fiveB_div'));
        chart.draw(data, options);
    }

    </script>
</head>

<body align=>
    <nav style="background: rgb(241, 247, 252);" class="navbar justify-content-end" >
            <form style="margin-right: 35px;" method="POST" action="AboutUs.php">
                <button class="btn btn-primary btn-block" style="background:#f4476b;border:none;" type="submit" name="submit">Acerca de nosotros</button>
            </form>
            <br/>
            <form style="margin-right: 35px;" method="POST" action="server/logout.php">
                <button class="btn btn-primary btn-block" style="background:#f4476b;border:none;" type="submit" name="submit">Cerrar sesión</button>
            </form>
    </nav>


    <div id="chart_oneA" align="center"></div>
    <div id="chart_oneB" align="center"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAStuff);
    function drawAStuff() {
        var jsonData = $.ajax({
        url: "getdata.php",
        dataType: ".json",
        async: false
        }).responseText;

        var data = new google.visualization.DataTable(jsonData);

        /*var data = new google.visualization.arrayToDataTable([
            ['','Respuestas'],
            ["Más de 10 veces por mes", 10],
            ["10 a 6 veces al mes", 6],
            ["5 a 1 vez al mes", 7],
            ["1 vez cada varios meses", 11],
            ["No realizó compras en línea", 0],
        ]);*/

        var options = {
            title: 'Frecuencia de compras en línea antes de la pandemia',
            width: 900,
            legend: {position: 'none'},
            chart: {title: 'Frecuencia de compras en línea antes de la pandemia'},
            bars: 'horizontal',
            axes: {
                x: {
                    0: {side: 'top', label: 'Respuestas'}
                }
            },
            bar: {groupWidth:"90%"}
        };

        var chart = new google.charts.Bar(document.getElementById('chart_oneA'));
        chart.draw(data, options);
    };
    </script>

    <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawBStuff);
    function drawBStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['','Respuestas'],
            ["Más de 10 veces por mes", 10],
            ["10 a 6 veces al mes", 6],
            ["5 a 1 vez al mes", 7],
            ["1 vez cada varios meses", 11],
            ["No realizó compras en línea", 0],
        ]);

        var options = {
            title: 'Frecuencia de compras en línea durante la pandemia',
            width: 900,
            legend: {position: 'none'},
            chart: {title: 'Frecuencia de compras en línea durante la pandemia'},
            bars: 'horizontal',
            axes: {
                x: {
                    0: {side: 'bottom', label: 'Respuestas'}
                }
            },
            bar: {groupWidth:"90%"}
        };

        var chart = new google.charts.Bar(document.getElementById('chart_oneB'));
        chart.draw(data, options);
    };
    </script>

    <table class="columns" align="center">
      <tr>
        <td><div id="chart_twoA_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="chart_twoB_div" style="border: 1px solid #ccc"></div></td>
      </tr>
      <tr>
        <td><div id="chart_fourA_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="chart_fourB_div" style="border: 1px solid #ccc"></div></td>
      </tr>
      <tr>
        <td><div id="chart_fiveA_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="chart_fiveB_div" style="border: 1px solid #ccc"></div></td>
      </tr>
      <tr>
        <td><div id="chart_three_div" style="border: 1px solid #ccc"></div></td>
      </tr>
    </table>
</body>
</html>
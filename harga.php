<html>
<head>
    <title>Form Belanja</title>
    <style>
        form {
            background-color: rgba(205, 92, 92, 0.897);
            color: rgb(139, 0, 0);
            font-family: arial;
            font-size: 30px;
            text-align: center;
            width: 30%;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
        }
        tr{
            font-size: 20px;
            color:rgb(110, 0, 0);
        }
        h3{
            font-family: arial;
            text-align: center;
        }
        p{
            font-family: arial;
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <div>
            <h3>BUAH</h3>
            <p>Jeruk : 10.000 <br>
                Mangga : 15.000 <br>
                Apel : 20.000</p>
            <form action="buah.php" method="POST" id="buah" name="buah" enctype="multipart/form"  style = "border:6px double black;">
                <legend>Form Belanja</legend>
                <table>
                    <tr>
                        <td>Jeruk (kg) </td>
                        <td>:</td>
                        <td><input type="number" id="jeruk" onchange="setValue()" name="jeruk"></td>
                    </tr>
                    <tr>
                         <br>
                        <td>Mangga (kg) </td>
                        <td>:</td>
                        <td><input type="number" id="mangga" onchange="setValue()" name="mangga"> <br></td>
                    </tr>
                    <tr>
                        <td>Apel (kg) </td>
                        <td>:</td>
                        <td><input type="number" id="apel" onchange="setValue()" name="apel"></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td><input type="text" id="total" name="total" readonly></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="">Cetak</button></td>
                    </tr> 
                </table>
            </form>
        </div>
    </section>

</body>
    <script>
        function setValue(){
            var total = document.getElementById("total");
            var jeruk = document.getElementById("jeruk").value * 10000;
            var mangga = document.getElementById("mangga").value * 15000;
            var apel = document.getElementById("apel").value * 20000;
            console.log(jeruk + mangga + apel);
            var hasil = jeruk + mangga + apel;
            total.value = hasil;
        }
    </script>
</html>
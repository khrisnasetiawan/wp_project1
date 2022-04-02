
<!DOCTYPE html>
<html>
    <head>
        <title>Luas Segitiga</title>
    </head>
    <body>
        <h1>Hitung Luas Segitiga</h1>
        <form action="LuasSegitiga.php" method="post" >
            <table>
                <tr>
                    <td>
                        <label>Alas</label>
                        <br>
                        <input type="text" name="alas">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tinggi</label>
                        <br>
                        <input type="text" name="tinggi">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Luasnya</label>
                        <br>
                        <input type="text" name="Luasnya">
                    <?php
                        if(isset($_POST['submit']))
                        {
                            $alas = $_POST['alas'];
                            $tinggi = $_POST['tinggi'];
                            $luas = 1/2 * $alas * $tinggi;
                            
                            echo ": $luas";
                        }     
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
                
    </body>
</html> 
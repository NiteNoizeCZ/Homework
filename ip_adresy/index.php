<!DOCTYPE html>
<html>

<head>
    <title>Počítání IP adres</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!--Vstupy pro zadávání IP adres-->
    <form method="GET">
        <div class="inputs">

            <p><b>Zadejte adresu</b></p>
            <label for="ot1"></label>
            <input type="number" name="ot1" min="0" max="255" required> .

            <label for="ot2"></label>
            <input type="number" name="ot2" min="0" max="255" required> .

            <label for="ot3"></label>
            <input type="number" name="ot3" min="0" max="255" required> .

            <label for="ot4"></label>
            <input type="number" name="ot4" min="0" max="255" required> /

            <label for="pf"></label>
            <input type="number" name="pf" min="0" max="32" required>

            <button class="button"><input type="submit" value="vypočítat"></button>
        </div>
    </form>
    <div class="php">
        <?php
        //proměnné k zadávání oktetů a prefixu
        $ot1 = filter_input(INPUT_GET, "ot1");
        $ot2 = filter_input(INPUT_GET, "ot2");
        $ot3 = filter_input(INPUT_GET, "ot3");
        $ot4 = filter_input(INPUT_GET, "ot4");
        $pf = filter_input(INPUT_GET, "pf");

        //vypsání adresy v desítkové soustavě
        echo $ot1 . "." . $ot2 . "." . $ot3 . "." . $ot4 . "&nbsp", "/" . $pf;
        echo "<br>";

        //převedení na binární soustavu a vypsání pomocí echo
        $bincon1 = str_pad(decbin("$ot1"), 8, "0", STR_PAD_LEFT);
        $bincon2 = str_pad(decbin("$ot2"), 8, "0", STR_PAD_LEFT);
        $bincon3 = str_pad(decbin("$ot3"), 8, "0", STR_PAD_LEFT);
        $bincon4 = str_pad(decbin("$ot4"), 8, "0", STR_PAD_LEFT);

        echo $bincon1 . "." . $bincon2 . "." . $bincon3 . "." . $bincon4 . "<br>";

        $maska1 = " ";
        switch ($pf) {
            case 1:
                $maska1 = "128.0.0.0";
                break;
            case 2:
                $maska1 = "192.0.0.0";
                break;
            case 3:
                $maska1 = "224.0.0.0";
                break;
            case 4:
                $maska1 = "240.0.0.0";
                break;
            case 5:
                $maska1 = "248.0.0.0";
                break;
            case 6:
                $maska1 = "252.0.0.0";
                break;
            case 7:
                $maska1 = "254.0.0.0";
                break;
            case 8:
                $maska1 = "255.0.0.0";
                break;
            case 9:
                $maska1 = "255.128.0.0";
                break;
            case 10:
                $maska1 = "255.192.0.0";
                break;
            case 11:
                $maska1 = "255.224.0.0";
                break;
            case 12:
                $maska1 = "255.240.0.0";
                break;
            case 13:
                $maska1 = "255.248.0.0";
                break;
            case 14:
                $maska1 = "255.252.0.0";
                break;
            case 15:
                $maska1 = "255.254.0.0";
                break;
            case 16:
                $maska1 = "255.255.0.0";
                break;
            case 17:
                $maska1 = "255.255.128.0";
                break;
            case 18:
                $maska1 = "255.255.192.0";
                break;
            case 19:
                $maska1 = "255.255.224.0";
                break;
            case 20:
                $maska1 = "255.255.240.0";
                break;
            case 21:
                $maska1 = "255.255.248.0";
                break;
            case 22:
                $maska1 = "255.255.252.0";
                break;
            case 23:
                $maska1 = "255.255.254.0";
                break;
            case 24:
                $maska1 = "255.255.255.0";
                break;
            case 25:
                $maska1 = "255.255.255.128";
                break;
            case 26:
                $maska1 = "255.255.255.192";
                break;
            case 27:
                $maska1 = "255.255.255.224";
                break;
            case 28:
                $maska1 = "255.255.255.240";
                break;
            case 29:
                $maska1 = "255.255.255.252";
                break;
            case 30:
                $maska1 = "255.255.255.254";
                break;
            case 31:
                $maska1 = "255.255.255.255";
                break;
            case 32:
                $maska1 = "255.255.255.11111111";
                break;
        }
        echo "<br><p><b>maska v desítkové:</b></p>";
        echo $maska1;

        $maska2 = " ";
        switch ($pf) {
            case 1:
                $maska2 = "10000000.00000000.00000000.00000000";
                break;
            case 2:
                $maska2 = "11000000.00000000.00000000.00000000";
                break;
            case 3:
                $maska2 = "11100000.00000000.00000000.00000000";
                break;
            case 4:
                $maska2 = "11110000.00000000.00000000.00000000";
                break;
            case 5:
                $maska2 = "11111000.00000000.00000000.00000000";
                break;
            case 6:
                $maska2 = "11111100.00000000.00000000.00000000";
                break;
            case 7:
                $maska2 = "11111110.00000000.00000000.00000000";
                break;
            case 8:
                $maska2 = "11111111.00000000.00000000.00000000";
                break;
            case 9:
                $maska2 = "11111111.10000000.00000000.00000000";
                break;
            case 10:
                $maska2 = "11111111.11000000.00000000.00000000";
                break;
            case 11:
                $maska2 = "11111111.11100000.00000000.00000000";
                break;
            case 12:
                $maska2 = "11111111.11110000.00000000.00000000";
                break;
            case 13:
                $maska2 = "11111111.11111000.00000000.00000000";
                break;
            case 14:
                $maska2 = "11111111.11111100.00000000.00000000";
                break;
            case 15:
                $maska2 = "11111111.11111110.00000000.00000000";
                break;
            case 16:
                $maska2 = "11111111.11111111.00000000.00000000";
                break;
            case 17:
                $maska2 = "11111111.11111111.10000000.00000000";
                break;
            case 18:
                $maska2 = "11111111.11111111.11000000.00000000";
                break;
            case 19:
                $maska2 = "11111111.11111111.11100000.00000000";
                break;
            case 20:
                $maska2 = "11111111.11111111.11110000.00000000";
                break;
            case 21:
                $maska2 = "11111111.11111111.11111000.00000000";
                break;
            case 22:
                $maska2 = "11111111.11111111.11111100.00000000";
                break;
            case 23:
                $maska2 = "11111111.11111111.11111110.00000000";
                break;
            case 24:
                $maska2 = "11111111.11111111.11111111.00000000";
                break;
            case 25:
                $maska2 = "11111111.11111111.11111111.10000000";
                break;
            case 26:
                $maska2 = "11111111.11111111.11111111.11000000";
                break;
            case 27:
                $maska2 = "11111111.11111111.11111111.11100000";
                break;
            case 28:
                $maska2 = "11111111.11111111.11111111.11110000";
                break;
            case 29:
                $maska2 = "11111111.11111111.11111111.11111000";
                break;
            case 30:
                $maska2 = "11111111.11111111.11111111.11111100";
                break;
            case 31:
                $maska2 = "11111111.11111111.11111111.11111110";
                break;
            case 32:
                $maska2 = "11111111.11111111.11111111.11111111";
                break;
        }
        echo "<br><p><b>maska v binarni:</b></p>";
        echo $maska2;

        $binot = $bincon1 . $bincon2 . $bincon3 . $bincon4;
        $f3ot = $ot1 . "." . $ot2 . "." . $ot3 . ".";
        $lastot = "";
        for ($i = 24; $i < 32; $i++) {
            $lastot = $lastot . $binot[$i];
            if ($i == 31) {
                $firsth = bindec($lastot) + 1;
                $lasth = 254;
                $count = $lasth - $firsth;
            }
        }
        $lastot = 254 - bindec(substr($maska2, 24, 32));
        echo '<p class="nadpis"><b>První host:</b></p>' . '<p>' . $f3ot . $firsth . '</p>';
        echo '<p class="nadpis"><b>Poslední host:</b></p>' . '<p>' . $f3ot . $lasth . '</p>';
        echo '<p class="nadpis"><b>Počet hostů:</b></p>' . '<p>' . $count . '</p>';
        ?>

    </div>

</body>

</html>
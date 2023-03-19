<?php

function quiz() {
    
    rozpocznij();

    if (isset($_GET['pyt'])) {
        switch($_GET['pyt']) {
            case 1: 
                pytanie1();
                dalej(2);
                break;
            case 2:
                pytanie2();
                dalej(3);
                break;
            case 3:
                pytanie3();
                dalej(4);
                break;
            case 4:
                pytanie4();
                dalej(5);
                break;
            case 5:
                pytanie5();
                dalej(0);
                break;
            default:
                break;
        }
    }

}

function rozpocznij() {
    echo '
        <form action="" method="get">
            <input type="hidden" name="pyt" value=1>
            <button>Rozpocznij quiz</button>
        </form>
    ';
}

function dalej($i) {
    echo '
        <form action="" method="get">
            <input type="hidden" name="pyt" value='.$i.'>
            <button>Dalej</button>
        </form>
    ';
}

function pytanie1() {
    echo '
        <form action="" method="post">
            <p>TREŚĆ PYTANIA</p>
            <label for="pyt1a">
                <input type="radio" name="pyt1" value="1" id="pyt1a"> Odpowiedź 1 
            </label>
            <label for="pyt1b">
                <input type="radio" name="pyt1" value="2" id="pyt1b"> Odpowiedź 2
            </label>
            <button>Sprawdź</button>
        </form>
    ';

    if (isset($_POST['pyt1'])) {
        if ($_POST['pyt1'] == 1) {
            echo '<p>Prawidłowa odpowiedź</p>';
        } else {
            echo '<p>Zła odpowiedź</p>';
        }
    }
}

// Pytanie z trzema odpowiedziami
function pytanie2() {
    echo '
        <form action="" method="post">
            <p>TREŚĆ PYTANIA</p>
            <label for="pyt2a">
                <input type="radio" name="pyt2" value="1" id="pyt2a"> Odp 1 
            </label>
            <label for="pyt2b">
                <input type="radio" name="pyt2" value="2" id="pyt2b"> Odp 2
            </label>
            <label for="pyt2c">
                <input type="radio" name="pyt2" value="3" id="pyt2c"> Odp 3
            </label>
            <button>Sprawdź</button>
        </form>
    ';

    if (isset($_POST['pyt2'])) {
        if ($_POST['pyt2'] == 3) {
            echo '<p>Prawidłowa odpowiedź</p>';
        } else {
            echo '<p>Zła odpowiedź</p>';
        }
    }
}

function pytanie3() {
    echo '
        <form action="" method="post">
            <p>TREŚĆ PYTANIA</p>
            <label for="pyt3a">
                <input type="radio" name="pyt3" value="1" id="pyt3a"> Odpowiedź 1 
            </label>
            <label for="pyt3b">
                <input type="radio" name="pyt3" value="2" id="pyt3b"> Odpowiedź 2
            </label>
            <button>Sprawdź</button>
        </form>
    ';

    if (isset($_POST['pyt3'])) {
        if ($_POST['pyt3'] == 1) {
            echo '<p>Prawidłowa odpowiedź</p>';
        } else {
            echo '<p>Zła odpowiedź</p>';
        }
    }
}

function pytanie4() {
    echo '
        <form action="" method="post">
            <p>TREŚĆ PYTANIA</p>
            <label for="pyt4a">
                <input type="radio" name="pyt4" value="1" id="pyt4a"> Odpowiedź 1 
            </label>
            <label for="pyt4b">
                <input type="radio" name="pyt4" value="2" id="pyt4b"> Odpowiedź 2
            </label>
            <button>Sprawdź</button>
        </form>
    ';

    if (isset($_POST['pyt4'])) {
        if ($_POST['pyt4'] == 1) {
            echo '<p>Prawidłowa odpowiedź</p>';
        } else {
            echo '<p>Zła odpowiedź</p>';
        }
    }
}

function pytanie5() {
    echo '
        <form action="" method="post">
            <p>TREŚĆ PYTANIA</p>
            <label for="pyt5a">
                <input type="radio" name="pyt5" value="1" id="pyt5a"> Odpowiedź 1 
            </label>
            <label for="pyt5b">
                <input type="radio" name="pyt5" value="2" id="pyt5b"> Odpowiedź 2
            </label>
            <button>Sprawdź</button>
        </form>
    ';

    if (isset($_POST['pyt5'])) {
        if ($_POST['pyt5'] == 1) {
            echo '<p>Prawidłowa odpowiedź</p>';
        } else {
            echo '<p>Zła odpowiedź</p>';
        }
    }
}

function czas() {
    $nazwaDnia = date('l');
    $nazwaMiesiaca = date('M');

    $dzien;
    $miesiac;

    switch($nazwaDnia) {
        case "Monday":
            $dzien = "Poniedziałek";
            break;
        case "Tuesday":
            $dzien = "Wtorek";
            break;
        case "Wednesday":
            $dzien = "Środa";
            break;
        case "Thursday":
            $dzien = "Czwartek";
            break;
        case "Friday":
            $dzien = "Piątek";
            break;
        case "Saturday":
            $dzien = "Sobota";
            break;
        case "Sunday":
            $dzien = "Niedziela";
            break;
    }

    switch($nazwaMiesiaca) {
        case "Jan":
            $miesiac = "stycznia";
            break;
        case "Feb":
            $miesiac = "lutego";
            break;
        case "Mar":
            $miesiac = "marca";
            break;
        case "Apr":
            $miesiac = "kwietnia";
            break;
        case "May":
            $miesiac = "maja";
            break;
        case "Jun":
            $miesiac = "czerwca";
            break;
        case "Jul":
            $miesiac = "lipca";
            break;
        case "Aug":
            $miesiac = "sierpnia";
            break;
        case "Sept":
            $miesiac = "września";
            break;
        case "Oct":
            $miesiac = "października";
            break;
        case "Nov":
            $miesiac = "listopada";
            break;
        case "Dec":
            $miesiac = "grudnia";
            break;
    }

    echo $dzien.", ".usunZero(date('j'))." ".$miesiac." ".date('Y')." roku";
    // Wersja bez usuwania zera:
    // echo $dzien.", ".date('j')." ".$miesiac." ".date('Y')." roku";
}

function usunZero($string) {
    // Wyjaśnienie:    
    // Jeśli na pierwszym indeksie napisu jest 0, zwróć wersję napisu tylko ze znakami od indeksu 1
    // Jeśli nie ma zera, zwróć ten sam napis
    if (substr($string, 0, 1) === "0") {
        return substr($string, 1);
    } else {
        return $string;
    }
}

?>

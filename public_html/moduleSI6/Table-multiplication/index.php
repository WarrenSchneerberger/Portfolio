<style>
    td,
    th {
        border: 1px solid rgb(190, 190, 190);
        padding: 10px;
    }

    td {
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #eee;
    }

    th[scope="col"] {
        background-color: #696969;
        color: #fff;
    }

    th[scope="row"] {
        background-color: #d7d9f2;
    }

    caption {
        padding: 10px;
        caption-side: bottom;
    }

    table {
        border-collapse: collapse;
        border: 2px solid rgb(200, 200, 200);
        letter-spacing: 1px;
        font-family: sans-serif;
        font-size: .8rem;
        width:600;
    }
</style>
<?php
    echo('<CENTER><TABLE><tr><th></th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th></tr>');
    for ($i=1;$i<=9;$i++){
        echo '<TR><th>'.$i.'</th>';
        for ($j=1;$j<=9;$j=$j+1){
            echo('<TD>');
            echo($i*$j.'<br>');
            echo("</TD>");
        }
        echo '</TR>';
    }
    echo("</TABLE></CENTER>");
?>
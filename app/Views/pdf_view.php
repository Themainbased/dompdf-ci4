<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI4 - DomPdf Generated</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h2>Data Siswa </h2>
    <a href="<?php echo base_url('PdfController/htmlToPDF') ?>" class="btn btn-outline-success">
        Download PDF
    </a>
    <table border=1 width=100% cellpadding=2 cellspacing=0 style="margin-top: 5px; text-align:center">
        <thead>
            <tr bgcolor=silver align=center>
                <td width="5%">No</td>
                <td width="25%">Nim</td>
                <td width="50%">Nama</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1930511041</td>
                <td>Ucup Slebew</td>
            </tr>
            <tr>
                <td>2</td>
                <td>1930511044</td>
                <td>Ujang Badag</td>
            </tr>
            <tr>
                <td>3</td>
                <td>1930511050</td>
                <td>Ramdan</td>
            </tr>
            <tr>
                <td>4</td>
                <td>1930511051</td>
                <td>Nahla</td>
            </tr>
            <tr>
                <td>5</td>
                <td>1930511052</td>
                <td>Reski</td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

</body>

</html>

</head>

<body>

    <div>

        <button class="cau1">cau1</button>
        <div id="cau1">
            @foreach ($doitacs as $doitac)
                <p >{{ $doitac->TENCONGTY }}</p>
            @endforeach
        </div>
        <script>
            $(document).ready(function() {
                $(".cau1").click(function() {
                    $("#cau1").toggle();
                });
            });
        </script>
        <hr>
        <button class="cau2">cau2</button>
        <div id="cau2">

        @foreach ($cau2s as $cau2)
            <p>{{ $cau2->MAHANG }}</p>
            <p>{{ $cau2->TENHANG }}</p>
            <p>{{ $cau2->SOLUONG }}</p>
        @endforeach
        </div>
        <script>
            $(document).ready(function() {
                $(".cau2").click(function() {
                    $("#cau2").toggle();
                });
            });
        </script>
        <hr>

        <button class="cau3">cau3</button>
        <div id="cau3">
        @foreach ($cau3s as $cau3)
            <p>{{ $cau3->HO }}</p>
            <p>{{ $cau3->TEN }}</p>
            <p>{{ $cau3->SOLUONG }}</p>
        @endforeach
        </div>
        <script>
            $(document).ready(function() {
                $(".cau3").click(function() {
                    $("#cau3").toggle();
                });
            });
        </script>
    </div>

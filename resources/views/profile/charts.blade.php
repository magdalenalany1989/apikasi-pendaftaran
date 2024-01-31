<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bar chart</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
</head>
<body>
       <h1 style="text-align: center; color:red;">Bar Chart In Laravel</h1>

       <canvas id="siswa"></canvas>


       <script>
        var ctx = document.getElementById('siswa').getContext('2d');
        var userSiswa = new Siswa(ctx,{
            type:'bar',
            data:{
                labels: {!! json_encode($lables) !!},
            }
        })
       </script>

</body>
</html>
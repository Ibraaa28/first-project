<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <table>
      <td>
        <div class="card" style="width: 18rem;">
          <img src="assets/fff.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $name_book[0] }}</h5>
            <p class="card-text">{{ $rilis[0] }},{{ $harga[0] }},{{ $penulisan[0] }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </td>
      <td>
    
        <div class="card" style="width: 18rem;">
          <img src="https://cdn.discordapp.com/attachments/822657973133377547/1167286600485584947/Snapinsta.app_395282857_862913512238079_420245986025484109_n_1080.jpg?ex=654d935c&is=653b1e5c&hm=2880611280b42306ada7338fcf15104d9e5c32991cec7a9ebd3bc1e0b2621ccb&" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $name_book[1] }}</h5>
            <p class="card-text">{{ $rilis[1] }},{{ $harga[1] }},{{ $penulisan[1] }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </td>
      <td>
        <div class="card" style="width: 18rem;">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMlX5pIGYX0rVhSIiT6CAmgit4afeqUtdOlQ&usqp=CAU"class=card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $name_book[2] }}</h5>
            <p class="card-text">{{ $rilis[2] }},{{ $harga[2] }},{{ $penulisan[2] }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </td>
  </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
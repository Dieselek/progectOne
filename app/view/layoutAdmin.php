
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/admink.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->e($title)?></title>
</head>
<body>
<div class="nav">
    <h2 class="title"><a href="/admin">Адмінка</a></h2>
    <h2 class="title-1">Привіт Адмін</h2>
</div>
<div class="colum" >
    <ul class="colum-1">
        <li><a href="/admin">Користувачі</a></li><br>
        <li><a href="/adminCategory">Категорії</a></li><br>
        <li><a href="/adminImages">Картинки</a></li>
    </ul>
</div>
<?=$this->section('content')?>

</body>
</html>
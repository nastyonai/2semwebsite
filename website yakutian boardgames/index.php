<?php session_start();
 ?>
 <!DOCTYPE html>
 <html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   <title> Якутские национальные игры</title>
 </head>
 <body>

   <?php require "blocks/header.php"?>

<div class="box">
<img src="img/background.png" width="1481" height="700">
</div>

   <main class="px-3 text-center w-100 h-100 p-5 mx-auto flex-column">
       <h1>Добро пожаловать!</h1>
       <p class="font-weight-normal">Национальные игры народа Саха – это неотделимая часть культуры Якутии.
         Приглашаем вас окунуться в мир якутских настольных и подвижных игр!</p><p class="text-break">
         Народные игры являются неотъемлемой частью традиционной культуры народа саха.
         Им отводилось особое место в повседневной жизни наших предков.
        В редкие праздники и отдых после тяжелого трудового дня не
        обходилось без массовых игр, состязаний в силе и ловкости.
        В якутских национальных играх отразилась особенности менталитета,
        мировоззрения народа, которые основывались на сохраняющемся до сих пор почитанию культе природы.
        Происхождение игр тесно связано с укладом жизни народа саха, видами традиционного хозяйствования:
        прежде всего, коневодством, разведением крупного рогатого скота, а также охотой, рыболовством.
        Народные игры формировались и совершенствовались на протяжении тысячелетий,
        передавались из поколения в поколения, и пользовались, как основное средство
        заполнения потребности в движении гармоничном физическом развитии организма,
        приобретению навыков и умений.</p>
        <p class="text-break">
Этот сайт посвящен 100-летию со дня образования Якутской Автономной Советской Социалистической Респбулики.
        </p>
     </main>
     <div class="text-center">
      <form action="../nastolki/nastolki.php" method="post" class="mx-3">
        <button type="submit" class="btn btn-warning">Настольные игры</button>
      </form>
      <form action="../agames/agames.php" method="post" class="mt-3 mx-3">
        <button type="submit" class="btn btn-warning">Подвижные игры</button>
      </form>
      </div>

   <?php require "blocks/footer.php"?>

 </body>
</html>

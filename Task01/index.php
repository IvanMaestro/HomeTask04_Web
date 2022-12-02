<?php 
$name = 'Борис';
$profession = 'Директор свежего воздуха';
$city = 'Moscow';
$email = 'clean@air.ru';
$phone = '(495)444-44-44';

$skills = [
	['name' => 'Фотошоп', 'percent' => 97],
	['name' => 'Работа по дереву', 'percent' => 17],
	['name' => 'Промышленный шпионаж', 'percent' => 46],
  ['name' => 'Умение работать', 'percent' => 2],
];
$workExperience = [
  [
    'jobTitle' => 'Директор',
    'dateStart' => 'Ноябрь 2018',
    'dateEnd' => 'Настоящее время',
    'description' => 'Руководство и стратегическое управление Свежим Воздухом.',
  ],
  [
    'jobTitle' => 'Разработчик Свежего Воздуха',
    'dateStart' => 'Январь 2006',
    'dateEnd' => 'Ноябрь 2018',
    'description' => 'Ведение проекта по разработке Свежего Воздуха.',
  ],
  [
    'jobTitle' => 'Младший научный сотрудник',
    'dateStart' => 'Август 2003',
    'dateEnd' => 'Январь 2006',
    'description' => 'Уборка лаборатории НИИ: содержание в чистоте колбочек и пробирочек.',
  ],
  [
    'jobTitle' => 'Монтажник систем кондиционирования',
    'dateStart' => 'Август 2003',
    'dateEnd' => 'Сентябрь 1998',
    'description' => 'Установка и обслуживание бытовых и промышленных кондиционеров',
  ],
]
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://kartinkin.net/pics/uploads/posts/2022-07/1657751190_15-kartinkin-net-p-koti-mafiozi-art-oboi-17.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-red">
            <h2><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone; ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <?php for($i = 0; $i < count($skills); $i++): ?>
          <p><?php echo $skills[$i]['name']; ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills[$i]['percent']; ?>%"><?php echo $skills[$i]['percent']; ?></div>
          </div>
          <?php endfor; ?>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <?php for ($i = 0; $i < count($workExperience); $i++): ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?=$workExperience[$i]['jobTitle'];?></b></h5>
          <h6 class="w3-text-teal">
            <i class="fa fa-calendar fa-fw w3-margin-right"></i><?=$workExperience[$i]['dateStart'];?> - 
            <?php if ($i == 0): ?>
              <span class="w3-tag w3-teal w3-round">
                <?=$workExperience[$i]['dateEnd'];?>
              </span>
            <?php else: ?>
              <?=$workExperience[$i]['dateEnd'];?>
            <?php endif; ?>
          </h6>
          <p><?=$workExperience[$i]['description'];?></p>
          <?php if ($i == count($workExperience) - 1): ?>
            <br>
          <?php else: ?>
            <hr>
          <?php endif; ?>
        </div>
        <?php endfor; ?>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>

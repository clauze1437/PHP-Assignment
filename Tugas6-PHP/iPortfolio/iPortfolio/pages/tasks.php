<?php 
  $task1 = ['link'=>'https://github.com/clauze1437/MSIB3-NFKOM', 'nama'=>'MSIB3-NFKOM', 'desc'=>'Assignment HTML,CSS , and RWD BOOTSTRAP', 'lang'=>'HTML, CSS'];
  $task2 = ['link'=>'https://github.com/clauze1437/javascript-assignment', 'nama'=>'Assignment Javascript', 'desc'=>'All about Javascript Assignment', 'lang'=>'JavaScript'];
  $task3 = ['link'=>'https://github.com/clauze1437/PHP-Assignment', 'nama'=>'PHP-Assignment', 'desc'=>'All about PHP Assignment', 'lang'=>'PHP'];

  $tasks = [$task1, $task2, $task3];
?>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Assignment</h2>
    </div>

    <div class="row">
      <?php
        foreach ($tasks as $task) {
      ?>
      <div class="col-xl-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrapper">
          <div class="portfolio-info">
            <a href="<?= $task['link'] ?>" target="_blank"><h4><?= $task['nama'] ?></h4></a>
            <p><?= $task['desc'] ?></p>
            <span><i class="bi bi-code-slash"></i> <?= $task['lang'] ?></span>
          </div>
        </div>
      </div>
      <?php } ?>
  </div>
</section>
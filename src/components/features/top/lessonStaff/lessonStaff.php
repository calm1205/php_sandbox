<!-- desktop -->
<?php
$title = "代表コーチ<br>タイガー・ウッズプロ";
$description = "After Golf Studioのメインコーチを務めるタイガー・ウッズです。
私がこれまでのゴルフ人生で得た知識・経験を、これからゴルフを上達したい！
という方にお伝えしたいと思っております。
ゴルフの魅力を広め、ゴルフを愛する人をひとりでも増やしていけるように尽力いたします。";
$image = $absoluteUriPath . '/asset/lesson/staff.png';
include $uiPartsPath . '/card/cardWithButton.php';
?>

<!-- phone -->
<div class="hidden phone:flex flex-col justify-start items-center gap-10 ">
  <img src="<?php echo $image ?>" class="w-full" />

  <div class="flex flex-col">
    <h3 class="text-2xl">
      <?php echo $title ?>
    </h3>
    <p class="text-base whitespace-pre-line">
      <?php echo $description ?>
    </p>
  </div>
</div>
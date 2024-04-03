<p>
         <?php
         $shopping = [
          '名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'
         ];
 
         foreach ($shopping as $key => $value) {
             echo "{$key}:{$value}<br>";
         }
         ?>
     </p>
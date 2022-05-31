
  <?php

  //BAI 1
  class ExerciseString {
      public $Check1 ;
      public $Check2 ;

      function readFile($nameFile){
        $fp = fopen($nameFile, "r");
        $contents = fread($fp, filesize($nameFile));
        fclose($fp);
        return $contents ;
      }

      function checkValidString($stringValue) {
        $containBook = strpos($stringValue, "book") !== false;
        $containRes = strpos($stringValue, "restaurant") !== false;
        return ($containBook && !$containRes) || (!$containBook && $containRes);
      }

      function writeFile(){
        fopen("result_file.txt", "w");
      }
  }
// BAI 2
$file1 = "file1.txt";
$file2 = "file2.txt";
// file1
$object1 = new ExerciseString();
  $contents = $object1->readFile($file1);
  $object1->Check1 = $object1->checkValidString($contents);

  $contents1 = $object1->readFile($file1);
  echo $contents1;
  
  // file2
  $object2 = new ExerciseString();
  $contents = $object2->readFile($file2);
  $object2->Check1 = $object2->checkValidString($contents);

  $contents2 = $object2->readFile($file2);
  echo $contents2;
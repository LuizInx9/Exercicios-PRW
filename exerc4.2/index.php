<?php

class Curso
{

   public string $nomeCurso;
   public int $duracaoCurso;

   public string $classificacao;
      

   function __construct($nomeCurso, $duracaoCurso)
   {
      $this->nomeCurso = $nomeCurso;
      $this->duracaoCurso = $duracaoCurso;

      
      echo "Novo curso " . $nomeCurso ." criado, com duração de " . $duracaoCurso .
       " semestres.<br>";  
   }


   public function classificarCurso($duracaoCurso){
      if ($duracaoCurso < 2){
         $classificacao = "Curto";
      } elseif ($duracaoCurso <= 3){
         $classificacao = "Médio";
      } elseif ($duracaoCurso > 3){
         $classificacao = "Longo";
      }

      return $classificacao;
   
   }

}


$curso1 = new Curso("GTI", 1);

echo "Classificação: " . $curso1->classificarCurso($curso1->duracaoCurso) . ".<br><br>";

$curso2 = new Curso("ADM", 3);

echo "Classificação: " . $curso2->classificarCurso($curso2->duracaoCurso) . ".<br><br>";

$curso3 = new Curso("INFO", 6);

echo "Classificação: " . $curso3->classificarCurso($curso3->duracaoCurso) . ".<br><br>";

?>
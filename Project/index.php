<?php
    // class Cat{
    //     private $name;
    //     public $color;
    //     public $weight;    

    //     function __construct(string $name,string $color,int $weight){ # new переводит управление в __cinstruct
    //         $this->name = $name; 
    //         $this->color = $color;
    //         $this->weight = $weight;
    //     }
    //     function setName(string $name){ #присваивает значения приватным классам
    //         $this->name = $name;
    //     }
    //     function getName(){ #получает значения приватных классов
    //         return $this->name;
    //     }
    // }

    // $cat3 = new Cat('barsik','grey',5);
    // $cat2 = new Cat;
    // $cat1->setName("bublik");
    // $cat1->color = "blue";
    // $cat1->weight = 9;
    // $cat2->setName("manya");
    // echo $cat1->getName().'<BR>';
    // echo $cat2->getName().'<BR>';
    // var_dump($cat3);

    echo"Тема 1) ";
    $a=27;
    $b= 12;
    $c= ($a ** 2 + $b ** 2) ** 0.5;
    echo(round($c,2))."<br/>";

    echo" Тема 2) ";
    $not_take_risks = 'Кто не рискует';
    $not_drink = 'не пьет';
    $ellipsis = '...';
    print_r("{$not_take_risks}, тот {$not_drink} {$ellipsis}");
    echo"<br/>";

    echo" Тема 3) ";
    $a=4;
    $b= 3;
    $c= 'мандаринок';
    $a=strval($a*$b);
    echo($a.' '.$c)."<br/>";

    echo" Тема 4) ";
    $b = -12;
    $c= -27;
    if ($b>0 and $c>0){
        echo($c**2).' '.( $b**2)."<br/>";
    }
    elseif ($b<0 and $c<0){
        echo($c+$b)."<br/>";
    }
    else{
        echo($c*$b)."<br/>";
    }

    echo " Тема 5) ";
    $a=1;
    $s=$a;
    for ($i=1; $i<5; $i++ ){
        $a++;
        $s+=$a;
    }
    echo($s)."<br/>";
   

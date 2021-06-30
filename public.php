<?php 
header('Access-Control-Allow-Origin: *');

$data = [

    [
        'nome'=>'Jose',
        'idade'=>'20',
        'tamanho'=>'1.70cm',
        'foto'=>'https://cdn.pixabay.com/photo/2015/08/05/04/25/people-875617__340.jpg',
        
    ],
    [
        'nome'=>'Vitor',
        'idade'=>'23',
        'tamanho'=>'1.98cm',
        'foto'=>'https://cdn.pixabay.com/photo/2017/08/12/18/31/male-2634974__340.jpg',
    ],
    [
        'nome'=>'Claudio',
        'idade'=>'30',
        'tamanho'=>'1.60cm',
        'foto'=>'https://cdn.pixabay.com/photo/2019/12/04/09/30/man-4672229_960_720.jpg',
    ],
    [
        'nome'=>'Marcio',
        'idade'=>'33',
        'tamanho'=>'1.85cm',
        'foto'=>'https://cdn.pixabay.com/photo/2019/10/22/13/43/man-4568762__340.jpg',
    ],
];

die(json_encode($data));

?>
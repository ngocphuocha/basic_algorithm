<?php
$arr = [
    [
        'id' => 1,
        'name' => 'Samsung note 10',
        'price' => 99
    ],
    [
        'id' => 2,
        'name' => 'Iphone 12',
        'price' => 99
    ]
];
echo "Before update date:\n";
echo '<pre>';
print_r($arr);
foreach ($arr as $key => $val) {
    if ($val['id'] == 2) { // if id == 2 then edit
        // $arrUpdate = [
        //     'id' => 2,
        //     'name' => 'Iphone XS',
        //     'price' => 100
        // ];
        // $arr[$key] = $arrUpdate;
        $arr[$key] = [
            'id' => 2,
            'name' => 'Iphone XS',
            'price' => 100
        ];
    }
}

echo "After update: \n";
print_r($arr);

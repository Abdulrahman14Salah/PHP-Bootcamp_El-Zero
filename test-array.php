<?php

// $array = [1, 1, 2, 3, 4, 5, 6, 7, 8, 9];
// echo '<pre>';
// print_r(array_chunk($array, 2));
// echo '</pre>';

// $country = [
//     'EG' => 'Egypt',
//     'SR' => 'Syria',
//     'SU' => 'Sudan',
//     'ER' => 'Europe',
//     'FR' => 'France',
//     'FR' => 'France',
//     'MU' => 'Europe',
//     'SS' => 'Europe',
//     'DD' => 'Europe',
//     'AS' => 'Europe',
// ];

// echo '<pre>';
// print_r(array_chunk($country, 2, true));
// echo '</pre>';

// echo '<pre>';
// print_r(array_change_key_case($country, CASE_LOWER));
// echo '</pre>';

// $key = ['a', 'b', 'c', 'a'];
// $value = ['ahmed', 'basel', 'cat', 'agma'];

// echo '<pre>';
// print_r(array_combine($key, $value));
// echo '</pre>';

// echo '<pre>';
// print_r(array_count_values($array));
// echo '</pre>';

// echo '<pre>';
// print_r(array_reverse($country, false));
// echo '</pre>';

// echo '<pre>';
// print_r(array_flip($country));
// echo '</pre>';

// echo count($country, 1);
// echo '<br>';

// var_dump(in_array('France', $country));

// var_dump(array_key_exists('FR', $country));

// echo '<pre>';
// print_r(array_keys($key, 'a'));
// echo '</pre>';

// echo '<pre>';
// print_r(array_values($country));
// echo '</pre>';

// echo '<pre>';
// print_r(array_pad($country, 50, 'Unknown Country')); //-50
// echo '</pre>';

// echo array_product($array);
// echo '<br>';
// echo array_sum($array);

// echo '<br>';
// echo current($country);
// echo '<br>';

// echo '<br>';
// echo next($country);
// echo '<br>';

// echo '<br>';
// echo prev($country);
// echo '<br>';

// echo '<br>';
// echo reset($country);
// echo '<br>';

// echo '<br>';
// echo end($country);
// echo '<br>';

// echo '<pre>';
// print_r(array_merge($array, $country));
// echo '</pre>';

// echo '<pre>';
// print_r(array_replace($array, $country));
// echo '</pre>';

// echo '<pre>';
// print_r(array_rand($country, 2));
// echo '</pre>';

// shuffle($country);
// echo '<pre>';
// print_r($country);
// echo '</pre>';

// echo '<pre>';
// print_r(array_shift($country));
// echo '<br>';
// print_r($country);
// echo '</pre>';

// echo '<pre>';
// print_r(array_pop($country));
// echo '</pre>';

// echo '<pre>';
// print_r(array_push($country, 'momo', 'salah', 'youssef'));
// echo '<br>';
// print_r($country);
// echo '</pre>';

// $country[] = 'quick add to array';

// echo '<pre>';
// print_r(array_unshift($country, 'momo', 'salah', 'youssef'));
// echo '<br>';
// print_r($country);
// echo '</pre>';

// echo '<pre>';
// print_r(array_slice($country, 0, 3, true));
// echo '</pre>';

// echo '<pre>';
// print_r(array_splice($country, 2));
// echo '</pre>';
// print_r($country);

// echo '<pre>';
// sort($country);
// print_r($country);
// echo '</pre>';

// echo '<pre>';
// asort($country);
// print_r($country);
// echo '</pre>';

// echo '<pre>';
// arsort($country);
// print_r($country);
// echo '</pre>';

// echo '<pre>';
// ksort($country);
// print_r($country);
// echo '</pre>';

// echo '<pre>';
// krsort($country);
// print_r($country);
// echo '</pre>';

// echo '<pre>';
// natsort($country);
// print_r($country);
// echo '</pre>';

// function add_title($fname, $lname)
// {
//     return "Mr $fname $lname";
// }

// echo add_title('Abdulrahman', 'S');

// $first_names = ['Osama', 'Ahmed', 'Abdulrahman', 'Mahfouz', 'Sameh', 'Gamal'];
// $last_names = ['Ahmed', 'Abdulrahman', 'Mahfouz', 'Osama', 'Gamal', 'Ameer'];

// print_r(array_map('add_title', $first_names, $last_names));
// $nums = ['1', '3', '5', '7', '9', '11'];

// function check_nums($n)
// {
//     return $n > 4;
// }

// echo '<pre>';
// print_r(array_filter($nums, 'check_nums', ARRAY_FILTER_USE_KEY));
// echo '</pre>';

// function add($n1, $n2)
// {
//     return $n1 + $n2;
// }

// echo '<pre>';
// print_r(array_reduce($nums, 'add', 4));
// echo '</pre>';

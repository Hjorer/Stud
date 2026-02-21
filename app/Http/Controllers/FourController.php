<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FourController extends Controller
{
    public function one()
    {   
        return view('post.pbz1', [
            'name' => 'AlexG',
            'salary' => 'no',
            'age' => '24',
            'class' => 'word',
            'style' => 'color:red;',
            'one' => 'one',
            'two' => 'two',
            'three' => 'three',
            'text' => 'text',
            'href' => 'https://www.google.com/',
            'date' => date('Y.m.d'),
            'worker' => ['name' => 'AlexG', 'age' => '23', 'salary' => '21212'],
            'city' => ['1' => 'Ekb', '2' => 'Kazan', '3' => 'Samara'],
            'location' => ['city' => ['1' => 'Paris', '2' => 'Astana', '3' => 'Minsk'], 'country' => ['1' => 'France', '2' => 'Kazahstan', '3' => 'Belarus']],
            'dates' => ['year' => ['1' => '2024', '2' => '2025'], 'month' => ['1' => '11', '2' => '12'], 'day' => ['1' => '1', '2' => '2']],
            'str' => '<b>text</b>',
            'is18' => true,
            'arr' => ['-1', '0', '1', '2', '3', '4'],
            'datas' => ['1', '2', '3'],
            'arr1' => [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
            'employees' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'salary' => '1000',
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'salary' => '2000',
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'salary' => '3000',
                ],
            ],
            'users' => [
                'Maik',
                'Jessi',
                'Adolf',
            ],
            'first' => 'color:red;',
            'last' => 'color:blue;',
            'links' => [
                [
                    'text' => 'text1',
                    'href' => 'href1',
                ],
                [
                    'text' => 'text2',
                    'href' => 'href2',
                ],
                [
                    'text' => 'text3',
                    'href' => 'href3',
                ],
            ],
            'femployees' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'salary' => 3000,
                ],
                [
                    'name' => 'user4',
                    'surname' => 'surname4',
                    'salary' => 4000,
                ],
                [
                    'name' => 'user5',
                    'surname' => 'surname5',
                    'salary' => 5000,
                ],
            ],
            'fusers' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'banned' => true,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'banned' => false,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'banned' => true,
                ],
                [
                    'name' => 'user4',
                    'surname' => 'surname4',
                    'banned' => false,
                ],
                [
                    'name' => 'user5',
                    'surname' => 'surname5',
                    'banned' => false,
                ],
            ],
            'days' => range(1, (int)date('t')),
            'currentDay' => (int)date('j'),
        ]);
    }
}

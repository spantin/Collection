<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Component;
use App\Models\ComponentType;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Component::create([
            'name' => 'Responsive Design Common Break Points',
            'component_type_id' => ComponentType::where('name', 'layout')->value('id'),
            'html' => 
'<div class="container">
    <h3 class="break-a">0px - 600px (phones)</h3>
    <h3 class="break-b">600px - 767px (partrait tablets, large phones)</h3>
    <h3 class="break-c">768px - 991px (landscape tablets)</h3>
    <h3 class="break-d">992px - 1199px (laptops/desktops)</h3>
    <h3 class="break-e">1200px+ (large displays)</h3>
</div>',
            'css' => 
'html,body{
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
    color: rgb(50, 50, 50);
    margin: 0;
    padding: 0;
}

.container {
    box-sizing: border-box;
    padding: 20px;
    color: white;
    background: black;
    text-align: center;
    height: 100vh;
}

h3{
    font-size: 2rem;
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    .container {background: red;}
    h3.break-a {display: block;}
    h3.break-b {display: none;}
    h3.break-c {display: none;}
    h3.break-d {display: none;}
    h3.break-e {display: none;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    .container {background: green;}
    h3.break-a {display: none;}
    h3.break-b {display: block;}
    h3.break-c {display: none;}
    h3.break-d {display: none;}
    h3.break-e {display: none;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    .container {background: blue;}
    h3.break-a {display: none;}
    h3.break-b {display: none;}
    h3.break-c {display: block;}
    h3.break-d {display: none;}
    h3.break-e {display: none;}
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    .container {background: orange;}
    h3.break-a {display: none;}
    h3.break-b {display: none;}
    h3.break-c {display: none;}
    h3.break-d {display: block;}
    h3.break-e {display: none;}
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    .container {background: pink;}
    h3.break-a {display: none;}
    h3.break-b {display: none;}
    h3.break-c {display: none;}
    h3.break-d {display: none;}
    h3.break-e {display: block;}
}',
            'js' => '',
        ]);
    }
}

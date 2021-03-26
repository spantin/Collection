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

        Component::create([
            'name' => 'Flex Playground',
            'component_type_id' => ComponentType::where('name', 'playground')->value('id'),
            'html' => 
'<div class="main-container">
    <div class="sidebar-container bg-primary">
        <h1 class="logo-text bg-primary-light text-light">
            <span class="bracket text-secondary">[</span>
            <span class="inner-bracket">Flexbox</span>
            <span class="bracket text-secondary">]</span>
        </h1>
        <div class="sidebar-content text-light">
            <!-- parent list wrapper -->
            <div class="list-wrapper bg-primary-dark">
                <div class="list-label">Parent</div>
                <div class="list-option-wrapper">
                    <div class="list-option-label">dimensions</div>
                    <ul class="list-option-list parentOptionGroupSpecial">
                        <li class="active">
                            <input type="checkbox" data-rule="height" data-unit="%" checked>
                            <span>Height</span> <span class="optionalValueDisplay">100%</span>
                            <div class="optionalInputContainer">
                                <input class="slider optionalValueInput" type="range" min="0" max="100" value="100">
                            </div>
                        </li>
                        <li class="active">
                            <input type="checkbox" data-rule="width" data-unit="%" checked>
                            <span>Width</span> <span class="optionalValueDisplay">100%</span>
                            <div class="optionalInputContainer">
                                <input class="slider optionalValueInput" type="range" min="0" max="100" value="100">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="list-option-wrapper">
                    <div class="list-option-label">display</div>
                    <ul class="list-option-list parentOptionGroup" data-rule="display">
                        <li>
                            <input type="radio" data-val="flex" checked>
                            <span>flex</span>
                        </li>
                        <li>
                            <input type="radio" data-val="inline-flex">
                            <span>inline-flex</span>
                        </li>
                    </ul>
                </div>
                <div class="list-option-wrapper">
                    <div class="list-option-label">flex-direction</div>
                    <ul class="list-option-list parentOptionGroup" data-rule="flex-direction">
                        <li>
                            <input type="radio" data-val="row" checked>
                            <span>row (default)</span>
                        </li>
                        <li>
                            <input type="radio" data-val="row-reverse">
                            <span>row-reverse</span>
                        </li>
                        <li>
                            <input type="radio" data-val="column">
                            <span>column</span>
                        </li>
                        <li>
                            <input type="radio" data-val="column-reverse">
                            <span>column-reverse</span>
                        </li>
                    </ul>
                </div>
                <div class="list-option-wrapper">
                    <div class="list-option-label">flex-wrap</div>
                    <ul class="list-option-list parentOptionGroup" data-rule="flex-wrap">
                        <li>
                            <input type="radio" data-val="nowrap" checked>
                            <span>nowrap (default)</span>
                        </li>
                        <li>
                            <input type="radio" data-val="wrap">
                            <span>wrap</span>
                        </li>
                        <li>
                            <input type="radio" data-val="wrap-reverse">
                            <span>wrap-reverse</span>
                        </li>
                    </ul>
                </div>
                <div class="list-option-wrapper">
                    <div class="list-option-label">justify-content</div>
                    <ul class="list-option-list parentOptionGroup" data-rule="justify-content">
                        <li>
                            <input type="radio" data-val="flex-start" checked>
                            <span>flex-start (default)</span>
                        </li>
                        <li>
                            <input type="radio" data-val="flex-end">
                            <span>flex-end</span>
                        </li>
                        <li>
                            <input type="radio" data-val="center">
                            <span>center</span>
                        </li>
                        <li>
                            <input type="radio" data-val="space-between">
                            <span>space-between</span>
                        </li>
                        <li>
                            <input type="radio" data-val="space-around">
                            <span>space-around</span>
                        </li>
                        <li>
                            <input type="radio" data-val="space-evenly">
                            <span>space-evenly</span>
                        </li>
                    </ul>
                </div>
                <div class="list-option-wrapper">
                    <div class="list-option-label">align-items</div>
                    <ul class="list-option-list parentOptionGroup"  data-rule="align-items">
                        <li>
                            <input type="radio" data-val="stretch" checked>
                            <span>stretch (default)</span>
                        </li>
                        <li>
                            <input type="radio" data-val="flex-start">
                            <span>flex-start</span>
                        </li>
                        <li>
                            <input type="radio" data-val="flex-end">
                            <span>flex-end</span>
                        </li>
                        <li>
                            <input type="radio" data-val="center">
                            <span>center</span>
                        </li>
                        <li>
                            <input type="radio" data-val="baseline">
                            <span>baseline</span>
                        </li>
                    </ul>
                </div>
                <div class="list-option-wrapper">
                    <div class="list-option-label">align-content</div>
                    <ul class="list-option-list parentOptionGroup" data-rule="align-content">
                        <li>
                            <input type="radio" data-val="stretch" checked>
                            <span>stretch (default)</span>
                        </li>
                        <li>
                            <input type="radio" data-val="flex-start">
                            <span>flex-start</span>
                        </li>
                        <li>
                            <input type="radio" data-val="flex-end">
                            <span>flex-end</span>
                        </li>
                        <li>
                            <input type="radio" data-val="center">
                            <span>center</span>
                        </li>
                        <li>
                            <input type="radio" data-val="space-between">
                            <span>space-between</span>
                        </li>
                        <li>
                            <input type="radio" data-val="space-around">
                            <span>space-around</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end parent list wrapper -->

            <!-- child list wrapper -->
            <div class="list-wrapper child-items-container bg-primary-dark">
                <div class="list-label">
                    <span>Children</span>
                    <span class="addChildBtn bg-secondary text-primary-dark"><i class="fas fa-plus"></i> item</span>
                </div>
                <div class="list-wrapper child-list-wrapper bg-primary-dark" data-child-id="item-1">
                    <div class="list-label">item 1 <i class="fas fa-trash removeItemBtn"></i></div>
                    <div class="list-option-wrapper">
                        <div class="list-option-label">flex-grow</div>
                        <ul class="list-option-list childOptionGroup" data-rule="flex-grow">
                            <li>
                                <input type="radio" data-val="0" checked>
                                <span>0 (default)</span>
                            </li>
                            <li>
                                <input type="radio" data-val="1">
                                <span>1</span>
                            </li>
                            <li>
                                <input type="radio" data-val="custom">
                                <span>custom</span> <span class="customValueDisplay">0</span>
                                <div class="customInputContainer">
                                    <input class="slider customValueInput" type="range" min="0" max="10" value="0">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="list-option-wrapper">
                        <div class="list-option-label">flex-shrink</div>
                        <ul class="list-option-list childOptionGroup" data-rule="flex-shrink">
                            <li>
                                <input type="radio" data-val="1" checked>
                                <span>1 (default)</span>
                            </li>
                            <li>
                                <input type="radio" data-val="0">
                                <span>0</span>
                            </li>
                            <li>
                                <input type="radio" data-val="custom">
                                <span>custom</span> <span class="customValueDisplay">1</span>
                                <div class="customInputContainer">
                                    <input class="slider customValueInput" type="range" min="0" max="10" value="1">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="list-option-wrapper">
                        <div class="list-option-label">flex-basis</div>
                        <ul class="list-option-list childOptionGroup" data-rule="flex-basis">
                            <li>
                                <input type="radio" data-val="auto" checked>
                                <span>auto (default)</span>
                            </li>
                            <li>
                                <input type="radio" data-val="length" data-unit="%">
                                <span>percent</span> <span class="customValueDisplay">1</span>
                                <div class="customInputContainer">
                                    <input class="slider customValueInput" type="range" min="0" max="100" value="1">
                                </div>
                            </li>
                            <li>
                                <input type="radio" data-val="length" data-unit="px">
                                <span>pixels</span> <span class="customValueDisplay">1</span>
                                <div class="customInputContainer">
                                    <input class="slider customValueInput" type="range" min="0" max="1000" value="1">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="list-option-wrapper">
                        <div class="list-option-label">align-self</div>
                        <ul class="list-option-list childOptionGroup" data-rule="align-self">
                            <li>
                                <input type="radio" data-val="auto" checked>
                                <span>auto (default)</span>
                            </li>
                            <li>
                                <input type="radio" data-val="flex-start">
                                <span>flex-start</span>
                            </li>
                            <li>
                                <input type="radio" data-val="flex-end">
                                <span>flex-end</span>
                            </li>
                            <li>
                                <input type="radio" data-val="center">
                                <span>center</span>
                            </li>
                            <li>
                                <input type="radio" data-val="baseline">
                                <span>baseline</span>
                            </li>
                            <li>
                                <input type="radio" data-val="center">
                                <span>stretch</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="list-wrapper child-list-wrapper bg-primary-dark" data-child-id="item-2">
                    <div class="list-label">item 2 <i class="fas fa-trash removeItemBtn"></i></div>
                    <div class="list-option-wrapper">
                        <div class="list-option-label">flex-grow</div>
                        <ul class="list-option-list childOptionGroup" data-rule="flex-grow">
                            <li>
                                <input type="radio" data-val="0" checked>
                                <span>0 (default)</span>
                            </li>
                            <li>
                                <input type="radio" data-val="1">
                                <span>1</span>
                            </li>
                            <li>
                                <input type="radio" data-val="custom">
                                <span>custom</span> <span class="customValueDisplay">0</span>
                                <div class="customInputContainer">
                                    <input class="slider customValueInput" type="range" min="0" max="10" value="0">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="list-option-wrapper">
                        <div class="list-option-label">flex-shrink</div>
                        <ul class="list-option-list childOptionGroup" data-rule="flex-shrink">
                            <li>
                                <input type="radio" data-val="1" checked>
                                <span>1 (default)</span>
                            </li>
                            <li>
                                <input type="radio" data-val="0">
                                <span>0</span>
                            </li>
                            <li>
                                <input type="radio" data-val="custom">
                                <span>custom</span> <span class="customValueDisplay">1</span>
                                <div class="customInputContainer">
                                    <input class="slider customValueInput" type="range" min="0" max="10" value="1">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="list-option-wrapper">
                        <div class="list-option-label">flex-basis</div>
                        <ul class="list-option-list childOptionGroup" data-rule="flex-basis">
                            <li>
                                <input type="radio" data-val="auto" checked>
                                <span>auto (default)</span>
                            </li>
                            <li>
                                <input type="radio" data-val="length" data-unit="%">
                                <span>percent</span> <span class="customValueDisplay">1</span>
                                <div class="customInputContainer">
                                    <input class="slider customValueInput" type="range" min="0" max="100" value="1">
                                </div>
                            </li>
                            <li>
                                <input type="radio" data-val="length" data-unit="px">
                                <span>pixels</span> <span class="customValueDisplay">1</span>
                                <div class="customInputContainer">
                                    <input class="slider customValueInput" type="range" min="0" max="1000" value="1">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="list-option-wrapper">
                        <div class="list-option-label">align-self</div>
                        <ul class="list-option-list childOptionGroup" data-rule="align-self">
                            <li>
                                <input type="radio" data-val="auto" checked>
                                <span>auto (default)</span>
                            </li>
                            <li>
                                <input type="radio" data-val="flex-start">
                                <span>flex-start</span>
                            </li>
                            <li>
                                <input type="radio" data-val="flex-end">
                                <span>flex-end</span>
                            </li>
                            <li>
                                <input type="radio" data-val="center">
                                <span>center</span>
                            </li>
                            <li>
                                <input type="radio" data-val="baseline">
                                <span>baseline</span>
                            </li>
                            <li>
                                <input type="radio" data-val="center">
                                <span>stretch</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end child list wrapper -->
        </div>

        <div class="footerWrapper">
            <div class="footerInner text-light">
                &copy; Steven Pantin
            </div>
        </div>
    </div>
    <div class="content-container bg-light">

        <div class="demo-container">
            <div class="demo-item item-1" data-item-id="item-1">
                <div class="item-id">item 1</div>
                <div class="flex-grow-desc">0</div>
                <div class="flex-shrink-desc">1</div>
                <div class="flex-basis-desc">auto</div>
                <div class="align-self-desc">auto</div>
            </div>
            <div class="demo-item item-2" data-item-id="item-2">
                <div class="item-id">item 2</div>
                <div class="flex-grow-desc">0</div>
                <div class="flex-shrink-desc">1</div>
                <div class="flex-basis-desc">auto</div>
                <div class="align-self-desc">auto</div>
            </div>
        </div>

    </div>


    <!-- templates -->
    <script type="text/template" id="itemTemplate">
        <div class="demo-item" data-item-id="item-#">
            <div class="item-id">item #</div>
            <div class="flex-grow-desc">0</div>
            <div class="flex-shrink-desc">1</div>
            <div class="flex-basis-desc">auto</div>
            <div class="align-self-desc">auto</div>
        </div>
    </script>
    <script type="text/template" id="itemSidebarTemplate">
        <div class="list-wrapper active child-list-wrapper bg-primary-dark" data-child-id="item-#">
            <div class="list-label">item # <i class="fas fa-trash removeItemBtn"></i></div>
            <div class="list-option-wrapper">
                <div class="list-option-label">flex-grow</div>
                <ul class="list-option-list childOptionGroup" data-rule="flex-grow">
                    <li>
                        <input type="radio" data-val="0" checked>
                        <span>0 (default)</span>
                    </li>
                    <li>
                        <input type="radio" data-val="1">
                        <span>1</span>
                    </li>
                    <li>
                        <input type="radio" data-val="custom">
                        <span>custom</span> <span class="customValueDisplay">0</span>
                        <div class="customInputContainer">
                            <input class="slider customValueInput" type="range" min="0" max="10" value="0">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="list-option-wrapper">
                <div class="list-option-label">flex-shrink</div>
                <ul class="list-option-list childOptionGroup" data-rule="flex-shrink">
                    <li>
                        <input type="radio" data-val="1" checked>
                        <span>1 (default)</span>
                    </li>
                    <li>
                        <input type="radio" data-val="0">
                        <span>0</span>
                    </li>
                    <li>
                        <input type="radio" data-val="custom">
                        <span>custom</span> <span class="customValueDisplay">1</span>
                        <div class="customInputContainer">
                            <input class="slider customValueInput" type="range" min="0" max="10" value="1">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="list-option-wrapper">
                <div class="list-option-label">flex-basis</div>
                <ul class="list-option-list childOptionGroup" data-rule="flex-basis">
                    <li>
                        <input type="radio" data-val="auto" checked>
                        <span>auto (default)</span>
                    </li>
                    <li>
                        <input type="radio" data-val="length" data-unit="%">
                        <span>percent</span> <span class="customValueDisplay">1</span>
                        <div class="customInputContainer">
                            <input class="slider customValueInput" type="range" min="0" max="100" value="1">
                        </div>
                    </li>
                    <li>
                        <input type="radio" data-val="length" data-unit="px">
                        <span>pixels</span> <span class="customValueDisplay">1</span>
                        <div class="customInputContainer">
                            <input class="slider customValueInput" type="range" min="0" max="1000" value="1">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="list-option-wrapper">
                <div class="list-option-label">align-self</div>
                <ul class="list-option-list childOptionGroup" data-rule="align-self">
                    <li>
                        <input type="radio" data-val="auto" checked>
                        <span>auto (default)</span>
                    </li>
                    <li>
                        <input type="radio" data-val="flex-start">
                        <span>flex-start</span>
                    </li>
                    <li>
                        <input type="radio" data-val="flex-end">
                        <span>flex-end</span>
                    </li>
                    <li>
                        <input type="radio" data-val="center">
                        <span>center</span>
                    </li>
                    <li>
                        <input type="radio" data-val="baseline">
                        <span>baseline</span>
                    </li>
                    <li>
                        <input type="radio" data-val="center">
                        <span>stretch</span>
                    </li>
                </ul>
            </div>
        </div>
    </script>
</div>
',
            'css' => 
'html,body{
    margin: 0;
    font-family: "Raleway", sans-serif;
}
body *{box-sizing: border-box;}

.text-primary{color: #26547C;}
.text-primary-light{color: #316CA0;}
.text-primary-dark{color: #1E4160;}
.text-primary-accent{color: #F1F7EE;}
.text-secondary{color: #FFD116;}
.text-secondary-light{color: #FFE6AD;}
.text-secondary-dark{color: #D8B113;}
.text-secondary-accent{color: #B0BEA9;}
.text-light{color: #FFFCF9;}
.text-dark{color: #363635;}

.bg-primary{background-color: #26547C;}
.bg-primary-light{background-color: #316CA0;}
.bg-primary-dark{background-color: #1E4160;}
.bg-primary-accent{background-color: #F1F7EE;}
.bg-secondary{background-color: #FFD116;}
.bg-secondary-light{background-color: #FFE6AD;}
.bg-secondary-dark{background-color: #D8B113;}
.bg-secondary-accent{background-color: #B0BEA9;}
.bg-light{background-color: #FFFCF9; color: #FFFCF9;}
.bg-dark{background-color: #363635; color: #363635;}

.main-container{
    width:100vw;
    height:100vh;
    overflow: hidden;
    display: flex;
    flex-flow: row nowrap;
    justify-content: flex-start;
    align-items: stretch;
}

.sidebar-container{
    flex: 0 0 350px;
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: stretch;
}

h1.logo-text{
    flex: 0 0 auto;
    font-size: 3em;
    margin: 0;
    text-align: center;
    white-space: nowrap;
    border-bottom: 1px solid snow;
}

.sidebar-content{
    flex: 1 0 auto;
    position: relative;
    overflow: auto;
    max-height: calc(100% - 109px);
}

.bracket{
    font-size: 1.5em;
    line-height: 1.5em;
    margin: -15px;
}

.inner-bracket{
    line-height: 1.5em;
    vertical-align: text-bottom;
}

.list-wrapper{
    position: relative;
    padding: 5px 10px;
    border-bottom: 1px solid #26547C;
}

.list-label{
    position: relative;
    cursor: pointer;
}

.list-wrapper.active>.list-label::after{
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.list-label::after{
    font-family: "Font Awesome 5 Free";
    content: "\f107";
    position: absolute;
    right: 10px;
    top: 50%;
    -ms-transform: translate(-50%, -50%) rotate(-90deg);
    transform: translate(-50%, -50%) rotate(-90deg);
    transition: transform 0.5s;
}

.list-wrapper .list-wrapper .list-label::after{
    font-size: 0.9em;
}

.list-wrapper>.list-option-wrapper,
.list-wrapper>.list-wrapper{
    display: none;
}

.list-wrapper.active>.list-option-wrapper,
.list-wrapper.active>.list-wrapper{
    display: block;
}

.list-option-wrapper{
    margin: 5px 5px 5px 15px;
    padding: 5px 10px;
    background-color: #26547C;
    border-radius: 3px;
}

.list-option-list{
    list-style: none;
    margin: 0;
    padding: 0 0 0 15px;
}



.content-container{
    flex: 1 0 auto;
    padding: 20px;
}

.demo-container{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
    align-items: stretch;
    align-content: stretch;
    border: 1px solid lightgray;
    background-color: white;
    height: 100%;
    width: 100%;
}

.demo-item{
    flex-grow: 0;
    flex-shrink: 1;
    flex-basis: auto;
    align-self: auto;
    background-color: white;
    color: black;
    border: 1px solid #316CA0;
    outline: 0px solid #316CA0;
    outline-offset: -5px;
    padding: 10px;
    cursor: pointer;
}

.demo-item:hover{
    outline: 3px solid #316CA0;
}

.demo-item .item-id{
    font-size: 1.25em;
    text-align: center;
}

.demo-item .flex-grow-desc::before{content: "flex-grow: ";}
.demo-item .flex-shrink-desc::before{content: "flex-shrink: ";}
.demo-item .flex-basis-desc::before{content: "flex-basis: ";}
.demo-item .align-self-desc::before{content: "align-self: ";}


.list-option-list>li>.customInputContainer,
li>.optionalInputContainer{
    display: none;
    padding-left: 20px;
}

.list-option-list>li.active>.customInputContainer,
li.active>.optionalInputContainer{
    display: block;
}

.list-option-list>li.active>.customValueDisplay,
li.active>.optionalValueDisplay{
    display: inline;
}

.customValueDisplay,
.optionalValueDisplay{
    display: none;
}
.customValueDisplay::before,
.optionalValueDisplay::before{content:"(";}
.customValueDisplay::after,
.optionalValueDisplay::after{content:")";}


.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 8px;
    border-radius: 5px;
    background: #C1CAD3;
    outline: none;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: #FFD116;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: #FFD116;
    cursor: pointer;
}

.addChildBtn{
    display: inline-block;
    position: relative;
    font-size: 0.8em;
    padding: 2px 5px 2px 18px;
    border-radius: 3px;
    margin-left: 5px;
}

.addChildBtn:hover{
    color: #363635;
}

.addChildBtn .fas{
    position: absolute;
    font-size: 0.75em;
    top: 50%;
    left: 10px;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.list-label .fa-trash{
    position: absolute;
    opacity: 0.4;
    top: 50%;
    right: 35px;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    transition: opacity .3s;
}

.list-label .fa-trash:hover{opacity: 0.8;}

.footerWrapper{
    display: block;
    width: 100%;
    background-color: transparent;
}
.footerWrapper.sticky{
    position: absolute;
    bottom: 0;
}
.footerInner{
    max-width: 90%;
    padding: 0.5em 1em 1em 1em;
    margin: 0 auto;
    border-top: 1px solid #1E4160;
    opacity: 0.4;
    font-size: 0.9em;
}
',
            'js' => 
'var itemIncrement = 2;

$(document).ready(function(){
    $(document).delegate(".list-label", "click", toggleListContainer);
    $(document).delegate(".removeItemBtn", "click", removeItem);

    $(".parentOptionGroup input[type=radio]").on("change", adjustParentOption);
    $(".parentOptionGroupSpecial input[type=checkbox]").on("change", adjustParentOptionSpecial);
    $(".parentOptionGroupSpecial .optionalValueInput").on("input", adjustParentOptionSpecial);

    $(document).delegate(".childOptionGroup input[type=radio]", "change", adjustChildOption);
    $(document).delegate(".childOptionGroup .customValueInput", "input", adjustChildOption);

    $(document).delegate(".demo-item", "click", focusItemInSidebar);
    $(".addChildBtn").on("click", addItem);
    setFooter();
});

function toggleListContainer(){
    $(this).parents(".list-wrapper").eq(0).toggleClass("active");
}

function updateDemoContainer(rule, value){
    $(".demo-container").css(rule, value)
}

function updateItem($item, rule, value){
    $item.css(rule, value);
    $item.find("."+rule+"-desc").html(value);
}

function getParentGroupContainer(el){
    return $(el).parents(".parentOptionGroup").eq(0);
}

function adjustParentOption(){
    var $groupContainer = getParentGroupContainer(this);
    $groupContainer.find("input").prop("checked", false);
    $(this).prop("checked", true);
    var value = $(this).data("val");
    var rule = $groupContainer.data("rule");
    updateDemoContainer(rule, value);
}

function adjustParentOptionSpecial(){
    var $groupContainer = getParentGroupContainer(this);
    var $li = $(this).parents("li").eq(0);
    var $checkbox = $li.find("input[type=checkbox]");

    var value = $li.find(".optionalValueInput").val() + $checkbox.data("unit");
    var rule = $checkbox.data("rule");
    if($checkbox.is(":checked")){
        var $optionalInputDisplay = $li.find(".optionalValueDisplay");
        $optionalInputDisplay.html(value);
        updateDemoContainer(rule, value);
    }else{
        updateDemoContainer(rule, "initial");
    }
}

function getChildGroupContainer(el){
    return $(el).parents(".childOptionGroup").eq(0);
}

function getChildItem(el){
    var childSelector = "." + $(el).parents(".child-list-wrapper").eq(0).data("child-id");
    return $(childSelector);
}

function adjustChildOption(){
    var $groupContainer = getChildGroupContainer(this);
    var $item = getChildItem(this);
    var $li = $(this).parents("li").eq(0);
    $groupContainer.find("li").removeClass("active");
    $li.addClass("active");

    $groupContainer.find("input").prop("checked", false);
    $li.find("input[type=radio]").prop("checked", true);
    var selectedRadioValue = $li.find("input[type=radio]").data("val");
    var value = selectedRadioValue;
    var rule = $groupContainer.data("rule");

    if(value === "custom"){
        // debugger;
        var $customValueInput = $li.find(".customValueInput");
        var $customInputDisplay = $li.find(".customValueDisplay");
        value = $customValueInput.val();
        $customInputDisplay.html(value);
    }else if(value === "length"){
        var $customValueInput = $li.find(".customValueInput");
        var $customInputDisplay = $li.find(".customValueDisplay");
        var unit = $li.find("input[type=radio]").data("unit");
        value = $customValueInput.val() + unit;
        $customInputDisplay.html(value);
    }

    updateItem($item, rule, value);
}

function focusItemInSidebar(){
    var itemID = $(this).data("item-id");
    var $itemListWrapper = $(".child-list-wrapper[data-child-id="+itemID+"]");

    $(".sidebar-content .list-wrapper").removeClass("active");

    $itemListWrapper.addClass("active");
    $itemListWrapper.parents(".list-wrapper").addClass("active");
}



function setFooter(){
    var repositionFooter = (function(){
        var viewportHeight = window.innerHeight;
        var contentBounds = $(".main-container")[0].getBoundingClientRect();

        if(viewportHeight > (contentBounds.height + $(".footerWrapper").height())){
            $(".footerWrapper").addClass("sticky");
        }else{
            $(".footerWrapper").removeClass("sticky");
        }
    });

    MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
    var observer = new MutationObserver(function(mutations, observer) {
        repositionFooter();
    });
    observer.observe(document, {
        subtree: true,
        attributes: true,
        childList: true
    });

    $(window).on("resize", repositionFooter);
    repositionFooter();
}

function addItem(event){
    event.stopImmediatePropagation();
    var $sidebarItemSnippet = $($("#itemSidebarTemplate").html());
    var itemID = "item-"+(++itemIncrement);
    var itemName = "item "+(itemIncrement);
    $sidebarItemSnippet.attr("data-child-id", itemID);
    $sidebarItemSnippet.find(".list-label").html(itemName);
    $sidebarItemSnippet.find(".list-label").append($("<i class="fas fa-trash removeItemBtn">"));

    $(".child-list-wrapper").removeClass("active");
    $(".child-items-container").addClass("active");
    $(".child-items-container").append($sidebarItemSnippet);

    var $itemSnippet = $($("#itemTemplate").html());

    $itemSnippet.attr("data-item-id", itemID);
    $itemSnippet.addClass(itemID);
    $itemSnippet.find(".item-id").html(itemName);

    $(".demo-container").append($itemSnippet);
}

function removeItem(event){
    event.stopImmediatePropagation();
    var $childListWrapper = $(this).parents(".child-list-wrapper");
    var itemID = $childListWrapper.data("child-id");

    $("."+itemID).remove();
    $childListWrapper.remove();
}
',
        ]);
    }
}

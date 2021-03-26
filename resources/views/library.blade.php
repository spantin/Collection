<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Collection</title>

        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/home.js') }}"></script>
    </head>
    <body>
        <div class="mainContainer">
            <div class="bannerContainer">
                <div class="bannerTitle"><span class='bold'>css</span> <span class='light'>examples</span></div>
                <div class="navOuterContainer">
                    <div class="navContainer">
                        <div class="navItem navAll active" data-item-couple-class='navAll' data-preview-item-class='allItemContain'>all</div>
                        <div class="navItem navLayout" data-item-couple-class='navLayout' data-preview-item-class='layoutItemContain'>layouts</div>
                        <div class="navItem navPlayground" data-item-couple-class='navPlayground' data-preview-item-class='playgroundItemContain'>playgrounds</div>
                        <div class="navItem navTool" data-item-couple-class='navTool' data-preview-item-class='toolItemContain'>tools</div>
                        <div class="navItem navComponent" data-item-couple-class='navComponent' data-preview-item-class='componentItemContain'>components</div>
                        <div class="navItem navPestroutes" data-item-couple-class='nacPestroutes' data-preview-item-class='pestroutesItemContain'>pestroutes</div>

                        <div class="searchBar">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="search" class='searchInput'>
                        </div>
                        <div class="searchBar2" onclick='toggleSearch()'>
                            <i class="fas fa-search"></i>
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="searchBar2InnerContainer">
                            <input type="text" placeholder="search" class='searchInput'>
                        </div>
                    </div>
                    <div class="m-navContainer">
                        <div class="toggleNav">
                            <input type="text" placeholder="search" class='searchInput'>
                            <i class="fas fa-search" onclick='toggleMSearch()' style='margin-right: 0.5em'></i>
                            <i class="fas fa-bars" onclick="toggleNav()"></i>
                        </div>
                        <div class="m-navInnerContainer">
                            <div class="navItem navAll active" data-item-couple-class='navAll' data-preview-item-class='allItemContain'><span class='navItemText'>all</span></div>
                            <div class="navItem navLayout" data-item-couple-class='navLayout' data-preview-item-class='layoutItemContain'><span class="navItemText">layouts</span></div>
                            <div class="navItem navPlayground" data-item-couple-class='navPlayground' data-preview-item-class='playgroundItemContain'><span class="navItemText">playgrounds</span></div>
                            <div class="navItem navTool" data-item-couple-class='navTool' data-preview-item-class='toolItemContain'><span class="navItemText">tools</span></div>
                            <div class="navItem navComponent" data-item-couple-class='navComponent' data-preview-item-class='componentItemContain'><span class="navItemText">components</span></div>
                            <div class="navItem navPestroutes" data-item-couple-class='navPestroutes' data-preview-item-class='pestroutesItemContain'><span class="navItemText">pestroutes</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contentContainer" class='allItemContain'>
                @each('library_item', $components, 'component')
            </div>

        </div>

        <div class="footerContainer">
            <div class="footerInner">
                &copy; 2021 Steven Pantin
            </div>
        </div>

    </body>
</html>

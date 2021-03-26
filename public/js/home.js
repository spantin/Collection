$(document).ready(function(){
    setFooter();
    $('.navItem').click(function(){
        $('.navItem').removeClass('active');
        $("."+$(this).data('item-couple-class')).addClass('active');
        var contentClass = $(this).data('preview-item-class');
        $('#contentContainer').removeClass().addClass(contentClass);
        toggleNav();
    });

    $(window).on('scroll resize', function(){
        var bannerBounds = $('.bannerContainer')[0].getBoundingClientRect();
        var navHeight = $('.navOuterContainer')[0].getBoundingClientRect().height;

        if((bannerBounds.height + bannerBounds.top) < navHeight){
            $('.navOuterContainer').addClass('sticky');
        }else{
            $('.navOuterContainer').removeClass('sticky');
        }
        setFooter();

    });

    MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
    var observer = new MutationObserver(function(mutations, observer) {
        console.log('change');
        setFooter();
    });
    observer.observe(document, {
        subtree: true,
        attributes: true,
        childList: true
    });

    $(window).on('resize', function(){
        toggleNav(true)
        toggleMSearch(true);
        toggleSearch(true);
    });


    $('.previewItem').click(function(){
        window.location.href = "./component/" + $(this).data('component-id');
    });

    $('.searchInput').on('keyup', function(){
        $('.searchInput').val($(this).val());
        var searchWords = $(this).val().split(' ');

        if(searchWords.length <= 0 || searchWords[0] == ''){
            $('.previewItem').attr('style', '');
        }
        $('.previewItem').each(function(){
            var description = $(this).find('.previewDescription').html();
            var keywords = [];
            $(this).find('.keyword').each(function(){
                keywords.push($(this).html());
            });

            var match = false;
            for(var i=0; i<searchWords.length; i++){
                match |= description.toLowerCase().indexOf(searchWords[i].toLowerCase()) >= 0;
                if(match) break;

                for(var j=0; j<keywords.length; j++){
                    match |= keywords[j].toLowerCase().indexOf(searchWords[i].toLowerCase()) >= 0;
                    if(match) break;
                }
            }

            if(match){
                $(this).attr('style', '');
            }else{
                $(this).hide();
            }
        });
    });
});


function setFooter(){
    var viewportHeight = window.innerHeight;
    var contentBounds = $('.mainContainer')[0].getBoundingClientRect();

    if(viewportHeight > (contentBounds.height + $('.footerContainer').height())){
        $('.footerContainer').addClass('sticky');
    }else{
        $('.footerContainer').removeClass('sticky');
    }
}

function toggleNav(forceClose){
    if(forceClose || $('.m-navInnerContainer').is(':visible')){
        $('.m-navInnerContainer').slideUp(200);
    }else{
        $('.m-navInnerContainer').slideDown(200);
    }
}

function toggleMSearch(forceClose){
    if(forceClose || $('.m-navContainer .searchInput').is(':visible')){
        $('.m-navContainer .searchInput').hide();
    }else{
        $('.m-navContainer .searchInput').show();
        $('.m-navContainer .searchInput').focus();
    }
}

function toggleSearch(forceClose){
    if(forceClose || $('.searchBar2InnerContainer').is(':visible')){
        $('.searchBar2').removeClass('active');
        $('.searchBar2InnerContainer').slideUp(200);
    }else{
        $('.searchBar2').addClass('active');
        $('.searchBar2InnerContainer').slideDown(200);
        $('.searchBar2InnerContainer .searchInput').focus();
    }
}


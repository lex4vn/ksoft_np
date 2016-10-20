jQuery(document).ready(function () {

    var _window = jQuery(window);
    var same_height_objs = jQuery('.same-height');

    set_same_height();
    _window.resize(set_same_height);

    function set_same_height() {
        same_height_objs.css({height: 'auto'});
        same_height_objs.height(get_max_height());

        function get_max_height() {
            max_height = 0;

            same_height_objs.each(function () {
                this_height = jQuery(this).height();
                if (this_height > max_height) max_height = this_height;
            });

            return max_height;
        }
    }


    var searchHolder = jQuery('#header .search-form');
    var searchButton = jQuery('input[type="submit"]', searchHolder);
    var searchInput = jQuery('input[type="search"]', searchHolder);
    var focusIn = false;
    var searchOpen = false;
    var timeoutId;

    searchButton.hover(
        function () {
            over();
        }
        , function () {
            out();
        }
    )
    searchInput.hover(
        function () {
            over();
        }
        , function () {
            out();
        }
    )

    searchInput.focus(focusInFn);
    searchInput.focusout(focusOutFn);

    searchButton.click(function () {
        if (!searchOpen) {
            return false;
        }
    })

    function over() {
        searchInput.css({display: 'block'}).stop().animate({
            width: "200px",
        }, 200, function () {
            searchOpen = true;
        });
        clearTimeout(timeoutId);

        searchHolder.addClass('search-open');
    }

    function out() {
        if (!focusIn) {
            timeoutId = setTimeout(function () {
                searchInput.stop().animate({
                    width: "0px"
                }, 200, function () {
                    searchInput.css({display: 'none'});
                    searchHolder.removeClass('search-open');
                    searchOpen = false;
                })
            }, 700);
        }
    }

    function focusInFn() {
        focusIn = true;
    }

    function focusOutFn() {
        focusIn = false;
        out();
    }
    // Scroll header
    var lastScrollTop = 0;
    var delta = 5;
    var header = jQuery('#header');
    var compactClass = 'header-compact';
    var stickyPosTrigger = 400;
    var stickyActive = false;
    jQuery(window).scroll(function (event) {
        var topPosition = jQuery(window).scrollTop();

        if (Math.abs(lastScrollTop - topPosition) <= delta) {
            return;
        }
        // direction actions
        if (topPosition > lastScrollTop) {
            // downscroll code
            if (topPosition > stickyPosTrigger && !stickyActive) {
                header.addClass(compactClass);stickyActive = true;
            }

        } else {
            // upscroll code
            if (stickyActive) {
                header.removeClass(compactClass);
                stickyActive = false;
            }
        }
        lastScrollTop = topPosition;
    });

    // Search
    var searchActive = false;
    jQuery('#nav-search-form-input, #page-mask').click(function () {
        searchActiveClass();
    });

    function searchActiveClass(){
        if(searchActive){
            jQuery('body').removeClass('searching show-mask');
            jQuery('body').removeClass('searching show-mask header-focus');
            jQuery('#header').removeClass('header-focus');
            searchActive = false;
        }else{
            jQuery('body').addClass('searching show-mask');
            jQuery('#header').addClass('header-focus');
            searchActive = true;
        }
    }
    var _expandSearch = function() {
        if (searchActive) {
            return;
        }
        searchActive = true;
        $utilityNav.addClass('search-expand');
        jQuery('body').addClass('searching');

        if (!$utilityNav.hasClass('has-been-opened')) {
            $utilityNav.addClass('has-been-opened');
            $('.search-dropdown-results li a').addClass('js-enhanced');
        }

        // add mask


        //if (!Modernizr['screen-size-small']) {
        //    $searchField.focus();
        //}

        // listener to close on outside click
        //_.defer(bodyClick);

    };

    var _collapseSearch = function() {
        if (!searchActive) {
            return;
        }
        searchActive = false;

        Contra.Cache.$body.removeClass('searching');
        $utilityNav.removeClass('search-expand');

        // hide mask
        Contra.Thrillist.Mask.hide();

        $searchField.blur();

        // remove listener
        Contra.Cache.$body.off('click.headerCollapse');

        // fire GA
        Contra.Events.push("search_nav", "search bar" , "close", searchPosition);
    };
})
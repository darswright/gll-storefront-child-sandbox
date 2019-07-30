jQuery(function($) {
  var canBeLoaded = true;
  var bottomOffset = 1500; // the distance (in px) from the page bottom to load more posts

  $(window).scroll(function() {
    var data = {
      action: "loadmore",
      query: gll_loadmore_params.posts,
      page: gll_loadmore_params.current_page
    };
    var scrollTop = $(document).scrollTop();
    var height = $(document).height();

    if (scrollTop > height - bottomOffset && canBeLoaded == true) {
      $.ajax({
        url: gll_loadmore_params.ajaxurl,
        data: data,
        type: "POST",
        beforeSend: function(xhr) {
          // add preloader here

          // AJAX call in process, don't run again until complete
          canBeLoaded = false;
        },
        success: function(data) {
          if (data) {
            $("#main")
              .find("article:last-of-type")
              .after(data);
            canBeLoaded = true;
            gll_loadmore_params.current_page++;
          }
        }
      });
    }
  });
});

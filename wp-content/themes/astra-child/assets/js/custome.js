var swiper = new Swiper(".claire-service-small", {
  loop: false,
  autoplay: false,
  spaceBetween: 10,
  slidesPerView: 3.4,
  breakpoints: {
    500: {
      slidesPerView: 4.4,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 5.4,
      spaceBetween: 15,
    },
  },
});

var swiper = new Swiper(".claire-service-full", {
  loop: false,
  autoplay: false,
  spaceBetween: 0,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },

});


var swiper = new Swiper(".claire-production-small", {
  loop: false,
  zoom: false,
  autoplay: false,
  spaceBetween: 10,
  slidesPerView: 3.4,
  breakpoints: {
    500: {
      slidesPerView: 4.4,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 4.4,
      spaceBetween: 15,
    },
  },
});

var swiper = new Swiper(".claire-production-full", {
  loop: false,
  zoom: false,
  autoplay: false,
  spaceBetween: 0,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },

});




var swiper = new Swiper(".claire-production-small-second", {
  loop: false,
  zoom: false,
  autoplay: false,
  spaceBetween: 10,
  slidesPerView: 3.4,
  breakpoints: {
    500: {
      slidesPerView: 4.4,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 4.4,
      spaceBetween: 15,
    },
  },
});

var swiper = new Swiper(".claire-production-full-second", {
  loop: false,
  zoom: false,
  autoplay: false,
  spaceBetween: 0,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },

});


var swiper = new Swiper(".claire-project", {
  slidesPerView: 2,
  loop: true,
  autoplay: false,
  spaceBetween: 10,

 
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },

});


var swiper = new Swiper(".claire_team", {
  slidesPerView: 2,
  spaceBetween: 10,
  autoplay: false,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});


var swiper = new Swiper(".claire-portfolio", {
  slidesPerView: 1,
  loop: true,
  autoplay: false,

  centeredSlides: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 1,

    },
    1024: {
      slidesPerView: 1,

    },
  },

});


const toggleMenuClicked = () => {
  const body = document.body;
  const openIcon = document.getElementById("open-icon");
  const closeIcon = document.getElementById("close-icon");

  body.classList.toggle("open");

  if (body.classList.contains("open")) {
    openIcon.style.display = "none";
    closeIcon.style.display = "flex";
  } else {
    openIcon.style.display = "flex";
    closeIcon.style.display = "none";
  }
};







$(document).ready(function () {


  var $btns = $('.protofolio-box .overflow-auto .tab_btns').click(function () {
    // if (this.id == 'all-categories') {
    //   $('#parent > div').fadeIn(450);
    // } else {
    //   var $el = $('.' + this.id).fadeIn(450);
    //   $('#parent > div').not($el).hide();
    // }

    //     $('#all-categories').on('click', function() {
    //       var fields = $('#parent .hotels , #parent .others, #parent .residential ,#parent .restaurants ,#parent .spa-resourts').hide();
    //   });
    //   $('#hotels').on('click', function() {
    //     var fields = $('#parent .hotels , #parent .others, #parent .residential ,#parent .restaurants ,#parent .spa-resourts').hide();
    // });

    $btns.removeClass('active');
    $(this).addClass('active');
  })

  var firstBtn = $('.protofolio-box  .btn:first-child');
  firstBtn.addClass('active');



});


$(document).ready(function () {
  let currentPage = 1;
  let currentCategory = 'all-categories';

  function openCategory(categoryName) {
    //console.log(categoryName)
    currentCategory = categoryName;
    currentPage = 1;
    //$("#parent").empty(); // Clear previous posts
    fetchPosts();
  }

  function fetchPosts() {

    // Make an AJAX call to fetch posts based on currentCategory and currentPage
    // Example using jQuery AJAX:
    $.ajax({
      url: pguajax.ajaxurl, // Use appropriate URL
      type: 'POST',
      data: {
        action: 'fetch_portfolio_posts',
        category: currentCategory,
        page: currentPage
      },
      success: function (response) {
        $('#parent').append(response.data.posts_html);
        portfolio_slider();
        //console.log($('#parent .total_counts').length)
        // console.log(response.data)
        // Show/hide Load More button based on remaining posts
        jQuery('.overlay-loader').hide();
        jQuery('.protofolio-box .overflow-auto button').removeClass('loader-disabled');
        if ($('#parent .total_counts').length < response.data.total_posts) {
          $('#loadMoreBtn').show();
        } else {
          $('#loadMoreBtn').hide();
        }
      }
    });
  }


  $('#loadMoreBtn').on('click', function () {
    //console.log('dfds')
    jQuery('.overlay-loader').show();
    currentPage++;
    fetchPosts();
  });
  // Initially load posts for 'All Categories' tab
  openCategory('all-categories');



  $("#portfolio-box .tab_btns").on('click', function () {

    $("#parent").empty();
    var category = $(this).data("category"); // Get the category from data attribute
    //console.log(category)
    // Make AJAX request
    $(this).addClass('loader-disabled')
    jQuery('.overlay-loader').show();
    openCategory(category);

  });


  function portfolio_slider() {

    var swiper = new Swiper(".claire-portfolio", {
      slidesPerView: 1,
      loop: true,
      autoplay: false,

      centeredSlides: true,

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 1,

        },
        1024: {
          slidesPerView: 1,

        },
      },

    });
  }
});

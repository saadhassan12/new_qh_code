$('.navigation-toggle').on('click', function() {
    $('.web-links').toggleClass('open');
});

 $('.web-link-li').on('click', function() {
    $(this).find('.sub-menu').toggleClass('active-mobile');
 });

$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});


$(document).ready(function() {
  const productsLink = $('.web-link-li > a');
  const productDropdown = $('.sub-menu');

  // Close dropdowns and submenus if click outside
  $(document).on('click', function(event) {
      const isClickInside = productsLink.is(event.target) || productDropdown.has(event.target).length > 0;
      if (!isClickInside) {
          productDropdown.hide();
          $('.nested-menu').hide();
      }
  });

  // Prevent closing dropdown on internal click
  productDropdown.on('click', function(event) {
      event.stopPropagation();
  });

  // Function to show submenu items with drop animation
  function showSubMenuItems(subMenu) {
      subMenu.find('li').each(function(index) {
          const listItem = $(this);
          listItem.css({
              'animation-delay': (index * 0.1) + 's',
              'opacity': '0',
              'transform': 'translateY(-20px)'
          }).addClass('animated');
      });
  }

  // Open main dropdown on hover with animation
  productsLink.on('mouseenter', function() {
      $('.sub-menu').removeClass('active'); // Close other menus
      const subMenu = $(this).siblings('.sub-menu');
      subMenu.addClass('active').show(); // Show submenu
      subMenu.find('li').removeClass('animated').css({
          'opacity': '',
          'transform': ''
      }); // Reset animation
      showSubMenuItems(subMenu);
  });

  // Close dropdown on mouse leave from main menu
  $('.web-links').on('mouseleave', function() {
      productDropdown.removeClass('active');
      productDropdown.find('li').removeClass('animated').css({
          'opacity': '',
          'transform': ''
      }); // Reset animation
  });

  // Handle mouse enter and leave for sub-menu items
  $('.sub-menu > li').on('mouseenter', function() {
      const nestedMenu = $(this).find('.nested-menu');
      nestedMenu.show();
      nestedMenu.find('li').removeClass('animated').css({
          'opacity': '',
          'transform': ''
      }); // Reset animation
      showSubMenuItems(nestedMenu);
  });

  // Close nested menu on mouse leave from sub-menu item
  $('.sub-menu > li').on('mouseleave', function() {
      $(this).find('.nested-menu').hide();
  });

  // Handle mouse enter and leave for nested menu items
  $('.nested-menu > li').on('mouseenter', function() {
      const nestedSubMenu = $(this).find('.nested-menu');
      nestedSubMenu.show();
      nestedSubMenu.find('li').removeClass('animated').css({
          'opacity': '',
          'transform': ''
      }); // Reset animation
      showSubMenuItems(nestedSubMenu);
  });

  // Close nested menu on mouse leave from nested menu item
  $('.nested-menu > li').on('mouseleave', function() {
      $(this).find('.nested-menu').hide();
  });
});

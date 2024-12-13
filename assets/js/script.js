// navbar active on scroll 
if($(".nav_bar").length)
{
  window.addEventListener("scroll", function()
  {
    let scrollY = this.window.scrollY;
    scrollY > 60 ? $(".nav_bar").addClass("active") : $(".nav_bar").removeClass("active");
    
    //scrollY > 60 ? $(".logo").html(`<img src="assets/images/logo2.png">`) : $(".logo").html(`<img src="assets/images/logo.png">`);

  })
}

// mobile menu 
if ($(".mobile-menu").length) 
{
  $(".mobile-nav-toggler").on("click", function () {
    $("body").addClass("mobile-menu-visible");
  });

  $(".mobile-menu .menu-backdrop, .mobile-menu .close-btn").on(
    "click",
    function () {
      $("body").removeClass("mobile-menu-visible");
    }
  );
  
}

//mobile dropdown
if($(".mobile_dropdown").length)
{
  $(".mobile_dropdown").click(function(event)
  {
    event.preventDefault();
   
    $(this).closest("a").next(".mobile_dropdown_ul").toggleClass("show");
    $(this).find("i").toggleClass("rotate");
  })
}

//scroll to top
if ($(".scroll-to-top").length) 
{
  window.addEventListener("scroll", function()
  {
     let scrollY = window.scrollY;
     if(scrollY > 500)
     {
      $(".scroll-to-top").show();
     }
     else 
     {
      $(".scroll-to-top").hide();
     }
  })

  $(".scroll-to-top").click(function() {
    window.scrollTo(0, 0);
  });
}


//expand process content
if ($(".process_expand_btn").length) {
    $(".process_expand_btn").click(function() {
        const expand_content = $(this).siblings('.expand_content');
        const parentCard = $(this).closest('.process_item'); // Get the parent card

        // Toggle button text for the clicked button
        $(this).children('span').text(function(_, currentText) {
            return currentText === 'Read More' ? 'Read Less' : 'Read More';
        });

        // Collapse all other expand_content
        $(".expand_content").not(expand_content).slideUp(400, function() {
            $(this).closest('.process_item').css('max-height', '450px');
            $(this).siblings('.process_expand_btn').children('span').text('Read More');
        });

        // Check if the clicked content is visible
        if (!expand_content.is(":visible")) {
             parentCard.css('max-height', 'fit-content');
             expand_content.css('display', 'none').slideDown(400, function() {
                parentCard.css('max-height', 'fit-content'); 
             });
        } else {
            // If already visible, just slide up and reset height
            expand_content.slideUp(400, function() {
                 parentCard.css('max-height', '450px'); 
            });
        }
    });
} 


//office filter
let office_btn = document.querySelectorAll(".office_btn");
let our_office_item = document.querySelectorAll(".our_office_item");

if(office_btn)
{
  function filter_office(val)
  {
    our_office_item.forEach(function(elem)
    {
      let  data_office =  elem.parentNode;
      let data_office_country =  elem.parentNode.getAttribute("data-office-country");
      
      if(data_office_country == val)
      {
        data_office.style.display = "block";
      }
      else 
      {
        data_office.style.display = "none";
      }

    })
  }

  //default call
  filter_office(0);

  office_btn.forEach(elem => {
    elem.addEventListener("click", function()
    {
      let btn_country = elem.getAttribute("data-btn-country");

      office_btn.forEach(function(item)
      {
        item.classList.remove("active");
      })

      elem.classList.add("active");
      filter_office(btn_country);
    })
  });
}


//active menu
var path = window.location.pathname;
var page = path.split("/").pop();

let cardH4 = document.querySelectorAll(".dropdown_era_item h4");
if(cardH4)
{
  cardH4.forEach(function(item)
  {
    let h4_attr = item.getAttribute("data-href");
    
    item.classList.remove("active");
    if(page == h4_attr)
    {
      item.classList.add("active");
    }

    // special case
    if (page === "blog_details" && h4_attr === "blogs") {
      item.classList.add("active");
    }

  })
}


// Loop each link and add 'active' class 
var navLinks = document.querySelectorAll('.menu a');
if(navLinks)
{
  navLinks.forEach(function(link) 
  {
      if (link.getAttribute('href') === page) {
          link.classList.add('active');
      }

      // If on a product sub-page, also add 'active' to the "Products" link
      if (page === "insurance_agency_management" || page === "intelligent_document_processing") {
          document.querySelector('.product_dropdown > a').classList.add('active');
      }

      if (page === "blogs" || page === "blog_details" || page === "case_studies") {
        document.querySelector('.insight_dropdown > a').classList.add('active');
      }

      if (page === "analytics_data_science" || page === "product_development" || page === "cloud_solution" || page === "power_automate" || page === "ai_machine_learning" || page === "crm") {
        document.querySelector('.service_dropdown > a').classList.add('active');
      }
      
      //If on blog details
      if (page === "blogs" || page === "blog_details") 
      {
        if(link.getAttribute('href') === "blogs")
        {
          link.classList.add('active');
        }
      } 

      //if page case studies
      if (page === "case_studies") 
      {
        if(link.getAttribute('href') === "case_studies")
        {
          link.classList.add('active');
        }
      }

  });
}


// AMP page set filter button active 
let service_filter_btn = document.querySelectorAll(".service_filter_btn");
if(service_filter_btn)
{
  service_filter_btn.forEach(function(elem)
  {
      elem.addEventListener("click", function()
      {
          service_filter_btn.forEach(function(item)
          {
            item.classList.remove("active");  
          })
          elem.classList.add("active");
  
      })
  })
}

// Make filter button sticky
document.addEventListener('DOMContentLoaded', function() {
    const filterElement = document.querySelector('.service_feature_filter_era');
    const filterContainer = document.querySelector('.service_feature_filter');
    const placeholder = document.querySelector('.sticky-placeholder');

    if(filterElement)
    {
      // Function to update section positions
      const updatePositions = () => {
          const filterContainerTop = filterContainer.offsetTop;
          const missionFeaturesSection = document.querySelector('.mission_features'); // Updated variable name
          const missionFeaturesTop = missionFeaturesSection.offsetTop; // Update the position of the mission features section
          return { filterContainerTop, missionFeaturesTop };
      };

      // Initial position calculations
      let { filterContainerTop, missionFeaturesTop } = updatePositions();

      // Event listener for window resize
      window.addEventListener('resize', () => {
          ({ filterContainerTop, missionFeaturesTop } = updatePositions());
      });

      window.addEventListener('scroll', function() {
          const scrollY = window.scrollY;

          // Check if we are past the filter container but before the mission features section
          if (scrollY >= filterContainerTop && scrollY < missionFeaturesTop) {
              if (!filterElement.classList.contains('sticky')) {
                  filterElement.classList.add('sticky');
                  placeholder.style.display = 'block'; // Show the placeholder
                  placeholder.style.height = filterElement.offsetHeight + 'px'; // Match the height of the sticky element
              }
          } else if (scrollY >= missionFeaturesTop) {
              if (filterElement.classList.contains('sticky')) {
                  filterElement.classList.remove('sticky');
                  placeholder.style.display = 'none'; // Hide the placeholder
              }
          } else {
              // When scrolling back up and not in the mission features section
              if (filterElement.classList.contains('sticky')) {
                  filterElement.classList.remove('sticky');
                  placeholder.style.display = 'none'; // Hide the placeholder
              }
          }
      });

    }

});

// Coming Soon popup on click service_feature_item button

if($(".service_feature_left > button").length)
{

  $(".service_feature_left > button").click(function() {
    if ($(".coming_soon_popup").is(":hidden")) {
      $(".coming_soon_popup")
        .css({ display: "flex", opacity: 0, transform: "translateY(20px)" })
        .animate({ opacity: 1, transform: "translateY(0)" }, 600);
    } 
  });

  $(".cls_coming_soon").click(function() {
    $(".coming_soon_popup").animate(
      { opacity: 0, transform: "translateY(20px)" },
      600,
      function() {
        $(this).css("display", "none");
      }
    );
  });

  $(".coming_soon_popup").click(function(event) {
    if (!$(event.target).closest(".coming_soon_popup_in").length) {
      $(this).animate(
        { opacity: 0, transform: "translateY(20px)" },
        600,
        function() {
          $(this).css("display", "none");
        }
      );
    }
  });

}



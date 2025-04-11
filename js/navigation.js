/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const menuContainer = document.querySelector('.menu-container');
    
    if (menuToggle && menuContainer) {
        menuToggle.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            menuContainer.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });
    }
    
    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (menuContainer && menuContainer.classList.contains('active') && 
            !e.target.closest('.menu-container') && 
            !e.target.closest('.menu-toggle')) {
            menuToggle.setAttribute('aria-expanded', 'false');
            menuContainer.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabPanels.forEach(panel => panel.classList.remove('active'));
            
            this.classList.add('active');
            
            
            const tabId = this.getAttribute('data-tab');
            const activePanel = document.getElementById(tabId);
            if (activePanel) {
                activePanel.classList.add('active');
            }
        });
    });
});
jQuery(document).ready(function($) {
    // Open modal when Get Quote button is clicked
    $('a[href="#"].btn').on('click', function(e) {
        e.preventDefault();
        $('#quoteModal').fadeIn(300);
    });
    
    // Close modal when X is clicked
    $('.close-modal').on('click', function() {
        $(this).closest('.modal').fadeOut(300);
    });
    
    // Close modal when clicking outside
    $(window).on('click', function(e) {
        if ($(e.target).hasClass('modal')) {
            $('.modal').fadeOut(300);
        }
    });
    
    // Close confirmation modal
    $('.close-confirmation').on('click', function() {
        $('#confirmationModal').fadeOut(300);
    });
    
       
        // Handle form submission - REPLACE THIS ENTIRE SECTION
        $('#quoteForm').on('submit', function(e) {
            e.preventDefault();
            
            // Debug: Log form data before sending
            console.log("Preparing to submit form");
            var formData = new FormData(this);
            formData.append('security', '<?php echo wp_create_nonce("quote_request_nonce"); ?>');
            formData.append('action', 'process_quote_request');
            
            // Debug: Show the AJAX URL being used
            var ajaxUrl = 'https://clean-up-green-b.web.dmitcapstone.ca/wp-admin/admin-ajax.php';
            console.log("Using AJAX URL:", ajaxUrl);
            
            // Debug: Log form data contents
            for (var pair of formData.entries()) {
                console.log(pair[0]+ ': ' + pair[1]);
            }
            
            $.ajax({
                url: ajaxUrl,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json', // Ensure we expect JSON response
                beforeSend: function() {
                    $('#quoteForm button[type="submit"]')
                        .prop('disabled', true)
                        .html('<span class="spinner"></span> Processing...');
                },
                success: function(response, status, xhr) {
                    console.log("Full response:", response);
                    console.log("Status:", status);
                    console.log("XHR:", xhr);
                    
                    if (response && response.success) {
                        $('#quoteModal').fadeOut(300);
                        $('#confirmationModal').fadeIn(300);
                    } else {
                        var errorMsg = 'There was an error. Please try again.';
                        if (response && response.data) {
                            errorMsg = response.data;
                        }
                        alert(errorMsg);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", {
                        status: status,
                        error: error,
                        response: xhr.responseText,
                        readyState: xhr.readyState,
                        statusCode: xhr.status
                    });
                    
                    var errorMsg = 'There was an error. Please try again later.';
                    try {
                        var jsonResponse = JSON.parse(xhr.responseText);
                        if (jsonResponse.data) {
                            errorMsg = jsonResponse.data;
                        }
                    } catch (e) {}
                    
                    alert(errorMsg);
                },
                complete: function() {
                    $('#quoteForm button[type="submit"]')
                        .prop('disabled', false)
                        .text('Get Quote');
                }
            });
        });
    });
    
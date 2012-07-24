jQuery(document).ready(function($) {
	// Set this to the CSS selector of the element that wraps your post content.
	// e.g. .entry or .entry-content
	var selector = '.rm-content';
	
	// The HTML for your "View This in Reading Mode" link.
	var html = '<p class="rm-button"><em>View this post in <a href="#" class="reading-mode" rel="nofollow">Reading Mode</a>.</em></p>';
	
	$(selector)
		.prepend(html)
		.find('.reading-mode')
		.colorbox({
			innerHeight: "80%",
			innerWidth: 700,
			inline: true,
			href: selector
		});
});
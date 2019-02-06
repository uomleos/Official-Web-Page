/*global shortcode_settings*/
/*global jQuery*/

/**
 * File for adding title attribute in sections.
 */
jQuery(document).ready(function() {
    'use strict';

    var sections_container = shortcode_settings.sections_container;
    var blocked_items = shortcode_settings.blocked_items;
    var ids = jQuery(sections_container + '> li:not(.panel-meta, ' + blocked_items + ')').map(function () {
        return this.id;
    }).toArray();

    for (var i = 0; i < ids.length; i++) {
        var section_id = ids[i].replace('accordion-section-', '');
        if (section_id !== 'hestia_about') {
            if( section_id === 'sidebar-widgets-subscribe-widgets'){
                section_id = 'hestia_subscribe';
            }
            jQuery('#' + ids[i]).attr('title', '[' + section_id + ']' );
        }
    }

} );
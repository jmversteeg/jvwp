<?php

namespace jvwp\constants;
/**
 * This class should eventually include constants and documentation for every hook
 */
class Hooks
{

    /**
     * The wp_insert_post action fires once a post has been saved. You have the ability to set it to only fire on new
     * posts or on all save actions using the parameters. Please see
     * <a href="http://codex.wordpress.org/Plugin_API/Action_Reference/save_post">Plugin_API/Action_Reference/save_post
     * </a> for more information. Keep in mind that this action is called both for actions in the admin as well as
     * anytime the wp_insert_post() function is invoked.
     * @link http://codex.wordpress.org/Plugin_API/Action_Reference/wp_insert_post
     */
    const WP_INSERT_POST = 'wp_insert_post';

    /**
     * This action is used to add extra submenus and menu options to the admin panel's menu structure. It runs after
     * the basic admin panel menu structure is in place.
     * @link http://codex.wordpress.org/Plugin_API/Action_Reference/admin_menu
     */
    const ADMIN_MENU = 'admin_menu';

    /**
     * The <pre>admin_init</pre> hook is triggered before any other hook when a user accesses the admin area. This hook
     * doesn't provide any parameters, so it can only be used to callback a specified function.
     * @link http://codex.wordpress.org/Plugin_API/Action_Reference/admin_init
     */
    const ADMIN_INIT = 'admin_init';

    /**
     * The <pre>wp_enqueue_scripts</pre> hook is the proper hook to use when enqueuing items that are meant to appear
     * on the front end. Despite the name, it is used for enqueuing both scripts and styles.
     * @link http://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
     */
    const WP_ENQUEUE_SCRIPTS = 'wp_enqueue_scripts';

    /**
     * The <pre>admin_enqueue_scripts</pre> hook is the first action hooked into the admin scripts actions. It provides
     * a single parameter, the <pre>$hook_suffix</pre> for the current admin page.
     * @link http://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
     */
    const ADMIN_ENQUEUE_SCRIPTS = 'admin_enqueue_scripts';

    /**
     * Runs after WordPress has finished loading but before any headers are sent. Useful for intercepting
     * <pre>$_GET</pre> or <pre>$_POST</pre> triggers.
     * @link http://codex.wordpress.org/Plugin_API/Action_Reference/init
     */
    const INIT = 'init';

    /**
     * This action hook executes just before WordPress determines which template page to load. It is a good hook to use
     * if you need to do a redirect with full knowledge of the content that has been queried.
     * @link http://codex.wordpress.org/Plugin_API/Action_Reference/template_redirect
     */
    const TEMPLATE_REDIRECT = 'template_redirect';
}
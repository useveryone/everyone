<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Falcha News
 */

if (!function_exists('falcha_news_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function falcha_news_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s" ' . falcha_news_get_microdata('date-published') . '>%2$s</time><time class="updated" datetime="%3$s" ' . falcha_news_get_microdata('date-modified') . '>%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            '%s',
            '<i class="fas fa-calendar-alt"></i><a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );
        $show_posted_date = 0;
        global $falcha_news_theme_options;
        if (is_singular()) {
            if (!empty($falcha_news_theme_options['falcha-news-enable-single-date'])) {
                $show_posted_date = $falcha_news_theme_options['falcha-news-enable-single-date'];
            }
        } else {
            if (!empty($falcha_news_theme_options['falcha-news-enable-blog-date'])) {
                $show_posted_date = $falcha_news_theme_options['falcha-news-enable-blog-date'];
            }
        }
        if ($show_posted_date == 1) {
            echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
        }
    }
endif;


/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Falcha News
 */

if (!function_exists('falcha_news_widget_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function falcha_news_widget_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s" ' . falcha_news_get_microdata('date-published') . '>%2$s</time><time class="updated" datetime="%3$s" ' . falcha_news_get_microdata('date-modified') . '>%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            '%s',
            '<i class="fas fa-calendar-alt"></i><a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );
        echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.


    }
endif;

if (!function_exists('falcha_news_posted_by')) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function falcha_news_posted_by()
    {
        $byline = sprintf(
            '%s',
            '<span class="author vcard" ' . falcha_news_get_microdata('post-author') . '><i class="fa fa-user"></i><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author"><span class="author-name" ' . falcha_news_get_microdata('post-author-name') . '>' . esc_html(get_the_author()) . '</span></a></span>'
        );

        global $falcha_news_theme_options;
        if (is_singular()) {
            $show_post_author = $falcha_news_theme_options['falcha-news-enable-single-author'];
        } else {
            $show_post_author = $falcha_news_theme_options['falcha-news-enable-blog-author'];
        }
        if ($show_post_author == 1) {
            echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
        }
    }
endif;


if (!function_exists('falcha_news_widget_posted_by')) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function falcha_news_widget_posted_by()
    {
        $byline = sprintf(
            '%s',
            '<span class="author vcard" ' . falcha_news_get_microdata('post-author') . '><i class="fa fa-user"></i><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author"><span class="author-name" ' . falcha_news_get_microdata('post-author-name') . '>' . esc_html(get_the_author()) . '</span></a></span>'
        );
        echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.


    }
endif;

if (!function_exists('falcha_news_entry_category')) :
    /**
     * Prints HTML with meta information for the categories
     */
    function falcha_news_entry_category()
    {
        // Hide category for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list();
            if ($categories_list) {
                /* translators: 1: list of categories. */

                global $falcha_news_theme_options;
                if (is_singular()) {
                    $show_post_category = $falcha_news_theme_options['falcha-news-enable-single-category'];
                } else {
                    $show_post_category = $falcha_news_theme_options['falcha-news-enable-blog-category'];
                }
                if ($show_post_category == 1) {
                    echo '<span class="cat-links">' . $categories_list . '</span>'; // WPCS: XSS OK.
                }
            }
        }
    }

endif;


if (!function_exists('falcha_news_widget_entry_category')) :
    /**
     * Prints HTML with meta information for the categories
     */
    function falcha_news_widget_entry_category()
    {
        // Hide category for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list();
            if ($categories_list) {
                /* translators: 1: list of categories. */
                echo '<span class="cat-links">' . $categories_list . '</span>'; // WPCS: XSS OK.
            }
        }
    }

endif;

if (!function_exists('falcha_news_entry_footer')) :
    /**
     * Prints HTML with meta information for the tags and comments.
     */
    function falcha_news_entry_footer()
    {
        // Hide  tag text for pages.
        if ('post' === get_post_type()) {
            global $falcha_news_theme_options;
            $falcha_news_enable_tags = $falcha_news_theme_options['falcha-news-enable-blog-tags'];

            if ($falcha_news_enable_tags == 1 || is_singular()) {

                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'falcha-news'));
                if ($tags_list) {
                    /* translators: 1: list of tags. */
                    echo '<span class="tags-links"><i class="fa fa-tags"></i></span>' . $tags_list;
                }
            }
        }

        global $falcha_news_theme_options;
        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number()) && ($falcha_news_theme_options['falcha-news-enable-blog-comment'] == 1)) {
            echo '<span class="comments-link"><i class="fas fa-comments"></i>';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: post title */
                        __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'falcha-news'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                )
            );
            echo '</span>';
        }

        edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Edit <span class="screen-reader-text">%s</span>', 'falcha-news'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ),
            '<span class="edit-link"><i class="fas fa-pencil-alt"></i>',
            '</span>'
        );
    }
endif;


if (!function_exists('falcha_news_entry_footer')) :
    /**
     * Prints HTML with meta information for the tags and comments.
     */
    function falcha_news_entry_footer()
    {
        // Hide  tag text for pages.
        if ('post' === get_post_type()) {

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'falcha-news'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                echo '<span class="tags-links"><i class="fa fa-tags"></i></span>' . $tags_list; // WPCS: XSS OK.
            }
        }

        global $falcha_news_theme_options;
        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number()) && ($falcha_news_theme_options['falcha-news-enable-blog-comment'] == 1)) {
            echo '<span class="comments-link"><i class="fas fa-comments"></i>';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: post title */
                        __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'falcha-news'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                )
            );
            echo '</span>';
        }

        edit_post_link(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __('Edit <span class="screen-reader-text">%s</span>', 'falcha-news'),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ),
            '<span class="edit-link"><i class="fas fa-pencil-alt"></i>',
            '</span>'
        );
    }
endif;

if (!function_exists('falcha_news_post_thumbnail')) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function falcha_news_post_thumbnail()
    {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
?>

            <div class="post-thumbnail">
                <?php
                the_post_thumbnail('falcha-news-large-thumb', array(
                    'alt' => the_title_attribute(array(
                        'echo' => false,
                    )),
                    'itemprop' => 'image'
                ));

                ?>
            </div><!-- .post-thumbnail -->

        <?php else : ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail('falcha-news-large-thumb', array(
                    'alt' => the_title_attribute(array(
                        'echo' => false,
                    )),
                    'itemprop' => 'image'
                ));
                ?>
            </a>

<?php
        endif; // End is_singular().
    }
endif;

/**
 * List down the post category
 *
 * @param int $post_id
 * @return string list of category
 *
 * @since Falcha News 1.0.0
 *
 */
if (!function_exists('falcha_news_list_category')) :
    function falcha_news_list_category($post_id = 0)
    {

        if (0 == $post_id) {
            global $post;
            $post_id = $post->ID;
        }
        $separator = ' ';
        $output = falcha_news_get_category($post_id);
        $show_post_category = '';
        if ($output) {
            global $falcha_news_theme_options;
            if (is_singular()) {
                if (!empty($falcha_news_theme_options['falcha-news-enable-single-category'])) {
                    $show_post_category = $falcha_news_theme_options['falcha-news-enable-single-category'];
                }
            } else {
                if (!empty($falcha_news_theme_options['falcha-news-enable-blog-category'])) {
                    $show_post_category = $falcha_news_theme_options['falcha-news-enable-blog-category'];
                }
            }
            if ($show_post_category == 1) {
                echo trim($output, $separator);
            }
        }
    }
endif;

/**
 * List down the list  category
 *
 * @param int $post_id
 * @return string list of category
 *
 * @since Falcha News 1.0.0
 *
 */
if (!function_exists('falcha_news_featured_list_category')) :
    function falcha_news_featured_list_category($post_id = 0)
    {

        if (0 == $post_id) {
            global $post;
            $post_id = $post->ID;
        }
        $separator = ' ';
        $output = falcha_news_get_category($post_id);
        if ($output) {
            global $falcha_news_theme_options;
            if ($falcha_news_theme_options['falcha-news-slider-post-category'] == 1) {
                echo trim($output, $separator);
            }
        }
    }
endif;

/**
 * List down the get category
 *
 * @param int $post_id
 * @return string list of category
 *
 * @since Falcha News 1.0.0
 *
 */
if (!function_exists('falcha_news_get_category')) :
    function falcha_news_get_category($post_id = 0)
    {

        if (0 == $post_id) {
            global $post;
            $post_id = $post->ID;
        }
        $categories = get_the_category($post_id);
        $output = '';
        $separator = ' ';
        if ($categories) {
            $output .= '<span class="cat-links">';
            foreach ($categories as $category) {
                $output .= '<a class="ct-cat-item-' . esc_attr($category->term_id) . '" href="' . esc_url(get_category_link($category->term_id)) . '"  rel="category tag">' . esc_html($category->cat_name) . '</a>' . $separator;
            }
            $output .= '</span>';
            return $output;
        }
    }
endif;

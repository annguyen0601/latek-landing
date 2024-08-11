<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package avatarnews
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function hello_agency_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'avatarnews-boxshadow',
                'label' => __('Box Shadow', 'avatarnews')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'avatarnews-boxshadow',
                'label' => __('Box Shadow', 'avatarnews')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'avatarnews-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'avatarnews')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'avatarnews-boxshadow-large',
                'label' => __('Box Shadow Large', 'avatarnews')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'avatarnews-boxshadow',
                'label' => __('Box Shadow', 'avatarnews')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'avatarnews-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'avatarnews')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'avatarnews-boxshadow-large',
                'label' => __('Box Shadow Larger', 'avatarnews')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'avatarnews-boxshadow',
                'label' => __('Box Shadow', 'avatarnews')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'avatarnews-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'avatarnews')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'avatarnews-boxshadow-larger',
                'label' => __('Box Shadow Large', 'avatarnews')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'avatarnews-image-pulse',
                'label' => __('Iamge Pulse Effect', 'avatarnews')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'avatarnews-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'avatarnews')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'avatarnews-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'avatarnews')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'avatarnews-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'avatarnews')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'avatarnews-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'avatarnews')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'avatarnews-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'avatarnews')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'avatarnews-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'avatarnews')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background Color', 'avatarnews')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'avatarnews')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'avatarnews')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'avatarnews')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'avatarnews')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-white-bgcolor',
                'label' => __('Hover: White color fill', 'avatarnews')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'avatarnews')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'avatarnews')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'avatarnews')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'avatarnews')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('Hide bullet', 'avatarnews')
            )
        );
        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'avatarnews')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-size-small',
                'label' => __('Small Size', 'avatarnews')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-size-large',
                'label' => __('Large Size', 'avatarnews')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'avatarnews-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'avatarnews')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'avatarnews-page-list-bullet-hide-style-white-color',
                'label' => __('Hide Bullet Style with White Text Color', 'avatarnews')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'avatarnews-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'avatarnews')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'avatarnews-categories-bullet-hide-style-white-color',
                'label' => __('Hide Bullet Style with Text color White', 'avatarnews')
            )
        );
        register_block_style(
            'core/post-author-name',
            array(
                'name'  => 'author-name-with-icon',
                'label' => __('With Icon', 'avatarnews')
            )
        );
        register_block_style(
            'core/post-author-name',
            array(
                'name'  => 'author-name-with-white-icon',
                'label' => __('With White Icon', 'avatarnews')
            )
        );
        register_block_style(
            'core/post-date',
            array(
                'name'  => 'post-date-with-icon',
                'label' => __('With Icon', 'avatarnews')
            )
        );
        register_block_style(
            'core/post-date',
            array(
                'name'  => 'post-date-with-white-icon',
                'label' => __('With White Icon', 'avatarnews')
            )
        );
    }
    add_action('init', 'hello_agency_register_block_styles');
}

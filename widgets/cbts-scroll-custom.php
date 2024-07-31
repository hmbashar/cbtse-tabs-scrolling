<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class CB_Tabs_Scrolling extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'cbtse_tabs_scrolling';
    }

    public function get_title()
    {
        return __('CB Tabs with Scrolling', 'cbtse');
    }

    public function get_icon()
    {
        return 'eicon-tabs';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'cbtse'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->start_controls_tabs(
            'scrolling_tabs'
        );

        $repeater->start_controls_tab(
            'scrolling_normal_tab',
            [
                'label' => esc_html__('Content', 'cbtse'),
            ]
        );

        $repeater->add_control(
            'scrolling_title',
            [
                'label' => esc_html__('Title', 'cbtse'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('List Title', 'cbtse'),
                'label_block' => true,
            ]
        );


        // Fetch Elementor templates
        $templates = \Elementor\Plugin::instance()->templates_manager->get_source('local')->get_items();
        $template_options = ['' => 'Select Template'];
        if (!empty($templates)) {
            foreach ($templates as $template) {
                $template_options[$template['template_id']] = $template['title'];
            }
        }

        $repeater->add_control(
            'scrolling_template',
            [
                'label' => esc_html__('Template', 'cbtse'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => $template_options,
                'default' => '',
                'label_block' => true,
            ]
        );

        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'scrolling_style_tab',
            [
                'label' => esc_html__('Style', 'cbtse'),
            ]
        );
        $repeater->add_control(
            'list_color',
            [
                'label' => esc_html__('Color', 'cbtse'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'color: {{VALUE}}'
                ],
            ]
        );
        $repeater->end_controls_tab();

        $repeater->end_controls_tabs();


        $this->add_control(
            'scrolling_list',
            [
                'label' => esc_html__('Scrolling List', 'cbtse'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'scrolling_title' => esc_html__('Title #1', 'cbtse'),
                    ],
                    [
                        'scrolling_title' => esc_html__('Title #2', 'cbtse'),
                    ],
                ],
                'title_field' => '{{{ scrolling_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'menu_style_section',
            [
                'label' => __('Menu Style', 'cbtse'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs('menu_style_tabs');

        $this->start_controls_tab(
            'menu_normal_tab',
            [
                'label' => __('Normal', 'cbtse'),
            ]
        );

        $this->add_control(
            'menu_background_color',
            [
                'label' => __('Background Color', 'cbtse'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-effect-menu-area ul li a' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'menu_text_color',
            [
                'label' => __('Text Color', 'cbtse'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-effect-menu-area ul li a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'menu_padding',
            [
                'label' => __('Padding', 'cbtse'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-effect-menu-area ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'menu_border',
                'selector' => '{{WRAPPER}} .cbtse-gostan-scrolling-effect-menu-area ul li a',
            ]
        );

        $this->add_control(
            'menu_border_radius',
            [
                'label' => __('Border Radius', 'cbtse'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-effect-menu-area ul li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );



        $this->end_controls_tab();

        $this->start_controls_tab(
            'menu_hover_tab',
            [
                'label' => __('Hover', 'cbtse'),
            ]
        );

        $this->add_control(
            'menu_hover_background_color',
            [
                'label' => __('Background Color', 'cbtse'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-effect-menu-area ul li a:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'menu_hover_text_color',
            [
                'label' => __('Hover Text Color', 'cbtse'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-effect-menu-area ul li a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->add_control(
            'menu_hover_border_color',
            [
                'label' => __('Hover Border Color', 'cbtse'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-effect-menu-area ul li a:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        // New Content Style Section
        $this->start_controls_section(
            'content_style_section',
            [
                'label' => __('Content Style', 'cbtse'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'content_border',
                'label' => __('Border', 'cbtse'),
                'selector' => '{{WRAPPER}} .cbtse-gostan-scrolling-e-single-content-area',
            ]
        );

        $this->add_control(
            'content_border_radius',
            [
                'label' => __('Border Radius', 'cbtse'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-e-single-content-area' => 'border-radius: {{TOP}} {{RIGHT}} {{BOTTOM}} {{LEFT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'content_padding',
            [
                'label' => __('Padding', 'cbtse'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '{{WRAPPER}} .cbtse-gostan-scrolling-e-single-content-area' => 'padding: {{TOP}} {{RIGHT}} {{BOTTOM}} {{LEFT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        if (!empty($settings['scrolling_list'])): ?>
            <div class="cbtse-gostan-scrolling-effect-area">
                <div class="cbtse-gostan-scrolling-effect-menu-area">
                    <ul>
                        <?php foreach ($settings['scrolling_list'] as $index => $item):
                            $menu_id = 'content-' . ($index + 1);
                            ?>
                            <li><a href="#<?php echo esc_attr($menu_id); ?>"><?php echo esc_html($item['scrolling_title']); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="cbtse-gostan-scrolling-effect-contents-area">
                    <?php foreach ($settings['scrolling_list'] as $index => $item):
                        $menu_id = 'content-' . ($index + 1);
                        $template_id = $item['scrolling_template'];
                        $template_content = $template_id ? \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($template_id) : '';
                        ?>
                        <!-- Single Scrolling Content -->
                        <div class="cbtse-gostan-scrolling-e-single-content-area" id="<?php echo esc_attr($menu_id); ?>">
                            <?php if ($template_content) {
                                echo $template_content;
                            } else { ?>
                                <h2><?php echo esc_html($item['scrolling_title']); ?></h2>
                                <p><?php echo esc_html__('No content available', 'cbtse'); ?></p>
                            <?php } ?>
                        </div><!-- Single Scrolling Content -->
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <script>

            jQuery(document).ready(function ($) {
                const container = $('.cbtse-gostan-scrolling-effect-contents-area');
                const items = $('.cbtse-gostan-scrolling-e-single-content-area');
                const originalHeight = container.height();
                const gap = 30;
                const ratio = 4;
                const extraHeight = gap * ratio;
                const lastItem = items.last();
                const lastItemHeight = lastItem.outerHeight();
                let heightAdjusted = false;

                // Smooth scrolling for menu links
                $('.cbtse-gostan-scrolling-effect-menu-area a').on('click', function (event) {
                    event.preventDefault();
                    const target = $(this.getAttribute('href'));
                    if (target.length) {
                        $('html, body').stop().animate({
                            scrollTop: target.offset().top - container.offset().top + container.scrollTop()
                        }, 1000);
                    }
                });

                container.on('scroll', function () {
                    const containerTop = container.offset().top;
                    const containerScrollTop = container.scrollTop();
                    const containerHeight = container.height();
                    const containerScrollHeight = container[0].scrollHeight;

                    items.each(function (index) {
                        const item = $(this);
                        const topOffset = index * gap; // The first element gets 0, the second 30px, etc.
                        const itemOffsetTop = item.offset().top - containerTop;

                        if (itemOffsetTop <= topOffset) {
                            item.addClass('cbtse-gostan-position-fixed');
                            item.css('top', topOffset + 'px'); // Apply the calculated top offset
                            item.css('z-index', 100 + index); // Ensures the current item is on top
                        } else {
                            item.removeClass('cbtse-gostan-position-fixed');
                            item.css('top', ''); // Reset top value when not fixed
                            item.css('z-index', 99 + index); // Ensures the item is in view
                        }
                    });

                    // Adjust container height to accommodate the last item
                    if (!heightAdjusted && containerScrollTop + containerHeight >= containerScrollHeight - lastItemHeight) {
                        container.css('height', lastItemHeight + extraHeight + 50 + 'px').css('padding-bottom', 0);
                        heightAdjusted = false;
                    }

                    // Revert to original height when scrolling back to the top
                    if (heightAdjusted && containerScrollTop + containerHeight < containerScrollHeight - lastItemHeight) {
                        container.css('height', originalHeight).css('padding-bottom', '100px');
                        heightAdjusted = false;
                    }
                });
            });
        </script>

        <?php
    }

}
<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class CB_Tabs_Scrolling_Effect_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'cbtse_tabs_scrolling_effect';
    }

    public function get_title()
    {
        return __('CB Tabs with Scrolling Effect', 'cbtse');
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
        $repeater->add_control(
            'scrolling_menu_space',
            [
                'label' => esc_html__('Scroll Space', 'cbtse'),
                'type' => \Elementor\Controls_Manager::TEXT,
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
        $repeater->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'background',
                'types' => ['classic', 'gradient', 'video'],
                'exclude' => ['image'],
                'selector' => '{{WRAPPER}} .cbtse-gostan-scrolling-e-single-content-area{{CURRENT_ITEM}}',
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
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <section id="cbtse_slideup-content-wrapper">
            <div class="cbtse_container">
                <div class="cbtse_content-wrapper">
                    <div class="cbtse_tab-buttons">
                        <?php foreach ($settings['scrolling_list'] as $index => $item): ?>
                            <button class="cbtse_tab-button cbtse_tab-button<?php echo esc_attr($item['_id']); ?>" type="button"
                                data-id="<?php echo esc_attr($item['_id']); ?>"
                                data-scroll="<?php echo esc_attr($item['scrolling_menu_space']); ?>">
                                <?php echo esc_html($item['scrolling_title']); ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                    <div class="cbtse_slideup-contents">
                        <?php foreach ($settings['scrolling_list'] as $index => $item): ?>
                            <div class="cbtse_slideup-content elementor-repeater-item-<?php echo esc_attr($item['_id']); ?>">
                                <?php
                                if (!empty($item['scrolling_template'])) {
                                    echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($item['scrolling_template']);
                                } else {
                                    echo '<p>No template selected.</p>';
                                }
                                ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <script src="<?php echo CB_TABS_DIR_URL; ?>assets/js/gsap-latest-beta.min.js"></script>
        <script src="<?php echo CB_TABS_DIR_URL; ?>assets/js/ScrollSmoother.min.js"></script>
        <script src="<?php echo CB_TABS_DIR_URL; ?>assets/js/ScrollToPlugin.min.js"></script>
        <script src="<?php echo CB_TABS_DIR_URL; ?>assets/js/ScrollTrigger.min.js"></script>
        <script>
            // GSAP Smooth scroll
            gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
            // Slideup Section
            if (jQuery("#cbtse_slideup-content-wrapper").length !== 0) {
                const slideupSection = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#cbtse_slideup-content-wrapper",
                        start: "top top",
                        end: "+=" + jQuery(window).height() * 4,
                        scrub: 1,
                        pin: true,
                    },
                });
                gsap.set(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:not(:first-child)",
                    {
                        y: "100vh",
                    }
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(2)",
                    {
                        y: "35px",
                        delay: 0.5,
                        duration: 1,
                    }
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(1)",
                    {
                        scale: 0.95,
                        delay: 0,
                        duration: 0.5,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(3)",
                    {
                        y: "70px",
                        delay: 0.5,
                        duration: 1,
                    }
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(1)",
                    {
                        scale: 0.9,
                        delay: 0.5,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(2)",
                    {
                        scale: 0.95,
                        delay: 0.5,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(4)",
                    {
                        y: "105px",
                        duration: 1,
                    },
                    "+=1"
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(1)",
                    {
                        scale: 0.85,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(2)",
                    {
                        scale: 0.9,
                    },
                    "-=1"
                );
                slideupSection.to(
                    "#cbtse_slideup-content-wrapper .cbtse_slideup-content:nth-child(3)",
                    {
                        scale: 0.95,
                    },
                    "-=1"
                );
                // Tab buttons
                jQuery(".cbtse_tab-button").click(function () {
                    var scrollSpace = jQuery(this).data('scroll');
                    jQuery('html, body').animate({
                        scrollTop: scrollSpace
                    }, 500);
                });


            }
        </script>
        <?php
    }


}
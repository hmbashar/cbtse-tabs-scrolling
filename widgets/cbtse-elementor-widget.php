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
        return __('CB Tabs GSAP', 'cbtse');
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

        $repeater->start_controls_tabs('scrolling_tabs');

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
                                data-id="<?php echo esc_attr($item['_id']); ?>">
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
            jQuery(document).ready(function($) {
                gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

                const sections = gsap.utils.toArray(".cbtse_slideup-content");
                const buttons = gsap.utils.toArray(".cbtse_tab-button");

                // Create a timeline for the scrolling effects
                const slideupSection = gsap.timeline({
                    scrollTrigger: {
                        trigger: "#cbtse_slideup-content-wrapper",
                        start: "top top",
                        end: "+=" + $(window).height() * sections.length,
                        scrub: 1,
                        pin: true,
                    }
                });

                // Set initial Y position for all but the first section
                gsap.set(sections.slice(1), { y: "100vh" });

                // GSAP scroll animation between sections
                sections.forEach((section, index) => {
                    if (index > 0) {
                        slideupSection.to(section, { y: "0vh", duration: 1 }, `-=${0.5}`);
                    }
                });

                // Function to handle which button is active
                function setActiveButton(index) {
                    buttons.forEach((button, i) => {
                        if (i === index) {
                            button.classList.add('active');
                        } else {
                            button.classList.remove('active');
                        }
                    });
                }

                // ScrollTrigger to detect the most visible section and set the active button accordingly
                ScrollTrigger.create({
                    trigger: "#cbtse_slideup-content-wrapper",
                    start: "top top",
                    end: "+=" + $(window).height() * sections.length,
                    onUpdate: (self) => {
                        const activeIndex = Math.round(self.progress * (sections.length - 1));
                        setActiveButton(activeIndex);
                    }
                });

                // Button click event to scroll to respective section
                buttons.forEach((button, index) => {
                    button.addEventListener('click', function () {
                        gsap.to(window, {
                            scrollTo: {
                                y: sections[index],
                                autoKill: false
                            },
                            duration: 1
                        });
                    });
                });
            });
        </script>
        <?php
    }
}

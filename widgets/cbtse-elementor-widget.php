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
                        <button class="cbtse_tab-button cbtse_tab-button1" type="button">Menu One</button>
                        <button class="cbtse_tab-button cbtse_tab-button2" type="button">Menu Two</button>
                        <button class="cbtse_tab-button cbtse_tab-button3" type="button">Menu Three</button>
                        <button class="cbtse_tab-button cbtse_tab-button4" type="button">Menu Four</button>
                    </div>
                    <div class="cbtse_slideup-contents">
                        <div class="cbtse_slideup-content">
                            <h2>tab content 1 </h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, fuga illum. Illo neque
                                expedita ad commodi assumenda reprehenderit voluptate harum voluptatum id. Fugiat, iusto
                                corrupti molestias, dolore voluptates odit temporibus harum rerum voluptatibus repellat
                                distinctio. Reiciendis quo quis possimus voluptate ab deleniti provident saepe, enim deserunt
                                eum unde repudiandae sapiente, quae aliquid error iure sequi in odit, beatae exercitationem
                                minima facilis? Similique autem, quaerat vitae fuga minus, magni quisquam debitis repellat id,
                                tenetur beatae quod recusandae delectus dignissimos atque quo est cum necessitatibus molestiae
                                enim adipisci consequuntur? Illum adipisci molestias iure, vitae deserunt laborum quia nostrum.
                                Aut, ea, nostrum quo tenetur sed ipsam placeat tempora, quis deleniti alias expedita ab enim
                                iste voluptate voluptatem. Temporibus incidunt vitae sint porro, totam sunt! Laborum sapiente
                                porro accusantium doloribus molestias rerum voluptatibus soluta quisquam animi aliquam! Corrupti
                                ab amet ad? Dolor possimus quaerat doloribus provident voluptate delectus autem numquam qui quo
                                odit! Qui assumenda earum doloremque voluptatum reiciendis, cum facilis veniam optio recusandae
                                sint dignissimos in, aut impedit sequi cumque odio ipsum fuga animi atque id eveniet beatae
                                unde. Esse harum, est ducimus magni, quidem cupiditate nobis</p>
                        </div>
                        <div class="cbtse_slideup-content">
                            <h2>Tab content 2</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores impedit sit, dicta
                                recusandae voluptatibus ullam quia odit at vero quasi eos nisi minima officiis! Nostrum, facere
                                blanditiis nobis enim nemo impedit modi, temporibus magnam culpa nulla nam illum corrupti
                                numquam odio est laboriosam, recusandae adipisci alias itaque quia quisquam at fugiat sint.
                                Officiis, soluta aliquam repudiandae dolorum ullam laboriosam expedita ex cum perferendis esse
                                temporibus eligendi commodi ratione minus et nulla nesciunt consequuntur voluptatibus quia
                                distinctio sed recusandae. Ducimus accusantium minima sint, eum numquam unde voluptates. Aperiam
                                eveniet praesentium laborum! Nulla repudiandae rerum obcaecati fuga, ducimus enim vitae quasi
                                asperiores, aperiam dolor laboriosam unde eveniet accusantium pariatur, eligendi ipsa
                                cupiditate! Quam voluptatem autem harum tempora est ducimus, ratione dolor nostrum similique
                                omnis quaerat fugit ipsam molestias consectetur</p>
                        </div>
                        <div class="cbtse_slideup-content">
                            <h2>Tab content 3</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam iste sed id dolore repudiandae?
                                Illo hic eius nihil molestias officia magni distinctio praesentium tempore, magnam, illum
                                molestiae accusantium laboriosam adipisci placeat a dolore. Sapiente amet asperiores officia
                                illum ullam architecto similique placeat, minima tempore expedita reprehenderit neque tenetur
                                nam provident ea iure accusamus cum voluptates perspiciatis numquam? Optio culpa maxime
                                temporibus debitis, id velit repellat eos labore, soluta ex cumque ipsam quibusdam quasi.
                                Laboriosam consectetur ex quod facilis voluptatum cupiditate totam doloremque, minus
                                perferendis, et, illum laborum a optio quaerat veritatis iste animi sequi nam perspiciatis
                                delectus doloribus ea magnam voluptate! Ratione exercitationem accusamus quae numquam nesciunt?
                                Laboriosam pariatur, deleniti quam culpa praesentium cupiditate impedit itaque amet ab iure
                                aliquam dignissimos quod incidunt architecto molestias voluptatem. Recusandae, est eum!
                                Recusandae molestiae culpa, ab sint ipsum dolorem sapiente maxime perspiciatis nulla! Dolores
                                fuga nesciunt laboriosam sunt eaque. Aliquid recusandae natus tenetur optio quos ullam atque
                                eaque, possimus reprehenderit officia enim vitae nostrum fuga expedita ipsa saepe, explicabo
                                sapiente. Impedit quisquam doloremque quis reiciendis corporis, tempore soluta perferendis eius
                                est beatae modi labore! Facere eveniet dolorem,</p>
                        </div>
                        <div class="cbtse_slideup-content">
                            <h2>Tab Content 3</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ratione velit laborum dolorem quae
                                pariatur id aspernatur. Temporibus nulla eaque, ratione id officiis odit nostrum, doloremque
                                laudantium tempora enim distinctio aliquid non illum, quod voluptatibus! Distinctio beatae,
                                nesciunt illo voluptatem nemo unde earum voluptatibus alias velit magnam! Cumque deserunt
                                nostrum nisi harum. Ab vel eos eius odio inventore accusantium maiores nam, commodi tenetur
                                facere quod adipisci earum distinctio id consequuntur quis veniam? Mollitia illum fugiat ratione
                                dolorum saepe! Aliquam nobis, minus ex illo et ducimus vel repudiandae voluptates iusto aliquid
                                corrupti sequi inventore rerum sunt dolor perspiciatis! Amet illo rem atque in autem
                                exercitationem perferendis, officia id aspernatur! Rerum itaque adipisci earum amet, in eos quae
                                suscipit perferendis odit? Praesentium voluptatum adipisci hic tempora at dolor fuga? Non
                                ratione maiores exercitationem dolorem temporibus inventore eaque alias debitis minima?
                                Voluptatibus doloremque commodi, ut, id laboriosam, voluptates adipisci mollitia est a dolorum
                                vero cupiditate sed? Et minima facere beatae illo eaque ipsum laudantium doloremque,
                                perspiciatis eum incidunt quod est molestias non delectus quis reprehenderit quasi quos eveniet?
                                Officia, tempore debitis? Provident optio facere molestiae et ea qui ad, nulla ducimus autem
                                debitis! Omnis illum voluptates voluptas nemo ad,</p>
                        </div>
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
                jQuery(".cbtse_tab-button1").click(function () {
                    jQuery('html, body').animate({
                        scrollTop: 0
                    }, 500);
                });

                jQuery(".cbtse_tab-button2").click(function () {
                    jQuery('html, body').animate({
                        scrollTop: 1100
                    }, 500);
                });

                jQuery(".cbtse_tab-button3").click(function () {
                    jQuery('html, body').animate({
                        scrollTop: 2250
                    }, 500);
                });

                jQuery(".cbtse_tab-button4").click(function () {
                    jQuery('html, body').animate({
                        scrollTop: 4500
                    }, 500);
                });
            }
        </script>

        <?php
    }

}
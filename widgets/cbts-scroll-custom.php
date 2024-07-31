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
				'label' => esc_html__( 'Content', 'cbtse' ),
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
    $templates = \Elementor\Plugin::instance()->templates_manager->get_source( 'local' )->get_items();
    $template_options = [ '' => 'Select Template' ];
    if ( ! empty( $templates ) ) {
        foreach ( $templates as $template ) {
            $template_options[ $template['template_id'] ] = $template['title'];
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
				'label' => esc_html__( 'Style', 'cbtse' ),
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
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
       
        <div class="cbtse-gostan-scrolling-effect-area">
            <div class="cbtse-gostan-scrolling-effect-menu-area">
                <ul>
                    <li><a href="#content-1">Menu 1</a></li>
                    <li><a href="#content-2">Menu 2</a></li>
                    <li><a href="#content-3">Menu 3</a></li>
                    <li><a href="#content-4">Menu 4</a></li>
                    <li><a href="#content-5">Menu 5</a></li>
                </ul>
            </div>
            <div class="cbtse-gostan-scrolling-effect-contents-area">
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-1">
                    <h2>This is content here from first heading 1</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum
                        praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi
                        reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis
                        fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio
                        possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt
                        excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel
                        cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum
                        odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error
                        consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus
                        maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-2">
                    <h2>This is content here from first heading 2</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum
                        praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi
                        reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis
                        fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio
                        possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt
                        excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel
                        cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum
                        odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error
                        consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus
                        maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-3">
                    <h2>This is content here from first heading 3</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum
                        praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi
                        reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis
                        fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio
                        possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt
                        excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel
                        cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum
                        odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error
                        consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus
                        maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-4">
                    <h2>This is content here from first heading 4</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum
                        praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi
                        reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis
                        fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio
                        possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt
                        excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel
                        cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum
                        odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error
                        consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus
                        maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
                <!--Single Scrolling Content-->
                <div class="cbtse-gostan-scrolling-e-single-content-area" id="content-5">
                    <h2>This is content here from first heading 5</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum
                        praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi
                        reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis
                        fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio
                        possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt
                        excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel
                        cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum
                        odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error
                        consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus
                        maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, ullam vero blanditiis error ipsum
                        praesentium reiciendis distinctio commodi vel nihil veritatis, pariatur magni, corrupti sequi
                        reprehenderit iste eaque quae? Officiis aperiam eius perspiciatis quidem at autem, explicabo veritatis
                        fuga quam amet aut commodi quas praesentium nisi ab dolore harum recusandae nesciunt molestias vel odio
                        possimus ad voluptatem velit. Officiis blanditiis esse nisi aliquid nesciunt tenetur saepe sunt
                        excepturi ducimus, molestias quidem ratione corrupti alias velit incidunt laudantium aspernatur sed vel
                        cumque. Labore ea corporis aliquam perferendis harum cumque ducimus deleniti culpa ipsum minima, rerum
                        odio laborum fugiat, nostrum neque ab assumenda esse accusamus impedit? Earum laboriosam error
                        consequatur dolorem molestiae, amet aliquam dolores cumque aliquid necessitatibus optio temporibus
                        maxime recusandae harum similique quaerat sapiente? Deleniti odio illum recusandae quisquam atque,</p>
                </div><!--Single Scrolling Content-->
            </div>
        </div>
        
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